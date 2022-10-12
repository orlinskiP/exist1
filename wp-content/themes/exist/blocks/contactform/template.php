<section id="contactform">
    <div class="container">
        <div class="contactform">
            <div class="contactform__left">
                <?php
                if (get_field('rodzaj') == "strGlowna") {
                    ?>
                <h4 class="contactform__title text-left">Kontakt</h4>
                <p class="contactform__text text-left">Jeśli masz pytania bądź jesteś zainteresowany ofertą zadzwoń lub
                    napisz do nas.</p>
                <div class="contactform__phone">
                    <p class="contactform__header">Kontakt telefoniczny:</p>
                    <div>
                        <a class="contactform__number" href="tel: 665597215">Szymon: 665-597-215</a>
                    </div>
                    <div>
                        <a class="contactform__number" href="tel: 731620641">Patryk: 731-620-641</a>
                    </div>
                </div>
                <div class="contactform__mail">
                    <p class="contactform__header">Adres e-mail:</p>
                    <a class="contactform__mail" href="mailto: kontakt@existagency.pl">kontakt@existagency.pl</a>
                </div>
                <?php
                } else if(get_field('rodzaj') == "obsluga"){
                ?>

                <h4 class="contactform__title text-left">Zapytaj o szczegóły pakietów</h4>
                <p class="contactform__text text-left">Możesz również do nas zadzwonić lub napisać na czacie</p>
                <div class="contactform__phone">
                    <p class="contactform__header">Kontakt telefoniczny:</p>
                    <div>
                        <a class="contactform__number" href="tel: 665597215">Szymon: 665-597-215</a>
                    </div>
                    <div>
                        <a class="contactform__number" href="tel: 731620641">Patryk: 731-620-641</a>
                    </div>
                </div>
                <div class="contactform__mail">
                    <p class="contactform__header">Adres e-mail:</p>
                    <a class="contactform__mail" href="mailto: kontakt@existagency.pl">kontakt@existagency.pl</a>
                </div>
                <?php
        
                }
                else if(get_field('rodzaj') == "wycena"){
                ?>

                <h4 class="contactform__title text-left">Wyceny dokonamy w ciągu <span>24 godzin</span> i skontaktujemy się z Tobą</h4>
                    <p class="contactform__text text-left">Im więcej szczegółów przekażesz nam teraz, tym nasza wycena
                        będzie bardziej precyzyjna. Jeśli jednak nie wiesz jakie informację mogą być istotne, sami o nie
                        dopytamy.</p>
                    <div class="contactform__phone">
                        <p class="contactform__header">Kontakt telefoniczny:</p>
                        <div>
                            <a class="contactform__number" href="tel: 665597215">Szymon: 665-597-215</a>
                        </div>
                        <div>
                            <a class="contactform__number" href="tel: 731620641">Patryk: 731-620-641</a>
                        </div>
                    </div>
                    <div class="contactform__mail">
                        <p class="contactform__header">Adres e-mail:</p>
                        <a class="contactform__mail" href="mailto: kontakt@existagency.pl">kontakt@existagency.pl</a>
                    </div>
                    <?php
        
                }
                else
                {?>

                    <h4 class="contactform__imageTitle text-left">Zamów bezpłatną wycene</h4>
                    <div class="text-center">
                        <img class="contactform__image text-center"
                            src="<?= get_template_directory_uri() . "/images/socialMedia.png"; ?>" alt="jak działamy">
                    </div>
                    <?php
                }
                ?>

            </div>
            <div class="contactform__right">
                <?php
                    $form_id = get_field("contact_form");
                    echo do_shortcode('[contact-form-7 id="' . $form_id . '"]');
                ?>
            </div>
        </div>

    </div>
</section>