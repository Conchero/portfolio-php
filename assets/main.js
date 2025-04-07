//Menu mobile
const menuBtn = document.getElementById('menu-btn');
const mobileMenu = document.getElementById('mobile-menu');

menuBtn.addEventListener('click', () => {
    const isVisible = mobileMenu.classList.contains('hidden');
    if (isVisible) {
        mobileMenu.classList.remove('hidden');
    } else {
        mobileMenu.classList.add('hidden');
    }
});



const navBtn = document.querySelectorAll(".nav-button");


navBtn.forEach(el => {
    
    el.addEventListener("click", (e) => { 
        console.log(e.target.querySelector("a") )
        
        const isSelected = el.classList.contains("selected");
        // if (isSelected)
        // {
        //     el.classList.remove("selected");
        // }
        

    })
})