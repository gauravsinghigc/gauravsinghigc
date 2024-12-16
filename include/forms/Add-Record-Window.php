<section class="pop-section hidden" id="AddRecordWindow">
    <div class="action-window">
        <div class='container'>
            <div class="row mt-3">
                <div class="col-md-12 text-center mb-3">
                    <div class="w-75 d-block mx-auto">
                        <form class="p-1">
                            <input type="search" class='form-control form-control-xl' placeholder="Search Add Options..." name="search" id='AddWindowBtnSearch' oninput="SearchData('AddWindowBtnSearch', 'AddOptionsSearch')">
                        </form>
                    </div>
                    <a onclick="Databar('AddRecordWindow')" class="btn closebtn btn-md btn-danger ml-1"><i class="fa fa-times fs-25"></i></a>
                </div>
                <?php
                foreach (ADD_WINDOW_OPTIONS as $AddOptions => $More) { ?>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center AddOptionsSearch">
                        <a href="<?php echo $More['url']; ?>">
                            <div class="card p-2">
                                <div class="plus"><i class="fa fa-plus"></i></div>
                                <h1 class="mt-2 mb-0"><i class="fa fa-<?php echo $More['icon']; ?>"></i></h1>
                                <h5><?php echo $More['title']; ?></h5>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>