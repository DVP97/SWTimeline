var app = angular.module('app', []);

app.controller('HomeController', function($scope) {

  $scope.goal_title = "Cronología de Star Wars";
  
  $scope.dates = [-30,-20,-10,-5,0,5,10,20,30]; /* Años respecto BBY, creo que no deja poner letras */
  
  $scope.goal_real_estate = false;
  
  /* Me parece que con esto se controlan las 'burbujas' que hay en algunos años */
  for (x in $scope.dates) {
    if($scope.dates[x]== 30){
      $scope.goal_real_estate_2016 = true;
    }else if($scope.dates[x]== 20){
      $scope.goal_retirement_2021 = true; 
    }else if($scope.dates[x]== 10){
      $scope.goal_involve_2018 = true; 
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
  
  $('.goal_real_estate').click(function(){
    console.log('goal click');
    $('body').fadeTo('ease', 0.3, function()
    {
      $(this).css('background-image', 'url(http://extrawall.net/images/wallpapers/378_1920x1080_abstract_city.jpg)');
    }).fadeTo('slow', 1);

  });
  
  $('.goal_retirement').click(function(){
    console.log('goal click');
    $('body').fadeTo('ease', 0.3, function()
    {
      $(this).css('background-image', 'url(https://wallpaperaccess.com/full/2828916.jpg)'); /* Foto Amenaza Fantasma */
    }).fadeTo('slow', 1);

  });  
  
  $('.goal_involve').click(function(){
    console.log('goal click');
    $('body').fadeTo('ease', 0.3, function()
    {
      $(this).css('background-image', 'url(https://wallpaperaccess.com/full/2828902.jpg)'); /* Foto Clon */
    }).fadeTo('slow', 1);

  });
  

});

