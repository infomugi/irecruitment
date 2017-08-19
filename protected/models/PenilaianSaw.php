<?php

/**
 * This is the model class for table "penilaian_saw".
 *
 * The followings are the available columns in table 'penilaian_saw':
 * @property integer $id_penilaian_saw
 * @property string $tanggal
 * @property integer $penilai_id
 * @property integer $user_id
 * @property integer $pelamar_id
 * @property integer $lamaran_id
 * @property integer $lowongan_id
 * @property integer $c1
 * @property integer $c2
 * @property integer $c3
 * @property integer $c4
 * @property integer $c5
 * @property integer $c6
 * @property integer $c7
 * @property integer $nilai
 * @property integer $status
 */
class PenilaianSaw extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'penilaian_saw';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
		return array(
			array('tanggal, penilai_id, user_id, pelamar_id, lowongan_id, lamaran_id, c1, c2, c3, c4, c5, c6, c7, nilai', 'required','on'=>'create'),
			array('status', 'required','on'=>'verifikasi'),
			array('penilai_id, pelamar_id, user_id,  lowongan_id, lamaran_id, c1, c2, c3, c4, c5, c6, c7, status', 'numerical', 'integerOnly'=>true),
			array('nilai', 'numerical'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
			array('id_penilaian_saw, tanggal, penilai_id, lowongan_id, pelamar_id, c1, c2, c3, c4, c5, c6, c7, nilai, status', 'safe', 'on'=>'search'),
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
			'Penilai'=>array(self::BELONGS_TO,'Account','penilai_id'),
			'Pelamar'=>array(self::BELONGS_TO,'User','pelamar_id'),
			'Character'=>array(self::BELONGS_TO,'Crips','c1'),
			'Capacity'=>array(self::BELONGS_TO,'Crips','c2'),
			'Capital'=>array(self::BELONGS_TO,'Crips','c3'),
			'Collateral'=>array(self::BELONGS_TO,'Crips','c4'),
			'Condition'=>array(self::BELONGS_TO,'Crips','c5'),
			'Cashflow'=>array(self::BELONGS_TO,'Crips','c6'),
			'Culture'=>array(self::BELONGS_TO,'Crips','c7'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_penilaian_saw' => 'Id Penilaian Saw',
			'tanggal' => 'Tanggal',
			'penilai_id' => 'Penilai',
			'pelamar_id' => 'Pelamar',
			'lowongan_id' => 'Lowongan',
			'lamaran_id' => 'Lamaran',
			'c1' => 'Inverview HR',
			'c2' => 'Tes Komputer',
			'c3' => 'Tes Psikotest',
			'c4' => 'Tes Inventory',
			'c5' => 'Tes Kemampuan',
			'c6' => 'Tes Suara',
			'c7' => 'Interview Client',
			'nilai' => 'Hasil Penilaian',
			'status' => 'Status',
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

		$criteria->compare('id_penilaian_saw',$this->id_penilaian_saw);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('penilai_id',$this->penilai_id);
		$criteria->compare('pelamar_id',$this->pelamar_id);
		$criteria->compare('lowongan_id',$this->lowongan_id);
		$criteria->compare('lamaran_id',$this->lamaran_id);
		$criteria->compare('c1',$this->c1);
		$criteria->compare('c2',$this->c2);
		$criteria->compare('c3',$this->c3);
		$criteria->compare('c4',$this->c4);
		$criteria->compare('c5',$this->c5);
		$criteria->compare('c6',$this->c6);
		$criteria->compare('c7',$this->c7);
		$criteria->compare('nilai',$this->nilai);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PenilaianSaw the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function Check($atribut,$nilai,$id,$criteria){
		$kriteria=Kriteria::model()->findByPk($atribut);
		if($kriteria->atribut==1){
			$data = Yii::app()->db->createCommand("SELECT MAX(".$criteria.") FROM penilaian_saw")->queryScalar();
			$max = Crips::model()->findByPk($data);
			return round($nilai/$max->nilai,2);
		}else{
			$data = Yii::app()->db->createCommand("SELECT MIN(".$criteria.") FROM penilaian_saw")->queryScalar();
			$min = Crips::model()->findByPk($data);
			return round($min->nilai/$nilai,2);	
		}
	}

	public static function result($nilai,$id)
	{
		$model=PenilaianSaw::model()->findByPk($id);
		$model->nilai = $nilai;
		$model->update();
		return $model->nilai;
	} 	    

	public function goodCustomer(){
		$data = Yii::app()->db->createCommand("SELECT MAX(penilaian_saw.nilai) as nilai, customer.nama as nama  FROM penilaian_saw LEFT JOIN pelamar ON penilaian_saw.pelamar_id=pelamar.id_people")->queryScalar();
		return round($data,4);
	}    		

	public function bobot($kode){
		$bobot = Yii::app()->db->createCommand("SELECT bobot FROM kriteria where kode='".$kode."'")->queryScalar();
		return $bobot;
	}

	public function atribut($kode){
		$atribut = Yii::app()->db->createCommand("SELECT atribut FROM kriteria where kode='".$kode."'")->queryScalar();
		if($atribut==1){
			return "Benefit";
		}else{
			return "Cost";
		}
	}	

	public function status($data){
		if($data==1){
			return "Disetujui";
		}else if($data==2){
			return "Pending";
		}else if($data==3){
			return "Ditolak";
		}else{
			return "Belum Disetujui";
		}
	}		

	public function cek($data,$lamaran){
		$Criteria = new CDbCriteria();
		$Criteria->condition = "status!=0";
		$models = PenilaianSaw::model()->findAll($Criteria);

		if($models!=NULL){

			return CHtml::link('<i class="fa fa-check"></i>', 
				array('filelamaran/diterima', 'id'=>$lamaran, 'penilaian'=>$data), 
				array('class' => 'btn btn-info btn-sm btn-flat', 'title'=>'Terima Sebagai Pegawai'));
			
		}else{

			$terima =  CHtml::link('<i class="fa fa-check"></i>', 
				array('filelamaran/diterima', 'id'=>$lamaran, 'penilaian'=>$data), 
				array('class' => 'btn btn-info btn-sm btn-flat', 'title'=>'Terima Sebagai Pegawai'));

			$tolak =  CHtml::link('<i class="fa fa-close"></i>', 
				array('filelamaran/tolak', 'id'=>$lamaran, 'penilaian'=>$data), 
				array('class' => 'btn btn-danger btn-sm btn-flat', 'title'=>'Tidak Lulus Seleksi'));

			return $terima . $tolak;
		}
	}		

}
