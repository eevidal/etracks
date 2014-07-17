--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

SET search_path = public, pg_catalog;

--
-- Data for Name: status; Type: TABLE DATA; Schema: public; Owner: etracks
--

INSERT INTO status VALUES (3, 'presupuestar');
INSERT INTO status VALUES (4, 'presupuestado');
INSERT INTO status VALUES (5, 'autorizado');
INSERT INTO status VALUES (7, 'listo');
INSERT INTO status VALUES (8, 'entregado');
INSERT INTO status VALUES (2, 'nuevo ingreso');
INSERT INTO status VALUES (9, 'revisando');
INSERT INTO status VALUES (11, 'aceptado con cambios');
INSERT INTO status VALUES (10, 'esperando repuestos');
INSERT INTO status VALUES (6, 'no autorizado');
INSERT INTO status VALUES (12, 'devuelto');
INSERT INTO status VALUES (13, 'reparando');


--
-- Name: status_id_seq; Type: SEQUENCE SET; Schema: public; Owner: etracks
--

SELECT pg_catalog.setval('status_id_seq', 13, true);


--
-- PostgreSQL database dump complete
--

