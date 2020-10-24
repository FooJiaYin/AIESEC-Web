<html>

<head>
<meta charset="utf-8" />	
<style>
  body {
        height: 842px;
        /* to centre page on screen*/
/*        margin-left: auto;
        margin-right: auto;*/
    }
	.font14{
		font-size: 14pt;
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

<body>
<table class="invoicetable font14">
  <tbody>
    <tr>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-5" colspan="2">日期：<?php echo date("Y/m/d") ;?></td>
  </tr>
  <tr>
  	<td class="col-1-5" colspan="2"></td>
  	<td class="col-3-5 textcenter" colspan="6">社團法人國際經濟商管學生會</td>
  	<td class="col-1-5" colspan="2"></td>
  </tr>
  <tr>
  	<td class="col-1-5" colspan="2"></td>
  	<td class="col-1-5" colspan="2"></td>
  	<td class="col-1-5 textcenter" colspan="2">請款單</td>
  	<td class="col-2-5 smalltext textright" colspan="4">
  	理事長：羅翊峰<br>
  	22042新北市板橋區莒光路52-1號2樓<br>
  	統一編號：99042880<br>
  	02-2256-2380
  	</td>
  </tr>
  <tr>
  	<td colspan="10"><hr></td>
  </tr>
   <tr>
  	<td class="col-2-5" colspan="2">客戶名稱：</td>
    <td class="col-2-5 smalltext" colspan="4"><?php echo $_GET["ACCNAME"]; ?></td>
  	<td class="col-1-5" colspan="2">報價有效期限：</td>
  	<?php $enddate = time()+2592000; ?>
  	<td class="col-2-5" colspan="4"><?php echo date('Y', $enddate)?>年<?php echo date('m', $enddate)?>月<?php echo date('d', $enddate)?>日</td>
  	<!-- <td class="col-1-5">日期：__________</td> -->
  </tr>
   <tr>
  	<td class="col-2-5" colspan="2">地址：</td>
    <td class="col-2-5 smalltext" colspan="4"><?php echo $_GET["ADDRESS"]; ?></td>
  	<td class="col-1-5" colspan="2">報價編號：</td>
  	<td class="col-2-5" colspan="4"><?php echo $_GET["ARID"]; ?></td>
  	<!-- <td class="col-1-5">日期：__________</td> -->
  </tr>
     <tr>
  	<td class="col-2-5" colspan="2">統一編號：</td>
  	<td class="col-2-5" colspan="4"></td>c
  	<td class="col-1-5" colspan="2">報價分會：</td>
  	<td class="col-2-5 smalltext" colspan="4"><?php echo $_GET["LC"]; ?></td>
  	<!-- <td class="col-1-5">日期：__________</td> -->
  </tr>
  <tr>
  	<td colspan="10"><hr class="thickline"></td>
  </tr>
       <tr>
  	<td class="col-1-10 textcenter" >序號</td>
  	<td class="col-2-5 textcenter" colspan="4">名稱</td>
  	<td class="col-1-10 textcenter" >項目</td>
  	<td class="col-1-10 textcenter" >單價</td>
  	<td class="col-1-10 textcenter" >數量</td>
  	<td class="col-2-5 textcenter" colspan="2">總額</td>
  	<!-- <td class="col-1-5">日期：__________</td> -->
  </tr>
    <tr>
  	<td colspan="10"><hr class="doubleline"></td>
  </tr>
         <tr>
  	<td class="col-1-10 textcenter" >1</td>
  	<td class="col-2-5 textcenter" colspan="4"><?php if($_GET["TYPE"]=="ICX GCDP") echo "全球青年在地發展計畫"; else echo "全球人才發展計畫";?></td>
  	<td class="col-1-10 textcenter" >頭款</td>
    <td class="col-1-10 textcenter" ><?php echo $_GET["RAISEFEE"]; ?></td>
    <td class="col-1-10 textcenter" ><?php echo $_GET["RAISENUM"]; ?></td>
    <td class="col-3-10 textcenter" colspan="2"><?php echo $_GET["RAISEFEE"]*$_GET["RAISENUM"] ; ?></td>
  	<!-- <td class="col-1-5">日期：__________</td> -->
  </tr>
         <tr>
    <td class="col-1-10 textcenter" >2</td>
    <td class="col-2-5 textcenter" colspan="4"><?php if($_GET["TYPE"]=="ICX GCDP") echo "全球青年在地發展計畫"; else echo "全球人才發展計畫";?></td>
    <td class="col-1-10 textcenter" >尾款</td>
    <td class="col-1-10 textcenter" ><?php echo $_GET["REALIZEFEE"]; ?></td>
    <td class="col-1-10 textcenter" ><?php echo $_GET["REALIZENUM"]; ?></td>
    <td class="col-3-10 textcenter" colspan="2"><?php echo $_GET["REALIZEFEE"]*$_GET["REALIZENUM"] ; ?></td>
    <!-- <td class="col-1-5">日期：__________</td> -->
  </tr>
         <tr>
  	<td class="col-1-10 textcenter" >3</td>
  	<td class="col-2-5 textcenter" colspan="4"></td>
  	<td class="col-1-10 textcenter" ></td>
  	<td class="col-1-10 textcenter" ></td>
  	<td class="col-1-10 textcenter" ></td>
  	<td class="col-3-10 textcenter" colspan="2"></td>
  	<!-- <td class="col-1-5">日期：__________</td> -->
  </tr>
               <tr>
  	<td class="col-1-10 textcenter" >4</td>
  	<td class="col-2-5 textcenter" colspan="4"></td>
  	<td class="col-1-10 textcenter" ></td>
  	<td class="col-1-10 textcenter" ></td>
  	<td class="col-1-10 textcenter" ></td>
  	<td class="col-3-10 textcenter" colspan="2"></td>
  	<!-- <td class="col-1-5">日期：__________</td> -->
  </tr>
    <tr>
  	<td colspan="10"><hr class="thickline"></td>
  </tr>
      <tr>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-3-10" colspan="3" style="border-bottom-style: double;">總計：<?php echo $_GET["TOTAL"]; ?></td>
  </tr>
      <tr>
  	<td class="col-1-10 buttomspace">會計：</td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10 buttomspace">經辦：</td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-5" colspan="2"></td>
  </tr>
</tbody>
</table>

<br><br>
<br><br>
<br><br>
<br><br>
<hr style="width:900px;">




<table class="invoicetable font14">
  <tbody>
    <tr>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-5" colspan="2">日期：<?php echo date("Y/m/d") ;?></td>
  </tr>
  <tr>
  	<td class="col-1-5" colspan="2"></td>
  	<td class="col-3-5 textcenter" colspan="6">社團法人國際經濟商管學生會</td>
  	<td class="col-1-5" colspan="2"></td>
  </tr>
  <tr>
  	<td class="col-1-5" colspan="2"></td>
  	<td class="col-1-5" colspan="2"></td>
  	<td class="col-1-5 textcenter" colspan="2">請款單</td>
  	<td class="col-2-5 smalltext textright" colspan="4">
  	理事長：羅翊峰<br>
  	22042新北市板橋區莒光路52-1號2樓<br>
  	統一編號：99042880<br>
  	02-2256-2380
  	</td>
  </tr>
  <tr>
  	<td colspan="10"><hr></td>
  </tr>
   <tr>
  	<td class="col-2-5" colspan="2">客戶名稱：</td>
    <td class="col-2-5 smalltext" colspan="4"><?php echo $_GET["ACCNAME"]; ?></td>
    <td class="col-1-5" colspan="2">報價有效期限：</td>
  	<?php $enddate = time()+2592000; ?>
  	<td class="col-2-5" colspan="4"><?php echo date('Y', $enddate)?>年<?php echo date('m', $enddate)?>月<?php echo date('d', $enddate)?>日</td>
  	<!-- <td class="col-1-5">日期：__________</td> -->
  </tr>
   <tr>
  	<td class="col-2-5" colspan="2">地址：</td>
    <td class="col-2-5 smalltext" colspan="4"><?php echo $_GET["ADDRESS"]; ?></td>
  	<td class="col-1-5" colspan="2">報價編號：</td>
  	<td class="col-2-5" colspan="4"><?php echo $_GET["ARID"]; ?></td>
  	<!-- <td class="col-1-5">日期：__________</td> -->
  </tr>
     <tr>
  	<td class="col-2-5" colspan="2">統一編號：</td>
  	<td class="col-2-5" colspan="4"></td>
  	<td class="col-1-5" colspan="2">報價分會：</td>
  	<td class="col-2-5 smalltext" colspan="4"><?php echo $_GET["LC"]; ?></td>
  	<!-- <td class="col-1-5">日期：__________</td> -->
  </tr>
  <tr>
  	<td colspan="10"><hr class="thickline"></td>
  </tr>
       <tr>
  	<td class="col-1-10 textcenter" >序號</td>
  	<td class="col-2-5 textcenter" colspan="4">名稱</td>
  	<td class="col-1-10 textcenter" >項目</td>
  	<td class="col-1-10 textcenter" >單價</td>
  	<td class="col-1-10 textcenter" >數量</td>
  	<td class="col-2-5 textcenter" colspan="2">總額</td>
  	<!-- <td class="col-1-5">日期：__________</td> -->
  </tr>
    <tr>
  	<td colspan="10"><hr class="doubleline"></td>
  </tr>
         <tr>
  	<td class="col-1-10 textcenter" >1</td>
  	<td class="col-2-5 textcenter" colspan="4"><?php if($_GET["TYPE"]=="ICX GCDP") echo "全球青年在地發展計畫"; else echo "全球人才發展計畫";?></td>
  	<td class="col-1-10 textcenter" >頭款</td>
  	<td class="col-1-10 textcenter" ><?php echo $_GET["RAISEFEE"]; ?></td>
  	<td class="col-1-10 textcenter" ><?php echo $_GET["RAISENUM"]; ?></td>
  	<td class="col-3-10 textcenter" colspan="2"><?php echo $_GET["RAISEFEE"]*$_GET["RAISENUM"] ; ?></td>
  	<!-- <td class="col-1-5">日期：__________</td> -->
   </tr>
          <tr>
    <td class="col-1-10 textcenter" >2</td>
    <td class="col-2-5 textcenter" colspan="4"><?php if($_GET["TYPE"]=="ICX GCDP") echo "全球青年在地發展計畫"; else echo "全球人才發展計畫";?></td>
    <td class="col-1-10 textcenter" >尾款</td>
    <td class="col-1-10 textcenter" ><?php echo $_GET["REALIZEFEE"]; ?></td>
    <td class="col-1-10 textcenter" ><?php echo $_GET["REALIZENUM"]; ?></td>
    <td class="col-3-10 textcenter" colspan="2"><?php echo $_GET["REALIZEFEE"]*$_GET["REALIZENUM"] ; ?></td>
    <!-- <td class="col-1-5">日期：__________</td> -->
    </tr>
           <tr>
  	<td class="col-1-10 textcenter" >3</td>
  	<td class="col-2-5 textcenter" colspan="4"></td>
  	<td class="col-1-10 textcenter" ></td>
  	<td class="col-1-10 textcenter" ></td>
  	<td class="col-1-10 textcenter" ></td>
  	<td class="col-3-10 textcenter" colspan="2"></td>
  	<!-- <td class="col-1-5">日期：__________</td> -->
  </tr>
               <tr>
  	<td class="col-1-10 textcenter" >4</td>
  	<td class="col-2-5 textcenter" colspan="4"></td>
  	<td class="col-1-10 textcenter" ></td>
  	<td class="col-1-10 textcenter" ></td>
  	<td class="col-1-10 textcenter" ></td>
  	<td class="col-3-10 textcenter" colspan="2"></td>
  	<!-- <td class="col-1-5">日期：__________</td> -->
  </tr>
    <tr>
  	<td colspan="10"><hr class="thickline"></td>
  </tr>
      <tr>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-3-10" colspan="3" style="border-bottom-style: double;">總計：<?php echo $_GET["TOTAL"]; ?></td>
  </tr>
      <tr>
  	<td class="col-1-10 buttomspace">理事長：</td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10 buttomspace">經辦：</td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10"></td>
  	<td class="col-1-10 buttomspace">會章：</td>
  	<td class="col-1-5" colspan="2"></td>
  </tr>
</tbody>
</table>
<br><br>
<p class="textcenter">
匯款資訊：
<table style="margin: 0px auto;"><tr><td class="textleft">
銀行：中國信託商業銀行分行別：營業部<br>
銀行代碼：822<br>
銀行帳號：901-5401-43636<br>
戶名：社團法人國際經濟商管學生會台灣總會<br>
<p class="textcenter">
匯款之手續費由匯款方自行負擔
</td></tr></table>
</p>
<p class="textcenter"> ------若已完成匯款手續，請忽略此單據------ 
</p>






</body></html>
