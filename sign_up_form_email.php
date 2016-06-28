
<?php
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["emergencyContact"]==""||$_POST["laptop"]==""||$_POST["first_name"]==""){
echo "Fill All Fields..";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['email'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$laptop_needed = $_POST['laptop'];
$emergencyContact = $_POST['emergencyContact'];
$about = $_POST['About'];
$blank = $_POST['blank'];
$yes_laptop = $_POST['YesLaptop'];
$no_laptop = $_POST['NoLaptop'];
$phone = $_POST['phone'];


$headers = 'From:'. $email2 . "\r\n"; // Sender's Email
$headers .= 'Cc:'. $email2 . "\r\n"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
$subject = "New email from the Sign-Up form.";
// Send Mail By PHP Mail Function
mail("rootstechnology.info@gmail.com", $subject, $message, $headers);
echo "Your mail has been sent successfuly ! Thank you for signing up!";
}
}
}
?>
