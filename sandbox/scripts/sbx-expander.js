export default {
    customization: [
        { type: 'text', name: 'content', label: 'Isi Expander', tooltip: 'Teks yang ditampilkan pada Expander.' },

        { type: 'stepper', name: 'line-clamp', label: 'Jumlah Baris', default: '3', min: '1', max: '10', tooltip: 'Jumlah baris teks yang terlihat ketika Expander tertutup.' }
    ],
    generateHTML: (options) => `
    <div class="expander">
        <div class="expander-content" line-clamp="${options['line-clamp']}">
            ${options['content'] || '<!-- Masukkan teks Expander di sini -->'}
        </div>
        <a href="#" class="expander-trigger">Selengkapnya</a>
    </div>`,
    generatePreviewHTML: (options) => `
    <div class="expander">
        <div class="expander-content" line-clamp="${options['line-clamp']}">
            ${options['content'] || 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'}
        </div>
        <a href="#" class="expander-trigger">Selengkapnya</a>
    </div>`
};