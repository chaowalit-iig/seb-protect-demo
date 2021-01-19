<?php

 if (isset($_POST['form_submitted'])){

  curl_setopt_array($curl, array(
       CURLOPT_URL => 'https://login.salesforce.com/services/oauth2/token?grant_type=password&client_id=3MVG9kBt168mda_8J9udsdveviGy2Jmw2UJXNicivKpPoDRTtzmVLsL3hBVW1A7reQl1N9zdxMMEHsyhZU7Xp&client_secret=113FEC8F25DF38E3D50707ABBBE9892E302E0FF766AA999038436615B7F5BAA5&username=moo@jan21rs.demo&password=passw0rd2021',
       CURLOPT_RETURNTRANSFER => true,
       CURLOPT_ENCODING => '',
       CURLOPT_MAXREDIRS => 10,
       CURLOPT_TIMEOUT => 0,
       CURLOPT_FOLLOWLOCATION => true,
       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
       CURLOPT_CUSTOMREQUEST => 'POST',
       CURLOPT_HTTPHEADER => array(
         'Cookie: BrowserId=BEkxA0acEeuMRkvPp9yBmg'
       ),
     ));

     $response = curl_exec($curl);
     curl_close($curl);
     $array = json_decode($response, true);
     session_start();
     setcookie( $array['access_token']);
//      echo ($array['access_token']);



     $curlDroplead = curl_init();
     curl_setopt_arrayDroplead($curlDroplead, array(
       CURLOPT_URL => 'https://jan21rs-20210113-demo.my.salesforce.com/services/apexrest/wsDroplead/leadProcess',
       CURLOPT_RETURNTRANSFER => true,
       CURLOPT_ENCODING => '',
       CURLOPT_MAXREDIRS => 10,
       CURLOPT_TIMEOUT => 0,
       CURLOPT_FOLLOWLOCATION => true,
       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
       CURLOPT_CUSTOMREQUEST => 'POST',
       CURLOPT_POSTFIELDS =>'{
        "reqCreateLead":true,
        "LeadFirstName":"ทศพล",
        "LeadLastName":"เกษมสุข"
     }',
       CURLOPT_HTTPHEADER => array(
         'Authorization: Bearer' $array['access_token'],
         'Content-Type: application/json',
         'Sforce-Auto-Assign: FALSE',
         'Cookie: BrowserId=BEkxA0acEeuMRkvPp9yBmg'
       ),
     ));

     $responseDroplead = curl_exec($curlDroplead);
     curl_close($curlDroplead);
     echo $response;
 }






