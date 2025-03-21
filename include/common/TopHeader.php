<div class="main-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-s-b">
                    <div class='w-pr-30'>
                        <div class="header-logo">
                            <a href="<?php echo APP_URL; ?>">
                                <img src="<?php echo APP_LOGO; ?>" title='<?php echo APP_NAME; ?>' class="img-fluid rounded" alt="<?php echo APP_NAME; ?>">
                                <span class="title"><?php echo APP_NAME; ?></span>
                            </a>
                        </div>
                    </div>
                    <div class="w-pr-40">
                        <form class="p-1">
                            <input type="search" class='form-control form-control-lg' placeholder="Search anything..." name="search" id='SearchIn' oninput="SearchData('SearchIn', 'RecordsList')">
                        </form>
                    </div>
                    <div class="w-pr-45">
                        <div class="Header-Menus">
                            <a onclick="Databar('AddRecordWindow')" class="btn-danger text-white"><i class="fa fa-plus"></i></a>
                            <a href=""><i class="fa fa-bell"></i> <span class="count">10</span></a>
                            <a href=""><i class="fa fa-envelope"></i></a>
                            <a href=""><i class="fa fa-globe"></i></a>
                            <a href=""><i class="fa fa-refresh"></i> </a>
                            <a href=""><i class="fa fa-tasks"></i></a>
                            <a href=""><i class="fa fa-inr"></i></a>
                        </div>
                    </div>
                    <div class="w-pr-20">
                        <div class="Header-Menus">
                            <form>
                                <select onchange='form.submit()' class="form-control form-control-md" name='view_finanical_year'>
                                    <option value="">All Years</option>
                                    <?php
                                    $FinancialYearSQL = SET_SQL("SELECT cfy_id, cfy_name FROM config_finanical_years ORDER BY cfy_id DESC", true);
                                    if ($FinancialYearSQL != null) {
                                        foreach ($FinancialYearSQL as $FYData) {
                                            $SelectedYear = CheckEquality($FYData->cfy_id, ACTIVE_FINANCIAL_YEAR, "selected"); ?>
                                            <option value="<?php echo $FYData->cfy_id; ?>" <?php echo $SelectedYear; ?>><?php echo $FYData->cfy_name; ?></option>
                                    <?php }
                                    } ?>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="w-pr-35">
                        <div class="Header-Menus">
                            <form>
                                <select onchange='form.submit()' class="form-control form-control-md" name='selected_default_company'>
                                    <option value="">All Companies</option>
                                    <?php
                                    $CompanySQL = SET_SQL("SELECT cfy_id FROM config_finanical_years ORDER BY cfy_id DESC", true);
                                    if ($CompanySQL != null) {
                                        foreach ($CompanySQL as $ViewCompany) {
                                            $SelectedCompany = CheckEquality($ViewCompany->cfy_id, SELECTED_COMPANY_ID, "selected"); ?>
                                            <option value="<?php echo $ViewCompany->cfy_id; ?>" <?php echo $SelectedCompany; ?>>RSOR TECHNOLOGY PVT LTD</option>
                                    <?php }
                                    } ?>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="w-pr-30">
                        <div class="header-profile">
                            <a href="<?php echo APP_URL; ?>/profile">
                                <img src="<?php echo AuthAppUser("UserProfileImage"); ?>" title='<?php echo LOGIN_UserFullName; ?>' class="img-fluid rounded" alt="<?php echo LOGIN_UserFullName; ?>">
                                <span class="title"><?php echo LOGIN_UserFullName; ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>