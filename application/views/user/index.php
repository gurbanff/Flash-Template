<?php $directory = base_url("public/user/") ?>
<?php $this->load->view("user/inc/body"); ?>
<?php $this->load->view("user/inc/header"); ?>
    <div class="main dflex-column justify-content-center align-items-center">
        <div class="wrapper">
            <div id="AboutUs" class="m-about-us dflex-row justify-content-center align-items-center">
				<?php foreach ($about_all_data as $item) { ?>
                <img class="wow animate__animated animate__fadeInLeft" src="<?php echo base_url('uploads/admin/about/') . $item['img'] ?>" alt="About Us Image">
                <div class="m-au-description wow animate__animated animate__fadeInRight">
                    <h3 data-lang="heading_text_aboutus"><?php echo $item['name']; ?></h3>
                    <p data-lang="aboutus_info_text">
						<?php echo $item['desc']; ?>
                    </p>
                </div>
				<?php } ?>
            </div>
        </div>
        <div id="Service" class="wrapper">
            <div class="m-lending-counter dflex-row justify-content-between align-items-center wow animate__animated animate__flipInX">
                <div class="m-l-counter-block dflex-column justify-content-between align-items-center">
                    <i class="fa-solid fa-users fa-flash-counter-type"></i>
					<?php foreach ($about_bottom1_all as $item) { ?>
						<h3 data-stats-counter="<?php echo $item['num']; ?>">NaN</h3>
						<h3 data-lang="counter_employees"><?php echo $item['name']; ?></h3>
					<?php } ?>
                </div>
                <div class="m-l-counter-block dflex-column justify-content-between align-items-center">
                    <i class="fa-solid fa-road fa-flash-counter-type"></i>
					<?php foreach ($about_bottom2_all as $item) { ?>
						<h3 data-stats-counter="<?php echo $item['num']; ?>">NaN</h3>
						<h3 data-lang="counter_miles"><?php echo $item['name']; ?></h3>
					<?php } ?>
                </div>
                <div class="m-l-counter-block dflex-column justify-content-between align-items-center">
                    <i class="fa-solid fa-user-tie fa-flash-counter-type"></i>
					<?php foreach ($about_bottom3_all as $item) { ?>
						<h3 data-stats-counter="<?php echo $item['num']; ?>">NaN</h3>
						<h3 data-lang="counter_avg"><?php echo $item['name']; ?></h3>
					<?php } ?>
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
    <?php $this->load->view("user/inc/footer"); ?>
