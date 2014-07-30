<?php
	use Carbon\Carbon;

	class Score extends Eloquent{

		protected $fillable = array('q1','q2','q3','q4','q5','q6','q7','q8','q9','q10');

		public function project()
		{
			return $this->belongsTo("Project");
		}

		public static function calculateSUS($score)
		{
			$odds = ($score->q1 + $score->q3 + $score->q5 + $score->q7 + $score->q9)-5;
			$evens = 25-($score->q2 + $score->q4 + $score->q6 + $score->q8 + $score->q10);
			return ($odds+$evens)*2.5;
		}

		public function getCreatedAtAttribute($attr) {
        return Carbon::parse($attr)->format('Y-m-d @ h:ia'); //Change the format to whichever you desire
    }

		public static function boot()
		{
			parent::boot();

			static::saving(function($score){
				$score->sus = $score->calculateSUS($score);
			});

			static::saved(function($score){

				if($score->project_id)
				{
					$project = $score->project;

					$combinedSUS = 0;

					foreach($project->scores as $projectScore)
					{
							Log::error($projectScore->sus);
							$combinedSUS += $projectScore->sus;
					}

					$project->sus = $combinedSUS / count($project->scores);

					$project->save();

				}
			});
		}

		public static $rules = array(
			'q1' => 'numeric|required||between:1,5',
			'q2' => 'numeric|required||between:1,5',
			'q3' => 'numeric|required||between:1,5',
			'q4' => 'numeric|required||between:1,5',
			'q5' => 'numeric|required||between:1,5',
			'q6' => 'numeric|required||between:1,5',
			'q7' => 'numeric|required||between:1,5',
			'q8' => 'numeric|required||between:1,5',
			'q9' => 'numeric|required||between:1,5',
			'q10' => 'numeric|required||between:1,5',
			);
	}
?>
