<?php
$module_name = 'EMP_Employees';
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
          0 => 
          array (
            'name' => 'name_c',
            'label' => 'LBL_NAME_C',
          ),
          1 => 
          array (
            'name' => 'join_c',
            'label' => 'Joining Date',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'report_c',
            'label' => 'Report To',
          ),
          1 => 
          array (
            'name' => 'conform_c',
            'label' => 'Conformation Date',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'hours_c',
            'label' => 'Hours Logged',
          ),
          1 => 
          array (
            'name' => 'absent_c',
            'label' => 'No Of Absence',
          ),
        ),
        3 => 
        array (
          0 => 'description',
          1 => '',
        ),
      ),
    ),
  ),
);
?>
