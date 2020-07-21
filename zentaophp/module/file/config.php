<?php
$config->file->mimes['xml']     = 'text/xml';
$config->file->mimes['html']    = 'text/html';
$config->file->mimes['csv']     = 'text/csv';
$config->file->mimes['default'] = 'application/octet-stream';

$config->file->imageExtensions = array('jpeg', 'jpg', 'gif', 'png');
$config->file->image2Compress  = array('.jpg', '.bmp', '.jpeg');

$config->file->charset = array('UTF-8' => 'UTF-8', 'GBK' => 'GBK', 'BIG5' => 'BIG5');
