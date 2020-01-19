<?php
require('textlocal.class.php');

$textlocal = new Textlocal(false, false,'PnXTarBLQQQ-TysoX2I9tHLPPa6FujyqaHdKbA3C8U');

$numbers = array($_POST['mobile']);
$sender = 'BookExpressBus';
$message = $_POST['message'];

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    print_r($result);
    header("location: admin.php");
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
?>