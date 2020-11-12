<style type="text/css">

    #jobTable_paginate {
        margin-bottom: 1%;
    }

    div#jobTable_wrapper {
        overflow: auto;
    }

    @media screen and (max-width: 859px) {
        button.width_filter {
            width: 4rem;
        }
    }

    @media screen and (max-width: 767px) {
        button.width_filter {
            width: 6rem;
        }
    }
</style>
<!-- BEGIN: Content -->
<div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">
        <!-- BEGIN: Breadcrumb -->
        <div class="-intro-x breadcrumb mr-auto hidden sm:flex"><a href="" class="">Urbanfence</a> <i
                    data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Jobs
                List</a></div>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Account Menu -->
        <?php include(APPPATH . "views/inc/account_menu.php") ?>
        <!-- END: Account Menu -->
    </div>
    <!-- BEGIN: Filters -->
    <form id="filterForm">


        <div class="intro-y grid grid-cols-12 p-5 mt-5 gap-2 box">
            <h2 class="col-span-12 font-medium text-base  border-b border-gray-200">Filters</h2>
            <div class="ml-sm-3 col-span-12 sm:col-span-6 md:col-span-4">
                <div class=""><label>Job ID</label>
                    <div class="mt-1"><input type="text" placeholder="Search" class="input pl-12 border w-full"
                                             id="job_id">
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>Status</label>
                    <div class="mt-1">
                        <select class="select2 w-full" id="status">
                            <option value="0">All</option>
                            <option>New</option>
                            <option>MAT Collected</option>
                            <option>MAT delivered</option>
                            <option>In progress</option>
                            <option>Completed</option>
                            <option>MAT Missing in Stack</option>
                            <option>MAT Missing in Stack</option>
                            <option>Completed and Paid</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="ml-sm-3 col-span-12 sm:col-span-6 md:col-span-4">
                <div class=""><label>Quote ID</label>
                    <div class="mt-1"><input type="text" placeholder="Search" class="input pl-12 border w-full"
                                             id="quote_id">
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>Installer</label>
                    <div class="mt-1">
                        <select class="select2 w-full" id="installer">
                            <option value="0">All</option>
                            <?php
                            foreach ($installers as $installer) {
                                echo '<option value="' . $installer->id . '">' . $installer->name . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>Job Balance</label>
                    <div class="mt-1">
                        <input type="number" placeholder="Search" class="input pl-12 border w-full"
                               id="job_balance">
                    </div>
                </div>
            </div>
            <div class="ml-sm-3 col-span-12 sm:col-span-6 md:col-span-4">
                <div class=""><label>Customer ID</label>
                    <div class="mt-1"><input type="text" placeholder="Search" class="input pl-12 border w-full"
                                             id="customer_id">
                    </div>
                </div>
            </div>
            <div class="ml-sm-3 col-span-12 sm:col-span-6 md:col-span-4">
                <div class=""><label>Customer</label>
                    <div class="mt-1"><input type="text" placeholder="Search" class="input pl-12 border w-full"
                                             id="customer">
                    </div>
                </div>
            </div>
            <div class="ml-sm-3 col-span-12 sm:col-span-6 md:col-span-4">
                <div class=""><label>Sale Rep</label>
                    <div class="mt-1">
                        <select class="input border w-full" id="sale_rep">
                            <option value="0">All</option>
                            <?php
                            foreach ($sales as $user) {
                                echo '<option value="' . $user->id . '">' . $user->name . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>Start Date</label>
                    <div class="mt-1">
                        <input data-daterange="true" class="input pl-12 border w-full" id="start_date">
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>End Date</label>
                    <div class="mt-1">
                        <input data-daterange="true" class="datepicker input pl-12 border w-full" id="end_date">
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>Site City</label>
                    <div class="mt-1">
                        <input type="text" placeholder="Search" class="input pl-12 border w-full"
                               id="site_city">
                    </div>
                </div>

            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4 flex items-end">
                <div>
                    <button class="button w-24 mr-1  bg-theme-1 text-white" id="clearFilter">Clear filter</button>
                    <button class="button w-24 mr-1 width_filter bg-theme-6 text-white" id="applyFilter">filter
                    </button>
                </div>
            </div>
        </div>
    </form>
    <!-- END: Filters -->

    <!-- BEGIN: Datatable -->
    <div class="intro-y box p-5 mt-5" id="table_main_div">
        <table id="jobTable" class="display" style="width:100%;text-align: center;">
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
                <th>Edit</th>
            </tr>
            </thead>
        </table>

    </div>
    <!-- END: Datatable -->
</div>
<!-- END: Content -->

<!-- END: Content -->
<script type="text/javascript">
    function format(d) {
        /*console.log(d.JobCity);*/
        // `d` is the original data object for the row
        return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px; text-aligh:left;width: 100%;">' +
            '<tr>' +
            '<td>Contact Person:</td>' +
            '<td>' + d.contact_person + '</td>' +
            '<td>Site Address:</td>' +
            '<td>' + d.site_address + '</td>' +
            '<td>Customer ID:</td>' +
            '<td>' + d.customer_id + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Contact onsite:</td>' +
            '<td>' + d.contact_onsite + '</td>' +
            '<td>Site City:</td>' +
            '<td>' + d.site_city + '</td>' +
            '<td>Oppor ID:</td>' +
            '<td>' + d.oppor_id + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Job Type:</td>' +
            '<td>' + d.job_type + '</td>' +
            '<td>Site Desc:</td>' +
            '<td>' + d.site_desc + '</td>' +
            '<td>Quote ID:</td>' +
            '<td>' + d.quote_id + '</td>' +
            '</tr>' +
            '</table>';
    }

    $(document).ready(function () {
        $('#start_date').daterangepicker({
            "showDropdowns": true,
            "minYear": 2010,
            "singleDatePicker": true,
        });
        $('#start_date').val('');
        $('#end_date').daterangepicker({
            "showDropdowns": true,
            "minYear": 2010,
            "singleDatePicker": true,
        });
        $('#end_date').val('');
        var table = $('#jobTable').DataTable({
            "pageLength": 50,

            "ajax": {
                url: '<?php echo base_url("Jobs/get_jobs");?>',
                type: 'GET',
                data: function (data) {
                    data.job_id = $('#job_id').val();
                    data.status = $('#status').val();
                    data.quote_id = $('#quote_id').val();
                    data.installer = $('#installer').val();
                    data.job_balance = $('#job_balance').val();
                    data.customer_id = $('#customer_id').val();
                    data.customer = $('#customer').val();
                    data.sale_rep = $('#sale_rep').val();
                    data.start_date = $('#start_date').val();
                    data.end_date = $('#end_date').val();
                    data.site_city = $('#site_city').val();
                }
            },
            "columns": [
                {
                    "className": 'details-control',
                    "orderable": false,
                    "data": null,
                    "defaultContent": ''
                },
                {"data": "id"},
                {"data": "status"},
                {"data": "installer"},
                {"data": "start_date"},
                {"data": "end_date"},
                {"data": "customer"},
                {"data": "job_type"},
                {"data": "job_balance"},
                {"data": "job_balance"},
                {
                    "data": null, render: function (data) {
                        return "<a href='<?php echo base_url('Jobs/job_detail?job_id=');?>" + data.id + "'><i class='fa fa-pencil' aria-hidden='true'></i></a>"
                    }
                }

            ],
            "order":
                [[0, 'asc']]
        });

        // Add event listener for opening and closing details
        $('#jobTable tbody').on('click', 'td.details-control', function () {
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
        $('#filterForm').on('submit', function () {
            event.preventDefault();
        });
        $('#applyFilter').click(function () {
            table.ajax.reload(null, false);
        });
        $('#clearFilter').click(function () {
            $('#filterForm').trigger('reset');
            table.ajax.reload(null, false);
        })
    })
    ;
</script>