
function y() {
    document.getElementById("m2").classList.toggle("new2");
    document.getElementById("m1").classList.toggle("new1");
    document.getElementById("m3").classList.toggle("new3");
  }
function redirect(path){
    window.location.href=path;
}
function showcred(){
    document.getElementById("glass").style.display="grid";
}
function clse(){
    document.getElementById("glass").style.display="none";
}
function pass(a,b){
    clse();
    let username=document.getElementById(a).innerHTML;
    document.getElementById('username').value=username;
    let password=document.getElementById(b).innerHTML;
    document.getElementById('password').value=password;
}
function login(){
    let pass= document.getElementById('password').value;
    let user=document.getElementById('username').value;
    let c=document.getElementById('check').checked;
    if(pass!='' && user!=''){
    jQuery("#lgn").html('wait..');
    jQuery("#lgn").attr('readonly', true);
    $.ajax({
        type: "POST",
        url: 'assets/database/validate.php',
        data: 'name=' + user + '&pass=' + pass + '&c=' + c,
        success: function (html) {
            if(html==0){
                redirect('index.php');
            }else if(html==1){
                redirect('index.php');
            }else if(html==2){
                swal("Wrong Credentials","","warning").then(function(){
                    jQuery("#lgn").html('Login');
                    jQuery("#lgn").attr('readonly', fasle);
                });
            }else{
                swal("Invalid Credentials","","warning").then(function(){
                    jQuery("#lgn").html('Login');
                    jQuery("#lgn").attr('readonly', fasle);
                });
            }
            
        }
    });
}else{
    swal("Every field is mandatory");
}
}
function redirect_l(){
    redirect('login.php');
}
function logout(){
    user=1;
    $.ajax({
        type: "POST",
        url: 'assets/database/logout.php',
        data: 'name=' + user,
        success: function (html) {
            redirect(window.location);
        }
    });
}