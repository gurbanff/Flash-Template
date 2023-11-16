<?php $directory = base_url("public/user/") ?>
<div id="Home" class="header">
	<div class="h-navbar dflex-column justify-content-center align-items-center">
		<div class="wrapper wrapper-h-navbar dflex-row justify-content-between align-items-center">
			<div class="h-n-logo dflex-column justify-content-center align-items-center animate__animated animate__fadeInLeft">
				<?php foreach ($navbar_logo as $logo) { ?>
					<a href="#Home">
						<img src="<?php echo base_url('uploads/admin/navbar/') . $logo['file'] ?>"
							 alt="Flash Logo"
							 width="112"
							 height="55"
						>
					</a>
				<?php } ?>
			</div>
			<div class="h-n-menu dflex-row justify-content-center align-items-center animate__animated animate__fadeInRight">
				<ul class="dflex-row justify-content-center align-items-center">
					<li>
						<?php foreach($navbar_all as $item) { ?>
							<a href="#<?php echo $item['name']; ?>"><?php echo $item['name']; ?></a>
						<?php } ?>
					</li>
					<!--<li><a data-lang="navbar_menu_aboutus" href="#AboutUs">About us</a></li>
					<li><a data-lang="navbar_menu_service" href="#Service">Service</a></li>
					<li><a data-lang="navbar_menu_gallery" href="#Gallery">Gallery</a></li>
					<li><a data-lang="navbar_menu_contact" href="#Contact">Contact</a></li>-->
				</ul>
				<div class="lang-switcher dflex-column justify-content-start align-items-start">
					<div class="selected-lang dflex-row justify-content-center align-items-center">
						<img src="<?php echo $directory ?>img/content/lang/lang_az.jpg" alt="az">en
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
