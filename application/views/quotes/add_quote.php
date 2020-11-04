<style>
    #right_info_part p {
        width: 150px;
    }

    table tbody {
        border: 1px solid lightgrey;
        overflow-y: scroll;
    }

    table th {
        background-color: #F1F5F8;
        text-align: center;
    }

    .table td {
        padding-top: 0px;
        padding-bottom: 0px;
    }

    table, tr, td {
        border: 1px solid lightgrey;
    }

    table td input {
        width: 100%;
        word-wrap: break-word
    }

    table#miscellaneous td:first-child input, table#adsOn td:first-child input {
        width: inherit;
    }

    table#miscellaneous td, table#adsOn td, table#pre_approved_quotes td, table#final_quote_table td {
        height: 42px;
    }

    table#final_quote_table td {
        text-align: center;
    }

    .table-report:not(.table-report--bordered) {
        border-spacing: 0px;
    }

    select:focus {
        outline: none !important;
    }

    input:focus, .input:focus {
        outline: none !important;
        border-color: #e2e8f0;
        box-shadow: 0 0 10px #e2e8f0;
    }

    #credit_check_body label {
        width: 120px;
    }

    .table-report__action div a:first-child {
        color: white;
        border-radius: 25px;
        padding-left: 7px;
        padding-right: 7px;
        border: 1px solid lightgrey;
        font-weight: bold;
        background-color: grey;
    }

    section#view_quote_section {
    }

    section div#view_quote_section label {
        display: grid;
    }

    section div#view_quote_section {
        min-height: 250px;
    }

    section #cal_quotes_section input {
        width: 8rem;
    }

    .hide_label {
        color: white;
        cursor: unset;
        border-color: white;
        cursor: default;
        pointer-events: none;
    }

    .tab {
        display: none;
    }

    .step {
        cursor: default;
        pointer-events: none;
        color: #718096;
        background-color: #edf2f7;
    }

    .step.active {
        color: white;
        background-color: #1C3FAA;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #1C3FAA;
    }

    fieldset {
        border: 1px solid gray;
        margin: 0 auto;
    }

    tbody tr {
        height: 45px;
    }

    tbody tr select {
        height: auto;;
    }

    div#examples_wrapper {
        overflow: auto;
    }

    #section_step {
        width: 100%;
    }

    div#steps_line {
        width: 63%;
    }

    @media screen and (max-width: 1315px) {

    }

    @media screen and (max-width: 1024px) {

    }

    @media screen and (max-width: 769px) {
        #right_info_part {
            padding: 0px;
        }

    }

    @media screen and (min-width: 400px) {
        .sm\:px-20 {
            padding-left: 2rem;
            padding-right: 2rem;
        }
    }

    /*.input-total-markup,.input-multiple-markup{
      display: none;
    }*/
</style>
<script>
    var catalogs =<?php echo json_encode($catalogs); ?>;
    var categories =<?php echo json_encode($categories); ?>;
</script>
<div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">
        <!-- BEGIN: Breadcrumb -->
        <div class="-intro-x breadcrumb mr-auto hidden sm:flex"><a href="" class="">Urbanfence</a> <i
                    data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Add
                Quote</a></div>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Account Menu -->
        <?php include(APPPATH . "views/inc/account_menu.php") ?>
        <!-- END: Account Menu -->
    </div>
    <!-- END: Top Bar -->

    <!-- BEGIN: Wizard Layout -->
    <div class="intro-y box py-10 sm:py-20 mt-5">

        <div class="wizard flex flex-col lg:flex-row justify-center px-5 sm:px-20" id="section_step">
            <div class="intro-x lg:text-center flex items-center lg:block flex-1 z-10">
                <button class="w-10 h-10 rounded-full button step">1</button>
                <div class="lg:w-32 font-medium text-base lg:mt-3 ml-3 lg:mx-auto">Create New Quote</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button class="w-10 h-10 rounded-full button step">2</button>
                <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700">Pre Approved Quote</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button class="w-10 h-10 rounded-full button step">3</button>
                <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700">Final Quote</div>
            </div>

            <div class="wizard__line hidden lg:block w-2/4 bg-gray-200 absolute mt-5" id="steps_line"></div>
        </div>
        <form id="quoteForm" method="post" action="save_quote">
            <section id="section_1" class="tab">
                <!-- qoute info start-->
                <div class="intro-y grid grid-cols-12 sm:grid-cols-8 p-5 mt-1 md:mt-5 gap-2 box">
                    <div class="col-span-4" style="margin-right: 5%;">
                        <fieldset class=" p-2 sm:p-3  fieldset_bd_color">
                            <legend class="legend_spacing">Quote #01</legend>
                            <p><b>
                                    Customer
                                    Name: <?php echo (is_object($opportunity)) ? $opportunity->customer_name : ''; ?>
                                    <br>
                                    Quote Type: <?php echo (is_object($opportunity)) ? $opportunity->job_type : ''; ?>
                                    <br>
                                    Address: <?php echo (is_object($opportunity)) ? $opportunity->job_address : ''; ?>
                                    <br>
                                    Payment Terms are: <span id="payment_terms_span"></span>
                                </b></p>
                        </fieldset>
                    </div>

                    <div class="col-span-12 sm:col-span-6 md:col-span-4 sm:pl-3 ml-5 lg:m-auto" id="right_info_part">
                        <div class="w-full sm:w-full m-auto mb-2" style="display:flex;">
                            <p> Set Quoting Company </p>
                            <select class="input border mr-2">
                                <?php
                                foreach ($companies as $com) {
                                    echo '<option value="' . $com->id . '">' . $com->name . '</option>';
                                }
                                ?>

                            </select>
                        </div>
                        <div class="w-full sm:w-full m-auto mb-2" style="display:flex;">
                            <p> Set Payment Terms * </p>
                            <select class="input border mr-2" name="payment_term" required>
                                <?php
                                $payment_terms = array('C.O.D', 'Net 30 Days', 'Net 45 Days', 'Net 60 Days', 'Master-Card', 'Amex'
                                , '30% Deposit - 70% Due 30 Days F', '50% Deposit - 50% Due 30 Days',
                                    '50% Deposit - 50% Due On Job C');
                                foreach ($payment_terms as $val) {
                                    echo '<option value="' . $val . '">' . $val . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="w-full sm:w-full m-auto" style="display:flex;">
                            <p classs="">Set Calc Mode
                            <p>
                                <select class="input border mr-2" name="calc_mode">
                                    <?php
                                    $calc_mode = array('', 'Contractor', 'Tender');
                                    foreach ($calc_mode as $key => $val) {
                                        if ($key == 0)
                                            continue;
                                        echo '<option value="' . $key . '">' . $val . '</option>';
                                    }
                                    ?>
                                </select>
                        </div>
                    </div>
                </div>
                <!--quote info close-->

                <!--table section start-->
                <fieldset class="p-1 w-full fieldset_bd_color">
                    <legend class="quote_legend_spacing">Materials</legend>
                    <div class="grid grid-cols-12 gap-6 mt-5">

                        <!-- BEGIN: materials -->
                        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">


                            <table class="table table-report -mt-2 mb-5" id="materials">
                                <thead>
                                <tr id="material_thead">
                                    <th class="whitespace-no-wrap">Category</th>
                                    <th class="whitespace-no-wrap">Code</th>
                                    <th class="text-center whitespace-no-wrap">Price per unit</th>
                                    <th class="text-center whitespace-no-wrap">Quantity</th>
                                    <th class="text-center whitespace-no-wrap">Total price</th>

                                    <th class="text-center whitespace-no-wrap">ACTIONS</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr id="material-item-row0" row="0" class="intro-x material-item">
                                    <td colspan="5"></td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3" onclick="add_material_item()"
                                               href="javascript:;">+</a>

                                        </div>
                                    </td>
                                </tr>
                                <tr id="material-item-total" class="intro-x">
                                    <td colspan="3" class="w-40 text-center">Total</td>

                                    <td></td>
                                    <td></td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">

                                            <i style="font-size: 20px;cursor: pointer;"
                                               onclick="toogle_material_item(this)"
                                               class="fa fa-angle-down"></i>
                                        </div>
                                    </td>
                                </tr>


                                </tbody>
                            </table>

                        </div>
                        <!-- END: materials -->
                    </div>
                </fieldset>


                <fieldset class="p-1 mt-2 w-full fieldset_bd_color">
                    <legend class="quote_legend_spacing">Labor</legend>
                    <div class="grid grid-cols-12 gap-6 mt-5">

                        <!-- BEGIN: labour -->
                        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                            <table class="table table-report -mt-2 mb-5" id="labour">
                                <thead>
                                <tr id="labour_thead">
                                    <th class="whitespace-no-wrap">Labor desc</th>
                                    <th class="whitespace-no-wrap"># of Man Day</th>
                                    <th class="text-center whitespace-no-wrap">Total price</th>
                                    <th class="text-center whitespace-no-wrap">ACTIONS</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr id="labour-item-row0" row="0" class="intro-x labour-item">
                                    <td colspan="3"></td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3" onclick="add_labour_item()"
                                               href="javascript:;">+</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr id="labour-item-total" class="intro-x">
                                    <td class="w-40 text-center">
                                        Total Man Day
                                    </td>

                                    <td></td>
                                    <td></td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">

                                            <i style="font-size: 20px;cursor: pointer;"
                                               onclick="toogle_labour_item(this)"
                                               class="fa fa-angle-down"></i>
                                        </div>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- END: labour -->
                    </div>
                </fieldset>


                <fieldset class="p-1 mt-2 w-full fieldset_bd_color">
                    <legend class="quote_legend_spacing">Miscellaneous</legend>
                    <div class="grid grid-cols-12 gap-6 mt-5">

                        <!-- BEGIN: miscellaneous -->
                        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                            <table class="table table-report -mt-2 mb-5" id="miscellaneous">
                                <thead>
                                <tr id="miscellaneous_thead">
                                    <th class="whitespace-no-wrap w-5">Misc #</th>
                                    <th class="whitespace-no-wrap">Misc desc</th>
                                    <th class="text-center whitespace-no-wrap w-10">Price per unit</th>
                                    <th class="text-center whitespace-no-wrap w-10">Quantity</th>
                                    <th class="text-center whitespace-no-wrap w-10">Total price</th>

                                    <th class="text-center whitespace-no-wrap w-10">ACTIONS</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr id="miscellaneous-item-row0" row="0" class="intro-x miscellaneous-item">
                                    <td colspan="5"></td>

                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3" onclick="add_miscellaneous_item()"
                                               href="javascript:;">+</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr id="miscellaneous-item-total" class="intro-x">
                                    <td colspan="3" class="w-40 text-center">Total Miscellaneous</td>
                                    <td></td>
                                    <td></td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <i style="font-size: 20px;cursor: pointer;"
                                               onclick="toogle_miscellaneous_item(this)" class="fa fa-angle-down"></i>
                                        </div>
                                    </td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                        <!-- END: miscellaneous -->
                    </div>
                </fieldset>


                <fieldset class="p-1 mt-2 w-full fieldset_bd_color">
                    <legend class="quote_legend_spacing">Add-On</legend>
                    <div class="grid grid-cols-12 gap-6 mt-5">

                        <!-- BEGIN: Ads-On -->
                        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                            <table class="table table-report -mt-2" id="adsOn">
                                <thead>
                                <tr>
                                    <th class="whitespace-no-wrap">Add-On desc</th>
                                    <th class="text-center whitespace-no-wrap">Price per unit</th>
                                    <th class="text-center whitespace-no-wrap">Quantity</th>
                                    <th class="text-center whitespace-no-wrap">Total price</th>
                                    <th class="text-center whitespace-no-wrap">ACTIONS</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr id="adsOn-item-row0" row="0" class="intro-x adsOn-item">
                                    <td colspan="4"></td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3" onclick="add_adsOn_item()"
                                               href="javascript:;">+</a>
                                        </div>
                                    </td>
                                </tr>

                                <tr id="adsOn-item-total" class="intro-x">
                                    <td colspan="2" class="text-center">Total Add-Ons</td>

                                    <td></td>
                                    <td></td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">

                                            <i style="font-size: 20px;cursor: pointer;"
                                               onclick="toogle_adsOn_item(this)"
                                               class="fa fa-angle-down"></i>
                                        </div>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- END: Ads-On -->
                    </div>
                </fieldset>

                <!--table section close-->
                <!-- END: Wizard Layout -->
            </section>


            <section id="section_2" class="tab">
                <!-- <div class="intro-y flex items-center mt-8">
                   <h2 class="text-lg font-medium mr-auto">
                       Regular Form
                   </h2>
                </div> -->
                <div class="grid grid-cols-12 gap-6 mt-5" id="final_quote_section">
                    <div class="intro-y col-span-12 lg:col-span-6">
                        <!-- BEGIN: Input -->
                        <div class="intro-y box">
                            <div class="p-5" id="input">
                                <div class="preview">
                                    <div class="col-span-2">
                                        <fieldset class=" p-3  fieldset_bd_color">
                                            <legend class="legend_spacing">Quote #01</legend>
                                            <p><b>
                                                    Customer
                                                    Name: <?php (is_object($opportunity)) ? $opportunity->customer_name : ''; ?>
                                                    <br>
                                                    Quote
                                                    Type: <?php (is_object($opportunity)) ? $opportunity->job_type : ''; ?>
                                                    <br>
                                                    Address: <?php (is_object($opportunity)) ? $opportunity->job_address : ''; ?>
                                                    <br>
                                                    Payment Terms are: <span id="payment_terms"></span>
                                                </b></p>
                                        </fieldset>
                                    </div>


                                    <div class="overflow-x-auto">

                                        <table class="table" style="margin-top: 4rem" id="final_quote_table">
                                            <thead>
                                            <tr class="bg-gray-200 text-gray-700">
                                                <th class="whitespace-no-wrap">Items</th>
                                                <th class="whitespace-no-wrap">Costs</th>
                                                <th class="whitespace-no-wrap">Selling Numbers</th>
                                                <th class="whitespace-no-wrap">Profit</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="border-b">Material</td>
                                                <td class="border-b"><a href="#material-detailed"
                                                                        data-target="#material-detailed"
                                                                        data-toggle="modal"
                                                                        style="text-decoration: underline;"></a>
                                                </td>
                                                <td class="border-b"></td>
                                                <td class="border-b"></td>
                                            </tr>
                                            <tr>
                                                <td class="border-b">Labour</td>
                                                <td class="border-b"><a href="javascript:;"
                                                                        data-target="#labour-detailed"
                                                                        data-toggle="modal"
                                                                        style="text-decoration: underline;"></a>
                                                </td>
                                                <td class="border-b"></td>
                                                <td class="border-b"></td>
                                            </tr>
                                            <tr>
                                                <td class="border-b">Misc</td>
                                                <td class="border-b"><a href="javascript:;" data-target="#misc-detailed"
                                                                        data-toggle="modal"
                                                                        style="text-decoration: underline;"></a>
                                                <td class="border-b"></td>
                                                <td class="border-b"></td>
                                            </tr>
                                            <tr>
                                                <td class="border-b">Add-On</td>
                                                <td class="border-b"></td>
                                                <td class="border-b"></td>
                                                <td class="border-b"></td>
                                            </tr>
                                            <tr class="sub-total1">
                                                <td class="border-b">Sub Total 1</td>
                                                <td class="border-b"></td>
                                                <td class="border-b"></td>
                                                <td class="border-b"></td>
                                            </tr>
                                            <tr class="discount-row">
                                                <td class="border-b">Discount</td>
                                                <td class="border-b">` + discount_percent + `%</td>
                                                <td class="border-b">` + discount_amount + `</td>
                                                <td class="border-b"></td>
                                            </tr>
                                            <tr class="sub-total2">
                                                <td class="border-b">Sub Total 2</td>
                                                <td class="border-b"></td>
                                                <td class="border-b">` + (sub_total1 - discount_amount) + `</td>
                                                <td class="border-b"></td>
                                            </tr>
                                            <tr>
                                                <td class="border-b">HST</td>
                                                <td class="border-b">13%</td>
                                                <td class="border-b"></td>
                                                <td class="border-b"></td>
                                            </tr>
                                            <tr>
                                                <td class="border-b">Total</td>
                                                <td class="border-b"></td>
                                                <td class="border-b"></td>
                                                <td class="border-b"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                                <div class="source-code hidden">
                                    <button data-target="#copy-input"
                                            class="copy-code button button--sm border flex items-center text-gray-700">
                                        <i
                                                data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                                    </button>

                                </div>
                            </div>
                        </div>
                        <!-- END: Input -->
                    </div>
                    <div class="intro-y col-span-12 lg:col-span-6">
                        <!-- BEGIN: Vertical Form -->
                        <div class="intro-y box">
                            <div class="p-5" id="vertical-form">
                                <div class="preview">
                                    <div class="overflow-x-auto">
                                        <div class="mt-1 mb-5">
                                            <input type="checkbox" class="input border mr-2" id="credit-passed">
                                            <label class="cursor-pointer select-none" for="credit-passed"
                                                   style="width: auto;">Customer passed Credit-Check</label>
                                        </div>
                                        <!-- <div class="mt-1 mb-5">
                                            <label class="mr-1">Assign Installer </label>
                                            <select class="input border mr-2">
                                                <option>Choose</option>
                                                <option>Liam Neeson</option>
                                                <option>Daniel Craig</option>
                                            </select>
                                        </div> -->
                                        <!-- <div class="mt-1 mb-5">
                                            <label class="mr-2">Set Calc Mode </label>
                                            <select class="input border mr-2" style="margin-left: 3px;">
                                                <option>Contractor</option>
                                                <option>Liam Neeson</option>
                                                <option>Daniel Craig</option>
                                            </select>
                                        </div> -->

                                        <div class="mt-1 mb-5" style="text-align-last: end">
                                            <label class="float-left" style="margin-right: 8px;">Set Markup rate</label>
                                            <input type="radio" class="input border mr-2 float-left set_markup"
                                                   id="horizontal-radio-chris-evans" name="horizontal_radio_button"
                                                   checked>
                                            <label class="cursor-pointer select-none float-left"
                                                   for="horizontal-radio-chris-evans">Total Markup</label>

                                            <input type="number"
                                                   class="input-total-markup input border"
                                                   placeholder="%" style="width:15%" name="total_markup_percent"
                                                   id="total_markup_percent">
                                            <input type="number"
                                                   class="input-total-markup input border"
                                                   placeholder="Amount" style="width:20%" name="total_markup_amount"
                                                   id="total_markup_amount">
                                        </div>


                                        <div class="mt-1 mb-5" style="display: inline-block;">
                                            <label class="float-left" style="margin-right: 8px; visibility: hidden;">Set
                                                Markup rate</label>
                                            <input type="radio" class="input border mr-2 float-left set_markup"
                                                   id="horizontal-radio-chris-evans2" name="horizontal_radio_button">
                                            <label class="cursor-pointer select-none mr-2 float-left"
                                                   for="horizontal-radio-chris-evans2">Multiple Markups</label>
                                        </div>

                                        <div class="mt-1 mb-5 " style="text-align-last: end;">

                                            <label class="mr-5">Material Markup</label>
                                            <input disabled placeholder="%" type="number"
                                                   class="input-multiple-markup input border bg-gray-100 cursor-not-allowed single_markup"
                                                   style="width:15%" name="material_markup_percent"
                                                   id="material_markup_percent">
                                            <input disabled placeholder="Amount" type="number"
                                                   class="input-multiple-markup input border bg-gray-100 cursor-not-allowed single_markup"
                                                   style="width:20%" name="material_markup_amount"
                                                   id="material_markup_amount">
                                        </div>

                                        <div class="mt-1 mb-5 " style="text-align-last: end;">

                                            <label class="mr-5">Labor Markup</label>
                                            <input disabled placeholder="%" type="number"
                                                   class="input-multiple-markup input border bg-gray-100 cursor-not-allowed single_markup"
                                                   style="width:15%" name="labor_markup_percent"
                                                   id="labor_markup_percent">
                                            <input disabled placeholder="Amount" type="number"
                                                   class="input-multiple-markup input border bg-gray-100 cursor-not-allowed single_markup"
                                                   style="width:20%" name="labor_markup_amount"
                                                   id="labor_markup_amount">
                                        </div>


                                        <div class="mt-1 mb-5" style="text-align-last: end;">
                                            <label class=" mr-5">Misc Markup</label>
                                            <input disabled type="number" placeholder="%"
                                                   class="input-multiple-markup input border ml-1 bg-gray-100 cursor-not-allowed single_markup"
                                                   style="width:15%" name="misc_markup_percent"
                                                   id="misc_markup_percent">
                                            <input disabled placeholder="Amount" type="number"
                                                   class="input-multiple-markup input border  bg-gray-100 cursor-not-allowed single_markup"
                                                   style="width:20%" name="misc_markup_amount" id="misc_markup_amount">
                                        </div>


                                        <div class="mt-1 mb-5" style="text-align-last: end;">
                                            <label class=" mr-5">Add-On Markup</label>
                                            <input disabled placeholder="%" type="number"
                                                   class="input-multiple-markup input border bg-gray-100 cursor-not-allowed single_markup"
                                                   style="width:15%" name="adson_markup_percent"
                                                   id="adson_markup_percent">
                                            <input disabled placeholder="Amount" type="number"
                                                   class="input-multiple-markup input border bg-gray-100 cursor-not-allowed single_markup"
                                                   style="width:20%" name="adson_markup_amount"
                                                   id="adson_markup_amount">
                                        </div>
                                        <div class="mt-10">
                                            <label class="mr-5">Add Discount</label>
                                            <input type="number"
                                                   class="add-discount input w-25 border col-span-4"
                                                   placeholder="%" style="width:15%" name="discount_percent">
                                            <input placeholder="Amount" type="number"
                                                   class="add-discount input w-25 border col-span-4"
                                                   style="width:20%"
                                                   name="discount_amount">

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- END: Vertical Form -->
                    </div>

            </section>

            <section id="section_3" class="tab">
                <!-- <div class="intro-y flex items-center mt-8">
                   <h2 class="text-lg font-medium mr-auto">
                       Regular Form
                   </h2>
                </div> -->
                <div class="grid grid-cols-12 gap-6 mt-5" id="final_quote_section">
                    <div class="intro-y col-span-12 lg:col-span-6">
                        <!-- BEGIN: Input -->
                        <div class="intro-y box">
                            <div class="p-5" id="input">
                                <div class="preview">
                                    <div class="col-span-2">
                                        <fieldset class=" p-3  fieldset_bd_color">
                                            <legend class="legend_spacing">Quote #01</legend>
                                            <p><b>
                                                    Customer
                                                    Name: <?php (is_object($opportunity)) ? $opportunity->customer_name : ''; ?>
                                                    <br>
                                                    Quote
                                                    Type: <?php (is_object($opportunity)) ? $opportunity->job_type : ''; ?>
                                                    <br>
                                                    Address: <?php (is_object($opportunity)) ? $opportunity->job_address : ''; ?>
                                                    <br>
                                                    Payment Terms are: <span id="payment_terms"></span>
                                                </b></p>
                                        </fieldset>
                                    </div>

                                    <div class="w-full sm:w-1/3 mt-2 mb-3">
                                        <fieldset class="p-2 w-full fieldset_bd_color">
                                            <legend class="legend_spacing">Status</legend>
                                            <p class="p-2">Approved</p>
                                        </fieldset>
                                    </div>

                                    <!-- hidden -->
                                    <div class="mt-1 mb-5 hidden">
                                        <label class="mr-5">Assign Installer </label>
                                        <select class="input border mr-2">
                                            <option>Chris Evans</option>
                                            <option>Liam Neeson</option>
                                            <option>Daniel Craig</option>
                                        </select>
                                    </div>
                                    <!-- close -->

                                    <div class="mt-5">
                                        <div style="width: 40%;display: inline-block;">
                                            <button class="button bg-gray-200 text-gray-600 mr-5"
                                                    style="float: inherit;">
                                                Generate IA
                                            </button>
                                        </div>
                                        <div style="width: 50%;display: inline;">
                                            <input type="checkbox" class="input border  mr-2" id=""><label>IA is
                                                signed</label>
                                        </div>


                                    </div>
                                    <div class="mt-3">
                                        <div style="width: 40%;display: inline-block;">
                                            <button class="button bg-gray-200 text-gray-600" style="float: inherit;">
                                                Generate Quote Form
                                            </button>
                                        </div>
                                        <div style="width: 50%;display: inline;">
                                            <input type="checkbox" class="input border mr-2" id=""><label>Quote Form is
                                                signed</label>
                                        </div>

                                    </div>
                                    <div class="mt-3">
                                        <button class="button bg-gray-200 text-gray-600" style="float: inherit;">
                                            Generate
                                            Blank Form
                                        </button>

                                    </div>
                                </div>
                                <div class="source-code hidden">
                                    <button data-target="#copy-input"
                                            class="copy-code button button--sm border flex items-center text-gray-700">
                                        <i
                                                data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                                    </button>

                                </div>
                            </div>
                        </div>
                        <!-- END: Input -->
                    </div>
                    <div class="intro-y col-span-12 lg:col-span-6">
                        <!-- BEGIN: Vertical Form -->
                        <div class="intro-y box">
                            <div class="p-5" id="vertical-form">
                                <div class="preview">
                                    <div class="overflow-x-auto">

                                        <table class="table mt-5" id="final_quote_table">
                                            <thead>
                                            <tr class="bg-gray-200 text-gray-700">
                                                <th class="whitespace-no-wrap">Items</th>
                                                <th class="whitespace-no-wrap">Costs</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>

                                                <td class="border-b">Material</td>
                                                <td class="border-b"><a href="#"
                                                                        data-target="#material-detailed"
                                                                        data-toggle="modal"
                                                                        style="text-decoration: underline;"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border-b">Labour</td>
                                                <td class="border-b"><a href="javascript:;"
                                                                        data-target="#labour-detailed"
                                                                        data-toggle="modal"
                                                                        style="text-decoration: underline;"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border-b">Misc</td>
                                                <td class="border-b"><a href="javascript:;" data-target="#misc-detailed"
                                                                        data-toggle="modal"
                                                                        style="text-decoration: underline;"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border-b">Add-On</td>
                                                <td class="border-b"></td>
                                            </tr>
                                            <tr>
                                                <td class="border-b">Sub-Total1</td>
                                                <td class="border-b"></td>
                                            </tr>
                                            <tr>
                                                <td class="border-b">Discount 20%</td>
                                                <td class="border-b"></td>
                                            </tr>
                                            <tr>
                                                <td class="border-b">Sub-Total2</td>
                                                <td class="border-b"></td>
                                            </tr>
                                            <tr>
                                                <td class="border-b">HST 13%</td>
                                                <td class="border-b"></td>
                                            </tr>
                                            <tr>
                                                <td class="border-b">Total</td>
                                                <td class="border-b"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- END: Vertical Form -->
                    </div>

            </section>
        </form>

        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
            <button class="button w-24 justify-center block bg-gray-200 text-gray-600" id="prevBtn"
                    onclick="nextPrev(-1)">Previous
            </button>
            <button class="button w-24 justify-center block bg-theme-1 text-white ml-2 mr-3" id="nextBtn"
                    onclick="nextPrev(1)">Next
            </button>
        </div>
    </div>
    <!-- Start Modal -->
    <div class="modal" id="material-detailed">
        <div class="modal__content modal__content--lg p-5 text-center">
            <div class="flex items-center py-5 sm:py-3 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">Material-Detailed</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="table">
                    <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="whitespace-no-wrap">Mat Category</th>
                        <th class="whitespace-no-wrap">Code</th>
                        <th class="whitespace-no-wrap">Price per unit</th>
                        <th class="whitespace-no-wrap">Quantity</th>
                        <th class="whitespace-no-wrap">Total Price</th>
                    </tr>
                    </thead>
                    <tbody id="mat_modal_tbody">
                    </tbody>
                </table>
            </div>
            <div class=" py-3 text-right border-t border-gray-200">
                <button data-dismiss="modal" type="button" class="button w-20 bg-theme-6 text-white">Cancel</button>
            </div>
        </div>

    </div>
    <div class="modal" id="labour-detailed">
        <div class="modal__content modal__content--lg p-5 text-center">
            <div class="flex items-center py-5 sm:py-3 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">Labour-Detailed</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="table">
                    <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="whitespace-no-wrap">Labour desc</th>
                        <th class="whitespace-no-wrap"># of Man Day</th>
                        <th class="whitespace-no-wrap">total price</th>

                    </tr>
                    </thead>
                    <tbody id="labor_modal_tbody">
                    </tbody>
                </table>
            </div>
            <div class=" py-3 text-right border-t border-gray-200">
                <button data-dismiss="modal" type="button" class="button w-20 bg-theme-6 text-white">Cancel</button>
            </div>
        </div>

    </div>
    <div class="modal" id="misc-detailed">
        <div class="modal__content modal__content--lg p-5 text-center">
            <div class="flex items-center py-5 sm:py-3 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">Misc-Detailed</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="table" id="miscellaneous">
                    <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="whitespace-no-wrap">Misc #</th>
                        <th class="whitespace-no-wrap">Misc desc</th>
                        <th class="whitespace-no-wrap">Price per unit</th>
                        <th class="whitespace-no-wrap">Quantity</th>
                        <th class="whitespace-no-wrap">Total Price</th>
                    </tr>
                    </thead>
                    <tbody id="mis_modal_tbody">
                    </tbody>
                </table>

            </div>
            <div class=" py-3 text-right border-t border-gray-200">
                <button data-dismiss="modal" type="button" class="button w-20 bg-theme-6 text-white">Cancel</button>
            </div>
        </div>

    </div>
    <!-- End Modal -->
    <!--    <script type="text/javascript" src="--><?php //echo base_url(); ?><!--assets/js/add_quote.js"/>-->
    <script>
        $(function () {
            $(".material-item,.labour-item,.miscellaneous-item,.adsOn-item").slideUp(1);
        });
        $('#quoteForm').keypress(function (e) {
            var key = e.charCode || e.keyCode || 0;
            if (key == 13) {
                e.preventDefault();
            }
        })


        var currentTab = 0; // Current tab is set to be the first tab (0)

        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                $("#nextBtn").removeClass('bg-gray-100 cursor-not-allowed').removeAttr('disabled');
                document.getElementById("nextBtn").innerHTML = "Create Job"
                document.getElementById("nextBtn").setAttribute("onclick", "save_quote()");

            } else {

                if (n == 1) {
                    document.getElementById("nextBtn").innerHTML = "Next";
                    if ($("#credit-passed").is(':checked')) {
                        $("#nextBtn").removeClass('bg-gray-100 cursor-not-allowed').removeAttr('disabled');
                    } else {
                        $("#nextBtn").addClass('bg-gray-100 cursor-not-allowed quote-approval-btn').prop("disabled", true);
                    }
                    $('#materials').find('tr').each(function () {
                        var mat_rowId = $(this).attr('id');
                        if (mat_rowId != 'material_thead' && mat_rowId != 'material-item-row0' && mat_rowId != 'material-item-total') {
                            $('#mat_modal_tbody').append('<tr>' +
                                '<td>' + $(this).find('td').eq(0).find('select').val() + '</td>' +
                                '<td>' + $(this).find('td').eq(1).find('select').val() + '</td>' +
                                '<td>' + $(this).find('td').eq(2).html() + '</td>' +
                                '<td>' + $(this).find('td').eq(3).find('input').val() + '</td>' +
                                '<td>' + $(this).find('td').eq(4).html() + '</td>' +
                                '')
                        }
                    });
                    var mat_total = $('#material-item-total').find('td').eq(2).html() * 1;
                    $('#final_quote_table').find('tr').eq(1).children().eq(1).find('a').html(mat_total);
                    $('#labour').find('tr').each(function () {
                        var lab_rowId = $(this).attr('id');
                        if (lab_rowId != 'labour_thead' && lab_rowId != 'labour-item-row0' && lab_rowId != 'labour-item-total') {
                            $('#labor_modal_tbody').append('<tr>' +
                                '<td>' + $(this).find('td').eq(0).find('select').val() + '</td>' +
                                '<td>' + $(this).find('td').eq(1).find('input').val() + '</td>' +
                                '<td>' + $(this).find('td').eq(2).html() + '</td>' +
                                '')
                        }
                    });
                    var labour_total = $('#labour-item-total').find('td').eq(2).html() * 1;
                    $('#final_quote_table').find('tr').eq(2).children().eq(1).find('a').html(labour_total);
                    $('#miscellaneous').find('tr').each(function (index) {
                        var mis_rowId = $(this).attr('id');
                        if (mis_rowId != 'miscellaneous_thead' && mis_rowId != 'miscellaneous-item-row0' && mis_rowId != 'miscellaneous-item-total') {
                            $('#mis_modal_tbody').append('<tr>' +
                                '<td>' + (index + 1) + '</td>' +
                                '<td>' + $(this).find('td').eq(1).find('input').val() + '</td>' +
                                '<td>' + $(this).find('td').eq(2).find('input').val() + '</td>' +
                                '<td>' + $(this).find('td').eq(3).find('input').val() + '</td>' +
                                '<td>' + $(this).find('td').eq(4).html() + '</td>' +
                                '')
                        }
                    });
                    var mis_total = $('#miscellaneous-item-total').find('td').eq(2).html() * 1;
                    $('#final_quote_table').find('tr').eq(3).children().eq(1).find('a').html(mis_total);

                    var addon_total = $('#adsOn-item-total').find('td').eq(2).html() * 1;
                    $('#final_quote_table').find('tr').eq(4).children().eq(1).html(addon_total);

                    var sub_total1 = mat_total + mis_total + labour_total + addon_total;
                    $('#total_markup_percent').val(10);
                    $('#total_markup_amount').val(sub_total1 * 0.1);

                    calculate_sale_table();

                } else {
                    $("#nextBtn").removeClass('bg-gray-100 cursor-not-allowed').removeAttr('disabled');
                    document.getElementById("nextBtn").innerHTML = "Next";
                }

                $("#nextBtn").attr("onclick", "nextPrev(1)");
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {

                //window.location.replace("/urbanfence/Jobs/jobs_list");
                /*document.getElementById("regForm").submit()*/
                ;

                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }

        $(".set_markup").click(function () {
            let markup_type = $(this).val();
            if (markup_type == "total_markup") {
                $(".input-total-markup").removeClass('bg-gray-100 cursor-not-allowed').removeAttr('disabled');
                $(".input-multiple-markup").addClass('bg-gray-100 cursor-not-allowed').prop("disabled", true);
            } else {
                $(".input-multiple-markup").removeClass('bg-gray-100 cursor-not-allowed').removeAttr('disabled');
                $(".input-total-markup").addClass('bg-gray-100 cursor-not-allowed').prop("disabled", true);
            }
        });

        function calculate_sale_table() {
            var mat_cost = $('#final_quote_table').find('tr').eq(1).children().eq(1).find('a').html() * 1;

            var labour_cost = $('#final_quote_table').find('tr').eq(2).children().eq(1).find('a').html() * 1;

            var misc_cost = $('#final_quote_table').find('tr').eq(3).children().eq(1).find('a').html() * 1;

            var adson_cost = $('#final_quote_table').find('tr').eq(4).children().eq(1).html() * 1;

            var subtotal_cost1 = mat_cost + labour_cost + misc_cost + adson_cost;

            var material_markup_percent = $('#material_markup_percent').val() * 1;
            var labour_markup_percent = $('#labor_markup_percent').val() * 1;
            var misc_markup_percent = $('#misc_markup_percent').val() * 1;
            var adson_markup_percent = $('#adson_markup_percent').val() * 1;
            if (document.getElementById('horizontal-radio-chris-evans').checked) {
                material_markup_percent = $('#total_markup_percent').val() * 1;
                labour_markup_percent = $('#total_markup_percent').val() * 1;
                misc_markup_percent = $('#total_markup_percent').val() * 1;
                adson_markup_percent = $('#total_markup_percent').val() * 1;
            }
            var discount_percent = $('input[name="discount_percent"]').val() * 1;


            var mat_profit = (mat_cost * material_markup_percent / 100);
            var labour_profit = (labour_cost * labour_markup_percent / 100);
            var misc_profit = (misc_cost * misc_markup_percent / 100);
            var adson_profit = (adson_cost * adson_markup_percent / 100);

            var subtotal_selling1 = subtotal_cost1 + mat_profit + labour_profit + misc_profit + adson_profit;

            var discount_selling = (subtotal_selling1 * discount_percent / 100);

            var subtotal_selling2 = subtotal_selling1 - discount_selling;

            var HST = subtotal_selling2 * 13 / 100;

            var total_selling = subtotal_selling1 + HST;

            $('#final_quote_table').find('tr').eq(1).children().eq(2).html(mat_cost + mat_profit);
            $('#final_quote_table').find('tr').eq(1).children().eq(3).html(mat_profit);
            $('#final_quote_table').find('tr').eq(2).children().eq(2).html(labour_cost + labour_profit);
            $('#final_quote_table').find('tr').eq(2).children().eq(3).html(labour_profit);
            $('#final_quote_table').find('tr').eq(3).children().eq(2).html(misc_cost + misc_profit);
            $('#final_quote_table').find('tr').eq(3).children().eq(3).html(misc_profit);
            $('#final_quote_table').find('tr').eq(4).children().eq(2).html(adson_cost + adson_profit);
            $('#final_quote_table').find('tr').eq(4).children().eq(3).html(adson_profit);

            $('#final_quote_table').find('tr').eq(5).children().eq(1).html(Math.round(subtotal_cost1 * 100) / 100);
            $('#final_quote_table').find('tr').eq(5).children().eq(2).html(Math.round(subtotal_selling1 * 100) / 100);

            $('#final_quote_table').find('tr').eq(6).children().eq(1).html(discount_percent + '%');
            $('#final_quote_table').find('tr').eq(6).children().eq(2).html(Math.round(discount_selling * 100) / 100);

            $('#final_quote_table').find('tr').eq(7).children().eq(2).html(Math.round(subtotal_selling2 * 100) / 100);

            $('#final_quote_table').find('tr').eq(8).children().eq(2).html(Math.round(HST * 100) / 100);
            $('#final_quote_table').find('tr').eq(9).children().eq(2).html(Math.round(total_selling * 100) / 100);

        }

        $(".add-discount").keyup(function () {
            var discount_percent = 0;
            var discount_amount = 0;
            var sub_total1 = $('#final_quote_table').find('tr').eq(5).children().eq(2).html() * 1;
            if ($(this).attr('name') == 'discount_percent') {
                discount_percent = $(this).val() * 1;
                discount_amount = sub_total1 * discount_percent / 100;
                $('input[name="discount_amount"]').val(discount_amount);
            } else {
                discount_amount = $(this).val() * 1;
                discount_percent = (discount_amount / sub_total1).toFixed(4) * 100;
                $('input[name="discount_percent"]').val(discount_percent);
            }
            calculate_sale_table();
        });
        $('#total_markup_percent, #total_markup_amount').keyup(function () {
            var total_percent = 0;
            var total_amount = 0;
            var sub_total1 = $('#final_quote_table').find('tr').eq(5).children().eq(2).html() * 1;
            if ($(this).attr('id') == 'total_markup_percent') {
                total_percent = $(this).val() * 1;
                total_amount = sub_total1 * total_percent / 100;
                $('#total_markup_amount').val(total_amount);
            } else {
                total_amount = $(this).val() * 1;
                total_percent = (total_amount / sub_total1).toFixed(4) * 100;
                $('#total_mark_percent').val(total_percent);
            }
            calculate_sale_table();
        });
        $('.single_markup').keyup(function () {
            var mat_percent = 0;
            var mat_amount = 0;
            var labour_percent = 0;
            var labour_amount = 0;
            var mis_percent = 0;
            var mis_amount = 0;
            var adson_percent = 0;
            var adson_amount = 0;
            var mat_cost = $('#final_quote_table').find('tr').eq(1).children().eq(1).find('a').html() * 1;
            if ($(this).attr('id') == 'material_markup_percent') {
                mat_percent = $(this).val() * 1;
                mat_amount = mat_cost * mat_percent / 100;
                $('#material_markup_amount').val(mat_amount);
            } else if ($(this).attr('id') == 'material_markup_amount') {
                mat_amount = $(this).val() * 1;
                mat_percent = (mat_amount / mat_cost).toFixed(4) * 100;
                $('#material_markup_percent').val(mat_percent);
            }
            var labour_cost = $('#final_quote_table').find('tr').eq(2).children().eq(1).find('a').html() * 1;
            if ($(this).attr('id') == 'labor_markup_percent') {
                labour_percent = $(this).val() * 1;
                labour_amount = labour_cost * labour_percent / 100;
                $('#labour_markup_amount').val(labour_amount);
            } else if ($(this).attr('id') == 'labour_markup_amount') {
                labour_amount = $(this).val() * 1;
                labour_percent = (labour_amount / labour_cost).toFixed(4) * 100;
                $('#labour_markup_percent').val(labour_percent);
            }

            var mis_cost = $('#final_quote_table').find('tr').eq(3).children().eq(1).find('a').html() * 1;

            if ($(this).attr('id') == 'misc_markup_percent') {
                mis_percent = $(this).val() * 1;
                mis_amount = mis_cost * mis_percent / 100;
                $('#misc_markup_amount').val(mis_amount);
            } else if ($(this).attr('id') == 'misc_markup_amount') {
                mis_amount = $(this).val() * 1;
                mis_percent = (mis_amount / mis_cost).toFixed(4) * 100;
                $('#misc_markup_percent').val(mis_percent);
            }


            var adson_cost = $('#final_quote_table').find('tr').eq(4).children().eq(1).find('a').html() * 1;

            if ($(this).attr('id') == 'adson_markup_percent') {
                adson_percent = $(this).val() * 1;
                adson_amount = adson_cost * adson_percent / 100;
                $('#adson_markup_amount').val(adson_amount);
            } else if ($(this).attr('id') == 'adson_markup_amount') {
                adson_amount = $(this).val() * 1;
                adson_percent = (adson_amount / adson_cost).toFixed(4) * 100;
                $('#adson_markup_percent').val(adson_percent);
            }

            calculate_sale_table();

        });


        $('#credit-passed').click(function () {
            if ($(this).is(':checked')) {
                $(".quote-approval-btn").removeClass('bg-gray-100 cursor-not-allowed').removeAttr('disabled');

            } else {

                $(".quote-approval-btn").addClass('bg-gray-100 cursor-not-allowed').prop("disabled", true);
            }
        });


        function add_material_item() {

            let html = '';
            let rowId = parseInt($(".material-item").last().attr("row"));
            let nextRow = rowId + 1;
            var firstCatalog = '';
            var catalogOptions = '';
            var matOptions = '';
            var price_per_unit = '';
            for (var i in categories) {
                catalogOptions += '<option value="' + categories[i].product_category + '">' + categories[i].product_category + '</option>'
            }
            html += `<tr id="material-item-row` + nextRow + `" row="` + nextRow + `" class="intro-x material-item">
                                        <td class="w-40">
                                            <div class="flex">
                                                <select class="input border mr-2" name="material_category[]" onchange="get_cate_code(` + nextRow + `)">
                                                    <option value=""></option>
                                                    ` + catalogOptions + `
                                                </select>
                                            </div>
                                        </td>

                                        <td class="w-40">
                                            <div class="flex">
                                                <select class="input border mr-2" name="material_code[]" onchange="chage_mat_code(` + nextRow + `)">
                                                    ` + matOptions + `
                                                </select>
                                            </div>
                                        </td>
                                        <td class="text-center">` + price_per_unit + `</td>
                                        <td class="text-center"><input type="number" name="mat_quantity[]" onfocus="this.oldvalue = this.value;" onchange="change_mat_quantity(` + nextRow + `)"></td>
                                        <td class="text-center"></td>
                                        <td class="table-report__action w-56">
                                            <div class="flex justify-center items-center">

                                              <a style="background-color:unset;border:unset" class="flex items-center mr-3" onclick="delete_material_item(` + nextRow + `)" href="javascript:;" ><i style="font-size: 20px;
    color: red;" class="fa fa-trash" aria-hidden="true"></i></a>
                                            </div>
                                        </td>
                                    </tr>`;
            $("#material-item-row" + rowId).after(html);


        }

        function get_cate_code(rowId) {
            var selectedCatalog = event.target.value;
            console.log(selectedCatalog);
            var matOptions = '';
            var price_per_unit = '';
            var first = 0;
            for (var j in catalogs) {
                if (catalogs[j].product_category == selectedCatalog) {
                    if (first == 0)
                        price_per_unit = catalogs[j].price_per_unit_tender;

                    matOptions += '<option value="' + catalogs[j].mat_code + '">' + catalogs[j].mat_code + '</option>';
                    first++;
                }
            }
            $('#material-item-row' + rowId).children().eq(1).find('select').html(matOptions);
            $('#material-item-row' + rowId).children().eq(2).html(price_per_unit);
            var quantity = $('#material-item-row' + rowId).children().eq(3).find('input').val();
            var total_price = $('#material-item-total').children().eq(2).html() * 1;
            var original_price = $('#material-item-row' + rowId).children().eq(4).html() * 1;
            if (quantity != '') {
                $('#material-item-row' + rowId).children().eq(4).html(quantity * price_per_unit);
                $('#material-item-total').children().eq(2).html(total_price - original_price + quantity * price_per_unit);
            }
        }

        function change_mat_code(rowId) {
            var selected_category = $('#material-item-row' + rowId).children().eq(0).find('select').val();
            var selected_mat_code = $('#material-item-row' + rowId).children().eq(1).find('select').val();
            var price_per_unit = '';
            for (var j in catalogs) {
                if (catalogs[j].product_category == selected_category) {
                    if (catalogs[j].mat_code == selected_mat_code)
                        price_per_unit = catalogs[j].price_per_unit_tender;
                }
            }
            $('#material-item-row' + rowId).children().eq(2).html(price_per_unit);
            var quantity = $('#material-item-row' + rowId).children().eq(3).find('input').val();
            var total_price = $('#material-item-total').children().eq(2).html() * 1;
            var original_price = $('#material-item-row' + rowId).children().eq(4).html() * 1;

            if (quantity != '') {
                $('#material-item-row' + rowId).children().eq(4).html(quantity * price_per_unit);
                $('#material-item-total').children().eq(2).html(total_price - original_price + quantity * price_per_unit);
            }
        }

        function change_mat_quantity(rowId) {
            var price_per_unit = $('#material-item-row' + rowId).children().eq(2).html();
            var quantity = $('#material-item-row' + rowId).children().eq(3).find('input').val();
            var total_price = $('#material-item-total').children().eq(2).html() * 1;
            var original_price = $('#material-item-row' + rowId).children().eq(4).html() * 1;
            var total_quantity = $('#material-item-total').children().eq(1).html() * 1;
            var original_quantity = event.target.oldvalue * 1;
            if (quantity != '' && price_per_unit != '') {
                $('#material-item-row' + rowId).children().eq(4).html(quantity * price_per_unit);
                $('#material-item-total').children().eq(2).html(total_price - original_price + quantity * price_per_unit)
            }
            $('#material-item-total').children().eq(1).html(total_quantity - original_quantity + quantity * 1);
        }

        function delete_material_item(rowId) {
            var total_price = $('#material-item-total').children().eq(2).html() * 1;
            var original_price = $('#material-item-row' + rowId).children().eq(4).html() * 1;
            var total_quantity = $('#material-item-total').children().eq(1).html() * 1;
            var original_quantity = $('#material-item-row' + rowId).children().eq(3).find('input').val() * 1;
            $('#material-item-total').children().eq(1).html(total_quantity - original_quantity);
            $('#material-item-total').children().eq(2).html(total_price - original_price)
            $("#material-item-row" + rowId).remove();
        }


        function toogle_material_item(obj) {

            if ($(obj).hasClass("fa-angle-up")) {
                $(obj).removeClass("fa-angle-up");
                $(obj).addClass("fa-angle-down");
                $(".material-item").slideUp();
            } else {
                $(obj).removeClass("fa-angle-down");
                $(obj).addClass("fa-angle-up");
                $(".material-item").slideDown();
            }
        }


        //////////////labour

        function add_labour_item() {

            let html = '';
            let rowId = parseInt($(".labour-item").last().attr("row"));
            let nextRow = rowId + 1;
            html += `<tr id="labour-item-row` + nextRow + `" row="` + nextRow + `" class="intro-x labour-item">
                                       <td class="w-40">
                                           <div class="flex">
                                               <select class="input border mr-2" name="labor_type[]">
                                                  <option>Man Day with Digger</option>
                                                  <option>Man Day Set Posts</option>
                                                  <option>Man Day Drive Posts</option>
                                                  <option>Man Day Clean Dirt</option>
                                                  <option>Man Day Frame and Mesh</option>
                                                  <option>Man Day Frame</option>
                                                  <option>Man Day Mesh</option>
                                                  <option>Man Day Tying Fence</option>
                                                  <option>Man Day Hang Gates</option>
                                                  <option>Man Day Removal</option>
                                                  <option>Man Day Cut Brush</option>
                                                  <option>Man Day Travel</option>
                                               </select>
                                           </div>
                                       </td>

                                       <td class="text-center"><input type="number" name="labor_total_days[]"  onfocus="this.oldvalue = this.value;" onchange="set_labour_price(` + nextRow + `)"></td>
                                       <td></td>
                                       <td class="table-report__action w-56">
                                           <div class="flex justify-center items-center">

                                              <a style="background-color:unset;border:unset" class="flex items-center mr-3" onclick="delete_labour_item(` + nextRow + `)" href="javascript:;" ><i style="font-size: 20px;
    color: red;" class="fa fa-trash" aria-hidden="true"></i></a>
                                            </div>
                                       </td>
                                   </tr>`;
            $("#labour-item-row" + rowId).after(html);

        }

        function set_labour_price(rowId) {
            var total_price = $('#labour-item-total').children().eq(2).html() * 1;
            var original_price = $('#labour-item-row' + rowId).children().eq(2).html() * 1;
            var quantity = $('#labour-item-row' + rowId).children().eq(1).find('input').val();
            var total_quantity = $('#labour-item-total').children().eq(1).html() * 1;
            var original_quantity = event.target.oldvalue * 1;
            if (quantity != '') {
                $('#labour-item-row' + rowId).children().eq(2).html(quantity * 250);
                $('#labour-item-total').children().eq(2).html(total_price - original_price + quantity * 250)
            }
            $('#labour-item-total').children().eq(1).html(total_quantity - original_quantity + quantity * 1);
        }


        function delete_labour_item(rowId) {
            var total_price = $('#labour-item-total').children().eq(2).html() * 1;
            var original_price = $('#labour-item-row' + rowId).children().eq(2).html() * 1;
            $('#labour-item-total').children().eq(2).html(total_price - original_price);
            var total_quantity = $('#labour-item-total').children().eq(1).html() * 1;
            var original_quantity = $('#labour-item-row' + rowId).children().eq(1).find('input').val() * 1;
            $('#labour-item-total').children().eq(1).html(total_quantity - original_quantity);
            $("#labour-item-row" + rowId).remove();
        }


        function toogle_labour_item(obj) {

            if ($(obj).hasClass("fa-angle-up")) {
                $(obj).removeClass("fa-angle-up");
                $(obj).addClass("fa-angle-down");
                $(".labour-item").slideUp();
            } else {
                $(obj).removeClass("fa-angle-down");
                $(obj).addClass("fa-angle-up");
                $(".labour-item").slideDown();
            }
        }


        //////////////miscellaneous

        function add_miscellaneous_item() {

            let html = '';
            let rowId = parseInt($(".miscellaneous-item").last().attr("row"));
            let nextRow = rowId + 1;
            html += `<tr id="miscellaneous-item-row` + nextRow + `" row="` + nextRow + `" class="intro-x miscellaneous-item">
                                       <td class="text-center">` + nextRow + `</td>
                                       <td class="text-center"><input type="text" name="misc_desc[]" placeholder="" value=""></td>
                                       <td class="text-center"><input type="number" name="misc_unit_price[]" placeholder="" onchange="change_mis_unit(` + nextRow + `)"></td>
                                       <td class="text-center"><input type="number" name="misc_quantity[]" onfocus="this.oldvalue = this.value;" placeholder="" onchange="change_mis_quantity(` + nextRow + `)"></td>
                                       <td class="text-center"></td>
                                       <td class="table-report__action">
                                           <div class="flex justify-center items-center">
                                              <a style="background-color:unset;border:unset" class="flex items-center mr-3" onclick="delete_miscellaneous_item(` + nextRow + `)" href="javascript:;" ><i style="font-size: 20px;
    color: red;" class="fa fa-trash" aria-hidden="true"></i></a>
                                            </div>
                                       </td>
                                   </tr>`;
            $("#miscellaneous-item-row" + rowId).after(html);

        }

        function change_mis_unit(rowId) {
            var total_price = $('#miscellaneous-item-total').children().eq(2).html() * 1;
            var original_price = $('#miscellaneous-item-row' + rowId).children().eq(4).html() * 1;
            var price_per_unit = $('#miscellaneous-item-row' + rowId).children().eq(2).find('input').val();
            var quantity = $('#miscellaneous-item-row' + rowId).children().eq(3).find('input').val();
            if (quantity != '' && price_per_unit != '') {
                $('#miscellaneous-item-row' + rowId).children().eq(4).html(quantity * price_per_unit);
                $('#miscellaneous-item-total').children().eq(2).html(total_price - original_price + quantity * price_per_unit)
            }
        }

        function change_mis_quantity(rowId) {
            var total_price = $('#miscellaneous-item-total').children().eq(2).html() * 1;
            var original_price = $('#miscellaneous-item-row' + rowId).children().eq(4).html() * 1;
            var price_per_unit = $('#miscellaneous-item-row' + rowId).children().eq(2).find('input').val();
            var quantity = $('#miscellaneous-item-row' + rowId).children().eq(3).find('input').val();
            var total_quantity = $('#miscellaneous-item-total').children().eq(1).html() * 1;
            var original_quantity = event.target.oldvalue * 1;
            if (quantity != '' && price_per_unit != '') {
                $('#miscellaneous-item-row' + rowId).children().eq(4).html(quantity * price_per_unit);
                $('#miscellaneous-item-total').children().eq(2).html(total_price - original_price + quantity * price_per_unit)
            }
            $('#miscellaneous-item-total').children().eq(1).html(total_quantity - original_quantity + quantity * 1);
        }

        function delete_miscellaneous_item(rowId) {
            var total_price = $('#miscellaneous-item-total').children().eq(2).html() * 1;
            var original_price = $('#miscellaneous-item-row' + rowId).children().eq(4).html() * 1;
            $('#miscellaneous-item-total').children().eq(2).html(total_price - original_price);
            var total_quantity = $('#miscellaneous-item-total').children().eq(1).html() * 1;
            var original_quantity = $('#miscellaneous-item-row' + rowId).children().eq(3).find('input').val() * 1;
            $('#miscellaneous-item-total').children().eq(1).html(total_quantity - original_quantity);
            $("#miscellaneous-item-row" + rowId).remove();
        }


        function toogle_miscellaneous_item(obj) {

            if ($(obj).hasClass("fa-angle-up")) {
                $(obj).removeClass("fa-angle-up");
                $(obj).addClass("fa-angle-down");
                $(".miscellaneous-item").slideUp();
            } else {
                $(obj).removeClass("fa-angle-down");
                $(obj).addClass("fa-angle-up");
                $(".miscellaneous-item").slideDown();
            }
        }


        //////////////adsOn

        function add_adsOn_item() {

            let html = '';
            let rowId = parseInt($(".adsOn-item").last().attr("row"));
            let nextRow = rowId + 1;
            html += `<tr id="adsOn-item-row` + nextRow + `" row="` + nextRow + `" class="intro-x adsOn-item">
                                       <td class="text-center"><input type="text" name="addon_desc[]" placeholder=""></td>
                                       <td class="text-center"><input type="number" name="addon_unit_price[]" placeholder="" onchange="change_adsOn_unit(` + nextRow + `)"></td>
                                       <td class="text-center"><input type="number" name="addon_quantity[]" placeholder="" onfocus="this.oldvalue = this.value;" onchange="change_adsOn_quantity(` + nextRow + `)"></td>
                                       <td class="text-center"></td>
                                       <td class="table-report__action w-56">
                                           <div class="flex justify-center items-center">
                                               <a style="background-color:unset;border:unset" class="flex items-center mr-3" onclick="delete_adsOn_item(` + nextRow + `)" href="javascript:;" ><i style="font-size: 20px;
    color: red;" class="fa fa-trash" aria-hidden="true"></i></a>
                                           </div>
                                       </td>
                                   </tr>`;
            $("#adsOn-item-row" + rowId).after(html);

        }

        function change_adsOn_unit(rowId) {
            var total_price = $('#adsOn-item-total').children().eq(2).html() * 1;
            var original_price = $('#adsOn-item-row' + rowId).children().eq(3).html() * 1;
            var price_per_unit = $('#adsOn-item-row' + rowId).children().eq(1).find('input').val();
            var quantity = $('#adsOn-item-row' + rowId).children().eq(2).find('input').val();
            if (quantity != '' && price_per_unit != '') {
                $('#adsOn-item-row' + rowId).children().eq(3).html(quantity * price_per_unit);
                $('#adsOn-item-total').children().eq(2).html(total_price - original_price + quantity * price_per_unit)
            }
        }

        function change_adsOn_quantity(rowId) {
            var total_price = $('#adsOn-item-total').children().eq(2).html() * 1;
            var original_price = $('#adsOn-item-row' + rowId).children().eq(3).html() * 1;
            var price_per_unit = $('#adsOn-item-row' + rowId).children().eq(1).find('input').val();
            var quantity = $('#adsOn-item-row' + rowId).children().eq(2).find('input').val();
            var total_quantity = $('#adsOn-item-total').children().eq(1).html() * 1;
            var original_quantity = event.target.oldvalue * 1;
            if (quantity != '' && price_per_unit != '') {
                $('#adsOn-item-row' + rowId).children().eq(3).html(quantity * price_per_unit);
                $('#adsOn-item-total').children().eq(2).html(total_price - original_price + quantity * price_per_unit)
            }
            $('#adsOn-item-total').children().eq(1).html(total_quantity - original_quantity + quantity * 1);
        }


        function delete_adsOn_item(rowId) {
            var total_price = $('#adsOn-item-total').children().eq(2).html() * 1;
            var original_price = $('#adsOn-item-row' + rowId).children().eq(3).html() * 1;
            $('#adsOn-item-total').children().eq(2).html(total_price - original_price);
            var total_quantity = $('#adsOn-item-total').children().eq(1).html() * 1;
            var original_quantity = $('#adsOn-item-row' + rowId).children().eq(2).find('input').val() * 1;
            $('#adsOn-item-total').children().eq(1).html(total_quantity - original_quantity);
            $("#adsOn-item-row" + rowId).remove();
        }


        function toogle_adsOn_item(obj) {

            if ($(obj).hasClass("fa-angle-up")) {
                $(obj).removeClass("fa-angle-up");
                $(obj).addClass("fa-angle-down");
                $(".adsOn-item").slideUp();
            } else {
                $(obj).removeClass("fa-angle-down");
                $(obj).addClass("fa-angle-up");
                $(".adsOn-item").slideDown();
            }
        }

        function save_quote() {
            $('#quoteForm').submit();
        }
    </script>