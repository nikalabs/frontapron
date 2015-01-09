<!doctype html>
 <html>
 <head>
      	 <meta charset="utf-8">
      	 <meta name="viewport" content="width=device-weidth, initial-scale=1.0">
      	 <title>Front Apron</title>
      	 <link href="css/bootstrap.min.css" rel="stylesheet">
      	 <link href="css/custom.css" rel="stylesheet">
      	 <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
        
 </head>
 <body>
   
<!-- Start of Main Body -->
   <div class="main">
   	<div class="container">
 <div class="row"><!-- Start of the Row -->
 
  	      
<div class="col-md-4"><!-- Start of the Column -->
      <div class="page-header">
        <h1>Upgrade Account</h1>
      </div>
      <p><em>Free postings for first 3 months - Payment method is required when doing postings after the promotion period</em></p>
      <form class="account-form" role="sign-up" action="mailto:youremail@email.com" method="post" id="form">
        <div class="form-group">
          <select name="typeofaccount" size="1" id="upgradeaccount"  type="select">
             <option value="-1" selected>Account Type</option>
             <option value="1">Business</option>
             <option value="2">Schools & Charities</option>
           </select>
          <div id="upgradeaccountinfo" style="display:none"><em>Please Choose Your Account Type</em></div>
          
           <div id="1" class="type payment">

            <div class="package">Package<br/>
             <select id="package" class="package-select">
            <option value="-1" selected style='display:none;'>1 item for $1.00 per day</option>
            <option class="pack" value="1">1 Item  |  $1.00/day<br/></option>
            <option class="pack" value="2"><table class="table" id="price-table">100 Postings | $29.99<br/></option>
          </select>
         </div>

           <div class="coupon">Coupon Code<br/>
          <input type="text" class="form-control coupon-code" placeholder="Enter Code..." name="coupon_code" id="coupon"></div>
          
               <div class="businessname">Business Name<br/>
                 <input type="text" class="form-control business-name" placeholder="Target Store 134" name="business_name" id="business-name"></div>
                <div class="store">
                  <input type="checkbox" name="store" value="store" id="store"> Is a store?<br></div>

         
          
                <div class="store-address"><input type="text" class="form-control address" placeholder="Address" name="address" id="address"><div id="addressinfo" style="display:none;"><em>The Address Is Not Valid!</em></div></div>
                <div class="store-city"><input type="text" class="form-control city" placeholder="City" name="city" id="city"><div id="cityinfo" style="display:none;"><em>The City Is Not Valid!</em></div></div>
                <div class="store-zip"><input type="text" class="form-control zip" placeholder="Zip Code" name="zip" id="zip"><div id="zipinfo" style="display:none;"><em>The Zip Is Not Valid!</em></div></div>
                <div class="store-sate"><select class="form-control state" name="state" id="state">
  <option value="-1" selected>State</option>              
  <option value="AL">Alabama</option>
  <option value="AK">Alaska</option>
  <option value="AZ">Arizona</option>
  <option value="AR">Arkansas</option>
  <option value="CA">California</option>
  <option value="CO">Colorado</option>
  <option value="CT">Connecticut</option>
  <option value="DE">Delaware</option>
  <option value="DC">District Of Columbia</option>
  <option value="FL">Florida</option>
  <option value="GA">Georgia</option>
  <option value="HI">Hawaii</option>
  <option value="ID">Idaho</option>
  <option value="IL">Illinois</option>
  <option value="IN">Indiana</option>
  <option value="IA">Iowa</option>
  <option value="KS">Kansas</option>
  <option value="KY">Kentucky</option>
  <option value="LA">Louisiana</option>
  <option value="ME">Maine</option>
  <option value="MD">Maryland</option>
  <option value="MA">Massachusetts</option>
  <option value="MI">Michigan</option>
  <option value="MN">Minnesota</option>
  <option value="MS">Mississippi</option>
  <option value="MO">Missouri</option>
  <option value="MT">Montana</option>
  <option value="NE">Nebraska</option>
  <option value="NV">Nevada</option>
  <option value="NH">New Hampshire</option>
  <option value="NJ">New Jersey</option>
  <option value="NM">New Mexico</option>
  <option value="NY">New York</option>
  <option value="NC">North Carolina</option>
  <option value="ND">North Dakota</option>
  <option value="OH">Ohio</option>
  <option value="OK">Oklahoma</option>
  <option value="OR">Oregon</option>
  <option value="PA">Pennsylvania</option>
  <option value="RI">Rhode Island</option>
  <option value="SC">South Carolina</option>
  <option value="SD">South Dakota</option>
  <option value="TN">Tennessee</option>
  <option value="TX">Texas</option>
  <option value="UT">Utah</option>
  <option value="VT">Vermont</option>
  <option value="VA">Virginia</option>
  <option value="WA">Washington</option>
  <option value="WV">West Virginia</option>
  <option value="WI">Wisconsin</option>
  <option value="WY">Wyoming</option>
</select>   <div id="stateinfo" style="display:none;"><em>Please Choose One</em></div>    
        </div>
                
            Payment Method<br/><!--Start Payment Div -->
            <div class="ccard" style="width:100%;" >
                <div class="ccselector">
                  <label>
                 <input id="id_radio1" type="radio" name="name_radio1" value="value_radio1" />
                 <img src="images/ccard.png">
                 </label>
                <label>
                 <input id="id_radio2" type="radio" name="name_radio1" value="value_radio2" />
                 <img src="images/paypal.png">
                </label>
              </div>


  <div id="div1">
  <div  id="creditcard">
    <div class="card-name">Name on Card<br/>
          <input type="text" class="form-control card-name" placeholder="John Smith" name="name" id="card-name"><div id="cardinfo" style="display:none;"><em>The Name Is Not Valid!</em></div></div>
    <div class="ccnumber">Credit Card Number<br/>
          <input type="password" class="form-control ccnumber" id="ccnumber" placeholder="&#9679;&#9679;&#9679;&#9679; - &#9679;&#9679;&#9679;&#9679; - &#9679;&#9679;&#9679;&#9679; - 4392" name="credit_number" size="8" ><div id="creditinfo" style="display:none;"><em>The Number Is Not Valid!</em></div></div>
          <div class="cc-details">
          <div class="exp-date">Expiration Date<br/>
          <input type="text" class="form-control month" placeholder="11" name="expiration_date" id="month"><input type="text" class="form-control year" placeholder="16" name="expiration_year" id="year">
          <div id="monthinfo" style="display:none;"><em>Invalid Month</em></div><div id="yearinfo" style="display:none;"><em>Invalid Year</em></div>

        </div>
          <div class="cvv">CVV<br/>
          <input type="text" class="form-control CVV-no" placeholder="493" name="cvv" id="cvv"><div id="cvvinfo" style="display:none;">error</div></div></div></div></div>
  <div id="div2"><div id="paypal">Email Address<br><input type="email" placeholder="JohnSmith4382@target.co" class="email-ppal" name="email" id="email"><div id="ppalinfo" style="display:none;"><em>The Email Is Not Valid</em></div></div></div>
 
</div>


         
       
          
        </div><!--End Of Payment Div -->
          
       
          <div id="2" class="type ein" >
            <div class="ein-number">EIN #(for schools & Charities if applicable)<br/>
          <input type="text" class="form-control ein" placeholder="Enter Ein #..." name="ein_number" id="einnumber"  ><div id="eininfo" style="display:none;"><em>The Number Is Not Valid</em></div></div>

          <div class="first-name">First Name<br/>
          <input type="text" class="form-control firts" placeholder="John" name="first_name" id="first"  ><div id="firstnameinfo" style="display:none;"><em>The Name Is Not Valid</em></div></div>
          <div class="last-name">Last Name<br/>
          <input type="text" class="form-control last" placeholder="Smith" name="last_name" id="last"  ><div id="lastnameinfo" style="display:none;"><em>The Name Is Not Valid</em></div></div>
          
                <div class="store-address"><input type="text" class="form-control address" placeholder="Address" name="store_address" id="store-address"><div id="storeaddressinfo" style="display:none;"><em>The Address Is Not Valid</em></div></div>
                <div class="store-city"><input type="text" class="form-control city" placeholder="City" name="store_city" id="store-city"><div id="storecityinfo" style="display:none;"><em>The City Is Not Valid</em></div></div>
                <div class="store-zip"><input type="text" class="form-control zip" placeholder="Zip Code" name="zip_code" id="store-zip"><div id="zipcodeinfo" style="display:none;"><em>The Zip Is Not Valid</em></div></div>
                <div class="store-sate"><select class="form-control state" name="store-state" id="store-state">
  <option value="-1" selected>State</option>              
  <option value="AL">Alabama</option>
  <option value="AK">Alaska</option>
  <option value="AZ">Arizona</option>
  <option value="AR">Arkansas</option>
  <option value="CA">California</option>
  <option value="CO">Colorado</option>
  <option value="CT">Connecticut</option>
  <option value="DE">Delaware</option>
  <option value="DC">District Of Columbia</option>
  <option value="FL">Florida</option>
  <option value="GA">Georgia</option>
  <option value="HI">Hawaii</option>
  <option value="ID">Idaho</option>
  <option value="IL">Illinois</option>
  <option value="IN">Indiana</option>
  <option value="IA">Iowa</option>
  <option value="KS">Kansas</option>
  <option value="KY">Kentucky</option>
  <option value="LA">Louisiana</option>
  <option value="ME">Maine</option>
  <option value="MD">Maryland</option>
  <option value="MA">Massachusetts</option>
  <option value="MI">Michigan</option>
  <option value="MN">Minnesota</option>
  <option value="MS">Mississippi</option>
  <option value="MO">Missouri</option>
  <option value="MT">Montana</option>
  <option value="NE">Nebraska</option>
  <option value="NV">Nevada</option>
  <option value="NH">New Hampshire</option>
  <option value="NJ">New Jersey</option>
  <option value="NM">New Mexico</option>
  <option value="NY">New York</option>
  <option value="NC">North Carolina</option>
  <option value="ND">North Dakota</option>
  <option value="OH">Ohio</option>
  <option value="OK">Oklahoma</option>
  <option value="OR">Oregon</option>
  <option value="PA">Pennsylvania</option>
  <option value="RI">Rhode Island</option>
  <option value="SC">South Carolina</option>
  <option value="SD">South Dakota</option>
  <option value="TN">Tennessee</option>
  <option value="TX">Texas</option>
  <option value="UT">Utah</option>
  <option value="VT">Vermont</option>
  <option value="VA">Virginia</option>
  <option value="WA">Washington</option>
  <option value="WV">West Virginia</option>
  <option value="WI">Wisconsin</option>
  <option value="WY">Wyoming</option>
</select> <div id="storestateinfo" style="display:none;"><em>Please Choose One</em></div>      
        </div>
      </div>
        
        <button type="submit" class="btn btn-default upgrade-account submit" id="submit">Upgrade Account</button>
        
      </form>
    
    </div><!-- End of the Column -->
          
      </div><!-- End of the Row -->

     
    </div><!-- End of the Container -->
   
   </div> <!-- End of the Main -->
  

 <script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <script src="js/custom.js"></script>
 <script>
        $(document).ready(function () {
     $('.type').hide();
     $("#upgradeaccount").change(function () {
      var selected = $("#upgradeaccount option:selected").val();
       $('.type').hide();
      $('#' + selected).show();

     });
   });
      </script>
      <script>
      $(document).ready(function () {
    
        $('#div2').hide('fast');
       
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
      </script>

      <script>
      $(document).ready(function() {
    $("#year").keypress(function(event) {
        return /\d/.test(String.fromCharCode(event.keyCode));
    });
});
      </script>

       <script>
      $(document).ready(function() {
    $("#month").keypress(function(event) {
        return /\d/.test(String.fromCharCode(event.keyCode));
    });
});
      </script>


 <script>
      $(document).ready(function() {
    $("#CVV").keypress(function(event) {
        return /\d/.test(String.fromCharCode(event.keyCode));
    });
});
      </script>

      <script>
      $(document).ready(function() {
    $("#einnumber").keypress(function(event) {
        return /\d/.test(String.fromCharCode(event.keyCode));
    });
});
      </script>


 <script>
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

  }
  });

  $('#submit').click(function() {
  var selected = $("#upgradeaccount option:selected").val();
   if(selected =='2') {
     
var ein = $("#einnumber");
var first_name = $("#first");
var last_name = $("#last");
var store_address = $("#store-address");
var store_city = $("#store-city");
var zip_code = $("#store-zip");
var store_state = $("#store-state");


ein.blur(validateEin);
first_name.blur(validateFirst_name);
last_name.blur(validateLast_name);
store_address.blur(validateStore_address);
store_city.blur(validateStore_city);
zip_code.blur(validateZip_code);
store_state.blur(validateStore_state);

if (validateEin() , validateFirst_name() , validateLast_name() , validateStore_address() , validateStore_city() , validateZip_code() , validateStore_state()){
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

function validateLast_name(){
  if (last_name.val().length<2){
 last_name.addClass("error");
  $("#lastnameinfo").addClass("error");
  
   return false;

}else{
  last_name.removeClass("error");
  $("#lastnameinfo").removeClass("error");
 

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
  
 
if ($("#card-name").val().length>0){
     
var name = $("#card-name");
var credit_number = $("#ccnumber");
var expiration_date = $("#month");
var expiration_year = $("#year");
var cvv = $("#cvv");

name.blur(validateName);
credit_number.blur(validateCredit);
expiration_date.blur(validateMonth);
expiration_year.blur(validateYear);
cvv.blur(validateCvv);

if (validateName() , validateCredit() , validateMonth() , validateYear() ,  validateCvv()){
    return true;
  }else{
    return false;
  }


function validateName(){


  if (name.val().length<2){
  name.addClass("error");
  $("#cardinfo").addClass("error");
  
   return false;

}else{
  name.removeClass("error");
  $("#cardinfo").removeClass("error");
 

  return true;
}
}

function validateCredit(){
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
  if (expiration_date.val() < 1 || expiration_date.val() > 12){
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



$('#submit').click(function() {
  var selected = $("#upgradeaccount option:selected").val();
if (selected =='1' || $("#id_radio2").is(':checked')){
     
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

});

      
      
      </script>
  
 </body>
 </html>




