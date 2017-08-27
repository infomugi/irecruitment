<?php

/**
 * This is the model class for table "lowongan".
 *
 * The followings are the available columns in table 'lowongan':
 * @property integer $id_lowongan
 * @property string $tanggal
 * @property integer $bagian
 * @property integer $jabatan
 * @property integer $tipe
 * @property string $deskripsi_pekerjaan
 * @property string $deskripsi_kebutuhan
 * @property integer $jumlah_orang
 * @property string $tanggal_kebutuhan
 * @property string $lokasi
 * @property integer $status
 * @property string $jeniskelamin
 * @property integer $umur
 * @property integer $perusahaan_id
 * @property integer $monitor
 * @property integer $jenjang
 * @property integer $nilai
 */
class Lowongan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lowongan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tanggal, bagian, jabatan, tipe, deskripsi_pekerjaan, deskripsi_kebutuhan, jumlah_orang, tanggal_kebutuhan, lokasi, status, jeniskelamin, umur, perusahaan_id, jenjang, nilai', 'required'),
			array('bagian, jabatan, tipe, jumlah_orang, status, umur, perusahaan_id', 'numerical', 'integerOnly'=>true),
            array('lokasi, tanggal_kebutuhan', 'length', 'max'=>255),
            array('nilai', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
            array('id_lowongan, tanggal, bagian, jabatan, tipe, deskripsi_pekerjaan, deskripsi_kebutuhan, jumlah_orang, tanggal_kebutuhan, lokasi, status', 'safe', 'on'=>'search'),
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
			'Bagian' => array(self::BELONGS_TO, 'Bagian', 'bagian'),
            'Jabatan' => array(self::BELONGS_TO, 'Jabatan', 'jabatan'),
            'Perusahaan' => array(self::BELONGS_TO, 'Perusahaan', 'perusahaan_id'),
            );
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_lowongan' => 'Id Lowongan',
			'tanggal' => 'Tanggal Posting',
			'bagian' => 'Bagian',
			'jabatan' => 'Jabatan',
			'tipe' => 'Tipe',
			'deskripsi_pekerjaan' => 'Deskripsi Pekerjaan',
			'deskripsi_kebutuhan' => 'Deskripsi Kebutuhan',
			'jumlah_orang' => 'Kuantitas',
			'tanggal_kebutuhan' => 'Batas Waktu',
			'lokasi' => 'Lokasi',
			'jeniskelamin' => 'Jenis Kelamin',
			'status' => 'Status',
            'umur' => 'Umur',
            'perusahaan_id' => 'Project',
            'jenjang' => 'Jenjang Pendidikan',
            'nilai' => 'Nilai / IPK',
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

		$criteria->compare('id_lowongan',$this->id_lowongan);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('bagian',$this->bagian);
		$criteria->compare('jabatan',$this->jabatan);
		$criteria->compare('tipe',$this->tipe);
		$criteria->compare('deskripsi_pekerjaan',$this->deskripsi_pekerjaan,true);
		$criteria->compare('deskripsi_kebutuhan',$this->deskripsi_kebutuhan,true);
		$criteria->compare('jumlah_orang',$this->jumlah_orang);
		$criteria->compare('tanggal_kebutuhan',$this->tanggal_kebutuhan,true);
		$criteria->compare('lokasi',$this->lokasi,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Lowongan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tipe($data){
		if($data==1){
			return "Karyawan Tetap";
		}else{
			return "Karyawan Kontak";
		}
	}

	public function status($data){
		if($data==1){
			return "Tersedia";
		}else{
			return "Ditutup";
		}
	}	

    public function statusLabel($data){
        if($data==1){
            return "alert alert-success";
        }else{
            return "alert alert-danger";
        }
    }       

    protected function beforeSave()
    {
      $this->tanggal = date('Y-m-d', strtotime($this->tanggal));
      $this->tanggal_kebutuhan = date('Y-m-d', strtotime($this->tanggal_kebutuhan));
      return TRUE;
  }
  
  protected function afterFind()
  {
      $this->tanggal = date('d-m-Y', strtotime($this->tanggal));
      return TRUE;
  }   

  public function frmDate($date,$code){
      $explode = explode("-",$date);
      $year  = $explode[0];
      (substr($explode[1],0,1)=="0")?$month=str_replace("0","",$explode[1]):$month=is_string($explode[1]);
      $dated = $explode[2];
      $explode_time = explode(" ",$dated);
      $dates = $explode_time[0];        

      switch($code){
                // Per Object
                case 4: $format = $dates; break;                                                            // 01
                case 5: $format = $month; break;                                                            // 01
                case 6: $format = $year; break;                                                                // 2011
            }        
            return $format;
        }    

        public function now($code=1){
        	switch($code){
        		case 1: $date = date("Y-m-d H:i:s"); break;
        		case 2: $date = date("Y-m-d"); break;
        		case 3: $date = date("H:i:s"); break;
        	}
        	return $date;
        }

        public function nmonth($month){
        	$thn_kabisat = date("Y") % 4;
        	($thn_kabisat==0)?$feb=29:$feb=28;
            $init_month = array(1=>31,    // Januari [current]
                                2=>$feb,    // Feb
                                3=>31,    // Mar
                                4=>30,    // Apr
                                5=>31,    // Mei
                                6=>30,    // Juni
                                7=>31,    // Juli
                                8=>31,    // Aug
                                9=>30,    // Sep
                                10=>31,    // Oct    
                                11=>30,    // Nov
                                12=>31);// Des
            $nmonth = $init_month[$month];
            return $nmonth;
        }

        public function dateRange($start,$end){
        	$xdate    =$this->frmDate($start,4);
        	$ydate    =$this->frmDate($end,4);
        	$xmonth   =$this->frmDate($start,5);
        	$ymonth   =$this->frmDate($end,5);
        	$xyear    =$this->frmDate($start,6);
        	$yyear    =$this->frmDate($end,6);
        	if($xyear==$yyear){
        		if($xmonth==$ymonth){
        			$nday=$ydate+1-$xdate;
        		} else {
        			$r2=NULL;
        			$nmonth = $ymonth-$xmonth;            
        			$r1 = $this->nmonth($xmonth)-$xdate+1;
        			for($i=$xmonth+1;$i<$ymonth;$i++){
        				$r2 = $r2+$this->nmonth($i);
        			}
        			$r3 = $ydate;
        			$nday = $r1+$r2+$r3;
        		}
        	} else {
                // Last Year
                //get_nDay
        		$r2=NULL; $r3=NULL;
        		$r1=$this->nmonth($xmonth)-$xdate+1;
                //get_nMonth
        		for($i=$xmonth+1;$i<13;$i++){
        			$r2 = $r2+$this->nmonth($i);
        		}
                // Current Year
        		for($i=1;$i<$ymonth;$i++){
        			$r3 = $r3+$this->nmonth($i);
        		}
        		$r4 = $ydate;
        		$nday = $r1+$r2+$r3+$r4;
        	}            
        	return $nday." Hari";
        }

        public function deadline($date){
        	$now = $this->now();
        	$yDate = $this->frmDate($date,6);
        	$mDate = $this->frmDate($date,5);
        	$dDate = $this->frmDate($date,4);
        	$yNow = $this->frmDate($now,6);
        	$mNow = $this->frmDate($now,5);
        	$dNow = $this->frmDate($now,4);
        	$deadmsg = "Telah lewat";
            // cek tahun
        	if($yDate>$yNow){
        		return $this->dateRange($now,$date);
        	} elseif($yDate==$yNow){
                // cek bulan
        		if($mDate>$mNow){
        			return $this->dateRange($now,$date);
        		} elseif($mDate==$mNow){
                    // cek hari
        			if($dDate>=$dNow){
        				return $this->dateRange($now,$date);
        			} else {
        				return $deadmsg;
        			}
        		} else {
        			return $deadmsg;
        		}
        	} else {
        		return $deadmsg;
        	}
        } 

        public function hide($date){
        	$now = $this->now();
        	$yDate = $this->frmDate($date,6);
        	$mDate = $this->frmDate($date,5);
        	$dDate = $this->frmDate($date,4);
        	$yNow = $this->frmDate($now,6);
        	$mNow = $this->frmDate($now,5);
        	$dNow = $this->frmDate($now,4);
        	$deadmsg = "hide";
            // cek tahun
        	if($yDate>$yNow){
        		return $this->dateRange($now,$date);
        	} elseif($yDate==$yNow){
                // cek bulan
        		if($mDate>$mNow){
        			return $this->dateRange($now,$date);
        		} elseif($mDate==$mNow){
                    // cek hari
        			if($dDate>=$dNow){
        				return $this->dateRange($now,$date);
        			} else {
        				return $deadmsg;
        			}
        		} else {
        			return $deadmsg;
        		}
        	} else {
        		return $deadmsg;
        	}
        }             

        public function gender($data){
            if($data=="L"){
                return "Laki-laki";
            }elseif($data=="P"){
                return "Perempuan";
            }else{
                return "Laki-laki atau Perempuan";
            }
        }

        public function cekLamaran($pelamar,$job,$user){
            //Apabila Pelamar sedang dalam Proses Melamar
            if($pelamar==0){   
                $data=Pelamar::model()->findByAttributes(array('id_user'=>$user));

                echo CHtml::link('Ajukan', 
                    array('filelamaran/lamar', 'job'=>$job, 'user'=>$user, 'pelamar'=>$data->id_people), 
                    array('class' => 'btn btn-success pull-right', 'title'=>'Melamar'));
            }else{
                echo "<div class='alert alert-danger'>Lamaran Anda Sedang di Proses</div>";
            }

        }

        public function notifikasiLamaran($type){
            if($type==1){
                echo "<div class='alert alert-danger'>Maaf, Lowongan Ini Sudah Ditutup (Kuota Penuh).</div>";
            }elseif($type==2){
                echo "<div class='alert alert-info'>Maaf, Lowongan Ini Sudah Tidak Tersedia.</div>";
            }elseif($type==3){
                echo "<div class='alert alert-success'>Lamaran Ini Masih Dibuka, Silahkan Login untuk Melamar.</div>";
            }else{
                echo "<div class='alert alert-info'>-</div>";
            }

        }

        public function perusahaan($id){
            $model=Perusahaan::model()->findByPk($id);
            if($model===null){
                return "-";
            }else{
                return $model->nama;
            }
        }

        public function countApply($job){
            return $count = Filelamaran::model()->countByAttributes(array(
                'lowongan_id'=> $job
                ));
        }

        public function countJob(){
            return $count = Lowongan::model()->countByAttributes(array(
                'status'=> 1
                ));
        }    

        public function countApplicant(){
            return $count = Filelamaran::model()->count();
        }    

        public function countMale(){
            return $count = Pelamar::model()->countByAttributes(array(
                'jenis_kelamin'=> "L"
                ));
        }   

        public function countFemale(){
            return $count = Pelamar::model()->countByAttributes(array(
                'jenis_kelamin'=> "P"
                ));
        }                              

        public static function getMonitor(){
          $sql = "
          SELECT j.nama as nama, count(f.id) as total 
          FROM lowongan as l 
          LEFT JOIN file_lamaran as f ON l.id_lowongan=f.lowongan_id
          LEFT JOIN jabatan as j ON l.jabatan=j.id_jabatan";
          $command = YII::app()->db->createCommand($sql);
          return $command->queryAll();
      }

      public function jobName($id){
        $model=Lowongan::model()->findByPk($id);
        if($model===null){
            return "-";
        }else{
            return $model->Perusahaan->nama . " - " . $model->Jabatan->nama . " - " . $model->Bagian->nama;
        }
    }     


    public function educationLevel($data){
        if($data==1){
            return "SMK / SMA";
        }elseif($data==2){
            return "Diploma / Sarjana / Magister";
        }else{
            return "-";
        }
    }     


}
