<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<link rel="stylesheet" href="/Public/kindeditor/themes/default/default.css" />
	<link rel="stylesheet" href="/Public/kindeditor/plugins/code/prettify.css" />
	<script charset="utf-8" src="/Public/kindeditor/kindeditor.js"></script>
	<script charset="utf-8" src="/Public/kindeditor/lang/zh_CN.js"></script>
	<script charset="utf-8" src="/Public/kindeditor/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content1"]', {
				cssPath : '../plugins/code/prettify.css',
				uploadJson : '../php/upload_json.php',
				fileManagerJson : '../php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>
</head>
<body>
<form name="example" method="post" action="<?php echo U('Question/subQ');?>">
	<div>
		<label>标题</label><input type="text" />
		<label>关键字</label><input type="text" />
	</div>
	<div>
		
		<textarea name="content1" style="width:700px;height:200px;visibility:hidden;"></textarea>
		<br />
		<input type="submit" name="button" value="提交内容" /> (提交快捷键: Ctrl + Enter)
	
	</div>
</form>
</body>
</html>