CREATE TABLE tx_gjoexdatatypes_domain_model_datatype (
  uid int(11) NOT NULL auto_increment,
  pid int(11) NOT NULL DEFAULT '0',

  string_without_break varchar(30) NOT NULL DEFAULT '',
  string_with_break text NOT NULL,



  PRIMARY KEY (uid),
  KEY parent (pid),
);