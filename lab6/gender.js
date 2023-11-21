function gendercheck()
{
    let male =document.getElementById('Male').checked;
    let female=document.getElementById('Female').checked;
    let other =document.getElementById('Other').checked;

    if(male)
    {
        document.getElementById("id3").innerHTML="Male";
    }
    else if(female)
    {
        document.getElementById("id3").innerHTML="Female";
    }
    else{
         alert("You must select at least one gender!");
    }


}