const feedbacks = document.getElementById('feedbacks')

if (feedbacks.innerHTML) {
    setTimeout(()=>{
        feedbacks.classList.replace('-top-20','top-12')
        setTimeout(()=>{
            feedbacks.classList.replace('top-12','-top-20')
        },3000)
    },100)
}
