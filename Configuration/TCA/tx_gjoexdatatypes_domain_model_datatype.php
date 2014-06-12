<?php
if (!defined('TYPO3_MODE')) die ('Access denied.');

return array(
    'ctrl' => array(
        'title' => 'Table: tx_gjoexdatatypes_domain_model_datatype',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('gjo_ex_datatypes') . 'Resources/Public/Icons/tx_gjoexdatatypes_domain_model_datatype.gif',
        'label' => 'string_without_break',

    ),
    'columns' => array(
        'string_without_break' => array(
            'label' => 'Label: stringWithoutBreak',
            'config' => array(
                'type' => 'input',
                'eval' => 'required',
                'max' => '30',
            ),
        ),
    ),

    'types' => array(
        '1' => array(
            'showitem' => '
                string_without_break,
                '),
    ),

    'interface' => array(
        'showRecordFieldList' => '
            string_without_break,
            ',),
);