<?php
    include("db.php");
    /** @var mysqli $conn */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Performance Task</title>
        <link rel="stylesheet" href="style.css">
    </head>
        <body>
            <div class="task1">
                <h1>ABC Corp</h1>

                <h2>ANNOUNCEMENT!</h2>
                <div class="announce">
                    <p>Good Day ABC Corp Employees!
                        <br>It is with deep sorrow that we announce that today <span id="date">DATE TODAY</span>, 
                         we have lost $0.5 in sales due to one employee failing to
                        comply with the Organization's Policy.
                        <br>
                        <br>Always remember to read the 3DOs of the Organization's Policy and follow
                        it no matter the cost. Because in ABC Corp every CEO life matters
                        and only the CEO 
                        <br>
                        <br>Have an ABC Day @everyone!
                    </p>
                </div>

                <h2>3 DO POLICY</h2>
                <div class="policies">
                    <p>     1.) Donate 3% of your salary to the head of the company;
                        <br>2.) Do not steal, Especially belongins of the president of the company;
                        <br>3.) Do not forget to donate.
                    </p>
                </div>
            </div>

            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
                <label for="donate">Daily Donation: $</label>
                <input type="number" name="donation" id="donate" placeholder="Donate NOW!" min="10000" step="0.01" required><br>
                
                <input type="submit" value="DONATE!">
            </form>
        
            <script src="script.js" defer></script>
        </body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $amount =  filter_input(INPUT_POST, "donation", FILTER_VALIDATE_FLOAT);  
    
        if(empty($amount)) {
            echo "Shame on you";
        }
        else if (($amount) < 10000) {
            echo "Read Policy (At least 5 digits of your salary)";
        }
        else {
            $sql = "INSERT INTO donations (amount)
            VALUES ('$amount')";
            mysqli_query($conn, $sql);

            echo "You have donated \${$amount}";
        }
    }

    mysqli_close($conn);
?>
<button onclick="clickBtn()" id="click">Change Colors</button></footer>
<footer>
    <p>Bonifacio, Keith Daniel E. BSIT - IV</p>
</footer>