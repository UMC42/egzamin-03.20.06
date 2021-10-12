<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mój kalendarz</title>
    <link rel="stylesheet" href="arkusz.css">
</head>
<body>
    <div class="gorny-lewy">
        <img src="logo1.png" alt="Mój kalendarz">
    </div>
    <div class="gorny-prawy">
        <h1>KALENDARZ</h1>
        <p>miesiąc: lipiec, rok:2020</p>
    </div>
    <main>
        <?php
        require("connect.php");
        $qr = "SELECT dataZadania, miesiac, wpis FROM `zadania` WHERE miesiac = 'lipiec'";
        $result = $conn->query($qr);
        while ($row = $result->fetch_assoc()) {
            $data = $row['dataZadania'];
            $miesiac = $row['miesiac'];
            $wpis = $row['wpis'];

            echo '<div>';
            echo "<h6>$data, $miesiac</h6>";
            echo "<p>$wpis</p>";
            echo '</div>';
        }
        mysqli_close($conn)
        ?>
    </main>
    <footer class="stopa">
        <form action="kalendarz.php" method="POST">
            <label for="wpis">dodaj wpis:<input type="text" name="wydarzenie"> <button type="submit">DODAJ</button></label>
            <br>
            <br>
            <p>Stronę wykonał: 00000000000</p>
        </form>
    </footer>
</body>
</html>