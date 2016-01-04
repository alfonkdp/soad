<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Data Category</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i>Isagenix</a></li>
			<li><a href="#">Data</a></li>
			<li class="active">Category</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<div class="col-xs-2">
							<a href="<?php echo base_url()?>admin/category/insert"
								class="btn btn-block btn-primary">Insert Category</a>
						</div>
					</div>
					<!-- /.box-header -->

					<div class="box-body">
            <?php $phpgrid->display(); ?>
            <?php echo $message;?>
              </div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->


