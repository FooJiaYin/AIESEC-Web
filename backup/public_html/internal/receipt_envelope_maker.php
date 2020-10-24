<?php
function spellnumber($money){
 //數字大寫
 $unt_th = array("", "拾", "佰", "仟");
 $unt_te = array("", "萬", "億", "兆", "京");
 $money_ch = array("零", "壹", "貳", "參", "肆", "伍", "陸", "柒", "捌", "玖");

 //將數字拆開
 $money = str_split($money);
 krsort($money);

 //每4位數拆成一個陣列
 $money = array_chunk($money, 4);

 $level = 0;
 foreach ($money as $num){
  krsort($num);
  $dec = 0;
  $num = implode("", $num);
  $zero = "";
  $mast = $num;
  $flag = false;

  while($num > 0){
   //十進位計算，取餘數
   $mod = $num % 10;
   if($mod > 0){
    $flag = true;
    //大寫數字 + 單位 + 零值
    $zero = $money_ch[$mod] . $unt_th[$dec] . $zero ;
   }else if ($mod == 0){
    //處理「零」的顯示
    if ($flag && ($level <= 1 || ($num && $mast%10 > 0))){
     $zero = "0" . $zero;
    }else{
     $zero = "" ;
    }
   }

   $num = intval($num / 10);
   $dec += 1; //進位
   $big_number[$level] = $zero.$unt_te[$level];
  }
  $level += 1;
 }
 krsort($big_number);
 $big_numbering = implode("", $big_number);

 return preg_replace('/0+/','零',$big_numbering); //中間連接多個0時，就直接顯示一個零

}
?>

<html>


<head>
<meta charset="utf-8" />
<style>

  body{
    height:1250px;
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

  .tag{
    margin-right:150px;
  }
	.thickline{

    /* height: 2px; */
    border-style: solid;
    border-width: 1px;
    border-right-width: 0px;
    border-left-width: 0px;

	}
  .hover-delete{
    text-align: center;
    /*display:none;*/
    margin:0px auto;
    margin-top:25px;
    background-color: #fff;
    color: rgba(255,255,255,0);
 /*   border: #000;*/
    width: 100%;
    font-size: 16pt;
    padding: 10px;
  }
  .hover-delete:hover{
    background-color: #E74C3C;
    color:#fff;
    display:block;
  }

  .tableborder{
    border-style: solid;
    border-width: 1px;
  }

  .tdborder{

    border-bottom: 1px solid;
  }

  .tdpadding{
    padding: 10px 10px;
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
  .big-check{
    font-size:16pt;
  }
  .big-big-check{
    font-size:20pt;
  }

  .big-tdpadding{
    padding:60px 0px 60px 0px;
  }
  .left-padding{
    padding-left:15px;
  }
  .addressee:hover{
    background-color:rgba(255, 0, 0, 0.38);
  }
  .including{
    border: 1px solid black;
  }

  .tdborder-right{
    border-right: 1px solid black;
  }

</style>


</head>


<body>
<table class="invoicetable font14 tableborder" style="margin:0px auto;" id="envelope">
  <tbody>
    <tr>
	  	<td class="col-2-5 left-padding" colspan="4"><img style="width:80%" src="short_black.png" style="logo"></td>
	  	<td class="col-1-10"></td>
	  	<td class="col-1-10"></td>
	  	<td class="col-1-10"></td>
	  	<td class="col-1-10"></td>
	  	<td class="col-1-10"></td>
	  	<td class="col-1-10"></td>
  	</tr>
    <tr>
      <td class="col-1-10 big-tdpadding" ></td>
      <td class="col-1-10 big-tdpadding"></td>
      <td class="col-3-5 textleft big-tdpadding" colspan="6">
      <span class="postnum"><?php echo $_GET["POSTNUM"]; ?><br></span>
      <span class="shortaddresa"><?php echo $_GET["SHORTADDRESS"]; ?><br></span>
      <span class="accname"><?php echo $_GET["ACCNAME"]; ?><br></span>
      <span class="addressee" id="addressee" onclick="document.getElementById('addressee').outerHTML='';
" ><?php echo $_GET["ADDRESSEE"]; ?><br></span>
      </td>
      <td class="col-1-10 big-tdpadding"></td>
      <td class="col-1-10 big-tdpadding"></td>
    </tr>
<!-- 	  <tr>
	  	<td class="col-1-5" colspan="2"></td>
	  	<td class="col-3-5 textcenter" colspan="6">社團法人國際經濟商管學生會</td>
	  	<td class="col-1-5" colspan="2"></td>
	  </tr> -->
  <tr>
  	<td class="col-2-5 smalltext textleft left-padding" colspan="4">
  	AIESEC in Taiwan<br>
  	社團法人國際經濟商管學生會 台灣總會<br>
  	aiesec.org.tw<br>
  	</td>
  	<td class="col-3-10 smalltext textleft left-padding" style="border-left:1px solid;" colspan="3">
  	22042 新北市板橋區莒光路52-1號2樓<br>
  	2F., No.52-1, Juguang Rd., Banqiao Dist., New Taipei City 22042, Taiwan (R.O.C.)<br>
  	+886-2-2256-2380 | +886-2-2256-2380<br>
    <td class="col-1-10"><span class="including" id="include_receipt" onclick="document.getElementById('include_receipt').outerHTML='';
" >內附收據</span></td>
    <td class="col-1-5" colspan="2"><span class="including" id="include_invoice" onclick="document.getElementById('include_invoice').outerHTML='';
" >內附請款單</span></td>
  	</td>
  </tr>
</tbody>
</table>


<div class="hover-delete" id="receipt-btn" onclick="document.getElementById('receipt-all').outerHTML='';document.getElementById('receipt-btn').outerHTML='';">Delete Receipt Delete Receipt Delete Receipt Delete Receipt Delete Receipt</div>
<div class="hover-delete" id="receipt-btn" onclick="document.getElementById('envelope').outerHTML='';document.getElementById('receipt-btn').outerHTML='';">Delete Envelope Delete Envelope Delete Envelope Delete Envelope Delete Envelope </div>

<table class="tableborder" id="receipt-all" style="margin: 0px auto; margin-top: 460px; width:75%;" >
<tr><td colspan="2">
<img style="width:85%" src="black_on_white_long.gif">
</td></tr>
<tr><td colspan="2" class="textcenter"><h2 onclick="">社團法人國際經濟商管學生會台灣總會 收據</h2></td></tr>
<tr><td class="textright" colspan="2">
收據編號：<span class="red-id"><?php echo $_GET["ARID"];?><br>
會址：新北市板橋區莒光路52-1號<br>
統一編號：99042880<br>
立案字號：台內設字號第09200346<br>
</td></tr>
<tr><td class="textleft" style="font-size:10pt" colspan="2">中華民國<?php echo date("Y")-1911 ;?>年<?php echo date("m") ;?>月<?php echo date("d") ;?>日</td></tr>
<tr><td colspan="2">
  <table style="margin:0px auto;border:1px solid;">
  <tr><td class="tdborder tdborder-right tdpadding">茲收到</td><td class="tdborder tdpadding"><?php if($_GET["RECIPTNAME"]=="Same as Account Name") echo $_GET["ACCNAME"]; else echo $_GET["RECIPTNAME"]; ?></td></tr>
<tr><td class="tdborder  tdborder-right tdpadding">項目</td>
<td class="tdborder tdpadding">
<?php if($_GET["TYPE"]=="IGT") echo '<span class="big-big-check">☑</span>專案費用-全球人才實習計畫'; ?>
<?php if($_GET["TYPE"]=="IGV") echo '<span class="big-big-check">☑</span>專案費用-全球青年在地發展計畫'; ?>
<?php if($_GET["TYPE"]=="OGT") echo '<span class="big-big-check">☑</span>專案費用-海外實習計畫'; ?>
<?php if($_GET["TYPE"]=="OGV") echo '<span class="big-big-check">☑</span>專案費用-海外成長計劃'; ?>
<br>
<span class="big-check">□</span>捐款
<span class="big-check">□</span>贊助款
<span class="big-check">□</span>其他 _____________________
</td>
</tr>
<tr><td class="tdpadding tdborder-right">金額</td><td class=" tdpadding">新台幣 <?php echo spellnumber($_GET["TOTAL"])."元整"; ?></td></tr>
</table>
</td>
</tr>
<tr>
      <td colspan="2" style="padding:20px 20px"><span class="tag">理事長：</span><span class="tag">經辦：</span><span class="tag">會章：</span></td>
</tr>
</table>

</body></html>
