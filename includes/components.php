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
?>

<div class="container">
    <div class="row text-center">
        <div class="col">
            <h1 class="display-4 font-weight-bold" style="margin-top:64px;">Components</h1>
            <p><strong>86% SDK</strong> comes with integrated (codeless) components, to ask users any question.</p>
        </div>
    </div>

    <div class="accordion" id="accordionComponents">
            <?php
            $expanded = 'true';
            foreach ($content as $key => $value) { 
                $id = 'content'.$key;
                ?>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#<?php print($id); ?>" aria-expanded="<?php print($expanded); ?>" aria-controls="<?php print($id); ?>">
                            <?php print($content[$key]["title"]); ?>
                            </button>
                        </h2>
                    </div>

                    <div id="<?php print($id); ?>" class="collapse <?php if($expanded == 'true'){ print(" show");}?>" aria-labelledby="headingOne" data-parent="#accordionComponents">
                        <div class="card-body">
                            <div class="text-center"><img src="images/components/<?php print($content[$key]["image"]) ?>" class="img-fluid mx-auto mb-3" /></div>
                            <h5 class="card-title"><?php print($content[$key]["title"])?></h5>
                            <p class="card-text"><?php print($content[$key]["description"])?></p>
                        </div>
                    </div>
                </div>
            <?php
                $expanded = 'false';
            } 
            ?>
    </div>

</div>

