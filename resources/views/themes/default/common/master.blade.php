@include('themes.default.common.header')
@include('themes.default.common.security-header')
@yield('content')
@include('themes.default.common.footer')

<script type="text/javascript">
    $(document).ready(function () {
        $('.alert').hide(10000);
    });

    $(document).ready(function () {

        $('.news_sort').change(function (e) {
            var val = $(this).find(':checked').val();
            console.log(val);

            $.ajax({
                url: document.URL,
                type: 'get',
                data: {
                    value: val,
                },
                success: function (result) {
                    console.log(result);

                    $('.filter_result').replaceWith($('.filter_result')).html(result);
                }
            });

        })


    });

</script>
