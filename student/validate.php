<?php
  
    include "db1.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $flag=0;
    $query="SELECT * FROM `admin`;";
    $getval=mysqli_query($conn,$query);
            
    while($data = mysqli_fetch_array($getval))
    {
        if($data['username'] == $username)
        {
            $flag=1;
            if($data['password'] == $password)
            {
                header("location:index.php");
            }
            else
            {
                header("location:login.php");
            }
            break;
        }

    }
    if($flag==0)
    {
        header("location:login.php");
    }
    ?>