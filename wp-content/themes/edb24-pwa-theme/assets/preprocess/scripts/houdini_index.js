if('paintWorklet' in CSS) {
    CSS.paintWorklet.addModule('./wp-content/themes/edb24-pwa-theme/assets/preprocess/scripts/custom_corner.js');        
}
if('registerProperty' in CSS) {
    CSS.registerProperty({
        name: "--onhover_color1",
        syntax: '<color>',
        inherits: false,
        initialValue: '#bc6b6b'
    })    
    CSS.registerProperty({
        name: "--onhover_color2",
        syntax: '<color>',
        inherits: false,
        initialValue: '#ad8e5f'
    })
}
