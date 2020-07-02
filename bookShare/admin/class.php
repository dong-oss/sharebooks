
<?php
class Login{
	private $name;
	private $pass;
	private $localhost;
	private $username;
	private $pwd;
	private $dbname;
	private $conn;
	private $code;
	public function __construct($localhost,$username,$pwd,$dbname,$code,$na,$pas){
		$this->localhost=$localhost;
		$this->username=$username;
		$this->pwd=$pwd;
		$this->dbname=$dbname;
		$this->code=$code;
		
		$this->name=$na;
		$this->pass=$pas;
	}
	public function connect(){
		$this->conn=mysqli_connect($this->localhost,$this->username,$this->pwd,$this->dbname)or
		die("Connect MySQL False");
		mysqli_query($this->conn,"set name $this->code");
		return $this->conn;
	}
	
	public function empt(){
		if($this->name==null||$this->pass==null){
        	echo "<script language='javascript'>alert('用户名或密码为空');history.back();</script>";
    	}else{
        	return true;
    	}
	}
	
	public function ckuser(){
		$conn=$this->connect();//mysqli_connect("localhost","root","qsE7ETrjvvLntHP4","db_user01")or die("连接数据库服务器失败！".mysqli_error());
		mysqli_query($conn,"set names utf8");
    	$sql=mysqli_query($conn,"select * from tb_admin01 where adminname='{$this->name}'");
    
    	$info=mysqli_fetch_array($sql);
    	if($info==false){
        	echo "<script language='javascript'>alert('该管理员不存在!');history.back();</script>";
		}else {
			if($info['password']==$this->pass){
				return true;
	    	}else {
				echo "<script language='javascript'>alert('密码输入错误!');history.back();</script>";
			}
		}
	}
	public function log(){
		if($this->empt()){
    
        	if($this->ckuser()){
        		
            	
            	return true;
              
        	}
    	}
	}
}
?>
