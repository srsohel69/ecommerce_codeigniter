<html lang="en">
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
        #ProfileBu{
            position: absolute;
            top: 20px;
            right:50px;
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
            border: 5px solid black;
            
            border-collapse: collapse;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        th, td {
            padding: 10px;
        }
        tr:hover{background-color:#f5f5f5}
        tr:nth-child(even){background-color: #9CA4A5}
        tr:nth-child(even):hover{background-color:#f5f5f5}
        .button1 {
            border-top: 1px solid #96d1f8;
            background: #e38c3f;
            background: -webkit-gradient(linear, left top, left bottom, from(#375b73), to(#e38c3f));
            background: -webkit-linear-gradient(top, #375b73, #e38c3f);
            background: -moz-linear-gradient(top, #375b73, #e38c3f);
            background: -ms-linear-gradient(top, #375b73, #e38c3f);
            background: -o-linear-gradient(top, #375b73, #e38c3f);
            padding: 6px 12px;
            -webkit-border-radius: 33px;
            -moz-border-radius: 33px;
            border-radius: 33px;
            -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
            -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
            box-shadow: rgba(0,0,0,1) 0 1px 0;
            text-shadow: rgba(0,0,0,.4) 0 1px 0;
            color: #260521;
            font-size: 12px;
            font-family: Georgia, Serif;
            text-decoration: none;
            vertical-align: middle;
            }
         .button1:hover {
            border-top-color: #28597a;
            background: #28597a;
            color: #e61c0e;
            }
         .button1:active {
            border-top-color: #1b435e;
            background: #1b435e;
            }
    </style>
</head>
<body>
    <h1 class="nameWeb"><a href="/atp3project/home">DorDam</a></h1>
	<h3 align="center">Shopping History</h3><br><br>

	<table  align="center">
		<tr align="center">
                    <th>Product Section</th>
                    <th>Product ID</th>
                    <th>Product Category</th>
                    <th>Product Brand</th>
                    <th>Product Picture</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Product Buying Date</th>
	
		</tr>
                {all_product}
		<tr align="left">
                    <td>{Item_Section}</td>
                    <td>{Item_ID}</td>
                    <td>{Item_Category}</td>
                    <td>{Item_Brand}</td>
                    <td><img src="{Item_Picture}" alt="" style="width:100px; height:100px;"></td>
                    <td>{Quantity}</td>
                    <td>{total_price}</td>   
                    <td>{Date}</td>
		
		</tr>
                {/all_product}
                <tr>
                    <td colspan="6">Total Cost</td>
                    <td>{final_price}</td>
                </tr>
               
	</table>

        <form  method="post" action="/atp3project/Login_signUp/myProfile">
            <input type="submit" class="button1" id ="ProfileBu" name="buttonSubmit" value="Go to Profile">
        </form>

</body>
</html>


