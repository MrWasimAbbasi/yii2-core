<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%license_statistics}}`.
 */
class m220629_050249_create_license_statistics_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%license_statistics}}', [
            'id' => $this->primaryKey(),
            'license_no' => $this->string()->unique()->notNull(),
            'name' => $this->string()->notNull(),
            'father_name' => $this->string()->notNull(),
            'cnic' => $this->string()->notNull()->unique(),
            'address' => $this->string(),
            'licence_category' => $this->string(),
            'issue_date' => $this->date()->notNull(),
            'expiry_date' => $this->date()->notNull(),
            'other_information' => $this->text()->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%license_statistics}}');
    }
}
