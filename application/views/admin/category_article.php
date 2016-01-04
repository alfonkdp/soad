<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
    <?php echo strtoupper($action)?> Data Category Article
    </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i>Isagenix</a></li>
			<li><a href="#">Category Article</a></li>
			<li class="active"><?php echo strtoupper($action)?></li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">

          <!-- Quick New Category -->
				<div class="box box-info" id="quick-category-box">
					<div class="box-header">
						<i class="fa fa-envelope"></i>
						<h3 class="box-title">New Category Article</h3>
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
						<form action="#" class="form-horizontal" id="quick-category" method="post">
						<?php } else {?>
						<form action="<?php echo site_url().'admin/'.$cat.'/update/';?><?php echo !empty($category) ? $category->category_article_id : "";?>" class="form-horizontal"  method="post">
						<?php  } ?>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="name">Category Article</label>
								<div class="col-sm-10">
									<input id="category_name" name="category_name" class="form-control" value="<?php echo isset($category) ? $category->category_name : '';?>" type="text" placeholder="Name">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="name">Indo Description</label>
								<div class="col-sm-10">
									<textarea name="description" class="textarea" placeholder="Indo Description" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo isset($category) ? $category->description : '';?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="name">English Description</label>
								<div class="col-sm-10">
									<textarea name="description_en" class="textarea" placeholder="English Description" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo isset($category) ? $category->description_en : '';?></textarea>
								</div>
							</div>
					</div>
					<div class="box-footer clearfix">
                        <input type="hidden" name="category_article_id" id="category_article_id" value="<?php echo !empty($category) ? $category->category_article_id : "";?>">
						<?php if($action=='insert') { ?>
						<button class="pull-right btn btn-default" id="<?php echo $action;?>-category">
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