<?php

/**
 * This is the model class for table "file_lamaran".
 *
 * The followings are the available columns in table 'file_lamaran':
 * @property integer $id
 * @property string $file_lamaran
 * @property string $tanggal_upload
 * @property string $status_lamaran
 * @property string $tanggal_verifikasi
 * @property string $keterangan
 * @property integer $verifikasi_id
 * @property integer $lowongan_id
 * @property integer $test_id
 * @property integer $user_id
 * @property integer $pelamar_id
 */
class FileLamaran extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'file_lamaran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, pelamar_id, lowongan_id', 'required','on'=>'lamar'),
			array('keterangan', 'required','on'=>'keterangan'),
			array('user_id, verifikasi_id, lowongan_id, test_id', 'numerical', 'integerOnly'=>true),
			array('file_lamaran, penilaian_id, keterangan', 'length', 'max'=>250),
			array('status_lamaran', 'length', 'max'=>25),
			array('file_lamaran', 'required','on'=>'lamar'),
			array('penilaian_id', 'required','on'=>'penilaian'),
			// array('file_lamaran, penilaian_id', 'file', 'types' => 'pdf, doc, docx', 'allowEmpty' => true, 'maxSize' => 1024 * 1024 * 1, 'tooLarge' => 'The file was larger than 3 MB. Please upload a smaller file.'),			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, file_lamaran, user_id, tanggal_upload, status_lamaran, tanggal_verifikasi, keterangan, verifikasi_id, lowongan_id', 'safe', 'on'=>'search'),
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
			'User' => array(self::BELONGS_TO,'User', 'user_id'),
			'Pelamar' => array(self::BELONGS_TO,'Pelamar', 'pelamar_id'),
			'Lowongan'=>array(self::BELONGS_TO,'Lowongan','lowongan_id'),			
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID Pengajuan',
			'file_lamaran' => 'File Lamaran',
			'user_id' => 'User ID',
			'tanggal_upload' => 'Tanggal Upload',
			'status_lamaran' => 'Status Lamaran',
			'tanggal_verifikasi' => 'Tanggal Verifikasi',
			'keterangan' => 'Pesan dari HRD',
			'verifikasi_id' => 'Verifikasi',
			'lowongan_id' => 'Lowongan',
			'pelamar_id' => 'Nama',
			'penilaian_id' => 'Kode Penilaian',
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
		$criteria->compare('file_lamaran',$this->file_lamaran,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('tanggal_upload',$this->tanggal_upload,true);
		$criteria->compare('status_lamaran',$this->status_lamaran,true);
		$criteria->compare('tanggal_verifikasi',$this->tanggal_verifikasi,true);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('verifikasi_id',$this->verifikasi_id);
		$criteria->compare('lowongan_id',$this->lowongan_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	public function findStatus($status,$lowongan)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('file_lamaran',$this->file_lamaran,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('tanggal_upload',$this->tanggal_upload,true);
		$criteria->compare('status_lamaran',$status);
		$criteria->compare('tanggal_verifikasi',$this->tanggal_verifikasi,true);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('verifikasi_id',$this->verifikasi_id);
		$criteria->compare('lowongan_id',$lowongan);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FileLamaran the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	protected function beforeSave()
	{
		$this->tanggal_upload = date('Y-m-d', strtotime($this->tanggal_upload));
		return TRUE;
	}
	
	protected function afterFind()
	{
		$this->tanggal_upload = date('d-m-Y', strtotime($this->tanggal_upload));
		return TRUE;
	}   

	public function status($data){
		if($data==0){
			return "Belum di Verifikasi";
		}elseif($data==1){
			return "Sudah di Verifikasi";
		}elseif($data==2){
			return "Pemanggilan";									
		}elseif($data==3){
			return "Sudah di Panggil";
		}elseif($data==4){
			return "Panggilan di Tunda";
		}elseif($data==5){
			return "Diterima menjadi Karyawan";
		}elseif($data==6){
			return "Dipending menjadi Karyawan";
		}elseif($data==7){
			return "Ditolak menjadi Karyawan";
		}elseif($data==8){
			return "Lulus Seleksi";
		}elseif($data==9){
			return "Tidak Lulus Seleksi";
		}elseif($data==10){
			return "Pengajuan Lamaran di Tolak";
		}elseif($data==11){
			return "Rekomendasi Panggilan";
		}elseif($data==12){
			return "Sudah Dinilai";
		}else{
			return "Dibatalkan oleh Pelamar";
		}
	}

	public function statusLabel($data){
		if($data==0){
			return "alert-warning";
		}elseif($data==1){
			return "alert-success";
		}elseif($data==2){
			return "alert-info";
		}elseif($data==3){
			return "alert-success";
		}elseif($data==4){
			return "alert-success";
		}elseif($data==5){
			return "alert-warning";
		}elseif($data==6){
			return "alert-danger";
		}elseif($data==7){
			return "alert-danger";
		}elseif($data==8){
			return "alert-success";
		}elseif($data==9){
			return "alert-warning";
		}elseif($data==10){
			return "alert-danger";
		}elseif($data==11){
			return "alert-info";
		}elseif($data==12){
			return "alert-success";
		}else{
			return "alert-danger";
		}
	}	

	public function cekPenilaian($data){
		if($data==0){
			return "Belum di Nilai";
		}else{
			return "Sudah di Nilai";
		}
	}		

}
