export default {
    customization: [
        { type: 'select', name: 'flex-direction', label: 'Arah Konten', tooltip: 'Menentukan arah dari susunan konten di dalam Flexbox, apakah dalam bentuk <b>row</b> (baris dari kiri ke kanan), <b>column</b> (kolom dari atas ke bawah), <b>row reverse</b> (baris dari kanan ke kiri), atau <b>column reverse</b> (kolom dari bawah ke atas).',
            options: [
                { value: ' row', label: 'Row', default: true },
                { value: ' column', label: 'Column' },
                { value: ' row-reverse', label: 'Row Reverse' },
                { value: ' column-reverse', label: 'Column Reverse' }
            ]
        },
        { type: 'stepper', name: 'gap', label: 'Jarak', default: '1', min: '0', max: '14', tooltip: 'Menentukan jarak antar konten. Masukkan nilai dari 0 – 14.' },
        { type: 'select', name: 'justify-content', label: 'Komposisi Konten', tooltip: 'Menentukan komposisi konten secara horizontal (untuk arah row) atau secara vertikal (untuk arah column).',
            options: [
                { value: '', label: 'Default', default: true },
                { value: ' justify-start', label: 'Justify Start' },
                { value: ' justify-center', label: 'Justify Center' },
                { value: ' justify-end', label: 'Justify End' },
                { value: ' justify-between', label: 'Justify Between' },
                { value: ' justify-around', label: 'Justify Around' },
                { value: ' justify-evenly', label: 'Justify Evenly' }
            ]
        },
        { type: 'select', name: 'align-items', label: 'Komposisi Item', tooltip: 'Menentukan komposisi item secara vertikal (untuk arah row) atau secara horizontal (untuk arah column).',
            options: [
                { value: '', label: 'Default', default: true },
                { value: ' items-start', label: 'Items Start' },
                { value: ' items-center', label: 'Items Center' },
                { value: ' items-end', label: 'Items End' }
            ]
        },
        { type: 'stepper', name: 'pt', label: 'Padding Atas', default: '1', min: '0', max: '14', tooltip: 'Menentukan jarak antara batas atas Flexbox dengan konten. Masukkan nilai dari 0 – 14.' },
        { type: 'stepper', name: 'pr', label: 'Padding Kanan', default: '1', min: '0', max: '14', tooltip: 'Menentukan jarak antara batas kanan Flexbox dengan konten. Masukkan nilai dari 0 – 14.' },
        { type: 'stepper', name: 'pb', label: 'Padding Bawah', default: '1', min: '0', max: '14', tooltip: 'Menentukan jarak antara batas bawah Flexbox dengan konten. Masukkan nilai dari 0 – 14.' },
        { type: 'stepper', name: 'pl', label: 'Padding Kiri', default: '1', min: '0', max: '14', tooltip: 'Menentukan jarak antara batas kiri Flexbox dengan konten. Masukkan nilai dari 0 – 14.' }
    ],
    generateHTML: (options) => `
    <div class="flex${options['flex-direction']}${options['justify-content']}${options['align-items']} gap-${options.gap}${options.pt > '0' ? ` pt-${options.pt}` : ''}${options.pr > '0' ? ` pr-${options.pr}` : ''}${options.pb > '0' ? ` pb-${options.pb}` : ''}${options.pl > '0' ? ` pl-${options.pl}` : ''}">
        <!-- Masukkan konten di sini -->
    </div>`,
    generatePreviewHTML: (options) => `
    <section class="container height-full">
        <div class="wrapper">
            <div class="flex${options['flex-direction']}${options['justify-content']}${options['align-items']} gap-${options.gap}${options.pt > '0' ? ` pt-${options.pt}` : ''}${options.pr > '0' ? ` pr-${options.pr}` : ''}${options.pb > '0' ? ` pb-${options.pb}` : ''}${options.pl > '0' ? ` pl-${options.pl}` : ''} border-subdued">
                <div class="surface-foreground text-inverse body-lg bold p-5 rounded-12 flex justify-center items-center" style="width: fit-content; height: fit-content;">Pratinjau Item 1</div>
                <div class="surface-foreground text-inverse body-lg bold p-5 rounded-12 flex justify-center items-center" style="width: fit-content; height: fit-content;">Pratinjau Item 2</div>
                <div class="surface-foreground text-inverse body-lg bold p-5 rounded-12 flex justify-center items-center" style="width: fit-content; height: fit-content;">Pratinjau Item 3</div>
                <div class="surface-foreground text-inverse body-lg bold p-5 rounded-12 flex justify-center items-center" style="width: fit-content; height: fit-content;">Pratinjau Item 4</div>
                <div class="surface-foreground text-inverse body-lg bold p-5 rounded-12 flex justify-center items-center" style="width: fit-content; height: fit-content;">Pratinjau Item 5</div>
            </div>
        </div>
    </section>
    `
};