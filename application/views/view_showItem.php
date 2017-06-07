<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body>
	<h1 align="center">Item List</h1><br><br>

        <form method="post" action="/atp3project/adminPanel/showItem">
            <input type="submit" name="buttonSubmit" align="right" value="Go Back">
        </form>
	<table border="10" align="center">
            <tr>
                <th style="width: 23%">Product ID</th>
                <th style="width: 23%">Catagory</th>
                <th style="width: 23%">Brand</th>
                <th style="width: 23%">Price</th>
                <th style="width: 23%">Quantity</th>
            </tr>
	{cats}
            <tr>
            <td>{P_id}</td>
            <td>{P_catagory}</td>
            <td>{P_brand}</td>
            <td>{P_price}</td>
            <td>{P_quantity}</td>             

            </tr>
	{/cats}
	</table>
</body>
</html>


