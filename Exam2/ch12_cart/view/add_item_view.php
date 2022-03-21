<!-- 
    Name: Brett Wolfangel
    Date: 11/4/2021
    Exam 2

    comments start on line 29 and end on line 42
-->



<!DOCTYPE html>
<html>
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="view/main.css">
</head>
<body>
    <header>
        <h1>My Guitar Shop</h1>
    </header>
    <main>
        <h1>Add Item</h1>
        <form action="." method="post">
            <input type="hidden" name="action" value="add">

            <label>Name:</label>
            <select name="productkey">
            <?php 
            // This is where i connected to the database

            $username = "mgs_user";
            $password = "pa55word";
            $database = "my_guitar_shop2";
            $db = mysqli_connect("localhost", $username, $password, $database) or die("nope");

             $resultSet = $db->query("SELECT productName, listPrice FROM products"); // this is my select statement getting productName and listPrice from the db

             while($rows = $resultSet->fetch_assoc()) // this is iterating through the products table and grabbing the productName and listPrice
             {
                $products = $rows['productName']; // assign variable for productName
                $cost = $rows['listPrice']; // assign variable for listPrice
                echo"<option value='$products'>$products  ($$cost)</option>"; // printing the data from the database to the dropdown menu
             }
            
            
            //foreach($products as $key => $product) :
                //$cost = number_format($product['cost'], 2);
                //$name = $product['name'];
                //$item = $name . ' ($' . $cost . ')';
            ?>
               <!-- <option value="<?php echo $key; ?>">
                    <?php echo $item; ?> -->
                </option> 
            <?php //endforeach; ?>
            </select><br>

            <label>Quantity:</label>
            <select name="itemqty">
            <?php for($i = 1; $i <= 10; $i++) : ?>
                <option value="<?php echo $i; ?>">
                    <?php echo $i; ?>
                </option>
            <?php endfor; ?>
            </select><br>

            <label>&nbsp;</label>
            <input type="submit" value="Add Item">
        </form>
        <p><a href=".?action=show_cart">View Cart</a></p>    
    </main>
</body>
</html>