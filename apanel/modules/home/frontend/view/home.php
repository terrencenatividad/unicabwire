<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
	<div class="carousel-inner">
		<?php foreach ($banner as $key => $row) : ?> 
			<?php if($key == 0) { ?>
				<div class="item active">
					<?php echo '<img id = "carousel_pic" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/large/".$row->image.'">' ?>
				</div>
			<?php } else {  ?>
				<div class="item">
					<?php echo '<img id = "carousel_pic" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/large/".$row->image.'">' ?>
				</div>
			<?php } ?>
		<?php endforeach; ?>
	</div>
</div>

<br><br><br><br><br>

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
					<?php echo '<img id = "power" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/large/".$row->image.'">' ?>
				</div>
			<?php } else if($row->product_category == 'Air Switch') { ?>
				<div class="col-md-3">
					<?php echo '<img id = "air" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/large/".$row->image.'">' ?>
				</div>
			<?php } else if($row->product_category == 'Wireless') {?>
				<div class="col-md-6">
					<?php echo '<img id = "wireless" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/large/".$row->image.'">' ?>
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
					<?php echo '<img id = "lighting" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/large/".$row->image.'">' ?>
				</div>
			<?php } else if($row->product_category == 'UPS') {?>
				<div class="col-md-3">
					<?php echo '<img id = "ups" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/large/".$row->image.'">' ?>
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
	<div class="row">
		<div class="text-center">
			<button class = "btn btn-default btn-lg" id = "cases">More Cases >> </button>
		</div>
	</div>
</div>

<br>
<br>
<br>
<br>
<br>

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
		</div>
	</div>
</div>

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
</script>