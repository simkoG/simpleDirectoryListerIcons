<?php
/*
*** OPTIONS ***/

	// TITLE OF PAGE
	$title = "List of Files";

	// ADD SPECIFIC FILES YOU WANT TO IGNORE HERE
	$ignore_file_list = array( ".htaccess", "Thumbs.db", ".DS_Store", "index.php" );

	// ADD SPECIFIC FILE EXTENSIONS YOU WANT TO IGNORE HERE, EXAMPLE: array('psd','jpg','jpeg')
	$ignore_ext_list = array( );

	// SORT BY
	$sort_by = "name_asc"; // options: name_asc, name_desc, date_asc, date_desc

	// ICON URL
	// $icon_url = "https://dl.dropbox.com/u/6771946/icons/icons.png";
  $icon_url = "data:image/svg+xml,%0A%3C%3Fxml version='1.0' encoding='UTF-8' standalone='no'%3F%3E%3C!DOCTYPE svg PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'%3E%3Csvg width='100%25' height='100%25' viewBox='0 0 1000 50' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' xml:space='preserve' xmlns:serif='http://www.serif.com/' style='fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;'%3E%3Crect id='ICONS' x='0' y='0' width='1000' height='50' style='fill:none;'/%3E%3CclipPath id='_clip1'%3E%3Crect x='0' y='0' width='1000' height='50'/%3E%3C/clipPath%3E%3Cg clip-path='url(%23_clip1)'%3E%3Cg id='file'%3E%3Crect x='0' y='0' width='50' height='50' style='fill:none;'/%3E%3Cpath d='M28.75,10l-12.75,0c-1.646,0 -3,1.354 -3,3l0,24c0,1.646 1.354,3 3,3l18,0c1.646,0 3,-1.354 3,-3l0,-18.75l-8.25,-8.25Z' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M28,10l0,9l9,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3C/g%3E%3Cg id='file-image'%3E%3Crect x='50' y='-0' width='50' height='50' style='fill:none;'/%3E%3Cpath d='M78.75,10l-12.75,0c-1.646,0 -3,1.354 -3,3l0,24c0,1.646 1.354,3 3,3l18,0c1.646,0 3,-1.354 3,-3l0,-18.75l-8.25,-8.25Z' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M78,10l0,9l9,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Ccircle cx='72' cy='26.5' r='3' style='fill:none;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M87,32.5l-1.635,-1.635c-1.162,-1.155 -3.068,-1.155 -4.23,0l-9.135,9.135' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3C/g%3E%3Cg id='file-text'%3E%3Crect x='100' y='0' width='50' height='50' style='fill:none;'/%3E%3Cpath d='M128.75,10l-12.75,0c-1.646,0 -3,1.354 -3,3l0,24c0,1.646 1.354,3 3,3l18,0c1.646,0 3,-1.354 3,-3l0,-18.75l-8.25,-8.25Z' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M128,10l0,9l9,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M131,26.5l-12,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M131,32.5l-12,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M122,20.5l-3,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3C/g%3E%3Cg id='file-text1' serif:id='file-text'%3E%3Crect x='150' y='0' width='50' height='50' style='fill:none;'/%3E%3Cpath d='M178.75,10l-12.75,0c-1.646,0 -3,1.354 -3,3l0,24c0,1.646 1.354,3 3,3l18,0c1.646,0 3,-1.354 3,-3l0,-18.75l-8.25,-8.25Z' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M178,10l0,9l9,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M181,26.5l-12,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M181,32.5l-12,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M172,20.5l-3,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3C/g%3E%3Cg id='file-spreadsheet'%3E%3Crect x='200' y='0' width='50' height='50' style='fill:none;'/%3E%3Cpath d='M228.75,10l-12.75,0c-1.646,0 -3,1.354 -3,3l0,24c0,1.646 1.354,3 3,3l18,0c1.646,0 3,-1.354 3,-3l0,-18.75l-8.25,-8.25Z' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M228,10l0,9l9,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M219,26.5l3,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M219,32.5l3,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M228,26.5l3,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M228,32.5l3,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3C/g%3E%3Cg id='file-pie-chart'%3E%3Crect x='250' y='0' width='50' height='50' style='fill:none;'/%3E%3Cpath d='M282.455,40l3,-0c1.646,-0 3,-1.354 3,-3l0,-18.75l-8.25,-8.25l-12.75,-0c-1.645,-0 -3,1.354 -3,3l0,4.5' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M279.455,10l0,9l9,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M264.515,24.565c-1.887,1.662 -2.97,4.059 -2.97,6.575c-0,4.805 3.954,8.76 8.76,8.76c2.481,-0 4.85,-1.055 6.51,-2.9' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M279.2,31c0,-4.797 -3.947,-8.745 -8.745,-8.745l0,8.745l8.745,0Z' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3C/g%3E%3Cg id='file-text2' serif:id='file-text'%3E%3Crect x='300' y='0' width='50' height='50' style='fill:none;'/%3E%3Cpath d='M328.75,10l-12.75,0c-1.646,0 -3,1.354 -3,3l0,24c0,1.646 1.354,3 3,3l18,0c1.646,0 3,-1.354 3,-3l0,-18.75l-8.25,-8.25Z' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M328,10l0,9l9,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M331,26.5l-12,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M331,32.5l-12,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M322,20.5l-3,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3C/g%3E%3Cg id='file-archive'%3E%3Crect x='350' y='0' width='50' height='50' style='fill:none;'/%3E%3Cpath d='M363,40l0,-27c0,-0.75 0.3,-1.5 0.9,-2.1c0.6,-0.6 1.35,-0.9 2.1,-0.9l12.75,0l8.25,8.25l0,18.75c0,0.75 -0.3,1.5 -0.9,2.1c-0.6,0.6 -1.35,0.9 -2.1,0.9l-3,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M378,10l0,9l9,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Ccircle cx='372' cy='37' r='3' style='fill:none;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M372,17.5l0,-1.5' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M372,25l0,-1.5' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M372,34l0,-3' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3C/g%3E%3Cg id='file-cog'%3E%3Crect x='400' y='0' width='50' height='50' style='fill:none;'/%3E%3Cpath d='M414.5,16l0,-3c0,-1.646 1.354,-3 3,-3l12.75,0l8.25,8.25l0,18.75c0,1.646 -1.354,3 -3,3l-21,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M429.5,10l0,9l9,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Ccircle cx='417.5' cy='28' r='4.5' style='fill:none;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M417.5,22l0,1.5' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M417.5,32.5l0,1.5' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M423.5,28l-1.5,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M413,28l-1.5,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M422,23.5l-1.32,1.32' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M414.32,31.18l-1.32,1.32' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M422,32.5l-1.32,-1.32' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M414.32,24.82l-1.32,-1.32' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3C/g%3E%3Cg id='file-cog1' serif:id='file-cog'%3E%3Crect x='450' y='0' width='50' height='50' style='fill:none;'/%3E%3Cpath d='M464.5,16l0,-3c0,-1.646 1.354,-3 3,-3l12.75,0l8.25,8.25l0,18.75c0,1.646 -1.354,3 -3,3l-21,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M479.5,10l0,9l9,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Ccircle cx='467.5' cy='28' r='4.5' style='fill:none;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M467.5,22l0,1.5' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M467.5,32.5l0,1.5' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M473.5,28l-1.5,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M463,28l-1.5,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M472,23.5l-1.32,1.32' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M464.32,31.18l-1.32,1.32' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M472,32.5l-1.32,-1.32' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M464.32,24.82l-1.32,-1.32' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3C/g%3E%3Cg id='file-audio'%3E%3Crect x='500' y='0' width='50' height='50' style='fill:none;'/%3E%3Cpath d='M534.75,40l0.75,0c0.75,0 1.5,-0.3 2.1,-0.9c0.6,-0.6 0.9,-1.35 0.9,-2.1l0,-18.75l-8.25,-8.25l-12.75,0c-0.75,0 -1.5,0.3 -2.1,0.9c-0.6,0.6 -0.9,1.35 -0.9,2.1l0,4.5' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M529.5,10l0,9l9,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M523.5,37l0,-1.5c0,-1.646 1.354,-3 3,-3c1.646,0 3,1.354 3,3l0,1.5c0,1.646 -1.354,3 -3,3c-1.646,0 -3,-1.354 -3,-3Z' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M517.5,37l0,-1.5c0,-1.646 -1.354,-3 -3,-3c-1.646,0 -3,1.354 -3,3l0,1.5c0,1.646 1.354,3 3,3c1.646,0 3,-1.354 3,-3Z' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M511.5,35.5l0,-4.5c0,-4.937 4.063,-9 9,-9c4.937,0 9,4.063 9,9l0,4.5' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3C/g%3E%3Cg id='file-audio1' serif:id='file-audio'%3E%3Crect x='550' y='0' width='50' height='50' style='fill:none;'/%3E%3Cpath d='M584.75,40l0.75,0c0.75,0 1.5,-0.3 2.1,-0.9c0.6,-0.6 0.9,-1.35 0.9,-2.1l0,-18.75l-8.25,-8.25l-12.75,0c-0.75,0 -1.5,0.3 -2.1,0.9c-0.6,0.6 -0.9,1.35 -0.9,2.1l0,4.5' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M579.5,10l0,9l9,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M573.5,37l0,-1.5c0,-1.646 1.354,-3 3,-3c1.646,0 3,1.354 3,3l0,1.5c0,1.646 -1.354,3 -3,3c-1.646,0 -3,-1.354 -3,-3Z' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M567.5,37l0,-1.5c0,-1.646 -1.354,-3 -3,-3c-1.646,0 -3,1.354 -3,3l0,1.5c0,1.646 1.354,3 3,3c1.646,0 3,-1.354 3,-3Z' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M561.5,35.5l0,-4.5c0,-4.937 4.063,-9 9,-9c4.937,0 9,4.063 9,9l0,4.5' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3C/g%3E%3Cg id='file-video-2'%3E%3Crect x='600' y='0' width='50' height='50' style='fill:none;'/%3E%3Cpath d='M614.5,19l0,-6c0,-1.646 1.354,-3 3,-3l12.75,0l8.25,8.25l0,18.75c0,1.646 -1.354,3 -3,3l-21,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M629.5,10l0,9l9,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M623.5,30.25l6,3.75l0,-9l-6,3.75' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M623.5,26c0,-0.552 -0.448,-1 -1,-1l-10,0c-0.552,0 -1,0.448 -1,1l0,7c0,0.552 0.448,1 1,1l10,0c0.552,0 1,-0.448 1,-1l0,-7Z' style='fill:none;stroke:%23333;stroke-width:3px;'/%3E%3C/g%3E%3Cg id='file-video-21' serif:id='file-video-2'%3E%3Crect x='650' y='0' width='50' height='50' style='fill:none;'/%3E%3Cpath d='M664.5,19l0,-6c0,-1.646 1.354,-3 3,-3l12.75,0l8.25,8.25l0,18.75c0,1.646 -1.354,3 -3,3l-21,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M679.5,10l0,9l9,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M673.5,30.25l6,3.75l0,-9l-6,3.75' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M673.5,26c0,-0.552 -0.448,-1 -1,-1l-10,0c-0.552,0 -1,0.448 -1,1l0,7c0,0.552 0.448,1 1,1l10,0c0.552,0 1,-0.448 1,-1l0,-7Z' style='fill:none;stroke:%23333;stroke-width:3px;'/%3E%3C/g%3E%3Cg id='file-video-22' serif:id='file-video-2'%3E%3Crect x='700' y='0' width='50' height='50' style='fill:none;'/%3E%3Cpath d='M714.5,19l0,-6c0,-1.646 1.354,-3 3,-3l12.75,0l8.25,8.25l0,18.75c0,1.646 -1.354,3 -3,3l-21,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M729.5,10l0,9l9,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M723.5,30.25l6,3.75l0,-9l-6,3.75' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M723.5,26c0,-0.552 -0.448,-1 -1,-1l-10,0c-0.552,0 -1,0.448 -1,1l0,7c0,0.552 0.448,1 1,1l10,0c0.552,0 1,-0.448 1,-1l0,-7Z' style='fill:none;stroke:%23333;stroke-width:3px;'/%3E%3C/g%3E%3Cg id='file-video-23' serif:id='file-video-2'%3E%3Crect x='750' y='0' width='50' height='50' style='fill:none;'/%3E%3Cpath d='M764.5,19l0,-6c0,-1.646 1.354,-3 3,-3l12.75,0l8.25,8.25l0,18.75c0,1.646 -1.354,3 -3,3l-21,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M779.5,10l0,9l9,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M773.5,30.25l6,3.75l0,-9l-6,3.75' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M773.5,26c0,-0.552 -0.448,-1 -1,-1l-10,0c-0.552,0 -1,0.448 -1,1l0,7c0,0.552 0.448,1 1,1l10,0c0.552,0 1,-0.448 1,-1l0,-7Z' style='fill:none;stroke:%23333;stroke-width:3px;'/%3E%3C/g%3E%3Cg id='ps'%3E%3Crect x='800' y='0' width='50' height='50' style='fill:none;'/%3E%3Cpath d='M814.5,40l21,0c1.646,0 3,-1.354 3,-3l0,-18.75l-8.25,-8.25l-12.75,0c-1.646,0 -3,1.354 -3,3l0,6' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M829.5,10l0,9l9,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M811.5,34l0,-9l6,0l0,4.5l-6,0' style='fill:none;stroke:%23333;stroke-width:3px;stroke-miterlimit:1.5;'/%3E%3Cpath d='M829.5,25l-6,0l0,4.5l6,0l0,4.5l-6,0' style='fill:none;stroke:%23333;stroke-width:3px;stroke-miterlimit:1.5;'/%3E%3C/g%3E%3Cg id='ai'%3E%3Crect x='849.949' y='0' width='50' height='50' style='fill:none;'/%3E%3Cpath d='M864.5,40l21,0c1.646,0 3,-1.354 3,-3l0,-18.75l-8.25,-8.25l-12.75,0c-1.646,0 -3,1.354 -3,3l0,6' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M879.5,10l0,9l9,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M861.5,34l0,-9l6,0l0,9' style='fill:none;stroke:%23333;stroke-width:3px;stroke-miterlimit:1.5;'/%3E%3Cpath d='M861.5,29.5l6,0' style='fill:none;stroke:%23333;stroke-width:3px;stroke-miterlimit:1.5;'/%3E%3Cpath d='M873.5,25l0,9' style='fill:none;stroke:%23333;stroke-width:3px;stroke-miterlimit:1.5;'/%3E%3C/g%3E%3Cg id='file-code'%3E%3Crect x='900' y='0' width='50' height='50' style='fill:none;'/%3E%3Cpath d='M914.5,40l21,0c1.646,0 3,-1.354 3,-3l0,-18.75l-8.25,-8.25l-12.75,0c-1.646,0 -3,1.354 -3,3l0,6' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M929.5,10l0,9l9,0' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M922,34l4.5,-4.5l-4.5,-4.5' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3Cpath d='M916,25l-4.5,4.5l4.5,4.5' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3C/g%3E%3Cg id='folder'%3E%3Cpath d='M963,37.75l24,0c1.646,0 3,-1.354 3,-3l-0,-15c-0,-1.646 -1.354,-3 -3,-3l-11.895,0c-1.003,-0.005 -1.939,-0.513 -2.49,-1.35l-1.23,-1.8c-0.551,-0.837 -1.487,-1.345 -2.49,-1.35l-5.895,0c-1.646,0 -3,1.354 -3,3l-0,19.5c-0,1.65 1.35,3 3,3Z' style='fill:none;fill-rule:nonzero;stroke:%23333;stroke-width:3px;'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E";

	// TOGGLE SUB FOLDERS, SET TO false IF YOU WANT OFF
	$toggle_sub_folders = true;


// SET TITLE BASED ON FOLDER NAME, IF NOT SET ABOVE	
if( !$title ) { $title = cleanTitle(basename(dirname(__FILE__))); }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $title; ?></title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato:700,400,300,300italic,700italic" rel="stylesheet" type="text/css" />
	<style>
		*, *:before, *:after { -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; }
		body { font-family: "Lato", "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; font-weight: 400; font-size: 14px; line-height: 18px; padding: 0; margin: 0; background: #f5f5f5; }
		.wrap { max-width: 600px; margin: 20px auto; background: white; padding: 40px; box-shadow: 0 0 2px #ccc; }
		@media only screen and (max-width: 700px) { .wrap { padding: 15px; } }
		h1 { text-align: center; margin: 40px 0; font-size: 22px; font-weight: bold; color: #666; }
		a { color: #399ae5; text-decoration: none; } a:hover { color: #206ba4; text-decoration: none; }
		.note { padding:  0 5px 25px 0; font-size:80%; color: #666; line-height: 18px; }
		.block { clear: both;  min-height: 50px; border-top: solid 1px #ECE9E9; }
		.block:first-child { border: none; }
		.block .img { width: 50px; height: 50px; display: block; float: left; margin-right: 10px; background: transparent url(<?php echo $icon_url; ?>) no-repeat 0 0; background-size: auto 50px; }
		.block .date { margin-top: 4px; font-size: 70%; color: #666; }
		.block a { display: block; padding: 10px 15px; transition: all 0.35s; }
		.block a:hover { text-decoration: none; background: #efefef; }

		.jpg, .jpeg, .gif, .png { background-position: -50px 0 !important; }
		.pdf { background-position: -100px 0 !important; }
		.txt, .rtf { background-position: -150px 0 !important; }
		.xls, .xlsx { background-position: -200px 0 !important; }
		.ppt, .pptx { background-position: -250px 0 !important; }
		.doc, .docx { background-position: -300px 0 !important; }
		.zip, .rar, .tar, .gzip { background-position: -350px 0 !important; }
		.swf { background-position: -400px 0 !important; }
		.fla { background-position: -450px 0 !important; }
		.mp3 { background-position: -500px 0 !important; }
		.wav { background-position: -550px 0 !important; }
		.mp4 { background-position: -600px 0 !important; }
		.mov, .aiff, .m2v, .avi, .pict, .qif { background-position: -650px 0 !important; }
		.wmv, .avi, .mpg { background-position: -700px 0 !important; }
		.flv, .f2v { background-position: -750px 0 !important; }
		.psd { background-position: -800px 0 !important; }
		.ai { background-position: -850px 0 !important; }
		.html, .xhtml, .dhtml, .php, .asp, .css, .js, .inc { background-position: -900px 0 !important; }
		.dir { background-position: -950px 0 !important; }

		.sub { margin-left: 20px; border-left: solid 1px #ECE9E9; display: none; }

	</style>
</head>
<body>
<h1><?php echo $title ?></h1>
<div class="wrap">
<?php

// FUNCTIONS TO MAKE THE MAGIC HAPPEN, BEST TO LEAVE THESE ALONE
function cleanTitle($title)
{
	return ucwords( str_replace( array("-", "_"), " ", $title) );
}

function getFileExt($filename)
{
	return substr( strrchr( $filename,'.' ),1 );
}

function format_size($file)
{
	$bytes = filesize($file);
	if ($bytes < 1024) return $bytes.'b';
	elseif ($bytes < 1048576) return round($bytes / 1024, 2).'kb';
	elseif ($bytes < 1073741824) return round($bytes / 1048576, 2).'mb';
	elseif ($bytes < 1099511627776) return round($bytes / 1073741824, 2).'gb';
	else return round($bytes / 1099511627776, 2).'tb';
}


// SHOW THE MEDIA BLOCK
function display_block( $file )
{
	global $ignore_file_list, $ignore_ext_list;

	$file_ext = getFileExt($file);
	if( !$file_ext AND is_dir($file)) { $file_ext = "dir"; }
	if(in_array($file, $ignore_file_list)) { return; }
	if(in_array($file_ext, $ignore_ext_list)) { return; }

	echo "<div class=\"block\">";
	echo "<a href=\"$file\" class=\"$file_ext\">";
	echo "	<div class=\"img $file_ext\">&nbsp;</div>";
	echo "	<div class=\"name\">\n";
	echo "		<div class=\"file\">" . basename($file) . "</div>\n";
	echo "		<div class=\"date\">Size: " . format_size($file) . "<br />Last modified: " .  date("D. F jS, Y - h:ia", filemtime($file)) . "</div>\n";
	echo "	</div>\n";
	echo "	</a>\n";
	echo "</div>";
}


// RECURSIVE FUNCTION TO BUILD THE BLOCKS
function build_blocks( $items, $folder )
{
	global $ignore_file_list, $ignore_ext_list, $sort_by, $toggle_sub_folders;
	$objects = array();
	$objects['directories'] = array();
	$objects['files'] = array();

	foreach($items as $c => $item)
	{
		if( $item == ".." OR $item == ".") continue;

		// IGNORE FILE
		if(in_array($item, $ignore_file_list)) { continue; }

		if( $folder )
		{
			$item = "$folder/$item";
		}

		$file_ext = getFileExt($item);

		// IGNORE EXT
		if(in_array($file_ext, $ignore_ext_list)) { continue; }

		// DIRECTORIES
		if( is_dir($item) )
		{
			$objects['directories'][] = $item;
			continue;
		}

		// FILE DATE
		$file_time = date("U", filemtime($item));

		// FILES
		$objects['files'][$file_time . "-" . $item] = $item;
	}

	foreach($objects['directories'] as $c => $file)
	{
		display_block( $file );

		if($toggle_sub_folders)
		{
			$sub_items = (array) scandir( $file );
			if( $sub_items )
			{
				echo "<div class='sub' data-folder=\"$file\">";
				build_blocks( $sub_items, $file );
				echo "</div>";
			}
		}
	}

	// SORT BEFORE LOOP
	if( $sort_by == "date_asc" ) { ksort($objects['files']); }
	elseif( $sort_by == "date_desc" ) { krsort($objects['files']); }
	elseif( $sort_by == "name_asc" ) { natsort($objects['files']); }
	elseif( $sort_by == "name_desc" ) { arsort($objects['files']); }

	foreach($objects['files'] as $t => $file)
	{
		$fileExt = getFileExt($file);
		if(in_array($file, $ignore_file_list)) { continue; }
		if(in_array($fileExt, $ignore_ext_list)) { continue; }
		display_block( $file );
	}
}

// GET THE BLOCKS STARTED, FALSE TO INDICATE MAIN FOLDER
$items = scandir( dirname(__FILE__) );
build_blocks( $items, false );
?>

<?php if($toggle_sub_folders) { ?>
<script>
	$(document).ready(function()
	{
		$("a.dir").click(function(e)
		{
		 	$('.sub[data-folder="' + $(this).attr('href') + '"]').slideToggle();
			e.preventDefault();
		});
	});
</script>
<?php } ?>
</div>
</body>
</html>
