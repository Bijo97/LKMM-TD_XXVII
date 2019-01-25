<!DOCTYPE html>

<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="kCjM6Im9v0z3GR7hb8921IblJiWTcMPND_Pvx5y4SrM">
    <title>Login Web Berita LKMM-TD XVII</title>
    <!-- Core CSS - Include with every page -->
    <link href="./css/bootstrap.min2.css" rel="stylesheet"> 
    <link href="./css/font-awesome2.css" rel="stylesheet">
    <link href="./css/style2.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="./css/sb-admin2.css" rel="stylesheet">
    </head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><img src="./logo_lkmmtd.png" alt="PriceBook Admin"> <strong>Control Panel</strong></h3> <!-- Masukkan Gambar disini -->
                    </div>
                    <div class="panel-body">
                                                <h4>Log-In</h4>
                        <form role="form" method="post" action="cek_login.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" name="username" placeholder="Username" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="password" placeholder="Password" type="password" value="">
                                    <p class="help-block"><a href="javascript:void(0)" id="btn-forget-password">Lupa Password?</a></p>
                                </div>
                                <button type="submit" class="btn btn-lg btn-primary btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="block-forget-password" style="display: none;">
            <div class="col-md-4 col-md-offset-4 well well-sm bg-success">
                <p class="no-margin">Lupa Password?</p>
                <p>Hubungi : stephen.lukas07@gmail.com</a></p>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="./js/jquery-1.10.22.js.unduhan"></script>
    <script src="./js/bootstrap.min2.js.unduhan"></script>
    <script src="./js/jquery2.metisMenu.js.unduhan"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="./js/sb-admin2.js.unduhan"></script>
    <script type="text/javascript">
        $('#btn-forget-password').click(function(){
            $('#block-forget-password').slideDown();
        });
    </script>


</body></html>