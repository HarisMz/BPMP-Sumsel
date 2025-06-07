export default {
    customization: [
        { type: 'switch', name: 'drag', label: 'Draggable', tooltip: 'Menentukan apakah sebuah Carousel dapat dinavigasi menggunakan fitur drag atau tidak.' },
        { type: 'switch', name: 'loop', label: 'Loop', tooltip: 'Menentukan apakah sebuah Carousel dalam keadaan berulang atau tidak.' },
        { type: 'switch', name: 'autoplay', label: 'Autoplay', tooltip: 'Menentukan apakah sebuah Carousel memiliki fitur autoplay atau tidak.' },
        { type: 'switch', name: 'full', label: 'Lebar Penuh', tooltip: 'Menentukan apakah sebuah Carousel menggunakan seluruh lebar layar atau tidak.' },
        { type: 'select', name: 'nav', label: 'Navigation', tooltip: 'Menentukan jenis navigasi apa saja yang dimiliki oleh sebuah Carousel.',
            options: [
                { value: '', label: 'Tidak Ada', default: true },
                { value: 'arrow', label: 'Arrow' },
                { value: 'dots', label: 'Dots' },
                { value: 'both', label: 'Both' },
            ]
        },
        { type: 'switch', name: 'clear', label: 'Clear', tooltip: 'Menentukan apakah tombol navigasi arrow pada Carousel memiliki background atau tidak.',
            dependencies: {
                nav: ['arrow', 'both']
            }
        },
        { type: 'array', name: 'options', label: 'Daftar Carousel', span: 2, itemTemplate: [
            { type: 'text', name: 'url', label: 'URL Gambar atau Video', span: 2, default: '/assets/images/hero-img.png', tooltip: 'Menentukan apakah sebuah Carousel memiliki gambar atau video.' },
            { type: 'switch', name: 'latar', label: 'Sebagai Latar', default: 'true', tooltip: 'Menentukan apakah gambar atau video berfungsi sebagai latar atau tidak.' },
            { type: 'switch', name: 'swap', label: 'Ganti Posisi', tooltip: 'Menentukan apakah teks dan gambar/video berada di posisi yang sebaliknya. Hanya berlaku saat gambar atau video tidak dalam keadaan sebagai latar.',
                dependencies: {
                    latar: false
                }
            },
            { type: 'switch', name: 'darken', label: 'Gradasi Gelap', default: 'true', tooltip: 'Menentukan apakah sebuah Carousel memiliki gradasi gelap atau tidak.',
                dependencies: {
                    latar: true
                }
            },
            { type: 'select', name: 'pos', label: 'Posisi Gradasi Gelap', tooltip: 'Menentukan posisi dari gradasi gelap pada sebuah Carousel.',
                options: [
                    { value: '', label: 'Merata', default: true },
                    { value: ' top', label: 'Atas' },
                    { value: ' right', label: 'Kanan' },
                    { value: ' bottom', label: 'Bawah' },
                    { value: ' left', label: 'Kiri' }
                ],
                dependencies: {
                    latar: true,
                    darken: true
                }
            },
            { type: 'text', name: 'header', label: 'Judul', default: 'Mari Bentuk Peserta Didik yang Cerdas dan Berkarakter', tooltip: 'Menambahkan judul konten pada Carousel.' },
            { type: 'text', name: 'content', label: 'Isi', default: 'Menyampaikan Informasi: Konten berfungsi sebagai media untuk menyampaikan informasi, baik itu berupa fakta, opini, atau pengetahuan kepada audiens. Konten bisa berupa tulisan, video, gambar, atau suara yang memiliki nilai informatif.', tooltip: 'Menambahkan isi konten pada Carousel.' },
            { type: 'select', name: 'button', label: 'Banyak Button', tooltip: 'Menentukan berapa banyak Button yang diinginkan pada isi sebuah Carousel.',
                options: [
                    { value: '', label: 'Tidak Ada', default: true },
                    { value: 'satu', label: 'Satu' },
                    { value: 'dua', label: 'Dua' }
                ],
            },
            { type: 'select', name: 'btn1-style', label: 'Gaya Button Utama', tooltip: 'Menentukan gaya dari Button utama pada isi sebuah Carousel.',
                options: [
                    { value: ' ultimate', label: 'Utama', default: true },
                    { value: ' primary', label: 'Primer' },
                    { value: ' secondary', label: 'Sekunder' },
                    { value: ' quiet', label: 'Minimalis' },
                    { value: ' destructive', label: 'Bahaya' }
                ],
                dependencies: {
                    button: ['satu', 'dua']
                }
            },
            { type: 'text', name: 'btn-1', label: 'Teks Button Utama', tooltip: 'Mengubah teks dari Button utama pada isi sebuah Carousel.',
                dependencies: {
                    button: ['satu', 'dua']
                }
            },
            { type: 'select', name: 'btn2-style', label: 'Gaya Button Kedua', tooltip: 'Menentukan gaya dari Button kedua pada isi sebuah Carousel.',
                options: [
                    { value: ' ultimate', label: 'Utama' },
                    { value: ' primary', label: 'Primer' },
                    { value: ' secondary', label: 'Sekunder', default: true },
                    { value: ' quiet', label: 'Minimalis' },
                    { value: ' destructive', label: 'Bahaya' }
                ],
                dependencies: {
                    button: 'dua'
                }
            },
            { type: 'text', name: 'btn-2', label: 'Teks Button Kedua', tooltip: 'Mengubah teks dari Button kedua pada isi sebuah Carousel.',
                dependencies: {
                    button: 'dua'
                }
            }
      ], defaultValue: [], tooltip: 'Daftar isi konten yang akan ditampilkan pada Carousel.' }
    ],
    generateHTML: (options) => {
        function isVideo(src) {
            const videoExtensions = /\.(mp4|webm|ogg|ogv|mov)$/i;
            return videoExtensions.test(src);
        }

        const carouselHTML = options.options && Array.isArray(options.options)
          ? options.options
              .map((opt, index) => {
                const isDarken = opt['darken'] === true || opt['darken'] === 'true';
                            
                return `
                <div class="carousel-item${opt.latar ? isDarken ? ' darken' : '' : ' surface-default'}${opt.latar ? isDarken ? opt.pos : '' : ''}"${opt.latar ? isVideo(opt.url) ? `>
                    <video autoplay muted loop id="myVideo" src="${opt.url}" type="video/mp4" class="video-bg"></video>
                    ${opt.header || opt.content ? `
                    <div class="wrapper justify-center gap-12">
                        <div class="flex column justify-center text-center items-center width-75 full-mobile text-balance gap-7">
                            <h1>${opt.header}</h1>
                            <p>${opt.content}</p>
                            ${opt.button == 'satu' ? `
                            <div class="flex row gap-5 wrap">
                                <a href="#" class="button${opt['btn1-style']}">${opt['btn-1'] || 'Selengkapnya'}</a>
                            </div>` : opt.button == 'dua' ? `
                            <div class="flex row gap-5 wrap">
                                <a href="#" class="button${opt['btn1-style']}">${opt['btn-1'] || 'Selengkapnya'}</a>
                                <a href="#" class="button${opt['btn2-style']}">${opt['btn-2'] || 'Selengkapnya'}</a>
                            </div>
                            ` : ''}
                        </div>
                    </div>` : ''}
                    ` : ` style="background-image: url(${opt.url});">
                    ${opt.header || opt.content ? `
                    <div class="wrapper justify-center gap-12">
                        <div class="flex column justify-center text-center items-center width-75 full-mobile text-balance gap-7">
                            <h1>${opt.header}</h1>
                            <p>${opt.content}</p>
                            ${opt.button == 'satu' ? `
                            <div class="flex row gap-5 wrap">
                                <a href="#" class="button${opt['btn1-style']}">${opt['btn-1'] || 'Selengkapnya'}</a>
                            </div>` : opt.button == 'dua' ? `
                            <div class="flex row gap-5 wrap">
                                <a href="#" class="button${opt['btn1-style']}">${opt['btn-1'] || 'Selengkapnya'}</a>
                                <a href="#" class="button${opt['btn2-style']}">${opt['btn-2'] || 'Selengkapnya'}</a>
                            </div>
                            ` : ''}
                        </div>
                    </div>` : ''}
                ` : isVideo(opt.url) ? `>
                    ${opt.header || opt.content ? `
                    <div class="wrapper gap-12${opt.swap ? ' row-reverse' : ''}">
                        <div class="flex column justify-center width-50 text-balance gap-7">
                            <h1>${opt.header}</h1>
                            <p>${opt.content}</p>
                            ${opt.button == 'satu' ? `
                            <div class="flex row gap-5 wrap">
                                <a href="#" class="button${opt['btn1-style']}">${opt['btn-1'] || 'Selengkapnya'}</a>
                            </div>` : opt.button == 'dua' ? `
                            <div class="flex row gap-5 wrap">
                                <a href="#" class="button${opt['btn1-style']}">${opt['btn-1'] || 'Selengkapnya'}</a>
                                <a href="#" class="button${opt['btn2-style']}">${opt['btn-2'] || 'Selengkapnya'}</a>
                            </div>
                            ` : ''}
                        </div>
                        <div class="flex column justify-center width-50 items-center">
                            <video class="rounded-16 full" autoplay controls loop id="myVideo" src="${opt.url}" type="video/mp4">
                            </video>
                        </div>
                    </div> 
                    ` : ''}
                ` : `>
                    ${opt.header || opt.content ? `
                    <div class="wrapper gap-12${opt.swap ? ' row-reverse' : ''}">
                        <div class="flex column justify-center width-50 text-balance gap-7">
                            <h1>${opt.header}</h1>
                            <p>${opt.content}</p>
                            ${opt.button == 'satu' ? `
                            <div class="flex row gap-5 wrap">
                                <a href="#" class="button${opt['btn1-style']}">${opt['btn-1'] || 'Selengkapnya'}</a>
                            </div>` : opt.button == 'dua' ? `
                            <div class="flex row gap-5 wrap">
                                <a href="#" class="button${opt['btn1-style']}">${opt['btn-1'] || 'Selengkapnya'}</a>
                                <a href="#" class="button${opt['btn2-style']}">${opt['btn-2'] || 'Selengkapnya'}</a>
                            </div>
                            ` : ''}
                        </div>
                        <div class="flex column justify-center width-50 items-center">
                            <div class="image">
                                <img class="rounded-16" src="${opt.url}">
                            </div>
                        </div>
                    </div> 
                    ` : ''}
                `}
                </div>
                `;
              })
              .join('\n')
          : '';
      
        return `
        <div class="carousel${options.drag ? ' draggable' : ''}${options.loop ? ' loop' : ''}${options.autoplay ? ' autoplay' : ''}${options.full ? ' full' : ''}${options.clear ? ' clear' : ''}${options['nav'] == 'both' ? ' arrow dots' : options['nav'] == 'arrow' ? ' arrow' : options['nav'] == 'dots' ? ' dots' : ''}" data-carousel-visible="1" data-sliding-span="1" data-autoplay-duration="5000">
            <div class="carousel-inner">
                ${carouselHTML}
            </div>
        </div>`;
    },
    generatePreviewHTML: function(options) {
      return this.generateHTML(options);
    }
};