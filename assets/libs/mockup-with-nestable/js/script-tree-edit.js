$(function() {
  $('.tree-body li:has(ul)').addClass('parent-li').find(' > span');

  $('.tree-body li.parent-li .dropdown-icon').on('click', function(e) {
    
    var children = $(this).parent().parent().parent().parent('li.parent-li').find(' > ul > li');
    
    if (children.is(":visible")) {
      children.hide('fast');
      $(this).addClass('glyphicon-plus-sign').removeClass('glyphicon-minus-sign');
    } 
    
    else {
      children.show('fast');
      $(this).addClass('glyphicon-minus-sign').removeClass('glyphicon-plus-sign');
    }
    
    e.stopPropagation();
    
  });
  
  $('.add-child').on('click', function(e) {
    var parentToAdd = $(this).parent().parent().parent().parent();
    parentToAdd.append('<ul><li><span class="leaf-content"><div class="panel panel-default"><div class="panel-body"><span class="dropdown-icon glyphicon glyphicon-minus-sign"></span> New Child <a href="edit-frame.html" target="edit-frame"><button type="button" class="btn btn-primary btn-xs pull-right">Edit</button></a><button type="button" class="btn btn-default btn-xs pull-right add-child">Add child</button><button type="button" class="btn btn-warning btn-xs pull-right override">Override</button></div></div></span></li></ul>');

  });
  
});
