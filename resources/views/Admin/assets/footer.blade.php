</div>
<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset('AdminAssets/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('AdminAssets/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('AdminAssets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('AdminAssets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('AdminAssets/assets/js/app.js')}}"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="{{asset('AdminAssets/assets/js/custom.js')}}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="{{asset('AdminAssets/plugins/apex/apexcharts.min.js')}}"></script>
<script src="{{asset('AdminAssets/assets/js/dashboard/dash_1.js')}}"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

<script src="{{asset('AdminAssets/assets/js/scrollspyNav.js')}}"></script>


<script src="{{asset('AdminAssets/plugins/highlight/highlight.pack.js')}}"></script>
<script src="{{asset('AdminAssets/assets/js/custom.js')}}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
<script src="{{asset('AdminAssets/assets/js/scrollspyNav.js')}}"></script>
<script>
    checkall('todoAll', 'todochkbox');
    $('[data-toggle="tooltip"]').tooltip()
</script>
<!-- END PAGE LEVEL CUSTOM SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('AdminAssets/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
<!-- END PAGE LEVEL SCRIPTS -->

@include('sweetalert::alert')
</body>
</html>
