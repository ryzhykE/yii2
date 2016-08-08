<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "goods".
 *
 * @property integer $id_goods
 * @property string $town
 * @property string $location
 * @property string $categories
 * @property string $tovar
 * @property integer $prise
 * @property integer $bye
 * @property integer $sale
 * @property integer $client
 * @property string $general_image
 * @property string $properties
 * @property string $discription
 * @property string $delivery
 * @property string $phone
 * @property string $contacts
 * @property integer $visible
 * @property integer $hot
 * @property integer $created_at
 * @property integer $updated_at
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'goods';
    }
    
    //for date create and update
     public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
    
    //
    public function scenarios(){
        $scenarios = parent::scenarios();
        $scenarios['step2'] = ['general_image'];

        return $scenarios;
    }
    
    public function getUser(){
        return $this->hasOne(User::className(),['id' => 'client']);
    }
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['town', 'location', 'categories', 'tovar', 'prise', 'bye', 'sale',   'properties', 'discription', 'delivery', 'phone', 'contacts', 'visible', 'hot'], 'required'],
            [['prise', 'bye', 'sale',  'visible', 'hot', 'created_at', 'updated_at'], 'integer'],
            [['discription'], 'string'],
            [['town'], 'string', 'max' => 25],
            [['location', 'categories', 'tovar', 'properties', 'delivery', 'phone', 'contacts'], 'string', 'max' => 255],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_goods' => 'Id Goods',
            'town' => 'Town',
            'location' => 'Location',
            'categories' => 'Categories',
            'tovar' => 'Tovar',
            'prise' => 'Prise',
            'bye' => 'Bye',
            'sale' => 'Sale',
            'client' => 'Client',
            'general_image' => 'General Image',
            'properties' => 'Properties',
            'discription' => 'Discription',
            'delivery' => 'Delivery',
            'phone' => 'Phone',
            'contacts' => 'Contacts',
            'visible' => 'Visible',
            'hot' => 'Hot',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    
    public function afterValidate(){
        $this->client = Yii::$app->user->identity->id;
    }

    public function afterSave(){
        Yii::$app->locator->cache->set('id',$this->id_goods);
    }
    /**
     * @inheritdoc
     * @return GoodsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GoodsQuery(get_called_class());
    }
}
