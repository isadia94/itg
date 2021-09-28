<?php session_start()?>

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
        <form method="post" action="send_email.php">
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
        <br/>

        <?php
				if(ISSET($_SESSION['status'])){
					if($_SESSION['status'] == "ok"){
			?>
						<div class="alert alert-info"><?php echo $_SESSION['result']?></div>
			<?php
					}else{
			?>
						<div class="alert alert-danger"><?php echo $_SESSION['result']?></div>
			<?php
					}
					
					unset($_SESSION['result']);
					unset($_SESSION['status']);
				}
			?>
      </div>
    </div>
  </body>
</html>
