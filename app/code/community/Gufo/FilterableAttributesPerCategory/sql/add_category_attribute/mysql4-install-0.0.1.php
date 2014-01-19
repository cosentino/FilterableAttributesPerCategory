<?php
$this->startSetup();
$this->addAttribute('catalog_category', 'filters_to_hide', array(
    'group'         => 'General',
    'input'         => 'textarea',
    'type'          => 'text',
    'label'         => 'Filters to hide',
    'backend'       => '',
    'visible'       => true,
    'required'      => false,
    'visible_on_front' => true,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
));
 
$this->endSetup();