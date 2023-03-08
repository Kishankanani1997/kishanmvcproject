<?php
require_once("model/admin_model.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class admin_controller extends admin_model
{
    public function __construct()
    {
        parent:: __construct();

        // here we add adminuser in admin panel
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
                $mail->Username = 'kpkishanpatel990@gmail.com';				
                $mail->Password = 'wemzccebmodtlbxm';						
                $mail->SMTPSecure = 'tls';							
                $mail->Port	 = 587;
                $mail->setFrom('kishankanani59@gmail.com', 'Admin Panel Manager');
                $mail->addAttachment('assets/img/adminpanel.png','new.png');
                // $mail->addAttachment('assets/blooddonate.pdf', 'file.pdf');  

                $mail->addAddress($_POST["email"]);
                $mail->isHTML(true);
                $mail->Subject = 'Thanks for Creating Account with us.';
                $mail->Body = "<p> Thank you for creating account. One of our admin will contact you shortly.</p>";
                $mail->send();

            }
            catch (Exception $e)
            {
                echo "Message could not be sent . Mailer Error:" .$mail->ErrorInfo;
            }  

            $name=$_POST["name"];
            $email=$_POST["email"];
            $number=$_POST["number"];
            $pass=base64_encode($_POST["pass"]);
            $cpass=base64_encode($_POST["cpass"]);

            if($pass==$cpass)
            {
                $data=array("name"=>$name,"email"=>$email,"number"=>$number,"password"=>$pass);
                $check=$this->insertingalldata('admin_user',$data);
            
            if($check)
            {
                echo "<script>
                alert('Admin User added Succesfully 😄');
                window.location='./';
                </script>";
            }

            }
            else
            {
                echo "<script>
                alert('Your Password & Confirm Passowrd does not Match😞😄');
                window.location='./Register_Page';
                </script>";
            }
        }

        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case'/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("login.php");
                    break;  

                case'/Register_Page':
                   require_once("index.php");
                   require_once("header.php");
                   require_once("register.php");
                    break;  


                case'/Admin_Dashboard':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("content.php");
                    require_once("footer.php");
                    break;
                 
                case'/User_Profile':
                    require_once("index.php"); 
                    require_once("header.php"); 
                    require_once("sidebar.php");
                    require_once("userprofile.php");
                    require_once("footer.php");  
                    break;

                case'/Show_Data':
                    require_once("index.php"); 
                    require_once("header.php"); 
                    require_once("sidebar.php");
                    require_once("datashow.php");
                    require_once("footer.php");
                    break;    
                        
                case'/Online_Order':
                    require_once("index.php"); 
                    require_once("header.php"); 
                    require_once("sidebar.php");
                    require_once("customerorder.php");
                    require_once("footer.php");
                    break;
                    
                case'/Payment_Details':
                    require_once("index.php"); 
                    require_once("header.php"); 
                    require_once("sidebar.php");
                    require_once("paymentdetails.php");
                    require_once("footer.php");
                    break;    

                default:
                    require_once("index.php");
                    require_once("404.php");
                    break;
            }
        }
    }
}
$obj=new admin_controller;
?>