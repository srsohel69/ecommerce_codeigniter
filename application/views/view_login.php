<html>
    <head> 
        <style>
            body {                 
                background-color: #B0D1B5;
            }
            
            .textbox{
                height: 30px;               
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                font-size: 20px;
                font-style: normal;
                font-weight: bold;              
            }
            
            .button {
                display: inline-block;
                border-radius: 2px;
                background-color: #D6D963;
                color: #010101;
                text-align: center;
                font-size: 20px;
                border-radius: 12px;
                font-family: Georgia;
                padding: 50x;
                transition: all 0.5s;
                cursor: pointer;
                margin: 5px;
            }         

            .button:hover  {
                content: '\00bb';
                padding-right: 35px;
                background: #3cfa58;
                background-image: -webkit-linear-gradient(top, #3cfa58, #e00000);
                background-image: -moz-linear-gradient(top, #3cfa58, #e00000);
                background-image: -ms-linear-gradient(top, #3cfa58, #e00000);
                background-image: -o-linear-gradient(top, #3cfa58, #e00000);
                background-image: linear-gradient(to bottom, #3cfa58, #e00000);
                text-decoration: none;
            }

            .button:hover :after {
                opacity: 1;
                right: 0;
            }
            .nameWeb {
                position: absolute;
                top: 40px;
                right: 1200px;
                background: #B0D1B5;
                -webkit-transition: width 2s, height 2s, -webkit-transform 2s; 
                transition: width 2s, height 2s, transform 2s;
            }

            .nameWeb:hover {      
                -webkit-transform: rotateY(180deg); /* Safari */
                transform: rotateY(180deg);
            }

            a:link {
                text-decoration: none;
                font-weight: bold;   
            }

            a:visited {
                text-decoration: none;
                color: #1B1D19;
            }

            a:hover {
                text-decoration: none;
            }

            a:active {
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <h1 class="nameWeb"><a href="/atp3project/home">DorDam</a></h1>
        </br></br></br></br>
        <h1 align="center">Sign in</h1>
        <h3 align="center">Use your Account</h3>
        </br></br>
        <form  action="/atp3project/Login_signUp/check" method="post">	
            <table border="0" style="width:25%" align ="Center">
                <tr>
                    
                    <td><input class="textbox" name="usernameText" type="text" style="width:100%" placeholder="User Name"/></td>
                </tr>
                <tr>
                    
                    <td><input class="textbox" name="passwordText" type="password" style="width:100%" placeholder="Password"/></td>
                </tr>
                <tr>
                    <td colspan="2" align ="right">
                        <input class="button" style="vertical-align:middle" type="submit" name ="submit" value="Log in"/>
                </tr>

            </table>
        </form>	
        </br>
        <form action="/atp3project/Login_signUp/signUp">
            <h4 align="center">No Account ? Then Press Sign Up Button for creating a account</h4>
            <table align="center">
                    <tr>
                    <td><input type="submit" class="button" align="center" name ="SignBu" value="Sign Up"/></td>
                    </tr>
            </table>	
        </form>

        <h5 align ="center" style="color: green;font-style: oblique;">{message}</h5>

    </body>   
</html>