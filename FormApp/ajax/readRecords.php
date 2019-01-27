<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>No.</th>

							<th>Firstname</th>
							<th>Lastname</th>
							<th>Bithdate</th>
							<th>Subject</th>
							<th>Country</th>
							<th>Phone</th>
							<th>E-mail</th>
			
							<th>Update</th>
							<th>Delete</th>
						</tr>';

	$query = "SELECT * FROM users";

	if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }

    // if query results contains rows then featch those rows 
    if(mysql_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysql_fetch_assoc($result))
    	{
    		$data .= '<tr>
				<td>'.$number.'</td>
				<td>'.$row['firstname'].'</td>
				<td>'.$row['lastname'].'</td>
				<td>'.$row['bithdate'].'</td>
				<td>'.$row['subject'].'</td>
				<td>'.$row['country'].'</td>
				<td>'.$row['phone'].'</td>
				<td>'.$row['email'].'</td>
				<td>
					<button onclick="GetUserDetails('.$row['id'].')" class="btn btn-warning">Update</button>
				</td>
				<td>
					<button onclick="DeleteUser('.$row['id'].')" class="btn btn-danger">Delete</button>
				</td>
    		</tr>';
    		$number++;
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6">Records now found !</td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>