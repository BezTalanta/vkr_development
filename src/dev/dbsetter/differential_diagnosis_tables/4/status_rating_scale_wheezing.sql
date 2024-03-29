CREATE TABLE IF NOT EXISTS "status_rating_scale_wheezing" (
  "id" INTEGER PRIMARY KEY NOT NULL,
  "description" VARCHAR(30) NOT NULL,
  "point" INTEGER NOT NULL
);

COMMENT ON TABLE public."status_rating_scale_wheezing" IS 'ХСН ШОКС (в модификации Мареева В.Ю.) - Хрипы в легких';
COMMENT ON COLUMN public."status_rating_scale_wheezing".id IS 'Уникальный идентификатор';
COMMENT ON COLUMN public."status_rating_scale_wheezing".description IS 'Описание';
COMMENT ON COLUMN public."status_rating_scale_wheezing".point IS 'Балл';

INSERT INTO "status_rating_scale_wheezing" ("id", "description", "point") VALUES
  ('1', 'Нет', '0'),
  ('2', 'Нижние отделы (до 1/3)', '1'),
  ('3', 'До лопаток (до 2/3)', '2'),
  ('4', 'Над всей поверхностью легких', '3');