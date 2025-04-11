<?php
// Mock product list (same as in main page)
$products = [
    ["title" => "14th Addiction Cross Zip", "price" => "€1300", "image" => "assets/img/14th.jpeg", "description" => "A luxury zip-up jacket with detailed cross pattern."],
    ["title" => "Balenciaga Hooded Bomber", "price" => "€3700", "image" => "assets/img/balenci.webp", "description" => "High-end bomber jacket by Balenciaga."],
    ["title" => "Chromehearts Denim Jacket", "price" => "€5500", "image" => "assets/img/chdenim.webp"],
    ["title" => "Vetements TFD Bomber", "price" => "€7000", "image" => "assets/img/tfdbomber.jpg"],
    ["title" => "VTMNTS Antwerp Hoodie", "price" => "500$", "image" => "assets/img/antwerp.webp"],
    ["title" => "ChromeHearts Hoodie", "price" => "1200$", "image" => "assets/img/Chrome-Hearts-x-Drake-Certified-Lover-Boy-Hoodie-Black-Miami-Exclusive (1).webp"],
    ["title" => "Balenciaga Tape Hoodie", "price" => "1200$", "image" => "assets/img/tapehoodie.webp"],
    ["title" => "Maison Margiela Hoodie", "price" => "800$", "image" => "assets/img/maison-margiela-paint-effect-hoodie_15792670_29035173_2048.webp"],
    ["title" => "ERD Hoodie", "price" => "1200$", "image" => "assets/img/erd.webp"],
    ["title" => "RAF Shdw Hoodie", "price" => "4500$", "image" => "assets/img/rafsimonsaw2005allshadowshoodie1.jpg"],
    ["title" => "futures", "price" => "400$", "image" => "assets/img/mm5.webp"],
    ["title" => "chrome hearts rolex", "price" => "8000$", "image" => "assets/img/roley.jpg"],
    ["title" => "Nike alyx af1", "price" => "1200$", "image" => "assets/img/alyxaf1.jpg"],
    ["title" => "Chrome Hearts belt", "price" => "2200$", "image" => "assets/img/chbelt.webp"],
    ["title" => "moncler coat", "price" => "900$", "image" => "assets/img/monclerfur.png"],
    ["title" => "raf simons hoodie", "price" => "700$", "image" => "assets/img/rafhoodie.webp"],
    ["title" => "balenciaga 3xl", "price" => "800", "image" => "assets/img/3xl.jpg"],
    ["title" => "balenciaga alaska boots", "price" => "1200$", "image" => "assets/img/alaskaboot.avif"],
    ["title" => "Balenciaga runner", "price" => "900$", "image" => "assets/img/runnerwit.avif"],
    ["title" => "Rick owens boots", "price" => "450$", "image" => "assets/img/rickboots.jpg"],
    ["title" => "Balenciaga bulldozer boots", "price" => "1500$", "image" => "assets/img/bulldozer.avif"],
    // ... (same structure for all products)
];

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if (!isset($products[$id])) {
    echo "Product not found.";
    exit;
}

$product = $products[$id];
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($product['title']); ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .product-detail-container {
            max-width: 1000px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            display: flex;
            gap: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .product-detail-container img {
            width: 50%;
            border-radius: 8px;
            object-fit: cover;
        }

        .product-info {
            flex: 1;
        }

        .product-info h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .product-info .price {
            font-size: 24px;
            font-weight: bold;
            margin: 20px 0;
        }

        .product-info form {
            margin-top: 20px;
        }

        .product-info select,
        .product-info button {
            padding: 10px;
            font-size: 16px;
            margin-top: 10px;
            width: 100%;
            box-sizing: border-box;
        }

        .add-to-cart-btn {
            background: black;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 15px;
        }

        .add-to-cart-btn:hover {
            background: #444;
        }

        .back-button {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #333;
        }

        .back-button:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="product-detail-container">
    <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['title']); ?>">

    <div class="product-info">
        <h1><?php echo htmlspecialchars($product['title']); ?></h1>
        <div class="price"><?php echo htmlspecialchars($product['price']); ?></div>
        <p><?php echo htmlspecialchars($product['description']); ?></p>

        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="product_id" value="<?php echo $id; ?>">

            <label for="size">Selecteer maat:</label>
            <select name="size" id="size" required>
                <option value="">-- Kies een maat --</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>

            <button type="submit" class="add-to-cart-btn">🛒 Toevoegen aan winkelmand</button>
        </form>

        <a href="index.php" class="back-button">← Terug naar overzicht</a>
    </div>
</div>

</body>
</html>