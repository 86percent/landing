<?php

$content = array(
    "textField" => array (
        "title" => "Text field",
        "description" => "Text fields allow users to input any text information, such as their name or email. The placeholder can be customized, as well as the type of information: first name, last name, email, etc",
        "image" => "TextField.svg"
    ),
    "datePicker" => array (
        "title" => "Date picker",
        "description" => "Date pickers allow user to input a date. It can be set to allow dates in the past, in the future, or within a specific time range.",
        "image" => "DatePicker.svg"
    ),
    "singleSelect" => array (
        "title" => "Single selection",
        "description" => "Typically a list of options, where the user can select only one option.",
        "image" => "Singleselect.svg"
    ),
    "multiSelect" => array (
        "title" => "Multiple selection",
        "description" => "A list of options, where the user can select several of them. Typically to select tags.",
        "image" => "Multiselect.svg"
    ),
    "boolean" => array (
        "title" => "Boolean (Yes / No)",
        "description" => "A question where the user can reply yes or no. The <i>yes</i> and <i>no</i> labels can be customized.",
        "image" => "Boolean.svg"
    ),
    "picker" => array (
        "title" => "Number Picker",
        "description" => "A question where the user can enter a number, using a picker. Typically to ask for a distance or a duration.",
        "image" => "Picker.svg"
    ),
    "picture" => array (
        "title" => "Photo or image",
        "description" => "A question where the user can reply taking a picture using the camera. Typically to ask for a profile picture.",
        "image" => "Picture.svg"
    )
);
$links = array();
$contents = array();
$first = true;
foreach ($content as $key => $values) {

    if ( $first ){
        $selected = 'true';
        $linkClass = 'active';
        $contentClass = 'show active';
        $first = false;
    } else {
        $linkClass = '';
        $selected = 'false';
        $contentClass = '';
    }

    $links[] = '<li class="list-group-item">
        <a class="nav-link '.$linkClass.'" id="v-pills-'.$key.'-tab" data-toggle="pill" href="#v-pills-'.$key.'" role="tab" aria-controls="v-pills-'.$key.'" aria-selected="'.$selected.'">'.
            $content[$key]["title"].
        '</a></li>';
    $contents[] = '<div class="tab-pane '.$contentClass.' fade" id="v-pills-'.$key.'" role="tabpanel" aria-labelledby="v-pills-'.$key.'-tab">
        <div class="text-center"><img src="images/components/'.$content[$key]["image"].'" /></div>
        <div class="card-body">
            <h5 class="card-title">'.$content[$key]["title"].'</h5>
            <p class="card-text">'.$content[$key]["description"].'</p>
        </div>
        </div>';
}
?>

<div class="container">
    <div class="row text-center">
        <div class="col">
            <h1 class="display-4 font-weight-bold" style="margin-top:64px;">Components</h1>
            <p><strong>86% SDK</strong> comes with integrated (codeless) components, to ask users any question.</p>
        </div>
    </div>

    <div class="card-group">
        <div class="card col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <ul class="list-group list-group-flush">
            <?php 
                foreach ($links as $i => $value) {
                    print($links[$i]);
                }
            ?>
            </ul>
            </div>
        </div>
        <div class="card col-9">
            <div class="tab-content" id="v-pills-tabContent">
            <?php
                foreach ($contents as $i => $value) {
                    print($contents[$i]);
                }
            ?>
            </div>
        </div>
    </div>
</div>

