var app = angular.module('app', []);

app.controller('HomeController', function($scope) {

  $scope.goal_title = "La Antigua República";  
  $scope.dates = [3956,3951]; /* Años BBY, KotOR 1 y 2 */  
  
  /* Se activan las burbujas de videojuegos para esos años, se bloquean las demás */
  $scope.goal_real_estate = false;
  $scope.videojuego2 = false;

  for (x in $scope.dates) {
    if($scope.dates[x]== 3956){
      $scope.videojuego_3956 = true;    
    } else if($scope.dates[x]== 3951) {
      $scope.videojuego2_3951 = true;
    }
  }  
});

$(document).ready(function(e) {
  var viewport =Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
  console.log(viewport);

  
  $('a').click(function(e){
    e.preventDefault()
  })

  $('.goal_wrap').click(function(){
    var diff = $(this).parent()[0].offsetLeft;
    $('.date .goal_wrap').removeClass('active bounce');
    $(this).addClass('active bounce');
    console.log(diff);
    console.log((viewport - diff));
    TweenLite.to($('.date').parent(), 1, {x:((viewport*0.5) - diff), onComplete:function(){
      console.log('success');
      /*TweenLite.to($('.timeline'), 1, {top:"50%"});*/
    }});  
  });
    
  /* Imagen videojuegos - KotOR*/
  $('.videojuego').click(function(){
    console.log('goal click');
    $('body').fadeTo('ease', 0.3, function()
    {
      $(this).css('background-image', 'url(media/kotor_wallpaper.jpg)');
    }).fadeTo('slow', 1);
  });
  
  /* Imagen videojuegos - KotOR 2 */
  $('.videojuego2').click(function(){
    console.log('goal click');
    $('body').fadeTo('ease', 0.3, function()
    {
      $(this).css('background-image', 'url(media/kotor2_wallpaper.jpg)');
    }).fadeTo('slow', 1);
  });  
  
});