// wa.php?no=62852&pesan=woi
<?php
		$no  = $_GET ['no'];
		$pesan = $_GET ['pesan'];
		echo "<meta content='1;url=https://wa.me/".$no."?text=".$pesan."' http-equiv='refresh'/>" ;
