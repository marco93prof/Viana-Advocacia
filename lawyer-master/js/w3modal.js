
// Get the modal
var modal1 = document.getElementById("modal1_practice");
var modal2 = document.getElementById("modal2_practice");
var modal3 = document.getElementById("modal3_practice");

// Get the button that opens the modal
var btn1 = document.getElementById("btn1_practice");
var btn2 = document.getElementById("btn2_practice");
var btn3 = document.getElementById("btn3_practice");

// When the user clicks the button, open the modal 
btn1.onclick = function() {
  modal1.style.display = "block";
}
btn2.onclick = function() {
  modal2.style.display = "block";
}
btn3.onclick = function() {
  modal3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
var span1 = document.getElementById("modalclose1_practice"); // Get the <span> element that closes the modal
span1.onclick = function() {
  modal1.style.display = "none";
}
var span2 = document.getElementById("modalclose2_practice"); // Get the <span> element that closes the modal
span2.onclick = function() {
  modal2.style.display = "none";
}
var span3 = document.getElementById("modalclose3_practice"); // Get the <span> element that closes the modal
span3.onclick = function() {
  modal3.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
  if (event.target == modal2) { 
    modal2.style.display = "none";
  }
  if (event.target == modal3) { 
    modal3.style.display = "none";
  }
}