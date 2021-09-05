<div class="container">
	<div class="row justify-content-center align-items-center">
		<div class="col-lg-6 col-12">
			<div class="card border-0">
				<div class="card-body text-center">
					<h2 class="fw-bolder display-4">Plantilla Bootstrap con CI</h2>
					<p class="text-muted mb-4">Hecha para facilitar el uso de estos frameworks.</p>
					<img src="<?php echo base_url('assets/img/bootstrap-logo.svg');?>" class="img-fluid" width="100"
						alt="">

					<h3 class="fw-bolder mt-4">Page rendered in:</h3>
					<h4><span class="h1 fw-bolder text-indigo">{elapsed_time}</span> <br> seconds.</h4>
					<h4 class="fw-bolder">
						<?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <span class="text-indigo">' . CI_VERSION . '</span>' : '' ?>
					</h4>
					<p class="fw-bold">Hecha por: <span class="text-muted fw-normal">Pablo Sánchez</span> </p>
				</div>
			</div>
		</div>
	</div>
</div>
