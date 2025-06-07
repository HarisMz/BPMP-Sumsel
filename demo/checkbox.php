<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Peraga Komponen: Checkbox</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body class="p-8 surface-gray-10">

	<h1 class="headline-sm">Checkbox</h1>
	<div class="spacer-4 vertical"></div>
	<p class="display-sm">Digunakan untuk pilihan yang bernilai "Ya" atau "Tidak".</p>
	
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Checkbox Biasa</p>
	<div class="flex column width-35">
		<label class="checkbox">
			<input type="checkbox">
			<span class="mark"></span>
			<span class="label">Pilihan 1</span>
		</label>
		<label class="checkbox">
			<input type="checkbox" checked>
			<span class="mark"></span>
			<span class="label">Pilihan 2</span>
		</label>
		<label class="checkbox">
			<input type="checkbox" disabled>
			<span class="mark"></span>
			<span class="label">Pilihan 3</span>
		</label>
		<label class="checkbox">
			<input type="checkbox" checked disabled>
			<span class="mark"></span>
			<span class="label">Pilihan 4</span>
		</label>
	</div>
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Checkbox dengan Centang di Kanan</p>
	<div class="flex column width-35">
		<label class="checkbox right">
			<input type="checkbox">
			<span class="mark"></span>
			<span class="label">Pilihan 1</span>
		</label>
		<label class="checkbox right">
			<input type="checkbox" checked>
			<span class="mark"></span>
			<span class="label">Pilihan 2</span>
		</label>
		<label class="checkbox right">
			<input type="checkbox" disabled>
			<span class="mark"></span>
			<span class="label">Pilihan 3</span>
		</label>
		<label class="checkbox right">
			<input type="checkbox" checked disabled>
			<span class="mark"></span>
			<span class="label">Pilihan 4</span>
		</label>
	</div>
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Checkbox dengan Helper</p>
	<div class="flex column width-35">
		<label class="checkbox">
			<input type="checkbox">
			<span class="mark"></span>
			<span class="label">Pilihan 1
				<span class="helper">Ini adalah pilihan 1</span>
			</span>
		</label>
		<label class="checkbox">
			<input type="checkbox" checked>
			<span class="mark"></span>
			<span class="label">Pilihan 2
				<span class="helper">Ini adalah pilihan 2</span>
			</span>
		</label>
		<label class="checkbox">
			<input type="checkbox" disabled>
			<span class="mark"></span>
			<span class="label">Pilihan 3
				<span class="helper">Ini adalah pilihan 3</span>
			</span>
		</label>
		<label class="checkbox">
			<input type="checkbox" checked disabled>
			<span class="mark"></span>
			<span class="label">Pilihan 4
				<span class="helper">Ini adalah pilihan 4</span>
			</span>
		</label>
	</div>
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Checkbox dengan Helper dan Centang di Kanan</p>
	<div class="flex column width-35">
		<label class="checkbox right">
			<input type="checkbox">
			<span class="mark"></span>
			<span class="label">Pilihan 1
				<span class="helper">Ini adalah pilihan 1</span>
			</span>
		</label>
		<label class="checkbox right">
			<input type="checkbox" checked>
			<span class="mark"></span>
			<span class="label">Pilihan 2
				<span class="helper">Ini adalah pilihan 2</span>
			</span>
		</label>
		<label class="checkbox right">
			<input type="checkbox" disabled>
			<span class="mark"></span>
			<span class="label">Pilihan 3
				<span class="helper">Ini adalah pilihan 3</span>
			</span>
		</label>
		<label class="checkbox right">
			<input type="checkbox" checked disabled>
			<span class="mark"></span>
			<span class="label">Pilihan 4
				<span class="helper">Ini adalah pilihan 4</span>
			</span>
		</label>
	</div>
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Checkbox Nested Structure dengan Helper</p>
	<div class="flex column">
		<ul>
	        <li>
	        	<label class="checkbox">
	        		<input type="checkbox" id="pilihan-utama">
		        	<span class="mark"></span>
			        <span class="label">Pilihan Utama
						<span class="helper">Ini adalah helper</span>
			        </span>
	        	</label>
	            <ul>
	                <li>
	                	<label class="checkbox">
	                		<input type="checkbox" id="utama-seri-1">
		                	<span class="mark"></span>
			                <span class="label">Utama Seri 1
								<span class="helper">Ini adalah helper</span>
			                </span>
		                </label>
	                </li>
	                <li>
	                	<label class="checkbox">
	                		<input type="checkbox" id="utama-seri-2">
		                	<span class="mark"></span>
			                <span class="label">Utama Seri 2
								<span class="helper">Ini adalah helper</span>
			                </span>
		                </label>
	                </li>
	                <li>
	                	<label class="checkbox">
	                		<input type="checkbox" id="utama-seri-3">
		                	<span class="mark"></span>
			                <span class="label">Utama Seri 3
								<span class="helper">Ini adalah helper</span>
			                </span>
		                </label>
	                </li>
	            </ul>
	        </li>
	        <li>
	        	<label class="checkbox">
	        		<input type="checkbox" id="pilihan-sekunder">
		        	<span class="mark"></span>
			        <span class="label">Pilihan Sekunder
						<span class="helper">Ini adalah helper</span>
			        </span>
	        	</label>
	            <ul>
	                <li>
	                	<label class="checkbox">
	                		<input type="checkbox" id="sekunder-seri-1">
		                	<span class="mark"></span>
			                <span class="label">Sekunder Seri 1
								<span class="helper">Ini adalah helper</span>
			                </span>
		                </label>
	                </li>
	                <li>
	                	<label class="checkbox">
	                		<input type="checkbox" id="sekunder-seri-2">
		                	<span class="mark"></span>
			                <span class="label">Sekunder Seri 2
								<span class="helper">Ini adalah helper</span>
			                </span>
	                	</label>
	                    <ul>
	                        <li>
	                        	<label class="checkbox">
	                        		<input type="checkbox" id="anak-1">
		                        	<span class="mark"></span>
			                        <span class="label">Anak 1
										<span class="helper">Ini adalah helper</span>
			                        </span>
		                        </label>
	                        </li>
	                        <li>
	                        	<label class="checkbox">
	                        		<input type="checkbox" id="anak-2">
		                        	<span class="mark"></span>
			                        <span class="label">Anak 2
										<span class="helper">Ini adalah helper</span>
			                        </span>
		                        </label>
	                        </li>
	                    </ul>
	                </li>
	                <li>
	                	<label class="checkbox">
	                		<input type="checkbox" id="sekunder-seri-3">
		                	<span class="mark"></span>
			                <span class="label">Sekunder Seri 3
								<span class="helper">Ini adalah helper</span>
			                </span>
		                </label>
	                </li>
	            </ul>
	        </li>
	        <li>
	        	<label class="checkbox">
	        		<input type="checkbox" id="pilihan-akhir">
		        	<span class="mark"></span>
			        <span class="label">Pilihan Akhir
						<span class="helper">Ini adalah helper</span>
			        </span>
		        </label>
	        </li>
	        <li>
	        	<label class="checkbox">
	        		<input type="checkbox" id="pilihan-tambahan">
		        	<span class="mark"></span>
			        <span class="label">Pilihan Tambahan
						<span class="helper">Ini adalah helper</span>
			        </span>
		        </label>
	        </li>
	    </ul>
	</div>
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Checkbox Nested Structure</p>
	<div class="flex column">
		<ul>
	        <li>
	        	<label class="checkbox">
	        		<input type="checkbox" id="pilihan-utama">
		        	<span class="mark"></span>
			        <span class="label">Pilihan Utama</span>
	        	</label>
	            <ul>
	                <li>
	                	<label class="checkbox">
	                		<input type="checkbox" id="utama-seri-1">
		                	<span class="mark"></span>
			                <span class="label">Utama Seri 1</span>
		                </label>
	                </li>
	                <li>
	                	<label class="checkbox">
	                		<input type="checkbox" id="utama-seri-2">
		                	<span class="mark"></span>
			                <span class="label">Utama Seri 2</span>
		                </label>
	                </li>
	                <li>
	                	<label class="checkbox">
	                		<input type="checkbox" id="utama-seri-3">
		                	<span class="mark"></span>
			                <span class="label">Utama Seri 3</span>
		                </label>
	                </li>
	            </ul>
	        </li>
	        <li>
	        	<label class="checkbox">
	        		<input type="checkbox" id="pilihan-sekunder">
		        	<span class="mark"></span>
			        <span class="label">Pilihan Sekunder</span>
	        	</label>
	            <ul>
	                <li>
	                	<label class="checkbox">
	                		<input type="checkbox" id="sekunder-seri-1">
		                	<span class="mark"></span>
			                <span class="label">Sekunder Seri 1</span>
		                </label>
	                </li>
	                <li>
	                	<label class="checkbox">
	                		<input type="checkbox" id="sekunder-seri-2">
		                	<span class="mark"></span>
			                <span class="label">Sekunder Seri 2</span>
	                	</label>
	                    <ul>
	                        <li>
	                        	<label class="checkbox">
	                        		<input type="checkbox" id="anak-1">
		                        	<span class="mark"></span>
			                        <span class="label">Anak 1</span>
		                        </label>
	                        </li>
	                        <li>
	                        	<label class="checkbox">
	                        		<input type="checkbox" id="anak-2">
		                        	<span class="mark"></span>
			                        <span class="label">Anak 2</span>
		                        </label>
	                        </li>
	                    </ul>
	                </li>
	                <li>
	                	<label class="checkbox">
	                		<input type="checkbox" id="sekunder-seri-3">
		                	<span class="mark"></span>
			                <span class="label">Sekunder Seri 3</span>
		                </label>
	                </li>
	            </ul>
	        </li>
	        <li>
	        	<label class="checkbox">
	        		<input type="checkbox" id="pilihan-akhir">
		        	<span class="mark"></span>
			        <span class="label">Pilihan Akhir</span>
		        </label>
	        </li>
	        <li>
	        	<label class="checkbox">
	        		<input type="checkbox" id="pilihan-tambahan">
		        	<span class="mark"></span>
			        <span class="label">Pilihan Tambahan</span>
		        </label>
	        </li>
	    </ul>
	</div>

</body>
</html>