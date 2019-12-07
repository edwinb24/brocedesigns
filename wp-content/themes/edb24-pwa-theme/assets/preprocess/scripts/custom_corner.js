class customCorner {

    static get inputProperties() {
        return ['--radius'];
    }

    paint(ctx,size,props) {
        console.log(ctx);
        let radius = Number(props.get('--radius').toString().replace('px', ''))
        if (props.get('--radius').toString().includes("%")) {
            console.log(radius);
            radius = Number(props.get('--radius').toString().replace('%', ''))
            console.log(radius);
            let radius_x = Math.min(radius * size.width / 100, size.width / 2)
            let radius_y = Math.min(radius * size.height / 100, size.height / 2)
            radius = Math.sqrt((Math.pow(radius_x,2)*(Math.pow(radius_y,2))))
        }
        console.log(radius)
        
        //Creating Border
        // ctx.beginPath()
        // ctx.moveTo(0, 0)
        // ctx.lineTo(0, size.height - radius)
        // ctx.lineTo(radius, size.height)
        // ctx.lineTo(size.width, size.height)
        // ctx.stroke()

        //Masking
        ctx.beginPath()
        ctx.moveTo(0, 0)
        ctx.lineTo(0, size.height - radius)
        ctx.lineTo(radius, size.height)
        ctx.lineTo(size.width, size.height)
        ctx.lineTo(size.width, 0 + radius)
        ctx.lineTo(size.width - radius, 0)
        ctx.lineTo(0, 0)
        ctx.fillStyle = "red";
        ctx.closePath()
        ctx.fill()

    }
}

registerPaint('custom_corner', customCorner)