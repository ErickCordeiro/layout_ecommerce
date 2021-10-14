<main class="main_content">
    <div class="container">
        <article class="main_product">
            <div class="main_product_gallery">
                <ul class="main_product_gallery_list">
                    <?php for ($img = 1; $img < 5; $img++):
                        $active = ($img == 1 ? "active" : "");
                        ?>

                        <li class="radius transition <?= $active ?> j_gallery_item">
                            <img src="<?= $configBase ?>/uploads/products/16-<?= $img ?>.jpg" alt="" title="">
                        </li>

                    <?php endfor; ?>
                </ul>

                <div class="main_product_gallery_cover">
                    <img class="radius j_gallery_home" src="<?= $configBase ?>/uploads/products/16-1.jpg" alt=""
                         title="">
                </div>
            </div>
            <div class="main_product_checkout">
                <p class="main_product_checkout_stars"><?= str_repeat("<span class='icon-star-o icon-notext'></span>", 5) ?></p>
                <h1 class="main_product_checkout_title">Top Gonew c/ Bojo Removível Mármore Tule Média Sustentação -
                    Estampado</h1>
                <p class="main_product_checkout_headline">
                    Exercite-se com estilo usando o Top Gonew Mármore Detalhe Tule! Trazendo um design moderno e uma
                    estampa Exclusiva... <b class="j_anchor" data-anchor=".main_product_description">ver mais</b>
                </p>
                <p class="main_product_checkout_price">R$ 59,00 <span>R$ 79,00</span></p>
                <p class="main_product_checkout_economy">Economia de R$ 20,00 (25%)</p>
                <p class="main_product_checkout_parcels">Em até 4x de R$ 14,75</p>
                <form action="" class="main_product_checkout_cart">
                    <h2>Selecione o <b>tamanho:</b></h2>
                    <span class="radius transition">P</span>
                    <span class="radius transition">M</span>
                    <span class="radius transition">G</span>
                    <span class="radius transition">GG</span>

                    <div class="main_product_checkout_cart_act">
                        <div class="radius">
                            <span class="icon-plus icon-notext"></span>
                            <input type="text" value="1">
                            <span class="icon-minus icon-notext"></span>
                        </div>
                        <button class="btn icon-shopping-cart-1 radius transition">Comprar</button>
                    </div>
                </form>

                <aside class="main_product_checkout_related">
                    <h2>outras o <b>cores:</b></h2>
                    <div>
                        <a href="" class="radius transition active">
                            <img src="<?= $configBase ?>/uploads/products/16-1.jpg" title="" alt="">
                        </a>
                        <a href="" class="radius transition ">
                            <img src="<?= $configBase ?>/uploads/products/17-1.jpg" title="" alt="">
                        </a>
                    </div>
                </aside>
            </div>
        </article>
    </div>

    <section class="main_product_related">
        <div class="container">
            <header class="main_content_header">
                <h2 class="main_content_header_title">Produtos Relacionados</h2>
            </header>
            <div class="pdt_gallery pdt_gallery_normalize flex">
                <?php for ($pdt = 5; $pdt < 13; $pdt++) {
                    require "{$configThemePath}/templates/product.php";
                } ?>
            </div>
        </div>
    </section>

    <article class="main_product_description">
        <div class="container">
            <header class="main_product_description_header">
                <span class="main_product_description_header_tag">DESCRIÇÃO:</span>
                <h4>Top Gonew c/ Bojo Removível Mármore Tule Média Sustentação -
                    Estampado</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut commodi delectus et eveniet explicabo
                    nulla, quas. Aliquid amet aspernatur autem commodi dignissimos, dolor dolorem dolorum esse explicabo
                    fuga illum in inventore iste libero maxime nam odio omnis reiciendis rem similique soluta suscipit
                    unde, voluptas. Aliquam blanditiis ea et nostrum, porro voluptate! Adipisci architecto atque cumque
                    debitis dicta eius harum illo illum incidunt modi necessitatibus non. </p>

                <form action="" class="main_product_checkout_cart">
                    <h2>Selecione o <b>tamanho:</b></h2>
                    <span class="radius transition">P</span>
                    <span class="radius transition">M</span>
                    <span class="radius transition">G</span>
                    <span class="radius transition">GG</span>

                    <div class="main_product_checkout_cart_act">
                        <div class="radius">
                            <span class="icon-plus icon-notext"></span>
                            <input type="text" value="1">
                            <span class="icon-minus icon-notext"></span>
                        </div>
                        <button class="btn icon-shopping-cart-1 radius transition">Comprar</button>
                    </div>
                </form>
            </header>
            <div class="main_product_description_thumb">
                <img class="radius" src="<?= $configBase ?>/uploads/products/16-1.jpg" alt=""
                     title="">
            </div>
        </div>
    </article>
</main>