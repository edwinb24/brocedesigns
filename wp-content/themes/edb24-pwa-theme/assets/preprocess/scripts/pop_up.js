/*
    Temporal Code to Handle outgoing links from the footer
    If code become permanent we'll need to find a more reiable solution
*/
window.onload = function () {
    let member_footer_link = document.getElementById("menu-item-7279")
    let producer_footer_link = document.getElementById("menu-item-7280")
    let provider_footer_link = document.getElementById("menu-item-7281")

    let member_portal = document.getElementById("member_portal")
    let producer_portal = document.getElementById("producer_portal")
    let provider_portal = document.getElementById("provider_portal")

    member_footer_link.addEventListener("click",function(){
        member_portal.click() 
        window.event.preventDefault()
    },false)

    producer_footer_link.addEventListener("click",function(){
        producer_portal.click() 
        window.event.preventDefault()
    },false)

    provider_footer_link.addEventListener("click",function(){
        provider_portal.click() 
        window.event.preventDefault()
    },false)
}

function togglePopUp(e = false) {
    let modal_background = document.getElementById("modal_background")
    let my_modal;
    if(e) {
        let my_box = `${e.id}_modal`
        my_modal = document.getElementById(my_box)
    } else {
        my_modal = document.getElementsByClassName('modal_content show_pop_up')[0]
    }
    my_modal.classList.toggle('show_pop_up')
    modal_background.classList.toggle('hidden_popup')
}
