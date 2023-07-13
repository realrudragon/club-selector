/**
  // นาม สมคเน อยู่หงษ์
  // Email : somkhane.nea@gmail.com
  // Tel : 0800796564
  // Facebook : https://www.facebook.com/somkhane.sy
  // Line : https://line.me/R/ti/p/%40tbf7649k
**/
var appColorPicker = function () {
	return {
    init: function() {
      // Colorpicker
      $(".colorpicker").asColorPicker();
      $(".complex-colorpicker").asColorPicker({
          mode: 'complex'
      });
      $(".gradient-colorpicker").asColorPicker({
          mode: 'gradient'
      });
      // $(function(){
      //   // Colorpicker
      //   $(".colorpicker").asColorPicker();
      //   $(".complex-colorpicker").asColorPicker({
      //       mode: 'complex'
      //   });
      //   $(".gradient-colorpicker").asColorPicker({
      //       mode: 'gradient'
      //   });
      // });
		}
	}
} ($);
appColorPicker.init();
