<?php
	include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>F & Q ADMIN</title>

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
        <P><B> FAQ ADMIN </B></P>
       <form action="insert.php" method="post">
        	Question: <input type="text" name="question" required>
        	Answer: <input type="text" name="answer" required>
        	<button type="submit" value="submit" name="submit" class="btn btn-primary">Add</button>
        </form><br>	
    </center>
    <?php
    	$sql = "SELECT * FROM faq";
    	$result = mysql_query($sql);

    	$i = 1;
    	echo "<table class='table table-striped'>
    			<tr>
    			<td>No.</td>
				<td>Question</td>
				<td>Answer</td>
    			</tr>";
    	while ($row = mysql_fetch_array($result)){
    		echo "<tr>";
			if ($row['STATUS'] == 1){
				echo "<td>".$i."</td>
    				  <td>".$row['QUESTION']."</td>
    				  <td>".$row['ANSWER']."</td>";
					  echo "<td><a href='edit.php?id=".$row['ID']."'><button type='button' name='edit' value='edit' class='btn btn-success'>Edit</button></a> 
					  <a href='delete.php?id=".$row['ID']."'><button type='button' name='delete' value='delete' class='btn btn-danger'>Delete</button></a></td>";
				$i++;
			}
			echo "</tr>";
    	}
    	echo "</table>";
    ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>