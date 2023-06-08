<?php
$conn=mysqli_connect("localhost","root","","excellence");

if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$psw=$_POST['psw'];
$contact=$_POST['contact'];
$emp=$_POST['emp'];
$branch=$_POST['branch'];
$role=$_POST['role'];
$filename = $_FILES['photo']['name'];
    $file_loc = $_FILES['photo']['tmp_name'];
    $location = "profile/" . $filename;
// email already exist 
$result="SELECT email FROM user_detail WHERE email='$email'";
$total_query=mysqli_query($conn,$result);
$total=mysqli_num_rows($total_query);
if($total==true){
    echo "<script type='text/javascript'>

    alert('email already exist'); 
     location='FORMpractice.php';
     </script>";
}


else{
$query="INSERT INTO user_detail VALUES ('','$name','$email','$psw','$contact','$emp','$branch','$role','$filename')";
$res=mysqli_query($conn,$query);
move_uploaded_file($file_loc, $location);
if($res==true){
    echo "<script type='text/javascript'>

           alert('signup successfully'); 
            location='FORMpractice.php';
            </script>";
}
}
}
?>