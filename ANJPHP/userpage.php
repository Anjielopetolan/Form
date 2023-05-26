<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/userpagestyle.css">

   
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Welcome to you heart </title>
  </head>

  <body>
  <div class="card">
  <i class='bx bx-user' ></i>
  <h5><span>WELCOME</span> USER</h5>
  
  <div class="card-body">
   

<?php
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $date = $_POST['datepicker'];
  $special1 = $_POST['special1'];
  $special2 = $_POST['special2'];
  $special3 = $_POST['special3'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];

  echo "First Name: ".$fname;
  echo "<br>";
  echo "Last Name: ".$lname;
  echo "<br>"; 
  echo "Date of Birth: ".$date;
  echo "<br>";
  echo "Specialty Chosen: ".$special1.", ". $special2. ", ". $special3;
  echo "<br>";
  echo "Email Address: ".$email;
  echo "<br>";
  echo "Contact Number: ".$contact;
  echo "<br>";
  ?>
  
  </div>
  
  
</div>

  </body>
  </html>