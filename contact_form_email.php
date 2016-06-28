
<?php
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["first_name"]==""||$_POST["phone"]==""||$_POST["message"]==""){
echo "Please Fill Out All Required Fields..";
}else{
// Check if the "Sender's Email" input field is filled out
$email = $_POST['email'];
// Sanitize E-mail Address
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];



$headers = 'From:'. $email2 . "\r\n"; // Sender's Email
$headers .= 'Cc:'. $email2 . "\r\n"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
$subject = "New email from the Contact Us form."
// Send Mail By PHP Mail Function
mail("rootstechnology.info@gmail.com", $subject, $message, $headers);
echo "Your mail has been sent successfuly ! Thank you for reaching out to us!";
}
}
}
?>
