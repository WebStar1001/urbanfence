<style>
    #choosecustomer_label {
        width: 110px;
        text-align: center;
    }

    label.select_label_width {
        width: 11rem;
    }

    label.width6 {
        width: 6rem;
    }

    #address_div_mg {
        margin-top: -0.75rem;
    }

    .add_icon_width {
        width: 40px;
    }

    div.status_width {
        width: 50%;
    }

    @media screen and (max-width: 769px) {
        #address_div_mg {
            margin-top: -2%;
        }

        label.width6 {
            width: 6rem;
        }
    }

    @media screen and (max-width: 639px) {
        .status_width {
            width: 45%;
        }

        label.width6 {
            width: auto;
        }

        .add_icon_width {
            display: none;
        }

        #add_opppor_left_info, #add_opppor_right_info {
            margin-top: -0.75rem;
        }
    }
</style>


<!-- BEGIN: Content -->
<div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">
        <!-- BEGIN: Breadcrumb -->
        <div class="-intro-x breadcrumb mr-auto hidden sm:flex"><a href="" class="">Urbanfence</a> <i
                    data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Add
                New Opportunity</a></div>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Account Menu -->
        <?php include(APPPATH . "views/inc/account_menu.php") ?>
        <!-- END: Account Menu -->
    </div>
    <?php
    $job_type = array(
        '', 'Fence Repair', 'Gate Repair', 'Fence and Gate Repair', 'New Fence', 'New Gate', 'New Fence and Gate c/w  
                Operator', 'Gate Opperator Service');
    $sale_source = array('', 'Returned Customer', 'Yellow Pages', 'Facebook', 'Google Ad');
    $status = array('', 'New', 'Assigned');
    $urgency = array('', 'Normal', 'Urgent');
    ?>
    <form name="opporForm" method="post" action="save_opportunity">
        <div class="grid grid-cols-12 gap-6 box mt-5 md:p-10 sm:p-5 p-5">

            <!-- update mokeup hide session --
                    <div class="col-span-12 md:col-span-12">
                        <div class="intro-y flex flex-col sm:flex-row items-left md:pl-3 md:pr-3">
                            <label class="w-full select_label_width sm:text-left sm:mr-5">Choose Quoting Company</label>
                            <select class="select2 w-full ">
                                <option>Urban Fence</option>
                           </select> 
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-12">
                        <div class="intro-y flex flex-col sm:flex-row items-left md:pl-3 md:pr-3">
                                <label class="w-full select_label_width sm:mr-5">Choose Customer</label>
                                <select class="select2 w-full">
                                <option>Gil Naor</option>
                           </select>
                           <a href="<?php echo base_url(); ?>Opportunity/add_customer" class="add_icon_width">
                            <i class="fa fa-user-plus sm:ml-2 md:ml-2" style="font-size: 30px;" aria-hidden="true"></i>
                            </a>
                            <button style="border:1px solid #1C3FAA; background-color: #1C3FAA; color: white;" onclick="window.location.href='<?php echo base_url(); ?>Opportunity/add_customer'" type="button" class="button float-right p-0 sm:ml-3 md:p-1">Add Customer</button> --
                        </div>
                    </div>
   -->
            <div class="col-span-12">
                <div class="preview">

                    <div class="intro-y flex flex-col sm:flex-row">
                        <div class="col-span-4">
                            <fieldset class="p-2 mb-3 sm:mb-0 sm:p-3 status_width fieldset_bd_color"
                                      style="width: 300px!important;">
                                <legend class="legend_spacing">Customer</legend>
                                <p>Customer Name : <?php echo (is_object($customer)) ? $customer->customer : ''; ?>
                                    <br>Address: <?php echo (is_object($customer)) ? $customer->address : ''; ?></p>
                            </fieldset>
                        </div>
                        <div class="col-span-4">
                            <div class="sm:w-ful col-span-3 sm:m-auto sm:pl-4 sm:pr-4 mt-3 sm:mt-0 mb-3 sm:mb-0">
                                <label class="w-full text-left sm:pt-3">Search Customer</label>
                                <select name="customer_id" class="select2 w-full">
                                    <?php
                                    foreach ($customer_list as $cus) {
                                        if (is_object($customer)) {
                                            if ($customer->id == $cus->id) {
                                                echo '<option value="' . $cus->id . '" selected>' . $cus->customer . '</option>';
                                            } else {
                                                echo '<option value="' . $cus->id . '">' . $cus->customer . '</option>';
                                            }
                                        } else {
                                            echo '<option value="' . $cus->id . '">' . $cus->customer . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>

                        </div>

                        <div class="col-span-4">
                            <label class="w-full w-1/3 text-left sm:pt-3 mr-3 sm:mr-0">Create New Customer</label>
                            <a href="<?php echo base_url('Opportunity/add_customer'); ?>"><i style="font-size: 30px;"
                                                                                             class="w-full fa fa-user-plus"
                                                                                             aria-hidden="true"></i></a>
                        </div>

                    </div>

                    <div class="intro-y flex flex-col sm:flex-row mt-3">

                        <div class="col-span-3">
                            <div class="sm:w-ful col-span-3 sm:m-auto sm:pl-4 sm:pr-4 mt-3 sm:mt-0 mb-3 sm:mb-0">
                                <label class="w-full text-left sm:pt-3">Choose Quoting Company</label>
                                <select name="company_id" class="input w-full border flex-1">
                                    <?php
                                    foreach ($companies as $com) {
                                        if (is_object($opportunity)) {
                                            if ($opportunity->company_id == $com->id) {
                                                echo '<option value="' . $com->id . '" selected>' . $com->name . '</option>';
                                            } else {
                                                echo '<option value="' . $com->id . '">' . $com->name . '</option>';
                                            }
                                        } else {
                                            echo '<option value="' . $com->id . '">' . $com->name . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-span-12 sm:col-span-6 md:col-span-6 md:ml-3" id="add_opppor_left_info">
                <div class="preview">
                    <div class="intro-y flex flex-col sm:flex-row">
                        <label class="w-full sm:text-left md:mr-5 width6 pt-1 sm:pt-3">Status</label>
                        <input type="text" name="status" readonly
                               class="bg-gray-100 cursor-not-allowed input w-full sm:w-1/2 md:w-1/2 border mt-2 flex-1"
                               value="<?php echo (is_object($opportunity)) ? $status[$opportunity->status] : ''; ?>">
                    </div>
                    <div class="intro-y flex flex-col sm:flex-row mt-3">
                        <label class="w-full sm:text-left md:mr-5 width6 pt-1 sm:pt-3">Date </label>
                        <input type="Date" name="date" class="input w-full sm:w-1/2 md:w-1/2 border mt-2 flex-1"
                               value="<?php echo (is_object($opportunity)) ? $opportunity->date : date('Y-m-d'); ?>" readonly>
                    </div>
                    <div class="intro-y flex flex-col sm:flex-row mt-3">
                        <label class="w-full sm:text-left md:mr-5 width6 pt-1 sm:pt-3">Job Type </label>
                        <select name="job_type" class="input w-full border mt-2 flex-1">
                            <?php
                            foreach ($job_type as $key => $value) {
                                if ($key == 0)
                                    continue;
                                if (is_object($opportunity)) {
                                    if ($opportunity->job_type == $key) {
                                        echo '<option value="' . $key . '" selected>' . $value . '</option>';
                                    } else {
                                        echo '<option value="' . $key . '">' . $value . '</option>';
                                    }
                                } else {
                                    echo '<option value="' . $key . '">' . $value . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="intro-y flex flex-col sm:flex-row mt-3">
                        <label class="w-full sm:text-left md:mr-5 width6 pt-1 sm:pt-3">Urgency</label>
                        <select name="urgency" class="input w-full border mt-2 flex-1">
                            <?php
                            foreach ($urgency as $key => $value) {
                                if ($key == 0)
                                    continue;
                                if (is_object($opportunity)) {
                                    if ($opportunity->urgency == $key) {
                                        echo '<option value="' . $key . '" selected>' . $value . '</option>';
                                    } else {
                                        echo '<option value="' . $key . '">' . $value . '</option>';
                                    }
                                } else {
                                    echo '<option value="' . $key . '">' . $value . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="intro-y flex flex-col sm:flex-row mt-3">
                        <label class="w-full sm:text-left md:mr-5 width6 pt-1 sm:pt-3">Job Site *</label>
                        <input type="text" name="job_site" class="input w-full border mt-2 flex-1" required
                               value="<?php echo (is_object($opportunity)) ? $opportunity->job_site : '' ?>">
                    </div>
                    <div class="intro-y flex flex-col sm:flex-row mt-3">
                        <label class="w-full sm:text-left md:mr-5 width6 pt-1 sm:pt-3">Job Address *</label>
                        <input type="text" name="job_address" class="input w-full border mt-2 flex-1" required
                               value="<?php echo (is_object($opportunity)) ? $opportunity->job_address : '' ?>">
                    </div>

                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-6 md:mr-3" id="add_opppor_right_info">
                <div class="preview">
                    <div class="intro-y flex flex-col sm:flex-row mb-3 sm:mb-0">
                        <label class="w-full sm:text-left md:mr-5 width6 pt-1 sm:pt-3 ">Sales Rep</label>
                        <select name="sale_rep" class="select2 w-full">
                            <?php
                            foreach ($users as $user) {
                                if (is_object($opportunity)) {
                                    if ($opportunity->sales_rep == $key) {
                                        echo '<option value="' . $user->id . '" selected>' . $user->name . '</option>';
                                    } else {
                                        echo '<option value="' . $user->id . '">' . $user->name . '</option>';
                                    }
                                } else {
                                    echo '<option value="' . $user->id . '">' . $user->name . '</option>';
                                }
                                echo '<option value="' . $user->id . '">' . $user->name . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="intro-y flex flex-col sm:flex-row mb-3 sm:mb-0 mt-3">
                        <label class="w-full sm:text-left md:mr-5 width6 pt-1 sm:pt-3 ">Time</label>
                        <input type="text" name="time" class="input w-full border mt-2 flex-1"
                               value="<?php echo (is_object($opportunity)) ? $opportunity->time : date('H:i:s'); ?>"
                               readonly>
                    </div>
                    <div class="intro-y flex flex-col sm:flex-row mt-3">
                        <label class="w-full sm:text-left md:mr-5 width6 pt-1 sm:pt-3">Sales Source *</label>
                        <select class="input w-full border mt-2 flex-1" name="sale_source">
                            <?php
                            foreach ($sale_source as $key => $value) {
                                if ($key == 0)
                                    continue;
                                if (is_object($opportunity)) {
                                    if ($opportunity->sale_source == $key) {
                                        echo '<option value="' . $key . '" selected>' . $value . '</option>';
                                    } else {
                                        echo '<option value="' . $key . '">' . $value . '</option>';
                                    }
                                } else {
                                    echo '<option value="' . $key . '">' . $value . '</option>';
                                }
                            }
                            ?>
                            ?>
                        </select>
                    </div>

                    <div class="intro-y flex flex-col sm:flex-row mt-3">
                        <label class="w-full sm:text-left md:mr-5 width6 pt-1 sm:pt-3">Contact onsite</label>
                        <input type="text" name="contact_onsite" class="input w-full border mt-2 flex-1"
                               value="<?php echo (is_object($opportunity)) ? $opportunity->contact_onsite : '' ?>">
                    </div>
                    <div class="intro-y flex flex-col sm:flex-row mt-3">
                        <label class="w-full sm:text-left md:mr-5 width6 pt-1 sm:pt-3">Job City *</label>
                        <input type="text" name="job_city" class="input w-full border mt-2 flex-1" required
                               value="<?php echo (is_object($opportunity)) ? $opportunity->job_city : ''; ?>">
                    </div>
                </div>
            </div>

            <div class="col-span-12 md:pl-3 md:pr-3" id="address_div_mg">
                <div class="preview">
                    <div class="intro-y flex flex-col sm:flex-row">
                        <label class="w-full sm:text-left md:mr-5 width6 pt-1 sm:pt-3"> Details</label>
                        <textarea class="input w-full border mt-2" name="details" placeholder=""><?php echo (is_object($opportunity)) ? $opportunity->details : ''; ?></textarea>
                    </div>
                </div>
            </div>
            <input type="hidden" name="opportunity_id" value="<?php echo (is_object($opportunity)) ? $opportunity->id : ''; ?>"/>
            <div class="col-span-12">
                <div class="preview">
                    <input type="submit" value="Create Opportunity"
                           style="float: right;" class="button bg-theme-1 text-white mt-5 sm:p-2"/>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- END: Content -->
 


                