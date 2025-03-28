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
    <link rel="stylesheet" href="css/Women Perfume.css" type="text/css" />
    <title>Women Perfume</title>
</head>
<body>
    <section id="desktop">
        <header class="head">
            <div class="hamburger" onclick="toggleMenu()">
                <i class="ri-menu-line"></i> <!-- Hamburger icon -->
            </div>
            
            <a href="index.php"><h1>S É D U I R E</h1></a>
            
            <nav>
                <a href="index.php" id="nav1">HOME</a>
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
                <p>BEST SELLING PRODUCTS FOR WOMEN</p>
            </fieldset>
            <fieldset id="perfumeList">
                <fieldset class="perfume-box">
                    <img src="images/missdior.png" data-name="Miss Dior" class="perfume-img1" style="height: 200px; width: 160px;">
                    <p class="perfume-name">Miss Dior</p>
                    <p class="perfume-price">$120.00</p>
                    <p class="perfume-size">100ml</p>
                </fieldset>
                <fieldset class="perfume-box">
                    <img src="images/agcloud.png" data-name="Ariana Grande Cloud" class="perfume-img" style="margin-bottom: 0.7em; margin-top: 20px;">
                    <p class="perfume-name">Ariana Grande Cloud</p>
                    <p class="perfume-price">$100.00</p>
                    <p class="perfume-size">100ml</p>
                </fieldset>
                <fieldset class="perfume-box">
                    <img src="images/chano5.png" data-name="Chanel No. 5" class="perfume-img">
                    <p class="perfume-name">Chanel No. 5</p>
                    <p class="perfume-price">$200.00</p>
                    <p class="perfume-size">100ml</p>
                </fieldset>
                <fieldset class="perfume-box">
                    <img src="images/t&c.png" data-name="Tiffany & Co" class="perfume-img" style="margin-bottom: 0em; margin-top: -1.5em;">
                    <p class="perfume-name">Tiffany & Co</p>
                    <p class="perfume-price">$150.00</p>
                    <p class="perfume-size" style="margin-bottom: 0;">100ml</p>
                </fieldset>
            </fieldset>
            <fieldset id="secondPerfumeList">
                <fieldset class="perfume-box">
                    <img src="images/d&g.png" data-name="Dolce & Gabbana Light Blue" class="perfume-img">
                    <p class="perfume-name">Dolce & Gabbana Light Blue</p>
                    <p class="perfume-price">$150.00</p>
                    <p class="perfume-size">120ml</p>
                </fieldset>
                <fieldset class="perfume-box">
                    <img src="images/eclat.png" data-name="Lanvin Eclat" class="perfume-img" style="width: 160px; height: 190px; margin-bottom: 0.5em;">
                    <p class="perfume-name">Lanvin Eclat</p>
                    <p class="perfume-price">$250.00</p>
                    <p class="perfume-size">120ml</p>
                </fieldset>
                <fieldset class="perfume-box">
                    <img src="images/cocochanel.png" date-name="Coco and Chanel" class="perfume-img" style="height: 200px; width: 160px; margin-top: 1.5em;">
                    <p class="perfume-name">Coco and Chanel</p>
                    <p class="perfume-price">$170.00</p>
                    <p class="perfume-size">120ml</p>
                </fieldset>
                <fieldset class="perfume-box">
                    <img src="images/br540.png" date-name="MFK Baccarat Rouge 540" class="perfume-img" style="margin-bottom: 1em; margin-top: 1.5em;">
                    <p class="perfume-name">MFK Baccarat Rouge 540</p>
                    <p class="perfume-price">$180.00</p>
                    <p class="perfume-size" style="margin-bottom: 1em;">120ml</p>
                </fieldset>
            </fieldset>
            <div id="noResultsMessage" style="display: none; text-align: center; color: white; font-size: 1.5em; margin-top: 20px;">
                Product Not Available
            </div>
            <fieldset id="text" class="text1">
                <p>Enthrall with the Allure of Azure and Gold</p>
            </fieldset>
            <fieldset id="ad1">
                <fieldset id="ad11">
                    <img src="images/perfume5.png" id="pic1"></img>
                </fieldset>
                <fieldset id="ad12">
                    <fieldset id="ad121">
                        <h1>Limited Time Offer: 20% OFF on Xerjoff Blue Hope</h1>
                    </fieldset>
                    <fieldset id="ad122">
                        <h1>Blue Hope</h1>
                    </fieldset>
                    <fieldset id="ad123">    
                        <p>Immerse in the Boundless Serenity of Blue Hope</p>
                    </fieldset>
                    <fieldset id="ad124">
                        <p>Surrender to the peaceful charm of Xerjoff Blue Hope, where quiet strength and timeless elegance converge.</p>
                    </fieldset>    
                </fieldset>
            </fieldset>
            <fieldset id="ad2">
                <fieldset id="ad11">
                    <img src="images/perfume6.png" id="pic2"></img>
                </fieldset>
                <fieldset id="ad12" class="ad12">
                    <fieldset id="ad121">
                        <h1 id="ad121">Limited Time Offer: 25% OFF on Paco Rabanne Lady Million</h1>
                    </fieldset>
                    <fieldset id="ad122">
                        <h1>Lady Million</h1>
                    </fieldset>
                    <fieldset id="ad123">    
                        <p>Where luxury meets irresistible charm.</p>
                    </fieldset>
                    <fieldset id="ad124">
                        <p>Discover Lady Million, where dazzling luxury and captivating confidence create a stunning presence.</p>
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
                    <input type="number" id="productQuantity" value="1" min="1"  style="padding-left: 0.6em;" readonly>
                    <button onclick="changeQuantity(1)">+</button>
                </div>

                <!-- Add to Cart Button -->
                <button class="add-to-cart" onclick="addToCart()">Add to Cart</button>
            </div>
        </div>
    
        </body>
        <footer>
            <p>© 2025 SÉDUIRE. All rights reserved. Created by DJGG</p>
        </footer>
    <script src="javascript/scriptWomen.js"></script>
</body>
</html>
