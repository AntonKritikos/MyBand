window.addEventListener("load",function()
{
  // var button = document.getElementById('#trailer');
  // var vutton = document.getElementById('#trailer2');
  var vidon = false;
  var vidon2 = false;
  trailer.addEventListener('click',function()
  {
    if (!vidon) {
      $('#trailertext').css("display","none");
      $('#video').css("display","block");
      $('#video2').css("display","none");
      vidon = !vidon;
      vidon2 = false;
    }
    else if (vidon) {
      $('#trailertext').css("display","block");
      $('#video').css("display","none");
      vidon = !vidon;
    }
  });
  trailer2.addEventListener('click',function()
  {
    if (!vidon2) {
      $('#trailertext').css("display","none");
      $('#video2').css("display","block");
      $('#video').css("display","none");
      vidon2 = !vidon2;
      vidon = false;
    }
    else if (vidon2) {
      $('#trailertext').css("display","block");
      $('#video2').css("display","none");
      vidon2 = !vidon2;
    }
  });
});
