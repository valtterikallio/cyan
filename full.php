<?php $this->inc('elements/header.php'); ?>	
		
<div class="contentwrapper">	


		<div class="gallery autoplay items-3">
			  <div id="item-1" class="control-operator"></div>
		  <div id="item-2" class="control-operator"></div>
		  <div id="item-3" class="control-operator"></div>
		
		 
		  <figure class="item">
		   	
		   	
		   	<? 
			$a = new Area('Slider 1');
			$a->display($c); 
			?>
		  </figure>
		  	
		  <figure class="item">
		    <? 
			$a = new Area('Slider 2');
			$a->display($c); 
			?>
	
		  </figure>
		
		  <figure class="item">
	 		<? 
			$a = new Area('Slider 3');
			$a->display($c); 
			?>
	
		  </figure>
		
		  <div class="controls">
		    <a href="#item-1" class="control-button">•</a>
		    <a href="#item-2" class="control-button">•</a>
		    <a href="#item-3" class="control-button">•</a>
		  </div>
		</div>
		
	

	<div id="content_left">
	
		<? 
		$a = new Area('Content Left');
		$a->display($c); 
		?>
	
	
	
	</div>
	
		<div id="content_right">
	
		<? 
		$a = new Area('Content Right');
		$a->display($c); 
		?>
	
	
	
	</div>
	
<?php $this->inc('elements/footer.php'); ?>	