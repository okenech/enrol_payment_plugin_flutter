<?php
define('NO_DEBUG_DISPLAY', false);

require("../../config.php");
require_once("lib.php");
require_once($CFG->libdir.'/enrollib.php');
require_once($CFG->libdir . '/filelib.php');

global $DB, $CFG ;


// $decoded = file_get_contents("php://input");

$decoded = $_POST;

var_dump($decoded);

$dec = $_POST['form'];

var_dump($dec);

$enrolflutter = new stdClass();

$enrolflutter->auth_json = json_encode($decoded);
$enrolflutter->timeupdated = time();



var_dump($enrolflutter);



$ret1 = $DB->insert_record("enrol_flutter", $enrolflutter, true);

var_dump($ret1);

// echo '<script type="text/javascript">
//      window.location.href="'.$CFG->wwwroot.'/enrol/flutter/update.php?id='.$ret1.'";
//      </script>';

// die;






?>