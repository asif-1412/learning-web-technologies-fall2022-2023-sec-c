function validateregister() {

    let name = document.getElementById('name').value;
    let phone = document.getElementById('phone').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let conpassword = document.getElementById('conpassword').value;


    if (name == '' || phone == '' || email == '' || password == '' || conpassword == '') {
        alert('please fill all fields');
        return false;
    }

    if (password !== conpassword) {
        alert('password does not match.');
        return false;
    }

    return true;
}


function checkemailavailable() {

    let email = document.getElementById('email').value;

    let xhttp = new XMLHttpRequest();
    xhttp.open('post', '../controller/emailcheck.php', true);
    xhttp.setRequestHeader('content-type', 'application/x-www-form-urlencoded');


    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('3').innerHTML = this.responseText;
        }
    };

    xhttp.send('email=' + email);
}
