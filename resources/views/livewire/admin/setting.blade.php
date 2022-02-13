<section class="content">
    @include('admin.dashboard_layout.breadcrumb', [
                        'name'  => '设置',
                        'url'   => 'admin.settings',
                        'section_name' => '设置信息'
                    ])

    <style>
        ::placeholder {
               color: gray;
               opacity: 0.5;    /* firefox */
            }
        :-ms-input-placeholder { /* Internet Explorer 10-11 */
            color: gray;
            opacity: 0.5; 

        }
        ::-ms-input-placeholder { /* Microsoft Edge */
            color: gray;
            opacity: 0.5; 
        }
        ::-webkit-input-placeholder
        {
            color: gray;
            opacity: 0.5; 
        }
        .w-100
        {
            width:100% !important;
        }
    </style>
    <div class="row col-12">
        <div class="col-8" role="document">
            <div class="">
                <form wire:submit.prevent="save">
                    <div class="header">
                        <!-- <h5 class="title">用户信息</h5> -->
                    </div>
                    <div class="body">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="user-name" class="form-control-label col-4">注册积分</label>
                                <div class="col-7">
                                    <input wire:model="register_point" class="form-control" type="text"  id="reg-point"/>
                                </div>
                                <label  class="form-control-label col-1">分</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" 
                            data-bs-dismiss="modal"
                            wire:click="doClose()"
                            >取消</button>
                        <button type="button" 
                            wire:click="save()"
                            class="btn btn-primary">保存</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>