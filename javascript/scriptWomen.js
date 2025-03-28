// Members: 
// De Jesus, Franz Mark
// Gonzales, John Patrick
// Guaio, Karl
// Jeerh, Satwinder 
// Section: WD-202

// For the burger menu in the mobile viewport
function toggleMenu() {
    let menu = document.querySelector("nav");

    if (menu.classList.contains("show")) {
        menu.style.maxHeight = "0"; 
        setTimeout(() => menu.classList.remove("show"), 500); 
    } else {
        menu.classList.add("show"); 
        menu.style.maxHeight = "300px"; 
    }
}

// To filter products
function filterProducts() {
    const filterText = document.getElementById('searchInput').value.toLowerCase();
    const productCards = document.querySelectorAll('.product-card');
    let found = false;

    productCards.forEach(card => {
        const productName = card.querySelector('h3').innerText.toLowerCase();

        if (filterText === "") {
            card.style.display = "block"; 
            found = true;
        } else if (productName.includes(filterText)) {
            card.style.display = "block"; 
            found = true;
        } else {
            card.style.display = "none"; 
        }
    });

    document.getElementById('noResultsMessage').style.display = found ? "none" : "block";
}

document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('searchInput');
    const ads = document.querySelectorAll('.ad-section');

    searchInput.addEventListener('keyup', () => {
        filterProducts();

        
        ads.forEach(ad => {
            ad.style.display = searchInput.value ? 'none' : 'block';
        });
    });
});

// To confirm logout
function confirmLogout() {
    return confirm("Are you sure you want to log out?");
}

function openPopup(productName) {
    let popup = document.getElementById("productPopup");
    let product = productDetails[productName];

    if (product) {
        document.getElementById("popupProductName").innerText = productName;
        document.getElementById("popupDescription").innerText = product.description;
        document.getElementById("popupOrigin").innerText = product.origin;
        document.getElementById("popupDate").innerText = product.date;
        document.getElementById("popupQuantity").innerText = product.quantity;
        document.getElementById("popupMaterial").innerText = product.material;
        document.getElementById("popupPrice").innerText = product.price;
        document.getElementById("popupProductImage").src = product.image;

        
        document.getElementById("productQuantity").value = 1;
    }

    popup.style.display = "flex";
}


document.querySelectorAll(".perfume-box").forEach(box => {
    box.addEventListener("click", function() {
        let productName = this.querySelector(".perfume-name").innerText;
        openPopup(productName);
    });
});



function closePopup() {
    document.getElementById("productPopup").style.display = "none";
}


document.getElementById("productPopup").addEventListener("click", function(event) {
    let popupContent = document.querySelector(".popup-content");
    if (!popupContent.contains(event.target)) {
        closePopup();
    }
});


// To ensure the client cannot order more than the available amount in the atbaase
function changeQuantity(amount) {
    let quantityInput = document.getElementById("productQuantity");
    let productName = document.getElementById("popupProductName").innerText;
    let maxQuantity = parseInt(productDetails[productName].quantity); 

    let newQuantity = parseInt(quantityInput.value) + amount;

    if (newQuantity >= 1 && newQuantity <= maxQuantity) {
        quantityInput.value = newQuantity;
    }
}

// Alter when adding to cart
function addToCart() {
    alert("Added to cart!");
}


document.querySelectorAll(".perfume-box").forEach(box => {
    box.addEventListener("click", function() {
        let productName = this.querySelector(".perfume-name").innerText;
        openPopup(productName);
    });
});


function toggleMenu() {
    let menu = document.querySelector(".head nav");
    menu.classList.toggle("show");
}

function toggleSearchBar() {
    let searchBar = document.getElementById("searchBar");
    searchBar.classList.toggle("active");
}

// For the search input
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

