
        $(document).ready(function () {
     $('.type').hide();
     $("#upgradeaccount").change(function () {
      var selected = $("#upgradeaccount option:selected").val();
       $('.type').hide();
      $('#' + selected).show();

     });
   });
  