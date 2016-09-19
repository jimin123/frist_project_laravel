<?php
	$id = $_GET['id'];
	$sql = "select * from chitietloaisp where id_loaisp = '$id'";
	$query = mysqli_query($conn,$sql);
	$dong = mysqli_fetch_array($query);
?>
<div style="float:right;"><a href="index.php?xem=giohang&add=<?php echo $dong['id_sp']; ?>"><img src="images/cart.jpg" width="60" height="60"/></a></div>
<table width="500" border="1">
  <tr>
    <td colspan="2"><div align="center" style="font-size:30px; color:red;">Chi Tiết sản Phẩm</div></td>
  </tr>
  <tr>
    <td rowspan="2"><img src="admin/modules/quanlychitietloaisp/uploads/<?php echo $dong['hinhanh']; ?>" width="250" height="300" /></td>
    <td><div align="center" style="font-size:25px; color:blue;"><?php echo $dong['tensp']; ?></div></td>
  </tr>
  <tr>
    <td><div align="center" style="font-size:20px; color:green;"><?php echo $dong['giasp'].'$'; ?></div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">Thông Số kỹ Thuật</div></td>
  </tr>
  <tr>
    <td colspan="2"><?php echo $dong['motasp']; ?></td>
  </tr>
</table>
