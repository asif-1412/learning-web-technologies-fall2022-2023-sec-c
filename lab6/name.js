
function myname()
{
     let name=document.getElementById('name').value ;
     let validchar="abcdefghijklmnopqrstABCDEFGHIJKLMNOPQRST.-";
     let firstchar="abcdefghijklmnopqrstABCDEFGHIJKLMNOPQRST";

     if(name==null)
     {
        alert("Empty inputs are invalid!");
     }
     else if(name.length<2)
     {
        alert("Name must be at least 2 words!");
     }
     else if (firstchar.indexOf(name[0]) === -1) 
     {
        alert("Name must start with a letter!");
    }
     else
     { 
        document.getElementById('id1').innerHTML= name ;

     }
}