

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
    <script src="{{ asset('assets/backend/js/notify/index.js') }}"></script>
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



        var i = 1;
   var j = 1;
   $(document).ready(function() {
        $('#booking_block' + 1).on('change', function() {
            var booking_block = this.value;
            $('#square_feet' + 1).val('');
                $.ajax({
                    url: '/Getplots/',
                    type: 'get',
                    data: {
                            _token: "{{ csrf_token() }}",
                            booking_block: booking_block
                        },
                    dataType: 'json',
                    success: function(response) {
                        //
                        console.log(response);
                        if (response.status !== 'false') {
                            $('#plot_id' + 1).empty();
                            var $select = $('#plot_id' + 1).append(
                                $('<option>', {
                                    value: '0',
                                    text: 'Choose..'
                                }));
                            $('#plot_id' + 1).append($select);

                            var len = response['data'].length;
                            if (len > 0) {
                                for (var i = 0; i < len; i++) {

                                    $('#plot_id' + 1).append($('<option>', {
                                        value: response['data'][i].id,
                                        text: response['data'][i].plot_no
                                    }));
                                }
                            }
                        } else {
                            $('#plot_id' + 1).empty();
                        }
                    }
                });
        });


                $('#plot_id' + 1).on('change', function() {
                    var plot_id = this.value;
                    console.log(plot_id);
                    $.ajax({
                        url: '/Getplotsqarefeet/',
                        type: 'get',
                        data: {
                                _token: "{{ csrf_token() }}",
                                plot_id: plot_id
                            },
                        dataType: 'json',
                        success: function(response) {
                            console.log(response);
                            $("#square_feet" + 1).val(response['data']);
                        }
                    });
                });




        $('#booking_block' + 2).on('change', function() {
            var booking_block = this.value;
            $('#square_feet' + 2).val('');
                $.ajax({
                    url: '/Getplots/',
                    type: 'get',
                    data: {
                            _token: "{{ csrf_token() }}",
                            booking_block: booking_block
                        },
                    dataType: 'json',
                    success: function(response) {
                        //
                        console.log(response);
                        if (response.status !== 'false') {
                            $('#plot_id' + 2).empty();
                            var $select = $('#plot_id' + 2).append(
                                $('<option>', {
                                    value: '0',
                                    text: 'Choose..'
                                }));
                            $('#plot_id' + 2).append($select);

                            var len = response['data'].length;
                            if (len > 0) {
                                for (var i = 0; i < len; i++) {

                                    $('#plot_id' + 2).append($('<option>', {
                                        value: response['data'][i].id,
                                        text: response['data'][i].plot_no
                                    }));
                                }
                            }
                        } else {
                            $('#plot_id' + 2).empty();
                        }
                    }
                });
        });


                $('#plot_id' + 2).on('change', function() {
                    var plot_id = this.value;
                    console.log(plot_id);
                    $.ajax({
                        url: '/Getplotsqarefeet/',
                        type: 'get',
                        data: {
                                _token: "{{ csrf_token() }}",
                                plot_id: plot_id
                            },
                        dataType: 'json',
                        success: function(response) {
                            console.log(response);
                            $("#square_feet" + 2).val(response['data']);
                        }
                    });
                });






        $('#booking_block' + 3).on('change', function() {
            var booking_block = this.value;
            $('#square_feet' + 3).val('');
                $.ajax({
                    url: '/Getplots/',
                    type: 'get',
                    data: {
                            _token: "{{ csrf_token() }}",
                            booking_block: booking_block
                        },
                    dataType: 'json',
                    success: function(response) {
                        //
                        console.log(response);
                        if (response.status !== 'false') {
                            $('#plot_id' + 3).empty();
                            var $select = $('#plot_id' + 3).append(
                                $('<option>', {
                                    value: '0',
                                    text: 'Choose..'
                                }));
                            $('#plot_id' + 3).append($select);

                            var len = response['data'].length;
                            if (len > 0) {
                                for (var i = 0; i < len; i++) {

                                    $('#plot_id' + 3).append($('<option>', {
                                        value: response['data'][i].id,
                                        text: response['data'][i].plot_no
                                    }));
                                }
                            }
                        } else {
                            $('#plot_id' + 3).empty();
                        }
                    }
                });
        });


                $('#plot_id' + 3).on('change', function() {
                    var plot_id = this.value;
                    console.log(plot_id);
                    $.ajax({
                        url: '/Getplotsqarefeet/',
                        type: 'get',
                        data: {
                                _token: "{{ csrf_token() }}",
                                plot_id: plot_id
                            },
                        dataType: 'json',
                        success: function(response) {
                            console.log(response);
                            $("#square_feet" + 3).val(response['data']);
                        }
                    });
                });


      

       
        $('#booking_block' + 4).on('change', function() {
            var booking_block = this.value;
            $('#square_feet' + 4).val('');
                $.ajax({
                    url: '/Getplots/',
                    type: 'get',
                    data: {
                            _token: "{{ csrf_token() }}",
                            booking_block: booking_block
                        },
                    dataType: 'json',
                    success: function(response) {
                        //
                        console.log(response);
                        if (response.status !== 'false') {
                            $('#plot_id' + 4).empty();
                            var $select = $('#plot_id' + 4).append(
                                $('<option>', {
                                    value: '0',
                                    text: 'Choose..'
                                }));
                            $('#plot_id' + 4).append($select);

                            var len = response['data'].length;
                            if (len > 0) {
                                for (var i = 0; i < len; i++) {

                                    $('#plot_id' + 4).append($('<option>', {
                                        value: response['data'][i].id,
                                        text: response['data'][i].plot_no
                                    }));
                                }
                            }
                        } else {
                            $('#plot_id' + 4).empty();
                        }
                    }
                });
        });


                $('#plot_id' + 4).on('change', function() {
                    var plot_id = this.value;
                    console.log(plot_id);
                    $.ajax({
                        url: '/Getplotsqarefeet/',
                        type: 'get',
                        data: {
                                _token: "{{ csrf_token() }}",
                                plot_id: plot_id
                            },
                        dataType: 'json',
                        success: function(response) {
                            console.log(response);
                            $("#square_feet" + 4).val(response['data']);
                        }
                    });
                });



      

       
                $('.payment_block').on('change', function() {
                var booking_block = this.value;
                    $.ajax({
                        url: '/plotsforPayment/',
                        type: 'get',
                        data: {
                                _token: "{{ csrf_token() }}",
                                booking_block: booking_block
                            },
                        dataType: 'json',
                        success: function(response) {
                            //
                            console.log(response);
                            if (response.status !== 'false') {
                                $('.payment_plotid').empty();
                                var $select = $('.payment_plotid').append(
                                    $('<option>', {
                                        value: '0',
                                        text: 'Choose..'
                                    }));
                                $('.payment_plotid').append($select);

                                var len = response['data'].length;
                                if (len > 0) {
                                    for (var i = 0; i < len; i++) {

                                        $('.payment_plotid').append($('<option>', {
                                            value: response['data'][i].id,
                                            text: response['data'][i].plot_no
                                        }));
                                    }
                                }
                            } else {
                                $('.payment_plotid').empty();
                            }
                        }
                    });
                });


                $('.payment_plotid').on('change', function() {
                    var plot_id = this.value;
                    console.log(plot_id);
                    $.ajax({
                        url: '/GetPlotsBookedDetails/',
                        type: 'get',
                        data: {
                                _token: "{{ csrf_token() }}",
                                plot_id: plot_id
                            },
                        dataType: 'json',
                        success: function(response) {
                            console.log(response);
                            if (response.status !== 'false') {
                                
                                $(".payment_div").show();

                                var len = response.length;
                                if (len > 0) {
                                    for (var i = 0; i < len; i++) {
                                        $('.payment_customername').html(response[i].customername);
                                        $('.payment_address').html(response[i].address);
                                        $('.payment_mobileno').html(response[i].mobileno);
                                        $('#payment_sqft').val(response[i].square_feet);
                                        $('#payment_ratepersqft').val(response[i].ratepersqft);
                                        $('#payment_total').val(response[i].total);
                                        $('#payment_paidamount').val(response[i].paid_amount);
                                        $('#payment_balanceamount').val(response[i].balance_amount);
                                        $('#payment_bookingid').val(response[i].booking_id);
                                        $('#payment_plotno').val(response[i].plot_no);

                                        $('#bookingoldplot_fields').html('');
                                        var paid_terms = response[i].paid_terms.length;
                                        for (var j = 0; j < paid_terms; j++) {
                                            
                                            var column_0 = $('<td/>', {
                                                html: '<input type="text" class="form-control" style="background: #f4f4f4;" readonly value="' + response[i].paid_terms[j].bill_no +'"/>' ,
                                            });
                                            var column_1 = $('<td/>', {
                                                html: '<input type="text" class="form-control" style="background: #f4f4f4;" readonly value="' + response[i].paid_terms[j].payment_method +'"/>',
                                            });
                                            var column_2 = $('<td/>', {
                                                html: '<input type="text" class="form-control" style="background: #f4f4f4;" readonly value="' + response[i].paid_terms[j].terms +'"/>',
                                            });
                                            var column_3 = $('<td/>', {
                                                html: '<input type="text" class="form-control" style="background: #f4f4f4;" readonly value="' + response[i].paid_terms[j].payableamount +'"/>',
                                            });

                                            var row = $('<tr/>').append(column_0,
                                                column_1, column_2, column_3);

                                            $('#bookingoldplot_fields').append(row);
                                        }


                                        if(response[i].balance_amount > 0){
                                            $(".booking_new").show();
                                        }else {
                                            $(".booking_new").hide();
                                        }
                                        
                                    }
                                }
                            }else {
                                alert("These Plot not booked...");
                                $(".booking_new").hide();
                            }
                        }
                    });
                });

        $(document).on('click', '.remove-extratr', function() {
            $(this).parents('tr').remove();
        });
   });



   $(document).on("keyup", 'input.payableamount', function() {
        var payableamount = $(this).val();
        var bookingtotal_balance = $(".bookingtotal_balance").val();
        //alert(bill_paid_amount);
        var balance_amount = Number(bookingtotal_balance) - Number(payableamount);
        $('.paymentbalance').val(balance_amount.toFixed(2));
    });


    $(document).on("keyup", 'input.payableamount', function() {
            var payableamount = $(this).val();
            var bookingtotal_balance = $(".bookingtotal_balance").val();

            if (Number(payableamount) > Number(bookingtotal_balance)) {
                alert('!Paid Amount is More than of Total!');
                $(".paidamount").val('');
            }
    });


   $(document).on("keyup", 'input.payment_payableamount', function() {
        var payment_payableamount = $(this).val();
        var bookingtotal_balance = $("#payment_balanceamount").val();
        //alert(bill_paid_amount);
        var balance_amount = Number(bookingtotal_balance) - Number(payment_payableamount);
        $('.payment_balance').val(balance_amount.toFixed(2));
    });


    $(document).on("keyup", 'input.payment_payableamount', function() {
            var payableamount = $(this).val();
            var payment_balanceamount = $(".payment_balanceamount").val();

            if (Number(payableamount) > Number(payment_balanceamount)) {
                alert('!Paid Amount is More than of Total!');
                $(".payment_payableamount").val('');
            }
    });



    function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }

    </script>
