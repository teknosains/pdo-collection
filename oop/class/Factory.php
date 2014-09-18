<?php 

Class Factory{

	/*
		- Factory class untuk Load Class Lain + Buatin Object nya
	*/
	private   static $_instance = array();
	protected static $_classPath='';
	protected static $_class    ='';
	public static function getClass($class,$option=array()){
			
			$dataClass = serialize(array(
						
					'className' =>$class,
					'option'	=>$option,
			));
			
		
		if(empty(self::$_instance[$dataClass])){
			
			
			self::$_classPath = dirname(__FILE__).DIRECTORY_SEPARATOR.''.$class.'.php';
			//exit( self::$_classPath);
			self::$_class	  = $class;
			include_once self::$_classPath;
			self::$_instance[$dataClass] = new $class($option);
		}
		
		return self::$_instance[$dataClass];
	}
	
	
}