# Автоматизация установки zoneminder
В директории apache находяться файлы конфигурации для одноименного вебсервера. С помощию них настраивается: редиректом на https из домашней директориеи, многопоточность при просмотре видео в zoneminder, сертификаты.
В директории zoneminder находится скрипт для автоматизации установки.
В директории ssl находиться скрипт для обновления сертификатов для вебсервера.
В директории cron находиться задача для выполнения скрипта по обновлению сертификатов.
