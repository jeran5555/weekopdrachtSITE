<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webshop</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const products = document.querySelectorAll('.product');
    products.forEach((product, index) => {
      setTimeout(() => {
        product.classList.add('visible');
      }, index * 100); 
    });
  });
</script>


<body>

    <div id="container">
        <header>
            <?php include 'includes/header.php'; ?>
        </header>

        <main>
            <?php include 'includes/sidebar.php'; ?>
            <?php include 'includes/products.php'; ?>
        </main>

        <footer>
            <?php include 'includes/footer.php'; ?>
        </footer>
    </div>

    <script src="assets/js/app.js"></script>
</body>

</html>
