<<<<<<< HEAD
jQuery(function($) {
	if( $('.testimonial-slider').length ){
        var testimonial = tns({
            "container": ".testimonial-slider",
            "rewind": true,
            "mouseDrag": true,
            "mode": "gallery",
            "nav": false,
            "controls": false,
            "autoplayButtonOutput": false,
            "autoplay": true,
            "controlsContainer": "#testimonial1-nav-wrapper"
        });

        $(function () {
            $(".next1").click(function () {
                testimonial.goTo("next");
            });
            $(".prev1").click(function () {
                testimonial.goTo("prev");
            });
        });
	}	
=======
jQuery(function($) {
	if( $('.testimonial-slider').length ){
        var testimonial = tns({
            "container": ".testimonial-slider",
            "rewind": true,
            "mouseDrag": true,
            "mode": "gallery",
            "nav": false,
            "controls": false,
            "autoplayButtonOutput": false,
            "autoplay": true,
            "controlsContainer": "#testimonial1-nav-wrapper"
        });

        $(function () {
            $(".next1").click(function () {
                testimonial.goTo("next");
            });
            $(".prev1").click(function () {
                testimonial.goTo("prev");
            });
        });
	}	
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
});