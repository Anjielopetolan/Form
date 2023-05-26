<?php
  $title="index";
require_once 'includes/header.php';
?>

<!----
First name
Last name
Date of Birth
Specialty (Database Admin, Software Developer,Web Administrator)
Email Address
Contact Number
---->
<body>
<h1 class="text-center" style="color: black;"> Registration for IT Conference </h1>



<form action ="conn.php" method="POST">
  <div class="container">
    <div class="form-group">
<div class="form-group col-md-6">
  <label for="firstname">First Name:</label>
  <input require type="text" class="form-control" id="fname" name="fname">
</div>
 
<div class="form-group col-md-6">
  <label for="lastname">Last Name:</label>
  <input require type="text" class="form-control" id="lname" name="lname">
</div>
</div>


<div class="form-group col-md-4">
  <label for="formdate">Date of Birth:</label>
  <input required type="text" class="form-control" id="datepicker" name="datepicker">
</div>

<div class="input-group col-md-3">
<label for="inputSpecialty">Specialty</label>

<select class="custom-select" id="inputGroupSelect01" name="specialty">
  <option selected>Choose...</option>
  <option value="Database Admin">Database Admin</option>
  <option value="Software Developer">Software Developer</option>
  <option value="Web Administrator">Web Administrator</option>
</select>
</div>


<div class="form-group col-md-6">
    <label for="exampleInputEmail1">Email Address</label>
    <input required type="email" class="form-control" id="exampleInputEmail1" arial-describedby="emailHelp" name="Email">
    <small id="emailHelp" class="form-text text-muted"> We'll never share your email with anyone else.</small>
</div>
   
<div class="form-group col-md-6">
    <label for="inputcontact">Contact </label>
    <input required type="text" class="form-control" id="inputcontact" name="ContactNumber">
  </div>
  
  <div class="form-group col-md-6">
<button type ="submit">Submit Form </button>

</div>
</div>
<?php require_once 'includes/footer.php'; ?>

