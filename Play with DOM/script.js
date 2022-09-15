
const userList = document.querySelectorAll(".name-list li");

    'click', function(){
        text.classList.add("change");
    }
);

for ( user of userList) {
    user.addEventListener("click",function(){
        this.style.color = "red";
    });
}