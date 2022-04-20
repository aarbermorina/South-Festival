//Delete
var del = document.getElementById('deleteBtn');
var deleteId = document.querySelector('.deleteId');
var deleteForm = document.getElementById('deleteForm');
var deleteExit = document.getElementsByClassName("close")[0];

//Database Buttons
del.onclick = function(event) {
    deleteForm.style.display = "block";
    event.preventDefault();
}

//Exit functions
deleteExit.onclick = function() {
  deleteId.value = '';
  deleteForm.style.display = "none";
}

window.onclick = function(event) {
  if ( event.target == deleteForm) {
    deleteForm.style.display = "none";
  }
}