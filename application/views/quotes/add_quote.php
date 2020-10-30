<style>
     #right_info_part p{
        width:150px;
    }   
    table tbody{
        border:1px solid lightgrey;
        overflow-y:scroll;
    }    
        table th{
            background-color:#F1F5F8;
            text-align:center;
        }
        .table td{
            padding-top:0px;
            padding-bottom:0px;
        }
        table,tr, td{
            border:1px solid lightgrey;
        }
        table td input{
            width:100%;
            word-wrap: break-word
        }        
        table#miscellaneous td:first-child input ,table#adsOn td:first-child input{
            width:inherit;
        }        
        table#miscellaneous td ,table#adsOn td,table#pre_approved_quotes td,table#final_quote_table td{
            height:42px;
        }
        table#final_quote_table td{
            text-align: center;
        }
        .table-report:not(.table-report--bordered)
        {
            border-spacing:0px;
        }

    select:focus {
        outline:none !important;
    }
    input:focus,.input:focus {
        outline: none !important;
        border-color:#e2e8f0;
        box-shadow: 0 0 10px #e2e8f0;
    }

    #credit_check_body label{
        width: 120px;
    }
    
    .table-report__action div a:first-child{
        color:white;border-radius:25px;
        padding-left:7px;
        padding-right:7px;
        border:1px solid lightgrey;
        font-weight:bold;
        background-color:grey;
    }
    section#view_quote_section{
    }
    section div#view_quote_section label{
       display: grid;
    }
    section div#view_quote_section{
        min-height: 250px;
    }
    section #cal_quotes_section input{
        width: 8rem;
    }
    .hide_label{
      color: white;
      cursor: unset;
      border-color: white;
      cursor: default;
      pointer-events: none;
    }
    .tab {
        display: none;
    }

    .step{
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
    
    fieldset{
      border:1px solid gray;
      margin:0 auto;
    }
    tbody tr{
      height: 45px;
    }
    tbody tr select{
      height: auto;;
    }
    div#examples_wrapper{
      overflow: auto;
    }
    #section_step{
      width: 100%;
    }
  div#steps_line{
    width: 63%;
  }
@media screen and (max-width: 1315px) {

}

@media screen and (max-width: 1024px) {

}
@media screen and (max-width: 769px) {
    #right_info_part{
      padding: 0px;
    }
    
}
@media screen and (min-width: 400px) {
    .sm\:px-20{
        padding-left: 2rem;
        padding-right:2rem;
    }
}

/*.input-total-markup,.input-multiple-markup{
  display: none;
}*/
</style>

<div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                <!-- BEGIN: Breadcrumb -->
                <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Urbanfence</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Add Quote</a> </div>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Account Menu -->
                <?php include(APPPATH."views/inc/account_menu.php")?>
                <!-- END: Account Menu -->
            </div>
                <!-- END: Top Bar -->

                <!-- BEGIN: Wizard Layout -->
                <div class="intro-y box py-10 sm:py-20 mt-5" >

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

                <section id="section_1" class="tab">
                    <!-- qoute info start-->
                    <div class="intro-y grid grid-cols-12 sm:grid-cols-8 p-5 mt-1 md:mt-5 gap-2 box">
                            <div class="col-span-4" style="margin-right: 5%;">
                                <fieldset class=" p-2 sm:p-3  fieldset_bd_color"> 
                                <legend class="legend_spacing">Quote #01</legend>
                                    <p><b>
                                    Customer Name: Aviad Kriaf <br>
                                    Quote Type: New Fence <br>
                                    Address: 207 Edgeley Blvd <br>
                                    Payment Terms are: Net 30 Day
                                    </b></p>
                                </fieldset>
                            </div>

                            <div class="col-span-12 sm:col-span-6 md:col-span-4 sm:pl-3 ml-5 lg:m-auto" id="right_info_part">
                                <div class="w-full sm:w-full m-auto mb-2" style="display:flex;">                
                                    <p> Set Quoting Company </p>
                                    <select class="input border mr-2">
                                        <option>Urban Fence</option>
                                      
                                    </select>                               
                                </div>
                                <div class="w-full sm:w-full m-auto mb-2" style="display:flex;">                
                                    <p> Set Payment Terms </p>
                                    <select class="input border mr-2">
                                        <option>C.O.D</option>
                                        <option>Net 30 Days</option>
                                        <option>Net 45 Days</option>
                                        <option>Net 60 Days</option>
                                        <option>Master-Card</option>
                                        <option>Amex</option>
                                        <option>30% Deposit - 70% Due 30 Days F</option>
                                        <option>50% Deposit - 50% Due 30 Days</option>
                                        <option>50% Deposit - 50% Due On Job C</option>
                                      </select>       
                                </div>
                                <div class="w-full sm:w-full m-auto" style="display:flex;">
                                        <p classs="">Set Calc Mode <p>
                                        <select class="input border mr-2">
                                            <option>Contractor</option>
                                            <option>Tender</option>
                                            
                                        </select>
                                </div>
                            </div>
                    </div>
                    <!--quote info close-->

                    <!--table section start-->
                    <fieldset class="p-1 w-full fieldset_bd_color"> 
                      <legend class="quote_legend_spacing">Materials</legend>
                    <div class="grid grid-cols-12 gap-6 mt-5" >
                       
                        <!-- BEGIN: materials -->
                        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">

                            
                            <table class="table table-report -mt-2 mb-5" id="materials">
                                <thead>
                                    <tr>
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
                                              <a class="flex items-center mr-3" onclick="add_material_item()" href="javascript:;" >+</a>
                                          
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="material-item-total" class="intro-x">
                                        <td colspan="3" class="w-40 text-center">Total</td>
                                        
                                        <td></td>
                                        <td></td>
                                        <td class="table-report__action w-56">
                                          <div class="flex justify-center items-center">
                                           
                                              <i style="font-size: 20px;cursor: pointer;" onclick="toogle_material_item(this)" class="fa fa-angle-down"></i>
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
                      <legend class="quote_legend_spacing">Labour</legend>
                    <div class="grid grid-cols-12 gap-6 mt-5" >
                       
                       <!-- BEGIN: labour -->
                       <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                           <table class="table table-report -mt-2 mb-5" id="labour">
                               <thead>
                                   <tr>
                                       <th class="whitespace-no-wrap">Labour desc</th>
                                       <th class="whitespace-no-wrap"># of Man Day</th>
                                       <th class="text-center whitespace-no-wrap">Total price</th>                                   
                                       <th class="text-center whitespace-no-wrap">ACTIONS</th>
                                   </tr>
                               </thead>
                               <tbody>
                         
                                   <tr id="labour-item-row0" row="0" class="intro-x labour-item" >
                                       <td colspan="3"></td>
                                       <td class="table-report__action w-56">
                                           <div class="flex justify-center items-center">
                                              <a class="flex items-center mr-3" onclick="add_labour_item()" href="javascript:;" >+</a>
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
                                             
                                              <i style="font-size: 20px;cursor: pointer;" onclick="toogle_labour_item(this)" class="fa fa-angle-down"></i>
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
                   <div class="grid grid-cols-12 gap-6 mt-5" >
                       
                       <!-- BEGIN: miscellaneous -->
                       <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                           <table class="table table-report -mt-2 mb-5" id="miscellaneous">
                               <thead>
                                   <tr>
                                       <th class="whitespace-no-wrap">Misc #</th>
                                       <th class="whitespace-no-wrap">Misc desc</th>
                                       <th class="text-center whitespace-no-wrap">Price per unit</th>
                                       <th class="text-center whitespace-no-wrap">Quantity</th>
                                       <th class="text-center whitespace-no-wrap">Total price</th>
                                       
                                       <th class="text-center whitespace-no-wrap">ACTIONS</th>
                                   </tr>
                               </thead>
                               <tbody>
                             
                                   <tr id="miscellaneous-item-row0" row="0" class="intro-x miscellaneous-item">
                                       <td colspan="5"></td>

                                       <td class="table-report__action w-56">
                                           <div class="flex justify-center items-center">
                                              <a class="flex items-center mr-3" onclick="add_miscellaneous_item()" href="javascript:;" >+</a>
                                            </div>
                                       </td>
                                   </tr>
                                   <tr id="miscellaneous-item-total" class="intro-x">
                                       <td colspan="3" class="w-40 text-center">Total Miscellaneous</td>
                                       <td></td>
                                       <td></td>
                                       <td class="table-report__action w-56">
                                           <div class="flex justify-center items-center">
                                              <i style="font-size: 20px;cursor: pointer;" onclick="toogle_miscellaneous_item(this)" class="fa fa-angle-down"></i>
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
                      <legend class="quote_legend_spacing">Ads-on</legend>
                   <div class="grid grid-cols-12 gap-6 mt-5" >
                       
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
                                               <a class="flex items-center mr-3" onclick="add_adsOn_item()" href="javascript:;" >+</a>
                                           </div>
                                       </td>
                                   </tr>

                                   <tr id="adsOn-item-total" class="intro-x">
                                       <td colspan="2" class="text-center">Total Add-Ons</td>
                                       
                                       <td></td>
                                       <td></td>
                                       <td class="table-report__action w-56">
                                           <div class="flex justify-center items-center">
                                               
                                              <i style="font-size: 20px;cursor: pointer;" onclick="toogle_adsOn_item(this)" class="fa fa-angle-down"></i>
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
                                          Customer Name: Aviad Kriaf <br>
                                          Quote Type: New Fence <br>
                                          Address: 207 Edgeley Blvd <br>
                                          Payment Terms are: Net 30 Day
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
                                                    <td class="border-b"><a href="javascript:;" data-target="#material-detailed" data-toggle="modal" style="text-decoration: underline;">4000</a></td>
                                                    <td class="border-b">5800</td>
                                                    <td class="border-b">1800</td>
                                                </tr>
                                                <tr>
                                                    <td class="border-b">Labour</td>
                                                    <td class="border-b"><a href="javascript:;" data-target="#labour-detailed" data-toggle="modal" style="text-decoration: underline;">4000</a></td>
                                                    <td class="border-b">5800</td>
                                                    <td class="border-b">1800</td>
                                                </tr>
                                                <tr>
                                                    <td class="border-b">Misc</td>
                                                    <td class="border-b"><a href="javascript:;" data-target="#misc-detailed" data-toggle="modal" style="text-decoration: underline;">1000</a>
                                                    <td class="border-b">1500</td>
                                                    <td class="border-b">500</td>
                                                </tr>
                                                <tr>
                                                    <td class="border-b">Add-On</td>
                                                    <td class="border-b">6750</td>
                                                    <td class="border-b">10800</td>
                                                    <td class="border-b">100</td>
                                                </tr>
                                                <tr class="sub-total1">
                                                    <td class="border-b">Sub Total 1</td>
                                                    <td class="border-b">15750</td>
                                                    <td class="border-b">23900 </td>
                                                    <td class="border-b">4050</td>
                                                </tr>
                                                <tr>
                                                    <td class="border-b">HST</td>
                                                    <td class="border-b">13%</td>
                                                    <td class="border-b">3107</td>
                                                    <td class="border-b"></td>
                                                </tr>
                                                <tr>
                                                    <td class="border-b">Total</td>
                                                    <td class="border-b"></td>
                                                    <td class="border-b">27007</td>
                                                    <td class="border-b"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                                <div class="source-code hidden">
                                    <button data-target="#copy-input" class="copy-code button button--sm border flex items-center text-gray-700"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code </button>
                                    
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
                                        <label class="cursor-pointer select-none" for="credit-passed" style="width: auto;">Customer passed Credit-Check</label>
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
                                      <label class="float-left" style="margin-right: 8px;" >Set Markup rate</label>
                                       <input type="radio" class="input border mr-2 float-left set_markup" id="horizontal-radio-chris-evans" name="horizontal_radio_button" value="total_markup">
                                        <label class="cursor-pointer select-none float-left" for="horizontal-radio-chris-evans">Total Markup</label>
                                    
                                        <input disabled type="text" class="input-total-markup bg-gray-100 cursor-not-allowed input border"  placeholder="%" style="width:15%">
                                        <input disabled type="text" class="input-total-markup bg-gray-100 cursor-not-allowed input border"  placeholder="Amount" style="width:20%">
                                    </div>


                                    <div class="mt-1 mb-5" style="display: inline-block;">
                                        <label class="float-left" style="margin-right: 8px; visibility: hidden;">Set Markup rate</label>
                                       <input type="radio" class="input border mr-2 float-left set_markup" id="horizontal-radio-chris-evans2" name="horizontal_radio_button" value="multiple_markup">
                                        <label class="cursor-pointer select-none mr-2 float-left" for="horizontal-radio-chris-evans2">Multiple Markups</label>

                                       

                                    </div>
                                    

                                    <div class="mt-1 mb-5 " style="text-align-last: end;">
                                      
                                        <label class="mr-5">Material Markup</label>
                                        <input disabled placeholder="%" type="text"  class="input-multiple-markup input border bg-gray-100 cursor-not-allowed" style="width:15%">
                                        <input disabled placeholder="Amount" type="text"  class="input-multiple-markup input border bg-gray-100 cursor-not-allowed" style="width:20%">                                   
                                    </div>

                                    <div class="mt-1 mb-5 " style="text-align-last: end;">

                                        <label class="mr-5">Labour Markup</label>
                                        <input disabled placeholder="%" type="text"  class="input-multiple-markup input border bg-gray-100 cursor-not-allowed" style="width:15%">
                                        <input disabled placeholder="Amount" type="text"  class="input-multiple-markup input border bg-gray-100 cursor-not-allowed" style="width:20%">                                   
                                    </div>


                                    <div class="mt-1 mb-5" style="text-align-last: end;">
                                        <label class=" mr-5">Misc Markup</label>
                                        <input disabled type="text" placeholder="%" class="input-multiple-markup input border ml-1 bg-gray-100 cursor-not-allowed" style="width:15%">
                                        <input disabled placeholder="Amount" type="text" class="input-multiple-markup input border  bg-gray-100 cursor-not-allowed" style="width:20%">                                    
                                    </div>


                                    <div class="mt-1 mb-5" style="text-align-last: end;">
                                        <label class=" mr-5">Ads-On Markup</label>
                                        <input disabled placeholder="%" type="text" class="input-multiple-markup input border bg-gray-100 cursor-not-allowed" style="width:15%">
                                        <input disabled placeholder="Amount" type="text" class="input-multiple-markup input border bg-gray-100 cursor-not-allowed" style="width:20%">                                 
                                    </div>
                                    <div class="mt-10">
                                        <label class="mr-5">Add Discount</label>
                                        <input  type="text" class="add-discount input w-25 border col-span-4" placeholder="%" style="width:15%" >
                                        <input  placeholder="Amount" type="text" class="add-discount input w-25 border col-span-4" style="width:20%" >
                                        
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
                                          Customer Name: Aviad Kriaf <br>
                                          Quote Type: New Fence <br>
                                          Address: 207 Edgeley Blvd <br>
                                          Payment Terms are: Net 30 Day
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
                                          <button class="button bg-gray-200 text-gray-600 mr-5" style="float: inherit;">Generate IA</button>
                                        </div>
                                        <div style="width: 50%;display: inline;">
                                          <input type="checkbox" class="input border  mr-2" id=""><label>IA is signed</label>
                                        </div>
                                        
                                        
                                
                                    </div>
                                    <div class="mt-3">
                                       <div style="width: 40%;display: inline-block;">
                                         <button class="button bg-gray-200 text-gray-600" style="float: inherit;">Generate Quote Form</button>
                                       </div>
                                       <div style="width: 50%;display: inline;">
                                         <input type="checkbox" class="input border mr-2" id=""><label>Quote Form is signed</label>
                                       </div>
                                        
                                    </div>
                                    <div class="mt-3">
                                        <button class="button bg-gray-200 text-gray-600" style="float: inherit;">Generate Blank Form</button>
                                        
                                    </div>
                                </div>
                                <div class="source-code hidden">
                                    <button data-target="#copy-input" class="copy-code button button--sm border flex items-center text-gray-700"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code </button>
                                    
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
                                                    <td class="border-b"><a href="javascript:;" data-target="#material-detailed" data-toggle="modal" style="text-decoration: underline;">6000</a></td>
                                                </tr>
                                                <tr>
                                                    <td class="border-b">Labour</td>
                                                    <td class="border-b"><a href="javascript:;" data-target="#labour-detailed" data-toggle="modal" style="text-decoration: underline;">6000</a></td>
                                                </tr>
                                                <tr>
                                                    <td class="border-b">Misc</td>
                                                    <td class="border-b"><a href="javascript:;" data-target="#misc-detailed" data-toggle="modal" style="text-decoration: underline;">1500</a></td>
                                                </tr>
                                                <tr>
                                                    <td class="border-b">Add-On</td>
                                                    <td class="border-b">10125</td>
                                                </tr>
                                                <tr>
                                                    <td class="border-b">Sub-Total1</td>
                                                    <td class="border-b">23625</td>
                                                </tr>
                                                <tr>
                                                    <td class="border-b">Discount 20%</td>
                                                    <td class="border-b">4725</td>
                                                </tr>
                                                <tr>
                                                    <td class="border-b">Sub-Total2</td>
                                                    <td class="border-b">18900</td>
                                                </tr>
                                                <tr>
                                                    <td class="border-b">HST 13%</td>
                                                    <td class="border-b">2457</td>
                                                </tr>
                                                <tr>
                                                    <td class="border-b">Total</td>
                                                    <td class="border-b">21357</td>
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

                <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                        <button class="button w-24 justify-center block bg-gray-200 text-gray-600" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                        <button class="button w-24 justify-center block bg-theme-1 text-white ml-2 mr-3" id="nextBtn" onclick="nextPrev(1)">Next</button>
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
           <tbody>
               <tr>
                   <td class="border-b">Fabric</td>
                   <td class="border-b">2X9X60G</td>
                   <td class="border-b">xxx</td>
                   <td class="border-b">50</td>
                   <td class="border-b">50x</td>
               </tr>
               <tr>
                   <td class="border-b">Top Rail</td>
                   <td class="border-b">TOPRAIL1</td>
                   <td class="border-b">yyy</td>
                   <td class="border-b">50</td>
                   <td class="border-b">50y</td>
               </tr>
               <tr>
                   <td class="border-b">Gates</td>
                   <td class="border-b">GATE1</td>
                   <td class="border-b">zzz</td>
                   <td class="border-b">1</td>
                   <td class="border-b">z</td>
               </tr>
               
           </tbody>
       </table>
      </div>
      <div class=" py-3 text-right border-t border-gray-200"> <button data-dismiss="modal" type="button" class="button w-20 bg-theme-6 text-white">Cancel</button></div>
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
           <tbody>
               <tr>
                   <td class="border-b">Man Day Set Posts</td>
                   <td class="border-b">2</td>
                   <td class="border-b">500</td>
     
               </tr>
               <tr>
                   <td class="border-b">Man Day Drive Posts</td>
                   <td class="border-b">1</td>
                   <td class="border-b">250</td>

               </tr>
               <tr>
                   <td class="border-b">Man Day Frame and Mesh</td>
                   <td class="border-b">10</td>
                   <td class="border-b">2500</td>

               </tr>
               
           </tbody>
       </table>
      </div>
      <div class=" py-3 text-right border-t border-gray-200"> <button data-dismiss="modal" type="button" class="button w-20 bg-theme-6 text-white">Cancel</button></div>
     </div>

 </div>
 <div class="modal" id="misc-detailed">
     <div class="modal__content modal__content--lg p-5 text-center">
        <div class="flex items-center py-5 sm:py-3 border-b border-gray-200">
               <h2 class="font-medium text-base mr-auto">Misc-Detailed</h2>
        </div>
      <div class="overflow-x-auto">
       <table class="table">
           <thead>
               <tr class="bg-gray-200 text-gray-700">
                   <th class="whitespace-no-wrap">Misc desc</th>
                   <th class="whitespace-no-wrap">Misc #</th>
                   <th class="whitespace-no-wrap">Price per unit</th>
                   <th class="whitespace-no-wrap">Quantity</th>
                   <th class="whitespace-no-wrap">Total Price</th>
               </tr>
           </thead>
           <tbody>
               <tr>
                   <td class="border-b">407 Bill</td>
                   <td class="border-b">1</td>
                   <td class="border-b">xxx</td>
                   <td class="border-b">1</td>
                   <td class="border-b">x</td>
               </tr>
               <tr>
                   <td class="border-b">Special gate sign</td>
                   <td class="border-b">2</td>
                   <td class="border-b">yyy</td>
                   <td class="border-b">1</td>
                   <td class="border-b">y</td>
               </tr>
               <tr>
                   <td class="border-b">Gate bell</td>
                   <td class="border-b">3</td>
                   <td class="border-b">zzz</td>
                   <td class="border-b">2</td>
                   <td class="border-b">2z </td>
               </tr>
               
           </tbody>
       </table>
      </div>
      <div class=" py-3 text-right border-t border-gray-200"> <button data-dismiss="modal" type="button" class="button w-20 bg-theme-6 text-white">Cancel</button></div>
     </div>

 </div>
<!-- End Modal -->          
<script>

$(function(){
   $(".material-item,.labour-item,.miscellaneous-item,.adsOn-item").slideUp(1);
});



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
    document.getElementById("nextBtn").setAttribute("onclick", "window.location='<?php echo base_url()?>Jobs/job_detail'");

  } else {
   
    if(n == 1){
      document.getElementById("nextBtn").innerHTML = "Next";
        if($("#credit-passed").is(':checked')){
            $("#nextBtn").removeClass('bg-gray-100 cursor-not-allowed').removeAttr('disabled');
        }else{
          $("#nextBtn").addClass('bg-gray-100 cursor-not-allowed quote-approval-btn').prop("disabled", true);
        }
      
    }else{
      $("#nextBtn").removeClass('bg-gray-100 cursor-not-allowed').removeAttr('disabled');
      document.getElementById("nextBtn").innerHTML = "Next";
    }
    
    $("#nextBtn").attr("onclick","nextPrev(1)");
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
        /*document.getElementById("regForm").submit()*/;
   
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

$(".set_markup").click(function(){
    let markup_type = $(this).val();
    if(markup_type == "total_markup"){
        $(".input-total-markup").removeClass('bg-gray-100 cursor-not-allowed').removeAttr('disabled');
        $(".input-multiple-markup").addClass('bg-gray-100 cursor-not-allowed').prop("disabled", true);
    }else{
        $(".input-multiple-markup").removeClass('bg-gray-100 cursor-not-allowed').removeAttr('disabled');
        $(".input-total-markup").addClass('bg-gray-100 cursor-not-allowed').prop("disabled", true);
    }
});

$(".add-discount").keyup(function(){
   let discount = $(this).val();
   $(".discount-row,.sub-total2").remove();
   let html = '';
   if(discount){
      html+=`<tr class="discount-row">
                <td class="border-b">Discount</td>
                <td class="border-b">`+discount+`%</td>
                <td class="border-b">4725</td>
                <td class="border-b">3150</td>
            </tr>
            <tr class="sub-total2">
                <td class="border-b">Sub Total 2</td>
                <td class="border-b">15750</td>
                <td class="border-b">18900</td>
                <td class="border-b">3150</td>
            </tr>
            `;
      $(".sub-total1").after(html);
   }

});


$('#credit-passed').click(function() {
  if ($(this).is(':checked')) {
        $(".quote-approval-btn").removeClass('bg-gray-100 cursor-not-allowed').removeAttr('disabled');

  }else{
    
       $(".quote-approval-btn").addClass('bg-gray-100 cursor-not-allowed').prop("disabled", true);
  }
});


 function add_material_item(){

   let html = '';
   let rowId = parseInt($(".material-item").last().attr("row"));
   let nextRow = rowId+1;
   html+= `<tr id="material-item-row`+nextRow+`" row="`+nextRow+`" class="intro-x material-item">
                                        <td class="w-40">
                                            <div class="flex">
                                                <select class="input border mr-2">
                                                    <option>Fabric</option>
                                                    <option>Posts</option>
                                                    <option>Gates</option>
                                                    <option>Top Rail</option>
                                                    <option>Other</option>
                                                    <option>Rental</option>
                                                </select>
                                            </div>                                        
                                        </td>
                                        
                                        <td class="w-40">
                                            <div class="flex">
                                                <select class="input border mr-2">
                                                    <option>2" x 9g x 32" Galvanized</option>
                                                    <option>2" x 9g x 42" Galvanized</option>
                                                    <option>2" x 9g x 48" Galvanized</option>
                                                    <option>2" x 9g x 72" Galvanized</option>
                                                    <option>2" x 9g x 84" Galvanized</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td class="text-center"></td>
                                        <td class="text-center"><input type="number" name="quantity" placeholder=""></td>
                                        <td class="text-center"></td>
                                        <td class="table-report__action w-56">
                                            <div class="flex justify-center items-center">
                                              
                                              <a style="background-color:unset;border:unset" class="flex items-center mr-3" onclick="delete_material_item(`+nextRow+`)" href="javascript:;" ><i style="font-size: 20px;
    color: red;" class="fa fa-trash" aria-hidden="true"></i></a>
                                            </div>
                                        </td>
                                    </tr>`;
      $("#material-item-row"+rowId).after(html);
      
 }


 function delete_material_item(rowId){
     $("#material-item-row"+rowId).remove();
 }


 function toogle_material_item(obj){

   if($(obj).hasClass("fa-angle-up")){
      $(obj).removeClass("fa-angle-up");
      $(obj).addClass("fa-angle-down");
      $(".material-item").slideUp();
   }else{
      $(obj).removeClass("fa-angle-down");
      $(obj).addClass("fa-angle-up");
      $(".material-item").slideDown();
   }
 }


//////////////labour

  function add_labour_item(){

   let html = '';
   let rowId = parseInt($(".labour-item").last().attr("row"));
   let nextRow = rowId+1;
   html+= `<tr id="labour-item-row`+nextRow+`" row="`+nextRow+`" class="intro-x labour-item">
                                       <td class="w-40">
                                           <div class="flex">
                                               <select class="input border mr-2">
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
                                       
                                       <td class="text-center"><input type="number" name="quantity" ></td>
                                       <td></td>
                                       <td class="table-report__action w-56">
                                           <div class="flex justify-center items-center">
                                              
                                              <a style="background-color:unset;border:unset" class="flex items-center mr-3" onclick="delete_labour_item(`+nextRow+`)" href="javascript:;" ><i style="font-size: 20px;
    color: red;" class="fa fa-trash" aria-hidden="true"></i></a>
                                            </div>
                                       </td>
                                   </tr>`;
      $("#labour-item-row"+rowId).after(html);
     
 }


 function delete_labour_item(rowId){
     $("#labour-item-row"+rowId).remove();
 }


 function toogle_labour_item(obj){

   if($(obj).hasClass("fa-angle-up")){
      $(obj).removeClass("fa-angle-up");
      $(obj).addClass("fa-angle-down");
      $(".labour-item").slideUp();
   }else{
      $(obj).removeClass("fa-angle-down");
      $(obj).addClass("fa-angle-up");
      $(".labour-item").slideDown();
   }
 }





 //////////////miscellaneous

  function add_miscellaneous_item(){

   let html = '';
   let rowId = parseInt($(".miscellaneous-item").last().attr("row"));
   let nextRow = rowId+1;
   html+= `<tr id="miscellaneous-item-row`+nextRow+`" row="`+nextRow+`" class="intro-x miscellaneous-item">
                                       <td class="w-40 text-center">`+nextRow+`</td>
                                       <td class="text-center"><input type="text" name="unit_price" placeholder="" value=""></td>                                   
                                       
                                       <td class="text-center"><input type="number" name="unit_price" placeholder=""></td>
                                       <td class="text-center"><input type="number" name="quantity" placeholder=""></td>
                                       <td class="text-center"><label></label></td>
                                       <td class="table-report__action w-56">
                                           <div class="flex justify-center items-center">
                                              <a style="background-color:unset;border:unset" class="flex items-center mr-3" onclick="delete_miscellaneous_item(`+nextRow+`)" href="javascript:;" ><i style="font-size: 20px;
    color: red;" class="fa fa-trash" aria-hidden="true"></i></a>
                                            </div>
                                       </td>
                                   </tr>`;
      $("#miscellaneous-item-row"+rowId).after(html);
   
 }


 function delete_miscellaneous_item(rowId){
     $("#miscellaneous-item-row"+rowId).remove();
 }


 function toogle_miscellaneous_item(obj){

   if($(obj).hasClass("fa-angle-up")){
      $(obj).removeClass("fa-angle-up");
      $(obj).addClass("fa-angle-down");
      $(".miscellaneous-item").slideUp();
   }else{
      $(obj).removeClass("fa-angle-down");
      $(obj).addClass("fa-angle-up");
      $(".miscellaneous-item").slideDown();
   }
 }



 //////////////adsOn

  function add_adsOn_item(){

   let html = '';
   let rowId = parseInt($(".adsOn-item").last().attr("row"));
   let nextRow = rowId+1;
   html+= `<tr id="adsOn-item-row`+nextRow+`" row="`+nextRow+`" class="intro-x adsOn-item">
                                       <td class="text-center"><input type="text" name="unit_price" placeholder="" ></td>
                                       <td class="text-center"><input type="number" name="unit_price" placeholder=""></td>
                                       <td class="text-center"><input type="number" name="quantity" placeholder=""></td>
                                       <td class="text-center"><label></label></td>
                                       <td class="table-report__action w-56">
                                           <div class="flex justify-center items-center">
                                               <a style="background-color:unset;border:unset" class="flex items-center mr-3" onclick="delete_adsOn_item(`+nextRow+`)" href="javascript:;" ><i style="font-size: 20px;
    color: red;" class="fa fa-trash" aria-hidden="true"></i></a>
                                           </div>
                                       </td>
                                   </tr>`;
      $("#adsOn-item-row"+rowId).after(html);
   
 }


 function delete_adsOn_item(rowId){
     $("#adsOn-item-row"+rowId).remove();
 }


 function toogle_adsOn_item(obj){

   if($(obj).hasClass("fa-angle-up")){
      $(obj).removeClass("fa-angle-up");
      $(obj).addClass("fa-angle-down");
      $(".adsOn-item").slideUp();
   }else{
      $(obj).removeClass("fa-angle-down");
      $(obj).addClass("fa-angle-up");
      $(".adsOn-item").slideDown();
   }
 }

</script> 