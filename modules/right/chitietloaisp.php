<?php
	$id = $_GET['id'];
	$sql = "select * from chitietloaisp where id_loaisp = '$id'";
	$query = mysqli_query($conn,$sql);
?>
<?php
	$sql_x = "select * from loaisp where id_loaisp = '$id' ";
	$query_x = mysqli_query($conn,$sql_x);
	$dong_x = mysqli_fetch_array($query_x);
?>
<p><?php echo $dong_x['tenloaisp']; ?></p>
<div class="sp">
    <?php 
		while($dong = mysqli_fetch_array($query))
		{
	?>
        <!--<li>
            	<a href=""><img src="admin/modules/quanlychitietloaisp/uploads/<?php echo $dong['hinhanh']; ?>" width="150px" height="150px" /></a>
                <a href=""><span class="span1"><?php echo $dong['tensp']; ?></span></a>
                <span class="span2"><?php echo $dong['giasp']; ?></span>
                <a href="index.php?xem=chitietsp&id=<?php echo $dong['id_loaisp']; ?>"><span class="span3">Chi Tiết</span></a>
        </li>-->
        <div class="sp_m">
        <div class="hinh">
            	<a href="#"><img src="admin/modules/quanlychitietloaisp/uploads/<?php echo $dong['hinhanh']; ?>" width="170px" height="210px" /></a></div>
                <div class="gia">
                <a href="index.php?xem=chitietsp&id=<?php echo $dong['id_loaisp']; ?>" style="color:blue;"><span class="span1"><?php echo $dong['tensp']; ?></span></a><br /><br />
                <center><span class="span2"><?php echo $dong['giasp'].'$'; ?></span></center>
                <a href="index.php?xem=chitietsp&id=<?php echo $dong['id_loaisp']; ?>"><span class="span3">Chi Tiết</span></a>
        </div>
        </div>
    <?php
		}
	?>
</div>