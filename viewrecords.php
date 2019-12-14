<?php
    $title = 'View Records'; 

    require_once 'includes/header.php'; 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php'; 

    // Get all attendees
    $results = $crud->getAttendees();
?>


    <table class="table">
        <tr>
            <th><font color="white">#</font></th>
            <th><font color="white">First Name</font></th>
            <th><font color="white">Last Name</font></th>
            <th><font color="white">Gender</font></th>
            <th><font color="white">Actions</font></th>
        </tr>
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
           <tr>
                <td><font color="white"><?php echo $r['attendee_id'] ?></font></td>
                <td><font color="white"><?php echo $r['firstname'] ?></font></td>
                <td><font color="white"><?php echo $r['lastname'] ?></font></td>
                <td><font color="white"><?php echo $r['name'] ?></font></td>
                <td>
                    <a href="view.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-primary">View</a>
                    <a href="edit.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-warning">Edit</a>
                    <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-danger">Delete</a>
                </td>
           </tr> 
        <?php }?>
    </table>

<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>