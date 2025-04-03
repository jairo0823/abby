<!-- <!DOCTYPE html>
<html lang ="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - Library System</title>
<style>
body {
font-family: Arial, sans-serif;
background-color: #f4f4f4;
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
}

.login-container {
background-color: #fff;
padding: 30px;
border-radius: 8px;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
width: 100%;
max-width: 400px;
text-align: center;
}

h2 {
margin-bottom: 20px;
font-size: 24px;
color: #333;
}

.error {
color: #ff0000;
font-size: 14px;
margin-bottom: 15px;
}

input {
width: 100%;
padding: 10px;
margin: 10px 0;
border: 1px solid #ccc;
border-radius: 4px;
font-size: 16px;
box-sizing: border-box;
}

button {
width: 100%;
padding: 10px;
background-color: #4CAF50;
color: #fff;
border: none;
border-radius: 4px;
font-size: 16px;
cursor: pointer;
margin-top: 10px;
}

button:hover {
background-color: #45a049;
}

.register-link {
display: block;
margin-top: 15px;
color: #007bff;
text-decoration: none;
font-size: 14px;
}

.register-link:hover {
text-decoration: underline;
}
</style>
</head>
<body>
<div class="login-container">
<h2>Login</h2>

<?php if ($this->session->flashdata('error')): ?>
<p class="error"><?= $this->session->flashdata('error'); ?></p>
<?php endif; ?>

<form action="<?= site_url('Auth/process_login') ?>" method="POST">
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit">Login</button>
</form>

<a href="<?= site_url('Auth/register') ?>" class ="register-link">Register</a>
</div>
</body>
</html> -->