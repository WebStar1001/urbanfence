<style>
    #choose_label {
        width: 115px;
    }

    label.width6 {
        width: 7rem;
    }

    .status_width {
        width: 16%;
        border: 1px solid;
    }

    label#label_status {
        color: white;
    }

    label.label_choose_width {
        width: 20%;
    }

    @media screen and (max-width: 1000px) {
        .status_width {
            width: 50%;
        }

    }

    @media screen and (max-width: 639px) {
        .status_width {
            width: 25%;
        }

        label#label_status {
            display: none;
        }

        label.label_choose_width {
            width: auto;
        }

        .set_extra_mg {
            margin-top: -5%;
        }

        label.width6 {
            width: auto;
        }
    }
</style>
<!-- BEGIN: Content -->
<div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">
        <!-- BEGIN: Breadcrumb -->
        <div class="-intro-x breadcrumb mr-auto hidden sm:flex"><a href="" class="">Urbanfence</a> <i
                    data-feather="chevron-right" class="breadcrumb__icon"></i> <a class="breadcrumb--active">Add New
                Customer</a></div>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Account Menu -->
        <?php include(APPPATH . "views/inc/account_menu.php") ?>
        <!-- END: Account Menu -->
    </div>
    <form name="customerForm" method="post" action="save_customer">
        <div class="grid grid-cols-12 gap-6 box mt-5 p-5 md:p-10">
            <div class="col-span-12">
                <div class="preview">
                    <div class="intro-y flex flex-col sm:flex-row mt-2">
                        <label class="w-full w-full sm:w-1/3 md:w-1/4 lg:w-1/6 mb-2 sm:mb-0 md:mr-2"> Choose Quoting
                            Company</label>
                        <select name="company_id" class="select2 w-full sm:w-2/6">
                            <?php
                            foreach ($company as $com) {
                                if (is_object($customer)) {
                                    if($customer->company_id == $com->id){
                                        echo '<option value="' . $com->id . '" selected>' . $com->name . '</option>';
                                    }else{
                                        echo '<option value="' . $com->id . '">' . $com->name . '</option>';
                                    }
                                } else {
                                    echo '<option value="' . $com->id . '">' . $com->name . '</option>';
                                }
                            }
                            ?>
                        </select>

                    </div>
                    <div class="intro-y flex flex-col sm:flex-row mt-2">
                        <label class="w-full w-full sm:w-1/3 md:w-1/4 lg:w-1/6 mb-2 sm:mb-0 md:mr-2" id="label_status">
                            Choose Quoting Company</label>
                        <fieldset class="p-2 sm:p-3 status_width fieldset_bd_color">
                            <legend class="legend_spacing"> Status</legend>
                            <p> Lead </p>
                        </fieldset>

                    </div>
                </div>
            </div>

            <!-- <div class="col-span-12 sm:col-span-6 md:col-span-6">
                <div class="intro-y flex flex-col sm:flex-row items-center">
                        <label  class="sm:text-center pl-3" id="choose_label">Choose Quoting Company</label>
                        <select class="select2 w-full ">
                        <option>Urban Fence</option>
                   </select>
                    </div>
            </div> -->
            <div class="col-span-12 sm:col-span-6 md:col-span-6 set_extra_mg">
                <div class="preview">

                    <div class="intro-y flex flex-col sm:flex-row mt-2">
                        <label class="w-full width6 md:mr-5 pt-1 sm:pt-3"> Customer*</label>
                        <input type="text" name="customer" class="input w-full border mt-2 flex-1" value="<?php echo (is_object($customer)) ? $customer->customer : ''; ?>">
                    </div>
                    <!-- <div class="intro-y flex flex-col sm:flex-row items-center mt-2">
                        <label class="w-full sm:w-20 sm:text-center sm:mr-5">Company</label>
                        <input type="text" class="input w-full border mt-2 flex-1">
                    </div> -->

                    <div class="intro-y flex flex-col sm:flex-row mt-3">
                        <label class="w-full width6 md:mr-5 pt-1 sm:pt-3">Phone 1*</label>
                        <input type="text" name="phone1" class="input w-full border mt-2 flex-1" value="<?php echo (is_object($customer)) ? $customer->phone1 : ''; ?>">
                    </div>
                    <div class="intro-y flex flex-col sm:flex-row mt-3">
                        <label class="w-full width6 md:mr-5 pt-1 sm:pt-3">Email *</label>
                        <input type="text" name="email" class="input w-full border mt-2 flex-1" value="<?php echo (is_object($customer)) ? $customer->email : ''; ?>">
                    </div>


                    <div class="intro-y flex flex-col sm:flex-row mt-3">
                        <label class="w-full width6 md:mr-5 pt-1 sm:pt-3">Address*</label>
                        <input type="text" name="address" class="input w-full border mt-2 flex-1" value="<?php echo (is_object($customer)) ? $customer->address : ''; ?>">
                    </div>


                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 sm:mr-4 md:col-span-6 set_extra_mg">
                <div class="preview">
                    <!-- <div class="intro-y flex flex-col sm:flex-row items-center">
                        <label class="w-full sm:text-center sm:w-20 sm:mr-5">Time</label>
                        <input  type="text" class=" input w-full border mt-2 flex-1">
                    </div> -->
                    <div class="intro-y flex flex-col sm:flex-row mt-2">
                        <label class="w-full width6 md:mr-5 pt-1 sm:pt-3">Contact Person*</label>
                        <input type="text" name="contact_person" class="input w-full border mt-2 flex-1" value="<?php echo (is_object($customer)) ? $customer->contact_person : ''; ?>">
                    </div>
                    <div class="intro-y flex flex-col sm:flex-row mt-3">
                        <label class="w-full width6 md:mr-5 pt-1 sm:pt-3">Phone 2</label>
                        <input type="text" name="phone2" class="input w-full border mt-2 flex-1" value="<?php echo (is_object($customer)) ? $customer->phone2 : ''; ?>"/>
                    </div>
                    <div class="intro-y flex flex-col sm:flex-row mt-3">
                        <label class="w-full width6 md:mr-5 pt-1 sm:pt-3">Fax</label>
                        <input type="text" name="fax" class="input w-full border mt-2 flex-1" value="<?php echo (is_object($customer)) ? $customer->fax : ''; ?>"/>
                    </div>
                    <div class="intro-y flex flex-col sm:flex-row mt-3">
                        <label class="w-full width6 md:mr-5 pt-1 sm:pt-3">City*</label>
                        <input type="text" name="city" class="input w-full border mt-2 flex-1" value="<?php echo (is_object($customer)) ? $customer->city : ''; ?>"/>
                    </div>

                </div>
            </div>
            <input type="hidden" name="customer_id" value="<?php echo (is_object($customer)) ? $customer->id : ''; ?>"/>
            <div class="col-span-12 sm:col-span-12 sm:mr-4 md:col-span-12" style="margin-bottom: 2%;margin-left: 1%;">
                <div class="preview">
                    <input type="submit" value="Continue to Opportunity" style="float: right;" type="button"
                           class="button bg-theme-1 text-white mt-5 p-2"/>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- END: Content -->



                