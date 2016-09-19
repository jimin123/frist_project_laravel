<div class="content">
   <?php
   		if(isset($_GET['quanly'])){
			$tam = $_GET['quanly'];
		}else{
			$tam = '';
		}
		if($tam == 'quanlyloaisp'){
			include('modules/quanlyloaisp/main.php');
		}
		if($tam =='quanlychitietloaisp'){
			include('modules/quanlychitietloaisp/main.php');
		}
   ?>
</div>
<div class="clear"></div>