<?php

/**
 * dynamic data source for radio option
 *
 * return value of these functions has to be an array of objects
 * where every object should have the members cWert, cName and optional nSort
 *
 * @package jtl_test
 */

declare(strict_types=1);

$options = [];

$option        = new stdClass();
$option->cWert = 321;
$option->cName = __('Radio value one');
$option->nSort = 1;
$options[]     = $option;

$option        = new stdClass();
$option->cWert = 654;
$option->cName = __('Radio value two');
$option->nSort = 2;
$options[]     = $option;

$option        = new stdClass();
$option->cWert = 987;
$option->cName = __('Radio value three');
$option->nSort = 2;
$options[]     = $option;

return $options;
