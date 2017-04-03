<?php
	// this file will extend PArentClass.php

	class ComplexCalc extends SimpleCalc {
		static $results = 0;
		function __construct(){
 			parent::__construct();
 		}

		function __clone() {
        $this->result = ++self::$results;
    }

		function multiply($n1, $n2){
			$product=0;
 			for($i=1; $i<=$n2; $i++){
 				$product = parent::add($product, $n1);
 			}
			$this->result=$product;
			return $this->result;
 		}

		function divide($n1, $n2){
			$i=0;
 			while($n1 >= $n2){
				$n1=parent::sub($n1, $n2);
				$i++;
			}
			$this->result=$i;
			return $this->result;
		}

		function __toString(){
			return "<h2>".parent::__toString()."</h2>";
		}
	}
?>
