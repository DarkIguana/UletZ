{* menu block *}

<nav>
    <div class="wrapper">
        <div class="menuToggle">
        <div class="menu-icon" data-behaviour="toggle-menu-icon">
            <span class="menu-icon__bar">
        </div>
            <div class="mobileMenuHeader">
                Меню
            </div>
            </div>
        <div class="menuBlock">
            <ul class="countryMenu menu"> 
                {foreach $countries as $item }
                    <li><a href="/{$item['url_cat_name']}/" 
                           {if $item['url_cat_name'] == $smcountry } id="countryMenuActive"
                           {else} id="unSelectMenu"
                           {/if}> 
                            {$item['cat_name']}
                        </a></li>
                    {/foreach} 
            </ul>

            <div class="subMenu menu">
                {foreach from=$smSubMenu item=item name=subMenu}
                    <div>
                        <a href="/{$smcountry}/{$item.url_cat_name}/"> 
                            {$item.cat_name}
                        </a>
                    </div>
                {/foreach} 
            </div>  
        </div>
    </div>
</nav>
<script>
    $(function () {
        $(".menuToggle").on('click', function () {

            $('.menu').slideToggle(500, function () {
                if ($(this).css('display') === 'none') {
                    $(this).removeAttr('style');
                }
            });
        });
    });

</script>