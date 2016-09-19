<?php 
	$sql = "select * from loaisp";
	$query = mysqli_query($conn,$sql);
?>
<p>Loại Sản Phẩm</p>
<div class="danhsachsp">
	<ul>
    <?php 
		while($dong = mysqli_fetch_array($query)){
	?>
    	<li><a href="index.php?xem=chitietloaisp&id=<?php echo $dong['id_loaisp']; ?> "><?php echo $dong['tenloaisp']; ?></a></li>
	<?php
		}
	?>
    </ul>
</div>
<P>Hiệu sản Phẩm</P>
<div class="danhsachsp">
	<ul>
    	<li><a href="">SAMSUNG</a></li>
        <li><a href="">DELL</a></li>
        <li><a href="">APPLE</a></li>
        <li><a href="">SONY</a></li>
        <li><a href="">CASIO</a></li>
    </ul>
</div>