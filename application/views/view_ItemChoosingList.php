<html>
    <head>       
    </head>
    
    <body>
        <h1 align="center">Admin Panel</h1>
        <br><br>
        <h3>Which Catagory's item do you want to see ?</h3>
        <br>
        <div class="optionItem">
            <ul>
                <li><a href="http://localhost/atp3project/showItem/catagoryShow?cata=men">Men</a></li>
                <li><a href="http://localhost/atp3project/showItem/catagoryShow?cata=women">Women</a></li>
                <li><a href="http://localhost/atp3project/showItem/catagoryShow?cata=kids">Kids</a></li>
                <li><a href="http://localhost/atp3project/showItem/catagoryShow?cata=computer">Computer</a></li>
                <li><a href="http://localhost/atp3project/showItem/catagoryShow?cata=computer_accessory">Computer Accessory</a></li>
                <li><a href="http://localhost/atp3project/showItem/catagoryShow?cata=mobile">Mobile & its Accessory</a></li>
                <li><a href="http://localhost/atp3project/showItem/catagoryShow?cata=electronics">Electronics</a></li>
                <li><a href="http://localhost/atp3project/showItem/catagoryShow?cata=others">Others</a></li>
            </ul>
	</div>
        <form method="post" action="/atp3project/adminPanel/index">
            <input type="submit" name="buttonSubmit" align="right" value="Go Back">
        </form>
    </body>
</html>