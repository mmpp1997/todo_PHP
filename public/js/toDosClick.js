function getID(params) {
    var toDoDiv  = document.getElementById(params);
    toDoDiv.style.opacity = (toDoDiv.style.opacity == "0.3") ? 1 : 0.3;  
}