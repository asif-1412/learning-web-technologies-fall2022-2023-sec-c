function emailcheck()
{

    let email=document.getElementById('Emailid').value ;

    if(email==' ')
    {
        alert("Cannot be empty");
    }
    else if(!email.includes('@')||!email.includes('.'))
    {
        alert("You are requested to add a valid email!") ;
    }
    else
    {
        document.getElementById("id2").innerHTML= email;
    }

}