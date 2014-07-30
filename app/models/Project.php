<?php
	class Project extends Eloquent{

		protected $fillable = array('name', 'description', 'study_date');

		public function scores()
		{
			return $this->hasMany("Score");
		}

		public static function boot()
		{
			parent::boot();

			static::saved(function($project){
				Log::error("Project saved");
			});
		}

		public static function calculateSUS()
		{
			$scores = $this->scores;

			$combinedSUS = 0;

			foreach($scores as $score)
			{
				$combinedSUS += $score->calculateSUS();
			}

			$this->sus = $combinedSUS / count($scores);
		}



		public static $rules = array(
			'name' => 'required|min:5');
	}
?>
