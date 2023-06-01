<?php do_action( 'main_bottom' ); ?>
</section> <!-- .main -->
<?php get_sidebar( 'primary' ); ?>
<?php do_action( 'after_main' ); ?>
</div><!-- .max-width -->
</div><!-- .primary-container -->

<?php
// Elementor `footer` location
if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) :
    ?>
    <footer id="site-footer" class="site-footer" role="contentinfo" style="margin-top:10px;">
        <div class="max-width">
            <?php do_action( 'footer_top' ); ?>
        </div>
        <div class="design-credit" style="text-align:left;padding:0px 13px 2px;">
        <span>
            <?php
            $footer_text = sprintf( __( '@栗 博客声明 <a href="%1$s" rel="nofollow">京ICP备2021005198号-1</a> 一半海水，一半烟花.'), 'https://beian.miit.gov.cn');
            $footer_text = apply_filters( 'ct_period_footer_text', $footer_text );
            echo do_shortcode( wp_kses_post( $footer_text ) );
            ?>
        </span>
        </div>
    </footer>
<?php endif; ?>
</div><!-- .overflow-container -->

<?php do_action( 'body_bottom' ); ?>

<?php wp_footer(); ?>

</body>
</html>


<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?3537fd2436bd2dc34f0af5ba15064c4b";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>

