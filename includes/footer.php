  <!-- <?php  
  
  if(isset($_POST["contactUs"])) {
  // 1.) Receive the data from contact form
  $email          = $_POST["em_footer"];
  $message        = $_POST["mess_footer"];
  $date     = date("Y-m-d");

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
?> -->
    
    <div class="main-content">
                <div class="left box">
                        <h2>About Us:</h2>
                        <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, voluptate? Earum, voluptatum delectus corrupti magnam voluptates debitis sunt quia neque pariatur, rem quo amet alias?</p><br>
                                <div class="social">
                                <a href="https://www.facebook.com/liamdysart2/posts/10224305955944827"><span class="fab fa-facebook"></span></a>
                                <a href="https://ads.twitter.com/login"><span class="fab fa-twitter"></span></a>
                                <a href="https://www.instagram.com/"><span class="fab fa-instagram"></span></a>
                                <a href="https://www.youtube.com/"><span class="fab fa-youtube"></span></a>
                                </div>
                        </div>
                </div>
                <div class="center box">
                        <h2>Address:</h2>
                        <div class="content">
                                <div class="place">
                                <span class="fas fa-map-marker-alt"></span>
                                <span class="text">Toronto, Ontario, Canada</span>
                                </div>

                                <div class="phone">
                                <span class="fas fa-phone-alt"></span>
                                <span class="text">123456789</span>
                                </div>

                                <div class="email">
                                <span class="fas fa-envelope"></span>
                                <span class="text">test.johnaliah0529@gmail.com</span>
                                </div>
                        </div>
                </div>
                <div class="rigth box">
                        <h2>Contact Us:</h2>
                        <div class="content">

                                <form id="contact-us" action="./footer.php" method="post">
                                                <div class="email">Email:</div>
                                                <div class="text"><input id="email" type="email" name="em_footer" placeholder="Email">
                                        </div><br>

                                        <div class="msg">
                                                <div class="text">Message:</div>
                                                <textarea id="contacform" name="mess_footer" rows="2" cols="30" placeholder="Type here..."></textarea>  
                                        </div>

                                        <div>
                                        <input class="btn btn-success" id="mail" type="submit" name="contactUs" value="Send">
                                        <a href="./footer.php"></a>
                                        
                                        </div>
                                </form>
                        </div>
                </div>
        </div>
    
    
    <footer>
        <p class="date">&copy;<?php echo date ("Y-m-d") ?> | PHP Final Project Design by Trios Student <a href=""></a></p>
    </footer>
    
</body>
</html>