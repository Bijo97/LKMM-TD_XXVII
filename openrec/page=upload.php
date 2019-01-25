<?php
session_start();
if (!$_SESSION['ID'] && !$_SESSION['PASS']){ header("location:page=login.php");}else{

}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
<title>WGG 2014 :: OPEN REC</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
<link rel="shortcut icon" href="iconukp.ico" type="image/x-icon" >
    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">

<script src="index.js"></script>
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>


</head>
<body >
<div id="ErcSysmain">
    <div class="ErcSyssheet clearfix">
            <div class="ErcSyslayout-wrapper">
                <div class="ErcSyscontent-layout">
                    <div class="ErcSyscontent-layout-row">
                        <div class="ErcSyslayout-cell ErcSyscontent"><article class="ErcSyspost ErcSysarticle">
                   		<div class="ErcSyspostcontent ErcSyspostcontent-0 clearfix">
<div id="logo"></div>
<div id='cssmenu'>
<ul>
   <li><a href='page=index.php'><span>BERANDA</span></a></li>
   <li><a href='tanya.php'><span>PENDAFTARAN</span></a></li>
   <li><a href='page=cetak.php'><span>CETAK CV</span></a></li>
   <li><a href='page=interview.php'><span>INTERVIEW</span></a></li>
   <li class='last'><a href='page=logout.php'><span>LOGOUT</span></a></li>
</ul>
</div>

<div id="formreg"><br/><br/>
<center>
<?php
if ($_POST) {
    require '!upload/DropboxUploader.php';


    try {
        // Rename uploaded file to reflect original name
        if ($_FILES['file']['error'] !== UPLOAD_ERR_OK)
            throw new Exception('File was not successfully uploaded from your computer.');

        $tmpDir = uniqid('/tmp/DropboxUploader-');
        if (!mkdir($tmpDir))
            throw new Exception('Cannot create temporary directory!');

        if ($_FILES['file']['name'] === "")
            throw new Exception('File name not supplied by the browser.');

        $tmpFile = $tmpDir.'/'.str_replace("/\0", '_', $_FILES['file']['name']);
        if (!move_uploaded_file($_FILES['file']['tmp_name'], $tmpFile))
            throw new Exception('Cannot rename uploaded file!');

        // Enter your Dropbox account credentials here
		$uploader = new DropboxUploader('m26413021@john.petra.ac.id', 'ericgantenglho');
        $uploader->upload($tmpFile, $_POST['dest']);

        echo '<span style="color: green;font-weight:bold;margin-left:393px;">&nbsp;&nbsp;&nbsp;File successfully uploaded to Divisi IT!</span>';
    } catch(Exception $e) {
        echo '<span style="color: red;font-weight:bold;margin-left:393px;">Error: ' . htmlspecialchars($e->getMessage()) . '</span>';
    }

    // Clean up
    if (isset($tmpFile) && file_exists($tmpFile))
        unlink($tmpFile);

    if (isset($tmpDir) && file_exists($tmpDir))
        rmdir($tmpDir);
}
?>
<h3>INFORMASI PENTING :</h3>
* Seluruh Kelengkapan (SCAN KTM, KHS, FOTO, DLL) Di Kompress Dengan Format *.7z / *.Zip / *.Rar / *.Tgz / *.Tar <br/>
* File Hasil Kompresi > Format Nama File : 0W-GG14-XXXXXXXX_KELENGKAPAN , Contoh : 0W-GG14-26413021_KELENGKAPAN <br/><br/>
<form method="POST" enctype="multipart/form-data">
		<input type="file" name="file" />
		<input name="Button" type="submit" />
		<input style="display:none" type="text" name="dest" value="eIntelPetra" />
  
<br/><br/><br/>
</div>
</article></center></div>
                    </div>
                </div>
</div></div></div></body></html>