<?php
include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'getConfig.php';

class dbConnect{

	public static $_connection;
	public static $_select_db;
	
	//fungsi koneksi
	private static $_cekInstance;
	protected static $_conn=0;
	protected $konek 	= "";
	public function __construct(){}
	public static function getConnection(){
		
		if(!self::$_connection){
			
			//ambil semua konfigurasi di config
			$dbDns  = Config::getConfig('dbdns');
			$dbPass	= Config::getConfig('dbpass');
			$dbUser	= Config::getConfig('dbuser');
			
			//now koneksi dengan PDO
			try{
				self::$_connection= new PDO($dbDns,$dbuser,$dbUser);
				if(self::$_connection===FALSE){
			
					throw new Exception("Koneksi Gagal");
				
				}else{
				
					$this->konek = self::$_connection;
				}
			}
			catch(PDOException $e){
				
				echo "Error : ".$e->getMessage()."<br/>";
			}
		}
		
		return self::$_connection;
	}
	
	
	public static function cekInstance(){
		
		if(is_null(self::$_cekInstance)){
			
			self::$_cekInstance = new self();
		}
		return self::$_cekInstance;
	}
	
	//Close koneksi
	
	public static function closeConnection(){
	
		$this->konek = NULL; 
	}

}
