<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadFile extends Model{

 public $img;
    public function attributeLabels()
    {
        return [
            'img' => 'Изображение записи',
        ];
    }
     public function rules(){
     return[
            [['img'], 'file'],
        ];
 }

 public function upload(){
if($this->validate() && $this->img!==null){
    $this->img->name = rand(1,9999)."_".date("U").".".$this->img->extension;
    $this->img->saveAs("uploads/{$this->img->name}");
return true;
}else{
return false;
}
}

}