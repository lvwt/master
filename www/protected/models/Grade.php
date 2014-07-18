<?php

/**
 * This is the model class for table "grade".
 *
 * The followings are the available columns in table 'grade':
 * @property integer $id
 * @property string $times
 * @property string $sid
 * @property string $考号
 * @property string $姓名
 * @property string $班级
 * @property double $总分
 * @property double $标准分
 * @property double $班名
 * @property double $校名
 * @property double $语文
 * @property double $班名1
 * @property double $校名1
 * @property double $数学
 * @property double $班名2
 * @property double $校名2
 * @property double $英语
 * @property double $班名3
 * @property double $校名3
 * @property double $物理
 * @property double $班名4
 * @property double $校名4
 * @property double $化学
 * @property double $班名5
 * @property double $校名5
 * @property double $生物
 * @property double $班名6
 * @property double $校名6
 * @property double $政治
 * @property double $班名7
 * @property double $校名7
 * @property double $历史
 * @property double $班名8
 * @property double $校名8
 * @property double $地理
 * @property double $班名9
 * @property double $校名9
 * @property string $时间
 */
class Grade extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Grade the static model class
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
		return 'grade';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('总分, 标准分, 班名, 校名, 语文, 班名1, 校名1, 数学, 班名2, 校名2, 英语, 班名3, 校名3, 物理, 班名4, 校名4, 化学, 班名5, 校名5, 生物, 班名6, 校名6, 政治, 班名7, 校名7, 历史, 班名8, 校名8, 地理, 班名9, 校名9', 'numerical'),
			array('times', 'length', 'max'=>50),
			array('sid, 考号, 姓名, 班级', 'length', 'max'=>255),
			array('时间', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, times, sid, 考号, 姓名, 班级, 总分, 标准分, 班名, 校名, 语文, 班名1, 校名1, 数学, 班名2, 校名2, 英语, 班名3, 校名3, 物理, 班名4, 校名4, 化学, 班名5, 校名5, 生物, 班名6, 校名6, 政治, 班名7, 校名7, 历史, 班名8, 校名8, 地理, 班名9, 校名9, 时间', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'times' => 'Times',
			'sid' => '身份证',
			'考号' => '考号',
			'姓名' => '姓名',
			'班级' => '班级',
			'总分' => '总分',
			'标准分' => '标准分',
			'班名' => '班名',
			'校名' => '校名',
			'语文' => '语文',
			'班名1' => '班名1',
			'校名1' => '校名1',
			'数学' => '数学',
			'班名2' => '班名2',
			'校名2' => '校名2',
			'英语' => '英语',
			'班名3' => '班名3',
			'校名3' => '校名3',
			'物理' => '物理',
			'班名4' => '班名4',
			'校名4' => '校名4',
			'化学' => '化学',
			'班名5' => '班名5',
			'校名5' => '校名5',
			'生物' => '生物',
			'班名6' => '班名6',
			'校名6' => '校名6',
			'政治' => '政治',
			'班名7' => '班名7',
			'校名7' => '校名7',
			'历史' => '历史',
			'班名8' => '班名8',
			'校名8' => '校名8',
			'地理' => '地理',
			'班名9' => '班名9',
			'校名9' => '校名9',
			'时间' => '时间',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('times',$this->times,true);
		$criteria->compare('sid',$this->sid,true);
		$criteria->compare('考号',$this->考号,true);
		$criteria->compare('姓名',$this->姓名,true);
		$criteria->compare('班级',$this->班级,true);
		$criteria->compare('总分',$this->总分);
		$criteria->compare('标准分',$this->标准分);
		$criteria->compare('班名',$this->班名);
		$criteria->compare('校名',$this->校名);
		$criteria->compare('语文',$this->语文);
		$criteria->compare('班名1',$this->班名1);
		$criteria->compare('校名1',$this->校名1);
		$criteria->compare('数学',$this->数学);
		$criteria->compare('班名2',$this->班名2);
		$criteria->compare('校名2',$this->校名2);
		$criteria->compare('英语',$this->英语);
		$criteria->compare('班名3',$this->班名3);
		$criteria->compare('校名3',$this->校名3);
		$criteria->compare('物理',$this->物理);
		$criteria->compare('班名4',$this->班名4);
		$criteria->compare('校名4',$this->校名4);
		$criteria->compare('化学',$this->化学);
		$criteria->compare('班名5',$this->班名5);
		$criteria->compare('校名5',$this->校名5);
		$criteria->compare('生物',$this->生物);
		$criteria->compare('班名6',$this->班名6);
		$criteria->compare('校名6',$this->校名6);
		$criteria->compare('政治',$this->政治);
		$criteria->compare('班名7',$this->班名7);
		$criteria->compare('校名7',$this->校名7);
		$criteria->compare('历史',$this->历史);
		$criteria->compare('班名8',$this->班名8);
		$criteria->compare('校名8',$this->校名8);
		$criteria->compare('地理',$this->地理);
		$criteria->compare('班名9',$this->班名9);
		$criteria->compare('校名9',$this->校名9);
		$criteria->compare('时间',$this->时间,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}