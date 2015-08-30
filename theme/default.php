<!DOCTYPE html>
<html lang="fa">

<head>



  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?=baseUrl()?>/css/beauty_css_botstrap.css">
  <link href="<?=baseUrl()?>/css/bootstrap-rtl.min_.css" rel="stylesheet">

  <script type="text/javascript" src="<?=baseUrl()?>/js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src=<?=baseUrl()?>/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?=baseUrl()?>/js/persianumber.js"></script>





</head>

<body>


<!-- ***********************1******************** -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">

      <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation" >
        <div class="container-fluid" >

          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/">تبلیغ دهندگان</a>
            </li>
            <li><a href="/products">نمایش دهندگان</a>
            </li>
            <li><a href="/about-us">حساب</a>
            </li>
          </ul>
        </div>
      </div>


      <div id="top-right-pic" >
        <img src="/image/logo-129.png" >
      </div>



      <div id="email">
        <span><?=$_SESSION['email']?>خوش آمدید</span>
      </div>
    </div> </div>
  <!-- **********************************2********************************************** -->
  <div class="row">

    <div class="col-md-2">
      <div class="list-group" style="direction: rtl">
        <a href="#" class="list-group-item">داشبورد</a>
        <a href="#" class="list-group-item">تبلیغ های من</a>
        <a href="#" class="list-group-item">راهنما</a>
      </div>


      <div class="list-group" style="direction: rtl">
        <a href="#" class="list-group-item">معرفی</a>
        <a href="#" class="list-group-item">از کجا شروع کنم؟</a>
        <a href="#" class="list-group-item">تعرفه ها</a>
      </div>
    </div>
    <!-- **********************************3********************************************** -->

   <div><?=$content?></div>
      <!-- *************************************************** footer ******************************* -->

    </div>
    <div class="footer-center">


      <span class="footer-item"><a href=" ">حریم شخصی</a></span> |
      <span class="footer-item"><a href=" ">شرایط استفاده</a></span> |
      <span class="footer-item"><a href=" ">تعرفه‌ها</a></span> |
      <span class="footer-item"><a href=" ">تماس با ما</a></span> |

      <br>

      <span class="copyright">© 2015. همه‌ی حقوق برای سایت آرویج محفوظ است.</span>
    </div>
  </div>

</div>






</body>
</html>