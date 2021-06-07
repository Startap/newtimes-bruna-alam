<?php

/**
 * Get all strings related to this webpage and throw them
 * inside $language variable to keep it simple a rendering
 */
$language = $this->language['advogada_ceo'];

$youTubeUrl = 'https://www.youtube.com/embed/%id?controls=0&modestbranding=1&showinfo=0&rel=0';
$youTubeUrl = str_replace('%id', $_ENV['YOUTUBE_URL'], $youTubeUrl);
?>

<section id="callout-container">

    <article>
        <h1><?php echo $language['callout_message']; ?></h1>
        <!-- <p><?php echo $language['callout_subtitle']; ?></p> -->

        <div class="iframe-container-width">
            <div id="iframe-video-container">
                <iframe id="iframe-video" src="<?php echo $youTubeUrl ?>" title="YouTube - Treinamento Advogado Expert" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
        </div>

        <a href="<?php echo $_ENV['HOTMART_URL'] ?>" target="_blank" rel="norel nofollow">
            <button class="call-to-action">QUERO ME INSCREVER</button>
        </a>
    </article>
</section>


<!-- Targets -->
<section id="targets-wrapper">
    <article>
        <h1 class="section-title">Para quem é este treinamento?</h1>

        <div class="targets-container">
            <?php
            $targets = $language['targets'];
            $htmlDiv = <<<HTMLDiv
                    <span class="target-item %bg-target">%target_item</span>
                HTMLDiv;

            foreach ($targets as $key => $itemTarget) {
                $divToRender = str_replace('%bg-target', "bg-target-$key", $htmlDiv);
                echo str_replace('%target_item', $itemTarget, $divToRender);
            }
            ?>
        </div>
    </article>
</section>

<section id="testimonials-wrapper">
    <article>
        <h1 class="section-title">Veja o que diz quem já participou</h1>
        <div class="testimonial-items">
            <div class="iframe-container-width">
                <div id="iframe-video-container">
                    <iframe id="iframe-video" src="https://www.youtube.com/embed/Ff1R67k7LZQ?controls=0&modestbranding=1&showinfo=0&rel=0" title="YouTube - Mentoria Advogado Expert" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </article>
</section>


<!-- Modules -->
<section id="modules-wrapper">
    <h1 class="section-title">Qual o conteúdo do treinamento?</h1>

    <div id="modules-items-container">
        <?php
        $modules = $language['modules'];
        $htmlDiv = <<<HTMLDiv
            <article>
                <h2 class="module-title">%title <small>%date</small></h2>
                <p>%description</p>
            </article>
        HTMLDiv;

        foreach ($modules as $itemModule) {
            $divToRender = str_replace('%title', $itemModule['title'], $htmlDiv);
            $divToRender = str_replace('%date', $itemModule['date'], $divToRender);
            $divToRender = str_replace('%description', $itemModule['description'], $divToRender);

            echo $divToRender;
        }
        ?>
    </div>
</section>



<!-- Bonus -->
<section id="bonus-wrapper">
    <h1 class="section-title">E os bônus oferecidos?</h1>

    <div id="bonus-items-container">
        <?php
        $bonuses = $language['bonus'];
        $htmlDiv = <<<HTMLDiv
            <article class="bonus-item %bonus-item-number">
                <div>
                    <h2>%title</h2> 
                    <span class="bonus-price-tag">%price</span>
                </div>                
                <ul>%description</ul>
            </article>
        HTMLDiv;

        foreach ($bonuses['bonus_content'] as $key => $content) {
            $divToRender = str_replace('%title', $content['title'], $htmlDiv);
            $divToRender = str_replace('%price', $content['price'], $divToRender);
            $divToRender = str_replace('%bonus-item-number', "bonus-item-$key", $divToRender);
            $htmlDescription = '';
            foreach ($content['description'] as $key => $descriptionItem) {
                $htmlDescription = $htmlDescription . "<li>$descriptionItem</li>";
            }

            $divToRender = str_replace('%description', $htmlDescription, $divToRender);
            echo $divToRender;
        }
        ?>
    </div>

</section>

<div id="divisor-about" style="background: url('https://api.iconify.design/entypo:briefcase.svg?color=%23FFF') no-repeat center center / contain;"></div>

<!-- Investiment -->
<div id="investiment-badge-section">
    <?php
    $investiment = $language['investiment'];
    $htmlDiv = <<<HTMLDiv
            <article id="investiment-badge">
                <h1 class="section-title">%title</h1>                
                <span id="price_original">%price_original</span>
                <span id="price_discount">%price_discount</span>

            </article>
        HTMLDiv;
    $priceToRender = 'price_discount_' . $_ENV['COURSE_PRICE'];

    $divToRender = str_replace('%title', $investiment['title'], $htmlDiv);
    $divToRender = str_replace('%price_original', $investiment['price_original'], $divToRender);
    $divToRender = str_replace('%price_discount', $investiment[$priceToRender], $divToRender);
    $divToRender = str_replace('%promocional_price_disclaimer', $investiment['disclaimer'], $divToRender);

    echo $divToRender;
    ?>
</div>

<?php
echo str_replace('%disclaimer', $investiment['disclaimer'], "<small id='disclaimer_price'>%disclaimer</small>");
?>

<div id="divisor-about"></div>

<!-- About Bruna -->
<!-- SECTION :: About instructor -->
<section id="section__about_instructor">
    <div class="about__container about__without-border-radius">
        <div class="img_container">
            <img src="/assets/images/bruna_photos/profile_picture.jpg" alt="">
        </div>

        <div class="text_container">
            <h1><?php echo $this->language['section_about_bruna']['bruna_alam'] ?></h1>
            <h2><?php echo $this->language['section_about_bruna']['title'] ?></h2>
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
        <p class="first"><?php echo $language['disclaimer']['text'][0] ?></p>
        <p class="second"><?php echo $language['disclaimer']['text'][1] ?></p>
    </div>
</section>