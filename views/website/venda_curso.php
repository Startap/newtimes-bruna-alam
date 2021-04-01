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

<!-- Investiment -->
<?php
$investiment = $language['investiment'];
$htmlDiv = <<<HTMLDiv
        <div>%title <br> %subtitle <br> %price_original <br> %price_discount</div>
    HTMLDiv;

echo $investiment['title'];
echo $investiment['subtitle'];
echo $investiment['price_original'];
echo $investiment['price_discount'];
?>

<!-- About Bruna -->
<!-- SECTION :: About instructor -->
<section id="section__about_instructor">
    <div class="about__container">
        <div class="img_container">
            <img src="/assets/images/bruna_photos/profile_picture.jpg" alt="">
        </div>

        <div class="text_container">
            <h3><?php echo $this->language['section_about_bruna']['title'] ?></h3>
            <div class="paragraph_container">
                <p><?php echo $this->language['section_about_bruna']['paragraph_sales_page'][0] ?></p>
                <p><?php echo $this->language['section_about_bruna']['paragraph_sales_page'][1] ?></p>
                <p><?php echo $this->language['section_about_bruna']['paragraph_sales_page'][2] ?></p>
                <p><?php echo $this->language['section_about_bruna']['paragraph_sales_page'][3] ?></p>
            </div>

        </div>
    </div>
</section>

<!-- FAQs -->
<?php


$faqHtmlItemElement = <<<FaqHtmlElement
    <article class="faq-card">
        <h6 class="faq-question"><span>%faq_question</span></h6>
        <p class="faq-answer"><span>%faq_answer</span></p>
    </article>
FaqHtmlElement;

$faqItems = [];
foreach ($language['faq_questions'] as $key => $faqItem) {
    $currentFaq = $faqHtmlItemElement;
    $currentFaq = str_replace('%faq_question', $faqItem['question'], $currentFaq);
    $currentFaq = str_replace('%faq_answer', $faqItem['answer'], $currentFaq);
    array_push($faqItems, $currentFaq);
}

?>

<!-- FAQ Section Html -->
<section id="section-faq">
    <h1 class="section-title">Perguntas Mais Frequentes</h1>

    <div id="faq-items-wrapper"><?php echo join('', $faqItems); ?></div>
</section>

<!-- Disclaimer -->
<section id="section-disclaimer">
    <h1 class="section-title"><?php echo $language['disclaimer']['title'] ?></h1>

    <div id="disclaimer-badge">
        <p><?php echo $language['disclaimer']['text'] ?></p>
    </div>
</section>