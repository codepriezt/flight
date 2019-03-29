// Main JavaScript Functions
// Remarks: Sowemimo Bamidele @thenativebrands

// Login Page
$('.cra').click(function() {
	$('.create-account').show();
  $('.create-account h1').addClass('animated fadeInUp');
  $('.create-account p').addClass('animated fadeInUp');
	$('.login-form').hide();
});

$('.log, .btl').click(function() {
  $('.login-form h1').addClass('animated fadeInUp');
  $('.login-form p').addClass('animated fadeInUp');
	$('.create-account, .forgot-password').hide();
	$('.login-form').show();
});

$('.fpass').click(function() {
  $('.forgot-password h1').addClass('animated fadeInUp');
  $('.forgot-password p').addClass('animated fadeInUp');
	$('.forgot-password').show();
	$('.login-form').hide();
});

// Nearby Pilots
$('.nearby-pilots').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

$('.update-status textarea').focus(function() {
  $(this).animate({ height: "10em" }, 500);
});

$('.update-status textarea').blur(function() {
  $(this).animate({ height: "3em" }, 500);
});

// Tipsy
$('.tips').tipsy();  

// Wow
new WOW().init();

// Parallax
$(window).stellar();


// // editing posts through  json 
// $($post).find('timeline-footer').find('like-comment faster').find('li').eq('3').on('click',function(){
//       $('#edit-modal').modal();
// });

// $('#').on('click', function(){
//   $.ajax({
//     method: "POST",
//     url:url,
//     data:{body: $($post-body).val(), postId:''}
//   })
//   .done(function (msg){
//     console.log(msg['message']);
//   });
// }); 