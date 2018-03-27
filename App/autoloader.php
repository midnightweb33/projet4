<?php 
namespace App;	
/**
 * Class autoloader
*/	
	class autoloader{
	/**
	 * Enregistre notre autoloader
	*/
		static function register(){
			spl_autoload_register(array(__CLASS__,'autoload'));
		}
	/**
	 * inclue le fichier correspondant à notre class
	 * @param $class string Le nom de la classe à charger
	*/
		static function autoload($class){
			if(strrpos($class, __NAMESPACE__.'\\')===0){
				
				$class=str_replace(__NAMESPACE__, '\\', $class);
				
				$class=str_replace('\\', '/', $class);
				
				
				require __DIR__.'/'.$class.'.php';

			}
		}
	}
?>