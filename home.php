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

    <span class="active-btn">����� ���ϐ��</span>
    <span class="deactinve-btn">����� ���ϐ��</span>
     <span class="deactinve-btn">����</span>
 
 </div>
 
   <div id="top-right-pic" >
     <img src="image/logo-129.png">
   </div>
 
 
 
   <div>
     <span><?=$_SESSION['email']?>��� �����</span>
   </div>
 
 
   </div>
 
 
 
 <div class="mybody">
 
   <div id="side-right-menu">
 
    <div class="side-right-menu">
 <ul class="side-right-menu-ul">
 
 
   <li>�������</li>
   <li>����� ��� ��</li>
   <li>������</li>
 
 </ul>
 
    </div>
 
     <div class="side-right-menu" >
 
       <ul class="side-right-menu-ul">
 
         <li >�����</li>
         <li> �� ��� ���� ��� �</li>
         <li>����� ��</li>
 
       </ul>
     </div>
 
 
   </div>
 
 
 <div class="conainer">
 
 
 
 
 
 <div id="way" >
   <div style="margin: 15px">
   <span>?. ���� ������� ���</span>
   <span>	?. ������ ��� �����</span>
   <span>	?. ������ �����</span>
   <span>?. ����������</span>
   <span>?. �����</span>
 
 </div>
 </div>
 
 
 
 <div class="form" style="direction: rtl">
   <span>��� �����</span> <br><br>
 <div class="input-list style-1 clearfix" style="float: right">
   <input type="text" >
 </div>
 
 
   <br>
 <br><br>
   <br><br>
   <span>����� ����</span> <br><br>
   <select class="date date_day" id="id_0-start_date_day" name="0-start_date_day">
     <option value="0">�</option>
     <option value="1">?</option>
     <option value="2">?</option>
     <option value="3">?</option>
     <option value="4">?</option>
     <option value="5">?</option>
     <option value="6">?</option>
     <option value="7">?</option>
     <option value="8">?</option>
     <option value="9">?</option>
     <option value="10">??</option>
     <option value="11">??</option>
     <option value="12">??</option>
     <option value="13">??</option>
     <option value="14">??</option>
     <option value="15">??</option>
     <option value="16">??</option>
     <option value="17">??</option>
     <option value="18">??</option>
     <option value="19">??</option>
     <option value="20">??</option>
     <option value="21">??</option>
     <option value="22">??</option>
     <option value="23">??</option>
     <option value="24">??</option>
     <option value="25" selected="selected">??</option>
     <option value="26">??</option>
     <option value="27">??</option>
     <option value="28">??</option>
     <option value="29">??</option>
     <option value="30">??</option>
     <option value="31">??</option>
   </select>
 
   <select class="date date_month" id="id_0-start_date_month" name="0-start_date_month">
     <option value="0">�</option>
     <option value="1">�������</option>
     <option value="2">��������</option>
     <option value="3">�����</option>
     <option value="4">���</option>
     <option value="5" selected="selected">�����</option>
     <option value="6">������</option>
     <option value="7">���</option>
     <option value="8">����</option>
     <option value="9">���</option>
     <option value="10">��</option>
     <option value="11">����</option>
     <option value="12">�����</option>
   </select>
 
   <select class="date date_year" id="id_0-start_date_year" name="0-start_date_year">
     <option value="0">�</option>
     <option value="1394" selected="selected">????</option>
     <option value="1395">????</option>
     <option value="1396">????</option>
     <option value="1397">????</option>
     <option value="1398">????</option>
     <option value="1399">????</option>
     <option value="1400">????</option>
     <option value="1401">????</option>
     <option value="1402">????</option>
     <option value="1403">????</option>
   </select>
   <br>
   <br><br><br>
 
   <div class="field-vertical-divider"></div>
   <span>����� �����</span> <br><br>
   <select class="date date_day" id="id_0-expiration_date_day" name="0-expiration_date_day">
         <option value="0" selected="selected">�</option>
         <option value="1">?</option>
         <option value="2">?</option>
         <option value="3">?</option>
         <option value="4">?</option>
         <option value="5">?</option>
         <option value="6">?</option>
         <option value="7">?</option>
         <option value="8">?</option>
         <option value="9">?</option>
         <option value="10">??</option>
         <option value="11">??</option>
         <option value="12">??</option>
         <option value="13">??</option>
         <option value="14">??</option>
         <option value="15">??</option>
         <option value="16">??</option>
         <option value="17">??</option>
         <option value="18">??</option>
         <option value="19">??</option>
         <option value="20">??</option>
         <option value="21">??</option>
         <option value="22">??</option>
         <option value="23">??</option>
         <option value="24">??</option>
         <option value="25">??</option>
         <option value="26">??</option>
         <option value="27">??</option>
         <option value="28">??</option>
         <option value="29">??</option>
         <option value="30">??</option>
         <option value="31">??</option>
       </select>
 
 
 
       <select class="date date_month" id="id_0-expiration_date_month" name="0-expiration_date_month">
         <option value="0" selected="selected">�</option>
         <option value="1">�������</option>
         <option value="2">��������</option>
         <option value="3">�����</option>
         <option value="4">���</option>
         <option value="5">�����</option>
         <option value="6">������</option>
         <option value="7">���</option>
         <option value="8">����</option>
         <option value="9">���</option>
         <option value="10">��</option>
         <option value="11">����</option>
         <option value="12">�����</option>
       </select>
 
       <select class="date date_year" id="id_0-expiration_date_year" name="0-expiration_date_year">
         <option value="0" selected="selected">�</option>
         <option value="1394">????</option>
         <option value="1395">????</option>
         <option value="1396">????</option>
         <option value="1397">????</option>
         <option value="1398">????</option>
         <option value="1399">????</option>
         <option value="1400">????</option>
         <option value="1401">????</option>
         <option value="1402">????</option>
         <option value="1403">????</option>
 
 </select>
 
 
 
 
 
 <br><br><br>
   <div >
     <span>����� ������</span> <br><br>
     <div  >
       <input type="text" >
     </div>
 
 
 
     <br><br><br>
     <div >
       <span>����� ��</span> <br><br>
       <div >
 
           <input type="text">
 
       </div>
 
 
       <br><br><br>
      <div >
        <span>��ǘ�� ����� � �� ���</span> <br><br>
        <div >
          <input type="text" >
        </div>


    </div>


</div>

</div>




  </div>

</body>
</html>