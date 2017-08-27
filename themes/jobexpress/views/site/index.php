<?php
$this->pageTitle='Beranda';
?>
<div class="site-banner">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="banner-content">
          <h1>Infomedia Solusi Humanika</h1>
          <p>PT. Telkom Indonesia</p>
        </div>
      </div>
    </div>
  </div>
</div>

<main id="maincontent">

  <div class="container">
    <div class="col-md-8 col-xs-12 margin-bottom-20">
      <div class="row quote-v1 survey ">
        <div class="col-md-12 ">
         <h4> <span><i class="fa fa-building"></i> Profil</span> </h4>
       </div>
     </div>
     <div class="tab-content tab-bidang">
      <div class="tab-pane row fade in active">
        <div class="col-md-12">

          <p>PT Infomedia Solusi Humanika atau dikenal dengan ISH merupakan anak perusahaan PT Infomedia Nusantara yang didirikan di Jakarta pada 24 Oktober 2012, ISH merupakan perusahaan yang bergerak dalam bidang Human Capital Services. Portofolio bisnis ISH meliputi BPO HR Solution, HR Process, dan HR Learning Solution. Saat ini, ISH telah mampu memberikan solusi layanan pengelolaan SDM terbaik kepada lebih dari 100 perusahaan yang tersebar di 420 kota dan mengelola lebih dari 22.115 karyawan di seluruh Indonesia.</p>


        </div>
      </div>
    </div>
  </div>



  <div class="col-md-4 col-xs-12 pull-right margin-bottom-20">
    <div class="row quote-v1 survey ">
      <div class="col-md-12">
        <h4> <span><i class="fa fa-briefcase"></i> Open Recruitment</span> </h4>
      </div>
    </div>
    <div class="tab-content tab-bidang">
      <div class="tab-pane row fade in active">
        <div class="col-md-12 col-xs-12">

          <div class="row">
            <div class="col-md-12 col-xs-12">
              <p style="font-size:12px; font-weight:bold">Keterangan :</p>
            </div>
            <div class="col-md-6 col-xs-6">
              <div class="col-md-3">
                <div class="label label-success"> &nbsp <i class="fa fa-check"></i> &nbsp </div>
              </div>
              <div class="col-md-9">
                <p style="font-size:12px; font-weight:bold">Tersedia</p>
              </div>
            </div>
            <div class="col-md-6 col-xs-6">
              <div class="col-md-3">
                <div class="label label-danger"> &nbsp <i class="fa fa-power-off"></i> &nbsp </div>
              </div>
              <div class="col-md-9">
                <p style="font-size:12px; font-weight:bold">Kuota Penuh</p>
              </div>
            </div>
          </div>

          <table class="table job-list-main">
            <tbody>
              <?php $this->widget('zii.widgets.CListView', array(
                'dataProvider'=>$dataProvider,
                'itemView'=>'_view_lowongan',
                'summaryText'=>'',
                )); ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>



    <div class="col-md-8 col-xs-12 margin-bottom-20">
      <div class="row quote-v1 survey ">
        <div class="col-md-8 ">
          <h4> <span><i class="fa fa-book"></i> Persyaratan</span> </h4>
        </div>
      </div>
      <div class="tab-content">
        <div class="tab-pane row fade in active">
          <div class="col-md-12 col-xs-12">
            <table class="table table-striped table-hover">
              <tbody>
                <tr>
                  <td>Pendidikan D3/S1 IT (CC, AS, AP, IP, DE, IS, PS, AB, PM, PP)</td>
                </tr>
                <tr>
                  <td>Pendidikan S1 Manajemen Pemasaran/Manajemen Marketing/IT/Bisnis (SCI)</td>
                </tr>
                <tr>
                  <td>Pendidikan S1 Teknik Industri/IT/Accounting/Manajemen (IE)</td>
                </tr>
                <tr>
                  <td>Pendidikan S1 IT/Teknik Industri. (PCS)</td>
                </tr>
                <tr>
                  <td>Usia Maksimal 27 Tahun (CC, SCI, PS, PCS)</td>
                </tr>
                <tr>
                  <td>Usia Maksimal 30 Tahun (AS, AP, DE, IS, IP, IE)</td>
                </tr>
                <tr>
                  <td>Memahami Bahasa Program PHP/Java/Javascript/ABAP dan konsep OOP, Database (AS, AP, DE)</td>
                </tr>
                <tr>
                  <td>Memahami Teknik Dasar LAN WAN, dan Sistem Operasi (IS, IP)</td>
                </tr>
                <tr>
                  <td>Kemampuan presentasi yang baik, teknik negosiasi yang handal dan kemampuan analisa yang kuat, serta dapat berkomunikasi dan bekerja sama dengan tim dan individual (SCI, PS)</td>
                </tr>
                <tr>
                  <td>Berpengalaman sebagai Manajer/Asisten manajer di bidang IT/Computer-Software atau yang setara. Min. 5 tahun. (PM)</td>
                </tr>
                <tr>
                  <td>Berpengalaman min. 3 tahun. (PP)</td>
                </tr>
                <tr>
                  <td>Berwawasan yang cukup di bidang IT termasuk ERP</td>
                </tr>
                <tr>
                  <td>Berwawasan yang cukup tentang Codeigniter or YII (PHP framework). (PP)</td>
                </tr>
                <tr>
                  <td>Berwawasan di bidang SAP Tables, Fields, Domains dan creating Search Helps (AB)</td>
                </tr>
                <tr>
                  <td>Menguasai aplikasi komputer minimal Ms. Word dan Ms. Excel (PCS)</td>
                </tr>
                <tr>
                  <td>Mampu melakukan eksekusi pekerjaan sesuai jadwal dengan semua hal terkait di dalamnya (internal review, technologi review, pemilihan vendor, monitoring project, dll). (PM)</td>
                </tr>
                <tr>
                  <td>Berkelakuan baik dan proaktif, team player. (PP)</td>
                </tr>
                <tr>
                  <td>Komunikatif, jujur, teliti (PCS, PM)</td>
                </tr>
                <tr>
                  <td>Mampu bekerja secara individual (PCS)</td>
                </tr>
                <tr>
                  <td>Mampu bekerja secara tim (PCS, PM)</td>
                </tr>
                <tr>
                  <td>Customer-oriented (PM)</td>
                </tr>
                <tr>
                  <td>Mempunyai semangat belajar yang tinggi, aktif, kreatif, analisa yang kuat dan mampu bekerja di bawah tekanan</td>
                </tr>
                <tr>
                  <td>Siap ditempatkan di seluruh Indonesia</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>






</main>

<footer id="footer">
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 padding-left">
          <span>© <?php echo date('Y'); ?> <?php echo YII::app()->name; ?>. All rights reserved.</span>
        </div>
      </div>
    </div>
  </div>
</footer>

<style type="text/css">
  #hide{display: none;}
</style>