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
                color: #B5623F;
            }

            a:active {
                text-decoration: none;
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
                padding: 7px 15px;
                font-size: 15px;
                cursor: pointer;
                text-align: center;
                text-decoration: none;
                outline: none;
                color: #fff;
                background-color: #3e8e41;
                border: none;
                border-radius: 15px;
                box-shadow: 0 9px #999;
            }

            .button:hover {background-color: #3e8e41}

            .button:active {
                background-color: #CA5555;
                box-shadow: 0 5px #666;
                transform: translateY(4px);
            }
            .productInfo{
                position: absolute;
                top: 200px;
                left:600px
            }
            .productPic{
                position: absolute;
                top: 200px;
                left:300px
            }
        </style>
    </head>
    
    <body>
        <h1 class="nameWeb"><a href="/atp3project/home">DorDam</a></h1>
        <br><br><br><h2 align="center">Greetings ^_^ ^_^ </h2>

        <br><br><hr>
        <form action="/atp3project/home" method="post">
        <table class="productInfo" border="0">
            <tr><td align="center">
               Thank you for buying that product. <br>We will contact with you via Your Mobile Number .<br>
               This Product will be delivered within 7 working days.</td>
            </tr><td>
                <input align="center" type="submit" class="button" name="confirm" value ="Go to home" />
            <br></td></tr>
            
        </table>
        </form>>    


    </body>
    
</html>