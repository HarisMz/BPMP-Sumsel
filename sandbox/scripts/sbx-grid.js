export default {
    customization: [
        { type: 'stepper', name: 'grid', label: 'Kolom', default: '2', min: '1', max: '10', tooltip: 'Menentukan banyaknya kolom yang akan ditampilkan dalam satu baris. Masukkan nilai dari 1 – 10.' },
        { type: 'stepper', name: 'gap', label: 'Jarak', default: '1', min: '0', max: '14', tooltip: 'Menentukan jarak antar konten. Masukkan nilai dari 0 – 14.' },
        { type: 'stepper', name: 'pt', label: 'Padding Atas', default: '1', min: '0', max: '14', tooltip: 'Menentukan jarak antara batas atas Grid dengan konten. Masukkan nilai dari 0 – 14.' },
        { type: 'stepper', name: 'pr', label: 'Padding Kanan', default: '1', min: '0', max: '14', tooltip: 'Menentukan jarak antara batas atas Grid dengan konten. Masukkan nilai dari 0 – 14.' },
        { type: 'stepper', name: 'pb', label: 'Padding Bawah', default: '1', min: '0', max: '14', tooltip: 'Menentukan jarak antara batas atas Grid dengan konten. Masukkan nilai dari 0 – 14.' },
        { type: 'stepper', name: 'pl', label: 'Padding Kiri', default: '1', min: '0', max: '14', tooltip: 'Menentukan jarak antara batas atas Grid dengan konten. Masukkan nilai dari 0 – 14.' }
    ],
    generateHTML: (options) => `<div class="grid grid-${options.grid} gap-${options.gap}${options.pt > '0' ? ` pt-${options.pt}` : ''}${options.pr > '0' ? ` pr-${options.pr}` : ''}${options.pb > '0' ? ` pb-${options.pb}` : ''}${options.pl > '0' ? ` pl-${options.pl}` : ''}"></div>`,
    generatePreviewHTML: (options) => `
    <section class="container height-full">
        <div class="wrapper">
            <div class="border-subdued grid grid-${options.grid} gap-${options.gap}${options.pt > '0' ? ` pt-${options.pt}` : ''}${options.pr > '0' ? ` pr-${options.pr}` : ''}${options.pb > '0' ? ` pb-${options.pb}` : ''}${options.pl > '0' ? ` pl-${options.pl}` : ''}">
                <div class="surface-foreground text-inverse body-lg bold p-5 rounded-12 flex justify-center items-center">Pratinjau Item 1</div>
                <div class="surface-foreground text-inverse body-lg bold p-5 rounded-12 flex justify-center items-center">Pratinjau Item 2</div>
                <div class="surface-foreground text-inverse body-lg bold p-5 rounded-12 flex justify-center items-center">Pratinjau Item 3</div>
                <div class="surface-foreground text-inverse body-lg bold p-5 rounded-12 flex justify-center items-center">Pratinjau Item 4</div>
                <div class="surface-foreground text-inverse body-lg bold p-5 rounded-12 flex justify-center items-center">Pratinjau Item 5</div>
                <div class="surface-foreground text-inverse body-lg bold p-5 rounded-12 flex justify-center items-center">Pratinjau Item 6</div>
                <div class="surface-foreground text-inverse body-lg bold p-5 rounded-12 flex justify-center items-center">Pratinjau Item 7</div>
                <div class="surface-foreground text-inverse body-lg bold p-5 rounded-12 flex justify-center items-center">Pratinjau Item 8</div>
            </div> 
        </div>
    </section>
     `
};