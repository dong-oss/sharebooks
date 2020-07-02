<?php
class Login{
	private $name;
	private $pass;
	private $autologin;
	
	private $localhost;
	private $username;
	private $pwd;
	private $dbname;
	private $conn;
	private $code;
	public function __construct($localhost,$username,$pwd,$dbname,$code,$na,$pas,$auto){
		$this->localhost=$localhost;
		$this->username=$username;
		$this->pwd=$pwd;
		$this->dbname=$dbname;
		$this->code=$code;
		
		$this->name=$na;
		$this->pass=$pas;
		$this->autologin=$auto;
	}
	public function connect(){
		$this->conn=mysqli_connect($this->localhost,$this->username,$this->pwd,$this->dbname)or
		die("Connect MySQL False");
		mysqli_query($this->conn,"set name $this->code");
		return $this->conn;
	}
	
	public function add($sql,$conn){
		$rs=mysqli_query($conn,$sql);
		return $rs;
	}
	
	public function delete($sql,$conn){
		$rs=mysqli_query($conn,$sql);
		return $rs;
	}
	
	public function select($sql,$conn){

		$rs=mysqli_query($conn,$sql);
		while($array=mysqli_fetch_array($rs)){
			$arrayData[]=$array;	
		}
		if (count($arrayData)==0||$rs==false){
			return false;
		}else{
			return $rs;
		}
	}
	
	public function change($sql,$conn){
		$rs=mysqli_query($conn,$sql);
		return $rs;
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
    	$sql=mysqli_query($conn,"select * from tb_user01 where username='{$this->name}'");
    
    	$info=mysqli_fetch_array($sql);
    	if($info==false){
        	echo "<script language='javascript'>alert('不存在此用户!');history.back();</script>";
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
        		session_start();   
            	$_SESSION['username']=$this->name;  
            	if($this->autologin==1){                
                	setcookie("username",$this->name,time()+3600*24*3);   
                	setcookie("password",md5($this->pass),time()+3600*24*3);
            	}else{
                	setcookie("username","",time()-1);   
                	setcookie("password","",time()-1);
            	}
            	return true;
            //header("location: Dingdan.php ");            
        	}
    	}
	}
}

class Regst{
	
	private $newuser;
	private $newpass;
	private $phoe;
	private $emai;
	private $ts;
	private $tsd;
	
	private $localhost;
	private $username;
	private $pwd;
	private $dbname;
	private $conn;
	private $code;
	public function __construct($na,$pas,$ph,$em,$tss,$tsds,$localhost="localhost",$username="root",$pwd="root",$dbname="db_user01",$code="utf8"){
		$this->localhost=$localhost;
		$this->username=$username;
		$this->pwd=$pwd;
		$this->dbname=$dbname;
		$this->code=$code;
		
		$this->newuser=$na;
		$this->newpass=$pas;
		$this->phone=$ph;
		$this->emai=$em;
		$this->ts=$tss;
		$this->tsd=$tsds;
	}
	public function connect(){
		$this->conn=mysqli_connect($this->localhost,$this->username,$this->pwd,$this->dbname)or
		die("Connect MySQL False");
		mysqli_query($this->conn,"set names $this->code");
		return $this->conn;
	}
	public function add(){
		//if($this->empt()) {
			$conn=$this->connect();
			$sql="insert into tb_user01 values('','{$this->newuser}','{$this->newpass}','{$this->phone}','{$this->emai}','{$this->ts}','{$this->tsd}')";
			$rs=mysqli_query($conn,$sql);
			return $rs;
		//}
	}
	
}
class chkchange
   {
	   private $name;
	   private $oldpwd;
	   private $newpwd;
	   function chkchange($x,$y,$z)
	    {
		  $this->name=$x;
		  $this->oldpwd=$y;
		  $this->newpwd=$z;
		}
	   function changepwd(){
	   	include("conn/conn.php");
	    $sql=mysqli_query($conn,"select * from tb_user01 where username='".$this->name."'");
	    $info=mysqli_fetch_array($sql);
		if($info['password']!=$this->oldpwd)
		 {
		   echo "<script>alert('原密码输入错误!');history.back();</script>";
		   exit;
		 }
		 else
		 {
		   mysqli_query($conn,"update tb_user01 set password='$this->newpwd' where username='$this->name'");
		   echo "<script language='javascript'>alert('密码已修改！请重新登录！！');window.location.href='login.php';</script>";
		   exit;
		 }
	   }
  }
?>