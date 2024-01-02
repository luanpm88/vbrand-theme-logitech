            <?php
                $themeData = vbrand_load_theme_data();
            ?>
            
            <!-- FOOTER -->
            <footer class="container mt-5">
                <p class="float-end"><a href="#"><?php echo $themeData->get('back_to_top_text'); ?></a></p>
                <p><?php echo $themeData->get('copyright_line'); ?></p>
            </footer>
        </main>

        <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>

        <?php
            wp_footer();
        ?>

    </body>

</html>