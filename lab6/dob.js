function checkdob()
{
 let dob= document.getElementById("dob").value;
 let datemonthyear=dob.split(" ");
 let year=parseInt(datemonthyear[0],10);
 
if(dob=='')
 {
    alert("Cannot be empty");
    
 }
else if(year< 1900 || year > 2016)
 { 
      alert("Put Valid year :1900-2016");

 }
else
 {
      document.getElementById("id4").innerHTML=dob;
}

}