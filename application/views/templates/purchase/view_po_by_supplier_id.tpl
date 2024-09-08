<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <nav aria-label="breadcrumb">
            <div class="sub-header-left pull-left breadcrumb">
                <h1>
                    Purchase
                    <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link"
                        title="Back to Issue Request Listing">
                        <i class="ti ti-chevrons-right"></i>
                        <em>Supplier PO</em></a>
                </h1>
                <br>
                <span>Generate PO</span>
            </div>
        </nav>
        <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5 listing-btn">
            <a title="Back To Supplier Po List" class="btn btn-seconday" href="<%base_url('new_po_list_supplier')%>" type="button"><i class="ti ti-arrow-left" ></i></i></a>
        </div>
        <div class="card p-0 mt-4">
            <div class="card-header">
                <div class="row">
                    <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">Supplier Name</p>
                        <p class="tgdp-rgt-tp-txt">
                            <%$supplier_data[0]->supplier_name %>
                        </p>
                    </div>
                    <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">Supplier Number</p>
                        <p class="tgdp-rgt-tp-txt">
                            <%$supplier_data[0]->supplier_number %>
                        </p>
                    </div>
                    <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">Supplier Location</p>
                        <p class="tgdp-rgt-tp-txt" title="<%$supplier_data[0]->location %>">
                            <%$supplier_data[0]->location %>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card p-0 mt-4">
            <div class="tabTitle position-relative">
                <h2 id="cc_sh_sys_static_field_3">
                    <span>PO Parts</span>
                    <span style="display:none;position:absolute;left:0;right:0;text-align:center;top: 19px;"
                        id="ajax_loader_childModule_stock_intward_details">
                        <i class="fa fa-refresh fa-spin-light fa-1x fa-fw"></i>
                    </span>
                </h2>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped scrollable" id="example1">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Type</th>
                            <th>PO Number</th>
                            <th>PO Date</th>
                            <th>Created Date</th>
                            <th>Download PDF PO</th>
                            <th>View PO Details</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <%assign var='i' value=1%>
                            <%if count($new_po)> 0 %>
                                <%foreach from=$new_po item=s %>
                                    <tr>
                                        <td>
                                            <%$i %>
                                        </td>
                                        <td>
                                            <%if (empty($s->process_id)) %>
                                                Normal PO
                                                <%else%>
                                                    Subcon PO
                                                    <%/if%>

                                        </td>
                                        <td>
                                            <%$s->po_number %>
                                        </td>
                                        <td>
                                            <%defaultDateFormat($s->po_date) %>
                                        </td>
                                        <td>
                                            <%defaultDateFormat($s->created_date) %>
                                        </td>
                                        <td>
                                            <%if ($s->status == "accpet") %>
                                                <a href="<%base_url('download_my_pdf/') %><%$s->id %>"
                                                    class="btn btn-primary" href="">Download</a>
                                                <%/if%>
                                        </td>
                                        <td><a href="<%base_url('view_new_po_by_id/') %><%$s->id %>"
                                                class="btn btn-primary" href="">PO Details</a></td>
                                        <td>
                                            <%if ($s->expiry_po_date > date('Y-m-d')) %>
                                                <%assign var='expired' value='yes' %>
                                            <%else %>

                                            <%/if%>

                                            <%if ($expired=="no" ) %>
                                                <%assign var='statusNew' value='Expired' %>
                                            <%else if ($s->status == "accpet") %>
                                                <%assign var='statusNew' value='Released' %>
                                            <%else %>
                                                <%assign var='statusNew' value=$s->status%>
                                            <%/if%>
                                            <%$statusNew %>
                                        </td>
                                    </tr>
                                    <%assign var='i' value=$i+1 %>
                                <%/foreach%>
                            <%/if%>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
