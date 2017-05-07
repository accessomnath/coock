<?php if ('on' == et_get_option('divi_back_to_top', 'false')) : ?>

    <span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if (!is_page_template('page-template-blank.php')) : ?>

    <footer id="main-footer">
        <?php get_sidebar('footer'); ?>


        <?php
        if (has_nav_menu('footer-menu')) : ?>

            <div id="et-footer-nav">
                <div class="container">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                        'depth' => '1',
                        'menu_class' => 'bottom-nav',
                        'container' => '',
                        'fallback_cb' => '',
                    ));
                    ?>
                </div>
            </div> <!-- #et-footer-nav -->

        <?php endif; ?>

        <div id="footer-bottom">
            <div class="container clearfix">
                <?php
                if (false !== et_get_option('show_footer_social_icons', true)) {
                    get_template_part('includes/social_icons', 'footer');
                }

                echo et_get_footer_credits();
                ?>
            </div>    <!-- .container -->
        </div>
    </footer> <!-- #main-footer -->
    </div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

</div> <!-- #page-container -->
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/incrementing.js"></script>
<?php wp_footer();
//global $post;
//global $product;
//$pro = intval($product->get_price());
////strval
//var_dump($pro);
?>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<script>
    $(document).ready(function () {
        $("#startDate-1").datetimepicker({minDate: new Date()});
        var count = 2;
        $('#myBtn').click(function () {
            var d_i = count++;
            var div = $("<div class='input-group date' id='startDate-" + d_i + "'><input type='text' class='form-control' id='date-" + d_i + "' name='orderDate[]'><span class='input-group-addon'><span class='glyphicon glyphicon-calendar'></span></span></div><p>Enter quantity </p><span><input type='number' value='' required class='form-control' name='qty[]' id='quantity-" + d_i + "' min='1' style='width:70px;'></span><br>");
            xyz = "#startDate-" + d_i;
            setInterval(function () {
                $(xyz).datetimepicker({minDate: new Date()});
            }, 1000);
            div.appendTo('#wrapper');
        });
        $("#addToCart").click(function(){

            var x = $('input[name="orderDate[]"]').val();
            var y = $('input[name="qty[]"]').val();
//            alert(y);
        })
    });
</script>
<!---->
<!--    $(document).on('input', '.wccpf-datepicker-sunday', function(){-->
<!--        alert('Input changed');-->
<!--    });


//    $(document).ready(function () {

//        $(".wccpf-datepicker-sunday").change(function(){
//            alert('done');
//        });

//        jQuery(function ($) {
//            var price = <?php //echo $product->get_price(); ?>
//
//
//            $(".wccpf-datepicker-sunday").change(function () {
//                alert('hiiii');
//
//
//            });
////            $(".wccpf-datepicker-monday").change(function () {
////                var product_total = parseFloat(price * 2)
//
//
//            });
//
//        });


//        $("label[for='days-meta-breakfast']").hide();
//        $("label[for='days-meta-lunch']").hide();
//        $("label[for='days-meta-dinner']").hide();
//
//        $("#days-meta-sunday:checkbox").click(function (event) {
//            if ($(this).is("input:checked")) {
//                $("label[for='days-meta-sunday']").next().css({"display": "block"});
//                $("label[for='days-meta-sunday']").next().next().css({"display": "block"});
//                $("label[for='days-meta-sunday']").next().next().next().css({"display": "block"});
//            }
//            else {
//
//                $("label[for='days-meta-sunday']").next().css({"display": "none"});
//                $("label[for='days-meta-sunday']").next().next().css({"display": "none"});
//                $("label[for='days-meta-sunday']").next().next().next().css({"display": "none"});
//
//            }
//        });
//
//        $("#days-meta-monday:checkbox").click(function (event) {
//            if ($(this).is("input:checked")) {
//                $("label[for='days-meta-monday']").next().css({"display": "block"});
//                $("label[for='days-meta-monday']").next().next().css({"display": "block"});
//                $("label[for='days-meta-monday']").next().next().next().css({"display": "block"});
//
//            }
//            else {
//                $("label[for='days-meta-monday']").next().css({"display": "none"});
//                $("label[for='days-meta-monday']").next().next().css({"display": "none"});
//                $("label[for='days-meta-monday']").next().next().next().css({"display": "none"});
//            }
//        });
//
//        $("#days-meta-tuesday:checkbox").click(function (event) {
//            if ($(this).is("input:checked")) {
//                $("label[for='days-meta-tuesday']").next().css({"display": "block"});
//                $("label[for='days-meta-tuesday']").next().next().css({"display": "block"});
//                $("label[for='days-meta-tuesday']").next().next().next().css({"display": "block"});
//
//            }
//            else {
//                $("label[for='days-meta-tuesday']").next().css({"display": "none"});
//                $("label[for='days-meta-tuesday']").next().next().css({"display": "none"});
//                $("label[for='days-meta-tuesday']").next().next().next().css({"display": "none"});
//            }
//        });
//
//        $("#days-meta-wednesday:checkbox").click(function (event) {
//            if ($(this).is("input:checked")) {
//                $("label[for='days-meta-wednesday']").next().css({"display": "block"});
//                $("label[for='days-meta-wednesday']").next().next().css({"display": "block"});
//                $("label[for='days-meta-wednesday']").next().next().next().css({"display": "block"});
//
//            }
//            else {
//                $("label[for='days-meta-wednesday']").next().css({"display": "none"});
//                $("label[for='days-meta-wednesday']").next().next().css({"display": "none"});
//                $("label[for='days-meta-wednesday']").next().next().next().css({"display": "none"});
//            }
//        });
//
//        $("#days-meta-thursday:checkbox").click(function (event) {
//            if ($(this).is("input:checked")) {
//                $("label[for='days-meta-thursday']").next().css({"display": "block"});
//                $("label[for='days-meta-thursday']").next().next().css({"display": "block"});
//                $("label[for='days-meta-thursday']").next().next().next().css({"display": "block"});
//
//            }
//            else {
//                $("label[for='days-meta-thursday']").next().css({"display": "none"});
//                $("label[for='days-meta-thursday']").next().next().css({"display": "none"});
//                $("label[for='days-meta-thursday']").next().next().next().css({"display": "none"});
//            }
//        });
//
//        $("#days-meta-friday:checkbox").click(function (event) {
//            if ($(this).is("input:checked")) {
//                $("label[for='days-meta-friday']").next().css({"display": "block"});
//                $("label[for='days-meta-friday']").next().next().css({"display": "block"});
//                $("label[for='days-meta-friday']").next().next().next().css({"display": "block"});
//
//            }
//            else {
//                $("label[for='days-meta-friday']").next().css({"display": "none"});
//                $("label[for='days-meta-friday']").next().next().css({"display": "none"});
//                $("label[for='days-meta-friday']").next().next().next().css({"display": "none"});
//            }
//        });
//
//        $("#days-meta-saturday:checkbox").click(function (event) {
//            if ($(this).is("input:checked")) {
//                $("label[for='days-meta-saturday']").next().css({"display": "block"});
//                $("label[for='days-meta-saturday']").next().next().css({"display": "block"});
//                $("label[for='days-meta-saturday']").next().next().next().css({"display": "block"});
//            }
//            else {
//                $("label[for='days-meta-saturday']").next().css({"display": "none"});
//                $("label[for='days-meta-saturday']").next().next().css({"display": "none"});
//                $("label[for='days-meta-saturday']").next().next().next().css({"display": "none"});
//            }
//        });

//    });
//</script>-->

</html>