<?php

$title = 'success' ;
require_once 'includes/header.php';
require_once 'db/conn.php';
require_once 'sendemail.php';

if(iiset($_POST['submit'])){
    //extract values from the $_POST array
    $firstname = $_POST ['firstname'];
    $lastname = $_POST ['lastname'];
    $birthday = $_POST ['dob'];
    $specialty = $_POST ['email'];
    $email = $_POST ['phone'];
    $contact = $_POST ['specialty'];

    $orig_file = $_FILES["avatar"]["tmp_name"];
    $ext = pathinfo($_FILES["avatar"]["tmp_name"], PATHINFO_EXTENTION);
    $target_dir ='uploads/' ;
    $destination = "$target_dir$connect.$ext";
    move_uploaded_file($orig_file.$destination);

    //Cal function to insert and track if success or not
    $isSuccess =$crud->insertAttendees($fname, $lname, $email, $contact, $specialty, $destination);
    $specialtyName = $crud->getSpecialtyById($specialty);

    if($isSuccess){
        SendEmail::SendMail()
    }
}

?>

<h1 class = "text-center text-sucess">You have been Registered </h1>

<div class="card" style="width: 18rem;">
<img src="..." class="card-img-top" alt="...">
<div class="card-body">
    <h5 class="card-title"> <?php echo $_POST['fname'].' '.$_POST['lname'];?>
</h5>

<p class="card-text">
    Date of Birth: <?php echo $_POST['datepicker'];?>
</p>

<p class="card-text">
    Specialty: <?php echo $_POST['specialty'];?>
</p>

<p class="card-text">
    Email Address: <?php echo $_POST['Email'];?>
</p>

<p class="card-text">
Contact Number: <?php echo $_POST['ContactNumber'];?>
</p>

<a href="#"class="btn btn-primary">Go somewhere</a>
</div>
</div>

<?php require_once 'includes/footer.php'; ?>



