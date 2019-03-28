
<html>
<head>
<title>Student Registration Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>  
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>


</head>
<body>


<h3 align="center" >STUDENT REGISTRATION FORM</h3>
<div class="container">

<form class="well form-horizontal" action="" method="post"   name="contactForm" id="contactForm"  >

<fieldset>

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="Fname" placeholder="First Name"  class="form-control"  type="text" maxlength="10" >
    </div>
  
  </div>
</div>

<!-- Text input-->        

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="Lname" placeholder="Last Name" class="form-control"  type="text" maxlength="10"/>
    </div>
  </div>
</div>

<!-- radio checks -->
 <div class="form-group">
                        <label class="col-md-4 control-label">Gender</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="Gender"  value ="Male"/> Male
                                </label>
                                <label>
                                    <input type="radio" name="Gender" value="Female"  /> Female
                                </label>
                            </div>
                        </div>
                    </div>


<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">College name</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="clgname" placeholder="Please enter your College name" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group"> 
  <label class="col-md-4 control-label">Event Destination</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="eventdest" class="form-control selectpicker" maxlength="40" >
      <option value=" " >select college</option>
      <option></option>
      <option >AIT</option>
    <option >CIET</option>
      <option >CMS</option>
    <option >CSI</option>
      <option >Eswar</option>
    <option >GCT</option>
    <option >KCT </option>
    <option >KGCAS</option>
    <option >KITE</option>
    <option >Kongunadu</option>
    <option >Krishnammal</option>
    <option >NGP</option>
    <option >PPG</option>
    <option >PSG </option>
    <option >Ramakrishna</option>
     </select>
  </div>
</div>
</div>

<div class="form-group"> 
  <label class="col-md-4 control-label">Events</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="events" class="form-control selectpicker"  maxlength="20">
      <option value=" " >Please select your Event</option>
      <option></option>
      <option>Blind coding</option>
      <option >Cube casting</option>
      <option >cyber savvy</option>
    <option >Dance(group) </option>
    <option> Dance (solo) </option>
      <option >Debudding</option>
    <option >Mimicry</option>
    <option >Music</option>
    <option >Quiz</option>
    <option >Robowars</option>
    <option >Singing</option>
      <option >Tech hunt</option>
      <option >Treasur hunt</option>
      
    </select>
  </div>
</div>
</div>



<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="Email_Id" placeholder="E-Mail Address" class="form-control"  type="text"  maxlength="100"/>
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Phone </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="Mobile_Number" placeholder="(+91)" class="form-control" type="text" maxlength="10"/>
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Address" class="form-control" type="text" maxlength="100">
    </div>
  </div>
</div>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">City</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="City" placeholder="city" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">State</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state" class="form-control selectpicker" maxlength="20" >
      <option value=" " >Please select your state</option>
      <option>Andhra pradesh</option>
      <option>Assam</option>
      <option >Bihar</option>
      <option >Goa</option>
      <option >Gujarat</option>
      <option >Himachal pradesh</option>
      <option >Jammu and kashmir</option>
      <option >Karnataka</option>
      <option >Kerala</option>
      <option> Madhya pradesh</option>
      <option >Manipur</option>
      <option >Nagaland</option>
      <option >Punjab</option>
      <option >Rajasthan</option>
      <option >Tamilnadu</option>
      <option >Uttar pradesh</option>
      
    </select>
  </div>
</div>
</div>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Pin Code</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="Pin_Code" placeholder="Zip Code" class="form-control"  type="text" maxlength="6"/>
    </div>
</div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit"  name="submit"  class="btn btn-success" >Register <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>
<div class="form-group">
        <div class="col-md-4 col-md-offset-3">
            <div id="messages"></div>
        </div>
    </div>

</fieldset>
</form>
</div>
 </div><!-- /.container -->


 <script >
$(document).ready(function() {
    $('#contactForm').bootstrapValidator({
        container: '#messages',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            Fname: {
                validators: {
                  stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'The first name is required and cannot be empty'
                    }
                }
            },
            Lname: {
                validators: {
                  stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'The last name is required and cannot be empty'
                    }
                }
            },
            clgname: {
                validators: {
                    notEmpty: {
                        message: 'The  clgname is required and cannot be empty'
                    }
                }
            },
            eventdest: {
                validators: {
                    notEmpty: {
                        message: 'The eventdestination is required and cannot be empty'
                    }
                }
            },
            events: {
                validators: {
                    notEmpty: {
                        message: 'The events is required and cannot be empty'
                    }
                }
            },
            Email_Id: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The email address is not valid'
                    }
                }
            },
            Mobile_Number: {
                validators: {
                  stringLength: {
                        min: 10,
                    },
                    notEmpty: {
                        message: 'The mobile number is required '
                    }
                }
            },

            address: {
                validators: {
                    notEmpty: {
                        message: 'The address is required '
                    }
                }
            },
            City: {
                validators: {
                    notEmpty: {
                        message: 'The city required'
                    }
                }
            },
             state: {
                validators: {
                    notEmpty: {
                        message: 'select you are state required'
                    }
                }
            },
             Pin_Code: {
                validators: {
                  stringLength: {
                        min: 2,
                    },

                    notEmpty: {
                        message: 'The pincode required'
                    }
                }
            },
        }
    });
});
 </script>


 <?php


if(isset($_POST["submit"]))
{

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'registers';
$link = mysql_connect("$hostname", "$username", "$password");
    if (!$link) {
      echo "<p>Could not connect to the server '" . $hostname . "'</p>\n";
          echo mysql_error();
    }
    else{
      echo "<p>Successfully connected to the server '" . $hostname . "'</p>\n";

      $dbcheck = mysql_select_db("$database");
      if (!$dbcheck) {
        echo mysql_error();
      }
      else{
        echo "<p>Successfully connected to the database '" . $database . "'</p>\n";
        $firstName = $_POST["Fname"];
        $lastName = $_POST["Lname"];
        $gender = $_POST["Gender"];
        $college = $_POST["clgname"];
        $eventdesti=$_POST["eventdest"];
        $event = $_POST["events"];
        $emailId = $_POST["Email_Id"];
        $mobile = $_POST["Mobile_Number"];
        $Address=$_POST["address"];
        $city = $_POST["City"];
        $State=$_POST["state"];
        $pincode = $_POST["Pin_Code"];
        
        $strSQL = "Insert into tbl_mst_student(num_student_id,vch_first_name,vch_last_name,vch_gender,vch_college_name,vch_venue,vch_events,
        vch_email,int_mobile_no,vch_address,vch_city,vch_state,int_pincode) values ('',
        '$firstName','$lastName','$gender','$college','$eventdesti','$event','$emailId','$mobile','$Address','$city',
        '$State','$pincode')"; 
        
        $result= mysql_query($strSQL);

        if($result === TRUE){
        echo "saved sucessfully";
        include('generate_code.php');

        }
        else{
        echo "not save";
        }
      }
    }

  }
  

?>


</body>
</html>