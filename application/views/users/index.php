  <style>
  #user_table_body tr td:nth-child(8){
      color:orange;
  }
  #user_table_body tr td:nth-child(9), #user_table_body tr td:last-child{
      color:red;
  }
 

  div#table_main_div{
    overflow: auto;
  }


</style>    
            <!-- BEGIN: Content -->
            <div class="content">
                           <!-- BEGIN: Top Bar -->
            <div class="top-bar">
                <!-- BEGIN: Breadcrumb -->
                <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Urbanfence</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Users List</a> </div>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Account Menu -->
                 <?php include(APPPATH."views/inc/account_menu.php")?>
                <!-- END: Account Menu -->
            </div>
            

            <!-- BEGIN: Datatable -->
                <div class="intro-y box p-5 mt-5" id="table_main_div">
                    <table class=" table table-report table-report--bordered display datatable" style="margin-bottom: 1%;">
                        <thead>
                            <tr>
                                <th class="border-b-2">User-ID</th>
                                <th class="border-b-2 text-center">Username</th>
                                <th class="border-b-2 text-center">Password</th>
                                <th class="border-b-2 text-center">Name</th>
                                <th class="border-b-2 text-center">Access Level</th>
                                <th class="border-b-2 text-center">Status</th>
                                <th class="border-b-2 text-center">Edit</th>
                                <th class="border-b-2 text-center">Reset Password</th>
                                <th class="border-b-2 text-center">Disable user</th>
                                <th class="border-b-2 text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody id="user_table_body">
                           <tr>
                               <td class="text-center border-b">001</td>
                               <td class="text-center border-b">Greg</td>
                               <td class="text-center border-b">********</td>
                               <td class="text-center border-b">Greg</td>
                               <td class="text-center border-b">Admin</td>
                               <td class="text-center border-b">Active</td>
                               <td class="text-center border-b"><div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit mx-auto"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> 
                                        <!-- <div class="text-center text-xs mt-2">edit</div> -->
                                    </div>
                                </td>
                               <td class="text-center border-b"><i style="font-size: 24px;" class="fa fa-exclamation-triangle" aria-hidden="true"></i></td>
                               <td class="text-center border-b"><i style="font-size: 24px;" class="fa fa-ban" aria-hidden="true"></i></td>
                               <td class="text-center border-b"><i style="font-size: 24px;" class="fa fa-trash" aria-hidden="true"></i></td>
                           </tr>
                           <tr>
                               <td class="text-center border-b">001</td>
                               <td class="text-center border-b">Greg</td>
                               <td class="text-center border-b">********</td>
                               <td class="text-center border-b">Greg</td>
                               <td class="text-center border-b">Admin</td>
                               <td class="text-center border-b">Active</td>
                               <td class="text-center border-b"><div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit mx-auto"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> 
                                       <!--  <div class="text-center text-xs mt-2">edit</div> -->
                                    </div>
                                </td>
                               <td class="text-center border-b"><i style="font-size: 24px;" class="fa fa-exclamation-triangle" aria-hidden="true"></i></td>
                               <td class="text-center border-b"><i style="font-size: 24px;" class="fa fa-ban" aria-hidden="true"></i></td>
                               <td class="text-center border-b"><i style="font-size: 24px;" class="fa fa-trash" aria-hidden="true"></i></td>
                           </tr>
                           <tr>
                               <td class="text-center border-b">001</td>
                               <td class="text-center border-b">Greg</td>
                               <td class="text-center border-b">********</td>
                               <td class="text-center border-b">Greg</td>
                               <td class="text-center border-b">Admin</td>
                               <td class="text-center border-b">Active</td>
                               <td class="text-center border-b"><div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit mx-auto"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> 
                                        <!-- <div class="text-center text-xs mt-2">edit</div> -->
                                    </div>
                                </td>
                               <td class="text-center border-b"><i style="font-size: 24px;" class="fa fa-exclamation-triangle" aria-hidden="true"></i></td>
                               <td class="text-center border-b"><i style="font-size: 24px;" class="fa fa-ban" aria-hidden="true"></i></td>
                               <td class="text-center border-b"><i style="font-size: 24px;" class="fa fa-trash" aria-hidden="true"></i></td>
                           </tr>
                           <tr>
                               <td class="text-center border-b">001</td>
                               <td class="text-center border-b">Greg</td>
                               <td class="text-center border-b">********</td>
                               <td class="text-center border-b">Greg</td>
                               <td class="text-center border-b">Admin</td>
                               <td class="text-center border-b">Active</td>
                               <td class="text-center border-b"><div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit mx-auto"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> 
                                        <!-- <div class="text-center text-xs mt-2">edit</div> -->
                                    </div>
                                </td>
                               <td class="text-center border-b"><i style="font-size: 24px;" class="fa fa-exclamation-triangle" aria-hidden="true"></i></td>
                               <td class="text-center border-b"><i style="font-size: 24px;" class="fa fa-ban" aria-hidden="true"></i></td>
                               <td class="text-center border-b"><i style="font-size: 24px;" class="fa fa-trash" aria-hidden="true"></i></td>
                           </tr>
                           <tr>
                               <td class="text-center border-b">001</td>
                               <td class="text-center border-b">Greg</td>
                               <td class="text-center border-b">********</td>
                               <td class="text-center border-b">Greg</td>
                               <td class="text-center border-b">Admin</td>
                               <td class="text-center border-b">Active</td>
                               <td class="text-center border-b"><div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit mx-auto"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> 
                                        <!-- <div class="text-center text-xs mt-2">edit</div> -->
                                    </div>
                                </td>
                               <td class="text-center border-b"><i style="font-size: 24px;" class="fa fa-exclamation-triangle" aria-hidden="true"></i></td>
                               <td class="text-center border-b"><i style="font-size: 24px;" class="fa fa-ban" aria-hidden="true"></i></td>
                               <td class="text-center border-b"><i style="font-size: 24px;" class="fa fa-trash" aria-hidden="true"></i></td>
                           </tr>

                        </tbody>
                    </table>
                    <div class="text-right sm:p-1 md:p-2 lg:p-4">
                      <a href="<?php echo base_url(); ?>Users/add_user">
                        <span>Add User</span>
                        <i style="font-size: 40px;" class="fa fa-user-plus" aria-hidden="true"></i>
                      </a>
                    </div>
                </div>
                <!-- END: Datatable -->
                
            </div>
            <!-- END: Content -->
