@charset "UTF-8";
/* CSS Document */
/* TOOLS MENU */
/* convert to stylevars pls */

.toolsmenu {
	background: #e9e9e9 url(https://vmd0.valuedo.com/images/buttons/newbtn_middle.png) repeat-x  ;
	width: 100%;
	display: block;
	border: 1px solid #cecece;
	float: left;
	clear: both;
	margin: 0.5em 0;
}

.toolsmenu div {
	text-align: right;
	color: #4e4e4e;
	width: 100%;
	clear: both;
	float: left;
}

.toolsmenu h1 {
	font-size:14px;
	font-weight:bold;
	margin-top: 0.25em;
	text-align: left;
	display: inline;
	float: left;
	margin-left: 10px;
}

.toolsmenu h1 a {
	color: #4e4e4e;
}

.toolsmenu ul {
	padding: 5px 0;
	float: right;
	margin-right: 10px;
}

.toolsmenu .nopopupgroup li {
	float: left;
	margin-left: 10px;
}

.toolsmenu .popupgroup a.popupctrl, .toolsmenu .popupgroup .popupmenu a.popupctrl, .toolsmenu .nopopupgroup li a {
	font-size: 11px;
	color: #4e4e4e;
	display:block;
	_display:inline;
	float: left;
	clear: right;
	padding: 0.2em 0.4em;
}

.toolsmenu .popupgroup a.popupctrl, .toolsmenu .popupgroup .popupmenu a.popupctrl, .toolsmenu .popupgroup .popupmenu:hover a.popupctrl, .toolsmenu .popupgroup .popupmenu:hover .popupctrl a.popupctrl.active {
	border: 0;
	color: #4e4e4e;
	padding-right: 15px;
}

.toolsmenu li {
	position: relative;
	display:block;
	clear: right;
}

.toolsmenu .popupgroup ul {
	text-align: left;
	float: left;
}

.toolsmenu .popupgroup .popupbody {
	padding:2px;
}

.toolsmenu .menuimage, .toolsmenu li a.menuimage {
	padding-left: 20px;
	color: #4e4e4e;
}

.toolsmenu .nopopupgroup li a, .toolsmenu .menuimage a.popupctrl {
	color: #4e4e4e;
        font-weight: bold;
}

.toolsmenu .nopopupgroup li a:hover, .toolsmenu .menuimage a.popupctrl:hover {
	color: #417394;
}

.menusearch.popupmenu .popupbody {
	min-width:240px;
	max-width:240px;
	font-size: 11px;
	left: -100px;
}

.menusearch input.button {
	float: right;
	top: 0;
}

.menusearch .submitoptions {
	width: 50%;
	float: left;
	text-align: left;
	clear: right;
}

.menusearch .formsubmit .advancedsearchlink {
	width: 50%;
	float: left;
	clear: right;
}

.toolsmenu .popupgroup .popupbody a, .toolsmenu .popupgroup .popupbody li label {
	font-size: 11px;
}

.toolsmenu .popupgroup .popupbody li {
	width: 100%;
}

.toolsmenu .popupgroup .popupbody form ul  {
	width: 100%;
}


/* CSS Document */

.pagetitle {
	width:100%;
}

.threadlist {
	display:block;
	clear:both;
	width: 100%;
	margin-top: 5px;
	float: left;
}

.threadlist hr {
	display: none;
}

.threadlist .threads, .threadlist .stickies {
	display:block;
	clear:both;
}


.above_threadlist {
	display:block;
	clear:both;
	width: 100%;
	position: relative;
	float: left;
	margin-top: 10px;
	height: 32px;
}

.above_threadlist .newcontent_textcontrol {
	position: absolute;
	margin-bottom: 5px;
	left: 0;
}

.above_threadlist .threadpagenav {
	float: right;
	clear: left;
	position: absolute;
	right: 0;
	width: 50%;
	bottom: -10px;
}

.above_threadlist .threadpagenav .threadpagestats, .above_threadlist .threadpagenav .pagination {
	float: right;
	clear:left;
	vertical-align:middle;
	position: relative;
}

.above_threadlist .threadpagenav .threadpagestats {
	position: relative;
	font-size: 12px;
	color: #3e3e3e;
	top: 2px;
	margin-right: 10px;
	border:0;
}

.toolsmenu {
	margin-bottom: 0;
}



.forumfoot {
	display:block;
	width: 100%;
	clear:both;
	height: 2em;
	padding-top: 1em;
	position: relative;
}

.below_threadlist {
	display:block;
	position: relative;
	float: left;
	left: 0;
	margin-bottom: 5px;
	width: 100%;
	clear:both;
}

.noinlinemod.forumfoot {
	height: 0;
}

.below_threadlist .threadpagenav {
	width: 100%;
	float: right;
	margin-top: -10px;
	padding-bottom: 20px;
}

.below_threadlist .threadpagenav.nopagenav {
	padding-bottom: 50px;
}

.below_threadlist .threadpagenav .pagination {
	float: right;
	clear: left;
	position: relative;
	margin-top: 14px;
	margin-left: 10px;
}

.below_threadlist .newcontent_textcontrol {
	top: 0;
	position: absolute;
}

.navpopupmenu.popupmenu.nohovermenu {
	float: right;
	padding: 0;
	clear: left;
	margin-left: 10px;
	font-size: 12px;
	margin-top: 17.995px;
	margin-bottom: 10px;
}

* html .navpopupmenu.popupmenu.nohovermenu a.textcontrol, .navpopupmenu.popupmenu.nohovermenu a.popupctrl {
	color: #424242;
	background: #e9e9e9;
	_background-image: none;
	border: 1px solid #a8a8a8;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	padding: 3.3333333333333px 6.6666666666667px;
}

.navpopupmenu.popupmenu.nohovermenu a.textcontrol, .navpopupmenu.popupmenu.nohovermenu a.popupctrl {
	color: #424242;
	background: #e9e9e9 url(https://vmd0.valuedo.com/images/gradients/generic_button.png) repeat-x top left;
	_background-image: none;
	border: 1px solid #a8a8a8;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	padding: 3.3333333333333px 6.6666666666667px;
}

.navpopupmenu.popupmenu.nohovermenu a.popupctrl {
	position: relative;
	top: 0;
}

.navpopupmenu.popupmenu.nohovermenu a.popupctrl span.ctrlcontainer {
	background: transparent url(https://vmd0.valuedo.com/images/misc/black_downward_arrow.png) no-repeat center left;
	padding-left: 15px;
}

* html .navpopupmenu.popupmenu.nohovermenu a.textcontrol:hover, .navpopupmenu.popupmenu.nohovermenu a.popupctrl:hover {
	color: #417394;
	background: #efefef;
	_background-image: none;
}

.navpopupmenu.popupmenu.nohovermenu a.textcontrol:hover, .navpopupmenu.popupmenu.nohovermenu a.popupctrl:hover {
	color: #417394;
	background: #efefef url(https://vmd0.valuedo.com/images/gradients/generic_button.png) repeat-x  ;
	_background-image: none;
}

.announcements {
	display:block;
	margin: 5px 0;
}

.announcements .announcerow {
	background: transparent none   ;
	_background-image: none;
	margin-top: 5px;
	display:block;
	float: left;
	clear:both;
	width: 100%;

	-moz-box-shadow: -2px 2px 2px #c8c8c8;
	-webkit-box-shadow: -2px 2px 2px #c8c8c8;
	box-shadow: -2px 2px 2px #c8c8c8;

	padding: 5px 0;
}

.announcements .announcerow:first-child {
	margin-top: 0;
}

.announcerow .announceinfo, .announcerow .announcement {
	float:left;
	clear:right;
	display:block;
	background: transparent none   ;
	_background-image: none;
}

.announcerow .announcement {
	width: 80%;
	text-align:left;
}

.announcerow .announceinfo {
	width: 20%;
	text-align:right;
}

.announcement dl {
	font-weight: bold;
	font-size: 13px;
	display:block;
}

.announcement dl dt, .announcement dl dd, .announceinfo dl dt, .announceinfo dl dd {
	display:inline;
}

.announcement .username, .announcement .usertitle, .announceinfo dl{
	font-size: ;
}

.announcement .username, .announcement dl {
	margin-left: 10px;
}

.announceinfo .date, .announceinfo dl {
	margin-right: 10px;
}

/* forumbits */

.forumbits {
	float: left;
	margin-bottom: 10px;
	width: 100%;
	clear:both;
}

.forumbits .forumhead h2 {
	padding: 5px 0;
	-moz-border-radius-topright: 5px;
	-moz-border-radius-topleft: 5px;
	-webkit-border-top-right-radius: 5px;
	-webkit-border-top-left-radius: 5px;
	border-top-right-radius: 5px;
	border-top-left-radius: 5px;
	display:block;
	float: left;
	width: 100%;
	font-weight:bold;
	clear: both;
}

.forumbits .forumhead h2 span {
	display: block;
	float: left;
	clear: right;
}

.forumbits .forumhead h2 span.forumtitle {
	width: 64%;
	text-indent: 10px;
}

.forumbits .forumhead h2 span.forumlastpost {
	width: 20%;
}

.forumbits ol {
	float: left;
	width: 100%;
	clear:both;
}

.forumbits ol.commalist {
	width: auto;
	clear: none;
}

.forumbits .forumbit_nopost .forumhead {
	margin-top: 0;
	background: #7192a8 url(https://vmd0.valuedo.com/images/buttons/newbtn_middle.png) repeat-x  ;
	_background-image: none;
	-moz-border-radius: 0;
	-webkit-border-radius: 0;
	border-radius: 0;
	border: 1px solid #c4c4c4;
	border-top: 0;
}

.forumbits .forumbit_nopost .forumhead h2 {
	padding: 0;
}

.forumbits .forumbit_nopost .forumhead span.forumtitle {
	text-indent: 0;
}

.forumbits .forumbit_nopost .forumhead span.forumlastpost {
	display: none;
}

.forumbit_nopost .forumhead .forumtitle, .forumbit_nopost .forumhead span, .forumbit_nopost .forumhead .collapse, .forumbit_post .forumhead h2 span {
	display:block;
	float: left;
	clear: right;
	font:   bold 12px Arial, Tahoma,Calibri,Verdana,Geneva,sans-serif;
	padding: 4px 0;
	color: #ffffff;
}

.forumbit_nopost .forumrowdata {
	clear:both;
	display:block;
	width: 100%;
}

.forumbit_nopost .subforumdescription {
	padding: 5px 10px;
	font-weight: normal;
	color: #3e3e3e;
	background: #e9e9e9 none repeat-x  ;
}

.forumrow + .childsubforum .forumrow, .forumhead + .childforum .L2:first-child .L2 .forumrow, .forumhead + .childforum .L2 .L2:first-child .forumrow {
	background: #F3F7F9 url(https://vmd1.valuedo.com/images/gradients/grey-up.png) repeat-x left bottom;
	_background-image: none;
}


/* CSS Document */

/*threadlisthead*/
.threadlisthead {
	font:   bold 12px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	margin: 0;
	width: 100%;
	border: 1px solid #5a7f97;
	background: #7192a8 url(https://vmd0.valuedo.com/images/buttons/newbtn_middle.png) repeat-x  ;
	color: #ffffff;
	float: left;
	display:block;
	-moz-border-radius-topright: 0px;
	-moz-border-radius-topleft: 0px;
	-webkit-border-top-right-radius: 0px;
	-webkit-border-top-left-radius: 0px;
	border-top-right-radius: 0px;
	border-top-left-radius: 0px;
	-moz-box-shadow: -2px 2px 2px #c8c8c8;
	-webkit-box-shadow: -2px 2px 2px #c8c8c8;
	box-shadow: -2px 2px 2px #c8c8c8;
	position: relative;
}

.threadlisthead a, .threadlisthead a:hover {
	color: #ffffff;
}

.threadlisthead div {
	/*border-top: 1px solid rgb(255, 255, 255);*/
	margin-left: 3px;
	margin-right: 3px;
	-moz-border-radius-topright: 0px;
	-moz-border-radius-topleft: 0px;
	-webkit-border-top-right-radius: 0px;
	-webkit-border-top-left-radius: 0px;
	border-top-right-radius: 0px;
	border-top-left-radius: 0px;
}

.threadlisthead span.threadinfo, .threadlisthead span.threadinfo_withnotification, .threadlisthead span.threadstats, .threadlisthead span.threadreplies, .threadlisthead span.threadviews, .threadlisthead span.threadnotification, .threadlisthead span.threadlastpost {
	display:block;
	float: left;
	clear: right;
	padding: 4px 0;
}

.threadlisthead span.threadinfo {
	width: 62%;
}

.threadlisthead span.threadinfo_withnotification {
	width: 47%;
}

.threadlisthead span.threadinfo .threadtitle {
	padding-left: 10px;
}

.threadlisthead span.threadreplies {
	width: 6%;
	text-align:center;
}

.threadlisthead span.threadviews {
	width: 6%;
	text-align:center;
}

.threadlisthead span.threadstats {
	text-align:center;
	width: 12%;
}

.threadlisthead span.threadnotification {
	width: 10%;
	text-align: center;
	word-wrap: break-word;
}

.threadlisthead span.threadlastpost {
	width: 23%;
	text-align:left;
	padding-left: 2%;
}

.threadlisthead a:hover {
	background: transparent;
}

.threadlisthead .threadimod {
	position: absolute;
	right: 5px;
	padding-top: 5px;
}

/*threadbit*/
.threadbit{
	padding:0;
	width:100%;
	display:block;
	clear:both;
	color: #3e3e3e;
	float: left;
	position: relative;
	-moz-box-shadow: -2px 2px 2px #c8c8c8;
	-webkit-box-shadow: -2px 2px 2px #c8c8c8;
	box-shadow: -2px 2px 2px #c8c8c8;
}


.threadbit .threadtitle {
	margin-top: 5px;
	font-size: 13px;
}

.threadbit .threadtitle_unread {
	font-weight: bold;
}

.threadbit .threaddetails {
	float: right;
	margin-right: 10px;
}

.threadbit .sticky{
	background: #F2F6F8 url(https://vmd1.valuedo.com/images/gradients/grey-up.png) repeat-x left bottom;
	border: 1px solid #c4c4c4;
	border-top: 0;
	width: 100%;
	float: left;
	display:block;
	clear:both;
	position: relative;
}

.threadbit .nonthread{
	background: #FAFAFA url(https://vmd1.valuedo.com/images/gradients/grey-up.png) repeat-x left bottom;
	border: 1px solid #c4c4c4;
	border-top: 0;
	width: 100%;
	float: left;
	display:block;
	clear:both;
	position: relative;
	padding: 0.5em 0 0.5em;
	text-indent: 10px;
}

.threadbit .nonsticky, .threadbit .deleted, .threadbit .discussionrow, .threadbit .ignored {
	border: 1px solid #c4c4c4;
	border-top: 0;
	width:100%;
	float: left;
	display:block;
	clear:both;
	position: relative;
	margin-top: 0;
}

.threadbit .nonsticky, .threadbit .discussionrow {
	background: #FAFAFA url(https://vmd1.valuedo.com/images/gradients/grey-up.png) repeat-x left bottom;
}

.threadbit .deleted, .threadbit .ignored {
	background: #e5e5e5 url(https://vmd0.valuedo.com/images/gradients/gradient-black-down_sm.png) repeat-x  ;
}

.threadbit .threadmeta {
	font-size: 12px;
}

.threadbit .threadstatus {
	min-height: 47px;
	height: auto;
}

.threadbit .threadstatus, .threadbit .threadinfo, .threadbit .threadinfo_withnotification, .threadbit .threadstats, .threadbit .threadlastpost, .threadbit .threaddeleted, .threadbit .threadnotification, .threadbit .nothreadstatus, .threadbit .threadthread, .threadbit img.statusicon {
	float: left;
	clear: right;
	display:inline-block;
}

.threadbit .threadinfo {
	width: 62%;
	min-width: 350px;
}

.threadbit .threadinfo_withnotification {
	width: 47%;
}

.threadbit .threadstats {
	width: 12%;
}

.threadbit .threadnotification {
	width: 10%;
}

.threadbit .threadthread {
	width: 10%;
}

.threadbit .threadstats {
	font-size: 12px;
	text-align: right;
	padding: 8.74px 0;
}

.threadbit .threadstats li {
	margin-right: 20px;
}

.threadbit .threadstats .replies, .threadbit .threadstats .views, .threadbit .threadstats .smallreplies {
	display: inline-block;
	float: left;
	clear: right;
	padding: 16.12px 0;
	text-align: center;
	font-size: 12px;
}

.threadbit .threadstats .replies, .threadbit .threadstats .views {
	width: 50%;
}

.threadbit .threadstats .smallreplies {
	width: 33.3%;
}

.threadbit .discussionrow .threadstats .views, .threadbit .ignored .threadstats .views {
	text-align:  center;
}

.threadbit .threadstats .replies a.understate:link {
	color: #3e3e3e;
}

.threadbit .threadlastpost {
	width: 23%;
	padding: 8.74px 0;
	padding-left: 2%;
	float: left;
	clear: right;
	display:block;
	height: 29.52px;
	font-size: 11px;
}

.threadbit .alt {
	background: #F3F7F9 url(https://vmd1.valuedo.com/images/gradients/grey-up.png) repeat-x left bottom;
}

.threadbit .threaddeleted {
	width: 33%;
	padding: 8.74px 0;
	float: left;
	clear: right;
	display: block;
	vertical-align: middle;
	padding-left:3%;
	font-size: 12px;
}

.threadbit .threadnotification {
	padding: 16.12px 0;
	font-size: 12px;
	text-align: center;
}

.threadbit .threadlastpost .username {
	font-size: 12px;
}

.threadbit .discussionrow img.statusicon {
        padding: 5px 10px;
}

.threadbit .discussionrow .inner {
	margin-left: 10px;
}
span.searchdesc, .threadbit .discussionrow .inner span.searchdesc {
	font-size: 11px;
}

.threadbit .discussionrow .threadinfo {
	padding: 12.38px 0;
}

.threadbit .discussionrow.hasstatus .threadinfo {
	width: 62%;
	padding: 0;
}

.threadbit .discussionrow.hasstatus .threadlastpost {
	height: auto;
}

.threadbit .discussionrow.hasstatus .threadtitle {
	margin-top: 5px;
}

.threadbit .discussionrow.hasstatus .threadstats {
	padding: 17.5px 0; 
	font: 12px;
}

.threadbit .discussionrow.hasstatus .threadstats li {
	margin-left: 10px;
}

.threadbit .discussionrow .threadtitle {
	margin-top: 0;
}

.threadbit .discussionrow .threadstats {
	font-size: {vb;stylevar mid_fontSize};
	padding: 5px 0;
}

.threadbit .discussionrow .threadlastpost {
	padding-left: 3%;
	height: 44.28px};
}

.threadbit .threadimod {
	width: 0%;
	overflow: show;
}

.threadbit .threadimod input {
	position: absolute;
	right: 1%;
	margin-top: 17px;
}

.threadbit .threadnotification + .threadimod {
	position:absolute;
	right: 5px;
	margin-top: 0;
}

.threadbit.imod_highlight .deleted,
.threadbit.imod_highlight .sticky,
.threadbit.imod_highlight .nonsticky,
.threadbit.imod_highlight .discussionrow,
.threadbit.imod_highlight .alt,
.threadbit.imod_highlight .ignored {
	background-color:#FFEB90;
}

/* threadbit status */
.threadbit .nonsticky a.threadstatus, .threadbit .sticky a.threadstatus {
	background-repeat: no-repeat;
	background-position: 10px 4px;
	position: relative;
	float: left;
	clear: right;
	width: 60px;
	display:block;
}

.threadbit .threadstatus { background-image: url(https://vmd0.valuedo.com/images/statusicon/thread_old-30.png); }
.threadbit.dot .threadstatus { background-image: url(https://vmd0.valuedo.com/images/statusicon/thread_dot-30-right.png); }
.threadbit.dot.hot .threadstatus { background-image: url(https://vmd0.valuedo.com/images/statusicon/thread_dot_hot-30-right.png); }
.threadbit.dot.hot.lock .threadstatus { background-image: url(https://vmd0.valuedo.com/images/statusicon/thread_dot_hot_lock-30-right.png); }
.threadbit.dot.hot.lock.new .threadstatus { background-image: url(https://vmd0.valuedo.com/images/statusicon/thread_dot_hot_lock_new-30-right.png); }
.threadbit.dot.hot.new .threadstatus { background-image: url(https://vmd0.valuedo.com/images/statusicon/thread_dot_hot_new-30-right.png); }
.threadbit.dot.lock .threadstatus { background-image: url(https://vmd0.valuedo.com/images/statusicon/thread_dot_lock-30-right.png); }
.threadbit.dot.lock.new .threadstatus { background-image: url(https://vmd0.valuedo.com/images/statusicon/thread_dot_lock_new-30-right.png); }
.threadbit.dot.new .threadstatus { background-image: url(https://vmd0.valuedo.com/images/statusicon/thread_dot_new-30-right.png); }
.threadbit.hot .threadstatus { background-image: url(https://vmd0.valuedo.com/images/statusicon/thread_hot-30.png); }
.threadbit.hot.lock .threadstatus { background-image: url(https://vmd0.valuedo.com/images/statusicon/thread_hot_lock-30.png); }
.threadbit.hot.lock.new .threadstatus { background-image: url(https://vmd0.valuedo.com/images/statusicon/thread_hot_lock_new-30.png); }
.threadbit.hot.new .threadstatus { background-image: url(https://vmd0.valuedo.com/images/statusicon/thread_hot_new-30.png); }
.threadbit.lock .threadstatus { background-image: url(https://vmd0.valuedo.com/images/statusicon/thread_lock-30.png); }
.threadbit.lock.new .threadstatus { background-image: url(https://vmd0.valuedo.com/images/statusicon/thread_lock_new-30.png); }
.threadbit.moved .threadstatus { background-image: url(https://vmd0.valuedo.com/images/statusicon/thread_moved-30.png); }
.threadbit.moved.new .threadstatus { background-image: url(https://vmd0.valuedo.com/images/statusicon/thread_moved_new-30.png); }
.new .threadstatus { background-image: url(https://vmd0.valuedo.com/images/statusicon/thread_new-30.png); }

.threadbit .deleted .threadstatus {
	background: url(https://vmd0.valuedo.com/images/statusicon/thread_deleted_30-right.png) no-repeat 10px 4px;
	position: relative;
	float: left;
	clear: right;
	width: 60px;
	display:block;

}

/*threadbit ratings */
.threadbit .threadtitle {
	background:transparent none no-repeat right top;
	padding-left:0;
	margin-right: 10px;
}
.threadbit .rating1 .threadtitle { background-image:url(https://vmd1.valuedo.com/images/rating/rating-trans-15_1.png); padding-right:15px; }
.threadbit .rating2 .threadtitle { background-image:url(https://vmd1.valuedo.com/images/rating/rating-trans-15_2.png); padding-right:30px; }
.threadbit .rating3 .threadtitle { background-image:url(https://vmd1.valuedo.com/images/rating/rating-trans-15_3.png); padding-right:45px; }
.threadbit .rating4 .threadtitle { background-image:url(https://vmd1.valuedo.com/images/rating/rating-trans-15_4.png); padding-right:60px; }
.threadbit .rating5 .threadtitle { background-image:url(https://vmd1.valuedo.com/images/rating/rating-trans-15_5.png); padding-right:75px; }

/*threadbit icon*/
.threadbit .title {
	background:transparent none no-repeat left top;
}

.threadbit .pagination {
	position: relative;
	display: inline-block;
	margin-left: 5px;
	margin-top: 0.25em;
}

.threadbit .pagination dd span {
	padding-top: 0;
	padding-bottom: 0;
}

.threadbit .pagination a {
	padding: 0 4px;
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	border-radius: 2px;
	color: #417394;
	font-size: 11px;
	display: inline;
	float: none;
}

.threadbit .deleted .threadinfo {
	width: 62%
}

.threadbit .deleted .author {
	display: inline-block;
	float: left;
}

.threadbit .managethread {
	display: inline-block;
	float: left;
	clear: right;
}

.threadbit .managethread li {
	display: inline;
	margin-left: 10px;
}

.threadinfo_withnotification .statusicon {
	padding:5px;
	float:left;
}

.threadbit.attachments {
    margin: 0;
    border: 0;
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    border-radius: 0;
    background: transparent;
    font-size: 13px;
}

/*************************************************/
/* ADS THREADS */
#ad_forum_below_threadlist {
        width:100%;
        padding:0 0 0 0;
        text-align:left;
}



div#above_medcal_controls{margin-bottom: 5px;}
.formcontrols .blockrow * label
{
	display: inline;
}