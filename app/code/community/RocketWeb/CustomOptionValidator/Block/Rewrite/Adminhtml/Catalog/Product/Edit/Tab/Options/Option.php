<?php
class RocketWeb_CustomOptionValidator_Block_Rewrite_Adminhtml_Catalog_Product_Edit_Tab_Options_Option 
		extends Mage_Adminhtml_Block_Catalog_Product_Edit_Tab_Options_Option {

	public function getOptionValues()
    {
    	parent::getOptionValues();
		
		
		$optionsArr = array_reverse($this->getProduct()->getOptions(), true);
		foreach ($optionsArr as $option) {
			foreach($this->_values as &$value) {
				if($value['id'] == $option->getOptionId()) {
					$value['validators'] = $option->getValidators();
				} 
			}
		}
		
		
    	return $this->_values;
	}
			
}