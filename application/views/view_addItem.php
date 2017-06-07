<html>
	<head>
	</head>

	<body>
            <h1 align="center">DorDam</h1>
            <hr>
	<form action="/atp3project/adminPanel/addItem" method="post">	
            <label>Catagory :</label><br>
		<input name="catagoryRadio" type="radio" value="men"/>men </br>
		<input name="catagoryRadio" type="radio" Value="women"/>women </br>
		<input name="catagoryRadio" type="radio" Value="kids"/>kids </br>
		<input name="catagoryRadio" type="radio" Value="computer"/>computer </br>
		<input name="catagoryRadio" type="radio" Value="computer_accessory"/>computer accessory </br>
		<input name="catagoryRadio" type="radio" Value="mobile"/>mobile  </br>
		<input name="catagoryRadio" type="radio" Value="electronics"/>electronics </br>
		<input name="catagoryRadio" type="radio" Value="others"/>others </br>
	
	<br>
            <table>
		<tr>
                    <td><label>Product Code :</label></td>
                    <td><input type="text" name="pIdText"></br></td>
		</tr>	
		<tr>
                    <td><label>Product Section :</label></td>
                    <td><input type="text" name="pCatText"></br></td>
		</tr>
		<tr>
                    <td><label>Product brand :</label></td>
                    <td><input type="text" name="pBrandText"></td>
		</tr>
		<tr>		
                    <td><label>Product Price :</label></td>
                    <td><input type="text" name="pPriceText"></td>
		</tr>
		<tr>		
                    <td><label>Product Quantity :</label></td>
                    <td><input type="text" name="pQuantiText"></td>
		</tr>
                <tr>		
                    <td><label>Product Picture :</label></td>
                    <td><input type="text" name="pPictureText" value="/atp3project/Product Pic/"></td>
		</tr>	
		</table>	
		<input type="submit" name ="add" value="Add Item"/><br><br><br>

	</form>	
	<form action="/atp3project/adminPanel" method="post">
		<input type="submit" name ="adminHome" value="Go to Home Page"/>
	</form>
            </br>
        {message}
		
	</body>
</html>