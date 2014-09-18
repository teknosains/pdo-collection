<?php
	
class Config{

	protected static $_config = array();
	
	public static function getConfig($key){
		
		//cek dulu apakah .ini sdh dibaca / belom
		if(!self::$_config){
		
			$config_file = '../config/config.ini';  //set direktori file config.ini nya
			$config		 = parse_ini_file($config_file);    //baca file .ini
				
				if(FALSE === $config){
				
					print('Baca File config.ini gagal');
				}
			self::$_config = $config;
				
		}
		if((self::$_config[$key])){
			
			return self::$_config[$key];
		}

	}

}