


     
      $(document).ready(function () {
    
        $('#div2').hide('fast');
       
    });
    
     
      $(document).ready(function () {
    $('#id_radio1').click(function () {
        $('#div2').hide('fast');
        $('#div1').show('fast');
    });
    $('#id_radio2').click(function () {
        $('#div1').hide('fast');
        $('#div2').show('fast');
    });
});
      
 $(document).ready(function(){
      
     $('#inputs input').change(function() {
  if (this.checked) {
    $li = $('<li></li>');
    $li.text(this.value);
    $('#results').append($li);
  }
  else {
    $('li:contains('+this.value+')', '#results').remove();
  }
});

  });

$(document).ready(function(){
  $("#submit_post").click(function(){
    var name=$("#filterstring").val();
    $.post("filter.php",{fstring:name},function(result){
      $("#result").append(result);
    });
     
  });
});

$(document).ready(function(){
    $('#nav').on('click','.nav-item', function ( e ) {
        e.preventDefault();
        $(this).parents('#nav').find('.active').removeClass('active').end().end().addClass('active');
        $(activeTab).show();
    });
});






 
    
      
