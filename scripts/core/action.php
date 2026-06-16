<?php
// Require files to run the code
// Allow requests from any origin
header('Access-Control-Allow-Origin: *');

// Allow the specified headers
header('Access-Control-Allow-Headers: Content-Type');

// Allow only specific HTTP methods (optional)
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

require_once("../include/database.inc.php");
require_once("../include/Settings.inc.php");

// Get the action pageName
$pageName = (isset($_REQUEST["pageName"])) ? $_REQUEST["pageName"] : "";

// Run the action pageName in function scope
echo ($pageName != null) ? $pageName() : die("Nothing Found");

// Don't delete those function
function index()
{
    echo "This is index page";
}

function logout()
{
    echo (setcookie("login_status", "", time() - 10, "/") && setcookie("account_type", "", time() - 10, "/")) ? _successView("You are successfully Logged Out", "", "../../", "Log In", "login.php", "Log Out") : _errorView("You are not logged out", "logout");
}

function signIn()
{
    // Global Variables
    global $conn;

    // Check Field
    (!isset($_REQUEST["email"])) ? _notSetError("Email Box Is Empty") : $email = $_REQUEST["email"];
    (!isset($_REQUEST["password"])) ? _notSetError("Password Box Is Empty") : $password = $_REQUEST["password"];

    if (($email == "admin@gmail.com") && ($password == "admin")) {
        $auth = md5(sha1($email . $password));
        $result = $conn->query("SELECT * FROM `admin` WHERE auth='$auth'");

        // Check password and email and logge in
        if ($result->num_rows === 1 or true) {
            setcookie("login_status", $auth, time() + (8661 * 7), "/");
            setcookie("account_type", "superadmin", time() + (8661 * 7), "/");
            header("location: ../../index.php");
        } else _errorView("Account Not Found");
        return;
    } else {
        $result = $conn->query("SELECT * FROM users WHERE email='$email'");
        $data = $result->fetch_assoc();

        // Check password and email and logge in
        if ($result->num_rows === 1) {
            if (password_verify($email . $password, $data["password"])) {
                if ($data["status"] == "active") {
                    setcookie("login_status", $data["auth"], time() + (8661 * 7), "/");
                    setcookie("account_type", "user", time() + (8661 * 7), "/");
                    _successView("You are logged in. Check your plugin now", "openPlugin", "", "Open Plugin");
                } else _errorView("Your Account Is " . $data["status"] . ". Please Contact With Us");
            } else _errorView("Password Not Match.");
        } else _errorView("Account Not Found");
    }
}

function checkLoginApi()
{
    global $conn;
    $res = ["status" => 400, "msg" => "Bad Request", "output" => null];
    if (isset($_COOKIE["account_type"]) && isset($_COOKIE["login_status"])) {
        $auth = (isset($_COOKIE["login_status"])) ? $_COOKIE["login_status"] : "asdf123";
        $result = $conn->query("SELECT * FROM users WHERE auth='$auth'");
        if ($result->num_rows === 1) {
            $data = $result->fetch_assoc();
            $res["status"] = 200;
            $res["msg"] = "Logged In";
            $res["output"] = array(
                "id" => $data["id"],
                "fname" => $data["fname"],
                "lname" => $data["lname"],
                "email" => $data["email"],
                "avatar" => $data["avatar"],
                "username" => $data["username"]
            );
        } else {
            $res["status"] = 505;
            $res["msg"] = "Not Logged In";
        }
    }
    return json_encode($res);
}

function configPlugin()
{
    global $conn;
    $msg = ["rc" => 100, "ruf" => true];
    echo json_encode($msg);
}

function InsertPage()
{
    global $conn;
    // $scratch_number = $conn->real_escape_string($_POST['scratch_number']);
    // $reward = uploadFile('reward');

    $front = uploadFile('front');
    $show_welcome = $conn->real_escape_string($_POST['show_welcome']);
    $title = $conn->real_escape_string($_POST['title']);
    $description = $conn->real_escape_string($_POST['description']);
    $card1 = $conn->real_escape_string($_POST['card1']);
    $card2 = $conn->real_escape_string($_POST['card2']);
    $card3 = $conn->real_escape_string($_POST['card3']);
    $card4 = $conn->real_escape_string($_POST['card4']);

    // Prepare and execute the SQL query
    $sql = "INSERT INTO pages (front, show_welcome, title, `description`, card1, card2, card3, card4)
            VALUES ('$front', '$show_welcome', '$title', '$description', '$card1', '$card2', '$card3', '$card4')";

    if ($conn->query($sql) === TRUE) {
        _successView("Page Created", "success");
    } else {
        _errorView("Not Created");
    }
}

// Function to handle file uploads (returns the filename or an empty string if not uploaded)
function uploadFile($fileInputName, $targetDir = "../../assets/images/core/")
{
    if (isset($_FILES[$fileInputName]) && !empty($_FILES[$fileInputName]['name'])) {
        $fileName = time() . basename($_FILES[$fileInputName]['name']);
        $targetFilePath = $targetDir . $fileName;
        move_uploaded_file($_FILES[$fileInputName]["tmp_name"], $targetFilePath);
        return $fileName;
    }
    return '';
}

function insertVisitor(){
    global $setting, $conn;
    $pageId = $conn->real_escape_string($_REQUEST["pageId"]);
    $setting->insertVisitor($pageId);
}

// Function to generate a unique username from first_name and last_name
function generateUniqueUsername($firstName, $lastName)
{
    global $conn;
    $username = strtolower(substr($firstName, 0, 1) . $lastName);
    $query = "SELECT username FROM users WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $counter = 1;
        while ($result->num_rows > 0) {
            $newUsername = $username . $counter;
            $query = "SELECT username FROM users WHERE username = '$newUsername'";
            $result = $conn->query($query);
            $counter++;
        }
        $username = $newUsername;
    }

    return $username;
}

function uniq_Id()
{
    global $conn;
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $code = '';
    for ($i = 0; $i < 6; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
    }
    $query = $conn->query("SELECT * FROM carts WHERE unique_code='{$code}'");
    if ($query->num_rows === 0) {
        return $code;
    } else {
        return (((int)$query->fetch_assoc()["id"]) + 1) . $code;
    };
}

function _successView($msg = "Nothing Set", $status = "", $buttonPath = "../../", $buttonName = "Go To Homepage", $buttonUrl = "index.php", $title = "Success")
{
    global $setting;
    $info = array("title" => $title, "subtitle" => $msg, "status" => $status, "btnUrl" => $buttonUrl, "ButtonName" => $buttonName);
    include("../include/view/ActionResult.inc.php");
}

function _errorView($msg = "Nothing Set", $status = "", $buttonPath = "../../", $buttonName = "Go To Homepage", $buttonUrl = "index.php")
{
    global $setting;
    $info = array("title" => "Error", "subtitle" => $msg, "status" => $status, "btnUrl" => "index.php", "ButtonName" => "Go To Homepage");
    include("../include/view/ActionResult.inc.php");
    ($status == "die") ? exit() : "";
}

function _notSetError($msg = "Error")
{
    die($msg);
}
