 <div class="shadow-sm p-2 b-r-1 bg-white text-left">
     <div class="detail-dashboard">
         <img src="<?php echo STORAGE_URL; ?>/vendor/dp/<?php echo FETCH($VendorSQL, "vendor_logo"); ?>">
     </div>
     <div class="pl-2 dashboard">
         <h5 class="mt-1 bold font-weight-bold mb-0"><?php echo FETCH($VendorSQL, "vendor_name"); ?></h5>
         <h6 class="mb-1 mb-0"><?php echo FETCH($VendorSQL, "vendor_biz_name"); ?></h6>
         <h6 class="mb-2 text-muted font-italic"><?php echo ReplaceSpecialCharacters(VendorTypeDetails($REQ_VendorId, "vendor_type_name"), "_"); ?></h6>
         <h6>
             <span class="rating-box">
                 <i class="fa fa-star text-warning"></i>
                 <i class="fa fa-star text-warning"></i>
                 <i class="fa fa-star text-warning"></i>
                 <i class="fa fa-star text-warning"></i>
                 <i class="fa fa-star text-warning"></i>
                 <span class="small">(<?php echo TOTAL($VendorReviewSQL); ?>) Reviews</span>
             </span>
         </h6>
         <a href="tel:<?php echo FETCH($VendorSQL, "vendor_phone_code"); ?><?php echo FETCH($VendorSQL, "vendor_phone"); ?>">
             <i class="fa fa-phone text-success"></i>
             <?php echo FETCH($VendorSQL, "vendor_phone_code"); ?>
             <?php echo FETCH($VendorSQL, "vendor_phone"); ?>
         </a><br>
         <a href="mailto:<?php echo FETCH($VendorSQL, "vendor_email"); ?>">
             <i class="fa fa-envelope text-danger"></i>
             <?php echo FETCH($VendorSQL, "vendor_email"); ?>
         </a>
         <hr>
         <?php
            $GetVendorAddress = SET_SQL($VendorAddressSQL, true);
            if ($GetVendorAddress != null) {
                foreach ($GetVendorAddress as $Address) { ?>
                 <p class="mb-1">
                     <i class="fa fa-map-marker text-success"></i>
                     <span class="text-primary"><?php echo $Address->vendor_address_type; ?> : </span><br>
                     <?php echo $Address->vendor_address; ?>, <?php echo $Address->vendor_area_locality; ?>,
                     <?php echo $Address->vendor_city; ?>, <?php echo $Address->vendor_state; ?>,
                     <?php echo $Address->vendor_country; ?>,
                     <?php echo $Address->vendor_pincode; ?><br>
                     <b>GST NO :</b> <?php echo $Address->vendor_address_gst_no; ?>
                 </p>
         <?php }
            } else {
                echo "<p class='text-muted'>No available addresses found.</p>";
            } ?>
         <hr>
         <?php
            $GetAllUserls = SET_SQL($VendorURLSQL, true);
            if ($GetAllUserls != null) {
                foreach ($GetAllUserls as $URL) { ?>
                 <a href="<?php echo $URL->vendor_url; ?>" target="_blank">
                     <span class="text-primary small"><?php echo $URL->vendor_url_name; ?> : </span><br>
                     <?php echo $URL->vendor_url; ?>
                 </a><br>
         <?php  }
            } ?>
         <hr>
         <?php
            $GetOtherContactDetails = SET_SQL($VendorOtherContactsSQL, true);
            if ($GetOtherContactDetails != null) {
                echo "<h6>Other Contact Details</h6>";
                foreach ($GetOtherContactDetails as $Contact) { ?>
                 <p class="mb-1">
                     <i class="fa fa-angle-right"></i>
                     <span class="fs-12"><?php echo $Contact->vcp_contact_info; ?></span>
                     <span class="text-primary small font-italic"><?php echo $Contact->vcp_full_name; ?> </span>
                 </p>
         <?php }
            } ?>
     </div>
 </div>