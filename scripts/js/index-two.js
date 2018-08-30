var showpassBtn = document.getElementById("showpass");

showpassBtn.addEventListener("click", showPassword);

function showPassword(){
    if(document.getElementById('password').type === "password"){
        document.getElementById('password').type = "text";
    }
    else{
        document.getElementById('password').type = "password";
    }
}
