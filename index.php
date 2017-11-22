<html>
        <head>
            <link rel="stylesheet" type="text/css" href="styles.css" />
            <title>CakeShop - Register</title>
        </head>
        <body>
            <div id="header">
                <h1>CakeShop - Register</h1>
            </div>
            <div id="insertQuery">
                <h3>Insert Order</h3><br>
                <form action="insert.php" method="post">
                    Order ID :<br>
                    <input type="number" name="orderId" /><br><br>
                    Customer Name :<br>
                    <input type="text" name="customerName" /><br><br>
                    Customer Email :<br>
                    <input type="email" name="customerEmail" /><br><br>
                    Customer Address :<br>
                    <textarea name="customerAddress" rows="4" cols="20"></textarea><br><br>
                    Number of Cakes :<br>
                    <input type="number" name="noOfCakes" /><br><br>
                    Date of Delivery :<br>
                    <input type="date" name="deliveryDate" /><br><br>
                    <input type="submit" value="Send Order" />
                </form>
            </div>
            <div id="deleteQuery">
                <h3>Delete Order</h3>
                <form action="delete.php" method="post">
                    Order ID :<br>
                    <input type="number" name="orderId" /><br><br>
                    <input type="submit" value="Delete Order" />
                </form>
            </div>
            <div id="updateQuery">
                <h3>Update Cake Number</h3>
                <form action="update.php" method="post">
                    Order ID :<br>
                    <input type="number" name="orderId" /><br><br>
                    New Cake Amount :<br>
                    <input type="number" name="noOfCakes" /><br><br>
                    <input type="submit" value="Update Order" />
                </form>
            </div>
            <div id="display">
                <table>
                    <tr>
                        <td><b>Order ID</b></td>
                        <td><b>Customer Name</b></td>
                        <td><b>Customer Email</b></td>
                        <td><b>Customer Address</b></td>
                        <td><b>Number of Cakes</b></td>
                        <td><b>Delivery Date</b></td>
                    </tr>
                    <?php
                        require_once 'db.php';
                        $conn = db::pdo();
                        $query = "SELECT * FROM orders;";
                        $stm = db::query($query);
                        $res = $stm->fetchAll();
                       var_dump($res);die();
                        //$res = $stm->fetchAll(PDO::FETCH_ASSOC);
                       // var_dump($res);die();
                        if(!empty($res)){
                            foreach($res as $val){
                                echo "<tr>";
                                foreach($val as $subval){
                                    echo "<td>".$subval."</td>";
                                }
                                echo "</tr>";
                            }
                        } else{
                            echo "Table returned empty, no orders or an error has occured!";
                        }
                    ?>
                </table>
            </div>
            <div id="footer">
                Copyright 2017 - <?php echo date("Y"); ?>
            </div>
        </body>
    </html>