<?php

$manifest = array(
    'acceptable_sugar_versions' =>
        array(
            'exact_matches' =>
                array(),
            'regex_matches' =>
                array(
                    0 => '7.[2567].[0-9]?.?[0-9]?'
                ),
        ),
    'acceptable_sugar_flavors' =>
        array(
            'PRO',
            'ENT',
            'ULT'
        ),
    'readme' => '',
    'key' => '',
    'author' => 'Ticomix',
    'description' => 'Adds custom.less to add Bands on Record View',
    'icon' => '',
    'name' => 'Adds custom.less to add Bands on Record View',
    'published_date' => 'Oct 7, 2014 12:00:00 PM EST',
    'type' => 'module',
    'version' => '1.0.0',
    'remove_tables' => 'true',
    'is_uninstallable' => 'true',
);
$installdefs = array(
    'id' => 'TCX_BANDED',
    'copy' =>
        array(
            array(
                'from' => '<basepath>/custom/themes/custom.less',
                'to' => 'custom/themes/custom.less'
            ),
        ),
);
