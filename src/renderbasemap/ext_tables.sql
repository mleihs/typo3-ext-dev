CREATE TABLE tx_renderbasemap_domain_model_map (
    markers MEDIUMTEXT,

    title VARCHAR(255) DEFAULT '' NOT NULL,
    slug VARCHAR(255) DEFAULT '' NOT NULL,

    lat VARCHAR(255) DEFAULT '' NOT NULL,
    lon VARCHAR(255) DEFAULT '' NOT NULL,
    zoom INT(11) DEFAULT 1 NOT NULL,

    width INT(11) DEFAULT 0 NOT NULL,
    height INT(11) DEFAULT 0 NOT NULL,
);

CREATE TABLE tx_renderbasemap_domain_model_marker (
    lat VARCHAR(255) DEFAULT '' NOT NULL,
    lon VARCHAR(255) DEFAULT '' NOT NULL,
    title VARCHAR(255) DEFAULT '' NOT NULL,
    description MEDIUMTEXT,
);