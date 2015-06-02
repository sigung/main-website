<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $this->Html->charset(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords"
          content="Kung Fu, Tai Chi, Tai Chi Chuan, self defense, karate, fitness, sandy, Utah, Arizona, Marital Arts">
    <meta name="Description"
          content="Shaolin Arts is a family system of martial arts over 3,000 years old. Common western terms used to describe it would be Kung Fu, Tai Chi Chuan, Karate, Self Defense, Wushu, Animal Styles, Mixed Martial Arts, Chi Qi Gung or grappling. ">
    <title>Shaolin Arts</title>
    <?php
        echo $this->Html->css('shaolinarts');
        echo $this->Html->script('jquery-1.11.1.min.js');
    ?>
</head>
<body>
<div class="container">
    <div class="row header">
        <div class="row corpus">
            <div class="sectionContent">
                <section class="contentCol">
                <?php echo $this->fetch('content'); ?>
                </section>
            </div>
        </div>
    </div>
    <?php echo $this->element('sql_dump'); ?>
</div>
</body>
</html>