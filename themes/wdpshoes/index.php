<main class="main_content">
    <div class="main_content_slide j_slide">
        <a class="j_slide_item" href="<?= $configBase ?>/produto" title=""><img
                    src="<?= $configBase ?>/uploads/featured-01.jpg" alt="" title=""/></a>
        <a class="j_slide_item" href="<?= $configBase ?>/produto" title=""><img
                    src="<?= $configBase ?>/uploads/featured-02.jpg" alt="" title=""/></a>
        <a class="j_slide_item" href="<?= $configBase ?>/produto" title=""><img
                    src="<?= $configBase ?>/uploads/featured-03.jpg" alt="" title=""/></a>
        <div class="j_slide_nav"></div>
    </div>
    <section class="pdt_gallery">
        <div class="container">
            <header class="main_content_header">
                <h1 class="main_content_header_title">Ofertas da Semana</h1>
            </header>

            <div class="flex">
                <div class="pdt_gallery_list pdt_gallery_featured">
                    <?php $pdt = "06";
                    require "./themes/wdpshoes/templates/product.php" ?>
                </div>

                <div class="pdt_gallery_list flex">
                    <?php $pdt = 0;
                    for ($pdt = 1; $pdt < 5; $pdt++): ?>
                        <?php require "./themes/wdpshoes/templates/product.php" ?>
                    <?php endfor; ?>
                </div>
            </div>

            <div class="pdt_gallery_normalize">
                <a href="<?= $configBase ?>/produto">
                    <img class="pdt_gallery_item pdt_gallery_banner" src="uploads/featured-01.jpg" alt="" title="">
                </a>
            </div>

            <div class="pdt_gallery_normalize flex">
                <?php $pdt = 0;
                for ($pdt = 5; $pdt < 9; $pdt++): ?>
                    <article class="pdt_gallery_item flex-2">
                        <a href="#" title=""><img src="uploads/products/<?= str_pad($pdt, 2, 0, STR_PAD_LEFT) ?>.jpg"
                                                  alt="" title=""></a>
                        <header class="pdt_gallery_item_desc">
                            <h2 class="pdt_gallery_item_desc_title">
                                <a href="#" title="" class="transition">Calça Moletom Confort Mama Latina</a>
                            </h2>
                            <div class="pdt_gallery_item_desc_price">
                                <p><b>R$ 59,90</b> <span>R$99,90</span></p>
                            </div>
                            <p>2x R$ 29,95</p>
                        </header>
                    </article>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <section class="pdt_gallery pdt_select">
        <div class="container">
            <header class="pdt_select_header">
                <h1><span class="j_tabs_nav transition radius">Eles</span><span class="j_tabs_nav transition radius">Elas</span>
                </h1>
            </header>

            <div class="j_tabs">
                <div class="j_tabs_item">
                    <div class="flex">
                        <div class="pdt_gallery_list pdt_gallery_featured">
                            <?php
                            $pdt = "15";
                            require "./themes/wdpshoes/templates/product.php" ?>
                        </div>

                        <div class="pdt_gallery_list flex">
                            <?php $pdt = 0;
                            for ($pdt = 11; $pdt < 15; $pdt++): ?>
                                <?php require "./themes/wdpshoes/templates/product.php" ?>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>

                <div class="j_tabs_item">
                    <div class="flex">
                        <div class="pdt_gallery_list pdt_gallery_featured">
                            <?php
                            $pdt = "09";
                            require "./themes/wdpshoes/templates/product.php" ?>
                        </div>

                        <div class="pdt_gallery_list flex">
                            <?php $pdt = 0;
                            for ($pdt = 5; $pdt < 9; $pdt++): ?>
                                <?php require "./themes/wdpshoes/templates/product.php" ?>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog_gallery">
        <div class="container">
            <header class="main_content_header">
                <h1 class="main_content_header_title">Blog</h1>
            </header>

            <div class="flex">
                <?php for ($b = 1; $b < 7; $b++): ?>
                    <?php require "./themes/wdpshoes/templates/article.php" ?>
                <?php endfor; ?>
            </div>
        </div>
    </section>

</main>