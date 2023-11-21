function checkdegree()
{ 
    let SSC=document.getElementById('SSC').checked;
    let HSC=document.getElementById('HSC').checked;
    let BSc=document.getElementById('BSc').checked;
    let degree = " ";

    if(SSC)
    {
        degree = "SSC";
        
    }
    else if(HSC)
    {
        degree = "HSC";
        
    }
    else if(BSc)
    {
        degree = "BSc";
        
    }
    else{
           alert("You are requested to select at least one option!");
    }

    document.getElementById("id5").innerHTML=" "+ degree;
   
}