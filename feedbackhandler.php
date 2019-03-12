<?php
 $name=$_POST['name'];
 $user_email=$_POST['email'];
 $feedback=$_POST['userfeedback'];
 
 $email_from='Movie_recommendation.com';
 $email_subject='New Feedback Form Submitted';
 $email_body="Username:$name.\n".
              "User EmailId:$user_email.\n".
              "User Feedback:$feedback.\n";
 $to="bevinbiju.thomas2017@vitstudent.ac.in";
 $headers ="From: $email_from \r\n";
 $headers .="Reply-To:$user_email \r\n";
 mail($to,$email_subject,$email_body,$headers);
 header("Location: feedbackform.html")
?>