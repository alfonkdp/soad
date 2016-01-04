<footer>
   <div class="container">
    <div class="row">
      <div class="span4 float2">
        <form id="newsletter" method="post" >
            <label>Newsletter</label>
            <div class="clearfix">
                <input type="text" onFocus="if(this.value =='Enter e-mail here' ) this.value=''" onBlur="if(this.value=='') this.value='Enter e-mail here'" value="Enter e-mail here" >
                <a href="#" onClick="document.getElementById('newsletter').submit()" class="btn btn_">subscribe</a>
            </div>
        </form>
    </div>
    <div class="span8 float">
      	<ul class="footer-menu">
        	<li><a href="#" class="current">Home</a>|</li>
            <li><a href="#">Produk</a>|</li>
            <li><a href="<?php echo site_url()?>fb-feed">Facebook Feed</a>|</li>
            <li><a href="<?php echo site_url()?>about">Tentang Isagenix</a>|</li>
            <li><a href="#">Kebebasan Finansial</a>|</li>
            <li><a href="#">Forum</a></li>
            <li><a href="<?php echo site_url()?>our-distributor">Our Distributor</a></li>
        </ul>
      	Stylish   &copy;  2012  |   <a href="index-6.html">Privacy Policy</a> More <a rel="nofollow" href="http://www.templatemonster.com/category.php?category=0&type=1" target="_blank"> at TemplateMonster.com</a>
      </div>
    </div>
   </div>
</footer>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/camera.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.ui.totop.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.timeago.js"></script>
<script>
      $(document).ready(function(){   
              jQuery('.camera_wrap').camera();
        	  jQuery("abbr.timeago").timeago();
        });    
</script>	
</body>
</html>