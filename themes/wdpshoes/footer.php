<footer class="main_footer">
    <div class="container">
        <article class="main_footer_optin">
            <header class="main_footer_optin_header">
                <h3>Quer 20% de desconto?</h3>
                <p>Informe seu melhor e-mail logo abaixo e receba um cupom de 20% de desconto na sua primeira
                    compra!</p>
            </header>
            <form action="" class="main_footer_optin_form">
                <input class="radius" type="email" name="email" placeholder="Informe seu E-mail">
                <button class="btn radius icon-envelope">Quero meu desconto!</button>
            </form>
        </article>

        <div class="main_footer_nav flex">
            <?php for ($m = 1; $m < 4; $m++): ?>
                <nav class="flex-4">
                    <h4>Nome do menu:</h4>
                    <?php for ($mm = 1; $mm < 6; $mm++): ?>
                        <a href="<?= $configBase; ?>/" title=""> Link de rodapé <?= "{$m}/{$mm}" ?></a>
                    <?php endfor; ?>
                </nav>
            <?php endfor; ?>

            <nav class="flex-4">
                <h4>Pagamento seguro:</h4>
                <ul class="main_footer_nav_pays flex">
                    <li class="flex-4"><img src="<?= $configBase; ?>/assets/cards/mastercard.png" title="" alt=""></li>
                    <li class="flex-4"><img src="<?= $configBase; ?>/assets/cards/visa.png" title="" alt=""></li>
                    <li class="flex-4"><img src="<?= $configBase; ?>/assets/cards/amex.png" title="" alt=""></li>
                    <li class="flex-4"><img src="<?= $configBase; ?>/assets/cards/aura.png" title="" alt=""></li>
                    <li class="flex-4"><img src="<?= $configBase; ?>/assets/cards/dinners.png" title="" alt=""></li>
                    <li class="flex-4"><img src="<?= $configBase; ?>/assets/cards/elo.png" title="" alt=""></li>
                    <li class="flex-4"><img src="<?= $configBase; ?>/assets/cards/hiper.png" title="" alt=""></li>
                    <li class="flex-4"><img src="<?= $configBase; ?>/assets/cards/jcb.png" title="" alt=""></li>
                </ul>
            </nav>

        </div>
    </div>

    <div class="main_footer_bottom">
        <div class="container flex">
            <div class="main_footer_bottom_copy">
                <img src="<?= $configThemeLink; ?>/images/wdpshoes_logo_black.png" alt="WdpShoes" title="WdpShoes">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium!</p>
            </div>
            <nav class="main_footer_bottom_social">
                <a href="" class="icon-facebook icon-notext transition"></a>
                <a href="" class="icon-instagram icon-notext transition"></a>
                <a href="" class="icon-youtube icon-notext transition"></a>
            </nav>
        </div>
    </div>
</footer>