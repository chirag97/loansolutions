<footer class="footer">
   
    <!-- 
        All links in the footer should remain intact. 
        Licenseing information is available at: http://bootstraptaste.com/license/
        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Knight
    -->
</footer>
<!-- EMI Calculator Widget START --><script src="http://emicalculator.net/widget/2.0/js/emicalc-loader.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function (e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function () {
            $('.main-nav').slideToggle();
            return false

        });

    });
    
    "use strict";
        var instantFlag = false;
        var hotlineFlag = false;
        $("#instant-callback-div .instant-switch").click(function () {
            $("#instant-callback-div").animate({
                "right": $("#instant-callback-div").css('right') == "-1px" ? "-246px" : "-1px"
            }, 500);
            instantFlag = true;
            if (hotlineFlag) {
                $("#hotline-div").animate({
                    "right": "-277px"
                }, 500);
                hotlineFlag = false;
            }
        });
        $("#hide").click(function () {
            $("#instant-callback-div").animate({
                "right": "-246px"
            }, 500);
            instantFlag = false;
            setTimeout(function () {
                $("#popup-cta").find('.has-error').removeClass('has-error');
                instantValidate.resetForm();
            }, 400);
        });
    
        $("#hotline-div .hotline-switch").click(function () {
            $("#hotline-div").animate({
                "right": "-1px"
            }, 500);
            hotlineFlag = true;
            if (instantFlag) {
                $("#instant-callback-div").animate({
                    "right": "-278px"
                }, 500);
                instantFlag = false;
            }
        });
        $("#hide-hotline").click(function () {
            $("#hotline-div").animate({
                "right": "-245px"
            }, 500);
            hotlineFlag = false;
        });

    
  
</script>

	<script>
		jQuery(document).ready(function($) {
			$('.my-slider').unslider();
		});
	</script>

<script>
    wow = new WOW(
            {
                animateClass: 'animated',
                offset: 100
            }
    );
    wow.init();

</script>


<script type="text/javascript">
    $(window).load(function () {

        $('.main-nav li a').bind('click', function (event) {
            var $anchor = $(this);

            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 102
            }, 1500, 'easeInOutExpo');
            /*
             if you don't want to use the easing effects:
             $('html, body').stop().animate({
             scrollTop: $($anchor.attr('href')).offset().top
             }, 1000);
             */
            event.preventDefault();
        });
    })
</script>

<script type="text/javascript">

    $(window).load(function () {


        var $container = $('.portfolioContainer'),
                $body = $('body'),
                colW = 375,
                columns = null;


        $container.isotope({
            // disable window resizing
            resizable: true,
            masonry: {
                columnWidth: colW
            }
        });

        $(window).smartresize(function () {
            // check if columns has changed
            var currentColumns = Math.floor(($body.width() - 30) / colW);
            if (currentColumns !== columns) {
                // set new column count
                columns = currentColumns;
                // apply width to container manually, then trigger relayout
                $container.width(columns * colW)
                        .isotope('reLayout');
            }

        }).smartresize(); // trigger resize to set container width
        $('.portfolioFilter a').click(function () {
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');

            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
            });
            return false;
        });

    });

</script>
</body>
</html>