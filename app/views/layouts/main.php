<?php
use yii\helpers\Html;

?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
        <head>
            <meta charset="<?= Yii::$app->charset ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="stylesheet" href="app.css">
            <?php $this->head() ?>
        </head>
        <body >
           <?php $this->beginBody() ?>
                <?= $content ?>
            <?php $this->endBody() ?>
           <script src="node_modules/vue/dist/vue.min.js"></script>
           <script src="script.js"></script>
        </body>

    </html>
<?php $this->endPage() ?>

