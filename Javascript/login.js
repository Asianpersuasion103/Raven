const container= document.getElementById('continer');
const registerBn=document.getElementById('register');
const loginBtn=getElementById('login');

registerBn.addEventListener('click', ()=>{
    container.classList.add("active");
})
loginBtn.addEventListener('click', ()=>{
    container.classList.remove("active");

})
