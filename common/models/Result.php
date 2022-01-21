<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "result".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $result
 */
class Result extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'result';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'result'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'result' => 'Result',
        ];
    }
    public function  getResult(){
        $number=rand(10,32);
        if($number <= 15){
            $this->result = 'Агресивний';
        }if($number>= 16 and $number<=21 ){
            $this->result='Кон';
        }else(
            $this->result='Впевнений');
    }
}
