<template>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                    <form>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Họ tên <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email <span style="color:red">*</span></label>
                                        <input type="email" class="form-control" name="email" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password <span style="color:red">*</span></label>
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Bio </label>
                                        <textarea class="form-control" name="bio" cols="40" rows="3" placeholder="Nhập giới thiệu bản thân"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="user_name">User name <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" name="user_name" placeholder="Type user name">
                                    </div>
                                    <div class="form-group">
                                        <label for="birth_day">Ngày sinh <span style="color:red">*</span></label>
                                        <input type="email" class="form-control" name="birth_day" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Số điện thoại <span style="color:red">*</span></label>
                                        <input type="password" class="form-control" name="phone" placeholder="Password">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card card-profile">
                                        <label for="avatar">Ảnh đại diện <span style="color:red">*</span></label>
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="margin-top: 20px;">
                                                <img src="/dist/img/default-avatar.png">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                            <div>
                                                <span class="btn btn-info btn-round btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="avatar" />
                                                </span>
                                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                                    data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "CreateUser",

    created(){

    },

    methods: {

    }
}
</script>

<style>

</style>