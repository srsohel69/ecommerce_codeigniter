<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body>
	<h1 align="center">Item List</h1><br><br>
	<!--<a href="/ci226/categories/add">Add New</a>-->
        <form method="post" action="/atp3project/adminPanel/showItem">
            <input type="submit" name="buttonSubmit" align="right" value="Go Back">
        </form>
	<table border="10" align="center">
		<tr>
                        <th style="width: 19%">Product ID</th>
			<th style="width: 19%">Catagory</th>
                        <th style="width: 19%">Brand</th>
                        <th style="width: 19%">Price</th>
                        <th style="width: 18%">Quantity</th>
            
			
		</tr>
                {cats}
		<tr>
			<td>{P_id}</td>
			<td>{P_catagory}</td>
                        <td>{P_brand}</td>
                        <td>{P_price}</td>
                        <td>{P_quantity}</td>             
                                   
                        <td><a href="/atp3project/showItem/catagoryDelete/{P_id}">Delete</a></td>
                        
                        
		</tr>
		{/cats}
	</table>
</body>
</html>


