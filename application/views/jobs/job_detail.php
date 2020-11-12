<style type="text/css">

    div#examples_wrapper {
        overflow: auto;
    }

    .border_color {
        border: 1px solid #2d3748;
    }

    .job_setting_child_width {
        width: 25%;
    }

    .info_spacing {
        letter-spacing: 1.5px;
    }

    .display_info_block {
        display: inline-flex;
        background-color: #cccccc !important;
    }

    @media screen and (max-width: 650px) {
        select {
            text-align-last: center;
        }
    }

    @media screen and (max-width: 640px) {
        .display_info_block {
            display: inline-block;
            background-color: #cccccc !important;
        }
    }

    @media screen and (max-width: 450px) {
        select {
            text-align-last: left;
        }
    }

    #material-detailed table {
        border: 1px solid black;
    }

    #material-detailed th {
        border: 1px solid black;
    }

    #material-detailed td {
        border: 1px solid black;
    }


</style>
<!-- BEGIN: Content -->

<div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">
        <!-- BEGIN: Breadcrumb -->
        <div class="-intro-x breadcrumb mr-auto hidden sm:flex"><a href="" class="">Urbanfence</a> <i
                    data-feather="chevron-right" class="breadcrumb__icon"></i> <span class="breadcrumb--active">Jobs Detail</span>
        </div>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Account Menu -->
        <?php include(APPPATH . "views/inc/account_menu.php") ?>
        <!-- END: Account Menu -->
    </div>
    <!-- BEGIN: Filters -->
    <fieldset class="p-2 mb-3 w-full fieldset_bd_color">
        <legend class="legend_spacing">Job #01</legend>
        <div class="intro-y grid grid-cols-12 p-5 gap-2 ">
            <!-- <h2 class="col-span-12 font-medium text-base  border-b border-gray-200">Filters</h2> -->
            <div class="col-span-12 m-auto">
                <div class="w-full">
                    <input type="text" placeholder="Search Job" class="input pl-12 border"
                           id="job_id">
                    <button class="button w-24 mr-1  bg-theme-1 text-white" id="clearFilter">Search</button>
                    </button>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-12 box m-auto w-full lg:w-5/6 p-5 fieldset_bd_color display_info_block mt-3"
                 style="position: relative;right: 12px;background-color:#1C3FAA !important;">
                <div class="w-full md:w-4/5 lg:w-1/2 border_color p-1 fieldset_bd_color mr-1 sm:mr-2 md:mr-5 mb-2 sm:mb-0"
                     style="background-color: white">
                    <p><b class="info_spacing">Customer Name:</b> BSD IT Services</p>
                    <p><b class="info_spacing">Contact Person:</b> Aviad Krief</p>
                    <p><b class="info_spacing">Phone:</b> 647-389-1300</p>
                    <p><b class="info_spacing">Email:</b> ak@bsditservices.com</p>
                </div>


                <div class="w-full md:w-4/5 lg:w-1/2 border_color p-1 fieldset_bd_color"
                     style="background-color: white">
                    <p><b class="info_spacing">Job Type:</b> New Fence</p>
                    <p><b class="info_spacing">Job Address:</b> 207 Edgeley Blvd</p>
                    <p><b class="info_spacing">Job City:</b> Concord</p>
                    <p><b class="info_spacing">Payment Terms are:</b> Net 30 Days</p>
                </div>
            </div>
        </div>


        <div class="intro-y grid grid-cols-12 p-5 mt-5 gap-2">
            <div class="col-span-12 lg:col-span-6 lg:mr-5">
                <fieldset class="p-2 pt-5 pb-4 w-full fieldset_bd_color box">
                    <legend class="legend_spacing">Materials Settings</legend>

                    <div class="mt-1 mb-5 float-left w-1/2">
                        <input type="checkbox" class="input border mr-2" id="vertical-remember-me">
                        <label class="cursor-pointer select-none" for="vertical-remember-me" style="width: auto;">Need
                            to order Material</label>
                    </div>
                    <div class="float-right w-1/2 mb-5">
                        <div class="mt-1 mb-2">
                            <input type="checkbox" class="input border mr-2" id="vertical-remember-me_r1">
                            <label class="cursor-pointer select-none" for="vertical-remember-me_r1"
                                   style="width: auto;">Materials in stack</label>
                        </div>
                        <div class="mt-1 mb-2">
                            <input type="checkbox" class="input border mr-2" id="vertical-remember-me_r2">
                            <label class="cursor-pointer select-none" for="vertical-remember-me_r2"
                                   style="width: auto;">Materials Collected</label>
                        </div>
                        <div class="mt-1 mb-4">
                            <input type="checkbox" class="input border mr-2" id="vertical-remember-me_r3">
                            <label class="cursor-pointer select-none" for="vertical-remember-me_r3"
                                   style="width: auto;">Materials Delivered</label>
                        </div>
                    </div>
                </fieldset>
            </div>

            <div class="col-span-12 lg:col-span-6 text-right" id="date_area">
                <fieldset class="p-1 fieldset_bd_color box pr-5">
                    <legend class="legend_spacing text-left">Job Settings</legend>
                    <div class="mt-1 mb-2">
                        <label class="mr-1">Assign Installer </label>
                        <select class="input border mr-0 w-1/3 lg:w-2/3">
                            <option>Choose</option>
                            <option>Liam Neeson</option>
                            <option>Daniel Craig</option>
                        </select>
                    </div>
                    <div class="mt-1 mb-2">
                        <label class="mr-1">Start Date</label>
                        <input type="date" class="input w-1/3 lg:w-2/3 border col-span-4">
                    </div>
                    <div class="mt-1 mb-2">
                        <label class="mr-1">Completion Date</label>
                        <input type="date" class="input w-1/3 lg:w-2/3 border col-span-4">
                    </div>
                </fieldset>
            </div>
        </div>

        <div class="p-5">
            <a data-target="#material-detailed" data-toggle="modal" class="button  bg-theme-1 text-white">Material
                Tracking</a>
        </div>

        <div class="intro-y grid grid-cols-12 p-5 mt-5 gap-2">
            <div class="col-span-12">
                <fieldset class="p-2 mb-3 w-2/4 sm:w-2/5 lg:w-1/4 m-auto fieldset_bd_color box">
                    <legend class="legend_spacing">Status</legend>
                    <p class="w-full p-2"> Material Delivered</p>
                </fieldset>
            </div>
        </div>
        <!-- END: Filters -->


        <!--  -->
        <!--  <fieldset class="p-1 status_width fieldset_bd_color">
           <legend class="legend_spacing">Payments</legend>

             <div class="intro-y grid grid-cols-12 box p-5text-center">

                 <div class="col-span-12 p-5">

                     <div class="w-full lg:w-1/6 float-left text-left m-auto">
                         <p><b>Take Payment</b></p>
                     </div>

                     <div class="w-full sm:w-1/2 lg:w-1/5 lg:mr-3 float-left mb-2 md:mb-0 p-2 lg:p-0 sm:text-left ">
                         <div class="sm:w-full">
                             <label class="w-full sm:w-1/3 text-left">Invoice #</label>
                             <input type="text" class="input w-full border flex-1 md:text-center">
                   </div>
                     </div>

                     <div class="w-full sm:w-1/2 lg:w-1/5 lg:mr-3 float-left mb-2 md:mb-0 p-2 lg:p-0 sm:text-left">
                         <div class="sm:w-full">
                             <label class="w-full text-left">Payment amount</label>
                             <input type="text" class="input w-full border flex-1 md:text-center">
                   </div>
                     </div>

                     <div class="w-full sm:w-1/2 lg:w-1/5 lg:mr-3 float-left mb-2 md:mb-0 p-2 lg:p-0 sm:text-left">
                         <div class="sm:w-full">
                           <label class="w-full text-left">Payment Method</label>
                             <select class="input w-full border flex-1">
                                 <option>choose</option>
                                 <option>Visa</option>
                                 <option>Cash</option>
                             </select>
                   </div>
                     </div>

                     <div class="w-full sm:w-1/2 lg:w-1/6 float-left ml-5 sm:mt-2 p-2 lg:p-0  pt-5 lg:mt-5">
                         <input type="checkbox" class="input border mr-2" id="vertical-remember-me" style="border-color:grey;width: 50px;height: 50px; "><div style="position: relative;right: 25px;">Create Payment</div>

                     </div>
                 </div>
                  <div class="col-span-12 p-5 mt-5" style="overflow-y: auto;">
                 <table class="border_color table table-report table-report--bordered display" style="margin-bottom: 1%;border-color: #F1F5F8">
                     <thead style="background-color: #F1F5F8">
                         <tr>
                             <th class="border-b-2 text-center">Payment Date</th>
                             <th class="border-b-2 text-center">Invoice</th>
                             <th class="border-b-2 text-center">Payment Amount</th>
                             <th class="border-b-2 text-center">Payment Method</th>
                             <th class="border-b-2 text-center">Job Balance</th>
                         </tr>
                     </thead>
                     <tbody id="user_table_body">
                        <tr>
                            <td class="text-center border-b">001</td>
                            <td class="text-center border-b">Greg</td>
                            <td class="text-center border-b">Greg</td>
                            <td class="text-center border-b">Admin</td>
                            <td class="text-center border-b">Active</td>

                        </tr>
                    </tbody>
                </table>
            </div>


             </div>
           </fieldset>
           <fieldset class="p-1 status_width fieldset_bd_color " style="margin-top: 3%;">
           <legend class="legend_spacing">Invoice</legend>
             <div class="intro-y grid grid-cols-12 box p-5text-center">
               <div class="col-span-12 p-5">
                 <div class="w-full lg:w-1/6 float-left text-left m-auto">
                   <p><b>Generate Invoice</b></p>
                 </div>
                 <div class="w-full sm:w-1/2 lg:w-1/5 lg:mr-3 float-left mb-2 md:mb-0 p-2 lg:p-0 sm:text-left ">
                   <div class="sm:w-full">
                             <label class="w-full sm:w-1/3 text-left">Invoice Amount</label>
                             <input type="text" class="input w-full border flex-1 md:text-center">
                   </div>
                 </div>
                 <div class="w-full sm:w-1/2 lg:w-1/5 lg:mr-3 float-left mb-2 md:mb-0 p-2 lg:p-0 sm:text-left">
                   <div class="sm:w-full">
                             <label class="w-full text-left">Invoice Due-Date</label>
                             <input type="text" class="input w-full border flex-1 md:text-center">
                   </div>
                 </div>
               </div>
             </div>
           </fieldset> -->

        <fieldset class="p-1 status_width fieldset_bd_color" style="margin-top: 3%;">
            <legend class="legend_spacing">Credits-Debits Tracking</legend>
            <div class="intro-y grid grid-cols-12 box">
                <div class="col-span-12 p-5 box">

                    <div class="w-full lg:w-1/6 float-left text-left m-auto">
                        <p><b>Take Payment</b></p>
                    </div>

                    <div class="w-full sm:w-1/2 lg:w-1/5 lg:mr-3 float-left mb-2 md:mb-0 p-2 lg:p-0 sm:text-left ">
                        <div class="sm:w-full">
                            <label class="w-full sm:w-1/3 text-left">Invoice #</label>
                            <input type="text" class="input w-full border flex-1 md:text-center">
                        </div>
                    </div>

                    <div class="w-full sm:w-1/2 lg:w-1/5 lg:mr-3 float-left mb-2 md:mb-0 p-2 lg:p-0 sm:text-left">
                        <div class="sm:w-full">
                            <label class="w-full text-left">Payment amount</label>
                            <input type="text" class="input w-full border flex-1 md:text-center">
                        </div>
                    </div>

                    <div class="w-full sm:w-1/2 lg:w-1/5 lg:mr-3 float-left mb-2 md:mb-0 p-2 lg:p-0 sm:text-left">
                        <div class="sm:w-full">
                            <label class="w-full text-left">Payment Method</label>
                            <select class="input w-full border flex-1">
                                <option>choose</option>
                                <option>Visa</option>
                                <option>Cash</option>
                            </select>
                        </div>
                    </div>

                    <div class="w-full sm:w-1/2 lg:w-1/6 float-left ml-5 sm:mt-2 p-2 lg:p-0  pt-5 lg:mt-5">
                        <input type="checkbox" class="input border mr-2" id="vertical-remember-me"
                               style="border-color:grey;width: 50px;height: 50px; ">
                        <div style="position: relative;right: 25px;">Create Payment</div>

                    </div>
                </div>

            </div>
            <div class="intro-y grid grid-cols-12 box" style="margin-top: 2%;">
                <div class="col-span-12 p-5">
                    <div class="w-full lg:w-1/6 float-left text-left m-auto">
                        <p><b>Generate Invoice</b></p>
                    </div>
                    <div class="w-full sm:w-1/2 lg:w-1/5 lg:mr-3 float-left mb-2 md:mb-0 p-2 lg:p-0 sm:text-left ">
                        <div class="sm:w-full">
                            <label class="w-full sm:w-1/3 text-left">Invoice Amount</label>
                            <input type="text" class="input w-full border flex-1 md:text-center">
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 lg:w-1/5 lg:mr-3 float-left mb-2 md:mb-0 p-2 lg:p-0 sm:text-left">
                        <div class="sm:w-full">
                            <label class="w-full text-left">Invoice Due-Date</label>
                            <input type="text" class="input w-full border flex-1 md:text-center">
                        </div>
                    </div>
                </div>
            </div>
            <!-- BEGIN: Datatable -->
            <div class="intro-y box p-5 mt-5" id="table_main_div">
                <table id="examples" class="display" style="width:100%;text-align: center; margin-bottom: 5px;">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Invoice ID</th>
                        <th>Payment ID</th>
                        <th>Debits</th>
                        <th>Credit</th>
                        <th>Due Date</th>
                        <th>Account Balance</th>
                        <th>Job Balance</th>
                        <th>Note</th>
                    </tr>
                    </thead>
                </table>

            </div>
            <!-- END: Datatable -->
        </fieldset>


    </fieldset>
    <!-- END: Datatable -->
</div>
<!-- END: Content -->

<div class="modal" id="material-detailed">
    <div class="modal__content modal__content--lg p-5 text-center" style="width: 75%;">
        <div class="flex items-center py-5 sm:py-3 border-b border-gray-200">
            <h2 class="font-medium text-base mr-auto">Materials Tracking</h2>
        </div>
        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="whitespace-no-wrap">Category</th>
                    <th class="whitespace-no-wrap">MAT Description</th>
                    <th class="whitespace-no-wrap">Quantity</th>
                    <th class="whitespace-no-wrap">Items Collected for job</th>
                    <th class="whitespace-no-wrap">Lable print</th>
                    <th class="whitespace-no-wrap">Missing in Stack</th>
                    <th class="whitespace-no-wrap">In Stack</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="border-b">Fabric</td>
                    <td class="border-b">2" x 9g x 36" Galvanized</td>
                    <td class="border-b">50</td>
                    <td class="border-b">30</td>
                    <td class="border-b">btn</td>
                    <td style="color: red" class="border-b">20</td>
                    <td style="color: red" class="border-b">--</td>
                </tr>
                <tr>
                    <td class="border-b">Top Rail</td>
                    <td class="border-b">Top Rail type 1</td>
                    <td class="border-b">50</td>
                    <td class="border-b">30</td>
                    <td class="border-b">btn</td>
                    <td style="color: red" class="border-b">20</td>
                    <td style="color: red" class="border-b">--</td>
                </tr>
                <tr>
                    <td class="border-b">Gates</td>
                    <td class="border-b">Gate type 1</td>
                    <td class="border-b">1</td>
                    <td class="border-b">1</td>
                    <td class="border-b">btn</td>
                    <td style="color: red" class="border-b"></td>
                    <td style="color: green" class="border-b">+</td>
                </tr>
                <tr>
                    <td class="border-b">Gates</td>
                    <td class="border-b">Gate Fit</td>
                    <td class="border-b">1</td>
                    <td class="border-b">1</td>
                    <td class="border-b">btn</td>
                    <td style="color: red" class="border-b"></td>
                    <td style="color: green" class="border-b">+</td>
                </tr>
                <tr>
                    <td class="border-b">Posts</td>
                    <td class="border-b">Line Post</td>
                    <td class="border-b">10</td>
                    <td class="border-b">10</td>
                    <td class="border-b">btn</td>
                    <td style="color: red" class="border-b"></td>
                    <td style="color: green" class="border-b">+</td>
                </tr>
                <tr>
                    <td class="border-b">Other</td>
                    <td class="border-b">Barb Wire</td>
                    <td class="border-b">50</td>
                    <td class="border-b">50</td>
                    <td class="border-b">btn</td>
                    <td style="color: red" class="border-b"></td>
                    <td style="color: green" class="border-b">+</td>
                </tr>
                <tr>
                    <td class="border-b">Total</td>
                    <td class="border-b"></td>
                    <td class="border-b">162</td>
                    <td class="border-b">122</td>
                    <td class="border-b">btn</td>
                    <td style="color: red" class="border-b">40</td>
                    <td style="color: red" class="border-b">--</td>
                </tr>

                </tbody>
            </table>
        </div>
        <div class="mt-1 mb-5">
            <input style="float:left;" type="checkbox" class="input border mr-2" id="vertical-remember-me">
            <label style="float:left;" class="cursor-pointer select-none" for="vertical-remember-me">Need to order
                Material</label>
        </div>
        <div class="mt-1 mb-2" style="text-align: right;position: relative;right: 10px;">
            <input type="checkbox" class="input border mr-2" id="vertical-remember-me_r1">
            <label class="cursor-pointer select-none" for="vertical-remember-me_r1">Materials in stack</label>
        </div>
        <div class="mt-1 mb-2" style="text-align: right;">
            <input type="checkbox" class="input border mr-2" id="vertical-remember-me_r2">
            <label class="cursor-pointer select-none" for="vertical-remember-me_r2">Materials Collected</label>
        </div>
        <div class=" py-3 text-right border-t border-gray-200">
            <button data-dismiss="modal" type="button" class="button w-20 bg-theme-6 text-white">Cancel</button>
        </div>
    </div>

</div>

<script type="text/javascript">
    function format(d) {
        console.log(d);
        /*console.log(d.JobCity);*/
        // `d` is the original data object for the row
        return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px; text-alight:center">' +
            '<tr style="background-color:yellow;text-align:left">' +
            '<td>Trans. Date:</td>' +
            '<td>' + d.trans_date + '</td>' +
            '</tr>' +
            '<tr style="background-color:yellow;text-align:left">' +
            '<td>Paymen Method:</td>' +
            '<td>' + d.payment_method + '</td>' +
            '</tr>' +
            '<tr style="background-color:yellow;text-align:left">' +
            '<td>Action</td>' +
            '<td><button class="button  bg-theme-6 text-white">Cancel Payment</button></td>' +
            '</tr>' +
            '</table>';
    }

    $(document).ready(function () {
        var table = $('#examples').DataTable({
            "pageLength": 50,

            "ajax": {
                url: '<?php echo base_url("Jobs/credits_debits_tracking");?>',
                type: 'GET',
                // type:'JSON'
            },
            "columns": [
                {
                    "className": 'details-control',
                    "orderable": false,
                    "data": null,
                    "defaultContent": ''
                },
                {"data": "invoice_id"},
                {"data": "payment_id"},
                {"data": "debits"},
                {"data": "credit"},
                {"data": "due_date"},
                {"data": "account_balance"},
                {"data": "job_balance"},
                {
                    "data": "note", render: function (data) {
                        return (data == "Invoice is past Due") ? '<span style="color:red">' + data + '</span>' : '<span style="color:green">' + data + '</span>'
                    }
                },

            ],
            "order": [[0, 'asc']]
        });

        // Add event listener for opening and closing details
        $('#examples tbody').on('click', 'td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = table.row(tr);

            if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            } else {
                // Open this row
                row.child(format(row.data())).show();
                tr.addClass('shown');
            }
        });
    });
</script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>