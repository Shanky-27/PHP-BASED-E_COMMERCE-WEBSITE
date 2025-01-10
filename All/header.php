<style>
    
#cart_count{
    padding: 0 0.9rem 0.1rem 0.9rem;
    border-radius: 3rem;
}
</style>
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<a href="Main.php" class="navbar-brand">
    <h4 >
    <i class="fa-solid fa-store"></i> Shashank E-Commerce
    </h4>
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" >
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="mr.auto"></div>
    <div class="navbar-nav">
        <a href="cart.php" class="nav-item nav-link active">
            <h5 class="px-5 cart">
                <i class="fas fa-shopping-cart"></i>Cart 
                <?php
                
                if(isset($_SESSION['cart'])){
                    $count=count($_SESSION['cart']);
                    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                }else{
                    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                }
                ?>

            </h5>
        </a>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="mr.auto"></div>
    <div class="navbar-nav">
        <a href="home.php" class="nav-item nav-link active">
            <h5 class="px-5 cart">
            <i class="fa-solid fa-user"></i>My Account
            </h5>
        </a>
    </div>
</div>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="mr.auto"></div>
    <div class="navbar-nav">
        <a href="index.php" class="nav-item nav-link active">
            <h5 class="px-5 cart">
            <i class="fa-solid fa-right-from-bracket"></i>Log Out
            </h5>
        </a>
    </div>
</div>

</nav>
</header>