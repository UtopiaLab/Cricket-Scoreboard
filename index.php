<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="jquery-3.5.1.js"></script>
    <script>
            setInterval(function () {
                $.ajax({
                    url: "data.txt",
                    cache:false,
                    success: function (result) {
                        $("#txtLoad").html(result);
                    }
                });
            },1000);
    </script>
</head>
<body>
<div class="layer">
<div class="loader" id="txtLoad"><h2>Please Wait...!</h2></div>
</div>
</body>
</html>
