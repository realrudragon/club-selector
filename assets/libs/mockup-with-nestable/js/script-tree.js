$(function() {
  $('.tree-body li:has(ul)').addClass('parent-li').find(' > span');
  
  $('.tree-body li.parent-li > span').on('click', function(e) {
    
    var children = $(this).parent('li.parent-li').find(' > ul > li');
    
    if (children.is(":visible")) {
      children.hide('fast');
      $(this).find('.dropdown-icon').addClass('glyphicon-plus-sign').removeClass('glyphicon-minus-sign');
    } 
    
    else {
      children.show('fast');
      $(this).find('.dropdown-icon').addClass('glyphicon-minus-sign').removeClass('glyphicon-plus-sign');
    }
    
    e.stopPropagation();
    
  });
});