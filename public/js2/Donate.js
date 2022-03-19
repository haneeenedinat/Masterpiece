var namecloth=document.getElementById('cloth_name');
let description=document.getElementById('cloth_description');
let categorie_id=document.querySelector('#categorie_id');
let size=document.getElementById('size');
let clothimg=document.getElementById('cloth_img');


let Msg1=document.querySelector('.Msg1');
let Msg2=document.querySelector('.Msg2');
let Msg3=document.querySelector('.Msg3');
let Msg4=document.querySelector('.Msg4');
let Msg5=document.querySelector('.Msg5');



let submit=document.querySelector('.submit');


namecloth.addEventListener("keyup", nameTracker);
function nameTracker() {
  if (namecloth.value.length < 4 ) {
    Msg1.innerHTML = "The Name its too short";
    Msg1.style.color = 'red';
}
else{
  Msg1.innerHTML = "";
}
}

description.addEventListener("keyup", descriptionTracker);
function descriptionTracker() {
  if (description.value.length < 11) {
    Msg2.innerHTML = "Description its too short";
    Msg2.style.color = "red";
 
  } else {
    Msg2.innerHTML = " ";
  }
}



submit.addEventListener("click", (e) => {
  if (namecloth.value.length < 4 || description.value.length < 11 || select.value==""
  || size.value=="" || clothimg.value=="") {
    e.preventDefault();
  }

  if (namecloth.value==""){
    Msg1.innerHTML = "Cannot be empty";
    Msg1.style.color = "red";
  }

  if (description.value==""){
    Msg2.innerHTML = "Cannot be empty";
    Msg2.style.color = "red";
  }

  
  if(clothimg.value=="" ){
    Msg3.innerHTML = "Cannot be empty";
    Msg3.style.color = "red";
  }

  if(size.value=="" ){
    Msg4.innerHTML = "Cannot be empty";
    Msg4.style.color = "red";
  }

  if(categorie_id.value=="None" ){
    Msg5.innerHTML = "Cannot be empty";
    Msg5.style.color = "red";
  }

});


