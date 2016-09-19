<div class="content">
   <div class="left">
   		<?php
			include('modules/left/danhsachsp.php');
		?>
   </div>
   <div class="right">
   		<?php
			if(isset($_GET['xem'])){
				$tam = $_GET['xem'];
			}else{
				$tam = '';
			}
			if($tam == 'chitietloaisp'){
				include('modules/right/chitietloaisp.php');
			}elseif($tam == 'chitietsp'){
				include('modules/right/chitietsp.php');
			}elseif($tam == 'giohang'){
				include('modules/right/cart.php');
			}else{
			 	include('modules/right/tatcasp.php');
			}
		?>
   </div>
</div>
<div class="clear"></div>