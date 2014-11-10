<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title><?php echo $login_appname . ". " . $login_entity;?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Forgot password. <?php echo $login_appname;?>">
  <meta name="author" content="<?php echo $copyright_authors_text; ?>">
  
  <!--CSS-->

  <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" /> 
  <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/chosen.css')?>" />
  
  <!-- fonts -->

  <link rel="stylesheet" href="<?php echo base_url('assets/css/ace-fonts.css');?>" />

  <!-- ace styles -->

  <link rel="stylesheet" href="<?php echo base_url('assets/css/ace.min.css');?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/ace-rtl.min.css');?>" />
  <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/skeleton/css/bootstrap-select.min.css')?>"/>

  <!--END CSS-->

  
  <!--JS-->

  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.10.2.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/chosen.jquery.min.js');?>"></script>
</head>

<body class="login-layout">

  
  <div class="main-container">
    <div class="main-content">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="login-container">
            <div class="center">
              <h1>
                <i class="icon-leaf green"></i>
                <span class="red"><?php echo $login_appname;?> </span>
                <span class="white"><?php echo $login_entity;?></span>
              </h1>
              <h4 class="blue">&copy; iesebre</h4>
            </div>

            <div class="space-6"></div>

            <div class="position-relative">
              
             <div id="forgot-box" class="forgot-box visible widget-box no-border">
               <div class="widget-body">
                <div class="widget-main">
                  <h4 class="header red lighter bigger">
                    <i class="icon-key"></i>
                    <?php echo lang('forgot_password_heading');?>
                  </h4>

                  <div class="space-6"></div>
                  <p>
                    <?php echo sprintf(lang('forgot_password_subheading'),strtolower(lang($identity)));?>
                  </p>

                  <?php echo form_open(base_url($forgot_password_submit_url.$identity), array('class' => 'form-signin', 'style' => 'max-width: 600px' )); ?>
                  <center><div class="text-error"><div id="infoMessage"><?php echo $message;?></div></div>
                    <fieldset>
                      <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                          <select id="form-field-select-3" class="width-100 chosen-select" name="realm">
                           <?php foreach( (array) $realms as $realm): ?>
                           <?php if( $realm == $default_realm): ?>
                           <option value="<?php echo $realm; ?>" selected="selected"><?php echo $realm; ?></option>
                         <?php else: ?> 
                         <option value="<?php echo $realm; ?>" ><?php echo $realm; ?></option>
                       <?php endif; ?> 
                     <?php endforeach; ?>  
                   </select></span></label>
                   <label class="block clearfix">
                    <span class="block input-icon input-icon-right">
                      <!--<input type="email" class="form-control" placeholder="Email" />-->
                      <input id="<?php echo $identity;?>" name="<?php echo $identity;?>" class="form-control" type="email" placeholder="<?php $lang_string="forgot_password_" . $identity . "_identity_label" ;echo lang($lang_string);?>">
                      <i class="icon-envelope"></i>
                    </span>
                  </label>

                  <div class="block clearfix">
                    
                    <button type="submit" class="width-35 center btn btn-sm btn-danger">
                      <i class="icon-lightbulb"></i>
                      <?php echo lang('forgot_password_submit_btn');?>
                    </button>
                    
                  </div>
                </fieldset>
                <?php echo sprintf(lang("do_you_not_remember_your_identity"),strtolower(lang($identity)));?> 
                <br/>
                <a href="<?php echo base_url('index.php/skeleton_auth/ebre_escool_auth/forgot_password_' . $alternative_identity)?>">
                  <?php echo sprintf(lang("try_with_your_identity"),strtolower(lang($alternative_identity)));?>
                </a>
                <?php echo form_close();?>
              </div><!-- /widget-main -->

              <div class="toolbar center">
                <a href="<?php echo base_url('');?>" class="back-to-login-link">
                  <?php echo lang('come_back');?>
                  <i class="icon-arrow-right"></i>
                </a>
              </div>
            </div><!-- /widget-body -->
            
          </div><!-- /forgot-box -->
          
          
        </div><!-- /position-relative -->
      </div>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div>
</div><!-- /.main-container -->
<?php include("auth_footer.html"); ?> 
<!--BOTON REALM-->
<script type="text/javascript">
$(".chosen-select").chosen();
</script>
</body>
</html>