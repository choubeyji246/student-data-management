<?php

include "dbrconnect.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Display all records from Database</title>
</head>

<body bgcolor="black" text="white" link="red" alink="red" vlink="green">
<center>

    <h2>Result</h2>

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
        }
        ?>
    </table></center>

    <?php mysqli_close($db); // Close connection 
    ?>


</body>

</html>