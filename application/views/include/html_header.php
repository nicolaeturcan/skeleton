<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
      <title><?php echo $header_title . "Plantilla per defecte!!!";?></title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="<?php echo $header_description;?>">
      <meta name="author" content="<?php echo $header_authors; ?>">
      
      <!-- BEGIN CSS --> 
      <?php if (isset($skeleton_css_files)): ?>
		<?php foreach((array) $skeleton_css_files as $skeleton_css_file): ?>
			<link type="text/css" rel="stylesheet" href="<?php echo $skeleton_css_file; ?>" />
		<?php endforeach; ?>
	  <?php endif; ?>
      
      <!-- END CSS --> 
      
      <!-- BEGIN JS --> 
      
      <?php if (isset($skeleton_js_files)): ?>
	   <?php foreach($skeleton_js_files as $skeleton_js_file): ?>
        <script src="<?php echo $skeleton_js_file; ?>"></script>
       <?php endforeach; ?>
      <?php endif; ?>
      
      <!-- END JS -->
      
      <!-- BEGIN GROCERY CRUD CSS --> 
      <?php if (isset($css_files)): ?>
		<?php foreach((array) $css_files as $css_file): ?>
			<link type="text/css" rel="stylesheet" href="<?php echo $css_file; ?>" />
		<?php endforeach; ?>
	  <?php endif; ?>
      
      <!-- END GROCERY CRUD CSS --> 
      
      <!-- BEGIN GROCERY CRUD  JS --> 
      
      <?php if (isset($js_files)): ?>
	   <?php foreach($js_files as $js_file): ?>
        <script src="<?php echo $js_file; ?>"></script>
       <?php endforeach; ?>
      <?php endif; ?>
      
      <!-- END GROCERY CRUD JS -->
      
<style type="text/css">
     body {
        /*padding-top: 60px;-->
        padding-bottom: 60px;*/
		font-family: Arial;
                font-size: 14px;
               
		min-height:900
		
     }
    
.navbar-text img {
  max-height:30px;
  width:auto;
  vertical-align:middle;
}
		
</style>
      
 </head>
 <!-- END html_header.php -->