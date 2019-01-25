<!DOCTYPE html>
 <?php

$dbhost = 'lkmm-td.petra.ac.id';
$dbuser = 'lkmmtd';
$dbpass = 'kapokmukapan';
$db = 'lkmmtd_database';

$dbconn = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($db);




if (isset($_POST['submit']))
{
    $Title  = $_POST['Title'];
    $Content = $_POST['Content'];


     $query = ("INSERT INTO news ([Title], [Content]) VALUES ('$Title', '$Content')");

if(mysql_query($query))
 {
echo "<script>alert('INSERTED SUCCESSFULLY');</script>";
}
else
 {
 echo "<script>alert('FAILED TO INSERT');</script>";
 }

 }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>sample</title>
    </head>
    <body>
        <form action="" method = "POST">

   Title:   
  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  Content:
  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  Last Name:<br>
  <input name="Title" size="15" style="height: 19px;"  type="text" required>
      &nbsp; &nbsp; &nbsp; 
  <input name="Content" size="15" style="height: 19px;"  type="text" required>
      &nbsp; &nbsp; &nbsp; 
  <input name="LastName" size="15" style="height: 19px;"  type="text" >

  <br><br>

    Email Address:<br>
  <input name="email"  type="text"  placeholder="Enter A Valid Email Address" style="height: 19px;" size="30"><br><br>

  Home Address: <br>
  <input name="Address" type="text"  placeholder="Enter your home Address" style="height: 19px;" size="30" maxlength="30"><br><br>

  City:
   &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
  Zipcode:
   <br>
  <input name="City" size="7" style="height: 19px;"  type="text" >
    &nbsp; &nbsp; 
    <input name="ZipCode" size="7" style="height: 19px;"  type="text" >
    <br><br>

  Telephone/Mobile Number: <br>
  <input name="number" type="text"  id="number" placeholder="Mobile Number" style="height: 19px;">

<br>
<br>

<button type ="submit" name="submit" value="send to database"> SEND TO DATABASE </button>
</form>
    </body>
</html>   