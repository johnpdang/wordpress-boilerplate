<form action="">
    <?php 
        foreach($form_arr as $label){
            $formattedLabel = convert_string_to_slug($label);
            $html = '
                <div class="form-group">
                    <label for="' . $formattedLabel . '">'. $label .'</label>
                    <input name="'. $formattedLabel . '" type="text" placeholder="'. $label .'" />      
                </div>     
            ';
            echo $html;
        }
    ?>
    
    <button class="btn btn-primary" type="submit">Submit</button>
</form>