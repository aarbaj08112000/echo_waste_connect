<%assign var="role" value=trim($session_data['type'])%>
<%assign var="Commodity" value=$session_data['Commodity']%>
<%assign var="entitlements" value=$session_data['entitlements']%>
<%assign var="base_url" value=base_url('')%>
<div id="menu_overlay" class="menu_overlay home-page-boxes">
   <div class="new_sitemap_items">
      <div class="headingfix">
         <div class="heading" id="top_heading_fix" style="width: 1666px;">
            <h3 style="padding-left: 40px; width: 1570.84px;">
               Quick Menu
               <div class="color-legend-block" >
                  <span class="quick-menu">Quick</span>
                  <span class="report-menu">Report</span>
                  <span class="master-menu">Master</span>
               </div>
            </h3>
         </div>
      </div>
      <div id="scrollable_content" class="scrollable-content">
         <div class="sitemap-blocks pad-calc-container">
            <div class="sitemap-items" style="position: relative; height: 1597px;">
               <%if ($role == "Purchase" || $role == "Admin") %>
               <div class="span3 box ag-col-1" style="width: 25%;">
                  <div class="title">
                     <h4><span class="icon14 "></span>Purchase</h4>
                  </div>
                  <div class="content ">
                     <ul class="sitemap">
                        <li>
                           <a hijacked="yes"  href="<%base_url('new_po')%>"  class="nav-active-link" title="Purchase PO">
                           Purchase PO
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('new_po_sub')%>" target="_self" title="Subcon PO" class="nav-active-link">
                           Subcon PO
                           </a>
                        </li>
                         <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('new_po_list_supplier')%>" target="_self" title="Supplierwise PO List" class="nav-active-link">
                           Supplierwise PO List
                           </a>
                        </li>
                         <li >
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('reports_po_balance_qty')%>" target="_self" title="PO Summary Report" class="nav-active-link report-menu">
                           PO Summary Report
                           </a>
                        </li>
                         <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('approved_supplier')%>" target="_self" title="Approved Suppliers" class="nav-active-link report-menu">
                           Approved Suppliers
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('child_part_supplier_report')%>" target="_self" title="Approved Suppliers" class="nav-active-link report-menu">
                           Purchase Price Report
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('child_part_view')%>" target="_self" title="Item Master" class="nav-active-link report-menu">
                           Item Master
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('pending_po')%>" target="_self" title="PO Under Approval" class="nav-active-link report-menu">
                           PO Under Approval
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('expired_po')%>" target="_self" title="Expired PO" class="nav-active-link report-menu">
                           Expired PO
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('closed_po')%>" target="_self" title="PO Under Approval" class="nav-active-link report-menu">
                           Closed PO
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('rejected_po')%>" target="_self" title="Reject PO" class="nav-active-link report-menu">
                           Reject PO
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('child_part_view')%>" target="_self" title="Item Master" class="nav-active-link master-menu">
                           Item Master
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('approved_supplier')%>" target="_self" title="Supplier" class="nav-active-link master-menu">
                           Supplier
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('child_part_supplier_view')%>" target="_self" title="Purchase Parts Price" class="nav-active-link master-menu">
                           Purchase Parts Price
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('routing')%>" target="_self" title="Subcon routing" class="nav-active-link master-menu">
                           Subcon routing
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <%/if%>
               <%if ($role == "stores" || $role == "Admin") %>
               <div class="span3 box ag-col-2" style="width: 25%;">
                  <div class="title">
                     <h4><span class="icon14 "></span>Store</h4>
                  </div>
                  <div class="content ">
                     <ul class="sitemap">
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('inwarding')%>" target="_self" title="GRN Entry" class="nav-active-link">
                           GRN Entry
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('grn_validation')%>" target="_self" title="GRN Qty Validation" class="nav-active-link">
                           GRN Qty Validation
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('part_stocks')%>" target="_self" title="Purchase Stock Transfer" class="nav-active-link">
                           Purchase Stock Transfer
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('part_stocks_inhouse')%>" target="_self" title="Inhouse Stock Transfer" class="nav-active-link">
                           Inhouse Stock Transfer
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('fw_stock')%>" target="_self" title="FG Stock Transfer" class="nav-active-link">
                           FG Stock Transfer
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="javascript:void(0)" target="_self" title="Subcon Challan" class="nav-active-link">
                           Subcon Challan 
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="javascript:void(0)" target="_self" title="Customer Challan Inward" class="nav-active-link">
                           Customer Challan Inward
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="javascript:void(0)" target="_self" title="Customer Challan Inward" class="nav-active-link">
                           Customer Challan Outward
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('stock_rejection')%>" target="_self" title="Stock Rejection" class="nav-active-link">
                           Stock Rejection
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('reports_grn')%>" target="_self" title="GRN Report" class="nav-active-link report-menu">
                           GRN Report
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('supplier_parts_stock_report')%>" target="_self" title="Purchase Stock" class="nav-active-link report-menu">
                           Purchase Stock
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('subcon_supplier_challan_part_report')%>" target="_self" title="Subcon Report" class="nav-active-link report-menu">
                           Subcon Report
                           </a>
                        </li>

                     </ul>
                  </div>
               </div>
               <%/if%>
               <%if ($role == "Sales" || $role == "Admin") %>
               <div class="span3 box ag-col-2" style="width: 25%;">
                  <div class="title">
                     <h4><span class="icon14 "></span>Planning & Sales</h4>
                  </div>
                  <div class="content ">
                     <ul class="sitemap">
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('new_sales')%>" target="_self" title="Create Sale Invoice" class="nav-active-link">
                           Create Sale Invoice
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('sales_invoice_released')%>" target="_self" title="E-INVOICE & PDI" class="nav-active-link">
                           E-INVOICE & PDI 
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('customer_po_tracking_all')%>" target="_self" title="Sales Order" class="nav-active-link">
                           Sales Order
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('planning_year_page')%>" target="_self" title="Monthly Schedule" class="nav-active-link">
                           Monthly Schedule
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('planning_shop_order_details')%>" target="_self" title="Shop Order" class="nav-active-link">
                           Shop Order
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('rejection_invoices')%>" target="_self" title="Rejection Invoice" class="nav-active-link">
                           Rejection Invoice
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('sales_report')%>" target="_self" title="Sales Report" class="nav-active-link report-menu">
                           Sales Report
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="javascript:void(0);" target="_self" title="Sales Summary Report" class="nav-active-link report-menu">
                           Sales Summary Report</a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="javascript:void(0);" target="_self" title="Hsn Report" class="nav-active-link report-menu">
                           HSN Report 
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('planing_data_report')%>" target="_self" title="Monthly Schedule Report" class="nav-active-link report-menu">
                           Monthly Schedule Report 
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('customer')%>" target="_self" title="Customers" class="nav-active-link master-menu">
                           Customers
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('customer_parts_master')%>" target="_self" title="Part Master" class="nav-active-link master-menu">
                           Part Master
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('customer_master')%>" target="_self" title="Customer Master" class="nav-active-link master-menu">
                           Customer Master
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('consignee')%>" target="_self" title="Consignee" class="nav-active-link master-menu">
                           Consignee
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('transporter')%>" target="_self" title="Transporter List" class="nav-active-link master-menu">
                           Transporter List
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <%/if%>
               <%if ($role == "production" || $role == "Admin") %>
               <div class="span3 box ag-col-3" style="width: 25%;">
                  <div class="title">
                     <h4><span class="icon14 "></span>Production</h4>
                  </div>
                  <div class="content ">
                     <ul class="sitemap">
                        <%if ($entitlements['isPlastic']!=null) %>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('machine_request')%>" target="_self" title="Material Request" class="nav-active-link">
                           Material Request
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('p_q_molding_production')%>" target="_self" title="Molding Production" class="nav-active-link">
                           Molding Production
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('view_p_q_molding_production')%>" target="_self" title="Molding Production Approval" class="nav-active-link report-menu">
                           Molding Production Approval
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('report_prod_rejection')%>" target="_self" title="Production Rejection Reason" class="nav-active-link report-menu">
                           Production Rejection Reason
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('mold_maintenance_report')%>" target="_self" title="Mold Life Report" class="nav-active-link report-menu">
                           Mold Life Report
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="javascript:void(0)" target="_self" title="Downtime Rport" class="nav-active-link report-menu" >
                           Downtime Rport
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('machine_request_completed')%>" target="_self" title="Material Request Report" class="nav-active-link report-menu">
                           Material Request Report
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('molding_stock_transfer')%>" target="_self" title="Molding Stock Transfer" class="nav-active-link report-menu">
                          Molding Stock Transfer
                           </a>
                        </li>
                        <%/if%>
                        <%if ($entitlements['isSheetMetal']!=null) %>
                           <li>
                              <a hijacked="yes" aria-nav-code="shortcuts" href="javascript:void(0)" target="_self" title="Production Rport" class="nav-active-link report-menu">
                           Production Rport
                              </a> 
                           </li>
                           <li>
                              <a hijacked="yes" aria-nav-code="shortcuts" href="javascript:void(0)" target="_self" title="Shearing Production Rport" class="nav-active-link report-menu">
                           Shearing Production Rport
                              </a> 
                           </li>
                           <li>
                              <a hijacked="yes" aria-nav-code="shortcuts" href="javascript:void(0)" target="_self" title="Downtime Rport" class="nav-active-link report-menu">
                              Downtime Rport
                              </a>
                           </li>
                           <li>
                              <a hijacked="yes" aria-nav-code="shortcuts" href="javascript:void(0)" target="_self" title="OEE Rport" class="nav-active-link report-menu">
                              OEE Rport
                              </a>
                           </li>
                           <li>
                              <a hijacked="yes" aria-nav-code="shortcuts" href="javascript:void(0)" target="_self" title="Production Rejection Rport" class="nav-active-link report-menu">
                              Production Rejection Rport
                              </a>
                           </li>
                        <%/if%>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('operator')%>" target="_self" title="Operator List" class="nav-active-link master-menu">
                          Operator List
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('machine')%>" target="_self" title="Machine List" class="nav-active-link master-menu">
                          Machine List
                           </a>
                        </li>
                        <%if ($entitlements['isPlastic']) %>
                           <li>
                              <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('mold_maintenance')%>" target="_self" title="Mold Master" class="nav-active-link master-menu">
                             Mold Master
                              </a>
                           </li>
                        <%/if%>
                        <li>
                              <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('downtime_master')%>" target="_self" title="Down Time Reason" class="nav-active-link master-menu">
                             Down Time Reason
                              </a>
                        </li>
                        <li>
                              <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('shifts')%>" target="_self" title="Shift Master" class="nav-active-link master-menu">
                             Shift Master
                              </a>
                        </li>
                        
                     </ul>
                  </div>
               </div>
               <%/if%>
               <div class="span3 box ag-col-4" style="width: 25%;">
                  <div class="title">
                     <h4><span class="icon14 "></span>Quality</h4>
                  </div>
                  <div class="content ">
                     <ul class="sitemap">
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('accept_reject_validation')%>" target="_self" title="Inward Inspection" class="nav-active-link">
                           Inward Inspection
                           </a>
                        </li>
                        <%if ($entitlements['isPlastic']!=null) %>
                           <li>
                              <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('final_inspection')%>" target="_self" title="Final Inspection" class="nav-active-link">
                              Final Inspection
                              </a>
                           </li>
                        <%/if%>
                        <%if ($entitlements['isSheetMetal']!=null) %>
                           <li>
                              <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('final_inspection_qa')%>" target="_self" title="FINAL INSPECTION SMF" class="nav-active-link">
                              FINAL INSPECTION SMF
                              </a>
                           </li>
                        <%/if%>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('remarks')%>" target="_self" title="Rejection Reasons" class="nav-active-link">
                           Rejection Reasons
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('stock_rejection')%>" target="_self" title="Stock Rejection" class="nav-active-link">
                           Stock Rejection
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('reports_incoming_quality')%>" target="_self" title="Incoming Quality Report" class="nav-active-link report-menu">
                           Incoming Quality Report
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('reports_inspection')%>" target="_self" title="Under Inspection Parts" class="nav-active-link report-menu">
                           Under Inspection Parts
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('grn_rejection')%>" target="_self" title="GRN Rejection" class="nav-active-link report-menu">
                           GRN Rejection
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="javascript:void(0)" target="_self" title="PPM REPORT" class="nav-active-link report-menu">
                           PPM REPORT
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('remarks')%>" target="_self" title="Rejection Reasons" class="nav-active-link master-menu">
                           Rejection Reasons
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="span3 box ag-col-1" style="width: 25%;">
                  <div class="title">
                     <h4><span class="icon14 "></span>Accounts</h4>
                  </div>
                  <div class="content ">
                     <ul class="sitemap">
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('receivable_report')%>" target="_self" title="Receivable" class="nav-active-link report-menu">
                           Receivable
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="javascript:void(0);" target="_self" title="Payable" class="nav-active-link report-menu">
                           Payable
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="javascript:void(0);" target="_self" title="Cash Purchase" class="nav-active-link report-menu">
                           Cash Purchase
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="javascript:void(0);" target="_self" title="GST Report" class="nav-active-link">
                           GST Report
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <%if ($role == "Admin") %>
               <div class="span3 box ag-col-1" style="width: 25%;">
                  <div class="title">
                     <h4><span class="icon14 "></span>Admin</h4>
                  </div>
                  <div class="content ">
                     <ul class="sitemap">
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('approved_supplier')%>" target="_self" title="Po Approval" class="nav-active-link">
                           Po Approval
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('child_parts')%>" target="_self" title="Purchase Stock Update" class="nav-active-link">
                           Purchase Stock Update
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('customer_parts_admin')%>" target="_self" title="Sales Stock Update" class="nav-active-link">
                           Sales Stock Update
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('inhouse_parts_admin')%>" target="_self" title="Inhouse Stock Update" class="nav-active-link">
                           Inhouse Stock Update
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('child_part_supplier_admin')%>" target="_self" title="Purchase Price Approval" class="nav-active-link">
                          Purchase Price Approval
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('supplier')%>" target="_self" title="Supplier Approval" class="nav-active-link">
                          Supplier Approval
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('client')%>" target="_self" title="Client Master" class="nav-active-link master-menu">
                          Client Master
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('uom')%>" target="_self" title="UOM Master" class="nav-active-link master-menu">
                          UOM Master
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('gst')%>" target="_self" title="Tax Structure Master" class="nav-active-link master-menu">
                          Tax Structure Master
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('grades')%>" target="_self" title="Grades Master" class="nav-active-link master-menu">
                          Grades Master
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('part_family')%>" target="_self" title="Part Family" class="nav-active-link master-menu">
                          Part Family
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('process')%>" target="_self" title="Process" class="nav-active-link master-menu">
                          Process
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('operations')%>" target="_self" title="Operation No." class="nav-active-link master-menu">
                          Operation No.
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('operations_data')%>" target="_self" title="Operations Data" class="nav-active-link master-menu">
                          Operations Data
                           </a>
                        </li>
                        <li>
                           <a hijacked="yes" aria-nav-code="shortcuts" href="<%base_url('asset')%>" target="_self" title="Operations Data" class="nav-active-link master-menu">
                          Asset
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <%/if%>
               
               
              
              
            </div>
            <div class="clear"></div>
         </div>
      </div>
   </div>
</div>