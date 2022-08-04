<?php
$email =  strval($_POST["email"]);
$phoneno = $_POST["phoneno"];
$conn = new mysqli("localhost", "root", "", "test");
if (!$conn) {
    echo "Connection Failed";
} else {
    $check1 = "SELECT * FROM sign_up WHERE email = '$_POST[email]' or phoneno = '$_POST[phoneno]'";
    $rs1 = mysqli_query($conn, $check1);
    $rows = mysqli_fetch_array($rs1, MYSQLI_ASSOC);
    $count = mysqli_num_rows($rs1);


    if ($rows != null and $rows['email'] == $email and $rows['phoneno'] == $phoneno) {
        echo "<link rel='stylesheet' href='sign_in.css'>";
        echo "<div class='main'>";
        echo "<center>";
        echo "<h1>abc Travels</h1>";
        echo "    <h2>Sign In Page</h2>";
        echo "    <form action='Sign_in_pg_test.php' method='post'>";
        echo "        <input type='email' id='email' placeholder='Email ID' class='inp' name='email'><br>";
        echo "        <input type='number' placeholder='Phone Number' id='num' class='inp' min='1000000000' max='9999999999'";
        echo "            name='phoneno'><br><br>";
        echo "        <input type='submit' id='login' value='Sign In' class='submit' name='login'>";
        echo "";
        echo "    </form>";
        echo "    <div class='result'>";
        echo "Login Successful";
        echo " <br><a href='Tourist_guide_main.html' class='linkl'>Go to home page</a>";
        echo "    </div>";
        echo "</center>";
        echo "</div>";

    } elseif ($rows != null and $rows['email'] != $email and $rows['phoneno'] == $phoneno) {
        echo "<link rel='stylesheet' href='sign_in.css'>";
        echo "<div class='main'>";
        echo "<center>";
        echo "<h1>abc Travels</h1>";
        echo "    <h2>Sign In Page</h2>";
        echo "    <form action='Sign_in_pg_test.php' method='post'>";
        echo "        <input type='email' id='email' placeholder='Email ID' class='inp' name='email'><br>";
        echo "        <input type='number' placeholder='Phone Number' id='num' class='inp' min='1000000000' max='9999999999'";
        echo "            name='phoneno'><br><br>";
        echo "        <input type='submit' id='login' value='Sign In' class='submit' name='login'>";
        echo "";
        echo "    </form>";
        echo "    <div class='result'>";
        echo "Email ID not found in our Database";
        echo "    </div>";
        echo'<center>';
        echo'    <div class="user">';
        echo"        <p><a href='Sign_Up_page.html'>Sign Up</a></p>";
        echo'    </div>';
        echo'</center>';
        echo "</center>";
        echo "</div>";
        
    } elseif ($rows != null and $rows['email'] == $email and $rows['phoneno'] != $phoneno) {
        echo "<link rel='stylesheet' href='sign_in.css'>";
        echo "<div class='main'>";
        echo "<center>";
        echo "<h1>abc Travels</h1>";
        echo "    <h2>Sign In Page</h2>";
        echo "    <form action='Sign_in_pg_test.php' method='post'>";
        echo "        <input type='email' id='email' placeholder='Email ID' class='inp' name='email'><br>";
        echo "        <input type='number' placeholder='Phone Number' id='num' class='inp' min='1000000000' max='9999999999'";
        echo "            name='phoneno'><br><br>";
        echo "        <input type='submit' id='login' value='Sign In' class='submit' name='login'>";
        echo "";
        echo "    </form>";
        echo "    <div class='result'>";
        echo "Phone Number Incorrect";
        echo "    </div>";
        echo'<center>';
        echo'    <div class="user">';
        echo"        <p><a href='Sign_Up_page.html'>Sign Up</a></p>";
        echo'    </div>';
        echo'</center>';
        echo "</center>";
        echo "</div>";
    } else {
        echo "<link rel='stylesheet' href='sign_in.css'>";
        echo "<div class='main'>";
        echo "<center>";
        echo "<h1>abc Travels</h1>";
        echo "    <h2>Sign In Page</h2>";
        echo "    <form action='Sign_in_pg_test.php' method='post'>";
        echo "        <input type='email' id='email' placeholder='Email ID' class='inp' name='email'><br>";
        echo "        <input type='number' placeholder='Phone Number' id='num' class='inp' min='1000000000' max='9999999999'";
        echo "            name='phoneno'><br><br>";
        echo "        <input type='submit' id='login' value='Sign In' class='submit' name='login'>";
        echo "";
        echo "    </form>";
        echo "    <div class='result'>";
        echo "Both E-mail ID and Phone Number are Incorrect";
        echo "    </div>";
        echo'<center>';
        echo'    <div class="user">';
        echo"        <p><a href='Sign_Up_page.html'>Sign Up</a></p>";
        echo'    </div>';
        echo'</center>';
        echo "</center>";
        echo "</div>";

    }
}
