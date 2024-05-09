<?php
session_start();

if (!isset($_SESSION['balance'])) {
    $_SESSION['balance'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $amount = $_POST['amount'];
    $_SESSION['balance'] += $amount;
    header('Location: balance.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Deposit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="https://i.postimg.cc/h42Dh6mx/The-National-Ledger-5-7-2024-1.png" class="header-img" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="balance.php">Balance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="deposit.php">Deposit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="withdraw.php">Withdraw</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="centered-container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="greetings">
                                <h1>Deposit Money</h1>
                            </div>
                            <div>
                                <p></p>
                                <h2>
                                    Please enter desired amount to deposit.
                                </h2>
                            </div>
                            <div>
                                <form action="" method="post">
                                    <input type="number" id="amount" name="amount" class="black-input" required> Peso/s <br><br>
                                    <input type="submit" value="Deposit" class="green-button">
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="image-container">
                                <img src="https://c4.wallpaperflare.com/wallpaper/972/56/42/check-pen-keyboard-wallpaper-preview.jpg" class="img-fluid" alt="Responsive image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <p></p>
    </div>  

    <div class="container d-flex justify-content-center align-items-center vh-50">
        <div id="image-container">
            <img src="https://i.postimg.cc/qM49pw6b/Consistent-since-1928-5-8-2024.png" class="img-fluid">
        </div>
    </div>
    
    <footer class="bg-dark text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="collab">
                    <img src="https://i.postimg.cc/h42Dh6mx/The-National-Ledger-5-7-2024-1.png" class="collab-img img-fluid">
                </div>
            </div>
            <div class="col-md-4">
                <div class="collab">
                    <img src="https://www.bangkokabayan.com/images/npc_seal.png" class="collab-img img-fluid">
                </div>
            </div>
            <div class="col-md-8">
                <div class="footerBottom text-center text-md-end">
                    <p>This website is for educational purposes only and no copyright infringement is intended.</p>
                    <p>Copyright &copy;2024; All images used in this website are from the Internet.</p>
                    <p>Designed by GIAN CARLO S. VICTORINO, BSITWMA - FEU TECH</p>
                </div>
            </div>
        </div>
    </div>
    </footer>

    <script src="deposit.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
