<?php
	include('modules/config.php');
	session_start();
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "select * from login where username = '$username' and password = '$password' limit 1";
		$query = mysqli_query($conn,$sql);
		$num = mysqli_num_rows($query);
		if($num > 0){
			$_SESSION['dangnhap'] = $username;
			header('location:index.php');
		}else{
			echo '<center>Username hoặc Password chưa đúng!Vui lòng nhập lai.</center><br /><br />';
		}
	}
?>
<form action="" method="POST">
    <center>
        <table width="300" border="1">
          <tr>
            <td colspan="2"><div align="center">Login User</div></td>
          </tr>
          <tr>
            <td>Username:</td>
            <td><input type="text" name="username" /></td>
          </tr>
          <tr>
            <td>Password:</td>
            <td><input type="password" name="password" /></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center"><input type="submit" name="login" value="Login" /></div></td>
          </tr>
        </table>
    </center>
</form>
