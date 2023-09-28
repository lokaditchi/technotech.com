<link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../css/style.css" />

<header>
    <div class="logo">
        <h1 class="logo-text"><a href="/index.php"><span>Malek</span> Abdallah</a></h1>
    </div>
    <i class="fa fa-bars menu-toggle"></i>    <ul class="nav">
        <li>
            <a href="">Home</a>
            <ul style="left: 0">
                <li><a href="">Landing page</a></li>
                <li><a href="">Team</a></li>
            </ul>
        </li>
        <li><a href="">about</a></li>
        <li><a href="">Services</a></li>
        <!-- <li><a href="">Sign up</a></li>
            <li><a href="">login</a></li> -->
        <li>
            <a href="">
                <i class="fa fa-user"></i>
                Malek Abdallah
                <i class="fa fa-chevron-down"></i>
            </a>
            <ul>
                <li><a href="">Dashboard</a></li>
                <li><a class="Logout" href="">Logout</a></li>
            </ul>
        </li>
    </ul>
</header>
<!-- ////////////////////////////////////////////// -->

<div class="auth-content">
    <form action="login.php" method="post">
        <h2 class="form-title">Login</h2>
        <div>
            <label>Username</label>
            <input type="text" name="username" placeholder="enter your email" class="text-input">
        </div>
       
        <div>
            <label>password</label>
            <input type="password" name="password" placeholder="enter your email" class="text-input">
        </div>
        
        <div>
            <button type="submit" name="register-btn" class="btn btn-big">Login</button>

        </div>
        <p>Or <a href="register.php ">Sign up</a></p>
    </form>
</div>