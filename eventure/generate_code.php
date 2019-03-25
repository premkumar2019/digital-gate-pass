<?php 
if(isset($_POST['submit']))
{
 include('phpqrcode/qrlib.php'); 
 $name=$_POST['Fname'];
 $lname=$_POST['Lname'];
 $gender=$_POST['Gender'];
 $college=$_POST['clgname'];
 $eventdesti=$_POST['eventdest'];
 $event=$_POST['events'];
 $text=$_POST['Email_Id'];
 $mobile=$_POST['Mobile_Number'];
 $Address=$_POST['address'];
 $city=$_POST['City'];
 $State=$_POST['state'];
 $pincode=$_POST['Pin_Code'];
 
 $input=$name."\n".$lname."\n".$gender."\n".$college."\n".$eventdesti."\n".$event."\n".$text."\n".$mobile."\n".$Address."\n".$city."\n".$State."\n".$pincode;
 $folder="images/";
 $file_name="qr.png";
 $file_name=$folder.$file_name;
 QRcode::png($input,$file_name);
 echo"<img src='images/qr.png'>";
 
 //To Display Code Without Storing
 
 QRcode::png($input ,"qr.png ", "L", 5, 5);
}
?>