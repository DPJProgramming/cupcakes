<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sunflower</title>
</head>
<body>
<h1>Cupcake Fundraiser</h1>

<div>
    <form action="process.php" method="post" name="cupcake-form">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name">

        <p>Cupcake Flavors:</p>

        <input type="checkbox" id="cake1" name="flavor[]" value="The Grasshopper">
        <label for="cake1">The Grasshopper</label>
        <br />

        <input type="checkbox" id="cake2" name="flavor[]" value="Whiskey Maple Bacon">
        <label for="cake2">Whiskey Maple Bacon</label>
        <br />

        <input type="checkbox" id="cake3" name="flavor[]" value="Carrot Walnut">
        <label for="cake3">Carrot Walnut</label>
        <br />

        <input type="checkbox" id="cake4" name="flavor[]" value="Salted Caramel Cupcake">
        <label for="cake4">Salted Caramel Cupcake</label>
        <br />

        <input type="checkbox" id="cake5" name="flavor[]" value="Red Velvet">
        <label for="cake5">Red Velvet</label>
        <br />

        <input type="checkbox" id="cake6" name="flavor[]" value="Lemon Drop">
        <label for="cake6">Lemon Drop</label>
        <br />

        <input type="checkbox" id="cake7" name="flavor[]" value="Tiramisu">
        <label for="cake7">Tiramisu</label>
        <br />

        <button type="submit" name="submit">Order</button>
    </form>
</div>

</body>
</html>