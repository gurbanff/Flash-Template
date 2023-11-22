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
		<?php foreach ($header as $item) { ?>
			<h3 data-lang="header_base_text"><?php echo $item['name']; ?></h3>
			<h4 id="typing-text" data-typing-words="<?php echo $item['desc']; ?>, <?php echo $item['desc2']; ?>"></h4>
		<?php } ?>
	</div>
	<div class="h-info dflex-column justify-content-center align-items-center">
		<div class="wrapper wrapper-h-info dflex-row justify-content-between align-items-center">
			<div class="h-info-block dflex-row justify-content-center align-items-center wow animate__animated animate__fadeInLeft">
				<i class="fa-solid fa-clock-rotate-left fa-flash-info-type"></i>
				<div class="h-info-block-column dflex-column justify-content-start align-items-start">
					<?php foreach ($header_bottom_data as $item) { ?>
						<p data-lang="info_block_text_support"><?php echo $item['name']; ?></p>
						<a data-lang="info_block_text_online"><?php echo $item['span']; ?></a>
						<a data-lang="info_block_text_available"><?php echo $item['span2']; ?></a>

					<?php } ?>
				</div>
			</div>
			<div class="h-info-block dflex-row justify-content-center align-items-center wow animate__animated animate__fadeInRight">
				<i class="fa-solid fa-headset fa-flash-info-type"></i>
				<div class="h-info-block-column dflex-column justify-content-start align-items-start">
					<?php foreach ($header_bottomR_data as $item) { ?>
						<p data-lang="info_block_text_contactus"><?php echo $item['name']; ?></p>
						<a data-lang="info_block_text_tel" href="tel:+994702203237"><?php echo $item['span']; ?></a>
						<a data-lang="info_block_text_mail" href="mailto:info@flash.az"><?php echo $item['span2']; ?></a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
