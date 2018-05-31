<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
	<div class="carousel-inner">
		<?php foreach ($banner as $key => $row) : ?> 
			<?php if($key == 0) { ?>
				<div class="item active">
					<?php echo '<img id = "pic" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/thumb/".$row->image.'">' ?>
				</div>
			<?php } else {  ?>
				<div class="item">
					<?php echo '<img id = "pic" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/thumb/".$row->image.'">' ?>
				</div>
			<?php } ?>
		<?php endforeach; ?>
	</div>
</div>

<br><br><br>

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
					<?php echo '<img id = "power" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/thumb/".$row->image.'">' ?>
				</div>
			<?php } else if($row->product_category == 'Air Switch') { ?>
				<div class="col-md-3">
					<?php echo '<img id = "air" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/thumb/".$row->image.'">' ?>
				</div>
			<?php } else if($row->product_category == 'Wireless') {?>
				<div class="col-md-6">
					<?php echo '<img id = "wireless" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/thumb/".$row->image.'">' ?>
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
					<?php echo '<img id = "lighting" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/thumb/".$row->image.'">' ?>
				</div>
			<?php } else if($row->product_category == 'UPS') {?>
				<div class="col-md-3">
					<?php echo '<img id = "ups" src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/thumb/".$row->image.'">' ?>
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
		</div>
	</div>
</div>

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
</script>