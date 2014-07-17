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
-- Name: authitem; Type: TABLE; Schema: public; Owner: etracks; Tablespace: 
--

CREATE TABLE authitem (
    name character varying(64) NOT NULL,
    type integer NOT NULL,
    description text,
    bizrule text,
    data text
);


ALTER TABLE public.authitem OWNER TO etracks;

--
-- Data for Name: authitem; Type: TABLE DATA; Schema: public; Owner: etracks
--

INSERT INTO authitem VALUES ('Admin', 2, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Guest', 2, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Technician', 2, 'Técnico', NULL, 'N;');
INSERT INTO authitem VALUES ('Management', 2, 'Gerencia', NULL, 'N;');
INSERT INTO authitem VALUES ('business', 2, 'Administración / Facturación / Presupuestos', NULL, 'N;');
INSERT INTO authitem VALUES ('Budget.*', 1, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Client.*', 1, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Equipment.*', 1, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Order.*', 1, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Report.*', 1, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Tracker.*', 1, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Budget.View', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Budget.Create', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Budget.Update', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Budget.Index', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Budget.Admin', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Client.View', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Client.Create', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Client.Update', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Client.Delete', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Client.Index', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Client.Admin', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Equipment.View', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Equipment.Create', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Equipment.Update', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Equipment.Delete', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Equipment.Index', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Equipment.Admin', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Order.View', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Order.Create', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Order.Update', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Order.Change', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Order.Index', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Order.History', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Order.Admin', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Report.View', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Report.OrderView', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Report.TOrderView', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Report.Create', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Report.Update', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Report.Index', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Report.Admin', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Tracker.View', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Tracker.Create', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Tracker.Update', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Tracker.Index', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Tracker.Admin', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Site.*', 1, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.Activation.*', 1, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.Admin.*', 1, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.Default.*', 1, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.Login.*', 1, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.Logout.*', 1, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.Profile.*', 1, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.ProfileField.*', 1, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.User.*', 1, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.Activation.Activation', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.Admin.Admin', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.Admin.View', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.Admin.Create', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.Admin.Update', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.Admin.Delete', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.Default.Index', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.Login.Login', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.Logout.Logout', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.Profile.Profile', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.Profile.Edit', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.Profile.Changepassword', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.ProfileField.View', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.ProfileField.Create', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.ProfileField.Update', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.ProfileField.Delete', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.ProfileField.Admin', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.User.View', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('User.User.Index', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Part.*', 1, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('ReportPart.*', 1, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Part.View', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Part.Create', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Part.Update', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Part.Index', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Part.Admin', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('ReportPart.View', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('ReportPart.Create', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('ReportPart.MultipleCreate', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('ReportPart.Update', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('ReportPart.Index', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('ReportPart.Admin', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Order.ClientLists', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Order.ClientAutocomplete', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Order.EquipmentAutocomplete', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Order.Pdf', 0, NULL, NULL, 'N;');
INSERT INTO authitem VALUES ('Authenticated', 2, 'Todos los usuarios', NULL, 'N;');
INSERT INTO authitem VALUES ('Tracker.OrderView', 0, NULL, NULL, 'N;');


--
-- Name: authitem_pkey; Type: CONSTRAINT; Schema: public; Owner: etracks; Tablespace: 
--

ALTER TABLE ONLY authitem
    ADD CONSTRAINT authitem_pkey PRIMARY KEY (name);


--
-- PostgreSQL database dump complete
--

