<html>
    <head>
    <style>
    body {                 
        background-color: #B0D1B5;
    }     
    *{
        padding: 0;
        margin: 0;
     }
    .menu {
        position: absolute;
        top:125px;
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #f1f1f1;
        border: 3px solid #73AD21;
    }

    .menu li {
        display: block;
        color: #940808;
        padding: 15px 25px;
        background-color: lightblue;

    }
    .menu li  ul{
        display: block;
        position: absolute;
        top: 0;
        left: 100px;
    }
    .menu li ul{
        display: block;
        position: absolute;
        top: 50px;
        left: 200px;
        width: 150px;
        border: 3px solid #73AD21;
    }
    .menu li :hover {
        background-color: #555;
        color: white;
    }

    .menu li:hover ul{
        display: block;
        background-color: #555;
        color: white;
    }
    #searchText{		
        position: absolute;
        top: 40px;
        right: 625px;
        width: 300px;
        height: 30px;
        background-color: #cccccc;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        font-style: oblique;
        font-weight: bold;
    }

    #searchButton{
        position: absolute;
        top: 38px;
        right: 525px;

    }

    #LogInBu{
        position: absolute;
        top: 20px;
        right: 300px;

    }
    #LogOutBu{
        position: absolute;
        top: 20px;
        right: 175px;

    }
    #SignUpBu{
        position: absolute;
        top: 20px;
        right: 50px;

    }
    #ProfileBu{
        position: absolute;
        top: 65px;
        right: 230px;
    }
    
    #AboutBu{
        position: absolute;
        top: 65px;
        right: 100px;
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
        background-color: #4CAF50;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
    }

    .button:hover {background-color: #CA5555}

    .button:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }

    .product{
        position: absolute;
        top: 200px;
        right: 300px;

    }
    .productPic{
        position: absolute;
        top: 200px;
        right: 600px;
    }

    table, th, td {
        border: 0px solid black;
        border-collapse: collapse;
    }
        th, td {
        padding: 20px;
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

    <input type="text" id ="searchText" placeholder="Search.."/>
    <input class="button" type="button" id ="searchButton" value="search"/>

    <!--<form action="/atp3project/Login_signUp/logIn">
            <input class="button" type="submit" id ="LogInBu" value="Log In"/>
    </form>-->

    <form action="/atp3project/Login_signUp/logOut">
            <input class="button" type="submit" id ="LogOutBu" value="Log Out" />
    </form>

    <!--<form action="/atp3project/Login_signUp/signUp">
            <input class="button" type="submit"  id ="SignUpBu" value="Sign Up"/>
    </form>-->

    <form action="/atp3project/Login_signUp/myProfile">
            <input class="button" type="submit" id ="ProfileBu" value="My Profile"/>
    </form>
    
    <form action="">
            <input class="button" type="submit" id ="AboutBu" value="About Us"/>
    </form>

    </br></br></br></br></br></br>

    <hr>

    <ul class="menu">
      <li><a href="/atp3project/home">Home</a></li>
      <li><a href="/atp3project/home/men">Men</a></li>
      <li><a href="/atp3project/home/women">Women</a></li>
      <li><a href="/atp3project/home/kids">Kids</a></li>
      <li><a href="/atp3project/home/computer">Computer</a></li>
      <li><a href="/atp3project/home/cAccess">Computer Accessory</a></li>
      <li><a href="/atp3project/home/mobile">Mobile & its Accessory</a></li>
      <li><a href="/atp3project/home/electronics">Electronics</a></li>
      <li><a href="/atp3project/home/others">Others</a></li>

    </ul>
    {details}
    <table class="product" border="1" style="width:30%" align ="Center">
        <tr>
            <td><strong>Product ID :</strong></td>
            <td><label>{P_id}</label></td>

        </tr>
        <tr>
            <td><strong>Product Catagory :</strong></td>
            <td><label>{P_catagory}</label></td>
        </tr>
        <tr>
            <td><strong>Product Brand :</strong></td>
            <td><label>{P_brand}</label></td>
        </tr>
        <tr>
            <td><strong>Product Price :</strong></td>
            <td><label>{P_price}</label></td>
        </tr>
        <tr>
            <td><strong>Product Quantity :</strong></td>
            <td><label>{P_quantity}</label></td>
        </tr>
        <tr>
            <td><form action="/atp3project/home" method="post">
                    <input class="button1"type="submit" name="home" value ="Go Home Page" />
            </form></td>

            <td><form action="/atp3project/cart/callingCart" method="post">
                    <input class="button1" type="submit" name="cart" value ="Add to CART" />
            </form></td>							
        </tr>
        </table>
        <table class="productPic" border="1" style="width:30%" >
                <td><img src="{P_picture}" alt="" style="width:200px; height:auto;"></td>
    </table>{/details}
    
    </body>
    
</html>