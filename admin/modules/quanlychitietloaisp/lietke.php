<?php
	$sql = "select * from chitietloaisp,loaisp where chitietloaisp.id_loaisp=loaisp.id_loaisp order by chitietloaisp.id_sp";
	$query = mysqli_query($conn,$sql);
	$total = mysqli_num_rows($query);
	$limit = 5;
	$totalPage = ceil($total/$limit);
	if(isset($_GET['page']) && $_GET['page'] != null){
		$start = ($_GET['page']-1)*$limit;
	}else{
		$start = 0;
	}
	$sqlPage = "SELECT * FROM chitietloaisp  LIMIT $start,$limit";
	$queryPage = mysqli_query($conn,$sqlPage);
?>
    <table width="100%" border="1">
      <tr>
        <td width="27"><div align="center">ID</div></td>
        <td width="62"><div align="center">Tên SP</div></td>
        <td width="66"><div align="center">Hình Ảnh</div></td>
        <td width="56"><div align="center">Giá SP</div></td>
        <td width="53"><div align="center">Loại SP</div></td>
        <td width="54"><div align="center">Thứ Tự</div></td>
        <td colspan="2"><div align="center">Quản Lý SP</div></td>
      </tr>
        <?php
          $a = 1;
          while($dong = mysqli_fetch_array($queryPage)){
        ?>
      <tr>
        <td><?php echo $a; ?></td>
        <td><?php echo $dong['tensp']; ?></td>
        <td><img src="modules/quanlychitietloaisp/uploads/<?php echo $dong['hinhanh']; ?>" width="60" height="60" /></td>
        <td><?php echo $dong['giasp']; ?></td>
        <td><?php echo $dong['id_loaisp']; ?></td>
        <td><?php echo $dong['thutu']; ?></td>
        <td width="55"><div align="center"><a href="index.php?quanly=quanlychitietloaisp&ac=sua&id=<?php echo $dong['id_sp']; ?>" style="text-decoration:none;">Sửa</a></div></td>
        <td width="49"><div align="center"><a href="modules/quanlychitietloaisp/xuly.php?id=<?php echo $dong['id_sp']; ?>" style="text-decoration:none;">Xóa</a></div></td>
      </tr>
        <?php
		$a++;
          }
        ?>
	</table>
    <?php
		for($i=1;$i<=$totalPage;$i++){
			if(isset($_GET['page']) && $_GET['page'] == $i){
				$active = 'active';
			}else{
				$active = '';
			}
			echo '<a href="lietke.php?page='.$i.'">'.$i.'</a>';
		}
	?>
