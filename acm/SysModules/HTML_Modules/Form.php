<?php
//no data found View
function NoData($title, $desc = null)
{
        $return  = '<div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-4">
        <h4 class="bold mt-3">' . $title . '</h4>
        <p>
                <?php echo $desc; ?>
        </p>
        </div>';

        return $return;
}

//upload image with preview
function UploadImageInput($name, $id, $filetypes, $required = true, $class, $value = null)
{
        if ($required == true) {
                $req = "required=''";
        } else {
                $req = "";
        } ?>
        <div class="form-group <?php echo $class; ?>">
                <label>Upload Image</label>
                <input type="FILE" name="<?php echo $name; ?>" value="<?php echo $value; ?>" id="<?php echo $id; ?>" <?php echo $req; ?> accept="<?php echo $filetypes; ?>" class="form-control-2" />
        </div>
        <div class="col-md-12">
                <div class="flex-c mb-2-pr">
                        <img src="" id="<?php echo $id; ?>_img" class="imgrpreview">
                </div>
        </div>
        <script>
                <?php echo $id; ?>.onchange = evt => {
                        const [file] = <?php echo $id; ?>.files
                        if (file) {
                                <?php echo $id; ?>_img.src = URL.createObjectURL(file);
                        }
                }
        </script>
        <?php }

function InputOptions($data, $default = null)
{
        $RegOptions = $data;
        $Count = 0;
        foreach ($RegOptions as $key => $options) {
                if ($options == $default) {
                        $selected = "selected=''";
                } else {
                        $selected = "";
                }
        ?>
                <option value="<?php echo $options; ?>" <?php echo $selected; ?>><?php echo $options; ?></option>
        <?php }
}

function InputOptionsWithKey($data, $default = null)
{
        $RegOptions = $data;
        $Count = 0;
        $results = "";
        foreach ($RegOptions as $key => $options) {
                if ($key == $default) {
                        $selected = "selected";
                } else {
                        $selected = "";
                }

                $results .=   '<option value="' . $key . '" ' . $selected . '>' . $options . '</option>';
        }
        return $results;
}

//textarea
function TEXTAREA($label, $name, $value, $req = "true", $rows, $class)
{
        if ($req == "true") {
                $required = "required=''";
                $req_txt = '<span class="text-danger">*</span>';
        } else {
                $required = "";
                $req_txt = "";
        } ?>
        <div class="form-group <?php echo $class; ?>">
                <label><?php echo $label; ?> <?php echo $req_txt; ?></label>
                <textarea style="height:100% !important;" name="<?php echo $name; ?>" value="<?php echo $value; ?>" rows="<?php echo $rows; ?>" class="form-control" <?php echo $required; ?>><?php echo $value; ?></textarea>
        </div>
<?php
}
