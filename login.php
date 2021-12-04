
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        body{
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
            height:100vh;
            text-align:center;
            background-image: url("back.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        form{
            border: 2px solid rgb(107, 107, 107);
            border-radius: 5px;
            padding:10px;
            background-color:white;
        }
        input{
            text-align:center;
        }
    </style>
</head>
<body>


    <form action="choose.php" method="post">
        <p>Input you UserName</p>
        <input type="text" name="user" required>
        <br>
        <br>
        <input type="submit" name="submit" value="LOGIN">
    </form>

</body>
</html>

