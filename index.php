<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anoneye</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        button {
            padding: 10px 20px;
            width:80%;
            margin: 10px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #007BFF;
            color: white;
        }
        button:hover {
            background-color: #0056b3;
        }
        
        
        body, html {
    height: 100%;
    overflow: hidden;
}

body {
    height: 100%;
    background: linear-gradient(20deg, 
        #FF5733, #FFBD33, #DBFF33, #75FF33, #33FF57, 
        #33FFBD, #33DBFF, #3375FF, #3357FF, #5733FF, 
        #BD33FF, #FF33DB, #FF3375, #FF3357, #FF33BD, 
        #FF33DB, #FF3375, #FF5733, #FFBD33, #DBFF33, 
        #75FF33, #33FF57, #33FFBD, #33DBFF, #3375FF
    );
    background-size: 300% 300%;
    animation: gradientAnimation 15s ease infinite;
}

@keyframes gradientAnimation {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

#text{
    font-size:20px;
    font-weight:50px;
    font-style:bold;
    font-style:underline;
}
    </style>
</head>
<body>
    <center>
    <h1>Welcome</h1>
    <p id="text">Click a button to go to a page</p>
    </center>
    <button onclick="window.location.href='sqr.html'">Root Value</button>
    <button onclick="window.location.href='trig.html'">Trigonometry Calculator</button>
    <button onclick="window.location.href='root.html'">Underoot Calculator</button>
    <button onclick="window.location.href='chem.html'">Preodic Table</button></button>
    
</body>
</html>
