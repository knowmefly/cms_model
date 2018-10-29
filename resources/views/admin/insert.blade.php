@extends('layout.master')
@section('content')
    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><a href="admin">首页</a><span class="crumb-step">&gt;</span>作品管理<span class="crumb-step">&gt;</span><span>新增作品</span></div>
    </div>
    <div class="result-wrap">
        <div class="result-content">
            <form action="store" method="post" id="myform" name="myform" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <table class="insert-tab" width="100%">
                    <tbody><tr>
                        <th width="120"><i class="require-red">*</i>分类：</th>
                        <td>
                            <select name="colId" id="catid" class="required">
                                <option value="researchDirection">研究方向</option>
                                <option value="VTMembermembers">团队成员</option>
                                <option value="scientificResearchProject">科研项目</option>
                                <option value="academySuccesses">学术成果</option>
                                <option value="laboratoryEquipment">实验设备</option>
                                <option value="studentWorld">学生天地</option>
                                <option value="contactWay">联系方式</option>
                                <option value="recent_news">新闻</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require-red">*</i>标题：</th>
                        <td>
                            <input class="common-text required" id="title" name="title" size="50" value="" type="text">
                        </td>
                    </tr>
                    <tr>
                        <th>作者：</th>
                        <td><input class="common-text" name="author" size="50" value="admin" type="text"></td>
                    </tr>
                    <tr>
                        <th>部门：</th>
                        <td><input class="common-text" name="department" size="50" value="admin" type="text"></td>
                    </tr>
                    <tr>
                        <th>缩略图：</th>
                        <td><input id="" type="file" name="pic" accept="image/*"><!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                    </tr>
                    <tr>
                        <th>pdf：</th>
                        <td><input id="" type="file" name="pdf" accept='application/pdf'><!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                    </tr>
                    <tr>
                        <th>日期：</th>
                        <td><input class="common-text" name="date" size="50" type="text" id="date">(示例：2010-01-01)</td>
                    </tr>
                    <tr>
                        <th>内容：</th>
                        <td><textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                            <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                        </td>
                    </tr>
                    </tbody></table>
            </form>
        </div>
    </div>
@stop
