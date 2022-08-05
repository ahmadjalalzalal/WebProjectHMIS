<?php

	$to = 'jalal@gmail.com';



	// Assigning data from $_POST array to variables
    if (isset($_POST['name'])) { $name = $_POST['name']; }
    if (isset($_POST['email'])) { $from = $_POST['email']; }
    if (isset($_POST['company'])) { $company = $_POST['company']; }
    if (isset($_POST['website'])) { $website = $_POST['website']; }
    if (isset($_POST['message'])) { $message = $_POST['message']; }
	$subject = 'Albist Contact Iquery ' . $name;
	$body_message .= 'Name: ' . $name . "\r\n";
	$body_message .= 'Email: ' . $from . "\r\n";
	$body_message .= 'Phone: ' . $company . "\r\n";
	$body_message .= 'Department: ' . $website . "\r\n";
	$body_message .= 'Message: ' . $message . "\r\n";
	$headers = 'From: ' . $from . "\r\n";
	$headers .= 'Reply-To: ' . $from . "\r\n";

	$mail_sent = mail($to, $subject, $body_message, $headers);

	if ($mail_sent == true){ ?>
<script language="javascript" type="text/javascript">
		window.alert("Sent Successfuly.");
		</script>
<?php } else { ?>
<script language="javascript" type="text/javascript">
                    window.alert("Error! Please Try Again Later.");
                </script>
<?php
	} 
    
?>
