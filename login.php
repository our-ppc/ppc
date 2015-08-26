<?

  require_once('main.php');
  if(isset($_SESSION['email'])){

    $message ="You're Aready Logged In, " . '<a href="home.php"> Visit Homepage</a> OR <a href="logout.php">Logout</a><br>'.'email='.$_SESSION['email'];
    require_once('msg-success.php');
    exit;

  }
?>
<html>
<head>

  <meta charset="utf-8">
  <link rel="stylesheet" href="base.css">
  <link rel="stylesheet" href="style.css">

</head>

<body>

<div>
  <div class="tac">
  <img src="image/logo-129.png"><br><br>
    <form action="login-check.php" method="post">
 <input  type="text" placeholder="Email" name="email">
      <br>
      <br>
 <input type="password" placeholder="Password" name="password">
      <br>
      <br>
      <button type="submit" class="btn-blue">Login</button>
    </form>
    <br>
    <br>
    <br>

  <a href="register.php" class="link-gray">Create New Account</a>
    </div>
</div>



</body>
</html>