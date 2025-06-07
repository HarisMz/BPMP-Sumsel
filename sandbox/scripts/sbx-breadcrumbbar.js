export default {
    customization: [
        { type: 'switch', name: 'collapsed', label: 'Ringkas', span: 2, tooltip: 'Ringkas tampilan dari Breadcrumb Bar jika daftar hierarki memiliki lebih dari 6.' },
        { type: 'array', name: 'options', label: 'Daftar Hierarki', span: 2, itemTemplate: [
                { type: 'text', name: 'text',default: 'Beranda', label: 'Nama Hierarki', tooltip: 'Teks yang ditampilkan pada hierarki di Breadcrumb Bar.', span: 2 }
            ],
            defaultValue: [],
            tooltip: 'Daftar hierarki yang akan ditampilkan pada Breadcrumb Bar.'
        }
    ],
    generateHTML: (options) => {
        const optionsHTML = options.options && options.options.length > 0
            ? options.options
                .map(opt => `<li class="item"><a href="#">${opt.text}</a></li>`)
                .join('\n')
            : '';
        return `
        <nav class="breadcrumb${options.collapsed ? ' collapsed' : ''}" id="breadcrumb">
            <ul>
                ${optionsHTML}
            </ul>
        </nav>`
    },
    generatePreviewHTML: (options) => {
        const optionsHTML = options.options && options.options.length > 0
            ? options.options
                .map(opt => `<li class="item"><a href="#">${opt.text}</a></li>`)
                .join('\n')
            : '';
        return `
        <nav class="breadcrumb${options.collapsed ? ' collapsed' : ''}" id="breadcrumb">
            <ul>
                ${optionsHTML}
            </ul>
        </nav>`
    }
};