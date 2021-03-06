{template 'header.php'}

<div class="main">
	<div class="main-header">
		<div class="goback"><a href="javascript:history.go(-1);"><i class="fa fa-angle-left"></i> <span>{t('返回')}</span></a></div>	
		<div class="title">{$title}</div>
		<div class="action">
		</div>
	</div><!-- main-header -->
	
	<div class="main-body scrollable">

		<div class="container-fluid container-default">
			<div class="panel">
				<div class="panel-body">
					<div class="table-responsive">
					{$phpinfo}
					</div>
				</div>			
			</div>
		</div>


	</div><!-- main-body -->
	<div class="main-footer">
		<div class="footer-text">
			{t('感谢您使用逐涛网站管理系统')}
		</div>
		<div class="footer-text pull-right">{zotop::powered()}</div>
	</div><!-- main-footer -->
</div><!-- main -->		

{template 'footer.php'}