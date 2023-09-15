"use strict"

$(document).ready(function () {
    const htmlBlock = document.documentElement;
    const saveUserTheme = localStorage.getItem("user-theme");

    let userTheme;
    if(window.matchMedia){
        userTheme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    }
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e =>{
        !saveUserTheme ? changeTheme() :null;
    });
    const themeButton = document.querySelector('.page__theme');
    if(themeButton){
        themeButton.addEventListener("click", e =>{
            changeTheme(true);
        });
    }

    function setThemeClass(){
        if(saveUserTheme){
            htmlBlock.classList.add(saveUserTheme);
        }
        else{
            htmlBlock.classList.add(userTheme);
        }
    }
    setThemeClass();

    function setThemeIcon(){
        let currentTheme = htmlBlock.classList.contains('light') ? 'light' : 'dark';
        if (currentTheme === 'light') {
            themeButton.innerHTML = '<i class="fa-regular fa-sun"></i>';
        } else {
            themeButton.innerHTML = '<i class="fa-solid fa-moon"></i>';
        }
    }
    function changeTheme(saveTheme = false){
        let currentTheme = htmlBlock.classList.contains('light') ? 'light' : 'dark';
        let newTheme;
        if (currentTheme === 'light') {
            newTheme = 'dark';
        } else {
            newTheme = 'light';
        }
        htmlBlock.classList.remove(currentTheme);
        htmlBlock.classList.add(newTheme);
        saveTheme ? localStorage.setItem('user-theme', newTheme) : null; 
        setThemeIcon();
    }
    setThemeIcon();
});