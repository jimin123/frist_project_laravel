<div class="left">
	<?php
		if(isset($_GET['ac'])){
    		$tam = $_GET['ac'];
		}else{
			$tam = '';
		}
		if($tam == 'them'){
			include('modules/quanlyloaisp/them.php');
		}elseif($tam == 'sua'){
			include('modules/quanlyloaisp/sua.php');
		}
	?>
</div>
<div class="right">
	<?php
		include('modules/quanlyloaisp/lietke.php');
	?>
</div>