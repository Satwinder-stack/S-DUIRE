// Members: 
// De Jesus, Franz Mark
// Gonzales, John Patrick
// Guaio, Karl
// Jeerh, Satwinder 
// Section: WD-202

// For the burger menu in the mobile viewport
function toggleMenu() {
    const menu = document.querySelector(".head nav");
    
    if (menu.classList.contains("show")) {
        menu.style.height = "0";
        menu.style.opacity = "0";
        
        setTimeout(() => menu.classList.remove("show"), 500);
    } else {
        menu.classList.add("show");
        menu.style.height = "200px"; 
        menu.style.opacity = "1";
    }
}

// To filter the products
function filterProducts() {
    const filterText = document.getElementById('searchInput').value.toLowerCase();
    const productCards = document.querySelectorAll('.product-card');
    let found = false;

    productCards.forEach(card => {
        const productName = card.querySelector('h3').innerText.toLowerCase();

        if (productName.includes(filterText)) {
            card.style.display = 'block';
            found = true;
        } else {
            card.style.display = 'none';
        }
    });

    document.getElementById('noResultsMessage').style.display = found ? 'none' : 'block';
}

function closePopup() {
    document.getElementById('productPopup').style.display = 'none';
}

// For the burger menu
function toggleMenu() {
    let menu = document.querySelector(".head nav");
    menu.classList.toggle("show");
}

// To use the searchbar properly
function toggleSearchBar() {
    let searchBar = document.getElementById("searchBar");
    searchBar.classList.toggle("active");
}

// To confirm logout
function confirmLogout() {
    return confirm("Are you sure you want to log out?");
}

// For the search function
document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('searchInput');
    const productCards = document.querySelectorAll('.product-card');
    const ads = document.querySelectorAll('.ad-section');
    const noResultsMessage = document.getElementById('noResultsMessage');

    searchInput.addEventListener('keyup', () => {
        const filterText = searchInput.value.toLowerCase();
        let found = false;

        productCards.forEach(card => {
            const productName = card.querySelector('h3').innerText.toLowerCase();

            if (productName.includes(filterText)) {
                card.style.display = 'block';
                found = true;
            } else {
                card.style.display = 'none';
            }
        });

        
        ads.forEach(ad => {
            ad.style.display = filterText ? 'none' : 'block';
        });

        noResultsMessage.style.display = found ? 'none' : 'block';
    });
});