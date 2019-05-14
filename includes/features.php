<?php

$content = array(
    "multilingual" => array (
        "title" => "Multilingual",
        "subtitle" => "As many languages as you need",
        "description" => "In the <strong>86% Editor</strong>, you define your conversation once and translate it very easily.",
        "iconClass" => "fas fa-language"
    ),
    "Privacy" => array (
        "title" => "Privacy",
        "subtitle" => "Be transparent with your users",
        "description" => "You have a built-in \"privacy notice\" for your users (GDPR-ready!). And we don't store anything sensitive on our side.",
        "iconClass" => "fas fa-handshake"
    ),
    "ab" => array (
        "title" => "A/B Testing",
        "subtitle" => "Experiment different scenarios",
        "description" => "You can A/B test your bots at different levels. So that you can refine your bot to optimize its conversion rate.",
        "iconClass" => "fas fa-project-diagram"
    ),
    "widgets" => array (
        "title" => "Built-in widgets",
        "subtitle" => "To make your development faster",
        "description" => "To get data, you have plenty of built-in widgets to ask names, emails, dates, tags, documents, single choice...",
        "iconClass" => "fas fa-candy-cane"
    ),
    "scalable" => array (
        "title" => "Scalable & reliable",
        "subtitle" => "Serverless architecture",
        "description" => "<strong>86% SDK</strong> can run without internet. And if it's online, bots are updated with the latest versions available.",
        "iconClass" => "fas fa-award"
    ),
    "Analytics" => array (
        "title" => "Analytics",
        "subtitle" => "Measure what happens",
        "description" => "Analytics are available in the <strong>86% Editor</strong> to take smart decisions for your bots. Adjust your bots. Measure. Iterate.",
        "iconClass" => "fas fa-chart-line"
    )
);

?>


    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1 class="display-4 font-weight-bold" style="margin-top:64px;"><span class="text-secondary">Easy.</span> Yet powerful.</h1>
                <p><strong>86% SDK</strong> comes with great features. Here are some of them:</p>
            </div>
        </div>
        <div class="row">
            <?php 
                foreach ($content as $key => $value) {
                    ?>
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <i class="<?php print($content[$key]['iconClass']);?> icon-features py-1"></i>
                                <div class="py-3">
                                    <h5 class="card-title"><?php print($content[$key]['title']);?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php print($content[$key]['subtitle']);?></h6>
                                </div>
                                <div class="clearfix"></div>
                                <p class="card-text"><?php print($content[$key]['description']);?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            ?>
            
        </div>
    </div>
