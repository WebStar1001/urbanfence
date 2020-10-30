<!-- <style type="text/css">
::-webkit-scrollbar {
  width: 10px!important;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: lightblue; 
  border-radius: 10px;
}


td.details-control {
    background: url('<?php echo base_url("/assets/images/plus.png")?>') no-repeat center center;
    cursor: pointer;
}
tr.shown td.details-control {
    background: url('<?php echo base_url("/assets/images/minus.png")?>') no-repeat center center;
}
</style> -->
<style type="text/css">

 
@media screen and (max-width: 1170px) {
  div#examples_wrapper{
    padding-bottom: 3%;
    overflow: auto;
  } 
}
 @media screen and (max-width: 850px) {
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
                <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Urbanfence</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Opportunities List</a> </div>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Account Menu -->
                 <?php include(APPPATH."views/inc/account_menu.php")?>
                <!-- END: Account Menu -->
            </div>
            <!-- BEGIN: Filters -->
               <div class="intro-y grid grid-cols-12 p-5 mt-5 gap-2 box">
                <h2 class="col-span-12 font-medium text-base  border-b border-gray-200">Filters</h2>
                <div class="col-span-12 sm:col-span-6 md:col-span-4">
                  <div> <label>Job Type</label>
                      <div class="mt-1"> <select class="select2 w-full">
                                <option>All</option>
                           </select> 
                      </div>
                  </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-4">
                  <div> <label>Oppor. Per Month</label>
                      <div class="mt-1"> <select class="select2 w-full">
                                <option>APR</option>
                                <option>MAY</option>
                                <option>JUN</option>
                           </select> 
                      </div>
                  </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-4">
                  <div> <label>Sale Source</label>
                      <div class="mt-1"> <select class="select2 w-full">
                                <option>All</option>
                           </select> 
                      </div>
                  </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-4">
                  <div> <label>Status</label>
                      <div class="mt-1">
                          <select class="select2 w-full">
                                <option>New</option>
                          </select> 
                      </div>
                  </div>
                </div>
                <div class="ml-sm-3 col-span-12 sm:col-span-6 md:col-span-4">
                  <div class=""> <label>Sale Rep</label>
                      <div class="mt-1"> <input type="text" placeholder="Search" class="input pl-12 border w-full">
                      </div>
                  </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-4">
                  <div> <label>Customer</label>
                      <div class="mt-1"> <input type="text" placeholder="Search" class="input pl-12 border w-full">
                      </div>
                  </div>
                </div>
                <div class="ml-sm-3 col-span-12 sm:col-span-6 md:col-span-4">
                  <div class=""> <label>Oppor ID</label>
                      <div class="mt-1"> <input type="text" placeholder="Search" class="input pl-12 border w-full">
                      </div>
                  </div>
                </div>
                <div class="ml-sm-3 col-span-12 sm:col-span-6 md:col-span-4">
                  <div class=""> <label>Customer ID</label>
                      <div class="mt-1"> <input type="text" placeholder="Search" class="input pl-12 border w-full">
                      </div>
                  </div>
                </div>

                <div class="col-span-12 sm:col-span-6 md:col-span-4">
                  <div> <label>Date</label>
                      <div class="mt-1">
                          <input data-daterange="true" class="datepicker input pl-12 border w-full">
                      </div>
                  </div>
                </div>
                
                <div class="col-span-12 sm:col-span-6 md:col-span-4">
                  <div> <label>Job City</label>
                      <div class="mt-1"> <input type="text" placeholder="Search" class="input pl-12 border w-full">
                      </div>
                  </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-4">
                  <div> <label>Urgency</label>
                      <div class="mt-1"> <input type="text"  class="input pl-12 border w-full">
                      </div>
                  </div>
                </div>
                
                
                
                
                
                <div class="col-span-12 sm:col-span-6 md:col-span-4 flex items-end">
                  <div>
                    <button class="button w-24 mr-1  bg-theme-1 text-white">Clear filter</button> <button  class="button w-24 mr-1  bg-theme-6 text-white float-right width_filter">filter</button>
                  </div>
                </div>
               </div> 
            <!-- END: Filters -->

            <!-- BEGIN: Datatable -->
                <div class="intro-y box p-5 mt-5" id="table_main_div">
                    <table id="examples" class="display" style="width:100%;text-align: center; margin-bottom: 5px;">
                      <thead>
                          <tr>
                            <th>Additional Info</th>
                              <th>Id</th>
                              <th>Customer ID</th>
                              <th>Date</th>
                              <th>Customer</th>
                              <th class="whitespace-no-wrap">Job Type</th>
                              <th>Sale Sourse</th>
                              <th>Status</th>
                              <th>Sales Rep</th>
                              <th>Edit</th>
                              <th>Create Quote</th>
                          </tr>
                      </thead>
                    </table>

                </div>
                <!-- END: Datatable -->
            </div>
            <!-- END: Content -->
      
<script type="text/javascript">
  function format ( d ) {
    /*console.log(d.JobCity);*/
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px; text-alight:center">'+
        
        '<tr>'+
            '<td>Job City:</td>'+
            '<td>'+d.jobcity+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Contact Person:</td>'+
            '<td>'+d.ContactPerson+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Job Address:</td>'+
            '<td>'+d.JobAddress+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Job Site:</td>'+
            '<td>'+d.JobSite+'.</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Urgency:</td>'+
            '<td>'+d.Urgency+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Time:</td>'+
            '<td>'+d.Time+'..</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Details:</td>'+
            '<td>'+d.Details+'</td>'+
        '</tr>'+
    '</table>';
  }
$(document).ready(function() {
    var table = $('#examples').DataTable( {
      "pageLength": 50,
        //"ajax": '<?php echo base_url("Opportunity/getData");?>',
        "ajax":{
          url:'<?php echo base_url("Opportunity/getData");?>',
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
            {"data":"id"},
            { "data": "customer_id" },
            { "data": "date" },
            { "data": "customer" },
            // { "data": "jobcity" },
            { "data": "job type" },
            { "data": "Sale Source" },
            { "data": "status" },
            { "data": null,render:function(data){
              return "<select name='fieldName'><option value='1'>Please Select</option><option value='2'>David</option><option value='3'>Joseph</option></select>";
              }
            },

            { "data": null,render:function(data){
              return "<a href='#'><i class='fa fa-pencil' aria-hidden='true'></i></a>" }
            },

            
            { "data": null,render:function(data){
              return "<a href='<?php echo base_url('Quotes/add_quote');?>'><i class='fa fa-external-link' aria-hidden='true'></i></a>" }}
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