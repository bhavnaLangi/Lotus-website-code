<?php



include "dbconn.php";



require "mailerfunction.php";

date_default_timezone_set("Asia/Kolkata"); //Time Zone

$date = date('Y-m-d H:i:s'); // Current Date Time in SQL fromat

$date12d = date('d M Y h:i:s a', strtotime($date)); // Current Date Time use For view

$email1 = 'digihost2021@gmail.com'; // Receiver Mail IDs in comma seprated format.

$date12d1 = date(' h:i:s a', strtotime($date)); // Current Date Time use For view

$url = 'https://www.lotusdevelopers.com/index.php'; // Current Date Time use For view



function ipCheck()

{

    $domain = $_SERVER['HTTP_HOST'];

    if ($domain != 'localhost') {

        if (getenv('HTTP_CLIENT_IP')) {

            $ip = getenv('HTTP_CLIENT_IP');

        } elseif (getenv('HTTP_X_FORWARDED_FOR')) {

            $ip = getenv('HTTP_X_FORWARDED_FOR');

        } elseif (getenv('HTTP_X_FORWARDED')) {

            $ip = getenv('HTTP_X_FORWARDED');

        } elseif (getenv('HTTP_FORWARDED_FOR')) {

            $ip = getenv('HTTP_FORWARDED_FOR');

        } elseif (getenv('HTTP_FORWARDED')) {

            $ip = getenv('HTTP_FORWARDED');

        } else {

            $ip = $_SERVER['REMOTE_ADDR'];

        }

    } else {

        $ip = '127.0.0.1';

    }

    return $ip;

}



// print_r($_POST);

$ip = ipCheck();





if (isset($_POST['subscribe'])) {

    $secretKey  = '6LfOFFIpAAAAAFFaTUgNUfWQFNOVPrc-1MLB-xrs';

    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']);

    $responseData = json_decode($verifyResponse);



    // print_r($responseData);

         //echo $responseData->success;

        //  exit;

        // If the reCAPTCHA API response is valid

    if($_POST['g-recaptcha-response'] != ''){



    $name = $_POST['name'];



    $email = $_POST['email'];

    // $date = $_POST['date'];

    $number = $_POST['number'];

    $message = $_POST['messge'];

    $name = $_POST['name'];





    $sql = "INSERT INTO `contact`(`name`, `mobile`, `email`, `message`,`date`) VALUES ('$name','$number','$email','$message','".date('Y-m-d H:i:s')."')";







    $result = $conn->query($sql);



        $subject = "New Contact Enquiry from " . $name . " on " . $date12d . "\n";

    $content = 'Dear Admin' . ",\n\r";



    $content .= "You have received a new enquiry from " . $name . ". Below are the details received from the enquiry:" . "\n\r";

    $content .= "Name: " . $name . "\n";

    $content .= "Email:  " . $email . "\n";

    $content .= "Mobile Number: " . $number . "\n";

    //    $content .= "Time: " . $date12d1 . "\n\r";



    $content .= "URL: " . $url . "\n";



    $content .= "Message: " . $message . "\n";

    $content .= "Ip Address: " . $ip . "\n\r";



    $content .= "Regards," . "\n";

    $content .= "Team" . "\n\r";

    $content .= "Lotus Developers" . "\n";

    // $header12 = "From: " . 'digihost2021@gmail.com' . "\n";





    $mail = smtp('sales@lotusdevelopers.com', $content, $subject);



    // $mail_status = smtp($email1, $content, $subject);

    if ($mail > 0) { ?>

        <script language="javascript" type="text/javascript">



		window.location = 'thank-you.php';

			</script>



       <?php  //header('location:thank-you.php');

    }

    else{

?>

        <script language="javascript" type="text/javascript">

window.location = 'index.php';


			</script>



       <?php

         //header('location:404.php');

    }

            }else{


                ?>
				<script language="javascript" type="text/javascript">
					alert('Robot verification failed, please try again.');
						window.location = 'contact-us.php';
				</script>
			<?php
						}


} else { ?>

			<script language="javascript" type="text/javascript">

		window.location = 'index.php';

	</script>

<?php }		?>