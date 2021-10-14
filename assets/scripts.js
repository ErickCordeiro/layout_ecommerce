$(function () {
    if ($(".j_slide").length) {
        function jSlide() {
            $(".j_slide_nav span").removeClass("active");

            if ($(".j_slide_item:visible").next(".j_slide_item").length) {
                $(".j_slide_nav span:eq(" + ($(".j_slide_item:visible").index() + 1) + ")").addClass("active");
                $(".j_slide_item:visible").fadeOut(function () {
                    $(this).next(".j_slide_item").fadeIn().css('display', 'block');
                });
            } else {
                $(".j_slide_nav span:eq(0)").addClass("active");

                $(".j_slide_item:visible").fadeOut(function () {
                    $(".j_slide_item:eq(0)").fadeIn();
                });
            }
        }


        let timeSlide = 3000;
        let jSlideTimer = setInterval(function () {
            jSlide();
        }, timeSlide);

        $(".j_slide").mouseenter(function () {
            clearInterval(jSlideTimer);
        }).mouseleave(function () {
            jSlideTimer = setInterval(function () {
                jSlide();
            }, timeSlide);
        });

        //NAV
        let slideNav = '';
        $(".j_slide_item").each(function () {
            slideNav += "<span class='rounded transition'></span>";
        });

        $(".j_slide_nav").html(slideNav).find("span").click(function () {
            var navigation = $(this);
            clearInterval(jSlideTimer);

            $(".j_slide_nav span").removeClass("active");
            $(".j_slide_item:visible").fadeOut(function () {
                navigation.addClass("active");
                $(".j_slide_item:eq(" + navigation.index() + ")").fadeIn();
            });
        });
        $(".j_slide_nav").find("span:eq(0)").addClass("active");
    }

    //J_TABS
    if ($(".j_tabs").length) {
        $(".j_tabs_nav:eq(0)").addClass("active");
        $(".j_tabs_nav").click(function () {
            let jTab = $(this);

            $(".j_tabs_nav").removeClass("active");
            jTab.addClass("active");

            $(".j_tabs_item").fadeOut(function () {
                $(".j_tabs_item:eq(" + jTab.index() + ")").fadeIn();
            });
        });
    }

    //J_GALLERY
    $(".j_gallery_item").click(function(){
        let item = $(this);
        let items = $(".j_gallery_item");
        let home = $(".j_gallery_home");

        if(!item.hasClass("active")){
            items.removeClass("active");
            item.addClass("active");

            home.fadeTo(200, 0.1, function(){
                $(this).attr("src", item.find("img").attr("src"));
                $(this).fadeTo(200,1);
            });
        }
    });

    //J_ANCHOR
    $(".j_anchor").click(function(){
       let anchor = $($(this).attr("data-anchor"));
       $("html, body").animate({scrollTop: anchor.offset().top}, 1000);
    });

});