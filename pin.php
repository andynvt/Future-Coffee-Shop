<style>
    .alignavt {
        height: 150px;
        width: 100%;
        text-align: center;
        position: relative;
    }

    .btn-back {
        width: 80px;
        height: 36px;
        font-size: 16px;
        position: absolute;
        top: 15px;
        z-index: 99
    }

    .pin .avt {
        width: 150px;
        height: auto;
        position: absolute;
        left: 50%;
        transform: translateX(-15%);

    }

    .pin .avt img {
        width: 150px;
        object-fit: cover;
        height: 150px;
    }

    .top .h1 {
        position: relative
    }

    .top .h1 p {
        position: absolute;
        left: 50%;
        transform: translateX(-20%);
    }

    .minfo {
        border-left: 1px solid #e5e5e5;
        padding-right: 0
    }

</style>
<div class="pin container" style="display:none; min-height:100vh">
    <div class="content-info clearfix">
        <div class="choose col-sm-4">
            <ul class="list-tab">
                <li class="pf active" id="profile" data-target="#prf">
                    <a>Profile</a>
                </li>
                <li class="pf" id="cpwd" data-target="#pwd">
                    <a>Change Password</a>
                </li>
            </ul>
        </div>
        <div class="minfo col-sm-8">
            <div class="info">
                <div class="top clearfix">
                    <button class="button btn-back" onclick="hideInfo()"><i class="fa fa-angle-left"></i> Back</button>
                    <div class="alignavt">
                        <div class="avt"><img src="image/tai.jpg"></div>
                    </div>
                    <div class="h1">
                        <p>Tai Nguyen</p>
                    </div>
                </div>
                <hr>
                <div class="mid tab clearfix" id="prf">
                    <div class="left col-sm-4"><label>Name:</label></div>
                    <div class="right col-sm-8 clearfix"><input class="if col-sm-12 col-xs-12" type="text" value="Nguyen Van Tai" disabled></div>

                    <div class="left col-sm-4"><label>Phone:</label></div>
                    <div class="right col-sm-8 clearfix"><input class="if col-sm-12 col-xs-12" type="text" value="09xxxxxxxx" disabled></div>

                    <div class="left col-sm-4"><label>Card Number:</label></div>
                    <div class="right col-sm-8 clearfix"><input class="if col-sm-12 col-xs-12" type="text" value="0123xxxxxx" disabled></div>

                    <div class="left col-sm-4"><label>Birth:</label></div>
                    <div class="right col-sm-8 clearfix"><input class="if col-sm-12 col-xs-12" type="text" value="31/02/1996" disabled></div>

                    <div class="left col-sm-4"><label>Address:</label></div>
                    <div class="right col-sm-8 clearfix"><input class="if col-sm-12 col-xs-12" type="text" value="Cu Lao, Tp. Soc Trang" disabled></div>

                    <div class="left col-sm-4"><label>Email:</label></div>
                    <div class="right col-sm-8 clearfix"><input class="if col-sm-12 col-xs-12" type="text" value="nvtai@student.ctu.edu.vn" disabled></div>

                    <div class="col-sm-12 col-xs-12">
                        <div class="right col-sm-4 col-sm-offset-4 col-xs-6">
                            <div class="button1 clearfix">
                                <button class="btn col-sm-12" id="change" onclick="editform()">Change</button>
                            </div>
                        </div>
                        <div class="right col-sm-4 col-xs-6">
                            <div class="button2 clearfix">
                                <button class="btn col-sm-12" id="cancel" onclick="editform()">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="password tab clearfix" id="pwd">
                    <div class="left col-sm-4"><label>Old Password</label></div>
                    <div class="right col-sm-8"><input class="pw col-sm-12" type="password"></div>
                    <div class="left col-sm-4"><label>New Password:</label></div>
                    <div class="right col-sm-8"><input class="pw col-sm-12" type="password"></div>
                    <div class="left col-sm-4"><label>Confirm New Password:</label></div>
                    <div class="right col-sm-8"><input class="pw col-sm-12" type="password"></div>
                    <div class="btnpwd col-sm-12">
                        <div class="left col-sm-4"></div>
                        <div class="right col-sm-4"><button class="btn" id="changepwd" onclick="changePWD()">Change Password</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
