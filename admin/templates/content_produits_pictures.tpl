<script>

    $(document).ready(function() {
        $('th:nth-child(0)').hide();
        $('th:nth-child(1)').hide();
        $('th:nth-child(2)').hide();
        $('th:nth-child(3)').hide();
        $('th:nth-child(4)').hide();

        {literal}

        $("button[id^='button_delete_']").click(function() {
            var v = $(this).attr('id').split('_');
            v[3] = v[3] -1;
            {/literal}
            if (confirm('{t}You are about to delete this user, do you want to continue?{/t}'))
                window.location = 'produits.php?pictures={$picture}&delimage=' + v[3];
        });

    });



</script>

{$form}
<br>
<div style="background-color:#1f8dd6;color:white;margin-top:0px;margin-bottom:15px;padding:10px;font-size:1.1em;    font-weight: 700; font-family: Verdana,Arial,sans-serif;
">
    <b>Gallerie d'images</b>

</div>
{$gallery}