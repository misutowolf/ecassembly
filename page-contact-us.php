<?php get_header(); ?>


	<!-- content column -->
	<div class="row page-main">

		<div class="col-md-9 content-container">
			
			<p>
				Use the following form to contact us regarding work estimates, problems with the website, or whatever else you need!
			</p>
			<!-- THE LOOP IS REAL -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2 contact-form">
					<form role="form">

						<div class="form-group">
						    <label for="contact_name">Name:</label>
						    <input type="email" class="form-control" id="contact_name" placeholder="Email">
						</div>

						<div class="form-group">
						    <label for="contact_email">Email:</label>
						    <input type="email" class="form-control" id="contact_email" placeholder="Email">
						</div>

						<div class="form-group">
						    <label for="contact_reason">Contact Reason:</label>
						    <select class="form-control" id="contact_reason">
								<option>Interested in Services</option>
								<option>General Question/Inquiry</option>
								<option>Website Issues</option>a
							</select>
						</div>

					</form>
				</div>
			</div>
		<!-- END LOOP -->

		</div>

		<!-- sidebar -->
		<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>