<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Istok+Web:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/Men Perfume.css" type="text/css" />
    <title>Men Perfume</title>
</head>
<body>
    <section id="desktop">
        <header class="head">
            <div class="hamburger" onclick="toggleMenu()">
                <i class="ri-menu-line"></i> <!-- Hamburger icon -->
            </div>
            
            <a href="products.php"><h1>S É D U I R E</h1></a>
            
            <nav>
                <a href="products.php" id="nav1">HOME</a>
                <a href="About Us.php" id="nav2">ABOUT</a>
                <a href="Contact.php" id="nav3">CONTACT</a>
                <a href="Cart.php" id="nav4">CART</a>
            </nav>
        
            <div class="search-icon" onclick="toggleSearchBar()">
                <i class="ri-search-line" id="search1"></i>
            </div>
        
            <!-- Desktop Search Bar -->
            <div class="search-container">
                <input type="text" id="desktopSearch" placeholder="Search..." onkeyup="filterPerfumes()" />
                <button type="submit"><i class="ri-search-line"></i></button>
            </div>
        
            <!-- Expandable Search for Tablet/Mobile -->
            <div class="search-container" id="searchBar">
                <input type="text" id="mobileSearch" placeholder="Search..." onkeyup="filterPerfumes()" />
                <button type="submit"><i class="ri-search-line"></i></button>
            </div>
        </header>
        

        <body>
            <fieldset id="text">
                <p>BEST SELLING PRODUCTS FOR MEN</p>
            </fieldset>
            <fieldset id="perfumeList">
                <fieldset class="perfume-box">
                        <img src="images/creed.png" data-name="Aventus Creed" class="perfume-img1" style="height: 200px; width: 160px;">
                        <p class="perfume-name">Aventus Creed</p>
                        <p class="perfume-price">$100.00</p>
                        <p class="perfume-size">100ml</p>
                    </fieldset>
                    <fieldset class="perfume-box">
                        <img src="images/sauvage.png" data-name="Dior Sauvage" class="perfume-img" style="margin-bottom: 0.7em; margin-top: 20px;">
                        <p class="perfume-name">Dior Sauvage</p>
                        <p class="perfume-price">$120.00</p>
                        <p class="perfume-size">100ml</p>
                    </fieldset>
                    <fieldset class="perfume-box">
                        <img src="images/swyi.png" data-name="Stronger With You" class="perfume-img">
                        <p class="perfume-name">Stronger With You</p>
                        <p class="perfume-price">$150.00</p>
                        <p class="perfume-size">100ml</p>
                    </fieldset>
                    <fieldset class="perfume-box">
                        <img src="images/bdc.png" data-name="Blue De Chanel" class="perfume-img" style="margin-bottom: -1.5em;">
                        <p class="perfume-name">Bleu De Chanel</p>
                        <p class="perfume-price">$180.00</p>
                        <p class="perfume-size">100ml</p>
                    </fieldset>
                </fieldset>
                <fieldset id="secondPerfumeList">
                    <fieldset class="perfume-box">
                        <img src="images/9pm.png" data-name="Afnan 9PM" class="perfume-img">
                        <p class="perfume-name">Afnan 9PM</p>
                        <p class="perfume-price">$120.00</p>
                        <p class="perfume-size">100ml</p>
                    </fieldset>
                    <fieldset class="perfume-box">
                        <img src="images/megamare.png" data-name="Orto Parisi Megamare" class="perfume-img" style="width: 160px; height: 200px; margin-bottom: 1.5em;">
                        <p class="perfume-name">Orto Parisi Megamare</p>
                        <p class="perfume-price">$100.00</p>
                        <p class="perfume-size">100ml</p>
                    </fieldset>
                    <fieldset class="perfume-box">
                        <img src="images/initio.png" date-name="Initio Side Effect" class="perfume-img" style="height: 200px; width: 160px; margin-top: 1.5em;">
                        <p class="perfume-name">Initio Side Effect</p>
                        <p class="perfume-price">$150.00</p>
                        <p class="perfume-size">100ml</p>
                    </fieldset>
                    <fieldset class="perfume-box">
                        <img src="images/flame.png" date-name="Versace Eros Flame" class="perfume-img" style="margin-bottom: 1em; margin-top: 1.5em;">
                        <p class="perfume-name">Versace Eros Flame</p>
                        <p class="perfume-price">$180.00</p>
                        <p class="perfume-size">100ml</p>
                </fieldset>
            </fieldset>
            <div id="noResultsMessage" style="display: none; text-align: center; color: white; font-size: 1.5em; margin-top: 20px;">
                Product Not Available
            </div>
            <fieldset id="text">
                <p>Enthrall with the Allure of Azure and Gold</p>
            </fieldset>
            <fieldset id="ad1">
                <fieldset id="ad11">
                    <img src="images/perfume3.png" id="pic1"></img>
                </fieldset>
                <fieldset id="ad12">
                    <fieldset id="ad121">
                        <h1>Limited Time Offer: 20% OFF on Versace Eros</h1>
                    </fieldset>
                    <fieldset id="ad122">
                        <h1>Versace Eros</h1>
                    </fieldset>
                    <fieldset id="ad123">    
                    <p>Embrace the Allure of Desire</p>
                    </fieldset>
                    <fieldset id="ad124">
                        <p>Step into the embrace of timeless seduction with Versace Eros, where bold
                            masculinity meets irresistible charm. This iconic fragrance fuses fresh mint, crisp
                            green apple, and zesty lemon with a sensual heart of tonka bean, amber, and
                            geranium.</p>
                    </fieldset>    
                </fieldset>
            </fieldset>
            <fieldset id="ad2">
                <fieldset id="ad11">
                    <img src="images/perfume4.png" id="pic2"></img>
                </fieldset>
                <fieldset id="ad12">
                    <fieldset id="ad121">
                        <h1>Limited Time Offer: 25% OFF on Jean Paul Gaultier Le Male Elixir!</h1>
                    </fieldset>
                    <fieldset id="ad122">
                        <h1>Le Male Elixir</h1>
                    </fieldset>
                    <fieldset id="ad123">    
                        <p>Reveal Your Bold, Sensual Spirit</p>
                    </fieldset>
                    <fieldset id="ad124">
                        <p>Indulge in the divine allure of Being Golden, a fragrance that embodies celestial
                            elegance and radiance. This luxurious scent opens with a burst of sparkling citrus,
                            blending seamlessly with soft floral notes that exude grace and sophistication.</p>
                    </fieldset>    
                </fieldset>
            </fieldset>
        <!-- Product Details Popup (Initially Hidden) -->
        <div id="productPopup" class="popup-overlay" style="display: none;">
            <div class="popup-content">
                <span class="close-btn" onclick="closePopup()">&times;</span>
                <h2 id="popupProductName"></h2>
                <img id="popupProductImage" src="" alt="Product Image" class="popup-img">
                <p id="popupDescription" class="description"></p>
                <p class="description"><strong>Origin:</strong> <span id="popupOrigin"></span></p>
                <p class="description"><strong>Date of Creation:</strong> <span id="popupDate"></span></p>
                <p class="description"><strong>Quantity Available:</strong> <span id="popupQuantity"></span></p>
                <p class="description"><strong>Material Used for Case:</strong> <span id="popupMaterial"></span></p>
                <p class="description"><strong>Price:</strong> <span id="popupPrice"></span></p>

                <!-- Quantity Selector -->
                <div class="quantity-container">
                    <button onclick="changeQuantity(-1)">-</button>
                    <input type="number" id="productQuantity" value="1" min="1"  style="padding-left: 0em;" readonly>
                    <button onclick="changeQuantity(1)">+</button>
                </div>

                <!-- Add to Cart Button -->
                <button class="add-to-cart" onclick="addToCart()">Add to Cart</button>
            </div>
        </div>
        <fieldset id="text">
                <p>Enthrall with the Allure of Azure and Gold</p>
            </fieldset>
            <fieldset id="ad1">
                <fieldset id="ad11">
                    <img src="images/perfume3.png" id="pic1"></img>
                </fieldset>
                <fieldset id="ad12">
                    <fieldset id="ad121">
                        <h1>Limited Time Offer: 20% OFF on Versace Eros</h1>
                    </fieldset>
                    <fieldset id="ad122">
                        <h1>Versace Eros</h1>
                    </fieldset>
                    <fieldset id="ad123">    
                    <p>Embrace the Allure of Desire</p>
                    </fieldset>
                    <fieldset id="ad124">
                        <p>Step into the embrace of timeless seduction with Versace Eros, where bold
                            masculinity meets irresistible charm. This iconic fragrance fuses fresh mint, crisp
                            green apple, and zesty lemon with a sensual heart of tonka bean, amber, and
                            geranium.</p>
                    </fieldset>    
                </fieldset>
            </fieldset>
            <fieldset id="ad2">
                <fieldset id="ad11">
                    <img src="images/perfume4.png" id="pic2"></img>
                </fieldset>
                <fieldset id="ad12">
                    <fieldset id="ad121">
                        <h1>Limited Time Offer: 25% OFF on Jean Paul Gaultier Le Male Elixir!</h1>
                    </fieldset>
                    <fieldset id="ad122">
                        <h1>Le Male Elixir</h1>
                    </fieldset>
                    <fieldset id="ad123">    
                        <p>Reveal Your Bold, Sensual Spirit</p>
                    </fieldset>
                    <fieldset id="ad124">
                        <p>Indulge in the divine allure of Being Golden, a fragrance that embodies celestial
                            elegance and radiance. This luxurious scent opens with a burst of sparkling citrus,
                            blending seamlessly with soft floral notes that exude grace and sophistication.</p>
                    </fieldset>    
                </fieldse>
        </body>
        <footer>
            <p>© 2025 SÉDUIRE. All rights reserved. Created by DJGG</p>
        </footer>
    <script src="javascript/scriptMen.js"></script>
</body>
</html>
