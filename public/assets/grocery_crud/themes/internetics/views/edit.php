<?php
    $this->set_css($this->default_theme_path.'/internetics/css/bootstrap/bootstrap.min.css');
    $this->set_css($this->default_theme_path.'/internetics/css/elusive-icons/css/elusive-icons.min.css');
    $this->set_css($this->default_theme_path.'/internetics/css/common.css');
    $this->set_css($this->default_theme_path.'/internetics/css/general.css');
    $this->set_css($this->default_theme_path.'/internetics/css/add-edit-form.css');
    $this->set_css($this->default_theme_path.'/internetics/css/main.css');
    $this->set_css($this->default_theme_path.'/internetics/css/internetics.css?v=42');
    $this->set_css($this->default_theme_path.'/internetics/css/lightbox.css');
    $this->set_css($this->default_theme_path.'/internetics/css/print.min.css');
   

    $jquery_js = isset($jquery_js) ? $jquery_js : grocery_CRUD::JQUERY;

    if ($this->config->environment == 'production') {
	    $this->set_js_lib($this->default_javascript_path . '/' . $jquery_js);
        $this->set_js_lib($this->default_theme_path.'/internetics/js/jquery-plugins/jquery.form.min.js');
        $this->set_js_lib($this->default_theme_path.'/internetics/js/common/common.min.js');
        $this->set_js_config($this->default_theme_path.'/internetics/js/form/edit.js');
        $this->set_js_lib($this->default_theme_path . '/internetics/js/lightbox.js');
        $this->set_js_lib($this->default_theme_path . '/internetics/js/bootstrap.min.js');
        $this->set_js_lib($this->default_theme_path . '/internetics/js/popper.min.js');
        $this->set_js_lib($this->default_theme_path . '/internetics/js/bootbox.min.js');
        $this->set_js_lib($this->default_theme_path . '/internetics/js/bootbox.locales.min.js');
        $this->set_js_lib($this->default_theme_path.'/internetics/js/jquery-plugins/print.min.js');
    } else {
        $this->set_js_lib($this->default_javascript_path . '/' . $jquery_js);
        $this->set_js_lib($this->default_theme_path.'/internetics/js/jquery-plugins/jquery.form.min.js');
        $this->set_js_lib($this->default_theme_path.'/internetics/js/common/common.min.js');
        $this->set_js_config($this->default_theme_path.'/internetics/js/form/edit.js');
        $this->set_js_lib($this->default_theme_path . '/internetics/js/lightbox.js');
        $this->set_js_lib($this->default_theme_path . '/internetics/js/bootstrap.min.js');
        $this->set_js_lib($this->default_theme_path . '/internetics/js/popper.min.js');
        $this->set_js_lib($this->default_theme_path . '/internetics/js/bootbox.min.js');
        $this->set_js_lib($this->default_theme_path . '/internetics/js/bootbox.locales.min.js');
        $this->set_js_lib($this->default_theme_path.'/internetics/js/jquery-plugins/print.min.js');

    }

include(__DIR__ . '/common_javascript_vars.php');





$countfields = 0;

?>
<div class="crud-form" data-unique-hash="<?php echo $unique_hash; ?>">
    <div class="gc-container">
        <div class="row">
            <div class="col-md-12">
                <!-- <div class="table-label">
                    <div class="floatL l5">
                       <?php echo $this->l('form_edit'); ?> <?php echo $subject?>
                    </div>
                    <div class="clear"></div>
                </div> -->
                <div class="form-container table-container">
	                
	               <p id="display_mobility_level" style="display:block">Level X</p><BR>  
	              
	                <div id='summary_view'><div class='row py-2 align-items-center'>
		              
		               <div class='col-4 text-right'><div id="summary_mobility_level">Mobility Level</div></div>
		               <div class='col-4 text-center'><div id="final_mobility_level">X</div></div>
		               <div class='col-4 text-left'><div id="conclusion_mobility_level">Summary</div></div>
		               
	              </div></div> 
	              
                    <?php echo form_open( $update_url, 'method="post" id="crudForm"  enctype="multipart/form-data"'); ?>
                    
                    
                    
                    
                    <!-- start of the questions div -->
					<div id="questions">
						
						
						
					<?php 
						
					$total_panes = 0; foreach($fields as $field) {	$total_panes++;	 }						
//					echo '<BR>Total windows to show: ' . $total_panes . '<BR>';
	                    

                     foreach($fields as $field) { 
	                    
	                   
	                   



	                    
	                    if ($countfields == '0') {echo '<div id="q' . $countfields . '" style="display: block;">';}
	                    else {echo '<div id="q' . $countfields . '" style="display: none;">';}
	                    
	                    $countfields = $countfields + 1;
	                    
	                    
	                    
                    ?>
                    
                   <!-- start of the item entry panel -->
                   
                        <div class="entry-pane_no_colour form-group <?php echo $field->field_name; ?>_form_group row">
                            <label class="col-sm-12 control-label">
                                <?php echo $input_fields[$field->field_name]->display_as?><?php echo ($input_fields[$field->field_name]->required)? "<span class='required'>*</span> " : ""?>
                            </label>
                        </div>
                        <div class="entry-pane form-group <?php echo $field->field_name; ?>_form_group row">
                            <div class="col-sm-12" control-label>
                                <?php echo $input_fields[$field->field_name]->input; ?>
                                <?php  if ($field->field_name == 'reason_for_the_screening') {echo '<div class="row py-2"><div class="col-9"><i>Other reasons</i> (if required, please enter in the box below)  ' .$input_fields['reason_for_the_screening_other']->input . '</div></div>'; }?>
								<?php  if ($field->field_name == 'available_equipment_1') {echo '<div class="row py-2"><div class="col-9"><i>Other equipment</i> (if required, please enter in the box below) ' .$input_fields['available_equipment_1_other']->input . '</div></div>'; }?>
								<?php  if ($field->field_name == 'available_equipment_2') {echo '<div class="row py-2"><div class="col-9"><i>Other equipment</i> (if required, please enter in the box below) ' .$input_fields['available_equipment_2_other']->input . '</div></div>'; }?>
								<?php  if ($field->field_name == 'available_equipment_3') {echo '<div class="row py-2"><div class="col-9"><i>Other equipment</i> (if required, please enter in the box below) ' .$input_fields['available_equipment_3_other']->input . '</div></div>'; }?>
								<?php  if ($field->field_name == 'environmental_risk_factors') {echo '<div class="row py-2"><div class="col-9"><i>Describe the problem</i> (if required, please enter in the box below) ' .$input_fields['environmental_risk_factors_other']->input . '</div></div>'; }?>
								<?php  if ($field->field_name == 'steps_to_manage_the_risk') {echo '<div class="row py-2"><div class="col-9"><i>Other steps you have taken:</i>  ' .$input_fields['steps_to_manage_the_risk_other']->input . '</div></div>'; }?>
                            </div>

                          


                        </div>
                        
                        
                        
                        
                      
                    <!-- end of the item entry panel -->
                    
                    <?php	                 
	                    
	                    if ( $countfields == $total_panes ){ 
		                    
		                    
		                    
		                  if ($is_ajax) { ?><input type="hidden" name="is_ajax" value="true" /><?php }?>
                    <div class="entry-pane_buttons form-group gcrud-form-group">
                        <div id='report-error' class='report-div error bg-danger' style="display:none"></div>
                        <div id='report-success' class='report-div success bg-success' style="display:none"></div>
                    </div>
                    <div class="form-group gcrud-form-group">
                        <div class="col-sm-offset-3 col-sm-12">
                           <!-- <button class="btn btn-secondary btn-success b10" type="submit" id="form-button-save">
                                <i class="el el-ok"></i>
                                <?php echo $this->l('form_update_changes'); ?>
                            </button>
                            <?php 	if(!$this->unset_back_to_list) { ?>
                                <button class="btn btn-info b10" type="button" id="save-and-go-back-button">
                                    <i class="el el-return-key"></i>
                                    <?php echo $this->l('form_update_and_go_back'); ?>
                                </button>
                                <button class="btn btn-secondary cancel-button b10" type="button" id="cancel-button">
                                    <i class="el el-warning-sign"></i>
                                    <?php echo $this->l('form_cancel'); ?>
                                </button> 
                                
                                -->
                                
                              
                                                                     
                            <?php } ?>
                        </div>
                    </div>
  
		                   <?php 
		                    
		                    
	                    }
	                    
	                    echo '</div>';
	                    
	                    }
	                    
//	                    echo '<BR>Total number of records: ' . $countfields . '<BR>'; 
	   
                    ?>
       
                    
					</div>
					<!-- end of questions div -->
        
        
            
                    

                    <?php if(!empty($hidden_fields)){?>
                        <!-- Start of hidden inputs -->
                        <?php
                        foreach($hidden_fields as $hidden_field){
                            echo $hidden_field->input;
                        }
                        
                        	                   
                        ?>
                        <!-- End of hidden inputs -->
                    <?php 
	                    } 
                    ?>
                    
                    
                    

                    <?php echo form_close(); ?>
                    
                    
                    
                    
                     <div class="form-group gcrud-form-group">
                        <div class="col-sm-offset-3 col-sm-12">
	                        <button onclick="prev_question(); displayMobilityLevel();" class="btn btn-secondary btn-success b10" id="prev_question_btn" >RESTART</button>
							<button onclick="next_question(); displayMobilityLevel();" class="btn btn-secondary btn-success b10" id="next_question_btn" >NEXT</button>
							<BR><div id="print_pdf_message" style="display: inline-block;">
                                When selecting PRINT/PDF please ensure you tick “Print backgrounds” (Safari) or “Background graphics” (Chrome) to see all the tick-boxes. Click the information button for example on Chrome: <a class="backg_graphics" href="/screening/public/assets/grocery_crud/themes/internetics/images/backg_graphics.png" alt="Launch Illustration" data-lightbox="backg_graphics"><i class="bi bi-info-circle-fill"></i></a>
                    
                            <a class="backg_graphics" href="/screening/public/assets/grocery_crud/themes/internetics/images/backg_graphics.png" alt="Launch Illustration" data-lightbox="backg_graphics"><img src="/screening/public/assets/grocery_crud/themes/internetics/images/backg_graphics_th.png" style="float: right; margin:10px" width=300></a>   
                            </div>
                            <BR>
						    <input type="image" onclick="print_me();" class="print_pdf_button" id="print_pdf_button" style="display: inline-block;" src="/screening/public/assets/grocery_crud/themes/internetics/images/print-pdf-icon2.png" title="Print" />
							
                    	</div>
                    </div>
                    
                    
                 
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var validation_url = '<?php echo $validation_url?>';
    var list_url = '<?php echo $list_url?>';

    var message_alert_edit_form = "<?php echo $this->l('alert_edit_form')?>";
    var message_update_error = "<?php echo $this->l('update_error')?>";
</script>









