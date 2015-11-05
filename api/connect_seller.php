<?php
include '../register/smtpmail/library.php';
include "../register/smtpmail/classes/class.phpmailer.php";

//$otp_text = "Hi Thank you for signing up on  SellYourTime.Please enter the OTP : $otp to confirm the registration.Use our all free platform to find qualified business leads and quality service providers.SYT Team.";

//$response = file_get_contents("http://bulkpush.mytoday.com/BulkSms/SingleMsgApi?feedid=349896&username=9650222676&password=gdjmp&To=919899873343&Text=Hi%20Thank%20you%20for%20signing%20up%20on%20SellYourTime.Please%20enter%20the%20OTP-9876%20to%20confirm%20the%20registration.%20Use%20our%20all%20free%20platform%20to%20find%20qualified%20business%20leads%20and%20quality%20service%20providers.%20SYT%20Team");

//$response = file_get_contents("http://bulkpush.mytoday.com/BulkSms/SingleMsgApi?feedid=349896&username=9650222676&password=gdjmp&To=918860806718&Text=Hi!%20I%20saw%20your%20profile%20on%20SellYourTime.Iam%20looking%20for%20your%20services.Kindly%20contact%20me%20on%20$profile_phone%20for%20more%20details.Regards,sdsda");

//$name = "yell is hell";
//$phone = "981273723";

$phone = $_GET['phone'];
$name = $_GET['name'];

$response = file_get_contents("http://bulkpush.mytoday.com/BulkSms/SingleMsgApi?feedid=349896&username=9650222676&password=gdjmp&To=918860806718&Text=Hi!%20I%20saw%20your%20profile%20on%20SellYourTime.Iam%20looking%20for%20your%20services.Kindly%20contact%20me%20on%20number%20mention%20below%20for%20more%20details.Regards,$name $phone");

//$response = file_get_contents("http://bulkpush.mytoday.com/BulkSms/SingleMsgApi?feedid=349896&username=9650222676&password=gdjmp&To=918860806718&Text=Hi%20Thank%20you%20for%20signing%20up%20on%20SellYourTime.Please%20enter%20the%20OTP-$otp%20to%20confirm%20the%20registration.%20Use%20our%20all%20free%20platform%20to%20find%20qualified%20business%20leads%20and%20quality%20service%20providers.%20SYT%20Team");
?>