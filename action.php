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

<hr>

<?php
    echo 'Hello, '.'General Kenobi...';

function points(array $games): int
{
    $totalScore = 0;

    //Get each item in the array
    foreach ($games as $scores) {
        //Compare each game score by creating xScore and yScore variables
        $x = $scores[0];
        $y = $scores[2];
        //Update totalScore based on the result
        if ($x > $y
        ) {
            $totalScore += 3;
        } elseif ($x == $y) {
            $totalScore += 1;
        }
    }

    return $totalScore;
}
echo points(['1:0', '2:0', '3:0', '4:0', '2:1', '3:1', '4:1', '3:2', '4:2', '4:3']);
?>

<hr>

<?php
function move($pos, $roll)
{
    return $pos + $roll + $roll;
}
echo move(1, 5);

function arrFix($numbers)
{
    $highest = max($numbers);
    $lowest = min($numbers);
    $fixedArr = [];

    for ($x = $lowest; $x <= $highest; $x++) {
        array_push($fixedArr, $x);
    }

    return $fixedArr;
}
function arrFixEZ($numbers)
{
    return range(min($numbers), max($numbers))
}
echo arrFix([1,9]);
echo arrFixEZ([1, 9]);
?>