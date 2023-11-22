

    <!-- latest jquery-->
    <script src="{{ asset('assets/backend/js/jquery.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('assets/backend/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('assets/backend/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('assets/backend/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('assets/backend/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('assets/backend/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('assets/backend/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('assets/backend/js/sidebar-pin.js') }}"></script>
    <script src="{{ asset('assets/backend/js/clock.js') }}"></script>
    <script src="{{ asset('assets/backend/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/slick/slick.js') }}"></script>
    <script src="{{ asset('assets/backend/js/header-slick.js') }}"></script>
    <script src="{{ asset('assets/backend/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('assets/backend/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('assets/backend/js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/dashboard/default.js') }}"></script>
    {{-- <script src="{{ asset('assets/backend/js/notify/index.js') }}"></script> --}}
    <script src="{{ asset('assets/backend/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('assets/backend/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('assets/backend/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('assets/backend/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('assets/backend/js/typeahead-search/typeahead-custom.js') }}"></script>
    <script src="{{ asset('assets/backend/js/height-equal.js') }}"></script>
    <script src="{{ asset('assets/backend/js/animation/wow/wow.min.js') }}"></script>

    <script src="{{ asset('assets/backend/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/datatable/datatables/datatable.custom.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('assets/backend/js/script.js') }}"></script>
    
    {{-- <script src="{{ asset('assets/backend/js/theme-customizer/customizer.js') }}"></script> --}}
    <script>
        new WOW().init();


        $(document).ready(function () {
            $("input[name$='plan']").click(function() {
                var proofs_value = $(this).val();
                //alert(proofs_value);
                if (proofs_value == 'prosper') {
                    $(".plandetails").show();
                    $("#prosperplan").show();
                    $("#jackpotplan").hide();
                } else if (proofs_value == 'jackpot') {
                    $(".plandetails").show();
                    $("#prosperplan").hide();
                    $("#jackpotplan").show();
                }

            });
        });


    </script>
