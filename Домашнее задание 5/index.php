<?php



$mysql = mysqli_connect('localhost', 'root', '', 'get_picture');

$mysql_query = mysqli_query($mysql, "SELECT address_pic FROM pictures;");

$br = '<br/>';

$pictures = [];

while ($row = mysqli_fetch_assoc($mysql_query)) {
    $pictures[] = $row;
}

mysqli_close($mysql_query);


foreach ($pictures as $picture) {
    
    foreach ($picture as $value) {
        echo $value.' ';
    }
    echo $br;
}
 






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.css" />
    <style>
        .thumb img {
            -webkit-filter: grayscale(0);
            filter: none;
            border-radius: 5px;
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 5px;
        }
 
        .thumb img:hover {
            -webkit-filter: grayscale(1);
            filter: grayscale(1);
        }
 
        .thumb {
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1 class="h3 text-center my-4">Галерея созданная с помощью Bootstrap</h1>
    <div class="row">
       
       <?php foreach ($pictures as $picture) : ?>
        <?php foreach ($picture as $value) :
            $pic[] = $value;
        ?>
        
        <div class="col-lg-3 col-md-4 col-6 thumb">
            <a data-fancybox="gallery" href="<?php echo $value; ?>">
                <img class="img-fluid" src="<?php echo $value; ?>"  alt="Картинка кошки">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6 thumb">
            <a data-fancybox="gallery" href="<?php echo $value; ?> ?>">
                <img class="img-fluid" src="<?php echo $value; ?> ?>" alt="Картинка обезьяны">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6 thumb">
            <a data-fancybox="gallery" href="<?php echo $value; ?> ?>">
                <img class="img-fluid" src="<?php echo $value; ?> ?>" alt="Картинка собаки">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6 thumb">
            <a data-fancybox="gallery" href="<?php echo $value; ?> ?>">
                <img class="img-fluid" src="<?php echo $value; ?> ?>" alt="Картинка человека">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6 thumb">
            <a data-fancybox="gallery" href="<?php echo $value; ?> ?>">
                <img class="img-fluid" src="<?php echo $value; ?> ?>" alt="Картинка медведя">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6 thumb">
            <a data-fancybox="gallery" href="<?php echo $value; ?> ?>">
                <img class="img-fluid" src="<?php echo $value; ?> ?>" alt="Картинка белки">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6 thumb">
            <a data-fancybox="gallery" href="<?php echo $value; ?> ?>">
                <img class="img-fluid" src="<?php echo $value; ?> ?>" alt="Картинка лягушки">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6 thumb">
            <a data-fancybox="gallery" href="<?php echo $value; ?> ?>">
                <img class="img-fluid" src="<?php echo $value; ?> ?>" alt="Картинка осьминога">
            </a>
        </div>
        <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.js"></script>
</body>
</html>