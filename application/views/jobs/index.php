<style type="text/css">

#examples_paginate{
  margin-bottom: 1%;
}
  div#examples_wrapper{
    overflow: auto;
  }

@media screen and (max-width: 859px) {
    button.width_filter{
      width:4rem;
    }
} 
  @media screen and (max-width: 767px) {
    button.width_filter{
      width:6rem;
    }
  }
</style>        
            <!-- BEGIN: Content -->
            <div class="content">
                           <!-- BEGIN: Top Bar -->
            <div class="top-bar">
                <!-- BEGIN: Breadcrumb -->
                <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Urbanfence</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Jobs List</a> </div>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Account Menu -->
                 <?php include(APPPATH."views/inc/account_menu.php")?>
                <!-- END: Account Menu -->
            </div>
            <!-- BEGIN: Filters -->
               <div class="intro-y grid grid-cols-12 p-5 mt-5 gap-2 box">
                <h2 class="col-span-12 font-medium text-base  border-b border-gray-200">Filters</h2>
                <div class="ml-sm-3 col-span-12 sm:col-span-6 md:col-span-4">
                  <div class=""> <label>Job ID</label>
                      <div class="mt-1"> <input type="text" placeholder="Search" class="input pl-12 border w-full">
                      </div>
                  </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-4">
                  <div> <label>Status</label>
                      <div class="mt-1">
                          <select class="select2 w-full">
                                <option>MAT delivered</option>
                          </select> 
                      </div>
                  </div>
                </div>
                <div class="ml-sm-3 col-span-12 sm:col-span-6 md:col-span-4">
                  <div class=""> <label>Quote ID</label>
                      <div class="mt-1"> <input type="text" placeholder="Search" class="input pl-12 border w-full">
                      </div>
                  </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-4">
                  <div> <label>Installer</label>
                      <div class="mt-1">
                          <select class="select2 w-full">
                                <option>Benjamin</option>
                                <option>Kevin Vaas</option>
                          </select> 
                      </div>
                  </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-4">
                  <div> <label>Job Balance</label>
                      <div class="mt-1">
                          <select class="select2 w-full">
                                <option>All</option>
                                <option>Fully paid</option>
                          </select> 
                      </div>
                  </div>
                </div>
                <div class="ml-sm-3 col-span-12 sm:col-span-6 md:col-span-4">
                  <div class=""> <label>Customer ID</label>
                      <div class="mt-1"> <input type="text" placeholder="Search" class="input pl-12 border w-full">
                      </div>
                  </div>
                </div>
                <div class="ml-sm-3 col-span-12 sm:col-span-6 md:col-span-4">
                  <div class=""> <label>Customer</label>
                      <div class="mt-1"> <input type="text" placeholder="Search" class="input pl-12 border w-full">
                      </div>
                  </div>
                </div>
                <div class="ml-sm-3 col-span-12 sm:col-span-6 md:col-span-4">
                  <div class=""> <label>Sale Rep</label>
                      <div class="mt-1"> <select class="select2 w-full">
                                <option>David</option>
                          </select> 
                      </div>
                  </div>
                </div>
               <div class="col-span-12 sm:col-span-6 md:col-span-4">
                  <div> <label>Start Date</label>
                      <div class="mt-1">
                          <input data-daterange="true" class="datepicker input pl-12 border w-full">
                      </div>
                  </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-4">
                  <div> <label>End Date</label>
                      <div class="mt-1">
                          <input data-daterange="true" class="datepicker input pl-12 border w-full">
                      </div>
                  </div>
                </div>
                
                <div class="col-span-12 sm:col-span-6 md:col-span-4 flex items-end">
                  <div>
                    <button class="button w-24 mr-1  bg-theme-1 text-white">Clear filter</button> <button  class="button w-24 mr-1 width_filter bg-theme-6 text-white">filter</button>
                  </div>
                </div>
               </div> 
            <!-- END: Filters -->

            <!-- BEGIN: Datatable -->
                <div class="intro-y box p-5 mt-5" id="table_main_div">
                   <table id="examples" class="display" style="width:100%;text-align: center;">
                      <thead>
                          <tr>
                            <th></th>
                              <th>Job Id</th>
                              <th>Status</th>
                              <th>Installer</th>
                              <th>Start Date</th>
                              <th>End Date</th>
                              <th>Customer</th>
                              <th>Job Type</th>
                              <th>Total</th>
                              <th>Job Balance</th>
<!--                               <th>MAT</th>
                              <th>LAB</th>
                              <th>MISC</th>
                              <th>Add_on</th> -->
                              
                          </tr>
                      </thead>
                    </table>

                </div>
                <!-- END: Datatable -->
            </div>
            <!-- END: Content -->

            <!-- END: Content -->
<script type="text/javascript">
  function format ( d ) {
    /*console.log(d.JobCity);*/
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px; text-alight:center">'+
        '<tr>'+
            '<td>Contact Person:</td>'+
            '<td>'+d.contact_person+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Job Address:</td>'+
            '<td>'+d.job_address+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Job City:</td>'+
            '<td>'+d.job_city+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Job Site:</td>'+
            '<td>'+d.job_site+'</td>'+
        '</tr>'+
        '<tr>'+
        '<tr>'+
            '<td>Customer ID:</td>'+
            '<td>'+d.customer_id+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Oppor ID:</td>'+
            '<td>'+d.oppor_id+'</td>'+
        '</tr>'+
            '<td>Quote ID:</td>'+
            '<td>'+d.quote_id+'</td>'+
        '</tr>'+
    '</table>';
  }
$(document).ready(function() {
    var table = $('#examples').DataTable( {
      "pageLength": 50,
        
        "ajax":{
          url:'<?php echo base_url("Jobs/getData");?>',
          type:'GET',
         // type:'JSON'
        },
        "columns": [
        {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data":"id"},
            { "data": "status" },
            { "data": "installer" },
            { "data": "start_date" },
            { "data": "end_date" },
            { "data": "customer" },
            { "data": "job_type" },
            { "data": "total" },
            { "data": "job_balance" }
            // { "data": "mat" },
            // { "data": "lab" },
            // { "data": "misc" },
            // { "data": "add_on" },
            
        ],
        "order": [[0, 'asc']]
    });
     
    // Add event listener for opening and closing details
    $('#examples tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    } );
} );
</script>