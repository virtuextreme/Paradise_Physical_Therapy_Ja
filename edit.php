    
<?php
    $title = 'Edit Record'; 

    require_once 'includes/header.php'; 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php'; 

    $results = $crud->getSpecialties();

    if(!isset($_GET['id']))
    {
        //echo 'error';
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }
    else{
        $id = $_GET['id'];
        $attendee = $crud->getAttendeeDetails($id);
    

    
?>

    <h1 class="text-center"><font color="white">Edit Record</font> </h1>

    <form method="post" action="editpost.php">
        <input type="hidden" name="id" value="<?php echo $attendee['attendee_id'] ?>" />
        <div class="form-group">
            <label for="firstname"><font color="white">First Name</font></label>
            <input type="text" class="form-control" value="<?php echo $attendee['firstname'] ?>" id="firstname" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname"><font color="white">Last Name</font></label>
            <input type="text" class="form-control" value="<?php echo $attendee['lastname'] ?>" id="lastname" name="lastname">
        </div>
        <div class="form-group">
            <label for="dob"><font color="white">Date Of Birth</font></label>
            <input type="text" class="form-control" value="<?php echo $attendee['dateofbirth'] ?>" id="dob" name="dob">
        </div>
        <div class="form-group">
            <label for="specialty"><font color="white">Gender</font></label>
            <select class="form-control" id="specialty" name="specialty">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                   <option value="<?php echo $r['specialty_id'] ?>" <?php if($r['specialty_id'] == $attendee['specialty_id']) echo 'selected' ?>>
                        <?php echo $r['name']; ?>
                   </option>
                <?php }?>
            </select>
        </div>
        <div class="form-group">
            <label for="address"><font color="white">Address</font></label>
            <input type="text" class="form-control" value="<?php echo $attendee['address'] ?>" id="address" name="address">
        </div>
        <div class="form-group">
            <label for="email"><font color="white">Email address</font></label>
            <input type="email" class="form-control" id="email" value="<?php echo $attendee['emailaddress'] ?>" name="email" aria-describedby="emailHelp" >
            <small id="emailHelp" class="form-text text-muted"><font color="white">We'll never share your email with anyone else.</font></small>
        </div>
        <div class="form-group">
            <label for="phone"><font color="white">Contact Number</font></label>
            <input type="text" class="form-control" id="phone" value="<?php echo $attendee['contactnumber'] ?>" name="phone" aria-describedby="phoneHelp" >
            <small id="phoneHelp" class="form-text text-muted"><font color="white">We'll never share your number with anyone else.</font></small>
        </div>
        
        <a href="viewrecords.php" class="btn btn-default"><font color="white">Back To List</font></a>
        <button type="submit" name="submit" class="btn btn-success">Save Changes</button>
    </form>

<?php } ?>
<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>