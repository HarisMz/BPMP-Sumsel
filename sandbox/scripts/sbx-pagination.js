export default {
    customization: [
        { type: 'select', name: 'style', label: 'Gaya', span: 2, tooltip: 'Menentukan gaya untuk navigasi halaman.',
            options: [
                { value: 'arrow', label: 'Tanda Panah' },
                { value: 'number', label: 'Angka' },
                { value: 'both', label: 'Keduanya', default: true }
            ]
        }
    ],
    generateHTML: (options) => `
        ${options.style == 'both' ? `
        <div class="pagination">
            <button class="prev-page">chevron_left</button>
            <span class="page-buttons"></span>
            <button class="next-page">chevron_right</button>
        </div>` : options.style == 'arrow' ? `
        <div class="pagination">
            <button class="prev-page">chevron_left</button>
            <button class="next-page">chevron_right</button>
        </div>
        ` : `
        <div class="pagination">
            <span class="page-buttons"></span>
        </div>
        `}
    `,
    generatePreviewHTML: (options) => `
        ${options.style == 'both' ? `
        <div class="pagination">
            <button class="prev-page" disabled>
                <span>chevron_left</span>
            </button>
            <span class="page-buttons"><button class="page-num active">1</button><button class="page-num">2</button><button class="page-num">3</button><span class="ellipsis">...</span><button class="page-num">8</button></span>
            <button class="next-page">
                <span>chevron_right</span>
            </button>
        </div>` : options.style == 'arrow' ? `
        <div class="pagination">
            <button class="prev-page" disabled>
                <span>chevron_left</span>
            </button>
            <button class="next-page">
                <span>chevron_right</span>
            </button>
        </div>
        ` : `
        <div class="pagination">
            <span class="page-buttons"><button class="page-num active">1</button><button class="page-num">2</button><button class="page-num">3</button><span class="ellipsis">...</span><button class="page-num">8</button></span>
        </div>
        `}
    `
};