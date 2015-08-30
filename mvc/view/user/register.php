<div class="tac">
  <img src="<?=baseUrl()?>/image/logo-129.png"><br><br>

  <form action="<?=baseUrl();?>/user/register" method="post">
    <input type="text" class="ltr" placeholder="<?=_ph_email?>" name="email">
    <br>
    <input type="text" placeholder="<?=_ph_name?>" name="fullname">
    <br><br>
    <input type="password" class="ltr" placeholder="<?=_ph_password?>" name="password1"><br>
    <input type="password" class="ltr" placeholder="<?=_ph_confirm_password?>" name="password2">
    <br>
    <br>
    <button type="submit" class="btn-blue"><?=_btn_register?></button>
  </form>
</div>