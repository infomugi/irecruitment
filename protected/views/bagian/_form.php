<?php
/* @var $this BagianController */
/* @var $model Bagian */
/* @var $form CActiveForm */
?>


<fieldset>
	<div class="form-group">
		<label class="col-xs-2 col-lg-3 control-label"><h2 style="margin: 0;color: #FFD600;">Data Pendidikan Terakhir</h2></label>
	</div>
</fieldset>
<fieldset>
	<div class="form-group">
		<label class="col-xs-2 col-lg-3 control-label">Tingkat Pendidikan Terakhir <font style="color: red;">*</font></label>
		<div class="col-xs-9 col-lg-6 inputGroupContainer">
			<select class="form-control" name="tingkat_pendidikan_pencaker" id="tingkat_pendidikan">
				<option value="">Pilih Tingkat Pendidikan</option>
				<option value="1000">SD</option>
				<option value="2000">SLTP</option>
				<option value="3000">SLTA</option>
				<option value="4000">DIPLOMA I</option>
				<option value="9000">DIPLOMA II</option>
				<option value="5000">DIPLOMA III</option>
				<option value="8000">DIPLOMA IV</option>
				<option value="6000">SARJANA (S1)</option>
				<option value="7000">MAGISTER (S2)</option>
				<option value="10000">DOKTOR (S3)</option>
				<option value="13000">SPESIALIS (Sp)</option>
				<option value="12000">PROFESI (Pr)</option>
			</select>
		</div>
	</div>
</fieldset>
<fieldset>
	<div class="form-group">
		<label class="col-xs-2 col-lg-3 control-label">Jenis Jurusan <font style="color: red;">*</font></label>
		<div class="col-xs-9 col-lg-6 inputGroupContainer">
			<select class="form-control" name="jurusan_pendidikan_pencaker" id="jurusan_pendidikan">
				<option value="">Pilih Jenis Jurusan</option>
			</select>
		</div>
	</div>
</fieldset>
<script src="https://devinfokerja.kemnaker.go.id/assets/js/plugin/bootstrapvalidator/bootstrapValidator.min.js"></script>

<script>
	$(document).ready(function() {
				// DO NOT REMOVE : GLOBAL FUNCTIONS!
				pageSetUp();
				/*
				 * PAGE RELATED SCRIPTS
				 */
				 var idPengalaman = 99;
				 var idKeterampilan = 99;
				 var idBahasa = 99;
				 var detail_penduduk;
				 var rt='', rw='', kel='', gen='', agama='', kawin='';
				 
				 var responsiveHelper_dt_basic = undefined;
				 
				 var breakpointDefinition = {
				 	tablet : 1024,
				 	phone : 480
				 };
				 $('#myModalNotif').modal({
				 	show: true
				 });
				 $('#prov').on('change',function(){
				 	var provID = $(this).val();
				 	if(provID){
				 		$.ajax({
				 			type:'GET',
				 			url:'https://devinfokerja.kemnaker.go.id/tools/get_kab_kota_ajax/'+provID,
				 			success:function(html){
				 				$('#kab_kota').html(html);
				 				$('#kecamatan').html('<option value="">Pilih Kecamatan</option>');
				 			}
				 		}); 
				 	}else{
				 		$('#kab_kota').html('<option value="">Pilih Kabupaten / Kota</option>');
				 		$('#kecamatan').html('<option value="">Pilih Kecamatan</option>'); 
				 	}
				 });
				 
				 $('#kab_kota').on('change',function(){
				 	var kab_kotID = $(this).val();
				 	if(kab_kotID){
				 		$.ajax({
				 			type:'GET',
				 			url:'https://devinfokerja.kemnaker.go.id/tools/get_kec_ajax/'+kab_kotID,
				 			success:function(html){
				 				$('#kecamatan').html(html);
				 			}
				 		}); 
				 	}else{
				 		$('#kecamatan').html('<option value="">Pilih Kecamatan</option>'); 
				 	}
				 });
				 
				 $('#kab_kota_all').on('change',function(){
				 	var kab_kotID = $(this).val();
				 	if(kab_kotID){
				 		$.ajax({
				 			type:'GET',
				 			url:'https://devinfokerja.kemnaker.go.id/tools/get_kec_ajax/'+kab_kotID,
				 			success:function(html){
				 				$('#kecamatan').html(html);
				 			}
				 		}); 
				 	}else{
				 		$('#kecamatan').html('<option value="">Pilih Kecamatan</option>'); 
				 	}
				 });
				 
				 $('#prov_all').on('change',function(){
				 	var provID = $(this).val();
				 	if(provID){
				 		$.ajax({
				 			type:'GET',
				 			url:'https://devinfokerja.kemnaker.go.id/tools/get_all_kab_kota_ajax/'+provID,
				 			success:function(html){
				 				$('#kab_kota_all').html(html);
				 				$('#kecamatan').html('<option value="">Pilih Kecamatan</option>');
				 			}
				 		}); 
				 	}else{
				 		$('#kab_kota_all').html('<option value="">Pilih Kabupaten / Kota</option>');
				 	}
				 });
				 
				 $('#prov_all_harapan').on('change',function(){
				 	var provID = $(this).val();
				 	if(provID){
				 		$.ajax({
				 			type:'GET',
				 			url:'https://devinfokerja.kemnaker.go.id/tools/get_all_kab_kota_ajax/'+provID,
				 			success:function(html){
				 				$('#kab_kota_all_harapan').html(html);
				 			}
				 		}); 
				 	}else{
				 		$('#kab_kota_all_harapan').html('<option value="">Pilih Kabupaten / Kota</option>');
				 	}
				 });
				 
				 $('#verifikasi_nik').on('click',function(){
				 	var no_ktp = $("input[name='no_ktp']").val();
				 	
				 	if(no_ktp){
				 		$.ajax({
				 			type:'GET',
				 			url:'https://devinfokerja.kemnaker.go.id/tools/check_nik/'+no_ktp,
				 			success:function(response){
				 				detail_penduduk = JSON.parse(response);
				 				if(detail_penduduk.STATUS == 1){
				 					$('#myModalFound').modal({
				 						show: true
				 					});
				 					$('#konf_nik').html(no_ktp);
				 					$('#konf_nama').html(detail_penduduk.NAMA_LGKP);
				 					$('#konf_kelamin').html(detail_penduduk.JENIS_KLMIN);
				 					
				 					if(detail_penduduk.NO_RT !== null){
				 						rt = ' RT.'+detail_penduduk.NO_RT;
				 					}
				 					if(detail_penduduk.NO_RW !== null){
				 						rw = ' RW.'+detail_penduduk.NO_RW;
				 					}
				 					if(detail_penduduk.KEL_NAME !== null){
				 						kel = detail_penduduk.KEL_NAME;
				 					}
				 					
				 					$('#konf_alamat').html(detail_penduduk.ALAMAT+rt+rw+' '+kel+', '+detail_penduduk.KAB_NAME+', '+detail_penduduk.PROP_NAME+' '+detail_penduduk.KODE_POS);
				 				}else{
				 					$('#myModalNotFound').modal({
				 						show: true
				 					});
				 				}
				 			}
				 		}); 
				 	}else{
				 		alert('silahkan isi kolom nik terlebih dahulu');
				 	}
				 });
				 
				 $('#btn-isi').on('click',function(){
				 	var prov='', kab_kot='', kec='',id_kab_kot='';
				 	
				 	$('#myModalFound').modal('hide');
				 	$("input[name='nama']").val(detail_penduduk.NAMA_LGKP);
				 	$("input[name='tempat_lahir']").val(detail_penduduk.TMPT_LHR);
				 	
				 	if(detail_penduduk.JENIS_KLMIN == "LAKI-LAKI"){
				 		gen = 'L';
				 	}else{
				 		gen = 'P';
				 	}
				 	
				 	$("select[name='jenis_kelamin_pencaker']").val(gen);
				 	
				 	if(detail_penduduk.AGAMA == "ISLAM"){
				 		agama = '1';
				 	}else if(detail_penduduk.AGAMA == "KRISTEN"){
				 		agama = '2';
				 	}else if(detail_penduduk.AGAMA == "KHATOLIK"){
				 		agama = '3';
				 	}else if(detail_penduduk.AGAMA == "BUDHA"){
				 		agama = '4';
				 	}else if(detail_penduduk.AGAMA == "HINDU"){
				 		agama = '5';
				 	}else{
				 		agama = '6';
				 	}
				 	
				 	prov = detail_penduduk.NO_PROP;
				 	kab_kot = detail_penduduk.KAB_NAME;
				 	kec = detail_penduduk.KEC_NAME;
				 	
				 	$("select[name='provinsi_pencaker']").val(prov+'00');
				 	
				 	if(prov){
				 		$.ajax({
				 			type:'GET',
				 			url:'https://devinfokerja.kemnaker.go.id/tools/get_kab_kota_ajax/'+prov+'00/'+encodeURI(kab_kot),
				 			success:function(html){
				 				$('#kab_kota').html(html);
				 				if(kab_kot){
				 					$.ajax({
				 						type:'GET',
				 						url:'https://devinfokerja.kemnaker.go.id/tools/get_kec_ajax/'+$('#kab_kota').val()+'/'+encodeURI(kec),
				 						success:function(html){
				 							$('#kecamatan').html(html);
				 						}
				 					}); 
				 				}else{
				 					$('#kecamatan').html('<option value="">Pilih Kecamatan</option>'); 
				 				}
				 			}
				 		}); 
				 	}else{
				 		$('#kab_kota').html('<option value="">Pilih Kabupaten / Kota</option>');
				 		$('#kecamatan').html('<option value="">Pilih Kecamatan</option>'); 
				 	}
				 	
				 	$("select[name='agama_pencaker']").val(agama);
				 	
				 	if(detail_penduduk.STATUS_KAWIN == "KAWIN"){
				 		kawin = 'K';
				 	}else if(detail_penduduk.STATUS_KAWIN == "BELUM KAWIN"){
				 		kawin = 'B';
				 	}else{
				 		if(detail_penduduk.JENIS_KLMIN == "LAKI-LAKI"){
				 			kawin = 'D';
				 		}else{
				 			kawin = 'J';
				 		}
				 	}
				 	
				 	$("select[name='status_perkawinan_pencaker']").val(kawin);
				 	
				 	var tgl_lahir = detail_penduduk.TGL_LHR.split('.');
				 	$("input[name='tanggal_lahir']").val(tgl_lahir[2]+'-'+tgl_lahir[1]+'-'+tgl_lahir[0]);
				 	$("input[name='kode_pos_pencaker']").val(detail_penduduk.KODE_POS);
				 	
				 	if(detail_penduduk.NO_RT !== null){
				 		rt = ' RT.'+detail_penduduk.NO_RT;
				 	}
				 	if(detail_penduduk.NO_RW !== null){
				 		rw = ' RW.'+detail_penduduk.NO_RW;
				 	}
				 	if(detail_penduduk.KEL_NAME !== null){
				 		kel = ' '+detail_penduduk.KEL_NAME;
				 	}
				 	
				 	$("textarea[name='alamat_pencaker']").val(detail_penduduk.ALAMAT+rt+rw+kel);
				 });
				 
				 $('#kab_kota_kantor').on('change',function(){
				 	var kab_kotID = $(this).val();
				 	var kategoriID = $('#group').val();
				 	var kategori='';
				 	
				 	if(kategoriID == 'ADMIN_BKK' || kategoriID == 'OFFICER_BKK' ){
				 		kategori = '/bkk';
				 	}
				 	
				 	if(kab_kotID){
				 		$.ajax({
				 			type:'GET',
				 			url:'https://devinfokerja.kemnaker.go.id/tools/get_kantor_ajax/'+kab_kotID+'/kab'+kategori,
				 			success:function(html){
				 				$('#kantor').html(html);
				 			}
				 		}); 
				 	}else{
				 		$('#kantor').html('<option value="">Pilih Kantor</option>'); 
				 	}
				 });
				 
				 $('#prov_kantor').on('change',function(){
				 	var provID = $(this).val();
				 	var kategoriID = $('#group').val();
				 	var kategori='';
				 	if(provID){
				 		$.ajax({
				 			type:'GET',
				 			url:'https://devinfokerja.kemnaker.go.id/tools/get_all_kab_kota_ajax/'+provID,
				 			success:function(html){
				 				$('#kab_kota_kantor').html(html);
				 			}
				 		}); 
				 	}else{
				 		$('#kab_kota_kantor').html('<option value="">Pilih Kabupaten / Kota</option>');
				 	}
				 	
				 	if(kategoriID == 'ADMIN_BKK' || kategoriID == 'OFFICER_BKK' ){
				 		kategori = '/bkk';
				 	}
				 	
				 	if(provID){
				 		$.ajax({
				 			type:'GET',
				 			url:'https://devinfokerja.kemnaker.go.id/tools/get_kantor_ajax/'+provID+'/prov'+kategori,
				 			success:function(html){
				 				$('#kantor').html(html);
				 			}
				 		}); 
				 	}else{
				 		$('#kantor').html('<option value="">Pilih Kantor</option>'); 
				 	}
				 });
				 
				 $('#group').on('change',function(){
				 	var groupID = $(this).val();
				 	if(groupID == 'ADMIN'){
				 		$('#prov_list').hide();
				 		$('#kab_kota_list').hide();
				 		$('#kantor_list').hide();
				 	}else if(groupID == 'ADMIN_PROV'){
				 		$('#prov_list').show();
				 		$('#kab_kota_list').hide();
				 		$('#kantor_list').show();
				 	}else{
				 		$('#prov_list').show();
				 		$('#kab_kota_list').show();
				 		$('#kantor_list').show();
				 	}
				 	$('#prov_kantor').val('');
				 	$('#kab_kota_kantor').html('<option value="">Pilih Kabupaten / Kota</option>');
				 	$('#kantor').html('<option value="">Pilih Kantor</option>'); 
				 });
				 
				 $('.penempatan').on('change',function(){
				 	var penempatan = $(this).val();
				 	if(penempatan == "luar_negeri"){
				 		$('#dalam_negeri').hide();
				 		$('#luar_negeri').show();
				 	}
				 	if(penempatan == "dalam_negeri"){
				 		$('#dalam_negeri').show();
				 		$('#luar_negeri').hide();
				 	}
				 	if(penempatan == "dalam_luar_negeri"){
				 		$('#dalam_negeri').hide();
				 		$('#luar_negeri').hide();
				 	}
				 });
				 
				 $('.status').on('change',function(){
				 	var status = $(this).val();
				 	if(status == "A"){
				 		$('#alasan').hide();
				 	}
				 	if(status == "P"){
				 		$('#alasan').show();
				 	}
				 });
				 
				 $('#pas_foto_post').on('change',function(){
				 	if($(this).prop('checked')){
				 		$('#pas_foto_post_input').show();
				 	}else{
				 		$('#pas_foto_post_input').hide();
				 	}
				 });
				 
				 $('#pas_foto_4x6').on('change',function(){
				 	if($(this).prop('checked')){
				 		$('#pas_foto_4x6_input').show();
				 	}else{
				 		$('#pas_foto_4x6_input').hide();
				 	}
				 });
				 
				 $('#pas_foto_3x4').on('change',function(){
				 	if($(this).prop('checked')){
				 		$('#pas_foto_3x4_input').show();
				 	}else{
				 		$('#pas_foto_3x4_input').hide();
				 	}
				 });
				 
				 $('#pas_foto_post').on('change',function(){
				 	if($(this).prop('checked')){
				 		$('#pas_foto_post_input').show();
				 	}else{
				 		$('#pas_foto_post_input').hide();
				 	}
				 });
				 
				 $('#tingkat_pendidikan').on('change',function(){
				 	var tingkatID = $(this).val();
				 	if(tingkatID){
				 		$.ajax({
				 			type:'GET',
				 			url:'https://devinfokerja.kemnaker.go.id/tools/get_jurusan_ajax/'+tingkatID,
				 			success:function(html){
				 				$('#jurusan_pendidikan').html(html);
				 			}
				 		}); 
				 	}else{
				 		$('#jurusan_pendidikan').html('<option value="">Pilih Jenis Jurusan</option>');
				 	}
				 });
				 
				 $('#kelompok_jabatan').on('change',function(){
				 	var parentID = $(this).val();
				 	if(parentID){
				 		$.ajax({
				 			type:'GET',
				 			url:'https://devinfokerja.kemnaker.go.id/tools/get_gol_jabatan_ajax/'+parentID,
				 			success:function(html){
				 				$('#gol_jabatan').html(html);
				 			}
				 		}); 
				 	}else{
				 		$('#gol_jabatan').html('<option value="">Pilih Golongan Jabatan</option>'); 
				 	}
				 });
				 
				 $('#lap_usaha').on('change',function(){
				 	var parentID = $(this).val();
				 	if(parentID){
				 		$.ajax({
				 			type:'GET',
				 			url:'https://devinfokerja.kemnaker.go.id/tools/get_lap_usaha_ajax/'+parentID,
				 			success:function(html){
				 				$('#pokok_lap_usaha').html(html);
				 			}
				 		}); 
				 	}else{
				 		$('#pokok_lap_usaha').html('<option value="">Pilih Pokok Lap. Usaha</option>'); 
				 	}
				 });
				 
				 $('#dt_basic').dataTable({
				 	"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
				 	"t"+
				 	"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
				 	"autoWidth" : true,
				 	"oLanguage": {
				 		"sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
				 	},
				 	"preDrawCallback" : function() {
						// Initialize the responsive datatables helper once.
						if (!responsiveHelper_dt_basic) {
							responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
						}
					},
					"rowCallback" : function(nRow) {
						responsiveHelper_dt_basic.createExpandIcon(nRow);
					},
					"drawCallback" : function(oSettings) {
						responsiveHelper_dt_basic.respond();
					}
				});
				 $('#tambah_pengalaman').on('click',function(){
				 	$.get('https://devinfokerja.kemnaker.go.id/admin/pencaker/tambah_pengalaman/'+idPengalaman, function(result) {
				 		$('#array_pengalaman').append(result);
				 		idPengalaman = idPengalaman +1;
				 	});
				 });
				 
				 $('#tambah_keterampilan').on('click',function(){
				 	$.get('https://devinfokerja.kemnaker.go.id/admin/pencaker/tambah_keterampilan/'+idKeterampilan, function(result) {
				 		$('#array_keterampilan').append(result);
				 		idKeterampilan = idKeterampilan +1;
				 	});
				 });
				 
				 $('#tambah_bahasa').on('click',function(){
				 	$.get('https://devinfokerja.kemnaker.go.id/admin/pencaker/tambah_bahasa/'+idBahasa, function(result) {
				 		$('#array_bahasa').append(result);
				 		idBahasa = idBahasa +1;
				 	});
				 	
				 });
				 
				 $('.lama_kerja').datepicker({
				 	dateFormat: 'yy-mm-dd',
				 	prevText: '<i class="fa fa-chevron-left"></i>',
				 	nextText: '<i class="fa fa-chevron-right"></i>',
				 	changeMonth:true,
				 	changeYear:true,
				 	yearRange:"1970:"+new Date().getFullYear()
				 });
				 
				 $('.summernote').summernote({
				 	height : 180,
				 	callbacks: {
				 		onChange: function(contents) {
				 			$("#konten").val(contents);
				 		}
				 	}
				 });
				 
				//Validasi Perusahaan
				$('#input_perusahaan').bootstrapValidator({
					feedbackIcons : {
						invalid : 'glyphicon glyphicon-remove',
						validating : 'glyphicon glyphicon-refresh'
					},
					fields : {
						user_id : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'User ID harus di isi'
								},
								stringLength : {
									max : 30,
									min : 5,
									message : 'Panjang User ID minimal 5 karakter dan maksimal 30 karakter'
								},remote: {
									message: 'Username sudah terdaftar',
									url: 'https://devinfokerja.kemnaker.go.id/tools/check_user_id',
									type: 'POST'
								}
							}
						},
						password : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Password harus di isi'
								},
								stringLength : {
									max : 30,
									min : 3,
									message : 'Password minimal 3 karakter dan maksimal 30 karakter'
								}
							}
						},
						password_1 : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Ulangi Password harus di isi'
								},
								stringLength : {
									max : 30,
									min : 3,
									message : 'Password minimal 3 karakter dan maksimal 30 karakter'
								},
								identical: {
									field: 'password',
									message: 'Ulangi Password tidak sama dengan Kolom Password'
								}
							}
						},
						logo : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Logo harus di isi'
								},
								file: {
									extension: 'jpeg,jpg,png',
									type: 'image/jpeg,image/png',
									maxSize: 2000000,
									message: 'File Logo Perusahaan wajib ber ekstensi jpeg/jpg/png dan maksimal berukuran 2MB'
								}
							}
						},
						nama_perusahaan : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Nama Perusahaan harus di isi'
								},
								stringLength : {
									max : 99,
									message : 'Panjang maksimal Nama Perusahaan adalah 100 karakter'
								}
							}
						},
						jenis : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Jenis Perusahaan harus di isi'
								}
							}
						},
						prov_id : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Provinsi harus di isi'
								}
							}
						},
						kab_kota_id : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Kabupaten / Kota harus di isi'
								}
							}
						},
						kec_id : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Kecamatan harus di isi'
								}
							}
						},
						alamat : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Alamat Perusahaan harus di isi'
								},
								stringLength : {
									max : 199,
									message : 'Panjang maksimal Alamat Perusahaan adalah 200 karakter'
								}
							}
						},
						kode_pos : {
							group : '.form-group',
							validators : {
								digits : {
									message : 'Kode Pos Perusahaan harus di isi dengan angka'
								},
								stringLength : {
									max : 9,
									message : 'Panjang maksimal Kode Pos Perusahaan adalah 8 karakter'
								}
							}
						},
						website : {
							group : '.form-group',
							validators : {
								stringLength : {
									max : 100,
									message : 'Panjang maksimal Alamat website perusahaan adalah 100 karakter'
								},
								uri: {
									message: 'Alamat website perusahaan tidak valid. Contoh : http://foo.com'
								}
							}
						},
						deskripsi : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Deskripsi Perusahaan harus di isi'
								},
								stringLength : {
									max : 1000,
									message : 'Panjang maksimal Deskripsi Perusahaan adalah 1000 karakter'
								}
							}
						},
						nama_kontak : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Nama Penanggung Jawab harus di isi'
								},
								stringLength : {
									max : 99,
									message : 'Panjang maksimal Nama Penanggung Jawab adalah 100 karakter'
								}
							}
						},
						no_kontak : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'No Kontak harus di isi'
								},
								stringLength : {
									max : 14,
									message : 'Panjang maksimal No Kontak adalah 14 karakter'
								}
							}
						},
						email : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Email Perusahaan harus di isi'
								},
								emailAddress: {
									message: 'Alamat Email Perusahaan tidak valid'
								},
								stringLength : {
									max : 100,
									message : 'Panjang Alamat email adalah 100 karakter'
								},
								regexp: {
									regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
									message: 'Alamat Email Perusahaan tidak valid'
								}
							}
						}
					}
				});

$('#update_perusahaan').bootstrapValidator({
	feedbackIcons : {
		invalid : 'glyphicon glyphicon-remove',
		validating : 'glyphicon glyphicon-refresh'
	},
	fields : {
		user_id : {
			group : '.form-group',
			validators : {
				notEmpty : {
					message : 'User ID harus di isi'
				},
				stringLength : {
					max : 30,
					max : 5,
					message : 'Panjang minimal 5 karakter dan maksimal 30 karakter'
				}
			}
		},
		password : {
			group : '.form-group',
			validators : {
				stringLength : {
					max : 30,
					min : 3,
					message : 'Password minimal 3 karakter dan maksimal 30 karakter'
				}
			}
		},
		password_1 : {
			group : '.form-group',
			validators : {
				stringLength : {
					max : 30,
					min : 3,
					message : 'Password minimal 3 karakter dan maksimal 30 karakter'
				},
				identical: {
					field: 'password',
					message: 'Ulangi Password tidak sama dengan Kolom Password'
				}
			}
		},
		logo : {
			group : '.form-group',
			validators : {
				file: {
					extension: 'jpeg,jpg,png',
					type: 'image/jpeg,image/png',
					maxSize: 2000000,
					message: 'File Logo Perusahaan wajib ber ekstensi jpeg/jpg/png dan maksimal berukuran 2MB'
				}
			}
		},
		nama_perusahaan : {
			group : '.form-group',
			validators : {
				notEmpty : {
					message : 'Nama Perusahaan harus di isi'
				},
				stringLength : {
					max : 99,
					message : 'Panjang maksimal Nama Perusahaan adalah 100 karakter'
				}
			}
		},
		jenis : {
			group : '.form-group',
			validators : {
				notEmpty : {
					message : 'Jenis Perusahaan harus di isi'
				}
			}
		},
		prov_id : {
			group : '.form-group',
			validators : {
				notEmpty : {
					message : 'Provinsi harus di isi'
				}
			}
		},
		kab_kota_id : {
			group : '.form-group',
			validators : {
				notEmpty : {
					message : 'Kabupaten / Kota harus di isi'
				}
			}
		},
		kec_id : {
			group : '.form-group',
			validators : {
				notEmpty : {
					message : 'Kecamatan harus di isi'
				}
			}
		},
		alamat : {
			group : '.form-group',
			validators : {
				notEmpty : {
					message : 'Alamat Perusahaan harus di isi'
				},
				stringLength : {
					max : 199,
					message : 'Panjang maksimal Alamat Perusahaan adalah 200 karakter'
				}
			}
		},
		kode_pos : {
			group : '.form-group',
			validators : {
				digits : {
					message : 'Kode Pos Perusahaan harus di isi dengan angka'
				},
				stringLength : {
					max : 9,
					message : 'Panjang maksimal Kode Pos Perusahaan adalah 8 karakter'
				}
			}
		},
		website : {
			group : '.form-group',
			validators : {
				stringLength : {
					max : 100,
					message : 'Panjang maksimal Alamat website perusahaan adalah 100 karakter'
				},
				uri: {
					message: 'Alamat website perusahaan tidak valid. Contoh : http://foo.com'
				}
			}
		},
		deskripsi : {
			group : '.form-group',
			validators : {
				notEmpty : {
					message : 'Deskripsi Perusahaan harus di isi'
				},
				stringLength : {
					max : 1000,
					message : 'Panjang maksimal Deskripsi Perusahaan adalah 1000 karakter'
				}
			}
		},
		nama_kontak : {
			group : '.form-group',
			validators : {
				notEmpty : {
					message : 'Nama Penanggung Jawab harus di isi'
				},
				stringLength : {
					max : 99,
					message : 'Panjang maksimal Nama Penanggung Jawab adalah 100 karakter'
				}
			}
		},
		no_kontak : {
			group : '.form-group',
			validators : {
				notEmpty : {
					message : 'No Kontak harus di isi'
				},
				stringLength : {
					max : 14,
					message : 'Panjang maksimal No Kontak adalah 14 karakter'
				}
			}
		},
		email : {
			group : '.form-group',
			validators : {
				notEmpty : {
					message : 'Email Perusahaan harus di isi'
				},
				emailAddress: {
					message: 'Alamat Email Perusahaan tidak valid'
				},
				stringLength : {
					max : 100,
					message : 'Panjang Alamat email adalah 100 karakter'
				},
				regexp: {
					regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
					message: 'Alamat Email Perusahaan tidak valid'
				}
			}
		}
	}
});

				//Input Admin
				
				$('#input_admin').bootstrapValidator({
					feedbackIcons : {
						invalid : 'glyphicon glyphicon-remove',
						validating : 'glyphicon glyphicon-refresh'
					},
					fields : {
						nama : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Nama User harus di isi'
								},
								stringLength : {
									max : 99,
									message : 'Panjang maksimal Nama User adalah 100 karakter'
								}
							}
						},
						user_id : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'User ID harus di isi'
								},
								stringLength : {
									max : 99,
									message : 'Panjang maksimal User ID adalah 100 karakter'
								},remote: {
									message: 'Username sudah terdaftar',
									url: 'https://devinfokerja.kemnaker.go.id/tools/check_user_id',
									type: 'POST'
								}
							}
						},
						password : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Password harus di isi'
								},
								stringLength : {
									max : 30,
									min : 3,
									message : 'Password minimal 3 karakter dan maksimal 30 karakter'
								}
							}
						},
						password_1 : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Ulangi Password harus di isi'
								},
								stringLength : {
									max : 30,
									min : 3,
									message : 'Password minimal 3 karakter dan maksimal 30 karakter'
								},
								identical: {
									field: 'password',
									message: 'Ulangi Password tidak sama dengan Kolom Password'
								}
							}
						},
						email : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Email Perusahaan harus di isi'
								},
								emailAddress: {
									message: 'Alamat Email tidak valid'
								},
								stringLength : {
									max : 100,
									message : 'Panjang Alamat email adalah 100 karakter'
								},
								regexp: {
									regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
									message: 'Alamat Email tidak valid'
								}
							}
						}
					}
				});
				
				//Validasi Lowongan
				$('#input_lowongan, #update_lowongan').bootstrapValidator({
					feedbackIcons : {
						invalid : 'glyphicon glyphicon-remove',
						validating : 'glyphicon glyphicon-refresh'
					},
					fields : {
						lap_usaha : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Kategori Lap. Usaha harus di isi'
								}
							}
						},
						pokok_lap_usaha : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Golongan Pokok Lap. Usaha harus di isi'
								}
							}
						},
						kelompok_jabatan : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Kelompok Jabatan harus di isi'
								}
							}
						},
						gol_jabatan : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Golongan Jabatan harus di isi'
								}
							}
						},
						nama_jabatan : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Nama Jabatan harus di isi'
								},
								stringLength : {
									max : 100,
									message : 'Panjang maksimal Nama Jabatan adalah 100 karakter'
								}
							}
						},
						lowongan_pria : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Jumlah Lowongan Pria harus di isi dengan default 0'
								},
								stringLength : {
									max : 5,
									message : 'Panjang maksimal Jumlah Lowongan Pria adalah 5 karakter'
								},
								digits : {
									message : 'Jumlah Lowongan Pria harus diisi dengan angka'
								}
							}
						},
						lowongan_wanita : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Jumlah Lowongan Wanita harus di isi dengan default 0'
								},
								stringLength : {
									max : 5,
									message : 'Panjang maksimal Jumlah Lowongan Wanita adalah 5 karakter'
								},
								digits : {
									message : 'Jumlah Lowongan Wanita harus diisi dengan angka'
								}
							}
						},
						tanggal_mulai : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Tanggal Mulai harus di isi'
								},
								date : {
									format: 'YYYY-MM-DD',
									message : 'Tanggal Mulai tidak valid'
								}
							}
						},
						tanggal_akhir : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Tanggal Akhir harus di isi'
								},
								date : {
									format: 'YYYY-MM-DD',
									message : 'Tanggal Akhir tidak valid'
								}
							}
						},
						sistem_pengupahan : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Sistem Pengupahan Gaji harus di isi'
								}
							}
						},
						gaji_perbulan : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Gaji Per Bulan harus di isi'
								}
							}
						},
						status_hub_kerja : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Status Hubungan Kerja'
								}
							}
						},
						jumlah_jam_kerja : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Jumlah Jam Kerja Seminggu harus di isi dengan default 0'
								},
								stringLength : {
									max : 3,
									message : 'Panjang maksimal Jumlah Jam Kerja Seminggu adalah 3 karakter'
								},
								digits : {
									message : 'Jumlah Jam Kerja harus diisi dengan angka'
								}
							}
						},
						dis_kondisi : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Kondisi Fisik harus di isi'
								}
							}
						},
						usia_maksimal : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Usia Maksimal harus di isi dengan default 0'
								},
								stringLength : {
									max : 3,
									message : 'Panjang maksimal Usia Maksimal adalah 3 karakter'
								},
								digits : {
									message : 'Usia Maksimal harus diisi dengan angka'
								}
							}
						},
						tingkat_pendidikan : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Tingkat Pendidikan harus di isi'
								}
							}
						},
						jurusan_pendidikan : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Jenis Jurusan harus di isi'
								}
							}
						},
						nilai_minimal : {
							group : '.form-group',
							validators : {
								stringLength : {
									max : 5,
									message : 'Panjang maksimal adalah 5 karakter'
								},
								numeric: {
									message: 'Nilai Minimal (Ijasah/IPK) tidak valid. Contoh 20, 3.6',
									thousandsSeparator: '',
									decimalSeparator: '.'
								}
							}
						},
						penempatan : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Harapan Penempatan Pencaker harus di isi'
								}
							}
						},
						provinsi : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Provinsi Harapan Pencaker harus di isi'
								}
							}
						},
						kabupaten : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Kabupaten / Kota Harapan Pencaker harus di isi'
								}
							}
						},
						negara: {
							enabled : false,
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Negara Harapan Pencaker harus di isi'
								}
							}
						},
						status : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Status harus di isi'
								}
							}
						},
						persyaratan_lowongan : {
							group : '.form-group',
							validators : {
								stringLength : {
									max : 2000,
									message : 'Panjang maksimal Persyaratan Umum adalah 2000 karakter'
								}
							}
						},
						deskripsi_lowongan : {
							group : '.form-group',
							validators : {
								stringLength : {
									max : 2000,
									message : 'Panjang maksimal Uraian Pekerjaan adalah 2000 karakter'
								}
							}
						}
					}
				}).on('change','[name="penempatan"]',function(e) {
					var fv = $('#input_lowongan, #update_lowongan').data('bootstrapValidator');
					if($(this).val() == 'luar_negeri'){
						fv.enableFieldValidators('negara', true).revalidateField('negara');
						fv.enableFieldValidators('kabupaten', false).revalidateField('kabupaten');
						fv.enableFieldValidators('provinsi', false).revalidateField('provinsi');
					}else if($(this).val() == 'dalam_negeri'){
						fv.enableFieldValidators('negara', false).revalidateField('negara');
						fv.enableFieldValidators('kabupaten', true).revalidateField('kabupaten');
						fv.enableFieldValidators('provinsi', true).revalidateField('provinsi');
					}
				});
				
				//Validasi Pencaker
				$('#input_pencaker').bootstrapValidator({
					feedbackIcons : {
						valid : 'glyphicon glyphicon-ok',
						invalid : 'glyphicon glyphicon-remove',
						validating : 'glyphicon glyphicon-refresh'
					},
					fields : {
						user_id : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'User ID harus di isi'
								},
								stringLength : {
									min : 5,
									max : 30,
									message : 'User ID minimal 5 karakter dan maksimal 30 karakter'
								},remote: {
									message: 'Username sudah terdaftar',
									url: 'https://devinfokerja.kemnaker.go.id/tools/check_user_id',
									type: 'POST'
								}
							}
						},
						password : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Password harus di isi'
								},
								stringLength : {
									max : 30,
									min : 3,
									message : 'Password minimal 3 karakter dan maksimal 30 karakter'
								}
							}
						},
						password_1 : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Ulangi Password harus di isi'
								},
								stringLength : {
									max : 30,
									min : 3,
									message : 'Password minimal 3 karakter dan maksimal 30 karakter'
								},
								identical: {
									field: 'password',
									message: 'Ulangi Password tidak sama dengan Kolom Password'
								}
							}
						},
						email : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Email Pencaker harus di isi'
								},
								emailAddress: {
									message: 'Alamat Email Pencaker tidak valid'
								},
								stringLength : {
									max : 100,
									message : 'Panjang Alamat email adalah 100 karakter'
								},
								regexp: {
									regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
									message: 'Alamat Email Pencaker tidak valid'
								}
							}
						},
						foto : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Foto Pencaker harus di isi'
								},
								file: {
									extension: 'jpeg,jpg,png',
									type: 'image/jpeg,image/png',
									maxSize: 2000000,
									message: 'File Foto Pencaker wajib ber ekstensi jpeg/jpg/png dan maksimal berukuran 2MB'
								}
							}
						},
						status : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Status harus di isi'
								}
							}
						},
						no_ktp : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'No KTP/NIK Pencaker harus di isi'
								},
								stringLength : {
									max : 16,
									min : 16,
									message : 'Nomor KTP harus 16 karakter'
								},
								digits : {
									message : 'Nomor KTP harus diisi dengan angka'
								},remote: {
									message: 'Nomor KTP sudah terdaftar',
									url: 'https://devinfokerja.kemnaker.go.id/tools/check_no_ktp',
									type: 'POST'
								}
							}
						},
						nama : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Nama Pencaker harus di isi'
								},
								stringLength : {
									max : 99,
									message : 'Panjang maksimal Nama adalah 100 karakter'
								}
							}
						},
						tempat_lahir : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Tempat Lahir harus di isi'
								},
								stringLength : {
									max : 99,
									message : 'Panjang maksimal Tempat Lahir adalah 100 karakter'
								}
							}
						},
						tanggal_lahir : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Tanggal Lahir harus di isi'
								},
								date : {
									format: 'YYYY-MM-DD',
									message : 'Tanggal Lahir tidak valid'
								}
							}
						},
						jenis_kelamin_pencaker : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Jenis Kelamin harus di isi'
								}
							}
						},
						agama_pencaker : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Agama Pencaker harus di isi'
								}
							}
						},
						kondisi_pencaker : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Kondisi Fisik harus di isi'
								}
							}
						},
						status_perkawinan_pencaker : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Status Perkawinan harus di isi'
								}
							}
						},
						kewarganegaraan : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Kewarganegaraan harus di isi'
								}
							}
						},
						tinggi_badan : {
							group : '.form-group',
							validators : {
								stringLength : {
									max : 5,
									message : 'Panjang maksimal adalah 5 karakter'
								},
								digits : {
									message : 'Tinggi Badan harus diisi dengan angka'
								}
							}
						},
						berat_badan : {
							group : '.form-group',
							validators : {
								stringLength : {
									max : 5,
									message : 'Panjang maksimal adalah 5 karakter'
								},
								digits : {
									message : 'Berat Badan harus diisi dengan angka'
								}
							}
						},
						tempat_lahir : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Tempat Lahir harus di isi'
								},
								stringLength : {
									max : 99,
									message : 'Panjang maksimal Tempat Lahir adalah 100 karakter'
								}
							}
						},
						no_hp : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'No Telpon / Handphone harus di isi'
								},
								stringLength : {
									max : 15,
									message : 'Panjang maksimal No Telpon / Handphone adalah 15 karakter'
								},
								digits : {
									message : 'No Telpon / Handphone harus diisi dengan angka'
								}
							}
						},
						provinsi_pencaker : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Provinsi Pencaker harus di isi'
								}
							}
						},
						kabupaten_pencaker : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Kabupaten Pencaker harus di isi'
								}
							}
						},
						kecamatan_pencaker : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Kecamatan Pencaker harus di isi'
								}
							}
						},
						kode_pos_pencaker : {
							group : '.form-group',
							validators : {
								digits : {
									message : 'Kode Pos Pencaker harus di isi dengan angka'
								},
								stringLength : {
									max : 5,
									message : 'Panjang maksimal Kode Pos Pencaker adalah 5 karakter'
								}
							}
						},
						alamat_pencaker : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Alamat Pencaker harus di isi'
								},
								stringLength : {
									max : 199,
									message : 'Panjang maksimal Alamat Pencaker adalah 200 karakter'
								}
							}
						},
						tingkat_pendidikan_pencaker : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Tingkat Pendidikan Terakhir Pencaker harus di isi'
								}
							}
						},
						jurusan_pendidikan_pencaker : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Jenis Jurusan Pencaker harus di isi'
								}
							}
						},
						nama_institusi_pencaker : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Nama Institusi Pendidikan Pencaker harus di isi'
								},
								stringLength : {
									max : 200,
									message : 'Panjang maksimal Nama Institusi Pendidikan Pencaker adalah 200 karakter'
								}
							}
						},
						tahun_lulus_pencaker : {
							group : '.form-group',
							validators : {
								stringLength : {
									max : 4,
									message : 'Panjang maksimal adalah 4 karakter'
								},
								notEmpty : {
									message : 'Tahun Lulus Pencaker harus di isi'
								},
								digits : {
									message : 'Tahun Lulus Pencaker harus diisi dengan angka'
								}
							}
						},
						nilai_ijasah_pencaker : {
							group : '.form-group',
							validators : {
								numeric: {
									message: 'Nilai (Ijasah/IPK) Pencaker tidak valid',
									thousandsSeparator: '',
									decimalSeparator: '.'
								},
								stringLength : {
									max : 5,
									message : 'Panjang Nilai (Ijasah/IPK) Pencaker maksimal 5 karakter'
								}
							}
						},
						penempatan_harapan : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Harapan Penempatan Pencaker harus di isi'
								}
							}
						},
						provinsi_harapan : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Provinsi Harapan Pencaker harus di isi'
								}
							}
						},
						kabupaten_harapan : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Kabupaten / Kota Harapan Pencaker harus di isi'
								}
							}
						},
						id_negara_harapan: {
							enabled : false,
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Negara Harapan Pencaker harus di isi'
								}
							}
						},
						kelompok_jabatan : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Kelompok Jabatan Yang Diminati Pencaker harus di isi'
								}
							}
						},
						id_gol_jabatan_harapan : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Golongan Jabatan Yang Diminati Pencaker harus di isi'
								}
							}
						}
					}
				}).on('change','[name="penempatan_harapan"]',function(e) {
					var fv = $('#input_pencaker').data('bootstrapValidator');
					if($(this).val() == 'luar_negeri'){
						fv.enableFieldValidators('id_negara_harapan', true).revalidateField('id_negara_harapan');
						fv.enableFieldValidators('kabupaten_harapan', false).revalidateField('kabupaten_harapan');
						fv.enableFieldValidators('provinsi_harapan', false).revalidateField('provinsi_harapan');
					}else if($(this).val() == 'dalam_negeri'){
						fv.enableFieldValidators('id_negara_harapan', false).revalidateField('id_negara_harapan');
						fv.enableFieldValidators('kabupaten_harapan', true).revalidateField('kabupaten_harapan');
						fv.enableFieldValidators('provinsi_harapan', true).revalidateField('provinsi_harapan');
					}else if($(this).val() == 'dalam_luar_negeri'){
						fv.enableFieldValidators('negara', false).revalidateField('negara');
						fv.enableFieldValidators('kabupaten', false).revalidateField('kabupaten');
						fv.enableFieldValidators('provinsi', false).revalidateField('provinsi');
					}
				});
				
				$('#update_pencaker').bootstrapValidator({
					feedbackIcons : {
						valid : 'glyphicon glyphicon-ok',
						invalid : 'glyphicon glyphicon-remove',
						validating : 'glyphicon glyphicon-refresh'
					},
					fields : {
						user_id : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'User ID harus di isi'
								},
								stringLength : {
									max : 99,
									message : 'Panjang maksimal User ID adalah 100 karakter'
								},remote: {
									message: 'Username sudah terdaftar',
									url: 'https://devinfokerja.kemnaker.go.id/tools/check_user_id',
									type: 'POST'
								}
							}
						},
						password : {
							group : '.form-group',
							validators : {
								stringLength : {
									max : 30,
									min : 3,
									message : 'Password minimal 3 karakter dan maksimal 30 karakter'
								}
							}
						},
						password_1 : {
							group : '.form-group',
							validators : {
								stringLength : {
									max : 30,
									min : 3,
									message : 'Password minimal 3 karakter dan maksimal 30 karakter'
								},
								identical: {
									field: 'password',
									message: 'Ulangi Password tidak sama dengan Kolom Password'
								}
							}
						},
						email : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Email Pencaker harus di isi'
								},
								emailAddress: {
									message: 'Alamat Email Pencaker tidak valid'
								},
								stringLength : {
									max : 100,
									message : 'Panjang Alamat email adalah 100 karakter'
								},
								regexp: {
									regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
									message: 'Alamat Email Pencaker tidak valid'
								}
							}
						},
						foto : {
							group : '.form-group',
							validators : {
								file: {
									extension: 'jpeg,jpg,png',
									type: 'image/jpeg,image/png',
									maxSize: 2000000,
									message: 'File Foto Pencaker wajib ber ekstensi jpeg/jpg/png dan maksimal berukuran 2MB'
								}
							}
						},
						status : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Status harus di isi'
								}
							}
						},
						no_ktp : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'No KTP/NIK Pencaker harus di isi'
								},
								stringLength : {
									max : 16,
									min : 16,
									message : 'Nomor KTP harus 16 karakter'
								},
								digits : {
									message : 'Nomor KTP harus diisi dengan angka'
								}
							}
						},
						nama : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Nama Pencaker harus di isi'
								},
								stringLength : {
									max : 99,
									message : 'Panjang maksimal Nama adalah 100 karakter'
								}
							}
						},
						tempat_lahir : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Tempat Lahir harus di isi'
								},
								stringLength : {
									max : 99,
									message : 'Panjang maksimal Tempat Lahir adalah 100 karakter'
								}
							}
						},
						tanggal_lahir : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Tanggal Lahir harus di isi'
								},
								date : {
									format: 'YYYY-MM-DD',
									message : 'Tanggal Lahir tidak valid'
								}
							}
						},
						jenis_kelamin_pencaker : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Jenis Kelamin harus di isi'
								}
							}
						},
						agama_pencaker : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Agama Pencaker harus di isi'
								}
							}
						},
						kondisi_pencaker : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Kondisi Fisik harus di isi'
								}
							}
						},
						status_perkawinan_pencaker : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Status Perkawinan harus di isi'
								}
							}
						},
						kewarganegaraan : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Kewarganegaraan harus di isi'
								}
							}
						},
						tinggi_badan : {
							group : '.form-group',
							validators : {
								digits : {
									message : 'Tinggi Badan harus diisi dengan angka'
								}
							}
						},
						berat_badan : {
							group : '.form-group',
							validators : {
								digits : {
									message : 'Berat Badan harus diisi dengan angka'
								}
							}
						},
						tempat_lahir : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Tempat Lahir harus di isi'
								},
								stringLength : {
									max : 99,
									message : 'Panjang maksimal Tempat Lahir adalah 100 karakter'
								}
							}
						},
						no_hp : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'No Telpon / Handphone harus di isi'
								},
								stringLength : {
									max : 15,
									message : 'Panjang maksimal No Telpon / Handphone adalah 15 karakter'
								},
								digits : {
									message : 'No Telpon / Handphone harus diisi dengan angka'
								}
							}
						},
						provinsi_pencaker : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Provinsi Pencaker harus di isi'
								}
							}
						},
						kabupaten_pencaker : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Kabupaten Pencaker harus di isi'
								}
							}
						},
						kecamatan_pencaker : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Kecamatan Pencaker harus di isi'
								}
							}
						},
						kode_pos_pencaker : {
							group : '.form-group',
							validators : {
								digits : {
									message : 'Kode Pos Pencaker harus di isi dengan angka'
								},
								stringLength : {
									max : 5,
									message : 'Panjang maksimal Kode Pos Pencaker adalah 5 karakter'
								}
							}
						},
						alamat_pencaker : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Alamat Pencaker harus di isi'
								},
								stringLength : {
									max : 199,
									message : 'Panjang maksimal Alamat Pencaker adalah 200 karakter'
								}
							}
						},
						tingkat_pendidikan_pencaker : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Tingkat Pendidikan Terakhir Pencaker harus di isi'
								}
							}
						},
						jurusan_pendidikan_pencaker : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Jenis Jurusan Pencaker harus di isi'
								}
							}
						},
						nama_institusi_pencaker : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Nama Institusi Pendidikan Pencaker harus di isi'
								},
								stringLength : {
									max : 200,
									message : 'Panjang maksimal Nama Institusi Pendidikan Pencaker adalah 200 karakter'
								}
							}
						},
						tahun_lulus_pencaker : {
							group : '.form-group',
							validators : {
								stringLength : {
									max : 4,
									message : 'Panjang maksimal adalah 4 karakter'
								},
								notEmpty : {
									message : 'Tahun Lulus Pencaker harus di isi'
								},
								digits : {
									message : 'Tahun Lulus Pencaker harus diisi dengan angka'
								}
							}
						},
						nilai_ijasah_pencaker : {
							group : '.form-group',
							validators : {
								numeric: {
									message: 'Nilai (Ijasah/IPK) Pencaker tidak valid',
									thousandsSeparator: '',
									decimalSeparator: '.'
								},
								stringLength : {
									max : 5,
									message : 'Panjang Nilai (Ijasah/IPK) Pencaker maksimal 5 karakter'
								}
							}
						},
						penempatan_harapan : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Harapan Penempatan Pencaker harus di isi'
								}
							}
						},
						provinsi_harapan : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Provinsi Harapan Pencaker harus di isi'
								}
							}
						},
						kabupaten_harapan : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Kabupaten / Kota Harapan Pencaker harus di isi'
								}
							}
						},
						kelompok_jabatan : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Kelompok Jabatan Yang Diminati Pencaker harus di isi'
								}
							}
						},
						id_negara_harapan: {
							enabled : false,
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Negara Harapan Pencaker harus di isi'
								}
							}
						},
						id_gol_jabatan_harapan : {
							group : '.form-group',
							validators : {
								notEmpty : {
									message : 'Golongan Jabatan Yang Diminati Pencaker harus di isi'
								}
							}
						}
					}
				}).on('change','[name="penempatan_harapan"]',function(e) {
					var fv = $('#input_pencaker').data('bootstrapValidator');
					if($(this).val() == 'luar_negeri'){
						fv.enableFieldValidators('id_negara_harapan', true).revalidateField('id_negara_harapan');
						fv.enableFieldValidators('kabupaten_harapan', false).revalidateField('kabupaten_harapan');
						fv.enableFieldValidators('provinsi_harapan', false).revalidateField('provinsi_harapan');
					}else if($(this).val() == 'dalam_negeri'){
						fv.enableFieldValidators('id_negara_harapan', false).revalidateField('id_negara_harapan');
						fv.enableFieldValidators('kabupaten_harapan', true).revalidateField('kabupaten_harapan');
						fv.enableFieldValidators('provinsi_harapan', true).revalidateField('provinsi_harapan');
					}else if($(this).val() == 'dalam_luar_negeri'){
						fv.enableFieldValidators('negara', false).revalidateField('negara');
						fv.enableFieldValidators('kabupaten', false).revalidateField('kabupaten');
						fv.enableFieldValidators('provinsi', false).revalidateField('provinsi');
					}
				});
				
			});

function set_url_cetak(bagian){
	var idPejabat = $("input[name='pejabat']:checked").val();
	var idPencaker = "";
	$(':checkbox:checked').each(function(i){
		if(i == 0){
			idPencaker = $(this).val();
		}else{
			idPencaker = idPencaker+","+$(this).val();	
		}
	});
	
	if(idPejabat == null){
		alert("Data Pejabat Penandatangan Tidak ditemukan");	
	}else if(idPencaker == ""){
		alert("Pilih Data Pencaker minimal 1");	
	}
	else{
		if(bagian == 'depan'){
			$('#bagian').append('Bagian Depan');
			$('#btn-yes').attr('href',"javascript: cetak_ak1_depan('"+idPencaker+"','"+idPejabat+"')");
		}else{
			$('#bagian').append('Bagian Belakang');
			$('#btn-yes').attr('href',"javascript: cetak_ak1_belakang('"+idPencaker+"','"+idPejabat+"')");
		}
	}
}

function cetak_ak1_depan(idPencaker,idPejabat){
	window.open('https://devinfokerja.kemnaker.go.id/admin/pencaker/kartu_ak1_depan?id_pencaker='+idPencaker+'&id_pejabat='+idPejabat, '_blank');
	$('#myModal').modal('hide');
	
}

function cetak_ak1_belakang(idPencaker,idPejabat){
	window.open('https://devinfokerja.kemnaker.go.id/admin/pencaker/kartu_ak1_belakang?id_pencaker='+idPencaker, '_blank');
	
	$('#myModal').modal('hide');
}

function set_url(url) {
	$('#btn-yes').attr('href',url);
}

function set_url_reset(url) {
	$('#btn-yes-reset').attr('href',url);
}

function set_url_verifikasi_pencaker(user_id,id) {
	$('#btn-yes-2').attr('href',"https://devinfokerja.kemnaker.go.id/admin/pencaker/verifikasi/"+id);
	$('#btn-no-2').attr('href',"https://devinfokerja.kemnaker.go.id/admin/pencaker/delete/"+user_id+"/"+id);
}

function set_url_verifikasi(url) {
	$('#form_modal').attr('action',url);
	$('#status_modal').val($("input[name='status']:checked").val());
	$('#alasan_modal').val($("textarea#alasan").val());
}

function hapus_pengalaman(id) {
	$('#array_pengalaman_'+id).remove();
}

function hapus_keterampilan(id) {
	$('#array_keterampilan_'+id).remove();
}

function hapus_bahasa(id) {
	$('#array_bahasa_'+id).remove();
}

function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		
		reader.onload = function (e) {
			$('#img-pencaker')
			.attr('src', e.target.result)
			.width(150);
		};
		
		reader.readAsDataURL(input.files[0]);
	}
}

function set_url_panggil(url) {
	$('#btn-yes-panggil').attr('href',url);
}

function set_url_tolak(url) {
	$('#btn-yes-tolak').attr('href',url);
}

function set_url_penempatan(url) {
	$('#btn-yes-penempatan').attr('href',url);
}

</script>


<div class="form-normal form-horizontal clearfix">
	<div class="col-md-9"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'bagian-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
				),
			'errorMessageCssClass' => 'label label-info',
			'htmlOptions' => array('enctype' => 'multipart/form-data','autocomplete'=>'off'),
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

			
			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'nama'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'nama'); ?>
					<?php echo $form->textField($model,'nama',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'deskripsi'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'deskripsi'); ?>
					<?php echo $form->textArea($model,'deskripsi',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'status'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'status'); ?>
					<?php
					echo $form->radioButtonList($model,'status',
						array('Aktif'=>'Aktif','Tidak Aktif'=>'Tidak Aktif'),
						array(
							'template'=>'{input}{label}',
							'separator'=>'',
							'labelOptions'=>array(
								'class'=>'minimal', 'style'=>'padding-right:20px;margin-left:5px'),

							)                              
						);
						?>
					</div>

				</div>  		

				<div class="form-group">
					<div class="col-md-12">  
						<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Edit', array('class' => 'btn btn-danger btn-flat pull-right')); ?>
					</div>
				</div>

				<?php $this->endWidget(); ?>

</div></div><!-- form -->