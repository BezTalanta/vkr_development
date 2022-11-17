# О репозитории
Настоящий репозиторий объединяет процесс разработки приложения и написания выпускной квалификационной работы (ВКР). Любые результаты работы над ВКР должны быть отражены в соответствующих коммитах.

## Правило оформления коммитов
Основное сообщение любого коммита должно иметь формат:
```
[FRT|BCK|DB|EXE|DOC|ADM:] {текст коммита на английском}
```
где перед двоеточием стоит пояснение, какого уровня разработки касались изменения. FRT - клиентская часть; BCK - серверная часть; DB - СУБД; EXE - исполняемая программа; DOC - написание текста диплома, презентации, документации; ADM - административные изменения в репозитории.

## Структура репозитория
Репозиторий имеет две папки `src` и `studs`. В первой размещены папка `dev` с кодом текущей разработки и папка `rel` с рабочим прототипом web-приложения. Во второй папке находятся подпапки студентов, куда необходимо размещать тексты ВКР и слайды презентации для защиты. Примерные образцы оформления текстов и слайдов находятся в tex-файлах.