function openClosedEye(){
    const icone=document.querySelector("#iconeEye");
    const input=document.querySelector("#inputCredAdm");
    if(input.type=="password"){
        input.type="text";
        icone.classList.replace("fa-eye-slash","fa-eye");
    }else{
        input.type="password";
        icone.classList.replace("fa-eye","fa-eye-slash");
    }
}