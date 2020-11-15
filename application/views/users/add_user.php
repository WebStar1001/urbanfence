<style type="text/css">
    label.width6 {
        width: 6rem;
    }
</style>


<!-- BEGIN: Content -->
<div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">
        <!-- BEGIN: Breadcrumb -->
        <div class="-intro-x breadcrumb mr-auto hidden sm:flex"><a href="" class="">Urbanfence</a> <i
                    data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Add
                User</a></div>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Account Menu -->
        <?php include(APPPATH . "views/inc/account_menu.php") ?>
        <!-- END: Account Menu -->
    </div>
    <form id="userForm" method="post" action="save_user">
        <div class="grid grid-cols-12 gap-6 box mt-5 p-5 md:p-10">

            <div class="col-span-12 sm:col-span-7">
                <div class="preview">
                    <div class="intro-y flex flex-col sm:flex-row mt-3">
                        <label class="w-full width6 sm:mr-5">Username*</label>
                        <input type="email" class="input w-full border mt-2 flex-1" name="username"
                               value="<?php echo ($user) ? $user->username : ''; ?>" required>
                    </div>
                    <div class="intro-y flex flex-col sm:flex-row mt-3">
                        <label class="w-full width6 sm:mr-5">Password*</label>
                        <input type="password" class="input w-full border mt-2 flex-1" name="password"
                               value="<?php echo ($user) ? $user->password : ''; ?>" required>
                    </div>
                    <div class="intro-y flex flex-col sm:flex-row mt-3">
                        <label class="w-full width6 sm:mr-5">Name*</label>
                        <input type="text" class="input w-full border mt-2 flex-1" name="name"
                               value="<?php echo ($user) ? $user->name : ''; ?>" required>
                    </div>
                    <div class="intro-y flex flex-col sm:flex-row mt-3">
                        <label class="w-full width6 sm:mr-5">Access Level*</label>
                        <select class="input border w-full mt-2 flex-1" name="access_level" required>
                            <?php
                            if ($user):
                                ?>
                                <option>Choose</option>
                                <option <?php echo ($user->access_level == 'Super-Admin') ? "selected" : "" ?>>
                                    Super-Admin
                                </option>
                                <option <?php echo ($user->access_level == 'Admin') ? "selected" : "" ?>>Admin</option>
                                <option <?php echo ($user->access_level == 'Manager') ? "selected" : "" ?>>Manager
                                </option>
                                <option <?php echo ($user->access_level == 'Sales') ? "selected" : "" ?>>Sales</option>
                                <option <?php echo ($user->access_level == 'Customer') ? "selected" : "" ?>>Customer
                                </option>
                            <?php
                            else:
                                ?>
                                <option>Choose</option>
                                <option>Super-Admin</option>
                                <option>Admin</option>
                                <option>Manager</option>
                                <option>Sales</option>
                                <option>Customer</option>
                            <?php
                            endif;
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-5 mt-1 sm:mt-5">
                <div class="intro-y box p-3 sm:p-2 md:p-3 bg-theme-1 text-white">
                    <div class="mt-1">Email: example@urbanfence.com</div>
                    <div class="">Status: Active</div>
                </div>
            </div>
            <div class="col-span-12 text-right">
                <button class="button bg-theme-1 text-white mt-5">Add User</button>
            </div>
        </div>
        <input type="hidden" name="user_id" value="<?php echo ($user) ? $user->id : ''; ?>"/>
    </form>
</div>
<!-- END: Content -->