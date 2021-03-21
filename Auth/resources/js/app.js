require('./bootstrap');


var pwd1 = document.getElementById('pwd1').innerText;
var pwd2 = document.getElementById('pwd2').innerText;
var helpPwd =document.getElementById('helpPwd');
var button = document.getElementById('button');
function compare() {
    if(pwd1 != pwd2 ||(pwd1=='' && pwd2=='')){
        button.disabled="true";
    }else{
        helpPwd.innerHTML = " ";
    }
}
