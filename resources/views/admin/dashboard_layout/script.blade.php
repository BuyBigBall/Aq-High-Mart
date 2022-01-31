<!-- Vendor JS -->
<script src="{{ asset('backend') }}/js/vendors.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
<script src="{{ asset('') }}assets/icons/feather-icons/feather.min.js"></script>
<script src="{{ asset('') }}assets/vendor_components/jquery-steps-master/build/jquery.steps.js"></script>
<script src="{{ asset('') }}assets/vendor_components/jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>
<script src="{{ asset('') }}assets/vendor_components/sweetalert/sweetalert.min.js"></script>
{{-- <script src="{{ asset('') }}assets/vendor_components/easypiechart/dist/jquery.easypiechart.js"></script> --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('') }}assets/vendor_components/apexcharts-bundle/irregular-data-series.js"></script>
{{-- <script src="{{ asset('') }}assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script> --}}
<script src="{{ asset('backend') }}/js/pages/steps.js"></script>
<script src="{{ asset('') }}assets/vendor_components/datatable/datatables.min.js"></script>
<script src="{{ asset('backend') }}/js/pages/data-table.js"></script>
@yield('dashboard_script')

<!-- Sunny Admin App -->
<script src="{{ asset('backend') }}/js/template.js"></script>
{{-- <script src="{{ asset('backend') }}/js/pages/dashboard.js"></script> --}}
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

{{-- custom toaster script --}}
<script type="text/javascript">
@if (Session::has('message'))
    let type = "{{ Session::get('alert-type', 'info') }}";
    switch (type) {
        case 'info':
            toastr.info("{{ Session::get('message') }}")
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}")
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}")
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}")
            break;
        default:
            break;
    }
@endif
</script>
<script type="text/javascript">

  $(function(){
    $(document).on('click','#delete',function(e){
        e.preventDefault();
        var link = $(this).attr("href");
                  Swal.fire({
                    title: '你确定吗？',
                    text: "删除此数据？",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '是的，删除它！'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      window.location.href = link
                      Swal.fire(
                        '已删除！',
                        '您的文件已被删除。',
                        'success'
                      )
                    }
                  })
    });
  });
</script>
