<?php
class Settings
{
  // BASE url of the site
  public function base_url($url = "")
  {
    return "https://extension.cliicker.com/$url";
    // return "https://valpakregister.hsvgroup.org/$url";
  }

  // Check the loign status of hte user
  public function checkLogin($redirect = false, $path = "login.php", $OtRedirect = false)
  {
    global $conn;
    if (isset($_COOKIE["account_type"]) && isset($_COOKIE["login_status"])) {
      if ($_COOKIE["account_type"] == "users") {
        $auth = (isset($_COOKIE["login_status"])) ? $_COOKIE["login_status"] : "asdf123";
        $result = $conn->query("SELECT * FROM users WHERE auth='$auth'");
        return ($result->num_rows === 1) ? (($OtRedirect) ? header("location: $path") : true) : (($redirect) ? header("location: $path") : false);
      } else if ($_COOKIE["account_type"] == "superadmin") {
        $auth = (isset($_COOKIE["login_status"])) ? $_COOKIE["login_status"] : "asdf123";
        $result = $conn->query("SELECT * FROM `admin` WHERE auth='$auth'");
        return ($result->num_rows == 1) ? (($OtRedirect) ? header("location: $path") : true) : (($redirect) ? header("location: $path") : false);
      }
    } else ($redirect) ? header("location: $path") : false;
  }

  // Check which is the correct side bare for user [teamleader,supeardmin,associate leader, asssociate]
  public function correctHeaderSidbar()
  {
    if (isset($_COOKIE["account_type"])) {
      if ($_COOKIE["account_type"] == "team_leaders") {
        return "teamLeader_head_side.inc.php";
      } else if ($_COOKIE["account_type"] == "associate_leaders") {
        return "associateLeader_head_side.inc.php";
      } else if ($_COOKIE["account_type"] == "associate") {
        return "associate_head_side.inc.php";
      } else if ($_COOKIE["account_type"] == "superadmin") {
        return "superadmin_head_side.inc.php";
      }
    }
  }


  // Send email
  public function send_email($subject, $msg, $to)
  {
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: Valpak <info@hsvgroup.org>' . "\r\n";

    $email = mail($to, $subject, $msg, $headers);
    return $email;
  }

  // send email with view
  public function send_email_view($subject, $title, $msg, $to)
  {
    $imgUrl = "";
    $msgEmail = '<div style="background-color:#e9ecef">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
          <tbody>
            <tr>
              <td align="center" bgcolor="#e9ecef">
      
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px">
                  <tbody>
                    <tr>
                      <td align="center" valign="top" style="padding:2px 24px">
                        <img style="max-width: 100%" src="' . $imgUrl . '" />
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td align="center" bgcolor="#e9ecef">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px">
                  <tbody>
                    <tr>
                      <td align="left" bgcolor="#ffffff" style="padding:36px 24px 0;font-family:\'Source Sans Pro\',Helvetica,Arial,sans-serif;border-top:3px solid #d4dadf">
                        <h1 style="margin:0;font-size:28px;font-weight:700;letter-spacing:-1px;line-height:48px">' . $title . '</h1>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td align="center" bgcolor="#e9ecef">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;margin-bottom:95px">
                  <tbody>
                    <tr>
                      <td align="left" bgcolor="#ffffff" style="padding:1px 24px;font-family:\'Source Sans Pro\',Helvetica,Arial,sans-serif;font-size:16px;line-height:24px">
                        <p style="margin:0">' . $msg . '</p>
                      </td>
                    </tr>
      
                    <tr>
                      <td align="left" bgcolor="#ffffff" style="padding:13px 24px;font-family:\'Source Sans Pro\',Helvetica,Arial,sans-serif;font-size:16px;line-height:24px;border-bottom:3px solid #d4dadf">
                        <p style="margin:0">Sincerly,<br>Valpak</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
        </div>';
    return $this->send_email($subject, $msgEmail, $to);
  }

  // Send Otp
  public function sendOtp($type, $msgPath, $to)
  {
    if ($type == "forgotPassword") {
      $otp = rand(100000, 999999);
      // $otp = 999999;
      $_SESSION["otp"] = $otp;
      $imgUrl = $this->base_url("assets/img/valpakLogo.png");
      require_once($msgPath);
      return $this->send_email("Your Forget Password Otp Code", $msg, $to);
    } else if ($type == "createAccountTeamLeader") {
      $otp = rand(100000, 999999);
      // $otp = 999999;
      $_SESSION["otp"] = $otp;
      $imgUrl = $this->base_url("assets/img/valpakLogo.png");
      require_once($msgPath);
      return $this->send_email("Your Verification Code To Create Account In Valpak", $msg, $to);
    }
  }

  public function changePassword($account_type, $email, $newPassword)
  {
    global $conn;
    $isExist = $this->userInfoWay($account_type, $email);
    if ($isExist) {
      if ($account_type == "team_leaders") {
        $psw_email = password_hash($email . $newPassword, PASSWORD_DEFAULT);
        $auth = md5(sha1($email, $newPassword));
        $sql = "UPDATE `team_leaders` SET `password`='$psw_email', `auth`='$auth' WHERE `email`='$email' AND `status`='active'";
        $result = $conn->query($sql);
        return $result;
      } else {
        $auth = md5(sha1($email, $newPassword));
        $sql = "UPDATE `$account_type` SET `password`='$newPassword', `auth`='$auth' WHERE `email`='$email' AND `status`='active'";
        $result = $conn->query($sql);
        return $result;
      }
    } else return false;
  }

  public function isUserVisited($pageId)
  {
    global $conn;
    $ip = $this->get_user_ip();
    $sql = "SELECT id FROM visited_users WHERE ip_address = ? AND page_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $ip, $pageId);
    $stmt->execute();
    $stmt->store_result();
    return $stmt->num_rows > 0;
  }

  public function insertVisitor($pageId)
  {
    global $conn;
    $userIP = $this->get_user_ip();
    $sql = "INSERT INTO visited_users (ip_address, page_id) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $userIP, $pageId);
    $stmt->execute();
  }

  public function Pages($id = "")
  {
    global $conn;
    $sql = "SELECT * FROM pages";
    if ($id != "") $sql .= " WHERE id='{$id}'";
    $sqlRun = $conn->query($sql);
    if ($sqlRun && $sqlRun->num_rows > 0) {
      if ($id != "") {
        $datas = $sqlRun->fetch_assoc();
      } else {
        $datas = $sqlRun->fetch_all(MYSQLI_ASSOC);
      }
      return $datas;
    } else return false;
  }

  public function get_user_ip()
  {
    // Check for shared internet/ISP IP
    if (!empty($_SERVER['HTTP_CLIENT_IP']) && $this->validate_ip($_SERVER['HTTP_CLIENT_IP'])) {
      return $_SERVER['HTTP_CLIENT_IP'];
    }

    // Check for IP addresses passing through proxies
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      // Check if multiple IP addresses are provided in the header
      $ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
      foreach ($ips as $ip) {
        if ($this->validate_ip($ip)) {
          return $ip;
        }
      }
    }

    // Check for the most common case - the remote IP address
    if ($this->validate_ip($_SERVER['REMOTE_ADDR'])) {
      return $_SERVER['REMOTE_ADDR'];
    }

    // If all else fails, return an unknown IP address
    return 'unknown';
  }

  // Function to validate an IP address
  public function validate_ip($ip)
  {
    return filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_IPV6);
  }


  // Check User login info
  public function users()
  {
    global $conn;
    $result = $conn->query("SELECT * FROM users");
    return ($result->num_rows > 0) ? $result->fetch_all(MYSQLI_ASSOC) : false;
  }

  // Check User login info Email
  public function userInfoEmail($account_type, $username)
  {
    global $conn;
    $result = $conn->query("SELECT * FROM $account_type WHERE `username`='{$username}'");
    return ($result->num_rows == 1) ? $result->fetch_assoc() : false;
  }

  // Check user info with account_type and email
  public function userInfoWay($account_type, $email, $isNum = false)
  {
    global $conn;
    $result = $conn->query("SELECT * FROM $account_type WHERE email='{$email}' AND `status`='active'");
    return ($result->num_rows == 1) ? true : false;
  }

  // Formate the date like we want.
  public function dateFormate($date, $time = false, $addTime = "")
  {
    return date("M  d Y $time", strtotime($date . $addTime));
  }

  // Is plan has expired or not for cash out
  public function isExpires($firstDate = true, $seconDate, $callback = false)
  {
    ($firstDate) ? $firstDate = date("Y-m-d h:s A") : "";
    $today_time = strtotime($firstDate);
    $expire_time = strtotime($seconDate);

    if ($expire_time < $today_time) {
      ($callback == false) ? "" : $callback();
      return true;
    } else {
      return false;
    }
  }

  public function strip_config()
  {
    define('STRIPE_API_KEY', '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');
    // define('STRIPE_API_KEY', 'sk_test_51HrT25Ii7yXVULoDl82WzjlbH0a99PJhrXpAgenf5AvjVbKSqYQ7TiWpYxJRqnOBEdga4rl6gYOXfUYkzoQujTIu00k2bnKp9w');

    define('STRIPE_PUBLISHABLE_KEY', 'pk_live_51HrT25Ii7yXVULoDcriEkGVYek9vl6wKGmlXsI8sXMdV20YrbDOCVHMIPlclfcYj5XTV7aqXQP0otK0CDs0k9Wr900Z520qtZ3');
    // define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51HrT25Ii7yXVULoDZoy27LP0idcAUPMiZziHby6IsBUkLn7Y2Pku0SRKWzjqkIK4muqQIqgLe59AOY6BRdRJLaHC00aIfrtOJM');
  }

  public function _successView($msg = "Nothing Set", $status = "", $path)
  {
    global $setting;
    $info = array("title" => "Success", "subtitle" => $msg, "status" => $status, "btnUrl" => "login.php", "ButtonName" => "Login Now");
    include("$path/include/view/ActionResult.inc.php");
  }

  public function _errorView($msg = "Nothing Set", $status = "", $path, $buttonPath = "")
  {
    global $setting;
    $info = array("title" => "Error", "subtitle" => $msg, "status" => $status, "btnUrl" => "javascript:void()", "ButtonName" => "Thanks");
    include("$path/view/ActionResult.inc.php");
    ($status == "die") ? exit() : "";
  }
}
$setting = new Settings();
