<div class="row">
    <?php
    for ($i = 1; $i <= 100; $i++) {
        $result = "";
        if ($i % 3 == 0) {
            $result = "Fizz";
        }
        if ($i % 5 == 0) {
            $result .= "Buzz";
        }
        if ($result == "") {
            $result = $i;
        }
    ?>
        <div class="col-3 col-md-1">
            <?= $result; ?>
        </div>
    <?php } ?>
</div>