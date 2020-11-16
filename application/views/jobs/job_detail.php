<style type="text/css">

    div#jobDetailTable_wrapper {
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
        <legend class="legend_spacing">Job #<?php echo ($job) ? $job->id : ''; ?></legend>
        <div class="intro-y grid grid-cols-12 p-5 gap-2 ">
            <!-- <h2 class="col-span-12 font-medium text-base  border-b border-gray-200">Filters</h2> -->
            <div class="col-span-12 m-auto">
                <div class="w-full">
                    <form method="get" action="job_detail">
                        <input type="text" placeholder="Search Job" class="input pl-12 border"
                               id="search_job" name="job_id" value="<?php echo ($job) ? $job->id : ''; ?>">
                        <button class="button w-24 mr-1  bg-theme-1 text-white" id="searchBtn">Search</button>
                    </form>
                    </button>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-12 box m-auto w-full lg:w-5/6 p-5 fieldset_bd_color display_info_block mt-3"
                 style="position: relative;right: 12px;background-color:#1C3FAA !important;">
                <div class="w-full md:w-4/5 lg:w-1/2 border_color p-1 fieldset_bd_color mr-1 sm:mr-2 md:mr-5 mb-2 sm:mb-0"
                     style="background-color: white">
                    <table style="margin-top:5px;margin-left: auto;margin-right:auto;" cellpadding="5">
                        <tr>
                            <td>
                                <b class="info_spacing">Customer Name:</b>
                            </td>
                            <td>
                                <?php echo ($customer) ? $customer->customer : ''; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b class="info_spacing">Contact
                                    Person:</b>
                            </td>
                            <td>
                                <?php echo ($customer) ? $customer->contact_person : ''; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b class="info_spacing">Phone:</b>
                            </td>
                            <td>
                                <?php echo ($customer) ? $customer->phone1 : ''; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b class="info_spacing">Email:</b>
                            </td>
                            <td>
                                <?php echo ($customer) ? $customer->email : ''; ?>
                            </td>
                        </tr>
                    </table>
                </div>


                <div class="w-full md:w-4/5 lg:w-1/2 border_color p-1 fieldset_bd_color"
                     style="background-color: white">
                    <table style="margin-top:5px;margin-left: auto;margin-right:auto;" cellpadding="5">
                        <tr>
                            <td><b class="info_spacing">Job Type:</b></td>
                            <td><?php echo ($oppor) ? $oppor->site_address : ''; ?></td>
                        </tr>
                        <tr>
                            <td><b class="info_spacing">Site Address:</b></td>
                            <td><?php echo ($oppor) ? $oppor->job_type : ''; ?></td>
                        </tr>
                        <tr>
                            <td><b class="info_spacing">Site City:</b></td>
                            <td><?php echo ($oppor) ? $oppor->site_city : ''; ?></td>
                        </tr>
                        <tr>
                            <td><b class="info_spacing">Payment Terms are:</b></td>
                            <td><?php echo ($quote) ? $quote->payment_term : ''; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>


        <div class="intro-y grid grid-cols-12 p-5 mt-5 gap-2">
            <div class="col-span-12 lg:col-span-6 lg:mr-5">
                <fieldset class="p-2 pt-5 pb-4 w-full fieldset_bd_color box">
                    <legend class="legend_spacing">Materials Settings</legend>

                    <div class="mt-1 mb-5 float-left w-1/2">
                        <input type="checkbox" class="input border mr-2" id="vertical-remember-me" disabled
                            <?php echo ($job && $job->status == 'New') ? 'checked' : '' ?>/>
                        <label class="cursor-pointer select-none" for="vertical-remember-me" style="width: auto;">Need
                            to order Material</label>
                    </div>
                    <div class="float-right w-1/2 mb-5">
                        <div class="mt-1 mb-2">
                            <input type="checkbox" class="input border mr-2" id="vertical-remember-me_r1"
                                <?php echo ($job && $job->status == 'MAT Collected') ? 'checked' : '' ?>>
                            <label class="cursor-pointer select-none" for="vertical-remember-me_r1"
                                   style="width: auto;">Materials in stock</label>
                        </div>
                        <div class="mt-1 mb-2">
                            <input type="checkbox" class="input border mr-2" id="vertical-remember-me_r2"
                                <?php echo ($job && $job->status == 'MAT Collected') ? 'checked' : '' ?>>
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
                        <select class="input border mr-0 w-1/3 lg:w-2/3" id="installer">
                            <option value="0">Choose</option>
                            <?php
                            foreach ($installers as $installer) {
                                $selected = '';
                                if ($job) {
                                    if ($installer->id == $job->installer) {
                                        $selected = 'selected';
                                    }
                                }
                                echo '<option value="' . $installer->id . '" ' . $selected . '>' . $installer->name . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mt-1 mb-2">
                        <label class="mr-1">Start Date</label>
                        <input type="date" class="input w-1/3 lg:w-2/3 border col-span-4" id="start_date"
                               value="<?php echo ($job) ? $job->start_date : ''; ?>"
                            <?php echo ($job && ($job->status == 'New' || $job->status == 'MAT Missing in Stock')) ? 'readonly' : ''; ?> />
                    </div>
                    <div class="mt-1 mb-2">
                        <label class="mr-1">Completion Date</label>
                        <input type="date" class="input w-1/3 lg:w-2/3 border col-span-4" id="end_date"
                               value="<?php echo ($job) ? $job->end_date : ''; ?>" <?php echo ($job && $job->status != 'In progress') ? 'readonly' : ''; ?>/>
                    </div>
                    <div class="mt-1 mb-2">
                        <button class="button bg-theme-1 text-white" id="job_setting_btn">Save</button>
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
                    <p class="w-full p-2" id="status_filed"><?php echo ($job) ? $job->status : ''; ?></p>
                </fieldset>
            </div>
        </div>
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
                            <input type="text" class="input w-full border flex-1 md:text-center" id="invoice_number">
                        </div>
                    </div>

                    <div class="w-full sm:w-1/2 lg:w-1/5 lg:mr-3 float-left mb-2 md:mb-0 p-2 lg:p-0 sm:text-left">
                        <div class="sm:w-full">
                            <label class="w-full text-left">Payment amount</label>
                            <input type="text" class="input w-full border flex-1 md:text-center" id="payment_amount">
                        </div>
                    </div>

                    <div class="w-full sm:w-1/2 lg:w-1/5 lg:mr-3 float-left mb-2 md:mb-0 p-2 lg:p-0 sm:text-left">
                        <div class="sm:w-full">
                            <label class="w-full text-left">Payment Method</label>
                            <select class="input w-full border flex-1" id="payment_method">
                                <option value="0">Choose</option>
                                <option>Visa</option>
                                <option>Mater-Card</option>
                                <option>Amex</option>
                                <option>Cash and Cheque</option>
                            </select>
                        </div>
                    </div>

                    <div class="w-full sm:w-1/2 lg:w-1/6 float-left ml-5 sm:mt-2 p-2 lg:p-0  pt-5 lg:mt-5">
                        <button class="button bg-theme-1 text-white" id="create_payment">Create Payment</button>
                    </div>
                </div>

            </div>
            <div class="intro-y grid grid-cols-12 box" style="margin-top: 2%;">
                <div class="col-span-12 p-5">
                    <div class="w-full lg:w-1/6 float-left text-left m-auto">
                        <p><b>Generate Invoice</b></p>
                    </div>
                    <div class="w-full sm:w-1/2 lg:w-1/5 lg:mr-3 float-left mb-2 md:mb-0 p-2 lg:p-0 sm:text-left">
                        <div class="sm:w-full">
                            <label class="w-full text-left">Invoice#</label>
                            <input type="text" class="input w-full border flex-1 md:text-center"
                                   id="invoice_id">
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 lg:w-1/5 lg:mr-3 float-left mb-2 md:mb-0 p-2 lg:p-0 sm:text-left ">
                        <div class="sm:w-full">
                            <label class="w-full sm:w-1/3 text-left">Invoice Amount</label>
                            <input type="text" class="input w-full border flex-1 md:text-center" id="invoice_amount">
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 lg:w-1/5 lg:mr-3 float-left mb-2 md:mb-0 p-2 lg:p-0 sm:text-left">
                        <div class="sm:w-full">
                            <label class="w-full text-left">Invoice Due-Date</label>
                            <input type="text" class="input w-full border flex-1 md:text-center" id="invoice_due_date">
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 lg:w-1/6 float-left ml-5 sm:mt-2 p-2 lg:p-0  pt-5 lg:mt-2">
                        <button class="button bg-theme-1 text-white mt-3" id="generate_invoice">Generate Invoice
                        </button>
                    </div>
                </div>
            </div>
            <!-- BEGIN: Datatable -->
            <div class="intro-y box p-5 mt-5" id="table_main_div">
                <table id="jobDetailTable" class="display" style="width:100%;text-align: center; margin-bottom: 5px;">
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

<div class="modal" id="material-detailed" role="dialog">
    <div class="modal__content modal__content--lg p-5 text-center" style="width: 75%;">
        <div class="flex items-center py-5 sm:py-3 border-b border-gray-200">
            <h2 class="font-medium text-base mr-auto">Materials Tracking</h2>
        </div>
        <form id="item_collect_form" method="post" action="set_mat_collect">
            <div class="overflow-x-auto">
                <table class="table">
                    <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="whitespace-no-wrap">Category</th>
                        <th class="whitespace-no-wrap">MAT Description</th>
                        <th class="whitespace-no-wrap">Quantity</th>
                        <th class="whitespace-no-wrap">Items Collected for job</th>
                        <th class="whitespace-no-wrap">Set print</th>
                        <th class="whitespace-no-wrap">Missing in stock</th>
                        <th class="whitespace-no-wrap">In stock</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $quantity_total = 0;
                    $items_collected_total = 0;
                    $missing_stock_total = 0;
                    if ($mat_info):
                        foreach ($mat_info as $mat):
                            $quantity_total += $mat->quantity;
                            $items_collected_total += $mat->items_collected_for_job;
                            echo '<tr id="items_collected' . $mat->id . '">
                                <td class="border-b">' . $mat->mat_category . '</td>
                                <td class="border-b">' . $mat->mat_description . '</td>
                                <td class="border-b">' . $mat->quantity . '</td>
                                <td class="border-b">
                                <input type="hidden" name="mat_id[]" value="' . $mat->id . '"/>
                                <input type="number" id="collected_quantity" name="collected_quantity[]" onfocus="this.oldvalue = this.value;" max="' . $mat->quantity . '"
                                value="' . $mat->items_collected_for_job . '" class="w-full" style="height:30px;" onchange="change_item_collect(' . $mat->id . ');this.oldvalue = this.value;">
                                </td>
                                <td class="border-b"><button class="button bg-theme-1 text-white w-full" onclick="set_item_collect(' . $mat->id . ')">Set</button></td>';
                            if ($mat->quantity == $mat->items_collected_for_job) {
                                echo '
                                <td class="border-b"><i class="fa fa-minus" style="color:green;"/></td>
                                <td class="border-b"><i class="fa fa-check" style="color:green;"/></td>';
                            } else {
                                echo '
                                <td style="color: red" class="border-b">' . ($mat->quantity - $mat->items_collected_for_job) . '</td>
                                <td style="color: red" class="border-b"><i class="fa fa-minus"/></td>';
                                $missing_stock_total += $mat->quantity - $mat->items_collected_for_job;
                            }
                            echo '</tr>';
                        endforeach;
                    endif;
                    ?>
                    <tr id="items_collected_total">
                        <td class="border-b">Total</td>
                        <td class="border-b"></td>
                        <td class="border-b"><?php echo $quantity_total; ?></td>
                        <td class="border-b"><?php echo $items_collected_total; ?></td>
                        <td class="border-b"></td>
                        <td class="border-b"><?php echo ($missing_stock_total == 0) ? '<i class="fa fa-minus" style="color:green;"/>' : $missing_stock_total; ?></td>
                        <td class="border-b">--</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-1 mb-5">
                <input style="float:left;" type="checkbox" class="input border mr-2" id="vertical-remember-me"
                    <?php echo ($missing_stock_total != 0) ? 'checked' : '' ?> disabled/>
                <label style="float:left;" class="cursor-pointer select-none" for="vertical-remember-me">Need to order
                    Material</label>
            </div>
            <div class="mt-1 mb-2" style="text-align: right;position: relative;right: 10px;">
                <input type="checkbox" class="input border mr-2" id="vertical-remember-me_r1"
                    <?php echo ($missing_stock_total == 0) ? 'checked' : '' ?> disabled/>
                <label class="cursor-pointer select-none" for="vertical-remember-me_r1">Materials in stock</label>
            </div>
            <div class="mt-1 mb-2" style="text-align: right;">
                <input type="checkbox" class="input border mr-2" id="vertical-remember-me_r2"
                    <?php echo ($missing_stock_total == 0) ? 'checked' : '' ?> disabled/>
                <label class="cursor-pointer select-none" for="vertical-remember-me_r2">Materials Collected</label>
            </div>
            <div class=" py-3 text-right border-t border-gray-200">
                <button data-dismiss="modal" class="button w-30 bg-theme-1 text-white">Save & Close
                </button>
            </div>
            <input type="hidden" name="job_id" value="<?php echo ($job) ? $job->id : ''; ?>"/>
        </form>
    </div>

</div>

<script type="text/javascript">
    var job_id = '<?php echo ($job) ? $job->id : ""?>';
    var customer_id = '<?php echo ($job) ? $job->customer_id : ""?>';
    var company_id = '<?php echo ($job) ? $job->company_id : ""?>';
    var status = '<?php echo ($job) ? $job->status : ""?>';

    function format(d) {
        /*console.log(d.JobCity);*/
        // `d` is the original data object for the row
        if (d.invoice_id == "") {
            return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px; text-align:left;width: 100%;">' +
                '<tr style="background-color:yellow;text-align:left">' +
                '<td>Trans. Date:</td>' +
                '<td>' + d.payment_date + '</td>' +
                '<td>Paymen Method:</td>' +
                '<td>' + d.payment_method + '</td>' +
                '<td><button class="button  bg-theme-6 text-white">Cancel Payment</button></td>' +
                '</tr></table>';
        } else {
            return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px; text-align:left;width: 100%;">' +
                '<tr style="background-color:yellow;text-align:left">' +
                '<td width="150px">Trans. Date:</td>' +
                '<td>' + d.due_date + '</td>' +
                '<td> </td>' +
                '<td> </td>' +
                '<td> </td>' +
                '</tr></table>';
        }
    }

    function change_item_collect(rowId) {
        var quantity = $('#items_collected' + rowId).children().eq(2).html() * 1
        var total_missing_stock = $('#items_collected_total').children().eq(5).html() * 1
        var total_items_collected = $('#items_collected_total').children().eq(3).html() * 1
        var oldValue = event.target.oldvalue * 1;
        var nValue = event.target.value * 1;
        $('#items_collected_total').children().eq(3).html(total_items_collected - oldValue + nValue);
        $('#items_collected_total').children().eq(5).html(total_missing_stock + oldValue - nValue);
        if (total_missing_stock + oldValue - nValue == 0) {
            $('#items_collected_total').children().eq(5).html('<i class="fa fa-check" style="color:green;"/>');
            status = 'MAT Collected';
        } else {
            status = 'MAT Missing in Stock';
        }
        if (quantity == nValue) {
            $('#items_collected' + rowId).children().eq(5).html('<i class="fa fa-check" style="color:green;"/>')
            $('#items_collected' + rowId).children().eq(6).html('<i class="fa fa-minus" style="color:green;"/>')
            $('#items_collected' + rowId).children().eq(4).find('button').attr('disabled', false);
            $('#items_collected' + rowId).children().eq(4).find('button').css('background-color', 'blue');
        } else if (quantity > nValue) {
            $('#items_collected' + rowId).children().eq(5).html(quantity - nValue);
            $('#items_collected' + rowId).children().eq(6).html('<i class="fa fa-minus" style="color:red;"/>')
            $('#items_collected' + rowId).children().eq(4).find('button').attr('disabled', false);
            $('#items_collected' + rowId).children().eq(4).find('button').css('background-color', 'blue');
        } else {
            $('#items_collected' + rowId).children().eq(4).find('button').attr('disabled', true);
            $('#items_collected' + rowId).children().eq(4).find('button').css('background-color', 'gray');
            $('#items_collected' + rowId).children().eq(5).html(quantity - nValue);
            $('#items_collected' + rowId).children().eq(6).html('<i class="fa fa-minus" style="color:red;"/>')
        }
    }

    $(document).ready(function () {
        $.fn.dataTable.ext.errMode = 'throw';

        var table = $('#jobDetailTable').DataTable({
            "pageLength": 50,
            "searching": false,

            "ajax": {
                url: '<?php echo base_url("Jobs/credits_debits_tracking");?>',
                type: 'GET',
                data: function (data) {
                    data.job_id = job_id;
                },
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
                {"data": "debit"},
                {"data": "credit"},
                {"data": "due_date"},
                {"data": "account_balance"},
                {"data": "job_balance"},
                {"data": "notes"},
            ],
            "order": [[0, 'asc']]
        });
        $('#invoice_due_date').daterangepicker({
            "showDropdowns": true,
            "minYear": 2010,
            "singleDatePicker": true,
        });
        $('#invoice_due_date').val('');
        // Add event listener for opening and closing details
        $('#jobDetailTable tbody').on('click', 'td.details-control', function () {
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
        $('#create_payment').click(function () {
            if ($('#invoice_number').val() == '' || $('#payment_amount').val() == '' || $('#payment_method').val() == '') {
                alert('You need to input all information for creating payment');
                return;
            }
            $.ajax('create_payment', {
                type: 'POST',  // http method
                data: {
                    invoice_number: $('#invoice_number').val(),
                    payment_amount: $('#payment_amount').val(),
                    payment_method: $('#payment_method').val(),
                    job_id: job_id,
                    customer_id: customer_id
                },  // data to submit
                success: function (data, status, xhr) {
                    table.ajax.reload(null, false);
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    console.log(errorMessage);
                }
            });
        });
        $('#generate_invoice').click(function () {

            if ($('#invoice_id').val() == '' || $('#invoice_amount').val() == '' || $('#invoice_due_date').val() == '') {
                alert('You need to input all information for generating invoice');
                return;
            }
            $.ajax('generate_invoice', {
                type: 'POST',  // http method
                data: {
                    invoice_id: $('#invoice_id').val(),
                    invoice_amount: $('#invoice_amount').val(),
                    invoice_due_date: $('#invoice_due_date').val(),
                    job_id: job_id,
                    customer_id: customer_id,
                    company_id: company_id
                },
                success: function (data, status, xhr) {
                    table.ajax.reload(null, false);
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    console.log(errorMessage);
                }
            });
        });
    });
    $('#job_setting_btn').click(function () {

        if ($('#installer').val() == '' || $('#start_date').val() == '') {
            alert('You need to input all information for saving job settings.');
            return;
        }
        $.ajax('set_job_settings', {
            type: 'POST',  // http method
            data: {
                installer: $('#installer').val(),
                start_date: $('#start_date').val(),
                end_date: $('#end_date').val(),
                job_id: job_id,
            },
            success: function (data, status, xhr) {
                status = data;
                if (status == 'In progress') {
                    $('#end_date').attr('readonly', false);
                }
                $('#status_filed').html(status);
            },
            error: function (jqXhr, textStatus, errorMessage) {
                console.log(errorMessage);
            }
        });
    });

    function set_item_collect(mat_id) {
        return;
        var item_collect = $('#items_collected' + mat_id).children().eq(3).find('input').val();
        $.ajax('set_mat_collect', {
            type: 'POST',  // http method
            data: {mat_id: mat_id, item_collect: item_collect, mat_item_status: status, job_id: job_id},  // data to submit
            success: function (data) {
                if (status == 'MAT Collected') {
                    $('#start_date').attr('disabled', false);
                }
                $('#status_filed').html(status);
            },
            error: function (jqXhr, textStatus, errorMessage) {
                console.log(errorMessage);
            }
        });
    }
</script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>