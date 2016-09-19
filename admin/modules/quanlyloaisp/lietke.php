<?php
	$sql = "select * from loaisp order by id_loaisp";
	$run = mysqli_query($conn,$sql);
?>
<table width="100%" border="1">
  <tr>
    <td><div align="center">ID</div></td>
    <td><div align="center">Tên Loại SP</div></td>
    <td><div align="center">Thứ Tự</div></td>
    <td colspan="2"><div align="center">Quản Lý</div></td>
  </tr>
  <?php
  	$i = 1;
  	while($dong = mysqli_fetch_array($run)){
	?>
  <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $dong['tenloaisp']; ?></td>
    <td><?php echo $dong['thutu']; ?></td>
    <td><div align="center"><a href="index.php?quanly=quanlyloaisp&ac=sua&id=<?php echo $dong['id_loaisp']; ?>" style="text-decoration:none;">Sửa</a></div></td>
    <td><div align="center"><a href="modules/quanlyloaisp/xuly.php?quanly=quanlyloaisp&id=<?php echo $dong['id_loaisp']; ?>" style="text-decoration:none;">Xóa</a></div></td>
  </tr>
  <?php
  	$i++;
	}
  ?>
</table>
