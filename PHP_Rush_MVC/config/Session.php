<?php

class Session
{
		
		public static function read($key){
			$returnArray = explode(".",$key); // array(auth, ,user,id)
			$var = $_SESSION;
			 foreach($key as $value)
			{
				$var = $var[$value];
			
			}
			return $var;
		}
		public static function write($key, $value){
			$_SESSION[$key] = $value;
   			return $_SESSION[$key];
		}
	
		public static function delete(){
			session_unset();
		}

		public static function destroy(){
			session_destroy();
		}
	
		public static function load(){
			session_start();
		}
	

}

?>