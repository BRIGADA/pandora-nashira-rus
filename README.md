# Pandora: Eclipse of Nashira 
# РУСИФИКАЦИЯ

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

Теги, их атрибуты и конструкции "&quot" переводить не надо.

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

# Текущая статистика перевода #

```
              Armors.xml : 31/34 (91%)
            Factions.xml : 61/80 (76%)
                 GUI.xml : 349/431 (80%)
            Dialogue.xml : 63/89 (70%)
     WorldParameters.xml : 90/127 (70%)
              Events.xml : 51/77 (66%)
             Weapons.xml : 89/113 (78%)
              Cities.xml : 5/849 (0%)
        Technologies.xml : 253/285 (88%)
            Settings.xml : 77/91 (84%)
          Operations.xml : 27/39 (69%)
        Militaristic.xml : 101/112 (90%)
            Advisors.xml : 24/24 (100%)
            Features.xml : 107/192 (55%)
            Economic.xml : 101/114 (88%)
            Ecologic.xml : 101/114 (88%)
             Stories.xml : 0/13 (0%)
                Tips.xml : 50/58 (86%)
 InfiniteProducables.xml : 4/4 (100%)
               Units.xml : 93/135 (68%)
           Buildings.xml : 108/121 (89%)
         Industrious.xml : 101/114 (88%)
               Ranks.xml : 8/8 (100%)
             Credits.xml : 7/8 (87%)
          Scientific.xml : 101/114 (88%)
            Messages.xml : 49/56 (87%)
            Timeline.xml : 25/27 (92%)
          Diplomatic.xml : 0/114 (0%)
             Reports.xml : 9/72 (12%)
        Advancements.xml : 72/93 (77%)
              Orders.xml : 53/93 (56%)
             Devices.xml : 37/41 (90%)
             Fanatic.xml : 101/114 (88%)
 -----------------------------------------------------------
                   Total : 2348/3956 (59%)
```
