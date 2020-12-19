<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <link rel="shortcut icon" type="image/png" href="assets/img/code-512.png" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <title>FizzBuzz in PHP</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
</head>

<body>
    <div class="container main-title">
        <h1>FIZZ BUZZ IN PHP</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-5 mycodetitle">
                <h2>My Code</h2>
            </div>
            <div class="col-7">
                <div class="container fizz-buzz-code">
                    <p>
                        for ($i = 1; $i <= 100; $i++) { <br>
                            $result = "";<br>
                            if ($i % 3 == 0) {<br>
                            $result = "Fizz";<br>
                            }<br>
                            if ($i % 5 == 0) {<br>
                            $result .= "Buzz";<br>
                            }<br>
                            if ($result == "") {<br>
                            $result = $i;<br>
                            }<br>


                            $result;<br>

                            } </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container anim">
        <h2>The Result</h2>
    </div>
    <div class="container fizz-buzz-result">
        <?php include 'fizzbuzz/fizzbuzz.php'; ?>
    </div>
    <div class="container what" target="_blank">
        <div class="row">
            <div class="col-12">
                <a href="https://en.wikipedia.org/wiki/Fizz_buzz">
                    <p>Wait what is fizzbuzz?</p>
                </a>
            </div>
        </div>
    </div>
    <div class="container cp-container">
        <div class="row">
            <div class="col-12">
                <p>Handcrafted By <a href="https://valis-stamatis.me/">Valis Stamatis</a> </p>
            </div>
        </div>
    </div>
    <!-- JQ-->
    <!-- BS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.backgroundMove.js"></script>
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>

    <!-- MAIN -->
    <script src="assets/js/main.js"></script>

    <!-- ICONS -->
    <script src="https://kit.fontawesome.com/f35355652b.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
</body>

</html>