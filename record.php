<?php
define('NO_DEBUG_DISPLAY', false);

require("../../config.php");
require_once("lib.php");
require_once($CFG->libdir.'/enrollib.php');
require_once($CFG->libdir . '/filelib.php');

global $DB, $CFG ;


$decoded = file_get_contents("php://input");

$enrolflutter = new stdClass();

$enrolflutter->auth_json = json_encode($decoded);
$enrolflutter->timeupdated = time();

print_r($decoded);

print_r($enrolflutter);



$ret1 = $DB->insert_record("enrol_flutter", $enrolflutter, true);

print_r($ret1);

// echo '<script type="text/javascript">
//      window.location.href="'.$CFG->wwwroot.'/enrol/flutter/update.php?id='.$ret1.'";
//      </script>';

// die;






?>