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
        border: 2px solid #D4BB77;
    }

    .menu li {
        display: block;
        color: #940808;
        padding: 15px 25px;
        background-color: #B1E86A;

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
        right: 230px;

    }
    #historyBu{
        position: absolute;
        top: 20px;
        right: 50px;
    }
    #cartBu{
        position: absolute;
        top: 65px;
        right: 100px;
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
    .recent{
        position: absolute;
        top: 125px;
        right: 775px;
    }

    .nameWeb{
        position: absolute;
        top: 40px;
        right: 1200px;
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

    table, th, td {
        border: 0px solid black;
        border-collapse: collapse;
    }
        th, td {
        padding: 10px;
    }
    .nameWeb {
       
        background: #B0D1B5;
        -webkit-transition: width 2s, height 2s, -webkit-transform 2s; 
        transition: width 2s, height 2s, transform 2s;
}

    .nameWeb:hover {
       
        -webkit-transform: rotate(180deg); /* Safari */
        transform: rotate(180deg);
    }
    
    .spanMen{
        position: absolute;
        padding: 15px;
        top: 150px;
        left: 400px;
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

   <form action="/atp3project/cart/buyingHistory">
            <input class="button" type="submit"  id ="historyBu" value="Shopping History"/>
    </form>

    <form action="/atp3project/Login_signUp/myProfile">
            <input class="button" type="submit" id ="ProfileBu" value="My Profile"/>
    </form>
    
    <form action="/atp3project/cart/showCart">
            <input class="button" type="submit" id ="cartBu" value="Show Cart"/>
    </form>

    </br></br></br></br></br></br>

    <hr>

    <ul class="menu">
      <li><a href="/atp3project/home" >Home</a></li>
      <li><a href="/atp3project/home/men" style="background-color:red">Men</a>
      </li>
      <li><a href="/atp3project/home/women">Women</a></li>
      <li><a href="/atp3project/home/kids">Kids</a></li>
      <li><a href="/atp3project/home/computer">Computer</a></li>
      <li><a href="/atp3project/home/cAccess">Computer Accessory</a></li>
      <li><a href="/atp3project/home/mobile">Mobile & its Accessory</a></li>
      <li><a href="/atp3project/home/electronics">Electronics</a></li>
      <li><a href="/atp3project/home/others">Others</a></li>

    </ul>
    <div class="spanMen">
        {Items_pictureS}
        <span><a href="http://localhost/atp3project/product_detail/GetshowDetails?catagory=men&id={P_id}">
            <img src="{P_picture}" alt="" style="width:200px; height:auto;"> </a>
            </span> &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp 

        {/Items_pictureS}
    </div>

    </body>
</html>