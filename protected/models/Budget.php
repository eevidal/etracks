<?php

/**
 * This is the model class for table "budget".
 *
 * The followings are the available columns in table 'budget':
 * @property integer $id
 * @property integer $id_order
 * @property integer $id_report
 * @property integer $id_user
 * @property string $date
 * @property string $budget
 *
 * The followings are the available model relations:
 * @property Order $idOrder
 * @property Report $idReport
 * @property User $idUser
 */
class Budget extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'budget';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_order, id_report, id_user', 'required'),
			array('id_order, id_report, id_user', 'numerical', 'integerOnly'=>true),
			array('date, budget', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_order, id_report, id_user, date, budget', 'safe', 'on'=>'search'),
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
			'idOrder' => array(self::BELONGS_TO, 'Order', 'id_order'),
			'idReport' => array(self::BELONGS_TO, 'Report', 'id_report'),
			'idUser' => array(self::BELONGS_TO, 'User', 'id_user'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_order' => 'Nº de Orden',
			'id_report' => 'Id Report',
			'id_user' => 'Id User',
			'date' => 'Fecha',
			'budget' => 'Presupuesto',
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
		$criteria->compare('id_order',$this->id_order);
		$criteria->compare('id_report',$this->id_report);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('budget',$this->budget,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Budget the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
