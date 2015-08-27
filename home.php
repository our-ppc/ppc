<?
 
   require_once('main.php');
 
 
 
 ?>
 <html>
 
 
 <head>
   
     <meta charset="utf-8">
     <link rel="stylesheet" href="base.css">
     <link rel="stylesheet" href="style.css">
   
   </head>
 
 <body>
 <div id="content">
   <div id="top-wrapper" >
     
     
       <div id="top-right-menu">
       
       
           <span class="active-btn">تبلیغ دهندگان</span>
           <span class="deactinve-btn">نمایش دهندگان</span>
           <span class="deactinve-btn">حساب</span>
       
       </div>
     
       <div id="top-right-pic" >
           <img src="image/logo-129.png">
         </div>
     
     
     
       <div>
           <span><?=$_SESSION['email']?>خوش آمدید</span>
         </div>
     
     
       </div>
   
   
   
   <div class="mybody">
     
       <div id="side-right-menu">
       
          <div class="side-right-menu">
         <ul class="side-right-menu-ul">
           
           
             <li>داشبورد</li>
             <li>تبلیغ های من</li>
             <li>راهنما</li>
           
           </ul>
         
            </div>
       
           <div class="side-right-menu" >
         
               <ul class="side-right-menu-ul">
           
                   <li >معرفی</li>
                   <li> از کجا شروع کنم ؟</li>
                   <li>تعرفه ها</li>
           
                 </ul>
             </div>
       
       
         </div>
     
     
     <div class="conainer">
       
       
       
       
       
       <div id="way" >
           <div style="margin: 15px">
             <span>۱. ورود اطلاعات کلی</span>
             <span>	۲. انتخاب نوع تبلیغ</span>
             <span>	۳. محتوای تبلیغ</span>
             <span>۴. هدفمندسازی</span>
             <span>۵. تأیید</span>
           
           </div>
         </div>
       
       
       
       <div class="form" style="direction: rtl">
           <span>نام تبلیغ</span> <br><br>
         <div class="input-list style-1 clearfix" style="float: right">
             <input type="text" >
           </div>
         
         
           <br>
         <br><br>
           <br><br>
           <span>تاریخ شروع</span> <br><br>
           <select class="date date_day" id="id_0-start_date_day" name="0-start_date_day">
               <option value="0">—</option>
               <option value="1">۱</option>
               <option value="2">۲</option>
               <option value="3">۳</option>
               <option value="4">۴</option>
               <option value="5">۵</option>
               <option value="6">۶</option>
               <option value="7">۷</option>
               <option value="8">۸</option>
               <option value="9">۹</option>
               <option value="10">۱۰</option>
               <option value="11">۱۱</option>
               <option value="12">۱۲</option>
               <option value="13">۱۳</option>
               <option value="14">۱۴</option>
               <option value="15">۱۵</option>
               <option value="16">۱۶</option>
               <option value="17">۱۷</option>
               <option value="18">۱۸</option>
               <option value="19">۱۹</option>
               <option value="20">۲۰</option>
               <option value="21">۲۱</option>
               <option value="22">۲۲</option>
               <option value="23">۲۳</option>
               <option value="24">۲۴</option>
               <option value="25" selected="selected">۲۵</option>
               <option value="26">۲۶</option>
               <option value="27">۲۷</option>
               <option value="28">۲۸</option>
               <option value="29">۲۹</option>
               <option value="30">۳۰</option>
               <option value="31">۳۱</option>
             </select>
         
           <select class="date date_month" id="id_0-start_date_month" name="0-start_date_month">
               <option value="0">—</option>
               <option value="1">فروردین</option>
               <option value="2">اردیبهشت</option>
               <option value="3">خرداد</option>
               <option value="4">تیر</option>
               <option value="5" selected="selected">مرداد</option>
               <option value="6">شهریور</option>
               <option value="7">مهر</option>
               <option value="8">آبان</option>
               <option value="9">آذر</option>
               <option value="10">دی</option>
               <option value="11">بهمن</option>
               <option value="12">اسفند</option>
             </select>
         
           <select class="date date_year" id="id_0-start_date_year" name="0-start_date_year">
               <option value="0">—</option>
               <option value="1394" selected="selected">۱۳۹۴</option>
               <option value="1395">۱۳۹۵</option>
               <option value="1396">۱۳۹۶</option>
               <option value="1397">۱۳۹۷</option>
               <option value="1398">۱۳۹۸</option>
               <option value="1399">۱۳۹۹</option>
               <option value="1400">۱۴۰۰</option>
               <option value="1401">۱۴۰۱</option>
               <option value="1402">۱۴۰۲</option>
               <option value="1403">۱۴۰۳</option>
             </select>
           <br>
           <br><br><br>
         
           <div class="field-vertical-divider"></div>
           <span>تاریخ انقضا</span> <br><br>
           <select class="date date_day" id="id_0-expiration_date_day" name="0-expiration_date_day">
                   <option value="0" selected="selected">—</option>
                   <option value="1">۱</option>
                   <option value="2">۲</option>
                   <option value="3">۳</option>
                   <option value="4">۴</option>
                   <option value="5">۵</option>
                   <option value="6">۶</option>
                   <option value="7">۷</option>
                   <option value="8">۸</option>
                   <option value="9">۹</option>
                   <option value="10">۱۰</option>
                   <option value="11">۱۱</option>
                   <option value="12">۱۲</option>
                   <option value="13">۱۳</option>
                   <option value="14">۱۴</option>
                   <option value="15">۱۵</option>
                   <option value="16">۱۶</option>
                   <option value="17">۱۷</option>
                   <option value="18">۱۸</option>
                   <option value="19">۱۹</option>
                   <option value="20">۲۰</option>
                   <option value="21">۲۱</option>
                   <option value="22">۲۲</option>
                   <option value="23">۲۳</option>
                   <option value="24">۲۴</option>
                   <option value="25">۲۵</option>
                   <option value="26">۲۶</option>
                   <option value="27">۲۷</option>
                   <option value="28">۲۸</option>
                   <option value="29">۲۹</option>
                   <option value="30">۳۰</option>
                   <option value="31">۳۱</option>
                 </select>
         
         
         
               <select class="date date_month" id="id_0-expiration_date_month" name="0-expiration_date_month">
                   <option value="0" selected="selected">—</option>
                   <option value="1">فروردین</option>
                   <option value="2">اردیبهشت</option>
                   <option value="3">خرداد</option>
                   <option value="4">تیر</option>
                   <option value="5">مرداد</option>
                   <option value="6">شهریور</option>
                   <option value="7">مهر</option>
                   <option value="8">آبان</option>
                   <option value="9">آذر</option>
                   <option value="10">دی</option>
                   <option value="11">بهمن</option>
                   <option value="12">اسفند</option>
                 </select>
         
               <select class="date date_year" id="id_0-expiration_date_year" name="0-expiration_date_year">
                   <option value="0" selected="selected">—</option>
                   <option value="1394">۱۳۹۴</option>
                   <option value="1395">۱۳۹۵</option>
                   <option value="1396">۱۳۹۶</option>
                   <option value="1397">۱۳۹۷</option>
                   <option value="1398">۱۳۹۸</option>
                   <option value="1399">۱۳۹۹</option>
                   <option value="1400">۱۴۰۰</option>
                   <option value="1401">۱۴۰۱</option>
                   <option value="1402">۱۴۰۲</option>
                   <option value="1403">۱۴۰۳</option>
           
           </select>
         
         
         
         
         
         <br><br><br>
           <div >
               <span>بودجه روزانه</span> <br><br>
               <div  >
                   <input type="text" >
                 </div>
           
           
           
               <br><br><br>
               <div >
                   <span>بودجه کل</span> <br><br>
                   <div >
               
                         <input type="text">
               
                     </div>
             
             
                   <br><br><br>
                   <div >
                       <span>حداکثر هزینه ی هر کلیک</span> <br><br>
                       <div >
                           <input type="text" >
                         </div>
               
               
                   </div>
             
             
             </div>
           
           </div>
         
         
         
         
           </div>
       
       </body>
 </html>