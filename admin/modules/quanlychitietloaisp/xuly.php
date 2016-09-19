<?php
	include('../config.php');
	$id = $_GET['id'];
	$tensp = $_POST['tensp'];
	$hinhanh = $_FILES['hinhanh']['name'];
	$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
	$giasp = $_POST['giasp'];
	$loaisp = $_POST['loaisp'];
	$thutu = $_POST['thutu'];
	$motasp = $_POST['motasp'];
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	if(isset($_POST['them'])){
		//echo 'thêm';
		$sql = "Insert into chitietloaisp(tensp,hinhanh,giasp,id_loaisp,thutu,motasp)
		        values      ('$tensp','$hinhanh','$giasp','$loaisp','$thutu','$motasp')";
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlychitietloaisp&ac=them');
	}elseif(isset($_POST['sua'])){
		//echo 'Sửa';
		if($hinhanh != ''){
			$sql = "Update chitietloaisp
					Set tensp     = '$tensp',
						hinhanh   = '$hinhanh',
						giasp     = '$giasp',
						id_loaisp = '$loaisp',
						thutu     = '$thutu',
						motasp    = '$motasp'
					where id_sp = '$id'";
		}else{
			$sql = "Update chitietloaisp
					Set tensp     = '$tensp',
						hinhanh   = '$hinhanh',
						giasp     = '$giasp',
						id_loaisp = '$loaisp',
						thutu     = '$thutu',
						motasp    = '$motasp'
					where id_sp = '$id'";
		}
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlychitietloaisp&ac=them');
	}else{
		//echo 'Xóa';
		$sql = "Delete from chitietloaisp where id_sp = '$id'";
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlychitietloaisp&ac=them');
	}
?>