<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Login</title>
		<style type="text/css">
			
body {
 
    width: 500px;
    height: 300px;
    margin: 150px auto;
    padding-top: 75px;
    background-color : #7FFFD4 ;
 
}
 
#input{
    background:#87CEFA;
    color:#800000;margin:1em auto;
    padding: 10px 70px 0 70px;
    font-family: Arial, Helvetica, sans-serif;
    color: #0d5fac;
    height: 250px;
}
 
#input h2{
 
    font-size: 18px;
}

#table{background-color:#FOF8FF ;} 

.form-login{
 
    padding: 2px 3px;
    width: 200px;
    border: 3px solid #0d5fac;
    border-spacing: 1px;
    font-size: 16px;
    color: #0d5fac;
 
}
 
.LOGIN{
 
    width: 89px;
    height: 36px;
    cursor: pointer;
    border: none;
 
}
		</style>
		<script type="text/javascript" language="javascript">
			function cekhuruf(huruf){		// fungsi untuk cek huruf
				cek = /^[A-Za-z]{1,}$/;		
				return cek.test(huruf);
			}
			function validasi(form){
				var us = form.user.value;	//variabel us dari user form login			
				var pass = form.password.value;		//variabel pass dari password form login
				if(us === '' || pass === ''){		//cek nilai user dan password tidak boleh kosong
					alert("Username dan Password Tidak Boleh Kosong"); 
					form.user.focus();			//mengembalikan kursor pada username	
					return false;
				}else if(!cekhuruf(us) === true || !cekhuruf(pass) === true){		//cek nilai user dan password tidak boleh angka
					alert("Username dan Password tidak boleh angka");	
					return false;
				}else{
					return true;					
				}

		}
	</script>
	</head>

	<body>
	<div id="input">	
        <h2>Login Form</h2>
	
	
	<form action="login.php" name="login" method="post" onSubmit="return validasi(this)">		<!--memberikan nama form login sekaligus tindakan selanjutnya menuju login.php disertai dengan validasi-->
                <table>
            <tr>
                <td width="200">Username</td>
                <td><input type="text" name="user" title="Username" class="form-login" size="30" maxlength="100"/></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" title="Passsword" class="form-login" size="30" maxlength="100"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="LOGIN"/></td>
            </tr>
        </table>
            </form>
    </div>
</div>
	</body>
</html>