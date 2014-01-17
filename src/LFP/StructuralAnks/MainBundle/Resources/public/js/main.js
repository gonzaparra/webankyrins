/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
    
    /*When page loads, show the corresponding div*/
    if($('#selection').val()==1){
        $("#structures").show();
        $("#chains").hide();
    }
    if($('#selection').val()==2){
        $("#structures").hide();
        $("#chains").show();
    }
    $("#selection").change(function(){
        if($('#selection').val()==1){
            $("#structures").show('fade');
            $("#chains").hide('fade');
        }
        if($('#selection').val()==2){
            $("#structures").hide('fade');
            $("#chains").show('fade');
        }
    });
    $(function() {
        $( "#browser-accordion-structures, #browser-accordion-chains" ).accordion({
            collapsible:true,
            active:false,
            heightStyle: "content",
            activate: function(){
                var pdbId = $(this).find('.ui-accordion-content-active').find('#pdb_image').data('pdbid');
                $(this).find('.ui-accordion-content-active').find('#pdb_image').html('<img src="http://www.rcsb.org/pdb/images/'+pdbId+'_bio_r_500.jpg" width="150px" />');
            }
        });
    });
    
    $(function(){
        $(".nextLink").on("click", function(e){
            var currentActiveImage = $(".image-shown");
            var nextActiveImage = currentActiveImage.next();
            
            currentActiveImage.removeClass("image-shown").addClass("image-hidden").css("z-index", -10);
            nextActiveImage.addClass("image-shown").removeClass("image-hidden").css("z-index", 20);
            
            $(".caroussel-inner img").not([nextActiveImage, currentActiveImage]).css("z-index", 1);
            e.preventDefault();
        });
        
    });
    
    $('.jmol-radius').prop('checked', false);

});


