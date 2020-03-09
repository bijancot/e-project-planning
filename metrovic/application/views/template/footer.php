<footer class="footer">
                © 2018 Macrotech Metrovic Admin Dashboard
            </footer>
            
            <!-- End footer -->
            
        </div>
        
        <!-- End Page wrapper  -->




</div>
<!-- End Wrapper -->
 <!-- All Jquery -->
    
 <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url() ?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url() ?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url() ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/custom.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
    
    <!-- This page plugins -->
    
    <!-- chartist chart -->
    <script src="<?php echo base_url() ?>assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/echarts/echarts-all.js"></script>
    
    <!-- Vector map JavaScript -->
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Calendar JavaScript -->
    <script src="<?php echo base_url() ?>assets/plugins/moment/moment.js"></script>
    <script src='<?php echo base_url() ?>assets/plugins/calendar/dist/fullcalendar.min.js'></script>
    <script src="<?php echo base_url() ?>assets/plugins/calendar/dist/jquery.fullcalendar.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/calendar/dist/cal-init.js"></script>
    
    <!-- sparkline chart -->
    <script src="<?php echo base_url() ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/dashboard4.js"></script>

    <!-- Sweet-Alert  -->
    <script src="<?php echo base_url() ?>assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>
    
    <!-- toast notification CSS -->
    <script src="<?php echo base_url() ?>assets/plugins/toast-master/js/jquery.toast.js"></script>
    <script src="<?php echo base_url() ?>assets/js/toastr.js"></script>

    <!-- google maps api -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCUBL-6KdclGJ2a_UpmB2LXvq7VOcPT7K4&amp;sensor=true"></script>
    <script src="<?php echo base_url() ?>assets/plugins/gmaps/gmaps.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/gmaps/jquery.gmaps.js"></script>

    <!-- Vector map JavaScript -->
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jvectormap.custom.js"></script>

    <!--Morris JavaScript -->
    <script src="<?php echo base_url() ?>assets/plugins/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/morrisjs/morris.js"></script>
    <script src="<?php echo base_url() ?>assets/js/morris-data.js"></script>
    <!-- Chart JS -->
    
    <script src="<?php echo base_url() ?>assets/plugins/Chart.js/chartjs.init.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/Chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

    <!-- Invoice print JS -->
    <script src="<?php echo base_url() ?>assets/js/jquery.PrintArea.js" type="text/JavaScript"></script>
    <script>
    $(document).ready(function() {
        $("#print").click(function() {
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = {
                mode: mode,
                popClose: close
            };
            $("div.printableArea").printArea(options);
        });
    });

    $(document).ready(function () {
    // Handler for .ready() called.
    $('html, body').animate({
        scrollTop: $('#lokasi-paket').offset().top
    }, 1400);
    });
    </script>
    <script type="text/javascript">
            $(document).ready(function () {
                $('#tanggal').datepicker({
                 //merubah format tanggal datepicker ke dd-mm-yyyy
                    format: "dd/mm/yyyy",
                    //aktifkan kode dibawah untuk melihat perbedaanya, disable baris perintah diatasa
                    //format: "dd-mm-yyyy",
                    autoclose: true
                });
                $('#tanggal2').datepicker({
                 //merubah format tanggal datepicker ke dd-mm-yyyy
                    format: "dd/mm/yyyy",
                    //aktifkan kode dibawah untuk melihat perbedaanya, disable baris perintah diatasa
                    //format: "dd-mm-yyyy",
                    autoclose: true
                });
                $('#tanggal3').datepicker({
                 //merubah format tanggal datepicker ke dd-mm-yyyy
                    format: "dd/mm/yyyy",
                    //aktifkan kode dibawah untuk melihat perbedaanya, disable baris perintah diatasa
                    //format: "dd-mm-yyyy",
                    autoclose: true
                });
                $('#tanggal4').datepicker({
                 //merubah format tanggal datepicker ke dd-mm-yyyy
                    format: "dd/mm/yyyy",
                    //aktifkan kode dibawah untuk melihat perbedaanya, disable baris perintah diatasa
                    //format: "dd-mm-yyyy",
                    autoclose: true
                });
                $('#tanggal5').datepicker({
                 //merubah format tanggal datepicker ke dd-mm-yyyy
                    format: "dd/mm/yyyy",
                    //aktifkan kode dibawah untuk melihat perbedaanya, disable baris perintah diatasa
                    //format: "dd-mm-yyyy",
                    autoclose: true
                });
            });
</script>


    <!-- Start Table js -->
    
    <!-- This is data table js -->
    <script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="http://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="http://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="http://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="http://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="http://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="http://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>

    <!-- Editable datatable-->
    <script src="<?php echo base_url() ?>assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/tiny-editable/mindmup-editabletable.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/tiny-editable/numeric-input-example.js"></script>
    <script>
    $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
    $('#editable-datatable').editableTableWidget().numericInputExample().find('td:first').focus();
    $(document).ready(function() {
        $('#editable-datatable').DataTable();
    });
    </script>

    <!-- End Table js -->







    <!-- Start Forms js -->

    <script src="<?php echo base_url() ?>assets/js/validation.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/summernote/dist/summernote.min.js"></script>
    <script>
    ! function(window, document, $) {
        "use strict";
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(), $(".skin-square input").iCheck({
            checkboxClass: "icheckbox_square-green",
            radioClass: "iradio_square-green"
        }), $(".touchspin").TouchSpin(), $(".switchBootstrap").bootstrapSwitch();
    }(window, document, jQuery);
    </script>

    <script src="<?php echo base_url() ?>assets/plugins/switchery/dist/switchery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="../assets/plugins/multiselect/js/jquery.multi-select.js"></script>
    <script>
    jQuery(document).ready(function() {

        //summernone text editor
        jQuery(document).ready(function() {

        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false // set focus to editable area after initializing summernote
        });

        $('.inline-editor').summernote({
            airMode: true
            });

        });

        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });
        // For select 2
        $(".select2").select2();
        $('.selectpicker').selectpicker();
        //Bootstrap-TouchSpin
        $(".vertical-spin").TouchSpin({
            verticalbuttons: true,
            verticalupclass: 'ti-plus',
            verticaldownclass: 'ti-minus'
        });
        var vspinTrue = $(".vertical-spin").TouchSpin({
            verticalbuttons: true
        });
        if (vspinTrue) {
            $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
        }
        $("input[name='tch1']").TouchSpin({
            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10,
            postfix: '%'
        });
        $("input[name='tch2']").TouchSpin({
            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$'
        });
        $("input[name='tch3']").TouchSpin();
        $("input[name='tch3_22']").TouchSpin({
            initval: 40
        });
        $("input[name='tch5']").TouchSpin({
            prefix: "pre",
            postfix: "post"
        });
        // For multiselect
        $('#pre-selected-options').multiSelect();
        $('#optgroup').multiSelect({
            selectableOptgroup: true
        });
        $('#public-methods').multiSelect();
        $('#select-all').click(function() {
            $('#public-methods').multiSelect('select_all');
            return false;
        });
        $('#deselect-all').click(function() {
            $('#public-methods').multiSelect('deselect_all');
            return false;
        });
        $('#refresh').on('click', function() {
            $('#public-methods').multiSelect('refresh');
            return false;
        });
        $('#add-option').on('click', function() {
            $('#public-methods').multiSelect('addOption', {
                value: 42,
                text: 'test 42',
                index: 0
            });
            return false;
        });
        $(".ajax").select2({
            ajax: {
                url: "https://api.github.com/search/repositories",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data, params) {
                    // parse the results into the format expected by Select2
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data, except to indicate that infinite
                    // scrolling can be used
                    params.page = params.page || 1;
                    return {
                        results: data.items,
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                },
                cache: true
            },
            escapeMarkup: function(markup) {
                return markup;
            }, // let our custom formatter work
            minimumInputLength: 1,
            templateResult: formatRepo, // omitted for brevity, see the source of this page
            templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
        });
    });
    </script>
    <!-- End form js -->







    <!-- auto hide message div-->
    <script type="text/javascript">
        $( document ).ready(function(){
           $('.delete_msg').delay(3000).slideUp();
        });
    </script>



    <!-- Style switcher -->
    
    <script src="<?php echo base_url() ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>


</body>

</html>