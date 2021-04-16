<?php

//Bu views ichidagi helper.php fayli

//use Yii;
use yii\helpers\Html;

echo Html::tag('p', 'Bu HTML helper.', ['class' => 'well']);
echo Html::tag('div', 'This is div', ['id' => 'div1']);
echo Html::tag('h1', 'This is header h1');
echo Html::tag('h2', 'This is header h2');
echo Html::tag('h3', 'This is header h3');
echo Html::tag('h4', 'This is header h4');
echo Html::tag('span', 'This is for span');
echo Html::tag('br');
// echo Html::encode(Html::tag('i', 'fa fa-user'));
// echo Html::tag('i', 'fa fa-user');
echo Html::decode(Html::tag('i', '', ['class' => 'fa fa-user']));
echo Html::tag('hr');
echo Html::button('Submit', ['class' => 'btn btn-success']);
echo Html::resetbutton('Submit', ['class' => 'btn btn-primary']);
echo Html::submitbutton('Submit', ['class' => 'btn btn-danger']);
echo Html::tag('hr');
echo Html::label('Surname', 'surname');
echo Html::input('text', 'surname', null, ['class' => 'form-control', 'placeholder' => 'Familiya']);
echo Html::tag('br');
echo Html::radio('Jinsingiz', null, ['label' => 'Erkak']);
echo Html::radio('Jinsingiz', null, ['label' => 'Ayol']);
echo Html::tag('br');
echo Html::checkbox('rozilik', null, ['label' => 'Shartlarga rozimisiz?']);
// echo Html::checkbox('rozilik', true, ['label' => 'Shartlarga rozimisiz?']);
echo Html::tag('br');
echo Html::dropDownList('viloyat', '', ['0' => 'Viloyatni tanlang', '1' => 'Toshkent', '2' => 'Farg\'ona'], ['class' => 'form-control']);
echo Html::tag('br');
echo Html::img('@web/rasmlar/1.png', ['class' => 'img-round', 'alt' => 'window', 'title' => 'window']);
echo Html::tag('hr');
echo Html::ul(['A' => 'A', 'B' => 'B', 'C' => 'C']);
echo Html::ol(['A' => 'A', 'B' => 'B', 'C' => 'C']);
?>