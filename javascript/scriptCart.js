// Members: 
// De Jesus, Franz Mark
// Gonzales, John Patrick
// Guaio, Karl
// Jeerh, Satwinder 
// Section: WD-202

// Increase quantity in the cart
function increaseQuantity(id) {
    var input = document.getElementById('quantity_' + id);
    input.value = parseInt(input.value) + 1;
}

// Decrease quantity in the cart
function decreaseQuantity(id) {
    var input = document.getElementById('quantity_' + id);
    if (parseInt(input.value) > 1) {
        input.value = parseInt(input.value) - 1;
    }
}

// For the checkboxes
function toggleSelectAll(source) { 
    checkboxes = document.getElementsByName('selected_items[]'); 
    for (var i = 0; i < checkboxes.length; i++) { 
        checkboxes[i].checked = source.checked; 
    } 
} 

// To select all of the checkboxes
document.getElementById('select_all').addEventListener('change', function() {
    let checkboxes = document.querySelectorAll('input[name="selected_items[]"]');
    checkboxes.forEach(checkbox => checkbox.checked = this.checked);
});

// To confirm logout
function confirmLogout() {
    return confirm("Are you sure you want to log out?");
}

// For mobile viewport burger menu
function toggleMenu() {
    var menu = document.getElementById("mobile-menu");
    menu.classList.toggle("show");
}


document.addEventListener("click", function(event) {
    var menu = document.getElementById("mobile-menu");
    var hamburger = document.querySelector(".hamburger");

    if (!menu.contains(event.target) && !hamburger.contains(event.target)) {
        menu.classList.remove("show");
    }
});

// For mobile viewport burger menu
function toggleMenu() {
    var menu = document.getElementById("mobile-menu");
    menu.classList.toggle("hidden");
}

