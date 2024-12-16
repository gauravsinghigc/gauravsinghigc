<?php
include $Dir . "/include/forms/app/CreateNewVendorContracts.php"; ?>
<div class="row">
    <div class="col-md-12">
        <div class="flex-s-b">
            <form class="w-75">
                <input onchange="form.submit()" placeholder="Search Subscription..." oninput="SearchData('VendorContractSearch', 'VendorRecords')" type='search' id='VendorContractSearch' class='form-control'>
            </form>
            <div class="">
                <a href="#" onclick="Databar('CreateVendorContract')" class="btn btn-md btn-danger">
                    <i class="fa fa-plus"></i>
                    Create Subscription
                </a>
            </div>
        </div>
    </div>
</div>