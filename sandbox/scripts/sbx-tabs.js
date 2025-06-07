export default {
  customization: [
    { type: 'select', name: 'style', label: 'Arah', tooltip: 'Memilih arah tampilan daftar Tabs.',
        options: [
            { value: ' vertical', label: 'Vertikal', default: true },
            { value: ' horizontal', label: 'Horizontal' },
        ]
    },
    { type: 'switch', name: 'full', label: 'Lebar Penuh', tooltip: 'Membuat Tabs menggunakan lebar penuh (hanya berlaku untuk arah horizontal).',
        dependencies: {
            style: [' horizontal']
        }
    },
    { type: 'array', name: 'options', label: 'Daftar Tab', span: 2, itemTemplate: [
        { type: 'text', name: 'menu', label: 'Menu Tab', placeholder: 'Masukkan nama Menu Tab', tooltip: 'Tentukan tulisan yang tampil sebagai menu Tab.' },
        { type: 'text', name: 'content', label: 'Isi Tab', placeholder: 'Masukkan isi Tab', tooltip: 'Tentukan teks yang akan ditampilkan sebagai isi ketika menu Tab diaktifkan.' }
    ], defaultValue: [], tooltip: 'Tentukan daftar menu Tab dan isinya.' }
  ],
  generateHTML: (options) => {
    const menuHTML = options.options && options.options.length > 0
        ? options.options
            .map((opt, index) => `<a href="#" class="item" id="tab-menu-${index + 1}">${opt.menu || '<!-- Ketikkan nama menu Tab. -->'}</a>`)
            .join('\n')
        : '';

    const contentHTML = options.options && options.options.length > 0
        ? options.options
            .map((opt, index) => `<div class="item" id="tab-content-${index + 1}">${opt.content || '<!-- Masukkan isi yang ingin ditampilkan ketika menu Tab diaktifkan. -->'}</div>`)
            .join('\n')
        : '';

    return `
    <div class="tabs no-update ${options['style']}${options.style == ' horizontal' ? options.full ? ' full' : '' : ''}">
        <div class="menu">
            ${menuHTML}
        </div>
        <div class="content">
            ${contentHTML}
        </div>
    </div>
    `;
  },
  generatePreviewHTML: function(options) {
    const menuHTML = options.options && options.options.length > 0
        ? options.options
            .map((opt, index) => `<a href="#" class="item" id="tab-menu-${index + 1}">${opt.menu || 'Tab tanpa Nama'}</a>`)
            .join('\n')
        : '';

    const contentHTML = options.options && options.options.length > 0
        ? options.options
            .map((opt, index) => `<div class="item" id="tab-content-${index + 1}">${opt.content || '<h1 class="display-lg mb-5">Isi Tab kosong.</h2><p>Bagian ini mendukung kode HTML untuk pemformatan.</p>'}</div>`)
            .join('\n')
        : '';

    return `
    <div class="tabs no-update ${options['style']}${options.style == ' horizontal' ? options.full ? ' full' : '' : ''}">
        <div class="menu">
            ${menuHTML}
        </div>
        <div class="content">
            ${contentHTML}
        </div>
    </div>
    `;
  },
};