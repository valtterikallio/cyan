			
			<div id="clear"></div>	
			<div class="footer">
				<div class="address">
				
					<? 
					$a = new GlobalArea('Address 1');
					$a->display(); 
					?>
					
				</div>
				
				<div class="address2">
				
					<? 
					$a = new GlobalArea('Address two');
					$a->display(); 
					?>
					
					
				</div>
	
				
				<div class="email">
				
					<? 
					$a = new GlobalArea('Address three');
					$a->display(); 
					?>
					
					
				</div>

		</div></div>
		
		
	



</div>

	

<?=Loader::element("footer_required");?>
    
</body>
</html>