export default {
    customization: [
      { type: 'text', name: 'link-href', label: 'Tautan Logo', placeholder: 'Masukkan tautan', tooltip: 'Pranala yang disematkan pada logo.' },
      { type: 'text', name: 'image', label: 'URL Image Logo', tooltip: 'Tautan atau sumber dari gambar logo.' },
      { type: 'array', name: 'options', label: 'Daftar Menu', span: 2, itemTemplate: [
            { type: 'text', name: 'menu-item', label: 'Nama Menu Utama', default: 'Transisi PAUD SD', tooltip: 'Mengubah nama menu utama.' },
            { type: 'switch', name: 'menu_dropdown', label: 'Menu Dropdown', tooltip: 'Menentukan apakah menu utama memiliki submenu sehingga perlu ditambahkan dropdown.' },
            { type: 'text', name: 'list-item', label: 'Nama Submenu Pertama', tooltip: 'Mengubah nama submenu pertama.',
                dependencies: {
                    menu_dropdown: true
                }
            },
            { type: 'switch', name: 'submenu_dropdown', label: 'Submenu Dropdown', tooltip: 'Menentukan apakah suatu submenu pertama memiliki submenu lainnya sehingga perlu ditambahkan dropdown.',
                dependencies: {
                    menu_dropdown: true
                }
            },
            { type: 'text', name: 'list-items', label: 'Nama Submenu Kedua', tooltip: 'Mengubah nama submenu kedua.',
                dependencies: {
                    submenu_dropdown: true
                }
            }
      ], defaultValue: [], tooltip: 'Daftar menu yang akan ditampilkan pada Navbar.' }
    ],
    generateHTML: (options) => {
        const optionsHTML = options.options && Array.isArray(options.options)
          ? options.options
              .map((opt, index) => {
                const isMenudrop = opt['menu_dropdown'] === true || opt['menu_dropdown'] === 'true';
                const isSubmenudrop = opt['submenu_dropdown'] === true || opt['submenu_dropdown'] === 'true';
                            
                return `
                <li class="item${isMenudrop ? ` dropdown">
                    ${opt['menu-item']}
                    <div class="dropdown-wrapper">
                        <ul class="list surface">
                            <li class="list-item${isSubmenudrop ? ` dropdown">
                                ${opt['list-item'] || 'Berita'}
                                <div class="dropdown-wrapper">
                                    <ul class="list surface">
                                        <li class="list-item"><a href="#">${opt['list-items'] || 'Terbaru'}</a></li>
                                    </ul>
                                </div>` : `">
                                <a href="#">${opt['list-item'] || 'Berita'}</a>`}
                            </li>
                        </ul>
                    </div>
                    ` : `">
                    <a href="#">${opt['menu-item']}</a>`}
                </li>
                `;
              })
              .join('\n')
          : '';
      
        return `
        <header class="header container">
            <nav class="wrapper">
                <a href="${options['link-href'] || '#'}" class="logo" style="background-image: url(${options.image || '/assets/images/site-logo/site-logo.svg'})"></a>
                <ul class="menu">
                    ${optionsHTML}
                </ul>
            </nav>
        </header>
        `;
    },
    generatePreviewHTML: function(options) {
      return this.generateHTML(options);
    }
};