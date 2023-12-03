<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <script src="../asset/personval.js"></script>
</head>
<body>
       <form action="../controller/registerval.php" method="post" enctype="" onsubmit="validateregister()" >

       <fieldset style="width: 600px; ">
            <table>
                <tr>
                    <th colspan="2">
                        <h2>register</h2>
                       
                    </th>
                </tr>
                
                <tr>
                <td>
                    name:
                </td>
                <td>
                    <input type="text" name="name" id="name" value=""><br>
                </td>
                </tr>
               
                <tr>
                <td>
                    phone:
                </td>
                <td>
                <input type="text" name="phone" id="phone" value=""><br>
                </td>  
                </tr>

                <tr>
                <td>
                    email id:
                </td>
                <td>
                <input type="email" name="email" id="email" onblur="checkemailvalailable()">
                     
                <p id="3"></p>
                     
                </td>
                </tr>

                <tr>
                    <td>
                        password:
                    </td>
                    <td>
                        <input type="password" name="password" id="password" value=""><br>
                    </td>
                </tr>
                
                <tr>
                <td>
                 confirm password:
                </td>
                <td>                      
                <input type="password" name="conpassword" id="conpassword" value=""><br>   
                </td>
                </tr>

                <tr>
                <td>                      
                <input type="submit" value="sign up">                        
                </td>
                </tr>                                   
               
                <tr>               
                    <td>
                    <a href="login.php"><input type="button" value="sign in"></a>
                    </td>
                </tr>
            </table>            
        </fieldset>  
       </form>
      
</body>
</html>
