CREATE TABLE tx_gjoexdatatypes_domain_model_datatype (
  uid int(11) NOT NULL auto_increment,
  pid int(11) NOT NULL DEFAULT '0',

  PRIMARY KEY (uid),
  KEY parent (pid),
);