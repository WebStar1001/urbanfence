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
                    <div class="mt-1"><input type="text" placeholder="Search" class="input pl-12 border w-full"
                                             id="quote_id">
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>Status</label>
                    <div class="mt-1">
                        <select class="input border w-full" id="status">
                            <option value="0">All</option>
                            <option>New</option>
                            <option <?php echo (isset($_GET['status'])) ? 'selected' : ''; ?>>Pending</option>
                            <option>Approved</option>
                            <option>Job</option>
                        </select>
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
                <div class=""><label>Quote Selling Total</label>
                    <div class="mt-1"><input type="text" placeholder="Amount" class="input pl-12 border w-full"
                                             id="quote_selling_total">
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>Job Type</label>
                    <div class="mt-1"><select class="input border w-full" id="job_type">
                            <option value="0">All</option>
                            <option value="Fence Repair">Fence Repair</option>
                            <option value="Gate Repair">Gate Repair</option>
                            <option value="Fence and Gate Repair">Fence and Gate Repair</option>
                            <option value="New Fence">New Fence</option>
                            <option value="New Gate">New Gate</option>
                            <option value="New Fence and Gate c/w Operator">New Fence and Gate c/w Operator</option>
                            <option value="Gate Operator Service">Gate Operator Service</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>Quote Date</label>
                    <div class="mt-1">
                        <input data-daterange="true" class="date_range input pl-12 border w-full" id="quote_date"
                               value="<?php echo date('1/1/Y') . ' - ' . date('12/21/Y'); ?>"/>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div class=""><label>Sales Rap.</label>
                    <div class="mt-1">
                        <select class="select2 w-full" id="sales_rap">
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
                <div><label>Customer</label>
                    <div class="mt-1"><input type="text" placeholder="Search" class="input pl-12 border w-full"
                                             id="customer">
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>Oppor ID</label>
                    <div class="mt-1"><input type="text" placeholder="Search" class="input pl-12 border w-full"
                                             id="oppor_id">
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>Site City</label>
                    <div class="mt-1"><input type="text" placeholder="Search" class="input pl-12 border w-full"
                                             id="site_city">
                    </div>
                </div>
            </div>

            <div class="col-span-12 sm:col-span-6 md:col-span-4 flex items-end">
                <div>
                    <button class="button w-24 mr-1  bg-theme-1 text-white" id="clearFilter">Clear filter</button>
                    <button class="button w-24 mr-1 width_filter bg-theme-6 text-white" id="applyFilter">filter</button>
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
                <th>Date</th>
                <th>Sale Rep</th>
                <th>Customer</th>
                <th>Status</th>
                <th>Job Type</th>
                <th>Site City</th>
                <th>Quote Total</th>
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
        return '<table cellpadding="5" cellspacing="0" border="1px" style="padding-left:50px; text-align:left; width: 100%;">' +
            '</tr>' +
            '<tr>' +
            '<td>MAT Total:</td>' +
            '<td width="100px">' + Math.round(d.mat_net * d.mat_factor) + '</td>' +
            '<td>Discount Amount:</td>' +
            '<td>' + (Math.round((d.ads_on_net * d.ads_on_factor + d.misc_net * d.misc_factor + d.labour_net * d.lab_factor + d.mat_net * d.mat_factor) * d.discount_set) / 100) + '</td>' +
            '<td>Sales Rap:</td>' +
            '<td width="100px">' + d.sale_rep + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>LAB Total:</td>' +
            '<td>' + Math.round(d.labour_net * d.lab_factor) + '</td>' +
            '<td>HST:</td>' +
            '<td>' + d.hst + '</td>' +
            '<td>Site Desc:</td>' +
            '<td>' + d.site_desc + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>MISC Total:</td>' +
            '<td>' + Math.round(d.misc_net * d.misc_factor) + '</td>' +
            '<td>Contact Person:</td>' +
            '<td>' + d.contact_person + '</td>' +
            '<td>Customer ID:</td>' +
            '<td>' + d.customer_id + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Add-On Total:</td>' +
            '<td>' + Math.round(d.ads_on_net * d.ads_on_factor) + '</td>' +
            '<td>Site Address:</td>' +
            '<td>' + d.site_address + '.</td>' +
            '<td>Oppor. ID:</td>' +
            '<td>' + d.oppor_id + '</td>' +
            '</tr>' +
            '</table>';
    }

    $(document).ready(function () {
        $('.date_range').daterangepicker({
            "showDropdowns": true,
            "minYear": 2010,
            "startDate": '<?php echo date("1/1/Y");?>',
            "endDate": '<?php echo date("12/21/Y");?>',
            "linkedCalendars": false
        });
        var table = $('#quoteTable').DataTable({
            "pageLength": 50,

            "ajax": {
                url: '<?php echo base_url("Quotes/get_quotes");?>',
                type: 'GET',
                data: function (data) {
                    data.quote_id = $('#quote_id').val();
                    data.status = $('#status').val();
                    data.customer_id = $('#customer_id').val();
                    data.selling_total = $('#quote_selling_total').val();
                    data.job_type = $('#job_type').val();
                    data.quote_date = $('#quote_date').val();
                    data.sales_rap = $('#sales_rap').val();
                    data.customer = $('#customer').val();
                    data.oppor_id = $('#oppor_id').val();
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
                {"data": "quote_date"},
                {"data": "sale_rep"},
                {"data": "customer"},
                {"data": "status"},
                {"data": "job_type"},
                {"data": "site_city"},
                {
                    "data": null, render: function (data) {
                        return Math.round((data.ads_on_net * data.ads_on_factor + data.misc_net * data.misc_factor + data.labour_net * data.lab_factor + data.mat_net * data.mat_factor) * 100) / 100;
                    }
                },
                {
                    "data": null, render: function (data) {
                        return "<a href='<?php echo base_url('Quotes/add_quote?quote_id=');?>" + data.id + "'><i class='fa fa-pencil' aria-hidden='true'></i></a>"
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
        $('#applyFilter').click(function () {
            table.ajax.reload(null, false);
        });
        $('#clearFilter').click(function () {
            $('#filterForm').trigger('reset');
            table.ajax.reload(null, false);
        })
    });
</script>