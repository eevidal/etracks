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

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: budget; Type: TABLE; Schema: public; Owner: etracks; Tablespace: 
--

CREATE TABLE budget (
    id integer NOT NULL,
    id_order integer NOT NULL,
    id_report integer NOT NULL,
    id_user integer NOT NULL,
    date date,
    budget character varying
);


ALTER TABLE public.budget OWNER TO etracks;

--
-- Name: budget_id_seq; Type: SEQUENCE; Schema: public; Owner: etracks
--

CREATE SEQUENCE budget_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.budget_id_seq OWNER TO etracks;

--
-- Name: budget_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: etracks
--

ALTER SEQUENCE budget_id_seq OWNED BY budget.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: etracks
--

ALTER TABLE ONLY budget ALTER COLUMN id SET DEFAULT nextval('budget_id_seq'::regclass);


--
-- Data for Name: budget; Type: TABLE DATA; Schema: public; Owner: etracks
--

INSERT INTO budget VALUES (13, 1355, 30, 5, '2014-07-16', 'test');
INSERT INTO budget VALUES (14, 1356, 32, 5, '2014-07-16', 'ok');
INSERT INTO budget VALUES (15, 1362, 33, 5, '2014-07-16', 'aaa');


--
-- Name: budget_id_seq; Type: SEQUENCE SET; Schema: public; Owner: etracks
--

SELECT pg_catalog.setval('budget_id_seq', 15, true);


--
-- Name: budget_id_order_key; Type: CONSTRAINT; Schema: public; Owner: etracks; Tablespace: 
--

ALTER TABLE ONLY budget
    ADD CONSTRAINT budget_id_order_key UNIQUE (id_order);


--
-- Name: budget_pkey; Type: CONSTRAINT; Schema: public; Owner: etracks; Tablespace: 
--

ALTER TABLE ONLY budget
    ADD CONSTRAINT budget_pkey PRIMARY KEY (id);


--
-- Name: budget_id_order_fkey; Type: FK CONSTRAINT; Schema: public; Owner: etracks
--

ALTER TABLE ONLY budget
    ADD CONSTRAINT budget_id_order_fkey FOREIGN KEY (id_order) REFERENCES "order"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: budget_id_report_fkey; Type: FK CONSTRAINT; Schema: public; Owner: etracks
--

ALTER TABLE ONLY budget
    ADD CONSTRAINT budget_id_report_fkey FOREIGN KEY (id_report) REFERENCES report(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- PostgreSQL database dump complete
--

