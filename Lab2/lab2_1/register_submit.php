<?php 
	if(isset($_POST['submit']) && $_POST['username']!='' && $_POST['password']!='' && $_POST['repassword']!='' ){
		//thực hiện khi người dùng nhấn nút submit và điền đẩy đủ thông tin
		$username = $_POST['username'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];

		if ($password != $repassword) {
			header("location:register.html");
		}
		echo "Đã đăng ký thành công!";
	}else{
		header("location:register.html");
	}
 ?>