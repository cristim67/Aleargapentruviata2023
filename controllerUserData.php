<?php 
session_start();
require "connection.php";
$email = "";
$name = "";
$errors = array();

use PHPMailer\PHPMailer\PHPMailer;
require "./phpmailer/autoload.php";

//if user signup button
if(isset($_POST['signup'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $prenume=mysqli_real_escape_string($con, $_POST['prenume']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $tricou=mysqli_real_escape_string($con, $_POST['tricou']);
    $sex=mysqli_real_escape_string($con, $_POST['sex']);
    $birtday=mysqli_real_escape_string($con, $_POST['birthday']);
    $plata=mysqli_real_escape_string($con, $_POST['plata']);
    $today = date("Y-m-d");
    $diff = date_diff(date_create($birtday), date_create($today));
    $varsta= $diff->format('%y');
    $numecomplet=$name." ".$prenume;
    
    if($password !== $cpassword){
        $errors['password'] = "Parolele nu se potrivesc!";
    }
    
    if($varsta < 0)
    {
        $errors['varsta'] = "Data de nastere este gresita";
    }
   
     if(preg_match('/^[0-9]{10}+$/', $phone)) {

    } 

    else {
     $errors['phone'] = "Numarul de telefon nu este bun";
    }
   
    // $ver=(string)'upb.ro';
    // if(strpos($email,$ver))
    // {
        
    // }
    // else{
    //     $errors['veremail']="Conecteaza-te cu contul de politehnica";
    // }
   
    $email_check = "SELECT * FROM usertable WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "E-mailul pe care l-ați introdus există deja!";
    }
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO usertable (name, email, password, code, status, phone,dimensiune_tricou,zinastere,varsta,sex,card_cash)
                        values('$numecomplet', '$email', '$encpass', '$code', '$status','$phone','$tricou','$birtday','$varsta','$sex','$plata')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check){
            
            $server_smtp = "smtp.hostinger.com";
    $server_imap = "imap.hostinger.com";
    $email_account = "apv@lsebucuresti.org";
    $email_password = "Apv123#$";

// Recipient
    $recipient = $email;

    $mail = new PHPMailer;
    $mail->SMTPDebug = 2;

    $mail->Host = $server_smtp;
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Username = $email_account;
    $mail->Password = $email_password;
    $subject = "Cod pentru verificare email";
    $message = "Codul de verificare este $code";
    $mail->setFrom($email_account, "");
    $mail->addReplyTo($email_account, "");
    $mail->addAddress($recipient, "");
    $mail->Subject = $subject;
    $mail->msgHTML($message);

            if($mail->send()){
                $info = "Am trimis un cod de verificare pe adresa ta de e-mail - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: otp.php');
                exit();
            }else{
                $errors['otp-error'] = "A eșuat la trimiterea codului!";
            }
        }else{
            $errors['db-error'] = "A eșuat la inserarea datelor în baza de date!";
        }
        
    }
    
   

}
    //if user click verification code submit button
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $platacashcard= $fetch_data['card_cash'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE usertable SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                if($platacashcard=="card")
                header('location: cauza.php');
                else header('location:index.php');
                exit();
            }else{
                $errors['otp-error'] = "A eșuat la actualizarea codului!";
            }
        }else{
            $errors['otp-error'] = "Ați introdus un cod incorect!";
        }
    }

    //if user click login button
    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $check_email = "SELECT * FROM usertable WHERE email = '$email'";
        $res = mysqli_query($con, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email'] = $email;
                $status = $fetch['status'];
                if($status == 'verified'){
                  $_SESSION['email'] = $email;
                  $_SESSION['password'] = $password;
                    header('location: index.php');
                }else{
                    $info = "Se pare că încă nu ți-ai verificat adresa de e-mail - $email";
                    $_SESSION['info'] = $info;
                    header('location: otp.php');
                }
            }else{
                $errors['email'] = "Adresă de e-mail sau parolă incorecte!";
            }
        }else{
            $errors['email'] = "Se pare că nu ești încă membru! Faceți clic pe linkul de jos pentru a vă înscrie.";
        }
    }

    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM usertable WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE usertable SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                
                
                        $server_smtp = "smtp.hostinger.com";
    $server_imap = "imap.hostinger.com";
    $email_account = "apv@lsebucuresti.org";
    $email_password = "Apv123#$";
                
                 $recipient = $email;

    $mail = new PHPMailer;
    $mail->SMTPDebug = 2;

    $mail->Host = $server_smtp;
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Username = $email_account;
    $mail->Password = $email_password;
    $subject = "Cod pentru verificare email";
    $message = "Codul de verificare este $code";
    $mail->setFrom($email_account, "");
    $mail->addReplyTo($email_account, "");
    $mail->addAddress($recipient, "");
    $mail->Subject = $subject;
    $mail->msgHTML($message);

                
                $subject = "Cod de resetare a parolei";
                $message = "Codul dvs. de resetare a parolei este $code";
               
                if($mail->send()){
                    $info = "Am trimis o resetare a parolei otp pe adresa ta de e-mail- $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: reset-code.php');
                    exit();
                }else{
                    $errors['otp-error'] = "A eșuat la trimiterea codului!";
                }
            }else{
                $errors['db-error'] = "Ceva n-a mers bine!";
            }
        }else{
            $errors['email'] = "Această adresă de e-mail nu există!";
        }
    }

    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Vă rugăm să creați o nouă parolă pe care nu o utilizați pe niciun alt site.";
            $_SESSION['info'] = $info;
            header('location: new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "Ați introdus un cod incorect!";
        }
    }

    //if user click change password button
    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        if($password !== $cpassword){
            $errors['password'] = "Confirmați parola nepotrivită!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            $encpass = password_hash($password, PASSWORD_BCRYPT);
            $update_pass = "UPDATE usertable SET code = $code, password = '$encpass' WHERE email = '$email'";
            $run_query = mysqli_query($con, $update_pass);
            if($run_query){
                $info = "Parola dvs. s-a schimbat. Acum vă puteți autentifica cu noua parolă.";
                $_SESSION['info'] = $info;
                header('Location: login.php');
            }else{
                $errors['db-error'] = "Nu s-a putut schimba parola!";
            }
        }
    }
    
   //if login now button click
    if(isset($_POST['login-now'])){
        header('Location: login.php');
    }
?>