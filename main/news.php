<?php include "connect.php"; ?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<div id="#news">

<?php
$sql = "select * from news order by time desc";
$result = mysql_query($sql);
$count=1;
while($row=mysql_fetch_assoc($result)){
	 echo "
	<div id='wrap'>
			<div id='question'>
				<a data-toggle='collapse' href='#".$count."'>
					<i id='plus1' class='glyphicon glyphicon-chevron-down'></i>
						" . $row["Title"]. " ?
				</a>
			</div>
		</div>
		<div id='".$count."' class='panel-collapse collapse'>
			<div id='wrap'>
						" . $row["Content"]. "
				</p>
			</div>
		</div>";  
	$count=$count+1;
}
?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>