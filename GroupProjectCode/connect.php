    <?php
    $first_name = filter_input(INPUT_POST, 'first_name');
    $last_name = filter_input(INPUT_POST, 'last_name');
	$user_email = filter_input(INPUT_POST, 'user_email');
	$user_id = filter_input(INPUT_POST, 'user_id');
	$user_pwd = filter_input(INPUT_POST, 'user_pwd');
	
    if (!empty($first_name)) {
    if (!empty($last_name)) {
	if (!empty($user_email)) {	
	if (!empty($user_id)) {
	if (!empty($user_pwd)) {
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
    $sql = "INSERT INTO users (first_name, last_name, user_email, user_id, user_pwd)
    values ('$first_name','$last_name', '$user_email', '$user_id', '$user_pwd')";
    if ($conn->query($sql)){
    header("Location: index.html"); 
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
	echo "Please enter a password";
	}
	}
	else {
	echo "Please enter a username.";
	}
	}
	else {
	echo "Please enter a valid email.";
	}
	}
    else{
    echo "Please enter your last name.";
    die();
    }
    }
    else{
    echo "Please enter your first name.";
    die();
    }
    ?>