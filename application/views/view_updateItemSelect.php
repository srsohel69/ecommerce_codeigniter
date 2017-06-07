<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body>
	<h1 align="center">Item List</h1><br><br>
        <form method="post" action="/atp3project/adminPanel">
            <input type="submit" name="buttonSubmit" align="right" value="Go Home Page">
        </form>
	<table border="10" align="center">
            <tr>
                <th style="width: 15%">Product ID</th>
                <th style="width: 15%">Catagory</th>
                <th style="width: 15%">Brand</th>
                <th style="width: 15%">Price</th>
                <th style="width: 15%">Quantity</th>
            </tr>
	{cats}
            <tr>
                <td>{P_id}</td>
                <td>{P_catagory}</td>
                <td>{P_brand}</td>
                <td>{P_price}</td>
                <td>{P_quantity}</td>             
                <td><a href="/atp3project/showItem/catagoryQuantiUpdate/{P_id}">Edit Quantity</a></td>
                <td><a href="/atp3project/showItem/catagoryUpdate/{P_id}">Edit Price</a></td>

            </tr>
	{/cats}
	</table>
</body>
</html>


