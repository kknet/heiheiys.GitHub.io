<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:36:"template/vfed/html/gbook/report.html";i:1558617932;}*/ ?>
<div class="fed-padding fed-back-whits">
	<form class="fed-comm-fork fed-comm-form fed-event" data-role="<?php echo $GLOBALS['config']['gbook']['login']; ?>" autocomplete="off" onkeydown="if(event.keyCode==13){return false}">
		<ul class="fed-part-rows">
			<li class="fed-padding fed-col-xs12"><textarea class="fed-form-info fed-rims-info fed-form-area fed-comm-text fed-event" name="gbook_content" cols="40" rows="4" placeholder="输入留言内容"></textarea></li>
			<li class="fed-padding<?php if($GLOBALS['config']['gbook']['verify']): ?> fed-col-xs12<?php else: ?> fed-col-xs9<?php endif; ?>">
				<p class="fed-form-info fed-rims-info fed-text-muted">提示：<span class="fed-comm-tips">还可以输入255字</span></p>
			</li>
			<?php if($GLOBALS['config']['gbook']['verify']): ?>
			<li class="fed-padding fed-col-xs5"><input class="fed-form-info fed-rims-info fed-comm-veri" type="tel" name="verify" placeholder="验证码" /></li>
			<li class="fed-padding fed-col-xs3"><img class="fed-rims-info fed-comm-code" height="40" src="<?php echo mac_url('verify/index'); ?>" data-role="<?php echo mac_url('verify/index'); ?>" title="看不清楚? 换一张！" onClick="this.src=this.src+'?v=<?php echo time(); ?>'" /></li>
			<?php endif; ?>
			<li class="fed-padding fed-col-xs4">
				<a class="fed-form-info fed-rims-info fed-btns-info fed-btns-green fed-comm-gbooks">提交</a>
			</li>
		</ul>
	</form>
</div>