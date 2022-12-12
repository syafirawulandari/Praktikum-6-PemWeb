<form method="get">
    <p>INSERT NUMBERS IN THE COLUMN BELOW!!</p>
    <input type="number" name="value" class="column"><br>
    <input type="submit">
</form>

<div class="result">
    <?php
        function intToRoman($integer) {
        $romawi = array(
            'M'  => 1000,
            'CM' => 900,
            'D'  => 500,
            'CD' => 400,
            'C'  => 100,
            'XC' => 90,
            'L'  => 50,
            'XL' => 40,
            'X'  => 10,
            'IX' => 9,
            'V'  => 5,
            'IV' => 4,
            'I'  => 1
        );
        $hasil = '';
            foreach ($romawi as $roman => $number) {
                $matches = intval($integer/$number);
                $hasil .= str_repeat($roman, $matches);
                $integer = $integer % $number;
            }
            return $hasil;
        }

        if(isset($_GET['value'])) {
            $value = $_GET['value'];

            echo $value ." = ".intToRoman($value);
        }
    ?>
</div>

<style>
    body {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        background-color: #f79eef;
    }
    form {
        align-items: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-top: 200px;
    }
    .result {
        align-items: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .column {
        border-radius: 5px;
        border-color: #7c065f;
        width: auto;
        padding: 10px;
    }
</style>