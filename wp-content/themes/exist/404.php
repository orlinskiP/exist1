<?php

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <section class="error-404 not-found">
            <header class="page-header">
                <div class="container text-center error">
                    <h2 class="error__header">Ups... Coś poszło nie tak 😥</h2>
                    <p class="error__text">Nie można znaleźć wyszukiwanej strony</p>
                    <p class="error__sign">404</p>
                    <div class="error__button">
                        <div class="error__button-first">
                            <a href="<?= site_url(); ?>">Idź do strony głównej</a>
                        </div>
                    </div>
                </div>
            </header>
        </section>
    </main>
</div>

<?php
get_footer();