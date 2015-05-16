<?php $this->inc('elements/header.php'); ?>	
		
		<div class="contentwrapper">	
			
			<div class="contenttext_left">
		
			<? 
			$a = new Area('Content left');
			$a->display($c); 
			?>	
			
			</div>
			
			<div class="contenttext_right">
		
			<? 
			$a = new Area('Content right');
			$a->display($c); 
			?>	
			
			</div>
			
<?php $this->inc('elements/footer.php'); ?>	