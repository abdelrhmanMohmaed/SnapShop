    <!-- Js Plugins -->
    <script src="{{ asset('assets/website/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/website/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/website/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/website/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/website/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assets/website/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/website/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/website/js/main.js') }}"></script>
    @stack('script')
    <script>
    //     $(document).ready(function() {
    //     $(".price-range").slider({
    //         range: true,
    //         min: 10,
    //         max: 540,
    //         values: [75, 300],
    //         slide: function(event, ui) {
    //             $("#minamount").val(ui.values[0]);
    //             $("#maxamount").val(ui.values[1]);
    //         }
    //     });
    
    //     // تعيين القيم الأولية للنصوص
    //     $("#minamount").val($(".price-range").slider("values", 0));
    //     $("#maxamount").val($(".price-range").slider("values", 1));
    // });
    </script>