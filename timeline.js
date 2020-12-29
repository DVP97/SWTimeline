var app = angular.module('app', []);

app.controller('HomeController', function($scope) {

  $scope.goal_title = "Cronología de Star Wars";
  
  $scope.dates = [0,0,2,3,4,0,6,7,8]; /* Años respecto BBY, creo que no deja poner letras */
  
  $scope.goal_real_estate = false;
  
  /* Me parece que con esto se controlan las 'burbujas' que hay en algunos años */
  for (x in $scope.dates) {
    if($scope.dates[x]== 0){
      $scope.goal_real_estate_0 = true;
      $scope.goal_retirement_0 = true;
      $scope.goal_involve_0 = true;
    } else if($scope.dates[x]== 2) {
      $scope.goal_retirement_2 = true;
    }else if($scope.dates[x]== -20){
      $scope.goal_retirement_2021 = false; 
    }else if($scope.dates[x]== -10){
      $scope.goal_involve_2018 = false; 
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
      $(this).css('background-image', 'url(https://i.pinimg.com/originals/e1/8e/c6/e18ec65183a8a6334cce5906fb5ba487.jpg)');
    }).fadeTo('slow', 1);

  });
  
  /* Círculo hoja */
  $('.goal_retirement').click(function(){
    console.log('goal click');
    $('body').fadeTo('ease', 0.3, function()
    {
      $(this).css('background-image', 'url(https://wallpaperaccess.com/full/2828916.jpg)');
    }).fadeTo('slow', 1);
  });  
  

  /* Círculo Gorro graduado */
  $('.goal_involve').click(function(){
    console.log('goal click');
    $('body').fadeTo('ease', 0.3, function()
    {
      $(this).css('background-image', 'url(https://wallpaperaccess.com/full/2828902.jpg)'); 
    }).fadeTo('slow', 1);
  });
  

});

