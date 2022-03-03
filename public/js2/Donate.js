var namecloth=document.getElementById('cloth_name');
let description=document.getElementById('cloth_description');
let select=document.getElementById('categorie_id');
let Msg1=document.getElementsByClassName('Msg1');
let Msg2=document.getElementsByClassName('Msg2');
let submit=document.getElementById('submit');



namecloth.addEventListener("keyup", nameTracker);
function nameTracker() {
  if (namecloth.value.length < 3 ) {
    Msg1.style.color = "red";
    Msg1.innerHTML = "TheName length must be greater than 3 characters";
    nameclothState = true;
 
  } else {
    Msg1.innerHTML = " ";
  }
}

description.addEventListener("keyup", descriptionTracker);
function descriptionTracker() {
  if (description.value.length < 15) {
    Msg2.style.color = "red";
    Msg2.innerHTML = "Description its too short";
 
  } else {
    Msg2.innerHTML = " ";
  }
}


submit.addEventListener("click", (e) => {
    if (!nameclothState) {
      e.preventDefault();
    //   Msg1.style.color = "red";
    //   Msg1.innerHTML = "TheName length must be greater than 3 characters";
    }
 
  });
  

