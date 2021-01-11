var app = angular.module('app', []);

app.controller('HomeController', function($scope) {

  $scope.goal_title = "República Galáctica";  
  $scope.dates = [32,22,19]; /* Años BBY, KotOR 1 y 2 */  
  
  /* Se activan las burbujas de videojuegos para esos años, se bloquean las demás */
  /*$scope.goal_real_estate = false;
  $scope.videojuego2 = false;*/

  for (x in $scope.dates) {
    if($scope.dates[x]== 32){
      $scope.pelicula_32 = true;    
    } else if($scope.dates[x]== 22) {
      $scope.pelicula2_22 = true;
      $scope.serie_22 = true;
    } else if($scope.dates[x]== 19) {
      $scope.pelicula3_19 = true;
      $scope.serie2_19 = true;
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
    
  /* Imagen película 1 - La Amenaza Fantasma*/
  $('.pelicula').click(function(){
    console.log('goal click');
    $('body').fadeTo('ease', 0.3, function() {
      $(this).css('background-image', 'url(media/film1_wallpaper.jpeg)');
    }).fadeTo('slow', 1);
  });
  
  /* Imagen película 2 - El Ataque de los Clones */
  $('.pelicula2').click(function(){
    console.log('goal click');
    $('body').fadeTo('ease', 0.3, function()     {
      $(this).css('background-image', 'url(media/film2_wallpaper.jpeg)');
    }).fadeTo('slow', 1);
  });
  
  /* Imagen película 3 - La Venganza de los Sith */
  $('.pelicula3').click(function(){
    console.log('goal click');
    $('body').fadeTo('ease', 0.3, function()     {
      $(this).css('background-image', 'url(media/film3_wallpaper.jpg)');
    }).fadeTo('slow', 1);
  });
  
  /* Imagen serie - The Clone Wars */
  $('.serie').click(function(){
    console.log('goal click');
    $('body').fadeTo('ease', 0.3, function()     {
      $(this).css('background-image', 'url(media/clone_wars_wallpaper.jpg)');
    }).fadeTo('slow', 1);
  }); 

  /* Imagen serie - The Clone Wars */
  $('.serie2').click(function(){
    console.log('goal click');
    $('body').fadeTo('ease', 0.3, function()     {
      $(this).css('background-image', 'url(media/clone_wars_ending_wallpaper.jpg)');
    }).fadeTo('slow', 1);
  }); 
  
});