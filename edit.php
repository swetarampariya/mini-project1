<?php
$connection = mysqli_connect("localhost","root","","db_internship");

if($_GET)
{
$editid =$_GET['id'];

$editq=mysqli_query($connection,"select * from tbl_student where st_id='{$editid}'") or die(mysqli_error($connection));

$editdata=mysqli_fetch_array($editq);	
}

//window.location='database3.php'
if($_POST)
{
	$txt0 = $_POST['id'];
    $txt1 = $_POST['txt1'];
    $txt2 = $_POST['txt2'];
    $txt3 = $_POST['txt3'];
    $txt4 = $_POST['txt4'];
    $txt5 = $_POST['txt5'];
    $txt6 = $_POST['txt6'];
    $txt7 = $_POST['txt7'];
    $txt8 = $_POST['txt8'];
    $txt9 = $_POST['txt9'];

$uq = mysqli_query($connection,"update tbl_student SET `st_name` = '{$txt1}',`st_gender`='{$txt2}',`st_dob`='{$txt3}',`st_email`='{$txt4}',`st_mobile`='{$txt5}',`st_address`='{$txt6}',`st_password`='{$txt7}',`st_area`='{$txt8}',`st_bloodgrood`='{$txt9}' where `st_id`='{$txt0}'") or die (mysqli_error($connection));

    if($uq){
        echo "<script>alert('record updated');window.location='database3.php'</script>";
    }
    // header("location:database3.php");
}


?>
<html>
    <body>
        <form method = "post" action="edit.php"> 
        <div style="background-image:url('pic1.jpg');"><br><br>
			<input type="hidden" value=<?php echo $editdata['st_id']?> name = 'id'">
            Name : <input type = "text" value="<?php echo $editdata['st_name'];?>" name = 'txt1'/><br><br>
            Gender : <select name = 'txt2'> 
                <option> Male</option>
                <option> Female</option>
                </select><br><br>
            DOB : <input type = "date" value="<?php echo $editdata['st_dob'];?>" name = 'txt3'/><br><br>
            Email : <input type = "text" value="<?php echo $editdata['st_email'];?>"  name = 'txt4'/><br><br>
            Mobile : <input type = "number" value="<?php echo $editdata['st_mobile'];?>" name = 'txt5'/><br><br>
            address : <input type = "textarea" value="<?php echo $editdata['st_address'];?>" name = 'txt6'/><br><br>
            Password : <input type = "number " value="<?php echo $editdata['st_password'];?>"  name = 'txt7'/><br><br>
            Area :<input type = "text" value="<?php echo $editdata['st_area'];?>"  name = 'txt8'/><br><br>
            Bloodgroop : <input type = "text" value="<?php echo $editdata['st_bloodgrood'];?>" name = 'txt9'/><br><br>
            <input type = "submit" value="Submit"/><br><br><br><br><br><br><br><br>

        </form>
        
    </body>
</html>