/* ValueMD.com customzation */
.navtabs ul li:first-child {
	margin-left: 0px;
}
.globalsearch {
	width:280px;
}
.navbar_advanced_search {
	float:right;
}
.navbar_advanced_search li {
	clear:none !important;
	padding-left:20px;
	float:left;
}
.navbar_advanced_search li.followus_label {
	margin-top:7px;
	font-size:13px;
	font-weight:bold;
}
.navbar_advanced_search li.followus_item {
	padding-top:2px;
	padding-left:5px;
}
.globalsearch .textboxcontainer {
	float: none;
	right: 120px;
}

/* Footer customzation */
#footer {
	display:none;
}
#footer_time {
	text-align:left;
}
#footer_copyright {
	text-align:left;
}
#footer_morecopyright {
	text-align:left;
}
.vmd_footer_links {
	-moz-border-radius: 5px 5px 5px 5px;
	-moz-box-shadow: -2px 2px 2px #C8C8C8;
	border: 1px solid #CECECE;
 	background: #F3F7F9 url(https://vmd1.valuedo.com/images/gradients/grey-up.png) repeat-x left bottom;
	padding: 5px 10px;
	margin-top: 10px;
	font-size: 11px;
	line-height: 25px;
}
.vmd_footer_links ul {
	margin: 0;
	padding: 0;
}
.vmd_footer_links ul li {
	list-style-type:none;
	display:list-item;
}


/* vBGallery stats at Forum Home */
#wgo_vbg_stats {
	padding: 10px;
}
#wgo_vbg_stats dl dt {
	display: inline;
}
#wgo_vbg_stats dl dt:after {
	content: ": "
}
#wgo_vbg_stats dl dd {
	display: inline;
	margin-right: 15px;
}
#wgo_vbg_stats h3 a {
	font-weight: bold;
	margin-left: 5px;
	margin-top: -5px;
}


/* For Home of vBLinks Directory */
.wgo_subblock dl.icon_legends dt {
	clear:left;
	float:left;
}
.wgo_subblock dl.icon_legends dd {
	float:left;
	padding-left:5px;
}
/* Overwriting vBSEO's CSS, for post body */
.postrow {
	overflow:visible !important;
}


/* For fixing TopLinks messed up */
.toplinks {
	position: absolute;
	top:0px;
}
.toplinks ul.isuser, .toplinks ul.nouser {
	/*width: 650px;*//* kimgold2010's issue #2612*/
	width:auto;
	margin-right:-20px;
	padding:0 5px;
	border-bottom-left-radius:3px;
	border-bottom-right-radius:3px;
}
/* Forum SideBar fixes */
#sidebar_button {
	margin-right:-25px !important;
	margin-left: -25px !important;
}
#sidebar_container .block {
	background: #F3F7F9 url(https://vmd0.valuedo.com/images/misc/blog/top-highlight.png) repeat-x left top;
	border-radius: 5px;
}
#sidebar_container .underblock {
	height: 9px;
	background: transparent url(https://vmd0.valuedo.com/images/gradients/bottom-shadow.png) repeat-x left bottom;
}
#sidebar_container > ul {
	background: #F3F7F9 url(https://vmd0.valuedo.com/images/misc/blog/top-highlight.png) repeat-x left top;
	border: 1px solid #c1c1c1;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-box-shadow:-2px 2px 2px #c8c8c8;
	/* float: left;
	width:100%; */
}

#sidebar_container .blockrow {
	padding:0;
	border-top: 1px solid rgb(255, 255, 255);
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	background: rgb(255, 255, 255) url(https://vmd1.valuedo.com/images/gradients/gradient-black-down.png) repeat-x  ;
	padding:6px;
}
/* Sponsor Ad at center module of main portal */
#main_portal_center_sponsorad {
	margin-right:80px;
	float:right;
}

 /* CSSFrame on left, IT MUST BE ALWAYS AT END OF THIS CSS TEMPLATE */
body {
	margin: 0px;
}
.textbox, textarea, select {
	margin: 0px;
}
#cssframe_main {
	position:inherit;
}
#cssframe_leftside {
	position: fixed;
	top: 0px;
	left: 0px;
	bottom: 0px;
	width: 121px;
	z-index: 99999;
}
#cssframe_rightside {
	margin-left: 126px;
	margin-right: 5px;
}
#cssframe_leftside .block {
	border: 0px;
	border-right: 1px solid #606060;
}
#cssframe_leftside .blockhead {
	-moz-box-shadow: 0px;
	-moz-border-radius: 0px;
	border-radius: 0;
	background: url(https://vmd1.valuedo.com/images/buttons/newbtn_middle.png) repeat-x scroll 0 0 #707070;
	color: #FFFFFF;
	padding-left: 5px;
	border: 0px;
	border-top: 1px solid #606060;
	font-size: 11px;
}
#cssframe_leftside .blockhead:first-child {
	border-top: 0px;
}
#cssframe_leftside a#sitenavcollapse_link {
	position: absolute;
	top: 4px;
	right: 5px;
}
#cssframe_leftside .blockbody {
	background: rgb(255, 255, 255) none no-repeat  ;
	padding: 5px;
}
#cssframe_leftside .blockbody.advertisement {
	padding: 0px;
	height: 10000px;
	background-color: #F5F5FF;
}
#sitenavcollapse_body {
	padding: 0px;
}
#sitenavcollapse_body .followus {
	text-align: center;
	padding-top: 5px;
}
#sitenavcollapse_body .navtabs {
	background:none;
	padding-left:0px;
	height:auto;/* !important for IE 7 */
}
#sitenavcollapse_body .navtabs li {
	width:100%;
}
#sitenavcollapse_body .navtabs li a.navtab {
	width:100%;
	text-align:left !important;
}
#sitenavcollapse_body .navtabs li:first-child {
	border-left:none;
}
 /* Per Doc's request, at http://www.valuemd.com/administrator-forum/211206-infraction-info.html#post1370799 */
.user_rep {
	color:#F00 !important;
	font-weight:bold !important;
}




.reputation_custom {
	display: inline-block;
	margin-left: -3px;
}
.reputation_custom_image, .reputation_custom_disabled {
	background: #FFFFFF;
	display: inline-block;
	border: 1px solid #AAA;
	margin-top: 3px;
	padding: 1px 0px 1px 3px;
	border-radius:3px;
}
.reputation_custom_level, .reputation_custom_power {
	border-left: 1px solid #BBBBBB;
	padding: 1px;
	margin-left: 2px;
	font-size: 9px;
	text-align: center;
	zoom: 1;
	vertical-align: top;
	height: 12px;
}
.reputation_custom_power, .reputation_custom:hover .reputation_custom_level {
	display: none;
}
.reputation_custom:hover .reputation_custom_power {
	display: inline;
}
.reputation_custom_disabled {
	width: 66px;
	margin-left: -3px;
	border-color: #BBB;
	text-align: left;
}
.member_reputation img.repimg {
	padding-top: 0;
}



#adblock {
	margin-right: 125px;
}
#adblock #left_adblock {
	float: left;
	padding-bottom: 10px;
	width: 100%;
	vertical-align: top;
}
#adcontainer1 {
	float: right;
	margin-left: -125px;
	padding: 5px 0 0;
}
.navbar_advanced_search li#fb_headerbox a#fb_loginbtn img {
	margin-top: 3px;
}
#navbar li a.selected {
	font-weight: bold;
}
.notices .restore ol li {
	-moz-box-shadow: none;
	box-shadow: none;
	-webkit-box-shadow: none;
	margin-bottom:0;
	list-style: decimal outside none;
}



.below_threadlist .threadpagenav .pagination {
	height: 32px;
}



.doc_header {
	min-height:100px !important;
}



/* content configurations. */
.ui-grid-a, .ui-grid-b, .ui-grid-c, .ui-grid-d { overflow: hidden; }
.ui-block-a, .ui-block-b, .ui-block-c, .ui-block-d, .ui-block-e { margin: 0; padding: 0; border: 0; float: left; min-height: 1px; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box; }
/* grid solo: 100 - single item fallback */
.ui-grid-solo .ui-block-a { display: block; float: none; }
/* Lower percentages for older browsers (i.e. IE7) to prevent wrapping. -.5px to fix BB5 wrap issue. */
/* grid a: 50/50 */
.ui-grid-a .ui-block-a, .ui-grid-a .ui-block-b { width: 49.95%; }
.ui-grid-a > :nth-child(n) { width: 50%; margin-right: -.5px; }
.ui-grid-a .ui-block-a { clear: left; }
/* grid b: 33/33/33 */
.ui-grid-b .ui-block-a, .ui-grid-b .ui-block-b, .ui-grid-b .ui-block-c { width: 33.25%; }
.ui-grid-b > :nth-child(n) { width: 33.333%; margin-right: -.5px; }
.ui-grid-b .ui-block-a { clear: left; }
/* grid c: 25/25/25/25 */
.ui-grid-c .ui-block-a, .ui-grid-c .ui-block-b, .ui-grid-c .ui-block-c, .ui-grid-c .ui-block-d { width: 24.925%; }
.ui-grid-c > :nth-child(n) { width: 25%; margin-right: -.5px; }
.ui-grid-c .ui-block-a { clear: left; }
/* grid d: 20/20/20/20/20 */
.ui-grid-d .ui-block-a, .ui-grid-d .ui-block-b, .ui-grid-d .ui-block-c, .ui-grid-d .ui-block-d, .ui-grid-d .ui-block-e { width: 19.925%; }
.ui-grid-d > :nth-child(n) { width: 20%; }
.ui-grid-d .ui-block-a { clear: left; }
/* preset breakpoint to switch to stacked grid styles below 35em (560px) */
@media all and (max-width: 35em) {
	.ui-responsive .ui-block-a, 
	.ui-responsive .ui-block-b, 
	.ui-responsive .ui-block-c,
	.ui-responsive .ui-block-d,
	.ui-responsive .ui-block-e { 
		width: 100%; 
		float:none; 
	}
}


/* SiteCore & Portal Menu */
.sc_sidebarmenu
{
	
}
.sc_sidebarmenu.portal
{
	max-width: 220px;
}
.sc_sidebarmenu li
{
	background: #F3F7F9 url(https://vmd1.valuedo.com/images/gradients/grey-up.png) repeat-x left bottom;
	background-color: #BFD5DD;
	border-top: 1px solid #c4c4c4;
	color: black !important;
	padding: 0 !important;
}
.sc_sidebarmenu > li:first-child
{
	border-top:none;
}
.sc_sidebarmenu li a,
.sc_sidebarmenu li label {
	display: block;
	color: #3E3E3E;
	background:#FFFFFF none   ;
	padding:6.235px 10px;
	text-decoration: none;
	text-align:left;
}
.sc_sidebarmenu li a.selected
{
	background:#FFEB90 none   ;
	
}
.sc_sidebarmenu li > a:hover,
.sc_sidebarmenu li > label:hover {
	color:#3E3E3E;
	background:#FFEB90 none   ;
	text-decoration: underline;
}
.sc_sidebarmenu .heading
{
	padding: 0px 10px;
	line-height: 26px;
	color: rgb(255, 255, 255);
	text-indent: 5px !important;
}
.sc_sidebarmenu .heading a
{
	background: inherit;
	padding: 0;
	color: rgb(255, 255, 255);
}


/* Adsense Violation Fix, issue m#2832 */
.postbit, .postbitlegacy, .eventbit
{
	background-color: #fafafa;
}
/* \ Adsense Violation Fix, issue m#2832 */


/* Adsense Violation Prevention, issue m#2900 */
#ad_thread_first_post_content { float:left; margin-top:20px; }
.content.hasad { margin-right:0; }
.content.hasad,
.content.hasad ~ .lastedited,
.content.hasad ~ .signature
{ margin-left:220px; }
/* \ Adsense Violation Prevention, issue m#2900 */


/* Freezing issue after login, issue m#2928 */
#header {display:block;}
/* \ Freezing issue after login, issue m#2928 */


#lids {width:150px}

.bbcode_quote_container { background-image:none !important }

.pagehome {
  text-align: center;
  font-size: 150%;
  font-weight: bold;
  margin: 20px;
}