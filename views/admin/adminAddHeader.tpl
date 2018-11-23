<html>
    <head>
        <title>{$pageTitle}</title>  
        <link rel="stylesheet" href="{$templateWebPath}css/main.css" type="text/css" />
        <script type="text/javascript" src="/js/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="{$templateWebPath}js/admin.js" ></script>  
        <script src="/editor/ckeditor.js"></script>
    </head>
    <body>
        <div class="wrapper headBlock"> 

            <div class="logo"><a href="/"><img src="/images/global/logo.png" class="logoImg" /></a>
            </div>
            {include file='adminAddMenuBlock.tpl'}
        </div>

        <div class="wrapper"> 
            <div id="content_Block" class="clearfix">
