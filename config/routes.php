<?php

// Возращаем массив с путями на сайте
return array(
    '' => 'main/index',
    'news/([0-9]+)' => 'news/view/$1', // При переходе на /news/число будет вызван actonView у NewsController
    'news' => 'news/index',   // При переходе на /news будет вызван actonIndex у NewsController
    'product' => 'product/list',   // При переходе на /products будет вызван actonList у ProductController
);