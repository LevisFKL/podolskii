<?php namespace podolskii;

use core\LogAbstract;
use core\LogInterface;
use DateTime;


Class MyLog extends LogAbstract implements LogInterface {

    public function _log(String $str){
        $this->log[]=$str;
    }

    public static function log(string $str):void{
        self::Instance()->_log($str);
	}
    
    public function _write(){

        foreach($this->log as $value){
            echo $value."\r\n";
        }

        


    }
    
    public static function write():void{
        self::Instance()->_write();
    }

}

?>