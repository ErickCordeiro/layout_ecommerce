<header class="main_header">
    <div class="container">
        <div class="main_header_nav">
            <div class="main_header_nav_logo">
                <a href="<?= $configBase; ?>" title="WdpShoes | Home">
                    <img src="<?= $configThemeLink; ?>/images/wdpshoes_logo_white.png"
                         alt=""
                         title="">
                </a>
            </div>
            <div class="main_header_nav_search">
                <form action="" method="post" enctype="multipart/form-data" class="radius">
                    <input type="text" name="s" placeholder="Pesquisar na WdpShoes">
                    <button class="icon-search icon-notext transition"></button>
                </form>
            </div>
            <div class="main_header_nav_menu">
                <a href="#" class="icon-shopping-cart-1 icon-notext transition main_header_nav_menu_cart"><span
                        class="rounded">3</span></a>
                <div class="main_header_nav_menu_user">
                    <a href="<?= $configBase; ?>/conta"
                       title=""
                       class="icon-user main_header_nav_menu_user_a radius transition">Minha Conta</a>

                    <nav class="radius">
                        <a href="<?= $configBase; ?>/conta" title="">Meus Pedidos</a>
                        <a href="<?= $configBase; ?>/conta/cadastro" title="">Meus Dados</a>
                        <a href="<?= $configBase; ?>/conta/enderecos" title="">Meus Endereços</a>
                        <a href="<?= $configBase; ?>/conta/sair" title="">Sair</a>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Departamentos -->
        <ul class="main_header_departments">
            <?php for ($i = 1; $i < 6; $i++): ?>
                <li class="main_header_departments_li"> Departamento <?= $i ?>
                    <ul class="main_header_departments_li_ul">
                        <?php for ($ii = 1; $ii < 6; $ii++): ?>

                            <li class="main_header_departments_li_ul_li">
                                <a href="<?= $configBase; ?>/categoria" title="">Categoria <?= "{$i}/{$ii}" ?></a>
                            </li>

                        <?php endfor; ?>
                    </ul>
                </li>
            <?php endfor; ?>
        </ul>
    </div>
</header>