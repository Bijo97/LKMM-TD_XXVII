<?php
	include "connect.php";

    if (isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $sql = "SELECT * FROM faq WHERE id = ".$id;
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hello World</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <center>
        <P><B> EDIT FAQ </B></P>
            <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
            	Question: <input type="text" name="question" value="<?php echo $row['QUESTION']; ?>" required>
            	Answer: <input type="text" name="answer" value="<?php echo $row['ANSWER']; ?>" required>
        		<button type="submit" value="submit" name="submit" class="btn btn-primary">Update</button>
        	</form>
     </center>      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>