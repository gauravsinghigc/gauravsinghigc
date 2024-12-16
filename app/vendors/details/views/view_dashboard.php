 <div class='row mt-2'>
     <?php include __DIR__ . "/sections/VendorDashboardTopMenus.php"; ?>
 </div>

 <?php include __DIR__ . "/vendor_dashboards/$SelectedDashView.php"; ?>
 <script>
     //make $dash_view selected which is id or a html tag, its trigger on window load
     document.getElementById('<?php echo $SelectedDashView; ?>').classList.remove('btn-default');
     document.getElementById('<?php echo $SelectedDashView; ?>').classList.add('btn-dark');
 </script>