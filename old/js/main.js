$(document).ready(function() {

	$('.fancybox').fancybox();

	$('#steps').rhinoslider({
		controlsMousewheel: false,
		controlsKeyboard: true,
		controlsPlayPause: false,
		showControls: false,
		prevText: 'Back',
		showBullets: 'always',
		slidePrevDirection: 'toRight',
		slideNextDirection: 'toLeft'
	});

    $('#tax_debt').change( function() {
        sel_val=document.getElementById('tax_debt').value;
        
        if(sel_val=="Less Than $8,000" || sel_val=="Unsure How Much")
        {
        	var x="I'm sorry, we can only help taxpayers who owe at least $8,000 in tax debt. If you are unsure how much you owe, please contact the IRS directly.";
        	document.getElementById('ttl').innerHTML=x;
        	return false;
        }
    
        div_id="tax_debt";
    	buttonclick(sel_val,div_id);
    });

    $('#tax_issue').change( function() {
        sel_val=document.getElementById('tax_issue').value;
        //alert(sel_val);
        div_id="tax_issue";
        	buttonclick(sel_val,div_id);
    });

    $('#state').change( function() {
        sel_val=document.getElementById('state').value;
        //alert(sel_val);
        div_id="state";
    	buttonclick(sel_val,div_id);
    });
});

function buttonclick(th,div_id){
	if(th!=""){
		$('.rhino-next').trigger('click');
	}
	if(div_id=="state"){
		//$('#hed').css('visibility','hidden')
		$('#hed').hide();
	}
}
