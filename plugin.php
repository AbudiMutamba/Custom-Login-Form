<?php
/**
 * Plugin Name: Custom Admin Login Form
 * Version: 0.0.1   
 * Description: Have a profressional custom WordPress Login form for FREE
 * Tags: free, Login , Custom
 * Author: Abudi Mutamba
 * Author URI: https://mutambaabudi.com
 * Plugin URI: https://mutambaabudi.com
 * 
 */

 function my_login_message() {
    ?>
        <style type="text/css">
            .my-login-message {
                background-color: #00749c;
                border: 1px solid #0000;
                color: #000;
                font-size: 1.5rem;
                padding: 10px;
                text-align: center;
            }
            #loginform p>label{
                color: #00749c;
            }
        </style>
        <p class="my-login-message"> Welcome to Dev Mentor? </p>
    <?php
 }

/**We need to hook into WordPress*/

add_filter('login_message', 'my_login_message');