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