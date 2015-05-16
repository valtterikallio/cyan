<?php $this->inc('elements/header.php'); ?>	
		
		<div class="contentwrapper">	
			
			<div class="contenttext">
		
			<? 
			$a = new Area('Content');
			$a->display($c); 
			?>	
			
			</div>
			
				<div id="content_quote">
		
					<? 
					$a = new Area('Content Quote');
					$a->display($c); 
					?>
							
				</div>
	
<?php $this->inc('elements/footer.php'); ?>	