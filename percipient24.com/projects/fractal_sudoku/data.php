<?php

$page_title = "Joe Pietruch | Projects : Fractal Sudoku";
$banner_color = "#3333AA";
$section_color = "#e0e0ff";
$footer_color = "#111166";

$a_color = "#ccccff";

$prev_url = "../chain_gang_chase/";
$prev_label = "Chain Gang Chase";
$next_url = "../good_gir_gone_bad";
$next_label = "Good Gir Gone Bad";
$launch_url = "http://www.games4awesome.com/fractalsudoku/";

$banner_src = "sudoku_banner.png";
$icon_src = "sudoku_icon.png";

$p_name = "Fractal Sudoku";
$p_roles = "Algorithm Translation, Implementation, and Graphical Improvements";
$p_desc = "I enjoy Sudoku puzzles as diversions. I found a <a href=\"http://norvig.com/sudoku.html\" target=\"_blank\">blog post by Peter Norvig</a> where he describes a Sudoku Solver he wrote in Python. I translated his algorithm to ActionScript 3, and built a program that drills down into a series of unique but related Sudoku puzzles.";

$highlights = Array();

$h = array(
	"img" => 'sudoku_1.png',
	"p1" => 'A Sudoku puzzle is a 9 by 9 grid, subdivided into nine 3 by 3 regions (these regions are labeled in the image with large grey numbers). The puzzle is considered solved when each row, column, and region contains the numerals 1 through 9 exactly once.',
	"ht" => 'Each puzzle has 9 regions.',
	"p2" => 'My Fractal Sudoku is really just a proof-of-concept, considering that all of the puzzles are already solved by the program. The user is able to navigate through these solved puzzles.'
);

array_push($highlights, $h);

$h = array(
	"img" => 'sudoku_2.png',
	"p1" => 'This image shows the original puzzle in the upper-left corner. If the user were to click in the first region of this puzzle, a new puzzle would be created. Each 3 by 3 region of the new puzzle is related to the clicked region of the original puzzle.',
	"ht" => 'Clicking spawns a related puzzle.',
	"p2" => 'Notice that the upper left square of each 3 by 3 region has been seeded with the number from the corresponding square of the original puzzle.'
);

array_push($highlights, $h);

$h = array(
	"img" => 'sudoku_3.png',
	"p1" => 'Every click progresses one level deeper into the puzzles. At level zero, there is only 1 puzzle. This level zero puzzle has 9 regions, so at level one there are 9 more puzzles.',
	"ht" => 'Each level n adds 9<sup>n</sup> more puzzles.',
	"p2" => 'Each of the 9 level one puzzles has its own 9 regions to expand, so at level two there are 81 more puzzles. Each of level two\'s 81 puzzles has 9 regions to expand, so at level three there are 729 more puzzles. It quickly becomes overwhelming; in these first four levels there are 1 + 9 + 81 + 729 = 820 puzzles!'
);

array_push($highlights, $h);
?>