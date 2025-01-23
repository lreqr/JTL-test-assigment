<?php

/**
 * dynamic data source for selectbox1
 *
 * return value of these functions has to be an array of objects
 * where every object should have the members cWert, cName and optional nSort
 *
 * @package jtl_test
 */

declare(strict_types=1);

$options = [];

$option        = new stdClass();
$option->cWert = 123;
$option->cName = __('Value one');
$option->nSort = 1;
$options[]     = $option;

$option        = new stdClass();
$option->cWert = 456;
$option->cName = __('Value two');
$option->nSort = 2;
$options[]     = $option;

$option        = new stdClass();
$option->cWert = 789;
$option->cName = __('Value three');
$option->nSort = 3;
$options[]     = $option;

$option        = new stdClass();
$option->cWert = 101;
$option->cName = __('Value four');
$option->nSort = 4;
$options[]     = $option;

$option        = new stdClass();
$option->cWert = 112;
$option->cName = __('Value five');
$option->nSort = 5;
$options[]     = $option;

return $options;
