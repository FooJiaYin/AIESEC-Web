<html>


<head>
<meta charset="utf-8" />	
<style>
  body {
        height: 842px; width: 900px;
        /* to centre page on screen*/
/*        margin-left: auto;
        margin-right: auto;*/
    }
	.font14{
		font-size: 16pt;
	}

	.invoicetable{
		width:900px;
	}
	.textright{
		text-align: right;
	}
		.textleft{
		text-align: left;
	}
  .col-8-8{
    width:15%;
  } 
	.col-1-5{
		width:20%;
	}
	.col-1-6{
		width:16.67%;
	}
	.col-2-6{
		width:33.34%;
	}
	.col-2-5{
		width:40%;
	}
	.col-3-5{
		width:60%;
	}
	.col-full{
		width:100%;
	}
	.col-1-10{
		width:10%;
	}	
  .col-1-95{
    width:99%;
  } 
	.col-3-10{
		width:30%;
	}

	.textcenter{
		text-align: center;
	}
	.smalltext{
		font-size: 9pt;

	}
	.thickline{

    /* height: 2px; */
    border-style: solid;
    border-width: 1px;
    border-right-width: 0px;
    border-left-width: 0px;

	}

	.doubleline{

    height: 2px;     
    border-style: hidden;     
    border-bottom: 1px solid;     
    border-top: 1px solid;

	}
	.buttomspace{
		padding-top: 30px;
	}

</style>
</head>


<table class="invoicetable font14">
  <tbody valign="center">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  </tbody>
  </table>

  <table class="invoicetable font14">
  <tbody>
  <tr>
      <td><br><br> </td>
  </tr>
   </tbody>
   </table>
   <tr>
      <td><br> </td>
  </tr>
<table style="margin:0px auto; width:85%; font-size: 25pt;" rules="all" cellpadding="10px">
  <tr>
  <td>
    <?php echo $_GET["POSTCODE"]; ?><br>
    <?php echo $_GET["CODELESSADDRESS"]; ?><br>
    <?php echo $_GET["COMPANYNAME"]; ?><br>
    <?php echo $_GET["CONTACTNAME"]; ?> 先生/小姐收    
    <?php
    if ($_GET["CONTACTNO"] == 0) 
      { echo      $_GET["PHONE"] ;  } { echo      $_GET["CONTACTNO"] ;}
      ?> <br>
  </td>
  </tr>
</table>
<br>
<br>
  <br>
  <br>
  <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<span> <img style="width:20%" ; src="http://s3.amazonaws.com/eztable-static/asset/ie_bye/logo.png"> </span><br>
<br>
<table style="margin:0px auto ; width:95%; font-size: 22pt;" rules="all" cellpadding="10px">
  <tr>
  <td>
    ※請確認統編是否正確，避免發票開立錯誤<br>
    ※若合約有做任何塗改，請於修改處用上負責人章<br>
    ※合約一式兩份，請將用印完後的合約一份寄回至EZTABLE<br>
    <br>
    106<br>
    台北市大安區敦化南路二段216號14樓<br>
    三二三網路科技股份有限公司<br>
    蔡欣宜 Polla收 02-2378-8323 #3155<br>
    <br>
    ※如有任何問題，也歡迎與貴餐廳之業務窗口聯繫<br>
    窗口姓名：<?php echo $_GET["OWNERNAME"]; ?><br>
    窗口電話：<?php echo $_GET["OWNERNO"]; ?><br>
    窗口電子信箱：<?php echo $_GET["OWNEREMAIL"]; ?><br>
  </td>
</table>





</body></html>