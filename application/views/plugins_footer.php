
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>plugins/adminlte.min.js"></script>

<!-- Data table plugin-->
<script type="text/javascript" src="<?php echo base_url(); ?>plugins/jquery.dataTables.min.js"></script>


<script>
  $(document).ready(function (){
    var base_url= "<?php echo base_url();?>";
    $(".btn-remove").on("click",function(e){
      e.preventDefault();
      var ruta = $(this).attr("href");
      //alert("Desea Eliminar ?");
      $.ajax({
        url:ruta,
        type:"POST",
        success:function(resp){
          window.location.href = base_url + resp;
        }

      });

    });

    
    $(".btn-view-cliente").on("click",function(){
        var id_cliente= $(this).val();
        $.ajax({
            url: base_url + "Clientes/view/" + id_cliente,
            type: "POST",
            success:function(resp){
              $("#modal-default .modal-body").html(resp);
              //alert(resp);
            }
        });
    });

    $(".btn-view-marca").on("click",function(){
        var id= $(this).val();
        $.ajax({
            url: base_url + "Marcas/view/" + id,
            type: "POST",
            success:function(resp){
              $("#modal-default .modal-body").html(resp);
              //alert(resp);
            }
        });
    });

 
  });
  $(function () {
    $("#example1").DataTable();
  });
</script>