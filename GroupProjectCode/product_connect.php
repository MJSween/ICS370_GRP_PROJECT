    <?php
    $product_sku = filter_input(INPUT_POST, 'product_sku');
	$product_name = filter_input(INPUT_POST, 'product_name');
	$product_type = filter_input(INPUT_POST, 'product_type');
	$product_size = filter_input(INPUT_POST, 'product_size');
	$product_on_hand = filter_input(INPUT_POST, 'product_on_hand')
	$product_price = filter_input(INPUT_POST, 'product_price');
	
    if (!empty($product_sku)) {
    if (!empty($product_name)) {	
	if (!empty($product_type)) {
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
    $sql = "INSERT INTO products (product_sku, product_name, product_type, product_size, product_on_hand, product_price)
    values ('$product_sku','$product_name', '$product_type', '$product_size', '$product_on_hand', '$product_price')";
    if ($conn->query($sql)){
    $message = "Product Entered";
	echo "<script type='text/javascript'>alert('$message');</script>";
	header("Location: product_form.html"); 
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
	echo "Please enter SKU";
	}
	}
	else {
	echo "Please enter product name";
	}
    }
    else{
    echo "Please enter product type";
    }
    ?>