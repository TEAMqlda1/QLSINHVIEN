<?php
include_once('xtpl/xtemplate.class.php');
$xtpl = new XTemplate('admin.tpl');
$xtpl->parse('main');
$xtpl->out('main');
?>