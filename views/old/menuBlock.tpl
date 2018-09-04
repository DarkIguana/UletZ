{* menu block *}

<nav>

    <div class="menuToggle" style="position: static; display: inline;">
        <div class="menu-icon" data-behaviour="toggle-menu-icon"><span class="menu-icon__bar"></div>
        <div class="mobileMenuHeader">Меню</div></div><img src="/images/global/logo.png" class="mobLogoImg" />


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