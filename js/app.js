//splash disappears after 4 sec
// const splash  = document.querySelector('.splash-screen');

// window.addEventListener('DOMContentLoaded',()=>{   
//     setTimeout(()=>{
//         splash.classList.add('display');
//     },4000);

// });


//login and register form
const form1 = document.getElementById("form1");
const form2 = document.getElementById("form2");

const signup = document.getElementById("signup");
const signin = document.getElementById("signin");

let query = window.matchMedia("(max-width:360px)");
let query1 = window.matchMedia("(max-width:320px)");
let query2 = window.matchMedia("(max-width:280px)");

signup.onclick = function(){
    form1.style.left = "-450px";
    form2.style.left = "30px";

    if(query.matches)
    {

    form1.style.left = "-450px";
    form2.style.left = "17px";

    }
    else if(query1.matches)
    {
        form1.style.left = "-450px";
        form2.style.left = "-2px";
    }

    else if(query2.matches)
    {
        form1.style.left = "-450px";
        form2.style.left = "0px";
    }
}

signin.onclick = function(){
    form1.style.left = "30px";
    form2.style.left = "450px";

    if(query.matches)
    {
    form1.style.left = "17px";
    form2.style.left = "450px";
    }

    else if(query1.matches)
    {
        form1.style.left = "-2px";
        form2.style.left = "450px";
    }

    else if(query2.matches)
    {
        form1.style.left = "0px";
        form2.style.left = "450px";
    }
}

