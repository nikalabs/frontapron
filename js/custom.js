
<script language="JavaScript" type="text/javascript" src="pop-up.js"></script> 

  $(document).ready(function () {
     $('.type').hide();
     $("#upgradeaccount").change(function () {
      var selected = $("#upgradeaccount option:selected").val();
       $('.type').hide();
      $('#' + selected).show();

     });
   });
     
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


$(document).ready(function() {

$('#submit').click(function() {
    var typeofaccount = $("#upgradeaccount");
    typeofaccount.blur(validateTypeofaccount);
if (validateTypeofaccount()){
    return true;
  }else{
    return false;
  }

 
     
function validateTypeofaccount(){
   var selected = $("#upgradeaccount option:selected").val();
   if(selected =='-1') {
  typeofaccount.addClass("error");
   $("#upgradeaccountinfo").addClass("error");

  return false;

}else{
  typeofaccount.removeClass("error");
  $("#upgradeaccountinfo").removeClass("error");
  return true;
}
}


});




 $('#submit').click(function() {

  if($("#store").is(':checked')){



var address = $("#address");
var city = $("#city");
var zip = $("#zip");
var state = $("#state")


address.blur(validateAddress);
city.blur(validateCity);
zip.blur(validateZip);
state.blur(validateState);




  if (validateAddress() , validateCity() , validateZip() , validateState()){
    return true;
  }else{
    return false;
  }





function validateAddress(){
  if (address.val().length<2){
  address.addClass("error");
   $("#addressinfo").addClass("error");

  return false;

}else{
  address.removeClass("error");
  $("#addressinfo").removeClass("error");
  return true;
}
}


function validateCity(){
  if (city.val().length<2){
  city.addClass("error");
   $("#cityinfo").addClass("error");

  return false;

}else{
  city.removeClass("error");
  $("#cityinfo").removeClass("error");
  return true;
}
}

function validateZip(){
  var zipi = $('#zip').val();
  var zipRegex = /^\d{5}$/;

  if (!zipRegex.test(zipi)){
 zip.addClass("error");
   $("#zipinfo").addClass("error");

  return false;

}else{
  zip.removeClass("error");
  $("#zipinfo").removeClass("error");
  return true;
}
}


function validateState(){
  var selected = $("#state option:selected").val();
   if(selected =='-1') {
    state.addClass("error");
   $("#stateinfo").addClass("error");

  return false;

}else{
  state.removeClass("error");
  $("#stateinfo").removeClass("error");
  return true;
}
}

  } else {


 $("#addressinfo").removeClass("error");
$("#cityinfo").removeClass("error");
 $("#zipinfo").removeClass("error");
 $("#stateinfo").removeClass("error");


  }


  });



  $('#submit').click(function() {
  var selected = $("#upgradeaccount option:selected").val();
   if(selected =='2') {
     
var ein = $("#einnumber");
var first_name = $("#first");
var store_address = $("#store-address");
var store_city = $("#store-city");
var zip_code = $("#store-zip");
var store_state = $("#store-state");


ein.blur(validateEin);
first_name.blur(validateFirst_name);
store_address.blur(validateStore_address);
store_city.blur(validateStore_city);
zip_code.blur(validateZip_code);
store_state.blur(validateStore_state);

if (validateEin() , validateFirst_name() , validateStore_address() , validateStore_city() , validateZip_code() , validateStore_state()){
    return true;
  }else{
    return false;
  }




function validateEin(){
  if (ein.val().length<2){
  ein.addClass("error");
  $("#eininfo").addClass("error");
  
   return false;

}else{
  ein.removeClass("error");
  $("#eininfo").removeClass("error");
 

  return true;
}
}

function validateFirst_name(){
  if (first_name.val().length<2){
 first_name.addClass("error");
  $("#firstnameinfo").addClass("error");
  
   return false;

}else{
  first_name.removeClass("error");
  $("#firstnameinfo").removeClass("error");
 

  return true;
}
}



function validateStore_address(){
  if (store_address.val().length<2){
 store_address.addClass("error");
  $("#storeaddressinfo").addClass("error");
  
   return false;

}else{
 store_address.removeClass("error");
  $("#storeaddressinfo").removeClass("error");
 

  return true;
}
}


function validateStore_city(){
  if (store_city.val().length<2){
 store_city.addClass("error");
  $("#storecityinfo").addClass("error");
  
   return false;

}else{
 store_city.removeClass("error");
  $("#storecityinfo").removeClass("error");
 

  return true;
}
}


function validateZip_code(){
  var zipo = $('#store-zip').val();
  var zipRegex = /^\d{5}$/;

  if (!zipRegex.test(zipo)){
 zip_code.addClass("error");
  $("#zipcodeinfo").addClass("error");
  
   return false;

}else{
 zip_code.removeClass("error");
  $("#zipcodeinfo").removeClass("error");
 

  return true;
}
}
 

 function validateStore_state(){
  var selected = $("#store-state option:selected").val();
   if(selected =='-1') {
  store_state.addClass("error");
  $("#storestateinfo").addClass("error");
  
   return false;

}else{
 store_state.removeClass("error");
  $("#storestateinfo").removeClass("error");
 

  return true;
}
}
     


 }
  });





$('#submit').click(function() {
 
if ($("#id_radio2").is(':checked')){
     
var email = $("#email");
email.blur(validateEmail);

if (validateEmail()){
    return true;
  }else{
    return false;
  }


function validateEmail(){

var mail = $('#email').val();
  var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

    if (!filter.test(mail)){
  email.addClass("error");
  $("#ppalinfo").addClass("error");
  
   return false;

}else{
  email.removeClass("error");
  $("#ppalinfo").removeClass("error");
 

  return true;
}
}



}
});


$('#submit').click(function() {
if ($("#card-name").val().length>2){
  
var credit_number = $("#ccnumber");
var expiration_date = $("#month");
var expiration_year = $("#year");
var cvv = $("#cvv");


credit_number.blur(validateCredit_number);
expiration_date.blur(validateMonth);
expiration_year.blur(validateYear);
cvv.blur(validateCvv);

if (validateCredit_number() , validateMonth() , validateYear() ,  validateCvv()){
    return true;
  }else{
    return false;
  }



function validateCredit_number(){
  if (credit_number.val().length<5 || credit_number.val().length>13){
  credit_number.addClass("error");
  $("#creditinfo").addClass("error");
  
   return false;

}else{
  credit_number.removeClass("error");
  $("#creditinfo").removeClass("error");
 

  return true;
}
}

function validateMonth(){
  if (expiration_date.val() <1 || expiration_date.val()> 12){
  expiration_date.addClass("error");
  $("#monthinfo").addClass("error");
  
   return false;

}else{
  expiration_date.removeClass("error");
  $("#monthinfo").removeClass("error");
 

  return true;
}
}


function validateYear(){
  if (expiration_year.val().length<2 || expiration_year.val().length>2){
  expiration_year.addClass("error");
  $("#yearinfo").addClass("error");
  
   return false;

}else{
  expiration_year.removeClass("error");
  $("#yearinfo").removeClass("error");
 

  return true;
}
}

function validateCvv(){
  if (cvv.val().length<3 || cvv.val().length>3){
  cvv.addClass("error");
  $("#cvvinfo").addClass("error");
  
   return false;

}else{
  cvv.removeClass("error");
  $("#cvvinfo").removeClass("error");
 

  return true;
}
}


}

});

      
      }); 
    
      
