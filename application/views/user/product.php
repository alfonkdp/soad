<section id="content">
<div class="sub-content">
  <div class="container">
    <div class="row">
      <div class="span12">
          <h4 class="bot-0">Product Gallery</h4>
      </div>
    </div>
    <div class="row"> 
        <div class="thumbnails_4">
            <?php if ($getAll) {
                  foreach($getAll as $product) { ?>
            <div class="span3">
                <div class="thumbnail thumbnail_4">  
                    <figure><img src="<?php echo base_url(); ?>assets/product/thumb/<?php echo $product->image_id.$product->ext; ?>" class="img-radius" alt=""></figure>
                    <p class="lead p2"><a href="#" class="lead"><?php echo $product->name; ?></a></p>
                    <p><?php echo $product->description; ?></p>
                    <p>Rp <?php echo $product->price; ?></p>
                </div>
            </div>   
            <?php
              }
            }
          ?>   
                
        </div>   
    </div>  
    <div class="row">
          <?php echo $pagination; ?>
    </div>
  </div>

</div>
</section>