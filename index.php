<?php

include_once('google.html');



 $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://login.salesforce.com/services/oauth2/token?grant_type=password&client_id=3MVG9kBt168mda_8J9udsdveviGy2Jmw2UJXNicivKpPoDRTtzmVLsL3hBVW1A7reQl1N9zdxMMEHsyhZU7Xp&client_secret=113FEC8F25DF38E3D50707ABBBE9892E302E0FF766AA999038436615B7F5BAA5&username=tsm@ii.co.th.iigscb&password=P@ssw0rd!?johvih6zqLNNmpEJnDQckIks6',
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
    echo $response;

    $array = json_decode($response, true);
    var_export($array);