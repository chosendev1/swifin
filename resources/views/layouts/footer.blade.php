    <!-- Core  -->
    <script src="/global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="/global/vendor/jquery/jquery.js"></script>
    <script src="/global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="/global/vendor/bootstrap/bootstrap.js"></script>
    <script src="/global/vendor/animsition/animsition.js"></script>
    <script src="/global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="/global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="/global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="/global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
     <script src="/global/vendor/waves/waves.js"></script>
    
    <!-- Plugins -->
    <script src="/global/vendor/switchery/switchery.js"></script>
    <script src="/global/vendor/intro-js/intro.js"></script>
    <script src="/global/vendor/screenfull/screenfull.js"></script>
    <script src="/global/vendor/slidepanel/jquery-slidePanel.js"></script>
    
    <!-- Scripts -->
    <script src="/global/js/Component.js"></script>
    <script src="/global/js/Plugin.js"></script>
    <script src="/global/js/Base.js"></script>
    <script src="/global/js/Config.js"></script>
    
    <script src="/assets/js/Section/Menubar.js"></script>
    <script src="/assets/js/Section/Sidebar.js"></script>
    <script src="/assets/js/Section/PageAside.js"></script>
    <script src="/assets/js/Plugin/menu.js"></script>
    <script src="/assets/js/Section/GridMenu.js"></script>
    
    <!-- Config -->
    <script src="/global/js/config/colors.js"></script>
    <script src="/assets/js/config/tour.js"></script>
    <script>Config.set('assets', '/assets');</script>
    
    <!-- Page -->
    <script src="/assets/js/Site.js"></script>
    <script src="/global/js/Plugin/asscrollable.js"></script>
    <script src="/global/js/Plugin/slidepanel.js"></script>
    <script src="/global/js/Plugin/switchery.js"></script>
    
    <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
    </body>
</html>
