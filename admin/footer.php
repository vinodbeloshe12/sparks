<script type='text/javascript'>

	$.fn.loadfns( function() { // PUT FUNCTIONS TO BE EXECUTED ON DOCUMENT READY HERE
	});
    
    $('#age-inp').spinner({ min: 16, max: 99 });
    $('#sample-form').validate();

    $('#wiz-inst').click( function() {
        var par = $(this).parents('#overview');
            pbar = par.find('#wiz-prog-ind');
            pbarInd = pbar.siblings('span');
            modMsg = par.find('#wiz-prog-msg');
        setTimeout( function() { pbar.css('width','10%'); pbarInd.text('10%') }, 400);
        setTimeout( function() { pbar.css('width','33%'); pbarInd.text('33%') }, 2000);
        setTimeout( function() { pbar.css('width','60%'); pbarInd.text('60%') }, 4000);
        setTimeout( function() { pbar.css('width','82%'); pbarInd.text('82%') }, 7000);
        setTimeout( function() { pbar.css('width','100%'); pbarInd.text('100%');
            modMsg.html('<span class="icon icon-ok txt-green"></span>All done! Installation completed successfully.') }, 12000);
    });

    $('#decimal').spinner({ step: 0.1101001101010011, numberFormat: "n" });
    $('#datepicker').datepicker();
    tinymce.init({
        selector: "#wysiwyg",
        plugins: [
            "autolink lists link image charmap print preview anchor",
            "searchreplace code",
            "insertdatetime media table contextmenu paste"
        ],
        toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | link image"
    });

    </script>
	<!--<p style="bottom:0px;  position:absolute;"><center>Copyright @ 2014 Sparks Designs Solutions By Technfox</center></p>-->
</body>
</html>