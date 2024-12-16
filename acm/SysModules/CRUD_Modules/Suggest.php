<?php
//Suggestion List
function SUGGEST($table = "false", $column, $order, $enc = null)
{
   if ($table != "false") {
      $CHECK_project_tags = CHECK("SELECT $column FROM $table");
      if ($CHECK_project_tags != 0) {
         echo "<datalist id='$column'>";
         $SQL_project_tags = SELECT("SELECT $column FROM $table GROUP by $column ORDER BY $column $order");
         while ($FetchTags = mysqli_fetch_array($SQL_project_tags)) {
            if ($enc == null) {
               echo "<option value='" . $FetchTags["$column"] . "'>";
            } else { ?>
               <option value='<?php echo SECURE($FetchTags["$column"], "$enc"); ?>'></option>
<?php }
         }
         echo "</datalist>";
      }
   }
}

function SQL_SUGGEST($table = "false", $column)
{
   if ($table != "false") {
      $CHECK_project_tags = CHECK("$table");
      if ($CHECK_project_tags != 0) {
         echo "<datalist id='$column'>";
         $SQL_project_tags = SELECT("$table");
         while ($FetchTags = mysqli_fetch_array($SQL_project_tags)) {
            echo "<option value='" . $FetchTags["$column"] . "'>";
         }
         echo "</datalist>";
      }
   }
}
