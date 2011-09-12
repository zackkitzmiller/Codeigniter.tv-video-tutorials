CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `body` text NOT NULL,
  `pubdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Gegevens worden uitgevoerd voor tabel `news`
--

INSERT INTO `news` (`id`, `title`, `body`, `pubdate`) VALUES
(1, 'Some breaking news', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nunc enim, auctor ac placerat a, placerat vitae nibh. Suspendisse vitae magna at purus faucibus vehicula et tincidunt turpis. Aenean tempus scelerisque neque, vitae sodales enim fermentum ut. Pellentesque dictum placerat odio ut lobortis. Duis suscipit interdum magna, sed gravida tortor posuere id. Pellentesque convallis cursus erat, eget feugiat dui consectetur vel. Aliquam dictum nibh consequat mauris sollicitudin eleifend. Vivamus sit amet ligula mauris. Sed tristique commodo malesuada. Pellentesque at justo ac orci scelerisque ultricies sed eget urna. Vivamus aliquam pellentesque urna, eget fringilla lectus aliquet et. Cras vitae nisi ut felis fermentum tincidunt.</p>', '2011-09-07 17:00:00'),
(2, 'Some more news', '<p>Donec lacinia cursus nisl eget semper. Proin dictum egestas diam, ac venenatis ligula ultricies ut. Donec eu egestas risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut quis lacus vel leo commodo faucibus sit amet nec ligula. Nullam sodales eleifend massa, sit amet volutpat ante vehicula in. Etiam risus eros, egestas et egestas eget, blandit a elit. Aliquam erat volutpat. Mauris nec lorem ut odio ullamcorper malesuada. Vestibulum faucibus fringilla placerat. Nunc nec lectus in turpis ornare luctus. Nunc feugiat mattis orci et accumsan.</p>', '2011-09-08 14:00:00');
