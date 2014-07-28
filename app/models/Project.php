<?php
	class Project extends Eloquent{

		protected $fillable = array('name', 'description');

		public function scores()
		{
			return $this->hasMany("Score");
		}

		public function calculateSUS()
		{
			$scores = $this->scores;

			$combinedSUS = 0;

			foreach($scores as $score)
			{
				$combinedSUS += $score->calculateSUS();
			}

			return round(($combinedSUS / count($scores)),2);
		}	

		public static $rules = array(
			'name' => 'required|min:5');
	}
?>
