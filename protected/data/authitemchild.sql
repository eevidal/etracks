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
-- Name: authitemchild; Type: TABLE; Schema: public; Owner: etracks; Tablespace: 
--

CREATE TABLE authitemchild (
    parent character varying(64) NOT NULL,
    child character varying(64) NOT NULL
);


ALTER TABLE public.authitemchild OWNER TO etracks;

--
-- Data for Name: authitemchild; Type: TABLE DATA; Schema: public; Owner: etracks
--

INSERT INTO authitemchild VALUES ('Authenticated', 'Order.Index');
INSERT INTO authitemchild VALUES ('Authenticated', 'Order.Update');
INSERT INTO authitemchild VALUES ('Authenticated', 'Order.History');
INSERT INTO authitemchild VALUES ('Authenticated', 'Order.Create');
INSERT INTO authitemchild VALUES ('Authenticated', 'Client.View');
INSERT INTO authitemchild VALUES ('Authenticated', 'Client.Index');
INSERT INTO authitemchild VALUES ('Authenticated', 'Client.Create');
INSERT INTO authitemchild VALUES ('Authenticated', 'Client.Admin');
INSERT INTO authitemchild VALUES ('Authenticated', 'Equipment.Index');
INSERT INTO authitemchild VALUES ('Authenticated', 'Client.Update');
INSERT INTO authitemchild VALUES ('business', 'Authenticated');
INSERT INTO authitemchild VALUES ('Authenticated', 'Order.View');
INSERT INTO authitemchild VALUES ('Authenticated', 'Report.TOrderView');
INSERT INTO authitemchild VALUES ('Authenticated', 'Report.OrderView');
INSERT INTO authitemchild VALUES ('Authenticated', 'Equipment.Create');
INSERT INTO authitemchild VALUES ('Authenticated', 'Equipment.View');
INSERT INTO authitemchild VALUES ('Authenticated', 'Report.View');
INSERT INTO authitemchild VALUES ('Authenticated', 'Part.View');
INSERT INTO authitemchild VALUES ('Authenticated', 'Part.Admin');
INSERT INTO authitemchild VALUES ('Authenticated', 'Order.Admin');
INSERT INTO authitemchild VALUES ('Technician', 'Authenticated');
INSERT INTO authitemchild VALUES ('Technician', 'Report.Create');
INSERT INTO authitemchild VALUES ('Technician', 'Order.Change');
INSERT INTO authitemchild VALUES ('Technician', 'ReportPart.*');
INSERT INTO authitemchild VALUES ('Technician', 'Part.*');
INSERT INTO authitemchild VALUES ('Management', 'business');
INSERT INTO authitemchild VALUES ('Technician', 'Report.Update');
INSERT INTO authitemchild VALUES ('Authenticated', 'Order.Pdf');
INSERT INTO authitemchild VALUES ('Authenticated', 'Order.EquipmentAutocomplete');
INSERT INTO authitemchild VALUES ('Authenticated', 'Order.ClientLists');
INSERT INTO authitemchild VALUES ('Authenticated', 'Order.ClientAutocomplete');
INSERT INTO authitemchild VALUES ('business', 'Order.Change');
INSERT INTO authitemchild VALUES ('Authenticated', 'Order.Change');
INSERT INTO authitemchild VALUES ('Management', 'Tracker.OrderView');
INSERT INTO authitemchild VALUES ('business', 'Budget.*');


--
-- Name: authitemchild_pkey; Type: CONSTRAINT; Schema: public; Owner: etracks; Tablespace: 
--

ALTER TABLE ONLY authitemchild
    ADD CONSTRAINT authitemchild_pkey PRIMARY KEY (parent, child);


--
-- Name: authitemchild_child_fkey; Type: FK CONSTRAINT; Schema: public; Owner: etracks
--

ALTER TABLE ONLY authitemchild
    ADD CONSTRAINT authitemchild_child_fkey FOREIGN KEY (child) REFERENCES authitem(name) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: authitemchild_parent_fkey; Type: FK CONSTRAINT; Schema: public; Owner: etracks
--

ALTER TABLE ONLY authitemchild
    ADD CONSTRAINT authitemchild_parent_fkey FOREIGN KEY (parent) REFERENCES authitem(name) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- PostgreSQL database dump complete
--

