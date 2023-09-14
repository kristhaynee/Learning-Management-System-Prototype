const observer = new IntersectionObserver(entries=>{
    entries.forEach(entry=>{
        if(entry.isIntersecting){
            entry.target.classList.add('scroll-show')
        }
    })
})

const scrollHidden = document.querySelectorAll('.scroll-hidden')
scrollHidden.forEach(el=> observer.observe(el))
