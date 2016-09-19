<?php 
	$id = $_GET['id'];
	$sql = "select * from chitietloaisp where id_sp ='$id'";
	$query = mysqli_query($conn,$sql);
	$dong = mysqli_fetch_array($query);
?>
<form action="modules/quanlychitietloaisp/xuly.php?id=<?php echo $dong['id_sp']; ?>" method="post" enctype="multipart/form-data">
    <table width="100%" border="1">
      <tr>
        <td colspan="2"><div align="center">Sửa Chi Tiết SP</div></td>
      </tr>
      <tr>
        <td>Tên SP:</td>
        <td><input type="text" name="tensp" value="<?php echo $dong['tensp']; ?>" /></td>
      </tr>
      <tr>
        <td>Giá SP:</td>
        <td><input type="text" name="giasp" value="<?php echo $dong['giasp']; ?>" /></td>
      </tr>
      <tr>
        <td>Hình Ảnh:</td>
        <td><input type="file" name="hinhanh" /><img src="modules/quanlychitietloaisp/uploads/<?php echo $dong['hinhanh']; ?>" width="60" height="60" /></td>
      </tr>
      <tr>
        <td>Mô Tả SP:</td>
         <td><textarea name="motasp" rows="15" ><?php echo $dong['motasp']; ?></textarea></td>
      </tr>
      <tr>
      	<?php 
			$sql_sp = "select * from loaisp";
			$query_sp = mysqli_query($conn,$sql_sp);
		?>
        <td>Loại SP:</td>
        <td>
        	<select name="loaisp">
            	<?php
					while($dong_sp = mysqli_fetch_array($query_sp)){
						if($dong_sp['id_loaisp'] == $dong['id_loaisp']){
				?>
                <option selected="selacted" value="<?php echo $dong_sp['id_loaisp']; ?>"><?php echo $dong_sp['tenloaisp']; ?></option>
                <?php 
						}else{
				?>
                <option value="<?php echo $dong_sp['id_loaisp']; ?>"><?php echo $dong_sp['tenloaisp']; ?></option>
                <?php
						}
					}
				?>
            </select>
        </td>
      </tr>
      <tr>
        <td>Thứ Tự:</td>
        <td><input type="text" name="thutu" value="<?php echo $dong['thutu']; ?>"/></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <button name="sua">Edit</button>
        </div></td>
      </tr>
    </table>
</form>
