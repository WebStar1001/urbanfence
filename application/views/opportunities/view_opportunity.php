<style type="text/css">


    @media screen and (max-width: 1170px) {
        div#opporTable_wrapper {
            padding-bottom: 3%;
            overflow: auto;
        }
    }

    @media screen and (max-width: 850px) {
        button.width_filter {
            width: 4rem;
        }
    }

    @media screen and (max-width: 767px) {
        button.width_filter {
            width: 6rem;
        }
    }

    table.dataTable thead th, table.dataTable thead td {
        padding: 0 0 !important;
    }
</style>
<!-- BEGIN: Content -->
<div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">
        <!-- BEGIN: Breadcrumb -->
        <div class="-intro-x breadcrumb mr-auto hidden sm:flex"><a href="" class="">Urbanfence</a>
            <i data-feather="chevron-right" class="breadcrumb__icon"></i>
            <a href="" class="breadcrumb--active">Opportunities List</a></div>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Account Menu -->
        <?php include(APPPATH . "views/inc/account_menu.php") ?>
        <!-- END: Account Menu -->
    </div>
    <!-- BEGIN: Filters -->
    <form id="filterForm">
        <div class="intro-y grid grid-cols-12 p-5 mt-5 gap-2 box">
            <h2 class="col-span-12 font-medium text-base  border-b border-gray-200">Filters</h2>
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>Job Type</label>
                    <div class="mt-1">
                        <select class="input w-full border" id="job_type">
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
            <?php if (is_admin()): ?>
                <div class="col-span-12 sm:col-span-6 md:col-span-4">
                    <div><label>Quoting Company</label>
                        <div class="mt-1">
                            <select class="input border w-full" id="company_id">
                                <option value="0">All</option>
                                <?php
                                foreach ($companies as $company) {
                                    echo '<option value="' . $company->id . '">' . $company->name . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>Sale Source</label>
                    <div class="mt-1">
                        <select class="input border w-full" id="sale_source">
                            <option value="0">All</option>
                            <option value="Returned Customer">Returned Customer</option>
                            <option value="Yellow Pages">Yellow Pages</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Google Ad">Google Ad</option>
                            <option value="Google Ad">Friend's Referral</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>Status</label>
                    <div class="mt-1">
                        <select class="input border w-full" id="status">
                            <option value="0">All</option>
                            <option value="New" <?php echo ($status == 'New') ? 'selected' : ''; ?>>New</option>
                            <option value="Assigned">Assigned</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="ml-sm-3 col-span-12 sm:col-span-6 md:col-span-4">
                <div class=""><label>Sales Rep</label>
                    <div class="mt-1">
                        <select class="select2 w-full" id="sale_rep">
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
                                             id="customer"/>
                    </div>
                </div>
            </div>
            <div class="ml-sm-3 col-span-12 sm:col-span-6 md:col-span-4">
                <div class=""><label>Oppor ID</label>
                    <div class="mt-1"><input type="text" placeholder="Search" class="input pl-12 border w-full"
                                             id="id"/>
                    </div>
                </div>
            </div>
            <div class="ml-sm-3 col-span-12 sm:col-span-6 md:col-span-4">
                <div class=""><label>Customer ID</label>
                    <div class="mt-1"><input type="text" placeholder="Search" class="input pl-12 border w-full"
                                             id="customer_id"/>
                    </div>
                </div>
            </div>

            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>Date</label>
                    <div class="mt-1">
                        <input data-daterange="true"
                               class="date_range input pl-12 border w-full" id="date">
                    </div>
                </div>
            </div>

            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>Site City</label>
                    <div class="mt-1">
                        <input type="text" placeholder="Search" class="input pl-12 border w-full" id="site_city">
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>Urgency</label>
                    <div class="mt-1">
                        <select class="input border w-full" id="urgency">
                            <option value="0">All</option>
                            <option value="Normal">Normal</option>
                            <option value="Urgent">Urgent</option>
                        </select>
                    </div>
                </div>
            </div>


            <div class="col-span-12 sm:col-span-6 md:col-span-4 flex items-end">
                <div>
                    <button class="button w-24 mr-1  bg-theme-1 text-white" id="clearFilter">Clear filter</button>
                    <button class="button w-24 mr-1  bg-theme-6 text-white float-right width_filter" id="apply_filter">
                        filter
                    </button>
                </div>
            </div>
        </div>
    </form>
    <!-- END: Filters -->

    <!-- BEGIN: Datatable -->
    <div class="intro-y box p-5 mt-5" id="table_main_div">
        <table id="opporTable" class="display" style="width:100%;text-align: center; margin-bottom: 5px;">
            <thead>
            <tr>
                <th>Additional Info</th>
                <th>ID</th>
                <th>Sale Source</th>
                <th>Date</th>
                <th>Customer</th>
                <th class="whitespace-no-wrap">Job Type</th>
                <th>Status</th>
                <th>Sales Rep</th>
                <th></th>
                <th>Edit</th>
                <th>Create Quote</th>
            </tr>
            </thead>
        </table>

    </div>
    <!-- END: Datatable -->
</div>

<!-- END: Content -->
<?php

?>
<script type="text/javascript">
    var sale_users = <?php echo json_encode($sales);?>;
    var status = '<?php echo $status;?>';

    function format(d) {
        var hide_filed = (is_admin) ? '' : 'display:none';
        /*console.log(d.JobCity);*/
        // `d` is the original data object for the row
        return '<table cellpadding="0" cellspacing="0" border="0" style="padding-left:50px;text-align: left;width: 100%;">' +

            '<tr>' +
            '<td style="width:15%;font-weight: bold">Contact Person:</td>' +
            '<td style="width:23%;">' + d.contact_person + '</td>' +
            '<td  style="width:14%;font-weight: bold">Site Address:</td>' +
            '<td style="width:23%;">' + d.site_address + '</td>' +
            '<td style="width:13%;font-weight: bold">Contact onsite:</td>' +
            '<td style="width:20%;">' + d.contact_onsite + '</td>' +
            '<tr>' +
            '<td style="font-weight: bold">Site City:</td>' +
            '<td>' + d.site_city + '</td>' +
            '<td style="font-weight: bold">Site Postal Code:</td>' +
            '<td>' + d.site_postal_code + '</td>' +
            '<td style="font-weight: bold">Time:</td>' +
            '<td>' + d.time + '..</td>' +
            '</tr>' +
            '<tr>' +
            '<td style="font-weight: bold">Urgency:</td>' +
            '<td>' + d.urgency + '</td>' +
            '<td style="font-weight: bold">Site Desc:</td>' +
            '<td>' + d.site_desc + '.</td>' +
            '<td style="font-weight: bold">Customer ID:</td>' +
            '<td>' + d.customer_id + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td style="font-weight: bold">Details:</td>' +
            '<td>' + d.details + '</td>' +
            '<td style="width:15%;font-weight: bold;">Created By:</td>' +
            '<td style="width:20%;">' + d.created_by + '</td>' +
            '<td style="font-weight: bold;' + hide_filed + '">Quoting Company:</td>' +
            '<td style="' + hide_filed + '">' + d.company + '</td>' +
            '</tr>' +
            '</table>';
    }

    $(document).ready(function () {
        $('.date_range').daterangepicker({
            "showDropdowns": true,
            "minYear": 2010,
            "startDate": '<?php echo date("1/1/Y");?>',
            "endDate": '<?php echo date("12/21/Y", strtotime("+1 years"));?>',
            "linkedCalendars": false
        });
        var table = $('#opporTable').DataTable({
            "pageLength": 50,
            "searching": false,
            "ajax": {
                url: '<?php echo base_url("Opportunity/get_opportunities");?>',
                data: function (data) {
                    data.job_type = $('#job_type').val();
                    data.sale_source = $('#sale_source').val();
                    data.status = $('#status').val();
                    data.sale_rep = $('#sale_rep').val();
                    data.customer = $('#customer').val();
                    data.customer_id = $('#customer_id').val();
                    data.company_id = $('#company_id').val();
                    data.id = $('#id').val();
                    data.date = $('#date').val();
                    data.site_city = $('#site_city').val();
                    data.urgency = $('#urgency').val();
                },
                type: 'GET',
            },
            "columns": [
                {
                    "className": 'details-control',
                    "orderable": false,
                    "data": null,
                    "defaultContent": ''
                },
                {"data": "id"},
                {"data": "sale_source", "width": "15%"},
                {"data": "date", "width": "17%"},
                {"data": "customer", "width": "15%"},
                {"data": "job_type", "width": "18%"},
                {"data": "status"},
                {
                    "data": null, render: function (data) {
                        var sales_rp_select = "<select id='sale_rep_" + data.id + "'><option value='0'>Please Select</option>";
                        for (var i in sale_users) {
                            if (sale_users[i].id == data.sale_rep) {
                                sales_rp_select += '<option value="' + sale_users[i].id + '" selected>' + sale_users[i].name +
                                    '</option>';
                            } else {
                                sales_rp_select += '<option value="' + sale_users[i].id + '">' + sale_users[i].name +
                                    '</option>';
                            }
                        }
                        return sales_rp_select;
                    }
                },
                {
                    "data": null, render: function (data) {
                        return "<button class='button border' onclick='set_sale_rep(" + data.id + ");'>Set</button>"
                    }, "visible": !is_sale && !is_user
                },
                {
                    "data": null, render: function (data) {
                        if (data.status == 'New') {
                            return "<a href='<?php echo base_url('Opportunity/add_opportunity?opportunity_id=');?>" + data.id + "'><i class='fa fa-pencil' aria-hidden='true'></i></a>"
                        } else {
                            return "<a href='javascript:showNotification(\"Can not edit Opportunity which is already assigned to a Sales Rap.\")'><i class='fa fa-pencil' aria-hidden='true'></i></a>"
                        }
                    }, "visible": !is_user
                },
                {
                    "data": null, render: function (data) {
                        if (data.status == 'Assigned') {
                            if (data.quote_id != null) {
                                return "<a href='javascript:showNotification(\"Opportunity is already linked with created quote.\")'><i class='fa fa-external-link' aria-hidden='true'></i></a>"
                            } else {
                                return "<a href='<?php echo base_url('Quotes/add_quote?opportunity_id=');?>" + data.id + "'><i class='fa fa-external-link' aria-hidden='true'></i></a>"
                            }
                        } else {
                            return "<a href='javascript:showNotification(\"Opportunity needs to get assigned to Sales Rap prior Quote creation.\")'><i class='fa fa-external-link' aria-hidden='true'></i></a>"
                        }
                    }, "visible": !is_user
                }
            ],
            "order": [[0, 'asc']]
        });
        table.tables().header().to$().find('th:eq(0)').css('max-width', '60px');
        $(window).trigger('resize');

        // Add event listener for opening and closing details
        $('#opporTable tbody').on('click', 'td.details-control', function () {
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
        });

    });

    function set_sale_rep(oppor_id) {
        var selected_sale_rep = $('#sale_rep_' + oppor_id).val();
        var obj = event.target;
        if (selected_sale_rep == 0) {
            showNotification('Please select Sales Rep');
            return;
        }
        $.ajax('change_sale_rep', {
            type: 'POST',  // http method
            data: {user_id: selected_sale_rep, oppor_id: oppor_id},  // data to submit
            success: function (data, status, xhr) {
                if (status == 'New') {
                    $(obj).parent().parent().remove();
                } else {
                    window.location.reload();
                }
            },
            error: function (jqXhr, textStatus, errorMessage) {
                console.log(errorMessage);
            }
        });
    }
</script>