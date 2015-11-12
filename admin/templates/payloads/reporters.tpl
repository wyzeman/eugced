<script type="text/javascript">

    $(function() {

        $('#form_add_entry_scrap').click(function() {

            var url = prompt('Url to scrap');
            if (!url) {
                return;
            }
            if (url == '') {
                return;
            }

            $.ajax({
                url: 'reporters.php?scrap=' + url
            }).done(function( data ) {
                if ( console && console.log ) {

                    var items = JSON.parse(data);
                    console.log(items);

                    $('#name').val(items.name);
                    $('#email_address').val(items.email);
                    $('#website').val(items.website);
                    $('#twitter').val(items.twitter);
                    $('#facebook').val(items.facebook);
                    $('#youtube').val(items.youtube);

                }
            });

        });

    });

</script>