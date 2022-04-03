<?php// use Yii;use soft\helpers\Html;use soft\helpers\ArrayHelper;function e($content = "", $doubleEncode = true){    return Html::encode($content, $doubleEncode);}function a($text, $url = null, $options = [], $icon = null){    return Html::a($text, $url, $options, $icon);}function tag($name, $content = '', $options = []){    if ($name === null || $name === false) {        return $content;    }    return Html::tag($name, $content, $options);}//<editor-fold desc="Icon functions" defaultstate="collapsed">/** * Icon functions * @param string $icon * @return string */function fa($icon = ''){    return "<i class='fa fa-{$icon}'></i>";}function far($icon = ''){    return "<i class='far fa-{$icon}'></i>";}function fas($icon = ''){    return Html::tag('i', "", ['class' => "fas fa-{$icon}"]);}function feather($icon = ''){    return Html::tag('i', "", ['data-feather' => $icon]);}//</editor-fold>/** * @see \yii\i18n\Formatter::asHtml() * @param $value * @param null $config * @return string */function as_html($value, $config = null){    return Yii::$app->formatter->asHtml($value, $config);}function as_integer($value, $options = [], $textOptions = []){    return Yii::$app->formatter->asInteger($value, $options, $textOptions);}function as_sum($value){    return Yii::$app->formatter->asSum($value);}function as_dollar($value){    return Yii::$app->formatter->asInteger($value) .'$';}