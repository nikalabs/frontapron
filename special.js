$(document).ready(function(){
 var txtBox = $('#description');
txtBox.keydown(function(e){
    var that = this;
    setTimeout(function(){
        $(".caption").html(that.value.replace(/\n/g,"<br />"));
    },10);
});
 });  

