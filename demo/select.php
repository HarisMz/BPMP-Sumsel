<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Peraga Komponen: Select</title>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body class="p-8 surface-gray-10">
	<h1 class="headline-sm">Select</h1>
	<div class="spacer-4 vertical"></div>
	<p class="display-sm">Komponen Select.</p>

	<div class="spacer-8 vertical"></div>
	<p class="subheading pb-2">Select with helper</p>
	<div class="spacer-4 vertical"></div>

	<div class="flex column gap-3">
		<div class="flex column">
			<label><b>Default</b></label>
			<div class="select">
				<select name="" id="">
					<option value="" disabled selected>--Pilih Satu--</option>
					<option value="">Option 1</option>
					<option value="">Option 2</option>
				</select>
			</div>
			<span class="helper">Choose One</span>
		</div>
		<div class="flex column">
			<label><b>Default Small</b></label>
			<div class="select small">
				<select name="" id="">
					<option value="" disabled selected>--Pilih Satu--</option>
					<option value="">Option 1</option>
					<option value="">Option 2</option>
				</select>
			</div>
			<span class="helper">Choose One</span>
		</div>
		<div class="error flex column">
			<label><b>Error</b></label>
			<div class="select">
				<select name="" id="">
					<option value="" disabled selected>--Pilih Satu--</option>
					<option value="">Option 1</option>
					<option value="">Option 2</option>
				</select>
			</div>
			<span class="helper">This is an error message</span>
		</div>
		<div class="disabled flex column">
			<label><b>Disabled</b></label>
			<div class="select disabled">
				<select name="" id="" disabled>
					<option value="" disabled selected>--Pilih Satu--</option>
					<option value="">Option 1</option>
					<option value="">Option 2</option>
				</select>
			</div>
			<span class="helper">Choose One</span>
		</div>
	</div>

	<div class="spacer-8 vertical"></div>
	<p class="subheading pb-2">Custom Select</p>
	<div class="spacer-4 vertical"></div>

	<div class="flex column gap-3">
		<div class="flex column">
			<label><b>Default</b></label>
			<div class="select">
				<div class="selector">
					--Pilih Satu--
				</div>
				<div class="options">
					<div class="option" data-value="Opsi 1">Option 1</div>
					<div class="option" data-value="Opsi 2">Option 2</div>
					<div class="option" data-value="Opsi 3">Option 3</div>
					<div class="option" data-value="Opsi 4">Option 4</div>
					<div class="option" data-value="Opsi 5">Option 5</div>
					<div class="option selected" data-value="Opsi 6">Option 6</div>
					<div class="option" data-value="Opsi 7">Option 7</div>
					<div class="option" data-value="Opsi 8">Option 8</div>
				</div>
			</div>
			<span class="helper">Choose One</span>
		</div>
	</div>
	<div class="spacer-4 vertical"></div>
	<div class="flex column gap-3">
		<div class="flex column">
			<label><b>Disabled</b></label>
			<div class="select disabled">
				<div class="selector">
					--Pilih Satu--
				</div>
				<div class="options">
					<div class="option" data-value="Opsi 1">Option 1</div>
					<div class="option" data-value="Opsi 2">Option 2</div>
					<div class="option" data-value="Opsi 3">Option 3</div>
					<div class="option" data-value="Opsi 4">Option 4</div>
					<div class="option" data-value="Opsi 5">Option 5</div>
					<div class="option" data-value="Opsi 6">Option 6</div>
					<div class="option" data-value="Opsi 7">Option 7</div>
					<div class="option" data-value="Opsi 8">Option 8</div>
				</div>
			</div>
			<span class="helper">Choose One</span>
		</div>
	</div>
	<div class="spacer-4 vertical"></div>
	<div class="flex column gap-3">
		<div class="flex column">
			<label><b>With Custom Icon</b></label>
			<div class="select" data-icon="colorize">
				<div class="selector">
					--Pilih Satu--
				</div>
				<div class="options">
					<div class="option">Color 1</div>
					<div class="option">Color 2</div>
					<div class="option">Color 3</div>
					<div class="option">Color 4</div>
					<div class="option">Color 5</div>
					<div class="option">Color 6</div>
					<div class="option">Color 7</div>
					<div class="option">Color 8</div>
				</div>
			</div>
			<span class="helper">Choose One</span>
		</div>
	</div>

</body>
</html>