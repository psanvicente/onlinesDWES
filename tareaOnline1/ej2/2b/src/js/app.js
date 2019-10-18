"use strict";
var haTrabajado, puesto;

var sinTrabajar = document.getElementById("sin");
puesto = document.getElementById("puesto");
/* 
if(document.getElementById("sin").checked){
    alert("en paro");
}
*/

function check() {
    document.getElementById("myCheck").checked = true;
  }
  
  function uncheck() {
    document.getElementById("myCheck").checked = false;
  }
  function deshabilitar(){
    document.getElementById("puesto").setAttribute("disabled","");
    document.getElementById("puesto").value = "";

    document.getElementById("empresa").setAttribute("disabled","");
    document.getElementById("empresa").value = "";

    document.getElementById("anios").setAttribute("disabled","");
    document.getElementById("anios").value = "";

    document.getElementById("inicio").setAttribute("disabled","");
    document.getElementById("inicio").value = "";

    document.getElementById("fin").setAttribute("disabled","");
    document.getElementById("fin").value = "";

    document.getElementById("actualmente").setAttribute("disabled","");
    
  }
  
  function habilitar(){
    document.getElementById("puesto").removeAttribute("disabled","");
    document.getElementById("empresa").removeAttribute("disabled","");
    document.getElementById("anios").removeAttribute("disabled","");
    document.getElementById("inicio").removeAttribute("disabled","");
    document.getElementById("fin").removeAttribute("disabled","");
    document.getElementById("actualmente").removeAttribute("disabled","");
  }
  function check(){
      if(document.getElementById("actualmente").checked){
        document.getElementById("fin").setAttribute("disabled","");
        document.getElementById("fin").value = "";        
      }else{
        document.getElementById("fin").removeAttribute("disabled","");
      }
  }