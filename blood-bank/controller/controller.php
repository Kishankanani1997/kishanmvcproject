<?php
require_once("model/model.php");
error_reporting(0);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class controller extends model
{
    public function __construct()
    {
        parent::__construct();

        // Here we will fetch the STATE-DATA in user dropdown-list
        $showstate=$this->selectalldata('tbl_state');

        // Here we will fetch the CITY-DATA in user dropdown-list
        $showcity=$this->selectalldata('tbl_city');

        // Here we will fetch the BLOOD-DATA in user dropdown-list
        $showblood=$this->selectalldata('tbl_blood');

        //Here we add user in user table
        if(isset($_POST["submit"]))
        {
            require 'phpmailer/Exception.php';
            require 'phpmailer/PHPMailer.php';
            require 'phpmailer/SMTP.php';
            try 
            {
                $email=$_POST["email"];
                $mail = new PHPMailer(true);
                $mail->SMTPDebug = 3;									
                $mail->isSMTP();											
                $mail->Host	 = 'smtp.gmail.com;';					
                $mail->SMTPAuth = true;					
                $mail->Username = 'kishankanani59@gmail.com';				
                $mail->Password = 'apxuvgluxiipyplr';						
                $mail->SMTPSecure = 'tls';							
                $mail->Port	 = 587;
                $mail->setFrom('kishankanani59@gmail.com', 'Blood Bank Manager');
                $mail->addAttachment('assets/images/blood.jpg','new.jpg');
                $mail->addAttachment('assets/blooddonate.pdf', 'file.pdf');  

                $mail->addAddress($_POST["email"]);
                $mail->isHTML(true);
                $mail->Subject = 'Thanks for Creating Account with us.';
                $mail->Body = "<p> Not only a Doctor can save a life but we can also contribute our little bit by donating your blood.Blood Donation will cost you nothing but it will save a life. 🩸🩸<br>'If you want to witness a miracle, Donate Blood'.</p>";
                $mail->send();

            }
            catch (Exception $e)
            {
                echo "Message could not be sent . Mailer Error:" .$mail->ErrorInfo;
            }    
            $name=$_POST["name"];
            $number=$_POST["number"];
            $email=$_POST["email"];
            $pass=base64_encode($_POST["pass"]);
            $cpass=base64_encode($_POST["cpass"]);
            $blood=$_POST["blood"];
            $state=$_POST["state"];
            $city=$_POST["city"];

        if($pass==$cpass)
        {
            $data=array("name"=>$name,"number"=>$number,"email"=>$email,"password"=>$pass,"bloodgroup"=>$blood,"state_id"=>$state,"city_id"=>$city);
            $check=$this->insertalldata('tbl_user',$data);

        if($check)
        {
            echo "<script>
            alert('User added successfully');
            window.location='./';
            </script>";
        }
        
        }
        else
        {
            echo "<script>
            alert('Your Password & Confirm Passowrd does not Match😞😄');
            window.location='./';
            </script>";
        }
    }

    // show all data 
    $showdata=$this->selectalldata('tbl_user'); 


    // here we write code to login as user
    if(isset($_POST["login"]))
        {
            $email=$_POST["email"];
            $pass=base64_encode($_POST["pass"]);
            $login=$this->userlogin('tbl_user',$email,$pass);

            if($login)
            {
               echo "<script>
               alert('You are Logged in Successfully')
               window.location='Manage-Donor';
               </script>";
            }
            else 
            {

                echo "<script>
                alert('Your email and password are Incorrect try again')
                window.location='Login-Here';
                </script>";
            }
        }

        // here we write code for user logout
        if(isset($_GET["logout"]))
        {
            $check=$this->logout();
            if($check)
            {
                echo "<script> 
                alert('You are successfully logout')
                window.location='Login-Here';
                </script>";
            }
        }

        //forgot password code 
        if(isset($_POST["forgot"]))
        {
            require 'phpmailer/Exception.php';
            require 'phpmailer/PHPMailer.php';
            require 'phpmailer/SMTP.php';
            try 
            {
                $email=$_POST["email"];
                $mail = new PHPMailer(true);
                $mail->SMTPDebug = 3;									
                $mail->isSMTP();											
                $mail->Host	 = 'smtp.gmail.com;';					
                $mail->SMTPAuth = true;					
                $mail->Username = 'kishankanani59@gmail.com';				
                $mail->Password = 'apxuvgluxiipyplr';						
                $mail->SMTPSecure = 'tls';							
                $mail->Port	 = 587;
                $mail->setFrom('kishankanani59@gmail.com', 'Blood Bank Manager'); 
                // $mail->addAttachment('assets/images/forgotpassword/forgotpassword.gif','new.gif');

                $mail->addAddress($_POST["email"]);
                $mail->isHTML(true);
                $check=$this->forgotpassword('tbl_user','email',$email);
                $mail->Subject = 'You will see your forgot password below.';
                $mail->Body = "<p>😞Your Forgotted Passowrd is :$check </p>";
                $mail->send();

                echo "<script>
                alert('We have successfully sent password on your Email Address');
                window.location ='Login-Here';  
                </script>";
            }
            catch (Exception $e)
            {
                    echo "<script>
                     alert('Your Email does not register with us try again')
                     window.location='Forgot-Password';
                    </script>";

                echo "Message could not be sent . Mailer Error:" .$mail->ErrorInfo;
            }

        }
    

    



        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case'/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("slider.php");
                    require_once("content.php");
                    require_once("footer.php");
                    break;

                case'/About-Us':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("aboutus.php");
                    require_once("footer.php");
                    break;

                case'/Our-Facility':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("facility.php");
                    require_once("footer.php"); 
                    break;  
                    
                case'/Register-Here':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("register.php");
                    require_once("footer.php"); 
                    break;  

                case'/Login-Here':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("login.php");
                    require_once("footer.php"); 
                    break;  

                case'/Forgot-Password':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("forgotpassword.php");
                    require_once("footer.php"); 
                    break;      

                case'/Contact-Us':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("contactus.php");
                    require_once("footer.php"); 
                    break; 
                    
                case'/Manage-Donor':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("managedonor.php");
                    require_once("footer.php"); 
                    break;     

                    default:
                    require_once("index.php");
                    require_once("header.php");
                    require_once("404.php");
                    break;
            }
        }
    }
}
$obj=new controller;
?>