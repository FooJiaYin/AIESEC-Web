<!DOCTYPE html>
<html lang="zh-tw">
  <head>
    <meta charset="utf-8">
    <title>SF-EXPA同步小玩具</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.min.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<?php
//log in SF

// SOAP_CLIENT_BASEDIR - folder that contains the PHP Toolkit and your WSDL
// $USERNAME - variable that contains your Salesforce.com username (must be in the form of an email)
// $PASSWORD - variable that contains your Salesforce.ocm password
define("USERNAME", "chenyanling921013@gmail.com");
define("PASSWORD", "Ling8023");
// define("SECURITY_TOKEN", "sdfhkjwrhgfwrgergp");
ini_set("soap.wsdl_cache_enabled", 0);

require_once ('soapclient/SforceEnterpriseClient.php');

try{

$mySforceConnection = new SforceEnterpriseClient();
$mySforceConnection->createConnection("soapclient/enterprise.wsdl.xml");
$mySforceConnection->login(USERNAME, PASSWORD);

}catch(Exception $e){
    echo $e->faultstring;
}
?>

<?php
require_once ('helper.php');
?>

<?php
    $token_enter = $_GET["expaid"];
    //$token_enter = "de823b194462280a29e9cb051e60c81a622f4bf705333f247ea77cad63d4ecec";
    $token = "access_token=".$token_enter;

    
    $start_date = "2015-08-01";
    $end_date = "2015-08-31";
    // $start_date = "2015-08-01";
    // $end_date = "2015-08-31";
    $basic_url = "https://gis-api.aiesec.org/v1/applications/basic_analytics.json?&office_id=1561";

    //iGCDP
    $prog = "programmes%5B%5D=1";
    $type = "type=opportunity";
    $url = $basic_url . "&" . $token . "&end_date=" . $end_date . "&start_date=" . $start_date . "&" . $prog . "&" . $type;
    //echo "Updating <br>";
    //echo $url . "<br>";
    $json = file_get_contents($url);
    $data_IGCDP = json_decode($json, TRUE);

    //iGIP
    $prog = "programmes%5B%5D=2";
    $type = "type=opportunity";
    $url = $basic_url . "&" . $token . "&end_date=" . $end_date . "&start_date=" . $start_date . "&" . $prog . "&" . $type;
    //echo "Updating <br>";
    //echo $url . "<br>";
    $json = file_get_contents($url);
    $data_IGIP = json_decode($json, TRUE);

    //oGCDP
    $prog = "programmes%5B%5D=1";
    $type = "type=person";
    $url = $basic_url . "&" . $token . "&end_date=" . $end_date . "&start_date=" . $start_date . "&" . $prog . "&" . $type;
    //echo "Updating <br>";
    //echo $url . "<br>";
    $json = file_get_contents($url);
    $data_OGCDP = json_decode($json, TRUE);

    //oGIP
    $prog = "programmes%5B%5D=2";
    $type = "type=person";
    $url = $basic_url . "&" . $token . "&end_date=" . $end_date . "&start_date=" . $start_date . "&" . $prog . "&" . $type;
    //echo "Updating <br>";
    //echo $url . "<br>";
    $json = file_get_contents($url);
    $data_OGIP = json_decode($json, TRUE);

    // process lc_num_to_sf_opp
    $json_lc_to_sf_opp = file_get_contents("./lc_num_to_sf_opp.json");
    $data_lc_sf = json_decode($json_lc_to_sf_opp, TRUE);

    // todo
    // token input 
    // update to SF fields
    
?>


<?php
  //sync iGCDP
  if($_GET["sync"]==1||$_GET["sync"]==5){

    $sobj = array();
    for($i=0;$i<20;$i++){
      $lc_num = $data_IGCDP['analytics']['children']['buckets'][$i]['key'];
      $match = $data_IGCDP['analytics']['children']['buckets'][$i]['total_approvals']['doc_count'];
      $realize = $data_IGCDP['analytics']['children']['buckets'][$i]['total_realized']['doc_count'];      
      $sobj[] = new stdclass();
      if( whatlc($lc_num)==NULL ) continue;

      $sobj[$i]->Id = $data_lc_sf[(string)$lc_num]["ICX-GCDP"];
      $sobj[$i]->{getsffieldname(8,"Match")} = $match;
      $sobj[$i]->{getsffieldname(8,"Realize")} = $realize;
    }
    $response = $mySforceConnection->update($sobj, 'Opportunity');
  echo '<a href="index.php" class="btn btn-block btn-lg btn-info">ICX GCDP更新完成，按此重新整理</a>';
  }

  if($_GET["sync"]==2||$_GET["sync"]==5){

    $sobj = array();
    for($i=0;$i<20;$i++){
      $lc_num = $data_IGIP['analytics']['children']['buckets'][$i]['key'];
      $match = $data_IGIP['analytics']['children']['buckets'][$i]['total_approvals']['doc_count'];
      $realize = $data_IGIP['analytics']['children']['buckets'][$i]['total_realized']['doc_count'];      
      $sobj[] = new stdclass();
      if( whatlc($lc_num)==NULL ) continue;

      $sobj[$i]->Id = $data_lc_sf[(string)$lc_num]["ICX-GIP"];
      $sobj[$i]->{getsffieldname(8,"Match")} = $match;
      $sobj[$i]->{getsffieldname(8,"Realize")} = $realize;
    }
    $response = $mySforceConnection->update($sobj, 'Opportunity');
  echo '<a href="index.php" class="btn btn-block btn-lg btn-info">ICX GIP更新完成，按此重新整理</a>';
  }

  if($_GET["sync"]==3||$_GET["sync"]==5){

    $sobj = array();
    for($i=0;$i<20;$i++){
      $lc_num = $data_OGCDP['analytics']['children']['buckets'][$i]['key'];
      $match = $data_OGCDP['analytics']['children']['buckets'][$i]['total_approvals']['doc_count'];
      $realize = $data_OGCDP['analytics']['children']['buckets'][$i]['total_realized']['doc_count'];      
      $sobj[] = new stdclass();
      if( whatlc($lc_num)==NULL ) continue;

      $sobj[$i]->Id = $data_lc_sf[(string)$lc_num]["OGX-GCDP"];
      $sobj[$i]->{getsffieldname(8,"Match")} = $match;
      $sobj[$i]->{getsffieldname(8,"Realize")} = $realize;
    }
    $response = $mySforceConnection->update($sobj, 'Opportunity');
  echo '<a href="index.php" class="btn btn-block btn-lg btn-info">OGX GCDP更新完成，按此重新整理</a>';
  }

   if($_GET["sync"]==4||$_GET["sync"]==5){

    $sobj = array();
    for($i=0;$i<20;$i++){
      $lc_num = $data_OGIP['analytics']['children']['buckets'][$i]['key'];
      $match = $data_OGIP['analytics']['children']['buckets'][$i]['total_approvals']['doc_count'];
      $realize = $data_OGIP['analytics']['children']['buckets'][$i]['total_realized']['doc_count'];      
      $sobj[] = new stdclass();
      if( whatlc($lc_num)==NULL ) continue;

      $sobj[$i]->Id = $data_lc_sf[(string)$lc_num]["OGX-GIP"];
      $sobj[$i]->{getsffieldname(8,"Match")} = $match;
      $sobj[$i]->{getsffieldname(8,"Realize")} = $realize;
    }
    $response = $mySforceConnection->update($sobj, 'Opportunity');
  echo '<a href="index.php" class="btn btn-block btn-lg btn-info">OGX GIP更新完成，按此重新整理</a>';
  }


?>





    <div class="container-fluid">
        <h2>EXPA - Salesforce 同步小玩具</h2>
        <h4>
          日期：
          <?php
              echo $start_date . "～" . $end_date ;
           ?>
        </h4>
        <form>
          <input type="text" name="expaid">
          <input type="submit" value="Submit">
        </form>



<div class="row">

<div class="col-md-6">

<h2>
<b>ICX GCDP</b>
</h2>

<?php

$sf_id_array_IGCDP = array();

for($i=0;$i<=19;$i++){
    $lc_num = $data_IGCDP['analytics']['children']['buckets'][$i]['key'];
    array_push($sf_id_array_IGCDP,$data_lc_sf[(string)$lc_num]["ICX-GCDP"]) ;
}
try {
  $sf_data_IGCDP=$mySforceConnection->retrieve("Id,Name,".getsffieldname(8,"Match").",".getsffieldname(8,"Realize"),"Opportunity",$sf_id_array_IGCDP);
  //print_r($sf_data_IGCDP); 
} 
catch (Exception $e) 
{
  echo $mySforceConnection->getLastRequest();
  echo $e->faultstring;
}
?>


<table  class="table">
    <thead>
        <tr>
            <td>LC</td>
            <td>SF Opp</td>
            <td>Match</td>
            <td>Match on SF<br>(<?php echo getsffieldname(8,"Match"); ?>)</td>
            <td>Realize</td>
            <td>Realize on SF<br>(<?php echo getsffieldname(8,"Realize"); ?>)</td>
        </tr>
    </thead>
    <tbody>
        <?php
            for ($i=0; $i < 20; $i++) { 
                $lc_num = $data_IGCDP['analytics']['children']['buckets'][$i]['key'];
                $match = $data_IGCDP['analytics']['children']['buckets'][$i]['total_approvals']['doc_count'];
                $realize = $data_IGCDP['analytics']['children']['buckets'][$i]['total_realized']['doc_count'];
                if( whatlc($lc_num)==NULL ) continue;
                echo "<tr>";
                echo "<td>";
                echo whatlc($lc_num);
                echo "</td>\n";
                echo "<td>".html_link_opp_url($data_lc_sf[(string)$lc_num]["ICX-GCDP"])."</td>";
                echo "<td>".$match."</td>";

                $sf_IGCDP_match = $sf_data_IGCDP[$i]->{getsffieldname(8,"Match")} ;
                $sf_IGCDP_realize = $sf_data_IGCDP[$i]->{getsffieldname(8,"Realize")} ;
                echo "<td ";
                if($sf_IGCDP_match == $match) echo "class=\"success\">";
                else echo "class=\"danger\">";

                if($sf_IGCDP_match == NULL) echo "0";
                else echo $sf_IGCDP_match;
                echo "</td>";
                echo "<td>".$realize."</td>";
                echo "<td ";
                if($sf_IGCDP_realize == $realize) echo "class=\"success\">";
                else echo "class=\"danger\">";
                if($sf_IGCDP_realize == NULL) echo "0";
                else echo $sf_IGCDP_realize;
                echo "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>

<a class="btn btn-block btn-lg btn-danger" href="index.php?sync=1&expaid=<?php echo $token_enter; ?>">同步ICX GCDP</a>

</div>


<?php

$sf_id_array_IGIP = array();

for($i=0;$i<=19;$i++){
    $lc_num = $data_IGIP['analytics']['children']['buckets'][$i]['key'];
    array_push($sf_id_array_IGIP,$data_lc_sf[(string)$lc_num]["ICX-GIP"]) ;
}
try {
  $sf_data_IGIP=$mySforceConnection->retrieve("Id,Name,".getsffieldname(8,"Match").",".getsffieldname(8,"Realize"),"Opportunity",$sf_id_array_IGIP);
} 
catch (Exception $e) 
{
  echo $mySforceConnection->getLastRequest();
  echo $e->faultstring;
}
?>





<div class="col-md-6">

<h2>
<b>ICX GIP</b>
</h2>
<table  class="table">
    <thead>
        <tr>
            <td>LC</td>
            <td>SF Opp</td>
            <td>Match</td>
            <td>Match on SF<br>(<?php echo getsffieldname(8,"Match"); ?>)</td>
            <td>Realize</td>
            <td>Realize on SF<br>(<?php echo getsffieldname(8,"Realize"); ?>)</td>
        </tr>
    </thead>
    <tbody>
        <?php

            //TKU is gone, don't know why
            for ($i=0; $i < 20; $i++) { 
                $lc_num = $data_IGIP['analytics']['children']['buckets'][$i]['key'];
                $match = $data_IGIP['analytics']['children']['buckets'][$i]['total_approvals']['doc_count'];
                $realize = $data_IGIP['analytics']['children']['buckets'][$i]['total_realized']['doc_count'];
                if( whatlc($lc_num)==NULL ) continue;
                echo "<tr>";
                echo "<td>";
                echo whatlc($lc_num);
                echo "</td>\n";
                echo "<td>".html_link_opp_url($data_lc_sf[(string)$lc_num]["ICX-GIP"])."</td>";
                echo "<td>".$match."</td>";

                $sf_IGIP_match = $sf_data_IGIP[$i]->{getsffieldname(8,"Match")} ;
                $sf_IGIP_realize = $sf_data_IGIP[$i]->{getsffieldname(8,"Realize")} ;
                echo "<td ";
                if($sf_IGIP_match == $match) echo "class=\"success\">";
                else echo "class=\"danger\">";

                if($sf_IGIP_match == NULL) echo "0";
                else echo $sf_IGIP_match;
                echo "</td>";
                echo "<td>".$realize."</td>";
                echo "<td ";
                if($sf_IGIP_realize == $realize) echo "class=\"success\">";
                else echo "class=\"danger\">";
                if($sf_IGIP_realize == NULL) echo "0";
                else echo $sf_IGIP_realize;
                echo "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
<a class="btn btn-block btn-lg btn-danger" href="index.php?sync=2&expaid=<?php echo $token_enter; ?>">同步ICX GIP</a>

</div>

</div>
<div class="row">





<?php

$sf_id_array_OGCDP = array();

for($i=0;$i<=19;$i++){
    $lc_num = $data_OGCDP['analytics']['children']['buckets'][$i]['key'];
    array_push($sf_id_array_OGCDP,$data_lc_sf[(string)$lc_num]["OGX-GCDP"]) ;
}
try {
  $sf_data_OGCDP=$mySforceConnection->retrieve("Id,Name,".getsffieldname(8,"Match").",".getsffieldname(8,"Realize"),"Opportunity",$sf_id_array_OGCDP);
} 
catch (Exception $e) 
{
  echo $mySforceConnection->getLastRequest();
  echo $e->faultstring;
}
?>



<div class="col-md-6">

<h2>
<b>OGX GCDP</b>
</h2>
<table  class="table">
    <thead>
        <tr>
            <td>LC</td>
            <td>SF Opp</td>
            <td>Match</td>
            <td>Match on SF<br>(<?php echo getsffieldname(8,"Match"); ?>)</td>
            <td>Realize</td>
            <td>Realize on SF<br>(<?php echo getsffieldname(8,"Realize"); ?>)</td>
        </tr>
    </thead>
    <tbody>
        <?php
            for ($i=0; $i < 20; $i++) { 
                $lc_num = $data_OGCDP['analytics']['children']['buckets'][$i]['key'];
                $match = $data_OGCDP['analytics']['children']['buckets'][$i]['total_approvals']['doc_count'];
                $realize = $data_OGCDP['analytics']['children']['buckets'][$i]['total_realized']['doc_count'];
                if( whatlc($lc_num)==NULL ) continue;
                echo "<tr>";
                echo "<td>";
                echo whatlc($lc_num);
                echo "</td>\n";
                echo "<td>".html_link_opp_url($data_lc_sf[(string)$lc_num]["OGX-GCDP"])."</td>";
                echo "<td>".$match."</td>";
                $sf_OGCDP_match = $sf_data_OGCDP[$i]->{getsffieldname(8,"Match")} ;
                $sf_OGCDP_realize = $sf_data_OGCDP[$i]->{getsffieldname(8,"Realize")} ;
                echo "<td ";
                if($sf_OGCDP_match == $match) echo "class=\"success\">";
                else echo "class=\"danger\">";

                if($sf_OGCDP_match == NULL) echo "0";
                else echo $sf_OGCDP_match;
                echo "</td>";
                echo "<td>".$realize."</td>";
                echo "<td ";
                if($sf_OGCDP_realize == $realize) echo "class=\"success\">";
                else echo "class=\"danger\">";
                if($sf_OGCDP_realize == NULL) echo "0";
                else echo $sf_OGCDP_realize;
                echo "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
<a class="btn btn-block btn-lg btn-danger" href="index.php?sync=3&expaid=<?php echo $token_enter; ?>">同步OGX GCDP</a>

</div>


<?php

$sf_id_array_OGIP = array();

for($i=0;$i<=19;$i++){
    $lc_num = $data_OGIP['analytics']['children']['buckets'][$i]['key'];
    array_push($sf_id_array_OGIP,$data_lc_sf[(string)$lc_num]["OGX-GIP"]) ;
}
try {
  $sf_data_OGIP=$mySforceConnection->retrieve("Id,Name,".getsffieldname(8,"Match").",".getsffieldname(8,"Realize"),"Opportunity",$sf_id_array_OGIP);
} 
catch (Exception $e) 
{
  echo $mySforceConnection->getLastRequest();
  echo $e->faultstring;
}
?>





<div class="col-md-6">

<h2>
<b>OGX GIP</b>
</h2>
<table  class="table">
    <thead>
        <tr>
            <td>LC</td>
            <td>SF Opp</td>
            <td>Match</td>
            <td>Match on SF<br>(<?php echo getsffieldname(8,"Match"); ?>)</td>
            <td>Realize</td>
            <td>Realize on SF<br>(<?php echo getsffieldname(8,"Realize"); ?>)</td>
        </tr>
    </thead>
    <tbody>
        <?php
            for ($i=0; $i < 20; $i++) { 
                $lc_num = $data_OGIP['analytics']['children']['buckets'][$i]['key'];
                $match = $data_OGIP['analytics']['children']['buckets'][$i]['total_approvals']['doc_count'];
                $realize = $data_OGIP['analytics']['children']['buckets'][$i]['total_realized']['doc_count'];
                if( whatlc($lc_num)==NULL ) continue;
                echo "<tr>";
                echo "<td>";
                echo whatlc($lc_num);
                echo "</td>\n";
                echo "<td>".html_link_opp_url($data_lc_sf[(string)$lc_num]["OGX-GIP"])."</td>";
                echo "<td>".$match."</td>";
                $sf_OGIP_match = $sf_data_OGIP[$i]->{getsffieldname(8,"Match")} ;
                $sf_OGIP_realize = $sf_data_OGIP[$i]->{getsffieldname(8,"Realize")} ;
                echo "<td ";
                if($sf_OGIP_match == $match) echo "class=\"success\">";
                else echo "class=\"danger\">";

                if($sf_OGIP_match == NULL) echo "0";
                else echo $sf_OGIP_match;
                echo "</td>";
                echo "<td>".$realize."</td>";
                echo "<td ";
                if($sf_OGIP_realize == $realize) echo "class=\"success\">";
                else echo "class=\"danger\">";
                if($sf_OGIP_realize == NULL) echo "0";
                else echo $sf_OGIP_realize;
                echo "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
<a class="btn btn-block btn-lg btn-danger" href="index.php?sync=4&expaid=<?php echo $token_enter; ?>">同步OGX GIP</a>

</div>

</div>
    </div>
    <!-- /.container -->


    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/vendor/video.js"></script>
    <script src="js/flat-ui.min.js"></script>

  </body>
</html>
