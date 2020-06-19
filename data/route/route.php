<?php	return array (
  'article/:id/[:cid]' => 
  array (
    0 => 'portal/Article/index',
    1 => 
    array (
    ),
    2 => 
    array (
      'id' => '\\d+',
      'cid' => '\\d+',
    ),
  ),
  'list/:id' => 
  array (
    0 => 'portal/List/index',
    1 => 
    array (
    ),
    2 => 
    array (
      'id' => '\\d+',
    ),
  ),
);