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
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        header {
            background-color: #007BFF;
            color: #fff;
            padding: 20px;
            text-align: right;
        }
        header a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }
        header a:hover {
            text-decoration: underline;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .products {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }
        .product {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .product img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        .product-info h3 {
            margin: 0;
            color: #333;
        }
        .product-info p {
            margin-top: 10px;
            color: #666;
        }
    </style>
</head>
<body>
    <header>
        Benvenuto, <?php echo $_SESSION['email']; ?>! <a href="logout.php">Logout</a>
    </header>
    <div class="container">
        <h1>Benvenuto nel nostro negozio online!</h1>
        <div class="products">
            <div class="product">
                <img src="product1.jpg" alt="Prodotto 1">
                <div class="product-info">
                    <h3>Prodotto 1</h3>
                    <p>Descrizione del prodotto 1.</p>
                    <p>Prezzo: $19.99</p>
                </div>
            </div>
            <div class="product">
                <img src="product2.jpg" alt="Prodotto 2">
                <div class="product-info">
                    <h3>Prodotto 2</h3>
                    <p>Descrizione del prodotto 2.</p>
                    <p>Prezzo: $29.99</p>
                </div>
            </div>
            <!-- Aggiungi altri prodotti qui -->
        </div>
    </div>
</body>
</html>
