<?php 
    /**
     * Get all strings related to this webpage and throw them
     * inside $language variable to keep it simple a rendering
     */
    $language = $this->language['sales_page'];
?>

<h1><?php echo $language['callout_message']; ?></h1>

<!-- Targets -->
<?php 
    $targets = $language['targets'];
    $htmlDiv = <<<HTMLDiv
        <p>%target_item</p>
    HTMLDiv;

    foreach ($targets as $itemTarget) {
        echo str_replace('%target_item', $itemTarget, $htmlDiv);
    }
?>

<!-- Modules -->
<?php 
    $modules = $language['modules'];
    $htmlDiv = <<<HTMLDiv
        <div>%title <br> %date <br> %description</div>
    HTMLDiv;

    foreach ($modules as $itemModule) {
        $divToRender = str_replace('%title', $itemModule['title'], $htmlDiv);
        $divToRender = str_replace('%date', $itemModule['date'], $divToRender);
        $divToRender = str_replace('%description', $itemModule['description'], $divToRender);

        echo $divToRender;
    }
?>

<!-- Bonus -->
<?php
    $bonuses = $language['bonus'];
    $htmlDiv = <<<HTMLDiv
        <div>%title <br> %price <br> 
            <ul>%description</ul>
        </div>
    HTMLDiv;

    foreach ($bonuses['bonus_content'] as $content) {
        $divToRender = str_replace('%title', $content['title'], $htmlDiv);
        $divToRender = str_replace('%price', $content['price'], $divToRender); 
        $htmlDescription = '';
        foreach ($content['description'] as $key => $descriptionItem) {
            $htmlDescription = $htmlDescription . "<li>$descriptionItem</li>";
        }

        $divToRender = str_replace('%description', $htmlDescription, $divToRender); 
        echo $divToRender;
    }
?>

<?php
    $investiment = $language['investiment'];
    $htmlDiv = <<<HTMLDiv
        <div>%title <br> %subtitle <br> %price_original <br> %price_discount</div>
    HTMLDiv;
?>