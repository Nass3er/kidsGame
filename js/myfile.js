

 

 document.getElementById("passnoti");
function checkPass() {
    if (document.getElementById("passin1").value != document.getElementById("passin2").value) {
        document.getElementById("passnoti").style.color="red";
        document.getElementById("passnoti").innerText="not matching";
    } else{
        document.getElementById("passnoti").innerText="matching";
        document.getElementById("passnoti").style.color="blue";
    }
}
 
var count=document.getElementById('valcount');
function plusfunc(price){
     
 var q= document.getElementById('quant').innerHTML;
 var q1=count.value=parseInt(q,10) + 1;
 document.getElementById('quant').innerHTML=q1;

  var p=document.getElementById('total').innerHTML ;
  var p2=parseInt(p,10) + parseInt(price,10);
  document.getElementById('total').innerHTML=p2;
}

if(parseInt(document.getElementById('valcount').value,10)===0)
{
    document.getElementById('valcount').value;
}

function minusfunc(price){
    if (parseInt(document.getElementById("quant").innerHTML,10)>1) {
        document.getElementById("quant").innerHTML-=1;
        document.getElementById("total").innerHTML-=price;
    }

}

//  let togglePass=document.getElementById("togglePass");
//  let passw=document.getElementById("passw");

//  togglePass.onclick=function(){
     
//        let type=passw.type=="password" ? "text" : "password";
//      passw.setAttribute("type","text");

//      // toggle the icon 
//      this.classList.toggle("fa-eye");
//  }
// //  prevent form submit 
// const form= document.querySelector(".form");
// form.addEventListener("submit",function(e){
//     e.preventDefault();
// });

function myfunc(){
    var y=document.getElementById("togglePass");
    var x=document.getElementById("passw");
    if(x.type==="password"){
        x.type="text";
        y.classList.remove("fa-eye-slash");
        y.classList.add("fa-eye");
    }else{
        x.type="password";
        y.classList.remove("fa-eye");
        y.classList.add("fa-eye-slash");
    }
}

