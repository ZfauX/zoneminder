<?php
//
// ZoneMinder web UK English language file, $Date$, $Revision$
// Copyright (C) 2001-2008 Philip Coombes
//
// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License
// as published by the Free Software Foundation; either version 2
// of the License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
//

// ZoneMinder Russian Translation by Borodin A.S.
// Added ZoneMinder Russian Translation by Graf (graf at slackware.su) since 2016/09/01

// Notes for Translators
// 0. Get some credit, put your name in the line above (optional)
// 1. When composing the language tokens in your language you should try and keep to roughly the
//   same length text if possible. Abbreviate where necessary as spacing is quite close in a number of places.
// 2. There are four types of string replacement
//   a) Simple replacements are words or short phrases that are static and used directly. This type of
//     replacement can be used 'as is'.
//   b) Complex replacements involve some dynamic element being included and so may require substitution
//     or changing into a different order. The token listed in this file will be passed through sprintf as
//     a formatting string. If the dynamic element is a number you will usually need to use a variable
//     replacement also as described below.
//   c) Variable replacements are used in conjunction with complex replacements and involve the generation
//     of a singular or plural noun depending on the number passed into the zmVlang function. See the
//     the zmVlang section below for a further description of this.
//   d) Optional strings which can be used to replace the prompts and/or help text for the Options section
//     of the web interface. These are not listed below as they are quite large and held in the database
//     so that they can also be used by the zmconfig.pl script. However you can build up your own list
//     quite easily from the Config table in the database if necessary.
// 3. The tokens listed below are not used to build up phrases or sentences from single words. Therefore
//   you can safely assume that a single word token will only be used in that context.
// 4. In new language files, or if you are changing only a few words or phrases it makes sense from a
//   maintenance point of view to include the original language file and override the old definitions rather
//   than copy all the language tokens across. To do this change the line below to whatever your base language
//   is and uncomment it.
// require_once( 'zm_lang_en_gb.php' );

// You may need to change the character set here, if your web server does not already
// do this by default, uncomment this if required.
//
// Example
header( "Content-Type: text/html; charset=utf8" );

// You may need to change your locale here if your default one is incorrect for the
// language described in this file, or if you have multiple languages supported.
// If you do need to change your locale, be aware that the format of this function
// is subtlely different in versions of PHP before and after 4.3.0, see
// http://uk2.php.net/manual/en/function.setlocale.php for details.
// Also be aware that changing the whole locale may affect some floating point or decimal
// arithmetic in the database, if this is the case change only the individual locale areas
// that don't affect this rather than all at once. See the examples below.
// Finally, depending on your setup, PHP may not enjoy have multiple locales in a shared
// threaded environment, if you get funny errors it may be this.
//
// Examples
// setlocale( 'LC_*', 'ru_RU.UTF-8' );// All locale settings pre-4.3.0
// setlocale( LC_ALL, 'en_GB' ); All locale settings 4.3.0 and after
// setlocale( LC_CTYPE, 'en_GB' ); Character class settings 4.3.0 and after
// setlocale( LC_TIME, 'ru_RU.UTF-8' ); //Date and time formatting 4.3.0 and after

// После снятия комментов проападает обзор общего вида, 
// но зато можно видеть день недели на русском языке, например "Среда" :)
//setlocale( LC_CTYPE, 'ru_RU.UTF-8');
//setlocale( LC_TIME, 'ru_RU.UTF-8' );

//
// Date and time formats, specific to russian language 
// %A - день недели 
//

define( "DATE_FMT_CONSOLE_LONG", "%d.%m.%Y г.,  %H:%M" );     // This is the main console date/time, date() or strftime() format
define( "DATE_FMT_CONSOLE_SHORT", "%H:%M" );                    // This is the xHTML console date/time, date() or strftime() format


// Simple String Replacements
$SLANG = array(
   'ExportMatches'        => 'Экспорт совпадений',      // ******* Начало добавок от 01.12.2022 г. (Graf)*******   
   'Continuous'           => 'Постоянная запись',
   'RTSPServer'           => 'Встроенный в ZoneMinder RTSP-сервер',
   'RTSPStreamName'       => 'Название RTSP-потока',
   'Live'                 => 'Прямая трансляция', 
   'ModectDuringPTZ'      => 'Обнаружение движения при PTZ',    
   'Small'                => 'Небольшой',
   'Large'                => 'Большой',
   'Extra Large'          => 'Огромный',   
   'Camera Passthrough'   => 'Прямо с камеры',
   'Default'              => 'По умолчанию',
   'Encode'               => 'Кодировать',
   'Analysis images only (if available)' => 'Только аналитические изображения (при наличии)',
   'Frames + Analysis images (if available)' => 'Кадры + аналитические изображения (при наличии)',
   'Frames only'          => 'Только кадры',
   'Disabled'             => 'Отключено',
   'OutputCodec'          => 'Кодек',
   'Encoder'              => 'Кодировщик',
   'Port'                 => 'Порт',
   'HostName'             => 'Хост',
   'WebSiteUrl'           => 'URL веб-сайта',
   'Home View'            => 'При входе, показать. Например:<br> вкладку "Параметры"- ?view=options<br> вкладку "Общий вид" - ?view=montage',
   'Show Zones'           => 'Показать Зоны',
   'Hide Zones'           => 'Спрятать Зоны',   
   'Estimated Ram Use'    => 'Предполагаемое использование ОЗУ',
   'Location'             => 'Расположение',
   'Latitude'             => 'Широта',
   'Longitude'            => 'Долгота', 
   'seconds'              => 'секунд',
   'frames'               => 'кадров',
   'MinSectionlength'     => 'Минимальная длина секции',
   'Importance'           => 'Важность',
   'Less important'       => 'Менее важно',
   'Not important'        => 'Не важно',
   'MaxImageBufferCount'  => 'Макс. кол-во видеопакетов в буфере',
   'ONVIF_Options'        => 'Параметры ONVIF',
   'ONVIF_URL'            => 'ONVIF URL',
   'SourceSecondPath'     => 'Дополнительный путь к источнику',
   'DecoderHWAccelName'   => 'HW-декодер',
   'DecoderHWAccelDevice' => 'Устройство для HW-декодера',
   'GetCurrentLocation'   => 'Получение текущего местоположения',
   'ViewMatches'          => 'Посмотреть совпадения',
   'FilterUser'           => 'Запускать фильтр от пользователя',
   'OpNotLike'            => 'не подобно',
   'OpLike'               => 'подобно',
   'ExistsInFileSystem'   => 'Существует в файловой системе',
   'AttrSecondaryStorageArea' => 'Область вторичного хранения',
   'AttrAlarmedZone'      => 'Зона сигнализации',
   'AttrEventDiskSpace'   => 'Дисковое пространство',
   'FilterLockRows'       => 'Фиксированные строки', 
   'ConcurrentFilter'     => 'Многопоточный фильтр',
   'FilterCopyEvents'     => 'Копировать все совпадения',
   'FilterUpdateDiskSpace' => 'Обновления дискового пространства',
   'FilterUnarchiveEvents' => 'Архивирование неархивированных событий',
   'Actions'              => 'Действия',
   'UnArchived'           => 'Не упакован',
   'Download Video'       => 'Скачать видео',
   'Out -'                => 'уменьшить -',
   'In +'                 => 'увеличить +',    
   'All Events'           => 'все события',
   '1 Hour'               => '1 час',
   '8 Hour'               => '8 часов', 
   'ZeroSize'             => 'С нулевым размером',
   'MissingFiles'         => 'Отсутствующие файлы',
   'MaxGap'               => 'Макс. разрыв',
   'MinGap'               => 'Мин. разрыв',
   'LastEvent'            => 'Последнее событие',
   'FirstEvent'           => 'Первое событие',
   'to'                   => 'до',
   'Event Start Time'     => 'Время начала события',
   'Decline'              => 'Отказаться',
   'Accept'               => 'Принять',
   'Privacy'              => 'Конфиденциальность',
   'Snapshots'            => 'Снимки',
   'APIEnabled'           => 'API',
   'NewStorage'           => 'Новое Хранилище',    
   'StorageDoDelete'      => 'Удалять Хранилище',
   'Path'                 => 'Путь',
   'RunEventNotification' => 'Уведомление<br/> о событии',
   'RunTrigger'           => 'Триггер',
   'RunAudit'             => 'Аудит',
   'RunStats'             => 'Статистика',
   'API Enabled'          => 'API Включен',
   'RevokeAllTokens'      => 'Отозвать все токены',
   'Revoke Token'         => 'Отозвать токен',          // ******* Конец добавок от 01.12.2022 г.(Graf) *******
   '24BitColour'          => '24 битный цвет',
   '32BitColour'          => '32 битный цвет',          // Added - 2011-06-15
   '8BitGrey'             => '256 оттенков серого',
   'Action'               => 'Действие',
   'Actual'               => 'Действительный',
   'AddNewControl'        => 'Добавить новое управление',
   'AddNewMonitor'        => 'Добавить монитор',
   'AddNewUser'           => 'Добавить пользователя',
   'AddNewZone'           => 'Добавить зону',
   'AddNewServer'         => 'Добавить сервер', // added by Graf - 2016-09-01
   'AddNewStorage'        => 'Добавить хранилище',
   'Alarm'                => 'Тревога',
   'AlarmBrFrames'        => 'Кадры<br/>тревоги',
   'AlarmFrame'           => 'Кадр тревоги',
   'AlarmFrameCount'      => 'Количество кадров тревоги',
   'AlarmLimits'          => 'Гран.&nbsp;зоны&nbsp;трев.',
   'AlarmMaximumFPS'      => 'Максимальная частота кадров для тревоги',
   'AlarmPx'              => 'Пкс&nbsp;трев.',
   'AlmRefImageBlendPct'  => 'Тревога при сочетании опорного кадра %', // Added - 2015-04-18, changed by Graf AlarmRefImageBlendPct to AlmRefImageBlendPct
   'AlarmRGBUnset'        => 'Вы должны установить тревогу в цвете RGB',
   'Alert'                => 'Настороже',
   'All'                  => 'Все',
   'AnalysisFPS'          => 'Частота анализа (к/с)',           // Added - 2015-07-22
   'AnalysisUpdateDelay'  => 'Задержка обновления анализа',  // Added - 2015-07-23
   'Apply'                => 'Применить',
   'ApplyingStateChange'  => 'Состояние сервиса изменяется',
   'ArchArchived'         => 'Только в архиве',
   'ArchUnarchived'       => 'Только не в архиве',
   'Archive'              => 'Архив',
   'Archived'             => 'Упакован',
   'Area'                 => 'Область',
   'AreaUnits'            => 'Область (пкс/%)',
   'AttrAlarmFrames'      => 'Кол-во кадров тревоги',
   'AttrArchiveStatus'    => 'Статус архивации',
   'AttrAvgScore'         => 'Сред. оценка',
   'AttrCause'            => 'Основание',
   'AttrDate'             => 'Дата',
   'AttrDateTime'         => 'Дата/Время',
   'AttrDiskBlocks'       => 'Диск (блоки)',
   'AttrDiskSpace'        => 'Дисковое пространство',
   'AttrMaxScore'         => 'Макс. оценка',
   'AttrMonitorId'        => 'ID Монитора',
   'AttrMonitorName'      => 'Название Монитора',
   'AttrName'             => 'Название',
   'AttrNotes'            => 'Примечания',
   'AttrSystemLoad'       => 'Загрузка системы',
   'AttrTime'             => 'Время',
   'AttrTotalScore'       => 'Сумм. оценка',
   'AttrWeekday'          => 'День недели',
   'AttrDiskPercent'      => 'Диск %',
   'AttrDuration'         => 'Длительность',
   'AttrEndDate'          => 'Дата окончания',               // Edited - 2019-03-24
   'AttrEndDateTime'      => 'Дата/время окончания',          // Edited - 2019-03-24
   'AttrEndTime'          => 'Время окончания',               // Edited - 2019-03-24
   'AttrEndWeekday'       => 'Последний день недели',            // Added - 2018-08-30
   'AttrFilterServer'     => 'Фильтр для серверов запущен',
   'AttrFrames'           => 'Кол-во кадров',
   'AttrId'               => 'ID',
   'AttrMaxScore'         => 'Макс. оценка',
   'AttrMonitorId'        => 'ID Монитора',
   'AttrMonitorName'      => 'Название Монитора',
   'AttrMonitorServer'    => 'Монитор серверов запущен', // Edited - 2019-03-24
   'AttrName'             => 'Имя',
   'AttrNotes'            => 'Примечание',
   'AttrStartDate'        => 'Дата начала',             // Edited - 2019-03-24
   'AttrStartDateTime'    => 'Дата/Время начала',        // Edited - 2019-03-24
   'AttrStartTime'        => 'Время начала',             // Edited - 2019-03-24
   'AttrStartWeekday'     => 'Первый день недели',          // Added - 2018-08-30
   'AttrStateId'          => 'Состояние запуска',              // Added - 2018-08-30
   'AttrStorageArea'      => 'Область хранилища',           // Added - 2018-08-30
   'AttrStorageServer'    => 'Серверное хранилище', // Added - 2018-08-30
   'AttrSystemLoad'       => 'Нагрузка проц.',
   'AttrTotalScore'       => 'Сумм. оценка',
   'AttrServerId'         => 'ID сервера',
   'AttrServerName'       => 'Название сервера',
   'Auto'                 => 'Автоматически',
   'AutoStopTimeout'      => 'Тайм-аут автоостановки',
   'Available'            => 'Доступно',              // Added - 2009-03-31
   'AvgBrScore'           => 'Сред.<br/>оценка',
   'BadAnalysisFPS'       => 'Анализ к/с должен быть положительным целым числом или значением с плавающей точкой', // Added - 2015-07-22
   'BadAnalysisUpdateDelay'=> 'Анализ задержки обновления должен быть установлен в целое число от нуля и выше', // Added - 2015-07-23
   'Back'                 => 'Назад',
   'Background'           => 'Фон',
   'BackgroundFilter'     => 'Выплнить фильтр в фоновом режиме',
   'BadAlarmFrameCount'   => 'Количество кадров тревоги должно быть целым числом от одного и выше',
   'BadAlarmMaxFPS'       => 'Макс. к/с для тревоги, должно быть положительным целым числом или значением с плавающей точкой',
   'BadAnalysisFPS'       => 'Частота анализа должна быть положительной', // Added - 2015-07-22
   'BadAnalysisUpdateDelay'=> 'Задержка обновления анализа должна быть целочисленной и большей либо равной нулю', // Added - 2015-07-23
   'BadChannel'           => 'Канал должен быть установлен в целое число от ноля и выше',
   'BadColours'           => 'Цвет должен быть установлен в допустимое значение', // Added - 2011-06-15
   'BadDevice'            => 'Неправильный путь к устройству',
   'BadFPSReportInterval' => 'Период обновления буфера индикации скорости должен быть целым числом от 0 и выше',
   'BadFormat'            => 'Формат должен быть установлен в целое число от ноля и выше',
   'BadFrameSkip'         => 'Количество пропускаемых кадров должно быть целым числом от нуля и выше',
   'BadMotionFrameSkip'   => 'Количество пропускаемых кадров движения должно быть целым числом от нуля и выше',
   'BadHeight'            => 'Высота должна быть задана допустимым значением',
   'BadHost'              => 'Узел должен быть установлен в действительный IP-адрес или в имя хоста, не включающий http://',
   'BadImageBufferCount'  => 'Размер буфера изображения должен быть целым числом от 10 и выше',
   'BadLabelX'            => 'Метка координат Х должна быть целым числом больше или равным нулю',
   'BadLabelY'            => 'Метка координат Y должна быть целым числом больше или равным нулю',
   'BadMaxFPS'            => 'Максимальный FPS должен быть положительным целым числом или значением с плавающей точкой',
   'BadNameChars'         => 'Названия могут содержать только алфавитно-цифровые символы плюс дефис и знак подчеркивания',
   'BadPalette'           => 'В палитре должно быть установлено допустимое значение', // Added - 2009-03-31
   'BadPath'              => 'Неправильный путь',
   'BadPort'              => 'Неверный порт',
   'BadPostEventCount'    => 'Количество изображений после события должно быть целым числом от нуля и выше',
   'BadPreEventCount'     => 'Предварительное количество изображений событий должно быть, по крайней мере, равно нулю и быть меньше, чем размер буфера изображений',
   'BadRefBlendPerc'      => 'Процент прозрачности опорного кадра должен быть положительным целым числом',
   'BadSectionLength'     => 'Длина секции должна быть целым числом от 30 и выше',
   'BadSignalCheckColour' => 'Цвет проверки сигнала должен быть действителеной строкой цвета RGB',
   'BadSourceType'        => 'Тип \"Веб сайт\" требует установки Функции в значение \"Monitor\"', // Added - 2018-08-30
   'BadStreamReplayBuffer'=> 'Буфер потокового воспроизведения должен быть целочисленным, больше или равным нулю',
   'BadWarmupCount'       => 'Кол-во кадров разогрева должно быть целочисленным, больше или равным нулю',
   'BadWebColour'         => 'Цвет web-интерфейса должен быть действительным',
   'BadWebSitePath'       => 'Пожалуйста, введите полное название сайта (url), включая http:// или https://', // Edited - 2019-03-24
   'BadWidth'             => 'Ширина должна быть задана допустимым значением',
   'Bandwidth'            => 'канал',
   'BandwidthHead'        => 'канал',	// This is the end of the bandwidth status on the top of the console, different in many language due to phrasing
   'BlobPx'               => 'Пкс. пятна (blob)',
   'BlobSizes'            => 'Размер пятна (blob)',
   'Blobs'                => 'Кол-во пятен (blobs)',
   'Brightness'           => 'Яркость',
   'Buffer'               => 'Буфер',                 // Added - 2015-04-18
   'Buffers'              => 'Буферы',
   'CSSDescription'       => 'Изменение CSS по умолчанию для данного компьютера', // Added - 2015-04-18
   'CanAutoFocus'         => 'Автофокусировка',
   'CanAutoGain'          => 'Автокоэффициент усиления',
   'CanAutoIris'          => 'Автоуправление диафрагмой',
   'CanAutoWhite'         => 'Автоуправление балансом белого',
   'CanAutoZoom'          => 'Автозум',
   'CanFocus'             => 'Фокусировка',
   'CanFocusAbs'          => 'Абсолютная фокусировка',
   'CanFocusCon'          => 'Непрерывная фокусировка',
   'CanFocusRel'          => 'Относительная фокусировка',
   'CanGain'              => 'Коэффициент усиления',
   'CanGainAbs'           => 'Абсолютный коэффициент усиления',
   'CanGainCon'           => 'Непрерывный коэффициент усиления',
   'CanGainRel'           => 'Относительный коэффициент усиления',
   'CanIris'              => 'Регулировка диафрагмы',
   'CanIrisAbs'           => 'Абсолютная регулировка диафрагмы',
   'CanIrisCon'           => 'Непрерывная регулировка диафрагмы',
   'CanIrisRel'           => 'Относительная Регулировка диафрагмы',
   'CanMove'              => 'Перемещение',
   'CanMoveAbs'           => 'Абсолютное перемещение',
   'CanMoveCon'           => 'Непрерывное перемещение',
   'CanMoveDiag'          => 'Диагональное перемещение',
   'CanMoveMap'           => 'Перемещение по точкам',
   'CanMoveRel'           => 'Относительное перемещение',
   'CanPan'               => 'Панорама' ,
   'CanReset'             => 'Сброс',
   'CanReboot'            => 'Перезагрузка',  // Added - 2019-03-24
   'CanSetPresets'        => 'Создание предустановок',
   'CanSleep'             => 'Сон',
   'CanTilt'              => 'Наклон',
   'CanWake'              => 'Пробуждение',
   'CanWhite'             => 'Баланс белого',
   'CanWhiteAbs'          => 'Абсолютный баланс белого',
   'CanWhiteBal'          => 'Баланс белого',
   'CanWhiteCon'          => 'Непрерывный баланс белого',
   'CanWhiteRel'          => 'Относительный баланс белого',
   'CanZoom'              => 'Увеличение',
   'CanZoomAbs'           => 'Абсолютное увеличение',
   'CanZoomCon'           => 'Непрерывное увеличение',
   'CanZoomRel'           => 'Относительное увеличение',
   'Cancel'               => 'Отменить',
   'CancelForcedAlarm'    => 'Отменить форсированную тревогу',
   'CaptureHeight'        => 'Размер по Y',
   'CaptureMethod'        => 'Метод захвата',         // Added - 2009-02-08
   'CapturePalette'       => 'Палитра захвата',
   'CaptureResolution'    => 'Захват разрешения',     // Added - 2015-04-18
   'CaptureWidth'         => 'Размер по X',
   'Cause'                => 'Причина',
   'CheckMethod'          => 'Метод проверки тревоги',
   'ChooseDetectedCamera' => 'Выберите обнаруженную камеру', // Added - 2009-03-31
   'ChooseFilter'         => 'Выбрать фильтр',
   'ChooseLogFormat'      => 'Выберите формат журнала',    // Added - 2011-06-17
   'ChooseLogSelection'   => 'Выберите журнал', // Added - 2011-06-17
   'ChoosePreset'         => 'Выберите предустановку',
   'Clear'                => 'Очистить',                     // Added - 2011-06-16
   'CloneMonitor'         => 'Клонировать монитор', //added by Graf - 2016-09-01
   'Close'                => 'Закрыть',
   'Codec'                => 'Кодек',
   'Colour'               => 'Цвет',
   'Command'              => 'Команда',
   'Component'            => 'Компонент',              // Added - 2011-06-16
   'Config'               => 'Настройка',
   'ConfiguredFor'        => 'Настроен на',
   'ConfirmDeleteEvents'  => 'Вы действителено хотите удалить выбранные события?',
   'ConfirmPassword'      => 'Подтвердите пароль',
   'ConjAnd'              => 'и',
   'ConjOr'               => 'или',
   'Console'              => 'Сервер',
   'ContactAdmin'         => 'Пожалуйста обратитесь к вашему администратору.',
   'Continue'             => 'Продолжить',
   'Contrast'             => 'Контраст',
   'Current'              => 'Текущий',                // Added - 2015-04-18
   'Control'              => 'Управление',
   'ControlAddress'       => 'Адрес управляемой камеры',
   'ControlCap'           => 'Возможность управления.',
   'ControlCaps'          => 'Возможности управления.',
   'ControlDevice'        => 'Устройство управления',
   'ControlType'          => 'Тип управления',
   'Controllable'         => 'Управляемая',
   'CpuLoad'              => 'Загрузка CPU',
   'Cycle'                => 'Цикл',
   'CycleWatch'           => 'Циклический просмотр',
   'DateTime'             => 'Дата/Время',              // Added - 2011-06-16
   'Day'                  => 'День',
   'Deinterlacing'        => 'Устранение чересстрочности',          // Added - 2015-04-18
   'Delay'                => 'Задержка',                  // Added - 2015-04-18
   'Debug'                => 'Отладка',
   'DefaultCodec'         => 'Кодек по умолчанию',
   'DefaultRate'          => 'Скорость по умолчанию',
   'DefaultScale'         => 'Масштаб по умолчанию',
   'DefaultView'          => 'Просмотр по умолчанию',
   'Delete'               => 'Удалить',
   'DeleteAndNext'        => 'Удалить &amp; след.',
   'DeleteAndPrev'        => 'Удалить &amp; пред.',
   'DeleteSavedFilter'    => 'Удалить сохраненный фильтр',
   'Description'          => 'Описание',
   'DetectedProfiles'     => 'Обнаруженные профили',      // Added - 2015-04-18
   'DetectedCameras'      => 'Обнаруженные камеры',       // Added - 2009-03-31
   'Device'               => 'Устройство',                 // Added - 2009-02-08
   'DeviceChannel'        => 'Канал',
   'DeviceFormat'         => 'Формат',
   'DeviceNumber'         => 'Номер устройства',
   'DevicePath'           => 'Путь к устройству',
   'Devices'              => 'Устройства',
   'Dimensions'           => 'Размеры',
   'DisableAlarms'        => 'Запретить тревогу',
   'Disk'                 => 'Диск',
   'DiskSpace'            => 'Место на диске',
   'Display'              => 'Отображение',                // Added - 2011-01-30
   'Displaying'           => 'Показано',             // Added - 2011-06-16
   'Donate'               => 'Пожертвовать',
   'DonateAlready'        => 'Нет, я уже пожертвовал',
   'DonateEnticement'     => 'Вы уже запустили ZoneMinder и мы надеемся, находите его полезным дополнением к безопасности вашего дома или рабочего места. Хотя, ZoneMinder есть и будет оставаться свободным продуктом с открытым исходным кодом, его развитие и поддержка стоит денег. Если у вас есть желание поддержать дальнейшее развитие новых возможностей, пожалуйста, рассмотрите возможность пожертвования. Пожертвования, конечно, необязательны, но очень ценны и вы можете пожертвовать как маленькую, так и большую сумму, на ваше усмотрение.<br><br> Если вы хотите пожертвовать, пожалуйста, выберите опцию ниже или перейдите по ссылке http://www.zoneminder.com/donate.html в вашем браузере.<br><br>Спасибо за использование ZoneMinder и не забудьте посетить форумы на ZoneMinder.com для поддержки или предложений о том, как сделать ваш опыт с ZoneMinder еще лучше.',
   'DonateRemindDay'      => 'Пока нет, напомните еще раз через 1 день',
   'DonateRemindHour'     => 'Пока нет, напомните еще раз через 1 час',
   'DonateRemindMonth'    => 'Пока нет, напомните еще раз через 1 месяц',
   'DonateRemindNever'    => 'Нет, я не хочу жертвовать, никогда не напомнить',
   'DonateRemindWeek'     => 'Пока нет, напомните еще раз через 1 неделю',
   'DonateYes'            => 'Да, я хотел бы пожертвовать сейчас',
   'DoNativeMotionDetection'=> 'Задейвствовать встроенное обнаружение движения',
   'Download'             => 'Скачать',
   'DownloadVideo'        => 'Скачать видео',         // Added - 2019-03-24
   'DownloadEvent'        => 'Скачать видео',         // Added - 2019-03-24
   'DuplicateMonitorName' => 'Скопировать имя монитора', // Added - 2019-03-25
   'Duration'             => 'Длительность',
   'Edit'                 => 'Редактировать',
   'EditLayout'           => 'Редактирование шаблона',            // Added - 2019-03-25
   'Email'                => 'Email',
   'EnableAlarms'         => 'Разрешить тревогу',
   'Enabled'              => 'Разрешен',
   'EnterNewFilterName'   => 'Введите новое название фильтра',
   'Error'                => 'Ошибка',
   'ErrorBrackets'        => 'Ошибка: количество открывающих и закрывающих скобок должно быть одинаковым',
   'Etc'                  => 'и т.д.',
   'Event'                => 'Событие',
   'EventFilter'          => 'Фильтр событий',
   'EventId'              => 'Id события',
   'EventName'            => 'Название события',
   'EventPrefix'          => 'Префикс события',
   'Events'               => 'События',
   'Exclude'              => 'Исключить',
   'Execute'              => 'Выполнить',
   'Exif'                 => 'Включить EXIF информацию в изображение', // Added - 2019-03-24
   'Export'               => 'Экспорт',
   'ExportDetails'        => 'Экспорт деталей события',
   'ExportFailed'         => 'Экспорт не удался',
   'ExportFormat'         => 'Формат экспортируемого файла',
   'ExportFormatTar'      => 'Tar',
   'ExportFormatZip'      => 'Zip',
   'ExportFrames'         => 'Экспорт деталей кадра',
   'ExportImageFiles'     => 'Экспорт файлов изображений',
   'ExportLog'            => 'Экспорт журнала',             // Added - 2011-06-17
   'ExportMiscFiles'      => 'Экспорт других файлов (если имеются)',
   'ExportOptions'        => 'Настройки экспорта.',
   'ExportSucceeded'      => 'Экспорт успешно завершен',       // Added - 2009-02-08
   'ExportVideoFiles'     => 'Экспорт видео-файлов (если имеются)',
   'Exporting'            => 'Идет Экспорт',
   'FPS'                  => 'к/c',
   'FPSReportInterval'    => 'Интервал отчета',
   'FTP'                  => 'FTP',
   'Far'                  => 'Отдалить',
   'FastForward'          => 'Быстрая перемотка',
   'Feed'                 => 'Питание',
   'Ffmpeg'               => 'Ffmpeg',                 // Added - 2009-02-08
   'Filter'               => 'Фильтр',                 // Added - 2015-04-18
   'FilterLog'            => 'Фильтр журнала',                 // Added - 2015-04-18
   'File'                 => 'Файл',
   'FilterArchiveEvents'  => 'Архивировать выбранное',
   'FilterDeleteEvents'   => 'Удалить все совпадения',
   'FilterEmailEvents'    => 'Отправить выбранное по Email',
   'FilterEmailTo'                     => 'Получатель письма',
   'FilterEmailSubject'          => 'Тема письма',
   'FilterEmailBody'             => 'Содержимое письма',   
   'FilterExecuteEvents'  => 'Выполнить команду над выбранным',
   'FilterMessageEvents'  => 'Детали сообщ. выбранного',
   'FilterMoveEvents'     => 'Переместить все совпадения',       // Added - 2018-08-30
   'FilterPx'             => 'Пкс фильтра',
   'FilterUnset'          => 'Вы должны указать ширину и высоту фильтра',
   'FilterUploadEvents'   => 'Загрузить все совпадения',
   'FilterVideoEvents'    => 'Создать видео для всех совпадений',
   'Filters'              => 'Фильтры',
   'First'                => 'Первый',
   'FlippedHori'          => 'Перевернуть горизонтально',
   'FlippedVert'          => 'Перевернуть вертикально',
   'FnNone'               => 'Не выбран',            // Added 2013.08.16.
   'FnMonitor'            => 'Наблюдение',            // Added 2013.08.16.
   'FnModect'             => 'Запись при движении',            // Added 2013.08.16.
   'FnRecord'             => 'Постоянная запись',            // Added 2013.08.16.
   'FnMocord'             => 'Постоянная запись с обл. детекции',            // Added 2013.08.16.
   'FnNodect'             => 'Внешние тригеры',            // Added 2013.08.16.
   'Focus'                => 'Фокусировка',
   'ForceAlarm'           => 'Включить тревогу',
   'Format'               => 'Формат',
   'Frame'                => 'Кадр',
   'FrameId'              => 'Id кадра',
   'FrameRate'            => 'Скорость',
   'FrameSkip'            => 'Пропускать кадры',
   'Free'                 => 'Свободно',
   'MotionFrameSkip'      => 'Пропускать кадры движения',
   'Frames'               => 'Кадры',
   'Func'                 => 'Функ.',
   'Function'             => 'Режим',
   'Gain'                 => 'Усиление',
   'General'              => 'Общие',
   'GenerateVideo'        => 'Генерировать видео',
   'GeneratingVideo'      => 'Генерируется видео',
   'GoToZoneMinder'       => 'Перейти на ZoneMinder.com',
   'Grey'                 => 'ч/б',
   'Group'                => 'Группа',
   'Groups'               => 'Группы',
   'HasFocusSpeed'        => 'Скорость фокуса',
   'HasGainSpeed'         => 'Скорость усиления',
   'HasHomePreset'        => 'Домашняя предустановка',
   'HasIrisSpeed'         => 'Скорость диафрагмы',
   'HasPanSpeed'          => 'Скорость панорамир.',
   'HasPresets'           => 'Предустановки',
   'HasTiltSpeed'         => 'Скорость наклона',
   'HasTurboPan'          => 'Укоренное панорамир.',
   'HasTurboTilt'         => 'Укоренный наклон',
   'HasWhiteSpeed'        => 'Скорость баланса белого',
   'HasZoomSpeed'         => 'Скорость увеличения',
   'High'                 => 'широкий',
   'Height'               => 'Высота',
   'HighBW'               => 'Широкий канал',
   'Home'                 => 'Исходное положение',
   'Hostname'             => 'Имя хоста',               // Edited - 2019-03-25
   'Hour'                 => 'Час',
   'Hostname'             => 'Название хоста', // added by Graf - 2016-09-01
   'Hue'                  => 'Оттенок',
   'Id'                   => 'Id',
   'Idle'                 => 'Наблюдение',
   'Ignore'               => 'Игнорировать',
   'Image'                => 'Изображение',
   'ImageBufferSize'      => 'Размер буфера изображения',
   'Images'               => 'Изображения',
   'In'                   => 'In',
   'Include'              => 'Включить',
   'Inverted'             => 'Инвертировать',
   'Iris'                 => 'Наклон',
   'KeyString'            => 'Key String',
   'Label'                => 'Метка',
   'Language'             => 'Язык',
   'Last'                 => 'Последний',
   'Layout'               => 'Расположение',                 // Added - 2009-02-08
   'Level'                => 'Уровень',                  // Added - 2011-06-16
   'Libvlc'               => 'Libvlc',
   'LimitResultsPost'     => 'результатами;', // This is used at the end of the phrase 'Limit to first N results only'
   'LimitResultsPre'      => 'Ограничиться только первыми', // This is used at the beginning of the phrase 'Limit to first N results only'
   'Line'                 => 'Строка',                   // Added - 2011-06-16
   'LinkedMonitors'       => 'Привязанные Мониторы',
   'List'                 => 'Список',
   'ListMatches'          => 'Список совпадений',           // Edited - 2019-03-25
   'Load'                 => 'Нагрузка',
   'Local'                => 'Локальный',
   'Log'                  => 'Журнал',                    // Added - 2011-06-16
   'LoggedInAs'           => 'Пользователь',
   'Logging'              => 'Ведение журналов',                // Added - 2011-06-16
   'LoggingIn'            => 'Вход в систему',
   'Login'                => 'Войти',
   'Logout'               => 'Выйти',
   'Logs'                 => 'Журналы',                   // Added - 2011-06-17
   'Low'                  => 'узкий',
   'LowBW'                => 'Узкий канал',
   'Main'                 => 'Основные',
   'Man'                  => 'Док.',
   'Manual'               => 'Документация',
   'Mark'                 => 'Метка',
   'Max'                  => 'Макс.',
   'MaxBandwidth'         => 'Макс. канал',
   'MaxBrScore'           => 'Макс.<br/>оценка',
   'MaxFocusRange'        => 'Макс. диапазон фокусировки',
   'MaxFocusSpeed'        => 'Макс. скорость фокусировки',
   'MaxFocusStep'         => 'Макс. шаг фокусировки',
   'MaxGainRange'         => 'Макс. диапазон усиления',
   'MaxGainSpeed'         => 'Макс. скорость усиления',
   'MaxGainStep'          => 'Макс. шаг усиления',
   'MaxIrisRange'         => 'Макс. диапазон диафрагмы',
   'MaxIrisSpeed'         => 'Макс. скорость диафрагмы',
   'MaxIrisStep'          => 'Макс. шаг диафрагмы',
   'MaxPanRange'          => 'Макс. диапазон панорамы',
   'MaxPanSpeed'          => 'Макс. скорость панорамы',
   'MaxPanStep'           => 'Макс. шаг панорамы',
   'MaxTiltRange'         => 'Макс. диапазон наклона',
   'MaxTiltSpeed'         => 'Макс. скорость наклона',
   'MaxTiltStep'          => 'Макс. шаг наклона',
   'MaxWhiteRange'        => 'Макс. диапазон баланса белого',
   'MaxWhiteSpeed'        => 'Макс. скорость баланса белого',
   'MaxWhiteStep'         => 'Макс. шаг баланса белого',
   'MaxZoomRange'         => 'Макс. диапазон зума',
   'MaxZoomSpeed'         => 'Макс. скорость зума',
   'MaxZoomStep'          => 'Макс. Шаг зума',
   'MaximumFPS'           => 'Максимальная частота кадров',
   'Medium'               => 'средний',
   'MediumBW'             => 'Обычный канал',
   'Memory'               => 'ОЗУ',
   'Message'              => 'Сообщение',                // Added - 2011-06-16
   'MinAlarmAreaLtMax'    => 'Минимальная площадь тревоги должна быть меньше, чем максимальная',
   'MinAlarmAreaUnset'    => 'Вы должны указать минимальное количество пикселей тревоги',
   'MinBlobAreaLtMax'     => 'Минимальная площадь объекта должна быть меньше чем максимальная',
   'MinBlobAreaUnset'     => 'Вы должны указать минимальное количество пикселей пятна (blob)',
   'MinBlobLtMinFilter'   => 'Минимальная площадь пятна (blob) должна быть меньше или равна минимальной площади фильтра',
   'MinBlobsLtMax'        => 'Минимальное число объектов должно быть меньше чем максимальное',
   'MinBlobsUnset'        => 'Вы должны указать минимальный счетчик пятна (blob)',
   'MinFilterAreaLtMax'   => 'Минимальная площадь фильтра должна быть меньше, чем максимальная',
   'MinFilterAreaUnset'   => 'Вы должны указать минимальный счетчик фильтра пикселей',
   'MinFilterLtMinAlarm'  => 'Минимальная площадь фильтра должна быть меньше или равна минимальной площади тревоги',
   'MinFocusRange'        => 'Мин. диапазон фокусировки',
   'MinFocusSpeed'        => 'Мин. скорость фокусировки',
   'MinFocusStep'         => 'Мин. шаг фокусировки',
   'MinGainRange'         => 'Мин. диапазон усиления',
   'MinGainSpeed'         => 'Мин. скорость усиления',
   'MinGainStep'          => 'Мин. шаг усиления',
   'MinIrisRange'         => 'Мин. диапазон диафрагмы',
   'MinIrisSpeed'         => 'Мин. скорость диафрагмы',
   'MinIrisStep'          => 'Мин. шаг диафрагмы',
   'MinPanRange'          => 'Мин. диапазон панорамы',
   'MinPanSpeed'          => 'Мин. скорость панорамы',
   'MinPanStep'           => 'Мин. шаг панорамы',
   'MinPixelThresLtMax'   => 'Нижний порог кол-ва пикселей должен быть ниже верхнего порога кол-ва пикселей',
   'MinPixelThresUnset'   => 'Вы должны указать минимальный порог пикселей',
   'MinTiltRange'         => 'Мин. диапазон наклона',
   'MinTiltSpeed'         => 'Мин. скорость наклона',
   'MinTiltStep'          => 'Мин. шаг наклона',
   'MinWhiteRange'        => 'Мин. диапазон баланса белого',
   'MinWhiteSpeed'        => 'Мин. скорость баланса белого',
   'MinWhiteStep'         => 'Мин. шаг баланса белого',
   'MinZoomRange'         => 'Мин. диапазон зума',
   'MinZoomSpeed'         => 'Мин. скорость зума',
   'MinZoomStep'          => 'Мин. шаг зума',
   'Misc'                 => 'Разное',
   'Mode'                 => 'Режим',                   // Added - 2015-04-18
   'Monitor'              => 'Монитор',
   'MonitorIds'           => 'Id&nbsp;Мониторов',
   'MonitorPreset'        => 'Предустановки монитора.',
   'MonitorPresetIntro'   => 'Выберите подходящий вариант из списка ниже.<br><br>Пожалуйста, обратите внимание, что данный выбор перезапишет значения, ранее настроенные для этого монитора.<br><br>',
   'MonitorProbe'         => 'Экран поиска камер.',          // Added - 2009-03-31
   'MonitorProbeIntro'    => 'В этом списке показаны найденные аналоговые и сетевые камеры, как уже заведенные, так и доступные для выбора.<br/><br/>Выберите нужную из списка ниже.<br/><br/>Обратите внимание, что не все камеры могут быть найдены, и что выбор камеры может переписать настройки определенные для этого монитора.<br/><br/>', // Added - 2009-03-31
   'Monitors'             => 'Мониторы',
   'Montage'              => 'Общий вид',
   'MontageReview'       => 'Обзор общего вида', // added by Graf - 2016-09-01
   'Month'                => 'Месяц',
   'MotionFrameSkip'      => 'Пропустить кадры движения',
   'More'                 => 'Еще',                   // Added - 2011-06-16
   'Move'                 => 'Перемещение',
   'MtgDefault'           => 'По умолчанию',              // Added 2013.08.15.
   'Mtg2widgrd'           => 'сетка в 2 столбца',              // Added 2013.08.15.
   'Mtg3widgrd'           => 'сетка в 3 столбца',              // Added 2013.08.15.
   'Mtg4widgrd'           => 'сетка в 4 столбца',              // Added 2013.08.15.
   'Mtg3widgrx'           => 'сетка в 3 столбца, маштабируемая, увелич. при тревоге',              // Added 2013.08.15.
   'MustBeGe'             => 'должно быть больше или равно',
   'MustBeLe'             => 'должно быть меньше или равно',
   'MustConfirmPassword'  => 'Вы должны подтвердить пароль',
   'Name'                 => 'Название',
   'name'                 => 'Название',
   'Near'                 => 'Приблизить',
   'Network'              => 'Сеть',
   'New'                  => 'Нов.',
   'NewGroup'             => 'Новая группа',
   'NewLabel'             => 'Новая метка',
   'NewPassword'          => 'Новый пароль',
   'NewState'             => 'Новое состояние',
   'NewUser'              => 'Новый пользователь',
   'Next'                 => 'След.',
   'No'                   => 'Нет',
   'NoDetectedCameras'    => 'Камер не обнаружено',    // Added - 2009-03-31
   'NoFramesRecorded'     => 'Это событие не содежит кадров',
   'NoGroup'              => 'Нет группы',
   'NoSavedFilters'       => 'нет сохраненных фильтров',
   'NoStatisticsRecorded' => 'Статистика по этому событию/кадру не записана',
   'None'                 => 'Отсутствует',
   'NoneAvailable'        => 'не доступны',
   'Normal'               => 'Нормально',
   'Notes'                => 'Примечания',
   'NumPresets'           => 'Кол-во предустановок',
   'OnvifCredentialsIntro'=> 'Пожалуйста, укажите имя пользователя и пароль для выбранной камеры.<br/>Если ни один пользователь не был создан для камеры, то пользователь, приведенный здесь, будет создан с указанным паролем.<br/><br/>', // Added - 2015-04-18
   'OnvifProbe'           => 'ONVIF',                  // Added - 2015-04-18
   'OnvifProbeIntro'      => 'В этом списке показаны найденные ONVIF камеры, как уже заведенные, так и доступные для выбора.<br/><br/>Выберите нужную из списка ниже.<br/><br/>Обратите внимание, что не все камеры могут быть найдены, и что выбор камеры может переписать настройки определенные для этого монитора.<br/><br/>', // Added - 2015-04-18
   'Off'                  => 'Выкл.',
   'On'                   => 'Вкл.',
   'OpEq'                 => 'равно',
   'OpGt'                 => 'больше',
   'OpGtEq'               => 'больше либо равно',
   'OpNe'                 => 'не равно',
   'OpNotIn'              => 'не в списке',
   'OpNotMatches'         => 'не совпадает',
   'OpIn'                 => 'в списке',
   'OpIs'                 => 'является',                     // Added - 2018-08-30
   'OpIsNot'              => 'не является',                 // Added - 2018-08-30
   'OpLt'                 => 'меньше',
   'OpLtEq'               => 'меньше или равно',
   'OpMatches'            => 'совпадает',
   'OpNe'                 => 'не равно',
   'OpNotIn'              => 'не в списке',
   'OpNotMatches'         => 'не совпадает',
   'Open'                 => 'Открыть',
   'OptionHelp'           => 'Помощь по параметру:',
   'OptionRestartWarning' => 'Эти изменения подействуют только после перезапуска программы.',
   'OptionalEncoderParam' => 'Необязательные параметры кодировщика', // Added - 2019-03-24
   'Options'              => 'Параметры',
   'OrEnterNewName'       => 'или введите новое имя',
   'Order'                => 'Порядок',
   'Orientation'          => 'Ориентация',
   'Out'                  => 'Out',
   'OverwriteExisting'    => 'Перезаписать существующее',
   'Paged'                => 'По страницам',
   'Pan'                  => 'Панорама',
   'PanLeft'              => 'Панорама влево',
   'PanRight'             => 'Панорама впрао',
   'PanTilt'              => 'Панорама/Наклон',
   'Parameter'            => 'Парамер',
   'Password'             => 'Пароль',
   'PasswordsDifferent'   => 'Пароли не совпадают',
   'Paths'                => 'Пути',
   'PathToZMS'            => 'Путь до<br/> ZMS',
   'PathToIndex'          => 'Путь до<br/> index.php',
   'PathToApi'            => 'Путь до<br/> API',
   'Pause'                => 'Пауза',
   'Phone'                => 'Телефон',
   'PhoneBW'              => 'Телефонная линия',
   'Pid'                  => 'PID',                    // Added - 2011-06-16
   'PixelDiff'            => 'Разница в пикселях',
   'Pixels'               => 'в пикселях',
   'Play'                 => 'Воспроизвести',
   'PlayAll'              => 'Воспроизвести все',
   'PleaseWait'           => 'Пожалуйста подождите',
   'Plugins'              => 'Плагины',
   'Point'                => 'Пункт',
   'PostEventImageBuffer' => 'Буфер после события',
   'PreEventImageBuffer'  => 'Буфер до события',
   'PreserveAspect'       => 'Сохранять пропорции',
   'Preset'               => 'Предустановка',
   'Presets'              => 'Предустановки',
   'Prev'                 => 'Пред.',
   'ProfileProbe'         => 'Поиск потока',           // Added - 2015-04-18
   'ProfileProbeIntro'    => 'В этом списке показаны существующие профили потока выбранной камеры.<br/><br/>Выберите нужный из списка ниже.<br/><br/>Обратите внимание, что ZoneMinder не может добавить дополнительный профиль, и что выбор профиля может переписать настройки определенные для этого монитора.<br/><br/>', // Added - 2015-04-18
   'Progress'             => 'Прогресс',               // Added - 2015-04-18
   'Probe'                => 'Поиск камер',                  // Added - 2009-03-31
   'Protocol'             => 'Протокол',
   'RTSPDescribe'         => 'Использовать RTSP URL для ответа', // Edited - 2019-03-25
   'RTSPTransport'        => 'Транспортный протокол RTSP', // Edited - 2019-03-25
   'Rate'                 => 'Скорость',
   'Real'                 => 'Реальная',
   'RecaptchaWarning'     => 'Не верный ключ reCaptcha. Пожалуйста, исправьте его, иначе reCaptcha не будет работать', // Added - 2018-08-30
   'Record'               => 'Запись',
   'RecordAudio'          => 'Записывать звук',
   'RefImageBlendPct'     => 'Смещение опорного кадра, %',
   'AlarmRefImageBlendPct' => 'Смещение опорного кадра тревоги, %',
   'Refresh'              => 'Обновить',
   'Remote'               => 'Удалённый',
   'RemoteHostPort'       => 'Порт на удалённом хосте',
   'RemoteHostSubPath'    => 'Подпуть удалённого хоста',    // Added - 2009-02-08
   'RemoteImageColours'   => 'Палитра в захваченном изображении',
   'RemoteMethod'         => 'Удалённый метод',          // Added - 2009-02-08
   'RemoteProtocol'       => 'Удалённый протокол',        // Added - 2009-02-08
   'RemoteHostName'       => 'Удалённый хост',
   'RemoteHostPath'       => 'Путь на удалённом хосте',
   'Rename'               => 'Переименовать',
   'Replay'               => 'Воспроизведение',
   'ReplayAll'            => 'Все события',
   'ReplayGapless'        => 'Беспрерывные события',
   'ReplaySingle'         => 'Одиночное событие',
   'ReportEventAudit'     => 'Отчёт о событиях аудита',
   'Reset'                => 'Сбросить',
   'ResetEventCounts'     => 'Обнулить счетчик событий',
   'Restart'              => 'Перезапустить',
   'Restarting'           => 'Перезапускается',
   'RestrictedCameraIds'  => 'Id запрещенных камер',
   'RestrictedMonitors'   => 'Ограничить мониторами',
   'ReturnDelay'          => 'Задержка возврата (сек.)',
   'ReturnLocation'       => 'Точка возврата',
   'Rewind'               => 'Назад',
   'RotateLeft'           => 'Повернуть влево',
   'RotateRight'          => 'Повернуть вправо',
   'RunLocalUpdate'       => 'Пожалуйста, запустите zmupdate.pl для обновления', // Added - 2011-05-25
   'RunMode'              => 'Режим работы',
   'RunState'             => 'Состояние',
   'Running'              => 'Выполняется',
   'Save'                 => 'Сохранить',
   'SaveAs'               => 'Сохранить как',
   'SaveFilter'           => 'Сохранить фильтр',
   'SaveJPEGs'            => 'Сохранить JPEG-и',             // Edited - 2019-03-24
   'Score'                => 'Оценка',
   'Scale'                => 'Масштаб',
   'Secs'                 => 'Сек.',
   'Sectionlength'        => 'Длина секции',
   'Select'               => 'Выбор',
   'SelectFormat'         => 'Выбор Формата',          // Added - 2011-06-17
   'SelectLog'            => 'Выбор Журнала',             // Added - 2011-06-17
   'SelectMonitors'       => 'Выбор Мониторов',
   'SelfIntersecting'     => 'Ребра многоугольника не должны пересекаться',
   'Server'               => 'Сервер', // addedd by Graf - 2016-09-01
   'Servers'              => 'Серверы', // addedd by Graf - 2016-09-01
   'Set'                  => 'Установка',
   'SetNewBandwidth'      => 'Установка новой ширины канала',
   'SetPreset'            => 'Набор предустановок',
   'Settings'             => 'Настройки',
   'ShowFilterWindow'     => 'Показать окно фильтра',
   'ShowZones'            => 'Показать зоны',
   'ShowTimeline'         => 'Показать график',
   'SignalCheckColour'    => 'Цвет контроля сигнала',
   'SignalCheckPoints'    => 'Точки контроля сигнала',    // Added - 2018-08-30
   'Size'                 => 'Размер',
   'SkinDescription'      => 'Смена оформления по умолчанию для данного компьютера', // Added - 2011-01-30
   'Sleep'                => 'Сон',
   'SortAsc'              => 'По возростанию',
   'SortBy'               => 'Сортировать по',
   'SortDesc'             => 'По Убыванию',
   'Source'               => 'Источник',
   'SourceColours'        => 'Цвета источника',         // Added - 2009-02-08
   'SourcePath'           => 'Путь к источнику',            // Added - 2009-02-08
   'SourceType'           => 'Тип источника',
   'Speed'                => 'Скорость',
   'SpeedHigh'            => 'Высокая скорость',
   'SpeedLow'             => 'Низкая скорость',
   'SpeedMedium'          => 'Средняя скорость',
   'SpeedTurbo'           => 'Максимальная скорость',
   'Start'                => 'Запустить',
   'State'                => 'Состояние',
   'Stats'                => 'Статистика',
   'Status'               => 'Статус',
   'StatusConnected'      => 'Работает',
   'StatusNotRunning'     => 'Не работает',            // Edited - 2019-03-25
   'StatusRunning'        => 'Не записывается',          // Edited - 2019-03-25
   'StatusUnknown'        => 'Неизвестно',  
   'Step'                 => 'Шаг',
   'StepBack'             => 'Кадр назад',
   'StepForward'          => 'Кадр вперед',
   'StepLarge'            => 'Большой шаг',
   'StepMedium'           => 'Средний шаг',
   'StepNone'             => 'Без шагов',
   'StepSmall'            => 'Малый шаг',
   'Stills'               => 'Стоп-кадры',
   'Stop'                 => 'Остановить',
   'Stopped'              => 'Остановлен',
   'Storage'              => 'Хранилище',
   'StorageArea'          => 'Область хранения',           // Added - 2018-08-30
   'StorageScheme'        => 'Схема',                 // Added - 2018-08-30
   'Stream'               => 'Поток',
   'StreamReplayBuffer'   => 'Буфер потокового воспроизведения',
   'Submit'               => 'Применить',
   'System'               => 'Система',
   'TargetColorspace'     => 'Глубина цвета',      // Added - 2015-04-18
   'SystemLog'            => 'Системный журнал',             // Added - 2011-06-16
   'Tele'                 => 'Tele',
   'Thumbnail'            => 'Эскиз',
   'Tilt'                 => 'Наклон',
   'Time'                 => 'Время',
   'TimeDelta'            => 'Относительное время',
   'TimeStamp'            => 'Метка времени',
   'Timestamp'            => 'Метка_Времени',
   'Timeline'             => 'График',
   'TimelineTip1'         => 'Наведите курсор мыши на график для просмотра снимка и деталей события.',              // Added 2013.08.15.
   'TimelineTip2'         => 'Нажмите на цветные отрезки на графике, или на изображение для просмотра события.',              // Added 2013.08.15.
   'TimelineTip3'         => 'Щелкните на фоне для увиличения картинки за меньший период времени, основанный на вашем клике.',              // Added 2013.08.15.
   'TimelineTip4'         => 'Исп. кнопки внизу для уменьшения картинки или движения назад и вперед по врем-му диапазону.',              // Added 2013.08.15.
   'TimestampLabelFormat' => 'Формат метки',
   'TimestampLabelX'      => 'X-координата метки',
   'TimestampLabelY'      => 'Y-координата метки',
   'TimestampLabelSize'   => 'Размер шрифта', // added by Graf - 2016-09-01
   'Today'                => 'Сегодня',
   'Tools'                => 'Инструменты',
   'Total'                => 'Всего',                  // Added - 2011-06-16
   'Totals'               => 'Всего',                  
   'TotalBrScore'         => 'Сумм.<br/>оценка',
   'TrackDelay'           => 'Задержка обнаружения (сек.)',
   'TrackMotion'          => 'Следить за движением',
   'Triggers'             => 'Триггеры',
   'TurboPanSpeed'        => 'Турбо скорость панорамы',
   'TurboTiltSpeed'       => 'Турбо скорость наклона',
   'Type'                 => 'Тип',
   'Unarchive'            => 'Уд.&nbsp;из&nbsp;архива',
   'Undefined'            => 'Не определено',              // Added - 2009-02-08
   'Units'                => 'Ед. измерения',
   'Unknown'              => 'Неизвестно',
   'Update'               => 'Обновить',
   'UpdateAvailable'      => 'Доступно обновление ZoneMinder',
   'UpdateNotNecessary'   => 'Обновление не требуется',
   'Updated'              => 'Обновлено',                // Added - 2011-06-16
   'Upload'               => 'Загрузка',                 // Added - 2011-08-23
   'UsedPlugins'          => 'Используемые плагины',
   'UseFilter'            => 'Использовать фильтр',
   'UseFilterExprsPost'   => '&nbsp;выражений&nbsp;для&nbsp;фильтра', // This is used at the end of the phrase 'use N filter expressions'
   'UseFilterExprsPre'    => 'Испол.&nbsp;', // This is used at the beginning of the phrase 'use N filter expressions'
   'User'                 => 'Пользователь',
   'Username'             => 'Имя пользователя',
   'Users'                => 'Пользователи',
   'V4L'                  => 'V4L',                    // Added - 2015-04-18
   'V4LCapturesPerFrame'  => 'Кол-во захватов за 1 кадр',     // Added - 2015-04-18
   'V4LMultiBuffer'       => 'Мультибуферизация',        // Added - 2015-04-18
   'Value'                => 'Значение',
   'Version'              => 'Версия',
   'VersionIgnore'        => 'Игнорировать эту версию',
   'VersionRemindDay'     => 'Напомнить через день',
   'VersionRemindHour'    => 'Напомнить через час',
   'VersionRemindNever'   => 'Не говорить о новых версиях',
   'VersionRemindWeek'    => 'Напомнить через неделю',
   'Video'                => 'Видео',
   'VideoFormat'          => 'Формат видео',
   'VideoWriter'          => 'Записывать видео',
   'VideoGenFailed'       => 'Ошибка генерации видео!',
   'VideoGenFiles'        => 'Существующие видео файлы',
   'VideoGenNoFiles'      => 'Видео файлы не найдены',
   'VideoGenParms'        => 'Параметры генерации видео',
   'VideoGenSucceeded'    => 'Видео генерация выполнена успешно!',
   'VideoSize'            => 'Размер изображения',
   'View'                 => 'Просмотр',
   'ViewAll'              => 'Просм. все',
   'ViewEvent'            => 'Просм. события',
   'ViewPaged'            => 'Просм. постранично',
   'Wake'                 => 'Разбудить',
   'WarmupFrames'         => 'Кадры разогрева',
   'Watch'                => 'Смотреть',
   'Web'                  => 'Интерфейс',
   'WebColour'            => 'Цвет в Web-интерфейсе',
   'Week'                 => 'Неделя',
   'White'                => 'Белый',
   'WhiteBalance'         => 'Баланс белого',
   'Wide'                 => 'Широкий',
   'Width'                => 'Ширина',
   'X'                    => 'X',
   'X10'                  => 'X10',
   'X10ActivationString'  => 'Строка активации X10 ',
   'X10InputAlarmString'  => 'Входящая строка тревоги X10',
   'X10OutputAlarmString' => 'Исходящая строка тревоги X10',
   'Y'                    => 'Y',
   'Yes'                  => 'Да',
   'YouNoPerms'           => 'У вас не достаточно прав для доступа к этому ресурсу.',
   'Zone'                 => 'Зона',
   'ZoneAlarmColour'      => 'Цвет тревоги (Красный/Зеленый/Синий)',
   'ZoneArea'             => 'Размер зоны',
   'ZoneExtendAlarmFrames' => 'Кол-во кадров продления тревоги',
   'ZoneFilterSize'       => 'Ширина/Высота фильтра (пикс.)',
   'ZoneMinMaxAlarmArea'  => 'Мин/Макс разм. зоны тревоги',
   'ZoneMinMaxBlobArea'   => 'Мин/Макс разм. объекта',
   'ZoneMinMaxBlobs'      => 'Мин/Макс кол-во объектов',
   'ZoneMinMaxFiltArea'   => 'Мин/Макс разм. фильтр. зоны ',
   'ZoneMinMaxPixelThres' => 'Мин/Макс порог изм. пикс. (0-255)',
   'ZoneMinderLog'        => 'Журнал ZoneMinder\'а',         // Added - 2011-06-17
   'ZoneOverloadFrames'   => 'Кол-во игнорируемых кадров перегрузки',
   'ZoneExtendAlarmFrames' => 'Кол-во кадров продления тревоги',
   'Zones'                => 'Зоны',
   'Zoom'                 => 'Зум',
   'ZoomIn'               => 'Приблизить',
   'ZoomOut'              => 'Отдалить',

 );
   
 // Complex replacements with formatting and/or placements, must be passed through sprintf
$CLANG = array(
   'CurrentLogin'         => 'Текущий пользователь: \'%1$s\'',
   'EventCount'           => '%1$s %2$s', // For example '37 Events' (from Vlang below)
   'LastEvents'           => 'Последние %1$s %2$s', // For example 'Last 37 Events' (from Vlang below)
   'LatestRelease'        => 'Последняя версия: v%1$s, у Вас установлена: v%2$s.',
   'MonitorCount'         => '%1$s %2$s', // For example '4 Monitors' (from Vlang below)
   'MonitorFunction'      => 'Функция монитора %1$s',
   'RunningRecentVer'     => 'У вас установлена новейшая версия ZoneMinder, v%s.', 
   'VersionMismatch'      => 'Несоответствие версий, система версия - %1$s, версия базы данных - %2$s.', // Added - 2011-05-25
);

// The next section allows you to describe a series of word ending and counts used to
// generate the correctly conjugated forms of words depending on a count that is associated
// with that word.
// This intended to allow phrases such a '0 potatoes', '1 potato', '2 potatoes' etc to
// conjugate correctly with the associated count.
// In some languages such as English this is fairly simple and can be expressed by assigning
// a count with a singular or plural form of a word and then finding the nearest (lower) value.
// So '0' of something generally ends in 's', 1 of something is singular and has no extra
// ending and 2 or more is a plural and ends in 's' also. So to find the ending for '187' of
// something you would find the nearest lower count (2) and use that ending.
//
// So examples of this would be
// $zmVlangPotato = array( 0=>'Potatoes', 1=>'Potato', 2=>'Potatoes' );
// $zmVlangSheep = array( 0=>'Sheep' );
//
// where you can have as few or as many entries in the array as necessary
// If your language is similar in form to this then use the same format and choose the
// appropriate zmVlang function below.
// If however you have a language with a different format of plural endings then another
// approach is required . For instance in Russian the word endings change continuously
// depending on the last digit (or digits) of the numerator. In this case then zmVlang
// arrays could be written so that the array index just represents an arbitrary 'type'
// and the zmVlang function does the calculation about which version is appropriate.
//
// So an example in Russian might be (using English words, and made up endings as I
// don't know any Russian!!)
// $zmVlangPotato = array( 1=>'Potati', 2=>'Potaton', 3=>'Potaten' );
// --> actually, if written in 'translit', or russian words in english letters,
// the example would be ( 1=>"Kartoshek", 2=>"Katroshka", 3=>"Kartoshki"); :)
//
// and the zmVlang function decides that the first form is used for counts ending in
// 0, 5-9 or 11-19 and the second form when ending in 1 etc.
//

// Variable arrays expressing plurality, see the zmVlang description above
$VLANG = array(
    'Event'                => array( 1=>'Событий', 2=>'Событие', 3=>'События' ),
    'Monitor'              => array( 1=>'Мониторов', 2=>'Монитор', 3=>'Монитора' ),
);

// You will need to choose or write a function that can correlate the plurality string arrays
// with variable counts. This is used to conjugate the Vlang arrays above with a number passed
// in to generate the correct noun form.
//
// In languages such as English this is fairly simple
// Note this still has to be used with printf etc to get the right formating
/*function zmVlang( $langVarArray, $count )
{
    krsort( $langVarArray );
    foreach ( $langVarArray as $key=>$value )
    {
        if ( abs($count) >= $key )
        {
            return( $value );
        }
    }
    die( 'Error, unable to correlate variable language string' );
}*/

// This is an version that could be used in the Russian example above
// The rules are that the first word form is used if the count ends in
// 0, 5-9 or 11-19. The second form is used then the count ends in 1
// (not including 11 as above) and the third form is used when the
// count ends in 2-4, again excluding any values ending in 12-14.
//
function zmVlang( $langVarArray, $count )
{
    $secondlastdigit = ($count/10)%10;
    $lastdigit = $count%10;

    // Get rid of the special cases first, the teens
    if ( $secondlastdigit == 1 && $lastdigit != 0 )
    {
        return( $langVarArray[1] );
    }
    switch ( $lastdigit )
    {
        case 0 :
        case 5 :
        case 6 :
        case 7 :
        case 8 :
        case 9 :
        {
            return( $langVarArray[1] );
            break;
        }
        case 1 :
    {
            return( $langVarArray[2] );
            break;
        }
        case 2 :
        case 3 :
        case 4 :
        {
            return( $langVarArray[3] );
            break;
        }
    }
    die( 'Error, unable to correlate variable language string' );
}

// This is an example of how the function is used in the code which you can uncomment and
// use to test your custom function.
//$monitors = array();
//$monitors[] = 1; // Choose any number
//echo sprintf( $zmClangMonitorCount, count($monitors), zmVlang( $zmVlangMonitor, count($monitors) ) );

// In this section you can override the default prompt and help texts for the options area
// These overrides are in the form show below where the array key represents the option name minus the initial ZM_
// So for example, to override the help text for ZM_LANG_DEFAULT do
$OLANG = array(
	'OPTIONS_FFMPEG' => array(
		'Help' => "Параметры в этой области передаются FFmpeg. Несколько параметров могут быть разделены запятой.~~".
		          "Например (без использования кавычек).~~~~".
		          "\"allowed_media_types=video\" - Набор типов данных запрашиваемых у камеры (audio, video, data).~~".
		          "\"reorder_queue_size=nnn\" - Количество пакетов в буфере для обработки переупорядочивания пакетов.~~".
		          "\"loglevel=debug\" - Уровень журналирования FFmpeg (quiet, panic, fatal, error, warning, info, verbose, debug)."
	),
	'OPTIONS_LIBVLC' => array(
		'Help' => "Параметры в этой области передаются LibVLC. Несколько параметров могут быть разделены запятой.~~~~ ".
		          "Например (без использования кавычек).~~~~".
		          "\"--rtp-client-port=nnn\" - Локальный порт для использования передачи rtp-пакетов.~~~~". 
		          "\"--verbose=2\" - Уровень журналирования libVLC."
	),
	
	'LANG_DEFAULT' => array(
	    'Prompt' => "Язык веб-интерфейса по умолчанию",
	),
	'ZM_LANG_DEFAULT' => array(
		'Help' => "ZoneMinder позволяет использовать веб-интерфейс на других языках, отличных от английского, если соответствующий языковой файл был создан и присутствует."
        ),


	'AUTH_TYPE' => array(
	    'Prompt' => "Метод аутентификации пользователей", 
	),
	'ZM_AUTH_TYPE' => array(
		'Help' => "ZoneMinder можете использовать два метода аутентификации пользователей при включенном режиме \"аутентификации пользователей по логину\". Первый способ, builtin (встроенный) при котором ZoneMinder предоставляет пользователям возможность входа в систему и ведет учет их идентичности. Второй способ, remote (удаленный) позволяет взаимодействовать с другими методами, такими как базовая аутентификация http в которой проходит независимая проверка подлинности, удаленного пользователя, по протоколу http. В этом случае ZoneMinder будет использовать предложенного пользователя без дополнительной аутентификации, при условии, что такой пользователь настроен в ZoneMinder."
	),


	'AUTH_RELAY' => array(
	    'Prompt' => "Метод передачи информации об аутентификации", 
	),
	'ZM_AUTH_RELAY' => array(
		'Help' => "Когда ZoneMinder работает в режиме \"аутентификации пользователей по логину\" он может передавать данные пользователя между веб-страницами и фоновыми процессами. Для этого существует два способа. Первый hashed (хешировать), позволяет  использовать хэшированную строку, которая не содержит прямого имени пользователя или пароля, ограниченное время. Второй метод plain (в открытом виде), заключается в том, чтобы передать имя пользователя и пароль в виде обычного текста. Этот метод не рекомендуется использовать, за исключением тех случаев, когда в вашей системе нет доступных библиотек md5 или у вас полностью изолированная система без внешнего доступа. Также вы можете отключить проверку подлинности, если ваша система изолирована какими-либо другими способами, метод none (без проверки)."
	),


	'AUTH_HASH_SECRET' => array(
	    'Prompt' => "Секретное слово для шифрования хеша", 
	),
	'ZM_AUTH_HASH_SECRET' => array(
	    'Help' => "Когда ZoneMinder  работает в режиме \"аутентификации пользователей по логину\" необходимо сгенерировать хэшированную строку, содержащую зашифрованную конфиденциальную информацию, такую как имя пользователя и пароль. Хотя эти строки достаточно защищены, добавление случайного секретного слова существенно повышает безопасность."
	),


	'AUTH_HASH_IPS' => array(
	    'Prompt' => "Включить IP-адрес в хеш-аутентификацию", 
	),
	'ZM_AUTH_HASH_IPS' => array(
		'Help' => "Когда ZoneMinder работает в режиме \"аутентификации пользователей по логину\" в результирующей хеш дополнительно может включаться запрошенный IP-адрес. Это добавит еще один уровень безопасности, при котором запросы только с этого адреса могут использовать данный ключ аутентификации. Однако, в некоторых случаях, таких как доступ через мобильные сети, запрашивающий адрес может изменяться, что вызовет ошибки у большинства запросов. Этот параметр позволяет вам контролировать, будет ли IP-адрес добавлен в хэш аутентификацию. Если вы, периодически, испытываете проблемы с проверкой подлинности, отключите эту опцию."
	),


	'AUTH_HASH_LOGINS' => array(
	    'Prompt' => "Разрешить вход в систему с помощью хеш-аутентификации", 
	),
	'ZM_AUTH_HASH_LOGINS' => array(
		'Help' => "Нормальный процесс для входа в ZoneMinder осуществляется через экран входа в систему с именем пользователя и паролем. В некоторых случаях бывает необходим прямой доступ к одной или нескольким страницам, например, из стороннего приложения. Если этот параметр включен и вход в систему не выполнен, то добавление  \'auth\' к любому запросу будет включать в себя ярлык входа в систему, минуя экран входа в систему. Такое как хэш-аутентификация по времени и, при необходимости, IP-ограничения, могут позволить краткосрочный доступ к экранам ZoneMinder из других веб-страниц и пр. Для использования этого, вызывающее приложение должно будет само создать хэш проверки подлинности и убедиться, что он действителен. Если вы используете этот параметр, то должны изменить параметр AUTH HASH_SECRET на что-то уникальное."
	),

	'DIR_EVENTS' => array(
	    'Prompt' => "Каталог хранения событий", 
	),
	'ZM_DIR_EVENTS' => array(
		'Help' => "Это путь к каталогу, где хранятся все изображения событий и некоторые другие файлы. Внимание: указанный здесь каталог не может находиться  вне Web-корневого каталога. Это распространенная ошибка. Большинство пользователей никогда не должно изменять это значение. Если вы собираетесь записывать события на дополнительном диске или сетевом ресурсе, то вы должны примонтировать жесткий диск или сетевой ресурс, непосредственно в указанный здесь каталог или следуйте инструкциям на ZoneMinder Wiki в разделе «Using a dedicated Hard Drive»."
	),


	'USE_DEEP_STORAGE' => array(
	    'Prompt' => "Использовать глубокую иерархию файловой системы для хранения событий",
	),
	'ZM_USE_DEEP_STORAGE' => array(
		'Help' => "Традиционно, ZoneMinder  хранит все события монитора в одном каталоге для этого монитора. Это просто и эффективно за исключением случаев, когда у вас, в сумме, очень много событий. Некоторые файловые системы не могут хранить больше 32000 файлов в одном каталоге и даже без этого ограничения, большое число файлов в каталоге могут замедлить создание и удаление файлов. Этот параметр позволяет выбрать альтернативный способ хранения событий на год/месяц/день/час/минуту/секунду, который имеет эффект разделения событий на несколько каталогов, в результате чего получается меньше файлов на один каталог, а также облегчает  ручной переход к любым событиям, которые могут произойти в определенный момент времени или даты."
	),


	 'DIR_IMAGES' => array(
	    'Prompt' => "Каталог хранения изображений сгенерированные клиентамм ZoneMinder", 
	),
	 'ZM_DIR_IMAGES' => array(
		'Help' => "ZoneMinder генерирует множество изображений, в основном, связанные с какими-либо событиями. Они хранятся в этом каталоге.Внимание: указанный здесь каталог не может находиться  вне Web-корневого каталога. Это распространенная ошибка. Большинство пользователей никогда не должно изменять это значение. Если вы собираетесь записывать события на дополнительном диске или сетевом ресурсе, то вы должны примонтировать жесткий диск или сетевой ресурс, непосредственно в указанный здесь каталог или следуйте инструкциям на ZoneMinder Wiki в разделе «Using a dedicated Hard Drive»."
	),


	'DIR_SOUNDS' => array(
	    'Prompt' => "Каталог со звуками для использования клиентами ZoneMinder", 
	),
	'ZM_DIR_SOUNDS' => array(
		'Help' => "При желании, ZoneMinder может проиграть звуковой файл при обнаружении тревоги. В данном параметре указывается каталог, в котром нужно будет искать этот файл. Внимание: указанный здесь каталог не может находиться  вне Web-корневого каталога. Это распространенная ошибка. Большинство пользователей никогда не должно изменять это значение."  
	),


	'PATH_ZMS' => array(
	    'Prompt' => "Web-путь до потокового сервера (zms)", 
	),
	'ZM_PATH_ZMS' => array(
		'Help' => "Потоковый сервер используется для отправки кадров в браузер. По умолчанию при установке указывается путь в директорию cgi-bin. Данный параметр указывает не локальный а web путь серверу. Как правило сервер работает в режиме parsed-header, но в случае возникновения проблем вы можете использовать его в режиме non-parsed-header (nph) указав путь \'nph-zms\' вместо zms."
	),


	'COLOUR_JPEG_FILES' => array(
	    'Prompt' => "Переводить цветные изображения в черно белые", 
	),
	'ZM_COLOUR_JPEG_FILES' => array(
		'Help' => "Камеры, которые захватывают изображения в оттенках серого, могут записывать их в формате  JPEG со соответствующими оттенками серого цвета. Это сэкономит немного дискового пространства, в отличи от цветного. Однако, некоторые инструменты, такие как FFmpeg либо не работают с этим цветовым пространством, либо должны преобразовать его заранее. Установка этой опции в «yes» израсходует немного больше места, но сделает создание MPEG файлов гораздо быстрее."
	),


	'ADD_JPEG_COMMENTS' => array(
	    'Prompt' => "Добавить в заголовки jpeg файлов аннотации или комментарии", 
	),
	'ZM_ADD_JPEG_COMMENTS' => array(
		'Help' => "Jpeg файлы могут иметь ряд полей которые добавляются в заголовки файлов. В поле комментария может быть добавлен любой текст. При сохранении изображений событий в архив, данная опция поможет вам найти события с помощью стороннего программного обеспечения, которое умеет читать заголовки файлов jpeg."
	),


	'JPEG_FILE_QUALITY' => array(
	    'Prompt' => "Качество JPEG файлов любых событий (1-100)", 
	),
	'ZM_JPEG_FILE_QUALITY' => array(
		'Help' => "При обнаружении событий ZoneMinder сохраняет файлы в формате jpeg, которые можно просматривать или переводить в видео поток. Чем выше цифра, тем качественнее будут сохраняться кадры, но при слабом интернет соединении просмотр изображений может занять много времени. Чем ниже цифра, тем быстрее вы сможете просматривать события, но качество оставит желать лучшего. Этот параметр относится ко всем файлам, которые пишутся на диск, за исключением тех событий, которые сработали по тревоги."
	),


	'JPEG_ALARM_FILE_QUALITY' => array(
	    'Prompt' => "Качество JPEG файлов событий во время тревоги (1-100)", 
	),
	'ZM_JPEG_ALARM_FILE_QUALITY' => array(
		'Help' => "Это значение эквивалентно обычной настройке качества JPEG файлов установленной пунктом выше, за исключением того, что оно применяется только к изображениям, сохраненным во время тревоги, и то, если только это значение установлено в более высокое значение качества, чем в обычной настройке. Если установлено более низкое значение, то оно игнорируется.  Таким образом, оставляя это значение по умолчанию равное 0, означает использование обычной настройки качества для всех сохраненных изображений. Это необходимо для предотвращения случайного сохранения важных изображений в худшем качестве."
	),


	'JPEG_IMAGE_QUALITY' => array(
	    'Prompt' => "Качество JPEG файлов для изображений при прямой трансляции (1-100)", 
	),
	'ZM_JPEG_IMAGE_QUALITY' => array(
		'Help' => "При прямой трансляции ZoneMinder  будет захватывать изображение из буфера и кодировать его в формат JPEG перед отправкой. Этот параметр указывает, какое качество изображения должно быть использовано для кодирования этих изображений. Большее число означает лучшее качество, но меньшую степень сжатия и поэтому потребуется больше времени для просмотра при медленном соединении. Напротив, малое число означает, быстрый просмотр изображений, но низкое качество изображения. Этот параметр не применяется при просмотре событий или неподвижных изображений, так как, обычно, при чтении с диска они и так будут закодированы в качестве указанном в предыдущих параметрах."
	),


	'JPEG_STREAM_QUALITY' => array(
	    'Prompt' => "Качество JPEG файлов для изображений при прямой трансляции (1-100)", 
	),
	'ZM_JPEG_STREAM_QUALITY' => array(
		'Help' => "При прямой трансляции ZoneMinder  будет захватывать изображение из буфера и кодировать его в формат JPEG перед отправкой. Этот параметр указывает, какое качество изображения должно быть использовано для кодирования этих изображений. Большее число означает лучшее качество, но меньшую степень сжатия и поэтому потребуется больше времени для просмотра при медленном соединении. Напротив, малое число означает, быстрый просмотр изображений, но низкое качество изображения. Этот параметр не применяется при просмотре событий или неподвижных изображений, так как, обычно, при чтении с диска они и так будут закодированы в качестве указанном в предыдущих параметрах."
	),


	'MPEG_TIMED_FRAMES' => array(
	    'Prompt' => "Помечать видео кадры меткой времени, для более реалистичного воспроизведения", 
	),
	'ZM_MPEG_TIMED_FRAMES' => array(
		'Help' => "При использовании MPEG метода в качестве базового, ZoneMinder может передавать картинку двумя способами. Если данный параметр включен, то каждый кадр взятый в момент захвата помечается меткой времени. Таким образом при изменении частоты кадров (при тревоге) поток будет поддерживаться в реальном времени. Если данный параметр не включен, то частота кадра рассчитывается приблизительно. Данный параметр рекомендуется в случае возникновения проблем с выбранным методом передачи видео."
	),


	'MPEG_LIVE_FORMAT' => array(
	    'Prompt' => "Формат воспроизведения прямой трансляции", 
	),
	'ZM_MPEG_LIVE_FORMAT' => array(
		'Help' => "При использовании MPEG метода ZoneMinder может воспроизводить видео в реальном времени. Но в зависимости от платформы можно выбрать формат воспроизведения. Данный параметр позволяет выбрать видео формат посредством изменения расширения файла. По умолчанию формат ASF прекрасно работает в Windows платформе, с помощью Windows Media Player, но не факт что он будет работать на Linux платформе. И если это случится, то пожалуйста, дайте мне знать! Если этот параметр оставить пустым, то \'живые\' потоки будут воспроизводится в формате JPEG"
	),


	'MPEG_REPLAY_FORMAT' => array(
	    'Prompt' => "Формат повторного воспроизведения потока", 
	),
	'ZM_MPEG_REPLAY_FORMAT' => array(
		'Help' => "При использовании режима MPEG ZoneMinder можете повторить воспроизведение события в закодированном формате видео. Однако, обработка форматов в различных браузерах сильно варьируется. Данный параметр позволяет выбрать видео формат посредством изменения расширения файла. По умолчанию формат ASF прекрасно работает в Windows платформе, с помощью Windows Media Player, а MPG, AVI и прочие, должны работать под Linux. Если вы знаете, больше расширений работающих под Linux, пожалуйста, дайте мне знать! Если этот параметр оставить пустым, то \'живые\' потоки будут воспроизводится в формате JPEG."
	),


	'RAND_STREAM' => array(
	    'Prompt' => "Добавить случайную строку во избежании кэширования потоков", 
	),
	'ZM_RAND_STREAM' => array(
		'Help' => "Некоторые браузеры могут кэшировать потоки, используемые ZoneMinder. Для того чтобы предотвратить это, к адресу могут быть добавлены безобидные случайные строки, чтобы сделать каждый вызов в потоке уникальным."
	),


	'OPT_CAMBOZOLA' => array(
	    'Prompt' => "Установлен ли потоковый Java клиент cambozola (по желанию)", 
	),
	'ZM_OPT_CAMBOZOLA' => array(
		'Help' => "Cambozolla — это ароматизированный обезжиренный сыр, удобный Java-апплет для ZoneMinder, который используется для просмотра потока изображений в браузерах, таких как Internet Explorer, которые изначально не корректно работают с данным форматом. Рекомендуется установить данный апплет, во избежания проблем при просмотре потока в IE с http://www.charliemouse.com/code/cambozola/. Однако, если он не установлен, то изображения  можно просматривать при более низкой скорости обновления."
	),


	'PATH_CAMBOZOLA' => array(
	    'Prompt' => "Web путь до потоковго Java клиента cambozola (по желанию)", 
	),
	'ZM_PATH_CAMBOZOLA' => array(
		'Help' => "Cambozolla — это ароматизированный обезжиренный сыр, удобный Java-апплет для ZoneMinder, который используется для просмотра потока изображений в браузерах, таких как Internet Explorer, которые изначально не корректно работают с данным форматом. Рекомендуется установить данный апплет, во избежания проблем при просмотре потока в IE с http://www.charliemouse.com/code/cambozola/. Однако, если он не установлен, то изображения  можно просматривать при более низкой скорости обновления. Оставьте просто \'cambozola.jar\' если cambozola установлен в том же каталоге, что и файлы ZoneMinder."
	),


	'RELOAD_CAMBOZOLA' => array(
	    'Prompt' => "Через сколько секунд Cambozola должен быть перезагружен в режиме прямой трансляции", 
	),
	'ZM_RELOAD_CAMBOZOLA' => array(
		'Help' => "Cambozola позволяет просматривать поток в MJPEG, однако, он кэширует весь поток в кэш  на жесткий диск компьютера, установка этого параметра в число > 0 приведет к его автоматической перезагрузки после этого количества секунд, чтобы избежать заполнения жесткого диска."
	),


	'TIMESTAMP_ON_CAPTURE' => array(
	    'Prompt' => "Штамп времени изображений, во время захвата", 
	),
	'ZM_TIMESTAMP_ON_CAPTURE' => array(
		'Help' => "ZoneMinder может добавить штамп времени к изображениям двумя методами. Первый метод по умолчанию, т.е. когда этот параметр установлен, то каждое изображение получает штамп времени сразу же, во время захвата и поэтому изображение находящиеся в памяти уже помечено. Второй метод не ставит штамп времени изображений до тех пор, пока они сохраняются как часть события или доступны в Web. Штамп времени, используемый в обоих методах будет содержать то же самое время, которое сохранилось вместе с изображением. Первый метод гарантирует, что у изображения всегда будет штамп времени, независимо от любых других обстоятельств, т.е все изображения будут датируемы, даже тех, которые никогда не сохранялись или не были просмотрены. Второй метод требует, чтобы сохраняемые изображения копировались перед сохранением, иначе могут получится два штампа времени в различных масштабах. Штамп времени всегда применяет тот же масштаб и разрешение, что и изображение, т.е изображение в любом случае будет иметь четкий и корректно масштабируемый штамп времени."
	),


	'CPU_EXTENSIONS' => array(
	    'Prompt' => "Использовать дополнительные расширения процессора для повышения производительности", 
	),
	'ZM_CPU_EXTENSIONS' => array(
		'Help' => "Когда дополнительные расширения процессора, такие как SSE2 или SSE3 доступны, тогда ZoneMinder может использовать их для повышения производительности и снижения нагрузки на систему. Включение этой опции на процессорах, которые не поддерживают дополнительные расширения процессора, безвредно и не будет иметь никакого эффекта."
	),

	
	'FAST_IMAGE_BLENDS' => array(
	    'Prompt' => "Использовать быстрый алгоритм для смешивания эталонного изображения", 
	),
	'ZM_FAST_IMAGE_BLENDS' => array(
		'Help' => "Для обнаружения сигналов ZoneMinder нуждается в смешивании захваченного изображения с сохраненным эталонным изображением, чтобы обновить его для сравнения со следующим изображением. Заданный монитор контролирует, насколько новый образ влияет на эталонный образ в процентном соотношении. Есть два доступных способа. Если этот параметр установлен, то ведется быстрый расчет, который не использует умножение или деление. Такой расчет очень быстр, однако, это ограничивает возможные процентные смеси до 50%, 25%, 12.5%, 6.25%, 3.25% и 1.5%. Любой другой процент смеси будет округляться до ближайшего возможного. Альтернативой является отключении этой опции и использование стандартного смешивания, которое работает медленнее." 
	),


	'OPT_ADAPTIVE_SKIP' => array(
	    'Prompt' => "При анализе кадра пытаться обработать пропущенные кадры", 
	),
	'ZM_OPT_ADAPTIVE_SKIP' => array(
		'Help' => "В старых версиях ZoneMinder, демон анализа пытался работать одновременно с демоном захвата. Это вызывало некоторые побочные эффекты, из-за отсутствующего куска первого кадра, из за чего срабатывал сигнал тревоги, так как кадры при аварийном срабатывании должны записаться на диск и БД, прежде чем обработать следующий кадр, приводя к задержке между первыми и вторыми кадрами событием. Установка данной опции включает более новый адаптивный алгоритм, при котором демон анализа пытается обработать на столько много кадров, на сколько это возможно, пропуская кадры только в том случае, если есть опасность того что демон захвата перезапишет уже обрабатываемые кадры. Пропуска кадров величина не постоянная, она зависит от размера кольцевого буфера и оставшегося в нем места. Включение этой опции даст значительно лучший охват на начало тревоги вместо смещения любых пропущенных кадров к середине или концу события. Однако, вы должны опасаться, что это даст эффект превращения демона анализа во что-то находящееся сразу за демоном захвата и при возникновении событий и при значительных скоростях захвата кадров адаптивный алгоритм возможно не будет выдерживать и не будет иметь время реакции на быстрое нарастание захваченных кадров и таким образом это приведет к переполнению буфера." 
	),


	'MAX_SUSPEND_TIME' => array(
	    'Prompt' => "Максимальное время, при котором монитор может быть с приостановленным детектором движения", 
	),
	'ZM_MAX_SUSPEND_TIME' => array(
		'Help' => "ZoneMinder позволяет монирторам приостанавливать детектирование движения, например при протирке(мытье) камеры. Восстановление детектирования движения, обычно, зависит от оператора поэтому монитор может оказаться в постоянно приостановленном состоянии. Этот параметр позволяет вам установить максимальное время, в течение которого камера может быть приостановлена до автоматического восстановления детектирования движения." 
	),


	'OPT_REMOTE_CAMERAS' => array(
	    'Prompt' => "Использовать удаленные/сетевые камеры", 
	),
	'ZM_OPT_REMOTE_CAMERAS' => array(
		'Help' => "ZoneMinder может работать как с локальными камерами, т.е. \"привязанных\" физически к компьютеру, так и с удаленными или сетевыми камерами. Если вы будете использовать сетевые камеры выберите эту опцию." 
	),


	'NETCAM_REGEXPS' => array(
	    'Prompt' => "Использовать регулярные выражения для сопоставления с сетевыми камерами", 
	),
	'ZM_NETCAM_REGEXPS' => array(
		'Help' => "Традиционно, ZoneMinder использовал сложные регулярные выражения, чтобы справиться с множеством форматов различных производителей сетевых камер. В версиях с 1.21.1 по умолчанию используется встроенная, простая и быстрая методология сравнения с шаблоном. Это хорошо работает с большинством сетевых камер, но если у вас возникнут проблемы, то можно попробовать старый, но более гибкий, способ основанный на регулярных выражениях, выбрав эту опцию. Обратите внимание, что для использования этого метода необходимо установить в вашу систему libpcap." 
	),


	'HTTP_VERSION' => array(
	    'Prompt' => "Какую версию HTTP использовать ZoneMinder", 
	),
	'ZM_HTTP_VERSION' => array(
		'Help' => "ZoneMinder может взаимодействовать с сетевыми камерами с помощью HTTP/1.1 или HTTP/1.0 стандарта. Сервер поддерживает и нормально возвращается к версии ниже, без проблем, так что по умолчанию выбран HTTP/1.1. Однако, его можно изменить на HTTP/1.0, если необходимо решить конкретные вопросы." 
	),


	'HTTP_UA' => array(
	    'Prompt' => "Агент ZoneMinder для своей идентификации.", 
	),
	'ZM_HTTP_UA' => array(
		'Help' => "При подключении к удаленным камерам ZoneMinder идентифицирует себя по данному параметру и версии. Обычно это достаточно. Но если вам ппалась камера, которая может общаться только с определенной версией браузера, вы можете изменить эту строчку на другое значение, например Internet Explorer или Netscape и т.д." 
	),


	'HTTP_TIMEOUT' => array(
	    'Prompt' => "Как долго ZoneMinder ждать изображение от сетевой камеры (миллисекунд)", 
	),
	'ZM_HTTP_TIMEOUT' => array(
		'Help' => "Данный параметр указывает, тайм аут в миллисекундах ожидания потока от сетевой камеры, по истечении которого ZoneMinder предпримет попытку повтора." 
	),


	'MIN_RTP_PORT' => array(
	    'Prompt' => "Минимальный порт, который будет слушать ZoneMinder для RTP трафика", 
	),
	'ZM_MIN_RTP_PORT' => array(
		'Help' => "Когда ZoneMinder общается с камерами способными передать MPEG4 с помощью RTP однонаправленным (unicast) методом , необходимо указать порты для обратной связи с камерой для управления и потоком. Этот параметр определяет минимальное число порта, которое будет использовать ZoneMinder. Обычно, используются два соседних порта для каждой камеры, один для пакетов управления и один для пакетов данных. Этот порт должен быть установлен в четное число, также может потребоваться открыть порты в брандмауэре для обратной связи с камерой при использовании одноадресной(unicast) рассылки." 
	),


	'MAX_RTP_PORT' => array(
	    'Prompt' => "Махимальный порт, который будет слушать ZoneMinder для RTP трафика", 
	),
	'ZM_MAX_RTP_PORT' => array(
	    	'Help' => "Когда ZoneMinder общается с камерами способными передать MPEG4 с помощью RTP однонаправленным (unicast) методом , необходимо указать порты для обратной связи с камерой для управления и потоком. Этот параметр определяет минимальное число порта, которое будет использовать ZoneMinder. Обычно, используются два соседних порта для каждой камеры, один для пакетов управления и один для пакетов данных. Этот порт должен быть установлен в четное число, также может потребоваться открыть порты в брандмауэре для обратной связи с камерой при использовании одноадресной(unicast) рассылки. Вы также должны убедиться, что открыли по крайней мере, два порта для каждого монитора, который будет подключаться к одноадресной(unicast) сетевой камере." 
	),


	'OPT_FFMPEG' => array(
	    'Prompt' => "Установлен ли FFmpeg видео кодировщик/раскодировщик", 
	),
	'ZM_OPT_FFMPEG' => array(
		'Help' => "ZoneMinder при необходимости может кодировать серии видео-изображений в MPEG файл для просмотра, загрузки или хранения. Этот параметр позволяет указать, установлены ли у вас инструменты ffmpeg. Обратите внимание, что создание MPEG файлов может быть довольно интенсивной нагрузкой для процессора и диска, и является не обязательным параметром, так как события могут рассматриваться как видео поток и без него." 
	),


	'PATH_FFMPEG' => array(
	    'Prompt' => "Путь до ffmpeg MPEG кодировщика (по желанию)", 
	),
	'ZM_PATH_FFMPEG' => array(
		'Help' => "Этот путь должен указывать где установлен ffmpeg." 
	),


	'FFMPEG_INPUT_OPTIONS' => array(
	    'Prompt' => "Дополнительные параметры ввода FFmpeg", 
	),
	'ZM_FFMPEG_INPUT_OPTIONS' => array(
		'Help' => "У Ffmpeg может быть много вариантов в командной строке для контроля качества полученного видео. Этот параметр позволяет вам указать свой собственный набор ввода (варианты, которые даются перед опцией -i). Проверьте документацию FFmpeg для полного списка опций, которые могут быть использованы здесь." 
	),


	'FFMPEG_OUTPUT_OPTIONS' => array(
	    'Prompt' => "Дополнительные параметры вывода FFmpeg", 
	),
	'ZM_FFMPEG_OUTPUT_OPTIONS' => array(
		'Help' => "У Ffmpeg может быть много вариантов в командной строке для контроля качества полученного видео. Этот параметр позволяет вам указать свой собственный набор вывода (варианты, которые даются после опции -i). Проверьте документацию FFmpeg для полного списка опций, которые могут быть использованы здесь. Наиболее часто используется принудительная скорость вывода кадров поддерживаемая видео кодировщиком." 
	),


	'FFMPEG_FORMATS' => array(
	    'Prompt' => "Форматы FFmpeg для генерации видео", 
	),
	'ZM_FFMPEG_FORMATS' => array(
		'Help' => "FFmpeg может генерировать видео в различных форматах. Этот параметр позволяет вам перечислить те, которые вы хотели бы выбрать. Новые форматы поддерживаемые ffmpeg, так же можно добавить здесь и использовать их немедленно. Добавление \"*\" после формата указывает на то, что этот формат будет по умолчанию использоваться для веб-видео, а добавляя \"**\" определяет формат по умолчанию для видео телефона." 
	),


	'FFMPEG_OPEN_TIMEOUT' => array(
	    'Prompt' => "Время ожидания в секундах, при открытии потока", 
	),
	'ZM_FFMPEG_OPEN_TIMEOUT' => array(
		'Help' => "Открытие потока Ffmpeg может занять много времени, прежде чем станет ясно что произошел сбой; при определенных обстоятельствах, даже может произойти блокировка на неопределенный срок. Этот параметр позволяет установить максимальное время в секундах перед тем как закрыть поток и попытаться открыть его снова." 
	),


	'LOG_LEVEL_SYSLOG' => array(
	    'Prompt' => "Вести журнал в systemlog", 
	),
	'ZM_LOG_LEVEL_SYSLOG' => array(
		'Help' => "Ведение журналов ZoneMinder теперь более интегрировано между компонентами и позволяет указать место назначения записи журнала и индивидуальные уровни для каждого. Этот параметр позволяет управлять уровнем журналирования в системном журнале. Двоичные файлы ZoneMinder всегда вели журнал в системном журнале, но теперь добавлено ведение скрипт-журналов и веб-журналов. Чтобы журналы велись в systemlog, следует убедиться что установлено значение Info или Warning. Этот параметр контролирует максимальный уровень записи ведения журнала, поэтому уровень Info включает в себя уровни Warnings, Errors и т.д. Чтобы отключить ведение журналов в systemlog, установите этот параметр в значение None. Вам следует использовать осторожно параметр Debug, поскольку это может серьезно повлиять на производительность системы. Если потребуется отладка, то также будет необходимо установить компонент ниже и задать ему уровень." 
	),


	'LOG_LEVEL_FILE' => array(
	    'Prompt' => "Вести журналирование в отдельные файлы", 
	),
	'ZM_LOG_LEVEL_FILE' => array(
		'Help' => "Журналирование ZoneMinder теперь более интегрировано между компонентами и позволяет указать место назначения записи журнала и индивидуальные уровни для каждого. Этот параметр позволяет управлять уровнем журналирования, запись которого идет в отдельные файлы для различных компонентов. Такое ведение журнала полезно для отслеживания проблем конкретных компонентов, но приведет к большому количеству лог файлов. Чтобы журналирование велось в отдельные файлы, следует убедиться что установлено значение Info или Warning. Этот параметр контролирует максимальный уровень записи ведения журнала, поэтому уровень Info включает в себя уровни Warnings, Errors и т.д. Чтобы отключить журналирование в отдельные файлы, установите этот параметр в значение None. Вам следует использовать осторожно параметр Debug, поскольку это может серьезно повлиять на производительность системы, несмотря на то, что запись в отдельные файлы оказывает меньшее влияние, чем другие варианты. Если потребуется отладка, то также будет необходимо установить компонент ниже и задать ему уровень." 
	),


	'LOG_LEVEL_WEBLOG' => array(
	    'Prompt' => "Вести журналирование в weblog", 
	),
	'ZM_LOG_LEVEL_WEBLOG' => array(
		'Help' => "Журналирование ZoneMinder теперь более интегрировано между компонентами и позволяет указать место назначения записи журнала и индивидуальные уровни для каждого. Этот параметр позволяет контролировать уровень ведение журнала выходных данных из веб-интерфейса, который идет в журнал ошибок httpd. Обратите внимание на то, что журналирование ведется только для веб-интерфейса, PHP и JavaScript. И поэтому этот параметр, на самом деле, полезен только для изучения конкретных проблем с этими компонентами. Этот параметр контролирует максимальный уровень записи ведения журнала, поэтому уровень Info включает в себя уровни Warnings, Errors и т.д. Чтобы отключить журналирование в weblog, установите этот параметр в значение None. Вам следует использовать осторожно параметр Debug, поскольку это может серьезно повлиять на производительность системы. Если потребуется отладка, то также будет необходимо установить компонент ниже и задать ему уровень." 
	),


	'LOG_LEVEL_DATABASE' => array(
	    'Prompt' => "Вести журналирование в базу данных", 
	),
	'ZM_LOG_LEVEL_DATABASE' => array(
		'Help' => "Журналирование ZoneMinder теперь более интегрировано между компонентами и позволяет указать место назначения записи журнала и индивидуальные уровни для каждого. Этот параметр позволяет вам контролировать уровень журнала, который записывается в базу данных. Это новый вариант, который может сделать просмотр журнала проще и понятнее, а также дает общее представление о работе системы. Если у вас высоко нагруженная система, то вполне возможно, что использование этой опции, при росте размера таблицы, может замедлить ее работу . Убедитесь, что в опции LOG_DATABASE_LIMIT используется приемлемый размер. Этот параметр контролирует максимальный уровень записи ведения журнала, поэтому уровень Info включает в себя уровни Warnings, Errors и т.д. Чтобы отключить журналирование в базу данных, установите этот параметр в значение None. Вам следует использовать осторожно параметр Debug, поскольку это может серьезно повлиять на производительность системы. Если потребуется отладка, то также будет необходимо установить компонент ниже и задать ему уровень." 
	),


	'LOG_DATABASE_LIMIT' => array(
	    'Prompt' => "Максимальное количество записей журнала для хранения", 
	),
	'ZM_LOG_DATABASE_LIMIT' => array(
		'Help' => "Если вы используете журналирование в базу данных, то скоро получите большое количество записей в таблице журналов. Этот параметр позволяет указать количество таких записей для хранения. Если вы укажите в этой опции число больше нуля, то указанное число будет использоваться для определения максимального числа строк, если меньше или равно нулю, то это будет означать отсутствие ограничения и не рекомендуется. Также, вы можете установить значения времени, например такое как «<n> day», которое означает «хранить записи не старше указанного значения». Можно указывать «hour», «day», «week», «month» и «year», обратите внимание, что значения должны быть в единственном числе (без использования «s» в конце). Таблица журналов очищается периодически, так что, в одно и тоже время возможно большее количество строк в журнале, чем ожидалось." 
	),


	'LOG_DEBUG' => array(
	    'Prompt' => "Включить режим отладки", 
	),
	'ZM_LOG_DEBUG' => array(
		'Help' => "ZoneMinder компоненты, как правило, поддерживают в журналировании режим отладки для помощи в диагностике проблем. Бинарные компоненты имеют несколько уровней отладки, тогда как другие компоненты имеют только один. Обычно, эта возможность отключена для минимизации потерь производительности и во избежании слишком быстрого заполнения журналов. Этот параметр включает другие варианты, которые позволят настроить дополнительную отладочную информацию для вывода. Изменения вступят в силу после перезапуска компонентов." 
	),


	'LOG_DEBUG_TARGET' => array(
	    'Prompt' => "У каких компонентов включить режим отладки", 
	),
	'ZM_LOG_DEBUG_TARGET' => array(
		'Help' => "Есть три области отладки. Оставляя этот параметр пустым означает, что все компоненты будут использовать режим отладки (не рекомендуется). Установка этого параметра в «_ <component>», например «_zmc», ограничит режим отладки только этим компонентом. Установка этого параметра в «_ <component>_ <identity>», например в «_zmc_m1» ограничит режим отладки только этим экземпляром компонента. Для отладки сценариев используйте их имена без расширения «.pl», например «_zmvideo», а для отладки проблем, связанных с веб-интерфейсом используйте «_web». Можно указать несколько параметров разделяя их символом «|»." 
	),


	'LOG_DEBUG_LEVEL' => array(
	    'Prompt' => "Уровень отладки", 
	),
	'ZM_LOG_DEBUG_LEVEL' => array(
		'Help' => "Имеется 9 уровней отладки. Чем больше номер тем подробнее отладка, уровень - 0, без отладки. Однако, не все уровни используются всеми компонентами. Кроме того, если установить высокий уровень отладки, то это может привести к большим объёмам выходной информации, что может помешать нормальной работе. По этой причине, тщательно обдумайте и установите приемлемый уровень. У скриптов и веб-интерфейса есть только один уровень дополнительной отладки равный его включению или выключению." 
	),


	'LOG_DEBUG_FILE' => array(
	    'Prompt' => "Иной файл отладки", 
	),
	'ZM_LOG_DEBUG_FILE' => array(
		'Help' => "Этот параметр позволяет указать иной файл для записи данных отладки. Все компоненты имеют свой файл журнала по умолчанию, который часто находится в /tmp или /var/log и в этот файл будут записаны данные отладки при пустом значении данного параметра. Все данные отладки и другие выходные данные журнала будут временно перенаправлены в файл прописанный здесь. Этот параметр является простым именем файла и все данные отладки нескольких компонентов будут записаны в один и тот же файл, что может привести к нежелательным последствиям. Добавление знака «+» к имени файла, создаст файл с суффиксом идентификатора процесса «PID». Таким образом, вывод отладки при каждом запуске компонента сохранится отдельно. Так же это рекомендуется во избежании перезаписи журнала при последующих запусках. Вам следует убедиться, что заданы разрешения на запись в файл и каталог, указанные здесь." 
	),


	'LOG_CHECK_PERIOD' => array(
	    'Prompt' => "Период времени, используемый при расчете общей работоспособности системы", 
	),
	'ZM_LOG_CHECK_PERIOD' => array(
		'Help' => "Когда ZoneMinder ведет журнал событий в базе данных он может ретроспективно изучить количество произошедших предупреждений и ошибок для вычисления общего состояния работоспособности системы. Этот параметр позволяет указать какой период исторических событий использовать в этом расчете. Это значение выражается в секундах и игнорируется, если LOG_LEVEL_DATABASE имеет значение None." 
	),


	'LOG_ALERT_WAR_COUNT' => array(
	    'Prompt' => "Количество предупреждений (WAR), указывающих на тревожное состояние системы", 
	),
	'ZM_LOG_ALERT_WAR_COUNT' => array(
		'Help' => "Когда ZoneMinder ведет журнал событий в базе данных он может ретроспективно изучить количество произошедших предупреждений и ошибок для вычисления общего состояния работоспособности системы. Этот параметр позволяет указать, сколько предупреждений (warnings) должно произойти в определенный период времени для генерации тревоги об общем состоянии системы. Нулевое значение означает, что предупреждения (WAR) не считаются. Это значение игнорируется, если LOG_LEVEL_DATABASE имеет значение None." 
	),

	'LOG_ALERT_ERR_COUNT' => array(
	    'Prompt' => "Количество ошибок (ERR), указывающих на тревожное состояние системы", 
	),
	'ZM_LOG_ALERT_ERR_COUNT' => array(
		'Help' => "Когда ZoneMinder ведет журнал событий в базе данных он может ретроспективно изучить количество произошедших предупреждений и ошибок для вычисления общего состояния работоспособности системы. Этот параметр позволяет указать, сколько ошибок (ERR) должно произойти в определенный период времени для генерации тревоги об общем состоянии системы. Нулевое значение означает, что ошибки (ERR) не считаются. Это значение игнорируется, если LOG_LEVEL_DATABASE имеет значение None." 
	),

	'LOG_ALERT_FAT_COUNT' => array(
	    'Prompt' => "Количество фатальных ошибок (FAT), указывающих на тревожное состояние системы", 
	),
	'ZM_LOG_ALERT_FAT_COUNT' => array(
		'Help' => "Когда ZoneMinder ведет журнал событий в базе данных он может ретроспективно изучить количество произошедших предупреждений и ошибок для вычисления общего состояния работоспособности системы. Этот параметр позволяет указать, сколько фатальных ошибок (FAT) должно произойти в определенный период времени (включая панику «PANIC») для генерации тревоги об общем состоянии системы. Нулевое значение означает, что фатальные ошибки (FAT) не считаются. Это значение игнорируется, если LOG_LEVEL_DATABASE имеет значение None." 
	),

	'LOG_ALARM_WAR_COUNT' => array(
	    'Prompt' => "Количество предупреждений (WAR), указывающих на аварийное состояние системы", 
	),
	'ZM_LOG_ALARM_WAR_COUNT' => array(
		'Help' => "Когда ZoneMinder ведет журнал событий в базе данных он может ретроспективно изучить количество произошедших предупреждений и ошибок для вычисления общего состояния работоспособности системы. Этот параметр позволяет указать, сколько предупреждений (warnings) должно произойти в определенный период времени для генерации общего аварийного состояния системы. Нулевое значение означает, что предупреждения (WAR) не считаются. Это значение игнорируется, если LOG_LEVEL_DATABASE имеет значение None." 
	),

	'LOG_ALARM_ERR_COUNT' => array(
	    'Prompt' => "Количество ошибок (ERR), указывающих на аварийное состояние системы", 
	),
	'ZM_LOG_ALARM_ERR_COUNT' => array(
		'Help' => "Когда ZoneMinder ведет журнал событий в базе данных он может ретроспективно изучить количество произошедших предупреждений и ошибок для вычисления общего состояния работоспособности системы. Этот параметр позволяет указать, сколько ошибок (ERR) должно произойти в определенный период времени для генерации общего аварийного состояния системы. Нулевое значение означает, что ошибки (ERR) не считаются. Это значение игнорируется, если LOG_LEVEL_DATABASE имеет значение None." 
	),

	'LOG_ALARM_FAT_COUNT' => array(
	    'Prompt' => "Количество фатальных ошибок (FAT), указывающих на аварийное состояние системы", 
	),
	'ZM_LOG_ALARM_FAT_COUNT' => array(
		'Help' => "Когда ZoneMinder ведет журнал событий в базе данных он может ретроспективно изучить количество произошедших предупреждений и ошибок для вычисления общего состояния работоспособности системы. Этот параметр позволяет указать, сколько фатальных ошибок (FAT) должно произойти в определенный период времени (включая панику «PANIC») для генерации общего аварийного состояния системы. Нулевое значение означает, что фатальные ошибки (FAT) не считаются. Это значение игнорируется, если LOG_LEVEL_DATABASE имеет значение None." 
	),

	'RECORD_EVENT_STATS' => array(
	    'Prompt' => "При слишком медленной производительности выключить запись событий статистической информации", 
	),
	'ZM_RECORD_EVENT_STATS' => array(
		'Help' => "Эта версия ZoneMinder записывает подробные сведения о событиях в таблице статистики (Stats). Что может помочь в профилировании оптимальных параметров для зон, хотя на сегодняшний день, это не просто. Однако, в будущих выпусках это будет сделано более легко и интуитивно, особенно с большой выборкой событий. По умолчанию установлен параметр «yes» позволяющий собрать эту информацию, но если вы беспокоитесь о производительности вы можете его отключить, в этом случае статистическая информация не будет сохранена." 
	),

	'RECORD_DIAG_IMAGES' => array(
	    'Prompt' => "Записывать промежуточные диагностические изображения тревоги (возможно замедление производительности)", 
	),
	'ZM_RECORD_DIAG_IMAGES' => array(
		'Help' => "В дополнение к записям событий статистики, вы также можете записывать промежуточные диагностические изображения, которые отображают результаты контроля и обработки, возникающие при попытке определить, имело ли место событие тревоги. Существует несколько изображений, созданных для каждого кадра и зоны каждого сигнала тревоги или аварии, что может оказать огромное влияние на производительность. Включайте этот параметр только для отладки или анализа. И когда он вам больше не понадобится, не забудьте выключить его." 
	),

	'DUMP_CORES' => array(
	    'Prompt' => "Создание файлов дампа памяти (core-файлов) на неожиданный отказ процесса", 
	),
	'ZM_DUMP_CORES' => array(
		'Help' => "Когда возникает неустранимая ошибка в бинарном процессе ZoneMinder, традиционно он оказывается в ловушке и подробности записываются в журналы для дальнейшего анализа. Однако, в некоторых случаях проще диагностировать ошибку, если создается отдельный файл, который является дампом памяти процесса на момент возникновения ошибки. Эти записи могут быть проанализированы в интерактивном режиме в отладчике и отобразят больше или лучше информации, чем та, которая доступна из журналов. Этот параметр рекомендуется только для опытных пользователей, в противном случае оставьте значение по умолчанию. Примечание: использование этого параметра будет означать, что не будет никаких записей в журналах о смерти процесса, он просто будет остановлен, однако, журнал zmdc будет содержать запись об этом. Также, обратите внимание, что вам, возможно, придется явно включить создание файла дампа памяти (core-файла) в системе через команду «ulimit -c» или иным способом, в противном случае файл не будет создан независимо от значения этого параметра." 
	),

	'PATH_MAP' => array(
	    'Prompt' => "Путь к сопоставленным в памяти файлам которые может использовать ZoneMinder", 
	),
	'ZM_PATH_MAP' => array(
		'Help' => "Исторически, ZoneMinder использует метод межпроцессного взаимодействия (IPC) разделяемой памяти для разделяемых данных между процессами. В этом есть свои преимущества и недостатки. Данная версия ZoneMinder может использовать альтернативный метод сопоставления в памяти, для этого нужно включить директиву «- -enable-mmap» во время компиляции. Что потребует меньшей настройки системы и, обычно, является более гибче. Однако, потребуется каждый сегмент разделяемых данных сопоставлять в файл на файловой системе. Этот параметр указывает, куда направлять эти сопоставленные файлы. Вы должны убедиться, что по указанному пути имеется достаточно места на диске для этих файлов и для лучшей производительности следует использовать файловую систему tmpfs или ramdisk, в противном случае доступ к диску может сделать этот метод медленнее, чем регулярная разделяемая память." 
	),

	'PATH_SOCKS' => array(
	    'Prompt' => "Путь к различным файлам сокетов для использования ZoneMinder", 
	),
	'ZM_PATH_SOCKS' => array(
		'Help' => "ZoneMinder, обычно, использует сокеты Unix где это возможно. Это уменьшает потребность в назначении портов и предотвращает внешние приложения от возможного ущерба демонов. Однако, каждый сокет требует создания файла .sock. Этот параметр указывает, где данный файл сокета должен создаваться." 
	),

	'PATH_LOGS' => array(
	    'Prompt' => "Путь до файлов журналов, которые генерируют демоны ZoneMinder", 
	),
	'ZM_PATH_LOGS' => array(
		'Help' => "Существуют различные демоны, которые использует ZoneMinder для выполнения разных задач. Большинство этих демонов генерирует файлы журналов, которые необходимо где-то сохранять. Эти файлы можно удалить, если они не требуются для отладки." 
	),

	'PATH_SWAP' => array(
	    'Prompt' => "Путь к расположению временных изображений, которые используются при потоковом воспроизведении", 
	),
	'ZM_PATH_SWAP' => array(
		'Help' => "Буферизация воспроизведения требует хранения временных файлов изображений для каждого экземпляра потоковых демонов. Этот параметр определяет, где будут храниться эти изображения. На самом деле, изображения будут храниться в каталогах на уровнях ниже этого расположения и будут автоматически очищаться после определенного периода времени." 
	),

	'WEB_TITLE_PREFIX' => array(
	    'Prompt' => "Префикс названия, отображается в каждом окне", 
	),
	'ZM_WEB_TITLE_PREFIX' => array(
		'Help' => "Если вы используете более одного ZoneMinder, то этот параметр может быть полезен для отображения разных названий для каждого из них. Изменения в этом параметре позволяют настроить заголовки окон для включения дополнительной информации для идентификации." 
	),

	'WEB_RESIZE_CONSOLE' => array(
	    'Prompt' => "Должна ли консоль изменять размер окна при необходимости", 
	),
	'ZM_WEB_RESIZE_CONSOLE' => array(
		'Help' => "Традиционно, главное окно web-консоли ZoneMinder изменяет свой размер сжимаясь до размера достаточного для того, чтобы показать только существующие мониторы.Это сделано для того, чтобы окно выглядело ненавязчивым, но у всех вкусы разные, тем более если окно открывается во вкладке браузеров которые поддерживают этот вид макета. Отключите данный параметр, чтобы размер окна не изменялся." 
	),

	'WEB_POPUP_ON_ALARM' => array(
	    'Prompt' => "Поместить окно монитора по верх остальных окон, при возникновении тревоги", 
	),
	'ZM_WEB_POPUP_ON_ALARM' => array(
		'Help' => "При прямой трансляции видео на мониторах, вы можете указать, хотите ли вы чтобы окно, которое могло быть свернуто или закрыто другим окном, всплывало по верх всех окон, при возникновении тревоги. Это может быть полезным, например, если камеры установлены над дверью, окно может всплыть по верх остальных окон, если кто-то подошел к двери." 
	),

	'OPT_X10' => array(
	    'Prompt' => "Поддержка взаимодействия с X10 устройствами", 
	),
	'ZM_OPT_X10' => array(
		'Help' => "Если у вас установлена система «Умный дом», то ZoneMinder можно использовать для инициирования или реагирования на X10 сигналы, при условии, что у вашего компьютера есть соответствующий интерфейс контроллера. Этот параметр указывает, будут ли варианты X10 доступны в клиентском браузере." 
	),

	'X10_DEVICE' => array(
	    'Prompt' => "Порт к которому подключен контролер X10", 
	),
	'ZM_X10_DEVICE' => array(
		'Help' => "Если у вас есть контролер X10 (например, XM10U), подключенный к вашему компьютеру, то в этом параметре указывается порт к которому он подключен, по умолчанию это /dev/ttyS0, последовательный или COM-1 порт." 
	),

	'X10_HOUSE_CODE' => array(
	    'Prompt' => "Какой домашний код X10 должен использоваться", 
	),
	'ZM_X10_HOUSE_CODE' => array(
		'Help' => "Все X10 устройства сгруппированы по их идентификации и принадлежат одному домашнему коду. В этом параметре указывается такой идентификатор, равный одной латинской букве от А до Р." 
	),

	'X10_DB_RELOAD_INTERVAL' => array(
	    'Prompt' => "Как часто демон X10 перезагружает данные мониторов из базы данных (в секундах)", 
	),
	'ZM_X10_DB_RELOAD_INTERVAL' => array(
		'Help' => "Zmx10 демон периодически проверяет базу данных, чтобы найти, какие X10 события или в результате чего вызвана тревога. Этот параметр определяет, как часто должна происходить такая проверка, зачастую это может быть довольно большое значение." 
	),

	'WEB_SOUND_ON_ALARM' => array(
	    'Prompt' => "Должно ли окно монитора воспроизводить звуковой сигнал при срабатывании тревоги", 
	),
	'ZM_WEB_SOUND_ON_ALARM' => array(
		'Help' => "При просмотре прямой трансляции можно указать хотите ли вы, чтобы окно монитора воспроизводило звуковой сигнал при срабатывании тревоги." 
	),

	'WEB_ALARM_SOUND' => array(
	    'Prompt' => "Звуковой файл сигнала тревоги, поместите его в каталог со звуками", 
	),
	'ZM_WEB_ALARM_SOUND' => array(
		'Help' => "Вы можете указать звуковой файл который будет воспроизводиться, если возникнет тревога во время просмотра прямой трансляции монитора. Он может быть любого формата который понимает ваш браузер. Этот файл должен быть помещен в каталог со звуками, определенный ранее." 
	),

	'WEB_COMPACT_MONTAGE' => array(
	    'Prompt' => "Компактный скомпонованный режим просмотра, методом удаления дополнительных деталей.", 
	),
	'ZM_WEB_COMPACT_MONTAGE' => array(
		'Help' => "Скомпонованный режим просмотра показывает все активные мониторы в одном окне, включая небольшое меню, содержащее информацию о каждом мониторе. Это может генерировать дополнительный трафик и сделать размер окна больше чем нужно. Включив данный параметр удаляется вся посторонняя информация и просто показываются изображения." 
	),

	'OPT_FAST_DELETE' => array(
	    'Prompt' => "Для скорости удалять только записи событий из базы данных", 
	),
	'ZM_OPT_FAST_DELETE' => array(
		'Help' => "Обычно, событие созданное в результате тревоги, состоит из записей в одной или нескольких таблиц базы данных, а также различных связанных с ним файлов. При одновременном удалении большого числа событий в браузере может уйти много времени. Рекомендуется установить этот параметр, который означает, что браузер клиента удалит лишь записи в таблице событий и события больше не будут отображаться в списке, а физическое удаление с диска постепенно произведет демон zmaudit." 
	),

	'STRICT_VIDEO_CONFIG' => array(
	    'Prompt' => "Игнорировать фатальные ошибки в настройках конфигурации видео ", 
	),
	'ZM_STRICT_VIDEO_CONFIG' => array(
		'Help' => "При установке различных атрибутов видео на некоторых видео устройствах возможны сообщения об ошибках, хотя, на самом деле, операция была успешной. Включение этого параметра не отменит сообщения о таких ошибках, они по-прежнему будут появляться, но не смогут убить демона захвата видео. Обратите внимание, что при включение данного параметра игнорируются все ошибки, включая те, которые являются подлинными и которые могут привести к не правильной работе видео-захвата. Используйте этот параметр с осторожностью." 
	),

	'SIGNAL_CHECK_POINTS' => array(
	    'Prompt' => "Количество точек, проверяемых в захваченном кадре, для определения потери сигнала", 
	),
	'ZM_SIGNAL_CHECK_POINTS' => array(
		'Help' => "Для камер, подключенных локально, ZoneMinder может проверить отсутствие сигнала проверяя определенное количество случайных точек в каждом полученном кадре. Если при проверке все эти точки будут одного и того же цвета, то это расценивается как потеря сигнала от камеры. Когда это происходит, закрываются все открытые события и генерируется короткое событие потери сигнала в один кадр до возврата сигнала. В данном параметре указывается количество точек необходимых для проверки. Обратите внимание, что здесь указывается максимум, не все найденные точки проверяются по цвету и прекращают любые дальнейшие проверки, на самом деле, в большинстве случаев проверяется лишь несколько точек. Сетевые камеры и камеры основанные на файлах, никогда не проверяются." 
	),

	'V4L_MULTI_BUFFER' => array(
	    'Prompt' => "Использовать более одного буфера для устройств Video 4 Linux", 
	),
	'ZM_V4L_MULTI_BUFFER' => array(
		'Help' => "Лучшая производительность, при использовании устройств Video 4 Linux, обычно, достигается путем использования нескольких буферов, т.е. при не завершенной обработке предыдущего изображения, разрешается захватить следующее изображение. Если у вас есть несколько устройств использующие один вход на карте, который требует переключения, то этот метод может вызывать ситуацию, когда кадры из одного источника смешиваются с кадрами из другого. Выключение этого параметра не допускает множественную буферизацию, в результате чего получается более медленный, но более стабильный захват изображений. Этот параметр игнорируется для нелокальных камер и если имеется только единственный вход на чипе захвата. Данный параметр ссылается на подобную проблему в параметре CAPTURES_PER_FRAME и, как правило, вы должны изменить значение только одного из параметров. Если у вас есть разные карты захвата, которым нужны разные значения, то можно переопределить их в каждом отдельном мониторе исходной страницы." 
	),

	'CAPTURES_PER_FRAME' => array(
	    'Prompt' => "Количество захваченных изображений на один вернувшийся кадр для общих локальных камер.", 
	),
	'ZM_CAPTURES_PER_FRAME' => array(
		'Help' => "Если вы используете камеры подсоединенные к плате видеозахвата, у которой несколько входов обрабатывает один чип захвата, то иногда, получаются изображения с чересстрочной разверткой кадров в обратном порядке, в результате получается изображение плохого качества и характерный гребень по краям внешнего вида. Увеличение параметра позволяет принудительно захватывать дополнительные изображения до тех пор, пока одно из них не будет выбрано в качестве захваченного кадра. Что позволяет устройству захвата «успокоиться» и воспроизводить изображения лучшего качества ценой понижения скорости захвата. Этот параметр не оказывает никакого эффекта на (а) сетевые камеры и (b) на платы с несколькими входами обрабатываемые не одним чипом захвата,. Данный параметр ссылается на подобную проблему в параметре V4L_MULTI_BUFFER и, как правило, вы должны изменить значение только одного из параметров. Если у вас есть разные карты захвата, которым нужны разные значения, то можно переопределить их в каждом отдельном мониторе исходной страницы." 
	),

	'FILTER_RELOAD_DELAY' => array(
	    'Prompt' => "Как часто (в секундах) загружать фильтры в zmfilter", 
	),
	'ZM_FILTER_RELOAD_DELAY' => array(
		'Help' => "ZoneMinder позволяет сохранять фильтры в базе данных, по некоторым событиям которые удовлетворяют таким критериям как, отправка по электронной почте, удаление, загрузка на удаленный компьютер и т.д. Демон zmfilter загружает эти события и проверяет их актуальность. Этот параметр определяет, как часто загружать фильтры из базы данных для получения последних версий или новых фильтров. Если не менять фильтры очень часто, то может быть установлено большое значение." 
	),

	'FILTER_EXECUTE_INTERVAL' => array(
	    'Prompt' => "Как часто (в секундах) запускать автоматическое сохраненные фильтров", 
	),
	'ZM_FILTER_EXECUTE_INTERVAL' => array(
		'Help' => "ZoneMinder позволяет сохранять фильтры в базе данных, по некоторым событиям которые удовлетворяют таким критериям как, отправка по электронной почте, удаление, загрузка на удаленный компьютер и т.д. Демон zmfilter загружает эти события и проверяет их актуальность. Этот параметр определяет, как часто сохранять фильтры событий в базе данных. Если вы хотите быстрого реагирования на новые события, то у данного параметра должно быть наименьшее значение, однако, это может увеличить общую нагрузку на систему и повлиять на производительность других элементов." 
	),

	'OPT_UPLOAD' => array(
	    'Prompt' => "Должен ли ZoneMinder поддерживать загрузку событий из фильтров", 
	),
	'ZM_OPT_UPLOAD' => array(
	    	'Help' => "В ZoneMinder можно создать фильтры, удовлетворяющих определенным критериям событий, по загрузке на удаленный сервер для архивирования. Этот параметр указывает, доступна ли такая функциональность." 
	),

	'UPLOAD_ARCH_FORMAT' => array(
	    'Prompt' => "В каком формате создавать загруженные события", 
	),
	'ZM_UPLOAD_ARCH_FORMAT' => array(
		'Help' => "Загруженные события могут храниться в файлах формата .TAR или .ZIP, этот параметр определяет в каком именно. Обратите внимание, что для их использования у вас должны быть установлены модули perl Archive::Tar и/или Archive::Zip." 
	),

	'UPLOAD_ARCH_COMPRESS' => array(
	    'Prompt' => "Сжимать архивные файлы", 
	),
	'ZM_UPLOAD_ARCH_COMPRESS' => array(
		'Help' => "При создании архивных файлов они могут быть сжаты. Однако, в целом, изображения и так уже сжаты и дополнительное сжатие сохраняет лишь минимальный объем пространства по сравнению с использованием процессора для их создания. Включите этот параметр, если готовы тратить в пустую ресурсы процессора и ограничены в дисковом пространстве на удаленном сервере или, если у вас узкий канал связи." 
	),

	'UPLOAD_ARCH_ANALYSE' => array(
	    'Prompt' => "Включить файлы анализа в архив", 
	),
	'ZM_UPLOAD_ARCH_ANALYSE' => array(
		'Help' => "При создании, архивные файлы могут содержать либо только записанные кадры, либо записанные кадры и кадры которые вызвали тревогу с анализируемым изображением с выделенной измененной областью. Этот параметр контролирует включение таких файлов в архив. Включайте кадры анализа только, если у вас есть широкополосный канал связи к удаленному серверу или, в первую очередь, если вам нужна помощь в выяснении причины тревоги, архивы с этими файлами могут быть значительно больших размеров." 
	),

	'UPLOAD_PROTOCOL' => array(
	    'Prompt' => "Какой протокол использовать для передачи событий", 
	),
	'ZM_UPLOAD_PROTOCOL' => array(
		'Help' => "ZoneMinder может загружать события на удаленный сервер с помощью FTP или SFTP. Регулярный FTP широко поддерживается, но не очень безопасен, в то время как SFTP (Secure FTP) работает по ssh соединению, шифруется и использует регулярные ssh порты. Обратите внимание, что для их использования у вас должны быть установлены соответствующие модули perl Net::FTP или Net::SFTP, в зависимости от вашего выбора." 
	),

	'UPLOAD_FTP_HOST' => array(
	    'Prompt' => "Удаленный сервер для загрузки", 
	),
	'ZM_UPLOAD_FTP_HOST' => array(
		'Help' => "Вы можете использовать фильтры для указания ZoneMinder загрузить события на удаленный ftp-сервер. Этот параметр указывает имя или IP-адрес FTP-сервера." 
	),

	'UPLOAD_HOST' => array(
	    'Prompt' => "Удаленный сервер для загрузки событий", 
	),
	'ZM_UPLOAD_HOST' => array(
		'Help' => "Вы можете использовать фильтры для указания ZoneMinder загрузить события на удаленный сервер. Этот параметр указывает имя или IP-адрес сервера." 
	),

	'UPLOAD_PORT' => array(
	    'Prompt' => "Порт на удаленном сервере загрузки, если используется не по умолчанию (только для SFTP)", 
	),
	'ZM_UPLOAD_PORT' => array(
		'Help' => "Вы можете использовать фильтры для указания ZoneMinder загрузить события на удаленный сервер. Если вы используете протокол SFTP, то в этом параметре можно указать конкретный порт, используемый для связи. Если этот параметр останется пустым, то по умолчанию, будет использован порт 22. Этот параметр игнорируется для FTP загрузок." 
	),

	'UPLOAD_FTP_USER' => array(
	    'Prompt' => "Имя пользователя FTP", 
	),
	'ZM_UPLOAD_FTP_USER' => array(
		'Help' => "Вы можете использовать фильтры для указания ZoneMinder загрузить события на удаленный FTP-сервер. Этот параметр указывает имя пользователя которое должен использовать ZoneMinder для входа на FTP-сервер для передачи." 
	),

	'UPLOAD_USER' => array(
	    'Prompt' => "Имя пользователя на удаленном сервере", 
	),
	'ZM_UPLOAD_USER' => array(
		'Help' => "Вы можете использовать фильтры для указания ZoneMinder загрузить события на удаленный сервер. Этот параметр указывает имя пользователя которое должен использовать ZoneMinder для входа на удаленный сервер для передачи." 
	),

	'UPLOAD_FTP_PASS' => array(
	    'Prompt' => "Пароль на FTP-сервере", 
	),
	'ZM_UPLOAD_FTP_PASS' => array(
		'Help' => "Вы можете использовать фильтры для указания ZoneMinder загрузить события на удаленный FTP-сервер. Этот параметр указывает пароль который должен использовать ZoneMinder для входа на FTP-сервер для передачи." 
	),

	'UPLOAD_PASS' => array(
	    'Prompt' => "Пароль на удаленном сервере", 
	),
	'ZM_UPLOAD_PASS' => array(
		'Help' => "Вы можете использовать фильтры для указания ZoneMinder загрузить события на удаленный сервер. Этот параметр указывает пароль который должен использовать ZoneMinder для входа на удаленный сервер для передачи.Если вы используете сертикфикат на основе логинов для SFTP серверов, то можете оставить этот параметр пустым." 
	),

	'UPLOAD_FTP_LOC_DIR' => array(
	    'Prompt' => "Локальный каталог для создания загружаемых файлов", 
	),
	'ZM_UPLOAD_FTP_LOC_DIR' => array(
		'Help' => "Вы можете использовать фильтры для указания ZoneMinder загрузить события на удаленный FTP-сервер. Этот параметр указывает локальный каталог, который ZoneMinder следует использовать для временной загрузки файлов. Эти те файлы, которые создаются из событий, загружаются и затем удаляются." 
	),

	'UPLOAD_LOC_DIR' => array(
	    'Prompt' => "Локальный каталог для создания загружаемых файлов", 
	),
	'ZM_UPLOAD_LOC_DIR' => array(
		'Help' => "Вы можете использовать фильтры для указания ZoneMinder загрузить события на удаленный сервер. Этот параметр указывает локальный каталог, который ZoneMinder следует использовать для временной загрузки файлов. Эти те файлы, которые создаются из событий, загружаются и затем удаляются." 
	),

	'UPLOAD_FTP_REM_DIR' => array(
	    'Prompt' => "Удаленный каталог для загрузки", 
	),
	'ZM_UPLOAD_FTP_REM_DIR' => array(
		'Help' => "Вы можете использовать фильтры для указания ZoneMinder загрузить события на удаленный FTP-сервер. Этот параметр указывает удаленный каталог который ZoneMinder следует использовать для загрузки файлов событий." 
	),

	'UPLOAD_REM_DIR' => array(
	    'Prompt' => "Удаленный каталог для загрузки", 
	),
	'ZM_UPLOAD_REM_DIR' => array(
		'Help' => "Вы можете использовать фильтры для указания ZoneMinder загрузить события на удаленный сервер. Этот параметр указывает удаленный каталог который ZoneMinder следует использовать для загрузки файлов событий." 
	),

	'UPLOAD_FTP_TIMEOUT' => array(
	    'Prompt' => "Тайм-аут для передачи каждого файла (в секундах)", 
	),
	'ZM_UPLOAD_FTP_TIMEOUT' => array(
		'Help' => "Вы можете использовать фильтры для указания ZoneMinder загрузить события на удаленный FTP-сервер. Этот параметр указывает максимально допустимый тайм-аут (в секундах) простоя ftp-соединения по которому ZoneMinder определяет, что передача не выполнена и закрывает подключение." 
	),

	'UPLOAD_TIMEOUT' => array(
	    'Prompt' => "Тайм-аут для передачи каждого файла (в секундах)", 
	),
	'ZM_UPLOAD_TIMEOUT' => array(
		'Help' => "Вы можете использовать фильтры для указания ZoneMinder загрузить события на удаленный сервер. Этот параметр указывает максимально допустимый тайм-аут (в секундах) простоя соединения по которому ZoneMinder определяет, что передача не выполнена и закрывает подключение." 
	),

	'UPLOAD_FTP_PASSIVE' => array(
	    'Prompt' => "Использовать пассивный режим работы FTP при загрузке", 
	),
	'ZM_UPLOAD_FTP_PASSIVE' => array(
		'Help' => "Если компьютер находится за брандмауэром или прокси-сервером, то может потребоваться установить пассивный режим работы FTP. И в самом деле, в простой передачи мало смысла, но так или иначе, вы можете установить этот параметр в «No», если пожелаете." 
	),

	'UPLOAD_FTP_DEBUG' => array(
	    'Prompt' => "Включить отладку FTP-соединения", 
	),
	'ZM_UPLOAD_FTP_DEBUG' => array(
		'Help' => "Вы можете использовать фильтры для указания ZoneMinder загрузить события на удаленный FTP-сервер. Если у вас возникли (или ожидаются) проблемы с загрузкой событий, то значение «Yes» позволяет включить дополнительную информацию в файл журнала zmfilter." 
	),

	'UPLOAD_DEBUG' => array(
	    'Prompt' => "Включить отладку загрузки", 
	),
	'ZM_UPLOAD_DEBUG' => array(
		'Help' => "Вы можете использовать фильтры для указания ZoneMinder загрузить события на удаленный сервер. Если у вас возникли (или ожидаются) проблемы с загрузкой событий, то значение «Yes» позволяет включить дополнительную информацию в файл журнала zmfilter." 
	),

	'OPT_EMAIL' => array(
	    'Prompt' => "Отправлять по электронной почте детали событий, которые соответствуют определенному фильтру", 
	),
	'ZM_OPT_EMAIL' => array(
		'Help' => "В ZoneMinder можно создать фильтры которые определяют нужно ли, при определенных критериях событий, отправлять детали по электронной почте на ваш электронный адрес. Это позволит вам получать уведомления о событиях, как только они возникают, а также для быстрого просмотра события напрямую. Данный параметр определяет доступность такой функциональности. Почтовые сообщения, созданные при помощи этого параметра, могут быть любого размера и предназначены для постоянного чтения почты, но не на мобильных устройствах." 
	),

	'EMAIL_ADDRESS' => array(
	    'Prompt' => "Адрес электронной почты для отправки соответствующих сведений о событии ", 
	),
	'ZM_EMAIL_ADDRESS' => array(
		'Help' => "Этот параметр используется для определения адреса электронной почты на который будут направляться любые события, соответствующие фильтру." 
	),

	'OPT_MESSAGE' => array(
	    'Prompt' => "Отправлять краткие сообщения с детальной информацией о событиях вызванных соответствующими фильтрами.", 
	),
	'ZM_OPT_MESSAGE' => array(
		'Help' => "В ZoneMinder можно создать фильтры событий которые могут определить следует ли отправлять короткое сообщение на ваш адрес электронной почты при определенных критериях каких-либо событий. Это позволит вам получать уведомления о событиях, сразу же в момент их происхождения. Этот параметр управляет доступностью данного функционала. Сообщения, созданные этим параметром, будут краткими и предназначенными для отправки через SMS-шлюз или для чтения на мобильных устройствах или телефонах." 
	),

	'NEW_MAIL_MODULES' => array(
	    'Prompt' => "Использовать новый метод perl для отправки писем", 
	),
	'ZM_NEW_MAIL_MODULES' => array(
		'Help' => "Для создания и отправки уведомлений и сообщений электронной почты, обычно, ZoneMinder использовал perl-модуль MIME::Entity. Некоторые люди сообщали о проблемах с этим модулем, в его отсутствии или о его не достаточной гибкости для удовлетворения их потребностей. Если вы один из этих людей, то этот параметр позволит выбрать новый метод рассылки с помощью MIME::Lite и Net::SMTP. Этот метод был внесен Ross Melin и должен работать, но не был хорошо протестирован и поэтому не выбран по умолчанию." 
	),

	'EMAIL_HOST' => array(
	    'Prompt' => "Адрес SMTP-сервера", 
	),
	'ZM_EMAIL_HOST' => array(
		'Help' => "Если вы выбрали SMTP как метод отправки почтовых уведомлений или сообщений, то этот параметр позволяет выбрать SMTP-сервер для их отправки. Если у вас есть запущенный демон sendmail, exim или им подобный, то можно оставить localhost, указанное значение по умолчанию, однако, при желании, здесь можно указать адрес SMTP-сервера вашего провайдера." 
	),

	'FROM_EMAIL' => array(
	    'Prompt' => "Адрес электронной почты от которого будут отправляться уведомления о событиях", 
	),
	'ZM_FROM_EMAIL' => array(
		'Help' => "Информационные или почтовые сообщения о событиях, могут приходить от указанного, в этом параметре, адреса электронной почты, например, для фильтрации сообщений или иных действий. Рекомендуется использовать адреса по типу ZoneMinder@your.domain." 
	),

	'URL' => array(
	    'Prompt' => "URL-адрес до ZoneMinder", 
	),
	'ZM_URL' => array(
		'Help' => "Для более удобного просмотра, информационные или почтовые сообщения о событиях, которые будут вам отправлены, могут включать в себя ссылку на сами события. Если вы собираетесь использовать эту функцию, то укажите в этом параметре URL к ZoneMinder, например, http: //host.your.domain/zm.php." 
	),

	'MAX_RESTART_DELAY' => array(
	    'Prompt' => "Максимальная задержка (в секундах) для попыток перезапуска демона", 
	),
	'ZM_MAX_RESTART_DELAY' => array(
		'Help' => "Демон управления процессами zmdc (zm daemon control), в случае сбоя рабочих или остановленных процессов, пытается перезапустить их. Если это демону часто не удается, то вводится задержка между каждой попыткой перезапуска. Если демон и после этого терпит неудачные попытки перезапуска, то эта задержка увеличивается для предотвращения дополнительной нагрузке на систему при постоянных перезагрузках. В этом параметре указывается время максимальной задержки." 
	),

	'WATCH_CHECK_INTERVAL' => array(
	    'Prompt' => "Как часто проверять, что демоны захвата изображения не блокированы", 
	),
	'ZM_WATCH_CHECK_INTERVAL' => array(
		'Help' => "Демон zmwatch проверяет производительность демонов захвата при захвате изображения, чтобы гарантировать их работоспособность (изредка, во время синхронизации, может произойти ошибка, которая блокирует демон на неопределенный срок). Этот параметр определяет, как часто проверять работоспособность демонов." 
	),

	'WATCH_MAX_DELAY' => array(
	    'Prompt' => "Максимально допустимая задержка с момента последнего захваченного изображения", 
	),
	'ZM_WATCH_MAX_DELAY' => array(
		'Help' => "Демон zmwatch проверяет производительность демонов захвата при захвате изображения, чтобы гарантировать их работоспособность (изредка, во время синхронизации, может произойти ошибка, которая блокирует демон на неопределенный срок). Этот параметр определяет максимально допустимую задержку после последнего захваченного кадра. Демон будет перезапущен, если он не захватил какие-либо изображения после этого периода, хотя фактическая перезагрузка может занять немного больше времени в сочетании со значением интервала проверки выше." 
	),

	'RUN_AUDIT' => array(
	    'Prompt' => "Запусть zmaudit для проверки на соответствие данных", 
	),
	'ZM_RUN_AUDIT' => array(
		'Help' => "Демон zmaudit проверяет на соответствие сохраненной информации в базе данных и информации на файловой системе. Если возникает ошибка или, если вы используете «быстрое удаление», то может оказаться, что записи из базы данных удалены, а файлы нет. В таком случае, и подобных, zmaudit удалит избыточную информацию для синхронизации двух хранилищ данных. Этот параметр определяет, будет ли zmaudit запускаться в фоновом режиме и выполнять эти проверки и исправления непрерывно. Рекомендуется для большинства систем, однако, если у вас очень большое количество событий, процесс сканирования базы данных и файловой системы может занять продолжительное время и повлиять на производительность. В этом случае вы можете предпочесть, безоговорочной работе zmaudit, запланированные разовые проверки в другое, более удобное, время." 
	),

	'AUDIT_CHECK_INTERVAL' => array(
	    'Prompt' => "Как часто проверять базу данных на соответствие", 
	),
	'ZM_AUDIT_CHECK_INTERVAL' => array(
		'Help' => "Демон zmaudit проверяет на соответствие сохраненной информации в базе данных и информации на файловой системе. Если возникает ошибка или, если вы используете «быстрое удаление», то может оказаться, что записи из базы данных удалены, а файлы нет. В таком случае, и подобных, zmaudit удалит избыточную информацию для синхронизации двух хранилищ данных. Интервал проверки, по умолчанию, равен 900 сек (15 мин) и подходит для большинства систем, однако, если у вас есть очень большое количество событий процесс сканирования базы данных и файловой системы может занять много времени и повлиять на производительность. В таком случае вы можете значительно увеличить этот интервал, чтобы уменьшить воздействие на систему. Этот параметр определяет частоту выполнения таких проверок." 
	),

	'FORCED_ALARM_SCORE' => array(
	    'Prompt' => "Балл сигнала тревоги", 
	),
	'ZM_FORCED_ALARM_SCORE' => array(
		'Help' => "Чтобы не полагаться на алгоритмы обнаружения движения, может использоваться утилита для вызова сигнала тревоги на мониторе «zmu». Этот параметр определяет, сколько баллов дать этим сигналам, чтобы отличить их от обычных. Значение должно быть меньше или равно 255." 
	),

	'BULK_FRAME_INTERVAL' => array(
	    'Prompt' => "Как часто должен быть записан в базу данных «массивный» кадр", 
	),
	'ZM_BULK_FRAME_INTERVAL' => array(
		'Help' => "Обычно, ZoneMinder сохраняет каждый захваченный кадр в таблице Frames базы данных. Это хорошо работает в сценариях обнаружения движения, но в ситуации c DVR (в режиме «Record» или «Mocord»), это приводит к огромному количеству записей кадров, большому объему данных и загруженности диска при очень малой дополнительной информации. Установка этого параметра в ненулевое значение разрешит ZoneMinder группировать эти не аварийные кадры в один «массивный» кадр, что сэкономит пропускную способность канала связи и пространство на диске. Единственный недостаток в том, что информация о синхронизации для отдельных кадров будет потеряна, но при постоянной скорости кадров, обычно, это потеря не значительна. Этот параметр игнорируется в режиме «Modect», а при возникновении тревоги в режиме «Mocord» отдельные кадры по-прежнему записываются." 
	),

	'EVENT_CLOSE_MODE' => array(
	    'Prompt' => "Когда закрывать непрерывные события", 
	),
	'ZM_EVENT_CLOSE_MODE' => array(
		'Help' => "Когда монитор работает в режиме непрерывной записи (Record или Mocord), обычно, события закрываются после фиксированного периода времени (длины секции). Однако, в режиме Mocord может произойти обнаружение движения в конце секции. Этот параметр определяет, что случилось при сигнале тревоги в режиме Mocord. Значение «time» означает, что событие будет закрыто в конце секции, независимо от деятельности сигнала тревоги. Значение «idle» означает, что событие будет закрыто в конце секции, если в это время не произойдет сигнала тревоги, в противном случае, оно будет закрыто после сигнала тревоги, это означает, что событие, в конечном итоге, может быть больше, чем длина обычной секции. Значение «alarm» означает, что событие будет закрыто после сигнала тревоги независимо от того, когда это произошло. Что дает эффект ограничения количества срабатываний для одного события и события будут короче, чем длина секции, если не было сигнала тревоги." 
	),

	'FORCE_CLOSE_EVENTS' => array(
	    'Prompt' => "Закрывать события в конце секции", 
	),
	'ZM_FORCE_CLOSE_EVENTS' => array(
		'Help' => "Когда монитор работает в режиме непрерывной записи (Record или Mocord), обычно, события закрываются после фиксированного периода времени (длины секции). Однако, в режиме Mocord может произойти обнаружение движения в конце секции, что будет препятствовать закрытию события до тех пор, пока движение не прекратиться. Включение этого параметра заставит событие закрыться в определенное время, независимо от движения." 
	),

	'CREATE_ANALYSIS_IMAGES' => array(
	    'Prompt' => "Создание проанализированного изображения аварийного сигнала с планом движения", 
	),
	'ZM_CREATE_ANALYSIS_IMAGES' => array(
		'Help' => "По умолчанию, во время тревоги ZoneMinder записывает два варианта изображения, необработанное и то, которое было проанализировано и определены области обнаружения движения. Это может быть очень полезным во время конфигурации зоны или при анализе причин событий. Однако, это также влечет за собой некоторые накладные расходы и в стабильной системе может быть отключено. Этот параметр позволяет отключить формирование таких изображений." 
	),

	'WEIGHTED_ALARM_CENTRES' => array(
		'Prompt' => "Использовать взвешенный алгоритм для вычисления центра аварийного сигнала", 
	),
	'ZM_WEIGHTED_ALARM_CENTRES' => array(
			'Help' => "ZoneMinder всегда вычисляет центральную точку аварийного сигнала в зоне, чтобы предоставить информацию о том, где на экране произошло движение. Это можно использовать как экспериментальный способ отслеживания движения или в ваших пользовательских расширениях. При сработанном аварийном сигнале или в режиме фильтра это простая середина между степенью обнаруженных пикселей. Однако, в методе blob может быть сделан расчет с использованием расположения взвешенных пикселей для более точного позиционирования в капле (blob) неправильной формы. Данный метод более точный, но и более медленный, поэтому по умолчанию отключен." 
	),

	'EVENT_IMAGE_DIGITS' => array(
		'Prompt' => "Сколько цифр использовать для числового индекса кадров событий.", 
	),
	'ZM_EVENT_IMAGE_DIGITS' => array(
			'Help' => "Так как при записи событий кадры сохраняются в файловую систему, им присваивается свой числовой индекс. По умолчанию индексу дано 3 цифры, таким образом нумерация начинается с 001, 002, 003 и т.д. Это подходит для большинства сценариев, так как события более чем с 999 кадрами редко записываются. Однако если вы хотите записывать очень большие события, а так же используете стороннее ПО, то вы можете увеличить это значение, чтобы гарантировать правильную сортировку кадров. Но будьте осторожны, увеличение данного параметра на рабочей системе может сделать существующие события недоступными. Уменьшение данного параметра не создаст никаких побочных эффектов." 
	),

	'DEFAULT_ASPECT_RATIO' => array(
		'Prompt' => "Соотношение сторон экрана по умолчанию, используемое на мониторах (ширина:высота)", 
	),
	'ZM_DEFAULT_ASPECT_RATIO' => array(
			'Help' => "При указании размеров мониторов, можно поставить «галку», для уверенности в правильном соотношении ширины к высоте или наоборот. Этот параметр позволяет указать их соотношение. Параметр должен быть указан в формате <значение ширины>:<значение высоты> и по умолчанию равен 4:3, обычно самый приемлемый, но соотношение 11:9 также является одним из общеизвестных. Если «галка» не установлена при указании размерности монитора этот параметр не действует." 
	),

	'USER_SELF_EDIT' => array(
		'Prompt' => "Разрешать непривилегированным пользователям изменять детали своей учетной записи", 
	),
	'ZM_USER_SELF_EDIT' => array(
			'Help' => "Обычно только пользователи с системными полномочиями в состоянии изменять детали учетных записей других пользователей. Включение этого параметра позволяет обычным пользователям изменять свои детали учетной записи, например пароль или язык." 
	),

	'OPT_FRAME_SERVER' => array(
		'Prompt' => "Анализировать передачу работы по записи на диск изображений", 
	),
	'ZM_OPT_FRAME_SERVER' => array(
			'Help' => "Иногда, на медленных дисках, случается, что запись изображений на диск занимает так много времени, что приводит к отставанию аналитического демона, особенно при высокой частоте смены кадров событий. Выбор данного параметра позволяет включить демон покадрового сервера (ZMF), который будет забирать изображения от аналитического демона и записывать актуальные кадры, тем самым освобождая аналитический демон для других вещей. Если при передаче произойдет сбой или возникнут ошибки, то эта функция вернется к аналитическому демону." 
	),

	'FRAME_SOCKET_SIZE' => array(
		'Prompt' => "Размер буфера для сокета покадрового сервера, при использовании нестандартных изображений", 
	),
	'ZM_FRAME_SOCKET_SIZE' => array(
			'Help' => "Запись больших захваченных изображений из аналитического демона в покадровый сервер может потерпеть неудачу когда кол-во записывающегося превышает размер буфера по умолчанию. По скольку изображения записываются при помощи аналитического демона, то данные не теряются и в первую очередь, уничтожается объект демона покадрового сервера. Вы можете использовать этот параметр, для указания буфера большего размера. Обратите внимание, вам, возможно, придется изменить существующий максимальный размер буфера сокета в системе через SYSCTL (или в /proc/sys/net/core/wmem_max), для установки нового размера . В качестве альтернативы, можно изменить размер буфера по умолчанию в вашей системе вышеуказанным способом, и в этом случае, будет использоваться это значение, без необходимости изменять его в данном параметре." 
	),

	'OPT_CONTROL' => array(
		'Prompt' => "Поддержка управляемых камер (например, PTZ)", 
	),
	'ZM_OPT_CONTROL' => array(
			'Help' => "В ZoneMinder входит ограниченная поддержка для управляемых камер. Включены некоторые образцы протоколов, другие могут быть легко добавлены. Если вы хотите управлять своими камерами с помощью ZoneMinder, то включите этот параметр, в противном случае, если у вас только статические камеры или у вас другие методы контроля, то не включайте." 
	),

	'OPT_TRIGGERS' => array(
		'Prompt' => "Использовать внешние триггеры событий", 
	),
	'ZM_OPT_TRIGGERS' => array(
			'Help' => "ZoneMinder может взаимодействовать с внешними системами, которые включают или выключают тревогу. Это делается с помощью скрипта zmtrigger.pl. Данный параметр указывает на то, хотите ли вы использовать эти внешние триггеры или нет. Большинство людей скажут, не здесь." 
	),

	'CHECK_FOR_UPDATES' => array(
		'Prompt' => "Проверка обновлений на zoneminder.com", 
	),
	'ZM_CHECK_FOR_UPDATES' => array(
			'Help' => "Начиная с ZoneMinder версии 1.17.0 и выше, как ожидается, выход новых версий будет более частым. Для проверки каждой новой версии, ZoneMinder должен проверить самую последнюю версию на веб-сайте zoneminder.com. Эти проверки являются нечастыми, примерно один раз в неделю, и никакой личной информации или системные данные не передаются, кроме текущего номера версии. Если вы не хотите, чтобы эти проверки осуществлялись или у ZoneMinder нет доступа к Интернету, вы можете снять «галочку» в этом параметре." 
	),

	'UPDATE_CHECK_PROXY' => array(
		'Prompt' => "URL прокси для доступа к zoneminder.com, если требуется", 
	),
	'ZM_UPDATE_CHECK_PROXY' => array(
			'Help' => "Если вы используете прокси-сервер для доступа к Интернету, то ZoneMinder нужно знать как он может получить доступ к zoneminder.com для проверки наличия обновлений. Если вы используете прокси-сервер, то введите полный URL прокси здесь, в виде http://<прокси-хост>:<прокси-порт>/." 
	),

	'SHM_KEY' => array(
		'Prompt' => "Общий корневой ключ для использования памяти", 
	),
	'ZM_SHM_KEY' => array(
			'Help' => "ZoneMinder использует общую память для ускорения связи между модулями. Для того, чтобы определить правильную область пользования используются общие ключи памяти. Этот параметр управляет тем, что базовый ключ каждого монитора будет(был) равен его ID + корневой ключ, что необходимо для получения фактически используемого ключа. Обычно, данное значение ключа не меняют, если оно не вступает в противоречие с другим экземпляром ZoneMinder на той же машине. Используются только первые четыре шестнадцатеричные цифры, остальные маскируются и поэтому игнорируются." 
	),

	'WEB_REFRESH_METHOD' => array(
		'Prompt' => "Какой метод следует использовать для обновления окна", 
	),
	'ZM_WEB_REFRESH_METHOD' => array(
			'Help' => "Многие окна в JavaScript нуждаются в обновлении для отображения актуальной информации. Этот параметр определяет, какой метод они должны для этого использовать. Выбор «JavaScript» означает, что каждое окно будет обращаться к JavaScript с использованием таймера для запроса обновления. Это наиболее совместимый метод. Выбор «HTTP» означает, что команда обновления помещается в заголовок HTTP. Это - более чистый метод, но обновление прерывается или отменяется, когда щелкают по ссылке в окне, означая, что окно больше не будет обновляться и это нужно сделать вручную." 
	),

	'WEB_EVENT_SORT_FIELD' => array(
		'Prompt' => "Сортировать события по определенному полю", 
	),
	'ZM_WEB_EVENT_SORT_FIELD' => array(
			'Help' => "События в списке могут быть отсортированы так как вам захочется. С помощью данного параметра можно выбрать поле, по которому должны сортироваться события. Порядок сортировки можно изменять из фильтра или нажатием по заголовку в самих списках. Имейте в виду, что ссылки «Назад» и «Вперед» при перелистывании событий, связаны с упорядочением в списках и поэтому не всегда сортируются на основе времени." 
	),

	'WEB_EVENT_SORT_ORDER' => array(
		'Prompt' => "Сортировать события по определенному порядку", 
	),
	'ZM_WEB_EVENT_SORT_ORDER' => array(
			'Help' => "События в списке могут быть отсортированы так как вам захочется. С помощью данного параметра можно выбрать порядок сортировки (по возрастанию «asc» или убыванию «desc»), по которому должны сортироваться события. Порядок сортировки можно изменять из фильтра или нажатием по заголовку в самих списках. Имейте в виду, что ссылки «Назад» и «Вперед» при перелистывании событий, связаны с упорядочением в списках и поэтому не всегда сортируются на основе времени." 
	),

	'WEB_EVENTS_PER_PAGE' => array(
		'Prompt' => "Количество событий отображаемых на одной странице", 
	),
	'ZM_WEB_EVENTS_PER_PAGE' => array(
			'Help' => "В списке событий вы можете получить список всех событий или только страницу. Данный параметр позволяет указать сколько событий отображать на одной странице и сколько раз повторять заголовки при просмотре всех событий за раз." 
	),

	'WEB_LIST_THUMBS' => array(
		'Prompt' => "Показывать мини-эскизы изображений событий в списках событий", 
	),
	'ZM_WEB_LIST_THUMBS' => array(
			'Help' => "По умолчанию в списке событий отображается только текст для экономии пространства и времени. С помощью данного параметра вы можете включать или выключать видемость этих эскизов каждого события, чтобы помочь вам выявить интересующие события. Размер этих эскизов управляется с помощью двух нижеследующих параметров." 
	),

	'WEB_LIST_THUMB_WIDTH' => array(
		'Prompt' => "Ширина эскиза события в списке событий", 
	),
	'ZM_WEB_LIST_THUMB_WIDTH' => array(
			'Help' => "Этот параметр определяет ширину эскиза события в списке событий. Размер должен быть не большим, чтобы эскиз мог поместиться в таблицу. При желании вы можете указать высоту в нижеследующем параметре, но имейте в виду что задать вы можете только один параметр, или ширину или высоту, а другой параметр должен быть установлен в ноль. В случае, ели у вас указана и ширина и высота, использоваться будет только ширина, а высота будет игнорироваться." 
	),

	'WEB_LIST_THUMB_HEIGHT' => array(
		'Prompt' => "Высота эскиза события в списке событий", 
	),
	'ZM_WEB_LIST_THUMB_HEIGHT' => array(
			'Help' => "Этот параметр определяет высоту эскиза события в списке событий. Размер должен быть не большим, чтобы эскиз мог поместиться в таблицу. При желании вы можете указать ширину в вышестоящем параметре, но имейте в виду что задать вы можете только один параметр, или ширину или высоту, а другой параметр должен быть установлен в ноль. В случае, ели у вас указана и ширина и высота, использоваться будет только ширина, а высота будет игнорироваться." 
	),

	'WEB_USE_OBJECT_TAGS' => array(
		'Prompt' => "Переносить тег «EMBED» в теги «OBJECT» для медиа-контента", 
	),
	'ZM_WEB_USE_OBJECT_TAGS' => array(
			'Help' => "Есть два способа включения медиа-контента в веб-страницы. Наиболее распространенным способом является использование тега «EMBED», который способен дать некоторое представление о типе контента. Однако, он не является стандартной частью HTML. Официальный метод заключается в использовании тегов «OBJECT» , которые способны дать больше информации для корректного отображения и загрузки мультимедиа. Но они мало поддерживаемые и содержание может быть специально приспособлено к конкретной платформе или проигрывателю. Этот параметр определяет, будет ли медиа-контент включен только в тег «EMBED» или, в случае необходимости, он будет дополнительно «обернут» в теги «OBJECT». В настоящее время теги «OBJECT» используются в ограниченном числе случаев, но они могут получить более широкое распространение в будущем. Предполагается, что вы оставите этот параметр, если не столкнетесь с проблемами при проигрывании некоторого контента." 
	),

	'WEB_H_REFRESH_MAIN' => array(
		'Prompt' => "Как часто (в секундах) обновлять главную страницу консоли", 
	),
	'ZM_WEB_H_REFRESH_MAIN' => array(
			'Help' => "Главная страница консоли содержит список общего состояния и итогов событий для всех мониторов. Это не простая задача которая не должна повторяться слишком часто, иначе это может повлиять на работу остальной части системы." 
	),

	'WEB_H_REFRESH_CYCLE' => array(
		'Prompt' => "Как часто (в секундах) менять монитор при циклическом просмотре", 
	),
	'ZM_WEB_H_REFRESH_CYCLE' => array(
			'Help' => "Окно циклического просмотра является методом непрерывного цикла между изображениями от всех ваших мониторов. Этот параметр определяет частоту обновления между мониторами." 
	),

	'WEB_H_REFRESH_IMAGE' => array(
		'Prompt' => "Как часто (в секундах) обновлять изображение (при не потоковой передаче)", 
	),
	'ZM_WEB_H_REFRESH_IMAGE' => array(
			'Help' => "Прямые трансляции с монитора можно просматривать или в потоковом режиме или по кадровом. Этот параметр определяет частоту обновления кадров изображения. От него нет никакого эффекта, если выбран потоковый режим." 
	),

	'WEB_H_REFRESH_STATUS' => array(
		'Prompt' => "Как часто (в секундах) обновлять статус монитора в окне просмотра", 
	),
	'ZM_WEB_H_REFRESH_STATUS' => array(
			'Help' => "На самом деле, окно монитора состоит из нескольких кадров. Один из них, в середине, просто содержит информацию о состоянии монитора, который нужно обновлять довольно часто для получения истинного состояния. Этот параметр определяет частоту такого обновления." 
	),

	'WEB_H_REFRESH_EVENTS' => array(
		'Prompt' => "Как часто (в секундах) обновлять перечень событий в окне просмотра", 
	),
	'ZM_WEB_H_REFRESH_EVENTS' => array(
			'Help' => "На самом деле, окно монитора состоит из нескольких кадров. Нижний кадр содержит перечень последних нескольких событий для более удобного доступа. Этот параметр определяет частоту его обновления." 
	),

	'WEB_H_CAN_STREAM' => array(
		'Prompt' => "Отменить автоматическое обнаружение возможности обработки потока браузером", 
	),
	'ZM_WEB_H_CAN_STREAM' => array(
			'Help' => "Если вы знаете, что у вашего браузера есть возможность обрабатывать потоковые изображения типа « multipart/x-mixed-replace», но ZoneMinder этого не обнаруживает, то вы можете установить этот параметр для гарантированной передачи потока с или без использования плагина Cambozola. Выбор \"yes\" даст понять ZoneMinder, что ваш браузер может обрабатывать потоки изначально, «no» означает, что он не может этого делать и поэтому плагин будет использоваться, «auto» позволяет ZoneMinder решать самостоятельно." 
	),

	'WEB_H_STREAM_METHOD' => array(
		'Prompt' => "Метод передачи видео потока в браузер", 
	),
	'ZM_WEB_H_STREAM_METHOD' => array(
			'Help' => "ZoneMinder может быть настроен на использование одного из форматов передачи видео потока, это либо MPEG закодированное видео, либо все еще изображения в формате JPEG. Этот параметр определяет какой формат использовать. При выборе «mpeg» вы должны убедиться в наличии соответствующих плагинов доступных в вашем браузере. Тогда как при выборе «jpeg» все будет работать изначально на Mozilla и связанных с ней браузерами, а так же и на Internet Explorer с Java-апплетом." 
	),

	'WEB_H_DEFAULT_SCALE' => array(
		'Prompt' => "Коэффициент масштабирования применяемый к просмотру событий или прямых трансляций ( в \%\%)", 
	),
	'ZM_WEB_H_DEFAULT_SCALE' => array(
			'Help' => "Обычно ZoneMinder отображает прямые трансляции или события в их действительном размере. Тем не менее, если у вас есть мониторы с большими размерами или медленное соединение, то вы можете уменьшить или увеличить этот размер. Данный параметр позволяет определить, какой будет коэффициент масштабирования по умолчанию. Он выражается в процентах, так, например 100 равен действительному размеру, 200 в два раза больше и т.д." 
	),

	'WEB_H_DEFAULT_RATE' => array(
		'Prompt' => "Скорость воспроизведения событий (в \%\%)", 
	),
	'ZM_WEB_H_DEFAULT_RATE' => array(
			'Help' => "Обычно ZoneMinder отображает события с их родной скоростью, т.е. как можно ближе к реальному времени, насколько это возможно. Тем не менее, если у вас есть длинные события, то часто бывает удобно, для обзора, воспроизводить их более быстрыми темпами. Этот параметр позволяет указать скорость воспроизведения по умолчанию. Она выражается в процентах, так, например, 100 - нормальная скорость, 200 - двойная скорость и т.д." 
	),

	'WEB_H_VIDEO_BITRATE' => array(
		'Prompt' => "Максимальный битрейт, который будет использоваться для видео потока", 
	),
	'ZM_WEB_H_VIDEO_BITRATE' => array(
			'Help' => "При кодировании реального видео, при помощи библиотеки Ffmpeg, битрейт примерно может соответствовать доступной пропускной способности используемой для потока. Этот параметр фактически отвечает за «качество» настройки видео. Низкое значение приведет к блочным изображениям, в то время как высокое значение даст более четкое представление. Обратите внимание, что этот параметр не контролирует частоту кадров видео, однако качество видео зависит от этого параметра и частоты воспроизведения кадров. Высокая частота кадров при определенной скорости передачи битов приводит к низкому качеству отдельных кадров." 
	),

	'WEB_H_VIDEO_MAXFPS' => array(
		'Prompt' => "Максимальная частота кадров видео потока", 
	),
	'ZM_WEB_H_VIDEO_MAXFPS' => array(
			'Help' => "При использовании потокового видео в основном контролируется битрейт, который определяет передачу возможного количества данных. Но маленький битрейт при высокой частоте кадров, в результате, дает низкое качество изображения. Этот параметр позволяет ограничить максимальную частоту кадров, чтобы гарантировать сохранность качества видео. Дополнительное преимущество состоит в том, что кодированное видео при высокой частоте кадров является трудоемкой задачей для процессора и очень высокая частота кадров дает мало заметные улучшения по сравнению с такими, которые предъявляют более приемлемые требования к ресурсам. Обратите внимание, что этот параметр реализован как скрытое ограничение, за пределами которого происходит двоичное сокращение.Т.е, если у вас есть устройство захвата на 15fps (к/с), а параметр установлен в 10, то видео не будет производится на частоте 10fps(к/с), а будет производиться на частоте 7.5fps (15 делится на 2), т.е окончательная частота кадров должна быть установлена по формуле - «оригинальная деленная на 2»." 
	),

	'WEB_H_SCALE_THUMBS' => array(
		'Prompt' => "Масштабировать миниатюры событий сохранив пропускную способность за счет CPU", 
	),
	'ZM_WEB_H_SCALE_THUMBS' => array(
			'Help' => "Если этот параметр не установлен, то изображение целиком отправляется в браузер, который изменяет его размер в окне. Если установлен, то, перед отправкой уменьшенного изображения в браузер, изображение сначала уменьшается на сервере для сохранения пропускной способности за счет центрального процессора сервера. Обратите внимание, что ZM может выполнять изменение размеров, если только установлена соответствующая функциональность PHP графики. Как правило она доступна в пакете PHP-GD." 
	),

	'WEB_H_EVENTS_VIEW' => array(
		'Prompt' => "Вид просмотра нескольких событий по умолчанию", 
	),
	'ZM_WEB_H_EVENTS_VIEW' => array(
			'Help' => "Сохраненные события можно просмотреть в любом формате, в виде списка событий (events) или в виде графика (timline). Этот параметр задает вид просмотра по умолчанию. При выборе здесь одного из видов не мешает использовать другой при просмотре событий." 
	),

	'WEB_H_SHOW_PROGRESS' => array(
		'Prompt' => "Отображать индикатор воспроизведения при просмотре событий", 
	),
	'ZM_WEB_H_SHOW_PROGRESS' => array(
			'Help' => "При просмотре событий, панель навигации и индикатор воспроизведения события показаны ниже самого события. Что позволяет не только переходить к конкретным точкам в событии, но также динамически обновляться для отображения текущего процесса воспроизведения. Ход выполнения воспроизведения рассчитывается исходя из фактической продолжительности события и не связан непосредственно с текущим воспроизведением, а так же с ограничениями пропускной способности соединения, правда, возможно, не в ногу с самим воспроизведением. Этот параметр позволяет отключить индикатор воспроизведения, но при этом сохраняя панель навигации." 
	),

	'WEB_H_AJAX_TIMEOUT' => array(
		'Prompt' => "Время ожидания ответа Ajax запроса (мс)", 
	),
	'ZM_WEB_H_AJAX_TIMEOUT' => array(
			'Help' => "Более новые версии прямых трансляций и просмотров событий используют Ajax для запроса информации у сервера и динамического обновления просмотров. Этот параметр позволяет, при необходимости, выставить тайм-аут, после которого отказываются от запросов. Тайм-аут может быть необходимым, если запросы зависают при медленном соединении. Что повлечет использование большого количества памяти браузера и к зависанию интерфейса. Обычно, у запросов не должно быть тайм-аута, поэтому значение данного параметра должно быть больше, чем самый медленный ожидаемый ответ. Это значение устанавливается в миллисекундах, но, если обнулено, тогда тайм-аут не будет использоваться." 
	),

	'WEB_M_REFRESH_MAIN' => array(
		'Prompt' => "Как часто (в секундах) обновлять главную страницу консоли", 
	),
	'ZM_WEB_M_REFRESH_MAIN' => array(
			'Help' => "Главная страница консоли содержит список общего состояния и итогов событий для всех мониторов. Это не простая задача которая не должна повторяться слишком часто, иначе это может повлиять на работу остальной части системы." 
	),

	'WEB_M_REFRESH_CYCLE' => array(
		'Prompt' => "Как часто (в секундах) менять монитор при циклическом просмотре", 
	),
	'ZM_WEB_M_REFRESH_CYCLE' => array(
			'Help' => "Окно циклического просмотра является методом непрерывного цикла между изображениями от всех ваших мониторов. Этот параметр определяет частоту обновления между мониторами." 
	),

	'WEB_M_REFRESH_IMAGE' => array(
		'Prompt' => "Как часто (в секундах) обновлять изображение (при не потоковой передаче)", 
	),
	'ZM_WEB_M_REFRESH_IMAGE' => array(
			'Help' => "Прямые трансляции с монитора можно просматривать или в потоковом режиме или по кадровом. Этот параметр определяет частоту обновления кадров изображения. От него нет никакого эффекта, если выбран потоковый режим." 
	),

	'WEB_M_REFRESH_STATUS' => array(
		'Prompt' => "Как часто (в секундах) обновлять статус монитора в окне просмотра", 
	),
	'ZM_WEB_M_REFRESH_STATUS' => array(
			'Help' => "На самом деле, окно монитора состоит из нескольких кадров. Один из них, в середине, просто содержит информацию о состоянии монитора, который нужно обновлять довольно часто для получения истинного состояния. Этот параметр определяет частоту такого обновления." 
	),

	'WEB_M_REFRESH_EVENTS' => array(
		'Prompt' => "Как часто (в секундах) обновлять перечень событий в окне просмотра", 
	),
	'ZM_WEB_M_REFRESH_EVENTS' => array(
			'Help' => "На самом деле, окно монитора состоит из нескольких кадров. Нижний кадр содержит перечень последних нескольких событий для более удобного доступа. Этот параметр определяет частоту его обновления." 
	),

	'WEB_M_CAN_STREAM' => array(
		'Prompt' => "Отменить автоматическое обнаружение возможности обработки потока браузером", 
	),
	'ZM_WEB_M_CAN_STREAM' => array(
			'Help' => "Если вы знаете, что у вашего браузера есть возможность обрабатывать потоковые изображения типа « multipart/x-mixed-replace», но ZoneMinder этого не обнаруживает, то вы можете установить этот параметр для гарантированной передачи потока с или без использования плагина Cambozola. Выбор \"yes\" даст понять ZoneMinder, что ваш браузер может обрабатывать потоки изначально, «no» означает, что он не может этого делать и поэтому плагин будет использоваться, «auto» позволяет ZoneMinder решать самостоятельно." 
	),

	'WEB_M_STREAM_METHOD' => array(
		'Prompt' => "Метод передачи видео потока в браузер", 
	),
	'ZM_WEB_M_STREAM_METHOD' => array(
			'Help' => "ZoneMinder может быть настроен на использование одного из форматов передачи видео потока, это либо MPEG закодированное видео, либо все еще изображения в формате JPEG. Этот параметр определяет какой формат использовать. При выборе «mpeg» вы должны убедиться в наличии соответствующих плагинов доступных в вашем браузере. Тогда как при выборе «jpeg» все будет работать изначально на Mozilla и связанных с ней браузерами, а так же и на Internet Explorer с Java-апплетом." 
	),

	'WEB_M_DEFAULT_SCALE' => array(
		'Prompt' => "Коэффициент масштабирования применяемый к просмотру событий или прямых трансляций ( в %%)", 
	),
	'ZM_WEB_M_DEFAULT_SCALE' => array(
			'Help' => "Обычно ZoneMinder отображает прямые трансляции или события в их действительном размере. Тем не менее, если у вас есть мониторы с большими размерами или медленное соединение, то вы можете уменьшить или увеличить этот размер. Данный параметр позволяет определить, какой будет коэффициент масштабирования по умолчанию. Он выражается в процентах, так, например 100 равен действительному размеру, 200 в два раза больше и т.д." 
	),

	'WEB_M_DEFAULT_RATE' => array(
		'Prompt' => "Скорость воспроизведения событий (в %%)", 
	),
	'ZM_WEB_M_DEFAULT_RATE' => array(
			'Help' => "Обычно ZoneMinder отображает события с их родной скоростью, т.е. как можно ближе к реальному времени, насколько это возможно. Тем не менее, если у вас есть длинные события, то часто бывает удобно, для обзора, воспроизводить их более быстрыми темпами. Этот параметр позволяет указать скорость воспроизведения по умолчанию. Она выражается в процентах, так, например, 100 - нормальная скорость, 200 - двойная скорость и т.д." 
	),

	'WEB_M_VIDEO_BITRATE' => array(
		'Prompt' => "Максимальный битрейт, который будет использоваться для видео потока", 
	),
	'ZM_WEB_M_VIDEO_BITRATE' => array(
			'Help' => "При кодировании реального видео, при помощи библиотеки Ffmpeg, битрейт примерно может соответствовать доступной пропускной способности используемой для потока. Этот параметр фактически отвечает за «качество» настройки видео. Низкое значение приведет к блочным изображениям, в то время как высокое значение даст более четкое представление. Обратите внимание, что этот параметр не контролирует частоту кадров видео, однако качество видео зависит от этого параметра и частоты воспроизведения кадров. Высокая частота кадров при определенной скорости передачи битов приводит к низкому качеству отдельных кадров." 
	),

	'WEB_M_VIDEO_MAXFPS' => array(
		'Prompt' => "Максимальная частота кадров видео потока", 
	),
	'ZM_WEB_M_VIDEO_MAXFPS' => array(
			'Help' => "При использовании потокового видео в основном контролируется битрейт, который определяет передачу возможного количества данных. Но маленький битрейт при высокой частоте кадров, в результате, дает низкое качество изображения. Этот параметр позволяет ограничить максимальную частоту кадров, чтобы гарантировать сохранность качества видео. Дополнительное преимущество состоит в том, что кодированное видео при высокой частоте кадров является трудоемкой задачей для процессора и очень высокая частота кадров дает мало заметные улучшения по сравнению с такими, которые предъявляют более приемлемые требования к ресурсам. Обратите внимание, что этот параметр реализован как скрытое ограничение, за пределами которого происходит двоичное сокращение.Т.е, если у вас есть устройство захвата на 15fps (к/с), а параметр установлен в 10, то видео не будет производится на частоте 10fps(к/с), а будет производиться на частоте 7.5fps (15 делится на 2), т.е окончательная частота кадров должна быть установлена по формуле - «оригинальная деленная на 2»." 
	),

	'WEB_M_SCALE_THUMBS' => array(
		'Prompt' => "Масштабировать миниатюры событий сохранив пропускную способность за счет CPU", 
	),
	'ZM_WEB_M_SCALE_THUMBS' => array(
			'Help' => "Если этот параметр не установлен, то изображение целиком отправляется в браузер, который изменяет его размер в окне. Если установлен, то, перед отправкой уменьшенного изображения в браузер, изображение сначала уменьшается на сервере для сохранения пропускной способности за счет центрального процессора сервера. Обратите внимание, что ZM может выполнять изменение размеров, если только установлена соответствующая функциональность PHP графики. Как правило она доступна в пакете PHP-GD." 
	),

	'WEB_M_EVENTS_VIEW' => array(
		'Prompt' => "Вид просмотра нескольких событий по умолчанию", 
	),
	'ZM_WEB_M_EVENTS_VIEW' => array(
			'Help' => "Сохраненные события можно просмотреть в любом формате, в виде списка событий (events) или в виде графика (timline). Этот параметр задает вид просмотра по умолчанию. При выборе здесь одного из видов не мешает использовать другой при просмотре событий." 
	),

	'WEB_M_SHOW_PROGRESS' => array(
		'Prompt' => "Отображать индикатор воспроизведения при просмотре событий", 
	),
	'ZM_WEB_M_SHOW_PROGRESS' => array(
			'Help' => "При просмотре событий, панель навигации и индикатор воспроизведения события показаны ниже самого события. Что позволяет не только переходить к конкретным точкам в событии, но также динамически обновляться для отображения текущего процесса воспроизведения. Ход выполнения воспроизведения рассчитывается исходя из фактической продолжительности события и не связан непосредственно с текущим воспроизведением, а так же с ограничениями пропускной способности соединения, правда, возможно, не в ногу с самим воспроизведением. Этот параметр позволяет отключить индикатор воспроизведения, но при этом сохраняя панель навигации." 
	),

	'WEB_M_AJAX_TIMEOUT' => array(
		'Prompt' => "Время ожидания ответа Ajax запроса (мс)", 
	),
	'ZM_WEB_M_AJAX_TIMEOUT' => array(
			'Help' => "Более новые версии прямых трансляций и просмотров событий используют Ajax для запроса информации у сервера и динамического обновления просмотров. Этот параметр позволяет, при необходимости, выставить тайм-аут, после которого отказываются от запросов. Тайм-аут может быть необходимым, если запросы зависают при медленном соединении. Что повлечет использование большого количества памяти браузера и к зависанию интерфейса. Обычно, у запросов не должно быть тайм-аута, поэтому значение данного параметра должно быть больше, чем самый медленный ожидаемый ответ. Это значение устанавливается в миллисекундах, но, если обнулено, тогда тайм-аут не будет использоваться." 
	),

	'WEB_L_REFRESH_MAIN' => array(
		'Prompt' => "Как часто (в секундах) обновлять главную страницу консоли", 
	),
	'ZM_WEB_L_REFRESH_MAIN' => array(
			'Help' => "Главная страница консоли содержит список общего состояния и итогов событий для всех мониторов. Это не простая задача которая не должна повторяться слишком часто, иначе это может повлиять на работу остальной части системы." 
	),

	'WEB_L_REFRESH_CYCLE' => array(
		'Prompt' => "Как часто (в секундах) менять монитор при циклическом просмотре", 
	),
	'ZM_WEB_L_REFRESH_CYCLE' => array(
			'Help' => "Окно циклического просмотра является методом непрерывного цикла между изображениями от всех ваших мониторов. Этот параметр определяет частоту обновления между мониторами." 
	),

	'WEB_L_REFRESH_IMAGE' => array(
		'Prompt' => "Как часто (в секундах) обновлять изображение (при не потоковой передаче)", 
	),
	'ZM_WEB_L_REFRESH_IMAGE' => array(
			'Help' => "Прямые трансляции с монитора можно просматривать или в потоковом режиме или по кадровом. Этот параметр определяет частоту обновления кадров изображения. От него нет никакого эффекта, если выбран потоковый режим." 
	),

	'WEB_L_REFRESH_STATUS' => array(
		'Prompt' => "Как часто (в секундах) обновлять статус монитора в окне просмотра", 
	),
	'ZM_WEB_L_REFRESH_STATUS' => array(
			'Help' => "На самом деле, окно монитора состоит из нескольких кадров. Один из них, в середине, просто содержит информацию о состоянии монитора, который нужно обновлять довольно часто для получения истинного состояния. Этот параметр определяет частоту такого обновления." 
	),

	'WEB_L_REFRESH_EVENTS' => array(
		'Prompt' => "Как часто (в секундах) обновлять перечень событий в окне просмотра", 
	),
	'ZM_WEB_L_REFRESH_EVENTS' => array(
			'Help' => "На самом деле, окно монитора состоит из нескольких кадров. Нижний кадр содержит перечень последних нескольких событий для более удобного доступа. Этот параметр определяет частоту его обновления." 
	),

	'WEB_L_CAN_STREAM' => array(
		'Prompt' => "Отменить автоматическое обнаружение возможности обработки потока браузером", 
	),
	'ZM_WEB_L_CAN_STREAM' => array(
			'Help' => "Если вы знаете, что у вашего браузера есть возможность обрабатывать потоковые изображения типа « multipart/x-mixed-replace», но ZoneMinder этого не обнаруживает, то вы можете установить этот параметр для гарантированной передачи потока с или без использования плагина Cambozola. Выбор \"yes\" даст понять ZoneMinder, что ваш браузер может обрабатывать потоки изначально, «no» означает, что он не может этого делать и поэтому плагин будет использоваться, «auto» позволяет ZoneMinder решать самостоятельно." 
	),

	'WEB_L_STREAM_METHOD' => array(
		'Prompt' => "Метод передачи видео потока в браузер", 
	),
	'ZM_WEB_L_STREAM_METHOD' => array(
			'Help' => "ZoneMinder может быть настроен на использование одного из форматов передачи видео потока, это либо MPEG закодированное видео, либо все еще изображения в формате JPEG. Этот параметр определяет какой формат использовать. При выборе «mpeg» вы должны убедиться в наличии соответствующих плагинов доступных в вашем браузере. Тогда как при выборе «jpeg» все будет работать изначально на Mozilla и связанных с ней браузерами, а так же и на Internet Explorer с Java-апплетом." 
	),

	'WEB_L_DEFAULT_SCALE' => array(
		'Prompt' => "Коэффициент масштабирования применяемый к просмотру событий или прямых трансляций ( в %%)", 
	),
	'ZM_WEB_L_DEFAULT_SCALE' => array(
			'Help' => "Обычно ZoneMinder отображает прямые трансляции или события в их действительном размере. Тем не менее, если у вас есть мониторы с большими размерами или медленное соединение, то вы можете уменьшить или увеличить этот размер. Данный параметр позволяет определить, какой будет коэффициент масштабирования по умолчанию. Он выражается в процентах, так, например 100 равен действительному размеру, 200 в два раза больше и т.д." 
	),

	'WEB_L_DEFAULT_RATE' => array(
		'Prompt' => "Скорость воспроизведения событий (в %%)", 
	),
	'ZM_WEB_L_DEFAULT_RATE' => array(
			'Help' => "Обычно ZoneMinder отображает события с их родной скоростью, т.е. как можно ближе к реальному времени, насколько это возможно. Тем не менее, если у вас есть длинные события, то часто бывает удобно, для обзора, воспроизводить их более быстрыми темпами. Этот параметр позволяет указать скорость воспроизведения по умолчанию. Она выражается в процентах, так, например, 100 - нормальная скорость, 200 - двойная скорость и т.д." 
	),

	'WEB_L_VIDEO_BITRATE' => array(
		'Prompt' => "Максимальный битрейт, который будет использоваться для видео потока", 
	),
	'ZM_WEB_L_VIDEO_BITRATE' => array(
			'Help' => "При кодировании реального видео, при помощи библиотеки Ffmpeg, битрейт примерно может соответствовать доступной пропускной способности используемой для потока. Этот параметр фактически отвечает за «качество» настройки видео. Низкое значение приведет к блочным изображениям, в то время как высокое значение даст более четкое представление. Обратите внимание, что этот параметр не контролирует частоту кадров видео, однако качество видео зависит от этого параметра и частоты воспроизведения кадров. Высокая частота кадров при определенной скорости передачи битов приводит к низкому качеству отдельных кадров." 
	),

	'WEB_L_VIDEO_MAXFPS' => array(
		'Prompt' => "Максимальная частота кадров видео потока", 
	),
	'ZM_WEB_L_VIDEO_MAXFPS' => array(
			'Help' => "При использовании потокового видео в основном контролируется битрейт, который определяет передачу возможного количества данных. Но маленький битрейт при высокой частоте кадров, в результате, дает низкое качество изображения. Этот параметр позволяет ограничить максимальную частоту кадров, чтобы гарантировать сохранность качества видео. Дополнительное преимущество состоит в том, что кодированное видео при высокой частоте кадров является трудоемкой задачей для процессора и очень высокая частота кадров дает мало заметные улучшения по сравнению с такими, которые предъявляют более приемлемые требования к ресурсам. Обратите внимание, что этот параметр реализован как скрытое ограничение, за пределами которого происходит двоичное сокращение.Т.е, если у вас есть устройство захвата на 15fps (к/с), а параметр установлен в 10, то видео не будет производится на частоте 10fps(к/с), а будет производиться на частоте 7.5fps (15 делится на 2), т.е окончательная частота кадров должна быть установлена по формуле - «оригинальная деленная на 2»." 
	),

	'WEB_L_SCALE_THUMBS' => array(
		'Prompt' => "Масштабировать миниатюры событий сохранив пропускную способность за счет CPU", 
	),
	'ZM_WEB_L_SCALE_THUMBS' => array(
			'Help' => "Если этот параметр не установлен, то изображение целиком отправляется в браузер, который изменяет его размер в окне. Если установлен, то, перед отправкой уменьшенного изображения в браузер, изображение сначала уменьшается на сервере для сохранения пропускной способности за счет центрального процессора сервера. Обратите внимание, что ZM может выполнять изменение размеров, если только установлена соответствующая функциональность PHP графики. Как правило она доступна в пакете PHP-GD." 
	),

	'WEB_L_EVENTS_VIEW' => array(
		'Prompt' => "Вид просмотра нескольких событий по умолчанию", 
	),
	'ZM_WEB_L_EVENTS_VIEW' => array(
			'Help' => "Сохраненные события можно просмотреть в любом формате, в виде списка событий (events) или в виде графика (timline). Этот параметр задает вид просмотра по умолчанию. При выборе здесь одного из видов не мешает использовать другой при просмотре событий." 
	),

	'WEB_L_SHOW_PROGRESS' => array(
		'Prompt' => "Отображать индикатор воспроизведения при просмотре событий", 
	),
	'ZM_WEB_L_SHOW_PROGRESS' => array(
			'Help' => "При просмотре событий, панель навигации и индикатор воспроизведения события показаны ниже самого события. Что позволяет не только переходить к конкретным точкам в событии, но также динамически обновляться для отображения текущего процесса воспроизведения. Ход выполнения воспроизведения рассчитывается исходя из фактической продолжительности события и не связан непосредственно с текущим воспроизведением, а так же с ограничениями пропускной способности соединения, правда, возможно, не в ногу с самим воспроизведением. Этот параметр позволяет отключить индикатор воспроизведения, но при этом сохраняя панель навигации." 
	),

	'WEB_L_AJAX_TIMEOUT' => array(
		'Prompt' => "Время ожидания ответа Ajax запроса (мс)", 
	),
	'ZM_WEB_L_AJAX_TIMEOUT' => array(
			'Help' => "Более новые версии прямых трансляций и просмотров событий используют Ajax для запроса информации у сервера и динамического обновления просмотров. Этот параметр позволяет, при необходимости, выставить тайм-аут, после которого отказываются от запросов. Тайм-аут может быть необходимым, если запросы зависают при медленном соединении. Что повлечет использование большого количества памяти браузера и к зависанию интерфейса. Обычно, у запросов не должно быть тайм-аута, поэтому значение данного параметра должно быть больше, чем самый медленный ожидаемый ответ. Это значение устанавливается в миллисекундах, но, если обнулено, тогда тайм-аут не будет использоваться." 
	),

	'WEB_P_CAN_STREAM' => array(
		'Prompt' => "Отменить автоматическое обнаружение возможности обработки потока браузером", 
	),
	'ZM_WEB_P_CAN_STREAM' => array(
			'Help' => "Если вы знаете, что у вашего браузера есть возможность обрабатывать потоковые изображения типа « multipart/x-mixed-replace», но ZoneMinder этого не обнаруживает, то вы можете установить этот параметр для гарантированной передачи потока с или без использования плагина Cambozola. Выбор \"yes\" даст понять ZoneMinder, что ваш браузер может обрабатывать потоки изначально, «no» означает, что он не может этого делать и поэтому плагин будет использоваться, «auto» позволяет ZoneMinder решать самостоятельно." 
	),

	'WEB_P_STREAM_METHOD' => array(
		'Prompt' => "Метод передачи видео потока в браузер", 
	),
	'ZM_WEB_P_STREAM_METHOD' => array(
			'Help' => "ZoneMinder может быть настроен на использование одного из форматов передачи видео потока, это либо MPEG закодированное видео, либо все еще изображения в формате JPEG. Этот параметр определяет какой формат использовать. При выборе «mpeg» вы должны убедиться в наличии соответствующих плагинов доступных в вашем браузере. Тогда как при выборе «jpeg» все будет работать изначально на Mozilla и связанных с ней браузерами, а так же и на Internet Explorer с Java-апплетом." 
	),

	'WEB_P_DEFAULT_SCALE' => array(
		'Prompt' => "Коэффициент масштабирования применяемый к просмотру событий или прямых трансляций ( в %%)", 
	),
	'ZM_WEB_P_DEFAULT_SCALE' => array(
			'Help' => "Обычно ZoneMinder отображает прямые трансляции или события в их действительном размере. Тем не менее, если у вас есть мониторы с большими размерами или медленное соединение, то вы можете уменьшить или увеличить этот размер. Данный параметр позволяет определить, какой будет коэффициент масштабирования по умолчанию. Он выражается в процентах, так, например 100 равен действительному размеру, 200 в два раза больше и т.д." 
	),

	'WEB_P_DEFAULT_RATE' => array(
		'Prompt' => "Скорость воспроизведения событий (в %%)", 
	),
	'ZM_WEB_P_DEFAULT_RATE' => array(
			'Help' => "Обычно ZoneMinder отображает события с их родной скоростью, т.е. как можно ближе к реальному времени, насколько это возможно. Тем не менее, если у вас есть длинные события, то часто бывает удобно, для обзора, воспроизводить их более быстрыми темпами. Этот параметр позволяет указать скорость воспроизведения по умолчанию. Она выражается в процентах, так, например, 100 - нормальная скорость, 200 - двойная скорость и т.д." 
	),

	'WEB_P_VIDEO_BITRATE' => array(
		'Prompt' => "Максимальный битрейт, который будет использоваться для видео потока", 
	),
	'ZM_WEB_P_VIDEO_BITRATE' => array(
			'Help' => "При кодировании реального видео, при помощи библиотеки Ffmpeg, битрейт примерно может соответствовать доступной пропускной способности используемой для потока. Этот параметр фактически отвечает за «качество» настройки видео. Низкое значение приведет к блочным изображениям, в то время как высокое значение даст более четкое представление. Обратите внимание, что этот параметр не контролирует частоту кадров видео, однако качество видео зависит от этого параметра и частоты воспроизведения кадров. Высокая частота кадров при определенной скорости передачи битов приводит к низкому качеству отдельных кадров." 
	),

	'WEB_P_VIDEO_MAXFPS' => array(
		'Prompt' => "Максимальная частота кадров видео потока", 
	),
	'ZM_WEB_P_VIDEO_MAXFPS' => array(
			'Help' => "При использовании потокового видео в основном контролируется битрейт, который определяет передачу возможного количества данных. Но маленький битрейт при высокой частоте кадров, в результате, дает низкое качество изображения. Этот параметр позволяет ограничить максимальную частоту кадров, чтобы гарантировать сохранность качества видео. Дополнительное преимущество состоит в том, что кодированное видео при высокой частоте кадров является трудоемкой задачей для процессора и очень высокая частота кадров дает мало заметные улучшения по сравнению с такими, которые предъявляют более приемлемые требования к ресурсам. Обратите внимание, что этот параметр реализован как скрытое ограничение, за пределами которого происходит двоичное сокращение.Т.е, если у вас есть устройство захвата на 15fps (к/с), а параметр установлен в 10, то видео не будет производится на частоте 10fps(к/с), а будет производиться на частоте 7.5fps (15 делится на 2), т.е окончательная частота кадров должна быть установлена по формуле - «оригинальная деленная на 2»." 
	),

	'WEB_P_SCALE_THUMBS' => array(
		'Prompt' => "Масштабировать миниатюры событий сохранив пропускную способность за счет CPU", 
	),
	'ZM_WEB_P_SCALE_THUMBS' => array(
			'Help' => "Если этот параметр не установлен, то изображение целиком отправляется в браузер, который изменяет его размер в окне. Если установлен, то, перед отправкой уменьшенного изображения в браузер, изображение сначала уменьшается на сервере для сохранения пропускной способности за счет центрального процессора сервера. Обратите внимание, что ZM может выполнять изменение размеров, если только установлена соответствующая функциональность PHP графики. Как правило она доступна в пакете PHP-GD." 
	),

	'WEB_P_AJAX_TIMEOUT' => array(
		'Prompt' => "Время ожидания ответа Ajax запроса (мс)", 
	),
	'ZM_WEB_P_AJAX_TIMEOUT' => array(
			'Help' => "Более новые версии прямых трансляций и просмотров событий используют Ajax для запроса информации у сервера и динамического обновления просмотров. Этот параметр позволяет, при необходимости, выставить тайм-аут, после которого отказываются от запросов. Тайм-аут может быть необходимым, если запросы зависают при медленном соединении. Что повлечет использование большого количества памяти браузера и к зависанию интерфейса. Обычно, у запросов не должно быть тайм-аута, поэтому значение данного параметра должно быть больше, чем самый медленный ожидаемый ответ. Это значение устанавливается в миллисекундах, но, если обнулено, тогда тайм-аут не будет использоваться." 
	),

	'AUDIT_MIN_AGE' => array(
		'Prompt' => "Минимальный возраст данных о событии для удаления (в сек.)", 
	),
	'ZM_AUDIT_MIN_AGE' => array(
			'Help' => "Демон zmaudit проверяет, что сохраненная информация в базе данных и в файловой системе соответствует и не противоречит друг другу. Файлы событий или записи БД, моложе установленной в данном параметре, не будут удалены, но будет выдано предупреждение." 
	),

	'CSS_DEFAULT' => array(
		'Prompt' => "Набор css файлов, используемых веб-интерфейсом по умолчанию", 
	),
	'ZM_CSS_DEFAULT' => array(
			'Help' => "ZoneMinder допускает использование множества различных веб-интерфейсов и для управления внешним видом некоторые обложки (skins) позволяют использовать другой набор CSS-файлов. Этот параметр позволяет задать используемый веб-сайтом набор css-файлов по умолчанию. Позже, пользователи могут изменить свои css, здесь лишь устанавливается значение по умолчанию." 
	),

	'EMAIL_TEXT' => array(
		'Prompt' => "Текст письма для отправки соответствующих сведений о событии", 
	),
	'ZM_EMAIL_TEXT' => array(
			'Help' => "Этот параметр используется для определения содержимого письма, которое отправляется для любых событий соответствующих подходящим фильтрам." 
	),

	'LD_PRELOAD' => array(
		'Prompt' => "Путь к библиотеке для загрузки до запуска демонов", 
	),
	'ZM_LD_PRELOAD' => array(
			'Help' => "Некоторые старые камеры требуют использования библиотеки v4l1compact. Этот параметр позволяет установить путь к библиотеке и она будет загружена с помощью zmdc.pl перед запуском Zmc." 
	),

	'OPT_GOOG_RECAPTCHA_SECRETKEY' => array(
		'Prompt' => "Секретный ключ reCAPTCHA", 
	),
	'ZM_OPT_GOOG_RECAPTCHA_SECRETKEY' => array(
			'Help' => "Секретный ключ сгенерированный на сайте Google reCaptcha. Для получения более подробной информации обратитесь к https://www.google.com/recaptcha/." 
	),

	'OPT_GOOG_RECAPTCHA_SITEKEY' => array(
		'Prompt' => "reCAPTCHA ключ сайта", 
	),
	'ZM_OPT_GOOG_RECAPTCHA_SITEKEY' => array(
			'Help' => "Секретный ключ сгенерированный на сайте Google reCaptcha. Для получения более подробной информации обратитесь к https://www.google.com/recaptcha/." 
	),

	'OPT_USE_API' => array(
		'Prompt' => "Включить ZoneMinder API", 
	),
	'ZM_OPT_USE_API' => array(
			'Help' => "ZoneMinder теперь имеет новый API с помощью которого сторонние приложения могут взаимодействовать с данными ZoneMinder. НАСТОЯТЕЛЬНО рекомендуется включить проверку подлинности при включенном API. Обратите внимание, что API-интерфейсы возвращают конфиденциальные данные, такие как детали доступа мониторов, которые сконфигурированы как объекты JSON. Именно поэтому мы рекомендуем вам включение проверки подлинности, особенно если вы выставляете свой экземпляр ZM в Интернете." 
	),

	'OPT_USE_GOOG_RECAPTCHA' => array(
		'Prompt' => "Добавить Google reCAPCHA на страницу входа", 
	),
	'ZM_OPT_USE_GOOG_RECAPTCHA' => array(
			'Help' => "Этот параметр позволяет включить проверку Google reCAPCHA при входе в систему. Это означает, что в дополнение к проверке имени пользователя и пароля, вы также должны будете пройти тест Google reCAPCHA. Обратите внимание, что включение этого параметра заставит, во время отображения страницы входа, ZoneMinder обратиться к серверам Google для проверки капчи. Также включение этого параметра сделает не возможным работу сторонних приложений, например таких как zmNinja и zmView, поскольку они также должны будут войти в систему, но потерпят неудачу при проверке reCAPCHA." 
	),

	'PATH_ARP' => array(
		'Prompt' => "Путь к ARP инструменту", 
	),
	'ZM_PATH_ARP' => array(
			'Help' => "Функция датчика камеры использует Протокол Определения Адресов (ARP), чтобы найти известные устройства в сети. Дополнительно введите полный путь к «ip neigh», «arp -a» или к любому другому инструменту в вашей системе, который возвращает пару «IP/мак адрес». Если это поле оставить пустым, то ZoneMinder будет искать команду «arp» и пытаться ее использовать." 
	),

	'SKIN_DEFAULT' => array(
		'Prompt' => "Обложка (skin) используемая веб-интерфейсом по умолчанию", 
	),
	'ZM_SKIN_DEFAULT' => array(
			'Help' => "ZoneMinder допускает использование множества различных веб-интерфейсов. Этот параметр позволяет задать, используемую веб-сайтом, обложку (skin) по умолчанию. Позже, пользователи могут изменить обложку (skin), здесь лишь устанавливается значение по умолчанию." 
	),

	'SSMTP_MAIL' => array(
		'Prompt' => "При наличии использовать почтовый сервер SSMTP. Параметр NEW_MAIL_MODULES должен быть включен", 
	),
	'ZM_SSMTP_MAIL' => array(
			'Help' => "SSMTP это легкий и эффективный способ для отправки электронной почты. по умолчанию, SSMTP приложение не установлено. Параметр NEW_MAIL_MODULES также должен быть включен. Для получения помощи в установке и настройке, пожалуйста, посетите: http://www.zoneminder.com/wiki/index.php/How_to_get_ssmtp_working_with_Zoneminder." 
	),

	'SSMTP_PATH' => array(
		'Prompt' => "Путь к исполняемому файлу SSMTP", 
	),
	'ZM_SSMTP_PATH' => array(
			'Help' => "Рекомендуем установить путь к приложению SSMTP. Если путь не определен, то ZoneMinder попытаться определить путь с помощью команд оболочки. Пример пути: /usr/sbin/ssmtp." 
	),

	'TELEMETRY_DATA' => array(
		'Prompt' => "Отправить информацию об использовании в ZoneMinder", 
	),
	'ZM_TELEMETRY_DATA' => array(
			'Help' => "Включить сбор информации об использовании локальной системы и отправить ее в команду разработчиков ZoneMinder. Эти данные будут использоваться для определения того, кто и где наши клиенты, насколько велики их системы, основное аппаратное обеспечение и операционная система и т.д. Это делается с единственной целью, создание лучшего продукта для нашей целевой аудитории. Этот скрипт полностью прозрачный для конечного пользователя и может быть отключен в данном параметре." 
	),

	'TELEMETRY_LAST_UPLOAD' => array(
		'Prompt' => "Когда произошла последняя загрузка телеметрии ZoneMinder", 
	),
	'ZM_TELEMETRY_LAST_UPLOAD' => array(
			'Help' => "" 
	),

	'TELEMETRY_UUID' => array(
		'Prompt' => "Уникальный идентификатор телеметрии ZoneMinder", 
	),
	'ZM_TELEMETRY_UUID' => array(
			'Help' => "Эта переменная автоматически генерируется один раз системой и используется для однозначной идентификации среди всех других существующих систем ZoneMinder." 
	),

	'UPLOAD_STRICT' => array(
		'Prompt' => "Требовать строгой проверки ключа для загрузок по SFTP", 
	),
	'ZM_UPLOAD_STRICT' => array(
			'Help' => "Во время загрузки по SFTP вы можете запросить проверку ключа удаленного сервера для защиты от атак man-in-the-middle. Вам нужно будет добавить ключ сервера в файл known_hosts. В большинстве систем он находиться в ~/.ssh/known_hosts, где ~ домашний каталог веб-сервера под управлением ZoneMinder." 
	),

	'WEB_CONSOLE_BANNER' => array(
		'Prompt' => "Произвольный текст сообщения в верхней части консоли", 
	),
	'ZM_WEB_CONSOLE_BANNER' => array(
			'Help' => "Позволяет администратору установить произвольное текстовое сообщение в верхней части веб-консоли. Это полезно для разработчиков, чтобы отобразить сообщение, которое указывает, что запущенный экземпляр ZoneMinder представляет собой экземпляр разработки, но оно также может быть использован для любых других целей." 
	),

	'WEB_ID_ON_CONSOLE' => array(
		'Prompt' => "Отображать в списке ID монитора", 
	),
	'ZM_WEB_ID_ON_CONSOLE' => array(
			'Help' => "Некоторые находят полезным отображение ID монитора в списке на консоли. Этот параметр добавит такой столбец." 
	),


	'BANDWIDTH_DEFAULT' => array(
		'Prompt' => "Настройка ширины канала по умолчанию для веб-интерфейса",
	),
	'ZM_BANDWIDTH_DEFAULT' => array(
			'Help' => "Настройки, которые будут использоваться по умолчанию, для  низкой, средней или высокой пропускной способностью канала."
	),
	
	'OPT_USE_AUTH' => array(
		'Prompt' => "Аутентификация входа пользователя в ZoneMinder",
	),
	'ZM_OPT_USE_AUTH' => array(
			'Help' => "ZoneMinder может работать в двух режимах. Самым простым является режим без аутентификации, в котором любой может получить доступ к ZoneMinder и выполнить все задачи.  Чаще всего, такой режим подходит для установок, где доступ к веб-серверу ограничен другими способами. Второй режим позволяет создавать учетные записи пользователей с различным набором разрешений. Для доступа к ZoneMinder, пользователи должны будут пройти аутентификацию и работать согласно настроенных им разрешений."
	),
	
	'AUTH_HASH_TTL' => array(
		'Prompt' => "Количество часов, в течение которых действителен хеш аутентификации",
	),
	'ZM_AUTH_HASH_TTL' => array(
			'Help' => "По умолчанию, традиционно, было 2 часа. Новый хэш будет автоматически восстановлен с половиной этого значения."
	),

	'ENABLE_CSRF_MAGIC' => array(
		'Prompt' => "Включить библиотеку csrf-magic",
	),
	'ZM_ENABLE_CSRF_MAGIC' => array(
			'Help' => "CSRF означает «Cross-Site Request Forgery»(Подделка межсайтовых запросов), которая, при определенных обстоятельствах, может позволить злоумышленнику выполнить любую задачу, на которую у вашей учетной записи пользователя ZoneMinder, есть разрешение. Для этого злоумышленник должен написать специальную веб-страницу и попросить вас перейти к ней, одновременно входя в веб-консоль ZoneMinder. Включение данного параметра поможет смягчить подобные атаки."
	),

	'OPT_USE_LEGACY_API_AUTH' => array(
		'Prompt' => "Включить устаревшую аутентификацию API",
	),
	'ZM_OPT_USE_LEGACY_API_AUTH' => array(
			'Help' => "Начиная с версии 1.34.0, ZoneMinder использует более безопасный механизм аутентификации с использованием токенов JWT. В старых версиях использовался менее безопасный хеш на основе MD5. Рекомендуется отключить данный параметр, если вы уверены, что он вам  не нужен. При отключённом параметре, если вы используете стороннее приложение, у которого более старые механизмы аутентификации API, вам придется обновить это приложение. Обратите внимание, что zmNinja 1.3.057 поддерживает новую систему токенов."
	),

	'OPT_USE_EVENTNOTIFICATION' => array(
		'Prompt' => "Включить сторонний сервер уведомлений о событиях",
	),
	'ZM_OPT_USE_EVENTNOTIFICATION' => array(
			'Help' => "zmeventnotification - сторонний сервер уведомлений о событиях, который используется для получения уведомлений об авариях, обнаруженных ZoneMinder, в режиме реального времени. zmNinja требует этот сервер для push-уведомлений на мобильных телефонах. Эта опция включает сервер, только если он уже установлен. Пожалуйста, посетите [сайт проекта zmeventserver](https://github.com/pliablepixels/zmeventnotification) для прочтения инструкций по установке."
	),

	'SYSTEM_SHUTDOWN' => array(
		'Prompt' => "Разрешить пользователям, с правами администратора, выключать или перезапускать систему из пользовательского интерфейса ZoneMinder",
	),
	'ZM_SYSTEM_SHUTDOWN' => array(
			'Help' => "В системе необходимо установить sudo и добавить следующее в /etc/sudoer~~",
				  "apache ALL=NOPASSWD: /sbin/shutdown~~",
				  "для выполнения выключения или перезагрузки."
	),

	'TIMEZONE' => array(
		'Prompt' => "Часовой пояс, который должен использовать php",
	),
	'ZM_TIMEZONE' => array(
			'Help' => "Должно быть равным системному часовому поясу MySQL-сервера."
	),

	'STATS_UPDATE_INTERVAL' => array(
		'Prompt' => "Как часто обновлять статистику базы данных",
	),
	'ZM_STATS_UPDATE_INTERVAL' => array(
			'Help' => "Демон zmstats выполняет различные запросы к базе данных, которые могут занять много времени в фоновом режиме."
	),

	'CSP_REPORT_URI' => array(
		'Prompt' => "URI для сообщения о небезопасных нарушениях встроенного JavaScript",
	),
	'ZM_CSP_REPORT_URI' => array(
			'Help' => "Для получения дополнительной информации прочтите [Content_Security_Policy](https://en.wikipedia.org/wiki/Content_Security_Policy). Когда браузер обнаружит небезопасный встроенный код JavaScript, он сообщит об этом по этому URL, который может предупредить вас о злонамеренных атаках на ZoneMinder."
	),

	'TELEMETRY_INTERVAL' => array(
		'Prompt' => "Интервал в секундах между обновлениями телеметрии",
	),
	'ZM_TELEMETRY_INTERVAL' => array(
			'Help' => "Для простоты, это значение может быть выражено в виде математического выражения."
	),

	'COOKIE_LIFETIME' => array(
		'Prompt' => "Максимальный срок службы COOKIE, используемый при настройке обработчика сеанса PHP (в секундах)",
	),
	'ZM_COOKIE_LIFETIME' => array(
			'Help' => "Этот параметр влияет на длительность сессии с момента последнего запроса. Маленькое значение позволяет предотвратить «угон» сеанса. Большое значение позволяет дольше  оставаться в системе без обновления простмотра."
	),

	'TIMESTAMP_CODE_CHAR' => array(
		'Prompt' => "Символ, используемый для идентификации кодов меток времени",
	),
	'ZM_TIMESTAMP_CODE_CHAR' => array(
			'Help' => "Есть несколько кодов, которые можно использовать для того, чтобы сообщить ZoneMinder о необходимости вставки данных в метку времени каждого изображения. Традиционно, символ процента (%) использовался для идентификации таких кодов, поскольку текущие коды символов не конфликтуют с кодами функции strftime, которые также могут использоваться в метке времени.  Использование символа процента (%) хорошо работает в операционных системах семейства Linux, но не работает в операционных системах семейства BSD. Изменение символа по умолчанию на что-то другое, например, восклицательный знак (!), решает проблему. Обратите внимание, что указанное занчение в данном параметре, влияет только на временные коды, встроенные в ZoneMinder и не влияет на семейство кодов функции strftime."
	),

	'WEB_TITLE' => array(
		'Prompt' => "Название сайта",
	),
	'ZM_WEB_TITLE' => array(
			'Help' => "Здесь можно изменить идентификацию сайта с «ZoneMinder» на что-то другое. Её можно использовать для более точного описания этой установки от других."
	),

	'HOME_URL' => array(
		'Prompt' => "URL, используемый в области home/logo на панели навигации",
	),
	'ZM_HOME_URL' => array(
			'Help' => "По умолчанию здесь указывается сайт zoneminder.com, но, возможно, вы бы предпочли, указать что-то иное."
	),

	'HOME_CONTENT' => array(
		'Prompt' => "Надпись на ссылке в области home/logo",
	),
	'ZM_HOME_CONTENT' => array(
			'Help' => "Возможно, вы захотите оставить этот параметр пустым, если используете css для фонового изображения."
	),

	'WEB_EVENT_DISK_SPACE' => array(
		'Prompt' => "Показывать ли дисковое пространство, используемое каждым событием",
	),
	'ZM_WEB_EVENT_DISK_SPACE' => array(
			'Help' => "Добавляет еще один столбец в список событий, показывающий дисковое пространство, используемое событием. Это приведет к небольшим накладным расходам, так как вызывает команду \"du\" в каталоге событий. На практике эти издержки довольно малы, но могут быть заметны в системах с ограниченным вводом-выводом."
	),

	'WEB_XFRAME_WARN' => array(
		'Prompt' => "Предупреждать, когда для заголовка «X-Frame-Options» веб-сайта установлено значение «sameorigin»",
	),
	'ZM_WEB_XFRAME_WARN' => array(
			'Help' => "Если, при добавлении нового монитора с типом «Web Site», для целевого веб-сайта в заголовке «X-Frame-Options» установлено значение «sameorigin», сайт не будет отображаться в ZoneMinder. Это особенность дизайна в большинстве современных браузеров. При возникновении этого условия ZoneMinder запишет предупреждение в файл журнала. Чтобы это обойти, можно установить плагин или расширение для браузера, что позволит игнорировать заголовки «X-Frame», и тогда страница будет отображаться правильно. После установки плагина или расширения конечный пользователь может отключить это предупреждение."
	),

	'WEB_FILTER_SOURCE' => array(
		'Prompt' => "Как фильтровать информацию в столбце «источник» в консоли",
	),
	'ZM_WEB_FILTER_SOURCE' => array(
			'Help' => "Этот параметр влияет только на мониторы с типом источника «Ffmpeg», «Libvlc» или «Web Site».  Он определяет, какая информация будет отображаться в столбце «Источник» в консоли. При выборе «None» ничего не фильтруется, будет отображена вся исходная строка, которая может содержать конфиденциальную информацию. При выборе «NoCredentials» из строки удалятся имена пользователей и пароли. Если в строке есть номера портов, и они являются общими (80, 554 и т. Д.), то они также будут удалены. При выборе «Hostname» отфильтруется вся информация, кроме имени хоста или IP-адреса. Если сомневаетесь в выборе, то оставьте значение по умолчанию - «Hostname»~~". 
				  "Этот параметр использует функцию php «url_parts», чтобы идентифицировать различные части URL."
	),

	'LOG_FFMPEG' => array(
		'Prompt' => "Записывать в журнал сообщения FFMPEG",
	),
	'ZM_LOG_FFMPEG' => array(
			'Help' => "Когда этот параметр включен (по умолчанию включен), в файл журналов  будут регистрироваться сообщения «FFMPEG». Они могут быть полезны при отладке проблем потоковой передачи. Однако, в зависимости от вашего дистрибутива и версии «FFMPEG», это  может привести к большему количеству журналов. Если все потоковые передачи работают хорошо, можно отключить этот параметр."
	),

	'RECORD_DIAG_IMAGES_FIFO' => array(
		'Prompt' => "Для записи промежуточной диагностики тревоги использовать fifo вместо файлов (так быстрее)",
	),
	'ZM_RECORD_DIAG_IMAGES_FIFO' => array(
			'Help' => "Данный параметр включит попытку уменьшить нагрузку записи изображений «diag», отправляя их в канал FIFO памяти, вместо создания отдельного файла."
	),

	'MIN_STREAMING_PORT' => array(
		'Prompt' => "Альтернативный диапазон портов для связи потокового видео",
	),
	'ZM_MIN_STREAMING_PORT' => array(
			'Help' => "Из-за того, что в браузерах доступен просмотр лишь 6 подключений, то при подключении 7-го и белее мониторов,  могут возникнуть проблемы при их просмотре. Этот параметр указывает начало диапазона портов, который будет использоваться для связи с ZoneMinder. Каждый монитор будет использовать это значение плюс идентификатор монитора для потоковой передачи содержимого. Таким образом, значение в 2000 приведет к тому, что поток для Монитора с ID = 1 попадёт в порт 2001. Убедитесь, что вы правильно настроили apache для ответа на эти порты."
	),

	'WEB_H_REFRESH_NAVBAR' => array(
		'Prompt' => "Как часто (в секундах) должен обновляться заголовок навигации",
	),
	'ZM_WEB_H_REFRESH_NAVBAR' => array(
			'Help' => "Заголовок навигации содержит общую информацию о состоянии загрузки сервера и объема памяти."
	),

	'WEB_M_REFRESH_NAVBAR' => array(
		'Prompt' => "Как часто (в секундах) должен обновляться заголовок навигации",
	),
	'ZM_WEB_M_REFRESH_NAVBAR' => array(
			'Help' => "Заголовок навигации содержит общую информацию о состоянии загрузки сервера и объема памяти."
	),

	'WEB_L_REFRESH_NAVBAR' => array(
		'Prompt' => "Как часто (в секундах) должен обновляться заголовок навигации",
	),
	'ZM_WEB_L_REFRESH_NAVBAR' => array(
			'Help' => "Заголовок навигации содержит общую информацию о состоянии загрузки сервера и объема памяти."
	),


// 1.36.26

	'LOCALE_DEFAULT' => array(
		'Prompt' => "Локаль по умолчанию, используемая при форматировании строк даты/времени",
	),
	'ZM_LOCALE_DEFAULT' => array(
			'Help' => "По умолчанию ZoneMinder будет использовать локаль, установленную системой. Эта опция позволяет переопределить ее. Локаль используется для определения строки формата, используемой при форматировании дат и времени."
	),

	'DATE_FORMAT_PATTERN' => array(
		'Prompt' => "Переопределение формата даты",
	),
	'ZM_DATE_FORMAT_PATTERN' => array(
			'Help' => "Шаблон, используемый для переопределения строки формата, используемой для дат. Оставьте это значение пустым, чтобы использовать значения по умолчанию для установленной локали. Значения см. на unicode-org."
	),

	'TIME_FORMAT_PATTERN' => array(
		'Prompt' => "Переопределение формата времени",
	),
	'ZM_TIME_FORMAT_PATTERN' => array(
			'Help' => "Шаблон, используемый для переопределения строки формата, используемой для времени. Оставьте это значение пустым, чтобы использовать значения по умолчанию для установленной локали. Значения см. на unicode-org."
	),

	'DATETIME_FORMAT_PATTERN' => array(
		'Prompt' => "Переопределение формата даты/времени",
	),
	'ZM_DATETIME_FORMAT_PATTERN' => array(
			'Help' => "Шаблон, используемый для переопределения строки формата, используемой для даты/времени. Оставьте это значение пустым, чтобы использовать значения по умолчанию для установленной локали. Значения см. на unicode-org."
	),
	
	'OPT_USE_GEOLOCATION' => array(
		'Prompt' => "Добавление функций геолокации в ZoneMinder",
	),
	'ZM_OPT_USE_GEOLOCATION' => array(
			'Help' => "Включать или нет параметры широты/долготы на мониторах и опций отображения."
	),

	'OPT_GEOLOCATION_TILE_PROVIDER' => array(
		'Prompt' => "Поставщик тайлов (плиток) для использования карт",
	),
	'ZM_OPT_GEOLOCATION_TILE_PROVIDER' => array(
			'Help' => "OpenStreetMaps сама не предоставляет изображения для использования на карте. Существует множество изображений, которые можно выбрать. Mapbox.com является одним из примеров, предлагающих бесплатные тайлы (плитки), которые были протестированы во время разработки этой функции."
	),

	'OPT_GEOLOCATION_ACCESS_TOKEN' => array(
		'Prompt' => "Токен доступа для поставщика тайлов (плиток), используемой для карт",
	),
	'ZM_OPT_GEOLOCATION_ACCESS_TOKEN' => array(
			'Help' => "OpenStreetMaps сама не предоставляет изображения для использования на карте. Существует множество изображений, которые можно выбрать. Mapbox.com является одним из примеров, предлагающих бесплатные тайлы (плитки), которые были протестированы во время разработки этой функции.Вы должны зайти на mapbox.com, зарегистрироваться, получить токен доступа и вставить его сюда."
	),

	'FONT_FILE_LOCATION' => array(
		'Prompt' => "Расположение файла шрифта",
	),
	'ZM_FONT_FILE_LOCATION' => array(
			'Help' => "Этот шрифт используется для временных меток."
	),

	'WEB_NAVBAR_TYPE' => array(
		'Prompt' => "Стиль панели навигации в веб-консоли",
	),
	'ZM_WEB_NAVBAR_TYPE' => array(
			'Help' => "Выберите один из различных стилей навигационной панели для веб-консоли. В стиле «normal» меню расположено сверху, а на маленьких экранах оно сворачивается в выпадающее меню. В стиле «collapsed» меню постоянно свернуто. Вместо меню, расположенного сверху, доступ к пунктам меню осуществляется из выпадающего меню справа."
	),

	'HOME_ABOUT' => array(
		'Prompt' => "Включать ли меню «О ZoneMinder»",
	),
	'ZM_HOME_ABOUT' => array(
			'Help' => "Когда эта функция включена, логотип ZoneMinder в левом верхнем углу навигационной панели становится меню со ссылками на: веб-сайт ZoneMinder, документацию ZoneMinder и форум ZoneMinder. Конечные пользователи, желающие провести ребрендинг своей системы, захотят отключить эту функцию, поскольку пункты меню, в настоящее время, жестко закодированы."
	),

	'WEB_ANIMATE_THUMBS' => array(
		'Prompt' => "Увеличение и показ прямой трансляции при наведении на миниатюру",
	),
	'ZM_WEB_ANIMATE_THUMBS' => array(
			'Help' => "Включение этой опции заставляет статичную миниатюру, отображаемую в некоторых видах, увеличиваться и показывать прямую трансляцию, когда на миниатюру наводится курсор мыши."
	),

	'MIN_RTSP_PORT' => array(
		'Prompt' => "Порт, используемый для потокового видео RTSP",
	),
	'ZM_MIN_RTSP_PORT' => array(
			'Help' => "Порт, который будет использоваться для обеспечения потоковой передачи RTSP захваченного видео в реальном времени. Каждая камера для потоковой передачи должна быть включена на вкладке \"Разное\"."
	),

	'MESSAGE_ADDRESS' => array(
		'Prompt' => "Адрес электронной почты, на который следует отправить информацию о соответствующем событии",
	),
	'ZM_MESSAGE_ADDRESS' => array(
			'Help' => "Этот параметр используется для определения адреса электронной почты для коротких сообщений, на который будут отправляться все события, соответствующие соответствующим фильтрам."
	),

	'MESSAGE_SUBJECT' => array(
		'Prompt' => "Тема сообщения, используемая для отправки сведений о событии, соответствующем событию",
	),
	'ZM_MESSAGE_SUBJECT' => array(
			'Help' => "Этот параметр используется для определения темы сообщения, которое отправляется для всех событий, соответствующих соответствующим фильтрам."
	),

	'MESSAGE_BODY' => array(
		'Prompt' => "Тело сообщения, используемое для отправки информации о соответствующем событии",
	),
	'ZM_MESSAGE_BODY' => array(
			'Help' => "Этот параметр используется для определения содержания сообщения, которое отправляется для всех событий, соответствующих соответствующим фильтрам."
	),

	'CASE_INSENSITIVE_USERNAMES' => array(
		'Prompt' => "Аутентификация имени пользователя без учета регистра.",
	),
	'ZM_CASE_INSENSITIVE_USERNAMES' => array(
			'Help' => "Этот параметр делает имена пользователей нечувствительными к регистру при аутентификации."
	),

	'LOG_INJECT' => array(
		'Prompt' => "Разрешить вставку в журнал, через API, непривилегированным пользователям",
	),
	'ZM_LOG_INJECT' => array(
			'Help' => "Если опция включена (по умолчанию выключена), то она позволяет пользователям без прав редактирования (\"Параметры\"->\"Пользователи\"->Имя_пользователя->Система:Редактировать) вставлять консольные или другие сообщения javascript в журнал ZoneMinder. До версии 1.36.27 пользователи могли злоупотреблять этой функцией для создания отказа в обслуживании путем заполнения журналов. Эта функция полезна для отладки и обнаружения ошибок, с которыми сталкиваются конечные пользователи, но требует доверия пользователей и мониторинга ресурсов."
	),





  'OPTIONS_ENCODER_PARAMETERS' => array(
    'Help' => 
      "
       Параметры, передаваемые кодеку для кодирования.~~
       Параметр = значение, разделенные либо запятой, либо новой строкой.~~
       Например, для изменения качества параметр crf использует значение 1 - лучшее, 51 - худшее, 23 - по умолчанию.~~
       crf=23~~
       Вы можете изменить значение movflags для поддержки различных моделей поведения. 
       У некоторых людей возникают проблемы с просмотром видео из-за опции frag_keyframe, но эта опция должна позволять просматривать неполные события.~~
       См. [https://ffmpeg.org/ffmpeg-formats.html](https://ffmpeg.org/ffmpeg-formats.html) для более подробной информации.~~
       По умолчанию в ZoneMinder стоит frag_keyframe,empty_moov.
      "
  ),

  'OPTIONS_DECODERHWACCELNAME' => array(
    'Help' => 
      "
       Эквивалентно опции командной строки ffmpeg -hwaccel. Для поддержки графики intel используйте \"vaapi\". Для поддержки NVIDIA cuda используйте \"cuda\". 
       Чтобы проверить наличие поддержки, запустите ffmpeg -hwaccels в командной строке.
      "
    ),

  'OPTIONS_DECODERHWACCELDEVICE' => array(
    'Help' => 
      "
       Эквивалентно опции командной строки ffmpeg -hwaccel_device. 
       Его нужно указывать только в том случае, если у вас несколько графических процессоров. 
       Типичным значением для Intel VAAPI будет /dev/dri/renderD128.
     "
    ),

  'OPTIONS_RTSPTrans' => array(
      'Help' => 
        "
         Здесь задается транспортный протокол RTSP для FFmpeg.~~
         TCP - Использовать TCP (чередование в канале управления RTSP) в качестве транспортного протокола.~~
         UDP - Использовать UDP в качестве транспортного протокола. Камеры с высоким разрешением испытывают некоторые \"размазывания\" при использовании UDP, в этом случае попробуйте TCP.~~
         UDP Multicast - Использовать UDP Multicast в качестве транспортного протокола.~~
         HTTP - Использовать туннелирование HTTP в качестве транспортного протокола, что полезно для прохождения прокси-серверов.
        "
    ),

  'OPTIONS_EXIF' => array(
    'Help' => "Включите эту опцию для встраивания данных EXIF в каждый кадр jpeg."
    ),

  'OPTIONS_RTSPDESCRIBE' => array(
    'Help' => 
      "
       Иногда, во время первоначального квитирования, RTSP камера отправляет обновленный URL-адрес медиафайла.~~
       Включите эту опцию, чтобы ZoneMinder использовал этот URL.~~
       Отключите эту опцию, чтобы игнорировать значение от камеры и использовать значение, введенное в конфигурации монитора.~~
       Как правило, эта опция должна быть включена.~~
       Однако, бывают случаи, когда камера может передать свой собственный URL неверным, например, когда камера вещает через брандмауэр.
      "
  ),

  'OPTIONS_MAXFPS' => array(
    'Help' => 
      "
      Это поле имеет определенные ограничения при использовании для нелокальных устройств.~~
      Несоблюдение этих ограничений приведет к задержке видео в реальном времени, нерегулярному пропуску кадров и пропуску событий.~~
      Для потоковых IP-камер не используйте это поле для уменьшения частоты кадров. Вместо этого установите частоту кадров в камере. 
      В прошлом рекомендовалось устанавливать значение, превышающее частоту кадров камеры, но теперь в этом нет необходимости и это плохая идея.~~
      Некоторые, в основном старые, IP-камеры поддерживают режим моментального снимка. 
      В этом случае ZoneMinder активно опрашивает камеру на предмет новых изображений. 
      В таком случае можно смело использовать это поле.
      "
        ),

  'OPTIONS_LINKED_MONITORS' => array(
    'Help' => 
      "
       Это поле позволяет выбрать другие мониторы в вашей системе, которые действуют как триггеры для текущего монитора. 
       Таким образом, если у вас есть камера, охватывающая один аспект вашей собственности, вы можете заставить все камеры вести запись, 
       пока эта камера обнаруживает движение или другие события. 
       Нажмите на поле рядом, для выбора связанных мониторов. 
       Будьте очень осторожны, чтобы не создать круговые зависимости с помощью этой функции. 
       Потому-что у вас появятся бесконечно сохраняющиеся сигналы тревоги, а это, наверняка, не то, что вам нужно! 
       Чтобы связать несколько мониторов одновременно, при нажатой клавише \"ctrl\", кликните левой кнопкой мыши по нужным мониторам.
      "
        ),

  'FUNCTION_NONE' => array(
    'Help' => "В режиме \"Не выбран\" (None) не запускается ни один процесс. Захват не происходит."
  ),

  'FUNCTION_MONITOR' => array(
    'Help' => 
      "
       В режиме \"Наблюдение\" (Monitor) процесс захвата (zmc) подключается к камере и передает данные.
       При необходимости они будут декодированы и будет возможен просмотр в реальном времени.<br>
       Обнаружение движения не производится. Видео не сохраняется.
      "
  ),

  'FUNCTION_MODECT' => array(
    'Help' => 
      "
       В режиме \"Запись при движении\" (Modect) процесс захвата (zmc) подключается к камере и передает данные.
       При необходимости они будут декодированы, и будет возможен просмотр видео в реальном времени.<br>
       Кроме того, видео будет анализироваться на предмет движения.
       При обнаружении движения будут созданы события и сохранено видео.<br>
       Данные о движении будут храниться в базе данных для каждого события.
       События могут быть инициированы извне (zmtrigger) или подключенными мониторами.
      "
  ),

  'FUNCTION_RECORD' => array(
    'Help' => 
      "
       В режиме \"Постоянная запись\" (Record), процесс захвата (zmc) подключается к камере и передает данные.<br>
       При необходимости она будет декодирована и будет возможен просмотр видео в реальном времени.
       Детектор движения не будет выполняться.<br>
       События будут создаваться через фиксированные интервалы времени. Видео будет сохраняться.
      "
  ),

  'FUNCTION_MOCORD' => array(
    'Help' => 
      "
       В режиме \"Постоянная запись с обл. детекции\" (Mocord), процесс захвата (zmc) подключается к камере и передает данные.<br>
       При необходимости они будут декодированы и будет возможен просмотр видео в реальном времени.<br>
       Кроме того, видео будет анализироваться на предмет движения.<br>
       События будут создаваться через фиксированные интервалы времени или при начале и остановке движения.<br>
       Видео всегда будет сохраняться на диске, а данные о движении будут храниться в базе данных.<br>
       События могут быть инициированы извне (zmtrigger) или подключенными мониторами.
      "
  ),

  'FUNCTION_NODECT' => array(
    'Help' => 
      "
       В режиме \"Внешние триггеры\" (Nodect) процесс захвата (zmc) подключается к камере и передает данные.<br>
       При необходимости они будут декодированы и будет возможен просмотр видео в реальном времени.<br>
       Кроме того, все связанные камеры будут проверены на состояние тревоги.<br>
       Когда связанные камеры или внешний триггер (zmtrigger) подают сигнал тревоги, будут созданы события и видео будет сохранено.<br>
       Никакого другого обнаружения движения не происходит.
      "
  ),

  'FUNCTION_ANALYSIS_ENABLED' => array(
    'Help' => 
      "
       В режимах:<br>
       \"Запись при движении\" (Modect);<br>
       \"Постоянная запись\" (Record);<br>
       \"Постоянная запись с обл. детекции\" (Mocord);<br>
       \"Внешние триггеры\" (Nodect),<br>
       процесс анализа может быть включен или выключен. Эта настройка устанавливает состояние по умолчанию при запуске процесса.<br>
       После запуска процесса эту настройку можно включить или выключить с помощью внешних триггеров zmtrigger, zmu или веб-интерфейса.<br>
       Если настройка не включена, то не будет выполняться обнаружение движения или проверка связанного монитора, и не будут создаваться события.
      "
  ),

  'FUNCTION_DECODING_ENABLED' => array(
    'Help' => 
      "
       В режиме \"Постоянная запись\" (Record) или \"Внешние триггеры\" (Nodect) и при использовании H264Passthrough без сохранения jpeg,<br>
       есть возможность отключить декодирование пакетов H264/H265.  Это значительно снизит потребление процессора,<br>
       но сделает недоступным просмотр в реальном времени для текущего монитора.<br>
       По умолчанию декодирование включено.
      "
  ),

  'ImageBufferCount' => array(
    'Help' => "Количество необработанных (raw) снимков, доступных в /dev/shm. В настоящее время должно быть установлено в диапазоне 3-5. Используется для просмотра в реальном времени.."
  ),

  'MaxImageBufferCount' => array(
    'Help' => 
      "
       Максимальное количество видеопакетов, которые будут храниться в очереди пакетов.
       Если в параметре \"Хранилище \"->\"Записывать видео\" используется значение \"Прямо с камеры\" , то очередь пакетов, обычно, управляется самостоятельно, 
       сохраняя кадры с предварительным подсчетом событий или все кадры с последнего ключевого кадра. Вы можете установить максимальное значение, чтобы монитор не потреблял слишком много памяти, 
       но если интервал между ключевыми кадрами будет больше этого значения, то в событиях может отсутсвовать какое-то количество кадров.
       В журналах будут появляться ошибки. Поэтому убедитесь, что интервал между ключевыми кадрами меньше, указанного в этом параметре значения или,
       что у вас достаточно оперативной памяти.
      "
  ),

  'OPTIONS_RTSPSERVER' => array(
    'Help' => 
      "
       ZoneMinder поставляется со своим собственным RTSP-сервером, который может повторно передавать RTSP или пытаться преобразовать поток монитора в RTSP. 
       Применяется в случаях, если вы хотите использовать ресурсы хост-машины с ZoneMinder вместо множества клиентов, получающих сигнал с одной камеры.~~~~
       ПРИМЕЧАНИЕ:~~
       начальный RTSP-порт настраивается в  \"Параметры\" > \"Сеть\" > MIN_RTSP_PORT
      "
  ),

  'OPTIONS_RTSPSTREAMNAME' => array(
    'Help' => 
      "
       Если параметр \"Встроенный в ZoneMinder RTSP сервер\" включен, то здесь вводится произвольное название, по которуму будет доступен поток при формированиии rtsp-строки. 
       Например, если адрес хост-машины с ZoneMinder равен 192.168.1.10, ID настраиваемого монитора равен 6,  \"Параметры\" > \"Сеть\" > MIN_RTSP_PORT = 20000 и в данном параметре введено значение \"my_camera\", то 
       доступ к потоку будет осуществляться по адресу rtsp://192.168.1.10:20006/my_camera
      "
  ),




//	'BANDWIDTH_DEFAULT' => array(
//		'Prompt' => "",
//			'Help' => ""
//	),
//	'BANDWIDTH_DEFAULT' => array(
//		'Prompt' => "",
//			'Help' => ""
//	),
//	'BANDWIDTH_DEFAULT' => array(
//		'Prompt' => "",
//			'Help' => ""

	
	//    'LANG_DEFAULT' => array(
//        'Prompt' => "This is a new prompt for this option",
//        'Help' => "This is some new help for this option which will be displayed in the popup window when the ? is clicked"
//    ),
);

?>
