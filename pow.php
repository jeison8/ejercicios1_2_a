<?php 

/**
 * 
 */
class Power 
{
	
	public $number_1;
	public $number_2;


	public function __construct($number_1,$number_2)
	{
		$this->number_1 = $number_1;
        $this->number_2 = $number_2;
	}


	public function elevar(){

		$r = 1; 
        for($i=0; $i < $this->number_2; $i++){
            $r = $this->multiplicacion($r,$this->number_1); 
        }

      	echo $r;
	}


	public function multiplicacion($r, $b){

        $s=0; 
        for($i=0;$i<$r;$i++){
            $s = $s + $b; 
        }

        return $s; 
    }


}

	$result = new Power(2,5);
	$result->elevar();

 ?>