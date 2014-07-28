<?php
	class Score extends Eloquent{

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
	}
?>
