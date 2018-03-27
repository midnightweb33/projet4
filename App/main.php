<?php

	namespace App;

class Main{

	const DB_NAME='blog';
	const DB_HOST='localhost';
	const DB_USER='root';
	const DB_PASS='';

	private static $dataBase;

	public static function getDataBase(){
		if(self::$dataBase=== null)
			{
				self::$dataBase= new Database(self::DB_NAME,self:: DB_USER,self::DB_PASS,self::DB_HOST);
			}
		return  self::$dataBase;
	}
}