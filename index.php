<?php
$Username='Pak_Global';
$Password='Staging@2020';
$OrderNumber='OpenCart19';
$OrderAmount='4400';
$OrderDueDate='21/10/2020';
$IssueDate='14/03/2020';
$OrderExpire='0';
$CustomerName='Umer Aziz';
$CustomerMobile='03004732936';
$CustomerEmail='admin@pak-global.com.pk';
$CustomerAddress='Office no 2, 2nd floor, Mosscow Plaza, Jinnah Avenue, Blue Area, Islamabad Federal, 44000 Pakistan';
echo "https://demoapi.paypro.com.pk/cpay/co?oJson=%5B%7B%22MerchantId%22:%22'.$Username.'%22,%22'MerchantPassword%22:%22'.$Password.'%22%7D,%7B%22OrderNumber%22:%22'.$OrderNumber.'%22,%22OrderAmount%22:%22'.$OrderAmount.'%22,%22OrderDueDate%22:%22'.$OrderDueDate.'%22,%22OrderType%22:%22Service%22,%22IssueDate%22:%22'.$IssueDate.'%22,%22OrderExpireAfterSeconds%22:%22'.$OrderExpire.'%22,%22CustomerName%22:%22'.$CustomerName.'%22,%22CustomerMobile%22:%22'.$CustomerMobile.'%22,%22CustomerEmail%22:%22'.$CustomerEmail.'%22,%22CustomerAddress%22:%22'.$CustomerAddress.'%22%7D%5D";
$curl = curl_init();
curl_setopt_array($curl, array(
      CURLOPT_URL => "https://demoapi.paypro.com.pk/cpay/co?oJson=%5B%7B%22MerchantId%22:%22'.$Username.'%22,%22'MerchantPassword%22:%22'.$Password.'%22%7D,%7B%22OrderNumber%22:%22'.$OrderNumber.'%22,%22OrderAmount%22:%22'.$OrderAmount.'%22,%22OrderDueDate%22:%22'.$OrderDueDate.'%22,%22OrderType%22:%22Service%22,%22IssueDate%22:%22'.$IssueDate.'%22,%22OrderExpireAfterSeconds%22:%22'.$OrderExpire.'%22,%22CustomerName%22:%22'.$CustomerName.'%22,%22CustomerMobile%22:%22'.$CustomerMobile.'%22,%22CustomerEmail%22:%22'.$CustomerEmail.'%22,%22CustomerAddress%22:%22'.$CustomerAddress.'%22%7D%5D",

      CURLOPT_RETURNTRANSFER => true,

      CURLOPT_ENCODING => "",

      CURLOPT_MAXREDIRS => 10,

      CURLOPT_TIMEOUT => 0,

      CURLOPT_FOLLOWLOCATION => true,

      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

      CURLOPT_CUSTOMREQUEST => "POST",

    ));


    $response = curl_exec($curl);


    curl_close($curl);

    echo $response;
?>