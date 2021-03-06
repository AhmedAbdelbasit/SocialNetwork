<?php

/**********************************************************************************/

$insert_comp_stmt = $connection->prepare("INSERT INTO Components(Name, Functional, UnitCount, State, Picture, Datasheet) Values(?, ?, ?, ?, ?, ?)");

if ($insert_comp_stmt) {
    $insert_comp_stmt->bind_param("ssiiss", $name, $functional, $unit_count, $state, $picture, $datasheet);
} else {
    echo "Error..False";
}

/**********************************************************************************/

$read_all_components_stmt = $connection->prepare("SELECT * FROM Components");
$read_component_stmt      = $connection->prepare("SELECT * FROM Components WHERE idDevices = ?");

if ($read_component_stmt) {
    $read_component_stmt->bind_param("i", $comp_id);
} else {
     echo "Error..False";
}

/**********************************************************************************/

$update_component_stmt = $connection->prepare("UPDATE Components
    SET Name = ?, Functional = ?, UnitCount = ?, State = ?, Picture = ?, Datasheet = ?
    WHERE idDevices = ?");

if ($update_component_stmt) {
    $update_component_stmt->bind_param("ssiissi", $lab_name = NULL, $contents = NULL, $place = NULL, $about = NULL, $picture = NULL, $lab_id);
} else {
    echo "Error..False";
}

/**********************************************************************************/

$delete_component_stmt = $connection->prepare("DELETE FROM Components WHERE idDevices = ?");

if ($delete_component_stmt) {
    $delete_component_stmt->bind_param("i", $lab_id);
} else {
    echo "Error..False";
}

/**********************************************************************************/

?>
