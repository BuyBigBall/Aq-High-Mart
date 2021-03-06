@extends('admin.admin_master')

@section('dashboard_content')
    @include('admin.dashboard_layout.breadcrumb', [
    'name' => '区',
    'url' => "state.index",
    'section_name' => '所有区'
    ])
    <section class="content">
        <div class="row">
            {{-- Add Brand Page --}}
            <div class="col-md-8 col-lg-8 m-auto">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">编辑区域</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('state.update', $state) }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <h5>省名称 <span class="text-danger">*</span></h5>
                                <select class="custom-select" aria-label="Default select example" name="division_id">
                                    @foreach ($divisions as $division)
                                    <option value="{{ $division->id }}" {{ $division->id == $state->division_id ? 'selected': ''}} >{{ $division->division_name}}</option>
                                    @endforeach
                                  </select>
                                @error('division_id')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h5>市名称 <span class="text-danger">*</span></h5>
                                <select class="custom-select" aria-label="Default select example" name="district_id">
                                    @foreach ($districts as $district)
                                    <option value="{{ $district->id }}" {{ $district->id == $state->district_id ? 'selected': ''}} >{{ $district->district_name}}</option>
                                    @endforeach
                                  </select>
                                @error('district_id')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h5>区名称<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="state_name" class="form-control" required=""  value="{{old('state_name',$state->state_name) }}" data-validation-required-message="这是必填栏"> <div class="help-block"></div>
                                </div>
                                @error('state_name')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-rounded btn-info">更新</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    @section('dashboard_script')
    <script type="text/javascript">
        $(document).ready(function() {
          $('select[name="division_id"]').on('change', function(){
              var division_id = $(this).val();
              if(division_id) {
                  $.ajax({
                      url: "{{  url('/admin/division/district/ajax') }}/"+division_id,
                      type:"GET",
                      dataType:"json",
                      success:function(data) {
                         var d =$('select[name="district_id"]').empty();
                            $.each(data, function(key, value){
                                $('select[name="district_id"]').append('<option value="'+ value.id +'">' + value.district_name + '</option>');
                            });
                      },
                  });
              } else {
                  alert('danger');
              }
          });
      });
      </script>
    @endsection
@endsection
