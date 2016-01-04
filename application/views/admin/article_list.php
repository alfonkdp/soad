<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    Data Article
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>Isagenix</a></li>
      <li><a href="#">Data</a></li>
      <li class="active">Article</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <div class="col-xs-2">
              <a href="<?php echo base_url()?>admin/article/insert" class="btn btn-block btn-primary">Insert Article</a>
            </div>
            </div><!-- /.box-header -->

            <div class="box-body">
            <?php echo $message;?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Action </th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=0; foreach($listArticle as $article): $no++;?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $article->title ?></td>
                    <td><?php echo $article->category_name ?></td>
                    <td>
                        <?php //if($this->session->userdata('level_id') ==1) {?>
                        <a href="<?php echo base_url()?>admin/article/update/<?=$article->article_id?>" class="btn btn-info "> <i class="fa fa-edit"> </i></a>
                        <a href="<?php echo base_url()?>admin/article/delete/<?=$article->article_id?>" class="btn btn-danger " onclick="return confirm('Are you sure you want to delete this data?')"> <i class="fa fa-trash-o" > </i></a>
                    </td>
                  </tr>
                  <?php endforeach;?>
                </tbody>
              </table>
              </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div><!-- /.col -->
              </div><!-- /.row -->
              </section><!-- /.content -->
              </div><!-- /.content-wrapper -->
