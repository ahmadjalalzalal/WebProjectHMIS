<?php
include("header.php");
if(isset($_POST[submit]))
{  
	$message = "<strong>Dear $_POST[name],</strong><br />
				<strong>Your Email ID is :</strong> $_POST[email]<br />
				<strong>Message :-</strong> $_POST[comment]
				";
	
	sendmail("jalal@gmail.com","Mail from Appoint My Doctor",$message);
	
}
?>
<div class="wrapper col2">
  <div id="breadcrumb">
    <ul>
      <li class="first">Contact Us</li>
    </ul>
  </div>
</div>
<div class="wrapper col4">
  <div id="container">
    <h6>Our Address</h6>
    <p>
Online Hospital Management System , Bangalore<br />

<strong>tel</strong>:080 65110488<br />

<strong>Email ID</strong>: ohms@gmail.com</p>

        <h6>Contact Us by entering following information</h6>
            <form action="" method="post">
          <p>
            <input type="text" name="name" id="name" value="" size="22" />
            <label for="name"><small>Name (required)</small></label>
          </p>
          <p>
            <input type="text" name="email" id="email" value="" size="22" />
            <label for="email"><small>Mail (required)</small></label>
          </p>
          <p>
            <textarea name="comment" id="comment" cols="100%" rows="10"></textarea>
            <label for="comment" style="display:none;"><small>Comment (required)</small></label>
          </p>
          <p>
            <input name="submit" type="submit" id="submit" value="Submit Form"  />
            &nbsp;
            <input name="reset" type="reset" id="reset" tabindex="5" value="Reset Form" />
          </p>
        </form>

  </div>
  
</div>

    <div class="clear"></div>
  </div>
</div>
<?php
include("footer.php");

?>