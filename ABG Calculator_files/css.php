@charset "UTF-8";
/* CSS Document */

.bbcode_container {
	margin:20px;
	margin-top:5px;
	display:block;
}

.bbcode_container .bbcode_desc {
	margin-bottom:2px;
	font-size:11px;
}
/*text-align should alwais be LTR for the CODE blocks*/
.bbcode_container div.bbcode_code,
.bbcode_container pre.bbcode_code {
	margin:0;
	padding:6px;
	border:1px inset;
	text-align:left;
	overflow:scroll;
	direction:ltr;
	background:#f2f6f8 none repeat-x  ;
	font-size:12px;	
}

.bbcode_container code.bbcode_code {
	margin:0;
	text-align:left;
	direction:ltr;
	font-size:12px;	
}

.bbcode_container code.bbcode_code code {
	white-space:nowrap;
}

.bbcode_container div.bbcode_quote {
	margin:0 10px;
	margin-bottom: 10px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	background: #f2f6f8 none   ;
	border-radius: 5px;
	border: 1px solid #417394;
	font: italic  normal 13px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	position: relative;
	top: 0;
}

.bbcode_container .bbcode_quote_container {
	background: transparent url(https://vmd0.valuedo.com/images/misc/quote-left.png) no-repeat  left;
	display:block;
	width: 9px;
	height: 13px;
	position: absolute;
	top: 5;
	left: -9px;
}

.bbcode_quote div.quote_container {
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	padding: 5px 10px 5px 10px;
}

.bbcode_quote .bbcode_postedby img {
	position: relative;
	top: 1px;
}

.bbcode_container div.bbcode_quote.printable {
	background:none;
	border:none;
}

.bbcode_container div.bbcode_quote div.message {
	/*font-style:italic;*/
	padding:8px 0px;
}

/* fix the bug where li's in quotes are floated */
.bbcode_container div.bbcode_quote div.message ol>li, .bbcode_container div.bbcode_quote div.message ul>li{
	float: none;
}

/* from components.css */
.bbcode_postedby {
	font:   normal 12px Tahoma,Calibri,Verdana,Geneva,sans-serif;
}

.bbcode_postedby img {
	margin:0;
}

.texteditor textarea.cke_source {
	padding:0 1px 0 1px;
}

.texteditor.content .cke_skin_kama textarea.cke_source,
.texteditor textarea {
	color: #222222;
	font:    13px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	white-space:pre-wrap;
	background: #FFFFFF none   ;
}

.texteditor.forum .cke_skin_kama textarea.cke_source,
.texteditor.forum textarea {
	color: #222222;
	font:    13px Verdana,Arial,Tahoma,Calibri,Geneva,sans-serif;
	white-space:pre-wrap;
	background: #FFFFFF none   ;
}


.editor_smiliebox {
	float:right;
	width:75px;
	height:200px;
	_background-color:#FFFFFF;
	_border:solid 1px #6b91ab;
	padding:0 3px 3px 3px;
}

.editor_smiliebox .blocksubhead {
	padding:0;
	font-size:11px;
	font-weight:normal;
	text-align:center;
	border:solid 1px #6b91ab;
	border-width:1px 0;
}

.editor_smiliebox ul.smiliebox {
	height:190px;
	overflow:hidden;
}

.editor_smiliebox ul.smiliebox li {
	float:left;
	height:20px;
	width:20px;
	margin:2px;
	overflow:hidden;
	position:relative;
	text-align:center;
}

.editor_smiliebox ul.smiliebox li div.table {
	display:table;
	height:100%;
	margin:auto;
	/* IE8 needs the following, see https://connect.microsoft.com/IE/feedback/ViewFeedback.aspx?FeedbackID=425785#tabs */
	table-layout:fixed;
	width:20px;
}

.editor_smiliebox ul.smiliebox li div.tablecell {
	display:table-cell;
	vertical-align:middle;
}

.editor_smiliebox ul.smiliebox li img {
	height:auto;
	max-width:20px;
	width:auto !important;
	cursor: pointer;
}

.editor_smiliebox div.moresmilies {
	text-align:center;
	font-size:11px;
}

.editor_textbox_container {
	width:100%;
	float:left;
	margin:0;
}

.editor_textbox_container.smilie {
	margin-right:-165px;
}

.editor_textbox_smilie {
	margin-right:85px;
}

/* dropdown button */
.cke_skin_kama_container {
	visibility:visible; 
	background: #FFFFFF; // no stylevar
}

.cke_skin_kama_container body {
	min-width: 0;
}

.attachment a {
	padding: 1px 0;
	border: 1px solid #ffffff;
	display: block;
}

.attachment a:hover {
	padding: 1px 0;
	border-color: #316ac5;
	background-color: #dff1ff;
}


.editorpopupbody {
	padding: 5px;
	min-width: 200px;
	max-height:250px;
	overflow-y:auto;
	overflow-x:hidden;
}


.editorpopupbody li.attachment {
	white-space:nowrap;
}

.editorpopupbody div.attach_insert_all {
	cursor: pointer;
	background-color:#FFFFFF;
	padding: 2px;
}

.cke_skin_kama .cke_panel.cke_attach {
	width:250px;
	height:auto;
}

.cke_skin_kama span.cke_browser_webkit,.cke_skin_kama span.cke_browser_gecko18 {
   outline: none !important;
}

/* attachment click */
.previewthumbactive {
	position: absolute;
	background: url(https://vmd0.valuedo.com/images/misc/pencil.png) no-repeat top left;
	cursor: pointer;
	border:1px solid red;
	margin:0;
	z-index: 10;
}

img.previewthumb.active {
	cursor: pointer;
	border:1px solid red;
	margin:0;
}

/* ie8 width fix */
.cke_browser_ie8 .cke_editor {
	display: block !important;
}

/* disabled background override */
.cke_button .cke_disabled:hover {
	background-color: transparent !important;
}

/* icons */
.cke_skin_kama span:not(.cke_browser_ie) .cke_button .cke_icon {
	background: url(https://vmd1.valuedo.com/images/editor/sprite.png) no-repeat top left;
}

.cke_skin_kama .cke_browser_ie .cke_button .cke_icon {
	position: relative;
	overflow: hidden;
	width: 16px;
	height: 16px
}

.cke_skin_kama .cke_browser_ie .cke_button .cke_icon_image {
	position: absolute;
	width: 2498px;
	height: 60px;
	background: url(https://vmd1.valuedo.com/images/editor/sprite.png) no-repeat top left;
}

.cke_skin_kama .cke_browser_ie .cke_button .cke_icon_image.custom {
	background: none;
}

.cke_skin_kama .cke_browser_ie .cke_button a.cke_disabled .cke_icon {
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='scale');
}

.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button a.cke_disabled .cke_icon {
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='scale');
}

.cke_skin_kama .cke_browser_ie .cke_button a.cke_on .cke_icon_image {
	top: 0px;
}

.cke_skin_kama .cke_browser_ie .cke_button a.cke_off .cke_icon_image {
	top: -20px;
}

.cke_skin_kama .cke_browser_ie .cke_button a.cke_disabled .cke_icon_image {
	top: -40px;
	filter: ;
}

/* VBIV-11809 */
.cke_skin_kama .cke_browser_ie .cke_button .cke_button_textcolor .cke_buttonarrow {
	filter: ;
}

.cke_skin_kama .cke_browser_ie .cke_button .cke_buttonarrow {
	position:relative;
	top:-4px;
}

.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button a.cke_disabled .cke_icon_image {
	top: -40px;
	filter: ;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_openAttachmentWindow .cke_icon {
	background-position: 0 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_openAttachmentWindow .cke_icon_image {
	left: 0px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_enhancedsource .cke_icon
{
	background-position: -1597px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_enhancedsource .cke_icon_image
{
	left: -1597px;
}
.cke_skin_kama .cke_button_enhancedsource .cke_label
{
	/* This displays the "source" text next to the source button!*/
	/*display: inline !important;*/
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_pastetext .cke_icon
{
	background-position: -2480px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_pastetext .cke_icon_image
{
	left: -2480px;
}
.cke_skin_kama span:not(.cke_browser_ie) .cke_button_pastefromword .cke_icon
{
	background-position: -2430px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_pastefromword .cke_icon_image
{
	left: -2430px;
}
.cke_skin_kama span:not(.cke_browser_ie) .cke_button_removeFormat .cke_icon
{
	background-position: -1447px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_removeFormat .cke_icon_image
{
	left: -1447px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_bold .cke_icon
{
	background-position: -50px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_bold .cke_icon_image
{
	left: -50px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_italic .cke_icon
{
	background-position: -897px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_italic .cke_icon_image
{
	left: -897px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_underline .cke_icon
{
	background-position: -2247px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_underline .cke_icon_image
{
	left: -2247px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_subscript .cke_icon
{
	background-position: -2147px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_subscript .cke_icon_image
{
	left: -2147px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_superscript .cke_icon
{
	background-position: -2197px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_superscript .cke_icon_image
{
	left: -2197px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_table .cke_icon
{
	background-position: -2047px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_table .cke_icon_image
{
	left: -2047px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbTableProperties .cke_icon
{
	background-position: -1797px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbTableProperties .cke_icon_image
{
	left: -1797px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_tableDelete .cke_icon
{
	background-position: -1847px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_tableDelete .cke_icon_image
{
	left: -1847px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbRowInsertBefore .cke_icon
{
	background-position: -1997px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbRowInsertBefore .cke_icon_image
{
	left: -1997px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbRowInsertAfter .cke_icon
{
	background-position: -1947px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbRowInsertAfter .cke_icon_image
{
	left: -1947px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbRowDelete .cke_icon
{
	background-position: -1897px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbRowDelete .cke_icon_image
{
	left: -1897px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbColumnInsertBefore .cke_icon
{
	background-position: -1747px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbColumnInsertBefore .cke_icon_image
{
	left: -1747px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbColumnInsertAfter .cke_icon
{
	background-position: -1697px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbColumnInsertAfter .cke_icon_image
{
	left: -1697px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbColumnDelete .cke_icon
{
	background-position: -1647px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbColumnDelete .cke_icon_image
{
	left: -1647px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_horizontalrule .cke_icon
{
	background-position: -2097px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_horizontalrule .cke_icon_image
{
	left: -2097px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_smiley .cke_icon
{
	background-position: -1497px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_smiley .cke_icon_image
{
	left: -1497px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_iespell .cke_icon
{
	background-position: -1547px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_iespell .cke_icon_image
{
	left: -1547px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_link .cke_icon
{
	background-position: -300px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_link .cke_icon_image
{
	left: -300px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_Email .cke_icon
{
	background-position: -401px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_Email .cke_icon_image
{
	left: -401px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_unlink .cke_icon
{
	background-position: -2346px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_unlink .cke_icon_image
{
	left: -2346px;
}
.cke_skin_kama span:not(.cke_browser_ie) .cke_button_image .cke_icon, .cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbimage .cke_icon
{
	background-position: -747px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_image .cke_icon_image, .cke_skin_kama .cke_browser_ie .cke_button_vbimage .cke_icon_image
{
	left: -747px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_videotag .cke_icon
{
	background-position: -2397px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_videotag .cke_icon_image
{
	left: -2397px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_Quote .cke_icon
{
	background-position: -1347px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_Quote .cke_icon_image
{
	left: -1347px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_Code .cke_icon
{
	background-position: -151px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_Code .cke_icon_image
{
	left: -151px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_Html .cke_icon
{
	background-position: -451px 0; 
}
.cke_skin_kama .cke_browser_ie .cke_button_Html .cke_icon_image
{
	left: -451px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_Php .cke_icon
{
	background-position: -1297px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_Php .cke_icon_image
{
	left: -1297px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_PageBreak .cke_icon
{
	background-position: -1147px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_PageBreak .cke_icon_image
{
	left: -1147px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_PreviewBreak .cke_icon
{
	background-position: -100px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_PreviewBreak .cke_icon_image
{
	left: -100px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_textcolor .cke_icon
{
	background-position: -201px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_textcolor .cke_icon_image
{
	left: -201px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_undo .cke_icon
{
	background-position: -2297px 0; 
}
.cke_skin_kama .cke_browser_ie .cke_button_undo .cke_icon_image
{
	left: -2297px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_undo .cke_icon
{
	background-position: -1397px 0;
}
.cke_skin_kama .cke_rtl .cke_browser_ie .cke_button_undo .cke_icon_image
{
	left: -1397px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_redo .cke_icon
{
	background-position: -1397px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_redo .cke_icon_image
{
	left: -1397px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_redo .cke_icon
{
	background-position: -2297px 0; 
}
.cke_skin_kama .cke_rtl .cke_browser_ie .cke_button_redo .cke_icon_image
{
	left: -2297px;
}

.cke_skin_kama .cke_rtl .cke_rcombo {
	float:right;
}

.cke_skin_kama .cke_browser_ie6 .cke_rtl .cke_rcombo,
.cke_skin_kama .cke_browser_ie7 .cke_rtl .cke_rcombo  {
	float:none;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_numberedlist .cke_icon
{
	background-position: -797px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_numberedlist .cke_icon_image
{
	left: -797px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_bulletedlist .cke_icon
{
	background-position: -847px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_bulletedlist .cke_icon_image
{
	left: -847px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_outdent .cke_icon
{
	background-position: -1097px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_outdent .cke_icon_image
{
	left: -1097px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_indent .cke_icon
{
	background-position: -697px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_indent .cke_icon_image
{
	left: -697px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_justifyleft .cke_icon
{
	background-position: -997px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_justifyleft .cke_icon_image
{
	left: -997px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_justifycenter .cke_icon
{
	background-position: -947px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_justifycenter .cke_icon_image
{
	left: -947px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_justifyright .cke_icon
{
	background-position: -1047px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_justifyright .cke_icon_image
{
	left: -1047px;
}

/* rtl icons */

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_undo .cke_icon
{
	background-position: -1397px 0;
}
.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button_undo .cke_icon_image
{
	left: -1397px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_redo .cke_icon
{
	background-position: -2297px 0; 
}
.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button_redo .cke_icon_image
{
	left: -2297px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_outdent .cke_icon
{
		background-position: -697px 0;
}
.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button_outdent .cke_icon_image
{
		left: -697px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_indent .cke_icon
{
		background-position: -1097px 0;
}
.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button_indent .cke_icon_image
{
		left: -1097px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_columnInsertBefore .cke_icon
{
	background-position: -1697px 0;
}
.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button_columnInsertBefore .cke_icon_image
{
	left: -1697px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_columnInsertAfter .cke_icon
{
	background-position: -1747px 0;
}
.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button_columnInsertAfter .cke_icon_image
{
	left: -1747px;
}

.cke_skin_kama .cke_dialog .cke_dialog_ui_labeled_label {
	float:none;
}

.cke_skin_kama .cke_dialog input[type="file"] {
	border:1px inset;
}

.cke_skin_kama div.cke_bottom_restore_autosave {
	position:relative;
}

.cke_skin_kama div.cke_bottom_restore_autosave .cke_toolgroup {
	height:18px;
	position:absolute;
	top:4px;
	padding:0 3px 0 0;
}

.cke_skin_kama div.cke_bottom_restore_autosave a.restoretext {
	cursor:pointer;
	height:12px;
	background-image:none
}

.cke_skin_kama div.as_ind_container {
	position:relative;
}

.cke_skin_kama div.as_ind_container div {
	background-color:rgb(255, 255, 0);
	right:0;
	position:absolute;
	padding:2px;
	top:-12px;
	font-weight:bold;
}

.cke_skin_kama .cke_toolbox {
	margin-bottom: 5px;
}

/* VBIV-11874 Override CSS so that textarea popup resizes with the dialog */
.cke_skin_kama .cke_dialog .cke_dialog_ui_textarea.cke_pastetext {
	width:auto;
	height:auto;
}

/* Turn off focus outline on mac */
.cke_dialog_tab:focus {
	outline:none;
}

/* Allow size combo to adjust a bit horizontally */
.cke_skin_kama .cke_fontSize span.cke_text {
	max-width:60px;
	min-width:25px;
	width:auto;
	_width:25px;
}


.cke_skin_kama .cke_editor .cke_rcombo a,
.cke_skin_kama .cke_editor .cke_toolgroup {
	background:  url(https://vmd0.valuedo.com/clientscript/ckeditor/skins/kama/images/sprites.png) repeat-x 0px -500px;
}

.cke_skin_kama .cke_editor .cke_rcombo a:hover,
.cke_skin_kama .cke_editor .cke_rcombo a:focus,
.cke_skin_kama .cke_editor .cke_rcombo a:active,
.cke_skin_kama .cke_editor .cke_button a:hover,
.cke_skin_kama .cke_editor .cke_button a:focus,
.cke_skin_kama .cke_editor .cke_button a:active {
	background-color: #DFF1FF;
}


.cke_skin_kama .cke_editor .cke_button a.cke_on {
	background-color: #A3D7FF;
}

.cke_skin_kama .cke_editor .cke_button a.cke_on:hover,
.cke_skin_kama .cke_editor .cke_button a.cke_on:focus,
.cke_skin_kama .cke_editor .cke_button a.cke_on:active {
	background-color: #86CAFF;
}

.cke_skin_kama .cke_editor .cke_button a.cke_disabled * {
	opacity: .3;
}

.cke_skin_kama .cke_editor .cke_button a,
.cke_skin_kama .cke_editor .cke_button a.cke_off {
	opacity: .7;
}

.cke_skin_kama .cke_wrapper.cke_ltr,
.cke_skin_kama .cke_wrapper.cke_rtl {
	background: #D3D3D3 url(https://vmd0.valuedo.com/clientscript/ckeditor/skins/kama/images/sprites.png) repeat-x 0px -1950px;
}

.cke_skin_kama .cke_dialog_body .cke_dialog_contents {
	background: #FFFFFF none   ;
}

.cke_skin_kama .cke_dialog_contents .cke_dialog_contents {
	background-color: #E4E4E4;
	border-top: #FFFFFF 1px solid;
	border-right: #FFFFFF 1px solid;
	border-left: #FFFFFF 1px solid;
}

.cke_skin_kama .cke_dialog_title {
	color: #000000;
}

.cke_skin_kama .cke_dialog_body .cke_dialog_tabs a.cke_dialog_tab {
	background-color: #FFFFFF;
	color: #000000;	
}

.cke_skin_kama .cke_dialog_body .cke_dialog_tabs a.cke_dialog_tab_selected {
	background-color: #E4E4E4;
	color: #000000;	
}

.cke_skin_kama .cke_dialog_body .cke_dialog_tabs a.cke_dialog_tab:hover {
	background-color: #E1E1E1;
	color: #000000;
}

.cke_skin_kama .cke_dialog_contents .cke_dialog_footer {
	background-color: #E4E4E4;
	border-top: #FFFFFF 1px solid;
	border-right: #FFFFFF 1px solid;
	border-left: #FFFFFF 1px solid;
}

.cke_skin_kama .cke_dialog .cke_dialog_body {
	background: #FFFFFF none   ;
}

.cke_skin_kama .cke_dialog_body .cke_dialog_title {
	border-bottom: #E4E4E4 1px solid;
}

.cke_skin_kama .cke_dialog_contents *, .cke_skin_kama .cke_dialog_contents a:hover, .cke_skin_kama .cke_dialog_contents a:link, .cke_skin_kama .cke_dialog_contents a:visited, .cke_skin_kama .cke_dialog_contents a:active {
	color: #000000;
}

.cke_skin_kama .cke_dialog .cke_dialog_body a.cke_dialog_close_button {
	background-image:none;
	top:10px;
}

.cke_skin_kama .cke_dialog_body .cke_dialog_close_button span {
	display:inline;
	font-weight:bold;
	font-size:10px;
	padding:0 2px 0 2px;
	border:1px solid #000000;
	color: #000000;
	cursor:pointer;
	display: inline-block; 
	vertical-align: bottom;
}

.cke_skin_kama .cke_dialog_body .cke_dialog_close_button span:hover {
	background-color:#E4E4E4;
	color: #FFFFFF;
}

.cke_skin_kama .cke_dialog .cke_dialog_body .cke_dark_background {
	background-color: #E4E4E4;
}

.cke_skin_kama .cke_dialog_body a.cke_smile img,
.cke_skin_kama .cke_dialog_body a.cke_smile:focus img,
.cke_skin_kama .cke_dialog_body a.cke_smile:active img,
.cke_skin_kama .cke_dialog_body a.cke_smile:hover img {
	border:0;
	padding:2px;
}

.cke_skin_kama .cke_dialog .cke_dialog_body .cke_dialog_ui_input_text,
.cke_skin_kama .cke_dialog .cke_dialog_body .cke_dialog_ui_input_select,
.cke_skin_kama .cke_dialog .cke_dialog_body .cke_dialog_ui_input_textarea {
	color:#000000;
}

.cke_skin_kama .cke_dialog div.cke_disabled .cke_dialog_ui_labeled_content * {
	background-color:#CCCCCC;
}

.cke_skin_kama .cke_dialog .smiley_page {
	overflow:auto;
}

.cke_skin_kama .cke_dialog .smiley_category {
	padding:5px;
}


/* CSS Document */
.popupmenu {
	*z-index:999;
	position: relative;
}

.popupmenu a.popupctrl {
	background-image:url(https://vmd0.valuedo.com/images/misc/black_downward_arrow.png);
	background-position:right center;
	background-repeat:no-repeat;
	padding-right:15px;
	_padding-right:25px;
}

.popupmenu a.popupctrl.nogadget {
	padding-right:0;
	background-image:none;
}

.popupgroup .popupmenu a.popupctrl {
	font-size:11px;
	padding:2px 4px;
	border: 0;
	background-color:transparent;
	text-decoration:none;
	padding-right:15px;
	margin-left:5px;
}

.popupgroup .popupmenu:hover a.popupctrl {
	border:0;
	background-color:transparent;
}

/* see PopupMenu.set_control_style() */
.popupgroup .popupmenu {
	float:left;
}

.blockfoot .popupctrl {
	text-decoration:none;
	padding:2px 6px;
	padding-right:15px;
	-moz-border-radius:0px;
	-webkit-border-radius:0px;
	border-radius:0px;
}

.blockhead .popupctrl {
	color: #ffffff;
}

.blockhead .popupctrl:hover {
	color: #ffffff;
}

.popupbody {
	font:   normal 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	color: #3E3E3E;
	padding:2px;
	background:#E1E1E1 none   ;
	border: 1px solid #E1E1E1;
	position:absolute;
	z-index:1000;
	top:1.5em;
	left:0;
	display:none;
	min-width:200px;
}

.popupmenu:hover ul.popuphover {
	display:block;
}

.popupbody li {
	border-top:solid 1px #E1E1E1;
}

.popupbody > li:first-child {
	border-top:none;
}

.popupbody li a,
.popupbody li label {
	display:block;
	color: #3E3E3E;
	background:#FFFFFF none   ;
	padding:6.235px 10px;
	text-decoration:none;
	text-align:left;
	white-space:nowrap;
}

.popupbody li > a:hover,
.popupbody li > label:hover {
	color:#3E3E3E;
	background:#FFEB90 none   ;
}

.memberaction_body.popupbody li a:hover {
	color:#3E3E3E;
	background-color:#FFEB90;
}

/* vbmenu_hilite and vbmenu_option are for the ajax popup menus (tags) */

.popupbody li.vbmenu_hilite a {
	color:#3E3E3E;
	background:#FFEB90 none   ;
}

.popupbody li.vbmenu_option > a:hover {
	color:#3E3E3E;
	background:#FFEB90 none   ;
}

.popupbody li.vbmenu_hilite, li.vbmenu_option {
	float: none;
	display:list-item;
	width: 100%;
}

.popupbody li input.searchbox {
	width:180px;
	padding:0px;
	font-size:13px;
	font-style:italic;
	color:#777777;
}

.popupbody li input.searchbox:focus {
	font-style:normal;
	color:#3e3e3e;
}

.popupbody li.formsubmit {
	text-align:right;
	padding:0px;
	background:#E1E1E1 none   ;
}

.popupbody li.formsubmit .submitoptions {
	float:left;
	text-align:left;
}

.popupbody li.formsubmit .submitoptions label {
	display:block;
}

.popupbody li.formsubmit.jumptopage > label {
	display:inline;
	background:none;
}

.popupbody li.formsubmit input[type="submit"],
.popupbody li.formsubmit input[type="reset"],
.popupbody li.formsubmit input[type="button"] {
	font:12px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	padding:2px;
	padding-bottom:1px;
}

.popupbody li.formsubmit input[type="submit"]:hover,
.popupbody li.formsubmit input[type="reset"]:hover,
.popupbody li.formsubmit input[type="button"]:hover {
	color:#417394;
}

.blockhead .popupmenu,
.blocksubhead .popupmenu {
	display:block;
	float: right;
	clear: left;
	text-transform: none;
}

/* MEMBER ACTION DROP-DOWN */
.memberaction.popupmenu {
	position: relative;
	top: 0;
	display: inline-block;
}
.postdetails .memberaction.popupmenu {
	position: static; /* Opera 10.10 Fix */
}
.memberaction.popupmenu a.popupctrl {
	background: none;
	padding: 0;
}
.memberaction_body.popupbody {
	width: 280px;
	background: #FFFFFF;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	-moz-box-shadow: 0px 4px 7px #c8c8c8;
	-webkit-box-shadow: 0px 4px 7px #c8c8c8;
	box-shadow: 0px 4px 7px #c8c8c8;
}
.memberaction_body.popupbody li {
	border: none;
	width: 140px;
}
.memberaction_body.popupbody li.left {
	float: left;
	clear: left;
}
.memberaction_body.popupbody li.right {
	float: right;
	clear: right;
}

.memberaction_body.popupbody li .siteicon_profile { 
	background:url(https://vmd1.valuedo.com/images/site_icons/profile.png) left 2px no-repeat; 
}
.memberaction_body.popupbody li .siteicon_forum { 
	background:url(https://vmd1.valuedo.com/images/site_icons/forum.png) left 2px no-repeat; 
}
.memberaction_body.popupbody li .siteicon_message { 
	background:url(https://vmd1.valuedo.com/images/site_icons/message.png) left 2px no-repeat; 
}
.memberaction_body.popupbody li .siteicon_blog { 
	background:url(https://vmd1.valuedo.com/images/site_icons/blog.png) left 2px no-repeat; 
}
.memberaction_body.popupbody li .siteicon_homepage { 
	background:url(https://vmd1.valuedo.com/images/site_icons/homepage.png) left 2px no-repeat; 
}
.memberaction_body.popupbody li .siteicon_article { 
	background:url(https://vmd1.valuedo.com/images/site_icons/article.png) left 2px no-repeat; 
}
.memberaction_body.popupbody li .siteicon_add { 
	background:url(https://vmd1.valuedo.com/images/site_icons/add.png) left 2px no-repeat; 
}
.memberaction_body.popupbody li .siteicon_email { 
	background:url(https://vmd1.valuedo.com/images/site_icons/email.png) left 2px no-repeat; 
}

.memberaction_body.popupbody li > a {
	padding: 4px;
	padding-left:20px;
}
.memberaction_body.popupbody hr {
	float: left;
	height: 96px;
	width: 0;
	display: inline;
}

.popupbody li.formsubmit .submitoptions label, 
.popupbody li.formsubmit .advancedsearchlink a {
	background:transparent;
	color: #3E3E3E;
}

/*
Copyright (c) 2009, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.7.0
*/
html{color:#000;background:#FFF;}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,button,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,cite,code,dfn,em,strong,th,var,optgroup{font-style:inherit;font-weight:inherit;}del,ins{text-decoration:none;}li{list-style:none;}caption,th{text-align: left;}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}q:before,q:after{content:'';}abbr,acronym{border:0;font-variant:normal;}sup{vertical-align:baseline;}sub{vertical-align:baseline;}legend{color:#000;}input,button,textarea,select,optgroup,option{font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;}input,button,textarea,select{*font-size:100%;}body{font:13px/1.231 arial,helvetica,clean,sans-serif;*font-size:small;*font:x-small;}select,input,button,textarea,button{font:99% arial,helvetica,clean,sans-serif;}table{font-size:inherit;font:100%;}pre,code,kbd,samp,tt{font-family:monospace;*font-size:108%;line-height:100%;}


/* CSS Document */

/*THIS*/

html {
	background:#e9e9e9 none   ;
	
}

/* REVERSE SOME YUI RESET STUFF */
em {}
strong {}

/* BASIC PAGE ELEMENTS */

body {
	width:auto;
	min-width:650px;
	max-width:auto;
	margin: 0px 35px 0px 35px;
	font-size:13px;
	color:#3e3e3e;
	line-height:1.230;
}

a:active, a:focus {
	outline: 0;
}

body a {
	color:#417394;
	text-decoration:none;
}
body a:hover,
body a:hover .time,
body a:hover .shade,
body a:hover .understate {
	color:#417394;
	text-decoration:underline;
}

body a.understate,
body a .understate {
	color:inherit;
	text-decoration:none;
	*clear:expression(style.color = parentNode.currentStyle.color, style.clear = "none", 0);
}

.body_wrapper {
	padding: 10px 20px 10px 20px;
	background: rgb(255, 255, 255) none   ;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}

input,
textarea,
button,
select {
	font-family:Tahoma, Calibri, Verdana, Geneva, sans-serif;
}

.button {
	padding: 2.5px 5px;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	border:1px solid #a8a8a8;
	color:#424242;
	background:#e9e9e9 url(https://vmd0.valuedo.com/images/gradients/generic_button.png) repeat-x top left;
	-moz-border-radius:0px;
	-webkit-border-radius:0px;
	border-radius:0px;
}

.button:hover {
	background: #efefef url(https://vmd0.valuedo.com/images/gradients/generic_button.png) repeat-x  ;
	color: #424242;
}
body,
legend {
	font-family:Tahoma, Calibri, Verdana, Geneva, sans-serif;
}

.shade {
	color:#777777;
}

.time {
	color:#3e3e3e;
}

.nocss_label {
	display:none;
}

.normal {
	font-size:13px;
	font-weight:normal;
}

/* BLOCK STUFF */

.block {
	clear:both;
}

.blockhead {
	font:  normal 12px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	color:#ffffff;
	background:#7192a8 url(https://vmd0.valuedo.com/images/buttons/newbtn_middle.png) repeat-x  ;
	_background-image: none;
	padding:4px 10px 4px 10px;
	border:1px solid #5a7f97;
	-moz-border-radius-topright: 5px;
	-moz-border-radius-topleft: 5px;
	-webkit-border-top-right-radius: 5px;
	-webkit-border-top-left-radius: 5px;
	border-top-right-radius: 5px;
	border-top-left-radius: 5px;
}

.blockhead h2 {
	font-weight:bold;
}

.blockhead a { color:#ffffff; }
.blockhead a:hover { color:#ffffff; }

.blockhead img {
	margin-bottom: -4px;
}

.blocksubhead {
	font:  normal 12px ;
	color:#3e3e3e;
	background:#e9e9e9 none repeat-x  ;
	padding:4px 10px 4px 10px;
	border-top:1px solid #cecece;
}



.blocksubhead img {
	vertical-align:middle;
}

.blocksubhead a { color:#417394; text-decoration:none; }
.blocksubhead a:hover { color:#417394; }

.blockhead_info, .blocksubhead_info {
	float:right;
	font-weight:normal;
}

/*.blockhead + */.blockbody { /* not sure why I had this .blockhead + .blockbody selector... need to look out for breakage */
	background:rgb(255, 255, 255) none no-repeat  ;
	padding-left:0px;
	padding-right:0px;
}

.blockrow {
	background:#F3F7F9 none   ;
	padding:5px 10px 5px 10px;
	border:  ;
	color:;
	font:    ;
}

.blockrow a { color:; }
.blockrow a:hover { color:; }

.blockfoot, .blocksubfoot {
	display:block;
	clear:both;
	background:#ffffff none   ;
	padding:5px 0px 5px 0px;
	border:0  rgb(102, 204, 0);
	color:;
	font:    ;

}

.blockfoot a { color:; }
.blockfoot a:hover { color:; }

.blockfootpad {
	clear:both;
	padding:5px 0px 5px 0px;
}

.blocksubfoot {
	text-align:right;
}
/* END BLOCK STUFF */

/* WYSIWYG */
.wysiwyg_block {
	margin-bottom: 10px;
}

.wysiwyg_block .formcontrols .blockrow {
	border-top: 0;
}

/* CSS TABLE STUFF */
.table { display:table; table-layout:fixed; }
.thead { width:100%; padding:0; display: table-row; }
.tr    { display:table-row; }
.td    { display:table-cell; }

/* PAGINATION LINKS */

.pagination span {
	display: block;
	float: left;
	clear: right;
}

.pagination span a {
	font:  normal 13px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	border: 1px solid #cedfeb;
	height: 15.99px;
	padding: 2px 4px;
	margin-left: 1px;
	background:#f2f6f8 none   ;
	text-decoration:none;
	color: #417394;
}

.pagination span a:hover {
	border: 1px solid #417394;
}

.pagination span.prev_next a, .pagination span.first_last a {
	position: relative;
	top: -2px;
}

.pagination span.prev_next a img, .pagination span.first_last a img {
	position: relative;
	display: inline;
	top: 3px;
}
.pagination dt.label {
	display:none;
}

.pagination span.selected a {
	background: #759fbb url(https://vmd0.valuedo.com/images/buttons/newbtn_middle.png) repeat-x  ;
	color: #ffffff;
	border: 1px solid #417394;
	height: 15.99px;
	font-weight:bold;
	padding: 2px 4px;
	margin-left: 1px;
}

.pagination .separator,
.pagination .elipsis {
	background: none;
	border: 0;
}

.pagination .separator:hover {
	border: 0;
}

.pagination li.jumptopage {
	text-align:center;
}


.pagination span a.popupctrl {
	height: 15.99px;
	background: #f2f6f8 url(https://vmd0.valuedo.com/images/misc/black_downward_arrow.png) no-repeat center left;
	padding-right: 4px;
	padding-left: 18px;
}

.pagination .popupmenu:hover a.popupctrl {
	border: 1px solid #417394;
	color: #3e3e3e;
}

/* TEXT CONTROLS */

.cke_skin_kama .cke_dialog_contents a.cke_dialog_ui_button_ok,
.cke_skin_kama .cke_dialog_contents a.cke_dialog_ui_button_cancel,
.textcontrols a,
a.textcontrol {
	position:relative;
	padding: 3px 5px;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	line-height: 1.230;
	text-decoration:none;
	border: 1px solid #a8a8a8;
	color: #424242;
	background:#e9e9e9 url(https://vmd0.valuedo.com/images/gradients/generic_button.png) repeat-x top left;
	-moz-border-radius:0px;
	-webkit-border-radius:0px;
	border-radius:0px;
}

.cke_skin_kama .cke_dialog_footer_buttons span.cke_dialog_ui_button {
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	color: #424242;
}

.textcontrols a img,
a.textcontrol img {
	position:absolute;
	bottom:2px;
	left:-2px;
}

.textcontrols a:hover img,
a:hover.textcontrol img {
	position: absolute;
	bottom:2px;
	left:-2px;
}

.textcontrols a:hover,
a:hover.textcontrol {
	background:#efefef url(https://vmd0.valuedo.com/images/gradients/generic_button.png) repeat-x  ;
	text-decoration:none;
	color: #417394;
}

.textcontrols a:hover,
a:hover.textcontrol {
	text-decoration:none;
}

.blockhead a.textcontrol {
	float:right;
	font:  bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	margin-top: -4.5px;
	text-transform: none;
}

.blockhead a.textcontrol:hover {
	color: #417394;
}

/* FORUMJUMP (navpopup) */

.navpopupmenu {
	text-align:right;
	float: right;
	display:block;
	padding: 0;
	padding-top: 3px;
	clear: left;
	margin-left: 10px;
	font-size: 12px;
	margin-top: 0;
}

* html .navpopupmenu.popupmenu.nohovermenu a.textcontrol, .navpopupmenu a.textcontrol, .navpopupmenu a.popupctrl, .navpopupmenu.popupmenu.nohovermenu a.textcontrol, .navpopupmenu.popupmenu.nohovermenu a.popupctrl {
	text-decoration:none;
	color: #424242;
	border: 1px solid #a8a8a8;
	background: #e9e9e9 url(https://vmd0.valuedo.com/images/gradients/generic_button.png) repeat-x top left;
	_background-image: none;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	padding: 3.3333333333333px 6.6666666666667px;
	-moz-border-radius: 0px;
	-webkit-border-radius: 0px;
	border-radius: 0px;
}

.navpopupmenu a.textcontrol:hover, .navpopupmenu a.popupctrl:hover, .navpopupmenu.popupmenu.nohovermenu a.textcontrol:hover, .navpopupmenu.popupmenu.nohovermenu a.popupctrl:hover {
        background: #efefef url(https://vmd0.valuedo.com/images/gradients/generic_button.png) repeat-x  ;
        color: #417394;
        _background-image: none;
}

.navpopupmenu .popupctrl .ctrlcontainer {
	background: transparent url(https://vmd0.valuedo.com/images/misc/black_downward_arrow.png) no-repeat center left;
	padding-left: 15px;
	white-space:nowrap;
}

.navpopupbody {
	width:auto;
	max-height:350px;
	text-align:left;
	*overflow:auto;
	overflow-y:scroll;
	left:auto;
	right:0;
}

.navpopupbody li {
	overflow:hidden;
	min-width: 200px;
}

.navpopupbody li.optionlabel {
	text-align:center;
	font-weight:bold;
	color: #3E3E3E;
}

/**
* Not pretty, but it works...
*/

.navpopupbody .d1  a { text-indent:20px; }
.navpopupbody .d2  a { text-indent:40px; }
.navpopupbody .d3  a { text-indent:60px; }
.navpopupbody .d4  a { text-indent:80px; }
.navpopupbody .d5  a { text-indent:100px; }
.navpopupbody .d6  a { text-indent:120px; }
.navpopupbody .d7  a { text-indent:140px; }
.navpopupbody .d8  a { text-indent:160px; }
.navpopupbody .d9  a { text-indent:180px; }
.navpopupbody .d10 a { text-indent:200px; }
.navpopupbody .d11 a { text-indent:220px; }
.navpopupbody .d12 a { text-indent:240px; }
.navpopupbody .d13 a { text-indent:260px; }
.navpopupbody .d14 a { text-indent:280px; }
.navpopupbody .d15 a { text-indent:300px; }
.navpopupbody .d16 a { text-indent:320px; }
.navpopupbody .d17 a { text-indent:340px; }
.navpopupbody .d18 a { text-indent:360px; }
.navpopupbody .d19 a { text-indent:380px; }
.navpopupbody .d20 a { text-indent:400px; }

/* LEFT / RIGHT DT+DD */

dl.stats.totals {
	float:right;
	padding:5px;
}

dl.stats dt {
	display:inline;
	color:#777777;
}
dl.stats dt:after {
	content:":";
}
dl.stats dd {
	display:inline;
}

/* BLOCK STATS */
dl.statsblock dt {
	display:block;
	float:left;
	clear:left;
	width:25%;
}

dl.statsblock dd {
	display:block;
	float:left;
	margin-left:10px;
}

/* LIGHT-TABS */

dl.tabslight {
	border-bottom:solid 1px #6b91ab;
	padding-left:20px;
	margin-bottom:1em;
	height:26;
	margin-top:15px;
}

dl.tabslight dt {
	display:none;
}

dl.tabslight dd {
	float:left;
}

dl.tabslight dd a {
	font-size:11px;
	font-weight:bold;
	color:#3e3e3e;
	text-decoration:none;
	text-align:center;

	padding:0 10px;
	min-width:55px;
	height:25px;
	line-height:25px;
	display:block;

	border:1px solid #6b91ab;
	background-color:#e9e9e9;

	margin-left:-1px;
	margin-bottom:-1px;

	-moz-border-radius-topleft:5px;
	-moz-border-radius-topright:11px;
	-webkit-border-top-left-radius:3px;
	-webkit-border-top-right-radius:11px;
	border-top-left-radius:3px;
	border-top-right-radius:11px;
}

html>/**/body dl.tabslight dd.selected a,
html>/**/body dl.tabslight dd.selected a:hover {
	position:relative;
	border-bottom: 1px solid transparent;
	background:#f1f3f8 none   ;
}
* dl.tabslight dd.selected a, * dl.tabslight dd.selected a:hover {
	border-bottom: 1px solid transparent;
	background:#f1f3f8 none   ;
}

dl.tabslight dd a:hover {
	color:#417394;
	background:#f1f3f8 none   ;
}

/* COLUMN SORT LINKS */

.columnsort a,
.columnsort span {
	display:block;
	text-decoration:none;
	white-space:nowrap;
	text-align: left;
}

.columnsort a:hover {
	background-color:#FFEB90;
	text-decoration:none;
	color:inherit;
}

tr.columnsort th {
	white-space:nowrap;
}

/* MISC */

div.collapse {
	position:relative;
}

a.collapse {
	float:right;
	right:10px;
	top:20px;
	position:absolute;
}

.blockhead a.collapse {
	top: 10px;
}

#forumrules {
	margin-bottom: 10px;
	border-bottom: 1px solid #c4c4c4;
	border-left: 1px solid #c4c4c4;
	border-right: 1px solid #c4c4c4;
	border-top: 1px solid #F3F7F9;
	background: #F3F7F9 url(https://vmd0.valuedo.com/images/gradients/gradient-greytowhite.png) repeat-x  ;
}

#forumrules ul.youcandoblock {
	float:left;
	width:55%;
	overflow:hidden;
	margin: 0 10px 10px 0;
}

#forumrules ul.bbcodeblock {
	float:right;
	width:42%;
	text-align:right;
	overflow:hidden;
}

#forumrules .rules_link {
	margin-top: 10px;
	width: 42%;
	padding-left: 55%;
}

.errorblock ul.blockrow.error > li {
	border-bottom:solid 1px #cedfeb;
	padding-bottom:10px;
	margin-bottom:10px;
}

.errorblock ul.blockrow.error li:last-child {
	border-bottom:none;
	padding-bottom:0;
	margin-bottom:0;
}

blockquote.preview {
	font:   13px Tahoma,Calibri,Verdana,Geneva,sans-serif;
}

blockquote.preview ul, blockquote.preview ol, blockquote.preview dl {
	margin:0 40px;
}

blockquote.preview.forumcontent {
	font:   13px Verdana,Arial,Tahoma,Calibri,Geneva,sans-serif;
}

blockquote.preview .bbcode_container div.bbcode_code,
blockquote.preview .bbcode_container pre.bbcode_code {
	margin:0;
	padding:6px;
	border:1px inset;
	text-align:left;
	overflow:auto;
	direction:ltr;
	background:#f2f6f8 none repeat-x  ;
	font-size:12px;
}

blockquote.preview .bbcode_container code.bbcode_code {
	margin:0;
	text-align:left;
	direction:ltr;
	font-size:12px;
}

blockquote.preview .bbcode_container code.bbcode_code code {
	white-space:nowrap;
}

blockquote.preview fieldset.postattachlist {
	background:#FFFFFF none repeat-x center bottom;
	border-top:solid 1px #cedfeb;
	padding-bottom:1em;
}

blockquote.preview .bbcode_container div.bbcode_quote {
	margin:0 10px;
	margin-bottom: 10px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	background: #f2f6f8 none   ;
	border-radius: 5px;
	border: 1px solid #417394;
	font: italic  normal 13px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	position: relative;
	top: 0;
}


blockquote.preview .bbcode_container .bbcode_quote_container {
	background: transparent url(https://vmd0.valuedo.com/images/misc/quote-left.png) no-repeat  left;
	display:block;
	width: 9px;
	height: 13px;
	position: absolute;
	top: 5;
	left: -9px;
}

blockquote.preview .bbcode_quote div.quote_container {
	border-top: 1px solid #fafafa;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	padding: 5px 10px 5px 10px;
}

.attachments {
	border: 1px solid #cecece;
	background: #ececec none   ;
	margin: 20px 30px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	padding: 5px 10px 5px 10px;
	font-size: 12px;
}

.attachments fieldset {
	margin: 5px 0;
}

.attachments img.inlineimg {
	position: relative;
	top: 2px;
}


blockquote.preview .signature {
	margin-top:1.5em;
	border-top:1px solid #c4c4c4;
	padding-top:0.5em;
}

.commalist li {
	display:inline-block;
}

.standard_error {
	max-width:600px;
	margin:0 auto;
	padding:4em 0 6em;
}

.hidden {
	display: none !important;
}

/* Auto-clearing of floats */
.floatcontainer:after,
.formcontrols .blockrow:after,
dl.stats:after {
	content:".";
	display:block;
	height:0;
	clear:both;
	visibility:hidden;
}
.floatcontainer,
.formcontrols .blockrow,
dl.stats {
	display:inline-block;
	font-weight:normal;
}
/* IE-Mac hide \*/
* html .floatcontainer,
.formcontrols .blockrow,
dl.stats {
	height:1%;
}
.floatcontainer,
.formcontrols .blockrow,
dl.stats {
	display:block;
}
.floatcontainer.hidden {
	display:none;
}
/* End IE-Mac hide */


/* INLINEMOD */

#inlinemod_formctrls {
	float:right;
}

#inlinemod_formctrls .popupctrl {
	top: -5px;
	position: inherit;
	text-decoration:none;
	background: #e9e9e9 url(https://vmd0.valuedo.com/images/gradients/generic_button.png) repeat-x top left;
	padding-right: 0;
	color: #424242;
	border: 1px solid #a8a8a8;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	float: left;
	-moz-border-radius:0px;
	-webkit-border-radius:0px;
	border-radius:0px;
}

#inlinemod_formctrls a.popupctrl:hover {
	background: #efefef url(https://vmd0.valuedo.com/images/gradients/generic_button.png) repeat-x  ;
	color: #417394;
}

#inlinemod_formctrls a.popupctrl span.ctrlcontainer {
	display:inline-block;
	background: transparent url(https://vmd0.valuedo.com/images/misc/black_downward_arrow.png) no-repeat center left;
	padding-top: 3.3333333333333px;
	padding-right: 5px;
	padding-bottom: 3.3333333333333px;
	padding-left: 15px;
	font-size: 11px;
	float: left;
}

#inlinemod_formctrls .popupbody {
	left:auto;
	right:0px;
}


/* FORUM DISABLED */
div.forum_disabled {
	text-align:center;
	color:red;
	background-color:white;
	padding:10px;
	font-size:20px;
}

/**
* UN-RESET
*
* These definitions are designed to undo the effects of YUI Reset, but only when contained within a *.reset element.
* Code is based on YUI Base
*/

/*
Copyright (c) 2009, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.7.0
*/
/**
 * YUI Base
 * @module base
 * @namespace yui-
 * @requires reset, fonts
*/

.restore body {
	/* For breathing room between content and viewport. */
	margin:10px;
}

.restore h1 {
	/* 18px via YUI Fonts CSS foundation. */
	font-size: 138.5%;
}

.restore h2 {
	/* 16px via YUI Fonts CSS foundation. */
	font-size: 123.1%;
}

.restore h3 {
	/* 14px via YUI Fonts CSS foundation. */
	font-size: 108%;
}

.restore h1,
.restore h2,
.restore h3 {
	/* Top & bottom margin based on font size. */
	margin: 1em 0;
}

.restore h1,
.restore h2,
.restore h3,
.restore h4,
.restore h5,
.restore h6,
.restore strong,
.restore dt {
	/* Bringing boldness back to headers and the strong element. */
	font-weight: bold;
}
.restore optgroup {
	font-weight:normal;
}

.restore abbr,
.restore acronym {
	/* Indicating to users that more info is available. */
	border-bottom: 1px dotted #000;
	cursor: help;
}

.restore em {
	/* Bringing italics back to the em element. */
	font-style: italic;
}

.restore del {
	/* Striking deleted phrases. */
	text-decoration: line-through;
}

.restore blockquote,
.restore ul,
.restore ol,
.restore dl {
	/* Giving blockquotes and lists room to breath. */
	margin: 1em;
}

.restore ol,
.restore ul,
.restore dl {
	/* Bringing lists on to the page with breathing room. */
	margin-left: 2em;
}

.restore ol > li,
.restore ol.decimal > li {
	list-style:decimal outside;
}

.restore ol.upper-roman > li {
	list-style:upper-roman outside;
}

.restore ol.lower-roman > li {
	list-style:lower-roman outside;
}

.restore ol.upper-alpha > li {
	list-style:upper-alpha outside;
}

.restore ol.lower-alpha > li {
	list-style:lower-alpha outside;
}

.restore ul > li {
	/* Giving UL's LIs generated disc markers. */
	list-style: disc outside;
}

.restore dl dd {
	/* Giving UL's LIs generated numbers. */
	margin-left: 1em;
}

.restore th,
.restore td {
	/* Borders and padding to make the table readable. */
	border: 1px solid #000000;
	padding: 0.5em;
}

.restore th {
	/* Distinguishing table headers from data cells. */
	font-weight: bold;
	text-align: center;
}

.restore caption {
	/* Coordinated margin to match cell's padding. */
	margin-bottom: .5em;
	/* Centered so it doesn't blend in to other content. */
	text-align: center;
}

.restore sup {
	/* to preserve line-height and selector appearance */
	vertical-align: super;
}

.restore sub {
	/* to preserve line-height and selector appearance */
	vertical-align: sub;
}

.restore p,
.restore fieldset,
.restore table,
.restore pre {
	/* So things don't run into each other. */
	margin-bottom: 1em;
}
/* Opera requires 1px of passing to render with contemporary native chrome */
.restore button,
.restore input[type="checkbox"],
.restore input[type="radio"],
.restore input[type="reset"],
.restore input[type="submit"] {
	padding:1px;
}

.restore li > p {
	margin-bottom: 0em;
}

.unread {
	font-weight:bold;
}

/* Cloud tags */
li.tag {
	display:inline;
	margin-right:5px;
}

li.tag label.mine {
	font-weight:bold;
}

li.tag a {
	text-decoration:none;
}

li.taglevel1 {
	font-size:9px;
}

li.taglevel2 {
	font-size:12px;
}

li.taglevel3 {
	font-size:15px;
}

li.taglevel4 {
	font-size:18px;
}

li.taglevel5 {
	font-size: 21px;
}

li.tag.option {
	padding:10px;
}

/* Tag Controls */
/* Tagging Controls */

#thread_tags_list input#tag_add_input {
	display:block;
	width:90%;
	margin-top:2px;
	margin-bottom:0.5em;
}

#thread_tags_list  .description {
	color:#777777;
}

#thread_tags_list  .actionbuttons {
	text-align:right;
	margin-bottom:1em;
}

#tag_edit_list {
	list-style:none;
	margin:0;
	padding:0;
}

#tag_edit_list li {
	float:left;
	display:block;
	width:100px;
}

#tag_edit_list li.mine {
	font-weight:bold;
}

/* We don't use class="inlineimg" in vB4
img.inlineimg {
	padding:0 10px;
}
*/


/* Social Bookmarks */

#social_bookmarks_list li {
	display:block;
	float:left;
	padding-left:10px;
}

/* Imagereg */
#imagereg {
	vertical-align:middle;
	margin-bottom:5px;
}


#wol_navpopup.navpopupmenu {
	margin-bottom:6px;
}
.navlinks {
	background: #f5f5f5 none   ;
	border-top: 1px solid #e7e7e7;
	padding: 10px 0;
	text-align: center;
	color: #5d5d5d;
	font-size: 13px;
        margin-top: 20px;
        margin-bottom: 20px;
width:100%;
clear:both;
}

.clear, .cleardiv {
	clear: both;
}

#ajax_post_errors {
	position:absolute;
	width:420px;
	z-index:500;
	padding:2px;
	background-color:#FFFFFF;
	-moz-border-radius-topright:5px;
	-moz-border-radius-topleft:5px;
	-webkit-border-top-right-radius:5px;
	-webkit-border-top-left-radius:5px;
	border-top-right-radius:5px;
	border-top-left-radius:5px;
}

#ajax_post_errors .blockrow {
	border-bottom:1px solid #c4c4c4;
	border-left:1px solid #c4c4c4;
	border-right:1px solid #c4c4c4;
}
#ajax_post_errors .blockfoot {
	text-align:center;
}

#ajax_post_errors_message ol {
	margin:1em;
	margin-left:2em;
}

#ajax_post_errors_message ol.numeric li,
#ajax_post_errors_message ol li {
	list-style-image:none;
	list-style-position:outside;
	list-style-type:decimal;
}

.highlight {
	color: #417394;
	background: #FFEB90 none repeat-x  ;
}

/* Facebook Section */
label#fb_pulishlabel {
	font-size:12px;
	font-weight: normal;
	margin-right: 10px;
	vertical-align: middle;
}

#fb_likeframe {
	border: none;
	overflow: hidden;
	height: 27px;
	width: 260px;
	vertical-align: text-bottom;
}
#pagetitle #fb_likeframe {
	float: right;
}
.blogbit #fb_likeframe {
	margin-top: 7px;
}

/* Fix for Facebook Connect rtl scrollbar */


#recaptcha_area {
	direction:ltr;
	display:inline;
}

#recaptcha_widget_div {
	float:left;
}

.member_blockrow .error 
{ 
        padding:4px 10px 4px 10px; 
}  

div.cms_table {
	overflow:auto;
	overflow-y:hidden;
	padding:1px;
}

table.cms_table_grid,
table.wysiwyg_cms_table_grid {
	border-collapse: collapse;
	margin-bottom:0;
}

td.cms_table_grid_td,
td.wysiwyg_cms_table_grid_td {
	border: 3px solid #999999;
}

table.cms_table_outer_border,
table.wysiwyg_cms_table_outer_border {
	border-collapse: collapse;
	border: 3px solid #999999;
}

td.cms_table_td,
td.cms_table_outer_border_td {
	border:none;
}

.content img {
	max-width: 100%;
}


/* CSS Document */

/**
* CHROME: HEADER, NAVBAR, BREADCRUMB, FOOTER
*/

/*************************************************/
/* HEADER */

.above_body {
	background:#B8C9D4 url(https://vmd1.valuedo.com/images/gradients/gradient-grey-down.png) repeat-x  ;
	margin: 0px 0px 10px 0px;
	padding: 0px 0px 0px 0px;
	-moz-border-radius-bottomleft:5px;
	-moz-border-radius-bottomright:5px;
	-webkit-border-bottom-left-radius:5px;
	-webkit-border-bottom-right-radius:5px;
	border-bottom-left-radius:5px;
	border-bottom-right-radius:5px;
}

.doc_header {
	border:  ;
	color:#5D7480;
	font:normal normal normal 11px Arial, Tahoma, Calibri, Verdana, Geneva, sans-serif;
	position:relative;
	min-height:35px;
}
.doc_header a { color:; }
.doc_header a:hover { color:; }
.doc_header hr { display: none; }
.logo-image {
        float: left;
        clear: right;
        min-height: 2em;
        height: auto !important;
        padding: 0 0 0 0;
}

.toplinks {
	position:absolute;
	right:20px;
	top:0;
	color:#ffffff;
	font: normal normal normal 11px Arial, Tahoma, Calibri, Verdana, Geneva, sans-serif;
	text-align:right;
	background: none   ;
}

.toplinks ul.isuser li#fb_headerbox.hidden,
.toplinks ul.nouser li#fb_headerbox.hidden {
	display: none;
}
.toplinks ul.isuser li#fb_headerbox a,
.toplinks ul.nouser li#fb_headerbox a {
	padding-top: 0;
	background: none;
	cursor: pointer;
}
	li#fb_headerbox a#fb_link {
		position: relative;
	}
	li#fb_headerbox a#fb_link #fb_squarepic{
		position:absolute;
		right:-6px;
		top:5px;
		z-index:1;
		border:1px solid #B3CCE7;
		padding:1px;
	}
	li#fb_headerbox a#fb_link #fb_icon{
		position:absolute;
		right:10px;
		top:1px;
		z-index:2;
	}

.toplinks ul.isuser, .toplinks ul.nouser {
	display:block;
	float: right;
	clear: left;
	list-style: none;
}

.toplinks ul.isuser li {
	display:inline;
	position: relative; 
	color: #5D7480;
	float: right;
	clear: left;
	padding-right: 10px;
        background:;
}

.toplinks ul.isuser .popupbody li {
	display:block;
	float: none;
	clear: none;
	padding:0;
	margin:0;
}

.toplinks ul.isuser li.welcomelink {
	display: block;
	float: right;
	clear: left;
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 4px;
	color: #FFFFFF;
}

.toplinks ul.isuser li.logoutlink {
	top: 0;
}

.toplinks ul.isuser li a {
	display: block;
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 4px;
	font-weight:bold;
	color:#ffffff;
}

.toplinks ul.isuser li li a {
	float: none;
	margin-left: 0;
}

.toplinks ul.isuser li.welcomelink a {
	display:inline;
	float: none;
	clear: none;
	margin-left: 0;
}

.toplinks ul.isuser li a:hover {
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 4px;
	background: #7192A8;
	color:rgb(255, 255, 255);
}

.toplinks ul.nouser li {
	display:inline;
}

.toplinks ul.nouser li a {
	display: block;
	float: right;
	clear: left;
	color:#ffffff;
	position: relative;
	padding: 6px 10px 0 10px;
	background: #7192A8;
	-moz-border-radius-bottomleft: 5px;
	-webkit-border-bottom-left-radius: 5px;
	border-bottom-left-radius: 5px;
	-moz-border-radius-bottomright:5px;
	-webkit-border-bottom-right-radius:5px;
	border-bottom-right-radius:5px;
	height:20px;
	font-weight:bold;
	font-size:12px;
	margin-right: 10px;
}

.toplinks ul.nouser li a:hover {
	background: #7192A8;
	color:rgb(255, 255, 255);
}

.toplinks ul.isuser li.popupmenu, .toplinks ul.isuser .notifications, .toplinks ul.isuser .nonotifications  {
	color: #000000;
	position: relative;
}

.toplinks ul.isuser li.popupmenu ul li {
	position: relative;
	top: 0;
	margin: 0;
	text-align: left;
}

.toplinks ul.isuser .notifications .popupbody {
	background: #7192A8;
	border: 1px solid #7192A8; /* makes it look consistent with the popup background */
}

.toplinks ul.isuser .notifications .popupbody li a{
	color: #000000;
	background:#FFFFFF none   ;
	padding: 0 5px;
	font-weight: normal;
	border-top:1px solid #7192A8; /* makes it look consistent with the popup background */
	text-align: left;
	padding-left: 30px;
	line-height: 26px;
}

.toplinks ul.isuser .notifications .popupbody li a span {
	position: absolute;
	line-height: 26px;
	left: 5px;
}

.toplinks ul.isuser .notifications .popupbody li a:hover {
	color: #000000;
	background:#FFEB90 none   ;
	text-decoration: underline;
}

.toplinks form {
	min-width: 220px;
	display:block;
	margin-right: 10px;
	text-align: left;
	float: right;
	clear: left;
}

.toplinks .logindetails {
	padding: 0 10px;
	text-align: center;
	background: #7192A8;
	-moz-border-radius-bottomleft: 5px;
	-webkit-border-bottom-left-radius: 5px;
	border-bottom-left-radius: 5px;
	-moz-border-radius-bottomright:5px;
	-webkit-border-bottom-right-radius:5px;
	border-bottom-right-radius:5px;
	height:26px;
}

.toplinks form input {
	margin: 3px 0 0;
	vertical-align: baseline;
	font-size: 11px;
	padding: 1px;
	border: 0;
}

.toplinks form input.textbox {
	color: #000000;
}

.toplinks form input.default-value {
	color: #777777;
}

.toplinks .remember {
	margin: -3.3333333333333px 0 0 20px;
	font-size: 10px;
	color: #FFFFFF;
}

.toplinks .remember input {
	vertical-align: baseline;
}

.toplinks ul.isuser .notifications .popupbody li{
	border-top:1px solid #7192A8;
}

.cb_cookieuser_navbar{
	position: relative;
	top: 2px;
}

.notifications a.popupctrl:link, .notifications a.popupctrl:visited,
.toplinks a:link, .toplinks a:visited {
	color: #ffffff;
	text-decoration:none;
}

.notifications {
	font-size:11px;
	color: #ffffff;
	-moz-border-radius-bottomleft: 5px;
	-webkit-border-bottom-left-radius: 5px;
	border-bottom-left-radius: 5px;
	-moz-border-radius-bottomright: 5px;
	-webkit-border-bottom-right-radius: 5px;
	border-bottom-right-radius: 5px;

}

.notifications a {
	text-decoration:none;
}

.notifications .popupbody {
	color:#000000;
	background: #FFFFFF none   ;
}

.header hr,
.header h2 {
	display:none;
}

/*************************************************/
/* NAVBAR */

.navbar {
	position:relative;
	height: 53px;
	background:#2f4456 none   ;
	margin:10px 0px 0px 0px;
	color:rgb(255, 255, 255);
	font:   11px Arial, Calibri, Verdana, Geneva, sans-serif;
	border:0px solid rgb(255, 255, 255);
	-moz-border-radius-bottomleft:5px;
	-moz-border-radius-bottomright:5px;
	-webkit-border-bottom-left-radius:5px;
	-webkit-border-bottom-right-radius:5px;
	border-bottom-left-radius:5px;
	border-bottom-right-radius:5px;
}
.navbar a { color:rgb(255, 255, 255); }
.navbar a:hover { color:rgb(255, 255, 255); }

.navtabs {
	background:#7192A8 url(https://vmd0.valuedo.com/images/buttons/newbtn_middle.png) repeat-x  ;
	padding: 0px 0px 0px 20px;
	height: 26px;
}

.navtabs li:first-child {
	border-left: 1px solid #5a7f97;
}

.navtabs ul {
/*	height: 26px; */
	position:absolute;
	top:26px;
	left:0px;
	width:100%;
	border-top:1px solid #5a7f97;
	-moz-border-radius-bottomleft:5px;
	-moz-border-radius-bottomright:5px;
	-webkit-border-bottom-left-radius:5px;
	-webkit-border-bottom-right-radius:5px;
	border-bottom-left-radius:5px;
	border-bottom-right-radius:5px;
	margin-right:-90px;
/* This is to fix RTL menu issue under Opera */
	direction:ltr;
}

.navtabs li {
	float:left;
	border-right: 1px solid #5a7f97;
}

.navtabs ul li:first-child {
	margin-left: 20px;
	border-left: 0;
}

#navtabs .popupmenu ul li:first-child {
	margin-left: 0px;
}

.navtabs ul li {
	border-right: 0;
	position: relative;
}

.navtabs li a {
	height:26px;
	line-height:26px;
	padding:0 10px;
}

.navtabs li a.navtab {
	border-top: 1px solid #Cedfeb;
	border-left: 1px solid #Cedfeb;
	display:block;
	background:#7192A8 url(https://vmd0.valuedo.com/images/buttons/newbtn_middle.png) repeat-x  ;
	min-width:70px;
	width:auto !important;
	width:70px;
	text-align:center;
	color: #ffffff;
	font:  bold 12px Arial, Calibri, Verdana, Geneva, sans-serif;
	text-decoration:none;
	line-height:26px;
	padding: 0 10px;
}

.navtabs li a.navtab:hover {
	background:#7192a8 url(https://vmd0.valuedo.com/images/gradients/selected-tab-gradient-with-top-alpha.png) repeat-x   0 -4px;
	color:#000000;
}

.navtabs li.selected {
	height:26px;
	color:#000000;
}

.navtabs li.selected a.navtab {
	color:#000000;
	background:#7192a8 url(https://vmd0.valuedo.com/images/gradients/selected-tab-gradient-with-top-alpha.png) repeat-x  ;
	position:relative;
	top:-4px;
	padding-top:4px;
	z-index:10;
}

.navtabs > ul.floatcontainer li a,
.navbar_advanced_search li a {
	text-decoration:none;
	font:   11px Arial, Calibri, Verdana, Geneva, sans-serif;
	line-height: 26px;
}

.navtabs > ul.floatcontainer li a {
	color:rgb(255, 255, 255);
	padding:2px 5px;
}

.navtabs > ul.floatcontainer ul.popupbody a {
    line-height: 26px;
}

.navbar_advanced_search li {
	height: 26px;
	display:block;
	clear:both;
}

.navbar_advanced_search li a {
	color:rgb(255, 255, 255);
}

.navbar_advanced_search li a:hover {
	color:rgb(255, 255, 255);
	text-decoration:underline;
}

.navtabs > ul.floatcontainer li a:hover {
	color:rgb(255, 255, 255);
	text-decoration:underline;
}

.navtabs > ul.floatcontainer .popupbody li a {
	text-indent: 0;
	color: #000000;
	background: #FFFFFF none   ;
	padding:0px 10px;
}

.navtabs > ul.floatcontainer .popupbody li a:hover {
	color: #000000;
	background: #FFEB90 none   ;
}

.navtabs > ul.floatcontainer li a.popupctrl {
	-moz-border-radius:3px;
	-webkit-border-radius:3px;	
	border-radius:3px;
	border:solid 1px transparent;
	background:transparent url(https://vmd0.valuedo.com/images/misc/arrow.png) no-repeat right center;
	padding-right:15px;
	color: rgb(255, 255, 255);
}


.navtabs li a.navtab.popupctrl img {
	padding-bottom:3px;
	vertical-align:middle;
}

.toplinks .notifications a.popupctrl {	
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 15px;
	background: #7192A8 url(https://vmd0.valuedo.com/images/misc/arrow.png) right center no-repeat ;
	-moz-border-radius-bottomleft: 5px;
	-moz-border-radius-bottomright: 5px;
	-webkit-border-bottom-right-radius:5px;
	-webkit-border-bottom-left-radius: 5px;
	border-bottom-right-radius:5px;
	border-bottom-left-radius: 5px;
}

.toplinks .nonotifications a.popupctrl {
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 15px;
	background: transparent url(https://vmd0.valuedo.com/images/misc/arrow.png) no-repeat right center;
}

.toplinks .notifications a.popupctrl:hover, .toplinks .nonotifications a.popupctrl:hover, .toplinks .nonotifications a.popupctrl.active , .toplinks .notifications a.popupctrl.active{
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 15px;
	background: #7192A8 url(https://vmd0.valuedo.com/images/misc/arrow.png) no-repeat right center;
}

.toplinks .notifications a.popupctrl:hover {
	padding-top: 3px;
}

.navtabs > ul.floatcontainer li:hover a.popupctrl {
	border-color:#2f4456;
	background-color:#7192A8;
	text-decoration:none;
}

.navtabs > ul.floatcontainer li:hover a.popupctrl.active,
.navtabs > ul.floatcontainer li a.popupctrl.active {
	border-color:#7192A8;
	background-color:#7192A8;
	color:rgb(255, 255, 255);
	border-radius: 3px 3px 0px 0px;
	text-decoration:none;
}

.navtabs .popupbody {
	border: 1px solid #7192A8;
	background: #7192A8;
	width: auto;
}

.navtabs .popupbody li {
	float:none;
	border-top: 1px solid #7192A8;
}

#navtabs .popupmenu ul, #navtabs .popupmenu ul li a {
	height: auto;
}

.nonotifications div.popupbody {
	min-width: 170px;
	width: auto !important;
	width: 170px;
	background: #7192A8;
	border: 1px solid #7192A8;
}

.nonotifications .popupbody p {
	color: #000000;
	background: #FFFFFF none   ;
	text-align: left;
	border-top: 1px solid #7192A8;
	padding: 0;
	text-indent: 5px;
	line-height: 26px;
	display:block;
}

.toplinks .nonotifications .popupbody a {
	color: #000000;
	background: #FFFFFF none   ;
	float: none;
	clear: none;
	padding: 0 5px;
	margin-left: 0;
	text-align: left;
	line-height: 26px;
}

.toplinks .nonotifications .popupbody a:hover {
	color: #000000;
	background:#FFEB90 none   ;
	text-decoration: underline;
	padding: 0 5px;
}

.globalsearch {
	position:absolute;
	width:180px;
	right: 20px;
	top: 0px;
	float: right;
	clear: left;
	text-align:right;
	line-height: 1.0em;
	display:block;
}

.navbar_search {
	position:relative;
	width: 180;
	right: -20px;
	display:block;
}

.navbar_search input {
	font-size: 11px;
	vertical-align:middle;
	padding: 1px;
	border:1px solid #6B91AB;
}

.globalsearch .textboxcontainer {
	height: 26px;
	border-left:1px solid #5a7f97;
	display:inline-block;
	float: left;
	text-align:center;
}

.globalsearch .textboxcontainer span {
	border-top: 1px solid #Cedfeb;
	border-left: 1px solid #Cedfeb;
	display: inline-block;
	height: 22px;
	padding-left: 2px;
	padding-right: 2px;
	padding-top: 3px;
	margin-bottom: 1px;
	width: 147px;
}

.globalsearch input.textbox {
	width: 120px;
}

.toplinks form input.loginbutton {
	font-size: 11px;
	padding: 0 5px;
	border:solid 1px rgb(65,93,141);
}

.globalsearch .buttoncontainer {
	height: 26px;
	border-left:1px solid #5a7f97;
	display:inline-block;
	border-right:1px solid #5a7f97;
	width: 25px;
	overflow: hidden;
	float: right;
}

.globalsearch .buttoncontainer span{
	border-top: 1px solid #Cedfeb;
	border-left: 1px solid #Cedfeb;
	height: 23px;
	padding-left: 4px;
	padding-top: 2.5px;
	display:inline-block;
}

.globalsearch .searchbutton {
	border: 0;
	padding: 0;
	width: 22px;
	margin-top: -2px;
	margin-left: -2px;
}

/*************************************************/
/* BREADCRUMB */

.breadcrumb .navbit {
	float:left;
	background-image:url(https://vmd0.valuedo.com/images/misc/navbit-arrow-right.png);
	background-position:right center;
	background-repeat:no-repeat;
	padding-right:10px;
	padding-left:3px;
}

.breadcrumb .navbit:first-child {
	padding-left:0;
}

.breadcrumb .navbit.lastnavbit {
	background: transparent;
}

.breadcrumb .navbit.lastnavbit span {
	float:left;
	background: transparent;
	padding-right:10px;
	padding-left:3px;
}

.breadcrumb .navbit > a, .breadcrumb .lastnavbit > span {
	display:block;
	padding:2px 4px;
	float:left;
	background-color:transparent;
	border:1px solid transparent;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;	
	border-radius:5px;	
}

.breadcrumb .navbit a {
	text-decoration:none;
}

.breadcrumb hr {
	display:none;
}

/*************************************************/
/* PAGE TITLE */
	
#pagetitle {
	padding:0px 0px 0px 0px;
	clear:both;
	padding-top: 5px;
	background: none   ;
	border:  ;
}
#pagetitle a { color:; }
#pagetitle a:hover { color:; }

#pagetitle h1 {
	color: inherit;
	font:normal normal bold 14px Tahoma, Calibri, Verdana, Geneva, sans-serif;
}

#pagetitle .description {
	color: inherit;
	font-size: 11.05px;
}

/*************************************************/
/* NEW CONTENT LINK */
.newcontent_textcontrol {
	background: #417394 url(https://vmd0.valuedo.com/images/buttons/newbtn_middle.png) repeat-x left top;
	_background-image: none;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border-radius: 10px;
	-moz-box-shadow: 0 3px 8px #dddddd;
	-webkit-box-shadow: 0 3px 8px #dddddd;
	box-shadow: 0 3px 8px #dddddd;
	font:   normal 14px Arial, sans-serif;
	color: rgb(255, 255, 255);
	padding: 4px 15px 4px 15px;
	border: 0  ;
	display:block;
	float: left;
	clear: right;
}

.newcontent_textcontrol span {
	font:  normal 14px Arial, sans-serif;
	font-size:15px;
	font-weight:bold;
	display:inline;
}

.newcontent_textcontrol:hover {
	background: #5b8dae url(https://vmd0.valuedo.com/images/buttons/newbtn_middle.png) repeat-x left top;
	color: rgb(255, 255, 255);
	text-decoration: none;
}


/*************************************************/
/* FOOTER */

.footer {
	clear:both;
	margin-top:15px;
	text-align:right;
	display:block;
	/*width: 100%; VBIV-10173*/

	-moz-box-shadow: -2px 2px 2px #c8c8c8;
	-webkit-box-shadow: -2px 2px 2px #c8c8c8;
	box-shadow: -2px 2px 2px #c8c8c8;

	background:#425769 none   ;
	padding:5px 0px 5px 0px;
	border:1px solid #425769;
	color:;
	font:  normal 13px Tahoma, Calibri, Verdana, Geneva, sans-serif;
}
.footer a { color:rgb(255, 255, 255); }
.footer a:hover { color:rgb(255, 255, 255); }


.footer_copyright,
.footer_morecopyright {
	padding-bottom:5px;
	color:rgb(102, 102, 102);
	font:  normal 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	margin-top: 10px;
	text-align:center;
	display:block;
}

.footer_time {
	color:rgb(102, 102, 102);
	font:  normal 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	padding-top:10px;
	text-align:center;
}

.footer_select {
	float:left;
	text-align:left;
	margin-left: 10px;
	margin-top: 0;
}

.footer_links {
	margin-right: 10px;
	margin-top: 2px;
}

.footer_links li {
	display:inline;
	margin-left:5px;
}

.below_body .time {
	color: #3e3e3e;
}

.notices {
	background: rgb(255, 255, 255);
	margin: 5px 0;
}

.notices li {
	background: #ffeb90 none   ;
	font-size: 12px;
	color: #3e3e3e;
	padding:5px 10px;
	margin-bottom:5px;

	-moz-box-shadow: -2px 2px 2px ;
	-webkit-box-shadow: -2px 2px 2px ;
	box-shadow: -2px 2px 2px ;

	text-align: left;
	clear:both;
}

.breadcrumb .navbithome {
	float: left;
	padding: 3.5px 0;
}
/* end styles for template: navbar */

/*************************************************/
/* ADS GLOBAL */
.ad_global_header {
}
#ad_global_header1 {
	float:left;
	clear:right;
	padding:0 0 0 0;
	margin:0 0 0 0;
}
#ad_global_header2 {
	float:left;
	padding:0 0 0 0;
	margin:0 0 0 0;
}
#ad_global_below_navbar {
	width:100%;
	padding:0 0 0 0;
	margin:0 0 0 0;
}
#ad_global_above_footer {
	width:100%;
	padding:0 0 0 0;
	margin:0 0 0 0;
	text-align:left;
	clear:both;
}
#ad_board_below_whats_going_on {
	width:100%;
	padding:0 0 0 0;
	margin:0 0 0 0;
	text-align:left;
}
#ad_thread_first_post_content {
	float:right;
	margin:0 0 0 0;
}
#ad_thread_last_post_content {
	float:right;
	margin:0 0 0 0;
	z-index: 1000;
}
.google_adsense_footer {
	clear:both;
}


/* CSS Document */

/* Use border box for form elements */
.formcontrols input,select,textarea {
	box-sizing:border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing:border-box;
}
.formcontrols input.textbox {
	height:25px;
	*height:12px;
}
.formcontrols .blocksubhead {
	font-weight:bold;
}

.vbform .blockhead {
	margin-top:2em;
}

.vbform .blockhead:first-child {
	margin-top:0;
}
.settings_form_top_border {
	border-top: 1px solid #6B91AB;
}
.blockbody.settings_form_border {
	border-right: 1px solid #6B91AB;
	border-left: 1px solid #6B91AB;
	border-bottom: 1px solid #6B91AB;
}
.vbform {
	clear:both;
	width:auto;
	max-width:100%;
	_width:100%;
	margin:0 auto 2em;
}

.formcontrols {
	border-right: 1px solid #6B91AB;
	border-left: 1px solid #6B91AB;
	border-bottom: 1px solid #6B91AB;
}

.formcontrols .blockrow {
	background:#FFFFFF none repeat-x center bottom;
	border-top:solid 1px #cedfeb;
	padding:10px 5px;
}

/* div.section is needed to resolve IE7 percentage width bug */
.formcontrols .section {
	padding:0 15px;
}

.formcontrols > *:first-child,
.formcontrols .blocksubhead + .blockrow,
.formcontrols .section .blockrow:first-child {
	border-top:none;
}

/* BASIC CONTROL STYLING */

.button {
	padding:2px 2px;
}

.button:hover {
	color:#417394;
}

.button[type="reset"]:hover {
	color:#417394;
}

.textbox, textarea, select {
	font:  normal 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	color:#000000;
	background:rgb(255, 255, 255) none   ;
	border:1px solid #6B91AB;
	padding:4px;
	outline:0;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
}

.textbox[disabled],
textarea[disabled] {
	font-style:italic;
	color:#777777;
}

.formcontrols .blockrow input.textbox:focus,
.formcontrols .blockrow textarea:focus {
	background: #f2f6f8 none   ;
}

/* INPUT / SELECT / TEXTAREA / GROUP */

form .rightcol {
	display:block;
	margin-left:212px;
	max-width:496px;
	*margin-left:0;
	float:none;
}

.blockbody.formcontrols .blockrow .rightcol * {
	margin-left:0;
	width:auto;
}

.blockbody.formcontrols .blockrow .rightcol .primary {
	width:50%;
}
.blockbody.formcontrols .blockrow .rightcol textarea.primary {
	width:70%;
}
.blockbody.formcontrols .blockrow .rightcol .description {
	width:auto;
}

.formcontrols .blockrow .primary {
	width:248px;
}
.formcontrols .blockrow .primary.full {
	max-width:100%;
	width:496px;
	float:left;
}

.formcontrols .blockrow .group {
	width:100%;
}

.formcontrols .blockrow .group li {
	margin-top:5px;
}
.formcontrols .blockrow .group li:first-child {
	margin-top:0;
}
.formcontrols .blockrow .group .textbox {
	width:248px;
}

.formcontrols .blockrow .primary.center {

}

.formcontrols .blockrow .primary.center img.icon {
	border:1px solid rgb(65,93,141);
}

.formcontrols .blockrow .titleprefix {
	float:left;
	margin-right:0.5em;
}

.formcontrols .blockrow * .group {
	width:auto;
	float:none;
}

.formcontrols .blockrow input.textbox[size] {
	width:auto;
}

.editor_textbox textarea {
	width:500px;
	max-width:98%;
	min-width:98%;
	height:200px;
	float:none;
}

.editor_textbox textarea, #ie8#fix {
	width:98%;
}

.formcontrols .blockrow input.numeric,
.formcontrols .blockrow select.numeric {
	text-align:right;
}

/* LABELS */

.formcontrols .blockrow label,
.formcontrols .blockrow .group.multifield label,
.formcontrols .blockrow .groupoption label {
	display:block;
	margin-bottom:2px;
}

.formcontrols .blockrow label {
	width:212px;
	float:left;
	font-size:13px;

}
.formcontrols .blockrow label.full {
	width:auto;
	float:none;
	font-weight:bold;
}

.formcontrols .blockrow label.floatlabel {
	margin-left: 10px;

}

.formcontrols .blockrow * label {
	/* undoes the above two rules */
	display:block;
	margin-bottom:auto;
	width:auto;
	float:none;
}

.formcontrols .blockrow .group li label,
.formcontrols .blockrow .group dt label {
	width:212px;
	float:left;
}

.formcontrols .blockrow .group.full li label,
.formcontrols .blockrow .group.full dt label {
	width:auto;
}



.formcontrols .blockrow .label {
	margin-bottom:8px;

}

.formcontrols .blockrow.singlecheck label {
	float:left;
}

.formcontrols fieldset.blockrow legend {
	margin:0;
	font-size:13px;
	font-weight:bold;
	padding-bottom:10px\9; /*IE Hack*/
}

/* DESCRIPTIONS */

.formcontrols .blockrow .description {
	color:#777777;
	font-size:11px;
	max-width:496px;
	margin-left:212px;
	overflow:hidden;
	line-height:150%;
	margin-bottom:5px;
}

.formcontrols .blockrow .group.multifield + .description {
	padding-top:1.3em;
}

.blockrow.texteditor .description {
	float:none;
	width:auto;
	margin-top:2px;
}

.formcontrols .blockrow .group.numeric + .description {
	/* descriptions to the right of numeric groups */
}

.formcontrols .blockrow .singledescription {
	display:block;
	clear:left;
	margin-bottom:10px;
}

/* CHECKBOX / RADIO EXCLUSIVE GROUPS */

.formcontrols .blockrow .group.checkradio {
	width:auto;
}

.formcontrols .blockrow .group.checkradio li label {
	float:none;
}

.formcontrols .blockrow .group.checkradio.full {
	width:100%;
}


.formcontrols .blockrow .group.checkradio.partial {
	width:212px;
}

.formcontrols .blockrow .group.checkradio.horizontal {
	height:30px;
}
.formcontrols .blockrow .group.checkradio.horizontal li label {
	float:left;
	padding-right:10px;
}

.formcontrols .blockrow .group.checkradio > li {
	margin-bottom:0.5em; /* maybe questionable */
}

/* MULTI-FIELD GROUPS (dd, mm, yyyy fields etc.) */

.formcontrols .blockrow .group.multifield li {
	float:left;
	margin-right:1em;
	margin-top:0;
}

/* Display multi-field controls vertically */
.formcontrols .blockrow .group.multifield.stacked li {
	float:none;
	margin-top:2px;
}

.formcontrols .blockrow .group.multifield label {
	margin-bottom:2px;
	display:block;
	float:none;
	width:auto;
}

.formcontrols .blockrow .group.multifield select,
.formcontrols .blockrow .group.multifield input.textbox {
	float:none;
}

/* NUMERIC GROUP (rgb color etc.) */

.formcontrols .blockrow .group.numeric {
	width:auto;
	*width:24%;
	max-width:212px;
	margin-right:2%;
}

.formcontrols .blockrow .group.numeric li {
	clear:both;
}

.formcontrols .blockrow .group.numeric label {
	float:left;
	margin-top:1px;
}

.formcontrols .blockrow .group.numeric input.textbox {
	float:right;
	text-align:right;
	margin-left:20px;
	margin-bottom:2px;
}

.formcontrols .blockrow .group.numeric .description {
	clear:both;
	text-align:right;
	margin:auto;
	margin-bottom:0.2em;
}

/* NUMERIC INPUT */

.formcontrols .blockrow input.textbox.numeric {
	text-align:right;
}

/* ACTION BUTTONS */

.formcontrols input.button,
.actionbuttons {
	max-width:100%;
}

.blockfoot.actionbuttons.redirect_button {
	background-color:transparent;
	padding-top:5px;
}
.blockfoot.actionbuttons.redirect_button  .group {
	padding-right: 0px;
}
.actionbuttons .group {
	float:none;
	text-align:right;
	padding: 0 10px 0 10px;
}

.vbform .actionbuttons .group {
	margin:0 auto;
	width:auto;
	max-width:100%;
	_width:100%;
}

.actionbuttons .small_text_buttons, .actionbuttons .small_text_buttons input.button {
    padding-left:10px;
    padding-right:10px;
}


.actionbuttons .group .button {
   	cursor:pointer;
	padding: 2.5px 5px;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	border:1px solid #a8a8a8;
	color:#424242;
	background:#e9e9e9 url(https://vmd0.valuedo.com/images/gradients/generic_button.png) repeat-x top left;
}

.actionbuttons .group .button:hover {
	background: #efefef url(https://vmd0.valuedo.com/images/gradients/generic_button.png) repeat-x  ;
	color: #417394;
}

/* *** SPECIAL ITEMS *** */

/* POST ICONS */

.formcontrols .blockrow #posticon_preview {
	width:16px;
	height:16px;
	margin-left:10px;
}

.formcontrols .blockrow.posticons table {
	max-width:100%;
	width:496px;
}

.formcontrols .blockrow.posticons td {
	padding:2px;
}

/* RATING SELECT */

.formcontrols .blockrow select.rating option {
	background-image:url(https://vmd1.valuedo.com/images/rating/rating-15_3.png);
	background-repeat:no-repeat;
	background-position:left center;
	padding-left:85px
}

/* DEP GROUPS */
.formcontrols .blockrow dl.dep_group dd, .formcontrols .blockrow .dep_group .deps {
	margin-left:1.5em;
	margin-top:0.5em;
	margin-bottom:0.2em;
}

.formcontrols .blockrow dl.dep_group dd dl.dep_group {
	/*margin-top:1em;*/ /* Handles the margin above sub-dependent controls, remove? */
}

input[type="submit"][disabled]#blog_deletebtn:active, input[type="submit"][disabled]#blog_deletebtn {
	color:graytext;
}

/* ATTACH FILES */

.formcontrols .blockrow .group.attachments li {
	margin-bottom:0.5em;
}

.formcontrols .blockrow .group.attachments li img {
	vertical-align:middle;
}

/* Upper / Lower comparison and IM FIELDS (AIM, Skype...) */

.formcontrols .group.upperlower li,
.formcontrols .group.imfields li {
	width:45%;
	padding-bottom:0.3em;
}

.formcontrols .group.upperlower li input.textbox,
.formcontrols .group.imfields li input.textbox,
.formcontrols .group.imfields li select {
	width:100%;
}

.formcontrols .group.imfields li select {
	margin-bottom:-0.3em;
}

/* Group of text controls */
.groupcontrols {
	text-align:right;
	clear:both;
	margin-bottom:5px;	
}

.groupcontrols .textcontrol {
	margin-left:10px;
	margin-top:0;
	display:inline-block;
}

/* Single Button */
.formcontrols .blockrow.singlebutton .button {
}

/* IE7 Float Fix */
.formcontrols .groupoption {
	display:block;
	clear:left;
}

/* DEBUG */
.group.radio,
.group.checkbox {
	background:#f2f6f8 none   ;
}

/* NEWEVENT.php TEMP */
.formcontrols .blockrow .group.checkradio .daycheckboxes li {
	float:left;
	padding-right:1em;
	padding-top:0.5em;
}

/*For the search, not worth creating a new css file*/
.savepreferences {
	float:left;text-align:left;width:49.5%;
}

/* Facebook Stuff */
.formcontrols #fbregbox.blockrow.hidden {
	visibility: hidden;
}

/* Fix for item 37360 */
#tag_list_cell .formcontrols .blockrow .group li label, #tag_list_cell .formcontrols .blockrow .group dt label { width: auto; }
#tag_edit_list li { clear: right; width: auto; margin-right: 10px;}
#tag_list_cell .formcontrols .blockrow .group li { margin-top: 0; }


.picker-holder
{
	display:block;
	text-align:center;
	margin:auto;
	top: 20px;
	background-color: #ffffff;
}


.picker{
	background-color: #aaaaaa;
	background: -moz-linear-gradient(#eeeeee,#999999);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(white), to(#aaaaaa) ); 
	display:block;
}


.lightgraybackground{
	background-color: #ffffff;
	background: -moz-linear-gradient(#ffffff,#cccccc);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(#ffffff), to(#cccccc) ); 
}


.centerbar
{
	position: absolute;
	width:2px;
	left: 50%;
}

.hbar
{
	height:2px;
	text-align:center;
	display:block;
	width:100%;
	margin-bottom: 4px;
}


.alert_box
{
	text-align:center;
	display:block;
	position:absolute;
	color: #222222;
	background-color: #aaaaaa;
	background: -moz-linear-gradient(#ffffff, #888888);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(#ffffff), to(#888888) );
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border-radius: 10px;
	border: #000000 2px solid;
	z-index: 10;
}
.alert_box .hd
{
	text-align:center;
	display:none;
	color: #ffffff;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border-radius: 10px;
}

.alert_box .bd
{
	color: #222222;
	background: -moz-linear-gradient(#ffffff, #888888);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(#ffffff), to(#888888) );
	-moz-border-radius-topleft: 10px;
	-moz-border-radius-topright: 10px;
	-webkit-border-radius-topleft: 10px;
	-webkit-border-radius-topright: 10px;
}

.alert_box .ft
{
	text-align: right;
	background: -moz-linear-gradient(#888888, #000000);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(#888888), to(#000000) );
}

.alert_box .ft input.btn {
	display:none;
	padding-top: 4px;
	padding-bottom: 4px;
	text-align: center;
	margin: 4px 10px 4px 10px;
	color: #ffffff;
	background: -moz-linear-gradient(#888888, #000000);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(#888888), to(#000000) );
	border: 1px #ffffff solid;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	float: right;
	font-weight:bold;
}


.ok_button {
	display:none;
	padding-top: 4px;
	padding-bottom: 4px;
	text-align: center;
	width:80px;
	margin: 4px 10px 4px 10px;
	color: #ffffff;
	background: -moz-linear-gradient(#888888, #000000);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(#888888), to(#000000) );
	border: 1px #ffffff solid;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	float: right;
	font-weight:bold;
}

.attach_popup
{
	display: none;
	border: 1px #000000 solid;
	margin: 0px;
	padding: 0px;
	background-color: #aaaaaa;
	-moz-border-radius: 5px;
	border-radius: 5px;
}


.assetpicker_body
{
	display:block;
	width: 100%;
	background-color: #bbbbbb;
	background: -moz-linear-gradient(#ffffff,#999999);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(white), to(#aaaaaa) );
	padding: 5px;
}
.transparent
{
	background-color: transparent;

}

.grey_select_item
{
	background-color: #eeeeee;

}

.tall_select
{
	height: 30px;
}

.advad_468x60top
{
	position:absolute;
	top:28px;
	right:15px;
}
#advad_firstpost_ad {float:right;padding:0px 0px 10px 10px;}
#posts li.postbit:first-child .bbcode_container {padding-right:200px !important;}

/* For archive section */
div.pagebody #navbar
{
	min-height: 60px;
}
div.pagebody #navbar .advad_468x60top
{
	right:30px;
}

/* For adsense on archive section. */
#ad_archive_above_content1 {
	width: auto;
	margin-right: 5px;
}
#ad_archive_above_content2 {
	width: auto;
	margin-right: 5px;
}
.ad_archive_above_content3 {
	margin-left: 50px;
	background-color: #B8C9D4;
	float: right;
}

/*
Copyright (c) 2010, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.com/yui/license.html
version: 2.8.1
*/

/*
This is customzied, from the original version from http://developer.yahoo.com/yui/base/
*/

.sitecore_resettags , div.sitecore_resettags , #sitecore_resettags , div#sitecore_resettags {}

div.sitecore_resettags h1, div#sitecore_resettags h1 {font-size:138.5%;}

div.sitecore_resettags h2, div#sitecore_resettags h2 {font-size:123.1%;}

div.sitecore_resettags h3, div#sitecore_resettags h3 {font-size:108%;}

div.sitecore_resettags h1, div#sitecore_resettags h1,
div.sitecore_resettags h2, div#sitecore_resettags h2,
div.sitecore_resettags h3, div#sitecore_resettags h3 {margin:1em 0;}

div.sitecore_resettags h1, div#sitecore_resettags h1,
div.sitecore_resettags h2, div#sitecore_resettags h2,
div.sitecore_resettags h3, div#sitecore_resettags h3,
div.sitecore_resettags h4, div#sitecore_resettags h4,
div.sitecore_resettags h5, div#sitecore_resettags h5,
div.sitecore_resettags h6, div#sitecore_resettags h6,
div.sitecore_resettags strong, div#sitecore_resettags strong,
div.sitecore_resettags dt, div#sitecore_resettags dt {font-weight:bold;}

div.sitecore_resettags optgroup, div#sitecore_resettags optgroup {font-weight:bold;}
div.sitecore_resettags optgroup option, div#sitecore_resettags optgroup option{font-weight:normal;}

div.sitecore_resettags abbr, div#sitecore_resettags abbr,
div.sitecore_resettags acronym, div#sitecore_resettags acronym {border-bottom:1px dotted #000;cursor:help;}

div.sitecore_resettags em, div#sitecore_resettags em {font-style:italic;}

div.sitecore_resettags del, div#sitecore_resettags del {text-decoration:line-through;}

div.sitecore_resettags bloclquote, div#sitecore_resettags blockquote,
div.sitecore_resettags ul, div#sitecore_resettags ul,
div.sitecore_resettags ol, div#sitecore_resettags ol,
div.sitecore_resettags dl, div#sitecore_resettags dl {margin:1em;}

div.sitecore_resettags ol, div#sitecore_resettags ol,
div.sitecore_resettags ul, div#sitecore_resettags ul,
div.sitecore_resettags dl, div#sitecore_resettags dl {margin-left:2em;}

div.sitecore_resettags ol li, div#sitecore_resettags ol li {list-style:decimal outside;margin-bottom:0.5em;}

div.sitecore_resettags ul li, div#sitecore_resettags ul li {list-style:disc outside;;margin-bottom:0.5em;}

div.sitecore_resettags dl dd, div#sitecore_resettags dl dd {margin-left:1em;}

div.sitecore_resettags table, div#sitecore_resettags table {display:table;/*border:none 0px #000000;*/}

div.sitecore_resettags tbody, div#sitecore_resettags tbody {display:table-row-group;/*border:none 0px #000000;*/}

div.sitecore_resettags tr, div#sitecore_resettags tr {display:table-row;/*border:none 0px #000000;*/}

div.sitecore_resettags th, div#sitecore_resettags th,
div.sitecore_resettags td, div#sitecore_resettags td {/*border:1px solid #000;*/padding:.5em;display:table-cell; white-space:normal;word-wrap:break-word;/*text-align:left;vertical-align:middle;border:none 0px #000000;*/}

div.sitecore_resettags th, div#sitecore_resettags th {font-weight:bold;}

div.sitecore_resettags th:not([align]), div#sitecore_resettags th:not([align]) {text-align:center;}

div.sitecore_resettags caption, div#sitecore_resettags caption {margin-bottom:.5em;text-align:center;}

div.sitecore_resettags sup, div#sitecore_resettags sup {vertical-align:super;}

div.sitecore_resettags sub, div#sitecore_resettags sub {vertical-align:sub;}

div.sitecore_resettags p, div#sitecore_resettags p,
div.sitecore_resettags fieldset, div#sitecore_resettags fieldset,
div.sitecore_resettags table, div#sitecore_resettags table,
div.sitecore_resettags pre, div#sitecore_resettags pre {margin-bottom:1em;}

div.sitecore_resettags button, div#sitecore_resettags button,
div.sitecore_resettags input[type="checkbox"], div#sitecore_resettags input[type="checkbox"],
div.sitecore_resettags input[type="radio"], div#sitecore_resettags input[type="radio"],
div.sitecore_resettags input[type="reset"], div#sitecore_resettags input[type="reset"],
div.sitecore_resettags input[type="submit"], div#sitecore_resettags input[type="submit"] {padding:1px;}

div.sitecore_resettags fieldset, div#sitecore_resettags fieldset,
div.sitecore_resettags .fieldset, div#sitecore_resettags .fieldset
{
	border:1px #848484 solid;
	-moz-border-radius:5px;
	padding:10px;
}

div.sitecore_resettags fieldset legend, div#sitecore_resettags fieldset legend
{
	padding-left:5px;
	padding-right:5px;
}



/*div#portal li {list-style: disc inside none;margin-left:15px}*/


strong
{
	font-weight:bold !important;
}

.alt1, .blockrow.alt1
{
	background: #FAFAFA url(https://vmd1.valuedo.com/images/gradients/grey-up.png) repeat-x left bottom;
}

.alt2, .blockrow.alt2
{
	background: #F3F7F9 url(https://vmd1.valuedo.com/images/gradients/grey-up.png) repeat-x left bottom;
}

.alt3, .blockrow.alt3
{
	background: #f5f5f5 none   ;
}

.alt4, .blockrow.alt4
{
	background: #7192a8 url(https://vmd0.valuedo.com/images/buttons/newbtn_middle.png) repeat-x  ;
}

.tborder
{
	display:table;
	table-layout:fixed;
	border: 1px solid #cecece;
	-moz-box-shadow: -2px 2px 2px #c8c8c8;
	-webkit-box-shadow: -2px 2px 2px #c8c8c8;
}

.tcat
{
	font:   bold 12px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	background: #e9e9e9 url(https://vmd0.valuedo.com/images/buttons/newbtn_middle.png) repeat-x  ;
	border: 1px solid #cecece;
	color: #3e3e3e;
	margin: 0.5em 0;
}

.thead
{
	font:   bold 12px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	margin: 0;
	border: 1px solid #cecece;
	background: #7192a8 url(https://vmd0.valuedo.com/images/buttons/newbtn_middle.png) repeat-x  ;
	color: #ffffff;
	width: auto;
}

td.tcat, td.thead, td.alt1, td.alt2, td.alt3, td.alt4
{
	border: 1px solid #cecece;
	padding:0.5em;
	display:table-cell;
	white-space:normal;
	word-wrap:break-word;
}

.smallfont
{
	font-size: 11px;
}


.nopadding
{
	padding:0 !important;
}

.nomargin
{
	margin:0 !important;
}

.nospace
{
	padding:0 !important;
	margin:0 !important;
}

.nobordertop
{
	border-top:none !important;
}


/* Make Menu Navbar separater more nice */
.navtabs .popupbody li
{
	background: #F3F7F9 url(https://vmd1.valuedo.com/images/gradients/grey-up.png) repeat-x left bottom;
	background-color: #BFD5DD;
	border-top: 1px solid #7192A8;
	color: white;
	float: none;
	/*font-weight: bold;*/
	line-height: 25px;
	text-indent: 10px !important;
	color: black !important;
	padding: 0 !important;
}


.navtabs li.popupmenu .dropdown-arrow, .navtabs li.popupmenu.selected .dropdown-arrow
{
	height: 21px;
	position: absolute;
	right: 1px;
	top: 2px;
	width: 100%;
	background-image:url(https://vmd0.valuedo.com/images/misc/arrow.png);
	background-position:right center;
	background-repeat:no-repeat;
}

.navtabs li.popupmenu .dropdown-arrow:hover,.navtabs li.popupmenu.selected .dropdown-arrow
{
	background-image:url(https://vmd0.valuedo.com/images/misc/black_downward_arrow.png);
	background-position:right center;
	right: -1px;
}

.navtabs li.popupmenu.selected .dropdown-arrow
{
	background-image:url(https://vmd0.valuedo.com/images/misc/black_downward_arrow.png);
	background-position:right 4px;
}

.navtabs li.selected a.navtab 
{
	color:#000000;
	background:#7192a8 url(https://vmd0.valuedo.com/images/gradients/selected-tab-gradient-with-top-alpha.png) repeat-x  ;
        _background-image:none;
	position:relative;
	top:-px;
	padding-top:4pxpx;
	z-index:10;
}

.navtabs li a.navtab 
{
	position:relative;
	z-index:10;
}

.navtabs li.popupmenu a.navtab:hover
{
	background: url(https://vmd0.valuedo.com/images/gradients/selected-tab-gradient-with-top-alpha.png) repeat-x scroll 0 -4px #7192A8;
}


.navtabs li a {
	text-indent: 0;
}


/* For general info pages */
.figurepic
{
	padding-top:10px;
	padding-bottom:10px;
}

.figurepic div
{
	border:1px solid #CCC;
	padding:3px;
	font-size:11px;
	text-align:left;
}
/* \ For general info pages */


#navtabs .popupbody .heading
{
	padding: 0px 10px;
	line-height: 26px;
	color: rgb(255, 255, 255);
}
#navtabs .popupbody .heading a
{
	background: inherit;
	padding: 0px;
	color: rgb(255, 255, 255);
}