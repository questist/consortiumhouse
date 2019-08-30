John Scott is a Hip Hop Artist from Oakland, CA
He is in the process of releasing his first album and has played many shows at small venues in the area.
The site was supposed to create a seamless music listening experience to introduce people to his music by allowing browsing the site while listening to the short playlist.
Because I had envisioned the site growing with his music I included a section for a music video and events page since live shows are important for the Hip Hop Scene.
The dashboard was implemented in CouchCMS which provided most of the functionality, I just had to create the logic and schema for the information to be entered. So the code for the events might be useful to other designers using CouchCMS.

Currently, the site is not live but I would like to update the design to be responsive as it currently only focuses on desktop.

Copyright 2014

Installation:
1) Create New Database with MySQL
2) Edit Couch/config.example.php with your database details and rename to config.php
3) go to index.php and enter login information for CouchCMS Super Admin
4) go to index.php one more time, couch will automatically create database tables and fields for the events
5) go to the dashboard at root/couch/ and enter your first event to see it propogated to the front end