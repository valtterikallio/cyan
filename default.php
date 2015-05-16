<!DOCTYPE html>
<html lang="fi">

<head>
<link href="<?=$this->getThemePath()?>/css/styles.css" rel="stylesheet" type="text/css">
<link href="<?=$this->getThemePath()?>/css/gallery.theme.css" rel="stylesheet" type="text/css">
<link href="<?=$this->getThemePath()?>/css/gallery.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" media="screen and (min-width: 200px) and (max-width: 900px)" href="<?=$this->getThemePath()?>/css/mob.csss" type=text/css" >

<?=Loader::element("header_required");?>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>

 <div class="<?=$c->getPageWrapperClass()?>">
 
 	<div id="logo">
		
			<?
			$a = new GlobalArea('Site Logo');
			$a->display();
			?>
	
	</div>
 

	<div id="menu"> 			 
	
		<div id="menucenter">
	
			<?
			$a = new GlobalArea('Top Nav');
			$a->display();
			?>

		</div>
	
	</div>
		
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
		$a = new Area('Content');
		$a->display($c); 
		?>
	
	
	
	</div>
	
		<div id="content_right">
	
		<? 
		$a = new Area('Content Right');
		$a->display($c); 
		?>
	
	
	
	</div></div></div>

	

<?=Loader::element("footer_required");?>
    
</body>
</html>