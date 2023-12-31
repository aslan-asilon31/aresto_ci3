  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?= $title; ?></h3>
                

              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <!-- Table -->
                <table id='prodTable' class='display dataTable'>
                <thead>
                    <tr>
                    <th>Actions アクション</th>
                    <th>Name 名前 </th>
                    <th>Price 価格 </th>
                    <th>Category カテゴリ</th>
                    <th>Qty 数量</th>
                    </tr>
                </thead>

                </table>

              </div>
  
              <!-- /.card -->
  
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2023 <a href="aslanasilon.com">aslanasilon.com</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
      </div>
    </footer>
  
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  

  <!-- Script -->
  <script type="text/javascript">
     $(document).ready(function(){
        $('#prodTable').DataTable({
          'processing': true,
          'serverSide': true,
          'serverMethod': 'post',
          'ajax': {
             'url':'<?=base_url()?>index.php/Product/prodList'
          },
          'columns': [
              {
                  // Added Actions column with buttons
                  data: null,
                  render: function(data, type, row) {
                      return '<button class="btn bg-indigo text-white"> <i class="fa fa-wrench"></i> </button> &nbsp;&nbsp;' +
                          '<button class="btn btn-warning text-white"><i class="fa fa-history"></i></button> &nbsp;&nbsp;' +
                          '<button class="btn bg-pink text-white"><i class="fa fa-eye"></i></button>';

                  },
                  width: '150px'
              },
             { data: 'name' },
             {
                data: 'price',
                render: function(data, type, row) {
                  // Tambahkan simbol dollar pada akhiran harga
                  return '¥' + data;
                }
             },
             { data: 'category' },
             { data: 'qty' },
          ]
        });
     });
  </script>
