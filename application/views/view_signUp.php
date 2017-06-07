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
            #submitB {
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

            #submitB:hover  {
                padding-right: 35px;
                padding-left: 35px;
                background: #3cfa58;
                background-image: -webkit-linear-gradient(top, #e00000,#3cfa58);
                background-image: -moz-linear-gradient(top, #e00000,#3cfa58);
                background-image: -ms-linear-gradient(top, #e00000,#3cfa580);
                background-image: -o-linear-gradient(top, #e00000,#3cfa58);
                background-image: linear-gradient(to bottom, #e00000,#3cfa58);
                text-decoration: none;
            }
            table, th, td {
                    border: 0px solid black;
                    border-collapse: collapse;
            }
            th, td {
                    padding: 10px;
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
                -webkit-transform: rotateX(360deg);
                transform: rotateX(360deg);
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
        <form action="/atp3project/Login_signUp/CheckSign" method="post">

        <h1 align ="center">Creat your DorDam Account</h1> </br>

        <table border="1" style="width:35%" align ="Center">


          <tr>
                <td align ="center"><input class="textbox" name="nameText" type="text"  placeholder="Name"/>
                </td> 		
          </tr>
          <tr>
                <td align ="center"><input class="textbox" name="UserIDText" type="text"  placeholder="User Name"/>
                </td>

          </tr>

          <tr>
              <td align ="center"><input class="textbox" name="EmailText" type="text" placeholder="Email"/> 
                </td>

          </tr>

            <tr>
                <td align ="center"><input class="textbox" name="PassText" type="password"  placeholder="Password"/>
                    </td>

            </tr>

            <tr>
                <td align ="center"><input class="textbox" name="RePassText" type="password"   placeholder="Re-Enter Password"/>
                    </td>

            </tr>
            
             <tr>
              <td align ="center"><input class="textbox" name="MobileText" type="text" placeholder="Mobile Number"/> 
                </td>
          </tr>

          <tr>
                <td align ="center"><h4>Gender :</h4>
                <input name="gender" type="radio" value="m" />Male 
                <input name="gender" type="radio" value="f" />Female
                <input name="gender" type="radio" value="o" />Other
                <br>

                </td>

          </tr>
      
          <tr>
                <td colspan="2"> <br> </td>
          </tr> 

          <tr>
                <td colspan="2" align ="center">
                        <input type="submit" id="submitB" name="submit" value="Sign up"/>
                </td>
          </tr>   

    </table>
    </form>
     <h5 align ="center" style="color: black;font-style: oblique;">{message}</h5>    
    </body>
</html>
