const pass1= document.getElementById('pass');
const icon1=document.getElementById('icon');

icon1.addEventListener('click',()=>{
if(pass1.getAttribute('type')==='password'){
    pass1.setAttribute('type','text');
    icon1.style.background="url('../img/close_eyes_mini.png')";
    icon1.style.backgroundRepeat="no-repeat";
}
else {
    pass1.setAttribute('type','password');
    icon1.style.background="url('../img/open_eyes_mini.png')";
    icon1.style.backgroundRepeat="no-repeat";
}
});