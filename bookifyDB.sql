/*
 Navicat Premium Data Transfer

 Source Server         : bookify
 Source Server Type    : PostgreSQL
 Source Server Version : 160001 (160001)
 Source Host           : localhost:5433
 Source Catalog        : db_bookify
 Source Schema         : public

 Target Server Type    : PostgreSQL
 Target Server Version : 160001 (160001)
 File Encoding         : 65001

 Date: 18/01/2024 01:17:02
*/


-- ----------------------------
-- Sequence structure for Authors_author_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."Authors_author_id_seq";
CREATE SEQUENCE "public"."Authors_author_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for Authors_author_id_seq1
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."Authors_author_id_seq1";
CREATE SEQUENCE "public"."Authors_author_id_seq1" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for Authors_author_id_seq2
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."Authors_author_id_seq2";
CREATE SEQUENCE "public"."Authors_author_id_seq2" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for Books_book_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."Books_book_id_seq";
CREATE SEQUENCE "public"."Books_book_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for Books_book_id_seq1
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."Books_book_id_seq1";
CREATE SEQUENCE "public"."Books_book_id_seq1" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for Books_book_id_seq2
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."Books_book_id_seq2";
CREATE SEQUENCE "public"."Books_book_id_seq2" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for Genres_genre_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."Genres_genre_id_seq";
CREATE SEQUENCE "public"."Genres_genre_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for Genres_genre_id_seq1
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."Genres_genre_id_seq1";
CREATE SEQUENCE "public"."Genres_genre_id_seq1" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for Genres_genre_id_seq2
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."Genres_genre_id_seq2";
CREATE SEQUENCE "public"."Genres_genre_id_seq2" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for Images_image_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."Images_image_id_seq";
CREATE SEQUENCE "public"."Images_image_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for Images_image_id_seq1
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."Images_image_id_seq1";
CREATE SEQUENCE "public"."Images_image_id_seq1" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for Images_image_id_seq2
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."Images_image_id_seq2";
CREATE SEQUENCE "public"."Images_image_id_seq2" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for Roles_role_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."Roles_role_id_seq";
CREATE SEQUENCE "public"."Roles_role_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for Roles_role_id_seq1
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."Roles_role_id_seq1";
CREATE SEQUENCE "public"."Roles_role_id_seq1" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for Roles_role_id_seq2
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."Roles_role_id_seq2";
CREATE SEQUENCE "public"."Roles_role_id_seq2" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for Types_type_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."Types_type_id_seq";
CREATE SEQUENCE "public"."Types_type_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for Types_type_id_seq1
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."Types_type_id_seq1";
CREATE SEQUENCE "public"."Types_type_id_seq1" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for Types_type_id_seq2
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."Types_type_id_seq2";
CREATE SEQUENCE "public"."Types_type_id_seq2" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for UserBooks_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."UserBooks_id_seq";
CREATE SEQUENCE "public"."UserBooks_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for UserBooks_id_seq1
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."UserBooks_id_seq1";
CREATE SEQUENCE "public"."UserBooks_id_seq1" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for UserBooks_id_seq2
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."UserBooks_id_seq2";
CREATE SEQUENCE "public"."UserBooks_id_seq2" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for UserDetails_user_details_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."UserDetails_user_details_id_seq";
CREATE SEQUENCE "public"."UserDetails_user_details_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for UserDetails_user_details_id_seq1
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."UserDetails_user_details_id_seq1";
CREATE SEQUENCE "public"."UserDetails_user_details_id_seq1" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for Users_user_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."Users_user_id_seq";
CREATE SEQUENCE "public"."Users_user_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for Users_user_id_seq1
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."Users_user_id_seq1";
CREATE SEQUENCE "public"."Users_user_id_seq1" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for Users_user_id_seq2
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."Users_user_id_seq2";
CREATE SEQUENCE "public"."Users_user_id_seq2" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Table structure for Authors
-- ----------------------------
DROP TABLE IF EXISTS "public"."Authors";
CREATE TABLE "public"."Authors" (
  "author_id" int4 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1
),
  "name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "surname" varchar(255) COLLATE "pg_catalog"."default" NOT NULL
)
;

-- ----------------------------
-- Records of Authors
-- ----------------------------
INSERT INTO "public"."Authors" OVERRIDING SYSTEM VALUE VALUES (1, 'J.K.', 'Rowling');
INSERT INTO "public"."Authors" OVERRIDING SYSTEM VALUE VALUES (2, 'George R.R.', 'Martin');
INSERT INTO "public"."Authors" OVERRIDING SYSTEM VALUE VALUES (3, 'Stephen', 'King');
INSERT INTO "public"."Authors" OVERRIDING SYSTEM VALUE VALUES (4, 'Jan', 'Kowalski');

-- ----------------------------
-- Table structure for Books
-- ----------------------------
DROP TABLE IF EXISTS "public"."Books";
CREATE TABLE "public"."Books" (
  "book_id" int4 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1
),
  "title" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "genre_id" int4 NOT NULL,
  "author_id" int4 NOT NULL,
  "image_id" int4 NOT NULL,
  "description" text COLLATE "pg_catalog"."default" NOT NULL,
  "rating" numeric(10,1)
)
;

-- ----------------------------
-- Records of Books
-- ----------------------------
INSERT INTO "public"."Books" OVERRIDING SYSTEM VALUE VALUES (2, 'A Song of Ice and Fire', 3, 2, 2, 'A Song of Ice and Fire (commonly abbreviated as ASoIaF) is an ongoing series of epic fantasy novels by American novelist and screenwriter George R. R. Martin. Martin began writing the series in 1991 and the first volume was published in 1996. Originally planned as a trilogy, the series now consists of five published volumes; a further two are planned. In addition there are three prequel novellas currently available, with several more being planned, and a series of novella-length excerpts from the main Ice and Fire novels.', 5.0);
INSERT INTO "public"."Books" OVERRIDING SYSTEM VALUE VALUES (4, 'The Outsider', 4, 3, 4, 'Bestialska zbrodnia. Śledztwo pełne znaków zapytania. Stephen King, znajdujący się w szczególnie owocnym okresie twórczości, przedstawia jedną ze swoich najbardziej niepokojących i wciągających opowieści.
W parku miejskim znalezione zostaje zmasakrowane ciało jedenastoletniego chłopca. Naoczni świadkowie i odciski palców nie pozostawiają wątpliwości: sprawcą zbrodni jest jeden z najbardziej lubianych obywateli Flint City. To Terry Maitland, trener drużyn młodzieżowych, nauczyciel angielskiego, mąż i ojciec dwóch córek. Detektyw Ralph Anderson, którego syna Maitland kiedyś trenował, nakazuje przeprowadzić natychmiastowe aresztowanie w świetle jupiterów. Maitland ma wprawdzie alibi, ale Anderson i prokurator okręgowy wkrótce zdobywają kolejny niezbity dowód: ślady DNA. Sprawa wydaje się oczywista.
Kiedy w toku śledztwa zaczynają wychodzić na jaw przerażające szczegóły, porywająca opowieść Kinga wchodzi na wyższe obroty, napięcie narasta, aż staje się niemal nie do zniesienia. Terry Maitland na pozór jest miłym człowiekiem, ale czy ma drugie oblicze? Odpowiedź szokuje – tak jak szokować potrafi tylko Stephen King.', 4.7);
INSERT INTO "public"."Books" OVERRIDING SYSTEM VALUE VALUES (7, 'Harry Potter and the Order of the Phoenix', 3, 1, 7, 'What is Harry Potter and the Order of the Phoenix about? In the fifth installment of the Harry Potter series, Harry returns to Hogwarts for his fifth year and discovers a secret society called the Order of the Phoenix, dedicated to fighting the dark wizard Voldemort.', 0.0);
INSERT INTO "public"."Books" OVERRIDING SYSTEM VALUE VALUES (8, 'Fire & Blood', 3, 2, 15, 'What really happened during the Dance of the Dragons? Why was it so deadly to visit Valyria after the Doom? What were Maegor the Cruel’s worst crimes? What was it like in Westeros when dragons ruled the skies? These are but a few of the questions answered in this essential chronicle, as related by a learned maester of the Citadel and featuring more than eighty black-and-white illustrations by artist Doug Wheatley. Readers have glimpsed small parts of this narrative in such volumes as The World of Ice & Fire, but now, for the first time, the full tapestry of Targaryen history is revealed.', 0.0);
INSERT INTO "public"."Books" OVERRIDING SYSTEM VALUE VALUES (27, 'A Knight of the Seven Kingdoms', 3, 2, 34, 'Before Tyrion Lannister and Podrick Payne there was Dunk and Egg. A young, naïve but courageous hedge knight, Ser Duncan the Tall towers above his rivals — in stature if not experience. Tagging along is his diminutive squire, a boy called Egg — whose true name is hidden from all he and Dunk encounter. Improbable heroes though they be, great destinies lie ahead for Dunk and Egg; as do powerful foes, royal intrigue, and outrageous exploits.', 0.0);
INSERT INTO "public"."Books" OVERRIDING SYSTEM VALUE VALUES (1, 'Harry Potter and The Deathly Hallows', 3, 1, 1, 'The seventh and final adventure in the spellbinding Harry Potter saga – the series that changed the world of books forever As he climbs into the sidecar of Hagrid''s motorbike and takes to the skies, leaving Privet Drive for the last time, Harry Potter knows that Lord Voldemort and the Death Eaters are not far behind. The protective charm that has kept Harry safe until now is now broken, but he cannot keep hiding. The Dark Lord is breathing fear into everything Harry loves, and to stop him Harry will have to find and destroy the remaining Horcruxes. The final battle must begin – Harry must stand and face his enemy. These classic editions of J.K. Rowling''s internationally bestselling, multi-award-winning series feature thrilling jackets by Jonny Duddle, bringing Harry Potter to the next generation of young readers. It''s time to PASS THE MAGIC ON …', 4.9);
INSERT INTO "public"."Books" OVERRIDING SYSTEM VALUE VALUES (3, 'IT', 1, 3, 3, 'Several children. Little town. Great fear.
Adults will find Derry to be a homely and decent city, perfect for raising children. But it''s the children who see - and feel - what makes Derry so terribly different from other places. Only they can see "IT", hidden in the sewers, taking on various forms, straight from children''s nightmares. "IT" knows their greatest fears, but only children can fight the monster. After the disappearance of George Denbrough, the children decide to face IT. This will be their first, but not last, clash with IT, which, hidden in the recesses of memory, will turn former childhood nightmares into the terrifying reality of adults... Will you dare to reach for IT?', 4.4);

-- ----------------------------
-- Table structure for Genres
-- ----------------------------
DROP TABLE IF EXISTS "public"."Genres";
CREATE TABLE "public"."Genres" (
  "genre_id" int4 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1
),
  "name" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of Genres
-- ----------------------------
INSERT INTO "public"."Genres" OVERRIDING SYSTEM VALUE VALUES (1, 'Horror');
INSERT INTO "public"."Genres" OVERRIDING SYSTEM VALUE VALUES (3, 'Fantasy');
INSERT INTO "public"."Genres" OVERRIDING SYSTEM VALUE VALUES (4, 'Crime');
INSERT INTO "public"."Genres" OVERRIDING SYSTEM VALUE VALUES (5, 'Thriller');

-- ----------------------------
-- Table structure for Images
-- ----------------------------
DROP TABLE IF EXISTS "public"."Images";
CREATE TABLE "public"."Images" (
  "image_id" int4 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1
),
  "url" varchar(255) COLLATE "pg_catalog"."default" NOT NULL
)
;

-- ----------------------------
-- Records of Images
-- ----------------------------
INSERT INTO "public"."Images" OVERRIDING SYSTEM VALUE VALUES (1, 'HP-deathly-hallows-cover.jpg');
INSERT INTO "public"."Images" OVERRIDING SYSTEM VALUE VALUES (4, 'cover4.jpg');
INSERT INTO "public"."Images" OVERRIDING SYSTEM VALUE VALUES (7, 'harry-potter-phoenix.jpg');
INSERT INTO "public"."Images" OVERRIDING SYSTEM VALUE VALUES (15, 'fire-blood.jpg');
INSERT INTO "public"."Images" OVERRIDING SYSTEM VALUE VALUES (34, 'knight-of-the-seven-kingdoms.jpg');
INSERT INTO "public"."Images" OVERRIDING SYSTEM VALUE VALUES (2, 'cover2.jpg');
INSERT INTO "public"."Images" OVERRIDING SYSTEM VALUE VALUES (3, 'it.jpg');

-- ----------------------------
-- Table structure for Roles
-- ----------------------------
DROP TABLE IF EXISTS "public"."Roles";
CREATE TABLE "public"."Roles" (
  "role_id" int4 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1
),
  "name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "add" bool,
  "edit" bool,
  "display" bool
)
;

-- ----------------------------
-- Records of Roles
-- ----------------------------
INSERT INTO "public"."Roles" OVERRIDING SYSTEM VALUE VALUES (1, 'admin', 't', 't', 't');
INSERT INTO "public"."Roles" OVERRIDING SYSTEM VALUE VALUES (2, 'user', 'f', 'f', 't');

-- ----------------------------
-- Table structure for Sessions
-- ----------------------------
DROP TABLE IF EXISTS "public"."Sessions";
CREATE TABLE "public"."Sessions" (
  "token" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "userId" int4 NOT NULL,
  "expirationTime" date NOT NULL
)
;

-- ----------------------------
-- Records of Sessions
-- ----------------------------

-- ----------------------------
-- Table structure for Types
-- ----------------------------
DROP TABLE IF EXISTS "public"."Types";
CREATE TABLE "public"."Types" (
  "type_id" int4 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1
),
  "name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL
)
;

-- ----------------------------
-- Records of Types
-- ----------------------------
INSERT INTO "public"."Types" OVERRIDING SYSTEM VALUE VALUES (1, 'finished');
INSERT INTO "public"."Types" OVERRIDING SYSTEM VALUE VALUES (2, 'currently reading');
INSERT INTO "public"."Types" OVERRIDING SYSTEM VALUE VALUES (3, 'to read');

-- ----------------------------
-- Table structure for UserBooks
-- ----------------------------
DROP TABLE IF EXISTS "public"."UserBooks";
CREATE TABLE "public"."UserBooks" (
  "id" int4 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1
),
  "type_id" int4 NOT NULL,
  "user_id" int4 NOT NULL,
  "book_id" int4 NOT NULL,
  "rating" numeric(10,1)
)
;

-- ----------------------------
-- Records of UserBooks
-- ----------------------------
INSERT INTO "public"."UserBooks" OVERRIDING SYSTEM VALUE VALUES (23, 2, 10, 8, 0.0);
INSERT INTO "public"."UserBooks" OVERRIDING SYSTEM VALUE VALUES (24, 1, 9, 8, 5.0);
INSERT INTO "public"."UserBooks" OVERRIDING SYSTEM VALUE VALUES (25, 2, 9, 2, 0.0);
INSERT INTO "public"."UserBooks" OVERRIDING SYSTEM VALUE VALUES (26, 2, 9, 1, 0.0);
INSERT INTO "public"."UserBooks" OVERRIDING SYSTEM VALUE VALUES (8, 1, 10, 3, 3.0);
INSERT INTO "public"."UserBooks" OVERRIDING SYSTEM VALUE VALUES (13, 3, 10, 2, 0.0);
INSERT INTO "public"."UserBooks" OVERRIDING SYSTEM VALUE VALUES (14, 1, 10, 1, 4.0);

-- ----------------------------
-- Table structure for UserDetails
-- ----------------------------
DROP TABLE IF EXISTS "public"."UserDetails";
CREATE TABLE "public"."UserDetails" (
  "user_details_id" int4 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1
),
  "name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "surname" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "email" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "user_id" int4 NOT NULL
)
;

-- ----------------------------
-- Records of UserDetails
-- ----------------------------
INSERT INTO "public"."UserDetails" OVERRIDING SYSTEM VALUE VALUES (7, 'Jan', 'Kowalski', 'jan.kowalski@gmail.com', 8);
INSERT INTO "public"."UserDetails" OVERRIDING SYSTEM VALUE VALUES (8, 'Artur', 'Pajor', 'artur.pajor@student.pk.edu.pl', 9);
INSERT INTO "public"."UserDetails" OVERRIDING SYSTEM VALUE VALUES (9, 'Mateusz', 'Kowalski', 'mati.kowalski@gmail.com', 10);

-- ----------------------------
-- Table structure for Users
-- ----------------------------
DROP TABLE IF EXISTS "public"."Users";
CREATE TABLE "public"."Users" (
  "user_id" int4 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1
),
  "login" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "password" varchar(512) COLLATE "pg_catalog"."default" NOT NULL,
  "sol" varchar(512) COLLATE "pg_catalog"."default" NOT NULL,
  "role_id" int4 NOT NULL
)
;

-- ----------------------------
-- Records of Users
-- ----------------------------
INSERT INTO "public"."Users" OVERRIDING SYSTEM VALUE VALUES (8, 'jkow', '4499d7dd15470d468512277256f61c1e3ca5c66c404de969caa61f099174d227a994941b2fe83d983073b269d4bd4521bb675e3dd5386ca8847307ac29ef42d7', '94325987ae897311c1ea7a6bf9890002', 2);
INSERT INTO "public"."Users" OVERRIDING SYSTEM VALUE VALUES (9, 'artuso', '7b537c81b0f1f496b47f44f833f68b71c9cbad7ced22f68dc8e7fedcfe6435b1a4e968660c9a8d4fcf82f8b93a0e7a3fbc4060e23816c9380b7bbd811e154ea7', '3cdb120518e51f2f30ba4fe223401ae5', 1);
INSERT INTO "public"."Users" OVERRIDING SYSTEM VALUE VALUES (10, 'test', 'f373833fde069103cf93edd4a3bd22d43ee7c73bb167f07aa0f6893c71b91d9776a691627f367e70b14b899d620a47eb6c95744c42a6223f8befa1a9ae8147a2', '5265535c0abf8a123bf9b30dccd8d299', 2);

-- ----------------------------
-- Function structure for delete_image
-- ----------------------------
DROP FUNCTION IF EXISTS "public"."delete_image"();
CREATE OR REPLACE FUNCTION "public"."delete_image"()
  RETURNS "pg_catalog"."trigger" AS $BODY$
BEGIN
  DELETE FROM "Images" WHERE image_id = OLD.image_id;
  RETURN OLD;
END;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;

-- ----------------------------
-- View structure for BooksInformation
-- ----------------------------
DROP VIEW IF EXISTS "public"."BooksInformation";
CREATE VIEW "public"."BooksInformation" AS  SELECT b.title AS tytul,
    (a.name::text || ' '::text) || a.surname::text AS autor,
    g.name AS gatunek,
    b.rating AS ocena,
    b.description AS opis,
    count(ub.book_id) AS wystapienia
   FROM "Books" b
     JOIN "Authors" a ON b.author_id = a.author_id
     JOIN "Genres" g ON b.genre_id = g.genre_id
     LEFT JOIN "UserBooks" ub ON b.book_id = ub.book_id
  GROUP BY b.title, ((a.name::text || ' '::text) || a.surname::text), g.name, b.rating, b.description;

-- ----------------------------
-- View structure for TypesSummary
-- ----------------------------
DROP VIEW IF EXISTS "public"."TypesSummary";
CREATE VIEW "public"."TypesSummary" AS  SELECT t.name AS typ,
    count(ub.type_id) AS wystapienia
   FROM "Types" t
     LEFT JOIN "UserBooks" ub ON t.type_id = ub.type_id
  GROUP BY t.name;

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."Authors_author_id_seq"
OWNED BY "public"."Authors"."author_id";
SELECT setval('"public"."Authors_author_id_seq"', 1, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."Authors_author_id_seq1"
OWNED BY "public"."Authors"."author_id";
SELECT setval('"public"."Authors_author_id_seq1"', 1, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."Authors_author_id_seq2"
OWNED BY "public"."Authors"."author_id";
SELECT setval('"public"."Authors_author_id_seq2"', 8, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."Books_book_id_seq"
OWNED BY "public"."Books"."book_id";
SELECT setval('"public"."Books_book_id_seq"', 1, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."Books_book_id_seq1"
OWNED BY "public"."Books"."book_id";
SELECT setval('"public"."Books_book_id_seq1"', 1, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."Books_book_id_seq2"
OWNED BY "public"."Books"."book_id";
SELECT setval('"public"."Books_book_id_seq2"', 30, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."Genres_genre_id_seq"
OWNED BY "public"."Genres"."genre_id";
SELECT setval('"public"."Genres_genre_id_seq"', 1, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."Genres_genre_id_seq1"
OWNED BY "public"."Genres"."genre_id";
SELECT setval('"public"."Genres_genre_id_seq1"', 1, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."Genres_genre_id_seq2"
OWNED BY "public"."Genres"."genre_id";
SELECT setval('"public"."Genres_genre_id_seq2"', 6, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."Images_image_id_seq"
OWNED BY "public"."Images"."image_id";
SELECT setval('"public"."Images_image_id_seq"', 1, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."Images_image_id_seq1"
OWNED BY "public"."Images"."image_id";
SELECT setval('"public"."Images_image_id_seq1"', 1, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."Images_image_id_seq2"
OWNED BY "public"."Images"."image_id";
SELECT setval('"public"."Images_image_id_seq2"', 37, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."Roles_role_id_seq"
OWNED BY "public"."Roles"."role_id";
SELECT setval('"public"."Roles_role_id_seq"', 1, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."Roles_role_id_seq1"
OWNED BY "public"."Roles"."role_id";
SELECT setval('"public"."Roles_role_id_seq1"', 1, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."Roles_role_id_seq2"
OWNED BY "public"."Roles"."role_id";
SELECT setval('"public"."Roles_role_id_seq2"', 2, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."Types_type_id_seq"
OWNED BY "public"."Types"."type_id";
SELECT setval('"public"."Types_type_id_seq"', 1, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."Types_type_id_seq1"
OWNED BY "public"."Types"."type_id";
SELECT setval('"public"."Types_type_id_seq1"', 1, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."Types_type_id_seq2"
OWNED BY "public"."Types"."type_id";
SELECT setval('"public"."Types_type_id_seq2"', 3, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."UserBooks_id_seq"
OWNED BY "public"."UserBooks"."id";
SELECT setval('"public"."UserBooks_id_seq"', 1, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."UserBooks_id_seq1"
OWNED BY "public"."UserBooks"."id";
SELECT setval('"public"."UserBooks_id_seq1"', 1, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."UserBooks_id_seq2"
OWNED BY "public"."UserBooks"."id";
SELECT setval('"public"."UserBooks_id_seq2"', 26, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."UserDetails_user_details_id_seq"
OWNED BY "public"."UserDetails"."user_details_id";
SELECT setval('"public"."UserDetails_user_details_id_seq"', 1, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."UserDetails_user_details_id_seq1"
OWNED BY "public"."UserDetails"."user_details_id";
SELECT setval('"public"."UserDetails_user_details_id_seq1"', 10, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."Users_user_id_seq"
OWNED BY "public"."Users"."user_id";
SELECT setval('"public"."Users_user_id_seq"', 1, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."Users_user_id_seq1"
OWNED BY "public"."Users"."user_id";
SELECT setval('"public"."Users_user_id_seq1"', 2, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."Users_user_id_seq2"
OWNED BY "public"."Users"."user_id";
SELECT setval('"public"."Users_user_id_seq2"', 11, true);

-- ----------------------------
-- Auto increment value for Authors
-- ----------------------------
SELECT setval('"public"."Authors_author_id_seq2"', 8, true);

-- ----------------------------
-- Primary Key structure for table Authors
-- ----------------------------
ALTER TABLE "public"."Authors" ADD CONSTRAINT "Authors_pkey" PRIMARY KEY ("author_id");

-- ----------------------------
-- Auto increment value for Books
-- ----------------------------
SELECT setval('"public"."Books_book_id_seq2"', 30, true);

-- ----------------------------
-- Triggers structure for table Books
-- ----------------------------
CREATE TRIGGER "trigger_delete_image_after_book" AFTER DELETE ON "public"."Books"
FOR EACH ROW
EXECUTE PROCEDURE "public"."delete_image"();

-- ----------------------------
-- Primary Key structure for table Books
-- ----------------------------
ALTER TABLE "public"."Books" ADD CONSTRAINT "Books_pkey" PRIMARY KEY ("book_id");

-- ----------------------------
-- Auto increment value for Genres
-- ----------------------------
SELECT setval('"public"."Genres_genre_id_seq2"', 6, true);

-- ----------------------------
-- Uniques structure for table Genres
-- ----------------------------
ALTER TABLE "public"."Genres" ADD CONSTRAINT "unique_genre_name" UNIQUE ("name");

-- ----------------------------
-- Primary Key structure for table Genres
-- ----------------------------
ALTER TABLE "public"."Genres" ADD CONSTRAINT "Genres_pkey" PRIMARY KEY ("genre_id");

-- ----------------------------
-- Auto increment value for Images
-- ----------------------------
SELECT setval('"public"."Images_image_id_seq2"', 37, true);

-- ----------------------------
-- Primary Key structure for table Images
-- ----------------------------
ALTER TABLE "public"."Images" ADD CONSTRAINT "Images_pkey" PRIMARY KEY ("image_id");

-- ----------------------------
-- Auto increment value for Roles
-- ----------------------------
SELECT setval('"public"."Roles_role_id_seq2"', 2, true);

-- ----------------------------
-- Uniques structure for table Roles
-- ----------------------------
ALTER TABLE "public"."Roles" ADD CONSTRAINT "unique_role_name" UNIQUE ("name");

-- ----------------------------
-- Primary Key structure for table Roles
-- ----------------------------
ALTER TABLE "public"."Roles" ADD CONSTRAINT "Roles_pkey" PRIMARY KEY ("role_id");

-- ----------------------------
-- Primary Key structure for table Sessions
-- ----------------------------
ALTER TABLE "public"."Sessions" ADD CONSTRAINT "Sessions_pkey" PRIMARY KEY ("token");

-- ----------------------------
-- Auto increment value for Types
-- ----------------------------
SELECT setval('"public"."Types_type_id_seq2"', 3, true);

-- ----------------------------
-- Uniques structure for table Types
-- ----------------------------
ALTER TABLE "public"."Types" ADD CONSTRAINT "unique_type_name" UNIQUE ("name");

-- ----------------------------
-- Primary Key structure for table Types
-- ----------------------------
ALTER TABLE "public"."Types" ADD CONSTRAINT "Types_pkey" PRIMARY KEY ("type_id");

-- ----------------------------
-- Auto increment value for UserBooks
-- ----------------------------
SELECT setval('"public"."UserBooks_id_seq2"', 26, true);

-- ----------------------------
-- Primary Key structure for table UserBooks
-- ----------------------------
ALTER TABLE "public"."UserBooks" ADD CONSTRAINT "UserBooks_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Auto increment value for UserDetails
-- ----------------------------
SELECT setval('"public"."UserDetails_user_details_id_seq1"', 10, true);

-- ----------------------------
-- Uniques structure for table UserDetails
-- ----------------------------
ALTER TABLE "public"."UserDetails" ADD CONSTRAINT "UserDetails_user_id_key" UNIQUE ("user_id");
ALTER TABLE "public"."UserDetails" ADD CONSTRAINT "UserDetails_email_key" UNIQUE ("email");

-- ----------------------------
-- Primary Key structure for table UserDetails
-- ----------------------------
ALTER TABLE "public"."UserDetails" ADD CONSTRAINT "UserDetails_pkey" PRIMARY KEY ("user_details_id");

-- ----------------------------
-- Auto increment value for Users
-- ----------------------------
SELECT setval('"public"."Users_user_id_seq2"', 11, true);

-- ----------------------------
-- Uniques structure for table Users
-- ----------------------------
ALTER TABLE "public"."Users" ADD CONSTRAINT "unique_login" UNIQUE ("login");

-- ----------------------------
-- Primary Key structure for table Users
-- ----------------------------
ALTER TABLE "public"."Users" ADD CONSTRAINT "Users_pkey" PRIMARY KEY ("user_id");

-- ----------------------------
-- Foreign Keys structure for table Books
-- ----------------------------
ALTER TABLE "public"."Books" ADD CONSTRAINT "fk_book_author" FOREIGN KEY ("author_id") REFERENCES "public"."Authors" ("author_id") ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE "public"."Books" ADD CONSTRAINT "fk_book_genre" FOREIGN KEY ("genre_id") REFERENCES "public"."Genres" ("genre_id") ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE "public"."Books" ADD CONSTRAINT "fk_book_image" FOREIGN KEY ("image_id") REFERENCES "public"."Images" ("image_id") ON DELETE CASCADE ON UPDATE RESTRICT;

-- ----------------------------
-- Foreign Keys structure for table Sessions
-- ----------------------------
ALTER TABLE "public"."Sessions" ADD CONSTRAINT "Sessions_user_id_fkey" FOREIGN KEY ("userId") REFERENCES "public"."Users" ("user_id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table UserBooks
-- ----------------------------
ALTER TABLE "public"."UserBooks" ADD CONSTRAINT "fk_userBooks_books" FOREIGN KEY ("book_id") REFERENCES "public"."Books" ("book_id") ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE "public"."UserBooks" ADD CONSTRAINT "fk_userBooks_types" FOREIGN KEY ("type_id") REFERENCES "public"."Types" ("type_id") ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE "public"."UserBooks" ADD CONSTRAINT "fk_userBooks_user" FOREIGN KEY ("user_id") REFERENCES "public"."Users" ("user_id") ON DELETE RESTRICT ON UPDATE RESTRICT;

-- ----------------------------
-- Foreign Keys structure for table UserDetails
-- ----------------------------
ALTER TABLE "public"."UserDetails" ADD CONSTRAINT "UserDetails_user_id_fkey" FOREIGN KEY ("user_id") REFERENCES "public"."Users" ("user_id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table Users
-- ----------------------------
ALTER TABLE "public"."Users" ADD CONSTRAINT "fk1" FOREIGN KEY ("role_id") REFERENCES "public"."Roles" ("role_id") ON DELETE RESTRICT ON UPDATE RESTRICT;
