<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Link to stylesheet -->
    <!--<link rel="stylesheet" href="css/main.css">-->
</head>
<body>

    <section class="wrapper-main">
        <form action="example.html" method="get">
        <label for="firstname">Firstname</label>    
        <br>
        <input type="text" id="firstname" name="firstname" placeholder="Firstname">
        <br><br>
        <label for="message">Type something cool</label>
        <br>
        <textarea name="message" id="message" placeholder="Write a message..." cols="30" rows="10"></textarea>
        </form>
    </section>
    <?php
        $name = "Noel Radhakrishnan";
    ?>
    <p>Hi, my name is <?php echo $name ?>. And, this is my PHP website!</p>

    
</body>
</html>
