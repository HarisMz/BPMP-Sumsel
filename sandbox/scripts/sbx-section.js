export default {
    customization: [
        { type: 'select', name: 'color', label: 'Warna Latar', tooltip: 'Menentukan warna dari latar Section jika URL gambar atau video tidak ditentukan.',
            options: [
                { value: ' surface-default', label: 'Default', default: true },
                { value: ' surface-subdued', label: 'Subdued' },
                { value: ' surface-hovered', label: 'Hovered' },
                { value: ' surface-disabled', label: 'Disabled' },
                { value: ' surface-foreground', label: 'Foreground' },
                { value: ' surface-pressed', label: 'Pressed' },
                { value: ' surface-selected-default', label: 'Selected Default' },
                { value: ' surface-selected-hovered', label: 'Selected Hovered' },
                { value: ' surface-neutral-default', label: 'Neutral Default' },
                { value: ' surface-neutral-subdued', label: 'Neutral Subdued' },
                { value: ' surface-success-default', label: 'Success Default' },
                { value: ' surface-success-subdued', label: 'Success Subdued' },
                { value: ' surface-success-darker', label: 'Success Darker' },
                { value: ' surface-critical-default', label: 'Critical Default' },
                { value: ' surface-critical-subdued', label: 'Critical Subdued' },
                { value: ' surface-critical-darker', label: 'Critical Darker' },
                { value: ' surface-informational-default', label: 'Informational Default' },
                { value: ' surface-informational-subdued', label: 'Informational Subdued' },
                { value: ' surface-informational-darker', label: 'Informational Darker' },
                { value: ' surface-warning-default', label: 'Warning Default' },
                { value: ' surface-warning-subdued', label: 'Warning Subdued' },
                { value: ' surface-warning-darker', label: 'Warning Darker' }
            ]
        },
        { type: 'text', name: 'url', label: 'URL Gambar atau Video', tooltip: 'URL berupa gambar atau video untuk dijadikan latar Section.' },
        { type: 'switch', name: 'darken', label: 'Gradasi Gelap', default: 'true', tooltip: 'Menentukan apakah sebuah Section memiliki gradasi gelap atau tidak.' },
        { type: 'select', name: 'pos', label: 'Posisi Gradasi Gelap', tooltip: 'Menentukan posisi dari gradasi gelap pada sebuah Section.',
            options: [
                { value: '', label: 'Merata', default: true },
                { value: ' top', label: 'Atas' },
                { value: ' right', label: 'Kanan' },
                { value: ' bottom', label: 'Bawah' },
                { value: ' left', label: 'Kiri' }
            ],
            dependencies: {
                darken: true
            }
        }
    ],
    generateHTML: (options) => {
        function isVideo(src) {
            const videoExtensions = /\.(mp4|webm|ogg|ogv|mov)$/i;
            return videoExtensions.test(src);
        }

        return `
        ${options.url ? isVideo(options.url) ? `
        <section class="container${options.darken ? ' darken' : ''}${options.darken ? options.pos : ''}" style="background-color: var(--surface-default);">
            <video autoplay muted loop id="myVideo" src="${options.url}" type="video/mp4" class="video-bg"></video>
            <div class="wrapper">
                <!-- Masukkan kode HTML dari Flexbox atau Grid pada bagian ini -->
            </div>
        </section>
        ` : `
        <section class="container${options.darken ? ' darken' : ''}${options.darken ? options.pos : ''}" style="background-image: url(${options.url}); background-color: var(--surface-default);">
            <div class="wrapper">
                <!-- Masukkan kode HTML dari Flexbox atau Grid pada bagian ini -->
            </div>
        </section>
        ` : `
        <section class="container ${options.color}" style="min-height: 100%;">
            <div class="wrapper">
                <!-- Masukkan kode HTML dari Flexbox atau Grid pada bagian ini -->
            </div>
        </section>
        `}`;
    },
    generatePreviewHTML: (options) => { 
        function isVideo(src) {
            const videoExtensions = /\.(mp4|webm|ogg|ogv|mov)$/i;
            return videoExtensions.test(src);
        }

        return `
        <div class="flex column relative full height-full overflow-y-auto gap-8">
            ${options.url ? isVideo(options.url) ? `
            <section class="container skeleton p-10${options.darken ? ' darken' : ''}${options.darken ? options.pos : ''}" style="background-color: var(--surface-default); min-height: 100%;">
                <video autoplay muted loop id="myVideo" src="${options.url}" type="video/mp4" class="video-bg"></video>
                <div class="wrapper justify-center items-center p-10">
                    <div class="content height-full"></div>
                </div>
            </section>
            ` : `
            <section class="container skeleton p-10${options.darken ? ' darken' : ''}${options.darken ? options.pos : ''}" style="background-image: url(${options.url}); background-color: var(--surface-default); min-height: 100%;">
                <div class="wrapper justify-center items-center p-10">
                    <div class="content height-full"></div>
                </div>
            </section>
            ` : `
            <section class="container skeleton p-10${options.color}" style="min-height: 100%;">
                <div class="wrapper justify-center items-center p-10">
                    <div class="content height-full"></div>
                </div>
            </section>`}
            <div class="flex row gap-8 absolute sbx-infobox p-4 text-default elevation-4 m-6 overflow-hidden">
                <div class="body-sm absolute" style="width: 440px;">
                    Penggunaan Section sangat penting untuk memastikan struktur halaman ditampilkan dengan rapi, konsisten, dan responsif. Section terdiri dari tiga elemen: a) <b>Container</b>, pembungkus utama yang membuat layout konten terpusat dan tampil proporsional di berbagai ukuran layar; b) <b>Wrapper</b>, pembatas lebar isi hingga 1200px untuk tampilan yang lebih teratur; dan c) <b>Content</b>, tempat meletakkan isi dari section, direkomendasikan untuk elemen Flexbox atau Grid. Dengan struktur Section ini, tampilan setiap halaman menjadi seragam dan mudah dikelola. Silakan salin kode HTML di bawah sebagai acuan untuk memulai perancangan.
                </div>
            </div>
        </div>`;
    }
};