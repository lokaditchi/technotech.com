 <?php

    include("items/header.php");
    include('items/cookie.php');
    if (isset($_COOKIE['return'])) {

        echo'<div class="cookie">
        <h2>welcome back!</h2>
        </div>';}else{

            echo'<div class="cookie">
            <h2>welcome to my website!</h2>
            </div>';

        }
    include("items/page.php");
    include('items/content.php');
    
    

 
    ?>