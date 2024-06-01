INSERT INTO `pouzivatel`
    (`id`, `email`, `heslo`, `opravnenia`)
VALUES
    (1, 'pracovnik', 'pracovnik', 1),
    (2, 'admin', 'admin', 2),
	(3, 'main_admin', 'main_admin', 3);

INSERT INTO `qna`
    (`otazka`, `odpoved`)
VALUES
    ('otazka1', 'odpoved1'),
    ('otazka2', 'odpoved2'),
    ('otazka3', 'odpoved3');

INSERT INTO `praca`
    (`id`, `meno`, `email`, `pozicia`,`kompetencie`)
VALUES
    ('1', 'peter','peter@gmail.com','zahradnik','blabla');