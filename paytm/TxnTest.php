<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
    session_start();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Donation Details.</title>
<meta name="GENERATOR" content="Evrsoft First Page">
</head>
<style>
    body {
        padding: 0px;
        margin: 0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;

    }
    
    table {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border-collapse: collapse;
        width: 800px;
        height: 200px;
        border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    tr {
        transition: all .2s ease-in;
        cursor: pointer;
    }
    
    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
	td input{
		height: 30px;
    width: 50%;
    border: 1px solid lightgrey;
    border-radius: 2px;
    outline: none;
    padding: 0 15px;
    font-size: 17px;
    font-family: 'Poppins', sans-serif;
    transition: all 0.3s ease;
	}
    td .button input{
        background-color: #FFA500;
        width: 150px;
        color: #fff;
        border-radius: 4px;
        border: none;

    }
    td .button input:hover{
        color:#FFA500;
        background-color: transparent;
        border: 2px solid #FFA500;
    }
    #header {
        background-color: #f9a825;
        color: #fff;
    }
    
    h1 {
        font-weight: 600;
        text-align: center;
        background-color: #f9a825;
        color: #fff;
        padding: 13px 0px;
		margin-top:0;
    }
    
    tr:hover {
        background-color: #f5f5f5;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    @media only screen and (max-width: 768px) {
        table {
            width: 90%;
        }
    }
</style>

<body>
	<h1>Payment-Details</h1>
	<pre>
	</pre>
	<form method="post" action="pgRedirect.php">
		<table border="1">
			<tbody>
				<tr id="header">
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>Transaction-ID</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">
					</td>
				</tr>
				<tr>
                <td>2</td>
					<td><label>Amount</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="<?php echo $_SESSION["message"];?>"
					</td>
                    
				</tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                    <div class="button">
					<input value="CheckOut" type="submit" class="button"	onclick="">
                    </div>
                    </td>
                </tr>
			
			</tbody>
		</table>
	</form>
</body>
</html>