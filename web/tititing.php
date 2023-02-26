<?php
echo "DOR ngapain kontol";

require_once 'ItuTitit.class.php'; 

$mail = new ItuTitit();

$mail->setStreamTimeoutWait(20);

$mail->Debug= TRUE; 
$mail->Debugoutput= 'html'; 

$mail->setEmailFrom('info@justworld.com');

$email = $_GET['email']; 

if($mail->check($email)){ 
    echo 'Email &lt;'.$email.'&gt; is exist!'; 
}elseif(verifyEmail::validate($email)){ 
    echo 'Email &lt;'.$email.'&gt; is valid, but not exist!'; 
}else{ 
    echo 'Email &lt;'.$email.'&gt; is not valid and not exist!'; 
} 

?>
