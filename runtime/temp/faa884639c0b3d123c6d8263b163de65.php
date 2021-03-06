<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"E:\MrF\FyNavigation\public/../application/admin\view\menutype\icons.html";i:1586518339;}*/ ?>
<!DOCTYPE html>
<html class="x-admin-sm">
<head>
    <meta charset="utf-8"/>
    <title>风影OvO导航 - IconFont</title>
    <link rel="stylesheet" href="/static/admin/css/font.css">
    <link rel="stylesheet" href="/static/admin/css/xadmin.css">
    <link rel="stylesheet" href="/static/index/assets/css/fonts/linecons/css/linecons.css">

    <style type="text/css">

        *{margin: 0;padding: 0;list-style: none;}
            /** 清除内外边距 **/
            body, h1, h2, h3, h4, h5, h6, hr, p, blockquote, /* structural elements 结构元素 */
            dl, dt, dd, ul, ol, li, /* list elements 列表元素 */
            pre, /* text formatting elements 文本格式元素 */
            form, fieldset, legend, button, input, textarea, /* form elements 表单元素 */
            th, td /* table elements 表格元素 */ {
              margin: 0;
              padding: 0;
            }

            /** 设置默认字体 **/
            body,
            button, input, select, textarea /* for ie */ {
              font: 12px/1.5 tahoma, arial, \5b8b\4f53, sans-serif;
            }
            h1, h2, h3, h4, h5, h6 { font-size: 100%; }
            address, cite, dfn, em, var { font-style: normal; } /* 将斜体扶正 */
            code, kbd, pre, samp { font-family: courier new, courier, monospace; } /* 统一等宽字体 */
            small { font-size: 12px; } /* 小于 12px 的中文很难阅读，让 small 正常化 */

            /** 重置列表元素 **/
            ul, ol { list-style: none; }

            /** 重置文本格式元素 **/
            a { text-decoration: none; }
            a:hover { text-decoration: underline; }


            /** 重置表单元素 **/
            legend { color: #000; } /* for ie6 */
            fieldset, img { border: 0; } /* img 搭车：让链接里的 img 无边框 */
            button, input, select, textarea { font-size: 100%; } /* 使得表单元素在 ie 下能继承字体大小 */
            /* 注：optgroup 无法扶正 */

            /** 重置表格元素 **/
            table { border-collapse: collapse; border-spacing: 0; }

            /* 清除浮动 */
            .ks-clear:after, .clear:after {
              content: '\20';
              display: block;
              height: 0;
              clear: both;
            }
            .ks-clear, .clear {
              *zoom: 1;
            }

            .main {
              padding: 30px 100px;
            width: 960px;
            margin: 0 auto;
            }
            .main h1{font-size:36px; color:#333; text-align:left;margin-bottom:30px; border-bottom: 1px solid #eee;}

            .helps{margin-top:40px;}
            .helps pre{
              padding:20px;
              margin:10px 0;
              border:solid 1px #e7e1cd;
              background-color: #fffdef;
              overflow: auto;
            }

            .icon_lists{
              width: 100% !important;

            }

            .icon_lists li{
              float:left;
              width: 100px;
              height:180px;
              text-align: center;
              list-style: none !important;
            }
            .icon_lists .icon{
              font-size: 42px;
              line-height: 100px;
              margin: 10px 0;
              color:#333;
              -webkit-transition: font-size 0.25s ease-out 0s;
              -moz-transition: font-size 0.25s ease-out 0s;
              transition: font-size 0.25s ease-out 0s;

            }
            .icon_lists .icon:hover{
              font-size: 100px;
            }



            .markdown {
              color: #666;
              font-size: 14px;
              line-height: 1.8;
            }

            .highlight {
              line-height: 1.5;
            }

            .markdown img {
              vertical-align: middle;
              max-width: 100%;
            }

            .markdown h1 {
              color: #404040;
              font-weight: 500;
              line-height: 40px;
              margin-bottom: 24px;
            }

            .markdown h2,
            .markdown h3,
            .markdown h4,
            .markdown h5,
            .markdown h6 {
              color: #404040;
              margin: 1.6em 0 0.6em 0;
              font-weight: 500;
              clear: both;
            }

            .markdown h1 {
              font-size: 28px;
            }

            .markdown h2 {
              font-size: 22px;
            }

            .markdown h3 {
              font-size: 16px;
            }

            .markdown h4 {
              font-size: 14px;
            }

            .markdown h5 {
              font-size: 12px;
            }

            .markdown h6 {
              font-size: 12px;
            }

            .markdown hr {
              height: 1px;
              border: 0;
              background: #e9e9e9;
              margin: 16px 0;
              clear: both;
            }

            .markdown p,
            .markdown pre {
              margin: 1em 0;
            }

            .markdown > p,
            .markdown > blockquote,
            .markdown > .highlight,
            .markdown > ol,
            .markdown > ul {
              width: 80%;
            }

            .markdown ul > li {
              list-style: circle;
            }

            .markdown > ul li,
            .markdown blockquote ul > li {
              margin-left: 20px;
              padding-left: 4px;
            }

            .markdown > ul li p,
            .markdown > ol li p {
              margin: 0.6em 0;
            }

            .markdown ol > li {
              list-style: decimal;
            }

            .markdown > ol li,
            .markdown blockquote ol > li {
              margin-left: 20px;
              padding-left: 4px;
            }

            .markdown code {
              margin: 0 3px;
              padding: 0 5px;
              background: #eee;
              border-radius: 3px;
            }

            .markdown pre {
              border-radius: 6px;
              background: #f7f7f7;
              padding: 20px;
            }

            .markdown pre code {
              border: none;
              background: #f7f7f7;
              margin: 0;
            }

            .markdown strong,
            .markdown b {
              font-weight: 600;
            }

            .markdown > table {
              border-collapse: collapse;
              border-spacing: 0px;
              empty-cells: show;
              border: 1px solid #e9e9e9;
              width: 95%;
              margin-bottom: 24px;
            }

            .markdown > table th {
              white-space: nowrap;
              color: #333;
              font-weight: 600;

            }

            .markdown > table th,
            .markdown > table td {
              border: 1px solid #e9e9e9;
              padding: 8px 16px;
              text-align: left;
            }

            .markdown > table th {
              background: #F7F7F7;
            }

            .markdown blockquote {
              font-size: 90%;
              color: #999;
              border-left: 4px solid #e9e9e9;
              padding-left: 0.8em;
              margin: 1em 0;
              font-style: italic;
            }

            .markdown blockquote p {
              margin: 0;
            }

            .markdown .anchor {
              opacity: 0;
              transition: opacity 0.3s ease;
              margin-left: 8px;
            }

            .markdown .waiting {
              color: #ccc;
            }

            .markdown h1:hover .anchor,
            .markdown h2:hover .anchor,
            .markdown h3:hover .anchor,
            .markdown h4:hover .anchor,
            .markdown h5:hover .anchor,
            .markdown h6:hover .anchor {
              opacity: 1;
              display: inline-block;
            }

            .markdown > br,
            .markdown > p > br {
              clear: both;
            }


            .hljs {
              display: block;
              background: white;
              padding: 0.5em;
              color: #333333;
              overflow-x: auto;
            }

            .hljs-comment,
            .hljs-meta {
              color: #969896;
            }

            .hljs-string,
            .hljs-variable,
            .hljs-template-variable,
            .hljs-strong,
            .hljs-emphasis,
            .hljs-quote {
              color: #df5000;
            }

            .hljs-keyword,
            .hljs-selector-tag,
            .hljs-type {
              color: #a71d5d;
            }

            .hljs-literal,
            .hljs-symbol,
            .hljs-bullet,
            .hljs-attribute {
              color: #0086b3;
            }

            .hljs-section,
            .hljs-name {
              color: #63a35c;
            }

            .hljs-tag {
              color: #333333;
            }

            .hljs-title,
            .hljs-attr,
            .hljs-selector-id,
            .hljs-selector-class,
            .hljs-selector-attr,
            .hljs-selector-pseudo {
              color: #795da3;
            }

            .hljs-addition {
              color: #55a532;
              background-color: #eaffea;
            }

            .hljs-deletion {
              color: #bd2c00;
              background-color: #ffecec;
            }

            .hljs-link {
              text-decoration: underline;
            }

            pre{
              background: #fff;
            }







        .iconfont {
          font-family:"iconfont" !important;
          font-size:16px;
          font-style:normal;
          -webkit-font-smoothing: antialiased;
          -webkit-text-stroke-width: 0.2px;
          -moz-osx-font-smoothing: grayscale;
        }

    </style>
</head>
<body>
    <div class="main markdown">
        <h1>风影OvO导航 IconFont 图标</h1>
        <ul class="icon_lists clear">
            
                <li>
                    <i class="linecons-music"></i>
                    <div class="code">linecons-music</div>
                </li>

                <li>
                    <i class="linecons-search"></i>
                    <div class="code">linecons-search</div>
                </li>
                <li>
                    <i class="linecons-mail"></i>
                    <div class="code">linecons-mail</div>
                </li>
                <li>
                    <i class="linecons-heart"></i>
                    <div class="code">linecons-heart</div>
                </li>
                <li>
                    <i class="linecons-star"></i>
                    <div class="code">linecons-star</div>
                </li>
                <li>
                    <i class="linecons-user"></i>
                    <div class="code">linecons-user</div>
                </li>
                <li>
                    <i class="linecons-videocam"></i>
                    <div class="code">linecons-videocam</div>
                </li>
                <li>
                    <i class="linecons-camera"></i>
                    <div class="code">linecons-camera</div>
                </li>
                <li>
                    <i class="linecons-photo"></i>
                    <div class="code">linecons-photo</div>
                </li>
                <li>
                    <i class="linecons-attach"></i>
                    <div class="code">linecons-attach</div>
                </li>
                <li>
                    <i class="linecons-lock"></i>
                    <div class="code">linecons-lock</div>
                </li>
                <li>
                    <i class="linecons-eye"></i>
                    <div class="code">linecons-eye</div>
                </li>
                <li>
                    <i class="linecons-tag"></i>
                    <div class="code">linecons-tag</div>
                </li>
                <li>
                    <i class="linecons-thumbs-up"></i>
                    <div class="code">linecons-thumbs-up</div>
                </li>
                <li>
                    <i class="linecons-pencil"></i>
                    <div class="code">linecons-pencil</div>
                </li>
                <li>
                    <i class="linecons-comment"></i>
                    <div class="code">linecons-comment</div>
                </li>
                <li>
                    <i class="linecons-location"></i>
                    <div class="code">linecons-location</div>
                </li>
                <li>
                    <i class="linecons-cup"></i>
                    <div class="code">linecons-cup</div>
                </li>
                <li>
                    <i class="linecons-trash"></i>
                    <div class="code">linecons-trash</div>
                </li>
                <li>
                    <i class="linecons-doc"></i>
                    <div class="code">linecons-doc</div>
                </li>
                <li>
                    <i class="linecons-note"></i>
                    <div class="code">linecons-note</div>
                </li>
                <li>
                    <i class="linecons-cog"></i>
                    <div class="code">linecons-cog</div>
                </li>
                <li>
                    <i class="linecons-params"></i>
                    <div class="code">linecons-params</div>
                </li>
                <li>
                    <i class="linecons-calendar"></i>
                    <div class="code">linecons-calendar</div>
                </li>
                <li>
                    <i class="linecons-sound"></i>
                    <div class="code">linecons-sound</div>
                </li>
                <li>
                    <i class="linecons-clock"></i>
                    <div class="code">linecons-clock</div>
                </li>
                <li>
                    <i class="linecons-lightbulb"></i>
                    <div class="code">linecons-lightbulb</div>
                </li>
                <li>
                    <i class="linecons-tv"></i>
                    <div class="code">linecons-tv</div>
                </li>
                <li>
                    <i class="linecons-desktop"></i>
                    <div class="code">linecons-desktop</div>
                </li>
                <li>
                    <i class="linecons-mobile"></i>
                    <div class="code">linecons-mobile</div>
                </li>
                <li>
                    <i class="linecons-cd"></i>
                    <div class="code">linecons-cd</div>
                </li>
                <li>
                    <i class="linecons-inbox"></i>
                    <div class="code">linecons-inbox</div>
                </li>
                <li>
                    <i class="linecons-globe"></i>
                    <div class="code">linecons-globe</div>
                </li>
                <li>
                    <i class="linecons-cloud"></i>
                    <div class="code">linecons-cloud</div>
                </li>
                <li>
                    <i class="linecons-paper-plane"></i>
                    <div class="code">linecons-paper-plane</div>
                </li>
                <li>
                    <i class="linecons-fire"></i>
                    <div class="code">linecons-fire</div>
                </li>
                <li>
                    <i class="linecons-graduation-cap"></i>
                    <div class="code">linecons-graduation-cap</div>
                </li>
                <li>
                    <i class="linecons-megaphone"></i>
                    <div class="code">linecons-megaphone</div>
                </li>
                <li>
                    <i class="linecons-database"></i>
                    <div class="code">linecons-database</div>
                </li>
                <li>
                    <i class="linecons-key"></i>
                    <div class="code">linecons-key</div>
                </li>
                <li>
                    <i class="linecons-beaker"></i>
                    <div class="code">linecons-beaker</div>
                </li>
                <li>
                    <i class="linecons-truck"></i>
                    <div class="code">linecons-truck</div>
                </li>
                <li>
                    <i class="linecons-money"></i>
                    <div class="code">linecons-money</div>
                </li>
                <li>
                    <i class="linecons-food"></i>
                    <div class="code">linecons-food</div>
                </li>
                <li>
                    <i class="linecons-shop"></i>
                    <div class="code">linecons-shop</div>
                </li>
                <li>
                    <i class="linecons-diamond"></i>
                    <div class="code">linecons-diamond</div>
                </li>
                <li>
                    <i class="linecons-t-shirt"></i>
                    <div class="code">linecons-t-shirt</div>
                </li>
                <li>
                    <i class="linecons-wallet"></i>
                    <div class="code">linecons-wallet</div>
                </li>

        </ul>
        <h2 id="unicode-">引用方法</h2>
        <hr>
        
        <h3 id="-">挑选相应图标并获取class属性，应用于页面</h3>
        <h3 id="-">如 : </h3>
        <pre><code class="lang-js hljs javascript">&lt;i <span class="hljs-class"><span class="hljs-keyword">class</span></span>=<span class="hljs-string">"linecons-wallet"</span>&gt;<span class="xml"><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span></span></code></pre>
        <h3 id="-">只需复制(不复制双引号) " <span style="color: red;">linecons-wallet</span> " 填写到添加分类的表单内即可</h3>
        <blockquote>
        <p><a href="https://www.fyovo.com" target="_blank">风影OvO - https://www.fyovo.com</a></p>
        </blockquote>
    </div>


</body>
</html>
