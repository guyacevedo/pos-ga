</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy;  <a target="_blank" href="https://guyacevedo.github.io">guyacevedo.github.io</a> 2021</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
        <a class="btn btn-primary" href="  <?php echo base_url(); ?>/usuarios/logout ">Cerrar sesión</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->

<script src="<?php echo base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>/js/sb-admin-2.min.js"></script>

<script>
  $('#modal-confirma').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
  });

  $('#dataTable').DataTable({
    "order": [[ 0, "desc" ]],
    "language": {
      "decimal": ".",
      "emptyTable": "No hay datos para mostrar",
      "info": "Desde el _START_ hasta el _END_ (_TOTAL_ filas en total)",
      "infoEmpty": "Desde el 0 hasta el 0 (0 filas en total)",
      "infoFiltered": "(filtrado de todas las _MAX_ filas)",
      "infoPostFix": "",
      "thousands": "'",
      "lengthMenu": "Mostrar _MENU_ filas",
      "loadingRecords": "Cargando...",
      "processing": "Procesando...",
      "search": "Buscar:",
      "zeroRecords": "No hay resultados",
      "paginate": {
        "first": "Primero",
        "last": "Último",
        "next": "Siguiente",
        "previous": "Anterior"
      },
      "aria": {
        "sortAscending": ": Ordenar de manera Ascendente",
        "sortDescending": ": Ordenar de manera Descendente ",
      }
    },
    "lengthMenu": [
      [5, 25, 50, -1],
      [5, 25, 50, "Todas las"]
    ]
  });
</script>
</body>

</html>