<?php

$page_title = "Joe Pietruch | Projects : Invader Zim - Good Gir Gone Bad";
$banner_color = "#290c29";
$section_color = "#efffe1";
$footer_color = "#290c29";

$a_color = "#cfdfc1";

$prev_url = "../fractal_sudoku/";
$prev_label = "Fractal Sudoku";
$next_url = "#";
$next_label = "";
$launch_url = "http://nicktoons.nick.com/games/invader-zim-good-gir-gone-bad.html";

$banner_src = "gir_banner.png";
$icon_src = "gir_icon.png";

$p_name = "Invader Zim : Good Gir Gone Bad";
$p_roles = "Game Designer, Gameplay Programmer";
$p_desc = "I mathed-out on this project while creating a dynamic camera system that sizes and positions the circular game world based on where the characters Gir and Dib are standing. Instead of traditional cartesian coordinates, game objects have a rotation and a distance from the center of the world.";

$highlights = Array();

$h = array(
	"img" => 'gir_1.png',
	"p1" => 'Objects within this game world have a heading (in radians) starting from zero, and a distance away from the center traveling at that heading: Polar Coordinates.',
	"ht" => 'Polar Coordinates',
	"p2" => 'In the image, the zero line is solid white. The heading is the dashed arc, and the distance is measured along the dashed line. "Left-right" movement involved increasing or decreasing the heading. "Up-down" movement involved increasing or decreasing the distance. In this way, elements moved across the surface of the game world.'
);

array_push($highlights, $h);

$h = array(
	"img" => 'gir_2.png',
	"p1" => 'This was a chasing game, and the player\'s character (Gir) was always pursuing the computer character (Dib). As such, these characters traveled all around the circle\'s surface during the course of the game.',
	"ht" => 'Continuous Interpolation',
	"p2" => 'I continually calculated the optimal position, scale, and rotation of the world. This optimal orientation has both characters visible, centered, and large enough to fill the width of the screen. Each step, the world would move a percentage of the difference between its current orientation and the calculated optimal orientation.'
);

array_push($highlights, $h);

$h = array(
	"img" => 'gir_3.png',
	"p1" => 'Here\'s a screenshot from the completed game.</p><p>It is quite beautiful.',
	"ht" => 'Working with Artists',
	"p2" => 'One thing I love about working for <a href="http://workinman.com/" target="_blank">Workinman</a> is never having to worry about the art assets. I could crank out my coding with grey boxes, and then drop in the finished art and animations as they became available.'
);

array_push($highlights, $h);
?>