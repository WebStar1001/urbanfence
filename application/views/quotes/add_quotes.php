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
            width:50px;
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
</style>

<div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                <!-- BEGIN: Breadcrumb -->
                <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Urbanfence</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Add Quotes</a> </div>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Account Menu -->
                <?php include(APPPATH."views/inc/account_menu.php")?>
                <!-- END: Account Menu -->
            </div>
                <!-- END: Top Bar -->
                <div class="flex items-center mt-8">
                    <h2 class="intro-y text-lg font-medium mr-auto">
                        Quote Layout
                    </h2>
                </div>
                <!-- BEGIN: Wizard Layout -->
                <div class="intro-y box py-10 sm:py-20 mt-5" >

                    <div class="wizard flex flex-col lg:flex-row justify-center px-5 sm:px-20" id="section_step">
                        <div class="intro-x lg:text-center flex items-center lg:block flex-1 z-10">
                            <button class="w-10 h-10 rounded-full button step">1</button>
                            <div class="lg:w-32 font-medium text-base lg:mt-3 ml-3 lg:mx-auto">Create New Account</div>
                        </div>
                        <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                            <button class="w-10 h-10 rounded-full button step">2</button>
                            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700">Pre Approved Quotes</div>
                        </div>
                        <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                            <button class="w-10 h-10 rounded-full button step">3</button>
                            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700">Final Quotes</div>
                        </div>
                        
                        <div class="wizard__line hidden lg:block w-2/4 bg-gray-200 absolute mt-5" id="steps_line"></div>
                    </div>

                <section id="section_1" class="tab">
                    <!-- qoute info start-->
                    <div class="intro-y grid grid-cols-12 sm:grid-cols-8 p-5 mt-1 md:mt-5 gap-2 box">
                            <div class="col-span-12 sm:col-span-6 md:col-span-4 mb-2 md:mb-0 lg:m-auto">
                                <fieldset class="p-2 sm:p-3 w-4/5 sm:w-3/5 md:w-3/4 lg:w-full ml-2 sm:ml-4 float-left fieldset_bd_color"> 
                                <legend class="legend_spacing">Quote #01</legend>
                                    <p>
                                    Customer Name: Aviad Kriaf <br>
                                    Quote Type: New Fence <br>
                                    Adress: 207 Edgeley Blvd <br>
                                    Payment Terms are:
                                    </p>
                                </fieldset>
                            </div>

                            <div class="col-span-12 sm:col-span-6 md:col-span-4 sm:pl-3 ml-5 lg:m-auto" id="right_info_part">
                                <div class="w-full sm:w-full m-auto mb-2" style="display:flex;">                
                                    <p> Set Quoting Company </p>
                                    <select class="input border mr-2">
                                        <option>Chris Evans</option>
                                        <option>Liam Neeson</option>
                                        <option>Daniel Craig</option>
                                    </select>                               
                                </div>
                                <div class="w-full sm:w-full m-auto mb-2" style="display:flex;">                
                                    <p> Set Payment Terms </p>
                                    <select class="input border mr-2">
                                        <option>Chris Evans</option>
                                        <option>Liam Neeson</option>
                                        <option>Daniel Craig</option>
                                    </select>                               
                                </div>
                                <div class="w-full sm:w-full m-auto" style="display:flex;">
                                        <p classs="">Set Calc Mode <p>
                                        <select class="input border mr-2">
                                            <option>Chris Evans</option>
                                            <option>Liam Neeson</option>
                                            <option>Daniel Craig</option>
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
                                    <tr class="intro-x">
                                        <td class="w-40">
                                            <div class="flex">
                                                <select class="input border mr-2">
                                                    <option>Chris Evans</option>
                                                    <option>Liam Neeson</option>
                                                    <option>Daniel Craig</option>
                                                </select>
                                            </div>                                        
                                        </td>
                                        
                                        <td class="w-40">
                                            <div class="flex">
                                                <select class="input border mr-2">
                                                    <option>Chris Evans</option>
                                                    <option>Liam Neeson</option>
                                                    <option>Daniel Craig</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td class="text-center"><input type="number" name="unit_price" placeholder="00"></td>
                                        <td class="text-center"><input type="number" name="quantity" placeholder="00"></td>
                                        <td class="text-center"><input type="number" name="total" value="2500"></td>
                                        <td class="table-report__action w-56">
                                            <div class="flex justify-center items-center">
                                                <a class="flex items-center mr-3" href="javascript:;" >+</a>
                                                
                                                <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i></a>
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
                    <div class="grid grid-cols-12 gap-6 mt-5" >
                       
                       <!-- BEGIN: labor -->
                       <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                           <table class="table table-report -mt-2 mb-5" id="labor">
                               <thead>
                                   <tr>
                                       <th class="whitespace-no-wrap">Labour desc</th>
                                       <th class="whitespace-no-wrap"># of Man Da</th>
                                       <th class="text-center whitespace-no-wrap">Cost</th>                                   
                                       <th class="text-center whitespace-no-wrap">ACTIONS</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr class="intro-x">
                                       <td class="w-40">
                                           <div class="flex">
                                               <select class="input border mr-2">
                                                   <option>Man Day Set Posts</option>
                                                   <option>Man Day Frame</option>
                                                   <option>Daniel Craig</option>
                                               </select>
                                           </div>                                        
                                       </td>
                                       <td class="text-center"><input type="number" name="unit_price" placeholder="00"></td>
                                       <td class="text-center"><input type="number" name="quantity" value="250"></td>
                                       <td class="table-report__action w-56">
                                           <div class="flex justify-center items-center">
                                               <a class="flex items-center mr-3" href="javascript:;" >+</a>
                                               
                                               <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                  
                               </tbody>
                           </table>
                       </div>
                       <!-- END: labor -->             
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
                                       <th class="whitespace-no-wrap">Misc desc</th>
                                       <th class="whitespace-no-wrap">Misc #</th>
                                       <th class="text-center whitespace-no-wrap">Price per unit</th>
                                       <th class="text-center whitespace-no-wrap">Quantity</th>
                                       <th class="text-center whitespace-no-wrap">Total price</th>
                                       
                                       <th class="text-center whitespace-no-wrap">ACTIONS</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr class="intro-x">
                                       <td class="text-center"><input type="text" name="unit_price" placeholder="Insert MISC item1"></td>                                   
                                       <td class="w-40 text-center"><label>1</label></td>
                                       <td class="text-center"><input type="number" name="unit_price" placeholder="00"></td>
                                       <td class="text-center"><input type="number" name="quantity" placeholder="00"></td>
                                       <td class="text-center"><label>2500</label></td>
                                       <td class="table-report__action w-56">
                                           <div class="flex justify-center items-center">
                                               <a class="flex items-center mr-3" href="javascript:;" >+</a>
                                               <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i></a>
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
                                   <tr class="intro-x">
                                       <td class="text-center"><input type="text" name="unit_price" placeholder="Insert Add-On item"></td>
                                       <td class="text-center"><input type="number" name="unit_price" placeholder="00"></td>
                                       <td class="text-center"><input type="number" name="quantity" placeholder="00"></td>
                                       <td class="text-center"><label>2500</label></td>
                                       <td class="table-report__action w-56">
                                           <div class="flex justify-center items-center">
                                               <a class="flex items-center mr-3" href="javascript:;" >+</a>
                                               <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i></a>
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
                                    <div class="w-full sm:w-2/3 md:w-5/6">
                                        <p class="p-2 fieldset_bd_color" style="width: 80%;">Customer Name: Aviad Kriaf Quote Type: New Fence Adress: 207 Edgeley Blvd Payment Terms are: Net 30 Days</p>                                        
                                    </div>
                                    

                                    <div class="overflow-x-auto">
                                       
                                        <table class="table mt-5" id="final_quote_table">
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
                                                    <td class="border-b">100</td>
                                                    <td class="border-b">100</td>
                                                    <td class="border-b">100</td>
                                                </tr>
                                                <tr>
                                                    <td class="border-b">Labour</td>
                                                    <td class="border-b">400</td>
                                                    <td class="border-b">100</td>
                                                    <td class="border-b">100</td>
                                                </tr>
                                                <tr>
                                                    <td class="border-b">Add-On</td>
                                                    <td class="border-b">700</td>
                                                    <td class="border-b">100</td>
                                                    <td class="border-b">100</td>
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
                                       <input type="checkbox" class="input border mr-2" id="vertical-remember-me">
                                        <label class="cursor-pointer select-none" for="vertical-remember-me" style="width: auto;">Customer passed Credit-Check</label>
                                    </div>
                                    <div class="mt-1 mb-5">
                                        <label class="mr-1">Assign Installer </label>
                                        <select class="input border mr-2">
                                            <option>Choose</option>
                                            <option>Liam Neeson</option>
                                            <option>Daniel Craig</option>
                                        </select>
                                    </div>
                                    <div class="mt-1 mb-5">
                                        <label class="mr-2">Set Calc Mode </label>
                                        <select class="input border mr-2" style="margin-left: 3px;">
                                            <option>Contractor</option>
                                            <option>Liam Neeson</option>
                                            <option>Daniel Craig</option>
                                        </select>
                                    </div>

                                    <div class="mt-1 mb-5" style="text-align-last: end">
                                      <label class="float-left" >Set Markup rate</label>
                                       <input type="radio" class="input border mr-2 float-left" id="horizontal-radio-chris-evans" name="horizontal_radio_button" value="horizontal-radio-chris-evans">
                                        <label class="cursor-pointer select-none float-left" for="horizontal-radio-chris-evans">Total Markup</label>
                                        
                                        <input type="text" class="input border" value="total markup" style="width:15%"><span> %</span>
                                    </div>


                                    <div class="mt-1 mb-5" style="text-align-last: end;">
                                        <label class="cursor-pointer select-none" for="horizontal-radio-chris-evans">
                                       <input type="radio" class="input border mr-2" id="horizontal-radio-chris-evans2" name="horizontal_radio_button" value="horizontal-radio-chris-evans2">
                                        <label class="cursor-pointer select-none mr-2" for="horizontal-radio-chris-evans2">Multiple Markups</label>

                                        <label class="" >Material Markups</label>
                                        <input type="text" class="input border" value="10" style="width:15%"><span> %</span>                                    
                                    </div>


                                    <div class="mt-1 mb-5" style="text-align-last: end;">
                                        <label class="ml-2 mr-5">Labor Markup</label>
                                        <input type="text" class="input border" value="10" style="width:15%"><span> %</span>                                    
                                    </div>


                                    <div class="mt-1 mb-5" style="text-align-last: end;">
                                        <label class="ml-2 mr-5">Misc Markup</label>
                                        <input type="text" class="input border ml-1" value="10" style="width:15%"><span> %</span>                                    
                                    </div>


                                    <div class="mt-1 mb-5" style="text-align-last: end;">
                                        <label class="ml-1 mr-3">Ads-On Markup</label>
                                        <input type="text" class="input border" value="10" style="width:15%"><span> %</span>                                   
                                    </div>
                                    <div class="mt-3">
                                        <label class="">Add Discount</label>
                                        <input type="text" class="input w-25 border col-span-4" value="10"><span> %</span>
                                        
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
                                    <div class="w-full sm:w-2/3 md:w-1/2 mt-2">
                                        <p class="p-2 fieldset_bd_color">Customer Name: Aviad Kriaf Quote Type: New Fence Adress: 207 Edgeley Blvd Payment Terms are: Net 30 Days</p>     
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
                                        <button class="button bg-gray-200 text-gray-600 mr-5" style="float: inherit;">Generate IA</button>
                                        <input type="checkbox" class="input border ml-5 mr-2" id="horizontal-remember-me"><label>IA is signed</label>
                                
                                    </div>
                                    <div class="mt-3">
                                        <button class="button bg-gray-200 text-gray-600" style="float: inherit;">Generate Quote Form</button>
                                        <input type="checkbox" class="input border mr-2" id="horizontal-remember-me"><label>Quote Form is signed</label>
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
                                                    <td class="border-b">100</td>
                                                </tr>
                                                <tr>
                                                    
                                                    <td class="border-b">Labour</td>
                                                    <td class="border-b">400</td>
                                                </tr>
                                                <tr>
                                                    
                                                    <td class="border-b">Add-On</td>
                                                    <td class="border-b">700</td>
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

            
<script>
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
    document.getElementById("nextBtn").innerHTML = "Create Job"
    document.getElementById("nextBtn").setAttribute("onclick", "window.location='<?php echo base_url()?>Jobs/job_detail'");

  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
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
</script> 