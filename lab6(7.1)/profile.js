function profile()
{
    let userid=document.getElementById('id').value ;
    let userpic=document.getElementById('Picture').value ;

    if(userid=='')
    {
        alert("Empty inputs are invalid!");
    }
    else if(!userpic)
    {
        alert("You are requested to upload a picture!");
    }
    else
    {
        document.getElementById('printid').innerHTML=userid;
      
    }
}