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
    
                <form method="post" action="https://brunalam.activehosted.com/proc.php" id="_form_1_" class="_form _form_1 _inline-form" novalidate>
                    <input type="hidden" name="u" value="1" />
                    <input type="hidden" name="f" value="1" />
                    <input type="hidden" name="s" />
                    <input type="hidden" name="c" value="0" />
                    <input type="hidden" name="m" value="0" />
                    <input type="hidden" name="act" value="sub" />
                    <input type="hidden" name="v" value="2" />


                    <label for="complete_name">Nome completo</label>
                    <input type="text" name="fullname" id="complete_name" required>

                    <label for="form_email">E-mail para contato</label>
                    <input type="email" name="email" id="form_email" required>

                    <label for="form_phone">Telefone (com DDD)</label>
                    <input type="tel" name="phone" id="form_phone" required>

                    <button class="call-to-action" id="_form_1_submit" type="submit">
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

    <button class="call-to-action" id="scrollToForm">
        <?php echo $this->language['components_elements']['form_button'] ?>
    </button>

</section>

<img src="/assets/images/divisor/footer.png" class="img_divisor" alt="">