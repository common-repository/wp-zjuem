<style>
#WPZJUEM_table .TD_title{padding-top:10px;}
font{padding-top:10px;}
</style>
<div class="wrap">
	<h2><?php _e(WPZJUEM_NAME, WPZJUEM_NAME); ?></h2>
	
	<div style="float: left;margin: 20px;width:800px">
	
	<form action="" method="post">
	<table id="WPZJUEM_table" class="widefat">
		<thead><tr><th colspan="2">设置</th></tr></thead>
		<tbody>
		<tr height="40px">
			<td class="TD_title" width="100px">圆表情长宽</td>			
			<td>
				<input name="width_yuan" type="text" size="2" value="<?php echo $option['width_yuan']?>" /> 
				<font>px &nbsp;&nbsp;&nbsp;&nbsp;10px &lt;= width &lt;= 72px &nbsp;&nbsp;&nbsp;&nbsp;图片默认大小：72px * 72px</font>
			</td>
		</tr>
		<tr height="40px">
			<td>示例</td>			
			<td>
				<p style="color:#555;font-size:12px">
					<b>生命值</b>：表示您的ID在CC98的活跃情况，新注册的ID初始生命值为98。
					生命值与您的注册时间、发帖数量、精华和威望数量呈正相关，
					每当您上线时当前值便回复满至生命值。生命值上限为999。
					<?php WPZJUEM_em('[em00]', 1, $option['width_yuan'])?> 
					当前值：<?php echo $option['width_yuan']?>px
				</p>
				<p style="color:#555;font-size:12px">
					<b>生命值</b>：表示您的ID在CC98的活跃情况，新注册的ID初始生命值为98。
					生命值与您的注册时间、发帖数量、精华和威望数量呈正相关，
					每当您上线时当前值便回复满至生命值。生命值上限为999。
					<?php WPZJUEM_em('[em00]')?> 72px
				</p>
				<p style="color:#555;font-size:12px">
					<b>生命值</b>：表示您的ID在CC98的活跃情况，新注册的ID初始生命值为98。
					生命值与您的注册时间、发帖数量、精华和威望数量呈正相关，
					每当您上线时当前值便回复满至生命值。生命值上限为999。
					<?php WPZJUEM_em('[em00]', 1, 36)?> 36px
				</p>
				<p style="color:#555;font-size:12px">
					<b>生命值</b>：表示您的ID在CC98的活跃情况，新注册的ID初始生命值为98。
					生命值与您的注册时间、发帖数量、精华和威望数量呈正相关，
					每当您上线时当前值便回复满至生命值。生命值上限为999。
					<?php WPZJUEM_em('[em00]', 1, 18)?> 18px
				</p>
			</td>
		</tr>
		</tbody>
	</table>
	
	<p class='submit'><input type='submit' value='更新选项'></p>
	</form>
	
	</div>
	
	<div style="float:left;margin:20px 30px">
		<table>
			<tr><td>
			<table class="widefat">
				<thead>
					<tr>
						<th width="250" class="WPSNS_title">关于 <?php echo WPZJUEM_NAME?></th>
					</tr>
				</thead>
				<tbody>
					<tr><td><a target="_blank" href="http://blog.11034.org/">–Flyぁ梦– 博客</a></td></tr>
					<tr><td><a target="_blank" href="http://wordpress.org/extend/plugins/wp-sns-share/">插件官方主页</a></td></tr>
					<tr><td><a target="_blank" href="http://blog.11034.org/feed">博客RSS</a></td></tr>
					<tr><td><a target="_blank" href="http://blog.11034.org/2010-08/wp-sns-share.html">报告BUG</a></td></tr>
					<tr><td><a target="_blank" href="http://blog.11034.org/2010-08/wp-sns-share.html">建议新功能</a></td></tr>
					<tr><td><a target="_blank" href="http://blog.11034.org/footprint">留个言什么的</a></td></tr>
				</tbody>
			</table>
			</td></tr>
		</table>
		<table style="margin-top:20px">
			<tr><td>
			<table class="widefat">
				<thead>
					<tr>
						<th width="250" class="WPSNS_title">如果您支持 <?php echo WPZJUEM_NAME?></th>
					</tr>
				</thead>
				<tbody>
					<tr><td><a target="_blank" href="http://blog.11034.org/">踩踩博客，点点广告 ^_^</a></td></tr>
					<tr><td><a target="_blank" href="https://me.alipay.com/flymeng">请我吃一碗玉泉四食堂的葱油拌面吧！</a></td></tr>
				</tbody>
			</table>
			</td></tr>
		</table>
	</div>
	
</div>