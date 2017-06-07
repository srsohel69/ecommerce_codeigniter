<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body>
	<h1 align="center">Item List</h1><br><br>

        <form method="post" action="/atp3project/adminPanel">
            <input type="submit" name="buttonSubmit" align="right" value="Go Back">
        </form>
	<table border="10" align="center">
            <tr>
                <th style="width: 23%">Product ID</th>
                <th style="width: 23%">Category</th>
                <th style="width: 23%">Selling Quantity</th>
            </tr>
	{info}
            <tr>
            <td>{P_id}</td>
            <td>{P_category}</td>
            <td>{P_selling_quantity}</td>            
            </tr>
	{/info}
	</table>
</body>
</html>


