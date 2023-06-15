<?php
$url = "http://localhost/ArTeM01-045/Proyectos/Psychology/apirest/controllers/campers.php?op=GetAll";
$curl = curl_init(); //metodo de php para consumir apis
curl_setopt($curl,CURLOPT_URL, $url);
curl_setopt($curl,CURLOPT_RETURNTRANSFER, 1);
$output = json_decode(curl_exec($curl));
/* print_r($output); */

?>




<div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Promedio</th>
                    <th>Nivel Inglés</th>
                    <th>Especialidad</th>
                    <th>Ser</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($output as $out) 
                    {
                      
                    ?>
                  <tr>
                    <td><?php echo $out->nombre; ?></td>
                    <td><?php echo $out->promedio; ?></td>
                    <td><?php echo $out->nivelIngles; ?></td>
                    <td><?php echo $out->especialidad; ?></td>
                    <td><?php echo $out->Ser; ?></td>
                  </tr>
                  <?php } ?>
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

            <script>
                $(function () {
                    $("#example1").DataTable({
                    "responsive": true, "lengthChange": false, "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                    
                });
</script>