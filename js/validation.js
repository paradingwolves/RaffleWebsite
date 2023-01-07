$(document).ready( function() {
    'use strict'

    
    $("#DOBwarning").hide();
    $('.alert').hide(); 
    let audio = document.getElementById('duck'); 
    let audio2 = document.getElementById('bat'); 
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', function(event) {
        let input = document.querySelector('#birthdate');
        let dobString = input.value;
        let dob = new Date(dobString);
        const currentTimestamp = Date.now();
        const ageInMilliseconds = currentTimestamp - dob.getTime();
        const ageInYears = ageInMilliseconds / (1000 * 60 * 60 * 24 * 365.29);
        
        event.stopPropagation()
        if (form.checkValidity() && ageInYears >= 19) {    
            console.log("valid");
            audio2.play();
            form.classList.add('was-validated');
            $(".alert").hide();
            $("#DOBwarning").hide();
            $(".modal").show();
            $("html").css("overflow-y", "hidden");
            /* event.preventDefault() */
          }
        else if(form.checkValidity() && ageInYears < 19) {
            console.log('User is younger than 19 years');
            form.classList.remove('was-validated');
            $("#DOBwarning").show();
            $('.alert').show();       
            audio.play();
            console.log("nah"); 
            event.preventDefault()
        }
        else {
          /* Add alert if invalid submission */
            $('.alert').show();       
            audio.play();
            console.log("nah");
            event.preventDefault()
        } 
      },false)
    });
    $('.btn-close').on('click', function(){
        $('.alert').hide();
    });
});