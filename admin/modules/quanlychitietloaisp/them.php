<form action="modules/quanlychitietloaisp/xuly.php" method="post" enctype="multipart/form-data">
    <table width="100%" border="1">
      <tr>
        <td colspan="2"><div align="center">Thêm Chi Tiết SP</div></td>
      </tr>
      <tr>
        <td>Tên SP:</td>
        <td><input type="text" name="tensp" /></td>
      </tr>
      <tr>
        <td>Giá SP:</td>
        <td><input type="text" name="giasp" /></td>
      </tr>
      <tr>
        <td>Hình Ảnh:</td>
        <td><input type="file" name="hinhanh" /></td>
      </tr>
      <tr>
        <td>Mô Tả SP:</td>
         <td><textarea name="motasp" rows="15"></textarea></td>
      </tr>
      <tr>
      	<?php 
			$sql = "select * from loaisp";
			$query = mysqli_query($conn,$sql);
		?>
        <td>Loại SP:</td>
        <td>
        	<select name="loaisp">
            	<?php
					while($dong = mysqli_fetch_array($query)){
				?>
                <option value="<?php echo $dong['id_loaisp']; ?>"><?php echo $dong['tenloaisp']; ?></option>
                <?php
					}
				?>
            </select>
        </td>
      </tr>
      <tr>
        <td>Thứ Tự:</td>
        <td><input type="text" name="thutu"/><?php echo $dong['thutu']; ?></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <button name="them">Thêm</button>
        </div></td>
      </tr>
    </table>
</form>
