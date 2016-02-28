<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Edit Product</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Edit Product</h1>
            <form method = 'get' action = 'http://localhost:8000/product'>
                <button class = 'btn blue'>Product Index</button>
            </form>
            <br>
            <form method = 'POST' action = 'http://localhost:8000/product/{{$product->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="input-field col s6">
                    <input id="title" name = "title" type="text" class="validate" value="{{$product->title}}">
                    <label for="title">title</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="content" name = "content" type="text" class="validate" value="{{$product->content}}">
                    <label for="content">content</label>
                </div>
                                
                <button class = 'btn red' type ='submit'>Update</button>
            </form>
        </div>
    </body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
    <script type="text/javascript">
    $('select').material_select();
    </script>
</html>
