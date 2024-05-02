<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="side-nav">
            <div class="logo">
                <img src="logo.jpg" alt="logo">
            </div>
            <div class="logout-btn">
                <a href="loginpage.php">LOGOUT</a>
            </div>
            <nav class="navbar">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="order.php">Orders</a></li>
                    <li><a href="history.php">History</a></li>
                </ul>
            </nav>
        </div>
    
    

        <!-- header Section -->
        
        <?php
session_start();
?>

<!-- Header Section -->
<div class="header" id="header">
    <div class="htext">
        <h2>Triple Tread Craft</h2>
        <p>Choose your category</p>
    </div>
    <div class="searchbar" id="searchbar">
        <input class="search" type="text" placeholder="Search something">
    </div>
    <!-- Display user information dynamically -->
    <div class="acc" id="acc">
        <div class="pfp" id="pfp">
            <img src="1pfp.jpg" alt="pfp">
        </div>
        <div class="info" id="info">
            <!-- Check if username is set in session before accessing it -->
            <?php if(isset($_SESSION['username'])) : ?>
                <h2><?php echo $_SESSION['username']; ?></h2>
                <p><?php echo $_SESSION['username']; ?></p>
            <?php endif; ?>
        </div>
    </div>   
</div>

</div>

        <!-- second layer -->
        <div class="stat" id="stat">
            <div class="status" id="status">
                <h3>Total Orders</h3>
                <label for="file">16,324</label>
                <progress id="file" value="32" max="100"> 32% </progress>
            </div>
            <div class="status2" id="status2">
                <h3>New Costumer</h3>
                <label for="file">16,324</label>
                <progress id="file" value="32" max="100"> 32% </progress>
            </div>
            <div class="status" id="status">
                <h3>Total Sales</h3>
                <label for="file">16,324</label>
                <progress id="file" value="80" max="100"> 32% </progress>
            </div>
        </div>
        <!-- BEST SELLER LAYER -->
        <div class="best" id="best">
            <h2>BEST SELLER</h2>
            <br>
            <div class="bestitem">
                <h3>1</h3>
                <img src="p1.jpg">
                <h3>letter bouquet</h3>
            </div>
            <div class="bestitem">
                <h3>2</h3>
                <img src="p2.png">
                <h3>sunflower bouquet</h3>
            </div>
            <div class="bestitem">
                <h3>3</h3>
                
                <img src="p3.jpg">
                <h3>mixed flower bouquet</h3>
            </div>
        </div>
        <div class="REC" id="REC">
            <h2>RECENT SALE</h2>
            <br>
            <div class="bestitem">
                <h3>1</h3>
                <img src="p4.jpg">
                <h3>butter mixed bouquet</h3>
            </div>
            <div class="bestitem">
                <h3>2</h3>
                <img src="p5.png">
                <h3>mini bouquet</h3>
            </div>
            <div class="bestitem">
                <h3>3</h3>
                <img src="p6.png">
                <h3>daisies bouquet</h3>
            </div>
        </div>
</body>
</html>