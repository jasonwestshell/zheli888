<div class="sixteen columns">

		<div id="navigation">
			<ul id="nav">

				<li><a href="/">首 页</a></li>

				<li><a href="<?php echo $this->createUrl('cook/index');?>">这里农家饭</a>
					<!--<ul>
                        <li><a href="<?php //echo $this->createUrl('cook/cold');?>">凉菜 拌菜</a></li>
                        <li><a href="<?php //echo $this->createUrl('cook/fried');?>">炒菜</a></li>
                        <li><a href="<?php //echo $this->createUrl('cook/stew');?>">炖鱼 炖肉</a></li>
                        <li><a href="<?php //echo $this->createUrl('cook/other');?>">其他饭菜</a></li>
					</ul>-->
				</li>

				<li><a href="<?php echo $this->createUrl('cabin/index');?>">这里木屋</a>
                	<!--<ul>
						<li><a href="<?php //echo $this->createUrl('cabin/bigcabin');?>">大木屋</a></li>
						<li><a href="<?php //echo $this->createUrl('cabin/smallcabin');?>">小木屋</a></li>
						<li><a href="<?php //echo $this->createUrl('cabin/room');?>">客房</a></li>
					</ul>-->
                </li>
				<li><a href="<?php echo $this->createUrl('field/index');?>">这里菜地</a>
					<!--<ul>
						<li><a href="portfolio_2.html">营养蔬菜</a></li>
						<li><a href="portfolio_3.html">采摘</a></li>
						<li><a href="portfolio_4.html">现摘现做</a></li>
					</ul>-->
				</li>

				<li><a href="javascript:void(0);">周边旅游</a>
                	<ul>
						<li><a href="http://www.kuangou.com/" target="_blank">宽沟</a></li>
						<li><a href="http://www.mutianyugreatwall.com/" target="_blank">慕田峪</a></li>
						<li><a href="http://www.bjshengqs.com/" target="_blank">圣泉山</a></li>
					</ul>
                </li>
				<li><a href="<?php echo $this->createUrl('index/come');?>">到这里来</a></li>

			</ul>

			<!-- Search Form -->
			<div class="search-form">
				<form method="get" action="#">
					<input type="text" class="search-text-box" />
				</form>
			</div>

		</div> 
		<div class="clear"></div>
		
	</div>