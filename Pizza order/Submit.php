<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order page</title>
</head>
<body>
    <header>
        <h1>Pizza pizaa</h1>
        <h2>Pizza order</h2>
    </header>

    <main>
<section>
    <p>Thanks for your purchase</p>
<?php 
//check for the submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data
    $number_of_pizzas = $_POST['number_of_pizzas'];
    $size = $_POST['size'];
    $shape = $_POST['shape'];
    $toppings = isset($_POST['toppings']) ? implode(', ', $_POST['toppings']) : 'None';
    $crust = $_POST['crust'];
    $delivery = $_POST['delivery'];
    
    // Display a confirmation message
    echo "<h2>Thank you for your order!</h2>";
    echo "<p>You ordered $number_of_pizzas $size $shape pizzas with $toppings toppings and $crust crust.</p>";
    echo "<p>Delivery option: $delivery</p>";
}
?>
</section>
</main>
<footer>
        <p>&copy; 2024 Pizza pizza. All rights reserved.</p>
    </footer>
</body>
</html>