<?
require_once('main.php');
$db= Db::getInstance();
$email=$_POST['email'];
$fullname=$_POST['fullname'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
$time=getCurrentDateTime();
$db=Db::getInstance();
$record=$db->first("SELECT * FROM x_user WHERE email='$email'");
if($record!=null){
  $message="You're Already Registered";
  require_once ("msg-faild.php");
  exit;
}


if(strlen($password1)<3 || strlen($password2)<3 )

{
  $message="Password aren't strong enought";
  require_once ("msg-faild.php");
exit;
}
if($password1 != $password2){

  $message="Passwords not mached";
  require_once ("msg-faild.php");
  exit;

}
global $config;
$hashedPassword=md5($password1.$config['salt']);
$db->insert("INSERT INTO x_user (email,fullname,password,registerTime,lastVisitTime) VALUES ('$email','$fullname','$hashedPassword','$time','$time')");
$message="You are successfully Registered. Please ".'<a href="login.php">login</a>';
require_once ("msg-success.php");
exit;
?>