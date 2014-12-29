<script language="JavaScript" type="text/javascript" src="pop-up.js"></script> 
<script>

        $(document).ready(function () {
     $('#div2').hide();
     
   });
      </script>
      <script>
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
    


  
        $(document).ready(function () {
     $('.type').hide();
     $("#upgradeaccount").change(function () {
      var selected = $("#upgradeaccount option:selected").val();
       $('.type').hide();
      $('#' + selected).show();

     });
   });
 