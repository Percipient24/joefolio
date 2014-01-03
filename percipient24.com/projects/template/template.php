<!DOCTYPE html>
<html lang="en">
<head>
    <link href='http://fonts.googleapis.com/css?family=Monda:700|Quattrocento+Sans' rel='stylesheet' type='text/css'>
	<meta charset="utf-8">
	
	<title><?php echo $page_title;?></title>
	
	<link href="/styles/common.css" rel="stylesheet" type="text/css">
	<link href="/styles/project_styles.css" rel="stylesheet" type="text/css">
	
	<style type="text/css"> 
		#banner
		{
			background-color: <?php echo $banner_color;?>;
		}
		
		section
		{
			background-color: <?php echo $section_color;?>;
		}
		
		footer
		{
			background-color: <?php echo $footer_color;?>;
		}
		
		a
		{
			background-color: <?php echo $a_color;?>;
		}
	</style>
	
	<script type="text/javascript" src="/scripts/jquery-1.5.2.min.js"></script>
</head>
<body>

<nav>
	<?php if($prev_url !== "#") {?><a id="back" class="left" href="<?php echo $prev_url;?>">&lt; <?php echo $prev_label;?></a><?php } ?>
	<a class="center" href="/">percipient24.com</a>
	<?php if($next_url !== "#") {?><a id="forth" class="right" href="<?php echo $next_url;?>"><?php echo $next_label;?> &gt;</a><?php } ?>
</nav>

<div id="banner">
	<img class="bannerImage" src="<?php echo $banner_src;?>" width="960" height="300" alt="" title=""/>
</div>

<section>
		<img class="icon" src="<?php echo $icon_src;?>" width="75" height="75" alt="" title="" />
		<h1><?php echo $p_name;?></h1>
		<h4><?php echo $p_roles;?></h4>
		<p class="description"><?php echo $p_desc;?></p>
		
		<?php if($launch_url !== "#") {?>
		<div id="launch">
			<h2><a class="launch" href="<?php echo $launch_url;?>" target="_blank">Visit Project</a></h2>
		</div>
		<?php } ?>
		
		<?php foreach ($highlights as $item) {?>
		<div class="highlight">
		<?php if (array_key_exists('img', $item)){ ?>
		<img src="<?php echo $item['img'];?>" width="400" height="300" alt="" title="" />
		<?php } else {?>
		<iframe width="400" height="300" src="<?php echo $item['youtube'];?>" style="border:none;" allowfullscreen></iframe>
		<?php } ?>
		<p class="first"><?php echo $item['p1'];?></p>
		<h2><?php echo $item['ht'];?></h2>
		<p><?php echo $item['p2'];?></p>
		<div class="clear"></div>
		</div>
		<?php } ?>
		
		<div class="clear"></div>
</section>

<footer>
</footer>

<script src="/scripts/left_right.js"></script>

</body>
</html>


