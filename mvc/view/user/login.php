<?
if (isset($_SESSION['email'])){
  $message = _already_logged_in . ' ' . $_SESSION['email'];
 // require_once('msg-success.php');
  message('success', $message, true);
  exit;
}
?>
<div class="tac">
  <img src="<?=baseUrl()?>/image/logo-129.png"><br><br>

  <form action="<?=baseUrl()?>/user/login" method="post">
    <input type="text" class="ltr" placeholder="<?=_ph_email?>" name="email"><br>
    <br>
    <input type="password" class="ltr" placeholder="<?=_ph_password?>" name="password"><br>
    <br>
    <br>
    <button type="submit" class="btn-blue"><?=_btn_login?></button>
  </form>

  <br>
  <br>
  <br>
  <a href="<?=baseUrl()?>/user/register" class="link-gray"><?=_btn_signup?></a>
</div>
