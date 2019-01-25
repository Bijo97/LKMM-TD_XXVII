<?php
	include "connect.php";

session_start();
    if($_SERVER['REQUEST_METHOD'] == "POST") 
    {
        $user="m".$_POST['t_user'];

        $cek = "SELECT shift FROM detailkelompok WHERE nrp like ".$_POST['t_user'];
        $result = mysql_query($cek);
        $row = mysql_fetch_array($result);
        if($row['shift'] == "1A" or $row['shift'] == "1B")
        {
	        $pass=$_POST['p_user'];
	        $imap=false;
	        $timeout=15;
	        $fp = fsockopen ($host='john.petra.ac.id',$port=110,$errno,$errstr,$timeout);
	        $errstr = fgets ($fp);
	        if (substr ($errstr,0,1) == '+')
	        {
	            fputs ($fp,"USER ".$user."\n");
	            $errstr = fgets ($fp);
	            if (substr ($errstr,0,1) == '+')
	            {
	                fputs ($fp,"PASS ".$pass."\n");
	                $errstr = fgets ($fp);
	                if (substr ($errstr,0,1) == '+')
	                {
	                    $imap=true;
	                }
	            }
	        }

	        if(!$imap)
	        {
	            header("Location: ../index.php?status=2");
	            // exit();
	        }
	        else
	        {
	        	$_SESSION['nrp'] = $_POST['t_user'];
	            header("Location: index.php");
	        }
	    }
	    else{
	    		header("Location: ../index.php?status=1");
	    }
    }
?>