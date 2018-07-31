<section class="content">
	<div class="box box-primary">
		<div class="box-body">
			<br>
			<form action="" method="post" class="form-horizontal">
				<div class="row">
					<div class="col-md-11">
						<div class = "row">
							<div class = "text-center">
								<div class="form-group">
									<input type="hidden" name="image-edit" id = "image-edit" value = "<?php echo $image; ?>">

									<label for = "image">
										<?php if($ajax_task == 'ajax_view')  { ?>

											<input id="image" name = "image" type="file" class = "hidden" disabled = "disabled"
											/>

										<?php } else if($ajax_task == 'ajax_edit') { ?>

											<input id="image" name = "image" type="file" class = "hidden"
											value = "<?php echo $image; ?>" accept="image/*"/>

										<?php } else if($ajax_task == 'ajax_create') { ?>
											<input id="image" name = "image" type="file" accept="image/*"/>
										<?php } ?>

										<div>
											<span class="img-thumbnail">
												<?php echo '<img src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/large/".$image.'" class="img-responsive img-upload-view" alt ="" style = "height: 300px;">' ?>
											</span>
										</div>
									</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="row">
								<div class="col-md-12 text-center">
									<?php echo $ui->drawSubmit($show_input); ?>
									<a href="<?=MODULE_URL?>" class="btn btn-default" data-toggle="back_page">Cancel</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>

			<style>
				input:disabled {
					cursor : not-allowed !important;
				}
			</style>

			<?php if($ajax_task == 'ajax_create'): ?>
				<script>
					if($("#image")[0].files.length == 0 ){
						$(".img-thumbnail").addClass("hidden");
					}
				</script>
			<?php endif; ?>

			<?php if ($show_input): ?>
				<script>
					$('#image').on('change', function() {
						var img = new Image();
						var jinput = $(this);
						readURL($(this)[0], jinput, img);
					});
					function readURL(input, jinput, img) { 
						if (input.files && input.files[0]) {
							var reader = new FileReader();
							reader.onload = function (e) {
								var x = `<span class="img-thumbnail">
								<img src="` + e.target.result + `" class="img-responsive img-upload-view">
								</span>`;

								jinput.closest('.form-group').find('label div').html(x);
								jinput.closest('.form-group').find('#image').addClass('hidden');
							};
							reader.readAsDataURL(input.files[0]);
						}
					}

					$('form').submit(function(e) {
						e.preventDefault();
						$(this).find('.form-group').find('input, textarea, select').trigger('blur');
						if ($(this).find('.form-group.has-error').length == 0) {
							var formData = new FormData($('form')[0]);
							formData.append('item_image', $('#image')[0].files[0]);
							formData.append('id', '<?php echo $id ?>');
							formData.append('image-edit', '<?php echo $image ?>');
							$.ajax({
								url: '<?=MODULE_URL?>ajax/<?=$ajax_task?>',
								type: "POST",
								data: formData,
								processData: false,
								contentType: false,
								success: function(data){
									window.location = data.redirect;
								}
							});
						} else{
							$(this).find('.form-group.has-error').first().find('input, textarea , select'),focus();
						}

					});
				</script>

				<?php endif ?>