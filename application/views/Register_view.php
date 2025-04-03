<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>"> 
    <style>
                /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #2ecc71, #27ae60);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Form Container */
        .container {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
        }

        /* Form Heading */
        .container h2 {
            margin-bottom: 20px;
            color: #2ecc71;
        }

        /* Input Fields */
        input[type="text"], 
        input[type="email"], 
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #2ecc71;
            border-radius: 5px;
            outline: none;
        }

        /* Buttons */
        button {
            background: #27ae60;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }

        button:hover {
            background: #1e8449;
        }

        /* Links */
        a {
            display: block;
            margin-top: 10px;
            color: #27ae60;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

<div class="register-container">

    <h2>Register</h2>

    <?php if ($this->session->flashdata('error')): ?>
        <p class="error"><?= $this->session->flashdata('error'); ?></p>
    <?php endif; ?>

    <?php if (validation_errors()): ?>
        <div class="error">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <form action="<?= site_url('auth/process_register') ?>" method="POST">
        <input type="text" name="name" placeholder="Full Name" value="<?= set_value('name'); ?>" required>
        <input type="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
        <button type="submit">Register</button>
    </form>

    <a href="<?= site_url('Auth/login') ?>" class="login-link">Already have an account? Login</a>

</div>

</body>
</html> -->