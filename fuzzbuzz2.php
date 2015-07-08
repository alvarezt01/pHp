<!doctype html>

<html lang="en">
<head>
    <title><!-- Insert your title here --></title>
</head>
<body>
    <?php
        for ($i = 1; $i <= 100; $i++){
	if ($i % 3 == 0 && $i % 5 == 0){
		echo $i . " FizzBuzz" . "<br>";
	}
	else if ($i % 3 == 0){
		echo $i . " Fizz" . "<br>";
	}
	else if ($i % 5 == 0){
		echo $i . " Buzz" . "<br>";
	}
	else{
		echo $i . "<br>";
	}
}
    ?>
</body>
</html>