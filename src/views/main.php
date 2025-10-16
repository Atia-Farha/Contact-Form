<?php

include_once "./templates/header.php";

?>

<div class="container">
    <div class="form-container">
        <h1>Contact Us</h1>

        <?php if (isset($success_message)): ?>
            <p class="success"><?= htmlspecialchars($success_message); ?></p>
        <?php endif; ?>

        <?php if (isset($error_message)): ?>
            <p class="error"><?= htmlspecialchars($error_message); ?></p>
        <?php endif; ?>

        <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" placeholder="Your Name"
                    minlength="3" maxlength="70" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Your Email">
            </div>

            <div class="form-group">
                <label>Message</label>
                <textarea name="message" placeholder="Your Message"
                    required></textarea>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>

<?php

include_once "./templates/footer.php";

?>