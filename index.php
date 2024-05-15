<?php
require_once __DIR__.'/models/item.php';
$cibo_cane = new Item('cibo per cani', 29.3);
$cibo_gatto = new Item('cibo per gatti', 45);
$cuccia_cane = new Item('cuccia per cani', 100);
$itemsArray = [
    $cibo_cane,
    $cibo_gatto,
    $cuccia_cane,
];
$cibo_cane-> getDetails('cane', 'adulto', 'https://www.bauzaar.it/media/catalog/product/g/r/grafiche-magento-bauzaar_-_2024-02-13t151801.151.jpg?store=default&image-type=image','alimenti');
$cuccia_cane-> getDetails('cane', 'adulto', 'https://arcaplanet.vtexassets.com/arquivos/ids/227610/p-a-y--cuccia-alcazar-70.jpg?v=637454794658030000','cucce');
$cibo_gatto-> getDetails('gatto', 'adulto', 'https://m.media-amazon.com/images/I/81OPuo+tbFL._AC_UF894,1000_QL80_.jpg','alimenti');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container d-flex justify-content-center p-2">
        <div class="row">

            <?php foreach($itemsArray as $item) {?>
                <div class="col">
                    <div class="card h-100" style="width: 18rem;">
                        <img class="img" src="<?php echo $item->image ?>" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $item->name;?></h5>
                            <p class="card-text">
                                <div>
                                    <?php echo $item->price; ?>€</p>
                                </div>
                                <?php if($item->category=== 'cane'){ ?>
                                    <div>
                                        <i class="fa-solid fa-dog"></i> 
                                        tipologia: <?= $item->product ?>
                                    </div>
                                <?php } else{ ?>
                                    <div>
                                        <i class="fa-solid fa-cat"></i>
                                        tipologia: <?= $item->product ?>
                                    </div>
                                    <?php } ?>
                                
                        </div>
                        
                    </div>
                </div>
                <?php } ?>
            </div>

    </div>
</body>
</html>