        </div>
    </div>
    <!-- FIN MAIN CONTAINER -->
    <!-- FOOTER -->
    <div class="footer">

    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<?php if(is_single()){ ;?>
    <script src="<?php bloginfo('stylesheet_directory') ?>/js/single.min.js"></script>
<?php } ;?>
<script src="<?php bloginfo('stylesheet_directory') ?>/js/main.min.js"></script>
<?php wp_footer(); ?> 
</body>
</html>