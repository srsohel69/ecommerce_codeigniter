<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body>
	<h1 align="center">User List</h1><br><br>

        <form method="post" action="/atp3project/adminPanel">
            <input type="submit" name="buttonSubmit" align="right" value="Go Back">
        </form>
        <table border="10" style="width: 75%" align="center">
            <tr>
                <th>User Name</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Gender</th>
            </tr>
	{UserInfo}
            <tr>
            <td>{User_id}</td>
            <td>{User_Name}</td>
            <td>{User_email}</td>
            <td>{User_Mobile}</td>
            <td>{User_Gender}</td>             
            <td><a href="/atp3project/adminPanel/userDeleteConfirmation/{User_id}">Delete</a></td>   
            </tr>
	{/UserInfo}
	</table>
</body>
</html>


