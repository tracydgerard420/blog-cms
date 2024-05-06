<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel=""stylesheet"  href="style.css">
</head>
<body>

    <style>
        body{
            background-color: grey;
        
        }
        header{
            font-size: 40px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-style: bold;
        }
        
        nav{
            text-align: center;

        }
        
    
     
    </style>
    <header>"Hello World!"</header>
    
    <nav>
        <li><a href="index.php">Homepage</a></li>
        <li><a href="post-submission.php">post-submission</a></li>


    </nav>


    <main>
        <form action="process.php" methods="post">
            <br>
               
                    <br>
                    Enter the title: <input type="text" id="Title" name="Title" value=" Title">
                    <br>
                    
                <br>
                    Enter your name:<input type="text" id="Name" name="Name" value="Name"><br>
                
                <input type="date" id="date" value="date"
                <br>
                <br>
               
                <br>
                <textarea name="blog" id="textbox" rows="12" cols="40" maxlength="2000"></textarea>
                <br>
                <br>
                <input type="submit" id= "submit" name="submit" value="submit">
        </form>
    </main>

    <footer></footer>

    
</body>
</html>