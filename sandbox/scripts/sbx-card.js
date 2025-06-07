export default {
    customization: [
        { type: 'select', name: 'style', label: 'Gaya', tooltip: 'Memilih gaya Card yang diinginkan.',
            options: [
                { value: 'feature', label: 'Feature', default: true },
                { value: 'story', label: 'Story' },
                { value: 'digest', label: 'Digest' },
                { value: 'immersive', label: 'Immersive' },
            ]
        },
        { type: 'select', name: 'view', label: 'Tampilan Card', tooltip: 'Memilih ukuran tampilan Card yang diinginkan.',
            options: [
                { value: '', label: 'Biasa', default: true },
                { value: ' ratio-1-1', label: '1:1 (Square)' },
                { value: ' ratio-3-2', label: '3:2 (Landscape)' },
                { value: ' ratio-4-3', label: '4:3 (Landscape)' },
                { value: ' ratio-5-4', label: '5:4 (Landscape)' },
                { value: ' ratio-16-9', label: '16:9 (Landscape)' },
                { value: ' ratio-16-10', label: '16:10 (Landscape)' },
                { value: ' ratio-2-3', label: '2:3 (Portrait)' },
                { value: ' ratio-3-4', label: '3:4 (Portrait)' },
                { value: ' ratio-4-5', label: '4:5 (Portrait)' },
                { value: ' ratio-9-16', label: '9:16 (Portrait)' },
                { value: ' ratio-10-16', label: '10:16 (Portrait)' },
            ],
            dependencies: {
                style: ['feature', 'immersive']
            }
        },
        { type: 'text', name: 'link-href', label: 'Tautan ', placeholder: 'Masukkan tautan untuk card', tooltip: 'Memberikan tautan kepada Card.' },
        { type: 'text', name: 'link-meta', label: 'Tautan Metadata', placeholder: 'Masukkan tautan untuk metadata', tooltip: 'Memberikan tautan kepada metadata pada Card seperti penulis, dll.',
            dependencies: {
                style: ['story', 'digest']
            }
        },
        { type: 'text', name: 'image', label: 'URL Background Image', default: 'https://picsum.photos/640/360.webp?random=1728306879', tooltip: 'Menambahkan gambar background pada Card.' },
        { type: 'text', name: 'avatar', label: 'URL Avatar Image', placeholder: 'Masukkan url untuk avatar', tooltip: 'Menambahkan gambar avatar untuk Card.',
            dependencies: {
                style: ['story', 'digest', 'immersive']
            }
        },
        { type: 'text', name: 'judul', label: 'Judul Card', placeholder: 'Masukkan judul card', tooltip: 'Memberikan judul pada Card.' },
        { type: 'text', name: 'desc', label: 'Deskripsi Card', placeholder: 'Masukkan deskripsi card', tooltip: 'Memberikan deskripsi pada Card.',
            dependencies: {
                style: ['feature', 'story']
            }
        },
        { type: 'text', name: 'name', label: 'Nama', tooltip: 'Menambahkan nama penulis pada Card.',
            dependencies: {
                style: ['story', 'digest', 'immersive']
            }
        },
        { type: 'text', name: 'date', label: 'Tanggal', tooltip: 'Menambahkan tanggal Card terbit, hanya sebagai tampilan saja.',
            dependencies: {
                style: ['story']
            }
        },
        { type: 'text', name: 'viewcount', label: 'Jumlah Tampilan', tooltip: 'Mengubah jumlah orang yang melihat Card, hanya sebagai tampilan saja.',
            dependencies: {
                style: ['story']
            }
        },
        { type: 'select', name: 'button', label: 'Banyak Button', tooltip: 'Menentukan berapa banyak Button yang diinginkan pada Card.',
            dependencies: {
                style: ['story']
            },
            options: [
                { value: '', label: 'Tidak Ada', default: true },
                { value: 'satu', label: 'Satu' },
                { value: 'dua', label: 'Dua' }
            ]
        },
        { type: 'select', name: 'button-style', label: 'Gaya Button Utama', tooltip: 'Menentukan gaya dari Button Utama pada Card.',
            dependencies: {
                style: ['story'],
                button: ['satu', 'dua']
            },
            options: [
                { value: ' ultimate', label: 'Utama' },
                { value: ' primary', label: 'Primer', default: true },
                { value: ' secondary', label: 'Sekunder' },
                { value: ' quiet', label: 'Minimalis' },
                { value: ' destructive', label: 'Bahaya' }
            ]
        },
        { type: 'text', name: 'btn-1', label: 'Teks Button Utama', tooltip: 'Mengubah teks dari Button utama pada Card.',
            dependencies: {
                style: ['story'],
                button: ['satu', 'dua']
            }
        },
        { type: 'text', name: 'btn-2', label: 'Teks Button Kedua', tooltip: 'Mengubah teks dari Button kedua pada Card.',
            dependencies: {
                style: ['story'],
                button: ['dua']
            }
        },
        { type: 'select', name: 'pos', label: 'Posisi Konten', tooltip: 'Menentukan posisi konten dari Card.',
            dependencies: {
                style: ['immersive']
            },
            options: [
                { value: '', label: 'Biasa', default: true },
                { value: ' top', label: 'Atas' },
                { value: ' bottom', label: 'Bawah' }
            ]
        },
        { type: 'switch', name: 'separator', label: 'Garis Pembatas', tooltip: 'Memberikan garis pembatas pada Card.',
            dependencies: {
                style: ['immersive']
            }
        }
    ],
    generateHTML: (options) => `
    ${options.style == 'feature' ? `
        <div class="card feature${options['view']}">
            ${options['link-href'] != '' ? `<a href="${options['link-href']}">
                ${options.image ? `
                <img src="${options['image']}" class="width-62">` : ''}
                <h2 class="body-sm bold text-pretty">${options['judul'] || 'Judul Card'}</h2>
                <p class="helper text-pretty">${options['desc'] || 'Deskripsi card, jangan terlalu panjang.'}</p>
            </a>` : `
            ${options.image ? `
            <img src="${options['image']}" class="width-62">` : ''}
            <h2 class="body-sm bold text-pretty">${options['judul'] || 'Judul Card'}</h2>
            <p class="helper text-pretty">${options['desc'] || 'Deskripsi card, jangan terlalu panjang.'}</p>
            `}
        </div>` 
        : options.style == 'story' ? `
        <div class="card story">
            ${options.image ? `
            <a href="${options['link-href'] || '#'}"><div class="featured-image" style="background-image: url(${options['image']});"></div></a>` : ''}
            <div class="details">
                <div class="summary">
                    <a href="${options['link-href'] || '#'}"><div class="title">
                        ${options['judul'] || 'Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat'}
                    </div></a>
                    <div class="description">
                        ${options['desc'] || 'Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.'}
                    </div>
                </div>
                <div class="meta">
                    <a href="${options['link-meta'] || '#'}"><div class="avatar round medium" style="background-image: url(${options['avatar'] || 'https://i.pravatar.cc/150?img=1'});"></div></a>
                    <div class="info">
                        <a href="${options['link-meta'] || '#'}"><div class="authorname">
                            ${options['name'] || 'Fulan Fulana'}
                        </div></a>
                        <div class="dateview">
                            <span class="date">
                                ${options['date'] || '1 Oktober 2024'}
                            </span>
                             • 
                            <span class="viewcount">
                                ${options.viewcount ? 'Dibaca ' + options['viewcount'] + ' kali' : 'Dibaca 114 kali'}
                            </span>
                        </div>
                    </div>
                </div>
                ${options.button == 'satu' ? 
                `<div class="buttons">
                    <a href="#" class="button full${options['button-style']} first-button">${options['btn-1'] || 'Tombol Pertama'}</a>
                </div>` : options.button == 'dua' ? `
                <div class="buttons">
                    <a href="#" class="button full${options['button-style']} first-button">${options['btn-1'] || 'Tombol Pertama'}</a>
                    <a href="#" class="button full secondary second-button">${options['btn-2'] || 'Tombol Kedua'}</a>
                </div>` : ''}
            </div>
        </div>` 
        : options.style == 'digest' ? `
        <div class="card digest">
            ${options.image ? `
            <a href="${options['link-href'] || '#'}"><div class="featured-image" style="background-image: url(${options['image']});"></div></a>` : ''}
            <div class="details">
                <div class="summary">
                    <a href="${options['link-href'] || '#'}"><div class="title">
                        ${options['judul'] || 'Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat'}
                    </div></a>
                </div>
                <div class="meta">
                    <a href="${options['link-meta'] || '#'}"><div class="avatar round xs" style="background-image: url(${options['avatar'] || 'https://i.pravatar.cc/150?img=1'});"></div></a>
                    <a href="${options['link-meta'] || '#'}"><div class="authorname">
                        ${options['name'] || 'Fulan Fulana'}
                    </div></a>
                </div>
            </div>
        </div>` 
        : `
        <div class="card immersive${options['view']}${options['pos']}${options.separator ? ' separator' : ''}">${options['link-href'] != '' ? `
            <a href="${options['link-href']}">
                ${options.image ? `
                <div class="featured-image" style="background-image: url(${options['image']});"></div>` : ''}
                <div class="details">
                    <div class="summary">
                        <div class="title">
                            ${options['judul'] || 'Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat'}
                        </div>
                    </div>
                    <div class="separator-0 vertical"></div>
                    <div class="meta">
                        <div class="avatar round sm" style="background-image: url(${options['avatar'] || 'https://i.pravatar.cc/150?img=1'});"></div>
                        <div class="info">
                            <div class="authorname">
                                ${options['name'] || 'Fulan Fulana'}
                            </div>
                        </div>
                    </div>
                </div>
            </a>` : `
            ${options.image ? `
            <div class="featured-image" style="background-image: url(${options['image']});"></div>` : ''}
            <div class="details">
                <div class="summary">
                    <div class="title">
                        ${options['judul'] || 'Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat'}
                    </div>
                </div>
                <div class="separator-0 vertical"></div>
                <div class="meta">
                    <div class="avatar round sm" style="background-image: url(${options['avatar'] || 'https://i.pravatar.cc/150?img=1'});"></div>
                    <div class="info">
                        <div class="authorname">
                            ${options['name'] || 'Fulan Fulana'}
                        </div>
                    </div>
                </div>
            </div>`}
        </div>
    `}
`
};