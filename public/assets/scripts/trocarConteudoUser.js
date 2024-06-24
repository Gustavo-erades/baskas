function chamarConteudo(url){
    const ajax=new XMLHttpRequest();
    ajax.open('GET',url);
    ajax.onreadystatechange=()=>{
        if(ajax.readyState==4 && ajax.status==200){
            document.querySelector("#teste").innerHTML=ajax.responseText;
        }else if(ajax.status==404){
            window.location.href="../erro404.html";
        }
    };
    ajax.send();
}