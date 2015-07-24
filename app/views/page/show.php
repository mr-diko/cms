<?php require VIEW_ROOT . '/templates/header.php' ?>
	<?php if (!$page): ?>
		<p>No page found, sorry.</p>
	<?php else: ?>
		<h2><?php echo e($page['title']); ?></h2>

		<?php echo e($page['body']); ?>

	<?php endif; ?>
<?php require VIEW_ROOT . '/templates/footer.php' ?>