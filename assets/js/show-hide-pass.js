const passwd = document.querySelector(".personal-info input[type='password']"),
    toggleBtn = document.querySelector(".personal-info .fa-eye");

toggleBtn.onclick=()=>{
    if(passwd.type == "password"){
        passwd.type = "text";
        toggleBtn.classList.add("active");
    } else {
        passwd.type = "password";
        toggleBtn.classList.remove("active");
    }
}