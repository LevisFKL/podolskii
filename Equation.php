<?php namespace podolskii;

Class Equation{
	public function one_solve($a, $b){
			
			if($a == 0){
                throw new PodolskiiException("Ошибка: уравнения не существует.");
			}
            MyLog::log("Определено, что это линейное уравнение");
			return $this->X=array(-($b/$a));
	}
	
	protected $X;
}

?>