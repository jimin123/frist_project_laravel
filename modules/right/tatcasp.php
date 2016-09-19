<?php
	$sql = "select * from chitietloaisp";
	$query = mysqli_query($conn,$sql);
	$total = mysqli_num_rows($query);
	$limit = 5;
	$totalPage = ceil($total/$limit);
	if(isset($_GET['page']) && $_GET['page'] != null){
		$start = ($_GET['page']-1)*$limit;
	}else{
		$start = 0;
	}
	$sqlPage = "SELECT * FROM chitietloaisp LIMIT $start,$limit";
	$queryPage = mysqli_query($conn,$sqlPage);
?>
<?php
	if($total >0){
?>
<p>Tất Cả sản Phẩm</p>

<div class="sp">
    
    <?php
		while($dong = mysqli_fetch_array($queryPage)){
	?>
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
<div class="clear"></div>
<center style="padding:5px;">
	<?php
		if(isset($_GET['page']) && $_GET['page'] !=1){
			$prevPage = $_GET['page']-1;
			echo '<a href="index.php?page='.$prevPage.'">&laquo;</a>';
		}
		for($i=1;$i<=$totalPage;$i++){
			if(isset($_GET['page']) && $_GET['page'] ==$i){
				$active = 'active';
			}else{
				$active = '';
			}
			echo '<a href="index.php?page='.$i.'" class="page '.$active.'" style="margin:0px 7px; text-decoration:none; font-size:20px;">'.$i.'</a>';
		}
		if(isset($_GET['page']) && $_GET['page'] <= $totalPage && $_GET['page'] != $total){
			$nextPage = $_GET['page']+1;
			echo '<a href="index.php?page='.$nextPage.'">&raquo;</a>';
		}
	?>
</center>
<?php
	}
?>