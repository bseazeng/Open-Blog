<?php foreach ($posts as $post): ?>
	<div class="post">
		<div class="post_title">
			<h1 class="left"><a href="<?php echo site_url('blog/post/' . $post['url']); ?>"><?php echo $post['title']; ?></a></h1>
			<div class="post_date right"><?php echo strftime('%B %d, %Y', strtotime($post['date_posted'])); ?></div>
			<div class="clearer">&nbsp;</div>
		</div>
		<div class="post_body">
			<?php echo $post['excerpt']; ?>
			
			<?php if ($post['content']): ?>
				<p class="read_more"><br /><a href="<?php echo site_url('blog/post/' . $post['url']); ?>"><?php echo lang('read_more'); ?></a></p>
			<?php endif; ?>

			<div class="post_metadata">
				<div class="content">
					<div class="left">
						<?php if ($links = $this->system_library->generate_social_bookmarking_links(site_url('blog/post/' . $post['url']), $post['title'])): ?>
							<?php echo lang('add_to'); ?> <?php echo $links; ?><br />
						<?php endif; ?>
						<?php echo lang('posted_in'); ?> <a href="<?php echo site_url('blog/category/' . $post['url_name']); ?>"><?php echo $post['name']; ?></a> <?php echo lang('by'); ?> <?php echo $post['display_name']; ?>
					</div>
					<div class="right">
						<br />
						<span class="comment"><a href="<?php echo site_url('blog/post/' . $post['url']); ?>#comments"><?php echo lang('comments'); ?> (<?php echo $post['comment_count']; ?>) </a></span>
					</div>
					<div class="clearer">&nbsp;</div>
				</div>
			</div>
		</div>
		<div class="post_bottom"></div>
	</div>
<?php endforeach; ?>

<?php if ($posts_count > $posts_per_site): ?>
	<div class="pagenavigation">
		<div class="pagenav">
			<?php if ($current_page < $pages_count): ?>
				<div class="left"><a href="<?php echo site_url('blog/page/' . $next_page); ?>/"><?php echo lang('older_entries'); ?></a></div>
			<?php endif; ?>

			<?php if ($current_page > 1): ?>
				<?php if ($previous_page == 1): ?>
					<div class="right"><a href="<?php echo site_url(); ?>"><?php echo lang('newer_entries'); ?></a></div>
				<?php else: ?>
					<div class="right"><a href="<?php echo site_url('blog/page/' . $previous_page); ?>/"><?php echo lang('newer_entries'); ?></a></div>
				<?php endif; ?>
			<?php endif; ?>
			<div class="clearer">&nbsp;</div>
		</div>
		<div class="pagenav_bottom"></div>
	</div>
<?php endif; ?>