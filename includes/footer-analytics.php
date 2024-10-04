<script src="../../../../code.jquery.com/jquery-1.12.4.min.js"></script>

<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>

<script src="js/smoothscroll.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/animsition.min.js"></script>

<script src="js/owl.carousel.min.js"></script>

<script src="js/wow.min.js"></script>

<!-- <script src="js/jquery.pagepiling.min.js"></script> -->

<!-- <script src="js/isotope.pkgd.min.js"></script> -->

<script src="js/jquery.fancybox.min.js"></script>

<script src="js/TweenMax.min.js"></script>

<script src="js/ScrollMagic.min.js"></script>

<script src="js/animation.gsap.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="js/jquery.viewport.js"></script>

<!-- <script src="js/jquery.countdown.min.js"></script> -->

<script src="js/script.js"></script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/additional-methods.js"></script>


<script>

    // $(document).ready(function() {

    //   $('#demo-form').submit(function(e) {
    //     e.preventDefault();
    //     var first_name = $('#firstName').val();
    //     var last_name = $('#last_name').val();
    //     var handphone = $('#handphone').val();

    //     $(".error").remove();

    //     if (first_name.length < 1) {
    //       $('#first_name').after('<span class="error">This field is required</span>');
    //       return false;
    //     }
    //     if (last_name.length < 1) {
    //       $('#last_name').after('<span class="error">This field is required</span>');
    //       return false;
    //     }
    //     if (handphone.length < 1) {
    //       $('#handphone').after('<span class="error">This field is required</span>');
    //       return false;
    //     } 

    //   });

    // });

</script>

<script>

var maxLength = 200;
$('textarea').keyup(function() {
  var textlen = maxLength - $(this).val().length;
  $('#rchars').text(textlen);
});
    </script>
   <script>
    $.validator.addMethod("alpha", function(value, element) {
    return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
});

$.validator.addMethod("emailmatch", function(value, element) {
    return this.optional(element) || value == value.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/);
});
        $("#demo-form").validate({

            
            ignore: [],

            rules: {

                name: {
                    required: true,
                    alpha:true,
                  

                },
                email: {
                                            required: true,
                    email: true,
                    emailmatch:true
                },
                // service: {
                //     required: true,

                // }

                number: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    number:true

                },

                messge:{
                    maxlength: 200,
                }

            },
            messages: {
                name: {
                    required: "name can not be empty",
                    alpha: "Enter only alphabets"

                },
                email: {
                     required: "email can not be empty",
                    email: "please fill valid email",
                    emailmatch: "please enter valid email"

                },
                // service: {
                //     required: "Service can not be empty"

                // }
                number: {
                    required: "mobile number can not be empty",
                    number: "please fill only digit",
                    minlength:
                        "mobile number Must be 10 digit number"


                },
                messge:{
                    maxlength: "please enter no more than 200 characters",
                }

                //            details: {
                //                ckrequired: "Blog Details can not be empty",
                //            }

            },
            errorPlacement: function(error, element) {
            var placement = $(element).data('error');
            if (placement) {
                $(placement).append(error)
            } else {
                error.insertAfter(element);
            }
            }
            // messages: {
            //     name: {
            //         required: "Name can not be empty",
            //         alpha: "Name only alphabets"

            //     },
            //     email: {
            //          required: "Email can not be empty",
            //         email: "Please fill Valid email"

            //     },
            //     // service: {
            //     //     required: "Service can not be empty"

            //     // }
            //     number: {
            //         required: "Mobile Number can not be empty",
            //         number: "Please fill only digit",
            //         minlength:
            //             "Mobile Number Must be 10 digit number"


            //     },

            //     //            details: {
            //     //                ckrequired: "Blog Details can not be empty",
            //     //            }

            // }
        });
    </script>

<script>

    AOS.init();

    $(document).ready(function () {

        // init controller

        var controller = new ScrollMagic.Controller();



        // build scenes

        new ScrollMagic.Scene({ triggerElement: '.promo-zoom', triggerHook: 0, duration: '100%' })

            .setTween('.house-left', { left: '-30%', scale: 1.25, ease: Linear.easeNone })

            .addTo(controller);



        new ScrollMagic.Scene({ triggerElement: '.promo-zoom', triggerHook: 0, duration: '100%' })

            .setTween('.house-right', { right: '-10%', bottom: '-20%', scale: 1.35, ease: Linear.easeNone })

            .addTo(controller);



        new ScrollMagic.Scene({ triggerElement: '.promo-zoom', triggerHook: 0, duration: '100%' })

            .setTween('.mountains', { top: '-60%', scale: 2.2, ease: Linear.easeNone })

            .addTo(controller);



        new ScrollMagic.Scene({ triggerElement: '.promo-zoom', triggerHook: 0, duration: '100%' })

            .setTween('.promo-zoom-titles', { top: '0%', opacity: 0, ease: Linear.easeNone })

            .addTo(controller);



        new ScrollMagic.Scene({ triggerElement: '.promo-zoom', triggerHook: 0, duration: '100%' })

            .setTween('.navbar-nav', { opacity: 0, ease: Linear.easeNone })

            .addTo(controller);



        new ScrollMagic.Scene({ triggerElement: '.step-opacity', triggerHook: 0, duration: '15%' })

            .setTween('.mountains, .house-right, .house-left', { opacity: 0, ease: Linear.easeNone })

            .addTo(controller);



        new ScrollMagic.Scene({ triggerElement: '.step-visibility', triggerHook: 0, duration: '10%' })

            .setTween('.mountains, .house-right, .house-left, .navbar-nav, .promo-zoom-titles', { visibility: 'hidden', ease: Linear.easeNone })

            .addTo(controller);



        new ScrollMagic.Scene({ triggerElement: '.step-logo', triggerHook: 0, duration: '1%' })

            .setTween('.about', { opacity: '1', top: '0', ease: Linear.easeNone })

            .addTo(controller);



    });

</script>