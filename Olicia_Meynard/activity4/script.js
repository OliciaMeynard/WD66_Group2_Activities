'use strict';

///////////TABS ///////
const btnProjects = document.querySelectorAll('.header-sec')
const divBtns = document.querySelector('.tabs')
const tabContent = document.querySelectorAll('.tab-content')


divBtns.addEventListener('click', (e)=>{
    e.preventDefault()
    const clicked = e.target.closest('.header-sec')
    console.log(clicked)

    if(!clicked) return

    btnProjects.forEach(b => b.classList.remove('active-tab'))
    tabContent.forEach(t=> t.classList.remove('tab-content-active'))


    clicked.classList.add('active-tab')
    document.querySelector(`.tab-content-${clicked.dataset.tab}`).classList.add('tab-content-active')
})


////////////////////MENU
const menu = document.querySelector('.fa-bars')
const closee = document.querySelector('.fa-x')
const links = document.querySelectorAll('.header-sec')

menu.addEventListener('click', e=>{
    e.preventDefault()
    document.querySelector('.tabs').classList.toggle('active')
})

const closedMenu  = () =>{
    document.querySelector('.tabs').classList.remove('active');
}

closee.addEventListener('click', closedMenu)

links.forEach(n=>{
    n.addEventListener('click', closedMenu)
 
})