$(document).ready(function() {
    
    function clearForm(form) {
        form.find('input:text, input:password, input:file, select, textarea, #filter_form_nchains').val('');
        form.find('input:radio, input:checkbox').removeAttr('checked').removeAttr('selected');
    }
    
    $('.clear-form-button').click(function(event) {
        event.preventDefault();
        clearForm($(this).closest('form'));
    });
    
});