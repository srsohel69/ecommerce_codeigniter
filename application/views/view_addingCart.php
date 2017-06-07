<HTML>
    <head>
        <STYLE>
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
            .textbox{
                height: 30px;               
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                font-size: 20px;
                font-style: normal;
                font-weight: bold;              
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
    <br>
        <h1 class="nameWeb"><a href="/atp3project/home">DorDam</a></h1>
        <h2 align="center">Adding Cart</h2>

        <br><br><hr>
        {details}
        <form action="/atp3project/cart/measuring_Quantity" method="post">
            <table class="productInfo" align="center">
                <tr>
                    <td><strong>Item {P_id} has been added to the cart.<br><br><br>
                    It\'s price is {P_price} <br></strong></td>
                </tr>
                <tr>
                     <td><input class="textbox" type="text" name="quantityText" style="width:35%" placeholder="Quantity"/></td>
                </tr>
                <tr>	
                    <td>
                            <input type="submit" class="button" name="Proc" value ="Proceed" />
                    <br></td>
                </tr>
            </table>
        </form>
        <table class="productPic" border="0" >
                <td><img src="{P_picture}" alt="" style="width:200px; height:auto;"></td>
        </table>
        {/details}
         <h5 align ="center" style="color: green;font-style: oblique;">{message}</h5>
    </body>
</HTML>