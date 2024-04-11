<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Hedvig+Letters+Serif:opsz@12..24&family=Honk&display=swap');
        body{
            font-family: 'Hedvig';
            background-color: black;
            color: white;
        }
        .container {
    display: flex;
    /* grid-template-columns: repeat(auto-fill, minmax(150, 1fr));
    gap: 20; */
    flex-wrap: wrap;    
    justify-content: center;
    align-items: center;
    padding: 15px;
}

.product {
    background-color: #ffffff;
    border: 1px solid #ff0000;
    padding: 10px;
    margin: 5px;
    width: 180px;
    text-align: center;
}

/* Estiliza cada item da lista de produtos */
li {
    background-color: #333;
    color: white;
    width: 150px;
    height: 150px;
    margin: 10px;
    padding: 8px;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
}

li a {
    color: white;
    text-decoration: none;
}
h2, h3 {
    text-align: center;
}
        a{
            color: white;
        }
    </style>
    <title>Dropshipping</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>