<?php
	include('../config.php');
	$id = $_GET['id'];
	$tenloaisp = $_POST['tenloaisp'];
	$thutu = $_POST['thutu'];
	if(isset($_POST['them'])){
		//echo 'Thêm';
		$sql = "Insert into loaisp(tenloaisp,thutu)
				values('$tenloaisp','$thutu')";
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlyloaisp&ac=them');
	}elseif(isset($_POST['sua'])){
		//echo 'Sua';
		$sql = " update loaisp
				 set tenloaisp = '$tenloaisp',
					 thutu     = '$thutu'
				 where id_loaisp = '$id'";
		$sql = mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlyloaisp&ac=them');
	}else{
		//echo 'Xóa';
		$sql = "Delete from loaisp where id_loaisp = '$id'";
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlyloaisp&ac=them');
	}
?>