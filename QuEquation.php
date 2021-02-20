<?php namespace podolskii;

use core\EquationInterface;

Class QuEquation extends Equation implements EquationInterface{
	

	
	public function solve($a, $b, $c):array{

		$x = $this->dis($a, $b, $c);

	    if($a == 0){
	        return $this->one_solve($b,$c);
	    }
        MyLog::log("Определено, что это квадратное уравнение");
		if ($x > 0){
		    return $this->X=array(
		        (-$b+sqrt($x))/(2*$a),
                (-$b-sqrt($x))/(2*$a)
		        );
		}
		
		if($x == 0){
			return $this->X=array(-($b/(2*$a)));
		}

		throw new PodolskiiException("Ошибка: уравнение не имеет корней.");
		
	}

    protected function dis($a, $b, $c){
        return $a = ($b**2)-4*$a*$c;
    }
	
}

?>