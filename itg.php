<?php

ini_set ("SMTP","mail.google.com");
ini_set ("sendmail_from","brianisadia94@gmail.com");
if (isset($_POST['submit'])){
  $mailto = "brianisadia94@gmail.com";
  $from ="anonymous@gmail.com";
  $subject = $_POST['subject'];
  $department = $_POST['department'];
  $headers = "From: anonymous@gmail.com" . "\r\n";
  $feedback = $_POST['feedback'];
  $result = mail($mailto, $department, $headers, $subject, $feedback);

if($result){
    echo '<script type="text/javascript">alert("message submitted successfully")</script>';
  }else{
    echo '<script type="text/javascript">alert(Failed to submit try again later")</script>';
  }
}

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <title>ITG Suggestion Box</title>
  </head>
  <body class="px-4 py-4 relative">
    <div>
      <header class="flex flex-col mb-10">
        <img src="./logo.jpg" class="logo h-20" />
        <p class="text-center relative font-medium text-sm">
          Tulipe Ushuru Tujitegemee
        </p>
      </header>
      <div class="mb-10">
        <p class="font-bold text-2xl mb-3">Employee Suggestion Box</p>
        <p class="text-xs">
          Please give us your feedback, we want to know whats on your mind
        </p>
      </div>
      <div>
        <form method="post" action="">
          <div class="flex flex-col mb-10">
            <label class="text-sm">Subject</label>
            <input type="text" class="subject__input" required name="subject" />
          </div>
          <div class="flex flex-col mb-10">
            <label class="text-sm">Department</label>
            <input type="text" class="subject__input" required name="department"/>
          </div>
          <div class="flex flex-col mb-4">
            <label class="text-sm mb-2">My Feedback</label>
            <textarea cols="50" rows="5" required name="feedback"></textarea>
          </div>
          <button type="submit" name="submit">SUBMIT</button>
        </form>
      </div>
    </div>
  </body>
</html>
