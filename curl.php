<?php
$api_url = 'https://api.verifyway.com/api/v1/';
$api_key = 'API_KEY'; // Replace with your actual API key
$data = array(
    'recipient' => '31612345678',
    'type' => 'otp',
    'code' => '123456'
);
$headers = array(
    'Authorization: Bearer ' . $api_key,
    'Content-Type: application/json',
    'Accept: application/json'
);
$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
if ($response === false) {
    echo 'cURL Error: ' . curl_error($ch);
} else {
    echo 'Response: ' . $response;
}
curl_close($ch);
?>
