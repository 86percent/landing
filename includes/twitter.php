<?php 
    $twitterColor = '#1da1f2';
?>
<!-- Twitter -->
<section id="twitter" class="section my-4">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col">
              <h1 class="display-4 font-weight-bold ali"><i class="fab fa-twitter py-1" style="color:<?php echo $twitterColor?>"></i></h1>
            </div>
        </div>  
        <div class="row">	
        <?php
            ini_set('display_errors', 1);
            require_once('./php/TwitterAPIExchange.php');
            
            include('./includes/keys.php');
            
            $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
            $getfield = '?screen_name=86percentSdk&count=3';
            $requestMethod = 'GET';
            
            $twitter = new TwitterAPIExchange($settings);
            $response = $twitter->setGetfield($getfield)
                ->buildOauth($url, $requestMethod)
                ->performRequest();
            
            $objArr = json_decode($response);
            
            $i = 0;
            foreach($objArr as $aJson) {
                if($i==3) break;
                $urlTweet = 'https://twitter.com/86percentSDK/status/' . $aJson->{'id_str'};
                $urlUser = 'https://twitter.com/' . $aJson->{'user'}->{'screen_name'};
                $date = new DateTime($aJson->{'created_at'});

                $tweetText = $aJson->{'text'};

                foreach( $aJson->{'entities'}->{'urls'} as $url ) {
                    $tweetText = str_replace($url->{'url'}, '<a target="_blank" href="'.$url->{'url'}.'">'.$url->{'display_url'}.'</a>', $tweetText);
                }

                foreach( $aJson->{'entities'}->{'user_mentions'} as $userMention ) {
                    $urlUserMention = 'https://twitter.com/' . $userMention->{'screen_name'};
                    $tweetText = str_replace('@'.$userMention->{'screen_name'}, '<a target="_blank" href="'.$urlUserMention.'">@'.$userMention->{'screen_name'}.'</a>', $tweetText);
                }

                if(isset($aJson->{'id_str'})) {
                    ?>
                    <div class="col-12 col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <img src="<?php print($aJson->{'user'}->{'profile_image_url_https'}); ?>" class="float-left rounded-circle mr-2" />
                                <h5 class="card-title"><?php print($aJson->{'user'}->{'name'}); ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><a href="<?php print($urlUser)?>" target="_blank"> @<?php print($aJson->{'user'}->{'screen_name'}); ?></a></h6>
                                <p class="card-text"><?php print($tweetText); ?></p>
                                <a href="<?php print($urlTweet); ?>" class="card-link"><i class="fab fa-twitter py-1" style="color:<?php echo $twitterColor?>"></i></a> <span class="float-right"><?php print($date->format('M d')); ?></span>
                            </div>
                        </div>
                    </div>
                    <?php
                    
                }
            }
            ?>

        </div>
    </div>		
</section>
<!-- ./Twitter -->
