//Insert
var insert = document.getElementById('insertBtn');
var userInputs = document.querySelector(".userInputs");
var insertForm = document.getElementById('insertForm');

//Delete
var del = document.getElementById('deleteBtn');
var deleteId = document.querySelector('.deleteId');
var deleteForm = document.getElementById('deleteForm');

//Exit buttons
var insertExit = document.getElementsByClassName("close")[0];
var deleteExit = document.getElementsByClassName("close")[1];

//Database Buttons
insert.onclick = function(event) {
  insertForm.style.display = "block";
  event.preventDefault();
}
del.onclick = function(event) {
  deleteForm.style.display = "block";
  event.preventDefault();
}

//Exit functions
insertExit.onclick = function() {
    userInputs.value = '';
    insertForm.style.display = "none";
}
deleteExit.onclick = function() {
  deleteId.value = '';
  deleteForm.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == insertForm || event.target == deleteForm) {
    insertForm.style.display = "none";
    deleteForm.style.display = "none";
  }
}