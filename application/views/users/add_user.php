<style type="text/css">
  label.width6{
        width: 6rem;
     }
</style>       
                          

            <!-- BEGIN: Content -->
              <div class="content">
                 <!-- BEGIN: Top Bar -->
            <div class="top-bar">
                <!-- BEGIN: Breadcrumb -->
                <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Urbanfence</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Add User</a> </div>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Account Menu -->
                 <?php include(APPPATH."views/inc/account_menu.php")?>
                <!-- END: Account Menu -->
            </div>
                <div class="grid grid-cols-12 gap-6 box mt-5 p-5 md:p-10">
                    
                    <div class="col-span-12 sm:col-span-7">
                        <div class="preview">
                            <div class="intro-y flex flex-col sm:flex-row mt-3">
                                <label class="w-full width6 sm:mr-5">Username*</label>
                                <input type="text" class="input w-full border mt-2 flex-1">
                            </div>
                            <div class="intro-y flex flex-col sm:flex-row mt-3">
                                <label class="w-full width6 sm:mr-5">Password*</label>
                                <input type="text" class="input w-full border mt-2 flex-1">
                            </div>
                            <div class="intro-y flex flex-col sm:flex-row mt-3">
                                <label class="w-full width6 sm:mr-5">Name*</label>
                                <input type="text" class="input w-full border mt-2 flex-1">
                            </div>
                            <div class="intro-y flex flex-col sm:flex-row mt-3">
                                <label class="w-full width6 sm:mr-5">Access Level*</label>
                                <input type="text" class="input w-full border mt-2 flex-1">
                            </div>
                        </div>
                   </div>
                   <div class="col-span-12 sm:col-span-5 mt-1 sm:mt-5">
                        <div class="intro-y box p-3 sm:p-2 md:p-3 bg-theme-1 text-white">
                        <div class="mt-1">Email:  example@urbanfence.com</div>
                        <div class="">Status:  Active</div>
                       </div>
                    </div>
                    <div class="col-span-12 text-right">
                      <span>Add User</span>
                      <i style="font-size: 40px;" class="fa fa-user-plus" aria-hidden="true"></i>
                    </div>
                   <!-- <div class="col-span-9" style="margin-bottom: 2%;margin-left: 1%;">
                        <div class="preview">
                            <button style="float: right;" type="button" class="button bg-theme-1 text-white mt-5">Create Opportunity</button>
                        </div>
                   </div> -->
                </div>
              </div>
            <!-- END: Content -->
 


                