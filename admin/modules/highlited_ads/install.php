<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>highlited_ads</id>
    <name>Highlited Ads</name>
    <description>Shows highlited ads on the first page.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'highlited_ads', `name`='Highlited Ads', `description` = 'Shows highlited ads on the first page.', `enabled` = 1;

DROP TABLE if exists `PREFIXhighlited_ads`;
CREATE TABLE `PREFIXhighlited_ads` (
  `title` varchar(200),
  `no_ads` int(2) default 4
) ENGINE=MyISAM;

INSERT INTO `PREFIXhighlited_ads` set `title` = 'Highlited Ads', `no_ads`=4;
    </query>
</module>
