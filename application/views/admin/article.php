<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    <?php echo strtoupper($action)?> Data Article
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>Isagenix</a></li>
      <li><a href="#">Article</a></li>
      <li class="active"><?php echo strtoupper($action)?></li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title"><?php echo strtoupper($action)?> Article</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            
            <form action="<?php echo site_url().'admin/article/'.$action?>" method="post" enctype="multipart/form-data" />
              <div class="box-body">
                <div class="form-group">
                  <label for="">Title</label>
                  <input type="text" name="title" class="form-control" value="<?php echo !empty($article) ? $article->title : "" ;?>">
                </div>
                <div class="form-group">
                  <label for="">Category </label>
                  <select name="category_article_id">
                  	<?php foreach($categories as $cat) { ?>
                  	<option value="<?php echo $cat->category_article_id;?>" <?php if(!empty($article->category_article_id)) echo $article->category_article_id ==  $cat->category_article_id ? 'selected' : '' ?>><?php echo $cat->category_name?></option>
                  	<?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Article</label>
                  <textarea class="ckeditor" name="body"><?php echo !empty($article) ? $article->body : "";?></textarea>
                </div>
                <?php if(!empty($images)) {?>
                <div class="form-group">
                  <label for="">Image</label>
                  <img src="<?php echo !empty($article) ? base_url().'assets/img/article/'.$article->image : "";?>" width="200px" height="200px">
                </div>
                <?php } ?>
                <div class="form-group">
                  <label for=""></label>
                  <input type="file" name="image" class="form-control">
                </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="<?php echo base_url().'admin/article'?>" class="btn btn-default">Back</a>
                    </div> <!-- /form-actions -->
                  </div>
                  <?php  echo !empty($article) ? '<input type="hidden" name="article_id" value="'.$article->article_id.'">' : "";?>
                </form>
                </div><!-- /.box -->
                
                
                </div><!--/.col (left) -->
                
                </div>   <!-- /.row -->
                </section><!-- /.content -->
                </div><!-- /.content-wrapper -->