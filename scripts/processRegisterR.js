
let nameNode = document.getElementById("username");
let passwordNode = document.getElementById("password");
let checkNode = document.getElementById("check");
let emailNode = document.getElementById("email");
let resetNode = document.getElementById("reset");

nameNode.addEventListener("input", valName, false);
emailNode.addEventListener("input", valEmail, false);
passwordNode.addEventListener("input", valPassword, false);
checkNode.addEventListener("input", valCheck, false);
resetNode.addEventListener("click", reset, false);