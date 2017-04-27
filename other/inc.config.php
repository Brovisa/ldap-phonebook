<?php
	define("DB_HOST", "localhost");
	define("DB_USER", "root");
	define("DB_PASSWD", "");
	define("DB_NAME", "pb");
	define("DB_CPAGE", "utf8");

	define("LDAP_HOST", "dc-01");
	define("LDAP_PORT", 389);
	define("LDAP_USER", "domain\\login");
	define("LDAP_PASSWD", "password");
	define("LDAP_BASE_DN", "DC=domain,DC=local");
	define("LDAP_FILTER", "(&(objectClass=person)(objectClass=user)(sAMAccountType=805306368)(!(userAccountControl:1.2.840.113556.1.4.803:=2)))");
	define("LDAP_ATTRS", "samaccountname,ou,sn,givenname,mail,department,company,title,telephonenumber,mobile,thumbnailphoto");

	define("MAIL_HOST", "smtp.example.com");
	define("MAIL_FROM", "admin@example.com");
	define("MAIL_FROM_NAME", "Robot");
	define("MAIL_ADMIN", "admin@example.com");
	define("MAIL_ADMIN_NAME", "Admin");
	define("MAIL_AUTH", true);
	define("MAIL_LOGIN", "robot@example.com");
	define("MAIL_PASSWD", "smtp-password-here");
	define("MAIL_SECURE", "tls");
	define("MAIL_PORT", 587);

	define("ALLOW_MAILS", '^.+@.+$');
	
	define("PB_MAPS_COUNT", 5);
