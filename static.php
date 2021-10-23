<?php 
//the purpose to use static is that you don't have to create instance , 设置静态的不会改变的东西
//在static function 里面回召class , 用 self:: 方式。 
//static 在外面 召唤变量时候要加变量符， 直接实例化后引用的话不用 
//在class 外面调出 static的属性， 用 user::$username; 方式 

class user {

	public $username;
	public $password;

	public static $passlenth = 5;

	public static function getWordLenth() {
		return self::$passlenth;
	}

}

echo user::$passlenth;
