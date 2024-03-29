-- Связующая Заболевания - Сиптомы заболевания --
CREATE TABLE IF NOT EXISTS "diseases_disease_symptoms" (
  "id" SERIAL PRIMARY KEY,
  "diseases_id" INTEGER REFERENCES diseases(id) NOT NULL,
  "symptom_diseases_id" INTEGER REFERENCES disease_symptoms(id) NOT NULL
);

COMMENT ON TABLE public."diseases_disease_symptoms" IS 'Связующая таблица Заболевания - Симптомы заболевания';
COMMENT ON COLUMN public."diseases_disease_symptoms".id IS 'Уникальный идентификатор';
COMMENT ON COLUMN public."diseases_disease_symptoms".diseases_id IS 'Внешний ключ к таблице Заболевания';
COMMENT ON COLUMN public."diseases_disease_symptoms".symptom_diseases_id IS 'Внешний ключ к таблице Симптомы заболевания';

INSERT INTO "diseases_disease_symptoms" ("diseases_id", "symptom_diseases_id") VALUES
  ('1', '1'),
  ('1', '2'),
  ('1', '3'),
  ('1', '4'),
  ('1', '5'),
  ('1', '6'),
  ('1', '7'),
  ('1', '8'),
  ('1', '9'),
  ('1', '10'),
  ('1', '11'),
  ('2', '12'),
  ('2', '13'),
  ('2', '14'),
  ('2', '15'),
  ('2', '16'),
  ('2', '17'),
  ('2', '18'),
  ('2', '19'),
  ('2', '20'),
  ('2', '21'),
  ('2', '22'),
  ('3', '23'),
  ('3', '24'),
  ('3', '25'),
  ('3', '26'),
  ('3', '27'),
  ('3', '28'),
  ('3', '29'),
  ('3', '30'),
  ('3', '31'),
  ('3', '32'),
  ('3', '33'),
  ('3', '34'),
  ('3', '35'),
  ('4', '36'),
  ('4', '37'),
  ('4', '38'),
  ('4', '39'),
  ('4', '40'),
  ('4', '41'),
  ('4', '42'),
  ('4', '43'),
  ('4', '44'),
  ('4', '45'),
  ('4', '46'),
  ('4', '47'),
  ('7', '48'),
  ('7', '49'),
  ('7', '50'),
  ('7', '51'),
  ('7', '52'),
  ('7', '53'),
  ('7', '54'),
  ('7', '55'),
  ('7', '56'),
  ('7', '57'),
  ('8', '58'),
  ('8', '59'),
  ('8', '60'),
  ('8', '61'),
  ('8', '62'),
  ('8', '63'),
  ('8', '64'),
  ('8', '65'),
  ('8', '66'),
  ('9', '67'),
  ('9', '68'),
  ('9', '69'),
  ('9', '70'),
  ('9', '71'),
  ('9', '72'),
  ('9', '73'),
  ('9', '74'),
  ('9', '75'),
  ('9', '76'),
  ('10', '77'),
  ('10', '79'),
  ('10', '80'),
  ('10', '81'),
  ('10', '82'),
  ('10', '83'),
  ('11', '84'),
  ('11', '85'),
  ('11', '86'),
  ('11', '87'),
  ('11', '88'),
  ('11', '89'),
  ('11', '90'),
  ('11', '91'),
  ('12', '92'),
  ('12', '93'),
  ('12', '94'),
  ('12', '95'),
  ('12', '96'),
  ('12', '97'),
  ('12', '98'),
  ('12', '99'),
  ('13', '100'),
  ('13', '101'),
  ('13', '102'),
  ('13', '103'),
  ('13', '104'),
  ('13', '105'),
  ('13', '106'),
  ('13', '107'),
  ('13', '108'),
  ('13', '109'),
  ('13', '110'),
  ('14', '111'),
  ('14', '112'),
  ('14', '113'),
  ('14', '114'),
  ('14', '115'),
  ('14', '116'),
  ('14', '117'),
  ('14', '118'),
  ('14', '119'),
  ('14', '120'),
  ('14', '121'),
  ('14', '122'),
  ('15', '123'),
  ('16', '124'),
  ('16', '125'),
  ('16', '126'),
  ('16', '127'),
  ('18', '128'),
  ('18', '129'),
  ('18', '130'),
  ('18', '131'),
  ('18', '132'),
  ('18', '133'),
  ('18', '134'),
  ('18', '135'),
  ('18', '136'),
  ('19', '137'),
  ('19', '138'),
  ('19', '139'),
  ('19', '140'),
  ('19', '141'),
  ('19', '142'),
  ('19', '143'),
  ('19', '144'),
  ('19', '145'),
  ('26', '146'),
  ('26', '147'),
  ('26', '148'),
  ('26', '149'),
  ('26', '150'),
  ('26', '151'),
  ('26', '152'),
  ('26', '153'),
  ('26', '154'),
  ('27', '155'),
  ('27', '156'),
  ('27', '157'),
  ('27', '158'),
  ('27', '159'),
  ('27', '160'),
  ('27', '161'),
  ('29', '162'),
  ('29', '163'),
  ('29', '164'),
  ('30', '165'),
  ('30', '166'),
  ('30', '167'),
  ('30', '168'),
  ('30', '169'),
  ('30', '170'),
  ('31', '171'),
  ('31', '172'),
  ('31', '173'),
  ('31', '174'),
  ('31', '175'),
  ('31', '176'),
  ('31', '177'),
  ('31', '178'),
  ('32', '179'),
  ('32', '180'),
  ('32', '181'),
  ('32', '182'),
  ('32', '183'),
  ('32', '184'),
  ('32', '185'),
  ('32', '186'),
  ('32', '187'),
  ('32', '188'),
  ('32', '189'),
  ('33', '190'),
  ('35', '191'),
  ('35', '192'),
  ('35', '193'),
  ('35', '194'),
  ('35', '195'),
  ('35', '196'),
  ('37', '197'),
  ('37', '198'),
  ('37', '199'),
  ('37', '200'),
  ('37', '201'),
  ('37', '202'),
  ('37', '203'),
  ('37', '204'),
  ('37', '205'),
  ('37', '206'),
  ('38', '207'),
  ('38', '208'),
  ('38', '209'),
  ('38', '210'),
  ('38', '211'),
  ('38', '212'),
  ('38', '213'),
  ('39', '214'),
  ('39', '215'),
  ('39', '216'),
  ('39', '217'),
  ('39', '218'),
  ('39', '219'),
  ('39', '220'),
  ('39', '221'),
  ('39', '222'),
  ('39', '223'),
  ('39', '224'),
  ('39', '225'),
  ('40', '226'),
  ('40', '227'),
  ('40', '228'),
  ('40', '229'),
  ('40', '230'),
  ('40', '231'),
  ('41', '232'),
  ('41', '233'),
  ('41', '234'),
  ('41', '235'),
  ('41', '236'),
  ('41', '237'),
  ('41', '238'),
  ('41', '239'),
  ('41', '240'),
  ('41', '241'),
  ('41', '242'),
  ('42', '243'),
  ('42', '244'),
  ('42', '245'),
  ('42', '246'),
  ('42', '247'),
  ('42', '248'),
  ('42', '249'),
  ('42', '250'),
  ('42', '251'),
  ('43', '252'),
  ('43', '253'),
  ('43', '254'),
  ('43', '255'),
  ('43', '256'),
  ('43', '257'),
  ('44', '258'),
  ('44', '259'),
  ('44', '260'),
  ('44', '261'),
  ('44', '262'),
  ('45', '263'),
  ('45', '264'),
  ('45', '265'),
  ('45', '266'),
  ('45', '267'),
  ('45', '268'),
  ('45', '269'),
  ('45', '270'),
  ('45', '271'),
  ('45', '272'),
  ('45', '273'),
  ('45', '274'),
  ('45', '275'),
  ('46', '276'),
  ('46', '277'),
  ('46', '278'),
  ('46', '279'),
  ('46', '280'),
  ('46', '281'),
  ('46', '282'),
  ('46', '283'),
  ('46', '284'),
  ('46', '285'),
  ('46', '286'),
  ('46', '287'),
  ('46', '288'),
  ('46', '289'),
  ('47', '290'),
  ('47', '291'),
  ('47', '292'),
  ('48', '293'),
  ('48', '294'),
  ('48', '295'),
  ('48', '296'),
  ('48', '297'),
  ('49', '298'),
  ('49', '299'),
  ('49', '300'),
  ('49', '301'),
  ('49', '302'),
  ('49', '303'),
  ('49', '304'),
  ('49', '305'),
  ('49', '306'),
  ('49', '307'),
  ('49', '308'),
  ('49', '309'),
  ('50', '310'),
  ('50', '311'),
  ('50', '312'),
  ('50', '313'),
  ('50', '314'),
  ('50', '315'),
  ('50', '316'),
  ('50', '317'),
  ('50', '318'),
  ('50', '319'),
  ('50', '320'),
  ('50', '321'),
  ('50', '322'),
  ('52', '323'),
  ('52', '324'),
  ('52', '325'),
  ('52', '326'),
  ('52', '327'),
  ('52', '328'),
  ('55', '329'),
  ('55', '330'),
  ('55', '331'),
  ('55', '332'),
  ('55', '333'),
  ('55', '334'),
  ('55', '335'),
  ('55', '336'),
  ('58', '337'),
  ('58', '338'),
  ('58', '339'),
  ('58', '340'),
  ('58', '341'),
  ('58', '342'),
  ('58', '343'),
  ('58', '344'),
  ('59', '345'),
  ('59', '346'),
  ('59', '347'),
  ('59', '348'),
  ('59', '349'),
  ('59', '350'),
  ('59', '351'),
  ('59', '352'),
  ('59', '353'),
  ('59', '354'),
  ('61', '355'),
  ('61', '356'),
  ('61', '357'),
  ('61', '358'),
  ('61', '359'),
  ('61', '360'),
  ('61', '361'),
  ('61', '362'),
  ('61', '363'),
  ('62', '364'),
  ('62', '365'),
  ('62', '366'),
  ('62', '367'),
  ('62', '368'),
  ('62', '369'),
  ('62', '370'),
  ('62', '371'),
  ('62', '372'),
  ('63', '373'),
  ('63', '374'),
  ('63', '375'),
  ('63', '376'),
  ('63', '377'),
  ('63', '378'),
  ('63', '379'),
  ('63', '380'),
  ('63', '381'),
  ('64', '382'),
  ('64', '383'),
  ('64', '384'),
  ('64', '385'),
  ('64', '386'),
  ('64', '387'),
  ('64', '388'),
  ('64', '389'),
  ('64', '390'),
  ('64', '391'),
  ('64', '392'),
  ('65', '393'),
  ('65', '394'),
  ('65', '395'),
  ('65', '396'),
  ('65', '397'),
  ('65', '398'),
  ('65', '399'),
  ('66', '400'),
  ('66', '401'),
  ('66', '402'),
  ('66', '403'),
  ('66', '404'),
  ('66', '405'),
  ('67', '406'),
  ('67', '407'),
  ('67', '408'),
  ('67', '409'),
  ('67', '410'),
  ('67', '411'),
  ('67', '412'),
  ('67', '413'),
  ('67', '414'),
  ('67', '415'),
  ('67', '416'),
  ('68', '417'),
  ('68', '418'),
  ('68', '419'),
  ('69', '420'),
  ('69', '421'),
  ('69', '422'),
  ('73', '423'),
  ('73', '424'),
  ('73', '425'),
  ('74', '426'),
  ('74', '427'),
  ('74', '428'),
  ('74', '429'),
  ('74', '430'),
  ('75', '431'),
  ('75', '432'),
  ('75', '433'),
  ('75', '434'),
  ('75', '435'),
  ('75', '436'),
  ('75', '437'),
  ('75', '438'),
  ('78', '439'),
  ('78', '440'),
  ('78', '441'),
  ('79', '442'),
  ('79', '443'),
  ('79', '444'),
  ('79', '445'),
  ('79', '446'),
  ('80', '447'),
  ('80', '448'),
  ('80', '449'),
  ('80', '450'),
  ('80', '451'),
  ('80', '452'),
  ('80', '453'),
  ('80', '454'),
  ('81', '455'),
  ('81', '456'),
  ('81', '457'),
  ('81', '458'),
  ('81', '459'),
  ('81', '460'),
  ('81', '461'),
  ('81', '462'),
  ('83', '463'),
  ('83', '464'),
  ('83', '465'),
  ('83', '466'),
  ('83', '467'),
  ('83', '468'),
  ('83', '469'),
  ('83', '470'),
  ('84', '471'),
  ('84', '472'),
  ('84', '473'),
  ('84', '474'),
  ('84', '475'),
  ('85', '476'),
  ('85', '477'),
  ('85', '478'),
  ('85', '479'),
  ('85', '480'),
  ('85', '481'),
  ('86', '482'),
  ('86', '483'),
  ('86', '484'),
  ('86', '485'),
  ('86', '486'),
  ('86', '487'),
  ('86', '488'),
  ('87', '489'),
  ('87', '490'),
  ('87', '491'),
  ('87', '492'),
  ('87', '493'),
  ('87', '494'),
  ('87', '495'),
  ('88', '496'),
  ('88', '497'),
  ('88', '498'),
  ('88', '499'),
  ('88', '500');