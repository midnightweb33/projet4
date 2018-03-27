<?php 

	namespace App\Table;

	use App\App;

	class categorie {

		private static $table='categories';

		public static function all()
		{
			return App::getDb()->query("
				SELECT * FROM .$self::$table."
				,__CLASS__)
		}
	}