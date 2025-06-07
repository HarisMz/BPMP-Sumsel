export default {
    customization: [
        { type: 'select', name: 'style', label: 'Gaya', tooltip: 'Menentukan gaya dari Collapsible.',
            options: [
                { value: ' list', label: 'List', default: true },
                { value: ' card', label: 'Card' },
            ]
        },
        { type: 'switch', name: 'accordion', label: 'Accordion', tooltip: 'Hanya satu Collapsible yang terbuka dalam satu waktu.' },
        { type: 'array', name: 'options', label: 'Daftar Collapsible', span: 2, itemTemplate: [
            { type: 'text', name: 'icon-name', label: 'Ikon', placeholder: 'Misal: home, search', tooltip: 'Nama ikon yang digunakan. Lihat komponen <b>Icons</b>.' },
            { type: 'switch', name: 'disabled', label: 'Nonaktif', tooltip: 'Menentukan apakah Collapsible dalam keadaan aktif atau nonaktif.' },
            { type: 'text', name: 'header', label: 'Judul', span: 2, default: 'Ini adalah contoh Collapsible.', tooltip: 'Mengubah judul dari Collapsible.' },
            { type: 'text', name: 'content', label: 'Isi', span: 2, default: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.', tooltip: 'Mengubah isi konten dari Collapsible.' }
        ], defaultValue: [], tooltip: 'Daftarkan judul dan konten baru dari Collapsible.' }
    ],

    generateHTML: (options) => {
        const cardHTML = options.options && options.options.length > 0
            ? options.options
                .map((opt, index) => `
                    <div class="collapsible card${opt.disabled ? ' disabled' : ''}">
                        <div class="collapsible-header" ${opt['icon-name'] ? `data-icon="${opt['icon-name']}"` : ''}>
                            ${opt['header']}
                        </div>
                        <div class="collapsible-content">
                            <p>${opt['content']}</p>
                        </div>
                    </div>
                    `)
                .join('\n')
            : '';

        const acc_cardHTML = options.options && options.options.length > 0
            ? options.options
                .map((opt, index) => `
                    <div class="collapsible card accordion ${opt.disabled ? ' disabled' : ''}">
                        <div class="collapsible-header" ${opt['icon-name'] ? `data-icon="${opt['icon-name']}"` : ''}>
                            ${opt['header']}
                        </div>
                        <div class="collapsible-content">
                            <p>${opt['content']}</p>
                        </div>
                    </div>
                    `)
                .join('\n')
            : '';

        const listHTML = options.options && options.options.length > 0
            ? options.options
                .map((opt, index) => `
                    <div class="collapsible list${opt.disabled ? ' disabled' : ''}">
                        <div class="collapsible-header" ${opt['icon-name'] ? `data-icon="${opt['icon-name']}"` : ''}>
                            ${opt['header']}
                        </div>
                        <div class="collapsible-content">
                            <p>${opt['content']}</p>
                        </div>
                    </div>
                    `)
                .join('\n')
            : '';

        const acc_listHTML = options.options && options.options.length > 0
            ? options.options
                .map((opt, index) => `
                    <div class="collapsible list accordion${opt.disabled ? ' disabled' : ''}">
                        <div class="collapsible-header" ${opt['icon-name'] ? `data-icon="${opt['icon-name']}"` : ''}>
                            ${opt['header']}
                        </div>
                        <div class="collapsible-content">
                            <p>${opt['content']}</p>
                        </div>
                    </div>
                    `)
                .join('\n')
            : '';
        
        if (options.style === ' card') {
            return options.accordion ? acc_cardHTML : cardHTML;
        } else {
            return options.accordion ? acc_listHTML : listHTML;
        }
    },
    generatePreviewHTML: function(options) {
      return this.generateHTML(options);
    }
};