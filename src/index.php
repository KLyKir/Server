<html>
<head>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script>
        function calculate(operation) {
            $.ajax({
                type: "POST",
                url: "calculate.php",
                data: {num: $('#num').val(), operation: operation},
                success: function (result) {
                    $('#num').val(result);
                }
            });
        }
    </script>
</head>
<body>
    <input type = "number" id = "num">
    <button onclick= "calculate(0)" name = "add">+</button>
    <button onclick = "calculate(1)" name = "minus">-</button>
    <button onclick = "calculate(2)" name = "multiplication">*</button>
    <button onclick = "calculate(3)" name = "decimal">/</button>
    <button onclick = "calculate(4)" name = "clear">C</button>
</body>
</html>
