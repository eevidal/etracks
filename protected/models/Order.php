<?php

/**
 * This is the model class for table "order".
 *
 * The followings are the available columns in table 'order':
 * @property integer $id
 * @property string $date
 * @property integer $equipment_id
 * @property integer $client_id
 * @property string $fail
 * @property boolean $warranty
 * @property integer $status_id
 * @property string $adicional
 *
 * The followings are the available model relations:
 * @property Report[] $reports
 * @property Client $client
 * @property Equipment $equipment
 * @property Status $status
 * @property Tracker[] $trackers
 */
class Order extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
		
	public function tableName()
	{
		return 'order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date, equipment_id, client_id, fail, status_id', 'required'),
			array('equipment_id, client_id, status_id', 'numerical', 'integerOnly'=>true),
			array('warranty, adicional', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, date, equipment_id, client_id, fail, warranty, status_id, adicional', 'safe', 'on'=>'search'),
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
		//	'report' => array(self::BELONGS_TO, 'Report', 'order_id'),
			'client' => array(self::BELONGS_TO, 'Client', 'client_id'),
			'equipment' => array(self::BELONGS_TO, 'Equipment', 'equipment_id'),
			'status' => array(self::BELONGS_TO, 'Status', 'status_id'),
			'trackers' => array(self::HAS_MANY, 'Tracker', 'order_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Número de Orden',
			'date' => 'Fecha de ingreso',
			'equipment_id' => 'Equipo',
			'client_id' => 'Cliente',
			'fail' => 'Falla comunicada',
			'warranty' => 'Garantía',
			'status_id' => 'Estado',
			'adicional' => 'Adicionales (accesorios/cartucho/partes)',
			'observation'=>'Observaciones',
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
		$criteria->compare('equipment_id',$this->equipment_id);
		$criteria->compare('client_id',$this->client_id);
		$criteria->compare('fail',$this->fail,true);
		$criteria->compare('warranty',$this->warranty);
		$criteria->compare('status_id',$this->status_id);
		$criteria->compare('adicional',$this->adicional,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Order the static model class
	 */
	 
		
	public function SearchByStatus($status) {
		
		$criteria=new CDbCriteria;
		$criteria->compare('status_id',$status);
		$orders = Order::model()->findAll($criteria); 
		
	//	if (!empty($orders)) {
			$return_array[]=array();
			foreach($orders as $order) {
				$return_array[] = array(
					'id'=>$order->id,
					'client'=>$order->client->name,
					'equipment'=>$order->equipment->name,
					'date'=>$order->date,
					);
			}
			
		return $return_array;
	//	}
	//		else return NULL;
// 		return new CActiveDataProvider($this, array(
// 			'criteria'=>$criteria,
// 		));
	}	 
	 
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
		
}
