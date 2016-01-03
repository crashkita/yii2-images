<?php

use yii\db\Schema;

class m140622_111540_create_image_table extends \yii\db\Migration
{
    public function up()
    {
        $this->createTable('image', [
            'id' => 'pk',
            'filePath' => $this->string(400)->notNull(),
            'itemId' => $this->integer(20)->notNull(),
            'isMain' => $this->integer(1),
            'modelName' => $this->string(150)->notNull(),
            'urlAlias' => $this->string(400)->notNull(),
        ]);

    }

    public function down()
    {
        echo "m140622_111540_create_image_table cannot be reverted.\n";

        return false;
    }
}
