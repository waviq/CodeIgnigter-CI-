<!--
*SOURCE CODE-APLIKASI CRUD-DENGAN-CODEIGNITER BY.VERLYANANDA*
Contact Me :
087722-836-330
****************************************************
Im Freelancer And CEO in www.ultraviolet-developer.com
Ultraviolet Developer:
Jasa Pembuatan Website Toko Online,Company Profile,Travel,Berita,etc.
Murah gratis domain.com 1thn harga mulai dari 1,5JT
-->

<!--VERLY ACTION-->
<!-- Main row -->
<div class="row">
<!-- Left col -->
<section class="col-lg-9 connectedSortable">  
<div class="col-md-6">
<div class="box">
<div class="box-header">
<h3 class="box-title">Lihat data</h3>
</div><!-- /.box-header -->
<div class="box-body">
<table class="table table-bordered">
<tr>
<th style="width: 10px">#</th>
<th>Nama</th>
<th>Alamat</th>
<th style="width: 40px">Option</th>
</tr>

<?php 
//Kita akan melakukan looping sesuai dengan data yang dimiliki
$i = 1; //nantinya akan digunakan untuk pengisian Nomor
foreach ($ubah_siswa->result() as $verlishows) {
?>
<tr>
<td><?= $i++ ?></td>
<td><?= $verlishows->nama_siswa?></td>
<td>
<?= $verlishows->alamat_siswa ?></td>
<td>
<a href="<?= base_url() ?>index.php/verlicontroller/updatesiswa/<?= $verlishows->id_siswa ?>"<span class="badge bg-blue">Ubah</span></a>
<a href="<?= base_url() ?>index.php/verlicontroller/deletesiswa/<?= $verlishows->id_siswa ?>"<span class="badge bg-red">Hapus</span></td>
</tr>
    <?php
    }
    ?>
</table>
</div><!-- /.box-body -->
<div class="box-footer clearfix">
<ul class="pagination pagination-sm no-margin pull-right">
<li><a href="#">&laquo;</a></li>
<li><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">&raquo;</a></li>
</ul>
</div>
</div><!-- /.box -->
</div>
<div class="col-md-6">
<!--VERLY FORM INPUTDATA-->
<!-- general form elements -->
<div class="box box-primary">
<div class="box-header">
<h3 class="box-title">Form Input Siswa</h3>
</div><!-- /.box-header -->
<!-- form start -->
 
<form method="post" action="<?= base_url() ?>index.php/verlicontroller/updsiswaaction" role="form">
<div class="box-body">
<div class="form-group">
<label for="exampleInputEmail1">Nama</label>
<input type="text" value="<?php echo $verlishows->id_siswa; ?>" name="ver_id_siswa">
<input type="text" class="form-control" name="ver_nama" value="<?php echo $verlishows->nama_siswa; ?>" required>
</div>
<div class="form-group">
<label for="exampleInputPassword1">Alamat</label>
<input type="text" class="form-control" name="ver_alamat" value="<?php echo $verlishows->alamat_siswa; ?>"required>
<input type="submit" value="Simpan">
</form>
</div>
</div><!-- /.box-body -->                          
</section>
</div><!-- /.row (main row) -->
</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="<?php echo base_url('verlibootsrap/http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js');?>"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url('verlibootsrap/js/jquery-ui-1.10.3.min.js');?>" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url('verlibootsrap/js/bootstrap.min.js');?>" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo base_url('js/plugins/morris/morris.min.js');?>" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url('js/plugins/sparkline/jquery.sparkline.min.js');?>" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url('js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');?>" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url('js/plugins/jqueryKnob/jquery.knob.js');?>" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url('js/plugins/daterangepicker/daterangepicker.js');?>" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="<?php echo base_url('js/plugins/datepicker/bootstrap-datepicker.js');?>" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url('verlibootsrap/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url('verlibootsrap/js/plugins/iCheck/icheck.min.js');?>" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="<?php echo base_url('verlibootsrapjs/AdminLTE/app.js');?>" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url('verlibootsrap/js/AdminLTE/dashboard.js');?>" type="text/javascript"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url('verlibootsrap/js/AdminLTE/demo.js');?>" type="text/javascript"></script>

    </body>
</html>