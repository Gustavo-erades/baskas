function apiRegistraTitulos(){
    const mvpDoJogo=document.getElementById("mvp").value;
    const mipDoJogo=document.getElementById("mip").value;
    const bagreDoJogo=document.getElementById("bagre").value;

    const titulos=[mvpDoJogo,mipDoJogo,bagreDoJogo];

    console.log(titulos)
    
    var xhr= new XMLHttpRequest();
    xhr.open('POST','../app/services/apiRegistraTitulos.php',true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    xhr.onload=function (){
        if(xhr.status>=200 && xhr.status<400){
            var data=JSON.parse(xhr.responseText);
            console.log(data);
        }else{
            console.error('Erro ao carregar dados: '+ xhr.statusText);
        }
    }
    xhr.onerror=function (){
        console.error('Erro de rede ao tentar carregar dados.');
    }
    xhr.send('titulos='+encodeURIComponent(titulos))

}