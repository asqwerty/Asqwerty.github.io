<?php

/**
* @author L.Viktor
* @version 2.3.6
*/

// Configuration area
$txt['sp-adminConfiguration'] = 'Конфигурация';
$txt['sp-adminConfigurationDesc'] = 'В этом разделе можно управлять настройками портала и просматривать информацию о портале.';
$txt['sp-adminGeneralSettingsName'] = 'Основные настройки';
$txt['sp-adminBlockSettingsName'] = 'Настройки блоков';
$txt['sp-adminArticleSettingsName'] = 'Настройки статей';

// General settings
$txt['portalactive'] = 'Включить портал';
$txt['sp_portal_mode'] = 'Режим';
$txt['sp_portal_mode_options'] = 'Отключен|Главная страница|Интегрированный|Автономный';
$txt['sp_maintenance'] = 'Тех. обслуживание';
$txt['sp_standalone_url'] = 'Автономный URL';
$txt['sp_disableForumRedirect'] = 'Отключить перенаправление на портал';
$txt['sp_disableColor'] = 'Отключить цветные имена пользователей';
$txt['sp_disable_random_bullets'] = 'Отключить цветные кружки в блоках';
$txt['sp_disable_php_validation'] = 'Отключить PHP проверку';
$txt['sp_disable_side_collapse'] = 'Отключить сворачивание блоков';
$txt['portaltheme'] = 'Тема оформления портала';
$txt['portalthemedefault'] = 'Тема по умолчанию';
$txt['sp_resize_images'] = 'Уменьшать размеры изображений на портале';

// Block settings
$txt['showleft'] = 'Включить блоки слева';
$txt['showright'] = 'Включить блоки справа';
$txt['leftwidth'] = 'Ширина левого блока';
$txt['rightwidth'] = 'Ширина правого блока';
$txt['sp_enableIntegration'] = 'Показывать блоки на форуме';
$txt['sp_IntegrationHide'] = 'Скрывать блоки на форуме<br /><span class="smalltext">Для работы этой опции нужно разрешить в настройках портала <em>Показывать блоки на форуме</em></span>';

// Article settings
$txt['articleactive'] = 'Включить статьи';
$txt['articleperpage'] = 'Максимум статей на странице';
$txt['articlelength'] = 'Максимум символов для показа статей';
$txt['articleavatar'] = 'Показывать аватар автора';

// Blocks area
$txt['sp-adminBlockListName'] = 'Список блоков';
$txt['sp-adminBlockListDesc'] = 'На этой странице отображается список всех блоков, которые были созданы для портала и форума.';
$txt['sp-adminBlockAddName'] = 'Добавить блок';
$txt['sp-adminBlockAddDesc'] = 'На этой странице можно создать новый блок для портала или форума.';
$txt['sp-adminBlockLeftListDesc'] = 'На этой странице отображается список всех левых блоков. Эти блоки могут быть изменены путем выбора соответствующей опции.';
$txt['sp-adminBlockRightListDesc'] = 'На этой странице отображается список всех правых блоков. Эти блоки могут быть изменены путем выбора соответствующей опции.';
$txt['sp-adminBlockTopListDesc'] = 'На этой странице отображается список всех верхних блоков. Эти блоки могут быть изменены путем выбора соответствующей опции.';
$txt['sp-adminBlockBottomListDesc'] = 'На этой странице отображается список всех нижних блоков. Эти блоки могут быть изменены путем выбора соответствующей опции.';
$txt['sp-adminBlockHeaderListDesc'] = 'На этой странице отображается список всех  существующих заголовок(шапка)-блоков. Эти блоки могут быть изменены Выбор подходящего варианта.';
$txt['sp-adminBlockFooterListDesc'] = 'На этой странице отображается список всех  существующих подвал-блоков представлять, которые были созданы. Эти блоки могут быть изменены Выбор подходящего варианта.';

// Block list
$txt['sp-blocksBlocks'] = 'Блоки';
$txt['sp-blocksActive'] = 'Активный';
$txt['sp-blocksActivate'] = 'Включить';
$txt['sp-blocksDeactivate'] = 'Отключить';
$txt['sp-blocksCreate'] = 'Создать %s блок';
$txt['sp-deleteblock'] = 'Вы действительно хотите удалить этот блок?';
$txt['sp-blocks_select_destination'] = 'Выберите место для блока \'<strong>%1$s</strong>\'';
$txt['sp-blocks_move_here'] = 'Переместить блок сюда';
$txt['sp-blocks_cancel_moving'] = 'Отменить перемещение';

// Add/Edit blocks
$txt['sp-blocksSelectType'] = 'Выберите тип блока';
$txt['sp-blocksAdd'] = 'Добавить блок';
$txt['sp-blocksEdit'] = 'Редактировать блок';
$txt['sp-blocksPreview'] = 'Предварительный просмотр';
$txt['sp-blocksDefaultLabel'] = 'Без названия';
$txt['sp-blocksDisabledBoth'] = 'Левые и правые блоки в настоящее время отключены';
$txt['sp-blocksDisabledLeft'] = 'Левые блоки в настоящее время отключены';
$txt['sp-blocksDisabledRight'] = 'Правые блоки в настоящее время отключены';
$txt['sp-blocksContent'] = 'Содержимое';
$txt['sp-blocksColumn'] = 'Колонка';
$txt['sp_admin_blocks_col_permissions'] = 'Права доступа';
$txt['sp_admin_blocks_permissions_set_custom'] = 'Специальный';
$txt['sp_admin_blocks_permissions_set_guests'] = 'Гости';
$txt['sp_admin_blocks_permissions_set_members'] = 'Пользователи';
$txt['sp_admin_blocks_permissions_set_everyone'] = 'Все';
$txt['sp_admin_blocks_col_custom_permissions'] = 'Права доступа';
$txt['sp_admin_blocks_custom_permissions_membergroup'] = 'Группа пользователей';
$txt['sp_admin_blocks_custom_permissions_allowed_short'] = 'A';
$txt['sp_admin_blocks_custom_permissions_disallowed_short'] = 'X';
$txt['sp_admin_blocks_custom_permissions_denied_short'] = 'D';
$txt['sp_admin_blocks_custom_permissions_allowed'] = 'Разрешено';
$txt['sp_admin_blocks_custom_permissions_disallowed'] = 'Запрещено';
$txt['sp_admin_blocks_custom_permissions_denied'] = 'Отказано';
$txt['sp-blocksRow'] = 'Порядок';
$txt['sp-blocksForce'] = 'Не сворачиваемый';
$txt['sp-blocksDisplayOptions'] = 'Опции показа';
$txt['sp-blocksAdvancedOptions'] = 'Дополнительно';
$txt['sp-blocksShowBlock'] = 'Показать блок';
$txt['sp-blocksOptionAllPages'] = 'Все страницы';
$txt['sp-blocksOptionAllActions'] = 'Все действия';
$txt['sp-blocksOptionAllBoards'] = 'Все форумы';
$txt['sp-blocksOptionEverywhere'] = 'Везде';
$txt['sp-blocksSelectActions'] = 'Выберите действия';
$txt['sp-blocksSelectBoards'] = 'Выберите форумы';
$txt['sp-blocksSelectPages'] = 'Выберите страницы';
$txt['sp_display_custom'] = 'Пользовательские параметры отображения';
$txt['sp-blocksStyleOptions'] = 'Параметры стиля';
$txt['sp-blocksTitleDefaultClass'] = 'Родной класс css для названия';
$txt['sp-blocksTitleCustomClass'] = 'Свой класс css для названия';
$txt['sp-blocksTitleCustomStyle'] = 'Свой стиль css для названия';
$txt['sp-blocksBodyDefaultClass'] = 'Родной класс css для содержимого блока';
$txt['sp-blocksBodyCustomClass'] = 'Свой класс css для содержимого блока';
$txt['sp-blocksBodyCustomStyle'] = 'Свой стиль css для содержимого блока';
$txt['sp-blocksNoTitle'] = 'Без названия';
$txt['sp-blocksNoBody'] = 'Без содержимого';

// Block labels
$txt['sp_function_sp_userInfo_label'] = 'Информация о пользователе';
$txt['sp_function_sp_latestMember_label'] = 'Новые пользователи';
$txt['sp_function_sp_whosOnline_label'] = 'Кто на сайте';
$txt['sp_function_sp_showPoll_label'] = 'Опрос';
$txt['sp_function_sp_boardStats_label'] = 'Статистика форума';
$txt['sp_function_sp_quickSearch_label'] = 'Быстрый поиск';
$txt['sp_function_sp_topPoster_label'] = 'Лучший автор';
$txt['sp_function_sp_topStatsMember_label'] = 'Статистика топ пользователей';
$txt['sp_function_sp_topBoards_label'] = 'Топ форумы';
$txt['sp_function_sp_topTopics_label'] = 'Топ темы';
$txt['sp_function_sp_recent_label'] = 'Последние комментарии/темы';
$txt['sp_function_sp_boardNews_label'] = 'Новости форума';
$txt['sp_function_sp_news_label'] = 'Новости форума';
$txt['sp_function_sp_attachmentImage_label'] = 'Последние загруженные изображения';
$txt['sp_function_sp_attachmentRecent_label'] = 'Последние файлы';
$txt['sp_function_sp_calendar_label'] = 'Календарь';
$txt['sp_function_sp_calendarInformation_label'] = 'Информация календаря';
$txt['sp_function_sp_rssFeed_label'] = 'RSS поток';
$txt['sp_function_sp_theme_select_label'] = 'Сменить тему';
$txt['sp_function_sp_staff_label'] = 'Список администраторов / модераторов';
$txt['sp_function_sp_articles_label'] = 'Статьи';
$txt['sp_function_sp_shoutbox_label'] = 'Чат';
$txt['sp_function_sp_gallery_label'] = 'Галерея';
$txt['sp_function_sp_arcade_label'] = 'Аркады';
$txt['sp_function_sp_shop_label'] = 'Магазин';
$txt['sp_function_sp_blog_label'] = 'Блог';
$txt['sp_function_sp_menu_label'] = 'Меню форума';
$txt['sp_function_sp_bbc_label'] = 'Блок BBC';
$txt['sp_function_sp_html_label'] = 'Блок HTML';
$txt['sp_function_sp_php_label'] = 'Блок PHP';

// Block descriptions
$txt['sp_function_sp_latestMember_desc'] = 'Показывает последних зарегистрированных пользователей и даты их регистрации.';
$txt['sp_function_sp_userInfo_desc'] = 'Показывает информацию о пользователе, если вы пользователь и форму входа на сайт, если вы гость.';
$txt['sp_function_sp_whosOnline_desc'] = 'Показывает кто из пользователей и гостей есть сейчас на сайте.';
$txt['sp_function_sp_showPoll_desc'] = 'Отображает опрос с вариантами голосования, если пользователь может голосовать, или результаты опроса, если пользователь не может участвовать в голосовании.';
$txt['sp_function_sp_boardStats_desc'] = 'Отображает некоторые статистические данные о форуме.';
$txt['sp_function_sp_quickSearch_desc'] = 'Показывает форму быстрого поиска.';
$txt['sp_function_sp_topPoster_desc'] = 'Показывает топ авторов, количество их сообщений и ихние аватары.';
$txt['sp_function_sp_topStatsMember_desc'] = 'Показывает разнообразную статистику о пользователях.';
$txt['sp_function_sp_topBoards_desc'] = 'Показывает список популярных форумов.';
$txt['sp_function_sp_topTopics_desc'] = 'Показывает список популярных тем.';
$txt['sp_function_sp_recent_desc'] = 'Показывает список последних сообщений или тем.';
$txt['sp_function_sp_boardNews_desc'] = 'Отображает список сообщений из выбранного форума.';
$txt['sp_function_sp_news_desc'] = 'Вывод случайной строки новостей.';
$txt['sp_function_sp_attachmentImage_desc'] = 'Отображает список недавно загруженных изображений.';
$txt['sp_function_sp_attachmentRecent_desc'] = 'Отображает список последних вложений.';
$txt['sp_function_sp_calendar_desc'] = 'Отображает полный календарный месяц со всеми событиями.';
$txt['sp_function_sp_calendarInformation_desc'] = 'Отображает информацию календаря, таких как дни рождения, события и праздники.';
$txt['sp_function_sp_rssFeed_desc'] = 'Показывает RSS ленту.';
$txt['sp_function_sp_theme_select_desc'] = 'Отображает список доступных тем оформления и позволяет пользователям выбрать любую из них.';
$txt['sp_function_sp_staff_desc'] = 'Отображает список администрации форума, сортируя их по званию, и также отображая их аватар.';
$txt['sp_function_sp_articles_desc'] = 'Показывает последние или случайные статьи.';
$txt['sp_function_sp_shoutbox_desc'] = 'Отображает чат.';
$txt['sp_function_sp_gallery_desc'] = 'Отображает список последних элементов галереи.';
$txt['sp_function_sp_arcade_desc'] = 'Отображает различные статистические данные, если модуль аркад установлен.';
$txt['sp_function_sp_shop_desc'] = 'Отображает самых богатых пользователей и различные предметы из магазина, если модуль магазина установлен.';
$txt['sp_function_sp_blog_desc'] = 'Отображает различную информацию из блога форума.';
$txt['sp_function_sp_menu_desc'] = 'Показывает вертикальное меню форума';
$txt['sp_function_sp_bbc_desc'] = 'Пользовательский блок, в котором можно добавлять контент при помощи BBC.';
$txt['sp_function_sp_html_desc'] = 'Пользовательский блок, в котором можно добавлять контент при помощи HTML.';
$txt['sp_function_sp_php_desc'] = 'Пользовательский блок, в котором можно добавлять контент при помощи PHP.';

// Block parameters
$txt['sp_param_sp_latestMember_limit'] = 'Показать пользователей';
$txt['sp_param_sp_whosOnline_online_today'] = 'Посетители сегодня';
$txt['sp_param_sp_boardStats_averages'] = 'Показать среднее значение';
$txt['sp_param_sp_topPoster_limit'] = 'Количество лучших авторов к показу';
$txt['sp_param_sp_topPoster_type'] = 'Показывать';
$txt['sp_param_sp_topStatsMember_type'] = 'Тип для списка лучших пользователей';
$txt['sp_param_sp_topStatsMember_limit'] = 'Пользователей для показа';
$txt['sp_param_sp_topStatsMember_enable_label'] = 'Включить метку для списка';
$txt['sp_param_sp_topStatsMember_list_label'] = 'Метка списка';
$txt['sp_param_sp_topStatsMember_sort_asc'] = 'Сортировать в обратном порядке';
$txt['sp_param_sp_topStatsMember_last_active_limit'] = 'Удалить неактивных пользователей из списка<br /><span class="smalltext">(в днях)</span>';
$txt['sp_param_sp_recent_limit'] = 'Последние сообщения или темы';
$txt['sp_param_sp_recent_type'] = 'Отображать';
$txt['sp_param_sp_recent_display'] = 'Тип показа';
$txt['sp_param_sp_recent_boards'] = 'Выберите форумы';
$txt['sp_param_sp_topTopics_type'] = 'Сортировать тип';
$txt['sp_param_sp_topTopics_limit'] = 'Темы для отображения';
$txt['sp_param_sp_topBoards_limit'] = 'Форумы для отображения';
$txt['sp_param_sp_showPoll_topic'] = 'Тема ID';
$txt['sp_param_sp_showPoll_type'] = 'Тип';
$txt['sp_param_sp_boardNews_board'] = 'Форумы';
$txt['sp_param_sp_boardNews_limit'] = 'Темы для отображения';
$txt['sp_param_sp_boardNews_start'] = 'ID начального сообщения';
$txt['sp_param_sp_boardNews_length'] = 'Максимальное количество символов';
$txt['sp_param_sp_boardNews_avatar'] = 'Показывать аватары';
$txt['sp_param_sp_boardNews_per_page'] = 'Сообщений на страницу';
$txt['sp_param_sp_attachmentImage_limit'] = 'Изображений к показу';
$txt['sp_param_sp_attachmentImage_direction'] = 'Направление списка';
$txt['sp_param_sp_attachmentImage_disablePoster'] = 'Скрыть имя автора изображения';
$txt['sp_param_sp_attachmentImage_disableDownloads'] = 'Скрыть надпись "Скачано"';
$txt['sp_param_sp_attachmentImage_disableLink'] = 'Убрать ссылку на загрузку изображения';
$txt['sp_param_sp_attachmentRecent_limit'] = 'Вложений для показа';
$txt['sp_param_sp_calendar_events'] = 'Показать события';
$txt['sp_param_sp_calendar_birthdays'] = 'Показать дни рождения';
$txt['sp_param_sp_calendar_holidays'] = 'Показать праздники';
$txt['sp_param_sp_calendarInformation_events'] = 'Показать события';
$txt['sp_param_sp_calendarInformation_future'] = 'Количество дней в будущем для показа событий';
$txt['sp_param_sp_calendarInformation_birthdays'] = 'Показать дни рождения';
$txt['sp_param_sp_calendarInformation_holidays'] = 'Показать праздники';
$txt['sp_param_sp_rssFeed_url'] = 'URL канала RSS';
$txt['sp_param_sp_rssFeed_show_title'] = 'Отображать название';
$txt['sp_param_sp_rssFeed_show_content'] = 'Отображать содержимое';
$txt['sp_param_sp_rssFeed_show_date'] = 'Показывать дату';
$txt['sp_param_sp_rssFeed_strip_preserve'] = 'Теги для сохранения';
$txt['sp_param_sp_rssFeed_count'] = 'Элементы для отображения';
$txt['sp_param_sp_rssFeed_limit'] = 'Лимит символов';
$txt['sp_param_sp_staff_lmod'] = 'Не показывать модераторов разделов';
$txt['sp_param_sp_articles_category'] = 'Категория';
$txt['sp_param_sp_articles_limit'] = 'Статей для показа';
$txt['sp_param_sp_articles_type'] = 'Тип показа';
$txt['sp_param_sp_articles_image'] = 'Изображение';
$txt['sp_param_sp_shoutbox_shoutbox'] = 'Чат для отображения';
$txt['sp_param_sp_gallery_limit'] = 'Элементы для отображения';
$txt['sp_param_sp_gallery_type'] = 'Показать';
$txt['sp_param_sp_gallery_direction'] = 'Показывать список';
$txt['sp_param_sp_arcade_limit'] = 'Элементов для показа';
$txt['sp_param_sp_arcade_type'] = 'Показать';
$txt['sp_param_sp_shop_style'] = 'Показать';
$txt['sp_param_sp_shop_limit'] = 'Элементов для показа';
$txt['sp_param_sp_shop_type'] = 'Тип денег';
$txt['sp_param_sp_shop_sort'] = 'Тип элементов';
$txt['sp_param_sp_blog_limit'] = 'Элементов к показу';
$txt['sp_param_sp_blog_type'] = 'Тип элементов';
$txt['sp_param_sp_blog_sort'] = 'Показать';
$txt['sp_param_sp_html_content'] = 'Свой HTML код';
$txt['sp_param_sp_bbc_content'] = 'Свой BBC код';
$txt['sp_param_sp_php_content'] = 'Свой PHP код';

// Parameter options
$txt['sp_param_sp_topPoster_type_options'] = 'Все время|Сегодня|Неделя|Месяц';
$txt['sp_param_sp_topStatsMember_type_options'] = 'Общее время, проведенное на сайте|Сообщения|Хорошая карма|Плохая карма|Вся карма|Thank-O-Matic Top Given|Thank-O-Matic Top Received|Automatic Karma Good|Automatic Karma Bad|Automatic Karma Total|Advanced Reputation System Best|Advanced Reputation System Worst';
$txt['sp_param_sp_recent_type_options'] = 'Сообщения|Темы';
$txt['sp_param_sp_recent_display_options'] = 'Компактно|Полностью';
$txt['sp_param_sp_topTopics_type_options'] = 'Ответы|Просмотров';
$txt['sp_param_sp_showPoll_type_options'] = 'Стандартно|Последние|Случайно';
$txt['sp_param_sp_attachmentImage_direction_options'] = 'Вертикально|Горизонтально';
$txt['sp_param_sp_articles_type_options'] = 'Последние|Случайно';
$txt['sp_param_sp_articles_image_options'] = 'Пусто|Аватар автора|Изображение категории';
$txt['sp_param_sp_gallery_type_options'] = 'Последние|Случайно';
$txt['sp_param_sp_gallery_direction_options'] = 'Вертикально|Горизонтально';
$txt['sp_param_sp_arcade_type_options'] = 'Самые популярные|Лучшие игроки|Вечный чемпион';
$txt['sp_param_sp_shop_style_options'] = 'Пользователи|Элементы';
$txt['sp_param_sp_shop_type_options'] = 'Всего|Карманные|Банк';
$txt['sp_param_sp_shop_sort_options'] = 'Последние|Случайные';
$txt['sp_param_sp_blog_type_options'] = 'Статьи|Блоги';
$txt['sp_param_sp_blog_sort_options'] = 'Последние|Случайные';

// Articles area
$txt['sp-adminArticleListName'] = 'Список статей';
$txt['sp-adminArticleListDesc'] = 'На этой странице отображается список всех тем, которые были добавлены в виде статей. Они могут быть изменены путем выбора соответствующей опции.';
$txt['sp-adminArticleAddName'] = 'Добавить статью';
$txt['sp-adminArticleAddDesc'] = 'На этой странице активируются статьи, которые будут показаны на страницах портала.';
$txt['sp-adminArticleAddNoTopics'] = 'В этом форуме не осталось тем, которые могут быть добавлены в виде статей.';

// Article list
$txt['sp-articlesRemove'] = 'Удалить выбранные';
$txt['sp-articlesConfirm'] = 'Вы уверены, что хотите удалить эти статьи?';
$txt['sp-articlesDeleteConfirm'] = 'Вы уверены, что хотите удалить эту статью?';

// Add/Edit articles
$txt['sp-articlesAdd'] = 'Добавить статью';
$txt['sp-articlesEdit'] = 'Редактировать статью';
$txt['sp-articlesCategory'] = 'Категории статей';
$txt['sp-articlesApproved'] = 'Одобрено';

// Categories area
$txt['sp-adminCategoryListName'] = 'Список категорий';
$txt['sp-adminCategoryListDesc'] = 'На этой странице отображается список категорий статей. Они могут быть изменены путём выбора соответствующей опции.';
$txt['sp-adminCategoryAddName'] = 'Добавить категорию';
$txt['sp-adminCategoryAddDesc'] = 'На этой странице можно создать новую категорию, чтобы добавить статьи.';

// Category list
$txt['sp-categoriesCategories'] = 'Категории';

// Add/Edit category
$txt['sp-categoriesAdd'] = 'Добавить категорию';
$txt['sp-categoriesEdit'] = 'Редактировать категорию';
$txt['sp-categoriesName'] = 'Название';
$txt['sp-categoriesPicture'] = 'Адрес картинки';
$txt['sp-categoriesPublish'] = 'Публиковать на портале';

// Delete category
$txt['sp-categoriesDelete'] = 'Удалить категорию';
$txt['sp-categoriesDeleteCount'] = 'В этой категории есть %s статей.';
$txt['sp-categoriesDeleteOption1'] = 'Вы хотите переместить эти статьи в другую категорию?';
$txt['sp-categoriesDeleteOption2'] = 'При удалении этой категории Ваши статьи будут также удалены.';
$txt['sp-categoriesDeleteConfirm'] = 'Вы уверены, что хотите удалить эту категорию?';
$txt['sp-categoriesMove'] = 'Переместить';
$txt['sp-categoriesMoveTo'] = 'Переместить в';

// Block list titles
$txt['sp-adminColumnType'] = 'Тип';
$txt['sp-adminColumnMove'] = 'Переместить';

// Article list titles
$txt['sp-adminColumnTopic'] = 'Тема';
$txt['sp-adminColumnBoard'] = 'Форум';
$txt['sp-adminColumnPoster'] = 'Автор';
$txt['sp-adminColumnTime'] = 'Время';
$txt['sp-adminColumnCategory'] = 'Категория';
$txt['sp-adminColumnApproved'] = 'Утвержденный';

// Category list titles
$txt['sp-adminColumnPicture'] = 'Изображение';
$txt['sp-adminColumnArticles'] = 'Статьи';
$txt['sp-adminColumnPublish'] = 'Опубликовать';

// Pages Area
$txt['sp_admin_pages_title'] = 'Страницы';
$txt['sp_admin_pages_list'] = 'Список страниц';
$txt['sp_admin_pages_add'] = 'Добавить страницу';
$txt['sp_admin_pages_edit'] = 'Редактировать страницу';
$txt['sp_admin_pages_remove'] = 'Удаление страниц';
$txt['sp_admin_pages_preview'] = 'Предварительный просмотр';
$txt['sp_admin_pages_general'] = 'Общие настройки';
$txt['sp_admin_pages_style'] = 'Опции стиля';

$txt['sp_admin_pages_desc'] = 'Вы можете создавать и управлять страницами SimplePortal в этой области.';
$txt['sp_pages_remove_confirm'] = 'Вы действительно уверены, что хотите удалить выбранные страницы?';
$txt['sp_admin_pages_delete_confirm'] = 'Вы действительно уверены, что хотите удалить эту страницу?';
$txt['sp_error_no_pages'] = 'Нет никаких доступных страниц.';
$txt['sp_error_page_name_empty'] = 'Извините, вы оставили название страницы пустым.';
$txt['sp_error_page_namespace_empty'] = 'Извините, вы оставили ID страницы пустым.';
$txt['sp_error_page_namespace_duplicate'] = 'Извините, эта страница ID уже находится в использовании.';
$txt['sp_error_page_namespace_invalid_chars'] = 'Извините, на странице ID есть недопустимые символы. ID страницы может содержать только буквы, числа и подчеркивания.';
$txt['sp_error_page_namespace_numeric'] = 'Извините, ID страницы не может быть только числами. Добавьте буквы или знак подчеркивания';

$txt['sp_admin_pages_col_title'] = 'Заголовок';
$txt['sp_admin_pages_col_namespace'] = 'ID страницы';
$txt['sp_admin_pages_col_body'] = 'Содержимое';
$txt['sp_admin_pages_col_type'] = 'Тип';
$txt['sp_admin_pages_col_views'] = 'Просмотров';
$txt['sp_admin_pages_col_status'] = 'Активно';
$txt['sp_admin_pages_col_actions'] = 'Действия';
$txt['sp_admin_pages_col_permissions'] = 'Полномочия';
$txt['sp_admin_pages_permissions_set_custom'] = 'Пользовательский';
$txt['sp_admin_pages_permissions_set_guests'] = 'Гости';
$txt['sp_admin_pages_permissions_set_members'] = 'Пользователи';
$txt['sp_admin_pages_permissions_set_everyone'] = 'Все';
$txt['sp_admin_pages_col_custom_permissions'] = 'Пользовательские полномочия';
$txt['sp_admin_pages_custom_permissions_membergroup'] = 'Группы пользователей';
$txt['sp_admin_pages_custom_permissions_allowed_short'] = 'A';
$txt['sp_admin_pages_custom_permissions_disallowed_short'] = 'X';
$txt['sp_admin_pages_custom_permissions_denied_short'] = 'D';
$txt['sp_admin_pages_custom_permissions_allowed'] = 'Разрешено';
$txt['sp_admin_pages_custom_permissions_disallowed'] = 'Запрещено';
$txt['sp_admin_pages_custom_permissions_denied'] = 'Отклонено';
$txt['sp_admin_pages_col_blocks'] = 'Блоки';
$txt['sp_admin_pages_activate'] = 'Активировать';
$txt['sp_admin_pages_deactivate'] = 'Деактивировать';

$txt['sp_pages_default_title'] = 'Без названия';

$txt['sp_pages_type_bbc'] = 'BBC';
$txt['sp_pages_type_html'] = 'HTML';
$txt['sp_pages_type_php'] = 'PHP';

// Shoutboxes Area
$txt['sp_admin_shoutbox_title'] = 'Чат';
$txt['sp_admin_shoutbox_list'] = 'Список чатов';
$txt['sp_admin_shoutbox_add'] = 'Добавить чат';
$txt['sp_admin_shoutbox_edit'] = 'Редактировать чат';
$txt['sp_admin_shoutbox_prune'] = 'Очистить чат';
$txt['sp_admin_shoutbox_remove'] = 'Удаление чатов';

$txt['sp_admin_shoutbox_desc'] = 'Можете создать и управлять SimplePortal чаты в этой области.';
$txt['sp_shoutbox_remove_confirm'] = 'Вы действительно уверены, что хотите удалить выбранный чат?';
$txt['sp_admin_shoutbox_delete_confirm'] = 'Вы действительно уверены, что хотите удалить этот чат?';
$txt['sp_error_no_shoutbox'] = 'Нет доступных мини-чатов.';
$txt['sp_error_shoutbox_name_duplicate'] = 'Извините, но уже есть мини-чат с таким именем.';

$txt['sp_admin_shoutbox_col_name'] = 'Название';
$txt['sp_admin_shoutbox_col_shouts'] = 'Сообщений';
$txt['sp_admin_shoutbox_col_caching'] = 'Кэширование';
$txt['sp_admin_shoutbox_col_status'] = 'Статус';
$txt['sp_admin_shoutbox_col_actions'] = 'Действия';
$txt['sp_admin_shoutbox_col_permissions'] = 'Права доступа';
$txt['sp_admin_shoutbox_permissions_set_custom'] = 'Свои';
$txt['sp_admin_shoutbox_permissions_set_guests'] = 'Гости';
$txt['sp_admin_shoutbox_permissions_set_members'] = 'Пользователи';
$txt['sp_admin_shoutbox_permissions_set_everyone'] = 'Все';
$txt['sp_admin_shoutbox_col_custom_permissions'] = 'Собственные права доступа';
$txt['sp_admin_shoutbox_custom_permissions_membergroup'] = 'Группы пользователей';
$txt['sp_admin_shoutbox_custom_permissions_allowed_short'] = 'A';
$txt['sp_admin_shoutbox_custom_permissions_disallowed_short'] = 'X';
$txt['sp_admin_shoutbox_custom_permissions_denied_short'] = 'D';
$txt['sp_admin_shoutbox_custom_permissions_allowed'] = 'Разрешено';
$txt['sp_admin_shoutbox_custom_permissions_disallowed'] = 'Запрещено';
$txt['sp_admin_shoutbox_custom_permissions_denied'] = 'Отказано';
$txt['sp_admin_shoutbox_col_moderators'] = 'Модераторы';
$txt['sp_admin_shoutbox_col_reverse'] = 'Обратный порядок';
$txt['sp_admin_shoutbox_activate'] = 'Активировать';
$txt['sp_admin_shoutbox_deactivate'] = 'Деактивировать';

$txt['sp_shoutbox_default_name'] = 'Мини-чат без названия';

$txt['sp_admin_shoutbox_col_warning'] = 'Внимание';
$txt['sp_admin_shoutbox_col_bbc'] = 'Разрешенные ББ-коды';
$txt['sp_admin_shoutbox_col_height'] = 'Высота <span class="smalltext">(пикселей)</span>';
$txt['sp_admin_shoutbox_col_num_show'] = 'Сообщений для показа';
$txt['sp_admin_shoutbox_col_num_max'] = 'Максимум сообщений';
$txt['sp_admin_shoutbox_col_refresh'] = 'Авто-обновление <span class="smalltext">(секунд)</span>';

$txt['sp_admin_shoutbox_opt_all'] = 'Удалить все сообщения';
$txt['sp_admin_shoutbox_opt_days'] = 'Удалить сообщения, созданные раньше, чем количество дней';
$txt['sp_admin_shoutbox_opt_member'] = 'Удалить сообщения от пользователя';

$txt['sp_admin_shoutbox_block_redirect_message'] = '<p>Поздравляем, вы создали новый мини-чат!</p>
<p>Но он пока не будет показан на форуме. Вам нужно создать блок для этого мини-чата, прежде чем пользователи смогут его использовать.</p>
<p>Нажмите <a href="%s">здесь</a> чтоб создать блок для этого мини-чата.</p>
<p>нажмите <a href="%s">здесь</a> для просмотра списка мини-чатов.</p>';

// General titles
$txt['sp-adminColumnAction'] = 'Действие';
$txt['sp-adminColumnName'] = 'Название';

// Miscellaneous strings
$txt['sp-positionLeft'] = 'Левый';
$txt['sp-positionTop'] = 'Верх';
$txt['sp-positionBottom'] = 'Нижний';
$txt['sp-positionRight'] = 'Правый';
$txt['sp-positionHeader'] = 'Заголовок';
$txt['sp-positionFooter'] = 'Подвал';
$txt['sp-placementBefore'] = 'Перед';
$txt['sp-placementAfter'] = 'После';
$txt['sp-placementUnchanged'] = 'Без изменений';
$txt['sp-stateYes'] = 'Да';
$txt['sp-stateNo'] = 'Нет';

// Information area
$txt['sp-info_title'] = 'Информация';
$txt['sp-info_desc'] = 'Некоторая полезная информация, и SimplePortal.';
$txt['sp-info_live'] = 'Прямой эфир из SimplePortal...';
$txt['sp-info_no_live'] = 'Извините! На данный момент нет возможности подключиться к simpleportal.net для получения последних новостей.';
$txt['sp-info_general'] = 'Общая информация';
$txt['sp-info_versions'] = 'Информация о версиях';
$txt['sp-info_your_version'] = 'Ваша версия';
$txt['sp-info_current_version'] = 'Текущая версия';
$txt['sp-info_managers'] = 'Менеджеры';
$txt['sp-info_intro'] = 'SimplePortal Team хочет поблагодарить всех, кто помог сделать SimplePortal таким какой он сегодня, и Simple Machines Team за замечательное программное обеспечение форума, SMF. Это не было бы возможным без вас, наших пользователей, и SMF.';
$txt['sp-info_team'] = 'Команда';
$txt['sp-info_special'] = 'Отдельное спасибо';
$txt['sp-info_and'] = 'и';
$txt['sp-info_anyone'] = 'Всех, кого мы, возможно, пропустили, спасибо!';
$txt['sp-info_groups_pm'] = 'Менеджеры проекта';
$txt['sp-info_groups_dev'] = 'Разработчики';
$txt['sp-info_groups_support'] = 'Специалисты поддержки';
$txt['sp-info_groups_customize'] = 'Настройщики';
$txt['sp-info_groups_language'] = 'Менеджеры языков';
$txt['sp-info_groups_marketing'] = 'Маркетинг';
$txt['sp-info_groups_beta'] = 'Бета тестеры';
$txt['sp-info_groups_translators'] = 'Переводчики';
$txt['sp-info_translators_message'] = 'Благодарю вас за ваши усилия в интернационализации SimplePortal.';
$txt['sp-info_groups_founder'] = 'Основатель SimplePortal';
$txt['sp-info_groups_orignal_pm'] = 'Менеджер проектов';
$txt['sp-info_fam_fam'] = 'Красивые Иконки';
$txt['sp-info_fam_fam_message'] = 'Mark James for his <a href="http://www.famfamfam.com/lab/icons/silk/">Fam Fam Fam Silk Icons</a>.';
$txt['sp-info_contribute'] = 'Вы считаете SimplePortal полезным? <a href="%s" target="_blank">Внесите вклад в проект!</a>';

// Permissions
$txt['permissiongroup_sp'] = 'SimplePortal';
$txt['permissiongroup_simple_sp'] = 'SimplePortal';
$txt['permissionname_sp_admin'] = 'Администрирование портала';
$txt['permissionhelp_sp_admin'] = 'Это разрешение позволяет пользователям управлять SimplePortal.';
$txt['permissionname_sp_manage_settings'] = 'Управление настройками портала';
$txt['permissionhelp_sp_manage_settings'] = 'Это разрешение позволяет пользователям управлять настройками SimplePortal.';
$txt['permissionname_sp_manage_blocks'] = 'Управление блоками портала';
$txt['permissionhelp_sp_manage_blocks'] = 'Это разрешение позволяет пользователям управлять блоками SimplePortal.';
$txt['permissionname_sp_manage_articles'] = 'Управление статьями портала';
$txt['permissionhelp_sp_manage_articles'] = 'Это разрешение позволяет пользователям управлять статьями SimplePortal.';
$txt['permissionname_sp_manage_pages'] = 'Управление страницами портала';
$txt['permissionhelp_sp_manage_pages'] = 'Это разрешение позволяет пользователям управлять страницами SimplePortal.';
$txt['permissionname_sp_manage_shoutbox'] = 'Управление мини-чатами портала';
$txt['permissionhelp_sp_manage_shoutbox'] = 'Это разрешение позволяет пользователям управлять мини-чатами SimplePortal.';
$txt['permissionname_sp_add_article'] = 'Можно добавить статью';
$txt['permissionhelp_sp_add_article'] = 'Это разрешение позволяет пользователям добавлять статьи.';
$txt['permissionname_sp_auto_article_approval'] = 'Автоматическое одобрение статьи';
$txt['permissionhelp_sp_auto_article_approval'] = 'Это разрешение позволяет пользователям добавлять статьи без одобрения.';
$txt['permissionname_sp_remove_article'] = 'Можно удалить статью';
$txt['permissionhelp_sp_remove_article'] = 'Это разрешение позволяет пользователям удалять статьи.';

// Compatibility strings
$txt['sp-adminCatHelp'] = 'Здесь вы можете управлять и настраивать SimplePortal.';
$txt['sp-adminCatDesc'] = 'Здесь вы можете управлять и настраивать SimplePortal.';

?>