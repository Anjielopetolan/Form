<?php

    $tittle = 'View Record';

    require_once 'includes/header.php';
    require_once 'includes/aut_check.php';
    require_once 'db/conn.php';

    // Get attendee by id
    if(!isset($_GET['id'])){
        include 'include/errormessage.php';

    }else{
        $id =$_GET['id'];
        $result = $crud->getAttendeeDetails($id);
    
?>
<img src="<?php echo empty($result['avatar_patch']) ? "uploads/black.png" : $result['avatae_path'] ; ?>" class="rounded-circle" style="width: 20%; height: 20%"/>

<div class="card" style="width: 18rem;">
     <div class="card-body">
        <h5 class="card-tittle">
            <?php echo $result['firstnmae']. ' '. $result['lastname']; ?>
        </h5>
        <h6 class="card-tittle mb-2 text-muted">
            <?php echo $result['name'];?>
        </h6>
        <p class="card-text">
           Date of Birth: <?php echo $result['dateofbirth']; ?>
       </p>
       <p class="card-text">
           Email address: <?php echo $result['emailaddress']; ?>
       </p>
       <p class="card-text">
           Contact Number: <?php echo $result['contactnumber']; ?>
       </p>
</div>
<br/>
     <a href="viewrecord.php" class="btn btn-info">Back to List</a>
     <a href="edit.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-warning">Edit</a>
     <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo  $result['attendee_id'] ?>" class="btn btn-danger">Delete</a>
    <?php } ?>
    <br>
    <br>
    <br>
    <?php require_once 'include/footer.php'; ?>

    