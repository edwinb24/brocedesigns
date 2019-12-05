class customCorner {
    paint(ctx,size,props) {
        console.log(ctx);
    }
}

registerPaint('custom_corner', customCorner)