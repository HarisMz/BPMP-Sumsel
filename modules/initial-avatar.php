<?php
// Fungsi untuk menghasilkan gambar dengan inisial
function generateInitialImage($name, $width = 250, $height = 250) {
    
    $colorPairs = [
        '#C9CBCF' => '#8E97AA',
        '#FBB7BC' => '#CE868B',
        '#FAB2D6' => '#C7719C',
        '#CFC1FB' => '#8F7DC7',
        '#B1D1FB' => '#749DD2',
        '#9DDCFB' => '#65B1D7',
        '#98E5E7' => '#61B9BB',
        '#BCF1D1' => '#80D1A0',
        '#FFD78A' => '#D1AB62',
        '#FFF78A' => '#CFC64B'
    ];

    // Pilih pasangan warna secara acak
    $backgroundColors = array_keys($colorPairs);
    $randomBackground = $backgroundColors[array_rand($backgroundColors)];
    $randomTextColor = $colorPairs[$randomBackground];

    // Ambil inisial dari nama
    $words = explode(' ', $name); // Pisahkan nama berdasarkan spasi
    $initials = '';

    if (count($words) > 1) {
        // Jika ada lebih dari satu kata, ambil huruf pertama dari kata pertama dan kata terakhir
        $initials = strtoupper(substr($words[0], 0, 1)) . strtoupper(substr($words[count($words) - 1], 0, 1));
    } else {
        // Jika hanya ada satu kata, ambil inisial dari kata tersebut
        $initials = strtoupper(substr($name, 0, 1));
    }

    // Buat gambar dengan latar belakang acak
    $image = imagecreatetruecolor($width, $height);
    $bgColor = imagecolorallocate($image, hexdec(substr($randomBackground, 1, 2)), hexdec(substr($randomBackground, 3, 2)), hexdec(substr($randomBackground, 5, 2))); // Mengkonversi HEX ke RGB
    imagefill($image, 0, 0, $bgColor);

    // Alokasikan warna untuk teks (hitam)
    $textColor = imagecolorallocate($image, hexdec(substr($randomTextColor, 1, 2)), hexdec(substr($randomTextColor, 3, 2)), hexdec(substr($randomTextColor, 5, 2))); // Mengkonversi HEX ke RGB

    $fontSize = min($width, $height) * 0.4;
    // Menentukan path font TTF
    $fontPath = $_SERVER['DOCUMENT_ROOT'] . '/assets/images/inter-bd.otf'; // Ganti dengan path font TTF

    // Hitung ukuran teks
    $bbox = imagettfbbox($fontSize, 0, $fontPath, $initials);
    $textWidth = $bbox[2] - $bbox[0];
    $textHeight = $bbox[1] - $bbox[7];

    // Hitung posisi teks untuk ditengah
    $x = ($width - $textWidth) / 2;
    $y = ($height - $textHeight) / 2 + $textHeight;

    // Tulis teks di gambar
    imagettftext($image, $fontSize, 0, $x, $y, $textColor, $fontPath, $initials);

    // Header untuk menampilkan gambar
    header('Content-Type: image/png');

    // Output gambar
    imagepng($image);
    imagedestroy($image);
}

// Ganti nama di sini
if (isset($_GET['name'])) {
    $name = $_GET['name'];
} else {
    $name = '?';
}
generateInitialImage($name);
?>
