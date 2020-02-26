<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Records of form inputs</h1>

    <?php
    
    ?>
    

    Firstname : <?php  echo  $_POST["fname"];?> <br>
    Lastname :  <?php  echo  $_POST["lname"];?> <br>
    MiddleName : <?php  echo  $_POST["mname"];?> <br>
    Address : <?php  echo  $_POST["address"];?> <br>
    Gender : <?php  echo  $_POST["gender"];?><br>
    bday : <?php  echo  $_POST["pob"];?><br>
   
   <?php 
    //DISPLAY YEARLEVEL Selected
    if(isset($_POST['yearlevel'])){
            // As output of $_POST['yearlevel'] is an array we have to use foreach Loop to display individual value
        foreach ($_POST['yearlevel'] as $select) {
              echo "Yearlevel:", $select ;
     }
    } 
    ?>
    <br>
    <?php 
    //DISPLAY COURSE SELECTED    
    if(isset($_POST['course'])){
            // As output of $_POST['yearlevel'] is an array we have to use foreach Loop to display individual value
        foreach ($_POST['course'] as $courseselect) {
              echo "Course:", $courseselect ;
     }
    }
    ?>











      


    

        
    </body>
</html>