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
    background: url('<?php echo base_url("/assets/images/plus.png") ?>') no-repeat center center;
    cursor: pointer;
}
tr.shown td.details-control {
    background: url('<?php echo base_url("/assets/images/minus.png") ?>') no-repeat center center;
}
</style> -->
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
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>Oppor. Per Month</label>
                    <div class="mt-1">
                        <select class="input border w-full" id="oppor_per_month">
                            <option value="0">All</option>
                            <?php
                            $months = array(1 => 'Jan.', 2 => 'Feb.', 3 => 'Mar.', 4 => 'Apr.', 5 => 'May', 6 => 'Jun.', 7 => 'Jul.',
                                8 => 'Aug.', 9 => 'Sep.', 10 => 'Oct.', 11 => 'Nov.', 12 => 'Dec');
                            foreach ($months as $key => $value) {
                                echo '<option value="' . $key . '">' . $value . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>Sale Source</label>
                    <div class="mt-1">
                        <select class="input border w-full" id="sale_source">
                            <option value="0">All</option>
                            <option value="Returned Customer">Returned Customer</option>
                            <option value="Yellow Pages">Yellow Pages</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Facebook">Google Ad</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>Status</label>
                    <div class="mt-1">
                        <select class="input border w-full" id="status">
                            <option value="0">All</option>
                            <option value="New">New</option>
                            <option value="Assigned">Assigned</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="ml-sm-3 col-span-12 sm:col-span-6 md:col-span-4">
                <div class=""><label>Sale Rep</label>
                    <div class="mt-1">
                        <select class="select2 w-full" id="sale_rep">
                            <option value="0">All</option>
                            <?php
                            foreach ($users as $user) {
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
                        <input data-daterange="true" value="<?php echo date('1/1/Y') . ' - ' . date('12/31/Y'); ?>"
                               class="datepicker input pl-12 border w-full" id="date">
                    </div>
                </div>
            </div>

            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <div><label>Job City</label>
                    <div class="mt-1">
                        <input type="text" placeholder="Search" class="input pl-12 border w-full" id="job_city">
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
<?php

?>
<script type="text/javascript">
    var sale_users = <?php echo json_encode($sales);?>;
    console.log(sale_users);

    function format(d) {
        /*console.log(d.JobCity);*/
        // `d` is the original data object for the row
        return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px; text-alight:center">' +

            '<tr>' +
            '<td>Job City:</td>' +
            '<td>' + d.job_city + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Contact Person:</td>' +
            '<td>' + d.contact_person + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Job Address:</td>' +
            '<td>' + d.job_address + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Job Site:</td>' +
            '<td>' + d.job_site + '.</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Urgency:</td>' +
            '<td>' + d.urgency + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Time:</td>' +
            '<td>' + d.time + '..</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Details:</td>' +
            '<td>' + d.details + '</td>' +
            '</tr>' +
            '</table>';
    }

    $(document).ready(function () {
        var table = $('#opporTable').DataTable({
            "pageLength": 50,
            //"ajax": '<?php echo base_url("Opportunity/get_opportunities");?>',
            "ajax": {
                url: '<?php echo base_url("Opportunity/get_opportunities");?>',
                data: function (data) {
                    data.job_type = $('#job_type').val();
                    data.sale_source = $('#sale_source').val();
                    data.status = $('#status').val();
                    data.sale_rep = $('#sale_rep').val();
                    data.customer = $('#customer').val();
                    data.customer_id = $('#customer_id').val();
                    data.oppor_per_month = $('#oppor_per_month').val();
                    data.id = $('#id').val();
                    data.date = $('#date').val();
                    data.job_city = $('#job_city').val();
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
                {"data": "customer_id"},
                {"data": "date"},
                {"data": "customer"},
                // { "data": "jobcity" },
                {"data": "job_type"},
                {"data": "sale_source"},
                {"data": "status"},
                {
                    "data": null, render: function (data) {
                        console.log(data.sale_rep);
                        var sales_rp_select = "<select name='fieldName' onchange='change_sale_rep(" + data.id + ")'><option value='0'>Please Select</option>";
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
                        return "<a href='<?php echo base_url('Opportunity/add_opportunity?opportunity_id=');?>" + data.id + "'><i class='fa fa-pencil' aria-hidden='true'></i></a>"
                    }
                },


                {
                    "data": null, render: function (data) {
                        return "<a href='<?php echo base_url('Quotes/add_quote?opportunity_id=');?>" + data.id + "'><i class='fa fa-external-link' aria-hidden='true'></i></a>"
                    }
                }
            ],
            "order": [[0, 'asc']]
        });

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
        })
    });

    function change_sale_rep(user_id) {
        $.ajax('change_sale_rep', {
            type: 'POST',  // http method
            data: {user_id: event.target.value, oppor_id: user_id},  // data to submit
            success: function (data, status, xhr) {
                console.log(data);
            },
            error: function (jqXhr, textStatus, errorMessage) {
                console.log(errorMessage);
            }
        });
    }
</script>