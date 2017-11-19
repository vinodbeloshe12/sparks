<?php
session_start();
$user = $_SESSION['username'];
$name=$_FILES['image']['name'];
$tmp=$_FILES['image']['tmp_name'];
$err=$_FILES['image']['error'];
$path=$name;
$name1=$_FILES['bimage']['name'];
$tmp1=$_FILES['bimage']['tmp_name'];
$err1=$_FILES['bimage']['error'];
$path=$name1;
if($err==0)
{
move_uploaded_file($tmp, "gallery/".$name);
}
if($err1==0)
{
move_uploaded_file($tmp1, "galleryd/".$name1);
}
$img=$_FILES["image"]["name"];
$bimg=$_FILES["bimage"]["name"];
$category=$_POST['catname'];


?>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
include 'db.php';
$q="INSERT INTO gallery(simage,bimage,category)VALUES('$img','$bimg','$category')";
//echo $q;
 $qry=mysqli_query($con,$q);
if(!$qry)
{
die("Query Failed: ". mysqli_error());
}
else
{
 // header("Location: categoryadd.php");
print "<script>location.href = 'offeradd.php'</script>";
 }

}
?>