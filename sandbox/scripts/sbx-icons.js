export default {
    customization: [
        { type: 'text', name: 'icon-name', label: 'Ikon', span: 2, placeholder: 'Misal: home, search', tooltip: 'Nama ikon yang digunakan. Untuk daftar ikon dapat dilihat di laman <b>Material Symbols</b>.' }
    ],
    generatePreviewHTML: (options) => {
        return `
        <a href="https://fonts.google.com/icons?selected=Material+Symbols+Outlined:${options['icon-name'] || 'home'}:FILL@0;wght@400;GRAD@0;opsz@24&icon.size=24&icon.color=%235f6368" target="_blank">
            <div class="icon-preview-icon card ratio-1-1 flex column p-6 gap-3 justify-center items-center">
                <div class="text-default text-center icon-preview-text">${options['icon-name'] || 'home'}</div>
                <div class="display-lg text-center">${options['icon-name'] || 'home'}</div>
            </div>
        </a>
        <div class="spacer-10 vertical"></div>
        <div class="body-sm text-balance text-center width-85">Komponen Icons menggunakan pustaka ikon <b>Material Symbols</b> dari <b>Google</b> yang menyediakan berbagai ikon yang umum digunakan dalam antarmuka aplikasi. Silakan kunjungi laman <a href="https://fonts.google.com/icons" class="link secondary" target="_blank"><b>Material Symbols</b></a> untuk referensi nama ikon yang bisa Anda gunakan.</div>
        
        `;
    },
    generateHTML: (options) => `<i data-icon="${options['icon-name'] || 'home'}"></i>`

};