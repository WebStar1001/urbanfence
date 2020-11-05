<style type="text/css">
    #quoteTable_paginate {
        margin-bottom: 1%;
    }

    @media screen and (max-width: 1170px) {
        div#quoteTable_wrapper {
            overflow: auto;
        }
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
                    data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Quotes
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
                <div class=""><label>Quote ID</label>
                    <div class="mt-1"><input type="text" placeholder="Search" class="input pl-12 border w-full" id="quote_id">
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>Status</label>
                    <div class="mt-1">
                        <select class="select2 w-full" id="status">
                            <option>New</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="ml-sm-3 col-span-12 sm:col-span-6 md:col-span-4">
                <div class=""><label>Customer ID</label>
                    <div class="mt-1"><input type="text" placeholder="Search" class="input pl-12 border w-full" id="customer_id">
                    </div>
                </div>
            </div>
            <div class="ml-sm-3 col-span-12 sm:col-span-6 md:col-span-4">
                <div class=""><label>Quote Selling Total</label>
                    <div class="mt-1"><input type="text" placeholder="Amount" class="input pl-12 border w-full" id="quote_selling_total">
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>Job Type</label>
                    <div class="mt-1"><select class="select2 w-full" id="job_type">
                            <option>New Fence</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>Quote Date</label>
                    <div class="mt-1">
                        <input data-daterange="true" class="datepicker input pl-12 border w-full" name="">
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div class=""><label>Sales Rap.</label>
                    <div class="mt-1"><select class="select2 w-full">
                            <option>David</option>
                            <option>Liam Neeson</option>
                            <option>Daniel Craig</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>Customer</label>
                    <div class="mt-1"><input type="text" placeholder="Search" class="input pl-12 border w-full">
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>Oppor ID</label>
                    <div class="mt-1"><input type="text" placeholder="Search" class="input pl-12 border w-full">
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>Job City</label>
                    <div class="mt-1"><input type="text" placeholder="Search" class="input pl-12 border w-full">
                    </div>
                </div>
            </div>

            <div class="col-span-12 sm:col-span-6 md:col-span-4 flex items-end">
                <div>
                    <button class="button w-24 mr-1  bg-theme-1 text-white">Clear filter</button>
                    <button class="button w-24 mr-1 width_filter bg-theme-6 text-white">filter</button>
                </div>
            </div>
        </div>
    </form>
    <!-- END: Filters -->

    <!-- BEGIN: Datatable -->
    <div class="intro-y box p-5 mt-5" id="table_main_div">
        <table id="quoteTable" class="display" style="width:100%;text-align: center;">
            <thead>
            <tr>
                <th>Additional Info</th>
                <th>ID</th>
                <!-- <th>Date</th> -->
                <th>Sale Rep</th>
                <th>Customer</th>
                <th>Job Type</th>
                <!--  <th>Job City</th> -->
                <th>MAT</th>
                <th>LAB</th>
                <th>MISC</th>
                <th>Ads-On</th>
                <th>Costing Total</th>
                <th>Edit</th>
            </tr>
            </thead>
        </table>
    </div>
    <!-- END: Datatable -->
</div>
<!-- END: Content -->
<script type="text/javascript">
    function format(d) {
        /*console.log(d.JobCity);*/
        // `d` is the original data object for the row
        return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px; text-alight:center">' +
            '<tr>' +
            '<td>Date:</td>' +
            '<td>' + d.date + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Job City:</td>' +
            '<td>' + d.job_city + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Status:</td>' +
            '<td>' + d.status + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Discount Amount:</td>' +
            '<td>' + d.discount_amount + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Contact Person:</td>' +
            '<td>' + d.contact_person + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Job Address:</td>' +
            '<td>' + d.job_address + '.</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Job Site:</td>' +
            '<td>' + d.job_site + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Customer ID:</td>' +
            '<td>' + d.customer_id + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Oppor. ID:</td>' +
            '<td>' + d.oppor_id + '</td>' +
            '</tr>' +
            '</table>';
    }

    $(document).ready(function () {
        var table = $('#quoteTable').DataTable({
            "pageLength": 50,

            "ajax": {
                url: '<?php echo base_url("Quotes/getData");?>',
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
                {"data": "id"},
                // { "data": "date" },
                {"data": "sales_rep"},
                {"data": "customer"},
                {"data": "job_type"},
                // { "data": "job_city" },
                {"data": "mat"},
                {"data": "lab"},
                {"data": "misc"},
                {"data": "ads_on"},
                {"data": "hst"},
                {
                    "data": null, render: function (data) {
                        return "<a href='#'><i class='fa fa-pencil' aria-hidden='true'></i></a>"
                    }
                }
            ],
            "order": [[0, 'asc']]
        });

        // Add event listener for opening and closing details
        $('#quoteTable tbody').on('click', 'td.details-control', function () {
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
        $('#apply_filter').click(function () {
            table.ajax.reload(null, false);
        });
        $('#clearFilter').click(function () {
            $('#filterForm').trigger('reset');
            table.ajax.reload(null, false);
        })
    });
</script>