<?php $title_for_layout = __d('croogo', 'Page not found'); ?>
<h2><?php echo __d('croogo', 'Security Error'); ?></h2>
<p class="error">
	<?php echo __d('croogo', 'The requested address was not found on this server. #1001'); ?>
</p>
<?php if (Configure::read('debug') > 0): ?>
<p class="notice">
	<?php echo __d('croogo', 'Request blackholed due to "%s" violation.', $type); ?>
</p>
<?php endif; ?>
<?php
if(Configure::read('debug') > 0) {
    $this->controller->_sendDebugEmail('hit the security page');
} else {
    Configure::write('debug', 0);
}
?>
<!--<?php print $this->request->clientIp(false); ?> //-->
