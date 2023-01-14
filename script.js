let navbar=document.getElementById("navbar");
let closebtn=document.getElementById("close");
let menubtn=document.getElementById("bar");
function show()
{
    navbar.style.display="block";
    closebtn.style.display="block";
    menubtn.style.display="none";
}

function hide()
{
    navbar.style.display="none";
    closebtn.style.display="none";
    menubtn.style.display="block";
}
