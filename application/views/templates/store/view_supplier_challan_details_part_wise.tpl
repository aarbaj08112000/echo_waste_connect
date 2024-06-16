<div class="wrapper">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<%base_url('generate_po') %>">Home</a></li>
              <li class="breadcrumb-item active"></li>
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
            <!-- /.card -->
            <div class="card">
              <div class="card-body">
                <table class="table table-bordered table-striped" id="example1">
                  <thead>
                    <tr>
                      <th>Sr No</th>
                      <th>Part Number</th>
                      <th>Part Description</th>
                      <th>Qty </th>
                      <th>Process</th>
                      <th>HSN</th>
                      <th>Value</th>
                      <th>Remaining Qty </th>
                    </tr>
                  </thead>
                  <tbody>
                    <%if ($challan_parts) %>
                          <%assign var='final_po_amount' value=0%>
                          <%assign var='i' value=1%>
                          <%foreach from=$challan_parts item=p %>
		                    <tr>
		                      <td><%$i %></td>
		                      <td><%$p->part_number %></td>
		                      <td><%$p->part_description %></td>
		                      <td><%$p->qty %></td>
		                      <td><%$p->process %></td>
		                      <td><%$p->hsn %></td>
		                      <td><%$p->value %></td>
		                      <td><%$p->remaning_qty %></td>
		                    </tr>
		                    <%assign var='i' value=$i+1%>
		                   <%/foreach%>
                      <%/if%>
                  </tbody>
                  <tfoot>
                    <%if ($po_parts) %>
	                    <tr>
	                      <th colspan="11">Total</th>
	                      <th><%$final_po_amount %></th>
	                    </tr>
                    <%/if%>
                  </tfoot>
                </table>
              </div>
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