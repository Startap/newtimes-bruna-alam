<!-- SECTION :: Headline -->
<section id="section__headline">
    <!-- Left side, our expert profile image -->
    <div id="section__headline_left_side"></div>

    <!-- Right side, our form and headline -->
    <div id="section__headline_right_side">
        <!-- YouTube row -->
        <div id="headline__right_youtube_container">
            <img src="/assets/images/icons/youtube.svg" />
            <div>
                <span><?php echo $this->language['section_headline']['headline_youtube_1'] ?></span>
                <span><?php echo $this->language['section_headline']['headline_youtube_2'] ?></span>
            </div>
        </div>

        <div id="headline__right_main_container">
            <!-- Headline row -->        
            <h1><?php echo $this->language['section_headline']['headline_principal'] ?></h1>
            <!-- Subtitle row -->
            <h2><?php echo $this->language['section_headline']['headline_secundaria'] ?></h1>
            <!-- Form container -->
            <div id="headline__right_form_container">
                <h3><?php echo $this->language['section_headline']['headline_form_title'] ?></h3>
    
                <form action="#" method="post">
                    <label for="complete_name">Nome completo</label>
                    <input type="text" name="complete_name" id="complete_name">

                    <label for="complete_name">E-mail para contato</label>
                    <input type="text" name="email" id="form_email">

                    <label for="complete_name">Telefone (com DDD)</label>
                    <input type="text" name="phone" id="form_phone">

                    <button class="call-to-action" type="submit">
                        <?php echo $this->language['components_elements']['form_button'] ?>
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

<!-- SECTION :: About class -->
<section id="section__about_class">
    <div class="row__about_class">
        <div class="img_container">
            <img src="/assets/images/about_classes/justice_hammer.svg" alt="O martelo da justiça em amarelo e azul">
        </div>
        <div class="content_container">
            <div class="wrapper">
                <h3><?php echo $this->language['section_about_course']['item_1']['title'] ?></h3>
                <p><?php echo $this->language['section_about_course']['item_1']['content'] ?></p>
            </div>
        </div>
    </div>
    <div class="row__about_class">
        <div class="img_container">
            <img src="/assets/images/about_classes/judge_avatar.svg" alt="Um avatar de juiz de conciliação em amarelo e azul">
        </div>
        <div class="content_container">
            <div class="wrapper">
                <h3><?php echo $this->language['section_about_course']['item_2']['title'] ?></h3>
                <p><?php echo $this->language['section_about_course']['item_2']['content'] ?></p>
            </div>
        </div>
    </div>

</section>

<img src="/assets/images/divisor/classes.png" class="img_divisor" alt="" />

<!-- SECTION :: About instructor -->
<section id="section__about_instructor">
    <div class="about__container">
        <div class="img_container">
            <img src="/assets/images/bruna_photos/profile_picture.jpg" alt="">
        </div>

        <div class="text_container">
            <h3><?php echo $this->language['section_about_bruna']['title'] ?></h3>
            <div class="paragraph_container">
                <p><?php echo $this->language['section_about_bruna']['paragraph'][0] ?></p>
                <p><?php echo $this->language['section_about_bruna']['paragraph'][1] ?></p>
                <p><?php echo $this->language['section_about_bruna']['paragraph'][2] ?></p>
                <p><?php echo $this->language['section_about_bruna']['paragraph'][3] ?></p>
            </div>

        </div>
    </div>
</section>

<!-- SECTION :: Callout -->
<section id="section__callout">

    <h3 class="callout-text"><?php echo $this->language['components_callouts']['if_you_read_title'] ?></h3>
    <p class="callout-text"><?php echo $this->language['components_callouts']['if_you_read_subscribe'] ?></p>

    <button class="call-to-action" type="submit">
        <?php echo $this->language['components_elements']['form_button'] ?>
    </button>

</section>

<img src="/assets/images/divisor/footer.png" class="img_divisor" alt="">