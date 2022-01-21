<?php

use Egulias\EmailValidator\Result\Result;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%result}}`.
 */
class m220115_161324_create_result_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%result}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(),
            'email'=>$this->string(),
            'phone'=>$this->string(),
            'result'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%result}}');
    }
}
