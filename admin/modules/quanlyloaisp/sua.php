<?php
	$id = $_GET['id'];
	$sql = "select * from loaisp where id_loaisp = '$id'";
	$query = mysqli_query($conn,$sql);
	$dong = mysqli_fetch_array($query);
?>
<form method="POST" action="modules/quanlyloaisp/xuly.php?id=<?php echo $dong['id_loaisp']; ?>" enctype="multipart/form-data">
    <table width="100%" border="1">
      <tr>
        <td colspan="2"><div align="center">Sửa Loại SP</div></td>
      </tr>
      <tr>
        <td>Tên loại SP:</td>
        <td><input type="text" name="tenloaisp" value="<?php echo $dong['tenloaisp']; ?>" /></td>
      </tr>
      <tr>
        <td>Thứ tự:</td>
        <td><input type="text" name="thutu" value="<?php echo $dong['thutu']; ?>" /></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><button name="sua" >Thêm</button></div></td>
      </tr>
    </table>
</form>
