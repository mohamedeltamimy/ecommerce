<?php
include './page/header.php';

if($_GET){
    $uel = "./page/".$_GET['p'].".php";
    if(is_file($uel)){
        include $uel;
    }  else {
        echo 'ERROR : the page not found';    
    }
}  else {
    include "./page/dashboard.php";
}

include './page/footer.php';?>
<script>/*
			jQuery(document).ready(function() {
				Main.init();
				SVExamples.init();
				FormElements.init();
                                FormWizard.init();
                                UIModals.init();
                                FormValidator.init();
                                PagesGallery.init();
                                Calendar.init();
                          
			});
                        
                   function getdatex(projstart,projend)
                   {
                        $('#datepicfrom').datepicker({
                         format: 'yyyy-mm-dd',
                        startDate: projstart,
                        endDate: projend
                    });
                       
                       
                        $('#datepicto').datepicker({
                         format: 'yyyy-mm-dd',
                        startDate: projstart,
                        endDate: projend
                    });
                   }
                   
                   function getdatemile(projstart1,projend1)
                   {
                        $('#milestonedatefromupdate').datepicker({
                         format: 'yyyy-mm-dd',
                        startDate: projstart1,
                        endDate: projend1
                    });
                       
                       
                        $('#milestonedatetoupdate').datepicker({
                         format: 'yyyy-mm-dd',
                        startDate: projstart1,
                        endDate: projend1
                    });
                   }
                */
    </script>
 