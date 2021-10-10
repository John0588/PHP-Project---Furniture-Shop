
<?php
include './includes/aboutUsSecurity.php';

// 2.) prepare the email structure
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'C:\PHPMailer\src\Exception.php';
require 'C:\PHPMAiler\src\PHPMailer.php';
require 'C:\PHPMAiler\src\SMTP.php';

// require 'c:xampp\composer\vendor\autoload.php';

if(isset($_POST["contactform"])) {
  // 1.) Receive the data from contact form
  $firstName      = $_POST["firstName"];
  $lastName       = $_POST["lastName"];
  $email          = $_POST["email"];
  $subContact     = $_POST["subject"];
  $message        = $_POST["message"];

  $mail = new PHPMailer(TRUE);

  include './includes/db.php';

  // 3.) Send the email
  
  try {
      $mail -> setFrom ($email, 'PHP class Project');
      $mail -> addAddress('john.almirol@yahoo.com', 'Web master');
      $mail -> Subject = "First Name" . $firstName . "Last Name:" . $lastName . "Subject: " . $subContact;
      $mail -> isHTML(TRUE);
      $mail -> Body = "User's email:" . $email . "Message" .  $message;

      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = TRUE;
      $mail->SMTPSecure = 'tls';
      $mail->Username = 'test.johnaliah0529@gmail.com';
      $mail->Password = 'AliahKeziah_2917';
      $mail->Port = 587;

      $mail -> send();
      
      $success = "Message is already sent, Success!";

  }catch (Exception $e) {               //PHPMailer exception
      echo $e ->errorMessage();
  }catch (\Exception $e) {              //PHP Exception
      echo $e->getMessage();
  }

}
?>

<?php include './includes/head.php'; ?>
<?php include './includes/header.php'; ?>

<main>

    <div>
        <form id="sign_in" action="./contactus.php" method="post">
            <div class="container">

            <div class="row">
                <div class="col-sm-3">
                    <!-- <hr class="mb-3"> -->

                    <p>First Name: <input id="firstname" class="form-control" type="text" name="firstName" placeholder="FirstName" required></p>

                    <p>Last Name: <input id="lastname" class="form-control" type="text" name="lastName" placeholder="LastName" required></p>

                    <p>Email: <input id="email" class="form-control" type="text" name="email" placeholder="Email" required></p>

                    <p> Subject: <input id="subject" class="form-control"  type="text" name="subject" placeholder="Subject" required></p><br>

                    <p><textarea class="form-control" id="contacform" name="message" placeholder="Type here..."></textarea></p>

                    <hr class="mb-3">
                    <input class="btn btn-success" id="register" type="submit" name="contactform" value="Send">
                    <a href="./contactus.php"></a>
                    <h4><?php if(isset($success)){echo $success;} ?></h4>

                </div>
            </div>   
        </form>
    </div>

</main>
<br>
<br>
   
<?php include './includes/footer.php'; ?>