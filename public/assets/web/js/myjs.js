$('.owl1').owlCarousel({
    loop: true,
    margin: 10,
    items: 4,
    nav: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    dots: false

});
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
// tooltip

$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
$(function() {
  // Owl Carousel muzamil techonow page
  var owl = $(".owl-carousel");
  owl.owlCarousel({
    items: 1,
    loop: true,
    nav: false,
    autoplay: true,
    autoplayTimeout: 2000,
    smartSpeed: 6000,
    animateIn: "fadeInLeftBig",
  });
});
// team section technow
$(document).ready(function() {
    "use strict";
  $(".team-list").on("click", "a", function(a) {
        a.preventDefault();
        var e = $(this).data("team");
        $(".team-single").removeClass("active"), $(".team-list li").removeClass("active"), $("#" + e).addClass("active"), $(this).parent().addClass("active")
    });
  
});

// dashbored
$(document).ready(function() {
            $(".icon").click(function() {
                $(".ans").slideToggle();
            })
            $(".icon2").click(function() {
                $(".ans2").slideToggle();
            })
            $(".icon3").click(function() {
                $(".ans3").slideToggle();
            })
            $(".icon4").click(function() {
                $(".ans4").slideToggle();
            })
            $(".icon5").click(function() {
                $(".ans5").slideToggle();
            })
            $(".icon6").click(function() {
                $(".ans6").slideToggle();
            })
            $(".icon7").click(function() {
                $(".ans7").slideToggle();
            })
            $(".icon8").click(function() {
                $(".ans8").slideToggle();
            })
        })



jQuery(document).ready(function($) {
    /** ******************************
        * Simple WYSIWYG
        ****************************** **/
    $('#editControls a').click(function(e) {
        e.preventDefault();
        switch($(this).data('role')) {
            case 'h1':
            case 'h2':
            case 'h3':
            case 'p':
                document.execCommand('formatBlock', false, $(this).data('role'));
                break;
            default:
                document.execCommand($(this).data('role'), false, null);
                break;
        }

        var textval = $("#editor").html();
        $("#editorCopy").val(textval);
    });

    $("#editor").keyup(function() {
        var value = $(this).html();
        $("#editorCopy").val(value);
    }).keyup();
    
    $('#checkIt').click(function(e) {
        e.preventDefault();
        alert($("#editorCopy").val());
    });
});


(function() {
    var content =
        "<p><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzC_Ho_08G0m7PyxJOPLpPujM9UTLxvaE-5nXewscnqa3GMWjGwg' alt='Image result for summernote.js'></p><h1>Summernote</h1>";
    var $sumNote = $("#ta-1")
        .summernote({
            dialogsInBody: true,
            dialogsFade: true,
            height: "150px",
        })
        .data("summernote");
});




$(document).ready(function() {
        $(".hide1 ul >.sidebar_droplink >a").click(function() {
            $(".hide1 ul li ul").slideUp(300);
             $(".hide1 ul li").find("span.drop i").removeClass("fa fa-chevron-down");
             $(".hide1 ul li").find("span.drop i").addClass("fa fa-chevron-left");
            if ($(this).parent(".sidebar_droplink").find("ul").is(":hidden")) {
                $(this).parent(".sidebar_droplink").find("ul").slideToggle(300);
                 $(this).find("span.drop i").toggleClass("fa fa-chevron-down");
                 $(this).find("span.drop i").toggleClass("fa fa-chevron-left");
            }
        });
    });


 $(document).ready(function() {
          $(function() {
             var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
             $(".navbar-nav.navbarMar li a").each(function(){
                  if($(this).attr("href") == pgurl || $(this).attr("href") == '' ){
$(this).addClass("active");

                    
                  }
                             })
        });
        });

              // Start upload preview image
$(".gambar").attr("src", "https://user.gadjian.com/static/images/personnel_boy.png");
                        var $uploadCrop,
                        tempFilename,
                        rawImg,
                        imageId;
                        function readFile(input) {
                            if (input.files && input.files[0]) {
                              var reader = new FileReader();
                                reader.onload = function (e) {
                                    $('.upload-demo').addClass('ready');
                                    $('#cropImagePop').modal('show');
                                    rawImg = e.target.result;
                                }
                                reader.readAsDataURL(input.files[0]);
                            }
                            else {
                                swal("Sorry - you're browser doesn't support the FileReader API");
                            }
                        }

                        $uploadCrop = $('#upload-demo').croppie({
                            viewport: {
                                width: 150,
                                height: 200,
                            },
                            enforceBoundary: false,
                            enableExif: true
                        });
                        $('#cropImagePop').on('shown.bs.modal', function(){
                            // alert('Shown pop');
                            $uploadCrop.croppie('bind', {
                                url: rawImg
                            }).then(function(){
                                console.log('jQuery bind complete');
                            });
                        });

                        $('.item-img').on('change', function () { imageId = $(this).data('id'); tempFilename = $(this).val();
                                                                                                         $('#cancelCropBtn').data('id', imageId); readFile(this); });
                        $('#cropImageBtn').on('click', function (ev) {
                            $uploadCrop.croppie('result', {
                                type: 'base64',
                                format: 'jpeg',
                                size: {width: 150, height: 200}
                            }).then(function (resp) {
                                $('#item-img-output').attr('src', resp);
                                $('#cropImagePop').modal('hide');
                            });
                        });
                // End upload preview image
            // Image previewer

                 function readURLr(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
         // Image previewer

                 function teamone(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#team1')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        // Image previewer

                 function teamfive(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#team5')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        // Image previewer

                 function teamtwo(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#team2')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        // Image previewer

                 function teamthree(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#team3')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        // Image previewer

                 function teamfour(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#team4')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
         // Image previewer

                 function sliderimgone(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#slider1')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        // Image previewer

                 function userimg(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imgg')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
