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

<hr>

<?php
$name_type = gettype($_POST['name']);
$bignumber = 111_234_567;
$number_info = var_dump($bignumber);

if ($name_type == "string"){
    echo 'Name variable type: string';
} else {
    echo $number_info;
    echo 'Why is your name a number?';
}
?>

<hr>

<?php
function paperwork(int $n, int $m): int
{
    if ($n < 0 || $m < 0 || $n == NAN || $m == NAN) {
        return 0;
    } else {
        return $n * $m;
    }
}

echo paperwork(5, 10);
?>