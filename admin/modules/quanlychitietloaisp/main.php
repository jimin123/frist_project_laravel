<div class="left">
	<?php
        if(isset($_GET['ac'])){
            $tam = $_GET['ac'];
        }else{
            $tam = '';
        }
		if($tam == 'them'){
			include('modules/quanlychitietloaisp/them.php');
		}elseif($tam == 'sua'){
			include('modules/quanlychitietloaisp/sua.php');
		}
    ?>
</div>
<div class="right">
	<?php
		include('modules/quanlychitietloaisp/lietke.php');
	?>
</div>