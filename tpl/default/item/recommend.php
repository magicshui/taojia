<?php 
print <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>淘价313</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=1000" />
    <link rel="shortcut icon" href="http://5.taojia.sinaapp.com/tpl/images/hg_dog.ico" type="image/x-icon"> 
    <!--[if gte IE 7]><!-->
    <link href="http://5.taojia.sinaapp.com/tpl/default/stylesheets/master.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <link href="http://5.taojia.sinaapp.com/tpl/default/stylesheets/jquery.Jcrop.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <!-- <![endif]-->
    <link href="http://5.taojia.sinaapp.com/tpl/default/stylesheets/print.css" media="print" rel="stylesheet" type="text/css" />
</head>
<body id="details" width="750px">
    <div id="header" class="group">
        <div id="header-inner" class="group">
            <div id="logo">
                <a href="/">
                    <img alt="dribbble" src="@Href("http://5.taojia.sinaapp.com/tpl/default/images/logo-bw.gif")" /></a>
            </div>
            
            <ul id="nav">
           
             
                
             
                <li id="t-about">
                {$_SESSION["UserName"]}
                </li>
            </ul>
        </div>
    </div>
    <!-- /header -->
    <hr />
    <div class="notice hide">
        <h2 id="ajax-message">
        </h2>
    </div>
  <style>#wrap{width:400px;margin-left:auto;margin-right:auto;margin-top:30px;}.middle{margin-left:auto;margin-right:auto}</style>
    <div id="wrap">
        <div id="wrap-inner">
            <div id="content" class="group">
				<div class="group">
					
				</div>
                <div id="main">
               <form action="http://taojia.sinaapp.com/index.php?c=item&a=recommend_save" method=POST>
	
		<h2>确认要搜藏这件商品？</h2>

			<br/><input type="submit" value="确定" class="middle">  
		
</form>
                </div>
                <!-- /main -->
               
            </div>
            <!-- /content -->
        </div>
    </div>
    <!-- /wrap -->
 
    <!-- /footer -->
    <!-- c(~) -->
    <script src="http://5.taojia.sinaapp.com/tpl/default/javascripts/jquery-1.5.1.js"></script>
    <script src="http://5.taojia.sinaapp.com/tpl/default/javascripts/jquery.Jcrop.js" type="text/javascript"></script>
    <script src="http://5.taojia.sinaapp.com/tpl/default/javascripts/jquery.form.js" type="text/javascript"></script>
    <script src="http://5.taojia.sinaapp.com/tpl/default/javascripts/jquery.tipsy.js" type="text/javascript"></script>
    <script src="http://5.taojia.sinaapp.com/tpl/default/javascripts/application.js" type="text/javascript"></script>
    <script src="http://5.taojia.sinaapp.com/tpl/default/javascripts/screenshot.js" type="text/javascript"></script>
    <script>
        $('#share-form-url').click(function () {
            this.select();
        });
    </script>
    <script>
        $('#add-tag-link').click(showTagForm);
        $('#cancel-tag-link').click(hideTagForm);
        $('.delete-tag').click(deleteTag);
        ajaxifyTagForm();

        function ajaxifyTagForm() {
            $('#add-tag-form').ajaxForm({
                dataType: 'html',
                success: function (html) {
                    $('#tags').html(html);
                    $('#screenshot_tag_list').val('').focus();
                    $('.delete-tag').click(deleteTag); // Re-apply delete behavior
                }
            });
        }

        function showTagForm() {
            $('#add-tag-form').fadeIn();
            $('#screenshot_tag_list').focus();
            $(this).hide();
            return false;
        }

        function hideTagForm() {
            $('#add-tag-form').hide();
            $('#add-tag-link').fadeIn();
            return false;
        }

        function deleteTag() {
            var screenshotId = $(this).modelId();
            $.post(this.href, { _method: 'delete' }, function (message, statusText) {
                if (statusText == 'success') {
                    $('#tag-li-' + screenshotId).fadeOut();
                }
            });
            return false;
        }
    </script>
    <script src="http://5.taojia.sinaapp.com/tpl/default/javascripts/jquery.jeditable.js" type="text/javascript"></script>
    <script src="http://5.taojia.sinaapp.com/tpl/default/javascripts/comments.js" type="text/javascript"></script>
    <script>
        makeCommentsDeleteable(false);
    </script>
</body>
</html>
EOT;
?>