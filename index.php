<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Valley Stay</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <link rel="icon" href="images/logo.jpg" type="image/png">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body>

    <!-- header -->
    <header class="header" id="header">
        <div class="head-top">
            <div class="site-logo">
                <img src="images/logo.png" alt="no logo found">
            </div>
            <div class="site-nav">
                <span id="nav-btn">MENU<i class="fas fa-bars"></i></span>
            </div>
        </div>

        <div class="head-bottom flex">
            <h2>A PLACE MORE THAN A HOME</h2>
            <p>Come here to have a refreshing vacation,we are know world wide for our homely hospitality. Family entertainment and services 24/7 </p>
        </div>
    </header>
    <!-- end of header -->

    <!-- side navbar -->
    <div class="sidenav" id="sidenav">
        <span class="cancel-btn" id="cancel-btn">
            <i class="fas fa-times"></i>
        </span>

        <ul class="navbar">
            <li><a href="#header">home</a></li>
            <li><a href="#services">services</a></li>
            <li><a href="#rooms">rooms</a></li>
            <li><a href="#customers">customers</a></li>
        </ul>
        <button class="btn sign-up" onclick="location.href='signup.php';">sign up</button>
        <button class="btn log-in" onclick="location.href='LoginPage.php';">log in</button>
    </div>
    <!-- end of side navbar -->

    <!-- fullscreen modal -->
    <div id="modal"></div>
    <!-- end of fullscreen modal -->

    <!-- body content  -->
    <section class="services sec-width" id="services">
        <div class="title">
            <h1>services</h1>
        </div>
        <div class="services-container">
            <!-- single service -->
            <article class="service">
                <div class="service-icon">
                    <span>
                        <i class="fas fa-utensils"></i>
                    </span>
                </div>
                <div class="service-content">
                    <h2>Food Service/ Food Runner</h2>
                    <p> Offers 24/7 food service with room service and in-house dining consisting of a variety of cuisines which will definitely overwhelm your tastebuds. Book table in advance for special occasions and we guarantee you a great experience and a refreshing time here with family and friends. We have chefs from all around the world who ensure to give quality food and to not dissapoint you.   </p>
                    <button type="button" class="btn">Know More</button>
                </div>
            </article>
            <!-- end of single service -->
            <!-- single service -->
            <article class="service">
                <div class="service-icon">
                    <span>
                        <i class="fas fa-swimming-pool"></i>
                    </span>
                </div>
                <div class="service-content">
                    <h2>Refreshment</h2>
                    <p>Offers 24/7 food service with room service and in-house dining consisting of a variety of cuisines which will definitely overwhelm your tastebuds. Book table in advance for special occasions and we guarantee you a great experience and a refreshing time here with family and friends. We have chefs from all around the world who ensure to give quality food and to not dissapoint you.</p>
                    <button type="button" class="btn">Know More</button>
                </div>
            </article>
            <!-- end of single service -->
            <!-- single service -->
            <article class="service">
                <div class="service-icon">
                    <span>
                        <i class="fas fa-broom"></i>
                    </span>
                </div>
                <div class="service-content">
                    <h2>Housekeeping</h2>
                    <p>Offers 24/7 room service and cleaning services from a well trained staff. Housekeeping is the management and the routine support activities of running an organised physical institution occupied or used by people, like a house, ship, hospital or factory, such as tidying, cleaning, cooking, routine maintenance, shopping, and bill payment.</p>
                    <button type="button" class="btn">Know More</button>
                </div>
            </article>
            <!-- end of single service -->
            <!-- single service -->
            <article class="service">
                <div class="service-icon">
                    <span>
                        <i class="fas fa-door-closed"></i>
                    </span>
                </div>
                <div class="service-content">
                    <h2>Room Security</h2>
                    <p>Secure rooms are often used for the storage of sensitive information or large assets. They are primarily designed to protect against surreptitious attack, but may offer some resistance to forcible entry and slowing a marauding terrorist attack.</p>
                    <button type="button" class="btn">Know More</button>
                </div>
            </article>
            <!-- end of single service -->
        </div>
    </section>

    <section class="rooms sec-width" id="rooms">
        <div class="title">
            <h1>rooms</h1>
        </div>
        <div class="rooms-container">
            <!-- single room -->
            <article class="room">
                <div class="room-image">
                    <img src="images/banner-img.jpg" alt="room image">
                </div>
                <div class="room-text">
                    <h3>Luxury Rooms</h3>
                    <ul>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            Clean rooms
                        </li>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            24/7 wifi service
                        </li>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            Beautiful stay
                        </li>
                    </ul>
                    <p>In a building or large vehicle, like a ship, a room is any enclosed space within a number of walls to which entry is possible only via a door or other dividing structure that connects it to either a passageway, another room, or the outdoors, that is large enough for several people to move about, and whose size, fixtures, furnishings, and sometimes placement within the building or ship support the activity to be conducted in it.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore, atque quo?</p>
                    <p class="rate">
                        <span>₹2000.00 /</span> Per Night
                    </p>

                </div>
            </article>
            <!-- end of single room -->
            <!-- single room -->
            <article class="room">
                <div class="room-image">
                    <img src="images\1.jpg" alt="room image">
                </div>
                <div class="room-text">
                    <h3>Mess (Veg And Non-Veg)</h3>
                    <ul>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            High quality food
                        </li>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            Michelin star restaurant
                        </li>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            24/7 services
                        </li>
                    </ul>
                    <p>High quality restaurant with great services and facilities. Contains a variety of cusinies with luxurious sitting services.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore, atque quo?</p>
                    <p class="rate">
                        <br><span>Not-Included in the price</span>
                    </p>

                </div>
            </article>
            <!-- end of single room -->
            <!-- single room -->
            <article class="room">
                <div class="room-image">
                    <img src="images\7.png" alt="room image">
                </div>
                <div class="room-text">
                    <h3>Taxi (Pickup And Drop)</h3>
                    <ul>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            SUV, Sedan, Cars available for pickup and drop off
                        </li>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            24/7 service available
                        </li>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            Runs through every route in Jammu
                        </li>
                    </ul>
                    <p>Provides all types of cars to suit your needs and runs through every route for your convenience. Just call on the number to book a cab from your location to destination.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore, atque quo?</p>
                    <br><p class="rate">
                        <span>Included In Room Price</span>
                    </p>

                </div>
            </article>
            <!-- end of single room -->
        </div>
    </section>


    <section class="customers" id="customers">
        <div class="sec-width">
            <div class="title">
                <h1>customers</h1>
            </div>
            <div class="customers-container">
                <!-- single customer -->
                <div class="customer">
                    <div class="rating">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <h3>We Loved it</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                    <img src="images\alex-holyoake-467159-unsplash-copy.webp" alt="customer image">
                    <span>Customer Name, Country</span>
                </div>
                <!-- end of single customer -->
                <!-- single customer -->
                <div class="customer">
                    <div class="rating">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <h3>Comfortable Living</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                    <img src="images\531e3f62c0e3ca41a4d04ce2b23f1371.jpg" alt="customer image">
                    <span>Customer Name, Country</span>
                </div>
                <!-- end of single customer -->
                <!-- single customer -->
                <div class="customer">
                    <div class="rating">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <h3>Nice Place</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                    <img src="images/1fc856111f1066a2e2e8ca2f1a0ba86a.jpg" alt="customer image">
                    <span>Customer Name, Country</span>
                </div>
                <!-- end of single customer -->
            </div>
        </div>
    </section>
    <!-- end of body content -->

    <!-- footer -->
    <footer class="footer">
        <div class="footer-container">
            <div>
                <h2>About Us </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque sapiente mollitia doloribus provident? Eos quisquam aliquid vel dolorum, impedit culpa.</p>
                <ul class="social-icons">
                    <li class="flex">
                        <i class="fa fa-twitter fa-2x"></i>
                    </li>
                    <li class="flex">
                        <i class="fa fa-facebook fa-2x"></i>
                    </li>
                    <li class="flex">
                        <i class="fa fa-instagram fa-2x"></i>
                    </li>
                </ul>
            </div>

            <div>
                <h2>Useful Links</h2>
                <a href="#">Blog</a>
                <a href="#">Rooms</a>
                <a href="#">Subscription</a>
                <a href="#">Gift Card</a>
            </div>

            <div>
                <h2>Privacy</h2>
                <a href="#">Career</a>
                <a href="#">About Us</a>
                <a href="#">Contact Us</a>
                <a href="#">Services</a>
            </div>

            <div>
                <h2>Have A Question</h2>
                <div class="contact-item">
                    <span>
                        <i class="fas fa-map-marker-alt"></i>
                    </span>
                    <span>
                        Valley Stay,near Dominos Saharanpur Road ,Dehradun
                    </span>
                </div>
                <div class="contact-item">
                    <span>
                        <i class="fas fa-phone-alt"></i>
                    </span>
                    <span>
                        +91-8905230024
                    </span>
                </div>
                <div class="contact-item">
                    <span>
                        <i class="fas fa-envelope"></i>
                    </span>
                    <span>
                        info@domain.com
                    </span>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->

    <script src="script.js"></script>
</body>

</html>