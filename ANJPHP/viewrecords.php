<?php
   
    $tittle = 'View Record';

    require_once 'includes/header.php';
    require_once 'includes/aut_check.php';
    require_once 'db/conn.php';

    //Get all attendee
    $result = $crud->getAttendee();

?>

<table class="table">
    <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Specailty</th>
        <th>Action</th>
   </tr>
   <?php while($r = $result->fetch(PDO::FETCH_ASSOC)) { ?>
    <TR>
        <td><?php echo $r['attendee-id'] ?></td>
        <td><?php echo $r['firstname'] ?></td>
        <td><?php echo $r['lastname'] ?></td>
        <td><?php echo $r['name'] ?></td>
        <td>
            <a href="view.php?id<?php echo $r['attendee_id'] ?> " class="btn btn-primary">View</a>
            <a href="edit.php?id<?php echo $r['attendee_id'] ?> " class="btn btn-warning">Edit</a>
            <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo  $result['attendee_id'] ?>" class="btn btn-danger">Delete</a>
   </td>
   </tr>
   </tr>
   <?php }?>
   </table>

   <br>
   <br>
   <br>
   <?php require_once 'include/footer.php' ?>
   


   
