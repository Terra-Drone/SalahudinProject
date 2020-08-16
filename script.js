var config, editor;
var area = document.querySelector(".editor");
var prev = document.querySelector(".preview");
config = {
    lineNumbers: true,
    theme:"abcdef",
    mode: "xml",
    htmlMode: true
};
//editor and preview area and settigns
editor = CodeMirror.fromTextArea(area, config);
editor.setSize(600,650);
editor.on("keyup", show);
editor.on("inputRead", function () {
  prev.setAttribute("style", "color:black; font-size:16px; font-weight: 400;");
});
function show() {
  let text = editor.getValue();
  prev.innerHTML = text;
  console.log(prev.innerHTML);
}
//
//
//
// the instrictions area and daata fetching from json files
var id = 0;
if (localStorage.getItem("course")!=true) {
  // console.log("hey");
  localStorage.setItem("course",0);
}
var course = localStorage.getItem("course");

if(localStorage.getItem("id")==true){
    id = localStorage.getItem("id");
    console.log(id);
    getData(course,id);
}
else{
  console.log("hey");
  console.log(id);
  localStorage.setItem("id", 0);
}
let instructions = document.querySelector(".instructions");
let title = document.querySelector(".chapter-name");
let discription = document.querySelector(".task-discription");
let tasks = document.querySelector("ul");
getData(course,id);

let nextClass = document.querySelector(".next");
nextClass.addEventListener("click", function () {
  id+=1;
  localStorage.setItem("id", id);
  console.log(id);
  getData(course,id);
});
function getData(course,id) {
  title.innerHTML = data[course][id].title;
  discription.innerHTML = data[course][id].discription;
  tasks.innerHTML = data[course][id].steps;
}
///
//
//
//
//
//answer submission and checking
let btn = document.querySelector("#submit");
let modal = document.getElementById('myModal');
let span = document.getElementsByClassName("close")[0];
let msg = document.querySelector(".modal-body");

btn.addEventListener("click", function() {
  let answer = editor.getValue();
  answer = answer.replace(/(\r\n|\n|\r)/gm,"");
  answer = answer.replace(/\s/g,'');
  console.log(answer);
  let correct = data[course][id].answer;
  if(answer === correct){
    msg.style.fontSize = "50px";
    nextClass.style.display = "block";
    msg.innerHTML = data[course][id].msg;
    modal.style.display ="block";
  }
});

nextClass.onclick = function () {
  modal.style.display = "none";
  // editor.setValue("");
  // prev.innerHTML = "";
  instructions.scroll(0,0);
};

span.onclick = function() {
    modal.style.display = "none";
};
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};
let reset = document.querySelector("#reset");
reset.onclick = function(){
  editor.setValue("");
  prev.innerHTML = "";
  reset.focus = none;
};
let hint = document.querySelector("#hint");
hint.onclick = function() {
  nextClass.style.display = "none";
  msg.style.fontSize = "26px";
  msg.innerHTML = data[course][id].hint;
  modal.style.display ="block";
};
