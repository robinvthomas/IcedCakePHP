<?php
/**
 * Copyright 2010 - 2011, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2011, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<?php echo $this->element('Users/sidebar'); ?>
<div class="users overview span10">
	<h2><?php echo __d('users', 'Welcome'); ?> <?php echo $user[$model]['username']; ?></h2>
	<h3><?php echo __d('users', 'Recent broadcasts'); ?></h3>
</div>