$( document ).ready(function() {
    page.init();
    
});
var courseToken = "";

const page = {
    init: function(){
        $("#sortable").sortable({
                placeholder: "ui-state-highlight"  // Adds a placeholder while dragging
        });
        this.formInitiate();
        $("#school_name").on("keyup",function(){
        	var value = $(this).val();
        	value = value.replaceAll(" ","_").toLowerCase();
        	$("#url").val(value);																					
        })
        $(".required-check").on("change",function(){
          if($(this).is(":checked")){
               $(this).parents(".form-check").find(".added-check").prop("checked",true);
          }																					
       })
       
    },
    formInitiate: function(){
    	let that = this;
    	$("#create_form").validate({
                rules: {
                    type_of_waste: {
                        required: true
                    },
                    qty_vol: {
                        required: true
                    },
                    pickup_date: {
                        required: true
                    },
                    time_slot: {
                        required: true
                    },
                    location :{
                    	 required: true
                    },
                    image :{
                       required: true
                    },  
                    waste_description: {
                    required: true,
                    minlength: 0,
                    maxlength: 1000
                    }
                },
                messages: {
                    type_of_waste: {
                        required: "Please select type of waste."
                    },
                    qty_vol: {
                        required: "Please select quantity / volume."
                    },
                    pickup_date: {
                        required: "Please enter pickup date."
                    },
                    time_slot: {
                        required: "Please enter pickup time slot."
                    },
                    location: {
                        required: "Please enter pickup location."
                    },
                    image :{
                       required: "Please select pickup location image."
                    },
                    waste_description : {
                        required: "Please enter waste description.",
                        minlength: "Please enter waste description more than 0 character.",
                       maxlength: "Please enter waste description less than or equal to 1000 character.",
                    }
                },
                errorPlacement: function(error, element) {
                    if (element.is(":radio")) {
                        // Place the error message under the radio buttons
                        error.insertAfter(element.closest('.radio-box'));
                    }else if (element.hasClass("textarea")) {
                      // Place the error message under the radio buttons
                      error.insertAfter("#the-count");
                    }else if (element.hasClass("textarea1")) {
                      // Place the error message under the radio buttons
                      error.insertAfter("#the-count1");
                  }else if (element.hasClass("autocomplete")) {
                        // Place the error message under the radio buttons
                        error.insertAfter(element.closest('.autocomplete-box'));
                    } else {
                        error.insertAfter(element);
                    }
                },
                submitHandler: function(form,event) {
                	event.preventDefault();
                	var formdata = new FormData(form);
                    $.ajax({
                        url: "citizen/citizen/addUpdateGarbagePickupRequest",
                        data:formdata,
                        processData:false,
                        contentType:false,
                        cache:false,
                        type:"post",
                        success: function(result){
                            var data = JSON.parse(result);
                            if (data.success == 1) {
                                toaster("success",data.messages);
                                setTimeout(function () {
                                window.location.href = base_url+"garbage_pickup_request";
                            }, 2000);
                            }else{
                            toaster("error",data.messages);
                            }

                        }
                    });
					
					return false;
                    // // Optional: form submission logic, if validation is successful
                    // alert('Form is valid! Submitting...');
                    // form.submit();
                }
            });
    	$(".add_group,.update_group").submit(function(e){
	        e.preventDefault();
	        var href = $(this).attr("action");
	        var id = $(this).attr("id");
	        let flag = that.formValidate(id);
	        if(flag){
	          return;
	        }
	        var formData = new FormData($('.'+id)[0]);
	        $.ajax({
	          type: "POST",
	          url: href,
	          data: formData,
	          processData: false,
	          contentType: false,
	          success: function (response) {
	            var responseObject = JSON.parse(response);
	            var msg = responseObject.messages;
	            var success = responseObject.success;
	            if (success == 1) {
                toaster("success",msg);
	              $(this).parents(".modal").modal("hide")
	              setTimeout(function(){
	                window.location.reload();
	              },1000);

	            } else {
                toaster("error",msg);
	            }
	          },
	          error: function (error) {
	            console.error("Error:", error);
	          },
	        });
	      });
    },
    formValidate: function(form_class = ''){
        let flag = false;
        $(".custom-form."+form_class+" .required-input").each(function( index ) {
          var value = $(this).val();
          var dataMax = parseFloat($(this).attr('data-max'));
          var dataMin = parseFloat($(this).attr('data-min'));
          if(value == ''){
            flag = true;
            var label = $(this).parents(".form-group").find("label").contents().filter(function() {
              return this.nodeType === 3; // Filter out non-text nodes (nodeType 3 is Text node)
            }).text().trim();
            var exit_ele = $(this).parents(".form-group").find("label.error");
            if(exit_ele.length == 0){
              var start ="Please enter ";
              if($(this).prop("localName") == "select"){
                var start ="Please select ";
              }
              label = ((label.toLowerCase()).replace("enter", "")).replace("select", "");
              var validation_message = start+(label.toLowerCase()).replace(/[^\w\s*]/gi, '');
              var label_html = "<label class='error'>"+validation_message+"</label>";
              $(this).parents(".form-group").append(label_html)
            }
          }
          else if(dataMin !== undefined && dataMin > value){
            flag = true;
            var label = $(this).parents(".form-group").find("label").contents().filter(function() {
              return this.nodeType === 3; // Filter out non-text nodes (nodeType 3 is Text node)
            }).text().trim();
            var exit_ele = $(this).parents(".form-group").find("label.error");
            if(exit_ele.length == 0){
              var end =" must be greater than or equal to "+dataMin;
              label = ((label.toLowerCase()).replace("enter", "")).replace("select", "");
              label = (label.toLowerCase()).replace(/[^\w\s*]/gi, '');
              label = label.charAt(0).toUpperCase() + label.slice(1);
              var validation_message =label +end;
              var label_html = "<label class='error'>"+validation_message+"</label>";
              $(this).parents(".form-group").append(label_html)
            }
            }else if(dataMax !== undefined && dataMax < value){
              flag = true;
              var label = $(this).parents(".form-group").find("label").contents().filter(function() {
                return this.nodeType === 3; // Filter out non-text nodes (nodeType 3 is Text node)
              }).text().trim();
              var exit_ele = $(this).parents(".form-group").find("label.error");
              if(exit_ele.length == 0){
                var end =" must be less than or equal to "+dataMax;
                label = ((label.toLowerCase()).replace("enter", "")).replace("select", "");
                label = (label.toLowerCase()).replace(/[^\w\s*]/gi, '');
                label = label.charAt(0).toUpperCase() + label.slice(1)
                var validation_message =label +end;
                var label_html = "<label class='error'>"+validation_message+"</label>";
                $(this).parents(".form-group").append(label_html)
              }
          }
        });
       
        return flag;
    },
    initTokenInput: function(){

        /* course token */
          courseToken = $('#courseToken').tokenfield({
                autocomplete: {
                    source: ['Pre-Nursery', 'Nursery', 'UKG', 'LKG', 'KG-1', 'KG-2', '1st', '2nd', '3rd', '4th', '5th', '6th', '7th', '8th', '9th', '10th', '11th', '12th'],
                    delay: 100, // Delay before suggestions show up (in milliseconds)
                    minLength: 0 // Minimum number of characters to trigger autocomplete
                },
                showAutocompleteOnFocus: true, // Show autocomplete when focused
                delimiter: ',' // Use comma as delimiter between tokens
            });

            // Prevent token duplication on selection
            $(document).on('tokenfield:createtoken','#courseToken', function(event) {
                var existingTokens = $('#courseToken').tokenfield('getTokens');
                var newToken = event.attrs.value;
                if(existingTokens.some != undefined){
                  // Check if the token already exists in the field
                  var isDuplicate = existingTokens.some(function(token) {
                      return token.value === newToken;
                  });
                }

                if (isDuplicate) {
                    event.preventDefault(); // Prevent token creation if duplicate
                } else {
                    console.log("Token Created: ", newToken);
                }
            });

            // Open the dropdown manually when the field gets focus
            $(document).on('focus,click,mouseover','#courseToken', function() {
                $(this).tokenfield('autocomplete').search(''); // Trigger autocomplete to show all options
            });


            $('input[name="form_heder_type"]').change(function() {
                var selectedValue = $(this).val();
                var newSource = [];
                $('#courseToken').tokenfield('setTokens', []);
                // Change source based on selected radio button
                $(".course-row-box .form-label").html('Course<span class="text-danger ms-1">*</span>');
                if (selectedValue === 'school') {
                  $(".course-row-box .form-label").html('Class<span class="text-danger ms-1">*</span>');
                  $(".section-box").show();
                    newSource = ['Pre-Nursery', 'Nursery', 'UKG', 'LKG', 'KG-1', 'KG-2', '1st', '2nd', '3rd', '4th', '5th', '6th', '7th', '8th', '9th', '10th', '11th', '12th'];  // Source for 'Collage'
                } else if (selectedValue === 'collage') {
                  $(".section-box").hide();
                    newSource = ['B.A. 1st Year', 'B.Com. 1st Year', 'B.Sc. 1st Year'];  // Source for 'School'
                }

                // Destroy the current Tokenfield instance and reinitialize with the new source
                $('#courseToken').tokenfield('destroy');
                $('#courseToken').tokenfield({
                    autocomplete: {
                        source: newSource,
                        delay: 100,
                        minLength: 0
                    },
                    showAutocompleteOnFocus: true,
                    delimiter: ','
                });

            });

          /* section token */
            $('#sectionToken').tokenfield({
                autocomplete: {
                    source: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M'],
                    delay: 100, // Delay before suggestions show up (in milliseconds)
                    minLength: 0 // Minimum number of characters to trigger autocomplete
                },
                showAutocompleteOnFocus: true, // Show autocomplete when focused
                delimiter: ',' // Use comma as delimiter between tokens
            });

            // Prevent token duplication on selection
            $('#sectionToken').on('tokenfield:createtoken', function(event) {
                var existingTokens = $('#sectionToken').tokenfield('getTokens');
                var newToken = event.attrs.value;

                // Check if the token already exists in the field
                var isDuplicate = existingTokens.some(function(token) {
                    return token.value === newToken;
                });

                if (isDuplicate) {
                    event.preventDefault(); // Prevent token creation if duplicate
                } else {
                    console.log("Token Created: ", newToken);
                }
            });

            // Open the dropdown manually when the field gets focus
            $('#sectionToken').on('focus,click,mouseover', function() {
                $(this).tokenfield('autocomplete').search(''); // Trigger autocomplete to show all options
            });

            /* class token */
            $('#houseToken').tokenfield({
                autocomplete: {
                    source: [],
                    delay: 100, // Delay before suggestions show up (in milliseconds)
                    minLength: 0 // Minimum number of characters to trigger autocomplete
                },
                showAutocompleteOnFocus: true, // Show autocomplete when focused
                delimiter: ',' // Use comma as delimiter between tokens
            });

            // Prevent token duplication on selection
            $('#houseToken').on('tokenfield:createtoken', function(event) {
                var existingTokens = $('#houseToken').tokenfield('getTokens');
                var newToken = event.attrs.value;

                // Check if the token already exists in the field
                var isDuplicate = existingTokens.some(function(token) {
                    return token.value === newToken;
                });

                if (isDuplicate) {
                    event.preventDefault(); // Prevent token creation if duplicate
                } else {
                    console.log("Token Created: ", newToken);
                }
            });

            // Open the dropdown manually when the field gets focus
            $('#sectionToken').on('focus,click,mouseover', function() {
                $(this).tokenfield('autocomplete').search(''); // Trigger autocomplete to show all options
            });
    }
    
}


