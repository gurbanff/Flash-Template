<?php $directory = base_url("public/user/") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash.az</title>
    <link rel="shortcut icon" href="<?php echo $directory ?>img/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $directory ?>css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo $directory ?>css/wow-animate.css">
    <script defer src="<?php echo $directory ?>js/wow-animate.js"></script>
    <script defer src="<?php echo $directory ?>js/typing-module.js"></script>
    <script defer src="<?php echo $directory ?>js/lang-module.js"></script>
    <script defer src="<?php echo $directory ?>js/script.js"></script>
    <link rel="stylesheet" href="<?php echo $directory ?>css/style.css">
</head>
<body>
    <div class="preloader dflex-column justify-content-center align-items-center">
        <svg class="pl-svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.4154 18.9231L10.8804 16.5981C10.9357 16.3214 10.9634 16.183 10.8884 16.0915C10.8134 16 10.6723 16 10.3901 16H8.8831C8.49157 16 8.2958 16 8.224 15.8732C8.15219 15.7463 8.25291 15.5785 8.45435 15.2428L10.5457 11.7572C10.7471 11.4215 10.8478 11.2537 10.776 11.1268C10.7042 11 10.5084 11 10.1169 11H7.7215C7.39372 11 7.22984 11 7.15527 10.8924C7.0807 10.7848 7.13825 10.6313 7.25334 10.3244L9.87834 3.32444C9.93719 3.1675 9.96661 3.08904 10.0309 3.04452C10.0951 3 10.1789 3 10.3465 3H15.1169C15.5084 3 15.7042 3 15.776 3.12683C15.8478 3.25365 15.7471 3.42152 15.5457 3.75725L13.4543 7.24275C13.2529 7.57848 13.1522 7.74635 13.224 7.87317C13.2958 8 13.4916 8 13.8831 8H15C15.4363 8 15.6545 8 15.7236 8.1382C15.7927 8.27639 15.6618 8.45093 15.4 8.8L13.6 11.2C13.3382 11.5491 13.2073 11.7236 13.2764 11.8618C13.3455 12 13.5637 12 14 12H15.9777C16.4225 12 16.6449 12 16.7134 12.1402C16.782 12.2803 16.6454 12.4559 16.3724 12.807L11.3003 19.3281C10.7859 19.9895 10.5287 20.3202 10.3488 20.2379C10.1689 20.1556 10.2511 19.7447 10.4154 18.9231Z" />
        </svg>
        <h3 class="loading-text" data-lang="preloader_loading_text">Loading</h3>
    </div>
    <div class="scroll-up dflex-column justify-content-center align-items-center">
        <i class="fa-solid fa-angles-up fa-flesh-up"></i>
    </div>
    <div id="Home" class="header">
        <div class="h-navbar dflex-column justify-content-center align-items-center">
            <div class="wrapper wrapper-h-navbar dflex-row justify-content-between align-items-center">
                <div class="h-n-logo dflex-column justify-content-center align-items-center animate__animated animate__fadeInLeft">
                    <a href="#Home">
                        <img src="<?php echo $directory ?>img/logo/flash.png" alt="Flash Logo">
                    </a>
                </div>
                <div class="h-n-menu dflex-row justify-content-center align-items-center animate__animated animate__fadeInRight">
                    <ul class="dflex-row justify-content-center align-items-center">
                        <li><a data-lang="navbar_menu_home" href="#Home">Home</a></li>
                        <li><a data-lang="navbar_menu_aboutus" href="#AboutUs">About us</a></li>
                        <li><a data-lang="navbar_menu_service" href="#Service">Service</a></li>
                        <li><a data-lang="navbar_menu_gallery" href="#Gallery">Gallery</a></li>
                        <li><a data-lang="navbar_menu_contact" href="#Contact">Contact</a></li>
                    </ul>
                    <div class="lang-switcher dflex-column justify-content-start align-items-start">
                        <div class="selected-lang dflex-row justify-content-center align-items-center">
                            <img src="<?php echo $directory ?>img/content/lang/lang_en.jpg" alt="en">en
                        </div>
                        <div class="select-lang dflex-column justify-content-center align-items-start">
                            <div data-lang-opt="az" class="option-lang dflex-row justify-content-center align-items-center">
                                <img src="<?php echo $directory ?>img/content/lang/lang_az.jpg" alt="az">az
                            </div>
                            <div data-lang-opt="en" class="option-lang dflex-row justify-content-center align-items-center">
                                <img src="<?php echo $directory ?>img/content/lang/lang_en.jpg" alt="en">en
                            </div>
                            <div data-lang-opt="ru" class="option-lang dflex-row justify-content-center align-items-center">
                                <img src="<?php echo $directory ?>img/content/lang/lang_ru.jpg" alt="ru">ru
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-description dflex-column justify-content-center align-items-center wow animate__animated animate__zoomIn">
            <h3 data-lang="header_base_text">We offer the best way for your business</h3>
            <h4 id="typing-text" data-typing-words="Warehouse, Delivery"></h4>
        </div>
        <div class="h-info dflex-column justify-content-center align-items-center">
            <div class="wrapper wrapper-h-info dflex-row justify-content-between align-items-center">
                <div class="h-info-block dflex-row justify-content-center align-items-center wow animate__animated animate__fadeInLeft">
                    <i class="fa-solid fa-clock-rotate-left fa-flash-info-type"></i>
                    <div class="h-info-block-column dflex-column justify-content-start align-items-start">
                        <p data-lang="info_block_text_support">Support</p>
                        <a data-lang="info_block_text_online">Online 24/7</a>
                        <a data-lang="info_block_text_available">Currently online</a>
                    </div>
                </div>
                <div class="h-info-block dflex-row justify-content-center align-items-center wow animate__animated animate__fadeInRight">
                    <i class="fa-solid fa-headset fa-flash-info-type"></i>
                    <div class="h-info-block-column dflex-column justify-content-start align-items-start">
                        <p data-lang="info_block_text_contactus">Contact us</p>
                        <a data-lang="info_block_text_tel" href="tel:+994702203237">+994 70 220-32-37</a>
                        <a data-lang="info_block_text_mail" href="mailto:info@flash.az">info@flash.az</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main dflex-column justify-content-center align-items-center">
        <div class="wrapper">
            <div id="AboutUs" class="m-about-us dflex-row justify-content-center align-items-center">
                <img class="wow animate__animated animate__fadeInLeft" src="<?php echo $directory ?>img/content/about_us/building-house.jpg" alt="About Us Image">
                <div class="m-au-description wow animate__animated animate__fadeInRight">
                    <h3 data-lang="heading_text_aboutus">About us</h3>
                    <p data-lang="aboutus_info_text">
                        The Flash company is a reliable and cost-effective choice for any business in need of storage
                        and transportation
                        services in the United States. Our "A" grade warehouse operates in Delaware to store various
                        volumes of shipments
                        (including e-commerce). Additionally, we have our own fleet of vehicles to transport all types
                        of loads, including
                        large and heavy ones, within the USA. We ensure the safety of shipments and compliance with
                        transportation
                        requirements through our extensive network of partners and customized services. To avoid any
                        confusion during the
                        acceptance of shipments, we register, group, and store them on shelves according to their type
                        and size (weight).
                        The stored shipments are insured against possible risks. The warehouse and the surrounding area
                        are under constant
                        video surveillance and control.
                    </p>
                </div>
            </div>
        </div>
        <div id="Service" class="wrapper">
            <div class="m-lending-counter dflex-row justify-content-between align-items-center wow animate__animated animate__flipInX">
                <div class="m-l-counter-block dflex-column justify-content-between align-items-center">
                    <i class="fa-solid fa-users fa-flash-counter-type"></i>
                    <h3 data-stats-counter="8">NaN</h3>
                    <h3 data-lang="counter_employees">Employees</h3>
                </div>
                <div class="m-l-counter-block dflex-column justify-content-between align-items-center">
                    <i class="fa-solid fa-road fa-flash-counter-type"></i>
                    <h3 data-stats-counter="524000">NaN</h3>
                    <h3 data-lang="counter_miles">Total miles</h3>
                </div>
                <div class="m-l-counter-block dflex-column justify-content-between align-items-center">
                    <i class="fa-solid fa-user-tie fa-flash-counter-type"></i>
                    <h3 data-stats-counter="11">NaN</h3>
                    <h3 data-lang="counter_avg">AVG number customers</h3>
                </div>
            </div>
        </div>
        <div class="m-lending dflex-row justify-content-center align-items-center">
            <div class="m-l-block m-l-block-second wow animate__animated animate__fadeInLeft">
                <div class="m-l-b-overlay"></div>
                <i class="fa-solid fa-warehouse fa-flash-lending-type"></i>
                <h3 data-lang="lending_warehouse">Warehouse service</h3>
                <p data-lang="lending_warehouse_text">
                    We offer affordable storage services and competitive prices for all kinds of parcels.
                    For detailed information, please contact us.
                </p>
            </div>
            <div class="m-l-block m-l-block-first wow animate__animated animate__fadeInRight">
                <div class="m-l-b-overlay"></div>
                <i class="fa-solid fa-truck-fast fa-flash-lending-type"></i>
                <h3 data-lang="lending_delivery">Delivery service</h3>
                <p data-lang="lending_delivery_text">
                    Safe and fast delivery of goods to every corner of America.
                    For detailed information, please contact us.
                </p>
            </div>
        </div>
        <h3 data-lang="heading_text_gallery" id="Gallery" class="heading-text wow animate__animated animate__fadeInUp">Gallery</h3>
        <div class="wrapper dflex-column justify-content-center align-items-center">
            <div class="m-gallery-control wow animate__animated animate__fadeInLeft">
                <ul class="btns dflex-row justify-content-center align-items-center">
                    <li data-lang="gallery_control_all">All</li>
                    <li data-lang="gallery_control_warehouse">Warehouse</li>
                    <li data-lang="gallery_control_delivery">Delivery</li>
                    <li data-lang="gallery_control_partners">Partners</li>
                </ul>
            </div>
            <div class="m-gallery-images wow animate__animated animate__fadeInRight">
                <div data-unique-name="warehouse" class="m-gallery-img m-gallery-img-visible">
                    <img src="<?php echo $directory ?>img/content/gallery/warehouse-img-1.jpg" alt="Warehouse Img 1">
                </div>
                <div data-unique-name="warehouse" class="m-gallery-img m-gallery-img-visible">
                    <img src="<?php echo $directory ?>img/content/gallery/warehouse-img-2.jpg" alt="Warehouse Img 2">
                </div>
                <div data-unique-name="warehouse" class="m-gallery-img m-gallery-img-visible">
                    <img src="<?php echo $directory ?>img/content/gallery/warehouse-img-3.jpg" alt="Warehouse Img 3">
                </div>
                <div data-unique-name="warehouse" class="m-gallery-img m-gallery-img-visible">
                    <img src="<?php echo $directory ?>img/content/gallery/warehouse-img-4.jpg" alt="Warehouse Img 4">
                </div>
                <div data-unique-name="warehouse" class="m-gallery-img m-gallery-img-visible">
                    <img src="<?php echo $directory ?>img/content/gallery/warehouse-img-5.jpg" alt="Warehouse Img 5">
                </div>
                <div data-unique-name="warehouse" class="m-gallery-img m-gallery-img-visible">
                    <img src="<?php echo $directory ?>img/content/gallery/warehouse-img-6.jpg" alt="Warehouse Img 6">
                </div>
                <div data-unique-name="warehouse" class="m-gallery-img m-gallery-img-visible">
                    <img src="<?php echo $directory ?>img/content/gallery/warehouse-img-7.jpg" alt="Warehouse Img 7">
                </div>
                <div data-unique-name="delivery" class="m-gallery-img m-gallery-img-visible">
                    <img src="<?php echo $directory ?>img/content/gallery/delivery-img-1.jpg" alt="Delivery Img 1">
                </div>
                <div data-unique-name="delivery" class="m-gallery-img m-gallery-img-visible">
                    <img src="<?php echo $directory ?>img/content/gallery/delivery-img-2.jpg" alt="Delivery Img 2">
                </div>
                <div data-unique-name="delivery" class="m-gallery-img m-gallery-img-visible">
                    <img src="<?php echo $directory ?>img/content/gallery/delivery-img-3.jpg" alt="Delivery Img 3">
                </div>
                <div data-unique-name="delivery" class="m-gallery-img m-gallery-img-visible">
                    <img src="<?php echo $directory ?>img/content/gallery/delivery-img-4.jpg" alt="Delivery Img 4">
                </div>
                <div data-unique-name="partners" class="m-gallery-img m-gallery-img-visible">
                    <img src="<?php echo $directory ?>img/content/gallery/partners-img.jpg" alt="Partners Img">
                </div>
            </div>
            <div class="modal-container dflex-row justify-content-center align-items-center">
                <div class="modal-content dflex-row justify-content-between align-items-center">
                    <i id="modal-img-close-btn" class="fa-solid fa-xmark fa-modal-close"></i>
                    <i id="modal-img-left-btn" class="fa-solid fa-chevron-left fa-modal-type"></i>
                    <img src="<?php echo $directory ?>img/content/gallery/partners-img.jpg" alt="Modal Image">
                    <i id="modal-img-right-btn" class="fa-solid fa-chevron-right fa-modal-type"></i>
                </div>
            </div>
        </div>
    </div>
    <div id="Contact" class="footer">
        <div class="f-header dflex-row justify-content-center align-items-center">
            <div class="wrapper wrapper-f-header dflex-row justify-content-between align-items-start wow animate__animated animate__fadeInUp">
                <div class="f-h-moreinfo dflex-column">
                    <h3 data-lang="moreinfo_heading">Company summary</h3>
                    <p data-lang="moreinfo_text">
                        The Flash company is the best choice for business owners in the
                        United States who want to safely and affordably store
                        and transport their products with warehouse and delivery services.
                    </p>
                    <p data-lang="moreinfo_quote">Flash.az</p>
                </div>
                <div class="f-h-social dflex-column justify-content-start align-items-start">
                    <h3 data-lang="social_heading">Keep connected</h3>
                    <a href="https://www.instagram.com/flash.wh.az">
                        <div class="f-s-icons dflex-row justify-content-center align-items-center">
                            <i class="fa-brands fa-instagram fa-flash-social-footer"></i>
                            <p>Instagram</p>
                        </div>
                    </a>
                </div>
                <div class="f-h-contact dflex-column justify-content-start align-items-start">
                    <h3 data-lang="contact_heading">Contact information</h3>
                    <a href="tel:+994702203237">
                        <div class="f-c-icons dflex-row justify-content-center align-items-center">
                            <i class="fa-solid fa-phone fa-flash-contact-footer"></i>
                            <h3>+994 70 220-32-37</h3>
                        </div>
                    </a>
                    <a href="mailto:info@flash.az">
                        <div class="f-c-icons dflex-row justify-content-center align-items-center">
                            <i class="fa-solid fa-envelope fa-flash-contact-footer"></i>
                            <h3>info@flash.az</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>