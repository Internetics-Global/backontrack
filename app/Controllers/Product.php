<?php namespace App\Controllers;

use App\Libraries\GroceryCrud;

use App\Libraries\InterneticsLibrary;

use App\Models\InterneticsModel;

class Product extends BaseController
{


	

 public function screening_management()

    {
	    
	    $ionAuth = new \IonAuth\Libraries\IonAuth();
	    
//	    if(!$ionAuth->loggedIn()){
	        
//	        echo "You need to login. Click <a href='/screening/public/auth/login'>here</a>";
//            die;   

//        }
        
//        else {  }
	    
//      $crud = new GroceryCrud();        
        $crud = new InterneticsLibrary();

		$crud->setModel(new InterneticsModel($db));


        
		$crud->setTheme('internetics');
        $crud->setTable('screenings');
        $crud->setSubject('List of screenings');             
//      $crud->fields(['title']);       

		$crud->fields(['mobility_level', 'reason_for_the_screening', 'reason_for_the_screening_other', 'conduct_physical_screen', 'available_equipment_1', 'available_equipment_1_other', 'available_equipment_2', 'available_equipment_2_other', 'available_equipment_3', 'available_equipment_3_other', 'available_equipment_4', 'handling_procedure_1', 'handling_procedure_2', 'handling_procedure_3', 'handling_procedure_4', 'environmental_risk_factors', 'environmental_risk_factors_other', 'steps_to_manage_the_risk', 'steps_to_manage_the_risk_other', 'notes']);
		
		$crud->displayAs('reason_for_the_screening','The reason this mobility screening is being completed');
		$crud->displayAs('reason_for_the_screening_other','Other reasons for the screening');
		$crud->displayAs('conduct_physical_screen','Conduct Physical Screens to determine the client’s mobility level RIGHT NOW (as compared to their care plan). Click the tests that the client passes');
		$crud->displayAs('available_equipment_1','Level 1 - Supervison <BR><BR> Equipment Availability: Check the client’s mobility level determined by the Physical Screens. From the relevant category, select your equipment.'); 
		$crud->displayAs('available_equipment_1_other','Other equipment you have available');
		$crud->displayAs('available_equipment_2','Level 2 - Physical assisted ambulant person<BR><BR> Equipment Availability: Check the client’s mobility level determined by the Physical Screens. From the relevant category, select your equipment.'); 
		$crud->displayAs('available_equipment_2_other','Other equipment you have available'); 
		$crud->displayAs('available_equipment_3','Level 3 - Standing lifter<BR><BR> Equipment Availability: Check the client’s mobility level determined by the Physical Screens. From the relevant category, select your equipment.'); 
		$crud->displayAs('available_equipment_3_other','Other equipment you have available'); 
		$crud->displayAs('available_equipment_4','Level 4 - Full lifter<BR><BR> Equipment Availability: Check the client’s mobility level determined by the Physical Screens. From the relevant category, select your equipment.'); 
		$crud->displayAs('handling_procedure_1','Level 1 - Supervision<BR><BR> Check the client’s mobility level which may now be further modified by the equipment available. From the relevant category, select your people handling technique/s.'); 
		$crud->displayAs('handling_procedure_2','Level 2 - Physical assisted ambulant person<BR><BR> Check the client’s mobility level which may now be further modified by the equipment available. From the relevant category, select your people handling technique/s.'); 
		$crud->displayAs('handling_procedure_3','Level 3 - Standing lifter<BR><BR> Check the client’s mobility level which may now be further modified by the equipment available. From the relevant category, select your people handling technique/s.'); 
		$crud->displayAs('handling_procedure_4','Level 4 - Full lifter<BR><BR> Check the client’s mobility level which may now be further modified by the equipment available. From the relevant category, select your people handling technique/s.'); 
		$crud->displayAs('environmental_risk_factors','Considering the people handling tasks you intend to complete today, please tick and report any environmental risk factors that increase your exposure to force, awkward postures or repetitive movements'); 
		$crud->displayAs('environmental_risk_factors_other','Other environmental risk factors'); 
		$crud->displayAs('steps_to_manage_the_risk','Considering any variance in mobility status and any environmental hazards identified, tick the steps you will take to manage the risk/s'); 
		$crud->displayAs('steps_to_manage_the_risk_other','Other steps you have taken'); 
		$crud->displayAs('mobility_level','Mobility Level');
		$crud->displayAs('notes','Additional notes');

	
		
		


		$crud->fieldType('reason_for_the_screening_other', 'invisible');
		$crud->fieldType('available_equipment_1_other', 'invisible');
		$crud->fieldType('available_equipment_2_other', 'invisible');
		$crud->fieldType('available_equipment_3_other', 'invisible');
		$crud->fieldType('environmental_risk_factors_other', 'invisible');
		$crud->fieldType('steps_to_manage_the_risk_other', 'invisible');
		
		$crud->callbackAddField('reason_for_the_screening_other', function ($fieldValue, $primaryKeyValue, $rowData) { return '<textarea name="reason_for_the_screening_other" class="form-control" id="reason_for_the_screening_other" style="resize: none;" rows="3" cols="30">' . $fieldValue . '</textarea>'; });
		$crud->callbackEditField('reason_for_the_screening_other', function ($fieldValue, $primaryKeyValue, $rowData) { return '<textarea name="reason_for_the_screening_other" class="form-control" id="reason_for_the_screening_other" style="resize: none;" rows="3" cols="30">' . $fieldValue . '</textarea>'; });
		$crud->callbackAddField('available_equipment_1_other', function ($fieldValue, $primaryKeyValue, $rowData) { return '<textarea name="available_equipment_1_other" class="form-control" id="available_equipment_1_other" rows="3" style="resize: none;" cols="30">' . $fieldValue . '</textarea>'; });
		$crud->callbackEditField('available_equipment_1_other', function ($fieldValue, $primaryKeyValue, $rowData) { return '<textarea name="available_equipment_1_other" class="form-control" id="available_equipment_1_other" rows="3" style="resize: none;" cols="30">' . $fieldValue . '</textarea>'; });
		$crud->callbackAddField('available_equipment_2_other', function ($fieldValue, $primaryKeyValue, $rowData) { return '<textarea name="available_equipment_2_other" class="form-control" id="available_equipment_2_other" rows="3" style="resize: none;" cols="30">' . $fieldValue . '</textarea>'; });
		$crud->callbackEditField('available_equipment_2_other', function ($fieldValue, $primaryKeyValue, $rowData) { return '<textarea name="available_equipment_2_other" class="form-control" id="available_equipment_2_other" rows="3" style="resize: none;" cols="30">' . $fieldValue . '</textarea>'; });
		$crud->callbackAddField('available_equipment_3_other', function ($fieldValue, $primaryKeyValue, $rowData) { return '<textarea name="available_equipment_3_other" class="form-control" id="available_equipment_3_other" rows="3" style="resize: none;" cols="30">' . $fieldValue . '</textarea>'; });
		$crud->callbackEditField('available_equipment_3_other', function ($fieldValue, $primaryKeyValue, $rowData) { return '<textarea name="available_equipment_3_other" class="form-control" id="available_equipment_3_other" rows="3" style="resize: none;" cols="30">' . $fieldValue . '</textarea>'; });
		$crud->callbackAddField('environmental_risk_factors_other', function ($fieldValue, $primaryKeyValue, $rowData) { return '<textarea name="environmental_risk_factors_other" class="form-control" id="environmental_risk_factors_other" style="resize: none;" rows="3" cols="30">' . $fieldValue . '</textarea>'; });
		$crud->callbackEditField('environmental_risk_factors_other', function ($fieldValue, $primaryKeyValue, $rowData) { return '<textarea name="environmental_risk_factors_other" class="form-control" id="environmental_risk_factors_other" style="resize: none;" rows="3" cols="30">' . $fieldValue . '</textarea>'; });
		$crud->callbackAddField('steps_to_manage_the_risk_other', function ($fieldValue, $primaryKeyValue, $rowData) { return '<textarea name="steps_to_manage_the_risk_other" class="form-control" id="steps_to_manage_the_risk_other" style="resize: none;" rows="3" cols="30">' . $fieldValue . '</textarea>'; });
		$crud->callbackEditField('steps_to_manage_the_risk_other', function ($fieldValue, $primaryKeyValue, $rowData) { return '<textarea name="steps_to_manage_the_risk_other" class="form-control" id="steps_to_manage_the_risk_other" style="resize: none;" rows="3" cols="30">' . $fieldValue . '</textarea>'; });
		$crud->callbackAddField('notes', function ($fieldValue, $primaryKeyValue, $rowData) { return '<textarea name="notes" class="form-control" id="notes" style="resize: none;" rows="3" cols="30">' . $fieldValue . '</textarea>'; });
		$crud->callbackEditField('notes', function ($fieldValue, $primaryKeyValue, $rowData) { return '<textarea name="notes" class="form-control" id="notes" style="resize: none;" rows="3" cols="30">' . $fieldValue . '</textarea>'; });

		
		$crud->setRead();

		

		
        $crud->unsetColumns(['length','last_update']);
        $crud->unsetFields(['length','last_update']);
        
  $crud->fieldType('reason_for_the_screening','multiselect',
    array( 
    "1"  => "First time providing care",
    "2"  => "Location or environment change",
    "3"  => "Suspected condition change or deterioration"
    ));
  
		$crud->setRelationNtoN('conduct_physical_screen', 'relations_conduct_physical_screen', 'items_conduct_physical_screen', 'screening_form_link_id', 'item_related_id', '{name}');
		$crud->setRelationNtoN('available_equipment_1', 'relations_available_equipment_1', 'items_available_equipment_1', 'screening_form_link_id', 'item_related_id', '{name}');
		$crud->setRelationNtoN('available_equipment_2', 'relations_available_equipment_2', 'items_available_equipment_2', 'screening_form_link_id', 'item_related_id', '{name}');
		$crud->setRelationNtoN('available_equipment_3', 'relations_available_equipment_3', 'items_available_equipment_3', 'screening_form_link_id', 'item_related_id', '{name}');
		$crud->setRelationNtoN('available_equipment_4', 'relations_available_equipment_4', 'items_available_equipment_4', 'screening_form_link_id', 'item_related_id', '{name}');
		$crud->setRelationNtoN('handling_procedure_1', 'relations_handling_procedure_1', 'items_handling_procedure_1', 'screening_form_link_id', 'item_related_id', '{name}');
		$crud->setRelationNtoN('handling_procedure_2', 'relations_handling_procedure_2', 'items_handling_procedure_2', 'screening_form_link_id', 'item_related_id', '{name}');
		$crud->setRelationNtoN('handling_procedure_3', 'relations_handling_procedure_3', 'items_handling_procedure_3', 'screening_form_link_id', 'item_related_id', '{name}');
		$crud->setRelationNtoN('handling_procedure_4', 'relations_handling_procedure_4', 'items_handling_procedure_4', 'screening_form_link_id', 'item_related_id', '{name}');
		$crud->setRelationNtoN('environmental_risk_factors', 'relations_environmental_risk_factors', 'items_environmental_risk_factors', 'screening_form_link_id', 'item_related_id', '{name}');
		$crud->setRelationNtoN('steps_to_manage_the_risk', 'relations_steps_to_manage_the_risk', 'items_steps_to_manage_the_risk', 'screening_form_link_id', 'item_related_id', '{name}');
		
	

		$text_message = 'Mobility Level message';
		$crud->callbackEditField('mobility_level', function ($fieldValue, $primaryKeyValue, $rowData) use ($text_message) {
	    
	    return '<input type=hidden name="mobility_level" value="' . $fieldValue . '" id="mobility_result"><div id="mobility_message2">here</div>';
	    
	   
		});

		$text_message = 'Mobility Level message';
		$crud->callbackAddField('mobility_level', function ($fieldValue, $primaryKeyValue, $rowData) use ($text_message) {
	    
	    return '<input type=hidden name="mobility_level" value="' . $fieldValue . '" id="mobility_result"><div id="mobility_message2">here</div>';
	    
	   
		});

		
		



 		
 		


 
 
 
 
        
                             

        $output = $crud->render();
        
        

        return $this->_productOutput($output);

        
        
   
    }



		









  

    
    
    
    


    private function _productOutput($output = null) {
        return view('product_view', (array)$output);
    }  
    
    
    



}

 