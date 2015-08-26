@@ -0,0 +1,40 @@

<? require_once('main.php')?>
<html>
<head>

  <meta charset="utf-8">
  <link rel="stylesheet" href="base.css">
  <link rel="stylesheet" href="style.css">

</head>

<body>

<div>
  <div class="tac">
  <img src="image/logo.png"><br><br>
    <form action="register-check.php" method="post">
 <input type="text" placeholder="Email" name="email">
 <br>
      <input type="text" placeholder="Full Name" name="fullname">

      <br>
      <br>
 <input type="password" placeholder="Password" name="password1"><br>
 <input type="password" placeholder="Confirm Password" name="password2">
      <br>
      <br>
      <button type="submit" class="btn-blue">Register</button>
    </form>


    </div>
</div>

<?

?>

</body>
</html>