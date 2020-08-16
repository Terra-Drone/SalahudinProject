console.log("hey");
let normal =  document.querySelector(".normal");
let child =  document.querySelector(".child");
console.log(normal,child);
normal.onclick = function() {
  localStorage.setItem("course", 0);
};
child.onclick = function(){
  localStorage.setItem("course", 1);
}
