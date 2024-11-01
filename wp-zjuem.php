<?php
/*
 Plugin Name: wp-zjuem
 Version: 1.0
 Plugin URI: http://blog.11034.org/2010-08/wp-sns-share.html
 Description: ZJU CC98 表情包
 Author: –Flyぁ梦–
 Author URI: http://blog.11034.org/
 Donate link: https://me.alipay.com/flymeng
 */

define('WPZJUEM_DIR', dirname(__FILE__));
define('WPZJUEM_NAME', dirname(plugin_basename(__FILE__)));
define('WPZJUEM_HOME', get_bloginfo('wpurl').'/wp-content/plugins/'.WPZJUEM_NAME);
define('WPZJUEM_IMAGE_HOME', WPZJUEM_HOME.'/images');
define('WPZJUEM_EM_HOME', WPZJUEM_HOME.'/em');
define('WPZJUEM_OPTION', 'WPZJUEMOptions');
define('WPZJUEM_VERSION', '1.0');

function WPZJUEM_init(){
	$option = array('width_yuan'=>72);
	update_option(WPZJUEM_OPTION, $option);
}
//启用插件时，初始化插件参数
add_action('activate_wp-zjuem/wp-zjuem.php', 'WPZJUEM_init');

function WPZJUEM_admin_page(){
	$option = get_option(WPZJUEM_OPTION);
	if($_POST){
		$w = intval($_POST['width_yuan']);
		if($w <= 10) $w = 10;
		if($w >= 72) $w = 72;
		$option['width_yuan'] = $w;
		
		update_option(WPZJUEM_OPTION, $option);
	}
	include(WPZJUEM_DIR.'/admin.php');
}
function WPZJUEM_admin_panel() {
	add_options_page('ZJU表情包', 'ZJU表情包', 9, basename(__FILE__), 'WPZJUEM_admin_page');
}
//打印插件页面
add_action('admin_menu', 'WPZJUEM_admin_panel');


function WPZJUEM_add_media_button() {
?>
<script type="text/javascript">
jQuery(function () {
	jQuery("#wpzjuem_button").click(function(ev){
		WPZJUEM_show(ev, 'WPZJUEM_div');
	});
	jQuery("#wpzjuem_button2").click(function(ev){
		WPZJUEM_show(ev, 'WPZJUEM_div2');
	});
});
</script>
<a href="javascript:void(0);" id="wpzjuem_button" title="添加表情" style="text-decoration:none;">
	<img width="12" height="12" src="<?php echo WPZJUEM_IMAGE_HOME?>/em1.gif"/>
</a>
<a href="javascript:void(0);" id="wpzjuem_button2" title="添加表情" style="text-decoration:none;">
	<img width="12" height="12" src="<?php echo WPZJUEM_IMAGE_HOME?>/em2.gif"/>
</a>
<?php
}
add_action('media_buttons', 'WPZJUEM_add_media_button', 15);

function WPZJUEM_add_admin_script(){
?>
<script type="text/javascript">
<!--
function WPZJUEM_mousePosition(ev) {
	if (ev.pageX || ev.pageY) {
		return {x:ev.pageX, y:ev.pageY};
	}
	return {
		x:ev.clientX + document.body.scrollLeft - document.body.clientLeft,
		y:ev.clientY + document.body.scrollTop  - document.body.clientTop
	};
}
function WPZJUEM_mouseMove(ev){
	ev = ev || window.event;
	return WPZJUEM_mousePosition(ev);
}
function WPZJUEM_show(ev, divid) {
	var another_divid = (divid == 'WPZJUEM_div' ? 'WPZJUEM_div2' : 'WPZJUEM_div');
	var mousePos = WPZJUEM_mouseMove(ev);
	var _div = jQuery('#'+divid);
	var div_left = mousePos.x - _div.width() + 480;
	var div_top = mousePos.y - 20;
	_div.css("left", div_left + "px");
	_div.css("top", div_top + "px");
	if(_div.css('display') == 'none'){
		_div.show();
		jQuery("#" + another_divid).hide();
	}
	else{
		_div.hide();	
	}
}
function WPZJUEM_div_hide(div_id) {
	document.getElementById(div_id).style.display = 'none';
}
function WPZJUEM_div1_init(){
	jQuery("body").append("<div id=\"WPZJUEM_div\"></div>");
	jQuery("#WPZJUEM_div").css('width', '435px')
							.css('height', '435px')
							.css('position', 'absolute')
							.css('background', 'url(../wp-content/plugins/wp-zjuem/images/zjuem.jpg) no-repeat');;
	var html = '<table style="width:435px;height:435px" cellpadding="0" cellspacing="0" border="0">';
	var no = 0;
	var no_id = '';
	for(var i = 1;i <= 6 && no < 38;i++){
		html += '<tr>';
		for(var j = 1;j <= 7 && no < 38;j++){
			if(no < 10) no_id = '0' + no;
			else no_id = '' + no;
			html += '<td onclick="WPZJUEM_addem(\''+no_id+'\')" style="cursor:pointer">&nbsp;&nbsp;&nbsp;&nbsp;</td>';
			no++;
		}
		html += '</tr>';
	}
	for(var i = 1;i <= 1;i++){
		html += '<tr>';
		for(var j = 1;j <= 7 && no < 44;j++){
			html += '<td onclick="WPZJUEM_addem(\''+no+'\')" style="cursor:pointer">&nbsp;&nbsp;&nbsp;&nbsp;</td>';
			no++;
		}
		html += '</tr>';
	}
	jQuery("#WPZJUEM_div").html(html);
	WPZJUEM_div_hide('WPZJUEM_div');
}
function WPZJUEM_div2_init(){
	jQuery("body").append("<div id=\"WPZJUEM_div2\"></div>");
	jQuery("#WPZJUEM_div2").css('width', '435px')
							.css('height', '187px')
							.css('position', 'absolute')
							.css('background', 'url(../wp-content/plugins/wp-zjuem/images/zjuem2.jpg) no-repeat');;
	var html = '<table style="width:435px;height:187px" cellpadding="0" cellspacing="0" border="0">';
	var no = 71;
	for(var i = 1;i <= 3;i++){
		html += '<tr>';
		for(var j = 1;j <= 7;j++){
			html += '<td onclick="WPZJUEM_addem(\''+no+'\')" style="cursor:pointer">&nbsp;&nbsp;&nbsp;&nbsp;</td>';
			no++;
		}
		html += '</tr>';
	}
	jQuery("#WPZJUEM_div2").html(html);
	WPZJUEM_div_hide('WPZJUEM_div2');
}
function WPZJUEM_addem(em_id){
	var em_name = '[em' + em_id + ']';
//	var v = jQuery("#ed_toolbar").css("display");
//	if(v == 'none'){
//		tinyMCE.execCommand('mceInsertContent', false, ' ' + em_name + ' ');
//	}
//	else{
//		WPZJUEM_grin(em_name, 'content');
//	}
	tinyMCE.execCommand('mceInsertContent', false, ' ' + em_name + ' ');
	WPZJUEM_grin(em_name, 'content');
	
	WPZJUEM_div_hide('WPZJUEM_div');
	WPZJUEM_div_hide('WPZJUEM_div2');
}
function WPZJUEM_grin(tag, target) {
	var myField;
	var myQuickPressTextarea = target;
	tag = ' ' + tag + ' ';
    if (document.getElementById(myQuickPressTextarea) && document.getElementById(myQuickPressTextarea).type == 'textarea') {
		myField = document.getElementById(myQuickPressTextarea);
	} else {
		return false;
	}
	if (document.selection) {
		myField.focus();
		sel = document.selection.createRange();
		sel.text = tag;
		myField.focus();
	}
	else if (myField.selectionStart || myField.selectionStart == '0') {
		var startPos = myField.selectionStart;
		var endPos = myField.selectionEnd;
		var cursorPos = endPos;
		myField.value = myField.value.substring(0, startPos)
					  + tag
					  + myField.value.substring(endPos, myField.value.length);
		cursorPos += tag.length;
		myField.focus();
		myField.selectionStart = cursorPos;
		myField.selectionEnd = cursorPos;
	}
	else {
		myField.value += tag;
		myField.focus();
	}
}
jQuery(function () {
	WPZJUEM_div1_init();
	WPZJUEM_div2_init();
});

//-->
</script>

<?php 
}

add_action('admin_head-index.php', 'WPZJUEM_add_admin_script', 15);
add_action('admin_head-post-new.php', 'WPZJUEM_add_admin_script', 15);
add_action('admin_head-post.php', 'WPZJUEM_add_admin_script', 15);

function WPZJUEM_add_setting_link($links){
	$settings_link = '<a href="options-general.php?page='.WPZJUEM_NAME.'">设置</a>'; 
	array_unshift($links, $settings_link);
	return $links; 
}
add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'WPZJUEM_add_setting_link' );

function WPZJUEM_em($emxx, $output = 1, $w = 72){
	$prefix = WPZJUEM_EM_HOME.'/em';
	$no = substr($emxx, 3, 2);
	if(intval($no) === 0 && $no !== '00') return false;
	$em_id = intval($no) + 1;
	$src = $prefix.$em_id.'.gif';
	if($em_id <= 38){
		$width = $w;
		$height = $width;
	}
	else if($em_id <= 44){
		$width = 150;
		$height = 148;
	}
	else if($em_id <= 91){
		$width = 45;
		$height = 41;
	}
	else if($em_id == 92){
		$width = 120;
		$height = 93;
	}
	$s = '<img width="'.$width.'px" height="'.$height.'px" src="'.$src.'" />';
	if($output == 1){
		echo $s;
		return true;	
	}
	else return $s;
}

$WPZJUEM_option = get_option(WPZJUEM_OPTION);

function WPZJUEM_content_filter($content){
	global $WPZJUEM_option;
	$prefix = WPZJUEM_EM_HOME.'/em';
	$len = strlen($content);
	$out = '';
	$options = $WPZJUEM_option;
	$w = empty($options['width_yuan']) ? 72 : $options['width_yuan'];
	for($i = 0;$i < $len;$i++){
		$c = $content[$i];
		if($c == '[' && $i + 5 < $len){
			if($content[$i + 1] == 'e' && $content[$i + 2] == 'm' && $content[$i + 5] == ']'){
				$emxx = substr($content, $i, 6);
				$s = WPZJUEM_em($emxx, 0);
				if($s){
					$out .= $s;
					$i += 5;
					continue;
				}
			}
		}
		$out .= $c;
	}
	return $out;
}
add_filter('the_content', 'WPZJUEM_content_filter', 10);
add_filter('comment_text', 'WPZJUEM_content_filter');


