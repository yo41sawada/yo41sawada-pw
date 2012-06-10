<?php
// PukiWiki - Yet another WikiWikiWeb clone.
// $Id: pukiwiki.css.php,v 1.10 2005/01/25 15:07:26 henoheno Exp $
//
// Defaul CSS

// Send header
header('Content-Type: text/css');
$matches = array();
if(ini_get('zlib.output_compression') && preg_match('/\b(gzip|deflate)\b/i', $_SERVER['HTTP_ACCEPT_ENCODING'], $matches)) {
	header('Content-Encoding: ' . $matches[1]);
	header('Vary: Accept-Encoding');
}

// Default charset
$charset = isset($_GET['charset']) ? $_GET['charset']  : '';
switch ($charset) {
	case 'Shift_JIS': break; /* this @charset is for Mozilla's bug */
	default: $charset ='iso-8859-1';
}

// Media
$media   = isset($_GET['media'])   ? $_GET['media']    : '';
if ($media != 'print') $media = 'screen';

// Output CSS ----
?>
@charset "<?php echo $charset ?>";

/* 2005-1-26 作成ファイル */

/* this @charset is for mozilla's bug */
/*
/////////////////////////////////////////////////
// PukiWiki - Yet another WikiWikiWeb clone.
//
// $Id: default.ja.css,v 1.32 2004/07/31 03:09:20 henoheno Exp $
//
*/
body
{
	color: #333333;
	padding-top:0px;
	padding-bottom:0px;
	margin:50px 10% 50px 250px;
	font-family: verdana, arial, helvetica, Sans-Serif;
	background-color:#dddddd;
	background-image:url("../image/backline.jpg");
	background-position:top left;
	background-repeat:repeat-x;
}

div.main{
 	text-align:center;
	}
div.main_in{
	margin-left:auto;margin-right:auto;text-align:justify;
	width:100%;
	margin-top:0px;
	border-top:solid #AAAAAA 4px;
	border-left:solid #999999 1px;
	border-bottom:solid #999999 1px;
	border-right:solid #999999 1px;
	background-color:white;
	}


pre, dl, ol, p, blockquote
{
	line-height:130%;
}

blockquote
{
	margin-left:32px;
}

td
{
	padding-top:0px;
	padding-bottom:0px;
	margin-left: 10%;
	margin-right: 10%;
	font-size: 14px;
	font-family: verdana, arial, helvetica, Sans-Serif;
}

a:link{
	color: #003366;
	text-decoration: none;}
a:active{
	color: #003366;
	text-decoration: none;
}a:visited{
	color: #003366;
	text-decoration: none;
}a:hover{
	color: #003366;
	text-decoration: underline;
}
h1{
	}
h1.title
{
	font-size: 12px;
	font-weight:900;
	letter-spacing:0.1em;
	background-color:#cc3333;
	padding: 18px 2px 0px 20px;
	margin: 0px 0px 0px 0px;
	font-family:verdana,helvetica, arial, Sans-Serif;
	background-image : url("../image/h1title.gif");
	background-position:left bottom;
	background-repeat:no-repeat;
}
#header h1.title a:hover{color:white;}
#header h1.title a:link{color:white;}
#header h1.title a:active{color:white;}
#header h1.title a:visited{color:white;}

h2{
	color:#666666;
	padding:30px 5px 35px 29px;
	margin:5px 0px 5px -20px;
	width:100%;
	font-size:100%;
	background-image : url("../image/h2back_f.jpg");
	background-position:left center;
	background-repeat:no-repeat;
	background-color:#ffffff;
}
h3{
	font-size:100%;
	color:#666666;
	padding:12px 5px 14px 27px;
	margin-left:0px 0px 0px -20px;
	border-bottom:solid white 1px;
	background-image : url("../image/h3back.gif");
	background-position:left center;
	background-repeat:no-repeat;
}
h4{
	font-size:100%;
	color:#666666;
	padding:9px 5px 14px 35px;
	margin-left:0px 0px 0px -15px;
	background-image : url("../image/h4back.jpg");
	background-position:left center;
	background-repeat:no-repeat;
}
h5, h6{
	font-family: verdana, arial, helvetica, Sans-Serif;
	color :#999999;
	padding: .3em;
	border-bottom:solid 1px #999999;
	background-color:#cccccc;
	margin:0px 0px 20px 0px;
	text-align:center;
}


dt
{
	font-weight:bold;
	margin-top:1em;
	margin-left:1em;
}

pre
{
	border-top:#DDDDEE 1px solid;
	border-bottom:#888899 1px solid;
	border-left:#DDDDEE 1px solid;
	border-right:#888899 1px solid;
	padding:.5em;
	margin-left:1em;
	margin-right:2em;
	white-space:pre;
	color:black;
	background-color:#F0F8FF;
}

img
{
	border:none;
	vertical-align:middle;
}

ul
{
	margin-top:.5em;
	margin-bottom:.5em;
	line-height:130%;
}

em
{
	font-style:italic;
}

strong
{
	font-weight:bold;
}

thead td.style_td,
tfoot td.style_td
{
	color:inherit;
	background-color:#D0D8E0;
}
thead th.style_th,
tfoot th.style_th
{
	color:inherit;
	background-color:#E0E8F0;
}
.style_table
{
	padding:0px;
	border:0px;
	margin:auto;
	text-align:left;
	color:inherit;
	background-color:#ccd5dd;
}
.style_th
{
	padding:5px;
	margin:1px;
	text-align:center;
	color:inherit;
	background-color:#EEEEEE;
}
.style_td
{
	padding:5px;
	margin:1px;
	color:inherit;
	background-color:#EEF5FF;
}

ul.list1
{
	list-style-type:disc;
}
ul.list2
{
	list-style-type:circle;
}
ul.list3
{
	list-style-type:square;
}
ol.list1
{
	list-style-type:decimal;
}
ol.list2
{
	list-style-type:lower-roman;
}
ol.list3
{
	list-style-type:lower-alpha;
}

div.ie5
{
	text-align:center;
}

span.noexists
{
	color:inherit;
	background-color:#FFFACC;
}
.small
{
	font-size:70%;
	padding-bottom:10px;
}
.super_index
{
	color:#DD3333;
	background-color:inherit;
	font-weight:bold;
	font-size:60%;
	vertical-align:super;
}

a.note_super
{
	color:#DD3333;
	background-color:inherit;
	font-weight:bold;
	font-size:60%;
	vertical-align:super;
}

div.jumpmenu
{
	font-size:60%;
	text-align:right;
}

hr.full_hr
{
	border-style:solid;
	border-color:#C4D5BA;
	border-width:0px 0px;
}
hr.note_hr
{
	display:none;
}

span.size1
{
	font-size:xx-small;
	line-height:130%;
	text-indent:0px;
	display:inline;
}
span.size2
{
	font-size:x-small;
	line-height:130%;
	text-indent:0px;
	display:inline;
}
span.size3
{
	font-size:small;
	line-height:130%;
	text-indent:0px;
	display:inline;
}
span.size4
{
	font-size:medium;
	line-height:130%;
	text-indent:0px;
	display:inline;
}
span.size5
{
	font-size:large;
	line-height:130%;
	text-indent:0px;
	display:inline;
}
span.size6
{
	font-size:x-large;
	line-height:130%;
	text-indent:0px;
	display:inline;
}
span.size7
{
	font-size:xx-large;
	line-height:130%;
	text-indent:0px;
	display:inline;
}

/* html.php/catbody() */
strong.word0
{
	background-color:#FFFF66;
	color:black;
}
strong.word1
{
	background-color:#A0FFFF;
	color:black;
}
strong.word2
{
	background-color:#99FF99;
	color:black;
}
strong.word3
{
	background-color:#FF9999;
	color:black;
}
strong.word4
{
	background-color:#FF66FF;
	color:black;
}
strong.word5
{
	background-color:#880000;
	color:white;
}
strong.word6
{
	background-color:#00AA00;
	color:white;
}
strong.word7
{
	background-color:#886800;
	color:white;
}
strong.word8
{
	background-color:#004699;
	color:white;
}
strong.word9
{
	background-color:#990099;
	color:white;
}

/* html.php/edit_form() */
.edit_form
{
     clear:both;
}

/* pukiwiki.skin.*.php */
div#header
{
	padding:0px 0px 10px 20px;
	margin:0px;
	background-color:#cc3333;
}
div#header a{
	color:#cc9999;
	margin:0px;
	}

#urltext{
	font-size:60%;
	padding-bottom:10px;
}
div#navigator
{
	clear:both;
	padding:4px 0px 0px 0px;
	margin:0px;
	font-size:12px;
	padding:10px 10px 10px 10px;
	background-color:#cccccc;
}

td.menubar
{
	width:130px;
	vertical-align:top;
}

div#pukiwiki{
	position:absolute;top:50px; left:30px; 
	width:200px;
	line-height:98px;
	padding:0px;
	margin:0px;
	word-break:break-all;
	font-size:90%;
	overflow:hidden;
	background-image : url("../image/pukiwiki.gif");
	background-position:left;
	background-repeat:no-repeat;
}

div#menubar
{
	position:absolute;top:155px; left:30px; 
	width:200px;
	padding:1px;
	margin:0px 0px 50px 0px;
	word-break:break-all;
	overflow:hidden;
	background-color:white;
	border:solid 1px #999999;
}

div#menubar ul
{
	margin:0px 0px 0px .5em;
	padding:1em;
	font-size:80%;
}

div#menubar ul li
{
	line-height:110%;
}

div#menubar h4
{
	font-size:100%;
}

div#body
{
	padding:0px;
	margin:0px 0px 0px .5em;
}

div#note
{
	clear:both;
	padding:3px 10px 3px 25px;
	margin:25px 0px 9px 0px;
	border-top:1px dotted #999999;
	background-color:#ffffff;
	text-align:left;
}

div#attach
{
	clear:both;
	padding:2px 0px 8px 0px;
	margin:0px;
	border-bottom:5px solid #C4D5BA;
}

div#toolbar
{
	clear:both;
	padding:4px 25px 10px 25px;
	margin:0px;
	text-align:right;
}

div#lastmodified
{
	font-size:70%;
	padding:8px 25px 8px 25px;
	margin:0px;
	background-color:#cccccc;
	border-top:solid 1px #999999;
}

div#related
{
	font-size:70%;
	padding:8px 25px 8px 25px;
	margin:0px 0px 0px 0px;
	background-color:#cccccc;
	border-top:dotted 1px #999999;
}

div#footer
{
	font-size:70%;
	padding:8px 25px 8px 25px;
	margin:0px 0px 0px 0px;
	background-color:#cccccc;
	border-top:dotted 1px #999999;
}

div#preview
{
	color:inherit;
	background-color:#F5F8FF;
}

img#logo
{
	position:absolute;top:40px; left:510px; 
	margin-right:20px;
}

/* aname.inc.php */
.anchor
{
}
.anchor_super
{
	font-size:xx-small;
	vertical-align:super;
}

/* br.inc.php */
br.spacer
{
}

/* calendar*.inc.php */
.style_calendar
{
	padding:0px;
	border:0px;
	margin:3px;
	color:inherit;
	background-color:#CCD5DD;
	text-align:center;
}

.style_td_caltop
{
	padding:5px;
	margin:1px;
	color:inherit;
	background-color:#EEF5FF;
	font-size:80%;
	text-align:center;
}

.style_td_today
{
	padding:5px;
	margin:1px;
	color:inherit;
	background-color:#FFFFDD;
	text-align:center;
}

.style_td_sat
{
	padding:5px;
	margin:1px;
	color:inherit;
	background-color:#DDE5FF;
	text-align:center;
}

.style_td_sun
{
	padding:5px;
	margin:1px;
	color:inherit;
	background-color:#FFEEEE;
	text-align:center;
}

.style_td_blank
{
	padding:5px;
	margin:1px;
	color:inherit;
	background-color:#EEF5FF;
	text-align:center;
}

.style_td_day
{
	padding:5px;
	margin:1px;
	color:inherit;
	background-color:#EEF5FF;
	text-align:center;
}

.style_td_week
{
	padding:5px;
	margin:1px;
	color:inherit;
	background-color:#DDE5EE;
	font-size:80%;
	font-weight:bold;
	text-align:center;
}

/* clear.inc.php */
.clear{
	margin:0px;
	clear:both;
}

/* counter.inc.php */
div.counter
{
	font-size:70%;
}

/* diff.inc.php */
span.diff_added
{
	color:blue;
	background-color:inherit;
}

span.diff_removed
{
	color:red;
	background-color:inherit;
}

/* hr.inc.php */
hr.short_line
{
	text-align:center;
	width:80%;
	border-style:solid;
	border-color:#333333;
	border-width:1px 0px;
}

/* include.inc.php */
h5.side_label
{
	text-align:center;
}

/* navi.inc.php */
ul.navi
{
	margin:0px;
	padding:0px;
	text-align:center;
}

li.navi_none
{
	display:inline;
	float:none;
}

li.navi_left
{
	display:inline;
	float:left;
	text-align:left;
}

li.navi_right
{
	display:inline;
	float:right;
	text-align:right;
}

/* new.inc.php */
span.comment_date
{
	font-size:x-small;
}
span.new1
{
	color:red;
	background-color:transparent;
	font-size:x-small;
}
span.new5
{
	color:green;
	background-color:transparent;
	font-size:xx-small;
}

/* popular.inc.php */
span.counter
{
	font-size:70%;
}
ul.popular_list
{
/*
	padding:0px;
	border:0px;
	margin:0px 0px 0px 1em;
	word-wrap:break-word;
	word-break:break-all;
*/
}

/* recent.inc.php,showrss.inc.php */
ul.recent_list
{
/*
	padding:0px;
	border:0px;
	margin:0px 0px 0px 1em;
	word-wrap:break-word;
	word-break:break-all;
*/
}

/* ref.inc.php */
div.img_margin
{
	margin-left:32px;
	margin-right:32px;
}

/* vote.inc.php */
td.vote_label
{
	color:inherit;
	background-color:#FFCCCC;
}
td.vote_td1
{
	color:inherit;
	background-color:#DDE5FF;
}
td.vote_td2
{
	color:inherit;
	background-color:#EEF5FF;
}

/*  主な新規指定 */




.body{
	background color:#ffffff;
	color:#444444;
	padding:5px 35px 35px;
	margin:0px;
	font-size:80%;
	line-height:130%;
	}
.body a:link{color:#000066;text-decoration:none;}
.body a:hover{color:black;text-decoration:underline;}
.body a:active{color:black;text-decoration:underline;}
.body a:visited{color:#000066;text-decoration:none;}

ul li{
	list-style-image:url("../image/list_a.jpg");
}ul ul li{
	list-style-image:url("../image/list_b.jpg");
}ul ul ul li{
	list-style-image:url("../image/list_f.gif");
}
#menubar ul li{
	list-style-image:url("../image/list_d.gif");
	margin-left:10px;
	font-size:13px;
}
#menubar div strong{
	font-size:80%;
	padding:0px 0px 0px 10px;
	color:#999999;
}
#menubar table td{
	padding:0px;
	font-size:70%;
}