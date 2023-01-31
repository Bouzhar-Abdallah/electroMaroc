
const menu_button = document.querySelector('#menu_button')
const mobile_menu = document.querySelector('#mobile_menu')
const menu_width = mobile_menu.getBoundingClientRect().width
document.getElementById('mobile_menu').style.left = - menu_width +'px'

let t = 1
menu_button.addEventListener("click", ()=>{
    t++
    if (t%2 == 0) {
        document.getElementById('mobile_menu').style.left = 0 +'px'
    }else{
        document.getElementById('mobile_menu').style.left = - menu_width +'px'
    }
})
