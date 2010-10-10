<h3><?php echo lang('feeds'); ?></h3>

<ul class="sidemenu">
	<li><a href="<?php echo site_url('feed/rss/posts'); ?>" class="feed">RSS (<?php echo lang('feeds_posts'); ?>)</a></li>
	<li><a href="<?php echo site_url('feed/rss/comments'); ?>" class="feed">RSS (<?php echo lang('feeds_comments'); ?>)</a></li>
	<li><a href="<?php echo site_url('feed/atom/posts'); ?>" class="feed">Atom (<?php echo lang('feeds_posts'); ?>)</a></li>
	<li><a href="<?php echo site_url('feed/atom/comments'); ?>" class="feed">Atom (<?php echo lang('feeds_comments'); ?>)</a></li>
</ul>