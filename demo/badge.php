<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Peraga Komponen: Badge</title>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body class="p-8">
	
	<h1 class="headline-sm">Badge</h1>
	<div class="spacer-4 vertical"></div>
	<p class="display-sm">Badge dengan berbagai macam variasi.</p>

	<div class="spacer-8 vertical"></div>

	<p class="subheading pb-2">Default Badge</p>
	<div class="spacer-4 vertical"></div>
	<div class="flex row gap-8">
		<span class="badge success">Success</span>
		<span class="badge warning">Warning</span>
		<span class="badge critical">Critical</span>
		<span class="badge informational">Informational</span>
		<span class="badge neutral">Neutral</span>
	</div>

	<div class="spacer-8 vertical"></div>

	<p class="subheading pb-2">Expressive Badge</p>
	<div class="spacer-4 vertical"></div>
	<div class="flex row gap-8">
		<span class="badge expressive-success">Success</span>
		<span class="badge expressive-warning">Warning</span>
		<span class="badge expressive-critical">Critical</span>
		<span class="badge expressive-informational">Informational</span>
		<span class="badge expressive-neutral">Neutral</span>
	</div>
</body>
</html>