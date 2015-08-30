<?php
class UserController
{
  public function __construct(){

  }


  public function logout(){
    session_destroy();
    header("Location: " . fullBaseUrl() . "/user/login");
  }
public function  profile($p1,$p2,$p3){


  echo "show profile";
  echo $p1.$p2.$p3;
}

public function login(){

if(isset($_POST['email'])){
$this->loginCheck();
}
  else
  {
   $this->loginForm();
  }

}


  private  function loginCheck(){

    $email=$_POST['email'];
    $password=$_POST['password'];

    $record = UserModel::fetch_by_email($email);

    if ($record == null) {
      message('fail', _email_not_registered, true);
    } else {
      $hashedPassword = encryptPassword($password);
      if ($hashedPassword == $record['password']) {
        $_SESSION['email'] = $record['email'];
        $_SESSION['user_id'] = $record['user_id'];
        message('success', _login_welcome, true);
      } else {
        message('fail', _invalid_password, true);
      }
    }

    return;
  }

  private function  loginForm(){
    $data['test'] = array();
    $themecheck="user";
    View::render("/user/login.php" ,$themecheck,$data);

  }

  public  function register(){
    if(isset($_POST['email'])){
    $this->registerCheck();}
    else {

      $this->registerForm();
    }
  }


  private  function registerCheck(){
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $name = $_POST['fullname'];
    $time = getCurrentDateTime();

    $record = UserModel::fetch_by_email($email);
    if ($record != null){
      message('fail', _already_registered, true);
    }

    if (strlen($password1)<3 || strlen($password2)<3){
      message('fail', _weak_password, true);
    }

    if ($password1 != $password2){
      message('fail', _password_not_match, true);
    }

    $hashedPassword = encryptPassword($password1);

    UserModel::insert($email, $name, $hashedPassword, $time, $time);

    message('success', _successfully_registered);
  }


 private function registerForm(){
   $themecheck="register";
   View::render("/user/register.php",$themecheck, array());

 }










}