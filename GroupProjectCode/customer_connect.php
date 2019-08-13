    <?php
    $cust_first = filter_input(INPUT_POST, 'cust_first');
	$cust_last = filter_input(INPUT_POST, 'cust_last');
	$cust_email = filter_input(INPUT_POST, 'cust_email');
	$cust_street = filter_input(INPUT_POST, 'cust_street');
	$cust_city = filter_input(INPUT_POST, 'cust_city');
	$cust_state = filter_input(INPUT_POST, 'cust_state');
	$cust_zip = filter_input(INPUT_POST, 'cust_zip');
	$cust_id = filter_input(INPUT_POST, 'cust_id');
	$cust_pwd = filter_input(INPUT_POST, 'cust_pwd');
    if (!empty($cust_first)) {
    if (!empty($cust_last)) {	
	if (!empty($cust_email)) {
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "group_project";
    // Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    }
    else{
    $sql = "INSERT INTO customer (cust_first, cust_last, cust_email, cust_street, cust_city, cust_state, cust_zip, cust_id, cust_pwd)
    values ('$cust_first', '$cust_last', '$cust_email', '$cust_street', '$cust_city', '$cust_state', '$cust_zip', '$cust_id', '$cust_pwd')";
    if ($conn->query($sql)){
    $message = "Customer Entered";
	echo "<script type='text/javascript'>alert('$message');</script>";
	header("Location: customer_form.html"); 
	exit();
    }
    else{
    echo "Error: ". $sql ."
    ". $conn->error;
    }
    $conn->close();

    }
    }
	else {
	echo "Please enter Customer Name";
	}
	}
	else {
	echo "Please enter Customer Name";
	}
    }
    else{
    echo "Please enter Customer Email";
    }
    ?>