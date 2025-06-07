export default {
    customization: [
        { type: 'text', name: 'text', label: 'Teks', default: 'Ini adalah contoh teks', span: 2, tooltip: 'Menentukan isi dari sebuah Text.' },
        { type: 'select', name: 'typography', label: 'Tipografi Teks', tooltip: 'Menentukan tipografi dari sebuah Text.',
            options: [
                { value: 'display-sm', label: 'Display Small' },
                { value: 'display-md', label: 'Display Medium' },
                { value: 'display-lg', label: 'Display Large' },
                { value: 'eyebrow-sm', label: 'Eyebrow Small' },
                { value: 'eyebrow-md', label: 'Eyebrow Medium' },
                { value: 'eyebrow-lg', label: 'Eyebrow Large' },
                { value: 'heading-sm', label: 'Heading Small' },
                { value: 'heading-md', label: 'Heading Medium' },
                { value: 'heading-lg', label: 'Heading Large' },
                { value: 'subheading', label: 'Subheading' },
                { value: 'action', label: 'Action' },
                { value: 'body-sm', label: 'Body Small' },
                { value: 'body', label: 'Body', default:true },
                { value: 'body-lg', label: 'Body Large' },
                { value: 'helper', label: 'Helper' },
                { value: 'headline-xs', label: 'Headline Ekstra Small' },
                { value: 'headline-sm', label: 'Headline Small' },
                { value: 'headline-md', label: 'Headline Medium' },
                { value: 'headline-lg', label: 'Headline Large' }
            ]
        },
        { type: 'switch', name: 'bold', label: 'Tebal', tooltip: 'Menentukan apakah tampilan sebuah Text dalam keadaan tebal atau tidak.' }
    ],
    generateHTML: (options) => `<div class="${options['typography']}${options.bold ? ' bold' : ''}">${options.text}</div>`
};