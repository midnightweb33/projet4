<?php 

	namespace App\Table;

	use App\Main;
	class Article
	{
		public static function getLast(){
			return Main::getDataBase()->query('SELECT * FROM posts',__CLASS__);
		}
		/* funtion methode magique qui me permet de mettre $->url au lieu 	                                         de $post->getUrl()
		public function __get($key){
			$method='get'.ucfirst($key);
			$this->$key = $this->$method;
			return $this->$key;
		}*/

		public function getUrl(){
			return 'index.php?p=post&id=0'.$this->id;
		}

		public function getExtract(){

			$html= '<p>'.substr($this->content,0,250).'...</p>';
			$html .= '<p><a href="'.$this->getUrl().'">Voir la suite</a></p>';
			return $html; 
		}
	}
