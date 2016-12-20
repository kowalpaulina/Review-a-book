$(document).ready(function(){
    $("#opinions").load("showopinions.php");
    listener();    
});
function listener(){
    $("#send").click(function(event){
        event.preventDefault();
        validate();
    });
}
function validate(){
    var valid = 0;
    fname = escape($("#fname").val());
    message = escape($("#message").val());
    lname = escape($("#lname").val());
    email = $("#email").val();
    gender = $("input[name='gender']:checked").val();
    var regexp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm;
    
    var children = $('.error').children();
    children.remove();
    
    if(!(fname.match('^[a-zA-Z]{3,16}$'))){
        valid =+1;
        $('.error-fname').append("<p>Wpisz imię</p>");        
    }    
        
    if(!(lname.match('^[a-zA-Z]{3,16}$'))){
        valid =+1;
        $('.error-lname').append("<p>Wpisz nazwisko</p>");
    } 
    
    if(message==''){
        valid =+1;
        $('.error-message').append("<p>Wpisz opinię</p>");
    }
    
    if(message.length < 10 && message.length > 0){
        valid =+1;
        $('.error-message').append("<p>Daj od siebie wiecej ;)</p>");
    }
    
     if(!gender) {
       valid =+1;
     $('.error-gender').append("<p>Wybierz płeć</p>");}
    
    if(!(regexp.test(email))){
            valid =+1;
        $('.error-email').append("<p>Wpisz adres mailowy</p>");
        }

    if(valid==0){
        addOpinionToDB();
    }
}

function addOpinionToDB(){
    request = "";
    request = new XMLHttpRequest();
    var fname = escape($("#fname").val());
    var lname = escape($("#lname").val());
    var email = escape($("#email").val());
    var gender = $("input[name='gender']:checked").val();
    var message = escape($("#message").val());
    var url = "addopinion.php";
    var content = "fname=" + fname + "&lname=" + lname + "&email=" +email + "&message=" + message;  
    request.onreadystatechange = contentAdd;
    request.open("POST", url, true);
    request.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	request.send(content);
}    
function contentAdd(){
    if(request.readyState == 4 && request.status == 200){
        document.getElementById("opinions").innerHTML = request.responseText;  
        $("#opinions").load("showopinions.php");
	}
}




