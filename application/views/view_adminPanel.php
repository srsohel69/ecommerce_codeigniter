<html>
    <head>
        <style>
             body {                 
                background-color: #C8D956;
            } 
            .button {
                display: inline-block;
                border-radius: 4px;
                background-color: #f4511e;
                border: none;
                color: #FFFFFF;
                text-align: center;
                font-size: 20px;
                padding: 10px;
                width: 125px;
                transition: all 0.5s;
                cursor: pointer;
                margin: 5px;
          }

          .button span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
          }

          .button span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
          }

          .button:hover span {
                padding-right: 25px;
          }

          .button:hover span:after {
                opacity: 1;
                right: 0;
          }
        </style>
    </head>
	
    <body>

	<h1 align="center">Welcome , Administrator </h1> 

	<hr>
		
	<form action="" method="post" id="cform">           
	</form>
	</br>
	<form action="/atp3project/adminPanel/logout" method="post" id="logoutform">           
	</form>
        <button class="button" style="vertical-align:middle" form="logoutform" name="logout" value="Submit"><span>Log out </span></button>
        <button class="button" style="vertical-align:middle" form="cform" name="Change" value="Submit"><span>Change Password </span></button>
        <div class="optionItem" align="center">
            <label><h3>&nbsp &nbsp &nbsp &nbsp &nbsp Item : </h3></label><br>
            <ul>
                <list><a href="/atp3project/adminPanel/showItem">&#8658;Show Item<a></list><br>
                <list><a href="/atp3project/adminPanel/addItem">&#8658;Add Item<a></list><br>
                <list><a href="/atp3project/adminPanel/deleteItem">&#8658;Delete Item</a></list><br>
                <list><a href="/atp3project/adminPanel/updateItem">&#8658;Update Item</a></list><br>
                <list><a href="/atp3project/adminPanel/sellingProducts">&#8658;Selling Products</a></list><br>
                <list><a href="/atp3project/adminPanel/showReport">&#8658;Reports</a></list><br>
            </ul>
	</div>
	</br>
        
	<div class="optionUser"align="center">
            <label><h3 align="center">&nbsp &nbsp &nbsp &nbsp &nbsp User : </h3></label><br>
            <ul>
		<list><a href="/atp3project/adminPanel/deleteUser">&#8658;Show Users</a></list>
            </ul>
	</div>
		
	</body>
</html>
