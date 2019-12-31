// setSceneHeight emulate the Z- axis depth, since we are scrolling vertically
// the height combine how fast our scrolling is our camera perspective, etc. and 
// make everything come together.

document.addEventListener("DOMContentLoaded", () => { setSceneHeight()})

function setSceneHeight () {
    console.log("Im working1")

    let list_of_items = document.getElementsByClassName("jobs")
    let number_of_items = list_of_items.length
    let item_z_index = parseFloat(getComputedStyle(document.documentElement).getPropertyValue("--itemZ"))
    let perspective = parseFloat(getComputedStyle(document.documentElement).getPropertyValue("--scenePerspective"))
    let camera_speed = parseFloat(getComputedStyle(document.documentElement).getPropertyValue("--cameraSpeed"))
    let height = window.innerHeight + perspective * camera_speed * item_z_index * camera_speed * number_of_items
    document.documentElement.style.setProperty("--viewportHeight", height)
}

// moveCamera simulate the movement of the camera by converting the user 
//scrolling onto movement on a 3D space

document.addEventListener("DOMContentLoaded", () => {
    window.addEventListener("scroll", moveCamera)
    setSceneHeight()
})

function moveCamera() {
    document.documentElement.style.setProperty("--cameraZ", window.pageYOffset)
    console.log("Im working2")
}
