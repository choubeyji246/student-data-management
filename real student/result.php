<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="result.css">
    <title>Display all records from Database</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        
   <!-- <li>         <div class="dropdown">
  <button class="dropbtn">Result</button>
  <div class="dropdown-content">
    <a href="#">mid sem</a>
    <a href="#">end sem</a>
    <a href="#">CGPA</a>
  </div>
</div></li>
            
        </ul>
    </nav> -->
    <h1>Best of luck!!</h1>
    <!-- <div class="dropdown">
        <button class="dropbtn">Branch</button>
        <div class="dropdown-content">
          <a href="#">CSE</a>
          <a href="#">ME</a>
          <a href="#">EEE</a>
          <a href="#">EE</a>
          <a href="#">ECE</a>
          <a href="#">AGE</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn">Section</button>
        <div class="dropdown-content">
            <a href="#">A</a>
            <a href="#">B</a>
            <a href="#">C</a>
            <a href="#">D</a>
            <a href="#">E</a>
            <a href="#">F</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn">Get Result</button> -->
        <?php

include "dbrconnect.php";
?>
<body bgcolor="black" text="white" link="red" alink="red" vlink="green">
<center>




    <h2>Result</h2>
    <?php if(count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
 $records = mysqli_query($db, "SELECT * FROM result1");

        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }?>

       
  

   <table border="5" bordercolor="aqua">
    
        <tr>
            <td>Subject</td>
            <td>pass marks</td>
            <td>theory</td>
            <td>practical</td>
        </tr> 

        <?php

$records = mysqli_query($db, "SELECT * FROM result"); // fetch data from database

        while ($data = mysqli_fetch_array($records)) {
        ?>
            <tr>
                <td><?php echo $data['subject']; ?></td>
                <td><?php echo $data['pass marks']; ?></td>
                <td><?php echo $data['theory']; ?></td>
                <td><?php echo $data['practical']; ?></td>



                <!-- <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td> -->
            </tr>

            
      
        <?php
      }?>
      
    </table> </center> 

    <?php mysqli_close($db); // Close connection 
    ?>


</body>


        
      </div>
</body>
</html>