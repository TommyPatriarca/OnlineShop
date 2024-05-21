<?php
session_start();

// Verifica se l'utente è loggato, altrimenti reindirizza alla pagina di login
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: auto;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        .product {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .product img {
            max-width: 200px;
            height: auto;
            margin-right: 20px;
        }
        .product-info {
            flex-grow: 1;
        }
        .product-info h3 {
            margin: 0;
        }
        .product-info p {
            margin-top: 10px;
        }
        .logout {
            text-align: right;
            margin-top: 20px;
        }
        .logout a {
            color: #007BFF;
            text-decoration: none;
        }
        .logout a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Benvenuto nel nostro negozio online!</h2>
        
        <div class="logout">
            <p>Benvenuto, <?php echo $_SESSION['email']; ?>! <a href="logout.php">Logout</a></p>
        </div>

        <div class="product">
            <div class="product-info">
                <h3>Prodotto 1</h3>
                <p>Descrizione del prodotto 1.</p>
                <p>Prezzo: $19.99</p>
            </div>
            <img src="product1.jpg" alt="Prodotto 1">
        </div>

        <div class="product">
            <div class="product-info">
                <h3>Prodotto 2</h3>
                <p>Descrizione del prodotto 2.</p>
                <p>Prezzo: $29.99</p>
            </div>
            <img src="product2.jpg" alt="Prodotto 2">
        </div>

        <!-- Aggiungi altri prodotti qui -->

    </div>
</body>
</html>
