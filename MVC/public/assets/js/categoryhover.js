const categoriy_images = document.querySelectorAll('.category_image')

categoriy_images.forEach((image)=>{
    image.addEventListener('mouseover', ()=>{
        const parent = image.parentElement
        const category_name = parent.querySelector('div')
        category_name.style.left = 43 +'px'
    })
    image.addEventListener('mouseleave', ()=>{
        const parent = image.parentElement
        const category_name = parent.querySelector('div')
        category_name.style.left = -150 +'px'
    })
})