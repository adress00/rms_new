<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qiao's Handmade Home</title>
    <link rel="icon" href="qiao_logo.svg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

    <!-- Header -->
    <header>
        <div class="logo-container">
            <div style="width: 20px;"></div>
            <a href="index.php"><img src="qiao_logo.svg" alt="Qiao's Handmade" class="logo"  oncontextmenu="return false" onselectstart="return false" ondragstart="return false" onbeforecopy="return false" oncopy=document.selection.empty() onselect=document.selection.empty()></a>
            <div style="width: 20px;"></div>
            <nav>
                <a href="index.php" class="button" style="color: #007bff; background-color: white;">Home</a>
                <a href="menu.php" class="button">All Dishes</a>
            </nav>
        </div>
        <div>
            <button class="button login-btn" onclick="loginNotice()">Login</button>
            <button class="button register-btn" onclick="location.href=('register.php')">register</button>
        </div>
    </header>

    <div id="reserved_area" style="height: 32px;"></div>


    <div class="content">
        <div id="mp_functions">

            <div class="type-container_mp" style="border-radius: 24px;">
                <!-- Here is a tab area, four options in order from the top to the bottom of the row, used to display the distribution of the meal, the tab is clicked to jump to the Type page and filtering operations, the left side of the tab for the product image, the right side of the text description -->
                <div class="type_mp_single" onclick="location.href=('#')">
                    <img src="yuecai.jpg" alt="yuecai" style="height: 92.5px; border-radius: 24px; margin-right: 5px;">
                    <div class="type_mp_single_text">
                        <p class="type_name">Canton Food</p>
                        <p class="type_description">Cantonese cuisine emphasizes freshness and delicate flavors. </p>
                    </div>
                </div>
                <div class="type_mp_single" onclick="location.href=('#')">
                    <img src="xiangcai.jpg" alt="xiangcai" style="width: 92.5px; border-radius: 24px; margin-right: 5px;">
                    <div class="type_mp_single_text">
                        <p class="type_name">Hunan Food</p>
                        <p class="type_description">Hunan cuisine is known for its bold and spicy flavors. </p>
                    </div>
                </div>
                <div class="type_mp_single" onclick="location.href=('#')">
                    <img src="chuancai.jpg" alt="Image3" style="width: 92.5px; border-radius: 24px; margin-right: 5px;">
                    <div class="type_mp_single_text">
                        <p class="type_name">Sichuan Food</p>
                        <p class="type_description">Sichuan cuisine is famous its numbing spiciness and rich flavor. </p>
                    </div>
                </div>
                <div class="type_mp_single" onclick="location.href=('#')">
                    <img src="worldfood.jpg" alt="Image4" style="width: 92.5px; border-radius: 24px; margin-right: 5px;">
                    <div class="type_mp_single_text">
                        <p class="type_name">Foreign Food</p>
                        <p class="type_description">We also serve food from all over the world. You can find your home here. </p>
                    </div>
                </div>
            </div>

            <!-- Slideshow -->
            <div class="slideshow-container" style="border-radius: 24px">
                <div class="mySlides fade">
                    <img src="Qiao's Handmade pst1.png" style="width:100%; border-radius: 24px; height: 400px;"  oncontextmenu="return false" onselectstart="return false" ondragstart="return false" onbeforecopy="return false" oncopy=document.selection.empty() onselect=document.selection.empty()>
                </div>
                <div class="mySlides fade">
                    <img src="Qiao's Handmade pst2.png" style="width:100%; border-radius: 24px; height: 400px;"  oncontextmenu="return false" onselectstart="return false" ondragstart="return false" onbeforecopy="return false" oncopy=document.selection.empty() onselect=document.selection.empty()>
                </div>
                <div class="mySlides fade">
                    <img src="Qiao's Handmade pst3.png" style="width:100%; border-radius: 24px; height: 400px;"  oncontextmenu="return false" onselectstart="return false" ondragstart="return false" onbeforecopy="return false" oncopy=document.selection.empty() onselect=document.selection.empty()>
                </div>
            </div>

            <div class="personal_model" style="border-radius: 24px;">
                <!-- Here is a personal-related functional areas, the upper half of the login-related functions and personal account-related information (this module can be expressed in div, do not have to write the function), the lower half is divided into the favourites, the order history of the functionality of the portal -->
                <div class="personal_model_top">
                    <!-- Account Functions -->
                    <div style="width: 100%; height: 15px;"></div>
                    <div style="display: flex; width: 100%; align-items: center; justify-content: center;">
                        <div style="border: 0.5px #33333330 solid; width: 60px; height: 60px; border-radius: 30px; overflow: hidden;"><img src="profile_photo.jpeg" width="60px" height="60px"></div>
                        <div>
                            <p style="font-size: 150%; font-weight: bolder; margin: 0; margin-left: 5px;">Good afternoon</p>
                            <p style="margin: 0; margin-left: 5px;"><a href="register.php" style="text-decoration: none; color: #888;">Register</a></p>
                        </div>
                    </div>
                    <!-- Account Information -->
                    <!-- reserved area -->
                    <div style="width: 100%;" style="display: flex; align-items: center; justify-content: center; text-align: center;">
                        <p style="text-align: center; font-size: 120%; font-weight: bolder; margin-bottom: 3px; color: #333;">Login to experience more. </p>
                        <p style="text-align: center; margin-top: 3px; color: #888;">You can use your VIP after logged in. </p>
                    </div>
                    <button class="button login-btn" onclick="loginNotice()" style="width: 100%; font-size: 120%; font-weight: bolder;">Login</button>
                </div>
                <div style="width: 100%; height: 12px;"></div>
                <div class="account-balance_mp">
                    <p style="text-align: center; font-size: 108%; font-weight: bold; margin-top: 3px;">Account Balance</p>
                    <p style="text-align: center; font-size: 200%; font-weight: lighter; margin-top: 8px; color: #AAA; margin-bottom: 12px;">$88.88</p>
                </div>
                <div class="personal_model_bottom" style="display: flex; margin: 3px; border-radius: 24px;">
                    <!-- To be laid in the middle! -->
                    <div class="personal-functions-buttons_mp">
                        <div id="icon-personal-functions_mp" style="width: 100%; align-items: center; justify-content: center;">
                            <img src="collection.svg" style="width: 40px;">
                        </div>
                        <p>My Collections</p>
                    </div>
                    <div class="personal-functions-buttons_mp">
                        <div id="icon-personal-functions_mp" style="width: 100%; align-items: center; justify-content: center;">
                            <img src="order_his.svg" style="width: 40px;">
                        </div>
                        <p>My Orders</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Login Modal -->
        <div id="loginModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeLoginModal()">&times;</span>
                <h2>Login</h2>
                <form action="#" method="post">
                    <input type="text" name="username" placeholder="User Name" id="username" onfocus="inputFocus(this)" required>
                    <input type="password" name="password" placeholder="Password" id="password" onfocus="inputFocus(this)" required>
                    <button type="submit">Login</button>
                </form>
                <p><a href="#">Forget password? </a></p>
                <p>Haven't got an account? <a href="register.php">register</a></p>
            </div>
        </div>

        <!-- Recommended Dishes -->
        <section class="recommended-dishes" style="margin-top: 0;">
            <h2>Recommended Dishes</h2>
            <div class="dishes-container" style="margin-left: 3%; margin-right: 3%;">
                <div class="dish">
                    <img src="Strongly Spicy Chicken.jpg" alt="Hot Spicy Chicken" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" onbeforecopy="return false" oncopy=document.selection.empty() onselect=document.selection.empty()>
                    <div class="dish-info">
                        <div class="name">Hot Spicy Chicken</div>
                        <div class="price">$38</div>
                        <button class="add-to-cart-button">Add to Cart</button>
                    </div>
                </div>
                <div class="dish">
                    <img src="Braised Pork.jpg" alt="Braised Pork" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" onbeforecopy="return false" oncopy=document.selection.empty() onselect=document.selection.empty()>
                    <div class="dish-info">
                        <div class="name">Braised Pork</div>
                        <div class="price">$45</div>
                        <button class="add-to-cart-button">Add to Cart</button>
                    </div>
                </div>
                <div class="dish">
                    <img src="Water-Boiled Fish.jpg" alt="Water-Boiled Fish" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" onbeforecopy="return false" oncopy=document.selection.empty() onselect=document.selection.empty()>
                    <div class="dish-info">
                        <div class="name">Water-Boiled Fish</div>
                        <div class="price">$68</div>
                        <button class="add-to-cart-button">Add to Cart</button>
                    </div>
                </div>
                <div class="dish">
                    <img src="Kung Pao Shrimps.jpg" alt="Kung Pao Shrimps" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" onbeforecopy="return false" oncopy=document.selection.empty() onselect=document.selection.empty()>
                    <div class="dish-info">
                        <div class="name">Kung Pao Shrimps</div>
                        <div class="price">$58</div>
                        <button class="add-to-cart-button">Add to Cart</button>
                    </div>
                </div>
                <div class="dish">
                    <img src="Citrus Fried Beef.jpg" alt="Citrus Fried Beef" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" onbeforecopy="return false" oncopy=document.selection.empty() onselect=document.selection.empty()>
                    <div class="dish-info">
                        <div class="name">Citrus Fried Beef</div>
                        <div class="price">$48</div>
                        <button class="add-to-cart-button">Add to Cart</button>
                    </div>
                </div>
                <div class="dish">
                    <img src="Steamed Coconut Pork Grill.jpg" alt="Steamed Coconut Pork Grill" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" onbeforecopy="return false" oncopy=document.selection.empty() onselect=document.selection.empty()>
                    <div class="dish-info">
                        <div class="name">Steamed Coconut Pork Grill</div>
                        <div class="price">$38</div>
                        <button class="add-to-cart-button">Add to Cart</button>
                    </div>
                </div>
                <div class="dish">
                    <img src="Piquant Teriyaki Shrimp Curry.jpg" alt="Piquant Teriyaki Shrimp Curry" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" onbeforecopy="return false" oncopy=document.selection.empty() onselect=document.selection.empty()>
                    <div class="dish-info">
                        <div class="name">Piquant Teriyaki Shrimp Curry</div>
                        <div class="price">$78</div>
                        <button class="add-to-cart-button">Add to Cart</button>
                    </div>
                </div>
                <div class="dish">
                    <img src="Roasted Herb Vegetables Risotto.jpg" alt="Roasted Herb Vegetables Risotto" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" onbeforecopy="return false" oncopy=document.selection.empty() onselect=document.selection.empty()>
                    <div class="dish-info">
                        <div class="name">Roasted Herb Vegetables Risotto</div>
                        <div class="price">$58</div>
                        <button class="add-to-cart-button">Add to Cart</button>
                    </div>
                </div>
                <div class="dish">
                    <img src="Sautéed Sesame Fish Pizza.jpg" alt="Sautéed Sesame Fish Pizza" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" onbeforecopy="return false" oncopy=document.selection.empty() onselect=document.selection.empty()>
                    <div class="dish-info">
                        <div class="name">Sautéed Sesame Fish Pizza</div>
                        <div class="price">$48</div>
                        <button class="add-to-cart-button">Add to Cart</button>
                    </div>
                </div>
                <div class="dish">
                    <img src="Fried Herb Tofu Pizza.jpg" alt="Fried Herb Tofu Pizza" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" onbeforecopy="return false" oncopy=document.selection.empty() onselect=document.selection.empty()>
                    <div class="dish-info">
                        <div class="name">Fried Herb Tofu Pizza</div>
                        <div class="price">$28</div>
                        <button class="add-to-cart-button">Add to Cart</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cart and float experience -->

        <div id="cart-float" onclick="openCart()" >
            🛒
        </div>

        <!-- Back to top button -->
        <button id="back-to-top" style="display: none;">&uarr;</button>

        <div id="cartModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeCartModal()">&times;</span>
                <h2>My Cart</h2>
                <div class="cart-items" id="cartItems">
                    <!-- Cart item example -->
                    <div class="cart-item">
                        <div class="item-image">
                            <img src="path/to/image1.jpg" alt="dish image">
                        </div>
                        <div class="item-details">
                            <div class="item-name">Dish Name</div>
                            <div class="item-info">Discount: <input type="text" style="margin: 0; padding: 0; border: 0px #00000000 none; width: 30px;" class="cart-item-info" id="discount" name="discount" value="10%" readonly/>&emsp;Quantity: <input type="text" style="margin: 0; padding: 0; border: 0px #00000000 none; width: 30px;" class="cart-item-info" id="quantity" name="quantity" value="2" readonly/>&emsp;Price: $<input type="text" style="margin: 0; padding: 0; border: 0px #00000000 none; width: 30px;" class="cart-item-info" id="price" name="price" value="30" readonly/></div>
                            <div class="item-total">Total Price: $60</div>
                        </div>
                    </div>
                    <div class="cart-item">
                        <div class="item-image">
                            <img src="path/to/image1.jpg" alt="dish image">
                        </div>
                        <div class="item-details">
                            <div class="item-name">Dish Name</div>
                            <div class="item-info">Discount: 10%&emsp;Quantity: 2&emsp;Price: $30</div>
                            <div class="item-total">Total Price: $60</div>
                        </div>
                    </div>
                    <div class="cart-item">
                        <div class="item-image">
                            <img src="path/to/image1.jpg" alt="dish image">
                        </div>
                        <div class="item-details">
                            <div class="item-name">Dish Name</div>
                            <div class="item-info">Discount: 10%&emsp;Quantity: 2&emsp;Price: $30</div>
                            <div class="item-total">Total Price: $60</div>
                        </div>
                    </div>
                    <div class="cart-item">
                        <div class="item-image">
                            <img src="path/to/image1.jpg" alt="dish image">
                        </div>
                        <div class="item-details">
                            <div class="item-name">Dish Name</div>
                            <div class="item-info">Discount: 10%&emsp;Quantity: 2&emsp;Price: $30</div>
                            <div class="item-total">Total Price: $60</div>
                        </div>
                    </div>
                    <div class="cart-item">
                        <div class="item-image">
                            <img src="path/to/image1.jpg" alt="dish image">
                        </div>
                        <div class="item-details">
                            <div class="item-name">Dish Name</div>
                            <div class="item-info">Discount: 10%&emsp;Quantity: 2&emsp;Price: $30</div>
                            <div class="item-total">Total Price: $60</div>
                        </div>
                    </div>
                    <div class="cart-item">
                        <div class="item-image">
                            <img src="path/to/image1.jpg" alt="dish image">
                        </div>
                        <div class="item-details">
                            <div class="item-name">Dish Name</div>
                            <div class="item-info">Discount: 10%&emsp;Quantity: 2&emsp;Price: $30</div>
                            <div class="item-total">Total Price: $60</div>
                        </div>
                    </div>
                    <div class="cart-item">
                        <div class="item-image">
                            <img src="path/to/image1.jpg" alt="dish image">
                        </div>
                        <div class="item-details">
                            <div class="item-name">Dish Name</div>
                            <div class="item-info">Discount: 10%&emsp;Quantity: 2&emsp;Price: $30</div>
                            <div class="item-total">Total Price: $60</div>
                        </div>
                    </div>
                    <!-- Add more cart items as needed -->
                </div>
                <div class="cart-summary">
                    <div class="total-quantity">Totol Quantity: <span id="totalQuantity">0</span>&emsp;Total Price: $240</div>
                </div>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer>
        <!-- Other Information -->
        <section class="other-information" style="color: #000000;">
            <h2>About us</h2>
            <div class="info-container">
                <div class="info-box">
                    <h3>Running Time: </h3>
                    <p>Monday to Saturday<br>10:00 - 22:00</p>
                </div>
                <div class="info-box">
                    <h3>Contact us: </h3>
                    <p>Telephone: 19935820001</p>
                    <p>E-mail: info@qiaohandmade.com</p>
                </div>
                <div class="info-box">
                    <h3>Address: </h3>
                    <p>BNU-UIC 2nd D5B-A111</p>
                </div>
            </div>
        </section>
        <div class="footer-content">
            <p>&copy; 2024 Qiao's Handmade. All rights reserved</p>
            <a href="admin.php">Admin Page</a>
        </div>
    </footer>

<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        slides[slideIndex-1].style.display = "block";  
        setTimeout(showSlides, 3000); // Change image every 3 seconds
    }

    function loginNotice() {
        document.getElementById("loginModal").style.display = "block";
    }

    function closeCartModal() {
        document.getElementById("cartModal").style.display = "none";
    }

    function closeLoginModal() {
        document.getElementById("loginModal").style.display = "none";
    }

    function openCart() {
        document.getElementById("cartModal").style.display = "block";
    }

    function inputFocus(input) {
        document.getElementById("username").style.backgroundColor = "white";
        document.getElementById("password").style.backgroundColor = "white";
    }

document.addEventListener('DOMContentLoaded', (event) => {
    const backToTopButton = document.getElementById('back-to-top');

    // event listener to listen to scroll
    window.onscroll = function() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            backToTopButton.style.display = 'block';
        } else {
            backToTopButton.style.display = 'none';
        }
    };

    // click back to top button
    backToTopButton.onclick = function() {
        smoothScrollToTop();
    }
    
    // scroll to the top smoothly
    function smoothScrollToTop() {
        const c = document.documentElement.scrollTop || document.body.scrollTop;
        if (c > 0) {
            window.requestAnimationFrame(smoothScrollToTop);
            window.scrollTo(0, c - c / 10);
        }
    }
});
</script>
</body>
</html>