<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
</head>
<body>
    

    <h3>{{$blogs['blogs']}}</h3>


    <form action="/blogs/update" method="post">
        @csrf
        标题： <input type="text" name="title" id="">
        <br>
        内容： <input type="text" name="content" id="">
        <br>
        <input type="submit" value="提交">
    </form>

</body>
</html>