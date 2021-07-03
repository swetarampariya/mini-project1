<html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birds</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<div class="logo">
        <a href="#"><img src="https://www.pinkpigeonrum.com/img/toolbox/bird-icon-png.png" height="70px" width="70px"></a>
    </div>
    <nav>
        <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="Gallery.php">Gallery</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="index.php">Home</a></li>
        </ul>
    </nav>
</html>
    <?php 
$connection = mysqli_connect("localhost","root","","db_internship");

if($_POST){
    $name = $_POST['txt1'];
    $gender =$_POST['txt2'];
    $dob = $_POST['txt3'];
    $email = $_POST['txt4'];
    $mobile = $_POST['txt5'];
    $address = $_POST['txt6'];
    $password = $_POST['txt7'];
    $area = $_POST['txt8'];
    $bloodgroup = $_POST['txt9'];

    $q=mysqli_query($connection,"insert into tbl_student(st_name ,st_gender,st_dob,st_email,st_mobile,st_address,st_password,st_area,st_bloodgrood) values( '{$name}','{$gender}','{$dob}','{$email}','{$mobile}','{$address}','{$password}','{$area}','{$bloodgroup}')") or die(mysqli_error($connection));
    
    if($q){
        echo "<script>alert('record added');</script>";
    }
    echo "<a href='database3.php'>display data</a>";
}

?>

<html>
    <body>
        <form method = "post"> 
            Name : <input type = "text" required name = "txt1"/><br><br>
            Gender : <select name = "txt2"> 
                <option> Male</option>
                <option> Female</option>
                </select><br><br>
            DOB : <input type = "date" required name = "txt3"/><br><br>
            Email : <input type = "text"  required name = "txt4"/><br><br>
            Mobile : <input type = "number" required name = "txt5"/><br><br>
            address : <input type = "textarea"  required name = "txt6"/><br><br>
            Password : <input type = "number " required name = "txt7"/><br><br>
            Area :<input type = "text" required name = "txt8"/><br><br>
            Bloodgroop : <input type = "text" required name = "txt9"/><br><br>
            <input type = "submit"/><br><br><br><br><br><br><br><br>

        </form>
        
    </body>
    </html>
    
