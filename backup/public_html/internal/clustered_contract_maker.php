<html>


<head>
<meta charset="utf-8" />	
<style>
  body {
        height: 842px; width: 1050px;
        /* to centre page on screen*/
/*        margin-left: auto;
        margin-right: auto;*/
    }
	.font14{
		font-size: 15pt;
	}

	.invoicetable{
		width:1050px;
	}
	.textright{
		text-align: right;
	}
		.textleft{
		text-align: left;
	}
  .col-8-8{
    width:1%;
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

<body class="font14">
<span><img style="width:20%" src="http://s3.amazonaws.com/eztable-static/asset/ie_bye/logo.png"></span>

<table class="invoicetable font14">
  <tbody>
  <tr>
  <br><br><br>
  </tr>
  <tr>
    <td class="col-full textright" style="font-size: 18pt" > <?php echo $_GET["CONTRACTID"]; ?> </td>
  </tr>
    <tr>
  	<td class="col-full textright"  style="font-size: 18pt" >整合型服務合作協議書</td>
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
  	<td class="col-3-10 textleft" ><b><u>三二三網路科技股份有限公司</u></b> （以下簡稱甲方）</td>
  </tr>
  <tr>
  	<td class="col-1-10"></td>
  	<td class="col-3-5 textleft"> <b><u><?php echo $_GET["COMPANYNAME"]; ?></u></b>（以下簡稱乙方）</td>
   </tr>
   </tbody>
   </table>
   <tr>
      <td><br> </td>
  </tr>
    緣，乙方為拓展商品或服務之銷售範圍，達成業務目標，資就旗下所開設  <?php echo $_GET["ACCNAME"]; ?>  所提供之商品或服務，與甲方進行整合型服務合作，包括但不限於：利用甲方於其所建置並經營之EZTABLE易訂網（以下簡稱「EZTABLE」或「本網站」），網址(http://www.eztable.com)之網路訂位系統服務、委由EZTABLE或其他網路平台代理銷售乙方發行之電子或實體之餐券、住宿券或其他禮券(以下合稱「禮券」)及提供相關服務、規劃電子商務及其他專案促銷活動等。綜上，甲、乙雙方同意訂立本「整合型服務合作協議書」(以下稱「本協議書」)並共同遵守以下條款：<br>
      <br> 
      <br>
    一、合作期間：自<?php echo $_GET["SERVEFROM"]; ?>起至<?php echo $_GET["SERVETILL"]; ?>止，合作終止後，後續權利義務之處理，亦應依本協議書之規定。<br>
      <br>
      <br>
    二、合作內容：<br>
  <br>
<table style="margin:0px auto;border:1px solid;width:80%;" border="1px solid" rules="all" cellpadding="5px">
  <tr><td class="col-1-5">項目：</td><td class="col-3-5">價格（NTD）</td></tr>
  <tr>
  <td class="col-1-5">網路訂位系統服務</td>
  <td rowspan="2" class="col-3-5" >甲方依照以下表格之<?php 
  if ($_GET["MULTIPLECHARGE"]!="")
   { echo $_GET["MULTIPLECHARGE"];}
 ?><?php 
  if ($_GET["MULTIPLECHARGE"]=="")
   { echo "每";}
 ?>間每月核銷金額級距，與乙方收取對應的系統服務費傭金，如乙方每月核銷金額未達級距A，該月每間傭金將以級距A最低核銷金額（ <u><?php echo $_GET["MONTHLYFEE"]; ?></u> 元）作為該月收費依據</td></tr>
  <tr>
  <td class="col-1-5">電子商務服務</td>
  </tr>
</table>
<br>

<table style="margin:0px auto;border:1px solid;width:80%;" border="1px solid" rules="all" cellpadding="5px">

<?php if ($_GET["SIXPA"]== 0) 
    { echo "
    <tr><td class=\"textcenter\" ; colspan=\"6\"> 
    系統服務費用傭金收費標準</td> </tr>
    <tr><td class=\"\">級距</td><td class=\"\">A</td><td class=\"\">B</td><td class=\"\">C</td><td class=\"\">D</td><td class=\"\">E</td></tr>
    <tr><td class=\"\">佣金%</td><td class=\"\">12%</td><td class=\"\">11%</td><td class=\"\">10%</td><td class=\"\">9%</td><td class=\"\">8%</td></tr>
    <tr><td class=\"\">每間每月核銷金額</td> 
    <td class=\"\">".$_GET["TWELVEPA"]."元</td> 
    <td class=\"\">".$_GET["ELEVENPA"]."元</td>
    <td class=\"\">".$_GET["TENPA"]."元</td>
    <td class=\"\">".$_GET["NINEPA"]."元</td>
    <td class=\"\">".$_GET["EIGHTPA"]."元</td></tr>
    <tr><td class=\"textcenter\" ; colspan=\"6\"> 
    附註條款：如合作首月份未足月，僅計算當月份核銷金額之傭金</td> </tr>";}
    ?>
<?php if ($_GET["SIXPA"]!= 0) 
    { echo "
    <tr><td class=\"textcenter\" ; colspan=\"6\"> 
    系統服務費用傭金收費標準</td> </tr>
    <tr><td class=\"\">級距</td><td class=\"\">A</td><td class=\"\">B</td><td class=\"\">C</td><td class=\"\">D</td><td class=\"\">E</td></tr>
    <tr><td class=\"\">佣金%</td><td class=\"\">10%</td><td class=\"\">9%</td><td class=\"\">8%</td><td class=\"\">7%</td><td class=\"\">6%</td></tr>
    <tr><td class=\"\">每間每月核銷金額</td> 
    <td class=\"\">".$_GET["TENPA"]."元</td> 
    <td class=\"\">".$_GET["NINEPA"]."元</td>
    <td class=\"\">".$_GET["EIGHTPA"]."元</td>
    <td class=\"\">".$_GET["SEVENPA"]."元</td>
    <td class=\"\">".$_GET["SIXPA"]."元</td></tr>
    <tr><td class=\"textcenter\" ; colspan=\"6\"> 
    附註條款：如合作首月份未足月，僅計算當月份核銷金額之傭金</td> </tr>";}
    ?>

<?php
    if ($_GET["NOTCHARGEFROM"]!= 0 && $_GET["SPECIALTERM"]== "") 
      { echo "<tr><td class=\"col-2-5 textcenter\" ; colspan=\"6\"> 專屬優惠方案 </td> </tr>";}

?>
<?php
    if ($_GET["NOTCHARGEFROM"]== 0 && $_GET["SPECIALTERM"]!= "") 
      { echo "<tr><td class=\"col-2-5 textcenter\" ; colspan=\"6\"> 專屬優惠方案 </td> </tr>";}

?>
<?php
    if ($_GET["NOTCHARGEFROM"]!= 0 && $_GET["SPECIALTERM"]!= "") 
      { echo "<tr><td class=\"col-2-5 textcenter\" ; colspan=\"6\"> 專屬優惠方案 </td> </tr>";}

?>
<?php
   if ($_GET["NOTCHARGEFROM"]!= 0 && $_GET["SPECIALTERM"]!="") 
    { echo "<tr><td class=\"col-2-5 textleft\" ; colspan=\"6\"> 
    *自".$_GET["NOTCHARGEFROM"]."起至".$_GET["NOTCHARGETO"]."止為系統導入期，<br>
    甲方特別優惠不向乙方收取網路訂位系統服務費用。<br> </td> </tr>
    <tr><td class=\"col-2-5 textleft\" ; colspan=\"6\"> *".$_GET["SPECIALTERM"]." </td> </tr>
    <tr><td class=\"col-2-5 textcenter\" ; colspan=\"6\"> 以上特殊優惠方案僅限於極少數合作廠商，請務必嚴守保密義務。</td> </tr>";}
    ?>
<?php
    if ($_GET["NOTCHARGEFROM"]!= 0 && $_GET["SPECIALTERM"]=="") 
    { echo "<tr><td class=\"col-2-5 textleft\" ; colspan=\"6\"> 
    *自".$_GET["NOTCHARGEFROM"]."起至".$_GET["NOTCHARGETO"]."止為系統導入期，<br>
    甲方特別優惠不向乙方收取網路訂位系統服務費用。<br> </td> </tr>
    <tr><td class=\"col-2-5 textcenter\" ; colspan=\"6\"> 以上特殊優惠方案僅限於極少數合作廠商，請務必嚴守保密義務。</td> </tr>";}
    ?>
<?php
    if ($_GET["NOTCHARGEFROM"]== 0 && $_GET["SPECIALTERM"]!="") 
    { echo "
    <tr><td class=\"col-2-5 textleft\" ; colspan=\"6\"> *".$_GET["SPECIALTERM"]." </td> </tr>
    <tr><td class=\"col-2-5 textcenter\" ; colspan=\"6\"> 以上特殊優惠方案僅限於極少數合作廠商，請務必嚴守保密義務。</td> </tr>";}
    ?>
</table>

  <br>
  三、網路訂位系統服務：<br>
  <ol>
  <li>甲方於合作期間將協助乙方於其官方網站、Facebook粉絲專頁、TripAdvisor餐廳資訊頁建立網路訂位系統服務，並提供EZTABLE網路訂位服務予乙方利用，甲方應協助乙方統整所有之訂位資訊。
  </li>
  <li>甲方同意協助乙方運用中華電信市話來電答鈴服務，提供消費者更完整的服務體驗。
  </li>
  <li>乙方在飯店未客滿或包場情況下，不得隨意關閉其官方網站、Facebook粉絲專頁之網路訂位系統服務，亦不得要求甲方關閉EZTABLE之網路訂位服務。
  </li>
  <?php if ($_GET["ONLYCHANNEL"] == "YES"){echo "<li>乙方瞭解並同意，於本協議書合作期間，甲方經營之EZTABLE為乙方獨家且唯一之網路訂位系統服務合作通路。</li>";} ?>
  </ol>
  <br>
    四、電子商務服務交易模式：<br>
    <ol>
    <li>消費者透過甲方所經營及建置之EZTABLE或其他平台購買乙方所發行之禮券，甲方將以電子郵件及簡訊寄送消費者一組消費憑證，及向消費者所填寫之信用卡發卡銀行請款，禮券之發票由甲方開出。
    </li>
    <li>甲方於向消費者所填寫之信用卡發卡銀行請款成功後，應將訂位及預付資料通知乙方，乙方應使持有該消費憑證之消費者兌換其表彰之商品或服務，乙方不得以任何理由拒絕。
    </li>
    <li>每一組消費憑證僅得使用乙次，乙方應於消費者使用消費憑證後，核對甲方提供之消費者名單資料，避免消費憑證重複使用至乙方產生損害，如有前述情形，乙方應立即與甲方聯繫。
    </li>
    </ol>
  <br>

    五、委託銷售禮券及其他相關服務：<br>
    <ol>
    <li>乙方同意授權委託EZTABLE依本協議書之約定及EZTABLE其他使用規範，進行其所發行禮券之銷售、買賣等電子商務活動。
    </li>
    <li>甲方得就實際代理銷售之交易金額收取每筆服務報酬 5%，發行禮券之優惠內容，另以餐廳合作資料表載明。
    </li>
    <li>甲方瞭解並同意乙方得決定禮券發行之內容。乙方同意消費者得透過EZTABLE購買禮券，並得以優惠內容購買、兌換載明於禮券上之商品或服務。
    </li>
    <li>甲方瞭解並同意盡商業上最大努力銷售乙方所發行之禮券，但於符合下述情況時，甲方有權終止部分或全部之銷售，且不因此向乙方負擔任何責任及賠償：<br>
    $本網站定期及緊急維護；<br>
    $本網站重新上線、設計，或功能改進；<br>
    $電信服務不可抗力之故障、暫停或中斷，如：電信網連接失敗、駭客襲擊、分裂或第三方非法入侵或其他不可歸責於甲方之事由；及其他甲方認為應終止銷售之合理事由。<br>
    </li>
    <li>乙方保證消費者得依禮券之使用規則、期間之規定，兌換禮券上載明之商品或服務。
    </li>
    <li>乙方應負責處理與消費者間之消費糾紛，惟該消費糾紛經甲方合理判斷有危害商譽之虞時，為保障消費者權益，甲方得將該禮券購買金額退還予消費者。
    </li>
    <li>於法令許可之範圍內，乙方變更禮券服務時，應自行負擔該變更對銷售額及消費者吸引力等之影響，對於變更生效前已銷售之禮券，乙方並應繼續依原禮券所載明內容提供消費者該商品或服務。
    </li>
    </ol>
    <br>

    六、履約擔保：<br>
   <ol>乙方同意透過甲方委託銷售之禮券，均使用甲方所提供之金流服務。除法規另有豁免規定外，甲方承諾及保證，甲方應依合於法令之方式，協助提供乙方所發行禮券至少一年之足額履約擔保。消費者透過本網站購買乙方禮券之價金，將存入於國泰世華銀行之專款專用帳戶或依其他合法方式辦理履約保證。
   </ol>
   <br>

   七、結帳：<br>
    <ol>
    <li>乙方應於每月10日前提供已消費之禮券總金額、服務酬勞及退還禮券購買金額之明細及統一發票予甲方；甲方經審核前述明細，若確認無誤，應於15個工作日內按總金額扣除服務酬勞及退還禮券購買金額後之數額，匯款至乙方所指定之金融機構帳戶。</td>
    </li>
    <br>
    <li> 乙方指定之金融機構帳戶<br>
    <br>
    戶名：<?php echo $_GET["BANKACCOUNTNAME"]; ?><br>
    銀行代號、銀行名稱：<?php echo $_GET["BANK"]; ?><br>
    分行名稱：<?php echo $_GET["BANKBRANCH"]; ?><br>
    分行代號：<?php echo $_GET["BANKBRANCHNO"]; ?><br>
    帳號：<?php echo $_GET["BANKACCOUNT"]; ?><br>
    </li>
    <br>
    <li>乙方指定發票資訊<br>
    <br>
    抬頭：<?php echo $_GET["COMPANYNAME"]; ?><br>
    統編：<?php echo $_GET["VAT"]; ?><br>
    發票寄送地址：<?php echo $_GET["ADDRESS"]; ?><br>
    </li>
    </ol>

    八、智慧財產權：<br>
    <ol>
    <li>為履行本協議書，雙方各自授權他方得使用並刊登一方之名稱或商標於平面、立體或電子文宣及製作物上，惟不得用於本協議書以外之目的，並應擔保所提供之名稱、商標、圖片、標幟、文字、廣告文案或其他相關資料等內容均無妨害公序良俗或違反法令之情事，亦無侵害他人商標權、專利權、著作權等智慧財產權或其他相關權利。 
    </li>
    </ol>

     九、營業秘密：<br>
     <ol>
     <li>雙方當事人均同意，於本協議書存續期間中或終止或解除後，其就已獲取對方之機密資訊，均應採取合理之措施對對方的機密資訊進行保密，以防止其被擅自使用、取得、洩露或揭露。除本協議書中規定之使用目的及對方當事人明確書面授權中規定的使用目的外，任一方當事人均不得將對方之機密資訊用於其他目的。
     </li>
     <li>各方當事人僅能將上述機密資訊揭露給己方爲履行本協議書而須知曉上述機密資訊之員工或顧問，且該員工或顧問亦應履行相應之保密義務，該保密義務的嚴格程度不得低於本協議書中所規定之保密義務程度。
    </li>
    <li>本協議書經終止或解除後15日內，雙方應將其因本協議書而持有他方之一切機密資訊歸還於他方。
    </li>
    </ol>

    十、個人資料保護：<br>
    <ol>
    <li>雙方均應依中華民國法律中有關個人資料保護之規定蒐集、處理、利用消費者之個人資料，有關雙方之會員資料及任一方相關作業及資訊流程，為各自之業務機密，任一方因執行本協議書而取得或知悉他方之業務機密或其他未公開資料，除依法律規定或經該他方及各該會員書面同意外，不得以任何方式洩漏、利用或以其他方法使他人知悉該等資料。</li>
    <li>雙方不得洩漏或提供消費者之個人資料予第三人，或將消費者個人資料作特定目的外之處理及利用，亦不得逾越法令與雙方約定之使用範圍。
    </li>
    <li>雙方僅能將消費者之個人資料依實際情形而須知悉之程度，揭露給己方為履行本協議書而須知悉消費者個人資料之員工或顧問，該員工或顧問亦應履行相應之個資保護義務，且其所負之保護義務不得低於前二項所規定之程度。
    </li>
    <li>任一方如因故意或過失致消費者之個人資料有遺失、洩漏或作其他不當利用等情事時，未違約方得隨時終止本協議書，違約方及其相關人員因而所生之損害、費用及其他一切法律責任，概由違約方自行負責。
    </li>
    <li>雙方同意於發生個人資料違法事件時，未經他方許可，不得對外發表言論。
    </li>
    </ol>

    十一、協議書展延與終止：<br>
    <ol>
    <li>本協議書得經雙方當事人書面合意終止。
    </li>
    <li>為維護甲方平台品牌形象及公信力，如乙方於合作期間內，連續三個月會員問卷評論分數總平均未達 4.0 分，甲方保留終止合作之權利。
    </li>
    <?php if ($_GET["AUTOEXTENSION"] == "YES") {echo "<li>甲、乙雙方於本協議書合作期間屆滿前60日內，若雙方均未以書面向他方為反對續約之意思表示或要求另訂新約者，雙方同意即依本協議書內容自動續約一年，不另訂新約，嗣後亦同。</li>";} ?>

    <li>甲、乙方如有違反本協議書所列各款約定之情事，經未違約方以書面通知後，未於7日內補正者，未違約之一方得以書面通知違約方終止本協議書，違約方並應賠償未違約方因此所生之一切損害及損失。
    </li>


    <?php if ($_GET["BREAKFINE"] == "YES"){echo "<li>如乙方於合約日期內無特殊條件提早解約，乙方應支付甲方違約金新台幣一萬元。</li>";} ?>
    <li>本協議書縱依前項規定而終止，甲、乙雙方仍不得影響已購買乙方所發行禮券之消費者之權益。
    </li>
    </ol>

    十二、通知：<br>
    <ol>
    除本協議書另有約定，本協議書中所有通知、要求以及其他聯絡，均應以書面為之，並以親自遞送、傳真方式、其他電子通訊方式或可隔日送達快遞方式送達至下方之通訊地址，或經由雙方書面同意，寄至與下方通訊地址不同之住址；若親自遞送或利用電子通訊，以對方收到當天為送達日，若利用隔日送達之快遞方式，則應視寄出後2天為送達日。 </ol>
    十三、一般條款：<br>
    <ol>
    <li>完整協議：本協議書構成雙方當事人間之完整合意，並取代雙方先前一切對話、聲明、合意、書面或口頭之協議。
    </li>
    <li>可分割性：本協議書之任一條款如有違反法律，或被視為不對任何人具法律約束力之情形時，該條款將被視為無效，惟本協議書之其他所有部分仍繼續有效。
    </li>
    <li>保密：未經他方當事人事前之書面同意，任一方不得將本協議書之權利義務轉讓予第三人。
    </li>
    <li>準據法：本協議書之準據法為中華民國法令，本協議書如有未盡事宜，悉依中華民國相關法律解釋及處理之。
    </li>
    <li>爭議之解決：雙方因本協議書所生之爭執、糾紛、歧異或索賠，包括協議書的效力、違約爭議及終止等一切事宜而涉訟時，雙方同意以臺灣臺北地方法院為第一審管轄法院。
    </li>
    <li>本協議書之增加、刪除或修改，非經雙方當事人以書面協議及用印，不生效力。
    </li>
    <li>份數：本協議書壹式貳份，甲、乙雙方各執乙份為憑。
    </li>
    <br>
    <br>

    <tr>
    <td>
    </td>
    </tr>
  <tr><td colspan="10">
  <table style="margin:0px auto;border:1px solid;width:80%;" border="1px solid" rules="all" cellpadding="25px">
  <tr><td class="col-1-10">甲方：</td><td class="col-3-10">三二三網路科技股份有限公司</td><td class="col-1-10">乙方：</td><td class="col-3-10"><?php echo $_GET["COMPANYNAME"]; ?></td></tr>
  <tr><td class="col-1-10">負責人：</td><td class="col-3-10" >謝智倫</td><td class="col-1-10">負責人：</td><td class="col-3-10"><?php echo $_GET["RESPONSIBLEPERSON"]; ?></td></tr>
  <tr><td class="col-1-10">統一編號：</td><td class="col-3-10">29084823</td><td class="col-1-10">統一編號：</td><td class="col-3-10"><?php echo $_GET["VAT"]; ?></td></tr>
  <tr><td class="col-1-10">地址：</td><td class="col-3-10">106 台北市大安區敦化南路二段216號14樓</td><td class="col-1-10">地址：</td><td class="col-3-10"><?php echo $_GET["ADDRESS"]; ?></td></tr>
  <tr><td class="col-1-10">電話：</td><td class="col-3-10">02-2378-8323 #5</td><td class="col-1-10">電話：</td><td class="col-3-10"><?php echo $_GET["PHONE"]; ?></td></tr>
  <tr><td class="col-1-10">傳真：</td><td class="col-3-10">02-2377-6323</td><td class="col-1-10">傳真：</td><td class="col-3-10"><?php echo $_GET["FAX"]; ?></td></tr>
  <tr><td class="col-1-10">聯絡人：</td><td class="col-3-10">聯絡人：<br>姓名：<?php echo $_GET["OWNERNAME"]; ?><br>聯絡電話：<?php echo $_GET["OWNERNO"]; ?><br>電子郵件：<?php echo $_GET["OWNEREMAIL"]; ?><br></td>
  <td class="col-1-10">聯絡人：</td><td class="col-3-10">
  聯絡人：<br>
  姓名：<?php echo $_GET["CONTACTNAME"]; ?><br>
  電話：<?php echo $_GET["CONTACTNO"]; ?><br>
  電子郵件<?php echo $_GET["CONTACTMAIL"]; ?><br>
  <br>
  會計窗口<br>
  姓名：<?php echo $_GET["FANAME"]; ?><br>
  電話：<?php echo $_GET["FANO"]; ?><br>
  電子郵件：<?php echo $_GET["FAMAIL"]; ?><br>
  </td></tr>
</table>
</td>
</tr>
<br>
<br>






</body></html>