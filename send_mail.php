<?php
$name=$_POST['tname'];
$mobile_no=$_POST['tmno'];
$emailid=$_POST['temailid'];
echo $name." ".$mobile_no." ".$emailid;

require("class.phpmailer.php");

 $content = "Hai Admin, My name is $name. I need domain name in your server. So send the information to my mail id $emailid or call me in $mobile_no";

        $mail = new PHPMailer();
		$mail->IsSMTP(); 
	    $mail->Host = "<>";   
		$mail->From = "$emailid";
		$mail->FromName = "$emailid";		
    
        $mail->AddAddress('<to mail id>');
        $mail->AddCC('<to mail id>');
    	

		$mail->Subject = "Request Mail";
		$mail->Body = $content;
		$mail->IsHTML(true);    
		$mail->WordWrap = 50;
				
		if(!$mail->Send())		
		{			   
		   echo 'Message was not sent.';
		}
		else
		{
			$content = '';
		    echo 'Message has been sent.';
		    
		} 

?>