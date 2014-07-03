<?php

/**
 * This is the model class for table "tracker".
 *
 * The followings are the available columns in table 'tracker':
 * @property integer $id
 * @property string $date
 * @property string $technician
 * @property integer $order_id
 * @property integer $status_id
 * @property string $time
 *
 * The followings are the available model relations:
 * @property Order $order
 * @property Status $status
 */
class Tracker extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tracker';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date, technician', 'required'),
			array('order_id, status_id', 'numerical', 'integerOnly'=>true),
			array('time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, date, technician, order_id, status_id, time', 'safe', 'on'=>'search'),
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
			'order' => array(self::BELONGS_TO, 'Order', 'order_id'),
			'status' => array(self::BELONGS_TO, 'Status', 'status_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
// 			'id' => 'ID',
// 			'date' => 'Date',
// 			'technician' => 'Technician',
// 			'order_id' => 'Order',
// 			'status_id' => 'Status',
// 			'time' => 'Time',
			'id' => 'ID',
			'date' => 'Fecha','Date',
			'technician' => 'Técnico','Technician',
			'order_id' => 'Orden','Order',
			'status_id' => 'Estado','Status',
			'time' => 'Hora',

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

		$criteria->compare('id',$this->id);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('technician',$this->technician,true);
		$criteria->compare('order_id',$this->order_id);
		$criteria->compare('status_id',$this->status_id);
		$criteria->compare('time',$this->time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tracker the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
