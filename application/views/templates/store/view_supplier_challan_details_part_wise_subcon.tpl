<div class="wrapper">
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Customer Challan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<%base_url('') %>">Home</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Part Number</th>
                    <th>UOM</th>
                    <th>GRN Number</th>
                    <th>Invoice Number</th>
                    <th>Qty</th>
                    <th>Pending Qty</th>
                  </tr>
                </thead>
                <tbody>
                  <%assign var='i' value=1%>
                    <%if ($subcon_po_inwarding_history) %>

                        <%foreach from=$subcon_po_inwarding_history item=c %>
		                  <tr>
		                    <td><%$i %></td>
		                    <td><%$c->part_number %> / <%$c->part_description %></td>
		                    <td><%$c->uom_name %></td>
		                    <td><%$c->grn_number %></td>
		                    <td><%$c->invoice_number %></td>
		                    <td><%$c->new_qty %></td>
		                    <td><%$c->previous_qty  %></td>
		                  </tr>
		                <%assign var='i' value=$i+1%>
		                <%/foreach%>
                    <%/if%>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->