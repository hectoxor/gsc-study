<div class="header_top">
    <div class="container">
        <div class="mob_menu">
            <span>Меню&nbsp;&#9776;</span>
        </div>
        <ul class="menu">
            <li class="menu_link sub">
                <span>Услуги</span>
                <div class="sub_menu">
                    <ul class="sub_list">
                        <?php foreach($services_menu as $item): ?>
                        <li><a class="sub_link" href="/service/<?=$item['Service']['alias']?>"><?=$item['Service']['title']?></a></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </li>
            <li class="menu_link sub">
                <span>Наше оборудование</span>
                <div class="sub_menu">
                    <ul class="sub_list">
                        <?php foreach($categories_menu as $item): ?>
                        <li><a class="sub_link" href="/category/<?=$item['Category']['alias']?>"><?=$item['Category']['title']?></a></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </li>
            <li class="menu_link sub">
                <span>Проекты</span>
                <div class="sub_menu">
                    <ul class="sub_list">
                        <?php foreach($category_projects_menu as $item): ?>
                        <li><a class="sub_link" href="/category-projects/<?=$item['CategoryProject']['alias']?>"><?=$item['CategoryProject']['title']?></a></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </li>
            <li><a href="/partners" class="menu_link">Партнеры</a></li>
            <li><a href="/about" class="menu_link">О компании</a></li>
            <li><a href="/contacts" class="menu_link">Контакты</a></li>
        </ul>
        <form action="/search" method="GET">
            <input class="head_search" type="search" required name="q" placeholder="ПОИСК">
        </form>
    </div>
</div>