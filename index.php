<?php
    $title = 'index';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    $result = $crud->getSpecialties();

?>
<!DOCTYPE html>
<html>
<head>

  
  
  
</head>
<body>


<h4> <p class="text-primary font-weight-bold ">Paradise Physical Therapy Jamaica is one of Spanish Town providers of outpatient physical and occupational therapy services, 
    dedicated to helping patients of all ages live better, work smarter and play harder.® 
    Paradise Physical Therapy Jamaica is your helping hand and guiding voice that helps you to keep moving at the speed of your life. </p>
    </h4>

    
    <div class="container">
        <p class="text-xs-center">Copyright (c) 2019 Paradise Physical Therapy Jamaica.</p>
    </div>
</footer>

  </body>
</html>
<?php require_once 'includes/footer.php'; ?>