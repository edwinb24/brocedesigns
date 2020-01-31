const LAZY_IMAGES = document.querySelectorAll(".lazy_loaded")

const observer_options = {
    root: null,
    rootMargin: "0px 0px 300px 0px",
    threshold: 0
}

function preloadImage(img){
    let src = img.style.backgroundImage
    console.log("src")
    console.log(src)
    src = src.replace("?tr=w-20,h-20", ""); 
    console.log(src)
    img.style.backgroundImage = src
}

const imageObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting){
            console.log(entry.target)
            preloadImage(entry.target)
            observer.unobserve(entry.target)
        }
    });
}, observer_options)

LAZY_IMAGES.forEach(image => {
    console.log("image");
    console.log(image);
    imageObserver.observe(image)
})
