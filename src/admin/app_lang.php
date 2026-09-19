<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Компоненты';
$lang['admin_content'] = 'Содержание';
$lang['admin_database_backup'] = 'Бэкап базы данных';
$lang['admin_extensions'] = 'Расширения';
$lang['admin_firewall'] = 'Брандмауэр';
$lang['admin_help'] = 'Помощь';
$lang['admin_languages'] = 'Языки';
$lang['admin_logs'] = 'Логи системы';
$lang['admin_media'] = 'Медиа-библиотека';
$lang['admin_modules'] = 'Модули';
$lang['admin_plugins'] = 'Плагины';
$lang['admin_reports'] = 'Журнал активности';
$lang['admin_settings'] = 'Настройки системы';
$lang['admin_sysinfo'] = 'Информация о системе';
$lang['admin_system'] = 'Система';
$lang['admin_system_firewall'] = 'Системный брандмауэр';
$lang['admin_themes'] = 'Темы';
$lang['admin_updates'] = 'Обновления системы';
$lang['admin_users'] = 'Пользователи';
$lang['admin_view_site'] = 'Просмотр сайта';
$lang['per_page'] = 'На странице';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Спасибо за создание с помощью <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{Нет активных элементов.} other{<b>#</b> из <b>%s</b> элементов активны.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install'] = 'Установить';
$lang['admin_install_error'] = 'Не удалось установить пакет.';
$lang['admin_install_error_com'] = 'Установка не удалась: %s';
$lang['admin_install_location_app'] = 'Только это приложение';
$lang['admin_install_location_core'] = 'Все приложения';
$lang['admin_install_location_select'] = '&#151; Выберите расположение &#151;';
$lang['admin_install_success'] = 'Пакет успешно установлен.';
$lang['admin_install_upload'] = 'Загрузить';
$lang['admin_install_upload_error'] = 'Не удалось загрузить пакет.';
$lang['admin_install_upload_success'] = 'Пакет успешно загружен.';
$lang['admin_install_upload_tip'] = 'Установите пакет, загрузив здесь его файл <b>.zip</b>.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Не удается очистить старые файлы резервных копий.';
$lang['admin_database_backup_clean_success'] = '%d резервных файлов удалены. %d дискового пространства освобождено.';
$lang['admin_database_backup_create'] = 'Создать резервную копию';
$lang['admin_database_backup_create_confirm'] = 'Вы уверены, что хотите создать резервную копию сейчас?';
$lang['admin_database_backup_create_error'] = 'Не удается создать файл резервной копии. Убедитесь, что папка <b>%s</b> доступна для записи.';
$lang['admin_database_backup_create_success'] = 'Файл резервной копии базы данных <b>%s</b> успешно создан.';
$lang['admin_database_backup_delete_confirm'] = 'Вы уверены, что хотите удалить эти файлы резервных копий?';
$lang['admin_database_backup_delete_error'] = 'Не удается удалить выбранные файлы резервных копий.';
$lang['admin_database_backup_delete_success'] = 'Резервные файлы успешно удалены.';
$lang['admin_database_backup_download_error'] = 'Не удалось загрузить выбранный файл резервной копии.';
$lang['admin_database_backup_download_success'] = 'Файл резервной копии успешно загружен.';
$lang['admin_database_backup_lock_confirm'] = 'Вы уверены, что хотите заблокировать эти файлы резервных копий?';
$lang['admin_database_backup_lock_error'] = 'Не удается заблокировать выбранные файлы резервных копий.';
$lang['admin_database_backup_lock_success'] = 'Резервные файлы успешно заблокированы.';
$lang['admin_database_backup_locked_error'] = 'Не удается удалить заблокированные файлы резервных копий.';
$lang['admin_database_backup_missing_error'] = 'Не удается найти файл резервной копии.';
$lang['admin_database_backup_unlock_confirm'] = 'Вы уверены, что хотите разблокировать эти файлы резервных копий?';
$lang['admin_database_backup_unlock_error'] = 'Не удается разблокировать выбранные файлы резервных копий.';
$lang['admin_database_backup_unlock_success'] = 'Резервные файлы успешно разблокированы.';
$lang['admin_database_prune'] = 'Очистка';
$lang['admin_database_prune_confirm'] = 'Вы уверены, что хотите очистить базу данных? Перед выполнением будет создана резервная копия.';
$lang['admin_database_prune_error'] = 'Не удалось очистить базу данных.';
$lang['admin_database_prune_next'] = 'Следующая очистка базы данных: <b>%s</b>';
$lang['admin_database_prune_success'] = 'База данных успешно очищена.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Удалить журналы';
$lang['admin_logs_delete_confirm'] = 'Вы уверены, что хотите удалить выбранные файлы журналов?';
$lang['admin_logs_delete_error'] = 'Не удается удалить файлы журналов.';
$lang['admin_logs_delete_success'] = 'Файлы журналов успешно удалены.';
$lang['admin_logs_error_disabled'] = 'В данный момент ведение журнала отключено.';
$lang['admin_logs_error_empty'] = 'Журналы не найдены.';
$lang['admin_logs_error_missing'] = 'Либо файл журнала не может быть найден, либо он пуст.';
$lang['admin_logs_tip'] = 'Ведение журнала может быстро создавать очень большие файлы. Для рабочих сайтов рассмотрите возможность удаления старых журналов.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Вы уверены, что хотите удалить выбранные письма?';
$lang['admin_emails_delete_error'] = 'Не удалось удалить выбранные письма.';
$lang['admin_emails_delete_success'] = 'Выбранные письма успешно удалены.';
$lang['admin_emails_email_from'] = 'Отправлено от';
$lang['admin_emails_mail_queue'] = 'Очередь писем';
$lang['admin_emails_mailer'] = 'Массовая рассылка';
$lang['admin_emails_search'] = 'Поиск писем по теме или содержанию...';
$lang['admin_emails_send_error'] = 'Не удалось добавить письмо в очередь. Попробуйте снова.';
$lang['admin_emails_send_none'] = 'Нет пользователей, соответствующих выбранным критериям.';
$lang['admin_emails_send_success'] = 'Письмо добавлено в очередь и скоро будет отправлено.';
$lang['admin_emails_send_to_banned'] = 'Отправить заблокированным пользователям.';
$lang['admin_emails_send_to_deleted'] = 'Отправить удаленным пользователям.';
$lang['admin_emails_send_to_disabled'] = 'Отправить неактивным пользователям.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Добавить пользователя';
$lang['admin_users_all_users'] = 'Все пользователи';
$lang['admin_users_ban_confirm'] = 'Вы уверены, что хотите заблокировать выбранных пользователей?';
$lang['admin_users_ban_error'] = 'Не удалось заблокировать выбранных пользователей.';
$lang['admin_users_ban_success'] = 'Выбранные пользователи успешно заблокированы.';
$lang['admin_users_delete_confirm'] = 'Вы уверены, что хотите удалить выбранных пользователей?';
$lang['admin_users_delete_error'] = 'Не удалось удалить выбранных пользователей.';
$lang['admin_users_delete_success'] = 'Выбранные пользователи успешно удалены.';
$lang['admin_users_disable_confirm'] = 'Вы уверены, что хотите отключить выбранных пользователей?';
$lang['admin_users_disable_error'] = 'Не удалось отключить выбранных пользователей.';
$lang['admin_users_disable_success'] = 'Выбранные пользователи успешно отключены.';
$lang['admin_users_edit'] = 'Редактировать пользователя';
$lang['admin_users_edit_error'] = 'Не удается обновить пользователя.';
$lang['admin_users_edit_success'] = 'Пользователь успешно обновлен.';
$lang['admin_users_enable_confirm'] = 'Вы уверены, что хотите включить выбранных пользователей?';
$lang['admin_users_enable_error'] = 'Не удалось включить выбранных пользователей.';
$lang['admin_users_enable_success'] = 'Выбранные пользователи успешно включены.';
$lang['admin_users_groups'] = 'Группы';
$lang['admin_users_lock_confirm'] = 'Вы уверены, что хотите заблокировать выбранных пользователей?';
$lang['admin_users_lock_error'] = 'Не удалось заблокировать выбранных пользователей.';
$lang['admin_users_lock_success'] = 'Выбранные пользователи успешно заблокированы.';
$lang['admin_users_logged'] = 'Авторизованные пользователи';
$lang['admin_users_manage'] = 'Менеджер пользователями';
$lang['admin_users_remove_confirm'] = 'Вы уверены, что хотите окончательно удалить выбранных пользователей и все их данные?';
$lang['admin_users_remove_error'] = 'Не удалось окончательно удалить выбранных пользователей и все их данные.';
$lang['admin_users_remove_success'] = 'Выбранные пользователи и все их данные успешно удалены.';
$lang['admin_users_restore_confirm'] = 'Вы уверены, что хотите восстановить выбранных пользователей?';
$lang['admin_users_restore_error'] = 'Не удалось восстановить выбранных пользователей.';
$lang['admin_users_restore_success'] = 'Выбранные пользователи успешно восстановлены.';
$lang['admin_users_search'] = 'Искать по имени или e-mail...';
$lang['admin_users_unban_confirm'] = 'Вы уверены, что хотите разблокировать выбранных пользователей?';
$lang['admin_users_unban_error'] = 'Не удалось разблокировать выбранных пользователей.';
$lang['admin_users_unban_success'] = 'Выбранные пользователи успешно разблокированы.';
$lang['admin_users_unlock_confirm'] = 'Вы уверены, что хотите разблокировать выбранных пользователей?';
$lang['admin_users_unlock_error'] = 'Не удалось разблокировать выбранных пользователей.';
$lang['admin_users_unlock_success'] = 'Выбранные пользователи успешно разблокированы.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Очистить логи';
$lang['admin_reports_clear_confirm'] = 'Вы уверены, что хотите очистить логи действий?';
$lang['admin_reports_clear_error'] = 'Не удалось очистить логи действий.';
$lang['admin_reports_clear_success'] = 'Логи действий успешно очищены.';
$lang['admin_reports_latest_actions'] = 'Последние действия';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Вы уверены, что хотите удалить выбранные файлы?';
$lang['admin_media_delete_error'] = 'Не удается удалить файлы.';
$lang['admin_media_delete_success'] = 'Файлы успешно удалены.';
$lang['admin_media_file_delete_error'] = 'Не удается удалить файл.';
$lang['admin_media_file_delete_success'] = 'Файл успешно удален.';
$lang['admin_media_file_update_error'] = 'Не удается обновить файл.';
$lang['admin_media_file_update_success'] = 'Файл успешно обновлен.';
$lang['admin_media_search'] = 'Поиск по названию, описанию или имени файла...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Нет активных модулей.} other{<b>#</b> из <b>%s</b> модулей активны.}';
$lang['admin_modules_add'] = 'Добавить модуль';
$lang['admin_modules_delete_confirm'] = 'Вы уверены, что хотите удалить модуль: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Не удается удалить модуль.';
$lang['admin_modules_delete_success'] = 'Модуль успешно удален.';
$lang['admin_modules_disable_all_confirm'] = 'Вы уверены, что хотите отключить все модули?';
$lang['admin_modules_disable_all_error'] = 'Не удалось отключить все модули.';
$lang['admin_modules_disable_all_success'] = 'Все модули успешно отключены.';
$lang['admin_modules_disable_confirm'] = 'Вы уверены, что хотите отключить модуль: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Не удается деактивировать модуль.';
$lang['admin_modules_disable_success'] = 'Модуль успешно деактивирован.';
$lang['admin_modules_enable_all_confirm'] = 'Вы уверены, что хотите включить все модули?';
$lang['admin_modules_enable_all_error'] = 'Не удалось включить все модули.';
$lang['admin_modules_enable_all_success'] = 'Все модули успешно включены.';
$lang['admin_modules_enable_confirm'] = 'Вы уверены, что хотите включить модуль: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Не удается активировать модуль.';
$lang['admin_modules_enable_success'] = 'Модуль успешно активирован.';
$lang['admin_modules_install_tip'] = 'Модули добавляют новые функции и возможности вашему сайту. Просмотрите доступные модули в <a href="%s" target="_blank" rel="noopener">каталоге модулей</a> или загрузите <b>.zip</b> файл.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Нет активных плагинов.} other{<b>#</b> из <b>%s</b> плагинов активны.}';
$lang['admin_plugins_add'] = 'Добавить плагин';
$lang['admin_plugins_delete_confirm'] = 'Вы уверены, что хотите удалить плагин: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Не удалось удалить плагин.';
$lang['admin_plugins_delete_success'] = 'Плагин успешно удалён.';
$lang['admin_plugins_disable_all_confirm'] = 'Вы уверены, что хотите отключить все плагины?';
$lang['admin_plugins_disable_all_error'] = 'Не удалось отключить все плагины.';
$lang['admin_plugins_disable_all_success'] = 'Все плагины успешно отключены.';
$lang['admin_plugins_disable_confirm'] = 'Вы уверены, что хотите отключить плагин: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Не удалось отключить плагин.';
$lang['admin_plugins_disable_success'] = 'Плагин успешно отключён.';
$lang['admin_plugins_enable_all_confirm'] = 'Вы уверены, что хотите включить все плагины?';
$lang['admin_plugins_enable_all_error'] = 'Не удалось включить все плагины.';
$lang['admin_plugins_enable_all_success'] = 'Все плагины успешно включены.';
$lang['admin_plugins_enable_confirm'] = 'Вы уверены, что хотите включить плагин: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Не удалось включить плагин.';
$lang['admin_plugins_enable_success'] = 'Плагин успешно включён.';
$lang['admin_plugins_install_tip'] = 'Плагины расширяют существующие функции дополнительными опциями или интеграциями. Установите из <a href="%s" target="_blank" rel="noopener">каталога плагинов</a> или загрузите <b>.zip</b> файл.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Добавить тему';
$lang['admin_themes_delete_confirm'] = 'Вы уверены, что хотите удалить тему: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Не удается удалить тему.';
$lang['admin_themes_delete_error_active'] = 'Вы не можете удалить текущую активную тему.';
$lang['admin_themes_delete_success'] = 'Тема успешно удалена.';
$lang['admin_themes_disable_confirm'] = 'Вы уверены, что хотите деактивировать тему: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Не удалось деактивировать тему.';
$lang['admin_themes_disable_success'] = 'Тема успешно деактивирована.';
$lang['admin_themes_enable_confirm'] = 'Вы уверены, что хотите включить тему: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Не удается активировать тему.';
$lang['admin_themes_enable_success'] = 'Тема успешно активирована.';
$lang['admin_themes_install_tip'] = 'Темы изменяют внешний вид и макет вашего сайта. Выберите из <a href="%s" target="_blank" rel="noopener">библиотеки тем</a> или загрузите <b>.zip</b> файл для установки собственной.';
$lang['admin_themes_none_tip'] = 'Это приложение работает без темы. Установите тему, чтобы настроить общедоступный интерфейс.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Меню';
$lang['admin_menus_assign_error'] = 'Не удалось обновить расположения меню.';
$lang['admin_menus_assign_success'] = 'Расположения меню успешно обновлены.';
$lang['admin_menus_header'] = 'Доступно <b>%s</b> мест для меню.';
$lang['admin_menus_location'] = 'Расположение';
$lang['admin_menus_locations'] = 'Расположения меню';
$lang['admin_menus_manage'] = 'Управление меню';
$lang['admin_menus_menu'] = 'Назначенное меню';
$lang['admin_menus_none'] = '&#151; Нет &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Добавить язык';
$lang['admin_languages_default_confirm'] = 'Вы уверены, что хотите сделать этот язык языком по умолчанию для сайта?';
$lang['admin_languages_default_error'] = 'Не удается изменить язык по умолчанию.';
$lang['admin_languages_default_error_nochange'] = 'Этот язык уже установлен как язык по умолчанию.';
$lang['admin_languages_default_success'] = 'Язык по умолчанию успешно изменен.';
$lang['admin_languages_disable_all_confirm'] = 'Вы уверены, что хотите отключить все языки?';
$lang['admin_languages_disable_all_error'] = 'Не удалось отключить все языки.';
$lang['admin_languages_disable_all_success'] = 'Все языки успешно отключены.';
$lang['admin_languages_disable_confirm'] = 'Вы уверены, что хотите отключить язык: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Не удается отключить язык.';
$lang['admin_languages_disable_error_default'] = 'Язык по умолчанию не может быть отключён.';
$lang['admin_languages_disable_error_nochange'] = 'Этот язык уже отключен.';
$lang['admin_languages_disable_success'] = 'Язык успешно деактивирован.';
$lang['admin_languages_enable_all_confirm'] = 'Вы уверены, что хотите включить все языки?';
$lang['admin_languages_enable_all_error'] = 'Не удалось включить все языки.';
$lang['admin_languages_enable_all_success'] = 'Все языки успешно включены.';
$lang['admin_languages_enable_confirm'] = 'Вы уверены, что хотите включить язык: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Не удается включить язык.';
$lang['admin_languages_enable_error_nochange'] = 'Этот язык уже включен.';
$lang['admin_languages_enable_success'] = 'Язык успешно активирован.';
$lang['admin_languages_install_tip'] = 'Языки добавляют переводы для интерфейса и содержимого вашего сайта. Просмотрите доступные языки в <a href="%s" target="_blank" rel="noopener">каталоге языков</a> или загрузите пакет <b>.zip</b>, чтобы установить собственный.';
$lang['admin_languages_tip'] = 'Включение, отключение и установка языка сайта по умолчанию. Включенные языки доступны посетителям сайта.';

/**
 * ---------------------------------------------------------------
 * Updates & License Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Доступны новые обновления!';
$lang['update_backup_error'] = 'Не удалось создать резервную копию существующего пакета. Обновление было прервано.';
$lang['update_check_disabled'] = 'Автоматическая проверка обновлений отключена. Включите её для просмотра обновлений.';
$lang['update_check_error'] = 'Не удалось выполнить проверку обновлений в данный момент.';
$lang['update_check_success'] = 'Проверка обновлений успешно завершена.';
$lang['update_install_error'] = 'Не удалось установить пакет. Предыдущая версия была сохранена.';
$lang['update_install_success'] = 'Пакет успешно обновлён до последней версии.';
$lang['update_interval_3days'] = 'Каждые 3 дня';
$lang['update_interval_biweekly'] = 'Каждые 2 недели';
$lang['update_interval_daily'] = 'Каждый день';
$lang['update_interval_monthly'] = 'Раз в месяц';
$lang['update_interval_weekly'] = 'Раз в неделю';
$lang['update_not_available'] = 'Ваш сайт обновлён.';
$lang['update_rollback_error'] = 'Не удалось восстановить предыдущую версию. Может потребоваться ручное вмешательство.';
$lang['update_rollback_success'] = 'Предыдущая версия успешно восстановлена.';
$lang['updates_available'] = 'Доступные обновления';
$lang['updates_check_now'] = 'Проверить сейчас';
$lang['updates_check_now_confirm'] = 'Вы уверены, что хотите проверить обновления сейчас?';
$lang['updates_current_version'] = 'Текущая версия';
$lang['updates_enable'] = 'Включить обновления';
$lang['updates_last_check'] = 'Последняя проверка: %s';
$lang['updates_latest_version'] = 'Последняя версия';
$lang['updates_next_check'] = 'Следующая запланированная проверка: %s';
$lang['updates_previous_version'] = 'Предыдущая версия';
$lang['updates_recent'] = 'Недавно обновлено';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Не удалось заблокировать указанный IP-адрес.';
$lang['admin_firewall_ban_success'] = 'IP-адрес успешно заблокирован.';
$lang['admin_firewall_block_ip'] = 'Заблокировать IP-адрес';
$lang['admin_firewall_delete_confirm'] = 'Вы уверены, что хотите разблокировать выбранные IP-адреса?';
$lang['admin_firewall_delete_error'] = 'Не удалось разблокировать выбранные IP-адреса.';
$lang['admin_firewall_delete_success'] = 'Выбранные IP-адреса успешно разблокированы.';
$lang['admin_firewall_duration'] = 'Длительность блокировки';
$lang['admin_firewall_permanent'] = 'Постоянная';
$lang['admin_firewall_reason'] = 'Причина блокировки';
$lang['admin_firewall_tip'] = 'Просмотр и управление IP-адресами, заблокированными брандмауэром из-за повторяющихся нарушений или подозрительной активности.';

// Settings
$lang['404_ban_duration'] = 'Продолжительность блокировки 404';
$lang['404_threshold'] = 'Лимит ошибок 404';
$lang['uri_ban_duration'] = 'Продолжительность блокировки URI';
$lang['uri_strike_threshold'] = 'Лимит URI';
