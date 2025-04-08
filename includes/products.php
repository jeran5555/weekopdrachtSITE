<?php
$products = [
    ["title" => "14th Addiction Cross Zip", "price" => "€1300", "image" => "assets/img/14th.jpeg"],
    ["title" => "Balenciaga Hooded Bomber", "price" => "€3700", "image" => "assets/img/balenci.webp"],
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
];

echo '<div class="products">';
foreach ($products as $index => $product) {
    echo '<a href="product.php?id=' . $index . '" class="product-link">';
    echo    '<div class="product">';
    echo        '<img src="' . htmlspecialchars($product['image']) . '" alt="' . htmlspecialchars($product['title']) . '" class="product-image">';
    echo        '<div class="onder">';
    echo            '<div class="onderlinks">';
    echo                '<div class="title">' . htmlspecialchars($product['title']) . '</div>';
    echo                '<div class="geld">' . htmlspecialchars($product['price']) . '</div>';
    echo            '</div>';
    echo            '<div class="cart5">';
    echo                '<img src="assets/img/cart5.svg" onclick="event.preventDefault(); winkelWagenAdd();" alt="cart5" class="cart5">';
    echo            '</div>';
    echo        '</div>';
    echo    '</div>';
    echo '</a>';
}
echo '</div>';



echo '<div class="product">';
echo '  <a href="product.php?id=' . $index . '" class="product-link">';
echo '    <img src="' . htmlspecialchars($product['image']) . '" alt="' . htmlspecialchars($product['title']) . '" class="product-image">';
echo '  </a>';
// ... rest of the product HTML
echo '</div>';
?>