<?php


class NewsController
{
    public function actionIndex(){
        echo "NewsController actionIndex";
        return true;
    }

    public function actionView($id){
        echo "NewsController actionView";
        echo $id;
        return true;
    }
}