@extends('layouts.hiiluo', ['page_title' => '添加转载文章'])

@section('content')
<form class="layui-form" action="">
    <div class="layui-form-item">
        <label class="layui-form-label">标题</label>
        <div class="layui-input-block">
            <input type="text" name="title" lay-verify="title"
                autocomplete="off" placeholder="请输入文章标题" class="layui-input" style="width:60%">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">链接</label>
        <div class="layui-input-block">
            <input type="text" name="href" placeholder="请输入文章链接"
                autocomplete="off" class="layui-input" lay-verify="href" style="width:60%">
        </div>
    </div>

    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">描述</label>
        <div class="layui-input-block">
            <textarea placeholder="请输入内容" class="layui-textarea" name="description" style="width:80%"></textarea>
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">标签</label>
        <div class="layui-input-block">
            <input type="checkbox" name="tag[write]" title="写作">
            <input type="checkbox" name="tag[read]" title="阅读">
            <input type="checkbox" name="tag[daze]" title="发呆">
        </div>
    </div>

    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit="">立即提交</button>
        </div>
    </div>
</form>
@endsection

@section('script')
<script>
layui.use('form', function() {
    var form = layui.form;
    form.verify({
        title: function(value) {
            if(value.length < 5) {
                return '标题至少得5个字符';
            }
        },
        href:function(value){
            if (value.length > 0) {
                if(!value.match(/(https?|ftp|file):\/\/[-A-Za-z0-9+&@#/%?=~_|!:,.;]+[-A-Za-z0-9+&@#/%=~_|]/)){
                    return '这应该不是一个链接哦';
                }
            }
        }
    });
});
</script>
@endsection
