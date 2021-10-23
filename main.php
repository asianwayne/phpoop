class种类分 一般的class, extends 继承的class, 和abstract 抽象的class. 继承的class 用parent::__construct集成参数，abstract的class 无法实例化，只能用做继承。 

class 参数定义的时候可以设置默认的值， 比方说  private $uid = 1; 
class 里面的参数和函数的设置属性有private \ public \ protected \ static 四种。 
最最常见的是public， 也是默认的 状态， private 的状态意思就是无法直接从class外执行。
protected 状态意思就是你无法从外面执行但是你可以通过extends的class 来继承执行。 

__construct() {} 函数是最先加载的函数， 可以传递到实例化的class的参数里， 来设置和定义参数。 如下面的代码。 

__desruct（）{} 和construct 是一样 但是是最后执行的。


<?php 
//__construct 和desruct() 是 magic methods;
//abstract methods    无法实例化 只能用作extends  是抽象类
class Customer{
	private $uid = 1;  //this set the valuble to default, public you can access the propety from outside of the class
	public $name;  //private meas you can't access the class from outside 
	protected $email;  //protected meads you can not access the class from outside but you can access it from extend class 

	public $balance;
	public function __construct($uid,$name,$email,$balance) {
		$this->uid = $uid;
		$this->name = $name;
		$this->email = $email;
		$this->balance = $balance;

	}

	abstract public function getCustomer($id) {
		$this->uid = $id;  //if you want to access the class  this is the way. $this means the instantial class 
		return "John doe";

	}	
}

//$customer = new Customer();

class Subscriber extends Customer {
	public $plan;
	//inheritance 
	public function __construct($uid,$name,$email,$balance,$plan) {
		parent::__construct($uid,$name,$email,$balance);  //这样就传递了来自母class的 四个参数 
		$this->plan = $plan; 
	}

	public function getEmail() {
		return $this->email;
	}
}

$subscriber = new Subscriber(1,"wayne","atha@eda.dcom","18",'pro');


echo "</br>";
//echo $customer->getEmail();
//echo $customer->name;  //这里是定义的default uid value

//echo $customer->getCustomer(10);  // this is the value from getcustomer function which has changed the value of uid 

echo $subscriber->getEmail();
