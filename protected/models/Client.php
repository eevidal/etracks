<?php

/**
 * This is the model class for table "client".
 *
 * The followings are the available columns in table 'client':
 * @property integer $id
 * @property string $name
 * @property string $comercial_name
 * @property string $address1
 * @property string $phone1
 * @property string $phone2
 * @property string $mail
 * @property string $comment
 * @property string $city
 * @property string $contact
 * @property string $type
 * @property string $postal_code
 * @property string $address2
 *
 * The followings are the available model relations:
 * @property Order[] $orders
 */
class Client extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */

	public function tableName()
	{
		return 'client';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, comercial_name',  'required'),
			array('address1, phone1, phone2, mail, city', 'length', 'max'=>128),
			array('comment, contact, type, postal_code, address2', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, comercial_name,  mail, city, contact,  postal_code',  'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'orders' => array(self::HAS_MANY, 'Order', 'client_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Número de Cliente',
			'name' => 'Nombre',
			'comercial_name' => 'Razón Social',
			'address1' => 'Dirección',
			'phone1' => 'Teléfono',
			'phone2' => 'Teléfono',
			'mail' => 'Mail',
			'comment' => 'Comentarios',
			'city' => 'Ciudad',
			'contact' => 'Contacto',
			'type' => 'Tipo',
			'postal_code' => 'Código postal',
			'address2' => 'Dirección 2',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('comercial_name',$this->comercial_name,true);
 		$criteria->compare('address1',$this->address1,true);
 		$criteria->compare('phone1',$this->phone1,true);
 		$criteria->compare('phone2',$this->phone2,true);
		$criteria->compare('mail',$this->mail,true);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('contact',$this->contact,true);
		$criteria->compare('type',$this->type,true);
 		$criteria->compare('postal_code',$this->postal_code,true);
 		$criteria->compare('address2',$this->address2,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Client the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	
}
