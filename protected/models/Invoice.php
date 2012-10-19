<?php

/**
 * This is the model class for table "invoice".
 *
 * The followings are the available columns in table 'invoice':
 * @property integer $invoiceId
 * @property integer $stockNum
 * @property string $title
 * @property integer $customerNum
 * @property integer $invoiceNum
 * @property string $rentalDate
 * @property string $dueDate
 * @property integer $rentalPrice
 * @property string $rentalStatus
 */
class Invoice extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Invoice the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'invoice';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('stockNum, title, customerNum, invoiceNum, rentalDate, dueDate, rentalPrice, rentalStatus', 'required'),
			array('stockNum, customerNum, invoiceNum, rentalPrice', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>100),
			array('rentalDate, dueDate, rentalStatus', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('invoiceId, stockNum, title, customerNum, invoiceNum, rentalDate, dueDate, rentalPrice, rentalStatus', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'invoiceId' => 'Invoice',
			'stockNum' => 'Stock Num',
			'title' => 'Title',
			'customerNum' => 'Customer Num',
			'invoiceNum' => 'Invoice Num',
			'rentalDate' => 'Rental Date',
			'dueDate' => 'Due Date',
			'rentalPrice' => 'Rental Price',
			'rentalStatus' => 'Rental Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('invoiceId',$this->invoiceId);
		$criteria->compare('stockNum',$this->stockNum);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('customerNum',$this->customerNum);
		$criteria->compare('invoiceNum',$this->invoiceNum);
		$criteria->compare('rentalDate',$this->rentalDate,true);
		$criteria->compare('dueDate',$this->dueDate,true);
		$criteria->compare('rentalPrice',$this->rentalPrice);
		$criteria->compare('rentalStatus',$this->rentalStatus,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}