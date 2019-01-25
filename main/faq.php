<?php
	include "faq/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>F & Q</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
	<div id="faq">
		<?php
		$sql = "select * from faq";
		$result = mysql_query($sql);
		$count=1;
		while($row=mysql_fetch_assoc($result)){
			 if ($row['STATUS'] == 1){
			 echo "
			<li><div id='wrap'>
					<div id='question'>
						<a data-toggle='collapse' href='#".$count."'>
							<i id='plus1' class='glyphicon glyphicon-chevron-down'></i>
								 <span class='badge'>Q$count</span>
								" . $row["QUESTION"]. "
						</a>
					</div>
				</div>
				<div id='".$count."' class='panel-collapse collapse'>
					<div id='wrap'>
						<p><span class='badge'>A$count</span>
								" . $row["ANSWER"]. "
						</p>
					</div>
				</div>  
			</li>";
			$count=$count+1;
			}
		}
		?>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </div>
  </body>
</html>		
