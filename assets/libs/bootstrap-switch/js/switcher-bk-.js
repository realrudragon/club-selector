$(document).ready(function () {
  //pixel switch
  $('.pixelswitch').change(function () {
    var id = $(this).children(':hidden').val();
    if ($(this).children(':checked').length === 1)
    {
      var switch_pixel = 'ON';
    }
    else
    {
      var switch_pixel = 'OFF';
    }
    $.ajax({
        type: 'GET',
        url: baseurl + "setting/update_cat_status",
        data: {
          id: id,
          switch_pixel: switch_pixel,
        },
        success: function (response) {
          console.log(response);
        }
    });
  });
  //messenger switch
  $('.messengeswitch').change(function () {
    var id = $(this).children(':hidden').val();
    if ($(this).children(':checked').length === 1)
    {
      var switch_messenger = 'ON';
    }
    else
    {
      var switch_messenger = 'OFF';
    }
    $.ajax({
        type: 'GET',
        url: baseurl + "setting/update_cat_status",
        data: {
          id: id,
          switch_messenger: switch_messenger,
        },
        success: function (response) {
          console.log(response);
        }
    });
  });
});
