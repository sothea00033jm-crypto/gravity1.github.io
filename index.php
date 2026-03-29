<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Roblox Store</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>🛒 Roblox Accounts Store</h1>

<div class="container">
<?php
$result = $conn->query("SELECT * FROM accounts");
while($row = $result->fetch_assoc()):
?>
<div class="card">
    <h3><?= $row['username'] ?></h3>
    <p>💲 Price: $<?= $row['price'] ?></p>
    <a href="buy.php?id=<?= $row['id'] ?>">
        <button>Buy</button>
    </a>
</div>
<?php endwhile; ?>
</div>

</body>
</html>