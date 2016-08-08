<?php

/* @var $this yii\web\View */

$this->title = 'Агропрод';
?>



<?
use yii\helpers\Html;
?>




<div class="container large_menu">
    <div class="row">
        <div class="col-xs-12 first_line">
            <a href="#"><img src="images/IMG/milk.png" alt="" width="150" height="150"></a>
            <a href="#"><img src="images/IMG/meat.png" alt="" width="150" height="150"></a>
            <a href="#"><img src="images/IMG/fish.png" alt="" width="150" height="150"></a>
            <a href="#"><img src="images/IMG/drugs.png" alt="" width="150" height="150"></a>
            <a href="#"><img src="images/IMG/fruit.png" alt="" width="150" height="150"></a>
            <a href="#"><img src="images/IMG/zerno.png" alt="" width="150" height="150"></a>
            <a href="#"><img src="images/IMG/pis.png" alt="" width="150" height="150"></a>
        </div>
        <div class="col-xs-12 second_line">
            <a href="#"><img src="images/IMG/egg.png" alt="" width="150" height="150"></a>
            <a href="#"><img src="images/IMG/bread.png" alt="" width="150" height="150"></a>
            <a href="#"><img src="images/IMG/tea.png" alt="" width="150" height="150"></a>
            <a href="#"><img src="images/IMG/maslo.png" alt="" width="150" height="150"></a>
            <a href="#"><img src="images/IMG/pepper.png" alt="" width="150" height="150"></a>
            <a href="#"><img src="images/IMG/kids.png" alt="" width="150" height="150"></a>
            <a href="#"><img src="images/IMG/water.png" alt="" width="150" height="150"></a>
        </div>
    </div>
</div>
<div class="container">
    <div class="properties-listing spacer"> <a href="#"  class="pull-right viewall">View All Listing</a>
        <h2>Хиты продаж</h2>
        <div id="owl-example" class="owl-carousel">
        
        
            <?
            foreach($featured as $row):
                ?>

                <div class="properties">
                    <div class="image-holder"><img src="<?=\frontend\components\Common::getImageGoods($row)[0] ?>"  class="img-responsive" alt="properties"/>
                        <div class="status <?=($row['sold']) ? 'sold' : 'new' ?>"><?=\frontend\components\Common::getType($row) ?></div>
                    </div>
                    <h4><a href="" ></a><?=$row['tovar'] ?></h4>
                    <p class="price">Price: $ <?=$row['prise'] ?></p>
                    <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?=$row['categories'] ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><?=$row['livingroom'] ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><?=$row['parking'] ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?=$row['kitchen'] ?></span> </div>
                    <a class="btn btn-primary" href="" >View Details</a>
                </div>

            <?
            endforeach;
            ?>
        
        
        
        
            
           
            
            <div class="properties">
                <div class="image-holder"><img src="images/properties/1.jpg"  class="img-responsive" alt="properties"/>
                    <div class="status sold">Sold</div>
                </div>
                <h4><a href="#" >Royal Inn</a></h4>
                <p class="price">Price: $234,900</p>
                <a class="btn btn-primary" href="#" >Детальный просмотр</a>
            </div>
        </div>
    </div>
</div>








