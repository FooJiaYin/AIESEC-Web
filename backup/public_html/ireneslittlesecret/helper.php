<?php
function whatlc($lc){  
    // 回傳LC在EXPA的ID~

    $lc_list=array(
        1713 => "CCU",
        1710 => "FCU",
        1310 => "FJU",
        1307 => "MCU",
        654 => "NCCU",
        1711 => "NCHU",
        963 => "NCKU",
        267 => "NCTU",
        1712 => "NCU",
        265 => "NDHU",
        612 => "NSYSU",
        268 => "NTHU",
        605 => "NTPU",
        672 => "NTU",
        925 => "SCU",
        1504 => "THU",
        1826 => "TKU",
        264 => "WZU",
        1358 => "YZU"
        );
    return $lc_list[$lc];
}

function getsffieldname($month, $stage){
    //回傳對應的SF欄位名稱
    //output = Aug_EXPA_Match_Reality__c ;
    //$stage = Raise | Match | Realize
    switch ($month) {
        case 1:
            $month_text = "Jan";
            break;
        
        case 2:
            $month_text = "Feb";
            break;
        
        case 3:
            $month_text = "Mar";
            break;
        
        case 4:
            $month_text = "Apr";
            break;
        
        case 5:
            $month_text = "May";
            break;
        
        case 6:
            $month_text = "Jun";
            break;
        
        case 7:
            $month_text = "Jul";
            break;
        
        case 8:
            $month_text = "Aug";
            break;
        
        case 9:
            $month_text = "Sep";
            break;
        
        case 10:
            $month_text = "Oct";
            break;
        
        case 11:
            $month_text = "Nov";
            break;
        
        case 12:
            $month_text = "Dec";
            break;        

        default:
            $month_text = "Err";
            break;
    }

    return $month_text . "_EXPA_" . $stage . "_Reality__c";
}

function html_link_opp_url($opp){
    return "<a href='https://na5.salesforce.com/".$opp."'>".$opp."</a>";
}


?>


