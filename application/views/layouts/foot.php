
    </section>
    <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="#">Klinik Gaharu Medika</a>.</strong> All rights reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url() ?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>dist/js/adminlte.min.js"></script>

<script>
$(document).ready(function() {
    $('table.table-selectable tr').on('click', function() {
      $('input[name="id"').iCheck('uncheck');
      $(this).find('input').iCheck('check');

      var id = $(this).find('input').data('id');
      
      $('.replace-url').each(function(index, el){
        
        if (id === undefined) {
          $(el).removeAttr('href');
        } else {
          var link = $(el).data('href')+id;
          $(el).attr('href', link);
        }
      });
    });

    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-green, input[type="radio"].flat-green').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    });

    $('input[type="checkbox"].flat-green, input[type="radio"].flat-green').on('ifChecked', function (e) {
    });

    $('.select2').select2();
});
</script>
<script src="<?php echo base_url() ?>assets/js/main.js"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>