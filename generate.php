<?php
$info = $_GET['info'];
header("Location: https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl=$info&choe=UTF-8")
	?>