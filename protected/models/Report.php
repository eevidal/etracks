<?php

/**
 * This is the model class for table "report".
 *
 * The followings are the available columns in table 'report':
 * @property integer $id
 * @property string $report
 * @property string $observation
 * @property integer $order_id
 * @property string $date
 * @property string $technician
 * @property integer $type
 * @property integer $count
 *
 * The followings are the available model relations:
 * @property ReportPart[] $reportParts
 * @property Budget[] $budgets
 * @property Order $order
 */
class Report extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'report';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('order_id, technician', 'required'),
			array('order_id, type, count','numerical', 'integerOnly'=>true),
			array('report, observation, date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, report, observation, order_id, date, technician, type, count', 'safe', 'on'=>'search'),
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
			'reportParts' => array(self::HAS_MANY, 'ReportPart', 'report_id'),
			'budgets' => array(self::HAS_MANY, 'Budget', 'id_report'),
			'order' => array(self::BELONGS_TO, 'Order', 'order_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
// 			'id' => 'ID',
// 			'report' => 'Report',
// 			'observation' => 'Observation',
// 			'order_id' => 'Order',
// 			'date' => 'Date',
// 			'technician' => 'Technician',
			'count'=>'Contador',
			'type' => 'Tipo',
			'id' => 'Nº de Informe',
			'technician' => 'Técnico',
			'report' => 'Informe',
			'observation' => 'Notas sobre la reparación/equipo',
			'order_id' => 'Nº de ingreso',
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
		$criteria->compare('report',$this->report,true);
		$criteria->compare('observation',$this->observation,true);
		$criteria->compare('order_id',$this->order_id);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('technician',$this->technician,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('count',$this->count);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Report the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
