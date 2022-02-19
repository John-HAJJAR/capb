const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const darkToggler = document.querySelector(".dark");
const lightToggler = document.querySelector(".light");


menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
})

closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
})  

darkToggler.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme-variables');
    // themeToggler.querySelector('span:nth.child(1)').classList.toggle('active');
    // themeToggler.querySelector('span:nth.child(2)').classList.toggle('active');

})
    
lightToggler.addEventListener('click', () => {
    document.body.classList.toggle('light-theme-variables')
})

