<?php

/*
 * модель для таблицы статей (articles)
 * 
 */

function getArticles($limit = null) {
    global $db;
    $sql = 'SELECT *
                            FROM `articles`
                            ORDER BY id DESC';
    if ($limit) {
        $sql .= " LIMIT {$limit}";
    }
    $rs = mysqli_query($db, $sql);
    return createSmartyRsArray($rs);
}

/**
 * получить список всех статей по стране
 * 
 * */
function getArticlesByCat($countryId) {
    global $db;
    $sql = "SELECT * 
                              FROM articles 
                              WHERE category_id='{$countryId}'";
    $rs = mysqli_query($db, $sql);
    return createSmartyRsArray($rs);
}

/**
 * получить список заголовков всех статей по стране
 * 
 * */
function getHeadArticlesByCat($countryId) {
    global $db;
    $sql = "SELECT id, name, status, image 
                              FROM articles 
                              WHERE category_id='{$countryId}'";
    $rs = mysqli_query($db, $sql);
    return createSmartyRsArray($rs);
}

/**
 * получить список всех активных статей по стране
 * 
 * */
function getActiveArticlesByCat($countryId) {
    global $db;
    $sql = "SELECT * 
                              FROM articles 
                              WHERE `category_id`='{$countryId}'
                              AND `status`='1'  ";
    $rs = mysqli_query($db, $sql);
    return createSmartyRsArray($rs);
}

/*
 * список статей с именем категории
 */

function getArticlesAndCatName() {
    global $db;
    $sql = 'SELECT art.*, cat.cat_name 
                    FROM `articles`AS `art` 
                    LEFT JOIN `menu`AS `cat` 
                    ON art.category_id=cat.id 
                    ORDER BY id';
    $rs = mysqli_query($db, $sql);
    return createSmartyRsArray($rs);
}

/*
 * получить статю с именем категории по ID
 */

function getArticleById($articleId) {
    global $db;
    $articleId = intval($articleId);
    $sql = "SELECT art.*, m.cat_name 
                FROM `articles`AS `art` 
                LEFT JOIN `menu`AS `m` ON art.category_id=m.id 
                WHERE art.id='{$articleId}' ";
    $rs = mysqli_query($db, $sql);
    return createSmartyRsArray($rs);
}

/*
 * получить статю с именем категории по Name
 */

function getArticleByName($nameArticle) {
    global $db;
    $sql = "SELECT *
                FROM `articles`
                WHERE name_url='{$nameArticle}' ";
    $rs = mysqli_query($db, $sql);
    return createSmartyRsArray($rs);
}

/*
 * обновление главной фотографии стати
 * 
 */

function updateArticleImage($itemId, $newFileName) {

    $rs = updateArticleInDb($itemId, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, $newFileName);

    return $rs;
}

/*
 * обновление данных стати
 * 
 */

function updateArticleInDb($itemId, $itemName, $itemNameUrl, $itemPageTitle, $itemDescriptionTag, $itemKeywordTag, $itemDate, $itemStatus, $itemTeaser, $itemText, $itemCat, $itemTeg, $newFileName = null) {
    global $db;
    $set = array();

    if ($itemName) {
        $set[] = "`name`='{$itemName}'";
    }
    if ($itemNameUrl) {
        $trimmedItemNameUrl = trim($itemNameUrl);
        $cleanItemNameUrl = strtolower($trimmedItemNameUrl);
        $set[] = "`name_url`='{$cleanItemNameUrl}'";
    }
    if ($itemPageTitle) {
        $set[] = "`page_title`='{$itemPageTitle}'";
    }
    if ($itemDescriptionTag) {
        $set[] = "`description_tag`='{$itemDescriptionTag}'";
    }
    if ($itemKeywordTag) {
        $set[] = "`keywords_tag`='{$itemKeywordTag}'";
    }
    if ($itemDate > 0) {
        $set[] = "`date`='{$itemDate}'";
    }
    if ($itemStatus !== null) {
        $set[] = "`status`='{$itemStatus}'";
    }
    if ($itemTeg) {
        $set[] = "`teg`='{$itemTeg}'";
    }
    if ($itemTeaser) {
        $set[] = "`teaser`='{$itemTeaser}'";
    }
    if ($itemText) {
        $set[] = "`text`='{$itemText}'";
    }
    if ($itemCat) {
        $set[] = "`category_id`='{$itemCat}'";
    }
    if ($newFileName) {
        $set[] = "`image`='{$newFileName}'";
    }

    $setStr = implode($set, ",");

    $sql = "UPDATE `articles` 
                    SET {$setStr}
                    WHERE id = '{$itemId}' ";

    $rs = mysqli_query($db, $sql);
    return $rs;
}

/**
 * добавляем новую статью
 * 
 * */
function insertArticleToDb($itemNameUrl, $itemPageTitle, $itemDescriptionTag, $itemitemKeywordTag, $itemName, $itemTeaser, $itemText, $itemTeg, $itemCat, $itemStatus) {
    global $db;
    $trimmedItemNameUrl = trim($itemNameUrl);
    $cleanItemNameUrl = strtolower($trimmedItemNameUrl);
    $sql = "INSERT INTO `articles`
                  SET
                       `name`='{$itemName}',    
                     `Teaser`='{$itemTeaser}',  
                       `text` ='{$itemText}',
                         `teg`='{$itemTeg}',   
             `category_id`='{$itemCat}',
                     `status`='{$itemStatus}',
                 `name_url`= '{$cleanItemNameUrl}',
                `page_title`= '{$itemPageTitle}',
        `description_tag`= '{$itemDescriptionTag}',
          `keywords_tag`=  '{$itemitemKeywordTag}' ";

    $rs = mysqli_query($db, $sql);
    return $rs;
}

/**
 * получить pageTitle (по стране)
 * 
 * */
function getPageTitle($countryId) {
    global $db;
    $sql = "SELECT description
                              FROM menu
                              WHERE parent_id='{$countryId}' AND url_cat_name='articles'";
    $rs = mysqli_query($db, $sql);
    return createSmartyRsArray($rs);
    /**
      $array = mysqli_query($db, $sql);
      $row = mysqli_fetch_assoc($array);
      $rs = $row['id'];

      return $rs;
     * 
     */
}

/**
 * получить все статьи для RSS (за 3дня)
 * делаем выборку всех записей таблицы и сортируем ее по дате добавления новости AND `date` >= DATE_SUB(CURRENT_DATE, INTERVAL 3 day)
 * */
function getRssArticles() {
    global $db;
    //  AND `date` >= DATE_SUB(CURRENT_DATE, INTERVAL 3 day)
    $sql = "SELECT articles.*, menu.url_cat_name 
            FROM `articles` 
            LEFT JOIN `menu` 
            ON articles.category_id=menu.id 
            WHERE articles.status='1' 
            
            ORDER BY date DESC ";

    $rs_result = mysqli_query($db, $sql);
    mysqli_close($db);
    return $rs_result;
}
