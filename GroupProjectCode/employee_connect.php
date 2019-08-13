    <?php
    $emp_first = filter_input(INPUT_POST, 'emp_first');
	$emp_last = filter_input(INPUT_POST, 'emp_last');
	$emp_email = filter_input(INPUT_POST, 'emp_email');
	$emp_street = filter_input(INPUT_POST, 'emp_street');
	$emp_city = filter_input(INPUT_POST, 'emp_city');
	$emp_state = filter_input(INPUT_POST, 'emp_state');
	$emp_zip = filter_input(INPUT_POST, 'emp_zip');
	$emp_id = filter_input(INPUT_POST, 'emp_id');
	$emp_pwd = filter_input(INPUT_POST, 'emp_pwd');
    if (!empty($emp_first)) {
    if (!empty($emp_last)) {	
	if (!empty($emp_email)) {
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
    $sql = "INSERT INTO employee (emp_first, emp_last, emp_email, emp_street, emp_city, emp_state, emp_zip, emp_id, emp_pwd)
    values ('$emp_first', '$emp_last', '$emp_email', '$emp_street', '$emp_city', '$emp_state', '$emp_zip', '$emp_id', '$emp_pwd')";
    if ($conn->query($sql)){
    $message = "Employee Entered";
	echo "<script type='text/javascript'>alert('$message');</script>";
	header("Location: employee_form.html"); 
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
	echo "Please enter Employee Name";
	}
	}
	else {
	echo "Please enter Employee Name";
	}
    }
    else{
    echo "Please enter Employee Email";
    }
    ?>