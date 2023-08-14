document.querySelector(".show-btn").addEventListener("click", (e) =>{
    var box = document.getElementById("information");
    if (box.classList.contains("active")){
        box.classList.toggle("active");
        e.target.innerHTML = "HIDE";
    } else {
        e.target.innerHTML = "SHOW";
        box.classList.toggle("active");
    }
});