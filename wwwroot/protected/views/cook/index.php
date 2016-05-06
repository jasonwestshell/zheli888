<div class="container">
	
	<!-- Portfolio Content -->
	<div id="portfolio-wrapper">
			
		
        <?php foreach($data as $row){ ?>
        <!-- 1/3 Column -->
		<div class="one-third column portfolio-item interior-design architecture real-estate">
			<div class="picture"><img style="height:<?php echo $row->height;?>px;" src="/media/images/<?php echo $row->path;?>" alt=""/></div>
			<div class="item-description alt">
				<h5><?php echo $row->id;?>、<?php echo $row->name;?></h5>
			</div>
		</div>
		<?php }?>
			
	</div>
	<!-- End Portfolio Content -->
		
</div>