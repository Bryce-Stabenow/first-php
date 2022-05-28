<h1> Hi <?php echo htmlspecialchars($_POST['name']) ?>. </h1>

<h2> You are <?php echo (int)$_POST['age'] ?> years old. </h2>

<h2>
    <?php if($_POST['age'] < 18): ?>
        Wow, you are young!
    <?php elseif ($_POST['age'] < 40): ?>
        You are an adult!
    <?php else: ?>
        You are quite old...
    <?php endif; ?>
</h2>

<?php
echo gettype($_POST['name'])
?>