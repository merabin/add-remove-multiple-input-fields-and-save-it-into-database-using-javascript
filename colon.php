     
   <form   method="post" action = "democolonvalidate.php" id = "form_id" >

        <div class="field_wrapper">
    <div>
        
        college : <select id="pselcol" name="pselcol" >
            <option value="">Please select  a College</option>
            <option value="KU">kathmandu University</option>
            <option value="kc">khwopo college</option>
            <option value="nt">Nist</option>
            <option value="st">St.xabier</option>
        </select>
        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="add-icon.png"/></a>
    </div>
            <input type="submit" name="submit" value="continue" id = "submit"><br>

</div>
       
</form>


$(document).ready(function(){
    var maxField = 2; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML1 = '<div> college : <select id="pselcol1" name="pselcol1" ><option value="">Please select  a College</option><option value="KU">kathmandu University</option> <option value="kc">khwopo college</option> <option value="nt">Nist</option> <option value="st">St.xabier</option></select> <a href="javascript:void(0);" class="remove_button" title="Remove "><img src="add-icon.png"/></a> </div>';
     var fieldHTML2 = '<div> college : <select id="pselcol2" name="pselcol2" ><option value="">Please select  a College</option><option value="KU">kathmandu University</option> <option value="kc">khwopo college</option> <option value="nt">Nist</option> <option value="st">St.xabier</option></select> <a href="javascript:void(0);" class="remove_button" title="Remove "><img src="add-icon.png"/></a> </div>';
      var fieldHTML3 = '<div> college : <select id="pselcol3" name="pselcol3" ><option value="">Please select  a College</option><option value="KU">kathmandu University</option> <option value="kc">khwopo college</option> <option value="nt">Nist</option> <option value="st">St.xabier</option></select> <a href="javascript:void(0);" class="remove_button" title="Remove "><img src="add-icon.png"/></a> </div>';
        var x = 1; //Initial field counter is 1
        
    $(addButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
          x++;
      
          $(wrapper).append(fieldHTML1); 
         $(wrapper).append(fieldHTML2);
         $(wrapper).append(fieldHTML3);                  
          
      
      }
    });
    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
