/******************************************************************************/
const togglemenu = document.getElementById('togglemenu');
const navbarMobile = document.getElementById('navbar-mobile');
const navClose = document.getElementById('navClose');

togglemenu.addEventListener('click', showToggleMenu);
navClose.addEventListener('click',showToggleMenu);

function showToggleMenu(){
    if(navbarMobile){
        navbarMobile.classList.toggle('open');
    }
}

//nav closes after selection

document.addEventListener("click",function(e)
{
    if(e.target.closest("li"))
    {
        showToggleMenu();
    }
});
