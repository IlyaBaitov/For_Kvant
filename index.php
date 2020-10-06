<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Блог</title>

    <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous">
    </script>



</head>
<body>
    <form action="./Articles/article.php" method="post">
        <input type="submit" name="Car" id="Car" value="Машинки">
        <input type="submit" name="Hunt" id="Hunt" value="Охота">
        <input type="submit" name="Food" id="Food" value="Еда"><br><br><br>
    </form>









    <input type="text" name="title" class="title"><br>
    <textarea name="content" class="content" cols="30" rows="10"></textarea>
    <input type="submit" class="sub">


    <script>
        $(document).ready(function(){
           $('input.sub').on('click', function() {
               var titleValue = $('input.title').val();
               var contentValue = $('textarea.content').val();

               // отправить каким-то образом, наши данные, отсюда, в файл some.php
               $.ajax({
                   method: "POST",
                   url: "some.php",
                   data: { title: titleValue, content: contentValue }
               })
                   .done(function( msg ) {
                       alert( "Data Saved: " + msg );
                   });

               $('input.title').val('');
               $('textarea.content').val('');
           });
        });
    </script>

</body>
</html>