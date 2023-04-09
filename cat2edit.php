<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign up</title>
        <meta charset="utf-8">
        <meta name="viewport" context="width=device-width, intial-scale=1">
        <style>
            body {
                background-color: #f2f2f2;
                font-family: Arial, sans-serif;
            }
            h1 {
                color: #333;
                text-align: center;
            }
            form {
                border: 2px solid #ddd;
                border-radius: 10px;
                padding: 20px;
                margin: 0 auto;
                max-width: 400px;
            }
            label {
                display: block;
                font-weight: bold;
                margin-bottom: 10px;
            }
            input[type="text"], input[type="password"], input[type="email"] {
                width: 100%;
                padding: 10px;
                border-radius: 5px;
                border: 1px solid #ddd;
                margin-bottom: 20px;
                box-sizing: border-box;
            }
            input[type="submit"], button {
                background-color: #4CAF50;
                color: white;
                border: none;
                border-radius: 5px;
                padding: 10px;
                font-size: 16px;
                cursor: pointer;
            }
            input[type="submit"]:hover, button:hover {
                background-color: #3e8e41;
            }
            button {
                display: block;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <h1>User Information</h1>
        <form action="cat2-edit.php" method="post">
            <label for="fname">First name:</label>
            <input type="text" name="fname" required>
            <label for="lname">Last name:</label>
            <input type="text" name="lname" required>
            <label for="email">Email address:</label>
            <input type="email" name="email" required>
            <label for="phone">Phone number:</label>
            <input type="text" name="phone" required>
            <input type="submit" value="Update">
        </form>
    </body>
</html>