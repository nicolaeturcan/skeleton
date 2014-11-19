				 
<div class="main-content">
	<div class="breadcrumbs" id="breadcrumbs">
		<script type="text/javascript">
		try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
		</script>

		<!-- mulletes de pa-->
		<ul class="breadcrumb">
			<li>
				<i class="icon-home home-icon"></i>
				<a href="#">Home</a>
			</li>

			<li>
				<a href="#">Proving Ground</a>
			</li>
			<li class="active">Formulari</li>
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
				FITXA DEL PROFESSORAT
				<small>
					<i class="icon-double-angle-right"></i>
					Formulari per a donar d'alta a un professor.
				</small>
			</h1>
		</div><!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->

				<form class="form-horizontal" role="form">

					<div>
						<div class="col-sm-8">
							<div class="form-group">
								<!--  Llastname Field -->
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Cognom </label>
								<div class="col-sm-9">
									<input type="text" id="Cognom" placeholder="Cognom" class="col-xs-10 col-sm-5" />
								</div>
							</div>

							<div class="form-group">
								<!-- Name Field -->
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> NOM </label>

								<div class="col-sm-9">
									<input type="text" id="form-field-1" placeholder="Nom" class="col-xs-10 col-sm-5" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-mask-4"> NIF </label>

								<div class="col-sm-9">
									<input class="col-xs-10 col-sm-5 input-mask-dni" type="text" id="form-field-mask-4" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> DATA NAIXEMENT </label>
								<div class="col-sm-4">
									<div class="input-group ">
										<input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy"/>
										<span class="input-group-addon">
											<i class="icon-calendar bigger-110"></i>
										</span>
									</div>
								</div>
							</div>


							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> MUNICIPI i PROVÍNCIA DE NAIXEMENT: </label>

								<div class="col-sm-9">

									<select class="width-50 select2" id="form-field-select-1" data-placeholder="Tria un municipi i provicia de naixement...">
										<option value="">&nbsp;</option>									
										<option value="" >Barcelona</option>
										<option value="" >Tarragona</option>
										<option value="" >Valencia</option>
									</select>
									<span></span>
								</div>										
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ADREÇA </label>
								<div class="col-sm-9">
									<input type="text" id="Adreça" placeholder="Adreça" class="col-xs-10 col-sm-5" />
								</div>
							</div>


							<div class="form-group">
								<div>
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> MUNICIPI: </label>
									<div class="col-sm-9">
										<select class="width-50 select2" id="form-field-select-2" data-placeholder="Tria un municipi...">
											<option value="">&nbsp;</option>
											<option value="">Barcelona</option>
											<option value="">Roquetes</option>
											<option value="">Tortosa</option>										
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div>
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Codi Postal:</label>
									<div class="col-sm-9">
										<select class="width-50 select2" id="form-field-select-3" data-placeholder="Tria el codi postal...">
											<option value="">&nbsp;</option>
											<option value="">40000</option>
											<option value="">43520</option>
											<option value="">43500</option>
											<option value="">52470</option>								
										</select>
									</div>
								</div>
							</div>




							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> TELÈFON </label>
								<div class="col-sm-4">
									<div class="input-group">
										<input class="form-control input-mask-telefono" type="text" id="form-field-mask-3" />
										<span class="input-group-addon">
											<i class="icon-key"></i>
										</span>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> CORREU ELECTRÒNIC </label>

								<div class="col-sm-9">
									<input type="text" id="Correu electronic" placeholder="Correu electrònic" class="col-xs-10 col-sm-5" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> SI TENIU UNA ALTRA ADREÇA, INDIQUEU-LA: </label>

								<div class="col-sm-9">
									<input type="text" id="altra_adresa" placeholder="La meua altra adreça" class="col-xs-10 col-sm-5" />
								</div>
							</div>


							<h3 class="header smaller lighter blue"></h3>


						</div>

						<div class="col-sm-4">
							<div class="widget-box">
								<div class="widget-header widget-header-flat">
									<h4>Fotografia: </h4>
								</div>
								<div class="widget-body">
									<div class="widget-main">
										<input multiple="" type="file" id="id-input-file-3" />
										<label>
											<input type="checkbox" name="file-format" id="id-file-format" class="ace" />
											<span class="lbl"> Permetre pujar només imatges</span>
										</label>
									</div>
								</div>
							</div>

						</div><!-- /span -->



					</div>






					
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="control-group">
									<label class="control-label bolder blue">COS</label>

									<div class="radio">
										<label>
											<input name="cos" type="radio" class="ace" />
											<span class="lbl"> Mestres</span>
										</label>
									</div>

									<div class="radio">
										<label>
											<input name="cos" type="radio" class="ace" />
											<span class="lbl"> Professorat d'Ensenyament secundari</span>
										</label>
									</div>

									<div class="radio">
										<label>
											<input name="cos" type="radio" class="ace" />
											<span class="lbl"> Professorat tècnic de formació professional</span>
										</label>
									</div>
								</div>
							</div>

							<div class="col-xs-12 col-sm-6">
								<div class="control-group">
									<label class="control-label bolder blue">SITUACIÓ</label>

									<div class="radio">
										<label>
											<input name="situacio" type="radio" class="ace" />
											<span class="lbl"> Funcionari/ària</span>
										</label>
									</div>

									<div class="radio">
										<label>
											<input name="situacio" type="radio" class="ace" />
											<span class="lbl"> Funcionari/ària en practiques</span>
										</label>
									</div>

									<div class="radio">
										<label>
											<input name="situacio" type="radio" class="ace" />
											<span class="lbl"> Interí/ina</span>
										</label>
									</div>

									<div class="radio">
										<label>
											<input name="situacio" type="radio" class="ace" />
											<span class="lbl"> Substitut/a</span>
										</label>
									</div>
								</div>
							</div>
						</div>

						<h3 class="header smaller lighter blue"></h3>
						<div class="space-24"></div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> TITULACIÓ QUE POSSEÏU: </label>

							<div class="col-sm-9">
								<input type="text" id="titulacio" placeholder="Titulació" class="col-xs-10 col-sm-5" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> NIVELL/TITULACIÓ DE CATALÀ: </label>

							<div class="col-sm-9">
								<input type="text" id="nivell" placeholder="nivell" class="col-xs-10 col-sm-5" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> DATA D'ALTA AL CENTRE: </label>
							<div class="col-sm-4">
								<div class="input-group">
									<input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy"/>
									<span class="input-group-addon">
										<i class="icon-calendar bigger-110"></i>
									</span>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ESPECIALITAT QUE OCUPEU AL CENTRE: </label>

							<div class="col-sm-9">
								<input type="text" id="Especialitat" class="col-xs-10 col-sm-5" />
							</div>
						</div>

						<h3 class="header smaller lighter blue"></h3>
						<div>
							<label for="form-field-8">DESCRIPCIÓ</label>

							<textarea class="form-control" id="form-field-8" placeholder="Default Text"></textarea>
						</div>

						<div class="space-24"></div>















						<div class="clearfix form-actions">
							<div class="col-md-offset-3 col-md-9">
								<button class="btn btn-info" type="button">
									<i class="icon-ok bigger-110"></i>
									Submit
								</button>

								&nbsp; &nbsp; &nbsp;
								<button class="btn" type="reset">
									<i class="icon-undo bigger-110"></i>
									Reset
								</button>
							</div>
						</div>




					</form>










				</div><!-- PAGE CONTENT ENDS -->
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.page-content -->
</div><!-- /.main-content -->


</div><!-- /.main-container-inner -->

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
	<i class="icon-double-angle-up icon-only bigger-110"></i>
</a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->

<script type="text/javascript">
window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
</script>

<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

<script type="text/javascript">
if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/typeahead-bs2.min.js"></script>

<!-- page specific plugin scripts -->

		  <script type="text/javascript">
		  

		  $(document).ready(function() { $("#form-field-select-1,#form-field-select-2,#form-field-select-3").select2(); });


		  jQuery(function($) {
		  	$('#id-disable-check').on('click', function() {
		  		var inp = $('#form-input-readonly').get(0);
		  		if(inp.hasAttribute('disabled')) {
		  			inp.setAttribute('readonly' , 'true');
		  			inp.removeAttribute('disabled');
		  			inp.value="This text field is readonly!";
		  		}
		  		else {
		  			inp.setAttribute('disabled' , 'disabled');
		  			inp.removeAttribute('readonly');
		  			inp.value="This text field is disabled!";
		  		}
		  	});


		  	$(".chosen-select").chosen(); 
		  	$('#chosen-multiple-style').on('click', function(e){
		  		var target = $(e.target).find('input[type=radio]');
		  		var which = parseInt(target.val());
		  		if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
		  		else $('#form-field-select-4').removeClass('tag-input-style');
		  	});


		  	$('[data-rel=tooltip]').tooltip({container:'body'});
		  	$('[data-rel=popover]').popover({container:'body'});

		  	$('textarea[class*=autosize]').autosize({append: "\n"});
		  	$('textarea.limited').inputlimiter({
		  		remText: '%n character%s remaining...',
		  		limitText: 'max allowed : %n.'
		  	});

		  	$.mask.definitions['~']='[+-]';
		  	$('.input-mask-date').mask('99/99/9999');
		  	$('.input-mask-telefono').mask('(999) 999-9999');
		  	$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
		  	$(".input-mask-dni").mask("99999999.a");
		  	$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});



		  	$( "#input-size-slider" ).css('width','200px').slider({
		  		value:1,
		  		range: "min",
		  		min: 1,
		  		max: 8,
		  		step: 1,
		  		slide: function( event, ui ) {
		  			var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
		  			var val = parseInt(ui.value);
		  			$('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
		  		}
		  	});

		  	$( "#input-span-slider" ).slider({
		  		value:1,
		  		range: "min",
		  		min: 1,
		  		max: 12,
		  		step: 1,
		  		slide: function( event, ui ) {
		  			var val = parseInt(ui.value);
		  			$('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
		  		}
		  	});


		  	$( "#slider-range" ).css('height','200px').slider({
		  		orientation: "vertical",
		  		range: true,
		  		min: 0,
		  		max: 100,
		  		values: [ 17, 67 ],
		  		slide: function( event, ui ) {
		  			var val = ui.values[$(ui.handle).index()-1]+"";

		  			if(! ui.handle.firstChild ) {
		  				$(ui.handle).append("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
		  			}
		  			$(ui.handle.firstChild).show().children().eq(1).text(val);
		  		}
		  	}).find('a').on('blur', function(){
		  		$(this.firstChild).hide();
		  	});

		  	$( "#slider-range-max" ).slider({
		  		range: "max",
		  		min: 1,
		  		max: 10,
		  		value: 2
		  	});

		  	$( "#eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true
						
					});
				});


		  	$('#id-input-file-1 , #id-input-file-2').ace_file_input({
		  		no_file:'No File ...',
		  		btn_choose:'Choose',
		  		btn_change:'Change',
		  		droppable:false,
		  		onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});

		  	$('#id-input-file-3').ace_file_input({
		  		style:'well',
		  		btn_choose:'Drop files here or click to choose',
		  		btn_change:null,
		  		no_icon:'icon-cloud-upload',
		  		droppable:true,
					thumbnail:'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}

				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				

				//dynamically change allowed formats by changing before_change callback function
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var before_change
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = "Drop images here or click to choose";
						no_icon = "icon-picture";
						before_change = function(files, dropped) {
							var allowed_files = [];
							for(var i = 0 ; i < files.length; i++) {
								var file = files[i];
								if(typeof file === "string") {
									//IE8 and browsers that don't support File Object
									if(! (/\.(jpe?g|png|gif|bmp)$/i).test(file) ) return false;
								}
								else {
									var type = $.trim(file.type);
									if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
											|| ( type.length == 0 && ! (/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
										) continue;//not an image so don't keep this file
								}

							allowed_files.push(file);
						}
						if(allowed_files.length == 0) return false;

						return allowed_files;
					}
				}
				else {
					btn_choose = "Drop files here or click to choose";
					no_icon = "icon-cloud-upload";
					before_change = function(files, dropped) {
						return files;
					}
				}
				var file_input = $('#id-input-file-3');
				file_input.ace_file_input('update_settings', {'before_change':before_change, 'btn_choose': btn_choose, 'no_icon':no_icon})
				file_input.ace_file_input('reset_input');
			});




				 $('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				 .on('change', function(){
					//alert(this.value)
				});
				 $('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'icon-caret-up', icon_down:'icon-caret-down'});
				 $('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'icon-plus smaller-75', icon_down:'icon-minus smaller-75', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});



				 $('.date-picker').datepicker({autoclose:true}).next().on(ace.click_event, function(){
				 	$(this).prev().focus();
				 });

				 $('input[name=date-range-picker]').daterangepicker().prev().on(ace.click_event, function(){
				 	$(this).next().focus();
				 });

				 $('#timepicker1').timepicker({
				 	minuteStep: 1,
				 	showSeconds: true,
				 	showMeridian: false
				 }).next().on(ace.click_event, function(){
				 	$(this).prev().focus();
				 });

				 $('#colorpicker1').colorpicker();
				 $('#simple-colorpicker-1').ace_colorpicker();


				 $(".knob").knob();


				//we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
				var tag_input = $('#form-field-tags');
				if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
				{
					tag_input.tag(
					{
						placeholder:tag_input.attr('placeholder'),
						//enable typeahead by specifying the source array
						source: ace.variable_US_STATES,//defined in ace.js >> ace.enable_search_ahead
					}
					);
				}
				else {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//$('#form-field-tags').autosize({append: "\n"});
				}
				
				
				

				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('shown.bs.modal', function () {
					$(this).find('.chosen-container').each(function(){
						$(this).find('a:first-child').css('width' , '210px');
						$(this).find('.chosen-drop').css('width' , '210px');
						$(this).find('.chosen-search input').css('width' , '200px');
					});
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element becomes visible with dimensions and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				 */

				});
				 </script>
