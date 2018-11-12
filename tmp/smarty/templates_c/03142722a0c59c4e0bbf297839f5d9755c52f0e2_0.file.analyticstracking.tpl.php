<?php
/* Smarty version 3.1.32, created on 2018-11-09 13:26:10
  from '/home/lizard/www/site.local/views/old/analyticstracking.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be57ce24e3344_42219342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03142722a0c59c4e0bbf297839f5d9755c52f0e2' => 
    array (
      0 => '/home/lizard/www/site.local/views/old/analyticstracking.tpl',
      1 => 1541766356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be57ce24e3344_42219342 (Smarty_Internal_Template $_smarty_tpl) {
?>  
     <?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=UA-129003710-1"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129003710-1');
<?php echo '</script'; ?>
>
     
  
   <!-- Yandex.Metrika counter -->
<?php echo '<script'; ?>
 type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter51072710 = new Ya.Metrika2({
                    id:51072710,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
<?php echo '</script'; ?>
>
<noscript><div><img src="https://mc.yandex.ru/watch/51072710" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
   
<?php }
}
