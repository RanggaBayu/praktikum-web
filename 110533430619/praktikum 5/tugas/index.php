<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
        <head>
                <title>Halaman Administrator</title>
                <style type="text/css">
                        .inner{
                                margin: 200px auto;
                                padding: 20px;
                                width:240px;
                                border:1px solid #333
                        }
                </style>
        </head>

        <body>
                <?php
                        ini_set('display errors',1);
                        define('_VALID',1);
                        
                        //include file eksternal
                        require_once('./auth.php');
                        
                        init_login();
                        validate();
                ?>
                <h3>Simulasi Halaman Admin</h3>
                <p>
                        <a href="?m=Logout">Logout</a>
                </p>
                Menu-menu Admin Disini
			<?php
                                if($_SESSION['login']==''){                        //hapus session jika checkbox tidak dicentang
                                        unset($_SESSION['login']);
                                        session_destroy();
                                        exit;
                                }
                        ?>
        </body>
</html>