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
    
    $start_date = date("Y-m") . "-01";
    $end_date = date("Y-m-d");

    echo "Start Date is " . $start_date . "<br>";
    echo "End Date is " . $end_date . "<br>";
    echo "Updating <br>";
    $basic_url = "https://gis-api.aiesec.org/v1/applications/basic_analytics.json?access_token=626440b1aa292a9fead8db0ab360b568e6daada898d69b92770241a391050cb5&type=opportunity&office_id=1561";

    $prog = "programmes%5B%5D=1";

    $url = $basic_url . "&end_date=" . $end_date . "&start_date=" . $start_date . "&" . $prog;

    $json = file_get_contents($url);
    $data = json_decode($json, TRUE);

?>

<table>
    <thead>
        <tr>
            <td>LC</td>
            <td>Function</td>
            <td>Match</td>
            <td>Realize</td>
        </tr>
    </thead>
    <tbody>
        <?php
            for ($i=0; $i < ; $i++) { 
                $lc_num = $data['analytics']['children']['buckets'][$i]['key'];
                $match = $data['analytics']['children']['buckets'][$i]['total_matched']['doc_count'];
                $realize = $data['analytics']['children']['buckets'][$i]['total_realized']['doc_count'];
                echo "<td>";
                echo whatlc($lc_num);
                echo "</td>\n";
                echo "<td>ICX GCDP</td>";
                echo "<td>".$match."</td>";
                echo "<td>".$realize."</td>";
            }
        ?>
    </tbody>
</table>