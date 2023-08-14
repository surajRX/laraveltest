<!DOCTYPE html>
<html>
    <head>
        <title>second project</title>
    </head>
    <body>
        <!-- <h1>the is the first program of laravel</h1> -->
        <form method="post">
            @csrf
           <input type="text" name="name"> 
           <input type="text" name="email"> 
           <input type="text" name="price"> 
           <input type="submit" value="submit">
        </form>
        
    </body>
</html>