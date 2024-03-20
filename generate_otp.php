<?php
function generateOTP($length = 6) {
    $characters = '0123456789';
    $otp = '';
    $max = strlen($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $otp .= $characters[mt_rand(0, $max)];
    }
    return $otp;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form submission
    $phoneNumber = $_POST['phoneNumber'];

    // Generate OTP
    $otp = generateOTP();

    // You can store the OTP in a session, database, or send it via email/SMS

    echo "OTP generated for $phoneNumber: $otp";
}
?>
