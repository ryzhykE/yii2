<header>
     <div class="banner-search">
        <div class="container"> 
            <div class="row">
                <div class="col-lg-3 col-sm-3 ">
              <div class="logo">
                    <a href="#"><img src="/frontend/web/images/IMG/logo1.png" alt="#"></a>
              </div>
            </div>
            <div class="col-lg-3 col-sm-4">
              <div class="title">
                    <img src="/frontend/web/images/IMG/title.png">
                </div>
            </div>
            <div class="col-lg-3 col-sm-4">
                <div class="cabinet">
                    <a href="#"><button type="button" class="btn btn-primary">Личный кабинет</button></a>
                </div>
            </div>
            </div> 
    <!-- banner -->
    <div class="searchbar">
    <h3>Покупка и Продажа</h3>
      <div  class="row">
      
      <?= \yii\helpers\Html::beginForm()?>
        <div class="col-lg-6 col-sm-6">
          <?= \yii\helpers\Html::textInput('search', '', ['class' => 'form-control', 'placeholder' => 'Поиск...']) ?>
          <div class="row">
             <div class="col-lg-3 col-sm-4 ">
              <?= \yii\helpers\Html::dropDownList('buy','', [
                                                            'Sale' => 'Продажа',
                                                            'Rent' => 'Аренда',
                                                            ], 
              ['class' => 'form-control', 'prompt' => 'Покупка']);
              ?>
            </div>
            <div class="col-lg-3 col-sm-4">
              <?= \yii\helpers\Html::dropDownList('buy','', [
                                                            '$150,000 - $200,000' => '$150,000 - $200,000',
                                                            '$200,000 - $250,000' => '$200,000 - $250,000',
                                                            '$250,000 - $300,000' => '$250,000 - $300,000',
                                                            '$300,000 - above' => '$300,000 - больше...',], 
                                                ['class' => 'form-control', 'prompt' => 'Цена']);
              ?>
            </div>
            <div class="col-lg-3 col-sm-4">
                <?= \yii\helpers\Html::dropDownList('buy','', [
                                                                'corn' => 'Зерно',
                                                                'milk' => 'Молоко',
                                                                'meat' => 'Мясо',], 
                                                    ['class' => 'form-control', 'prompt' => 'Категория']
                            );
                            ?>
              </div>
              <div class="col-lg-3 col-sm-4">
              <?= \yii\helpers\Html::submitButton('Найти', ['class' => 'btn btn-primary']) ?>
              </div>
              
              <?= \yii\helpers\Html::endForm() ?>
          </div>            
        </div>
      </div>
    </div>
  </div>
</div>
<!-- banner -->






























</header>