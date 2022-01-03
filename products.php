<!DOCTYPE html>
<html>
    <head>
        <title>Product Details | Track</title>
        <link type="text/css" rel="stylesheet" href="dashboard.css">
        <link rel="shortcut icon" href="tracklogo2.jpg" type="image/icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="sidenav">
            <!--<img src="tracklogo2.jpg" alt="company logo">-->
            <h1 style="color:white;padding:0px 0px 30px 0px">Track</h1>
            <a href="dashboard.html">Dashboard</a>
            <a class="active" href="products.html">Product List</a>
            <a href="customers.html">Customer Information</a>
            <a href="analysis.html">Analysis</a>
            <a href="orders.html">Order History</a>
            <a href="invoices.html">Invoice</a>
            <a style="position: absolute; left:55px; bottom: 20px" href="profile.html"><u>Edit Profile</u></a>
        </div>
        <div style="float:'center'">
            <table>
                <tr>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Gender</th>
                    <th>Password</th>
                    <th>Email</th>
                    <!--<th>Product Description</th>
                    <th>Manufacturer</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Status</th>-->
                </tr>
                <?php
                    $db = mysqli_connect("localhost", "root", "", "traack");
                    $sql = "SELECT * FROM register";
                    $result = $db->query($sql);

                    if($result->num_rows > 0){
                        while($row = $result-> fetch_assoc()){
                            echo "<tr><td>" . $row["fullname"] . "<tr><td>" . $row["username"] . "<tr><td>" . $row["password"] . "<td><tr>";
                        }
                        echo "</table>";
                    }
                    else{
                        echo "no result";
                    }
                ?>
            </table>
        </div>
    </body>
</html>