
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav mr-auto">
        <li class="navbar-brand"><?= COMPANY_NAME?></li>
        <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contacts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
        </li>
    
    </ul>
    <ul class="navbar-nav">
        
            <?php if ($user) {?>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?= $user->getName()?></a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="process.php?task=logout">Logout</a>
                </li>
                <?php
            } else {
                ?>
                <li class="nav-item">
                   <a class="nav-link" href="/login.php">Login</a>
                <li class="nav-item">
                <?php
            }
            ?>
            
        
    </ul>
</nav>
<div class="container-fluid">
    <div class="row">