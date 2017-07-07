<?php
$this->menu=array(
    array('label'=>'List People', 'url'=>array('index')),
    //array('label'=>'Create People', 'url'=>array('create')),
    //array('label'=>'Update People', 'url'=>array('update', 'id'=>$model->id_people)),
    //array('label'=>'Delete People', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_people),'confirm'=>'Are you sure you want to delete this item?')),
    //array('label'=>'Manage People', 'url'=>array('admin')),
    //array('label'=>'No Telpon',  'url'=>array('peoplePhone', 'id'=>$model->id_people)),
    //array('label'=>'Alamat',  'url'=>array('peopleAddres', 'id'=>$model->id_people)),
    //array('label'=>'Status Pernikahan',  'url'=>array('peoplePerkawinan', 'id'=>$model->id_people)),
    //array('label'=>'Anak',  'url'=>array('peopleAnak', 'id'=>$model->id_people)),
    //array('label'=>'Data Orang Tua',  'url'=>array('peopleOrtu', 'id'=>$model->id_people)),
    //array('label'=>'Data Pendidikan',  'url'=>array('peoplePendidikan', 'id'=>$model->id_people)),
    //array('label'=>'Riwayat Pekerjaan',  'url'=>array('peoplePekerjaan', 'id'=>$model->id_people)),
    //array('label'=>'Riwayat Pelatihan',  'url'=>array('peoplePelatihan', 'id'=>$model->id_people)),
    //array('label'=>'File Lamaran',  'url'=>array('peopleLamaran', 'id'=>$model->id_people)),
    //array('label' => 'List Detail', 'url' => array('listDetail', 'id' => $model->id_people)),
    
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'id_user',
        'username',
        'password',
        'email',
        'date_create',
        'level_ID',
    ),
)); ?>

<br/><br/>
