<?php
session_start();
// You can call our API following curl post example
$url = "https://ipaytotal.solutions/api/transaction";
$key = "Uru4AbZLW5WHcaPaNSD0ZzCdasDjhd6YMqVCydTtKGQO7hitwPydGpOAnkWJFumg";
// Fill with real customer info
$data = [
    'api_key' => $key,
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'address' => $_POST['address'],
    'country' => $_POST['country'],
    'state' =>$_POST['state'], // if your country US then use only 2 letter state code.
    'city' => $_POST['city'],
    'zip' => $_POST['zip'],
    'email' => $_POST['email'],
    'phone_no' => $_POST['phone_no'],
    'card_type' =>$_POST['card_type'], // See your card type in list
    'amount' => $_POST['amount'],
    'currency' => $_POST['currency'],
    'card_no' => $_POST['card_no'],
    'ccExpiryMonth' => $_POST['ccExpiryMonth'],
    'ccExpiryYear' => $_POST['ccExpiryYear'],
    'cvvNumber' => $_POST['cvvNumber'],
];

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER,[
    'Content-Type: application/json'
]);
$response = curl_exec($curl);
curl_close($curl);

$responseData = json_decode($response);
echo "<pre>";
print_r($responseData);
exit;
if($responseData->status == 'success') {
    $_SESSION["status"] = 'success';
    header("Location: index.php");
} else {
    $_SESSION["status"] = 'fail';
    header("Location: index.php");
}