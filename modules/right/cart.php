<h1>Giỏ Hàng</h1>
<?php
	session_start();
	//session_destroy();
	//Thêm SP
	if(isset($_GET['add']) && !empty($_GET['add'])){
		$id = $_GET['add'];
		@$_SESSION['cart_'.$id]+=1;
		header('location:index.php?xem=giohang');
	}
	//Cộng SP
	if(isset($_GET['them'])){
		$_SESSION['cart_'.$_GET['them']]+=1;
	}
	//Trừ SP
	if(isset($_GET['tru'])){
		$_SESSION['cart_'.$_GET['tru']]--;
	}
	//Xóa SP
	if(isset($_GET['xoa'])){
		$_SESSION['cart_'.$_GET['xoa']]=0;
	}
	//Hiển thị SP đã thêm.
	foreach($_SESSION as $name => $value){
		//echo $name.''.$value;
		$thanhtien = 0;
		if($value > 0){
			if(substr($name,0,5) == 'cart_'){
				$id = substr($name,5,strlen($name-5));
				$sql = "select * from chitietloaisp where id_sp = '$id'";
				$query = mysqli_query($conn,$sql);
				while($dong = mysqli_fetch_array($query)){
					$tongtien = $dong['giasp']*$value;
					echo $dong['tensp'].'x'.$value.'@'.$dong['giasp'].'='.$tongtien.'<a href="index.php?xem=giohang&them='.$id.'">[Thêm SP]</a><a href="index.php?xem=giohang&tru='.$id.'">[Trừ SP]</a><a href="index.php?xem=giohang&xoa='.$id.'">[Xóa SP]</a><br />';
				}
			}
			$thanhtien+=$tongtien;
		}
	}
?>