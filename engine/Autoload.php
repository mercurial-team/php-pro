<?php

//namespace app\engine;

class Autoload
{
    /*private $path = [
      'models',
      'engine',
      'interfaces'
    ];

    public function loadClass($className) {
        foreach ($this->path as $path) {
            $fileName = "../{$path}/{$className}.php";
            var_dump($fileName);
            if (file_exists($fileName)) {
                include $fileName;
                break;
            }
        }

    }
	*/
	public function loadClass($className) {
		$fileName = "../{$className}.php";
		
		$trans = array("\\" => "/", "../app" => "..");
		$fileName = strtr($fileName, $trans);
		//echo 'АаАаАа подключили: <br>';
        // var_dump($fileName);
		//echo '<br>';
		include $fileName;
	}
}