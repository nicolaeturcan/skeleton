<div class="main-content">
	<div class="breadcrumbs" id="breadcrumbs">
		<script type="text/javascript">
		try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
		</script>

		<ul class="breadcrumb">
			<li>
				<i class="icon-home home-icon"></i>
				<a href="<?php echo base_url('/index.php');?>">Home</a>
			</li>
			<li class="active"><?php echo $body_header_app_name;?></li>
		</ul><!-- .breadcrumb -->

		<div class="nav-search" id="nav-search">
			<form class="form-search">
				<span class="input-icon">
					<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
					<i class="icon-search nav-search-icon"></i>
				</span>
			</form>
		</div><!-- #nav-search -->
	</div>

	<div class="page-content">
		<div class="page-header">
			<h1>
				<?php echo $body_header_app_name;?>
				<small>
					<i class="icon-double-angle-right"></i>
					overview & stats 
				</small>
			</h1>
		</div><!-- /.page-header -->
	</div>

	<div id="skeleton_body">
		<?php echo "PUT YOUR DEFAULT BODY CONTENT HERE (file: views/include/body.php) or edit function _load_body";?>
	</div>
</div>