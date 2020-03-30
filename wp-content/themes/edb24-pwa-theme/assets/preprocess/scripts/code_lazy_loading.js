
const lazy_receiver = document.getElementById("lazy_load_shell")

window.requestIdleCallback(() => {
    const LAZY_CHUNKS = [
        ...Array.from(document.querySelectorAll("noscript.lazyload")),
        ...Array.from(document.querySelectorAll("template.lazyload"))
    ]
    // console.log(LAZY_CHUNKS[0])
    // console.log(LAZY_CHUNKS[1].content.cloneNode(true))
    // lazy_receiver.appendChild(LAZY_CHUNKS[0])

});