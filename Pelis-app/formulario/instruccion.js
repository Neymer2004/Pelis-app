
//fiuncion que captura datos
function captura(){
    var nombre=document.getElementById("nombre").value;
    var dni=document.getElementById("dni").value;
    var telefono=document.getElementById("telefono").value;
    var telefono=document.getElementById("correo").value;
    
    
  /* alert (nombre); */

  if(nombre==""){
    alert("el nombre es obrigatorio");
    document.getElementById("nombre").focus();
  }else{
  if(dni==""){
    alert("el DNI es obrigatorio");
    document.getElementById("dni").focus();
  }else{
    if(telefono==""){
        alert("el telefono es obrigatorio"); 
        document.getElementById("telefono").focus();
  }else{
    console.log(nombre + " " + dni +" "+ telefono);
    document.getElementById("nombre").value="";
    document.getElementById("dni").value="";
    document.getElementById("telefono").value="";
    document.getElementById("nombre").focus();
  }
  }  
}
}