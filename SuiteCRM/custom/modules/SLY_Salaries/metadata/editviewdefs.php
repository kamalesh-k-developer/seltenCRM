<?php
$module_name = 'SLY_Salaries';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'address_c',
            'label' => 'Address Details',
          ),
          1 => 
          array (
            'name' => 'indian_c',
            'label' => 'Are You Indian',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'currency_c',
            'label' => 'Currency',
          ),
          1 => 
          array (
            'name' => 'list_c',
            'label' => 'List Of Employees',
          ),
        ),
        3 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'user_c',
            'label' => 'LBL_USER_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'link_c',
            'label' => 'Add A Link',
          ),
          1 => 
          array (
            'name' => 'reports_c',
            'label' => 'Reports To',
          ),
        ),
      ),
    ),
  ),
);
?>
