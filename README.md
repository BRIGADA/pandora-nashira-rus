# РУСИФИКАЦИЯ #

Файлы репозитория полностью соответствуют исходным на английском языке с добавленными русскими строками (если соотвествующие нашлись).

Формат записей в файлах:


```
 ---
 
 МЕТКА (не переводить)

 ОРИГИНАЛЬНАЯ СТРОКА

 СТРОКА ПЕРЕВОДА

 ---
```

Другими словами, записи разделяются последовательностью "\n\n---\n\n", каждая запись состоит из 3-х строк, разделённых одной пустой. Переводить нужно только последнюю.

Теги и их атрибуты и конструкции "&quot;" переводить не надо.

В некоторых местах встречаются конструкции вида %5% - в это место будет вставлено соответствующее значение:


```
<!--
	The following tokens are replaced by the game:
 
 	%1% with faction leader title, e.g. "Lady".
 	%2% with faction leader name, e.g. "Lilith Vermillion".
 	%3% with faction leader title and name, e.g. "Lady Lilith Vermillion".
 	%4% with a random insult.
 	%5% with a random compliment.
 	%6% with message context.
 	%7% with a random crime (second person).
 	%8% with a random crime (third person).
-->
```
