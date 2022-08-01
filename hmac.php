<?php 
    $json = json_encode([
        "user_id" => 1,
        "time"  => time()
    ]);

    $hashHmac = hash_hmac('sha256', $json, "12345");

    if(hash_hmac("sha256", $json, "12345") == $hashHmac){
        echo "Equals";
    }else{
        echo "Not Equals";
    }  
?>