<?php
$connection = mysqli_connect("localhost","root","","db_internship");

    $q=mysqli_query($connection,"select * from tbl_student where is_delete = 0") or die(mysqli_error($connection));
    
    echo"<table border='1'>";
    echo "<tr>";
    echo "<th> Name </td>";
    echo "<th> Gender </td>";
    echo "<th> DOB </td>";
    echo "<th> Email </td>";
    echo "<th> MObile </td>";
    echo "<th> Address </td>";
    echo "<th> Password </td>";
    echo "<th> Area </td>";
    echo "<th> Bloodgroup </td>";
    echo "<th colspan='2'> Action </td>";
    echo "</tr>";
    $i=0;
    while($row = mysqli_fetch_array($q)){
        $i++;
        echo "<tr>";
        echo "<td>{$row['st_name']}</td>";
        echo "<td>{$row['st_gender']}</td>";
        echo "<td>{$row['st_dob']}</td>";
        echo "<td>{$row['st_email']}</td>";
        echo "<td>{$row['st_mobile']}</td>";
        echo "<td>{$row['st_address']}</td>";
        echo "<td>{$row['st_password']}</td>";
        echo "<td>{$row['st_area']}</td>";
        echo "<td>{$row['st_bloodgrood']}</td>";
        echo "<td><a href = 'edit.php?id=${row['st_id']}'>Edit</a></td>";
        echo "<td> <a href = 'delete.php?deleteid={$row['st_id']}'>delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "<a href = 'index.php'>add record </a>";
    ?>

