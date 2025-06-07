export default {
    customization: [
        { type: 'select', name: 'types', label: 'Komponen Pemicu', tooltip: 'Menentukan komponen pemicu dari Popup.',
            options: [
                { value: 'button', label: 'Button', default: true },
                { value: 'link', label: 'Link' }
            ]
        },
        { type: 'select', name: 'btn_style', label: 'Gaya Button', tooltip: 'Menentukan gaya dari Button.',
            options: [
                { value: ' ultimate', label: 'Utama', default: true },
                { value: ' primary', label: 'Primer' },
                { value: ' secondary', label: 'Sekunder' },
                { value: ' quiet', label: 'Minimalis' },
                { value: ' destructive', label: 'Bahaya' }
            ],
            dependencies: {
                types: 'button'
            }
        },
        { type: 'text', name: 'btn_teks', label: 'Teks Button', placeholder: 'Masukkan teks Button', tooltip: 'Menentukan teks dari Button.',
            dependencies: {
                types: 'button'
            }
        },
        { type: 'select', name: 'link_style', label: 'Gaya Link', tooltip: 'Menentukan gaya dari sebuah Link.',
            options: [
                { value: '', label: 'Primary', default: true },
                { value: ' secondary', label: 'Secondary' },
                { value: ' inverse', label: 'Inverse' }
            ],
            dependencies: {
                types: 'link'
            }
        },
        { type: 'text', name: 'link_teks', label: 'Teks Link', placeholder: 'Masukkan teks Link', tooltip: 'Menentukan teks dari sebuah Link.',
            dependencies: {
                types: 'link'
            }
        },
        { type: 'switch', name: 'noline', label: 'Tanpa Garis', tooltip: 'Menentukan apakah sebuah Link menampilkan garis bawah atau tidak.',
            dependencies: {
                types: 'link'
            }
        },


        { type: 'separator', label: 'Tampilan Popup', batas: '4', span: 2, tooltip: 'Menentukan bagaimana isi dan tampilan dari Popup.'},


        { type: 'select', name: 'size', label: 'Ukuran', tooltip: 'Menentukan ukuran dari Popup.',
            options: [
                { value: 'fit', label: 'Pas', default: true },
                { value: 'medium', label: 'Sedang' },
                { value: 'large', label: 'Besar' },
                { value: 'fill', label: 'Isi' },
                { value: 'screen', label: 'Layar' }
            ]
        },
        { type: 'text', name: 'content', label: 'Isi', placeholder: 'Masukkan sumber untuk isi popup', tooltip: 'Menentukan isi dari Popup berupa url gambar, video, atau PDF.' },

        { type: 'switch', name: 'hasclose', label: 'Icon Tutup', default: true, tooltip: 'Tampilkan tombol tutup pada popup.' },
        { type: 'switch', name: 'persistent', label: 'Persistent', tooltip: 'Membuat Popup hanya bisa ditutup dengan button atau ikon tutup.',
            dependencies: {
                hasclose: true
            }
        }
    ],
    generateHTML: (options) => { 
        function isVideo(src) {
            const videoExtensions = /\.(mp4|webm|ogg|ogv|mov)$/i;
            return videoExtensions.test(src);
        }

        function isImage(src) {
            const imageExtensions = /\.(jpg|jpeg|png|gif|bmp|webp|svg|avif)$/i;
            return imageExtensions.test(src);
        }

        function isPDF(src) {
            const pdfExtension = /\.pdf$/i;
            return pdfExtension.test(src);
        }

        return `${options.types === 'button' ? 
            `<a href="#" class="button${options['btn_style']} call-popup"
                data-popup='{
                    ${options.size === 'fit' ? '' : `"size": "${options.size}",`}
                    "content": ${JSON.stringify(
                        options.content
                            ? isVideo(options.content)
                                ? `<video class="full popup-video" autoplay controls loop id="myVideo" src="${options.content}" type="video/mp4"></video>`
                                : isImage(options.content)
                                    ? `<img class="full popup-img" src="${options.content}">`
                                    : isPDF(options.content)
                                        ? `<iframe class="popup-pdf" src="${options.content}"></iframe>`
                                        : `<iframe src="https://www.youtube.com/embed/qVU7UJMgV8U?controls=1&fs=0&modestbranding=1&color=white&iv_load_policy=3&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>`
                            : `<iframe src="https://www.youtube.com/embed/qVU7UJMgV8U?controls=1&fs=0&modestbranding=1&color=white&iv_load_policy=3&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>`
                    )}${options.hasclose === false ? `, "hasclose": false` : ''}${options.hasclose ? options.persistent ? `, "persistent": true` : '' : ''}
                }'>
                ${options['btn_teks'] || 'Tampilkan Popup'}
            </a>` :
            `<a href="#" class="link${options['link_style']}${options.noline ? ' noline' : ''} call-popup"
                data-popup='{
                    ${options.size === 'fit' ? '' : `"size": "${options.size}",`}
                    "content": ${JSON.stringify(
                        options.content
                            ? isVideo(options.content)
                                ? `<video class="full popup-video" autoplay controls loop id="myVideo" src="${options.content}" type="video/mp4"></video>`
                                : isImage(options.content)
                                    ? `<img class="full popup-img" src="${options.content}">`
                                    : isPDF(options.content)
                                        ? `<iframe class="popup-pdf" src="${options.content}"></iframe>`
                                        : `<iframe src="https://www.youtube.com/embed/qVU7UJMgV8U?controls=1&fs=0&modestbranding=1&color=white&iv_load_policy=3&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>`
                            : `<iframe src="https://www.youtube.com/embed/qVU7UJMgV8U?controls=1&fs=0&modestbranding=1&color=white&iv_load_policy=3&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>`
                    )}${options.hasclose === false ? `, "hasclose": false` : ''}${options.hasclose ? options.persistent ? `, "persistent": true` : '' : ''}
                }'>
                ${options['link_teks'] || 'Tampilkan Popup'}
            </a>`
        }`
    },
    generatePreviewHTML: (options) => {
        function isVideo(src) {
            const videoExtensions = /\.(mp4|webm|ogg|ogv|mov)$/i;
            return videoExtensions.test(src);
        }

        function isImage(src) {
            const imageExtensions = /\.(jpg|jpeg|png|gif|bmp|webp|svg|avif)$/i;
            return imageExtensions.test(src);
        }

        function isPDF(src) {
            const pdfExtension = /\.pdf$/i;
            return pdfExtension.test(src);
        }

        return `${options.types === 'button' ? 
            `<a href="#" class="button${options['btn_style']} call-popup tooltip informational" data-tooltip="Popup bisa dipanggil dari komponen mana pun.<br><b>Contoh:</b> Ini contoh popup dipanggil melalui Button." data-tooltip-position="bottom"
                data-popup='{
                    ${options.size === 'fit' ? '' : `"size": "${options.size}",`}
                    "content": ${JSON.stringify(
                        options.content
                            ? isVideo(options.content)
                                ? `<video class="full popup-video" autoplay controls loop id="myVideo" src="${options.content}" type="video/mp4"></video>`
                                : isImage(options.content)
                                    ? `<img class="full popup-img" src="${options.content}">`
                                    : isPDF(options.content)
                                        ? `<iframe class="popup-pdf" src="${options.content}"></iframe>`
                                        : `<iframe src="https://www.youtube.com/embed/qVU7UJMgV8U?controls=1&fs=0&modestbranding=1&color=white&iv_load_policy=3&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>`
                            : `<iframe src="https://www.youtube.com/embed/qVU7UJMgV8U?controls=1&fs=0&modestbranding=1&color=white&iv_load_policy=3&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>`
                    )}${options.hasclose === false ? `, "hasclose": false` : ''}${options.hasclose ? options.persistent ? `, "persistent": true` : '' : ''}
                }'>
                ${options['btn_teks'] || 'Tampilkan Popup'}
            </a>` :
            `<a href="#" class="link${options['link_style']}${options.noline ? ' noline' : ''} call-popup tooltip informational" data-tooltip="Popup bisa dipanggil dari komponen mana pun.<br><b>Contoh:</b> Ini contoh popup dipanggil melalui Link." data-tooltip-position="bottom"
                data-popup='{
                    ${options.size === 'fit' ? '' : `"size": "${options.size}",`}
                    "content": ${JSON.stringify(
                        options.content
                            ? isVideo(options.content)
                                ? `<video class="full popup-video" autoplay controls loop id="myVideo" src="${options.content}" type="video/mp4"></video>`
                                : isImage(options.content)
                                    ? `<img class="full popup-img" src="${options.content}">`
                                    : isPDF(options.content)
                                        ? `<iframe class="popup-pdf" src="${options.content}"></iframe>`
                                        : `<iframe src="https://www.youtube.com/embed/qVU7UJMgV8U?controls=1&fs=0&modestbranding=1&color=white&iv_load_policy=3&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>`
                            : `<iframe src="https://www.youtube.com/embed/qVU7UJMgV8U?controls=1&fs=0&modestbranding=1&color=white&iv_load_policy=3&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>`
                    )}${options.hasclose === false ? `, "hasclose": false` : ''}${options.hasclose ? options.persistent ? `, "persistent": true` : '' : ''}
                }'>
                ${options['link_teks'] || 'Tampilkan Popup'}
            </a>`
        }`
    }
};