<?
require_once('main.php');
$db= Db::getInstance();
$email=$_POST['email'];
$password=$_POST['password'];
echo $email;
br();
echo $password;

$db=Db::getInstance();
$record=$db->first("SELECT * FROM x_user WHERE email='$email'");
if($record==null)

{
  $message="Login Failed, Check your Email and password. ";
  require_once("msg-faild.php");
exit;
}
else
{
  global $config;
  $hashedPassword=md5($password . $config['salt']);
  if($hashedPassword==$record['password'])
  {
    $_SESSION['email']=$record['email'];
    $_SESSION['user_id']=$record['user_id'];
$message="Congratulation,You are welcome".'<a href="home.php"> Visit Homepage</a> OR <a href="logout.php">Logout</a>';
    require_once("msg-success.php");
    exit;
  }
  else{
    $message="Password is incorrect";
    require_once("msg-faild.php");
exit;
  }
}
























