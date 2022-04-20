//Insert
var insert = document.getElementById('insertBtn');
var userInputs = document.querySelectorAll(".userInputs");
var insertForm = document.getElementById('insertForm');

//Edit
var edit = document.getElementById('editBtn');
var editID = document.querySelector(".id");
var editForm = document.getElementById('editForm');

//Update
var next = document.getElementById('next');
var update = document.getElementById('update');
var updateInputs = document.querySelectorAll(".updateInputs");
var updateForm = document.getElementById('updateForm');

//Delete
var del = document.getElementById('deleteBtn');
var deleteId = document.querySelector('.deleteId');
var deleteForm = document.getElementById('deleteForm');

//Exit buttons
var insertExit = document.getElementsByClassName("close")[0];
var editExit = document.getElementsByClassName("close")[1];
var updateExit = document.getElementsByClassName("close")[2];
var deleteExit = document.getElementsByClassName("close")[3];

//Database Buttons
insert.onclick = function(event) {
  insertForm.style.display = "block";
  event.preventDefault();
}
edit.onclick = function(event) {
  editForm.style.display = "block";
  event.preventDefault();
}
next.onclick = function() {
  editForm.style.display = "none";
  updateForm.style.display = "block";
}
del.onclick = function(event) {
  deleteForm.style.display = "block";
  event.preventDefault();
}

update.onclick = function() {
  updateForm.style.display = "none";
  change();
}

function change(){
  window.location = "http://localhost/WebUBT/Project/SouthFestival/pages/Users.php";
  
}
function updateIF(){
  if(window.location.href.includes('?id')){
    updateForm.style.display = "block";
  }
}

//Exit functions
insertExit.onclick = function() {
    for (let index = 0; index < userInputs.length; index++) {
      userInputs[index].value = '';
    }
    insertForm.style.display = "none";
}
editExit.onclick = function() {
  editID.value = '';
  editForm.style.display = "none";
}
deleteExit.onclick = function() {
  deleteId.value = '';
  deleteForm.style.display = "none";
}
updateExit.onclick = function() {
  editID.value = '';
  for (let index = 0; index < updateInputs.length; index++) {
    updateInputs[index].value = '';
    updateForm.style.display = "none";
  }
}

window.onclick = function(event) {
  if (event.target == insertForm || event.target == editForm || event.target == updateForm || event.target == deleteForm) {
    insertForm.style.display = "none";
    editForm.style.display = "none";
    updateForm.style.display = "none";
    deleteForm.style.display = "none";
  }
}