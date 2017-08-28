<?php 
namespace app\models;
use app\models\Fost;

class Sort extends \yii\base\Object{
	private $_array;                 

    public function getArray(){
        return $this->_array;
    }

    public function setArray($array){
        $this->_array = $array;
    }

}


