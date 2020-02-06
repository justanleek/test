<?php
$apiKey = '0f189bc547f3b310df83fcedae6f6359-us3';
$listId = '1be8c34e2e';
$double_optin=true;
$send_welcome=true;
$email_type = 'html';
$email = $_POST['email'];
//replace us2 with your actual datacenter
$submit_url = "https://us3.admin.mailchimp.com/login/sec-update?referrer=%2F";
$data = array(
    'email_address'=>$email,
    'apikey'=>$apiKey,
    'id' => $listId,
    'double_optin' => $double_optin,
    'send_welcome' => $send_welcome,
    'email_type' => $email_type
);
$payload = json_encode($data);
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $submit_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, urlencode($payload));
 
$result = curl_exec($ch);
curl_close ($ch);
$data = json_decode($result);
if ($data->error){
    echo $data->error;
} else {
    echo "Got it, you've been added to our email list.";
}
?>