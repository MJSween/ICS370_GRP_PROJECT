    <?php
    session_start(); // Starting Session
    $error = ''; // Variable To Store Error Message
    if (isset($_POST['submit'])) {
    if (empty($_POST['user_id']) || empty($_POST['user_pwd'])) {
    $error = "Username or Password is invalid";
    }
    else{
    // Define $username and $password
    $username = $_POST['user_id'];
    $password = $_POST['user_pwd'];
    // mysqli_connect() function opens a new connection to the MySQL server.
    $conn = mysqli_connect("localhost", "root", "", "GroupProject");
    // SQL query to fetch information of registerd users and finds user match.
    $query = "SELECT user_id, User_pwd from users where user_id=? AND user_pwd=? LIMIT 1";
    // To protect MySQL injection for Security purpose
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $user_id, $user_pwd);
    $stmt->execute();
    $stmt->bind_result($user_id, $user_pwd);
    $stmt->store_result();
    if($stmt->fetch()) //fetching the contents of the row {
    $_SESSION['login_user'] = $user_id; // Initializing Session
    header("location: index.html"); // Redirecting To Profile Page
    }
    mysqli_close($conn); // Closing Connection
    }
    ?>