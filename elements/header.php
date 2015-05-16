<!DOCTYPE html>
<html lang="fi">

<head>
<link href="<?=$this->getThemePath()?>/css/styles.css" rel="stylesheet" type="text/css">
<link href="<?=$this->getThemePath()?>/css/gallery.theme.css" rel="stylesheet" type="text/css">
<link href="<?=$this->getThemePath()?>/css/gallery.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" media="screen and (min-width: 200px) and (max-width: 900px)" href="<?=$this->getThemePath()?>/css/mob.css" type=text/css" >
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

<?=Loader::element("header_required");?>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>

 <div class="<?=$c->getPageWrapperClass()?>">
 
 	
 	<div class="buttons">
	<div class="buttonscenter">
		<div class="buttonsimages">
			<? 
			$a = new GlobalArea('Button 1');
			$a->display(); 
			?>
		</div>
		<div class="buttonsimages">
			<? 
			$a = new GlobalArea('Button 2');
			$a->display(); 
			?>
		</div>
		<div class="buttonsimages">
			<?
			$a = new GlobalArea('Button 3');
			$a->display();
			?>
		</div>
		<div class="buttonsimages">
			<?
			$a = new GlobalArea('Button 4');
			$a->display();
			?>
		</div>
	

	</div>
	</div>

 	
 
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
