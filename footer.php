        <nav class="layout__bottom-nav">



            <?php
            wp_nav_menu([
                'theme_location' => 'footer-menu',
                'menu_class' => 'layout__bottom-nav',
                'container' => false,
                'items_wrap' => '<ul class="bottom-nav">%3$s</ul>',
            ]);
            ?>

        </nav>
        <footer class="layout__footer">
            <footer> Управление финансов и экономики администрации Кунгурского муниципального округа  Пермского каря. Официальный сайт.</footer>
        </footer>
        <?php wp_footer();  ?>
    </div>
</body>
</html>