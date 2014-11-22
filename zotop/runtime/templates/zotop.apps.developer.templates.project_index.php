<?php defined('ZOTOP') or exit('No permission resources.'); ?>
<?php $this->display('header.php'); ?>
<div class="main">
<div class="main-header">
<div class="title"><?php echo $title;?></div>
<div class="position">
<a href="<?php echo u('developer');?>"><?php echo t('开发助手');?></a>
<s class="arrow">></s>
<?php echo $data['name'];?>
</div>
<div class="action">
<a class="btn btn-icon-text ajax-post hidden" href="<?php echo U('developer/project/delete');?>">
<i class="icon icon-delete"></i><b><?php echo t('删除应用');?></b>
</a>
</div>
</div>
<div class="main-body scrollable">
<div class="blank"></div>
<div class="icon">
<img src="<?php echo ZOTOP_URL_APPS;?>/<?php echo $data['dir'];?>/app.png">
</div>
<div class="info">
<dl class="list">
<dt>
<?php echo t('基本信息');?>
<a class="btn btn-icon-text btn-highlight dialog-open" href="<?php echo U('developer/project/edit');?>" data-width="800" data-height="400">
<i class="icon icon-edit"></i>
<b><?php echo t('编辑信息');?></b>
</a>
</dt>
<dd>
<table class="table list">
<tr>
<?php $n=1; foreach($data as $key => $val): ?>
<td class="w200"><?php echo $attrs[$key];?>(<?php echo $key;?>)</td>
<td><?php echo $val;?></td>
<?php if($n%2==0):?></tr><tr><?php endif; ?>
<?php $n++;endforeach;unset($n); ?>
</tr>
</table>
</dd>

<dt><?php echo t('应用设置');?></dt>
<dd>
<form id="configform" method="post" action="<?php echo U('developer/project/config');?>">
<table class="table list border zebra sortable" id="datalist">
<thead>
<tr>
<td	class="drag">&nbsp;</td>
<td class="w300"><?php echo t('键名');?></td>
<td><?php echo t('键值');?></td>
<td class="manage"><?php echo t('操作');?></td>
</tr>
</thead>
<tbody></tbody>
<tfoot>
<tr>
<td colspan="4"><a href="javascript:;" onclick="datalist.addrow()"><i class="icon icon-add"></i><b><?php echo t('添加一行');?></b></a></td>
<tr>
</tfoot>
</table>
</form>

</dd>

<dt>
<?php echo t('关联数据表');?>

<a class="btn btn-icon-text btn-highlight dialog-open" href="<?php echo U('developer/project/createtable');?>" data-width="600" data-height="300">
<i class="icon icon-add"></i>
<b><?php echo t('新建数据表');?></b>
</a>
</dt>
<dd>
<?php if(empty($tables)):?>
<div class="nodata"><?php echo t('没有找到任何数据表');?></div>
<?php else: ?>
<form>
<table class="table zebra list">
<thead>
<tr>
<td><?php echo t('名称');?>(<?php echo t('真实名称');?>)</td>
<td class="w260"><?php echo t('说明');?></td>
<td class="w60"><?php echo t('行数');?></td>
<td class="w80"><?php echo t('大小');?></td>
<td class="w80"><?php echo t('类型');?></td>
<td class="w120"><?php echo t('整理');?></td>
</tr>
</thead>
<tbody>
<?php $n=1; foreach($tables as $id => $table): ?>
<tr class="<?php if($i%2==0):?>even<?php else: ?>odd<?php endif; ?>">
<td>
<div class="title"><b class="name"><?php echo $id;?></b><span>( <?php echo $table['name'];?> )</span></div>
<div class="manage">
<a href="<?php echo u('developer/schema/'.$id);?>"><?php echo t('表结构');?></a>
<s>|</s>
<a class="dialog-open" href="<?php echo U('developer/project/edittable/'.$id);?>" data-width="600" data-height="300"><?php echo t('表设置');?></a>
<s>|</s>
<a class="dialog-confirm" href="<?php echo u('developer/database/delete/'.$id);?>"><?php echo t('删除');?></a>
</div>
</td>
<td>
<?php echo $table['comment'];?>
</td>
<td><?php echo $table['rows'];?></td>
<td><?php echo format::size($table['size']);?></td>

<td><?php echo $table['engine'];?></td>
<td><?php echo $table['collation'];?></td>
</tr>
<?php $i++; ?>
<?php $n++;endforeach;unset($n); ?>
<tbody>
</table>
</form>
<?php endif; ?>
</dd>
</dl>
</div>
</div>
<div class="main-footer">
<div class="tips"><?php echo t('管理 apps 目录下在建的应用');?></div>
</div>
</div>

<style type="text/css">
div.icon {float:left;padding:20px;width:100px;}
div.icon img{width:81px;}
div.info {margin-left:150px;}

dl.list dt a.btn{float:right;}
</style>


<script type="text/javascript" src="<?php echo zotop::app('system.url');?>/common/js/jquery.validate.min.js"></script>
<script type="text/javascript">
var datalist = {};

// 添加节点
datalist.addrow = function(key, val){
var key = key || '';
var val = val || '';
var row = '<tr>'+
'<td class="drag" title="<?php echo t('拖动排序');?>" data-placement="left">&nbsp;</td>'+
'<td><input type="text" class="text required" style="width:90%" name="config_key[]" value="'+ key +'" placeholder="<?php echo t('只允许英文，数字和下划线');?>" data-placement="top" pattern="^[a-z0-9_]+$"></td>'+
'<td><input type="text" class="text required" style="width:90%" name="config_val[]" value="'+ val +'"></td>'+
'<td class="manage"><a href="javascript:;" class="delete" onclick="datalist.delrow(this)" title="<?php echo t('删除');?>"><i class="icon icon-delete"></i></a></td>'+
'</tr>';

$('#datalist tbody').append(row);
}

// 删除节点
datalist.delrow = function(ele) {
$(ele).closest('tr').remove();
$('#configform').submit();
}

// 生成默认数据
$(function(){

var dataset = <?php echo json_encode($config);?>;
if ( dataset.length>0 ){
for (var key in dataset) {
datalist.addrow(key, dataset[key]);
}
}
});

//sortable
$(function(){
$("table.sortable").sortable({
items: "tbody > tr",
axis: "y",
placeholder:"ui-sortable-placeholder",
helper: function(e,tr){
tr.children().each(function(){
$(this).width($(this).width());
});
return tr;
},
stop:function(event,ui){
$('#configform').submit();
}
});
});

$(function(){
$('#configform').on('change','input',function(){
$('#configform').submit();
});

$('#configform').validate({onfocusout:true,submitHandler:function(form){
var action = $(form).attr('action');
var data = $(form).serialize();
$.post(action, data, function(msg){
$.msg(msg);
},'json');
}});
});
</script>
<?php $this->display('footer.php'); ?>