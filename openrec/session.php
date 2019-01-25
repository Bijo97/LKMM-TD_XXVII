<?php
	session_start();
    if($_SERVER['REQUEST_METHOD'] == "POST") 
    {
        $user="m".$_POST['t_user'];
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
	            header("Location: page=login.php");
	            // exit();
	        }
	        else
	        {
	            $_SESSION['ID'] = $user;
				$_SESSION['PASS'] = $pass;
				header("Location: page=index.php");
	        }
    }
?>