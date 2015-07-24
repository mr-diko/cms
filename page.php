<?php 

require "app/start.php";

if (empty($_GET['page'])) {
	$page = false;
}else{
	$slug = $_GET['page'];

	$page = $db->prepare("
			SELECT	*
			FROM pages
			WHERE slug = :slug
		");

	$page->execute(['slug' => $slug]);

	$page = $page->fetch(PDO::FETCH_ASSOC);

	if($page) {
		$page['created'] = new DateTime($page['created']);

		if ($page['update']) {
			$page['update'] = new DateTime($page['created']);
		}
	}

}

require VIEW_ROOT . "/page/show.php";