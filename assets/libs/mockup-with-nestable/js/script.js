$(document).ready(function() {
  
  $("#toggle").click(function(){
    $("#slide").slideToggle("slow");
    
    if ($.trim($(this).text()) === 'Minimize') {
      $(this).text('Expand');
      $("#filters").text('Investor: "Fannie Mae";  Program: "Jumbo";  Start Date: "1/1/13"');
    } else {
      $(this).text('Minimize');
      $("#filters").text("");
    }
  });
  
  $('.save').on('click', function(e) {
    
    $(this).addClass('btn-success').removeClass('btn-primary');
    $('.saved-message').css("display", "inline");
    
  });
  
  $('.add-filter').on('click', function(e) {
    var whereToAdd = $(this).parent().parent();
     whereToAdd.after('<div class="row filter-row" style="margin-bottom:10px"><div class="col-md-3 col-sm-3"><select class="form-control"><option>Investor</option><option>Program</option><option>Client</option><option>Start date</option><option>End date</option></select></div><div class="col-md-7 col-sm-7"><div class="form-group"><input type="text" class="form-control" placeholder="Enter field here..." /></div><!-- /input-group --></div><!--col--><div class="col-md-2 col-sm-2"><button type="button" class="btn btn-default remove-filter">Remove filter</span></button></div></div>');
    //give appropriate class to new add buttons and disable other buttons
    //$(this).addClass('disabled');
  });
  
  //$newFilter = $('<div class="row" style="margin-bottom:10px"><div class="col-md-3 col-sm-3"><select class="form-control"><option>Investor</option><option>Program</option><option>Client</option><option>Start Date</option><option>End date</option></select></div><div class="col-md-8 col-sm-8"><div class="input-group"><input type="text" class="form-control" placeholder="Enter field here..." /><span class="input-group-btn"><button class="btn btn-default" type="button">Filter</button></span></div><!-- /input-group --></div><!--col--><div class="col-md-1 col-sm-1"><button type="button" class="btn btn-link add-filter"><span class="glyphicon glyphicon-plus pull-right" style="color:green" aria-hidden="true"></span></button></div></div>');
  
  $('.add-guide').on('click', function(e) {
    var rowToAdd = $(this).parent().parent().parent();
    rowToAdd.append('<tr><td></td><td><a href="frameset.html"><button type="button" class="btn btn-link title">New Guideline</button></a></td><td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target=".delete-modal">Delete</span></button></td></tr>');
    
    //give appropriate class to new add buttons and disable other buttons
  });
  
  //$newGuide = $('<tr><td></td><td><a href="frameset.html"><button type="button" class="btn btn-link title">New Guideline</button></a></td><td><button type="button" class="btn btn-link" data-toggle="modal" data-target=".delete-modal"><span class="glyphicon glyphicon-remove" style="color:red" aria-hidden="true"></span></button></td></tr>');
  
});


