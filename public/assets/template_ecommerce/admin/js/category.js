let add_new = document.getElementById("add_new");
let add_new_button = document.getElementById("add_new_button");
let close_add_new = document.getElementById("close_add_new");
let add_button_category = document.getElementById("add_button_category");

function showAddBox()
{
        add_new.className = "add_new_show";  
}

function closeAddBox()
{
    add_new.className = "add_new_hide";
}


add_new_button.addEventListener("click", showAddBox);
close_add_new.addEventListener("click", closeAddBox);
add_button_category.addEventListener("click", closeAddBox);