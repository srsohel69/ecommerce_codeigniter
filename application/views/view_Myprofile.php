<html>
    <head>
        <style>
            body {                 
                background-color: #B0D1B5;
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
                -webkit-transform: rotate(-1800deg);
                transform: rotate(-1800deg);
            }
            table, th, td {
                    border: 0px solid black;
                    border-collapse: collapse;
            }
            th, td {
                    padding: 20px;
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
                padding-right: 35px;
                background: #3cfa58;
                background-image: -webkit-linear-gradient(top, #C4DB51, #e00000);
                background-image: -moz-linear-gradient(top, #C4DB51, #e00000);
                background-image: -ms-linear-gradient(top, #C4DB51, #e00000);
                background-image: -o-linear-gradient(top, #C4DB51, #e00000);
                background-image: linear-gradient(to bottom, #C4DB51, #e00000);
                text-decoration: none;
            }

            .button:hover :after {
                opacity: 1;
                right: 0;
            }
            
            .button1 {
                display: inline-block;
                border-radius: 2px;
                background-color: #D6D963;
                color: #010101;
                text-align: center;
                font-size: 15px;
                border-radius: 12px;
                font-family: Georgia;
                padding:30x;
                transition: all 0.5s;
                cursor: pointer;
                margin: 5px;
            }         

            .button1:hover  {
                padding-left: 35px;
                background: #3cfa58;
                background-image: -webkit-linear-gradient(top, #C4DB51, #3cfa58);
                background-image: -moz-linear-gradient(top, #C4DB51, #3cfa58);
                background-image: -ms-linear-gradient(top, #C4DB51, #3cfa58);
                background-image: -o-linear-gradient(top, #C4DB51, #3cfa58);
                background-image: linear-gradient(to bottom, #C4DB51 ,#3cfa58);
                text-decoration: none;
            }

            .button1:hover :after {
                opacity: 1;
                right: 0;
            }
        </style>
    </head>

    <body>
        <h1 class="nameWeb"><a href="/atp3project/home">DorDam</a></h1>
        <br><br><br>
        <h2 align="center">User Profile</h2>
        <hr>
        
        {info}
        <table align="center">

            <tr>
                <td><strong>Your Name :</strong></td>
                <td><label>{User_Name}</label></td>
                <td><a href="/atp3project/login_signUp/editProfile?place=User_Name">Edit</a></td>
            </tr>
            <tr>
                <td><strong>Your User ID :</strong></td>
                <td><label>{User_id}</label></td>
                <td>*User ID can not be Changed</td>
            </tr>
            <tr>
                <td><strong>Your E-mail :</strong></td>
                <td><label>{User_email}</label></td>
                <td>*Email can not be Changed</td>
            </tr>
            <tr>
                <td><strong>Your Gender :</strong></td>
                <td><label>{User_Gender}</label></td>
                
            </tr>
            <tr>
                <td><strong>Your Mobile no. :</strong></td>
                <td><label>{User_Mobile}</label></td>
                <td><a href="/atp3project/login_signUp/editProfile?place=User_Mobile">Edit</a></td>
            </tr>
            {/info}
            <tr>

                <td colspan="2"><form action="/atp3project/home" method="post">
                        <input class="button" type="submit" name="home" value ="Go Home Page" />
                </form></td>
                                <td><form action="" method="post">
                        <input class="button1" type="submit" name="chPass" value ="Change Pasword" />
                </form></td>
            </tr>
        </table>
    </body>
</html>