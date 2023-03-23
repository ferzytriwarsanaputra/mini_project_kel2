<?php
class LoginFormView
{
    public function render()
    {
        echo '
    <!DOCTYPE html>
    <html>
      <head>
        <title>Login Form</title>
        <style>
          body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
          }
          .container {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
            padding: 20px;
            width: 400px;
            margin: 0 auto;
            margin-top: 50px;
          }
          h2 {
            text-align: center;
            margin-bottom: 30px;
          }
          label {
            display: block;
            margin-bottom: 5px;
          }
          input[type="text"],
          input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: none;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
          }
          button[type="submit"] {
            background-color: #4CAF50;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
          }
          button[type="submit"]:hover {
            background-color: #3e8e41;
          }
        </style>
      </head>
      <body>
        <div class="container">
          <h2>Login Form</h2>
          <form method="post" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
          </form>
        </div>
      </body>
    </html>
    ';
    }
}
