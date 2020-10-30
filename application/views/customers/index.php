<style type="text/css">

    div#examples_paginate {
        margin-bottom: 1%;
    }

    table#examples {
        margin-bottom: 1%;
    }

    @media screen and (max-width: 1170px) {
        div#examples_wrapper {
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
        <div class="-intro-x breadcrumb mr-auto hidden sm:flex"><a href="" class="">Urbanfence</a> <i
                    data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Customers
                List</a></div>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Account Menu -->
        <?php include(APPPATH . "views/inc/account_menu.php") ?>
        <!-- END: Account Menu -->
    </div>
    <!-- BEGIN: Filters -->
    <div class="intro-y grid grid-cols-12 p-5 mt-5 gap-2 box">
        <h2 class="col-span-12 font-medium text-base  border-b border-gray-200">Filters</h2>
        <div class="col-span-12 sm:col-span-6 md:col-span-4">
            <div><label>Customer</label>
                <div class="mt-1"><input type="text" placeholder="Search" class="input pl-12 border w-full">
                </div>
            </div>
        </div>
        <div class="ml-sm-3 col-span-12 sm:col-span-6 md:col-span-4">
            <div class=""><label>Customer ID</label>
                <div class="mt-1"><input type="text" placeholder="Search" class="input pl-12 border w-full">
                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6 md:col-span-4">
            <div><label>Status</label>
                <div class="mt-1"><select class="select2 w-full">
                        <option>Lead</option>
                        <option>Customer</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="ml-sm-3 col-span-12 sm:col-span-6 md:col-span-4">
            <div class=""><label>Contact Person</label>
                <div class="mt-1"><input type="text" placeholder="Search" class="input pl-12 border w-full">
                </div>
            </div>
        </div>
        <div class="ml-sm-3 col-span-12 sm:col-span-6 md:col-span-4">
            <div class=""><label>City</label>
                <div class="mt-1"><input type="text" placeholder="Search" class="input pl-12 border w-full">
                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6 md:col-span-4">
            <div><label>Last Job Type</label>
                <div class="mt-1"><input type="text" placeholder="Search" class="input pl-12 border w-full">
                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6 md:col-span-4">
            <div><label>Last Sale Rep</label>
                <div class="mt-1"><select class="select2 w-full">
                        <option>David</option>
                        <option>Lorra</option>
                        <option>Joseph</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6 md:col-span-4">
            <div><label>Last Quote ID</label>
                <div class="mt-1"><input type="text" placeholder="Search" class="input pl-12 border w-full">
                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6 md:col-span-4">
            <div><label>Last Job ID</label>
                <div class="mt-1"><input type="text" placeholder="Search" class="input pl-12 border w-full">
                </div>
            </div>
        </div>

        <div class="col-span-12 sm:col-span-6 md:col-span-4 flex items-end">
            <div>
                <button class="button w-24 mr-1  bg-theme-1 text-white">Clear filter</button>
                <button class="button w-24 mr-1  bg-theme-6 text-white width_filter">filter</button>
            </div>
        </div>
    </div>
    <!-- END: Filters -->

    <!-- BEGIN: Datatable -->
    <div class="intro-y box p-5 mt-5" id="table_main_div">

        <table id="examples" class="display text-center" style="width:100%;">
            <thead>
            <tr>
                <th>Additional Info</th>
                <th>Id</th>
                <th>Status</th>
                <th>Customer</th>
                <th>Contact Person</th>
                <th>Phone1</th>
                <th>Email</th>
                <th>City</th>
<!--                <th>Recent Sale Rep</th>-->
                <!--  <th>Recent Job Type</th> -->
                <th>Edit</th>
                <th>Create Oppor.</th>
            </tr>
            </thead>
        </table>
    </div>
</div>
<!-- END: Content -->


<script type="text/javascript">
    function format(d) {
        /*console.log(d.JobCity);*/
        // `d` is the original data object for the row
        return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px; text-alight:center">' +
            '<tr>' +
            '<td>Recent Job Type</td>' +
            '<td>' + d.recent_job_type + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Phone2:</td>' +
            '<td>' + d.phone2 + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Address:</td>' +
            '<td>' + d.address + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Fax:</td>' +
            '<td>' + d.fax + '</td>' +
            '</tr>' +

            '<tr>' +
            '<td>Last Oppor.ID:</td>' +
            '<td>' + d.last_oppor_id + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Last Quote ID:</td>' +
            '<td>' + d.last_quote_id + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Last Job ID:</td>' +
            '<td>' + d.last_job_id + '</td>' +
            '</tr>' +
            '</table>';
    }

    $(document).ready(function () {
        var table = $('#examples').DataTable({
            "pageLength": 50,
            "ajax": {
                url: '<?php echo base_url("Customer/get_customers");?>',
                type: 'GET',
                // type:'JSON'
            },
            "columnDefs": [
                {className: "whitespace-no-wrap", "targets": [5]}
            ],
            "columns": [
                {
                    "className": 'details-control',
                    "orderable": false,
                    "data": null,
                    "defaultContent": ''
                },
                {"data": "id"},
                {"data": "status"},
                {"data": "customer"},
                {"data": "contact_person"},
                {"data": "phone1"},
                {"data": "email"},
                {"data": "city"},
                // {"data": "recent_sale_rep"},

                // { "data": "recent_job_type" },

                {
                    "data": null, render: function (data) {
                        return "<a href='#'><i class='fa fa-pencil' aria-hidden='true'></i></a>"
                    }
                },

                {
                    "data": null, render: function (data) {
                        return "<a href='<?php echo base_url('Opportunity/add_opportunity');?>'><i class='fa fa-external-link' aria-hidden='true'></i></a>"
                    }
                }
            ],
            "order": [[0, 'asc']]
        });

        // Add event listener for opening and closing details
        $('#examples tbody').on('click', 'td.details-control', function () {
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
    });
</script>