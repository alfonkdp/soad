<section id="content" class="main-content">
  <div class="container">
    <div class="row">
		<div class="span6 float">
			<h4 class="indent-2">Barang & Harga</h4>
			<p class="lead">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. </p>
			<figure class="img-indent"><img src="<?php echo img_url();?>page1-img1.jpg" alt="" class="img-radius"></figure>
			<p class="lead">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. </p>
			<p class="lead">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. </p>
			<figure class="img-indent"><img src="<?php echo img_url();?>page1-img1.jpg" alt="" class="img-radius"></figure>
			<p class="lead">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. </p>
		</div>
		<div class="span6 float2">
			<h4 class="indent-2">Facebook Feed</h4>
			<ul class="list">
			<?php foreach ($getAllFeed as $feed) {
						if(!empty($feed->picture_thumb)) {?>
						<figure class="img-indent"><img src="<?php echo $feed->picture_thumb;?>" alt="" class="img-radius"></figure>
			    <?php 	}  
						if(!empty($feed->message)) { ?> 
						<li><?php echo $feed->message;?>&nbsp;-&nbsp;<abbr class="timeago" title="<?php echo $feed->created_time?>"><?php echo $feed->created_time?></abbr></li>
				<?php 	} 
					}?>
			</ul>
		</div>
    </div> 
    <div class="row">
    	<div class="span6 float2">
        	<h4 class="indent-2">Tentang Isagenix</h4>
            <p class="lead">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. </p>
			<figure class="img-indent"><img src="<?php echo img_url();?>page1-img1.jpg" alt="" class="img-radius"></figure>
			<p class="lead">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.</p> 
       </div>
       <div class="span6 float">
			<h4 class="indent-2">Kebebasan Finansial</h4>
			<p class="lead">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. </p>
			<figure class="img-indent"><img src="<?php echo img_url();?>page1-img1.jpg" alt="" class="img-radius"></figure>
			<p class="lead">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. </p>
        </div>
    </div>   
    <div class="row">
    	<div class="span12">
			<h4 class="indent-2">Testimoni</h4>
			<p class="lead">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. </p>
			<p class="lead">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.</p> 
        </div>
    </div> 
    <div class="row">
    	<div class="span12">
			<h4 class="indent-2">Contact Us</h4>
			<p class="lead">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. </p>
			<p class="lead">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.</p> 
        </div>
    </div>      
  </div>
</section>
