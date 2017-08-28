<?php 
namespace app\models\Fost;

use app\models\Isort;

class fost implements Isort{
	public function sort($array){
		$len = count($array);
    	for ($i=1; $i < $len; $i++) { 
    		for ($k=0; $k < $len-$i; $k++) { 
    			if ($array[$k]>$array[$k+1]) {
    				$a = $array[$k+1];
    				$array[$k+1] = $array[$k];
    				$array[$k] = $a;
    			}
    		}
    	}
    	return $array;
	}
}

 ?>