function checkblood() {
     let bloodgroup = document.getElementById('blood').value;

     if (bloodgroup == ' ') {
          alert("You are requested to select a bloodgroup!");
     }
     else {
          document.getElementById("id6").innerHTML = bloodgroup;
     }

}