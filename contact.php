<?php
  
if($_POST) {
    $visitor_name = "";
    $visitor_email = "";
    $visitor_subject = "";
    $visitor_message = "";
    $email_body = "<div>";
      
    if(isset($_POST['visitor_name'])) {
        $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Visitor Name:</b></label>&nbsp;<span>".$visitor_name."</span>
                        </div>";
    }
 
    if(isset($_POST['visitor_email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Visitor Email:</b></label>&nbsp;<span>".$visitor_email."</span>
                        </div>";
    }
      
    if(isset($_POST['visitor_subject'])) {
        $visitor_subject = filter_var($_POST['visitor_subject'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Reason For Contacting:</b></label>&nbsp;<span>".$visitor_subject."</span>
                        </div>";
    }
      
    if(isset($_POST['visitor_message'])) {
        $visitor_message = htmlspecialchars($_POST['visitor_message']);
        $email_body .= "<div>
                           <label><b>Visitor Message:</b></label>
                           <div>".$visitor_message."</div>
                        </div>";
    }
      
    $email_body .= "</div>";
    $email_title = $visitor_subject . " from " . $visitor_name;

    $header = "From: " . $visitor_email . "\r\n";
    $header .= "Cc: " . $visitor_email . "\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
      
    if(!empty($visitor_name) && !empty($visitor_email) && !empty($visitor_subject) && !empty($visitor_message)) {
        mail('angelymaedyy@gmail.com', $email_title , $email_body, $header);
        mail('prettylittlegirl368@gmail.com', $email_title , $email_body, $header);
        echo "<script>window.open('submitForm.html', '_blank');</script>";
        echo "<script>window.open('contact.html', '_self');</script>";
    } else {
        echo "<script>alert('Fill-out all the form and try again.');</script>";
        echo "<script>window.open('contact.html', '_self');</script>";
    }
      
} else {
    echo '<p>Something went wrong</p>';
    echo "<script>window.open('contact.html', '_self');</script>";
}
?>