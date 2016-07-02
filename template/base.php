<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>AAA</title>
	<style type="text/css" >
		
	.container{
		width: 800px;
		margin: 0 auto;
		max-width: 100%;
	}
	.row:after{
		content: '';
		clear: both;
		display: table;
	}
	.col-1, .col-2, .col-3, .col-4{
		float: left;
		position: relative;
	} 
	.col-1 { width: 25%; }
	.col-2 { width: 50%; }
	.col-3 { width: 75%; }
	.col-4 { width: 100%; }
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-1">
				<?php if($this->section('sidebar')): ?>
					<?php echo $this->section('sidebar'); ?>
				<?php else: ?>
					<ul>
						<li><a href="#">Lorem.</a></li>
						<li><a href="#">Quibusdam!</a></li>
						<li><a href="#">Sit!</a></li>
						<li><a href="#">Quos!</a></li>
						<li><a href="#">Quis.</a></li>
					</ul>
				<?php endif; ?>
			</div>
			<div class="col-3">
				<?php echo $this->section('content'); ?>
			</div>
		</div>
	</div>
</body>
</html>