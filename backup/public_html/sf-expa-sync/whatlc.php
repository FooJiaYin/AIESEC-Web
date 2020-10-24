<?php
function whatlc($lc){  
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
        )
    return $lc_list[$lc];
}
?>

<?php
    
    echo whatlc(1310);

?>