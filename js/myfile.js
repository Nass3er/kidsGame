

 

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
