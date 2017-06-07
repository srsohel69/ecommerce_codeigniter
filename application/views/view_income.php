<html>
    <head></head>
    <body>
        <h1 align="center">View Reports</h1><br><br>

        <form method="post" action="/atp3project/adminPanel">
            <input type="submit" name="buttonSubmit" align="right" value="Go Back">
        </form>
        
        <br<br><br>
        <table border="10" align="center" style="width: 30%">
            <tr>
                <th colspan="2">Reports</th>

            </tr>
            <tr>
                {proInfo}<td>Most Selling Item </td><td>{P_id}</td>           
            </tr>
            
            <tr>
                <td>Most Selling Item's Category </td><td>{P_category}</td>{/proInfo}            
            </tr>

            <tr>
                <td>Most Selling Item's Quantity </td><td>{highSell}</td>            
            </tr>
            
            <tr>
                <td>Total income is </td><td><strong>{tIncome}</strong></td>  
            </tr>
        </table>

    </body>
</html>