<?php

$photo_cat = "photo/cat.jpg"; 
$photo_monkey = "photo/monkey.jpg";
$photo_dog = "photo/dog.jpg";
$photo_man = "photo/man.jpg";
$photo_bear = "photo/bear.jpg";
$photo_squirrel = "photo/squirrel.jpg";
$photo_frog = "photo/frog.jpg";
$photo_octopus = "photo/octopus.jpg";

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
        <div class="col-lg-3 col-md-4 col-6 thumb">
            <a data-fancybox="gallery" href="<?php echo $photo_cat; ?>">
                <img class="img-fluid" src="<?php echo $photo_cat; ?>"  alt="Картинка кошки">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6 thumb">
            <a data-fancybox="gallery" href="<?php echo $photo_monkey; ?>">
                <img class="img-fluid" src="<?php echo $photo_monkey; ?>" alt="Картинка обезьяны">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6 thumb">
            <a data-fancybox="gallery" href="<?php echo $photo_dog; ?>">
                <img class="img-fluid" src="<?php echo $photo_dog; ?>" alt="Картинка собаки">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6 thumb">
            <a data-fancybox="gallery" href="<?php echo $photo_man; ?>">
                <img class="img-fluid" src="<?php echo $photo_man; ?>" alt="Картинка человека">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6 thumb">
            <a data-fancybox="gallery" href="<?php echo $photo_bear; ?>">
                <img class="img-fluid" src="<?php echo $photo_bear; ?>" alt="Картинка медведя">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6 thumb">
            <a data-fancybox="gallery" href="<?php echo $photo_squirrel; ?>">
                <img class="img-fluid" src="<?php echo $photo_squirrel; ?>" alt="Картинка белки">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6 thumb">
            <a data-fancybox="gallery" href="<?php echo $photo_frog; ?>">
                <img class="img-fluid" src="<?php echo $photo_frog; ?>" alt="Картинка лягушки">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6 thumb">
            <a data-fancybox="gallery" href="<?php echo $photo_octopus; ?>">
                <img class="img-fluid" src="<?php echo $photo_octopus; ?>" alt="Картинка осьминога">
            </a>
        </div>
        
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.js"></script>
</body>
</html>