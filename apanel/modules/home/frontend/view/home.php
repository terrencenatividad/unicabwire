<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
	<div class="carousel-inner">
		<?php foreach ($banner as $key => $row) : ?> 
			<?php if($key == 0) { ?>
				<div class="item active">
<<<<<<< HEAD
					<?php echo '<img id = "carousel_pic" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/large/".$row->image.'">' ?>
				</div>
			<?php } else {  ?>
				<div class="item">
					<?php echo '<img id = "carousel_pic" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/large/".$row->image.'">' ?>
=======
					<?php echo '<img id = "pic" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/thumb/".$row->image.'">' ?>
				</div>
			<?php } else {  ?>
				<div class="item">
					<?php echo '<img id = "pic" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/thumb/".$row->image.'">' ?>
>>>>>>> 41bcd012ecfb869326d77fd9e0973f29a5a91b15
				</div>
			<?php } ?>
		<?php endforeach; ?>
	</div>
</div>

<<<<<<< HEAD
<br><br><br><br><br>
=======
<br><br><br>
>>>>>>> 41bcd012ecfb869326d77fd9e0973f29a5a91b15

<div class="container">
	<div class="row">
		<div class="text-center">
			<h1>Products and Serives</h1>
			<h5>How innovative Technologies Improve Products and Services</h5>
			<br>
			<br>
			<br>
		</div>
	</div>
	<div class="row">
		<?php foreach($products as $key => $row) : ?>
			<?php if($row->product_category == 'Power Cable')  { ?>
				<div class="col-md-3">
<<<<<<< HEAD
					<?php echo '<img id = "power" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/large/".$row->image.'">' ?>
				</div>
			<?php } else if($row->product_category == 'Air Switch') { ?>
				<div class="col-md-3">
					<?php echo '<img id = "air" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/large/".$row->image.'">' ?>
				</div>
			<?php } else if($row->product_category == 'Wireless') {?>
				<div class="col-md-6">
					<?php echo '<img id = "wireless" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/large/".$row->image.'">' ?>
=======
					<?php echo '<img id = "power" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/thumb/".$row->image.'">' ?>
				</div>
			<?php } else if($row->product_category == 'Air Switch') { ?>
				<div class="col-md-3">
					<?php echo '<img id = "air" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/thumb/".$row->image.'">' ?>
				</div>
			<?php } else if($row->product_category == 'Wireless') {?>
				<div class="col-md-6">
					<?php echo '<img id = "wireless" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/thumb/".$row->image.'">' ?>
>>>>>>> 41bcd012ecfb869326d77fd9e0973f29a5a91b15
				</div>
			<?php } ?>
		<?php endforeach; ?>
		<!-- <span id = "text-block"><?php echo $row->product_description ?></span> -->
	</div>
	<br>
	<div class="row">
		<?php foreach ($products as $key => $row) : ?>
			<?php if($row->product_category == 'Lighting Solution') {?>
				<div class="col-md-5 col-md-offset-3">
<<<<<<< HEAD
					<?php echo '<img id = "lighting" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/large/".$row->image.'">' ?>
				</div>
			<?php } else if($row->product_category == 'UPS') {?>
				<div class="col-md-3">
					<?php echo '<img id = "ups" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/large/".$row->image.'">' ?>
=======
					<?php echo '<img id = "lighting" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/thumb/".$row->image.'">' ?>
				</div>
			<?php } else if($row->product_category == 'UPS') {?>
				<div class="col-md-3">
					<?php echo '<img id = "ups" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/thumb/".$row->image.'">' ?>
>>>>>>> 41bcd012ecfb869326d77fd9e0973f29a5a91b15
				</div>
			<?php } ?>
		<?php endforeach; ?>
	</div>
</div>
<br>
<br>
<br>
<br>

<div class="container">
<<<<<<< HEAD
	<div class="text-center">
		<h1>Customer Cases</h1>
		<h5>How AI enables industry upgrade</h5>
	</div>
	<section class="owl-carousel owl-theme">
		<?php foreach ($banner as $key => $row) : ?> 
			<?php if($key == 0) { ?>
				<div class="item">
					<?php echo '<img src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/large/".$row->image.'">' ?>
				</div>
			<?php } else {  ?>
				<div class="item">
					<?php echo '<img src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/large/".$row->image.'">' ?>
				</div>
			<?php } ?>
		<?php endforeach; ?>
		<div class="item">
			<button class = "btn btn-default btn-lg">More Cases >> </button>
		</div>
	</section>
	<br><br>
=======
	<div class = "row">
		<div class="text-center">
			<h1>Customer Cases</h1>
			<h5>How AI enables industry upgrade</h5>
		</div>
		<br><br>
		<div class="bstimeslider">
			<div id="rightArrow"><span class = "fa fa-angle-right"></span></div>
			<div id="viewContainer">
				<div id="tslshow">
					<?php foreach($products as $row) : ?>
						<?php echo '<img id = "border" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/thumb/".$row->image.'">' ?>
						<!-- <?php echo $row->product_description; ?> -->
					<?php endforeach; ?>
				</div>
			</div>
			<div id="leftArrow"><span class = "fa fa-angle-left"></span></div>
		</div>
	</div>
>>>>>>> 41bcd012ecfb869326d77fd9e0973f29a5a91b15
	<div class="row">
		<div class="text-center">
			<button class = "btn btn-default btn-lg" id = "cases">More Cases >> </button>
		</div>
	</div>
</div>
<<<<<<< HEAD

=======
>>>>>>> 41bcd012ecfb869326d77fd9e0973f29a5a91b15
<br>
<br>
<br>
<br>
<br>

<<<<<<< HEAD
<div class="container">
	<div class="row">
		<div class="text-center">
			<h1>News</h1>
			<h5>Latest News</h5>
		</div>
	</div>
	<div class="row">
		<div class="container">
			<div class="col-md-6">
				<ul class="timeline">
					<?php foreach ($news as $key => $row) : ?>
						<li class="timeline-inverted">
							<div class="timeline-badge warning"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title"><?php echo $row->title; ?></h4>
								</div>
								<div class="timeline-body">
									<p><?php echo $row->date; ?></p>
								</div>
							</div>
						</li>
					<?php endforeach; ?>
					<li class="timeline-inverted">
						<div class="timeline-badge warning"></div>
					</li>
				</ul>
			</div>
			<div class="col-md-5">
			</div>
=======

<!-- <div class="timeline">
	<div class="container left">
		<div class="content">
			<h2>2017</h2>
			<p>Lorem ipsum..</p>
		</div>
	</div>
	<div class="container right">
		<div class="content">
			<h2>2016</h2>
			<p>Lorem ipsum..</p>
>>>>>>> 41bcd012ecfb869326d77fd9e0973f29a5a91b15
		</div>
	</div>
</div>

<<<<<<< HEAD
<br><br><br>

<div class="container">
	<div class="row">
		<div class="text-center">
			<h1>About Us</h1>
			<h5>Learn More About Us</h5>
		</div>
	</div>
	<br><br>
	<div class="row">
		<?php foreach ($about_us as $row) : ?>
			<div class="col-md-3">
				<div class="contain">
					<img src="<? MODULE_URL ?>assets/images/logo.jpg" alt="Logo" style="width:100%;">
					<div class="text-block"> 
						<a href="<?BASE_URL?>aboutus/view/<?= $row->id ?>" style = "color: white; text-decoration: none;"><?php echo $row->title ?></a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>

<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>

<script>
	$('.owl-carousel').owlCarousel({
		margin:20,
		nav:true,
		dots: false,
		responsive:{
			0:{
				items:3
			}
		}
	});
	$( ".owl-prev").html('<i class="fa fa-chevron-left leftie"></i>');
	$( ".owl-next").html('<i class="fa fa-chevron-right rightie"></i>');
=======
<style>
.timeline {
	position: relative;
	max-width: 1200px;
	margin: 0 auto;
}

.content {
	padding: 20px 30px;
	background-color: white;
	position: relative;
	border-radius: 6px;
}
</style> -->

<script>
	var view = $("#tslshow");
	var move = "870px";
	var sliderLimit = -750;

	$("#rightArrow").click(function(){

		var currentPosition = parseInt(view.css("left"));
		if (currentPosition >= sliderLimit) view.stop(false,true).animate({left:"-="+move},{ duration: 100})

	});

	$("#leftArrow").click(function(){

		var currentPosition = parseInt(view.css("left"));
		if (currentPosition < 0) view.stop(false,true).animate({left:"+="+move},{ duration: 100})

	});
>>>>>>> 41bcd012ecfb869326d77fd9e0973f29a5a91b15
</script>