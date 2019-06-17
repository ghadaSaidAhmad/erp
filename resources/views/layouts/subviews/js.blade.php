<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ Request::root() }}/backend/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ Request::root() }}/backend/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="{{ Request::root() }}/backend/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ Request::root() }}/backend/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="{{ Request::root() }}/backend/js/waves.js"></script>
<!--Menu sidebar -->
<script src="{{ Request::root() }}/backend/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="{{ Request::root() }}/backend/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="{{ Request::root() }}/backend/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!--Custom JavaScript -->
<script src="{{ Request::root() }}/backend/js/custom.min.js"></script>
<script src="{{ Request::root() }}/backend/js/sidebar.min.js"></script>

<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="{{ Request::root() }}/backend/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

<!-- Sweet-Alert  -->
<script src="{{ Request::root() }}/backend/assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="{{ Request::root() }}/backend/assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>

{{--select2--}}
<script src="{{ Request::root() }}/backend/assets/plugins/select2/dist/js/select2.full.min.js"></script>
<script>
    $(".select2").select2();
</script>

<script src="{{ Request::root() }}/backend/assets/plugins/datatables/datatables.min.js"></script>
<script>

    $('#invoice-table').DataTable();
    $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');

    $.fn.dataTableExt.sErrMode = 'throw';

    // $('.datepicker').datepicker();
</script>

<!-- ============================================================== -->
<!-- ajax -->
<!-- ============================================================== -->
<script src="{{ Request::root() }}/js/ajax.js"></script>
