<nav>
    <div class="title">
        <img class="logo" src="img/logo.png" alt="logo">
        <h1>Schut Huisartsen Praktijk</h1>
    </div>
    <div class="menu">
        <li>
            <a class="btn <?php if($page == 'home'){echo 'activated';}else{echo '';};?>" href="index.php">Home</a>
            <a class="btn <?php if($page == 'service'){echo 'activated';}else{echo '';};?>" href="service.php">Service</a>
            <a class="btn <?php if($page == 'voorlichting'){echo 'activated';}else{echo '';};?>" href="voorlichting.php">Voorlichting</a>
            <a class="btn <?php if($page == 'mapo'){echo 'activated';}else{echo '';};?>" href="mapo.php">Mijn APO</a>
        </li>
    </div>
</nav>