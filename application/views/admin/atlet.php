<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
    <?php echo strtoupper($action)?> Data Atlet
    </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i>Koni</a></li>
			<li><a href="#">Profile Atlet</a></li>
			<li class="active"><?php echo strtoupper($action)?></li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">

          <!-- Quick New Atlet -->
				<div class="box box-info" id="quick-atlet-box">
					<div class="box-header">
						<i class="fa fa-envelope"></i>
						<h3 class="box-title">New Atlet</h3>
						<!-- tools box -->
						<div class="pull-right box-tools">
							<button class="btn btn-info btn-sm" data-toggle="tooltip" title="Add More">
								<i class="fa fa-plus"></i>
							</button>
						</div>
						<!-- /. tools -->
					</div>
					<div class="box-body">
                         <?php if($action=='insert') {?>
						<form action="#" class="form-horizontal" id="quick-atlet" method="post">
						<?php } else {?>
						<form action="<?php echo site_url().'admin/'.$cat.'/update/';?><?php echo !empty($atlet) ? $atlet->atlet_id : "";?>" class="form-horizontal"  method="post">
						<?php  } ?>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="name">Nama Lengkap</label>
								<div class="col-sm-10">
									<input id="atlet_name" name="atlet_name" class="form-control" value="<?php echo isset($atlet) ? $atlet->atlet_name : '';?>" type="text">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="name">Username</label>
								<div class="col-sm-10">
									<input id="username" name="username" class="form-control" value="<?php echo isset($atlet) ? $atlet->atlet_name : '';?>" type="text">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="name">Nama Panggilan</label>
								<div class="col-sm-10">
									<input id="nama_panggilan" name="nama_panggilan" class="form-control" value="<?php echo isset($atlet) ? $atlet->atlet_name : '';?>" type="text">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="name">Tanggal Lahir</label>
								<div class="col-sm-10">
									<input id="tanggal_lahir" name="nama_panggilan" class="form-control" value="<?php echo isset($atlet) ? $atlet->atlet_name : '';?>" type="text">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="name">Tempat Lahir</label>
								<div class="col-sm-10">
									<input id="tempat_lahir" name="nama_panggilan" class="form-control" value="<?php echo isset($atlet) ? $atlet->atlet_name : '';?>" type="text">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="name">Cabang Olahraga</label>
								<div class="col-sm-10">
									<input id="tempat_lahir" name="nama_panggilan" class="form-control" value="<?php echo isset($atlet) ? $atlet->atlet_name : '';?>" type="text">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="name">Alamat</label>
								<div class="col-sm-10">
									<textarea name="description" class="textarea" placeholder="Alamat Tinggal / Mes" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo isset($atlet) ? $atlet->description : '';?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="name">Alamat Orang Tua</label>
								<div class="col-sm-10">
									<textarea name="description_en" class="textarea" placeholder="Alamat Orang Tua" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo isset($atlet) ? $atlet->description_en : '';?></textarea>
								</div>
							</div>
					<?php 
							if(!empty($getAllProductImg) && $action=='update') {
							foreach($getAllProductImg as $proudctImg) {?>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="name">Image</label>
								<div class="col-sm-10">
								<?php echo !empty($proudctImg->path) ?  '<img src="'.prod_thumb_url().$proudctImg->image_id.$proudctImg->ext.'" />&nbsp;<a data-id="'.$proudctImg->image_id.'" class="btn btn-danger delete-prod-img">Delete</a>' : "No Image" ?>
								
								</div>
							</div>
							<?php }
							}?>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="image">Photo</label>
								<div class="col-sm-10">
    								<span class="btn btn-success fileinput-button">
                                        <i class="glyphicon glyphicon-plus"></i>
                                        <span>Add files...</span>
                                        <!-- The file input field used as target for the file upload widget -->
                                        <input id="fileupload" type="file" name="userfile" >
                                        <?php if($action=='insert') {?>
                                        <input type="hidden" name="product_id" id="product_id" value="<?php echo !empty($productDraft) ? $productDraft->product_id : "";?>">
                                        <input type="hidden" name="image_id" id="image_id" value="<?php echo !empty($productImgDraft) ? $productImgDraft->image_id : "";?>">
                                    	<?php } else {?>
										<input type="hidden" name="product_id" id="product_id" value="<?php echo !empty($product) ? $product->product_id : "";?>">
                                        <input type="hidden" name="image_id" id="image_id" value="<?php echo !empty($productImg) ? $productImg->image_id : "";?>">
                                    	
                                    	<?php } ?>
                                    </span>
                                </div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="image">Progress</label>
								<div class="col-sm-10">
    								<!-- The global progress bar -->
                                    <div id="progress" class="progress">
                                        <div class="progress-bar progress-bar-success"></div>
                                    </div>
                                    <!-- The container for the uploaded files -->
                                    <div id="files" class="files"></div>
                                </div>
							</div>
					</div>
					<div class="box-footer clearfix">
                        <input type="hidden" name="atlet_id" id="atlet_id" value="<?php echo !empty($atlet) ? $atlet->atlet_id : "";?>">
						<?php if($action=='insert') { ?>
						<button class="pull-right btn btn-default" id="<?php echo $action;?>-atlet">
							Submit <i class="fa fa-arrow-circle-right"></i>
						<?php } else { ?>
							<input class="pull-right btn btn-default"  value="Submit" type="submit">
						<?php } ?>
						</button>
						</form>
					</div>
				</div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

<!-- /.content-wrapper -->