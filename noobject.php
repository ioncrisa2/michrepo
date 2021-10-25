<?php


$chunk = array("fullname"=>"Chuck Severners","room"=>"1123123");
$collean = array("familyname"=>"adam","givename"=>"Collean","room"=>"1123124");

function get_person_name($person){
	if(isset($person['fullname'])) return $person['fullname'];
	if(isset($person['familyname']) && isset($person['givename'])){
		return $person['givename'].' '.$person['familyname'];
	}

	return false;
}

print get_person_name($chunk) ."\n";
print get_person_name($collean) ."\n";