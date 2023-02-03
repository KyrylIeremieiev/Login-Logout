console.log("works");
logout = document.getElementById("logout")
button = document.getElementById("button");
button.onclick= function(){
    button.style.display = "none";
    logout.style.display = "flex";
}