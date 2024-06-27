const form=document.querySelector('#formCard');
console.log(form);
form.addEventListener('salvarAttr', async ()=>{
    const formData= new FormData(form);
    console.log(formData);
})