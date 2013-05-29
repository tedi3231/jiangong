	<hr style="margin-left:10px;margin-right:10px;"/>
		<div id="footer" class="row">
			 <div class="span3 text-right">
			 <!--<img src="<?php bloginfo('template_url')?>/bootstrap/img/gongshang.png"/>-->
			 </div>
			 <div class="span1 text-left">
			 <img src="<?php bloginfo('template_url') ?>/bootstrap/img/banner.png" />
			 </div>
			 <div class="span1 text-center" style="width:5px;">
			 	<div style="background:#ccc;height:55px;width:1px;"></div>
			 </div>
			 	
			 <div class="span7">
				 <div class="row">
					 <div class="span12 text-left" style="margin-top:6px;width:500px;">
					 <?php 
					 	$categories = get_categories(array('child_of' => 18,'hide_empty'=>false)); 
						foreach($categories as $cat):
					 ?>
					 	<a style="margin-right: 10px;" href="<?php bloginfo('url');?>/?cat=<?php echo $cat->term_id; ?>">
					 		<?php echo $cat->cat_name;?>
					 	</a>
					 <?php endforeach;?>
					 </div>
				 </div>
				 <div class="row">
					 <p class="muted" style="margin-top:5px;width:500px;margin-left:30px;">
						 Copyright@上海建工集团股份有限公司 All rights reserved 沪ICP备:05055280
					 </p>
				 </div>
			 </div>
	   </div>
	  </div>
        <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script src="<?php bloginfo('template_url')?>/bootstrap/js/bootstrap.js"></script>
  </body>
</html>

