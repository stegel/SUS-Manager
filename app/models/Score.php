<?php
	class Score extends Eloquent{

		protected $fillable = array('q1','q2','q3','q4','q5','q6','q7','q8','q9','q10');

		public function project()
		{
			return $this->belongsTo("Project");
		}

		public function calculateSUS()
		{
			$odds = ($this->q1 + $this->q3 + $this->q5 + $this->q7 + $this->q9)-5;
			$evens = 25-($this->q2 + $this->q4 + $this->q6 + $this->q8 + $this->q10);
			return ($odds+$evens)*2.5;
		}

		public static $rules = array(
			'q1' => 'required|min:1|max:5',
			'q2' => 'required|min:1|max:5',
			'q3' => 'required|min:1|max:5',
			'q4' => 'required|min:1|max:5',
			'q5' => 'required|min:1|max:5',
			'q6' => 'required|min:1|max:5',
			'q7' => 'required|min:1|max:5',
			'q8' => 'required|min:1|max:5',
			'q9' => 'required|min:1|max:5',
			'q10' => 'required|min:1|max:5',
			);
	}
?>
