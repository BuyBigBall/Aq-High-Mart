<section class="content">
    @include('admin.dashboard_layout.breadcrumb', [
                        'name'  => '用户',
                        'url'   => 'users.index',
                        'section_name' => '用户信息'
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

    </style>
    <div class="row">
        <div class="" role="document">
            <div class="">
                <div class="header">
                    <!-- <h5 class="title">用户信息</h5> -->
                </div>
                <div class="body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">用户名</label>
                            <div class="">
                                <input wire:model="user.name" class="form-control" type="text" placeholder="名称" id="user-name"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="user-email" class="form-control-label">电子邮件</label>
                            <div class="">
                                <input
                                    wire:model="user.email"
                                    class="form-control"
                                    type="email"
                                    placeholder="yourself@example.com"
                                    value="{{ $user->email }}"
                                    id="user-email" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="user." class="form-control-label">电话</label>
                            <div class="">
                                <input wire:model="user.phone_number"
                                    class="form-control" type="tel" placeholder="15336608297" id="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="about">用户密码</label>
                            <div class="">
                                <input 
                                    class="form-control" type="password" placeholder="" id="" onchange="livewire.emit('updatedUserPassword', $(this).val() )" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="about">状态</label>
                            <div class="">
                                <select  class="form-control" id="role" onchange="livewire.emit('updatedUserStatus', $(this).val() )" >
                                    <option value='0' {{ $user->status==0 ? 'selected' : '' }} >创建</option>
                                    <option value='1' {{ $user->status==1 ? 'selected' : '' }} >活性</option>
                                    <option value='2' {{ $user->status==2 ? 'selected' : '' }} >停用</option>
                                    <option value='3' {{ $user->status==3 ? 'selected' : '' }} >已删除</option>
                                </select>
                            </div>
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
            </div>
        </div>
    </div>
</section>