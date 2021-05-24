<div id="section__thankyou">

    <div id="section__header_thankyou">
        <h1><?php echo $this->language['thank_you']['header'] ?></h1>
        <h2><?php echo $this->language['thank_you']['subtitle'] ?></h2>
    </div>

    <div id="section__social_network">
        <?php /*
        <a href="<?php echo $this->language['social_networks']['instagram'] ?>" 
            class="social_network_card"
            target="_blank"
            rel="nofollow norel">
            <div>
                <img src="/assets/images/social_icons/instagram.svg" alt="Ícone de rede social - Instagram" />
                <?php echo $this->language['thank_you']['like_us_instagram'] ?>
            </div>
        </a>

        <a href="<?php echo $this->language['social_networks']['facebook'] ?>" 
            class="social_network_card"
            target="_blank"
            rel="nofollow norel">
            <div>
                <img src="/assets/images/social_icons/facebook-f.svg" alt="Ícone de rede social - Facebook" />
                <?php echo $this->language['thank_you']['like_us_facebook'] ?>
            </div>
        </a>
        */ ?>

        <a href="<?php echo $this->language['social_networks']['telegram'] ?>" 
            class="social_network_card"
            target="_blank"
            rel="nofollow norel">
            <div>
                <img src="/assets/images/social_icons/telegram-plane.svg" alt="Ícone de rede social - Telegram" />
                <?php echo $this->language['thank_you']['enter_telegram'] ?>
            </div>
        </a>
        
        <a href="<?php echo isset($_ENV['WHATSAPP_URL']) ? $_ENV['WHATSAPP_URL'] : 'https://whatsapp.com' ?>" 
            class="social_network_card"
            target="_blank"
            rel="nofollow norel">
            <div>
                <img src="/assets/images/social_icons/whatsapp.svg" alt="Ícone de rede social - WhatsApp" />
                <?php echo $this->language['thank_you']['enter_whatsapp'] ?>
            </div>
        </a>
    </div>
</div>