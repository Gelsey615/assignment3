<?php
	// This is the file for the parent class

	class SimpleCalc {
		public $result;

 		public function __construct(){
			$this->result=0.0000001;
 		}

 		public function add($n1, $n2){
		  $this->result=$n1+$n2;
 			return $this->result;
 		}
		public function sub($n1, $n2){
			$this->result=$n1-$n2;
 			return $this->result;
 		}

 		public function __toString(){
			echo "<h2>The output is ".$this->result.".</h2>";
		}
	}
?>
