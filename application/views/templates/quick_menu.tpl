<div id="menu_overlay" class="menu_overlay home-page-boxes <%if $sitemap%>open site-map-contain<%/if%>">
   <div class="new_sitemap_items">
      <div class="headingfix">
         <div class="heading" id="top_heading_fix" style="width: 1666px;">
            <h3 style="padding-left: 40px; width: 97%;">
                                 Welcome To <%$config['company_name']%>
                              
               <div class="color-legend-block hide">
                  <span class="quick-menu">Quick</span>
                  <span class="report-menu">Report</span>
                  <span class="master-menu">Master</span>
               </div>
            </h3>
         </div>
      </div>
      <div id="scrollable_content" class="scrollable-content">
         <div class="sitemap-blocks pad-calc-container">
            <div class="sitemap-items" style="position: relative; height: 1010px;">
               <%foreach from=$config['menu_data'] item='menu' key='menu_key'%>
                  <%if count($menu) gt 0%>
                  <div
                     class="span3 box ag-col-1"
                     style="width: 25%;">
                     <div class="title">
                        <h4>
                              <span class="icon14 "></span><%$menu_key%></h4>
                     </div>
                     <div class="content ">
                        <ul class="sitemap">
                           <%foreach from=$menu item='menu_item'%>
                              <li>
                                 <a
                                    hijacked="yes"
                                    href="<%base_url('')%><%$menu_item['url']%>"
                                    class="nav-active-link"
                                    title="<%$menu_item['diaplay_name']%>">
                                    <%$menu_item['diaplay_name']%>
                                 </a>
                              </li>
                           <%/foreach%>
                        </ul>
                     </div>
                  </div>
                  <%/if%>
               <%/foreach%>
               
            
                              
               
              
              
            </div>
            
            <div class="clear"></div>
         </div>
      </div>
   </div>
</div>