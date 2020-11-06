<!-- BEGIN: Side Menu -->
<nav class="side-nav">
    <a href="<?php echo base_url("Dashboard"); ?>" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Midone Tailwind HTML Admin Template" class="w-7"
             src="<?php echo base_url(); ?>assets/images/logo.png">
        <!-- <span class="hidden xl:block text-white text-lg ml-3"> Mid<span class="font-medium">one</span> </span> -->
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="<?php echo base_url("Dashboard"); ?>"
               class="side-menu <?= ($this->uri->segment(1) == 'Dashboard') ? 'side-menu--active' : '' ?>">
                <div class="side-menu__icon"><i data-feather="home"></i></div>
                <div class="side-menu__title"> Dashboard</div>
            </a>
        </li>
        <li>
            <a href="javascript:;"
               class="side-menu <?= ($this->uri->segment(1) == 'Opportunity') ? 'side-menu--active' : '' ?>">
                <div class="side-menu__icon"><i data-feather="box"></i></div>
                <div class="side-menu__title"> Opportunities <i data-feather="chevron-down"
                                                                class="side-menu__sub-icon"></i></div>
            </a>
            <ul class="<?= ($this->uri->segment(1) == 'Opportunity') ? 'side-menu__sub-open' : '' ?>">
                <li>
                    <a href="<?php echo base_url("Opportunity/add_customer"); ?>"
                       class="side-menu <?= ($this->uri->segment(2) == 'add_customer') ? 'side-menu--active' : '' ?>">
                        <div class="side-menu__icon"><i class="fa fa-user-plus" aria-hidden="true"></i></div>
                        <div class="side-menu__title"> Add Customer</div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url("Opportunity/add_opportunity"); ?>"
                       class="side-menu <?= ($this->uri->segment(2) == 'add_opportunity') ? 'side-menu--active' : '' ?>">
                        <div class="side-menu__icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
                        <div class="side-menu__title"> Add Opportunity</div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url("Opportunity/opportunity_list?status=New"); ?>"
                       class="side-menu <?= ($this->uri->segment(2) == 'opportunity_list' && isset($_GET['status'])) ? 'side-menu--active' : '' ?>">
                        <div class="side-menu__icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                        <div class="side-menu__title"> Pending Opportunities</div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url("Opportunity/opportunity_list"); ?>"
                       class="side-menu <?= ($this->uri->segment(2) == 'opportunity_list' && !isset($_GET['status'])) ? 'side-menu--active' : '' ?>">
                        <div class="side-menu__icon"><i class="fa fa-list" aria-hidden="true"></i></i> </div>
                        <div class="side-menu__title"> View Opportunities</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;"
               class="side-menu <?= ($this->uri->segment(1) == 'Customer') ? 'side-menu--active' : '' ?>">
                <div class="side-menu__icon"><i data-feather="user"></i></div>
                <div class="side-menu__title"> Customer <i data-feather="chevron-down" class="side-menu__sub-icon"></i>
                </div>
            </a>
            <ul class="<?= ($this->uri->segment(1) == 'Customer') ? 'side-menu__sub-open' : '' ?>">
                <li>
                    <a href="<?php echo base_url("Customer/customers_list"); ?>"
                       class="side-menu <?= ($this->uri->segment(2) == 'customers_list') ? 'side-menu--active' : '' ?>">
                        <div class="side-menu__icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                        <div class="side-menu__title"> View Customer</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;"
               class="side-menu <?= ($this->uri->segment(1) == 'Quotes') ? 'side-menu--active' : '' ?>">
                <div class="side-menu__icon"><i data-feather="twitch"></i></div>
                <div class="side-menu__title"> Quotes <i data-feather="chevron-down" class="side-menu__sub-icon"></i>
                </div>
            </a>
            <ul class="<?= ($this->uri->segment(1) == 'Quotes') ? 'side-menu__sub-open' : '' ?>">
                <li>
                    <a href="<?php echo base_url("Quotes/add_quote"); ?>"
                       class="side-menu <?= ($this->uri->segment(2) == 'add_quote') ? 'side-menu--active' : '' ?>">
                        <div class="side-menu__icon"><i data-feather="edit"></i></div>
                        <div class="side-menu__title"> Create New Quote</div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url("Quotes/quotes_list"); ?>"
                       class="side-menu <?= ($this->uri->segment(2) == 'quotes_list') ? 'side-menu--active' : '' ?>">
                        <div class="side-menu__icon"><i data-feather="eye"></i></div>
                        <div class="side-menu__title"> View Previous Quotes</div>
                    </a>
                </li>

            </ul>
        </li>
        <li>
            <a href="javascript:;"
               class="side-menu <?= ($this->uri->segment(1) == 'Jobs') ? 'side-menu--active' : '' ?>">
                <div class="side-menu__icon"><i data-feather="award"></i></div>
                <div class="side-menu__title"> Jobs <i data-feather="chevron-down" class="side-menu__sub-icon"></i>
                </div>
            </a>
            <ul class="<?= ($this->uri->segment(1) == 'Jobs') ? 'side-menu__sub-open' : '' ?>">
                <li>
                    <a href="<?php echo base_url("Jobs/job_detail"); ?>"
                       class="side-menu <?= ($this->uri->segment(2) == 'job_detail') ? 'side-menu--active' : '' ?>">
                        <div class="side-menu__icon"><i data-feather="edit"></i></div>
                        <div class="side-menu__title">Job Details</div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url("Jobs/jobs_list"); ?>"
                       class="side-menu <?= ($this->uri->segment(2) == 'jobs_list') ? 'side-menu--active' : '' ?>">
                        <div class="side-menu__icon"><i data-feather="eye"></i></div>
                        <div class="side-menu__title"> View Jobs</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;"
               class="side-menu <?= ($this->uri->segment(1) == 'Sales') ? 'side-menu--active' : '' ?>">
                <div class="side-menu__icon"><i data-feather="trending-up"></i></div>
                <div class="side-menu__title"> Sales <i data-feather="chevron-down" class="side-menu__sub-icon"></i>
                </div>
            </a>
            <ul class="<?= ($this->uri->segment(1) == 'Sales') ? 'side-menu__sub-open' : '' ?>">
                <li>
                    <a href="<?php echo base_url("Sales/sales_list"); ?>"
                       class="side-menu <?= ($this->uri->segment(2) == 'sales_list') ? 'side-menu--active' : '' ?>">
                        <div class="side-menu__icon"><i data-feather="eye"></i></div>
                        <div class="side-menu__title"> View Sales</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;"
               class="side-menu <?= ($this->uri->segment(1) == 'Users') ? 'side-menu--active' : '' ?>">
                <div class="side-menu__icon"><i data-feather="codepen"></i></div>
                <div class="side-menu__title"> Users Management <i data-feather="chevron-down"
                                                                   class="side-menu__sub-icon"></i></div>
            </a>
            <ul class="<?= ($this->uri->segment(1) == 'Users') ? 'side-menu__sub-open' : '' ?>">
                <li>
                    <a href="<?php echo base_url("Users/add_user"); ?>"
                       class="side-menu <?= ($this->uri->segment(2) == 'add_user') ? 'side-menu--active' : '' ?>">
                        <div class="side-menu__icon"><i class="fa fa-user-plus" aria-hidden="true"></i></div>
                        <div class="side-menu__title"> Add User</div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url("Users/users_list"); ?>"
                       class="side-menu <?= ($this->uri->segment(2) == 'users_list') ? 'side-menu--active' : '' ?>">
                        <div class="side-menu__icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                        <div class="side-menu__title"> Users List</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<!-- END: Side Menu -->
      