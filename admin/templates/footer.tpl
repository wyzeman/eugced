

<!-- Fix for IE outlines on A HREF -->
{literal}
    <script type="text/javascript">

        if (document.getElementById('nav') != null) {
            var links = document.getElementById('nav').getElementsByTagName('a');
            for ( var i = 0; i < links.length; i++ ) {
                links[i].onmousedown = function () {
                    this.blur();
                    return false;
                }
                links[i].onclick = function() {
                    this.blur();
                }
                if ( /msie/i.test(navigator.userAgent) && !/opera/i.test(navigator.userAgent) ) {
                    links[i].onfocus = function() {
                        this.blur();
                    }
                }
            }
        }
    </script>
{/literal}

<div class="footer" id="layout" style="padding-top:20px;padding-bottom:20px">
        &copy; {t}2015 tous droits réservés{/t} <b><a href="http://www.3btech.ca" class="link_light">3b solutions technologiques</a></b>



</div>
</body>
</html>