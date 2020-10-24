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

<body valign="center" ; class="font14">
<span> <img style="width:20%" ; src="http://s3.amazonaws.com/eztable-static/asset/ie_bye/logo.png"> </span>

<br>
  <br>

<table class="invoicetable font14">
  <tbody valign="center">
  <tr>
  <br><br><br>
  </tr>
    <tr>
  	<td class="col-full textcenter" >增補協議書合約附本</td>
  </tr>
  </tbody>
  </table>

  <table class="invoicetable font14">
  <tbody>
  <tr>
      <td><br><br> </td>
  </tr>
  <tr>
  	<td class="col-1-10 textright" >立協議書人：</td>
  	<td class="col-2-5 textleft" >三二三網路科技股份有限公司 （以下簡稱甲方）</td>
  </tr>
  <tr>
  	<td class="col-1-10"></td>
  	<td class="col-2-5 textleft"> <?php echo $_GET["COMPANYNAME"]; ?>（以下簡稱乙方）</td>
   </tr>
   </tbody>
   </table>

  <br>
  <br>

  本增補合約複本茲就甲乙雙方原簽訂之整合型服務合作協議書做增補，茲就旗下所開設<rrrrrrr>，所提供之產品或餐飲電子商務服務，雙方同意依主約合約合作內容之協議，搭配此附約約議原合約條款異動。<br>


<table style="margin:0px auto;border:1px solid;width:80%;" border="1px solid" rules="all" cellpadding="20px">
  <tr><td class="col-2-5">原始合約條文：</td><td class="col-2-5">修改後合約條文：</td></tr>
  <tr><td class="col-2-5"><?php echo $_GET["OLDONE"]; ?></td><td class="col-2-5"><?php echo $_GET["NEWONE"]; ?></td></tr>
  <tr><td class="col-2-5"><?php echo $_GET["OLDTWO"]; ?></td><td class="col-2-5"><?php echo $_GET["NEWTWO"]; ?></td></tr>
  <tr><td class="col-2-5"><?php echo $_GET["OLDTHREE"]; ?></td><td class="col-2-5"><?php echo $_GET["NEWTHREE"]; ?></td></tr>
  <tr><td class="col-2-5"><?php echo $_GET["OLDFOUR"]; ?></td><td class="col-2-5"><?php echo $_GET["NEWFOUR"]; ?></td></tr>
  <tr><td class="col-2-5"><?php echo $_GET["OLDFIVE"]; ?></td><td class="col-2-5"><?php echo $_GET["NEWFIVE"]; ?></td></tr>
</table>
<br>

修訂事項：本協議書僅針對上述條約內容做更改，其他事項皆比照原合作協議書。<br>
<br>
<br>
  <table style="margin:0px auto;border:1px solid;width:80%;" border="1px solid" rules="all" cellpadding="20px">
  <tr><td class="col-1-10">甲方：</td><td class="col-3-10">三二三網路科技股份有限公司</td><td class="col-1-10">乙方：</td><td class="col-3-10"><?php echo $_GET["COMPANYNAME"]; ?></td></tr>
  <tr><td class="col-1-10">負責人：</td><td class="col-3-10" >陳翰林</td><td class="col-1-10">負責人：</td><td class="col-3-10"><?php echo $_GET["RESPONSIBLEPERSON"]; ?></td></tr>
  <tr><td class="col-1-10">統一編號：</td><td class="col-3-10">29084823</td><td class="col-1-10">統一編號：</td><td class="col-3-10"><?php echo $_GET["VAT"]; ?></td></tr>
  <tr><td class="col-1-10">地址：</td><td class="col-3-10">106 台北市大安區敦化南路二段216號14樓</td><td class="col-1-10">地址：</td><td class="col-3-10"><?php echo $_GET["ADDRESS"]; ?></td></tr>
  <tr><td class="col-1-10">電話：</td><td class="col-3-10">02-2378-8323 #5</td><td class="col-1-10">電話：</td><td class="col-3-10"><?php echo $_GET["PHONE"]; ?></td></tr>
</table>
</td>
</tr>
<br>
<br>






</body></html>