export default {
  customization: [
    { type: 'switch', name: 'surface', label: 'Berlatar', tooltip: 'Tambahkan latar pada List.' },
    { type: 'switch', name: 'bold', label: 'Tebal', tooltip: 'Buat List tampak lebih tebal.'},
    { type: 'switch', name: 'slim', label: 'Ringkas', tooltip: 'Buat tampilan List lebih ringkas.',
      dependencies: {
        surface: true
      }
    },
    { type: 'array', name: 'options', label: 'Isi', span: 2, itemTemplate: [
      { type: 'text', name: 'text', label: 'Label', default: 'Ini contoh List', span: 2, tooltip: 'Label dari list item yang akan ditambahkan' },
      { type: 'switch', name: 'selected', label: 'Terpilih', span: 1, tooltip: 'Menentukan apakah list item dalam keadaan terpilih atau tidak' },
      { type: 'switch', name: 'disabled', label: 'Nonaktif', span: 1, tooltip: 'Menentukan apakah list item dalam keadaan nonaktif atau tidak' },
      { type: 'text', name: 'icon-name', label: 'Ikon', span: 2, placeholder: 'Misal: home, search', tooltip: 'Nama ikon yang digunakan. Lihat komponen **Icons**.' }
    ], defaultValue: [], tooltip: 'Isi list item yang akan ditampilkan pada List.' }
  ],
  generateHTML: (options) => {
    const listClasses = [
      'list',
      options.surface ? 'surface' : '',
      options.bold ? 'bold' : '',
      options.surface ? options.slim ? 'slim' : '' : ''
    ].filter(Boolean).join(' ');

    const optionsHTML = options.options && Array.isArray(options.options)
      ? options.options
          .map((opt, index) => {
            const isSelected = opt.selected === true || opt.selected === 'true';
            const isDisabled = opt.disabled === true || opt.disabled === 'true';

            const itemClasses = [
              'list-item',
              isSelected ? 'selected' : '',
              isDisabled ? 'disabled' : ''
            ].filter(Boolean).join(' ');
            
            const iconHTML = opt['icon-name'] ? ` data-icon="${opt['icon-name']}"` : '';
            
            return `<a href="#" class="${itemClasses}"${iconHTML}><li>${opt.text}</li></a>`;
          })
          .join('\n')
      : '';

    return `<ul class="${listClasses}">\n${optionsHTML}\n</ul>`;
  },
  generatePreviewHTML: function(options) {
    return this.generateHTML(options);
  }
};